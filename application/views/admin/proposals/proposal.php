<?php defined('BASEPATH') or exit('No direct script access allowed'); ?>
<?php init_head(); ?>
  <style>
        .newTitle
            {
                font-size: 25px;
                padding-top:15px;
            }
    </style>
<div id="wrapper">
   <div class="content accounting-template proposal">
      <div class="row">
         <?php
            if(isset($proposal)){
             echo form_hidden('isedit',$proposal->id);
            }
            $rel_type = '';
            $rel_id = '';
            if(isset($proposal) || ($this->input->get('rel_id') && $this->input->get('rel_type'))){
             if($this->input->get('rel_id')){
               $rel_id = $this->input->get('rel_id');
               $rel_type = $this->input->get('rel_type');
             } else {
               $rel_id = $proposal->rel_id;
               $rel_type = $proposal->rel_type;
             }
            }
            ?>
         <?php echo form_open($this->uri->uri_string(),array('id'=>'proposal-form','class'=>'_transaction_form proposal-form')); ?>
         
         <div class="col-md-12" style = " margin-left: 15;">
         <div class = "card" style = "margin-top: 75;">
            <div class="card mtop20">
               <div class="card-body">
                    <p class="center newTitle">Proposal Template </p>
                              
                              <hr class="mtop15">
                  <div class="row">
                     <?php if(isset($proposal)){ ?>
                     <div class="col-md-12">
                        <?php echo format_proposal_status($proposal->status); ?>
                     </div>
                     <div class="clearfix"></div>
                     <hr />
                     <?php } ?>
                     <div class="col-md-12">
                        
                        <?php $value = (isset($proposal) ? $proposal->subject : ''); ?>
                        <?php $attrs = (isset($proposal) ? array() : array('autofocus'=>true)); ?>
                        <?php echo render_input('subject','proposal_subject',$value,'text',$attrs); ?>
                        <div class="form-group" app-field-wrapper="introduction">
                            <label for="introduction" class="control-label">
                                  <small class="req text-danger">*</small>
                                        Introduction
                                 </label>
                                 
                            <textarea id="introduction" name="introduction" value="<?php echo $proposal->introduction;?>"  class="form-control tinymce-manual" rows="4"><?php echo $proposal->introduction;?></textarea>
                            
                        </div>
                         <div class="form-group" app-field-wrapper="summary">
                         <label for="introduction" class="control-label">
                                  <small class="req text-danger">*</small>
                                        Summary
                                 </label>
                            <textarea id="summary" name="summary"  value="<?php echo $proposal->summary;?>"  class="form-control tinymce-manual" rows="4"><?php echo $proposal->summary;?></textarea>
                            
                        </div>
                       <div class="form-group" app-field-wrapper="terms_and_conditions">
                            <label for="terms_and_conditions" class="control-label">
                                  <small class="req text-danger">*</small>
                                        Terms & Conditions
                                 </label>
                                 
                            <textarea id="terms_and_conditions" name="terms_and_conditions" value="<?php echo $proposal->terms_and_conditions;?>" class="form-control tinymce-manual" rows="4"><?php echo $proposal->terms_and_conditions;?></textarea>
                            
                        </div>
                       
                         
                        
                     </div>
                   
                  </div>
                 
               </div>
            </div>
            </div>
         </div>
         <div class="col-md-12" style = " margin-left: 15;">
            <div class="card">
               <?php $this->load->view('admin/estimates/_add_edit_items'); ?>
            </div>
         </div>
         
         
         
           <div class="col-md-12" style = " margin-left: 15;">
               <div class="card">
               <div class="card-body">
                    <p class="center newTitle">Customer  Details </p>
                              
                              <hr class="mtop15">
                        <div class="row">
                             
                           <div class="col-md-12">
                               <div class="form-group select-placeholder">
                           <label for="rel_type" class="control-label"><?php echo _l('proposal_related'); ?></label>
                           <select name="rel_type" id="rel_type" class="selectpicker" data-width="100%" data-none-selected-text="<?php echo _l('dropdown_non_selected_tex'); ?>">
                              <option value=""></option>
                              <option value="lead" <?php if((isset($proposal) && $proposal->rel_type == 'lead') || $this->input->get('rel_type')){if($rel_type == 'lead'){echo 'selected';}} ?>><?php echo _l('proposal_for_lead'); ?></option>
                              <option value="customer" <?php if((isset($proposal) &&  $proposal->rel_type == 'customer') || $this->input->get('rel_type')){if($rel_type == 'customer'){echo 'selected';}} ?>><?php echo _l('proposal_for_customer'); ?></option>
                           </select>
                        </div>
                        <div class="form-group select-placeholder<?php if($rel_id == ''){echo '';} ?> " id="rel_id_wrapper">
                           <label for="rel_id"><span class="rel_id_label"></span></label>
                           <div id="rel_id_select">
                              <select name="rel_id" id="rel_id" class="ajax-search" data-width="100%" data-live-search="true" data-none-selected-text="<?php echo _l('dropdown_non_selected_tex'); ?>">
                              <?php if($rel_id != '' && $rel_type != ''){
                                 $rel_data = get_relation_data($rel_type,$rel_id);
                                 $rel_val = get_relation_values($rel_data,$rel_type);
                                    echo '<option value="'.$rel_val['id'].'" selected>'.$rel_val['name'].'</option>';
                                 } ?>
                              </select>
                           </div>
                        </div>
                        <div class="row">
                          <div class="col-md-6">
                              <?php $value = (isset($proposal) ? _d($proposal->date) : _d(date('Y-m-d'))) ?>
                              <?php echo render_date_input('date','proposal_date',$value); ?>
                          </div>
                          <div class="col-md-6">
                            <?php
                        $value = '';
                        if(isset($proposal)){
                          $value = _d($proposal->open_till);
                        } else {
                          if(get_option('proposal_due_after') != 0){
                              $value = _d(date('Y-m-d',strtotime('+'.get_option('proposal_due_after').' DAY',strtotime(date('Y-m-d')))));
                          }
                        }
                        echo render_date_input('open_till','proposal_open_till',$value); ?>
                          </div>
                        </div>
                        <?php
                           $selected = '';
                           $currency_attr = array('data-show-subtext'=>true);
                           foreach($currencies as $currency){
                            if($currency['isdefault'] == 1){
                              $currency_attr['data-base'] = $currency['id'];
                            }
                            if(isset($proposal)){
                              if($currency['id'] == $proposal->currency){
                                $selected = $currency['id'];
                              }
                              if($proposal->rel_type == 'customer'){
                                $currency_attr['disabled'] = true;
                              }
                            } else {
                              if($rel_type == 'customer'){
                                $customer_currency = $this->clients_model->get_customer_default_currency($rel_id);
                                if($customer_currency != 0){
                                  $selected = $customer_currency;
                                } else {
                                  if($currency['isdefault'] == 1){
                                    $selected = $currency['id'];
                                  }
                                }
                                $currency_attr['disabled'] = true;
                              } else {
                               if($currency['isdefault'] == 1){
                                $selected = $currency['id'];
                              }
                            }
                           }
                           }
                           $currency_attr = apply_filters_deprecated('proposal_currency_disabled', [$currency_attr], '2.3.0', 'proposal_currency_attributes');
                           $currency_attr = hooks()->apply_filters('proposal_currency_attributes', $currency_attr);
                           ?>
                           <div class="row">
                             <div class="col-md-6">
                              <?php
                              echo render_select('currency', $currencies, array('id','name','symbol'), 'proposal_currency', $selected, $currency_attr);
                              ?>
                             </div>
                             <div class="col-md-6">
                               <div class="form-group select-placeholder">
                                 <label for="discount_type" class="control-label"><?php echo _l('discount_type'); ?></label>
                                 <select name="discount_type" class="selectpicker" data-width="100%" data-none-selected-text="<?php echo _l('dropdown_non_selected_tex'); ?>">
                                  <option value="" selected><?php echo _l('no_discount'); ?></option>
                                  <option value="before_tax" <?php
                                  if(isset($estimate)){ if($estimate->discount_type == 'before_tax'){ echo 'selected'; }}?>><?php echo _l('discount_type_before_tax'); ?></option>
                                  <option value="after_tax" <?php if(isset($estimate)){if($estimate->discount_type == 'after_tax'){echo 'selected';}} ?>><?php echo _l('discount_type_after_tax'); ?></option>
                                </select>
                              </div>
                            </div>
                           </div>
                        <?php $fc_rel_id = (isset($proposal) ? $proposal->id : false); ?>
                        <?php echo render_custom_fields('proposal',$fc_rel_id); ?>
                         <div class="form-group no-mbot">
                           <label for="tags" class="control-label"><i class="fa fa-tag" aria-hidden="true"></i> <?php echo _l('tags'); ?></label>
                           <input type="text" class="tagsinput" id="tags" name="tags" value="<?php echo (isset($proposal) ? prep_tags_input(get_tags_in($proposal->id,'proposal')) : ''); ?>" data-role="tagsinput">
                        </div>
                        <div class="form-group mtop10 no-mbot">
                            <p><?php echo _l('proposal_allow_comments'); ?></p>
                            <div class="onoffswitch">
                              <input type="checkbox" id="allow_comments" class="onoffswitch-checkbox" <?php if((isset($proposal) && $proposal->allow_comments == 1) || !isset($proposal)){echo 'checked';}; ?> value="on" name="allow_comments">
                              <label class="onoffswitch-label" for="allow_comments" data-toggle="tooltip" title="<?php echo _l('proposal_allow_comments_help'); ?>"></label>
                            </div>
                          </div>
                              <div class="form-group select-placeholder">
                                 <label for="status" class="control-label"><?php echo _l('proposal_status'); ?></label>
                                 <?php
                                    $disabled = '';
                                    if(isset($proposal)){
                                     if($proposal->estimate_id != NULL || $proposal->invoice_id != NULL){
                                       $disabled = 'disabled';
                                     }
                                    }
                                    ?>
                                 <select name="status" class="selectpicker" data-width="100%" <?php echo $disabled; ?> data-none-selected-text="<?php echo _l('dropdown_non_selected_tex'); ?>">
                                    <?php foreach($statuses as $status){ ?>
                                    <option value="<?php echo $status; ?>" <?php if((isset($proposal) && $proposal->status == $status) || (!isset($proposal) && $status == 0)){echo 'selected';} ?>><?php echo format_proposal_status($status,'',false); ?></option>
                                    <?php } ?>
                                 </select>
                              </div>
                               <?php
                                 $i = 0;
                                 $selected = '';
                                 foreach($staff as $member){
                                  if(isset($proposal)){
                                    if($proposal->assigned == $member['staffid']) {
                                      $selected = $member['staffid'];
                                    }
                                  }
                                  $i++;
                                 }
                                 echo render_select('assigned',$staff,array('staffid',array('firstname','lastname')),'proposal_assigned',$selected);
                                 ?>
                           </div>
                          
                        </div>
                        <?php $value = (isset($proposal) ? $proposal->proposal_to : ''); ?>
                        <?php echo render_input('proposal_to','proposal_to',$value); ?>
                        <?php $value = (isset($proposal) ? $proposal->address : ''); ?>
                        <?php echo render_textarea('address','proposal_address',$value); ?>
                        <div class="row">
                           <div class="col-md-6">
                              <?php $value = (isset($proposal) ? $proposal->city : ''); ?>
                              <?php echo render_input('city','billing_city',$value); ?>
                           </div>
                           <div class="col-md-6">
                              <?php $value = (isset($proposal) ? $proposal->state : ''); ?>
                              <?php echo render_input('state','billing_state',$value); ?>
                           </div>
                           <div class="col-md-6">
                              <?php $countries = get_all_countries(); ?>
                              <?php $selected = (isset($proposal) ? $proposal->country : ''); ?>
                              <?php echo render_select('country',$countries,array('country_id',array('short_name'),'iso2'),'billing_country',$selected); ?>
                           </div>
                           <div class="col-md-6">
                              <?php $value = (isset($proposal) ? $proposal->zip : ''); ?>
                              <?php echo render_input('zip','billing_zip',$value); ?>
                           </div>
                           <div class="col-md-6">
                              <?php $value = (isset($proposal) ? $proposal->email : ''); ?>
                              <?php echo render_input('email','proposal_email',$value); ?>
                           </div>
                           <div class="col-md-6">
                              <?php $value = (isset($proposal) ? $proposal->phone : ''); ?>
                              <?php echo render_input('phone','proposal_phone',$value); ?>
                           </div>
                        </div>
                         <div class="">
                  <p class="no-mbot pull-left mtop5 btn-toolbar-notice"><?php echo _l('include_proposal_items_merge_field_help','<b>{proposal_items}</b>'); ?></p>
                    <button type="button" class="btn btn-info mleft10 proposal-form-submit save-and-send transaction-submit">
                        <?php echo _l('save_and_send'); ?>
                    </button>
                    <button class="btn btn-info mleft5 proposal-form-submit transaction-submit" type="button"
                    
                    >
                      <?php echo _l('submit'); ?>
                    </button>
               </div>
                         </div>
                        </div>
                        
                     </div>
                     
                     
                     
   
                     
                     
                     
                     
                     
                     
                     
                     
          <?php echo form_close(); ?>
         <?php $this->load->view('admin/invoice_items/item'); ?>
      </div>
      <div class="btn-bottom-pusher"></div>
   </div>
