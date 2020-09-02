<?php

defined('BASEPATH') or exit('No direct script access allowed');

class Authentication extends ClientsController
{
    public function __construct()
    {
        parent::__construct();
        hooks()->do_action('clients_authentication_constructor', $this);
    }

    public function index()
    {
        $this->login();
    }

    // Added for backward compatibilies
    public function admin()
    {
        redirect(admin_url('authentication'));
    }

    public function login()
    {
        if (is_client_logged_in()) {
            redirect(site_url());
        }

        $this->form_validation->set_rules('password', _l('clients_login_password'), 'required');
        $this->form_validation->set_rules('email', _l('clients_login_email'), 'trim|required|valid_email');

        if (get_option('use_recaptcha_customers_area') == 1
            && get_option('recaptcha_secret_key') != ''
            && get_option('recaptcha_site_key') != '') {
            $this->form_validation->set_rules('g-recaptcha-response', 'Captcha', 'callback_recaptcha');
        }
        if ($this->form_validation->run() !== false) {
            $this->load->model('Authentication_model');

            $success = $this->Authentication_model->login(
                $this->input->post('email'),
                $this->input->post('password', false),
                $this->input->post('remember'),
                false
            );

            if (is_array($success) && isset($success['memberinactive'])) {
                set_alert('danger', _l('inactive_account'));
                redirect(site_url('authentication/login'));
            } elseif ($success == false) {
                set_alert('danger', _l('client_invalid_username_or_password'));
                redirect(site_url('authentication/login'));
            }

            $this->load->model('announcements_model');
            $this->announcements_model->set_announcements_as_read_except_last_one(get_contact_user_id());

            hooks()->do_action('after_contact_login');

            maybe_redirect_to_previous_url();
            redirect(site_url());
        }
        if (get_option('allow_registration') == 1) {
            $data['title'] = _l('clients_login_heading_register');
        } else {
            $data['title'] = _l('clients_login_heading_no_register');
        }
        $data['bodyclass'] = 'customers_login';

        $this->data($data);
        $this->view('login');
        $this->layout();
    }
    
    

     public function login_admin()
    {
            
       
               if (is_client_logged_in()) {
            redirect(site_url());
        }
         if (is_staff_logged_in()) {
            
            redirect(base_url().'admin/');    
         }
           
       
       
       
       
        $this->form_validation->set_rules('password', _l('clients_login_password'), 'required');
        $this->form_validation->set_rules('email', _l('clients_login_email'), 'trim|required|valid_email');

        if (get_option('use_recaptcha_customers_area') == 1
            && get_option('recaptcha_secret_key') != ''
            && get_option('recaptcha_site_key') != '') {
            $this->form_validation->set_rules('g-recaptcha-response', 'Captcha', 'callback_recaptcha');
        }
        if ($this->form_validation->run() !== false) {
            $this->load->model('Authentication_model');

            $success = $this->Authentication_model->login(
                $this->input->post('email'),
                $this->input->post('password', false),
                $this->input->post('remember'),
                true
            );

            if (is_array($success) && isset($success['memberinactive'])) {
                set_alert('danger', _l('inactive_account'));
                //redirect(site_url('authentication/login'));
            } elseif ($success == false) {
                set_alert('danger', _l('client_invalid_username_or_password'));
                redirect(site_url('authentication/login'));
            }

            $this->load->model('announcements_model');
            $this->announcements_model->set_announcements_as_read_except_last_one(get_contact_user_id());

            hooks()->do_action('after_contact_login');

             redirect(base_url().'admin/');  
        }
        if (get_option('allow_registration') == 1) {
            $data['title'] = _l('clients_login_heading_register');
        } else {
            $data['title'] = _l('clients_login_heading_no_register');
        }
        $data['bodyclass'] = 'customers_login';

        $this->data($data);
        $this->view('login');
        $this->layout();
    }

    
    
