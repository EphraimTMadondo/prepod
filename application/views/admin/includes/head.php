<?php defined('BASEPATH') or exit('No direct script access allowed'); ?>
<!DOCTYPE html>
<html lang="<?php echo $locale; ?>">
<head>
    <?php $isRTL = (is_rtl() ? 'true' : 'false'); ?>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="user-scalable=no, width=device-width, initial-scale=1, maximum-scale=1" />
    <link href="https://fonts.googleapis.com/css?family=Rubik:300,400,500,600%7CIBM+Plex+Sans:300,400,500,600,700" rel="stylesheet">
    <title><?php echo isset($title) ? $title : get_option('companyname'); ?></title>


    <!-- Problem CSS -->
    <link rel="stylesheet" type="text/css" href="<?php echo base_url();?>assets/frest/app-assets/css/bootstrap.css">
    
        <?php echo app_compile_css(); ?>
    

    
    
    
    
    <?php render_admin_js_variables(); ?>

    <script>
        var totalUnreadNotifications = <?php echo $current_user->total_unread_notifications; ?>,
        proposalsTemplates = <?php echo json_encode(get_proposal_templates()); ?>,
        contractsTemplates = <?php echo json_encode(get_contract_templates()); ?>,
        billingAndShippingFields = ['billing_street','billing_city','billing_state','billing_zip','billing_country','shipping_street','shipping_city','shipping_state','shipping_zip','shipping_country'],
        isRTL = '<?php echo $isRTL; ?>',
        taskid,taskTrackingStatsData,taskAttachmentDropzone,taskCommentAttachmentDropzone,newsFeedDropzone,expensePreviewDropzone,taskTrackingChart,cfh_popover_templates = {},_table_api;
    </script>
    <?php app_admin_head(); ?>
</head>
<body <?php echo admin_body_class(isset($bodyclass) ? $bodyclass : ''); ?><?php if($isRTL === 'true'){ echo 'dir="rtl"';}; ?>>
<?php hooks()->do_action('after_body_start'); ?>






    <!-- Added by Leo -->
    
    
        <!-- BEGIN: Vendor CSS-->
    <link rel="stylesheet" type="text/css" href="<?php echo base_url();?>assets/frest/app-assets/vendors/css/vendors.min.css">
    <link rel="stylesheet" type="text/css" href="<?php echo base_url();?>assets/frest/app-assets/vendors/css/charts/apexcharts.css">
    <link rel="stylesheet" type="text/css" href="<?php echo base_url();?>assets/frest/app-assets/vendors/css/extensions/swiper.min.css">
    <!-- END: Vendor CSS-->

    <!-- Tui Calendar -->
    <link rel="stylesheet" type="text/css" href="https://uicdn.toast.com/tui-calendar/latest/tui-calendar.css" />

    <!-- If you use the default popups, use this. -->
    <link rel="stylesheet" type="text/css" href="https://uicdn.toast.com/tui.date-picker/latest/tui-date-picker.css" />
    <link rel="stylesheet" type="text/css" href="https://uicdn.toast.com/tui.time-picker/latest/tui-time-picker.css" />
    <!-- End of Tui Calendar -->

    <!-- BEGIN: Theme CSS-->

    <link rel="stylesheet" type="text/css" href="<?php echo base_url();?>assets/frest/app-assets/css/bootstrap-extended.css">
    <link rel="stylesheet" type="text/css" href="<?php echo base_url();?>assets/frest/app-assets/css/colors.css">
    <link rel="stylesheet" type="text/css" href="<?php echo base_url();?>assets/frest/app-assets/css/components.css">
    <link rel="stylesheet" type="text/css" href="<?php echo base_url();?>assets/frest/app-assets/css/themes/dark-layout.css">
    <link rel="stylesheet" type="text/css" href="<?php echo base_url();?>assets/frest/app-assets/css/themes/semi-dark-layout.css">
    <!-- END: Theme CSS-->

    <!-- Perfect-scrollbar  -->
    <link rel="stylesheet" href="assets/plugins/perfect-scrollbar/perfect-scrollbar-1.4.0/css/perfect-scrollbar.css">
    
    
    
    <!-- BEGIN: Page CSS-->
    <link rel="stylesheet" type="text/css" href="<?php echo base_url();?>assets/frest/app-assets/css/core/menu/menu-types/vertical-menu.css">
    <link rel="stylesheet" type="text/css" href="<?php echo base_url();?>assets/frest/app-assets/css/plugins/calendars/app-calendar.css">
    <link rel="stylesheet" type="text/css" href="<?php echo base_url();?>assets/frest/app-assets/css/pages/dashboard-ecommerce.css">
    <!-- END: Page CSS-->

    <!-- BEGIN: Custom CSS-->
    <link rel="stylesheet" type="text/css" href="<?php echo base_url();?>assets/frest/assets/css/style.css">
    <link rel="stylesheet" type="text/css" href="<?php echo base_url();?>assets/css/dashboard-custom.css">
    <!-- END: Custom CSS-->
    
    <!-- End of Added by Leo -->

