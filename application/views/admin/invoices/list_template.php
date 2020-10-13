<?php defined('BASEPATH') or exit('No direct script access allowed'); ?>
<div class="col-md-12">
   <div class="card mb-1">
      <div class="card-body _buttons">
         <?php $this->load->view('admin/invoices/invoices_top_stats'); ?>
         <?php if(has_permission('invoices','','create')){ ?>
            <a href="<?php echo admin_url('invoices/invoice'); ?>" class="btn btn-primary new new-invoice-list "><?php echo _l('create_new_invoice'); ?></a>
         <?php } ?>
         <?php if(!isset($project)){ ?>
               <a href="<?php echo admin_url('invoices/recurring'); ?>" class="btn btn-primary">
                  <?php echo _l('invoices_list_recurring'); ?>
               </a>
         <?php } ?>
         <select class="selectpicker" id="select-filter" data-live-search="true" onChange="custom_view()" data-style="btn-primary">
            <option value="" data-tokens="<?php echo _l('invoices_list_all'); ?>"><?php echo _l('invoices_list_all'); ?></option>
            <option value="not_sent" data-tokens="<?php echo _l('not_sent_indicator'); ?>"><?php echo _l('not_sent_indicator'); ?></option>
            <option value="not_have_payment" data-tokens="<?php echo _l('invoices_list_not_have_payment'); ?>"><?php echo _l('invoices_list_not_have_payment'); ?></option>
            <option value="recurring" data-tokens="<?php echo _l('invoices_list_recurring'); ?>"><?php echo _l('invoices_list_recurring'); ?></option>
            <?php foreach($invoices_statuses as $status){ ?>
               <option value="invoices_<?php echo $status; ?>" data-tokens="<?php echo format_invoice_status($status,'',false); ?>"><?php echo format_invoice_status($status,'',false); ?></option>
            <?php } ?>

            <?php if(count($invoices_years) > 0){ ?>
               <?php foreach($invoices_years as $year){ ?>
                  <option value="year_<?php echo $year['year']; ?>" data-tokens="<?php echo $year['year']; ?>"><?php echo $year['year']; ?></option>
               <?php } ?>
            <?php } ?>
            <?php if(count($invoices_sale_agents) > 0){ ?>
               <optgroup label="<?php echo _l('sale_agent_string'); ?>">
                  <?php foreach($invoices_sale_agents as $agent){ ?>
                     <option value="sale_agent_<?php echo $agent['sale_agent']; ?>" data-tokens="<?php echo $agent['full_name']; ?>"><?php echo $agent['full_name']; ?></option>
                  <?php } ?>
               </optgroup>
            <?php } ?>
            
            <?php foreach($payment_modes as $mode){
               if(total_rows(db_prefix().'invoicepaymentrecords',array('paymentmode'=>$mode['id'])) == 0){continue;}
               ?>
               <option value="invoice_payments_by_<?php echo $mode['id']; ?>" data-tokens="<?php echo _l('invoices_list_made_payment_by',$mode['name']); ?>"><?php echo _l('invoices_list_made_payment_by',$mode['name']); ?></option>
            <?php } ?>
         </select>
         <a href="#" class="btn btn-primary btn-with-tooltip invoices-total float-right" onclick="slideToggle('#stats-top'); init_invoices_total(true); return false;" data-toggle="tooltip" title="<?php echo _l('view_stats_tooltip'); ?>"><i class="bx bx-bar-chart-alt"></i></a>
      </div>
      <div class="card-body">
         <!-- if invoiceid found in url -->
         <?php echo form_hidden('invoiceid',$invoiceid); ?>
         <?php $this->load->view('admin/invoices/table_html'); ?>
      </div>
   </div>
</div>