    public function register()
    {
      if (is_staff_logged_in()) {
            
            redirect(base_url().'admin/');    
         }
        
        session_start();
      
                 
        $this->form_validation->set_rules('firstname', _l('client_firstname'), 'required');
       // $this->form_validation->set_rules('lastname', _l('client_lastname'), 'required');
        
        $this->form_validation->set_rules('email', _l('client_email'), 'trim|required|is_unique[' . db_prefix() . 'staff.email]|valid_email');
       // $this->form_validation->set_rules('password', _l('clients_register_password'), 'required');
       // $this->form_validation->set_rules('passwordr', _l('clients_register_password_repeat'), 'required|matches[password]');

        // $this->form_validation->set_rules($field_name, $field['company_username'], 'required');
        

      

     
     
        if ($this->input->post()) {
           // blank_page(_l('project_not_found'));
            
            if ($this->form_validation->run() !== false) {
                       
              
                $data = $this->input->post();

                $names = explode(' ', $data['firstname']);
                $data['admin'] = 1;
                $data['datecreated'] =  date("Y-m-d H:i:s"); 
		
		        $data['firstname'] = $names[0];
		       if( $names[1] !=null)
		        {
		        $data['lastname'] = $names[1];
		        }
	
		 
	            $data['hash'] = md5( rand(0,1000) ); // Generate random 32 character hash and assign it to a local variable.
            $email = $data['email'];
            

             $this->db->insert(db_prefix() . 'staff', $data);
            
             
             $this->db->where('email',$email);
             $array = $this->db->get(db_prefix() . 'staff')->result_array();
             $staff_id = $array[0]['staffid'];
             
             
             
            
             //staff_model
             
            
          // redirect("https://www.worksuite.app/plug/admin/authentication");
               //send_mail_template('verify_admin_email', $data['email'], $client_id, $admin['staffid']);
               
                //echo"running";
            
              //send_customer_registered_email_to_administrators($staff_id, $email);
             
              send_confirm_client_email($staff_id, $email);
              $_SESSION['my_user_email'] = $email;
              $_SESSION['my_staff_id'] = $staff_id;
              
               
               //send_customer_registered_email_to_administrators();
               //send_customer_registered_email_to_administrators($clientid);
               //FOR NEXT STEP
               
             //  echo $staff_id;
             //$session->set('staff_id', $staff_id);
             
             $_SESSION['staff_id'] = $staff_id;
              
            
            
            
               //echo"running";
               //echo "I have died".base_url(); die();
               redirect(base_url()."authentication/register2");
               //  redirect(base_url()."authentication/admin_verify_email");
          
       
            }
        }


    


    

        
   
        $data['title']     = _l('clients_register_heading');
        $data['bodyclass'] = 'register_admin';
         $this->data($data);
        $this->view('register_admin');
        $this->layout();
        
      
        
        
    }
    
    
    public function register2()
    {
        
        //$staff_id = $session->get('staff_id');
       

        
        if (is_client_logged_in()) {
            redirect(site_url());
        }
         if (is_staff_logged_in()) {
            
            redirect(base_url().'admin/');    
         }
       
        $staff_id = $_SESSION['staff_id'];
    
        
        $this->form_validation->set_rules('company', _l('clients_company'), 'required');
        $this->form_validation->set_rules('company_username', _l('company_username'),'required|has_no_spaces|has_no_caps|is_unique[' . db_prefix() . 'companies.company_username]');
       
      
         $this->form_validation->set_message('has_no_spaces', "The Company Username must have no spaces");
        $this->form_validation->set_message('has_no_caps', "The Company Username must have no capital letters");
         //$this->form_validation->set_message('required', "The Company Username field is required.");
         
        if ($this->input->post()) {
            
        
             
            if ($this->form_validation->run() !== false) {
                $data = $this->input->post();
                
                


                $company =  $data['company']; 
                $companyusername       = $data['company_username'];
                $vat = $data['vat'];
                $phonenumber = $data['phonenumber'];
                $country = $data['country'];
                $city = $data['city'];
                $address = $data['address'];
                $zip = $data['zip'];
                $state = $data['state'];
                
                
                
                /**
                $query = "INSERT INTO tblcompanies (company, company_username,vat,phonenumber,country,city, address, zip, state) 
  			  VALUES('$company', '$companyusername','$vat','$phonenumber','$country','$city','$address','$zip','$state')";
            mysqli_query($db, $query);
            **/
           
            
             $this->db->insert(db_prefix() . 'companies', $data);
             
            $userdata['staffid'] = $staff_id;
            $userdata['company_username'] = $companyusername;
             $_SESSION['company_username'] = $companyusername;
           // print_r($userdata);
            $this->db->insert(db_prefix() . 'staff_companies', $userdata);
            
           // $this->db->insert('staff_companies', $userdata);
           // $usercompanies = []; 
           // array_push($usercompanies,$companyusername);
           // $serialized = serialize($array);
        
            
           // $data2['companies'] = $serialized;
          //  $data2['company_username'] = $companyusername;
        
            
           // $this->db->where('staffid', $staff_id);
           // $this->db->update(db_prefix() . 'staff', $data2);

             
             
             
            
               //Create media
            $media_folder = $this->app->get_media_folder().'/'.$companyusername;
            $mediaPath    = FCPATH . $media_folder;
            
           mkdir($mediaPath);
                        
            redirect(base_url()."authentication/register3");
              
            }
        }

       $data['title']     = _l('clients_register_heading');
        $data['bodyclass'] = 'register_admin2';
        $this->data($data);
        $this->view('register_admin2');
        $this->layout();
         
    }

