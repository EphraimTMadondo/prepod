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
    <link rel="shortcut icon" id="favicon" href="https://worksuite.app/preprod/uploads/company/favicon.png">
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
    <style src="<?php echo base_url();?>assets/plugins/datetimepicker/jquery.datetimepicker.min.css"></style>

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
          echo "<link rel='stylesheet' type='text/css' href='".base_url()."modules/assets/plugins/handsontable/handsontable.full.min.css'>\n\t";
          echo "<script src='".base_url()."modules/assets/plugins/handsontable/handsontable.full.min.js'></script>\n";
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

    <style>

.alert.alert-success {
    background: #39DA8A !important;
    color: #fff !important;
    box-shadow: 0 3px 8px 0 rgba(57, 218, 138, 0.4);
	border: none;
	z-index: 99999999999!important;
}

.float-alert {
    display: inline-block;
    margin: 0 auto;
    position: fixed;
    -webkit-transition: all .5s ease-in-out;
    transition: all .5s ease-in-out;
    z-index: 1031;
    top: 20px;
    right: 20px;
}

.alert {
    z-index: 99999999999!important;
}

.alert {
    padding: 10px 15px;
    font-size: 14px;
}

.fadeInRight {
    -webkit-animation-name: fadeInRight;
    animation-name: fadeInRight;
}

.animated {
    -webkit-animation-duration: 1s;
    animation-duration: 1s;
    -webkit-animation-fill-mode: both;
    animation-fill-mode: both;
}

.alert {
    padding: 15px;
    margin-bottom: 20px;
    border: 1px solid transparent;
    border-radius: 4px;


}

.mbot15
{
  display: flex;

}


.dataTables_info{
  display: none;

}





    </style>
    
    <?php render_admin_js_variables(); ?>
    <script>
        var totalUnreadNotifications = <?php echo $current_user->total_unread_notifications; ?>,
        proposalsTemplates = <?php echo json_encode(get_proposal_templates()); ?>,
        contractsTemplates = <?php echo json_encode(get_contract_templates()); ?>,
        billingAndShippingFields = ['billing_street','billing_city','billing_state','billing_zip','billing_country','shipping_street','shipping_city','shipping_state','shipping_zip','shipping_country'],
        isRTL = '<?php echo $isRTL; ?>',
        taskid,taskTrackingStatsData,taskAttachmentDropzone,taskCommentAttachmentDropzone,newsFeedDropzone,expensePreviewDropzone,taskTrackingChart,cfh_popover_templates = {},_table_api;
    </script>

<style>
            .modal .modal-content .modal-header {
            align-items: center;
        }
        
                .modal-header {
            display: block;
            background: #226faa;
            padding: 15px 30px;
        }
        
        .modal-body {
    position: relative;
    padding: 15px;
}

.modal-title
{
    color: white;
}

.xdsoft_datetimepicker {
	box-shadow: 0 5px 15px -5px rgba(0, 0, 0, 0.506);
	background: #fff;
	border-bottom: 1px solid #bbb;
	border-left: 1px solid #ccc;
	border-right: 1px solid #ccc;
	border-top: 1px solid #ccc;
	color: #333;
	font-family: "Helvetica Neue", Helvetica, Arial, sans-serif;
	padding: 8px;
	padding-left: 0;
	padding-top: 2px;
	position: absolute;
	z-index: 9999;
	-moz-box-sizing: border-box;
	box-sizing: border-box;
	display: none;
}

.xdsoft_datetimepicker iframe {
	position: absolute;
	left: 0;
	top: 0;
	width: 75px;
	height: 210px;
	background: transparent;
	border: none;
}

/*For IE8 or lower*/
.xdsoft_datetimepicker button {
	border: none !important;
}

.xdsoft_noselect {
	-webkit-touch-callout: none;
	-webkit-user-select: none;
	-khtml-user-select: none;
	-moz-user-select: none;
	-ms-user-select: none;
	-o-user-select: none;
	user-select: none;
}