</div>


<!--
<script type="text/javascript" id="vendor-js" src="<?php echo base_url();?>assets/builds/vendor-admin.js?v=2.4.2"></script>

  -->

  <!--
<script type="text/javascript" id="datatables-js" src="<?php echo base_url();?>assets/plugins/datatables/datatables.min.js?v=2.4.2"></script>
<script type="text/javascript" id="bootstrap-select-js" src="<?php echo base_url();?>assets/builds/bootstrap-select.min.js?v=2.4.2"></script>
<script type="text/javascript" id="jquery-validation-js" src="<?php echo base_url();?>assets/plugins/jquery-validation/jquery.validate.min.js"></script>


<script type="text/javascript" id="common-js" src="<?php echo base_url();?>assets/builds/common.js"></script>
<script type="text/javascript" id="app-js" src="<?php echo base_url();?>assets/js/main.min.js"></script>

 -->
 <!--script -->
<?php// init_tail(); ?>

 <!--script -->
<!-- BEGIN: Footer-->
<footer class="footer footer-static footer-light">
    <p class="clearfix mb-0"><span class="float-left d-inline-block">2020 &copy; Worksuite</span><span class="float-right d-sm-inline-block d-none">Designed with<i class="bx bxs-heart pink mx-50 font-small-3"></i>by<a class="text-uppercase" href="mailto:madondoephraim@gmail.com" target="_blank">TBGA</a></span>
    <button class="btn btn-primary btn-icon scroll-top" type="button"><i class="bx bx-up-arrow-alt"></i></button>
    </p>