    public function register3()
    {
        
        //$staff_id = $session->get('staff_id');
        $staff_id = $_SESSION['staff_id'];
                       
        $_SESSION['my_staff_id'] = $staff_id;
        
        if (is_client_logged_in()) {
            redirect(site_url());
        }
        if (is_staff_logged_in()) {
            redirect(base_url().'admin/');    
        }
        if (isset($_GET['staffid']))
        {
            $staffid =  $_GET['staffid'];
        }
            
    
        
        $this->form_validation->set_rules('choose', _l('clients_company'), 'required');
      
       
      
        $this->form_validation->set_message('has_no_spaces', "The Company Username must have no spaces");
        $this->form_validation->set_message('has_no_caps', "The Company Username must have no capital letters");
        $this->form_validation->set_message('required', "Please select an option above");
         
        if ($this->input->post()) {

            if ($this->form_validation->run() !== false) {
                $data = $this->input->post();
                
                 $data2['industry'] = $data['industry'];
                if($data['choose']==1)
                {
                    $data2['max_users'] = 1;
                }
                  if($data['choose']==2)
                {
                     $data2['max_users'] = 5;
                }
                   if($data['choose']==3)
                {
                     $data2['max_users'] = 10;
                }
                   if($data['choose']==4)
                {
                    $data2['max_users'] = 50;
                }
                   if($data['choose']==5)
                {
                     $data2['max_users'] = 1000;
                }
                
            $staffid =      $_SESSION['company_username'];
             $this->db->where('company_username', $staffid);
            $this->db->update(db_prefix() . 'companies', $data2);
                        
         redirect(base_url()."authentication/verify_email");
              
            }
        }

        $data['title']     = _l('clients_register_heading');
        $data['bodyclass'] = 'register_admin3';
        $this->data($data);
        $this->view('register_admin3');
        $this->layout();
         
    }


public function complete_registration()
{
    
        if (is_client_logged_in()) {
            redirect(site_url());
        }
         if (is_staff_logged_in()) {
            
            redirect(base_url().'admin/');    
         }
         $this->form_validation->set_rules('password', _l('clients_register_password'), 'required');
                        $this->form_validation->set_rules('passwordr', _l('clients_register_password_repeat'), 'required|matches[password]');
                           // $this->form_validation->set_message('matches', "The Company Username must have no spaces");
    


        $custom_fields_contacts = get_custom_fields('contacts', [
            'show_on_client_portal' => 1,
            'required'              => 1,
        ]);

        foreach ($custom_fields as $field) {
            $field_name = 'custom_fields[' . $field['fieldto'] . '][' . $field['id'] . ']';
            if ($field['type'] == 'checkbox' || $field['type'] == 'multiselect') {
                $field_name .= '[]';
            }
            $this->form_validation->set_rules($field_name, $field['name'], 'required');
              $this->form_validation->set_rules($field_name, $field['company_email'], 'required');
        }
        foreach ($custom_fields_contacts as $field) {
            $field_name = 'custom_fields[' . $field['fieldto'] . '][' . $field['id'] . ']';
            if ($field['type'] == 'checkbox' || $field['type'] == 'multiselect') {
                $field_name .= '[]';
            }
            $this->form_validation->set_rules($field_name, $field['name'], 'required');
              $this->form_validation->set_rules($field_name, $field['company_email'], 'required');
        }
     
         
         if(isset($_GET['staffid']) && !empty($_GET['staffid']) OR isset($_GET['hash']) && !empty($_GET['hash'])OR $_SESSION['staff_id'] != null){
                // Verify data
    
                if (isset($_GET['staffid']) && !empty($_GET['staffid']) OR isset($_GET['hash']) && !empty($_GET['hash']) )
                {
                    $staffid =  $_GET['staffid'];
                    $hash = $_GET['hash'];
                }
                else
                {
                    $staffid = $_SESSION['staff_id'];
                }


    
         
        $this->form_validation->set_rules('password', _l('clients_register_password'), 'required');
                        $this->form_validation->set_rules('passwordr', _l('clients_register_password_repeat'), 'required|matches[password]');
                           // $this->form_validation->set_message('matches', "The Company Username must have no spaces");
    


        $custom_fields_contacts = get_custom_fields('contacts', [
            'show_on_client_portal' => 1,
            'required'              => 1,
        ]);

        foreach ($custom_fields as $field) {
            $field_name = 'custom_fields[' . $field['fieldto'] . '][' . $field['id'] . ']';
            if ($field['type'] == 'checkbox' || $field['type'] == 'multiselect') {
                $field_name .= '[]';
            }
            $this->form_validation->set_rules($field_name, $field['name'], 'required');
              $this->form_validation->set_rules($field_name, $field['company_email'], 'required');
        }
        foreach ($custom_fields_contacts as $field) {
            $field_name = 'custom_fields[' . $field['fieldto'] . '][' . $field['id'] . ']';
            if ($field['type'] == 'checkbox' || $field['type'] == 'multiselect') {
                $field_name .= '[]';
            }
            $this->form_validation->set_rules($field_name, $field['name'], 'required');
              $this->form_validation->set_rules($field_name, $field['company_email'], 'required');
        }
     
         

             if ($this->input->post()) {
                if ($this->form_validation->run() !== false) {
                    
                    $data = $this->input->post();
                    
                    $data2['password'] = app_hash_password($data['passwordr']);
                    // print_r($data2);
                    // echo $staffid;
                            $this->db->where('staffid', $staffid);
                            $this->db->update(db_prefix() . 'staff', $data2);
                            
                            
                                $this->load->model('Authentication_model');
                
                                $success = $this->Authentication_model->login(
                                $this->input->post('email'),
                                $this->input->post('password', false),
                                $this->input->post('remember'),
                                false
                );
                            
                      redirect(base_url().'admin/');      
                }
            }
          
            
           
       
                
        
             $data['title']     = "Please Enter Your Password";
                         $data['bodyclass'] = 'complete_registration';
                         $this->data($data);
                        $this->view('complete_registration');
                        $this->layout();  
            
         }
         else
         {
             $data['title']     = "Invalid Verification Link";
                         $data['bodyclass'] = 'complete_registration_error';
                         $this->data($data);
                        $this->view('complete_registration_error');
                        $this->layout(); 
         }
       
}



