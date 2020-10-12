<?php

defined('BASEPATH') or exit('No direct script access allowed');

/**
 * Add option
 *
 * @since  Version 1.0.1
 *
 * @param string  $name      Option name (required|unique)
 * @param string  $value     Option value
 * @param integer $autoload  Whether to autoload this option
 *
 */
function add_option($name, $value = '', $autoload = 1)
{
    
    // Added by Leo
    if(!option_exists($name)){
        $CI = & get_instance();
        $CI->load->dbforge();
        
        
        $fields = array(
                $name => array(
                    'type' => 'TEXT',
                    'null' => TRUE,
                    'default' => '',
                )
        );
        
        //calculate whether to add new table or add record to current last table
        
        $CI->db->select("*");
        $CI->db->from(db_prefix() . 'options');
        $query = $CI->db->get();
        //$all_options = $query->result_array();
        $number_of_options = $query->num_rows();
        $number_of_elements_per_tables = 40;
        $table_count = intval($number_of_options/$number_of_elements_per_tables);

        if(($number_of_options % $number_of_elements_per_tables)==0){
            //Create new table because the last table is full
            $option = (object) [
                   $name => $value,
                   "autoload" => $autoload
            ];
            $data["col_".($number_of_options+1)] = json_encode($option);
            $ref_data[] = array(
                'field_name'  => $option['name'],
                'col_name'  => "col_".($number_of_options+1),
                'table_name'  => db_prefix() . '_sub_options_'.($table_count+1),
            );
            
            $CI->dbforge->add_field('id');
            $fields = array(
                'company_username' => array(
                    'type' => 'TEXT',
                    'null' => TRUE,
                )
            );
            $fields["col_".($number_of_options+1)] = array(
                'type' => 'TEXT',
                'null' => TRUE,
                'default' => '',
            );
            
            // will translate to "users VARCHAR(100)" when the field is added.
            $CI->dbforge->add_field($fields);
            // gives id INT(9) NOT NULL AUTO_INCREMENT
            //echo "create new table " . json_encode($fields);die;
            // gives CREATE TABLE table_name
            $CI->dbforge->create_table('_sub_options_'.++$table_count);
            
            //save the data to the table
            $CI->db->insert('_sub_options_'.$table_count, $data);
            $insert_id = $CI->db->insert_id();
            
            //save the data to the table
            $CI->db->insert_batch('_sub_options_ref', $ref_data);
            $insert_id = $CI->db->insert_id();
            
        }else{
            

            
            $fields2["col_".($number_of_options+1)] = array(
                'type' => 'TEXT',
                'null' => TRUE,
                'default' => '',
            );
            //Add to the existing last table
            $CI->dbforge->add_column('_sub_options_'.($table_count+1), $fields2);
            
            //save the data to the table
            $newData = [
                    'name'      => $name,
                    'value'     => $value,
                    'autoload'  => $autoload
                ];
            //$final_data[$option['name']] = json_encode($option);
            
            $final_data = array(
                "col_".($number_of_options+1) => json_encode($newData)
            );
            
            $tbl_name =  'tbl_sub_options_'.($table_count+1);
            //echo $tbl_name;die;
            $CI->db->where("company_username",$_SESSION['current_company']);
            $CI->db->update($tbl_name,$final_data);
            //echo $CI->db->last_query();
            
            //add column ref to the  tbl_sub_options_ref table
            $ref_data = array(
                    'field_name'  => $name,
                    'col_name'  => "col_" . $number_of_options+1,
                    'table_name'  => 'tbl_sub_options_'.($table_count+1),
                );
                
            $CI->db->insert('_sub_options_ref', $ref_data);
            
            $insert_id = $CI->db->insert_id();
            if ($insert_id) {
                //return true;
            }            
        }
        


        //return false;
    }
    // End of Add by Leo

    if (!option_exists($name)) {
        //echo "Option Doesnt Exist";die;
        $CI = & get_instance();

        $newData = [
                'name'  => $name,
                'value' => $value,
            ];

        if ($CI->db->field_exists('autoload', db_prefix() . 'options')) {
            $newData['autoload'] = $autoload;
        }

        $CI->db->insert(db_prefix() . 'options', $newData);

        $insert_id = $CI->db->insert_id();

        if ($insert_id) {
            return true;
        }

        return false;
    }

    return false;
}

