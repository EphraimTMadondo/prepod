<?php defined('BASEPATH') or exit('No direct script access allowed'); ?>
<?php init_head(); ?>
    <!-- BEGIN: Page CSS-->
    <link rel="stylesheet" type="text/css" href="<?php echo base_url();?>assets/frest/app-assets/css/pages/dashboard-ecommerce.min.css">
    <link rel="stylesheet" type="text/css" href="<?php echo base_url();?>assets/frest/app-assets/css/pages/widgets.css">
    <link rel="stylesheet" type="text/css" href="<?php echo base_url();?>assets/frest/app-assets/css/plugins/calendars/app-calendar.css">
    <!-- END: Page CSS-->
    <!-- BEGIN: Content-->
    <div class="app-content content">
      <div class="content-overlay">
        <?php $this->load->view('admin/includes/alerts'); ?>
      </div>
        <div class="content-wrapper row">
            <?php hooks()->do_action( 'before_start_render_dashboard_content' ); ?>
            <div class="clearfix"></div>
            <div class="col-md-12 mtop30" data-container="top-12">
                <?php render_dashboard_widgets('top-12'); ?>
            </div>
            <?php hooks()->do_action('after_dashboard_top_container'); ?>
            <div class="col-md-6" data-container="middle-left-6">
                <?php render_dashboard_widgets('middle-left-6'); ?>
            </div>
            <div class="col-md-6" data-container="middle-right-6">
                <?php render_dashboard_widgets('middle-right-6'); ?>
            </div>
            <?php hooks()->do_action('after_dashboard_half_container'); ?>
            <div class="col-md-8" data-container="left-8">
                <?php render_dashboard_widgets('left-8'); ?>
            </div>
            <div class="col-md-4" data-container="right-4">
                <!-- Timeline Widget Starts -->
                <div  class="widget<?php if(count($projects_activity) == 0){echo ' hide';} ?>" id="widget-<?php echo basename(__FILE__,".php"); ?>" data-name="<?php echo _l('home_project_activity'); ?>">
                <div class="card ">
                    <div class="card-header">
                        <h4 class="card-title">
                            <?php echo _l('home_project_activity'); ?>
                        </h4>
                    </div>
                    <div class="card-content">
                        <div class="card-body">
                            <ul class="widget-timeline">
                            <?php
                                foreach($projects_activity as $activity){
                                $name = $activity['fullname'];
                                if($activity['staff_id'] != 0){
                                $href = admin_url('profile/'.$activity['staff_id']);
                                } else if($activity['contact_id'] != 0){
                                    $name = '<span class="label label-info inline-block mright5">'._l('is_customer_indicator') . '</span> - ' . $name;
                                    $href = admin_url('clients/client/'.get_user_id_by_contact_id($activity['contact_id']).'?contactid='.$activity['contact_id']);
                                } else {
                                $href = '';
                                $name = '[CRON]';
                                }?>
                                <li class="timeline-items timeline-icon-success active">
                                    <div class="timeline-time">Mon 8:17pm</div>
                                    <h6 class="timeline-title">Jonny Richie Commented</h6>
                                    <p class="timeline-text">on <a href="JavaScript:void(0);">Project name</a></p>
                                    <div class="timeline-content">
                                        Story behind vedio game and lame is very creative
                                    </div>
                                </li>
                                <?php } ?>
                            </ul>
                            <!-- <button class="btn btn-block btn-primary">View All Notifications</button> -->
                        </div>
                    </div>
                </div>
                </div>
                <!-- Timeline Widget Ends -->
                <?php render_dashboard_widgets('right-4'); ?>
            </div>
            <div class="clearfix"></div>
            <div class="col-md-4" data-container="bottom-left-4">
                <?php render_dashboard_widgets('bottom-left-4'); ?>
            </div>
            <div class="col-md-4" data-container="bottom-middle-4">
                <?php render_dashboard_widgets('bottom-middle-4'); ?>
            </div>
            <div class="col-md-4" data-container="bottom-right-4">
                <?php render_dashboard_widgets('bottom-right-4'); ?>
            </div>
            <?php hooks()->do_action('after_dashboard'); ?>
        </div>
      </div>
    </div>
    <script>
        app.calendarIDs = '<?php echo json_encode($google_ids_calendars); ?>';
    </script>
    <?php $this->load->view('admin/utilities/calendar_template'); ?>
    <?php init_tail(); ?> 
    <!-- BEGIN: Page JS-->
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

    <script src="<?php echo base_url();?>assets/frest/app-assets/js/scripts/pages/dashboard-ecommerce.min.js"></script>
    <script src="<?php echo base_url();?>assets/frest/app-assets/js/scripts/cards/widgets.js"></script>
    <!-- END: Page JS-->
    <!-- BEGIN: Calendar Page JS-->
    <script src="<?php echo base_url();?>assets/frest/app-assets/js/scripts/extensions/calendar/calendars-data.js"></script>
    <script src="<?php echo base_url();?>assets/frest/app-assets/js/scripts/extensions/calendar/schedules.js"></script>
    <script src="<?php echo base_url();?>assets/frest/app-assets/js/scripts/extensions/calendar/app-calendar.js"></script>
    <!-- END: Calendar Page JS-->
    <?php $this->load->view('admin/dashboard/dashboard_js'); ?>
  </body>
  <!-- END: Body-->
</html>
