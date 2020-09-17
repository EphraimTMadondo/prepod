<?php defined('BASEPATH') or exit('No direct script access allowed'); ?>
<?php init_head(true, 'calendar'); ?>
    <!-- BEGIN: Content-->
    <div class="app-content content">
      <div class="content-overlay">
        <?php $this->load->view('admin/includes/alerts'); ?>
      </div>
    <div class="content-wrapper">
        <div class="card-body" style="overflow-x: auto;">
        <div class="dt-loader hide"></div>
        <?php $this->load->view('admin/utilities/calendar_filters'); ?>
        <div id="calendarh"></div>
        <!-- calendar Wrapper  -->
        <div class="calendar-wrapper position-relative">
            <!-- calendar app overlay -->
            <div class="app-content-overlay"></div>
            <!-- calendar sidebar start -->
            <div id="sidebar" class="sidebar">
                <div class="sidebar-new-schedule">
                    <!-- create new schedule button -->
                    <button id="btn-new-schedule" type="button" class="btn btn-primary btn-block sidebar-new-schedule-btn">
                        New schedule
                    </button>
                </div>
                <!-- sidebar calendar labels -->
                <div id="sidebar-calendars" class="sidebar-calendars">
                    <div>
                        <div class="sidebar-calendars-item">
                            <!-- view All checkbox -->
                            <div class="checkbox">
                                <input type="checkbox" class="checkbox-input tui-full-calendar-checkbox-square" id="checkbox1" value="all" checked>
                                <label for="checkbox1">View all</label>
                            </div>
                        </div>
                    </div>
                    <div id="calendarList" class="sidebar-calendars-d1"></div>
                </div>
                <!-- / sidebar calendar labels -->
            </div>
            <!-- calendar sidebar end -->
          
        </div>
    </div>
	</div>
</div>

<!-- Modal -->
<div id="createScheduleModal" class="modal fade" role="dialog">
  <div class="modal-dialog">

    <!-- Modal content-->
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal">&times;</button>
        <h4 class="modal-title">Modal Header</h4>
      </div>
      <div class="modal-body">
        <p>Some text in the modal.</p>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
      </div>
    </div>

  </div>
</div>


<?php $this->load->view('admin/utilities/calendar_template'); ?>
<script>
	app.calendarIDs = '<?php echo json_encode($google_ids_calendars); ?>';
</script>
<?php init_tail('calendar'); ?>
<script>
	$(function(){
		if(get_url_param('eventid')) {
			view_event(get_url_param('eventid'));
		}
	});
	
</script>
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
    
        <!-- Custom JS -->
    <script src="<?php echo base_url();?>assets/js/dashboard-custom.js"></script>
        <script>
        var csrf_token_name = '<?Php echo $this->security->get_csrf_hash(); ?>'
        var getCalendarLink = "<?php echo base_url();?>admin/utilities/get_calendar_data";
        var myTimeZone = '<?Php echo get_option('default_timezone'); ?>';
        getMySchedules();
        
        function getMySchedules(){
            var today = new Date();

            
            var d = new Date();
            var year = d.getFullYear();
            var month = d.getMonth();
            var day = d.getDate();
            var nextYear = new Date(year + 1, month, day);
            
            var dd = String(nextYear.getDate()).padStart(2, '0');
            var mm = String(nextYear.getMonth() + 1).padStart(2, '0'); //January is 0!
            var yyyy = nextYear.getFullYear();
            
            nextYearDate = yyyy + '/' + mm + '/'  + dd;
            
            alert("this is running");
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
                    timezone: myTimeZone
                }
            });
        }
    </script>
    <script src="<?php echo base_url();?>assets/frest/app-assets/js/scripts/modal/components-modal.js"></script>
    <script src="<?php echo base_url();?>assets/frest/app-assets/js/scripts/extensions/calendar/calendars-data.js"></script>
    <script src="<?php echo base_url();?>assets/frest/app-assets/js/scripts/extensions/calendar/schedules.js"></script>
    <!--<script src="<?php echo base_url();?>assets/frest/app-assets/js/scripts/extensions/calendar/app-calendar.js"></script>-->
    <script src="<?php echo base_url();?>assets/js/my-calendar.js"></script>

<!-- End of Added by Leo -->
</body>
</html>