.xdsoft_noselect::selection { background: transparent }
.xdsoft_noselect::-moz-selection { background: transparent }

.xdsoft_datetimepicker.xdsoft_inline {
	display: inline-block;
	position: static;
	box-shadow: none;
}

.xdsoft_datetimepicker * {
	-moz-box-sizing: border-box;
	box-sizing: border-box;
	padding: 0;
	margin: 0;
}

.xdsoft_datetimepicker .xdsoft_datepicker, .xdsoft_datetimepicker .xdsoft_timepicker {
	display: none;
}

.xdsoft_datetimepicker .xdsoft_datepicker.active, .xdsoft_datetimepicker .xdsoft_timepicker.active {
	display: block;
}

.xdsoft_datetimepicker .xdsoft_datepicker {
	width: 224px;
	float: left;
	margin-left: 8px;
}

.xdsoft_datetimepicker.xdsoft_showweeks .xdsoft_datepicker {
	width: 256px;
}

.xdsoft_datetimepicker .xdsoft_timepicker {
	width: 58px;
	float: left;
	text-align: center;
	margin-left: 8px;
	margin-top: 0;
}

.xdsoft_datetimepicker .xdsoft_datepicker.active+.xdsoft_timepicker {
	margin-top: 8px;
	margin-bottom: 3px
}

.xdsoft_datetimepicker .xdsoft_mounthpicker {
	position: relative;
	text-align: center;
}

.xdsoft_datetimepicker .xdsoft_label i,
.xdsoft_datetimepicker .xdsoft_prev,
.xdsoft_datetimepicker .xdsoft_next,
.xdsoft_datetimepicker .xdsoft_today_button {
	background-image: url(data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAGQAAAAeCAYAAADaW7vzAAAAGXRFWHRTb2Z0d2FyZQBBZG9iZSBJbWFnZVJlYWR5ccllPAAAAyJpVFh0WE1MOmNvbS5hZG9iZS54bXAAAAAAADw/eHBhY2tldCBiZWdpbj0i77u/IiBpZD0iVzVNME1wQ2VoaUh6cmVTek5UY3prYzlkIj8+IDx4OnhtcG1ldGEgeG1sbnM6eD0iYWRvYmU6bnM6bWV0YS8iIHg6eG1wdGs9IkFkb2JlIFhNUCBDb3JlIDUuMy1jMDExIDY2LjE0NTY2MSwgMjAxMi8wMi8wNi0xNDo1NjoyNyAgICAgICAgIj4gPHJkZjpSREYgeG1sbnM6cmRmPSJodHRwOi8vd3d3LnczLm9yZy8xOTk5LzAyLzIyLXJkZi1zeW50YXgtbnMjIj4gPHJkZjpEZXNjcmlwdGlvbiByZGY6YWJvdXQ9IiIgeG1sbnM6eG1wPSJodHRwOi8vbnMuYWRvYmUuY29tL3hhcC8xLjAvIiB4bWxuczp4bXBNTT0iaHR0cDovL25zLmFkb2JlLmNvbS94YXAvMS4wL21tLyIgeG1sbnM6c3RSZWY9Imh0dHA6Ly9ucy5hZG9iZS5jb20veGFwLzEuMC9zVHlwZS9SZXNvdXJjZVJlZiMiIHhtcDpDcmVhdG9yVG9vbD0iQWRvYmUgUGhvdG9zaG9wIENTNiAoV2luZG93cykiIHhtcE1NOkluc3RhbmNlSUQ9InhtcC5paWQ6Q0NBRjI1NjM0M0UwMTFFNDk4NkFGMzJFQkQzQjEwRUIiIHhtcE1NOkRvY3VtZW50SUQ9InhtcC5kaWQ6Q0NBRjI1NjQ0M0UwMTFFNDk4NkFGMzJFQkQzQjEwRUIiPiA8eG1wTU06RGVyaXZlZEZyb20gc3RSZWY6aW5zdGFuY2VJRD0ieG1wLmlpZDpDQ0FGMjU2MTQzRTAxMUU0OTg2QUYzMkVCRDNCMTBFQiIgc3RSZWY6ZG9jdW1lbnRJRD0ieG1wLmRpZDpDQ0FGMjU2MjQzRTAxMUU0OTg2QUYzMkVCRDNCMTBFQiIvPiA8L3JkZjpEZXNjcmlwdGlvbj4gPC9yZGY6UkRGPiA8L3g6eG1wbWV0YT4gPD94cGFja2V0IGVuZD0iciI/PoNEP54AAAIOSURBVHja7Jq9TsMwEMcxrZD4WpBYeKUCe+kTMCACHZh4BFfHO/AAIHZGFhYkBBsSEqxsLCAgXKhbXYOTxh9pfJVP+qutnZ5s/5Lz2Y5I03QhWji2GIcgAokWgfCxNvcOCCGKqiSqhUp0laHOne05vdEyGMfkdxJDVjgwDlEQgYQBgx+ULJaWSXXS6r/ER5FBVR8VfGftTKcITNs+a1XpcFoExREIDF14AVIFxgQUS+h520cdud6wNkC0UBw6BCO/HoCYwBhD8QCkQ/x1mwDyD4plh4D6DDV0TAGyo4HcawLIBBSLDkHeH0Mg2yVP3l4TQMZQDDsEOl/MgHQqhMNuE0D+oBh0CIr8MAKyazBH9WyBuKxDWgbXfjNf32TZ1KWm/Ap1oSk/R53UtQ5xTh3LUlMmT8gt6g51Q9p+SobxgJQ/qmsfZhWywGFSl0yBjCLJCMgXail3b7+rumdVJ2YRss4cN+r6qAHDkPWjPjdJCF4n9RmAD/V9A/Wp4NQassDjwlB6XBiCxcJQWmZZb8THFilfy/lfrTvLghq2TqTHrRMTKNJ0sIhdo15RT+RpyWwFdY96UZ/LdQKBGjcXpcc1AlSFEfLmouD+1knuxBDUVrvOBmoOC/rEcN7OQxKVeJTCiAdUzUJhA2Oez9QTkp72OTVcxDcXY8iKNkxGAJXmJCOQwOa6dhyXsOa6XwEGAKdeb5ET3rQdAAAAAElFTkSuQmCC);
}

