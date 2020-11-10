<?php

defined('BASEPATH') or exit('No direct script access allowed');

class App
{
    /**
     * Options autoload=1
     * @var array
     */
    private $options = [];

    /**
     * Quick actions create aside
     * @var array
     */
    private $quick_actions = [];

    /**
     * CI Instance
     * @deprecated 1.9.8 Use $this->ci instead
     * @var object
     */
    private $_instance;

    /**
     * CI Instance
     * @var object
     */
    private $ci;

    /**
     * Show or hide setup menu
     * @var boolean
     */
    private $show_setup_menu = true;

    /**
     * Available reminders
     * @var array
     */
    private $available_reminders = [
            'customer',
            'lead',
            'estimate',
            'invoice',
            'proposal',
            'expense',
            'credit_note',
            'ticket',
            'task',
    ];

    /**
     * Tables where currency id is used
     * @var array
     */
    private $tables_with_currency = [];

    /**
     * Media folder
     * @var string
     */
    private $media_folder;

    /**
     * Available languages
     * @var array
     */
    private $available_languages = [];

    public function __construct()
    {
        $this->ci = & get_instance();
        // @deprecated
        $this->_instance = $this->ci;

        $this->init();

        hooks()->do_action('app_base_after_construct_action');
    }

    /**
     * Check if database upgrade is required
     * @param  string  $v
     * @return boolean
     */
    public function is_db_upgrade_required($v = '')
    {
        if (!is_numeric($v)) {
            $v = $this->get_current_db_version();
        }

        $this->ci->load->config('migration');
        if ((int) $this->ci->config->item('migration_version') !== (int) $v) {
            return true;
        }

        return false;
    }

    /**
     * Return current database version
     * @return string
     */
    public function get_current_db_version()
    {
        $this->ci->db->limit(1);

        return $this->ci->db->get(db_prefix() . 'migrations')->row()->version;
    }

    /**
     * Upgrade database
     * @return mixed
     */
    public function upgrade_database()
    {

        $update = $this->upgrade_database_silent();

        if ($update['success'] == false) {
            show_error($update['message']);
        } else {
            set_alert('success', 'Your database is up to date');

            if (is_staff_logged_in()) {
                redirect(admin_url(), 'refresh');
            } else {
                redirect(admin_url('authentication'));
            }
        }
    }

    /**
     * Make request to server to get latest version info
     * @return mixed
     */
    public function get_update_info()
    {
        $curl = curl_init();
        curl_setopt_array($curl, [
            CURLOPT_RETURNTRANSFER => 1,
            CURLOPT_SSL_VERIFYHOST => 0,
            CURLOPT_USERAGENT      => $this->ci->agent->agent_string(),
            CURLOPT_SSL_VERIFYPEER => 0,
            CURLOPT_TIMEOUT        => 30,
            CURLOPT_URL            => UPDATE_INFO_URL,
            CURLOPT_POST           => 1,
            CURLOPT_POSTFIELDS     => [
                'update_info'     => 'true',
                'current_version' => $this->get_current_db_version(),
                'php_version'     => PHP_VERSION,
                'purchase_key'    => get_option('purchase_key'),
            ],
        ]);

        $result = curl_exec($curl);
        $error  = '';

        if (!$curl || !$result) {
            $error = 'Curl Error - Contact your hosting provider with the following error as reference: Error: "' . curl_error($curl) . '" - Code: ' . curl_errno($curl);
        }

        curl_close($curl);

        if ($error != '') {
            return $error;
        }

        return $result;
    }

    /**
     * Return all available languages in the application/language folder
     * @return array
     */
    public function get_available_languages()
    {
        return hooks()->apply_filters('before_get_languages', $this->available_languages);
    }

    /**
     * Function that will parse table data from the tables folder for amin area
     * @param  string $table  table filename
     * @param  array  $params additional params
     * @return void
     */
    public function get_table_data($table, $params = [])
    {
        $params = hooks()->apply_filters('table_params', $params, $table);

        foreach ($params as $key => $val) {
            $$key = $val;
        }

        $customFieldsColumns = [];

        $path = VIEWPATH . 'admin/tables/' . $table . EXT;

        if (!file_exists($path)) {
            $path = $table;
            if (!endsWith($path, EXT)) {
                $path .= EXT;
            }
        } else {
            $myPrefixedPath = VIEWPATH . 'admin/tables/my_' . $table . EXT;
            if (file_exists($myPrefixedPath)) {
                $path = $myPrefixedPath;
            }
        }

        include_once($path);

        echo json_encode($output);
        die;
    }

    /**
     * All available reminders keys for the features
     * @return array
     */
    public function get_available_reminders_keys()
    {
        return $this->available_reminders;
    }

    /**
     * Get all db options
     * @return array
     */
    public function get_options()
    {
        return $this->options;
    }

