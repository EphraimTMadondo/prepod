<?php defined('BASEPATH') or exit('No direct script access allowed'); ?>
<?php include_once(APPPATH.'views/admin/includes/helpers_bottom.php'); ?>
 <!-- BEGIN: Vendor JS-->
<script src="<?php echo base_url();?>assets/frest/app-assets/vendors/js/vendors.min.js"></script>
<script src="<?php echo base_url();?>assets/frest/app-assets/fonts/LivIconsEvo/js/LivIconsEvo.tools.min.js"></script>
<script src="<?php echo base_url();?>assets/frest/app-assets/fonts/LivIconsEvo/js/LivIconsEvo.defaults.min.js"></script>
<script src="<?php echo base_url();?>assets/frest/app-assets/fonts/LivIconsEvo/js/LivIconsEvo.min.js"></script>





<!-- Data tables -->
<script src="<?php echo base_url();?>assets/frest/app-assets/vendors/js/tables/datatable/datatables.min.js"></script>
<script src="<?php echo base_url();?>assets/frest/app-assets/vendors/js/tables/datatable/dataTables.bootstrap4.min.js"></script>
<script src="<?php echo base_url();?>assets/frest/app-assets/vendors/js/tables/datatable/dataTables.buttons.min.js"></script>
<script src="<?php echo base_url();?>assets/frest/app-assets/vendors/js/tables/datatable/buttons.html5.min.js"></script>
<script src="<?php echo base_url();?>assets/frest/app-assets/vendors/js/tables/datatable/buttons.print.min.js"></script>
<script src="<?php echo base_url();?>assets/frest/app-assets/vendors/js/tables/datatable/buttons.bootstrap.min.js"></script>
<script src="<?php echo base_url();?>assets/frest/app-assets/vendors/js/tables/datatable/pdfmake.min.js"></script>
<script src="<?php echo base_url();?>assets/frest/app-assets/vendors/js/tables/datatable/vfs_fonts.js"></script>
<script src="<?php echo base_url();?>assets/frest/app-assets/vendors/js/extensions/dropzone.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap-select@1.13.14/dist/js/bootstrap-select.min.js"></script>
<script src="<?php echo base_url();?>assets/plugins/bootstrap-select-ajax/js/ajax-bootstrap-select.min.js"></script>


<script type="text/javascript" id="tinymce-js" src="<?php echo base_url();?>assets/plugins/tinymce/tinymce.min.js?v=2.4.2"></script>
<script type="text/javascript" id="jquery-shortcuts-js" src="<?php echo base_url();?>assets/plugins/jquery-shortcuts/jquery.shortcuts.js"></script>
<script type="text/javascript" id="jquery-validation-js" src="<?php echo base_url();?>assets/plugins/jquery-validation/jquery.validate.min.js?v=2.4.2"></script>
<script type="text/javascript" id="google-js" src="https://apis.google.com/js/api.js?onload=onGoogleApiLoad" defer></script>
<script type="text/javascript" id="common-js" src="<?php echo base_url();?>assets/builds/common.js"></script>
<script type="text/javascript" id="app-js" src="<?php echo base_url();?>assets/js/main.js"></script>



<?php
   switch($page)
   {
      case 'dashboard':
     
         echo "<script src='".base_url()."assets/frest/app-assets/vendors/js/charts/apexcharts.min.js'></script>\n";
         echo "<script src='".base_url()."assets/frest/app-assets/vendors/js/extensions/dragula.min.js'></script>\n";
         echo "<script src='".base_url()."assets/frest/app-assets/vendors/js/extensions/swiper.min.js'></script>\n";
         echo "<script src='".base_url()."assets/frest/app-assets/vendors/js/charts/chart.min.js'></script>\n";
   
         echo "<script src='".base_url()."assets/frest/app-assets/vendors/js/extensions/moment.min.js'></script>\n";
         echo "<script src='".base_url()."application/views/themes/assets/js/dashboard-custom.js'></script>\n";
       
      
      break;
      case 'calendar':
         echo "<script src='".base_url()."assets/frest/app-assets/vendors/js/calendar/tui-code-snippet.min.js'></script>\n";
         echo "<script src='".base_url()."assets/frest/app-assets/vendors/js/calendar/tui-dom.js'></script>\n";
         echo "<script src='".base_url()."assets/frest/app-assets/vendors/js/calendar/tui-time-picker.min.js'></script>\n";
         echo "<script src='".base_url()."assets/frest/app-assets/vendors/js/calendar/tui-date-picker.min.js'></script>\n";
         echo "<script src='".base_url()."assets/frest/app-assets/vendors/js/extensions/moment.min.js'></script>\n";
         echo "<script src='".base_url()."assets/frest/app-assets/vendors/js/calendar/chance.min.js'></script>\n";
         echo "<script src='".base_url()."assets/frest/app-assets/vendors/js/calendar/tui-calendar.min.js'></script>\n";
      break;
      case "task_kanban":
      case "proposals_kanban":
      case "leads":
         echo "<script src='".base_url()."assets/frest/app-assets/vendors/js/jkanban/jkanban.min.js'></script>\n";
         echo "<script src='".base_url()."assets/frest/app-assets/vendors/js/editors/quill/quill.min.js'></script>\n";
      break;
      case "task_list":
         echo "<script src='".base_url()."assets/frest/app-assets/vendors/js/editors/quill/quill.min.js'></script>\n";
         echo "<script src='".base_url()."assets/frest/app-assets/vendors/js/extensions/dragula.min.js'></script>\n";
      break;
      case "mailbox":
         echo "<script src='".base_url()."assets/frest/app-assets/vendors/js/editors/quill/quill.min.js'></script>\n";
         echo "<script src='".base_url()."assets/frest/app-assets/vendors/js/extensions/toastr.min.js'></script>\n";
      break;
      case "contracts":
      case "projects":
      case "reports":
      case "staff":
         echo "<script src='".base_url()."assets/plugins/jquery-circle-progress/circle-progress.min.js'></script>\n";
         echo "<script src='".base_url()."assets/frest/app-assets/vendors/js/charts/chart.min.js'></script>\n";
      break;
      case "hrm":
      case "purchase":
      case "staff":
         echo "<script src='".base_url()."modules/assets/plugins/handsontable/handsontable.full.min.js'></script>\n";
      break;
      default:
      break;
   }