</footer>
<!-- END: Footer--><!-- Likes -->
<div class="modal likes_modal fade" id="modal_post_likes" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <h4 class="modal-title">Colleagues who like this post</h4>
      </div>
      <div class="modal-body">
        <div class="row">
          <div id="modal_post_likes_wrapper">

          </div>

        </div>

      </div>
      <div class="modal-footer">
         <a href="#" class="btn btn-secondary load_more_post_likes">Load More</a>
      </div>
    </div>
  </div>
</div>
<!-- Likes -->
<div class="modal likes_modal animated fadeIn" id="modal_post_comment_likes" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <h4 class="modal-title">Colleagues who like this comment</h4>
      </div>
      <div class="modal-body">
        <div class="row">
          <div id="modal_comment_likes_wrapper">

          </div>
        </div>
      </div>
      <div class="modal-footer">
        <a href="#" class="btn btn-secondary load_more_post_comment_likes">Load More</a>
      </div>
    </div>
  </div>
</div>
<div id="event"></div>
<div id="newsfeed" class="animated fadeIn hide" >
</div>
<style>
@media (min-width: 576px)
.modal-dialog {
    max-width: 640px;
    margin: 1.75rem auto;
}
  </style>
<!-- Task modal view -->
<div class="modal fade task-modal-single" id="task-modal" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel">
  <div class="modal-dialog modal-lg">
    <div class="modal-content data">

    </div>
  </div>
