<?php

defined('BASEPATH') or exit('No direct script access allowed');

include_once(__DIR__ . '/App_pdf.php');

class Contract_pdf extends App_pdf
{
    protected $contract;

    public function __construct($contract)
    {
        $contract                = hooks()->apply_filters('contract_html_pdf_data', $contract);
        $GLOBALS['contract_pdf'] = $contract;

        parent::__construct();

        $this->contract = $contract;

        $this->load_language($this->contract->client);
        $this->SetTitle($this->contract->subject);

        # Don't remove these lines - important for the PDF layout + Victor edits
        
          //Cover Page
        $this->setPage(1);
        
        $img_file = base_url()."uploads/company/portfoliobackground1.jpg" ;
        //$this->Image($img_file, 0, 0, 210, 297, '', '', '', false, 300, '', false, false, 0);
        // remove default header/footer
        $this->setPrintHeader(false);
        $this->setPrintFooter(false);
        
        // set margins
        $this->SetMargins(0, 0, 0, true);
        $this->SetMargins(10, 0, -10,true);
        
        // set auto page breaks false
        $this->SetAutoPageBreak(false, 0);
        $this->Image($img_file, 0, 0, 210, 297, 'JPG', '', '', true, 200, '', false, false, 0, false, false, true);

        $this->setY( $_SESSION['start_y'] );
        $this->SetFont ('freesans', '', 40 , '', 'default', true );
        $this->SetTextColor(255, 255, 255);
        $startofpdf = "<div style='page-break-before: always; height: 5000px;'></div>"."<div style='page-break-before: always; height: 5000px;'></div>"."<div style='max-width: 10px;'>"."<h2 >".$contract->subject.$this->font_size ." Contract"."</h2>"."</div>";
        $this->writeHTML($startofpdf, true, false, false, false, '');
        $this->SetFont ('freesans', '', 10 , '', 'default', true );
       
       
        //$this->load->model('contacts_model');
    
       // $customer =     $this->model_name->get_contact($contract->client)->firstname;
        
        
         $startofpdf = "<div style = 'display: flex'>"." <div><h1>Prepared by:</h1>"."<p>".$contract->company_name."</p></div>";
         $startofpdf .= "<div><h1>Prepared For:</h1>"."<p>".$this->contract->client_name."</p></div>";
        $startofpdf .= "</div>";
        
        
        
        $this->writeHTML($startofpdf, true, false, false, false, '');
          //Introduction
        
           $this->setPage(2);
            $this->setY( $_SESSION['start_y'] );
            $this->SetTextColor(0, 0, 0);
            
           $this->Header();
           $this->Footer();
            
            $this->SetMargins(10, 5, 10, true);
           $this->setY( $_SESSION['start_y'] );
           $this->SetFont ('freesans', '', 15 , '', 'default', true );
           
        $this->SetTextColor(0,0,139);
        
        
       $startofpdf = "<div style='page-break-before: always; height: 5000px;'></div>"."<strong>"."Introduction"."</strong>"."<div style='page-break-before: always; height: 5000px;'></div>";
               $this->writeHTML($startofpdf, true, false, false, false, '');
       $this->SetTextColor(0, 0, 0);
       $this->SetFont ('freesans', '', 10 , '', 'default', true );
         $startofpdf = $contract->introduction."<div style='page-break-before: always; height: 5000px;'></div>"."<div style='page-break-before: always; height: 5000px;'></div>";
        $this->writeHTML($startofpdf, true, false, false, false, '');
          $this->setPage(3);
             $this->SetFont ('freesans', '', 15 , '', 'default', true );
             
        $this->SetTextColor(0,0,139);
        $startofpdf = "<strong>"."Content"."</strong>"."<div style='page-break-before: always; height: 5000px;'></div>";
      
        $this->writeHTML($startofpdf, true, false, false, false, '');
        $this->SetTextColor(0, 0, 0);
        
        $this->contract->content = $this->fix_editor_html($this->contract->content);
    }

    public function prepare()
    {
        $this->set_view_vars('contract', $this->contract);

        return $this->build();
    }

    protected function type()
    {
        return 'contract';
    }

    protected function file_path()
    {
        $customPath = APPPATH . 'views/themes/' . active_clients_theme() . '/views/my_contractpdf.php';
        $actualPath = APPPATH . 'views/themes/' . active_clients_theme() . '/views/contractpdf.php';

        if (file_exists($customPath)) {
            $actualPath = $customPath;
        }

        return $actualPath;
    }
}
