<?php 
    defined('BASEPATH') or exit('No direct script access allowed'); 
    $isRTL = (is_rtl() ? 'true' : 'false');
?>

<html class="loading" lang="<?php echo $locale; ?>" data-textdirection="ltr">
  <!-- BEGIN: Head-->
  <head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0">
    <title><?php echo isset($title) ? $title : get_option('companyname'); ?></title>
    <link rel="apple-touch-icon" href="<?php echo base_url();?>assets/frest/app-assets/images/ico/apple-icon-120.png">
    <link rel="shortcut icon" id="favicon" href="https://worksuite.app/prepod/uploads/company/favicon.png">
    <link href="https://fonts.googleapis.com/css?family=Rubik:300,400,500,600%7CIBM+Plex+Sans:300,400,500,600,700" rel="stylesheet">
    <?php
      echo "<link rel='stylesheet' type='text/css' href='".base_url()."assets/frest/app-assets/vendors/css/pickers/pickadate/pickadate.css'>\n\t";
      echo "<link rel='stylesheet' type='text/css' href='".base_url()."assets/frest/app-assets/vendors/css/pickers/daterange/daterangepicker.css'>\n\t";
    ?>
    <!-- BEGIN: Vendor CSS-->
    <?php
      switch($page)
      {
        case 'dashboard':
          echo "<link rel='stylesheet' type='text/css' href='".base_url()."assets/frest/app-assets/vendors/css/vendors.min.css'>\n\t";
          echo "<link rel='stylesheet' type='text/css' href='".base_url()."assets/frest/app-assets/vendors/css/extensions/swiper.min.css'>\n\t";
          echo "<link rel='stylesheet' type='text/css' href='".base_url()."assets/frest/app-assets/vendors/css/extensions/dragula.min.css'>\n\t";
          echo "<link rel='stylesheet' type='text/css' href='".base_url()."assets/frest/app-assets/vendors/css/calendars/tui-time-picker.css'>\n\t";
          echo "<link rel='stylesheet' type='text/css' href='".base_url()."assets/frest/app-assets/vendors/css/calendars/tui-date-picker.css'>\n\t";
          echo "<link rel='stylesheet' type='text/css' href='".base_url()."assets/frest/app-assets/vendors/css/calendars/tui-calendar.min.css'>\n\t";
        break;
        case 'calendar':
          echo "<link rel='stylesheet' type='text/css' href='".base_url()."assets/frest/app-assets/vendors/css/vendors.min.css'>\n\t";
          echo "<link rel='stylesheet' type='text/css' href='".base_url()."assets/frest/app-assets/vendors/css/calendars/tui-time-picker.css'>\n\t";
          echo "<link rel='stylesheet' type='text/css' href='".base_url()."assets/frest/app-assets/vendors/css/calendars/tui-date-picker.css'>\n\t";
          echo "<link rel='stylesheet' type='text/css' href='".base_url()."assets/frest/app-assets/vendors/css/calendars/tui-calendar.min.css'>\n\t";
        break;
        case 'task_list':
          echo "<link rel='stylesheet' type='text/css' href='".base_url()."assets/frest/app-assets/vendors/css/vendors.min.css'>\n\t";
          echo "<link rel='stylesheet' type='text/css' href='".base_url()."assets/frest/app-assets/vendors/css/pickers/daterange/daterangepicker.css'>\n\t";
          echo "<link rel='stylesheet' type='text/css' href='".base_url()."assets/frest/app-assets/vendors/css/forms/select/select2.min.css'>\n\t";
          echo "<link rel='stylesheet' type='text/css' href='".base_url()."assets/frest/app-assets/vendors/css/editors/quill/quill.snow.css'>\n\t";
          echo "<link rel='stylesheet' type='text/css' href='".base_url()."assets/frest/app-assets/vendors/css/extensions/dragula.min.css'>\n\t";
        break;
        case 'task_kanban':
        case 'proposals_kanban':
        case 'leads':
          echo "<link rel='stylesheet' type='text/css' href='".base_url()."assets/frest/app-assets/vendors/css/vendors.min.css'>\n\t";
          echo "<link rel='stylesheet' type='text/css' href='".base_url()."assets/frest/app-assets/vendors/css/jkanban/jkanban.min.css'>\n\t";
          echo "<link rel='stylesheet' type='text/css' href='".base_url()."assets/frest/app-assets/vendors/css/editors/quill/quill.snow.css'>\n\t";
        break;
        case 'mailbox':
          echo "<link rel='stylesheet' type='text/css' href='".base_url()."assets/frest/app-assets/vendors/css/vendors.min.css'>\n\t";
          echo "<link rel='stylesheet' type='text/css' href='".base_url()."assets/frest/app-assets/vendors/css/editors/quill/quill.snow.css'>\n\t";
        break;
        default:
          echo "<link rel='stylesheet' type='text/css' href='".base_url()."assets/frest/app-assets/vendors/css/vendors.min.css'>\n\t";
          echo "<link rel='stylesheet' type='text/css' href='".base_url()."assets/frest/app-assets/vendors/css/forms/select/select2.min.css'>\n\t";
        break;
      }
    ?>
    <!-- END: Vendor CSS-->
    
    <!-- BEGIN: Theme CSS-->
    <link rel="stylesheet" type="text/css" href="<?php echo base_url();?>assets/frest/app-assets/css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="<?php echo base_url();?>assets/plugins/fontawesome/css/all.min.css">
    <link rel="stylesheet" type="text/css" href="<?php echo base_url();?>assets/frest/app-assets/css/bootstrap-extended.min.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-select@1.13.14/dist/css/bootstrap-select.min.css">
    <link rel="stylesheet" type="text/css" href="<?php echo base_url();?>assets/frest/app-assets/css/colors.min.css">
    <link rel="stylesheet" type="text/css" href="<?php echo base_url();?>assets/plugins/bootstrap-select-ajax/css/ajax-bootstrap-select.min.css">
    <link rel="stylesheet" type="text/css" href="<?php echo base_url();?>assets/frest/app-assets/css/components.css"> 
    <link rel="stylesheet" type="text/css" href="<?php echo base_url();?>assets/frest/app-assets/css/themes/dark-layout.min.css">
    <link rel="stylesheet" type="text/css" href="<?php echo base_url();?>assets/frest/app-assets/css/themes/semi-dark-layout.min.css">
    <link rel="stylesheet" type="text/css" href="<?php echo base_url();?>assets/frest/app-assets/css/core/menu/menu-types/vertical-menu.css">
    <link rel='stylesheet' type='text/css' href='<?php echo base_url();?>assets/frest/app-assets/vendors/css/tables/datatable/datatables.min.css'>
    <link rel="stylesheet" type="text/css" href="<?php echo base_url();?>assets/frest/app-assets/vendors/css/file-uploaders/dropzone.min.css">
    <!-- END: Theme CSS--->

    <!-- BEGIN: Page CSS-->
    <?php
      switch($page)
      {
        case 'dashboard':
          echo "<link rel='stylesheet' type='text/css' href='".base_url()."assets/frest/app-assets/css/pages/dashboard-ecommerce.min.css'>\n\t";
          echo "<link rel='stylesheet' type='text/css' href='".base_url()."assets/frest/app-assets/css/pages/widgets.css'>\n\t";
          echo "<link rel='stylesheet' type='text/css' href='".base_url()."assets/frest/app-assets/css/plugins/calendars/app-calendar.css'>\n\t";
        break;
        case 'calendar':
          echo "<link rel='stylesheet' type='text/css' href='".base_url()."assets/frest/app-assets/css/plugins/calendars/app-calendar.css'>\n\t";
        break;
        case "task_list":
          echo "<link rel='stylesheet' type='text/css' href='".base_url()."assets/frest/app-assets/css/pages/app-todo.css'>\n\t";
        break;
        case "hrm":
        case "purchase":
          echo "<link rel='stylesheet' type='text/css' href='".base_url()."assets/plugins/handsontable/handsontable.full.min.css'>\n\t";
        break;
        case "task_kanban":
        case "proposals_kanban":
        case "leads":
          echo "<link rel='stylesheet' type='text/css' href='".base_url()."assets/frest/app-assets/css/pages/app-kanban.css'>\n\t";
        break;
        case "mailbox":
          echo "<link rel='stylesheet' type='text/css' href='".base_url()."assets/frest/app-assets/css/pages/app-email.css'>\n\t";
          echo "<link rel='stylesheet' type='text/css' href='".base_url()."assets/frest/app-assets/css/plugins/extensions/toastr.css'>\n\t";
        break;
        default:
        break;
      }
    ?>
    <!-- END: Page CSS-->

    <!-- BEGIN: Custom CSS-->
    <link rel="stylesheet" type="text/css" href="<?php echo base_url();?>assets/frest/assets/css/style.css">
    <!-- END: Custom CSS-->
    
    <?php render_admin_js_variables(); ?>
    <script>
        var totalUnreadNotifications = <?php echo $current_user->total_unread_notifications; ?>,
        proposalsTemplates = <?php echo json_encode(get_proposal_templates()); ?>,
        contractsTemplates = <?php echo json_encode(get_contract_templates()); ?>,
        billingAndShippingFields = ['billing_street','billing_city','billing_state','billing_zip','billing_country','shipping_street','shipping_city','shipping_state','shipping_zip','shipping_country'],
        isRTL = '<?php echo $isRTL; ?>',
        taskid,taskTrackingStatsData,taskAttachmentDropzone,taskCommentAttachmentDropzone,newsFeedDropzone,expensePreviewDropzone,taskTrackingChart,cfh_popover_templates = {},_table_api;
    </script>
    </head>
  <!-- END: Head-->