.xdsoft_datetimepicker .xdsoft_label i {
	opacity: 0.5;
	background-position: -92px -19px;
	display: inline-block;
	width: 9px;
	height: 20px;
	vertical-align: middle;
}

.xdsoft_datetimepicker .xdsoft_prev {
	float: left;
	background-position: -20px 0;
}
.xdsoft_datetimepicker .xdsoft_today_button {
	float: left;
	background-position: -70px 0;
	margin-left: 5px;
}

.xdsoft_datetimepicker .xdsoft_next {
	float: right;
	background-position: 0 0;
}

.xdsoft_datetimepicker .xdsoft_next,
.xdsoft_datetimepicker .xdsoft_prev ,
.xdsoft_datetimepicker .xdsoft_today_button {
	background-color: transparent;
	background-repeat: no-repeat;
	border: 0 none;
	cursor: pointer;
	display: block;
	height: 30px;
	opacity: 0.5;
	-ms-filter: "progid:DXImageTransform.Microsoft.Alpha(Opacity=50)";
	outline: medium none;
	overflow: hidden;
	padding: 0;
	position: relative;
	text-indent: 100%;
	white-space: nowrap;
	width: 20px;
	min-width: 0;
}

.xdsoft_datetimepicker .xdsoft_timepicker .xdsoft_prev,
.xdsoft_datetimepicker .xdsoft_timepicker .xdsoft_next {
	float: none;
	background-position: -40px -15px;
	height: 15px;
	width: 30px;
	display: block;
	margin-left: 14px;
	margin-top: 7px;
}

