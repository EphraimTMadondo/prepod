<?php

defined('BASEPATH') or exit('No direct script access allowed');

include_once(__DIR__ . '/App_pdf.php');

class Proposal_pdf extends App_pdf
{
    protected $proposal;

    private $proposal_number;

    public function __construct($proposal, $tag = '')
    {
        $proposal                = hooks()->apply_filters('proposal_html_pdf_data', $proposal);
        $GLOBALS['proposal_pdf'] = $proposal;

        parent::__construct();

        $this->tag      = $tag;
        $this->proposal = $proposal;

        $this->proposal_number = format_proposal_number($this->proposal->id);

        if ($proposal->rel_id != null && $proposal->rel_type == 'customer') {
            $this->load_language($proposal->rel_id);
        }

<<<<<<< HEAD
       $this->SetTitle($this->proposal_number);
        $this->SetDisplayMode('default', 'OneColumn');
         
        # Don't remove these lines - important for the PDF layout
        
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
        $startofpdf = "<div style='page-break-before: always; height: 5000px;'></div>"."<div style='page-break-before: always; height: 5000px;'></div>"."<div style='max-width: 10px;'>"."<h2 >".$proposal->subject.$this->font_size ." Proposal"."</h2>"."</div>";
        $this->writeHTML($startofpdf, true, false, false, false, '');
        $this->SetFont ('freesans', '', 10 , '', 'default', true );
       
       
      
        
        
         $startofpdf = "<div style = 'display: flex'>"." <div><h1>Prepared by:</h1>"."<p>".$proposal->company_name."</p></div>";
         $startofpdf .= "<div><h1>Prepared For:</h1>"."<p>".$proposal->proposal_to."</p></div>";
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
         $startofpdf = $proposal->introduction."<div style='page-break-before: always; height: 5000px;'></div>"."<div style='page-break-before: always; height: 5000px;'></div>";
        $this->writeHTML($startofpdf, true, false, false, false, '');
          $this->setPage(3);
             $this->SetFont ('freesans', '', 15 , '', 'default', true );
             
        $this->SetTextColor(0,0,139);
        $startofpdf = "<strong>"."Pricing"."</strong>"."<div style='page-break-before: always; height: 5000px;'></div>";
      
        $this->writeHTML($startofpdf, true, false, false, false, '');
        $this->SetTextColor(0, 0, 0);
        $endofpdf = "<div style='page-break-before: always; height: 5000px;'></div>"."<div style='page-break-before: always; height: 5000px;'></div>"."<strong>"."Terms And Conditions"."</strong>"."<div style='page-break-before: always; height: 5000px;'></div>";
        $this->SetFont ('freesans', '', 10 , '', 'default', true );
        $endofpdf .= $proposal->terms_and_conditions."<div style='page-break-before: always; height: 5000px;'></div>"; 
       
        $this->proposal->content = $this->proposal->content.$endofpdf;
        
        $this->proposal->content = $this->fix_editor_html($this->proposal->content);
       
        
    
=======
        $this->SetTitle($this->proposal_number);
        $this->SetDisplayMode('default', 'OneColumn');

        # Don't remove these lines - important for the PDF layout
        $this->proposal->content = $this->fix_editor_html($this->proposal->content);
>>>>>>> d71d750e00250050260fb71bf92c645d4ca43ed1
    }

    public function prepare()
    {
        $number_word_lang_rel_id = 'unknown';

        if ($this->proposal->rel_type == 'customer') {
            $number_word_lang_rel_id = $this->proposal->rel_id;
        }

        $this->with_number_to_word($number_word_lang_rel_id);

        $total = '';
        if ($this->proposal->total != 0) {
            $total = app_format_money($this->proposal->total, get_currency($this->proposal->currency));
            $total = _l('proposal_total') . ': ' . $total;
        }

        $this->set_view_vars([
            'number'       => $this->proposal_number,
            'proposal'     => $this->proposal,
            'total'        => $total,
            'proposal_url' => site_url('proposal/' . $this->proposal->id . '/' . $this->proposal->hash),
        ]);

        return $this->build();
    }

    protected function type()
    {
        return 'proposal';
    }

    protected function file_path()
    {
        $customPath = APPPATH . 'views/themes/' . active_clients_theme() . '/views/my_proposalpdf.php';
        $actualPath = APPPATH . 'views/themes/' . active_clients_theme() . '/views/proposalpdf.php';

        if (file_exists($customPath)) {
            $actualPath = $customPath;
        }

        return $actualPath;
    }
}
