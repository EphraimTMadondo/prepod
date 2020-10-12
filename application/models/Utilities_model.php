<?php

defined('BASEPATH') or exit('No direct script access allowed');

class Utilities_model extends App_Model
{
    public function __construct()
    {
        parent::__construct();
    }

    /**
     * Add new event
     * @param array $data event $_POST data
     */
    public function event($data)
    {
<<<<<<< HEAD
       
=======
>>>>>>> d71d750e00250050260fb71bf92c645d4ca43ed1
         //blank_page(_l('project_not_found'));
        $data['userid'] = get_staff_user_id();
        $data['start']  = to_sql_date($data['start'], true);
        if ($data['end'] == '') {
            unset($data['end']);
        } else {
            $data['end'] = to_sql_date($data['end'], true);
        }
        if (isset($data['public'])) {
            $data['public'] = 1;
        } else {
            $data['public'] = 0;
        }
        $data['description'] = nl2br($data['description']);
        if (isset($data['eventid'])) {
            unset($data['userid']);
            $this->db->where('eventid', $data['eventid']);
            $event = $this->db->get(db_prefix() . 'events')->row();
            if (!$event) {
                return false;
            }
            if ($event->isstartnotified == 1) {
                if ($data['start'] > $event->start) {
                    $data['isstartnotified'] = 0;
                }
            }

            $data = hooks()->apply_filters('event_update_data', $data, $data['eventid']);

            $this->db->where('eventid', $data['eventid']);
            $this->db->update(db_prefix() . 'events', $data);
            if ($this->db->affected_rows() > 0) {
                return true;
            }

            return false;
        }
        
        
           
<<<<<<< HEAD
            $data['company_username'] =  $_SESSION['current_company'];
          
            print_r($data);
=======
            // $data['company_username'] =  $_SESSION['current_company'];
          
            
>>>>>>> d71d750e00250050260fb71bf92c645d4ca43ed1

        $data = hooks()->apply_filters('event_create_data', $data);
       
           $this->db->insert(db_prefix() . 'events', $data);
       
        $insert_id = $this->db->insert_id();

        if ($insert_id) {
            return true;
        }

        return false;
    }

    /**
     * Get event by passed id
     * @param  mixed $id eventid
     * @return object
     */
    public function get_event_by_id($id)
    {
        $this->db->where('eventid', $id);

        return $this->db->get(db_prefix() . 'events')->row();
    }

    /**
     * Get all user events
     * @return array
     */
    public function get_all_events($start, $end)
    {
        $is_staff_member = is_staff_member();
        $this->db->select('title,start,end,eventid,userid,color,public');
        // Check if is passed start and end date
        $this->db->where('(start BETWEEN "' . $start . '" AND "' . $end . '")');
        $this->db->where('userid', get_staff_user_id());
        if ($is_staff_member) {
            $this->db->or_where('public', 1);
        }
<<<<<<< HEAD
       
         $companyusername = $_SESSION['current_company'];
=======
 $companyusername = $_SESSION['current_company'];
>>>>>>> d71d750e00250050260fb71bf92c645d4ca43ed1
         $this->db->where('company_username', $companyusername);
       return $this->db->get(db_prefix() . 'events')->result_array();
    }

    public function get_event($id)
    {
        $this->db->where('eventid', $id);

        return $this->db->get(db_prefix() . 'events')->row();
    }