/**
 * Get option value
 * @param  string $name Option name
 * @return mixed
 */
function get_option($name)
{
    $CI = & get_instance();
    if (!class_exists('app', false)) {
        $CI->load->library('app');
    }

    return $CI->app->get_option($name);
}

/**
 * Updates option by name
 *
 * @param  string $name     Option name
 * @param  string $value    Option Value
 * @param  mixed $autoload  Whether to update the autoload
 *
 * @return boolean
 */
function update_option($name, $value, $autoload = null)
{
    /**
     * Create the option if not exists
     * @since  2.3.3
     */

    if (!option_exists($name)) {
        return add_option($name, $value, $autoload === null ? 1 : 0);
    }

    $CI = & get_instance();
    
    //Added by Leo
    if(isset($_SESSION['current_company'])){
        $company_username = $_SESSION['current_company'];
        $CI->db->select("*");
        $CI->db->where('field_name', $name);
        $CI->db->from(db_prefix() . '_sub_options_ref');
        $table_name_records = $CI->db->get()->row_array();
        
        $CI->db->select($table_name_records['col_name']);
        $CI->db->from($table_name_records['table_name']);
        $CI->db->where('company_username', $company_username);
        $query=$CI->db->get();
        $option_set = $query->row_array();
        if($query->num_rows()>0){
            //echo $table_name_records['table_name'] . $table_name_records['col_name'] . "option_set ".json_encode($option_set) . "<br/><br/>";
            $row = json_decode($option_set[$table_name_records['col_name']]);
            $row->value = $value;
            if ($autoload) {
                $row->autoload = $autoload;
            }
            $data = array($table_name_records['col_name']=>json_encode($row));
            $CI->db->where('company_username', $company_username);
            $CI->db->update($table_name_records['table_name'], $data);
            //echo $CI->db->last_query();
            if ($CI->db->affected_rows() > 0) {
                return true;
            }
        }
        
        return false;        
    }
    //End of Changes by Leo

    $CI->db->where('name', $name);
    $data = ['value' => $value];

    if ($autoload) {
        $data['autoload'] = $autoload;
    }

    $CI->db->update(db_prefix() . 'options', $data);

    if ($CI->db->affected_rows() > 0) {
        return true;
    }

    return false;
}

/**
 * Delete option
 * @since  Version 1.0.4
 * @param  mixed $name option name
 * @return boolean
 */
function delete_option($name)
{
    $CI = &get_instance();
    
    //Added by Leo
    if(isset($_SESSION['current_company'])){
        $company_username = $_SESSION['current_company'];
        $CI->db->select("*");
        $CI->db->where('field_name', $name);
        $CI->db->from(db_prefix() . '_sub_options_ref');
        $table_name_records = $CI->db->get()->row_array();
        
        $CI->db->select($table_name_records['col_name']);
        $CI->db->from($table_name_records['table_name']);
        $CI->db->where('company_username', $company_username);
        $query=$CI->db->get();
        $option_set = $query->row_array();
        if($query->num_rows()>0){
            $row = json_decode($option_set[$table_name_records['col_name']]);
            $row->value = "";
            $data = array($table_name_records['col_name']=>json_encode($row));
            $CI->db->where('company_username', $company_username);
            $CI->db->update($table_name_records['table_name'], $data);
            if ($CI->db->affected_rows() > 0) {
                return true;
            }
        }
        
        return false;        
    }
    
    //End of Changes by Leo
    
    $CI->db->where('name', $name);
    $CI->db->delete(db_prefix() . 'options');

    return (bool) $CI->db->affected_rows();
}

/**
 * @since  2.3.3
 * Check whether an option exists
 *
 * @param  string $name option name
 *
 * @return boolean
 */