   public function verify_email()
{
  
  $data['title']     = "Verify Your Account";
        $data['bodyclass'] = 'admin_verify_email';
        if(isset($_SESSION['resend_email'])){
            $data['resend_email'] = $_SESSION['resend_email'];
            unset($_SESSION['resend_email']);
        }
        $this->data($data);
        $this->view('admin_verify_email');
        $this->layout();  
    
}

    
    public function resend_verification(){
        //$_SESSION['my_user_email'] = $email;
              //$_SESSION['my_staff_id'] = $staff_id;
        //echo "izvo" . $_SESSION['my_staff_id'] . $_SESSION['my_user_email'];die;
        send_confirm_client_email($_SESSION['my_staff_id'], $_SESSION['my_user_email']);
        $_SESSION['resend_email'] = true;
        redirect(base_url().'authentication/verify_email'); 
    }
   /***
    public function register()
    {
        if (get_option('allow_registration') != 1 || is_client_logged_in()) {
            redirect(site_url());
        }

        if (get_option('company_is_required') == 1) {
            $this->form_validation->set_rules('company', _l('client_company'), 'required');
        }

        if (is_gdpr() && get_option('gdpr_enable_terms_and_conditions') == 1) {
            $this->form_validation->set_rules(
                'accept_terms_and_conditions',
                _l('terms_and_conditions'),
                'required',
                    ['required' => _l('terms_and_conditions_validation')]
            );
        }

        $this->form_validation->set_rules('firstname', _l('client_firstname'), 'required');
        $this->form_validation->set_rules('lastname', _l('client_lastname'), 'required');
        $this->form_validation->set_rules('email', _l('client_email'), 'trim|required|is_unique[' . db_prefix() . 'contacts.email]|valid_email');
        $this->form_validation->set_rules('password', _l('clients_register_password'), 'required');
        $this->form_validation->set_rules('passwordr', _l('clients_register_password_repeat'), 'required|matches[password]');

        if (get_option('use_recaptcha_customers_area') == 1
            && get_option('recaptcha_secret_key') != ''
            && get_option('recaptcha_site_key') != '') {
            $this->form_validation->set_rules('g-recaptcha-response', 'Captcha', 'callback_recaptcha');
        }

        $custom_fields = get_custom_fields('customers', [
            'show_on_client_portal' => 1,
            'required'              => 1,
        ]);

        $custom_fields_contacts = get_custom_fields('contacts', [
            'show_on_client_portal' => 1,
            'required'              => 1,
        ]);

        foreach ($custom_fields as $field) {
            $field_name = 'custom_fields[' . $field['fieldto'] . '][' . $field['id'] . ']';
            if ($field['type'] == 'checkbox' || $field['type'] == 'multiselect') {
                $field_name .= '[]';
            }
            $this->form_validation->set_rules($field_name, $field['name'], 'required');
        }
        foreach ($custom_fields_contacts as $field) {
            $field_name = 'custom_fields[' . $field['fieldto'] . '][' . $field['id'] . ']';
            if ($field['type'] == 'checkbox' || $field['type'] == 'multiselect') {
                $field_name .= '[]';
            }
            $this->form_validation->set_rules($field_name, $field['name'], 'required');
        }
        if ($this->input->post()) {
            if ($this->form_validation->run() !== false) {
                $data = $this->input->post();

                define('CONTACT_REGISTERING', true);

                $clientid = $this->clients_model->add([
                      'billing_street'      => $data['address'],
                      'billing_city'        => $data['city'],
                      'billing_state'       => $data['state'],
                      'billing_zip'         => $data['zip'],
                      'billing_country'     => is_numeric($data['country']) ? $data['country'] : 0,
                      'firstname'           => $data['firstname'],
                      'lastname'            => $data['lastname'],
                      'email'               => $data['email'],
                      'contact_phonenumber' => $data['contact_phonenumber'] ,
                      'website'             => $data['website'],
                      'title'               => $data['title'],
                      'password'            => $data['passwordr'],
                      'company'             => $data['company'],
                      'vat'                 => isset($data['vat']) ? $data['vat'] : '',
                      'phonenumber'         => $data['phonenumber'],
                      'country'             => $data['country'],
                      'city'                => $data['city'],
                      'address'             => $data['address'],
                      'zip'                 => $data['zip'],
                      'state'               => $data['state'],
                      'custom_fields'       => isset($data['custom_fields']) && is_array($data['custom_fields']) ? $data['custom_fields'] : [],
                ], true);

                if ($clientid) {
                    hooks()->do_action('after_client_register', $clientid);

                    if (get_option('customers_register_require_confirmation') == '1') {
                        send_customer_registered_email_to_administrators($clientid);

                        $this->clients_model->require_confirmation($clientid);
                        set_alert('success', _l('customer_register_account_confirmation_approval_notice'));
                        redirect(site_url('authentication/login'));
                    }

                    $this->load->model('authentication_model');

                    $logged_in = $this->authentication_model->login(
                        $this->input->post('email'),
                        $this->input->post('password', false),
                        false,
                        false
                    );

                    $redUrl = site_url();

                    if ($logged_in) {
                        hooks()->do_action('after_client_register_logged_in', $clientid);
                        set_alert('success', _l('clients_successfully_registered'));
                    } else {
                        set_alert('warning', _l('clients_account_created_but_not_logged_in'));
                        $redUrl = site_url('authentication/login');
                    }

                    send_customer_registered_email_to_administrators($clientid);
                    redirect($redUrl);
                }
            }
        }

        $data['title']     = _l('clients_register_heading');
        $data['bodyclass'] = 'register';
        $this->data($data);
        $this->view('register');
        $this->layout();
    }

    public function forgot_password()
    {
        if (is_client_logged_in()) {
            redirect(site_url());
        }

        $this->form_validation->set_rules(
            'email',
            _l('customer_forgot_password_email'),
            'trim|required|valid_email|callback_contact_email_exists'
        );

        if ($this->input->post()) {
            if ($this->form_validation->run() !== false) {
                $this->load->model('Authentication_model');
                $success = $this->Authentication_model->forgot_password($this->input->post('email'));
                if (is_array($success) && isset($success['memberinactive'])) {
                    set_alert('danger', _l('inactive_account'));
                } elseif ($success == true) {
                    set_alert('success', _l('check_email_for_resetting_password'));
                } else {
                    set_alert('danger', _l('error_setting_new_password_key'));
                }
                redirect(site_url('authentication/forgot_password'));
            }
        }
        $data['title'] = _l('customer_forgot_password');
        $this->data($data);
        $this->view('forgot_password');

        $this->layout();
    }
    
    **/
    