?>
<!-- BEGIN Vendor JS-->

<!-- BEGIN: Theme JS-->
<script src="<?php echo base_url();?>assets/frest/app-assets/js/scripts/configs/vertical-menu-dark.min.js"></script>
<script src="<?php echo base_url();?>assets/frest/app-assets/js/core/app-menu.min.js"></script>
<!---
<script src="<?php echo base_url();?>assets/frest/app-assets/js/scripts/pickers/dateTime/pick-a-datetime.js"></script> -->

<script src="<?php echo base_url();?>assets/frest/app-assets/js/core/app.js"></script>
<script src="<?php echo base_url();?>assets/frest/app-assets/js/scripts/components.min.js"></script>
<script src="<?php echo base_url();?>assets/frest/app-assets/js/scripts/footer.min.js"></script>

<script src="<?php echo base_url();?>modules/hrm/assets/js/managedayoff.js"></script>
<script src="<?php echo base_url();?>modules/hrm/assets/js/allowancetype.js"></script>
<script src="<?php echo base_url();?>modules/hrm/assets/js/contract.js"></script>
<script src="<?php echo base_url();?>modules/hrm/assets/js/contracttype.js"></script>
<script src="<?php echo base_url();?>modules/hrm/assets/js/jobposition.js"></script>
<script src="<?php echo base_url();?>modules/hrm/assets/js/managecontract.js"></script>
<script src="<?php echo base_url();?>modules/hrm/assets/js/managesettings.js"></script>
<script src="<?php echo base_url();?>modules/hrm/assets/js/managestaff.js"></script>
<script src="<?php echo base_url();?>modules/hrm/assets/js/mmember.js"></script>
<script src="<?php echo base_url();?>modules/hrm/assets/js/payroll.js"></script>
<script src="<?php echo base_url();?>modules/hrm/assets/js/payrollincludes.js"></script>
<script src="<?php echo base_url();?>modules/hrm/assets/js/payslip.js"></script>
<script src="<?php echo base_url();?>modules/hrm/assets/js/workplace.js"></script>

<script src="<?php echo base_url();?>assets/js/app.js"></script>
<script src="<?php echo base_url();?>assets/plugins/datetimepicker/jquery.datetimepicker.full.js"></script>
<script src="<?php echo base_url();?>application/views/themes/assets/plugins/accounting.js/accounting.js"></script>
<script src="<?php echo base_url();?>application/views/assets/builds/vendor-admin.js"></script>



<!-- END: Theme JS-->

<!-- BEGIN: Page JS-->
<?php
   switch($page)
   {
      case 'dashboard':
         echo "<script src='".base_url()."assets/frest/app-assets/js/scripts/pages/dashboard-ecommerce.min.js'></script>\n";
         echo "<script src='".base_url()."assets/frest/app-assets/js/scripts/cards/widgets.js'></script>\n";
         echo "<script src='".base_url()."assets/frest/app-assets/js/scripts/extensions/calendar/calendars-data.js'></script>\n";
         echo "<script src='".base_url()."assets/frest/app-assets/js/scripts/extensions/calendar/schedules.js'></script>\n";
         echo "<script src='".base_url()."assets/frest/app-assets/js/scripts/extensions/calendar/app-calendar.js'></script>\n";
      break;
      case 'calendar':
         echo "<script src='".base_url()."assets/frest/app-assets/js/scripts/extensions/calendar/calendars-data.js'></script>\n";
         echo "<script src='".base_url()."assets/frest/app-assets/js/scripts/extensions/calendar/schedules.js'></script>\n";
         echo "<script src='".base_url()."assets/frest/app-assets/js/scripts/extensions/calendar/app-calendar.js'></script>\n";
      break;
      case "task_list":
         echo "<script src='".base_url()."assets/frest/app-assets/js/scripts/pages/app-todo.js'></script>\n";
      break;
      case "mailbox":
         echo "<script src='".base_url()."assets/frest/app-assets/js/scripts/pages/app-email.js'></script>\n";
      break;
      case "projects":
         echo "<script src='".base_url()."assets/js/projects.js'></script>\n";
      break;
      default:
      break;
   }
?>

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
 </script>
<!-- END: Page JS-->