</div>

<!--Add/edit task modal-->
<div id="_task"></div>

<!-- Lead Data Add/Edit-->
<div class="modal fade lead-modal" id="lead-modal" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel">
  <div class="modal-dialog modal-lg">
    <div class="modal-content data">

    </div>
  </div>
</div>

<div id="timers-logout-template-warning" class="hide">
  <h2 class="bold">Started tasks timers found!<br />Are you sure you want to logout without stopping the timers?</h2>
  <hr />
  <a href="https://worksuite.app/preprod/admin/authentication/logout" class="btn btn-danger">Logout</a>
</div>

<!--Lead convert to customer modal-->
<div id="lead_convert_to_customer"></div>

<!--Lead reminder modal-->
<div id="lead_reminder_modal"></div>
 <!-- BEGIN: Vendor JS-->
<script src="https://worksuite.app/preprod/assets/frest/app-assets/vendors/js/vendors.min.js"></script>
<script src="https://worksuite.app/preprod/assets/frest/app-assets/fonts/LivIconsEvo/js/LivIconsEvo.tools.min.js"></script>
<script src="https://worksuite.app/preprod/assets/frest/app-assets/fonts/LivIconsEvo/js/LivIconsEvo.defaults.min.js"></script>
<script src="https://worksuite.app/preprod/assets/frest/app-assets/fonts/LivIconsEvo/js/LivIconsEvo.min.js"></script>