    public function register_admin()
    {
      
    
             
                 
        $this->form_validation->set_rules('firstname', _l('client_firstname'), 'required');
        $this->form_validation->set_rules('lastname', _l('client_lastname'), 'required');
        
        $this->form_validation->set_rules('email', _l('client_email'), 'trim|required|is_unique[' . db_prefix() . 'staff.email]|valid_email');
       // $this->form_validation->set_rules('password', _l('clients_register_password'), 'required');
       // $this->form_validation->set_rules('passwordr', _l('clients_register_password_repeat'), 'required|matches[password]');

        // $this->form_validation->set_rules($field_name, $field['company_username'], 'required');
        

        $custom_fields_contacts = get_custom_fields('contacts', [
            'show_on_client_portal' => 1,
            'required'              => 1,
        ]);

        foreach ($custom_fields as $field) {
            $field_name = 'custom_fields[' . $field['fieldto'] . '][' . $field['id'] . ']';
            if ($field['type'] == 'checkbox' || $field['type'] == 'multiselect') {
                $field_name .= '[]';
            }
            $this->form_validation->set_rules($field_name, $field['name'], 'required');
              $this->form_validation->set_rules($field_name, $field['company_email'], 'required');
        }
        foreach ($custom_fields_contacts as $field) {
            $field_name = 'custom_fields[' . $field['fieldto'] . '][' . $field['id'] . ']';
            if ($field['type'] == 'checkbox' || $field['type'] == 'multiselect') {
                $field_name .= '[]';
            }
            $this->form_validation->set_rules($field_name, $field['name'], 'required');
              $this->form_validation->set_rules($field_name, $field['company_email'], 'required');
        }
        if ($this->input->post()) {
            if ($this->form_validation->run() !== false) {
              
                $data = $this->input->post();

           
		
	
		        $companyname = $data['company'];
		        $email =  $data['email'];
		        $firstname =  $data['firstname'];
		        $lastname = $data['lastname'];
		        $admin =  1;
		        $password =  app_hash_password($data['passwordr']);
		        $data['admin'] = 1;
		        
	
    
            

             $this->db->insert(db_prefix() . 'staff', $data);
             
             
             $this->db->select($select_str);
             $this->staff_model->get();
             $this->db->where('email',$email);
             $array = $this->db->get(db_prefix() . 'staff')->result_array();
             $staff_id = $array[0]['staffid'];
            
             //staff_model
             
            
          // redirect("https://www.worksuite.app/plug/admin/authentication");
               //send_mail_template('verify_admin_email', $data['email'], $client_id, $admin['staffid']);
               

               send_confirm_client_email($staff_id, $email);
               
               //send_customer_registered_email_to_administrators();
               //send_customer_registered_email_to_administrators($clientid);
               //FOR NEXT STEP
               
             //  echo $staff_id;
             //$session->set('staff_id', $staff_id);
             
             $_SESSION['staff_id'] = $staff_id;
             
              redirect(base_url()."authentication/register_admin2");
               //  redirect(base_url()."authentication/admin_verify_email");
          
       
            }
        }


    


    

        
   
        $data['title']     = _l('clients_register_heading');
        $data['bodyclass'] = 'register_admin';
        $this->data($data);
        $this->view('register_admin');
        $this->layout();
        
      
        
        
    }
    