.xdsoft_datetimepicker .xdsoft_timepicker .xdsoft_prev {
	background-position: -40px 0;
	margin-bottom: 7px;
	margin-top: 0;
}

.xdsoft_datetimepicker .xdsoft_timepicker .xdsoft_time_box {
	height: 151px;
	overflow: hidden;
	border-bottom: 1px solid #ddd;
}

.xdsoft_datetimepicker .xdsoft_timepicker .xdsoft_time_box >div >div {
	background: #f5f5f5;
	border-top: 1px solid #ddd;
	color: #666;
	font-size: 12px;
	text-align: center;
	border-collapse: collapse;
	cursor: pointer;
	border-bottom-width: 0;
	height: 25px;
	line-height: 25px;
}

.xdsoft_datetimepicker .xdsoft_timepicker .xdsoft_time_box >div > div:first-child {
	border-top-width: 0;
}

.xdsoft_datetimepicker .xdsoft_today_button:hover,
.xdsoft_datetimepicker .xdsoft_next:hover,
.xdsoft_datetimepicker .xdsoft_prev:hover {
	opacity: 1;
	-ms-filter: "progid:DXImageTransform.Microsoft.Alpha(Opacity=100)";
}

.xdsoft_datetimepicker .xdsoft_label {
	display: inline;
	position: relative;
	z-index: 9999;
	margin: 0;
	padding: 5px 3px;
	font-size: 14px;
	line-height: 20px;
	font-weight: bold;
	background-color: #fff;
	float: left;
	width: 182px;
	text-align: center;
	cursor: pointer;
}

.xdsoft_datetimepicker .xdsoft_label:hover>span {
	text-decoration: underline;
}

.xdsoft_datetimepicker .xdsoft_label:hover i {
	opacity: 1.0;
}

.xdsoft_datetimepicker .xdsoft_label > .xdsoft_select {
	border: 1px solid #ccc;
	position: absolute;
	right: 0;
	top: 30px;
	z-index: 101;
	display: none;
	background: #fff;
	max-height: 160px;
	overflow-y: hidden;
}

.xdsoft_datetimepicker .xdsoft_label > .xdsoft_select.xdsoft_monthselect{ right: -7px }
.xdsoft_datetimepicker .xdsoft_label > .xdsoft_select.xdsoft_yearselect{ right: 2px }
.xdsoft_datetimepicker .xdsoft_label > .xdsoft_select > div > .xdsoft_option:hover {
	color: #fff;
	background: #ff8000;
}

.xdsoft_datetimepicker .xdsoft_label > .xdsoft_select > div > .xdsoft_option {
	padding: 2px 10px 2px 5px;
	text-decoration: none !important;
}

.xdsoft_datetimepicker .xdsoft_label > .xdsoft_select > div > .xdsoft_option.xdsoft_current {
	background: #33aaff;
	box-shadow: #178fe5 0 1px 3px 0 inset;
	color: #fff;
	font-weight: 700;
}

.xdsoft_datetimepicker .xdsoft_month {
	width: 100px;
	text-align: right;
}

.xdsoft_datetimepicker .xdsoft_calendar {
	clear: both;
}

.xdsoft_datetimepicker .xdsoft_year{
	width: 48px;
	margin-left: 5px;
}

.xdsoft_datetimepicker .xdsoft_calendar table {
	border-collapse: collapse;
	width: 100%;

}

.xdsoft_datetimepicker .xdsoft_calendar td > div {
	padding-right: 5px;
}

.xdsoft_datetimepicker .xdsoft_calendar th {
	height: 25px;
}