<!-- Data tables -->
<script src="https://worksuite.app/preprod/assets/frest/app-assets/vendors/js/tables/datatable/datatables.min.js"></script>
<script src="https://worksuite.app/preprod/assets/frest/app-assets/vendors/js/tables/datatable/dataTables.bootstrap4.min.js"></script>
<script src="https://worksuite.app/preprod/assets/frest/app-assets/vendors/js/tables/datatable/dataTables.buttons.min.js"></script>
<script src="https://worksuite.app/preprod/assets/frest/app-assets/vendors/js/tables/datatable/buttons.html5.min.js"></script>
<script src="https://worksuite.app/preprod/assets/frest/app-assets/vendors/js/tables/datatable/buttons.print.min.js"></script>
<script src="https://worksuite.app/preprod/assets/frest/app-assets/vendors/js/tables/datatable/buttons.bootstrap.min.js"></script>
<script src="https://worksuite.app/preprod/assets/frest/app-assets/vendors/js/tables/datatable/pdfmake.min.js"></script>
<script src="https://worksuite.app/preprod/assets/frest/app-assets/vendors/js/tables/datatable/vfs_fonts.js"></script>
<script src="https://worksuite.app/preprod/assets/frest/app-assets/vendors/js/extensions/dropzone.min.js"></script>

