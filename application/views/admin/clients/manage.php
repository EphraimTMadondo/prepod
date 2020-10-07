<?php defined('BASEPATH') or exit('No direct script access allowed'); ?>
<?php init_head(); ?>
<!-- BEGIN: Content-->
<div class="app-content content">
      <div class="content-overlay"></div>
      <div class="content-wrapper">
         <div class="row">
            <div class="col-md-12">
               <div class="card _filters _hidden_inputs hidden">
                  <?php
                     echo form_hidden('my_customers');
                     echo form_hidden('requires_registration_confirmation');
                     foreach($groups as $group){
                        echo form_hidden('customer_group_'.$group['id']);
                     }
                     foreach($contract_types as $type){
                        echo form_hidden('contract_type_'.$type['id']);
                     }
                     foreach($invoice_statuses as $status){
                        echo form_hidden('invoices_'.$status);
                     }
                     foreach($estimate_statuses as $status){
                        echo form_hidden('estimates_'.$status);
                     }
                     foreach($project_statuses as $status){
                     echo form_hidden('projects_'.$status['id']);
                     }
                     foreach($proposal_statuses as $status){
                     echo form_hidden('proposals_'.$status);
                     }
                     foreach($customer_admins as $cadmin){
                     echo form_hidden('responsible_admin_'.$cadmin['staff_id']);
                     }
                     foreach($countries as $country){
                     echo form_hidden('country_'.$country['country_id']);
                     }
                     ?>
               </div>
               <div class="card" style="margin-top: 20px;">
                  <div class="card-body">
                     <div class="_buttons">
                        <?php if (has_permission('customers','','create')) { ?>
                        <a href="<?php echo admin_url('clients/client'); ?>" class="btn btn-primary mr-1 mb-1">
                        <?php echo _l('new_client'); ?></a>
                        <a href="<?php echo admin_url('clients/import'); ?>"  class="btn btn-primary mr-1 mb-1">
                        <?php echo _l('import_customers'); ?></a>
                        <?php } ?>
                        <a href="<?php echo admin_url('clients/all_contacts'); ?>"  class="btn btn-primary mr-1 mb-1">
                        <?php echo _l('customer_contacts'); ?></a>
                        <select class="selectpicker mb-1" id="select-filter" data-live-search="true" onChange="custom_view()" data-style="btn-primary">
                           <option value="" data-tokens="<?php echo _l('customers_sort_all'); ?>"><?php echo _l('customers_sort_all'); ?></option>
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
                           <?php if(count($countries) > 1){ ?>
                              <optgroup label="<?php echo _l('clients_country'); ?>">
                                 <?php foreach($countries as $country){ ?>
                                    <option value="country_<?php echo $country['country_id']; ?>" data-tokens="<?php echo $country['short_name']; ?>"><?php echo $country['short_name']; ?></option>
                                 <?php } ?>
                              </optgroup>
                           <?php } ?>
                           <optgroup label="<?php echo _l('invoices'); ?>">
                              <?php foreach($invoice_statuses as $status){ ?>
                                 <option value="invoices_<?php echo $status; ?>" data-tokens="<?php echo $status; ?>"><?php echo $status; ?></option>
                              <?php } ?>
                           </optgroup>
                           <optgroup label="<?php echo _l('estimates'); ?>">
                              <?php foreach($estimate_statuses as $status){ ?>
                                 <option value="estimates_<?php echo $status; ?>" data-tokens="<?php echo $status; ?>"><?php echo $status; ?></option>
                              <?php } ?>
                           </optgroup>
                           <optgroup label="<?php echo _l('projects'); ?>">
                              <?php foreach($project_statuses as $status){ ?>
                                 <option value="projects_<?php echo $status; ?>" data-tokens="<?php echo $status; ?>"><?php echo $status; ?></option>
                              <?php } ?>
                           </optgroup>
                           <optgroup label="<?php echo _l('proposals'); ?>">
                              <?php foreach($proposal_statuses as $status){ ?>
                                 <option  value="proposals_<?php echo $status; ?>" data-tokens="<?php echo $status; ?>"><?php echo $status; ?></option>
                              <?php } ?>
                           </optgroup>
                           <?php if(count($contract_types) > 0){ ?>
                              <optgroup label="<?php echo _l('contract_types'); ?>">
                                 <?php foreach($contract_type_statuses as $status){ ?>
                                    <option value="contract_type_<?php echo $status['id']; ?>" data-tokens="<?php echo _l('customer_have_contracts_by_type',$status['name']); ?>"><?php echo _l('customer_have_contracts_by_type',$status['name']); ?></option>
                                 <?php } ?>
                              </optgroup>
                           <?php } ?>
                           <?php if(count($customer_admins) > 0 && (has_permission('customers','','create') || has_permission('customers','','edit'))){ ?>
                              <optgroup label="<?php echo _l('contract_types'); ?>">
                                 <?php foreach($customer_admins as $cadmin){ ?>
                                    <option value="responsible_admin_<?php echo $cadmin['staff_id']; ?>" data-tokens="<?php echo get_staff_full_name($cadmin['staff_id']); ?>"><?php echo get_staff_full_name($cadmin['staff_id']); ?></option>
                                 <?php } ?>
                              </optgroup>
                           <?php } ?>
                        </select>
                        <a href="#" onClick="$('#stats-top').toggle();" class="float-right btn btn-light ml-1 mb-1 btn-with-tooltip cursor-pointer" title="<?php echo _l('view_stats_tooltip'); ?>"><i class="bx bx-bar-chart-alt"></i></a>
                     </div>
                     <div class="clearfix"></div>
                     <?php if(has_permission('customers','','view') || have_assigned_customers()) {
                        $where_summary = '';
                        if(!has_permission('customers','','view')){
                           $where_summary = ' AND userid IN (SELECT customer_id FROM '.db_prefix().'customer_admins WHERE staff_id='.get_staff_user_id().')';
                           
                        }
                        ?>
                        <?php
                        $companyusername = $_SESSION['current_company'];
                        ?>
                     <hr class="hr-panel-heading" />
                     <div class="row mbot15 hide" id="stats-top">
                        <div class="col-md-12">
                           <h4 class="no-margin"><?php echo _l('customers_summary'); ?></h4>
                        </div>
                        <div class="col-md-2 col-xs-6 border-right center">
                           <h3 class="bold"><?php echo total_rows(db_prefix().'clients',"company_username='$companyusername'".($where_summary != '' ? substr($where_summary,5) : '')); ?></h3>
                           <span class="text-dark"><?php echo _l('customers_summary_total'); ?></span>
                        </div>
                        <div class="col-md-2 col-xs-6 border-right center">
                           <h3 class="bold"><?php echo total_rows(db_prefix().'clients','active=1'." AND company_username='$companyusername'".$where_summary); ?></h3>
                           <span class="text-success"><?php echo _l('active_customers'); ?></span>
                        </div>
                        <div class="col-md-2 col-xs-6 border-right center">
                           <h3 class="bold"><?php echo total_rows(db_prefix().'clients','active=0'." AND company_username='$companyusername'".$where_summary); ?></h3>
                           <span class="text-danger"><?php echo _l('inactive_active_customers'); ?></span>
                        </div>
                        <div class="col-md-2 col-xs-6 border-right center">
                           <h3 class="bold"><?php echo total_rows(db_prefix().'contacts','active=1'." AND company_username='$companyusername'".$where_summary); ?></h3>
                           <span class="text-info"><?php echo _l('customers_summary_active'); ?></span>
                        </div>
                        <div class="col-md-2  col-xs-6 border-right center">
                           <h3 class="bold"><?php echo total_rows(db_prefix().'contacts','active=0'." AND company_username='$companyusername'".$where_summary); ?></h3>
                           <span class="text-danger"><?php echo _l('customers_summary_inactive'); ?></span>
                        </div>
                        <div class="col-md-2 col-xs-6 center">
                           <h3 class="bold"><?php echo total_rows(db_prefix().'contacts','last_login LIKE "'.date('Y-m-d').'%"'." AND company_username='$companyusername'".$where_summary); ?></h3>
                           <span class="text-muted">
                           <?php
                              $contactsTemplate = '';
                              if(count($contacts_logged_in_today)> 0){
                                 foreach($contacts_logged_in_today as $contact){
                                 $url = admin_url('clients/client/'.$contact['userid'].'?contactid='.$contact['id']);
                                 $fullName = $contact['firstname'] . ' ' . $contact['lastname'];
                                 $dateLoggedIn = _dt($contact['last_login']);
                                 $html = "<a href='$url' target='_blank'>$fullName</a><br /><small>$dateLoggedIn</small><br />";
                                 $contactsTemplate .= html_escape('<p class="mbot5">'.$html.'</p>');
                              }
                              ?>
                           <?php } ?>
                           <span<?php if($contactsTemplate != ''){ ?> class="pointer text-has-action" data-toggle="popover" data-title="<?php echo _l('customers_summary_logged_in_today'); ?>" data-html="true" data-content="<?php echo $contactsTemplate; ?>" data-placement="bottom" <?php } ?>><?php echo _l('customers_summary_logged_in_today'); ?></span>
                           </span>
                        </div>
                        <hr class="hr-panel-heading" />
                     </div>
                     <?php } ?>
                     <a href="#" data-toggle="modal" data-target="#customers_ nio no-bpk_action" class="bulk-actions-btn table-btn buttons-html5 hide" data-table=".table-clients"><?php echo _l('bulk_actions'); ?></a>
                     <div class="modal fade bulk_actions" id="customers_bulk_action" tabindex="-1" role="dialog">
                        <div class="modal-dialog" role="document">
                           <div class="modal-content">
                              <div class="modal-header">
                                 <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                                 <h4 class="modal-title"><?php echo _l('bulk_actions'); ?></h4>
                              </div>
                              <div class="modal-body">
                                 <?php if(has_permission('customers','','delete')){ ?>
                                 <div class="checkbox checkbox-danger">
                                    <input type="checkbox" name="mass_delete" id="mass_delete">
                                    <label for="mass_delete"><?php echo _l('mass_delete'); ?></label>
                                 </div>
                                 <hr class="mass_delete_separator" />
                                 <?php } ?>
                                 <div id="bulk_change">
                                    <?php echo render_select('move_to_groups_customers_bulk[]',$groups,array('id','name'),'customer_groups','', array('multiple'=>true),array(),'','',false); ?>
                                    <p class="text-danger"><?php echo _l('bulk_action_customers_groups_warning'); ?></p>
                                 </div>
                              </div>
                              <div class="modal-footer">
                                 <button type="button" class="btn btn-default" data-dismiss="modal"><?php echo _l('close'); ?></button>
                                 <a href="#" class="btn btn-secondary" onclick="customers_bulk_action(this); return false;"><?php echo _l('confirm'); ?></a>
                              </div>
                           </div>
                           <!-- /.modal-content -->
                        </div>
                        <!-- /.modal-dialog -->
                     </div>
                     <!-- /.modal -->
                     <div class="checkbox">
                        <input type="checkbox" checked id="exclude_inactive" name="exclude_inactive">
                        <label for="exclude_inactive"><?php echo _l('exclude_inactive'); ?> <?php echo _l('clients'); ?></label>
                     </div>
                     <div class="clearfix mt-2"></div>
                     <?php
                        $table_data = array();
                        $_table_data = array(
                        '<span class="hide"> - </span><div class="checkbox mass_select_all_wrap"><input type="checkbox" id="mass_select_all" data-to-table="clients"><label></label></div>',
                        array(
                           'name'=>_l('the_number_sign'),
                           'th_attrs'=>array('class'=>'toggleable', 'id'=>'th-number')
                           ),
                           array(
                           'name'=>_l('clients_list_company'),
                           'th_attrs'=>array('class'=>'toggleable', 'id'=>'th-company')
                           ),
                           array(
                           'name'=>_l('contact_primary'),
                           'th_attrs'=>array('class'=>'toggleable', 'id'=>'th-primary-contact')
                           ),
                           array(
                           'name'=>_l('company_primary_email'),
                           'th_attrs'=>array('class'=>'toggleable', 'id'=>'th-primary-contact-email')
                           ),
                           array(
                           'name'=>_l('clients_list_phone'),
                           'th_attrs'=>array('class'=>'toggleable', 'id'=>'th-phone')
                           ),
                           array(
                           'name'=>_l('customer_active'),
                           'th_attrs'=>array('class'=>'toggleable', 'id'=>'th-active')
                           ),
                           array(
                           'name'=>_l('customer_groups'),
                           'th_attrs'=>array('class'=>'toggleable', 'id'=>'th-groups')
                           ),
                           array(
                           'name'=>_l('date_created'),
                           'th_attrs'=>array('class'=>'toggleable', 'id'=>'th-date-created')
                           ),
                        );
                        foreach($_table_data as $_t){
                        array_push($table_data,$_t);
                        }

                        $custom_fields = get_custom_fields('customers',array('show_on_table'=>1));
                        foreach($custom_fields as $field){
                        array_push($table_data,$field['name']);
                        }

                        $table_data = hooks()->apply_filters('customers_table_columns', $table_data);

                        render_datatable($table_data,'clients',[],[
                              'data-last-order-identifier' => 'customers',
                              'data-default-order'         => get_table_last_order('customers'),
                        ]);
                        ?>
                  </div>
               </div>
            </div>
         </div>
      </div>