.xdsoft_datetimepicker .xdsoft_calendar td,.xdsoft_datetimepicker .xdsoft_calendar th {
	width: 14.2857142%;
	background: #f5f5f5;
	border: 1px solid #ddd;
	color: #666;
	font-size: 12px;
	text-align: right;
	vertical-align: middle;
	padding: 0;
	border-collapse: collapse;
	cursor: pointer;
	height: 25px;
}
.xdsoft_datetimepicker.xdsoft_showweeks .xdsoft_calendar td,.xdsoft_datetimepicker.xdsoft_showweeks .xdsoft_calendar th {
	width: 12.5%;
}

.xdsoft_datetimepicker .xdsoft_calendar th {
	background: #f1f1f1;
}

.xdsoft_datetimepicker .xdsoft_calendar td.xdsoft_today {
	color: #33aaff;
}

.xdsoft_datetimepicker .xdsoft_calendar td.xdsoft_highlighted_default {
	background: #ffe9d2;
	box-shadow: #ffb871 0 1px 4px 0 inset;
	color: #000;
}
.xdsoft_datetimepicker .xdsoft_calendar td.xdsoft_highlighted_mint {
	background: #c1ffc9;
	box-shadow: #00dd1c 0 1px 4px 0 inset;
	color: #000;
}

.xdsoft_datetimepicker .xdsoft_calendar td.xdsoft_default,
.xdsoft_datetimepicker .xdsoft_calendar td.xdsoft_current,
.xdsoft_datetimepicker .xdsoft_timepicker .xdsoft_time_box >div >div.xdsoft_current {
	background: #33aaff;
	box-shadow: #178fe5 0 1px 3px 0 inset;
	color: #fff;
	font-weight: 700;
}

.xdsoft_datetimepicker .xdsoft_calendar td.xdsoft_other_month,
.xdsoft_datetimepicker .xdsoft_calendar td.xdsoft_disabled,
.xdsoft_datetimepicker .xdsoft_time_box >div >div.xdsoft_disabled {
	opacity: 0.5;
	-ms-filter: "progid:DXImageTransform.Microsoft.Alpha(Opacity=50)";
	cursor: default;
}

.xdsoft_datetimepicker .xdsoft_calendar td.xdsoft_other_month.xdsoft_disabled {
	opacity: 0.2;
	-ms-filter: "progid:DXImageTransform.Microsoft.Alpha(Opacity=20)";
}

.xdsoft_datetimepicker .xdsoft_calendar td:hover,
.xdsoft_datetimepicker .xdsoft_timepicker .xdsoft_time_box >div >div:hover {
	color: #fff !important;
	background: #ff8000 !important;
	box-shadow: none !important;
}

.xdsoft_datetimepicker .xdsoft_calendar td.xdsoft_current.xdsoft_disabled:hover,
.xdsoft_datetimepicker .xdsoft_timepicker .xdsoft_time_box>div>div.xdsoft_current.xdsoft_disabled:hover {
	background: #33aaff !important;
	box-shadow: #178fe5 0 1px 3px 0 inset !important;
	color: #fff !important;
}

.xdsoft_datetimepicker .xdsoft_calendar td.xdsoft_disabled:hover,
.xdsoft_datetimepicker .xdsoft_timepicker .xdsoft_time_box >div >div.xdsoft_disabled:hover {
	color: inherit	!important;
	background: inherit !important;
	box-shadow: inherit !important;
}

.xdsoft_datetimepicker .xdsoft_calendar th {
	font-weight: 700;
	text-align: center;
	color: #999;
	cursor: default;
}

.xdsoft_datetimepicker .xdsoft_copyright {
	color: #ccc !important;
	font-size: 10px;
	clear: both;
	float: none;
	margin-left: 8px;
}