    public function get_calendar_data($start, $end, $client_id = '', $contact_id = '', $filters = false)
    {
        $start      = $this->db->escape_str($start);
        $end        = $this->db->escape_str($end);
        $client_id  = $this->db->escape_str($client_id);
        $contact_id = $this->db->escape_str($contact_id);
     
<<<<<<< HEAD
        
=======
>>>>>>> d71d750e00250050260fb71bf92c645d4ca43ed1
        $companyusername = $_SESSION['current_company'];
        $is_admin                     = is_admin();
        $has_permission_tasks_view    = has_permission('tasks', '', 'view');
        $has_permission_projects_view = has_permission('projects', '', 'view');
        $has_permission_invoices      = has_permission('invoices', '', 'view');
        $has_permission_invoices_own  = has_permission('invoices', '', 'view_own');
        $has_permission_estimates     = has_permission('estimates', '', 'view');
        $has_permission_estimates_own = has_permission('estimates', '', 'view_own');
        $has_permission_contracts     = has_permission('contracts', '', 'view');
        $has_permission_contracts_own = has_permission('contracts', '', 'view_own');
        $has_permission_proposals     = has_permission('proposals', '', 'view');
        $has_permission_proposals_own = has_permission('proposals', '', 'view_own');
        $data                         = [];

        $client_data = false;
        if (is_numeric($client_id) && is_numeric($contact_id)) {
            $client_data                      = true;
            $has_contact_permission_invoices  = has_contact_permission('invoices', $contact_id);
            $has_contact_permission_estimates = has_contact_permission('estimates', $contact_id);
            $has_contact_permission_proposals = has_contact_permission('proposals', $contact_id);
            $has_contact_permission_contracts = has_contact_permission('contracts', $contact_id);
            $has_contact_permission_projects  = has_contact_permission('projects', $contact_id);
        }

        $hook = [
            'client_data' => $client_data,
        ];
        if ($client_data == true) {
            $hook['client_id']  = $client_id;
            $hook['contact_id'] = $contact_id;
        }

        $data = hooks()->apply_filters('before_fetch_events', $data, $hook);

        $ff = false;
        if ($filters) {
            // excluded calendar_filters from post
            $ff = (count($filters) > 1 && isset($filters['calendar_filters']) ? true : false);
        }

        if (get_option('show_invoices_on_calendar') == 1 && !$ff || $ff && array_key_exists('invoices', $filters)) {
            $noPermissionsQuery = get_invoices_where_sql_for_staff(get_staff_user_id());

            $this->db->select('duedate as date,number,id,clientid,hash,' . get_sql_select_client_company());
            $this->db->from(db_prefix() . 'invoices');
            $this->db->where(db_prefix() .'invoices.company_username', $companyusername);
            $this->db->join(db_prefix() . 'clients', db_prefix() . 'clients.userid=' . db_prefix() . 'invoices.clientid', 'left');
            $this->db->where_not_in('status', [
                2,
                5,
            ]);

            $this->db->where('(duedate BETWEEN "' . $start . '" AND "' . $end . '")');

            if ($client_data) {
                $this->db->where('clientid', $client_id);

                if (get_option('exclude_invoice_from_client_area_with_draft_status') == 1) {
                    $this->db->where('status !=', 6);
                }
            } else {
                if (!$has_permission_invoices) {
                    $this->db->where($noPermissionsQuery);
                }
            }
            $invoices = $this->db->get()->result_array();
            foreach ($invoices as $invoice) {
                if (($client_data && !$has_contact_permission_invoices) || (!$client_data && !user_can_view_invoice($invoice['id']))) {
                    continue;
                }

                $rel_showcase = '';

                /**
                 * Show company name on calendar tooltip for admins
                 */
                if (!$client_data) {
                    $rel_showcase = ' (' . $invoice['company'] . ')';
                }

                $number = format_invoice_number($invoice['id']);

                $invoice['_tooltip'] = _l('calendar_invoice') . ' - ' . $number . $rel_showcase;
                $invoice['title']    = $number;
                $invoice['color']    = get_option('calendar_invoice_color');

                if (!$client_data) {
                    $invoice['url'] = admin_url('invoices/list_invoices/' . $invoice['id']);
                } else {
                    $invoice['url'] = site_url('invoice/' . $invoice['id'] . '/' . $invoice['hash']);
                }

                array_push($data, $invoice);
            }
        }
        if (get_option('show_estimates_on_calendar') == 1 && !$ff || $ff && array_key_exists('estimates', $filters)) {
            $noPermissionsQuery = get_estimates_where_sql_for_staff(get_staff_user_id());

            $this->db->select('number,id,clientid,hash,CASE WHEN expirydate IS NULL THEN date ELSE expirydate END as date,' . get_sql_select_client_company(), false);
            $this->db->from(db_prefix() . 'estimates');
            $this->db->join(db_prefix() . 'clients', db_prefix() . 'clients.userid=' . db_prefix() . 'estimates.clientid', 'left');
            $this->db->where(db_prefix() .'estimates.company_username', $companyusername);
            $this->db->where('status !=', 3, false);
            $this->db->where('status !=', 4, false);
            // $this->db->where('expirydate IS NOT NULL');

            $this->db->where("CASE WHEN expirydate IS NULL THEN (date BETWEEN '$start' AND '$end') ELSE (expirydate BETWEEN '$start' AND '$end') END", null, false);

            if ($client_data) {
                $this->db->where('clientid', $client_id, false);

                if (get_option('exclude_estimate_from_client_area_with_draft_status') == 1) {
                    $this->db->where('status !=', 1, false);
                }
            } else {
                if (!$has_permission_estimates) {
                    $this->db->where($noPermissionsQuery);
                }
            }

            $estimates = $this->db->get()->result_array();

            foreach ($estimates as $estimate) {
                if (($client_data && !$has_contact_permission_estimates) || (!$client_data && !user_can_view_estimate($estimate['id']))) {
                    continue;
                }

                $rel_showcase = '';
                if (!$client_data) {
                    $rel_showcase = ' (' . $estimate['company'] . ')';
                }

                $number               = format_estimate_number($estimate['id']);
                $estimate['_tooltip'] = _l('calendar_estimate') . ' - ' . $number . $rel_showcase;
                $estimate['title']    = $number;
                $estimate['color']    = get_option('calendar_estimate_color');
                if (!$client_data) {
                    $estimate['url'] = admin_url('estimates/list_estimates/' . $estimate['id']);
                } else {
                    $estimate['url'] = site_url('estimate/' . $estimate['id'] . '/' . $estimate['hash']);
                }
                array_push($data, $estimate);
            }
        }
        if (get_option('show_proposals_on_calendar') == 1 && !$ff || $ff && array_key_exists('proposals', $filters)) {
            $noPermissionsQuery = get_proposals_sql_where_staff(get_staff_user_id());

            $this->db->select('subject,id,hash,CASE WHEN open_till IS NULL THEN date ELSE open_till END as date', false);
            $this->db->from(db_prefix() . 'proposals');
            $this->db->where(db_prefix() .'proposals.company_username', $companyusername);
            $this->db->where('status !=', 2, false);
            $this->db->where('status !=', 3, false);


            $this->db->where("CASE WHEN open_till IS NULL THEN (date BETWEEN '$start' AND '$end') ELSE (open_till BETWEEN '$start' AND '$end') END", null, false);

            if ($client_data) {
                $this->db->where('rel_type', 'customer');
                $this->db->where('rel_id', $client_id, false);

                if (get_option('exclude_proposal_from_client_area_with_draft_status')) {
                    $this->db->where('status !=', 6, false);
                }
            } else {
                if (!$has_permission_proposals) {
                    $this->db->where($noPermissionsQuery);
                }
            }

            $proposals = $this->db->get()->result_array();
            foreach ($proposals as $proposal) {
                if (($client_data && !$has_contact_permission_proposals) || (!$client_data && !user_can_view_proposal($proposal['id']))) {
                    continue;
                }

                $proposal['_tooltip'] = _l('proposal');
                $proposal['title']    = $proposal['subject'];
                $proposal['color']    = get_option('calendar_proposal_color');
                if (!$client_data) {
                    $proposal['url'] = admin_url('proposals/list_proposals/' . $proposal['id']);
                } else {
                    $proposal['url'] = site_url('proposal/' . $proposal['id'] . '/' . $proposal['hash']);
                }
                array_push($data, $proposal);
            }
        }

        if (get_option('show_tasks_on_calendar') == 1 && !$ff || $ff && array_key_exists('tasks', $filters)) {
            if ($client_data && !$has_contact_permission_projects) {
            } else {
                $this->db->select(db_prefix() . 'tasks.name as title,id,' . tasks_rel_name_select_query() . ' as rel_name,rel_id,status,CASE WHEN duedate IS NULL THEN startdate ELSE duedate END as date', false);
                $this->db->from(db_prefix() . 'tasks');
                $this->db->where(db_prefix() .'tasks.company_username', $companyusername);

                $this->db->where('status !=', 5);

                $this->db->where("CASE WHEN duedate IS NULL THEN (startdate BETWEEN '$start' AND '$end') ELSE (duedate BETWEEN '$start' AND '$end') END", null, false);

                if ($client_data) {
                    $this->db->where('rel_type', 'project');
                    $this->db->where('rel_id IN (SELECT id FROM ' . db_prefix() . 'projects WHERE clientid=' . $client_id . ')');
                    $this->db->where('rel_id IN (SELECT project_id FROM ' . db_prefix() . 'project_settings WHERE name="view_tasks" AND value=1)');
                    $this->db->where('visible_to_client', 1);
                }

<<<<<<< HEAD
                //removed get_option('calendar_only_assigned_tasks') == '1')
                if ((!$has_permission_tasks_view) && !$client_data) {
=======
                if ((!$has_permission_tasks_view || get_option('calendar_only_assigned_tasks') == '1') && !$client_data) {
>>>>>>> d71d750e00250050260fb71bf92c645d4ca43ed1
                    $this->db->where('(id IN (SELECT taskid FROM ' . db_prefix() . 'task_assigned WHERE staffid = ' . get_staff_user_id() . '))');
                }

                $tasks = $this->db->get()->result_array();

                foreach ($tasks as $task) {
                    $rel_showcase = '';

                    if (!empty($task['rel_id']) && !$client_data) {
                        $rel_showcase = ' (' . $task['rel_name'] . ')';
                    }

                    $task['date'] = $task['date'];

                    $name             = mb_substr($task['title'], 0, 60) . '...';
                    $task['_tooltip'] = _l('calendar_task') . ' - ' . $name . $rel_showcase;
                    $task['title']    = $name;
                    $status           = get_task_status_by_id($task['status']);
                    $task['color']    = $status['color'];

                    if (!$client_data) {
                        $task['onclick'] = 'init_task_modal(' . $task['id'] . '); return false';
                        $task['url']     = '#';
                    } else {
                        $task['url'] = site_url('clients/project/' . $task['rel_id'] . '?group=project_tasks&taskid=' . $task['id']);
                    }
                    array_push($data, $task);
                }
            }
        }

        if (!$client_data) {
            $available_reminders   = $this->app->get_available_reminders_keys();
            $hideNotifiedReminders = get_option('hide_notified_reminders_from_calendar');
            foreach ($available_reminders as $key) {
                if (get_option('show_' . $key . '_reminders_on_calendar') == 1 && !$ff || $ff && array_key_exists($key . '_reminders', $filters)) {
                    $this->db->select('date,description,firstname,lastname,creator,staff,rel_id')
                    ->from(db_prefix() . 'reminders')
                    ->where('(date BETWEEN "' . $start . '" AND "' . $end . '")')
                    ->where('rel_type', $key)
                    ->join(db_prefix() . 'staff', db_prefix() . 'staff.staffid = ' . db_prefix() . 'reminders.staff');
                    if ($hideNotifiedReminders == '1') {
                        $this->db->where('isnotified', 0);
                    }
                    $reminders = $this->db->get()->result_array();
                    foreach ($reminders as $reminder) {
                        if ((get_staff_user_id() == $reminder['creator'] || get_staff_user_id() == $reminder['staff']) || $is_admin) {
                            $_reminder['title'] = '';

                            if (get_staff_user_id() != $reminder['staff']) {
                                $_reminder['title'] .= '(' . $reminder['firstname'] . ' ' . $reminder['lastname'] . ') ';
                            }

                            $name = mb_substr($reminder['description'], 0, 60) . '...';

                            $_reminder['_tooltip'] = _l('calendar_' . $key . '_reminder') . ' - ' . $name;
                            $_reminder['title'] .= $name;
                            $_reminder['date']  = $reminder['date'];
                            $_reminder['color'] = get_option('calendar_reminder_color');

                            if ($key == 'customer') {
                                $url = admin_url('clients/client/' . $reminder['rel_id']);
                            } elseif ($key == 'invoice') {
                                $url = admin_url('invoices/list_invoices/' . $reminder['rel_id']);
                            } elseif ($key == 'estimate') {
                                $url = admin_url('estimates/list_estimates/' . $reminder['rel_id']);
                            } elseif ($key == 'lead') {
                                $url                  = '#';
                                $_reminder['onclick'] = 'init_lead(' . $reminder['rel_id'] . '); return false;';
                            } elseif ($key == 'proposal') {
                                $url = admin_url('proposals/list_proposals/' . $reminder['rel_id']);
                            } elseif ($key == 'expense') {
                                $url = admin_url('expenses/list_expenses/' . $reminder['rel_id']);
                            } elseif ($key == 'credit_note') {
                                $url = admin_url('credit_notes/list_credit_notes/' . $reminder['rel_id']);
                            } elseif ($key == 'ticket') {
                                $url = admin_url('tickets/ticket/' . $reminder['rel_id']);
                            } elseif ($key == 'task') {
                                // Not implemented yet
                                $url = admin_url('tasks/view/' . $reminder['rel_id']);
                            }

                            $_reminder['url'] = $url;
                            array_push($data, $_reminder);
                        }
                    }
                }
            }
        }

        if (get_option('show_contracts_on_calendar') == 1 && !$ff || $ff && array_key_exists('contracts', $filters)) {
            $this->db->select('hash, subject as title, dateend, datestart, id, client, content, ' . get_sql_select_client_company());
            $this->db->from(db_prefix() . 'contracts');
            $this->db->where(db_prefix() .'contracts.company_username', $companyusername);

            $this->db->join(db_prefix() . 'clients', db_prefix() . 'clients.userid=' . db_prefix() . 'contracts.client');
            $this->db->where('trash', 0);

            if ($client_data) {
                $this->db->where('client', $client_id);
                $this->db->where('not_visible_to_client', 0);
            } else {
                if (!$has_permission_contracts) {
                    $this->db->where(db_prefix() . 'contracts.addedfrom', get_staff_user_id());
                }
            }

            $this->db->where('(dateend > "' . date('Y-m-d') . '" AND dateend IS NOT NULL AND dateend BETWEEN "' . $start . '" AND "' . $end . '" OR datestart >"' . date('Y-m-d') . '")');

            $contracts = $this->db->get()->result_array();

            foreach ($contracts as $contract) {
                if (!$has_permission_contracts && !$has_permission_contracts_own && !$client_data) {
                    continue;
                } elseif ($client_data && !$has_contact_permission_contracts) {
                    continue;
                }

                $rel_showcase = '';
                if (!$client_data) {
                    $rel_showcase = ' (' . $contract['company'] . ')';
                }

                $name                  = $contract['title'];
                $_contract['title']    = $name;
                $_contract['color']    = get_option('calendar_contract_color');
                $_contract['_tooltip'] = _l('calendar_contract') . ' - ' . $name . $rel_showcase;
                if (!$client_data) {
                    $_contract['url'] = admin_url('contracts/contract/' . $contract['id']);
                } else {
                    $_contract['url'] = site_url('contract/' . $contract['id'] . '/' . $contract['hash']);
                }
                if (!empty($contract['dateend'])) {
                    $_contract['date'] = $contract['dateend'];
                } else {
                    $_contract['date'] = $contract['datestart'];
                }
                array_push($data, $_contract);
            }
        }
        //calendar_project
        if (get_option('show_projects_on_calendar') == 1 && !$ff || $ff && array_key_exists('projects', $filters)) {
            $this->load->model('projects_model');
            $this->db->select('name as title,id,clientid, CASE WHEN deadline IS NULL THEN start_date ELSE deadline END as date,' . get_sql_select_client_company(), false);

            $this->db->from(db_prefix() . 'projects');

            // Exclude cancelled and finished
            $this->db->where(db_prefix() .'projects.company_username', $companyusername);

            $this->db->where('status !=', 4);
            $this->db->where('status !=', 5);
            $this->db->where("CASE WHEN deadline IS NULL THEN (start_date BETWEEN '$start' AND '$end') ELSE (deadline BETWEEN '$start' AND '$end') END", null, false);

            $this->db->join(db_prefix() . 'clients', db_prefix() . 'clients.userid=' . db_prefix() . 'projects.clientid');

            if (!$client_data && !$has_permission_projects_view) {
                $this->db->where('id IN (SELECT project_id FROM ' . db_prefix() . 'project_members WHERE staff_id=' . get_staff_user_id() . ')');
            } elseif ($client_data) {
                $this->db->where('clientid', $client_id);
            }

            $projects = $this->db->get()->result_array();
            foreach ($projects as $project) {
                $rel_showcase = '';

                if (!$client_data) {
                    $rel_showcase = ' (' . $project['company'] . ')';
                } else {
                    if (!$has_contact_permission_projects) {
                        continue;
                    }
                }

                $name                 = $project['title'];
                $_project['title']    = $name;
                $_project['color']    = get_option('calendar_project_color');
                $_project['_tooltip'] = _l('calendar_project') . ' - ' . $name . $rel_showcase;
                if (!$client_data) {
                    $_project['url'] = admin_url('projects/view/' . $project['id']);
                } else {
                    $_project['url'] = site_url('clients/project/' . $project['id']);
                }

                $_project['date'] = $project['date'];

                array_push($data, $_project);
            }
        }
        if (!$client_data && !$ff || (!$client_data && $ff && array_key_exists('events', $filters))) {
            $events = $this->get_all_events($start, $end);
            foreach ($events as $event) {
                if ($event['userid'] != get_staff_user_id() && !$is_admin) {
                    $event['is_not_creator'] = true;
                    $event['onclick']        = true;
                }
                $event['_tooltip'] = _l('calendar_event') . ' - ' . $event['title'];
                $event['color']    = $event['color'];
                array_push($data, $event);
            }
        }

        return hooks()->apply_filters('calendar_data', $data, [
            'start'      => $start,
            'end'        => $end,
            'client_id'  => $client_id,
            'contact_id' => $contact_id,
        ]);
    }
<<<<<<< HEAD
=======

>>>>>>> d71d750e00250050260fb71bf92c645d4ca43ed1
    /**
     * Delete user event
     * @param  mixed $id event id
     * @return boolean
     */
    public function delete_event($id)
    {
        $this->db->where('eventid', $id);
        $this->db->delete(db_prefix() . 'events');
        if ($this->db->affected_rows() > 0) {
            log_activity('Event Deleted [' . $id . ']');

            return true;
        }

        return false;
    }
    
    // Added by leo
    
    public function migrate_data(){
        
        //echo "the start";
        $this->db->select("*");
        $this->db->from(db_prefix() . 'options');
        $all_options = $this->db->get()->result_array();
        $number_of_options = count($all_options);
        $number_of_elements_per_tables = 40;
        $table_count = intval($number_of_options/$number_of_elements_per_tables);
        //$number_of_elements_per_tables = intval($number_of_options/$table_count);
        
        $this->load->dbforge();
        
        //create reference table
        $this->dbforge->add_field('id');
        $ref_fields = array(
            'field_name'  => array(
                'type' => 'TEXT',
                'null' => TRUE,
            ),
            'col_name'  => array(
                'type' => 'TEXT',
                'null' => TRUE,
            ),
            'table_name'  => array(
                'type' => 'TEXT',
                'null' => TRUE,
            ),
        );
        $this->dbforge->add_field($ref_fields);
        $this->dbforge->create_table('_sub_options_ref');
        // gives CREATE TABLE table_name
        
        
        $i = 0;$j=0;
        $table_index = 0;
        $fields = array();
        $data = array();
        $ref_data = array();
        foreach($all_options as $option){
            $i++;$j++;
            //add the data to the arrays
            //using a sudo name for columns as some names where too long eg col_1,col_2,col_3...
            $fields["col_".$j] = array(
                        'type' => 'TEXT',
                        'null' => TRUE,
                        'default' => '',
                    );
            
            $data["col_".$j] = json_encode($option);
            $ref_data[] = array(
                'field_name'  => $option['name'],
                'col_name'  => "col_".$j,
                'table_name'  => db_prefix() . '_sub_options_'.($table_index+1),
            );
            
            
            if($i == $number_of_elements_per_tables){
                
                $this->dbforge->add_field('id');
                $fields = array(
                    'company_username' => array(
                        'type' => 'TEXT',
                        'null' => TRUE,
                    )
                ) + $fields;
                // will translate to "users VARCHAR(100)" when the field is added.
                $this->dbforge->add_field($fields);
                // gives id INT(9) NOT NULL AUTO_INCREMENT

                // gives CREATE TABLE table_name
                $this->dbforge->create_table('_sub_options_'.++$table_index);
                
                //save the data to the table
                $this->db->insert('_sub_options_'.$table_index, $data);
                $insert_id = $this->db->insert_id();
                
                //save the data to the table
                $this->db->insert_batch('_sub_options_ref', $ref_data);
                $insert_id = $this->db->insert_id();

                $ref_data = array();
                $fields = array();
                $data = array();
                $i=0;
            }
            
        }
        if(($number_of_options % $table_count) != 0){
            
                $this->dbforge->add_field('id');
                $fields = array(
                    'company_username' => array(
                        'type' => 'TEXT',
                        'null' => TRUE,
                    )
                ) + $fields;
                // will translate to "users VARCHAR(100)" when the field is added.
                $this->dbforge->add_field($fields);
                // gives id INT(9) NOT NULL AUTO_INCREMENT

                // gives CREATE TABLE table_name
                $this->dbforge->create_table('_sub_options_'.++$table_index);
                
                //save the data to the table
                $this->db->insert('_sub_options_'.$table_index, $data);
                $insert_id = $this->db->insert_id();
                
                //save the data to the table
                $this->db->insert_batch('_sub_options_ref', $ref_data);
                $insert_id = $this->db->insert_id();

                $ref_data = array();
                $fields = array();
                $data = array();
                $i=0;
        }
        
        
    }
    
    function get_new_options($company_username){

        $this->db->distinct();
        $this->db->select("table_name");
        $this->db->from(db_prefix() . 'sub_options_ref');
        $table_name_records = $this->db->get()->result_array();
        // echo json_encode($table_name_records);
        $options = array();
        
        foreach($table_name_records as $table_name_record){
            //echo json_encode($table_name_record);
            $this->db->select("*");
            $this->db->from($table_name_record['table_name']);
            $this->db->where('company_username', $company_username);
            $option_set = $this->db->get()->result_array();
            $options[] = $option_set;
        }
        
        return $options;
    }
    
    function get_new_option($option,$company_username=""){

        if($company_username==""){
            $company_username = $_SESSION['current_company'];
        }
        
        // echo $company_username;
        // die();
        
        $this->db->select("table_name");
        $this->db->where('field_name', $option);
        $this->db->from(db_prefix() . '_sub_options_ref');
        $table_name_records = $this->db->get()->row_array();
        echo json_encode($table_name_records);

        
        $this->db->select($option);
        $this->db->from($table_name_records['table_name']);
        $this->db->where('company_username', $company_username);
        
        $option_set = $this->db->get()->row_array();
        
        echo json_encode($option_set);
        //echo $this->db->last_query();
        //die();
        return $option_set;
    }
    
    function set_new_option($company_username,$option,$data_value){
        //$data_value = json_decode('{"id":"3","name":"services","value":"leo","autoload":"1"}');
        //$data_value is an object
        //$option is a string
        //$company_username is a string
        
        $this->db->select("table_name");
        $this->db->where('field_name', $option);
        $this->db->from(db_prefix() . 'sub_options_ref');
        $table_name_records = $this->db->get()->row_array();

        $this->db->select($option);
        $this->db->where('company_username', $company_username);
        $this->db->from($table_name_records['table_name']);
        $option_set = $this->db->get()->row_array();
        
        //if the record doesnt exist
        if(count($option_set)==0){
            $data = array(
                $option             =>  json_encode($data_value),
                "company_username"  =>  $company_username
            );
            $this->db->set($data);
            $this->db->insert($table_name_records['table_name']);
        }else{
            $option_set_value = json_decode($option_set[$option]);
            foreach($data_value as $key => $value){
                $option_set_value->$key = $value;
            }
            
            //update table
            $temp_prep = array(
                $option => json_encode($option_set_value)
            );
            $this->db->where('company_username', $company_username);
            return $this->db->update($table_name_records['table_name'],$temp_prep);
        }
        return 1;
    }
    

    
    function set_new_options($company_username,$table_data){
        
        //assuming $table_data is the default data when creating a new account
        foreach($table_data as $table_row){
            $prep = new stdClass();
            foreach($table_row as $key => $row_val){
                $prep->$key = $row_val;
            }
            
            //$prep = '{"id":"3","name":"services","value":"leo","autoload":"1"}'
            $this->set_new_option($company_username,$prep->name,$prep);
        }
        
    }
    
    
    public function migrate_data_v2(){
        
        //echo "the start";
        $this->db->select("*");
        $this->db->from(db_prefix() . 'options');
        $all_options = $this->db->get()->result_array();
        
        $this->load->dbforge();
        
        $fields = array();
        $data = array();
        //echo(json_encode($all_options));
        foreach($all_options as $option){
            
            //add the data to the arrays
            $fields[$option['name']] = array(
                        'type' => 'TEXT',
                        'null' => TRUE,
                    );
            
            $data[$option['name']] = json_encode($option);
        }
        
        //echo("<br/>json stuff " . json_encode($data));
        $this->dbforge->add_field('id');
        $fields['company_username'] = array(
                'type' => 'TEXT',
                'null' => TRUE,
            );
        $this->dbforge->add_field($fields);

        echo 'sub_options_table' . $this->dbforge->create_table('_sub_options_table');
        echo $this->db->last_query();
        // gives CREATE TABLE table_name
        echo '<br/> '.db_prefix() . '_sub_options_table';
        //save the data to the table
        $this->db->insert('_sub_options_table', $data);
        $insert_id = $this->db->insert_id();
        
        echo '<br/> insert_id ' . $insert_id;

    }
}