    /**
     * Function that gets option based on passed name
     * @param  string $name
     * @return string
     */
    public function get_option($name)
    {
        // $_SESSION['current_company'] = "vertix";

        $val  = '';
        $name = trim($name);
        
        if ($name == 'number_padding_invoice_and_estimate') {
            $name = 'number_padding_prefixes';
        }
        
        //Added By Leo
        if($name == "lead_unique_validation"){
            echo $name;
            //testing --Vic
            $name = 1;
            //echo "<script>alert('$name');<script>";die();
        }

        if (!isset($this->options[$name])) {
           
            $this->ci->db->select("*");
            $this->ci->db->where('field_name', $name);
            $this->ci->db->from(db_prefix() . '_sub_options_ref');
            $query = $this->ci->db->get();
            $table_name_records = $query->row_array();
    
            if(($query->num_rows()>0)  && isset($_SESSION['current_company'])){
                echo "running in new tables";
                $company_username = $_SESSION['current_company'];
                $this->ci->db->select($table_name_records['col_name']);
                $this->ci->db->from($table_name_records['table_name']);
                $this->ci->db->where('company_username', $company_username);
                $query = $this->ci->db->get();
                $option_set = $query->row_array();
                //echo json_encode($option_set);die;
                //echo $query->num_rows();die();
                if($query->num_rows()>0){
                    $row = json_decode($table_name_records['col_name']);
                    if ($row) {
                        $val = $row->value;
                    }
                }
            }else{
                
                //end of add by Leo
                //run old code if the user doesnt have the data in the new tables
                // is not auto loaded

                echo "running old";
                $this->ci->db->select('value');
                $this->ci->db->where('name', $name);
                $row = $this->ci->db->get(db_prefix() . 'options')->row();
                if ($row) {
                    $val = $row->value;
                }
                $this->setup_new_options();
            }
            
        }else{
            $val = $this->options[$name];
        }
        //echo "val $val name $name"; die;
        if(!isset($_SESSION['current_company'])){
            $_SESSION['current_company'] = "";
        }
        return hooks()->apply_filters('get_option', $val, $name);
    }

