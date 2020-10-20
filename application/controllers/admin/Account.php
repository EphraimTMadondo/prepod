<?php

defined('BASEPATH') or exit('No direct script access allowed');

//$checkout = base_url()."checkout-sdk-php/checkout.php";
//include $checkout;


use Checkout\CheckoutApi;
use Checkout\Models\Tokens\Card;
use Checkout\Models\Payments\TokenSource;
use Checkout\Models\Payments\Payment;


class Account extends AdminController
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model('account_model');
    }

    public function index()
    {
        $this->list_info();
    }

    public function list_info()
    {

       
        $data['title']      = "My Worksuite Account";

        $this->load->view('admin/account/manage', $data);
    }
    
     public function payments()
    {


        if($_GET['payment_made']=="yes")
      {
         set_alert('success', 'Payment successfully made');
        redirect( site_url()."admin/account/payments");
        //blank_page(_l('Maximum users updated'));
      }
     
        
        $data['title']      = "My Worksuite Account";

        $this->load->view('admin/account/payments', $data);
    }
    
     public function make_payment()
    {

        if(isset($_GET['payment_failed']))
        {
            if($_GET['payment_failed']=="yes")
      {
         set_alert('error', 'Payment Failed. Please Try Again.');
        redirect(site_url()."admin/account/make_payment");
        //blank_page(_l('Maximum users updated'));
      }
        
        }
        
        $data['title']      = "My Worksuite Account";

        $this->load->view('admin/account/make_payment', $data);
    }
    
    
 
    
    
    
     
       
    
    
     public function update()
    {
                         
        //$this->form_validation->set_rules('choose', _l('clients_company'), 'required');
      
       
        //$this->form_validation->set_message('required', "Please select an option above");
     
        if ($this->input->post()) {
            $data = $this->input->post();
            
            if($data['choose'] != null)
            {
               
               

                $data2=[];
                
                
                
                if($data['choose']==1)
                {
                    $data2['max_users'] = 2;
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
                
        $companyusername = $_SESSION['current_company'];
        $this->db->where('company_username', $companyusername);
      $done =  $this->db->update(db_prefix() . 'companies', $data2);
      if($done)
      {
         set_alert('success', 'Maximum users updated');
        redirect(site_url()."admin/account/");
        //blank_page(_l('Maximum users updated'));
      }
      
        }
    
}
       
        $data['title']      = "Update Max Users";

        $this->load->view('admin/account/update', $data);
    }
    



  
}