<script src="https://cdn.jsdelivr.net/npm/bootstrap-select@1.13.14/dist/js/bootstrap-select.min.js"></script>

<script src="https://worksuite.app/preprod/assets/plugins/bootstrap-select-ajax/js/ajax-bootstrap-select.min.js"></script>
<script type="text/javascript" id="datatables-js" src="https://worksuite.app/preprod/assets/plugins/datatables/datatables.min.js"></script>
<script type="text/javascript" id="bootstrap-select-js" src="https://worksuite.app/preprod/assets/builds/bootstrap-select.min.js"></script>





<script type="text/javascript" id="tinymce-js" src="https://worksuite.app/preprod/assets/plugins/tinymce/tinymce.min.js?v=2.4.2"></script>
<script type="text/javascript" id="jquery-shortcuts-js" src="https://worksuite.app/preprod/assets/plugins/jquery-shortcuts/jquery.shortcuts.js"></script>
<script type="text/javascript" id="jquery-validation-js" src="https://worksuite.app/preprod/assets/plugins/jquery-validation/jquery.validate.js"></script>
<script type="text/javascript" id="google-js" src="https://apis.google.com/js/api.js?onload=onGoogleApiLoad" defer></script>
<script type="text/javascript" id="common-js" src="https://worksuite.app/preprod/assets/builds/common.js"></script>
<script type="text/javascript" id="app-js" src="https://worksuite.app/preprod/assets/js/main.js"></script>

<script rc="https://worksuite.app/preprod/assets/frest/app-assets/vendors/js/pickers/daterange/daterangepicker.js"></script>


<script src="https://worksuite.app/preprod/application/views/themes/assets/plugins/jquery.are-you-sure/jquery.are-you-sure.js"></script>
<script src="https://worksuite.app/preprod/assets/plugins/accounting.js/accounting.js"></script>
<script src= "https://worksuite.app/preprod/assets/frest/app-assets/vendors/js/extensions/moment.min.js"></script>






<!-- BEGIN Vendor JS-->

<!-- BEGIN: Theme JS-->
<script src="https://worksuite.app/preprod/assets/frest/app-assets/js/scripts/configs/vertical-menu-dark.min.js"></script>
<script src="https://worksuite.app/preprod/assets/frest/app-assets/js/core/app-menu.min.js"></script>

<script src="https://worksuite.app/preprod/assets/frest/app-assets/js/scripts/pickers/dateTime/pick-a-datetime.js"></script> 

<script src="https://worksuite.app/preprod/assets/frest/app-assets/js/core/app.js"></script>
<script src="https://worksuite.app/preprod/assets/frest/app-assets/js/scripts/components.min.js"></script>
<script src="https://worksuite.app/preprod/assets/frest/app-assets/js/scripts/footer.min.js"></script>

<script src="https://worksuite.app/preprod/modules/hrm/assets/js/managedayoff.js"></script>
<script src="https://worksuite.app/preprod/modules/hrm/assets/js/allowancetype.js"></script>
<script src="https://worksuite.app/preprod/modules/hrm/assets/js/contract.js"></script>
<script src="https://worksuite.app/preprod/modules/hrm/assets/js/contracttype.js"></script>
<script src="https://worksuite.app/preprod/modules/hrm/assets/js/jobposition.js"></script>
<script src="https://worksuite.app/preprod/modules/hrm/assets/js/managecontract.js"></script>
<script src="https://worksuite.app/preprod/modules/hrm/assets/js/managesettings.js"></script>
<script src="https://worksuite.app/preprod/modules/hrm/assets/js/managestaff.js"></script>
<script src="https://worksuite.app/preprod/modules/hrm/assets/js/mmember.js"></script>
<script src="https://worksuite.app/preprod/modules/hrm/assets/js/payroll.js"></script>
<script src="https://worksuite.app/preprod/modules/hrm/assets/js/payrollincludes.js"></script>
<script src="https://worksuite.app/preprod/modules/hrm/assets/js/payslip.js"></script>
<script src="https://worksuite.app/preprod/modules/hrm/assets/js/workplace.js"></script>

