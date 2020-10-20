<?php

defined('BASEPATH') or exit('No direct script access allowed');

class Account_model extends App_Model
{
    public function __construct()
    {
        parent::__construct();
    }

    /**
     * Get account status for Worksuite user
     
     */
    public function get_status()
    {
        
        $this->db->select('status');  
        $companyusername = $_SESSION['current_company'];
        $this->db->where('company_username', $companyusername);

        return  $this->db->get(db_prefix() . 'companies')->row()->status;
    }
    
    
     
    public function get_next_payment_date()
    {
        
        $this->db->select('nextpayment');  
        $companyusername = $_SESSION['current_company'];
        $this->db->where('company_username', $companyusername);

        $nextdate =  $this->db->get(db_prefix() . 'companies')->row()->nextpayment;
        
        return $nextdate;
    }
    
     public function get_max_users()
    {
        
        $this->db->select('max_users');  
        $companyusername = $_SESSION['current_company'];
        $this->db->where('company_username', $companyusername);

        $maxusers =  $this->db->get(db_prefix() . 'companies')->row()->max_users;
        
        return $maxusers;
    }
    
    public function get_payments()
    {
             $companyusername = $_SESSION['current_company'];
             $this->db->where('company_username', $companyusername);
            return $this->db->get(db_prefix() . 'company_payments')->result_array();
    }
    
  
    public function add_payment($amount)
    {
         if($_SESSION['current_company']!= NULL)
           {
             $data['company_username'] =  $_SESSION['current_company'];
             $data['amount'] = $amount;
             $data['date'] =  date("Y-m-d"); 
            $insert = $this->db->insert(db_prefix() . 'company_payments', $data);
            
            $Date =  $this->get_next_payment_date();
            $paydate = date('Y-m-d', strtotime($Date. ' + 28 days'));
            
            
             $this->db->where('company_username', $data['company_username'] );
             
             
             $this->db->set('nextpayment', $paydate);
            $update = $this->db->update(db_prefix() . 'companies');
            
          
            
           

            }

        if($insert != null && $update !=null)
        {
            return "Payment processed.";
        }
    }
    
   
    
    
}