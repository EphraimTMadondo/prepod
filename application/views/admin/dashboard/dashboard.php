<?php defined('BASEPATH') or exit('No direct script access allowed'); ?>
<?php init_head(); ?>
    <!-- BEGIN: Content-->
    <div class="app-content content">
      <div class="content-overlay">
        <?php $this->load->view('admin/includes/alerts'); ?>
      </div>
        <div class="content-wrapper">
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
<?php init_tail(); ?>
<?php $this->load->view('admin/utilities/calendar_template'); ?>
<?php $this->load->view('admin/dashboard/dashboard_js'); ?>


<div class="sidenav-overlay"></div>
    <div class="drag-target"></div>

    <!-- BEGIN: Footer-->
    <footer class="footer footer-static footer-light">
      <p class="clearfix mb-0"><span class="float-left d-inline-block">2020 &copy; TBGA</span><span class="float-right d-sm-inline-block d-none">Designed with<i class="bx bxs-heart pink mx-50 font-small-3"></i>by<a class="text-uppercase" href="mailto:madondoephraim@gmail.com" target="_blank">Ephraim T Madondo</a></span>
        <button class="btn btn-primary btn-icon scroll-top" type="button"><i class="bx bx-up-arrow-alt"></i></button>
      </p>
    </footer>
    <!-- END: Footer-->

    <!-- BEGIN: Vendor JS-->
    <script src="<?php echo base_url();?>assets/frest/app-assets/vendors/js/vendors.min.js"></script>
    <script src="<?php echo base_url();?>assets/frest/app-assets/fonts/LivIconsEvo/js/LivIconsEvo.tools.min.js"></script>
    <script src="<?php echo base_url();?>assets/frest/app-assets/fonts/LivIconsEvo/js/LivIconsEvo.defaults.min.js"></script>
    <script src="<?php echo base_url();?>assets/frest/app-assets/fonts/LivIconsEvo/js/LivIconsEvo.min.js"></script>
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
    <script src="<?php echo base_url();?>assets/frest/app-assets/vendors/js/pickers/daterange/moment.min.js"></script>
    <script src="<?php echo base_url();?>assets/frest/app-assets/vendors/js/pickers/daterange/daterangepicker.js"></script>
    <script src="<?php echo base_url();?>assets/frest/app-assets/vendors/js/charts/apexcharts.min.js"></script>
    <script src="<?php echo base_url();?>assets/frest/app-assets/vendors/js/extensions/dragula.min.js"></script>
    <script src="<?php echo base_url();?>assets/frest/app-assets/vendors/js/extensions/swiper.min.js"></script>
    <script src="<?php echo base_url();?>assets/frest/app-assets/js/scripts/cards/widgets.js"></script>
    <!-- END: Page JS-->

  </body>
  <!-- END: Body-->
</html>