<script src="https://worksuite.app/preprod/assets/js/app.js"></script>
<script src="https://worksuite.app/preprod/assets/plugins/datetimepicker/jquery.datetimepicker.full.js"></script>
<script src="https://worksuite.app/preprod/application/views/themes/assets/plugins/accounting.js/accounting.js"></script>
<script src="https://worksuite.app/preprod/application/views/assets/builds/vendor-admin.js"></script>

<script src="https://worksuite.app/preprod/application/views/themes/assets/js/main.js"></script>







<!-- END: Theme JS-->

<!-- BEGIN: Page JS-->

<script>
        function custom_fields_hyperlink(){
         var cf_hyperlink = $('body').find('.cf-hyperlink');
         if(cf_hyperlink.length){
             $.each(cf_hyperlink,function(){
                var cfh_wrapper = $(this);
                var cfh_field_to = cfh_wrapper.attr('data-fieldto');
                var cfh_field_id = cfh_wrapper.attr('data-field-id');
                var textEl = $('body').find('#custom_fields_'+cfh_field_to+'_'+cfh_field_id+'_popover');
                var hiddenField = $("#custom_fields\\\["+cfh_field_to+"\\\]\\\["+cfh_field_id+"\\\]");
                var cfh_value = cfh_wrapper.attr('data-value');
                hiddenField.val(cfh_value);

                if($(hiddenField.val()).html() != ''){
                    textEl.html($(hiddenField.val()).html());
                }
                var cfh_field_name = cfh_wrapper.attr('data-field-name');
                textEl.popover({
                    html: true,
                    trigger: "manual",
                    placement: "top",
                    title:cfh_field_name,
                    content:function(){
                        return $(cfh_popover_templates[cfh_field_id]).html();
                    }
                }).on("click", function(e){
                    var $popup = $(this);
                    $popup.popover("toggle");
                    var titleField = $("#custom_fields_"+cfh_field_to+"_"+cfh_field_id+"_title");
                    var urlField = $("#custom_fields_"+cfh_field_to+"_"+cfh_field_id+"_link");
                    var ttl = $(hiddenField.val()).html();
                    var cfUrl = $(hiddenField.val()).attr("href");
                    if(cfUrl){
                        $('#cf_hyperlink_open_'+cfh_field_id).attr('href',(cfUrl.indexOf('://') === -1 ? 'http://' + cfUrl : cfUrl));
                    }
                    titleField.val(ttl);
                    urlField.val(cfUrl);
                    $("#custom_fields_"+cfh_field_to+"_"+cfh_field_id+"_btn-save").click(function(){
                        hiddenField.val((urlField.val() != '' ? '<a href="'+urlField.val()+'" target="_blank">' + titleField.val() + '</a>' : ''));
                        textEl.html(titleField.val() == "" ? "Click here to add link" : titleField.val());
                        $popup.popover("toggle");
                    });
                    $("#custom_fields_"+cfh_field_to+"_"+cfh_field_id+"_btn-cancel").click(function(){
                        if(urlField.val() == ''){
                            hiddenField.val('');
                        }
                        $popup.popover("toggle");
                    });
                });
            });
         }
     }

     	//Make all doc nubers uneditable
	var x = document.getElementsByName("number");
var i;
for (i = 0; i < x.length; i++) {

    x[i].setAttribute("readonly", true )
  
}
 </script>
 
<!-- END: Page JS-->
<!-- end script-->

<!-- end script-->