</div>
<!-- END: Content-->
<?php init_tail(); ?>
<script>
   function custom_view(){
      var view = $('#select-filter').val();
      console.log(view);
      dt_custom_view(view,'.table-clients',view);
   }

   $(function(){
       var CustomersServerParams = {};
       $.each($('._hidden_inputs._filters input'),function(){
          CustomersServerParams[$(this).attr('name')] = '[name="'+$(this).attr('name')+'"]';
      });
       CustomersServerParams['exclude_inactive'] = '[name="exclude_inactive"]:checked';

       var tAPI = initDataTable('.table-clients', admin_url+'clients/table', [0], [0], CustomersServerParams,<?php echo hooks()->apply_filters('customers_table_default_order', json_encode(array(2,'asc'))); ?>);
       $('input[name="exclude_inactive"]').on('change',function(){
           tAPI.ajax.reload();
       });
   });
   
   function customers_bulk_action(event) {
       var r = confirm(app.lang.confirm_action_prompt);
       if (r == false) {
           return false;
       } else {
           var mass_delete = $('#mass_delete').prop('checked');
           var ids = [];
           var data = {};
           if(mass_delete == false || typeof(mass_delete) == 'undefined'){
               data.groups = $('select[name="move_to_groups_customers_bulk[]"]').selectpicker('val');
               if (data.groups.length == 0) {
                   data.groups = 'remove_all';
               }
           } else {
               data.mass_delete = true;
           }
           var rows = $('.table-clients').find('tbody tr');
           $.each(rows, function() {
               var checkbox = $($(this).find('td').eq(0)).find('input');
               if (checkbox.prop('checked') == true) {
                   ids.push(checkbox.val());
               }
           });
           data.ids = ids;
           $(event).addClass('disabled');
           setTimeout(function(){
             $.post(admin_url + 'clients/bulk_action', data).done(function() {
              window.location.reload();
          });
         },50);
       }
   }
</script>
</body>
</html>
