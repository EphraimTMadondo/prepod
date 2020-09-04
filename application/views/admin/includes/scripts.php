<?php defined('BASEPATH') or exit('No direct script access allowed'); ?>
<?php include_once(APPPATH.'views/admin/includes/helpers_bottom.php'); ?>
 <!-- BEGIN: Vendor JS-->
<script src="<?php echo base_url();?>assets/frest/app-assets/vendors/js/vendors.min.js"></script>
<script src="<?php echo base_url();?>assets/frest/app-assets/fonts/LivIconsEvo/js/LivIconsEvo.tools.min.js"></script>
<script src="<?php echo base_url();?>assets/frest/app-assets/fonts/LivIconsEvo/js/LivIconsEvo.defaults.min.js"></script>
<script src="<?php echo base_url();?>assets/frest/app-assets/fonts/LivIconsEvo/js/LivIconsEvo.min.js"></script>

<script src="<?php echo base_url();?>assets/frest/app-assets/vendors/js/pickers/daterange/daterangepicker.js"></script>
<script src="<?php echo base_url();?>assets/frest/app-assets/vendors/js/charts/apexcharts.min.js"></script>
<script src="<?php echo base_url();?>assets/frest/app-assets/vendors/js/extensions/dragula.min.js"></script>
<script src="<?php echo base_url();?>assets/frest/app-assets/vendors/js/extensions/swiper.min.js"></script>
<script src="<?php echo base_url();?>assets/frest/app-assets/vendors/js/charts/chart.min.js"></script>
<script src="<?php echo base_url();?>assets/frest/app-assets/vendors/js/calendar/tui-code-snippet.min.js"></script>
<script src="<?php echo base_url();?>assets/frest/app-assets/vendors/js/calendar/tui-dom.js"></script>
<script src="<?php echo base_url();?>assets/frest/app-assets/vendors/js/calendar/tui-time-picker.min.js"></script>
<script src="<?php echo base_url();?>assets/frest/app-assets/vendors/js/calendar/tui-date-picker.min.js"></script>
<script src="<?php echo base_url();?>assets/frest/app-assets/vendors/js/extensions/moment.min.js"></script>
<script src="<?php echo base_url();?>assets/frest/app-assets/vendors/js/calendar/chance.min.js"></script>
<script src="<?php echo base_url();?>assets/frest/app-assets/vendors/js/calendar/tui-calendar.min.js"></script>
<!-- BEGIN Vendor JS-->

<!-- BEGIN: Theme JS-->
<script src="<?php echo base_url();?>assets/frest/app-assets/js/scripts/configs/vertical-menu-dark.min.js"></script>
<script src="<?php echo base_url();?>assets/frest/app-assets/js/core/app-menu.min.js"></script>
<script src="<?php echo base_url();?>assets/frest/app-assets/js/core/app.min.js"></script>
<script src="<?php echo base_url();?>assets/frest/app-assets/js/scripts/components.min.js"></script>
<script src="<?php echo base_url();?>assets/frest/app-assets/js/scripts/footer.min.js"></script>
<script src="<?php echo base_url();?>assets/frest/app-assets/js/scripts/customizer.min.js"></script>
<!-- END: Theme JS-->

<!-- BEGIN: Page JS-->
<script src="<?php echo base_url();?>assets/frest/app-assets/js/scripts/pages/dashboard-ecommerce.min.js"></script>
<script src="<?php echo base_url();?>assets/frest/app-assets/js/scripts/cards/widgets.js"></script>
<!-- END: Page JS-->

<?php hooks()->do_action('before_js_scripts_render'); ?>

<?php echo app_compile_scripts();

/**
 * Global function for custom field of type hyperlink
 */
echo get_custom_fields_hyperlink_js_function(); ?>
<?php
/**
 * Check for any alerts stored in session
 */
app_js_alerts();
?>
<?php
/**
 * Check pusher real time notifications
 */
if(get_option('pusher_realtime_notifications') == 1){ ?>
   <script type="text/javascript">
   $(function(){
         // Enable pusher logging - don't include this in production
         // Pusher.logToConsole = true;
         <?php $pusher_options = hooks()->apply_filters('pusher_options', array(['disableStats'=>true]));
            if(!isset($pusher_options['cluster']) && get_option('pusher_cluster') != ''){
                  $pusher_options['cluster'] = get_option('pusher_cluster');
            }
         ?>
         var pusher_options = <?php echo json_encode($pusher_options); ?>;
         var pusher = new Pusher("<?php echo get_option('pusher_app_key'); ?>", pusher_options);
         var channel = pusher.subscribe('notifications-channel-<?php echo get_staff_user_id(); ?>');
         channel.bind('notification', function(data) {
            fetch_notifications();
         });
   });
   </script>
<?php } ?>
<?php app_admin_footer(); ?>