.xdsoft_datetimepicker .xdsoft_copyright a { color: #eee !important }
.xdsoft_datetimepicker .xdsoft_copyright a:hover { color: #aaa !important }

.xdsoft_time_box {
	position: relative;
	border: 1px solid #ccc;
}
.xdsoft_scrollbar >.xdsoft_scroller {
	background: #ccc !important;
	height: 20px;
	border-radius: 3px;
}
.xdsoft_scrollbar {
	position: absolute;
	width: 7px;
	right: 0;
	top: 0;
	bottom: 0;
	cursor: pointer;
}
.xdsoft_scroller_box {
	position: relative;
}

.xdsoft_datetimepicker.xdsoft_dark {
	box-shadow: 0 5px 15px -5px rgba(255, 255, 255, 0.506);
	background: #000;
	border-bottom: 1px solid #444;
	border-left: 1px solid #333;
	border-right: 1px solid #333;
	border-top: 1px solid #333;
	color: #ccc;
}

.xdsoft_datetimepicker.xdsoft_dark .xdsoft_timepicker .xdsoft_time_box {
	border-bottom: 1px solid #222;
}
.xdsoft_datetimepicker.xdsoft_dark .xdsoft_timepicker .xdsoft_time_box >div >div {
	background: #0a0a0a;
	border-top: 1px solid #222;
	color: #999;
}

.xdsoft_datetimepicker.xdsoft_dark .xdsoft_label {
	background-color: #000;
}
.xdsoft_datetimepicker.xdsoft_dark .xdsoft_label > .xdsoft_select {
	border: 1px solid #333;
	background: #000;
}

.xdsoft_datetimepicker.xdsoft_dark .xdsoft_label > .xdsoft_select > div > .xdsoft_option:hover {
	color: #000;
	background: #007fff;
}

.xdsoft_datetimepicker.xdsoft_dark .xdsoft_label > .xdsoft_select > div > .xdsoft_option.xdsoft_current {
	background: #cc5500;
	box-shadow: #b03e00 0 1px 3px 0 inset;
	color: #000;
}

.xdsoft_datetimepicker.xdsoft_dark .xdsoft_label i,
.xdsoft_datetimepicker.xdsoft_dark .xdsoft_prev,
.xdsoft_datetimepicker.xdsoft_dark .xdsoft_next,
.xdsoft_datetimepicker.xdsoft_dark .xdsoft_today_button {
	background-image: url(data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAGQAAAAeCAYAAADaW7vzAAAAGXRFWHRTb2Z0d2FyZQBBZG9iZSBJbWFnZVJlYWR5ccllPAAAAyJpVFh0WE1MOmNvbS5hZG9iZS54bXAAAAAAADw/eHBhY2tldCBiZWdpbj0i77u/IiBpZD0iVzVNME1wQ2VoaUh6cmVTek5UY3prYzlkIj8+IDx4OnhtcG1ldGEgeG1sbnM6eD0iYWRvYmU6bnM6bWV0YS8iIHg6eG1wdGs9IkFkb2JlIFhNUCBDb3JlIDUuMy1jMDExIDY2LjE0NTY2MSwgMjAxMi8wMi8wNi0xNDo1NjoyNyAgICAgICAgIj4gPHJkZjpSREYgeG1sbnM6cmRmPSJodHRwOi8vd3d3LnczLm9yZy8xOTk5LzAyLzIyLXJkZi1zeW50YXgtbnMjIj4gPHJkZjpEZXNjcmlwdGlvbiByZGY6YWJvdXQ9IiIgeG1sbnM6eG1wPSJodHRwOi8vbnMuYWRvYmUuY29tL3hhcC8xLjAvIiB4bWxuczp4bXBNTT0iaHR0cDovL25zLmFkb2JlLmNvbS94YXAvMS4wL21tLyIgeG1sbnM6c3RSZWY9Imh0dHA6Ly9ucy5hZG9iZS5jb20veGFwLzEuMC9zVHlwZS9SZXNvdXJjZVJlZiMiIHhtcDpDcmVhdG9yVG9vbD0iQWRvYmUgUGhvdG9zaG9wIENTNiAoV2luZG93cykiIHhtcE1NOkluc3RhbmNlSUQ9InhtcC5paWQ6QUExQUUzOTA0M0UyMTFFNDlBM0FFQTJENTExRDVBODYiIHhtcE1NOkRvY3VtZW50SUQ9InhtcC5kaWQ6QUExQUUzOTE0M0UyMTFFNDlBM0FFQTJENTExRDVBODYiPiA8eG1wTU06RGVyaXZlZEZyb20gc3RSZWY6aW5zdGFuY2VJRD0ieG1wLmlpZDpBQTFBRTM4RTQzRTIxMUU0OUEzQUVBMkQ1MTFENUE4NiIgc3RSZWY6ZG9jdW1lbnRJRD0ieG1wLmRpZDpBQTFBRTM4RjQzRTIxMUU0OUEzQUVBMkQ1MTFENUE4NiIvPiA8L3JkZjpEZXNjcmlwdGlvbj4gPC9yZGY6UkRGPiA8L3g6eG1wbWV0YT4gPD94cGFja2V0IGVuZD0iciI/Pp0VxGEAAAIASURBVHja7JrNSgMxEMebtgh+3MSLr1T1Xn2CHoSKB08+QmR8Bx9A8e7RixdB9CKCoNdexIugxFlJa7rNZneTbLIpM/CnNLsdMvNjM8l0mRCiQ9Ye61IKCAgZAUnH+mU3MMZaHYChBnJUDzWOFZdVfc5+ZFLbrWDeXPwbxIqrLLfaeS0hEBVGIRQCEiZoHQwtlGSByCCdYBl8g8egTTAWoKQMRBRBcZxYlhzhKegqMOageErsCHVkk3hXIFooDgHB1KkHIHVgzKB4ADJQ/A1jAFmAYhkQqA5TOBtocrKrgXwQA8gcFIuAIO8sQSA7hidvPwaQGZSaAYHOUWJABhWWw2EMIH9QagQERU4SArJXo0ZZL18uvaxejXt/Em8xjVBXmvFr1KVm/AJ10tRe2XnraNqaJvKE3KHuUbfK1E+VHB0q40/y3sdQSxY4FHWeKJCunP8UyDdqJZenT3ntVV5jIYCAh20vT7ioP8tpf6E2lfEMwERe+whV1MHjwZB7PBiCxcGQWwKZKD62lfGNnP/1poFAA60T7rF1UgcKd2id3KDeUS+oLWV8DfWAepOfq00CgQabi9zjcgJVYVD7PVzQUAUGAQkbNJTBICDhgwYTjDYD6XeW08ZKh+A4pYkzenOxXUbvZcWz7E8ykRMnIHGX1XPl+1m2vPYpL+2qdb8CDAARlKFEz/ZVkAAAAABJRU5ErkJggg==);
}

.xdsoft_datetimepicker.xdsoft_dark .xdsoft_calendar td,
.xdsoft_datetimepicker.xdsoft_dark .xdsoft_calendar th {
	background: #0a0a0a;
	border: 1px solid #222;
	color: #999;
}

.xdsoft_datetimepicker.xdsoft_dark .xdsoft_calendar th {
	background: #0e0e0e;
}

.xdsoft_datetimepicker.xdsoft_dark .xdsoft_calendar td.xdsoft_today {
	color: #cc5500;
}

.xdsoft_datetimepicker.xdsoft_dark .xdsoft_calendar td.xdsoft_highlighted_default {
	background: #ffe9d2;
	box-shadow: #ffb871 0 1px 4px 0 inset;
	color:#000;
}
.xdsoft_datetimepicker.xdsoft_dark .xdsoft_calendar td.xdsoft_highlighted_mint {
	background: #c1ffc9;
	box-shadow: #00dd1c 0 1px 4px 0 inset;
	color:#000;
}

.xdsoft_datetimepicker.xdsoft_dark .xdsoft_calendar td.xdsoft_default,
.xdsoft_datetimepicker.xdsoft_dark .xdsoft_calendar td.xdsoft_current,
.xdsoft_datetimepicker.xdsoft_dark .xdsoft_timepicker .xdsoft_time_box >div >div.xdsoft_current {
	background: #cc5500;
	box-shadow: #b03e00 0 1px 3px 0 inset;
	color: #000;
}

.xdsoft_datetimepicker.xdsoft_dark .xdsoft_calendar td:hover,
.xdsoft_datetimepicker.xdsoft_dark .xdsoft_timepicker .xdsoft_time_box >div >div:hover {
	color: #000 !important;
	background: #007fff !important;
}

.xdsoft_datetimepicker.xdsoft_dark .xdsoft_calendar th {
	color: #666;
}

.xdsoft_datetimepicker.xdsoft_dark .xdsoft_copyright { color: #333 !important }
.xdsoft_datetimepicker.xdsoft_dark .xdsoft_copyright a { color: #111 !important }
.xdsoft_datetimepicker.xdsoft_dark .xdsoft_copyright a:hover { color: #555 !important }

.xdsoft_dark .xdsoft_time_box {
	border: 1px solid #333;
}

.xdsoft_dark .xdsoft_scrollbar >.xdsoft_scroller {
	background: #333 !important;
}
.xdsoft_datetimepicker .xdsoft_save_selected {
    display: block;
    border: 1px solid #dddddd !important;
    margin-top: 5px;
    width: 100%;
    color: #454551;
    font-size: 13px;
}
.xdsoft_datetimepicker .blue-gradient-button {
	font-family: "museo-sans", "Book Antiqua", sans-serif;
	font-size: 12px;
	font-weight: 300;
	color: #82878c;
	height: 28px;
	position: relative;
	padding: 4px 17px 4px 33px;
	border: 1px solid #d7d8da;
	background: -moz-linear-gradient(top, #fff 0%, #f4f8fa 73%);
	/* FF3.6+ */
	background: -webkit-gradient(linear, left top, left bottom, color-stop(0%, #fff), color-stop(73%, #f4f8fa));
	/* Chrome,Safari4+ */
	background: -webkit-linear-gradient(top, #fff 0%, #f4f8fa 73%);
	/* Chrome10+,Safari5.1+ */
	background: -o-linear-gradient(top, #fff 0%, #f4f8fa 73%);
	/* Opera 11.10+ */
	background: -ms-linear-gradient(top, #fff 0%, #f4f8fa 73%);
	/* IE10+ */
	background: linear-gradient(to bottom, #fff 0%, #f4f8fa 73%);
	/* W3C */
	filter: progid:DXImageTransform.Microsoft.gradient( startColorstr='#fff', endColorstr='#f4f8fa',GradientType=0 );
/* IE6-9 */
}
.xdsoft_datetimepicker .blue-gradient-button:hover, .xdsoft_datetimepicker .blue-gradient-button:focus, .xdsoft_datetimepicker .blue-gradient-button:hover span, .xdsoft_datetimepicker .blue-gradient-button:focus span {
  color: #454551;
  background: -moz-linear-gradient(top, #f4f8fa 0%, #FFF 73%);
  /* FF3.6+ */
  background: -webkit-gradient(linear, left top, left bottom, color-stop(0%, #f4f8fa), color-stop(73%, #FFF));
  /* Chrome,Safari4+ */
  background: -webkit-linear-gradient(top, #f4f8fa 0%, #FFF 73%);
  /* Chrome10+,Safari5.1+ */
  background: -o-linear-gradient(top, #f4f8fa 0%, #FFF 73%);
  /* Opera 11.10+ */
  background: -ms-linear-gradient(top, #f4f8fa 0%, #FFF 73%);
  /* IE10+ */
  background: linear-gradient(to bottom, #f4f8fa 0%, #FFF 73%);
  /* W3C */
  filter: progid:DXImageTransform.Microsoft.gradient( startColorstr='#f4f8fa', endColorstr='#FFF',GradientType=0 );
  /* IE6-9 */
}
                                        
</style>
    
    </head>
  <!-- END: Head-->