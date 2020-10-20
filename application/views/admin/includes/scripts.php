<?php defined('BASEPATH') or exit('No direct script access allowed'); ?>
<?php include_once(APPPATH.'views/admin/includes/helpers_bottom.php'); ?>
 <!-- BEGIN: Vendor JS-->
<script src="<?php echo base_url();?>assets/frest/app-assets/vendors/js/vendors.min.js"></script>
<script src="<?php echo base_url();?>assets/frest/app-assets/fonts/LivIconsEvo/js/LivIconsEvo.tools.min.js"></script>
<script src="<?php echo base_url();?>assets/frest/app-assets/fonts/LivIconsEvo/js/LivIconsEvo.defaults.min.js"></script>
<script src="<?php echo base_url();?>assets/frest/app-assets/fonts/LivIconsEvo/js/LivIconsEvo.min.js"></script>



<!-- Datepicker -->
<?php
   echo "<script src='".base_url()."assets/frest/app-assets/vendors/js/pickers/pickadate/picker.js'></script>\n";
   echo "<script src='".base_url()."assets/frest/app-assets/vendors/js/pickers/pickadate/legacy.js'></script>\n";
   echo "<script src='".base_url()."assets/frest/app-assets/vendors/js/pickers/pickadate/picker.date.js'></script>\n";
   echo "<script src='".base_url()."assets/frest/app-assets/vendors/js/pickers/pickadate/picker.time.js'></script>\n";
   echo "<script src='".base_url()."assets/frest/app-assets/vendors/js/pickers/daterange/moment.min.js'></script>\n";
   echo "<script src='".base_url()."assets/frest/app-assets/vendors/js/pickers/daterange/daterangepicker.js'></script>\n";
?>

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
         echo "<script src='".base_url()."assets/frest/app-assets/vendors/js/pickers/daterange/daterangepicker.js'></script>\n";
         echo "<script src='".base_url()."assets/frest/app-assets/vendors/js/charts/apexcharts.min.js'></script>\n";
         echo "<script src='".base_url()."assets/frest/app-assets/vendors/js/extensions/dragula.min.js'></script>\n";
         echo "<script src='".base_url()."assets/frest/app-assets/vendors/js/extensions/swiper.min.js'></script>\n";
         echo "<script src='".base_url()."assets/frest/app-assets/vendors/js/charts/chart.min.js'></script>\n";
         echo "<script src='".base_url()."assets/frest/app-assets/vendors/js/calendar/tui-code-snippet.min.js'></script>\n";
         echo "<script src='".base_url()."assets/frest/app-assets/vendors/js/calendar/tui-dom.js'></script>\n";
         echo "<script src='".base_url()."assets/frest/app-assets/vendors/js/calendar/tui-time-picker.min.js'></script>\n";
         echo "<script src='".base_url()."assets/frest/app-assets/vendors/js/calendar/tui-date-picker.min.js'></script>\n";
         echo "<script src='".base_url()."assets/frest/app-assets/vendors/js/extensions/moment.min.js'></script>\n";
         echo "<script src='".base_url()."assets/frest/app-assets/vendors/js/calendar/chance.min.js'></script>\n";
         echo "<script src='".base_url()."assets/frest/app-assets/vendors/js/calendar/tui-calendar.min.js'></script>\n";
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
<script src="<?php echo base_url();?>assets/frest/app-assets/js/scripts/pickers/dateTime/pick-a-datetime.js"></script>
<script src="<?php echo base_url();?>assets/frest/app-assets/js/core/app.js"></script>
<script src="<?php echo base_url();?>assets/frest/app-assets/js/scripts/components.min.js"></script>
<script src="<?php echo base_url();?>assets/frest/app-assets/js/scripts/footer.min.js"></script>
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
<!-- END: Page JS-->