function option_exists($name)
{
    return total_rows(db_prefix() . 'options', [
        'name' => $name,
    ]) > 0;
}

function app_init_settings_tabs()
{
    $CI = &get_instance();
/***
    $CI->app_tabs->add_settings_tab('general', [
        'name'     => _l('settings_group_general'),
        'view'     => 'admin/settings/includes/general',
        'position' => 5,
    ]);
****/
    $CI->app_tabs->add_settings_tab('company', [
        'name'     => _l('company_information'),
        'view'     => 'admin/settings/includes/company',
        'position' => 10,
    ]);

    $CI->app_tabs->add_settings_tab('localization', [
        'name'     => _l('settings_group_localization'),
        'view'     => 'admin/settings/includes/localization',
        'position' => 15,
    ]);

    $CI->app_tabs->add_settings_tab('email', [
        'name'     => _l('settings_group_email'),
        'view'     => 'admin/settings/includes/email',
        'position' => 20,
    ]);

    $CI->app_tabs->add_settings_tab('sales', [
        'name'     => _l('settings_group_sales'),
        'view'     => 'admin/settings/includes/sales',
        'position' => 25,
    ]);

    $CI->app_tabs->add_settings_tab('subscriptions', [
        'name'     => _l('subscriptions'),
        'view'     => 'admin/settings/includes/subscriptions',
        'position' => 30,
    ]);

    $CI->app_tabs->add_settings_tab('payment_gateways', [
        'name'     => _l('settings_group_online_payment_modes'),
        'view'     => 'admin/settings/includes/payment_gateways',
        'position' => 35,
    ]);

    $CI->app_tabs->add_settings_tab('clients', [
        'name'     => _l('settings_group_clients'),
        'view'     => 'admin/settings/includes/clients',
        'position' => 40,
    ]);

    $CI->app_tabs->add_settings_tab('tasks', [
        'name'     => _l('tasks'),
        'view'     => 'admin/settings/includes/tasks',
        'position' => 45,
    ]);

    $CI->app_tabs->add_settings_tab('tickets', [
        'name'     => _l('support'),
        'view'     => 'admin/settings/includes/tickets',
        'position' => 50,
    ]);

    $CI->app_tabs->add_settings_tab('leads', [
        'name'     => _l('leads'),
        'view'     => 'admin/settings/includes/leads',
        'position' => 55,
    ]);

    $CI->app_tabs->add_settings_tab('calendar', [
        'name'     => _l('settings_calendar'),
        'view'     => 'admin/settings/includes/calendar',
        'position' => 60,
    ]);

    $CI->app_tabs->add_settings_tab('pdf', [
        'name'     => _l('settings_pdf'),
        'view'     => 'admin/settings/includes/pdf',
        'position' => 65,
    ]);

    $CI->app_tabs->add_settings_tab('e_sign', [
        'name'     => 'E-Sign',
        'view'     => 'admin/settings/includes/e_sign',
        'position' => 70,
    ]);
/***
    $CI->app_tabs->add_settings_tab('cronjob', [
        'name'     => _l('settings_group_cronjob'),
        'view'     => 'admin/settings/includes/cronjob',
        'position' => 75,
    ]);
    
    
    ***/

    $CI->app_tabs->add_settings_tab('tags', [
        'name'     => _l('tags'),
        'view'     => 'admin/settings/includes/tags',
        'position' => 80,
    ]);

    $CI->app_tabs->add_settings_tab('pusher', [
        'name'     => 'Pusher.com',
        'view'     => 'admin/settings/includes/pusher',
        'position' => 85,
    ]);

    $CI->app_tabs->add_settings_tab('google', [
        'name'     => 'Google',
        'view'     => 'admin/settings/includes/google',
        'position' => 90,
    ]);

    $CI->app_tabs->add_settings_tab('misc', [
        'name'     => _l('settings_group_misc'),
        'view'     => 'admin/settings/includes/misc',
        'position' => 95,
    ]);
}