    public function reset_password($staff, $userid, $new_pass_key)
    {
        $this->load->model('Authentication_model');
        if (!$this->Authentication_model->can_reset_password($staff, $userid, $new_pass_key)) {
            set_alert('danger', _l('password_reset_key_expired'));
            redirect(site_url('authentication/login'));
        }

        $this->form_validation->set_rules('password', _l('customer_reset_password'), 'required');
        $this->form_validation->set_rules('passwordr', _l('customer_reset_password_repeat'), 'required|matches[password]');
        if ($this->input->post()) {
            if ($this->form_validation->run() !== false) {
                hooks()->do_action('before_user_reset_password', [
                    'staff'  => $staff,
                    'userid' => $userid,
                ]);
                $success = $this->Authentication_model->reset_password(
                        0,
                        $userid,
                        $new_pass_key,
                        $this->input->post('passwordr', false)
                );
                if (is_array($success) && $success['expired'] == true) {
                    set_alert('danger', _l('password_reset_key_expired'));
                } elseif ($success == true) {
                    hooks()->do_action('after_user_reset_password', [
                        'staff'  => $staff,
                        'userid' => $userid,
                    ]);
                    set_alert('success', _l('password_reset_message'));
                } else {
                    set_alert('danger', _l('password_reset_message_fail'));
                }
                redirect(site_url('authentication/login'));
            }
        }
        $data['title'] = _l('admin_auth_reset_password_heading');
        $this->data($data);
        $this->view('reset_password');
        $this->layout();
    }

    public function logout()
    {
        $this->load->model('authentication_model');
        $this->authentication_model->logout(false);
        hooks()->do_action('after_client_logout');
        redirect(site_url('authentication/login'));
    }

    public function contact_email_exists($email = '')
    {
        $this->db->where('email', $email);
        $total_rows = $this->db->count_all_results(db_prefix() . 'contacts');

        if ($total_rows == 0) {
            $this->form_validation->set_message('contact_email_exists', _l('auth_reset_pass_email_not_found'));

            return false;
        }

        return true;
    }

    public function recaptcha($str = '')
    {
        return do_recaptcha_validation($str);
    }

}
