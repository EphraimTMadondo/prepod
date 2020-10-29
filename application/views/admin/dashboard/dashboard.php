<?php defined('BASEPATH') or exit('No direct script access allowed'); ?>
<?php init_head(true, 'dashboard'); ?>

<style>


#widget-user_data .widget-earnings-swiper.swiper-container .swiper-slide{



font-weight:500;
background-color :#f2f4f4;
height: 50px;
width :auto !important;
color:#828d99;
cursor:pointer;
}



.swiper-container-wp8-horizontal, .swiper-container-wp8-horizontal > .swiper-wrapper{

Error:-ms-touch-action:pan-y;
touch-action :pan-y;
height:100px;
} 

</style>
    <!-- BEGIN: Content-->
    <div class="app-content content">
      <div class="content-overlay">
        <?php $this->load->view('admin/includes/alerts'); ?>
      </div>
        <div class="content-wrapper row">
            <?php hooks()->do_action( 'before_start_render_dashboard_content' ); ?>
            <div class="clearfix"></div>
            <div class="col-md-12 mt-2" data-container="top-12">
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
             <!-- flex -->
             <div id ="flexuse" style = "display: flex">
            
                
            
            <div class="col-md-3" data-container="right-4">
                <?php render_dashboard_widgets('right-4'); ?>
            </div>


            

            <div class="col-md-6" data-container="left-8">
                <?php render_dashboard_widgets('left-8'); ?>
            </div>

            </div>
     
            <!---flex end -->
            <div class="clearfix"></div>
            <div class="col-md-4" data-container="bottom-left-4">
                <?php render_dashboard_widgets('bottom-left-4'); ?>
            </div>
            <div class="col-md-4" data-container="bottom-middle-4">
                <?php render_dashboard_widgets('bottom-middle-4'); ?>
            </div>
            <div class="col-md-4" data-container="bottom-right-4">
                <?php // render_dashboard_widgets('bottom-right-4'); ?>
            </div>
            <?php hooks()->do_action('after_dashboard'); ?>
        </div>
      </div>
    </div>
    <script>
        app.calendarIDs = '<?php echo json_encode($google_ids_calendars); ?>';
    </script>
    <?php $this->load->view('admin/utilities/calendar_template'); ?>
    <?php init_tail('dashboard'); ?> 
    <?php $this->load->view('admin/dashboard/dashboard_js'); ?>
  </body>
  <!-- END: Body-->
</html>
