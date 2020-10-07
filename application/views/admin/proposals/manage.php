<?php defined('BASEPATH') or exit('No direct script access allowed'); ?>
<?php init_head(); ?>
<!-- BEGIN: Content-->
<div class="app-content content">
   <div class="content-overlay"></div>
   <div class="content-wrapper">
      <div class="row">
         <div class="_filters _hidden_inputs">
            <?php
               foreach($statuses as $_status){
                $val = '';
                if($_status == $this->input->get('status')){
                  $val = $_status;
                }
                echo form_hidden('proposals_'.$_status,$val);
               }
               foreach($years as $year){
                echo form_hidden('year_'.$year['year'],$year['year']);
               }
               foreach($proposals_sale_agents as $agent){
                echo form_hidden('sale_agent_'.$agent['sale_agent']);
               }
               echo form_hidden('leads_related');
               echo form_hidden('customers_related');
               echo form_hidden('expired');
               ?>
         </div>
         <div class="col-md-12">
            <div class="card mt-2">
               <div class="card-body">
                  <?php if(has_permission('proposals','','create')){ ?>
                  <a href="<?php echo admin_url('proposals/proposal'); ?>" class="btn btn-primary ">
                  <?php echo _l('new_proposal'); ?>
                  </a>
                  <?php } ?>
                  <a href="<?php echo admin_url('proposals/pipeline/'.$switch_pipeline); ?>" class="btn btn-primary hidden-xs"><?php echo _l('switch_to_pipeline'); ?></a>
                  <select class="selectpicker mb-1" id="select-filter" data-live-search="true" onChange="custom_view()" data-style="btn-primary">
                     <option value="" data-tokens="<?php echo _l('proposals_list_all'); ?>"><?php echo _l('proposals_list_all'); ?></option>
                     <?php if(get_option('customer_requires_registration_confirmation') == '1' || total_rows(db_prefix().'clients','registration_confirmed=0') > 0) { ?>
                        <option value="requires_registration_confirmation" data-tokens="<?php echo _l('customer_requires_registration_confirmation'); ?>"><?php echo _l('customer_requires_registration_confirmation'); ?></option>
                     <?php } ?>
                     <option value="my_customers" data-tokens="<?php echo _l('customers_assigned_to_me'); ?>"><?php echo _l('customers_assigned_to_me'); ?></option>
                     <?php if(count($groups) > 0){ ?>
                        <optgroup label="<?php echo _l('customer_groups'); ?>">
                           <?php foreach($groups as $group){ ?>
                              <option value="customer_group_<?php echo $group['id']; ?>" data-tokens="<?php echo $group['name']; ?>"><?php echo $group['name']; ?></option>
                           <?php } ?>
                        </optgroup>
                     <?php } ?>
                     <?php foreach($statuses as $status){ ?>
                        <option value="proposals_<?php echo $status; ?>" data-tokens="<?php echo format_proposal_status($status,'',false); ?>"><?php echo format_proposal_status($status,'',false); ?></option>
                     <?php } ?>
                     <?php if(count($years) > 0){ ?>
                        <?php foreach($years as $year){ ?>
                           <option value="year_<?php echo $year['year']; ?>" data-tokens="<?php echo $year['year']; ?>"><?php echo $year['year']; ?></option>
                        <?php } ?>
                     <?php } ?>
                     <?php if(count($proposals_sale_agents) > 0){ ?>
                        <optgroup label="<?php echo _l('sale_agent_string'); ?>">
                           <?php foreach($proposals_sale_agents as $agent){ ?>
                              <option value="sale_agent_<?php echo $agent['sale_agent']; ?>" data-tokens="<?php echo get_staff_full_name($agent['sale_agent']); ?>"><?php echo get_staff_full_name($agent['sale_agent']); ?></option>
                           <?php } ?>
                        </optgroup>
                     <?php } ?>
                     <option value="expired" data-tokens="<?php echo _l('proposal_expired'); ?>"><?php echo _l('proposal_expired'); ?></option>
                     <option value="leads_related" data-tokens="<?php echo _l('proposals_leads_related'); ?>"><?php echo _l('proposals_leads_related'); ?></option>
                     <option value="customers_related" data-tokens="<?php echo _l('proposals_customers_related'); ?>"><?php echo _l('proposals_customers_related'); ?></option>
                  </select>
               </div>
					<hr class="hr-panel-heading" />
               <div class="card-body">
                   <!-- if invoiceid found in url -->
                   <?php echo form_hidden('proposal_id',$proposal_id); ?>
                  <?php
                     $table_data = array(
                        _l('proposal') . ' #',
                        _l('proposal_subject'),
                        _l('proposal_to'),
                        _l('proposal_total'),
                        _l('proposal_date'),
                        _l('proposal_open_till'),
                        _l('tags'),
                        _l('proposal_date_created'),
                        _l('proposal_status'),
                        );

                        $custom_fields = get_custom_fields('proposal',array('show_on_table'=>1));
                        foreach($custom_fields as $field){
                           array_push($table_data,$field['name']);
                        }

                        $table_data = hooks()->apply_filters('proposals_table_columns', $table_data);
                        render_datatable($table_data,'proposals',[],[
                           'data-last-order-identifier' => 'proposals',
                           'data-default-order'         => get_table_last_order('proposals'),
                        ]);
                     ?>
               </div>
            </div>
         </div>
         <div class="col-md-7 small-table-right-col">
            <div id="proposal" class="hide">
            </div>
         </div>
      </div>
   </div>
</div>
<?php $this->load->view('admin/includes/modals/sales_attach_file'); ?>
<script>var hidden_columns = [4,5,6,7];</script>
<?php init_tail(); ?>
<div id="convert_helper"></div>
<script>
   function custom_view(){
      var view = $('#select-filter').val();
      console.log(view);
      dt_custom_view(view,'.table-proposals',view);
   }

   var proposal_id;
   $(function(){
     var Proposals_ServerParams = {};
     $.each($('._hidden_inputs._filters input'),function(){
       Proposals_ServerParams[$(this).attr('name')] = '[name="'+$(this).attr('name')+'"]';
     });
     initDataTable('.table-proposals', admin_url+'proposals/table', ['undefined'], ['undefined'], Proposals_ServerParams, [7, 'desc']);
     init_proposal();
   });
</script>
</body>
</html>