    function setup_new_options(){

        //echo "the start";
        $this->ci->db->select("*");
        $this->ci->db->from(db_prefix() . 'options');
        $all_options = $this->ci->db->get()->result_array();
        $number_of_options = count($all_options);
        $number_of_elements_per_tables = 40;
        $table_count = intval($number_of_options/$number_of_elements_per_tables);

   
        
        
        $i = 0;$j=0;
        $table_index = 0;
        $data = array();
        //echo(json_encode($all_options));
        foreach($all_options as $option){
           // echo "option is " .  $option;


            $i++;$j++;
            $data["col_$j"] = json_encode($option);
            
            
            if($i == $number_of_elements_per_tables){
                //check if the table already has a record
               
                $this->ci->db->select("*");
                $this->ci->db->where("company_username",$_SESSION['current_company']);
                $this->ci->db->from(db_prefix() . '_sub_options_'.++$table_index);
                $query = $this->ci->db->get();
                //echo $query->num_rows(); die;
                echo "table has records ".$query->num_rows();
                echo "table is ". '_sub_options_'.++$table_index); 
                if(($query->num_rows()) == 0){
                    echo "table has no record";
                    //echo '<br/> '.db_prefix() . '_sub_options_'.$table_index;
                    //save the data to the table
                    $data["company_username"] = $_SESSION['current_company'];
                    $this->ci->db->insert('_sub_options_'.$table_index, $data);
                    $insert_id = $this->ci->db->insert_id();
                    //echo $_SESSION['current_company']; die;
                }

                //echo $this->db->error(); 
                $data = array();
                $i=0;
            }
        }
        //echo "count data" . count($data);;die;
        if(count($data) != 0){
            //check if the table already has a record
            $this->ci->db->select("*");
            $this->ci->db->where("company_username",$_SESSION['current_company']);
            $this->ci->db->from(db_prefix() . '_sub_options_'.++$table_index);
            $query = $this->ci->db->get();
            
            
            if(($query->num_rows()) == 0){
                //echo "number of rows " . $query->num_rows(); die;
                //echo '<br/> '.db_prefix() . '_sub_options_'.$table_index;
                //save the data to the table
                $data["company_username"] = $_SESSION['current_company'];
                $this->ci->db->insert('_sub_options_'.$table_index, $data);
                $insert_id = $this->ci->db->insert_id();
                //echo $this->ci->db->last_query(); die;
            }
            //echo "skipped loop " . $query->num_rows(); die;
            //echo $this->db->error(); 
            $data = array();
            $i=0;
        }

        
    }
    /**
     * Add new quick action data
     * @param array $item
     */
    public function add_quick_actions_link($item = [])
    {
        if (!isset($item['position'])) {
            $item['position'] = null;
        }

        $this->quick_actions[] = $item;
    }

    /**
     * Quick actions data set from core/AdminController.php
     * @return array
     */
    public function get_quick_actions_links()
    {
        return hooks()->apply_filters('quick_actions_links', app_sort_by_position($this->quick_actions));
    }

    /**
     * Aside.php will set the menu visibility here based on few conditions
     * @param int $total_setup_menu_items total setup menu items shown to the user
     */
    public function set_setup_menu_visibility($total_setup_menu_items)
    {
        $this->show_setup_menu = $total_setup_menu_items == 0 ? false : true;
    }

    /**
     * Check if should the script show the setup menu or not
     * @return boolean
     */
    public function show_setup_menu()
    {
        return hooks()->apply_filters('show_setup_menu', $this->show_setup_menu);
    }

    /**
     * Return tables that currency id is used
     * @return array
     */
    public function get_tables_with_currency()
    {
        return hooks()->apply_filters('tables_with_currency', $this->tables_with_currency);
    }

    /**
     * Return the media folder name
     * @return string
     */
    public function get_media_folder()
    {
        return hooks()->apply_filters('get_media_folder', $this->media_folder);
    }

    /**
     * Upgrade database without throwing any errors
     * @return mixed
     */
    private function upgrade_database_silent()
    {
        $this->ci->load->config('migration');

        $beforeUpdateVersion = $this->get_current_db_version();
        $updateToVersion     = $this->ci->config->item('migration_version');

        $this->ci->load->library('migration', [
            'migration_enabled'     => true,
            'migration_type'        => $this->ci->config->item('migration_type'),
            'migration_table'       => $this->ci->config->item('migration_table'),
            'migration_auto_latest' => $this->ci->config->item('migration_auto_latest'),
            'migration_version'     => $updateToVersion,
            'migration_path'        => $this->ci->config->item('migration_path'),
        ]);

        hooks()->do_action('before_update_database', $updateToVersion);
        define('DOING_DATABASE_UPGRADE', true);
        if ($this->ci->migration->current() === false) {
            return [
                'success' => false,
                'message' => $this->ci->migration->error_string(),
            ];
        }

        delete_option('upgraded_from_version');
        add_option('upgraded_from_version', $beforeUpdateVersion);

        hooks()->do_action('database_updated', $updateToVersion);

        return ['success' => true];
    }

    /**
     * Init necessary data
     */
    protected function init()
    {
        
        //Added by Leo

        if(isset($_SESSION['current_company'])){
            $company_username = $_SESSION['current_company'];
            $this->ci->db->select("table_name");
            $this->ci->db->distinct();
            $this->ci->db->from(db_prefix() . '_sub_options_ref');
            $table_name_records = $this->ci->db->get()->result_array();
            //echo json_encode($table_name_records);
            //die();
            $options = array();
            foreach($table_name_records as $table_name_record){
                $this->ci->db->select("*");
                $this->ci->db->from($table_name_record['table_name']);
                $this->ci->db->where('company_username', $company_username);
                $query = $this->ci->db->get();
                $option_set = $query->row_array();
                // Loop the options and store them in a array to prevent fetching again and again from database
                if($query->num_rows()>0){
                    foreach($option_set as $key=>$value){
                        $temp = json_decode($value);
                        if(isset($temp->autoload)){
                            //echo json_encode("Key $key, value $value"); die;
                            if($temp->autoload == "1"){
                                $this->options[$temp->name] = $temp->value;
                            }
                            
                        }
                    }    
                }
                
            }
        }

        
        // echo json_encode($this->options);
        // echo "<br/> count " . count($this->options);
        // die;
        if(count($this->options)==0){ 
            //End of add by Leo
            // Temporary checking for v1.8.0
            if ($this->ci->db->field_exists('autoload', db_prefix() . 'options')) {
                $options = $this->ci->db->select('name, value')
                ->where('autoload', 1)
                ->get(db_prefix() . 'options')->result_array();
            } else {
                $options = $this->ci->db->select('name, value')
                ->get(db_prefix() . 'options')->result_array();
            }
    
    
            // Loop the options and store them in a array to prevent fetching again and again from database
            foreach ($options as $option) {
                $this->options[$option['name']] = $option['value'];
            }

            //Added by Leo
            if(isset($company_username)){
                $this->setup_new_options();
            }
        }
        //End of add by leo


        /**
         * Available languages
         */
        foreach (list_folders(APPPATH . 'language') as $language) {
            if (is_dir(APPPATH . 'language/' . $language)) {
                array_push($this->available_languages, $language);
            }
        }

        /**
         * Media folder
         * @var string
         */
        $this->media_folder = hooks()->apply_filters('before_set_media_folder', 'media');

        /**
         * Tables with currency
         * @var array
         */
        $this->tables_with_currency = [
            [
                'table' => db_prefix() . 'invoices',
                'field' => 'currency',
            ],
            [
                'table' => db_prefix() . 'expenses',
                'field' => 'currency',
            ],
            [
                'table' => db_prefix() . 'proposals',
                'field' => 'currency',
            ],
            [
                'table' => db_prefix() . 'estimates',
                'field' => 'currency',
            ],
            [
                'table' => db_prefix() . 'clients',
                'field' => 'default_currency',
            ],
            [
                'table' => db_prefix() . 'creditnotes',
                'field' => 'currency',
            ],
            [
                'table' => db_prefix() . 'subscriptions',
                'field' => 'currency',
            ],
        ];
    }

    /**
     * Predefined contact permission
     * @deprecated 1.9.8 use get_contact_permissions() instead
     * @return array
     */
    public function get_contact_permissions()
    {
        return get_contact_permissions();
    }
}