<script>
   var _rel_id = $('#rel_id'),
   _rel_type = $('#rel_type'),
   _rel_id_wrapper = $('#rel_id_wrapper'),
   data = {};



   $(function(){
    init_currency();
    // Maybe items ajax search
    init_ajax_search('items','#item_select.ajax-search',undefined,admin_url+'items/search');
    validate_proposal_form();
    $('body').on('change','#rel_id', function() {
     if($(this).val() != ''){
      $.get(admin_url + 'proposals/get_relation_data_values/' + $(this).val() + '/' + _rel_type.val(), function(response) {
        $('input[name="proposal_to"]').val(response.to);
        $('textarea[name="address"]').val(response.address);
        $('input[name="email"]').val(response.email);
        $('input[name="phone"]').val(response.phone);
        $('input[name="city"]').val(response.city);
        $('input[name="state"]').val(response.state);
        $('input[name="zip"]').val(response.zip);
        $('select[name="country"]').selectpicker('val',response.country);
        var currency_selector = $('#currency');
        if(_rel_type.val() == 'customer'){
          if(typeof(currency_selector.attr('multi-currency')) == 'undefined'){
            currency_selector.attr('disabled',true);
          }

         } else {
           currency_selector.attr('disabled',false);
        }
        var proposal_to_wrapper = $('[app-field-wrapper="proposal_to"]');
        if(response.is_using_company == false && !empty(response.company)) {
          proposal_to_wrapper.find('#use_company_name').remove();
          proposal_to_wrapper.find('#use_company_help').remove();
          proposal_to_wrapper.append('<div id="use_company_help" class="hide">'+response.company+'</div>');
          proposal_to_wrapper.find('label')
          .prepend("<a href=\"#\" id=\"use_company_name\" data-toggle=\"tooltip\" data-title=\"<?php echo _l('use_company_name_instead'); ?>\" onclick='document.getElementById(\"proposal_to\").value = document.getElementById(\"use_company_help\").innerHTML.trim(); this.remove();'><i class=\"fa fa-building-o\"></i></a> ");
        } else {
          proposal_to_wrapper.find('label #use_company_name').remove();
          proposal_to_wrapper.find('label #use_company_help').remove();
        }
       /* Check if customer default currency is passed */
       if(response.currency){
         currency_selector.selectpicker('val',response.currency);
       } else {
        /* Revert back to base currency */
        currency_selector.selectpicker('val',currency_selector.data('base'));
      }
      currency_selector.selectpicker('refresh');
      currency_selector.change();
    }, 'json');
    }
   });
    $('.rel_id_label').html(_rel_type.find('option:selected').text());
    _rel_type.on('change', function() {
      var clonedSelect = _rel_id.html('').clone();
      _rel_id.selectpicker('destroy').remove();
      _rel_id = clonedSelect;
      $('#rel_id_select').append(clonedSelect);
      proposal_rel_id_select();
      if($(this).val() != ''){
        _rel_id_wrapper.removeClass('hide');
      } else {
        _rel_id_wrapper.addClass('hide');
      }
      $('.rel_id_label').html(_rel_type.find('option:selected').text());
    });
    proposal_rel_id_select();
    <?php if(!isset($proposal) && $rel_id != ''){ ?>
      _rel_id.change();
      <?php } ?>
    });
   function proposal_rel_id_select(){
      var serverData = {};
      serverData.rel_id = _rel_id.val();
      data.type = _rel_type.val();
      init_ajax_search(_rel_type.val(),_rel_id,serverData);
   }
   function validate_proposal_form(){
      appValidateForm($('#proposal-form'), {
        subject : 'required',
        proposal_to : 'required',
        rel_type: 'required',
        rel_id : 'required',
        date : 'required',
        email: {
         email:true,
         required:true
       },
       currency : 'required',
     });
   }

   function appValidateForm(form, form_rules, submithandler, overwriteMessages) {
    $(form).appFormValidator({ rules: form_rules, onSubmit: submithandler, messages: overwriteMessages });
}

function init_items_sortable(preview_table) {
    var _items_sortable = $("#wrapper").find('.items tbody');

    if (_items_sortable.length === 0) { return; }
   
}
</script>


</body>
</html>
