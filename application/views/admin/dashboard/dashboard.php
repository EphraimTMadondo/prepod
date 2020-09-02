<?php defined('BASEPATH') or exit('No direct script access allowed'); ?>
<?php init_head(); ?>
<div id="wrapper">
    <div class="screen-options-area"></div>
    <div class="screen-options-btn">
        <?php echo _l('dashboard_options'); ?>
    </div>
    <div class="content">
        <div class="row">
            <?php
            
          
           
            ?>
            <?php $this->load->view('admin/includes/alerts'); ?>

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

<!-- Added by Leo -->

    <!-- Perfect-scrollbar  -->
    <script src="<?php echo base_url();?>assets/plugins/perfect-scrollbar/perfect-scrollbar-1.4.0/dist/perfect-scrollbar.js"></script>

    <!-- Tui Calendar -->
    <script src="https://uicdn.toast.com/tui.code-snippet/v1.5.2/tui-code-snippet.min.js"></script>
    <script src="https://uicdn.toast.com/tui.time-picker/latest/tui-time-picker.min.js"></script>
    <script src="https://uicdn.toast.com/tui.date-picker/latest/tui-date-picker.min.js"></script>
    <script src="https://uicdn.toast.com/tui-calendar/latest/tui-calendar.js"></script>
    
    <!-- Chance -->
    <script src="<?php echo base_url();?>assets/frest/app-assets/vendors/js/calendar/chance.min.js"></script>
    
    <!-- Apex Calendar -->
    <script src="<?php echo base_url();?>assets/frest/app-assets/vendors/js/charts/apexcharts.min.js"></script>
    
    
    <script src="<?php echo base_url();?>assets/frest/app-assets/js/scripts/modal/components-modal.js"></script>
    
    
    <script>
        function getMySchedules(){
            //alert("this is running");
            
            var d = new Date();
            var year = d.getFullYear();
            var month = d.getMonth();
            var day = d.getDate();
            var nextYear = new Date(year + 1, month, day);
            
            var dd = String(nextYear.getDate()).padStart(2, '0');
            var mm = String(nextYear.getMonth() + 1).padStart(2, '0'); //January is 0!
            var yyyy = nextYear.getFullYear();
            
            nextYearDate = yyyy + '/' + mm + '/'  + dd;
            
            $.ajax({
                url: "<?php echo base_url();?>admin/utilities/get_calendar_data",
                type: "POST",
                success: function(result){
                    //$("#div1").html(result);
                    //alert("Leo " + result);
                    setSchedules2(JSON.parse(result));
                },
                data:{
                    csrf_token_name:'<?Php echo $this->security->get_csrf_hash(); ?>',
                    start:'2020-01-01',
                    end:nextYearDate,
                    timezone: 'Africa/Harare'
                }
            });
        }
    </script>
    <script src="<?php echo base_url();?>assets/frest/app-assets/js/scripts/extensions/calendar/calendars-data.js"></script>
    <script src="<?php echo base_url();?>assets/frest/app-assets/js/scripts/extensions/calendar/schedules.js"></script>
    <!--<script src="<?php echo base_url();?>assets/frest/app-assets/js/scripts/extensions/calendar/app-calendar.js"></script>-->
        <script src="<?php echo base_url();?>assets/js/my-calendar.js"></script>
        
        <!-- Custom JS -->
    <script src="<?php echo base_url();?>assets/js/dashboard-custom.js"></script>



<!-- End of Added by Leo -->
</body>
</html>
