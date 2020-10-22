<?php defined('BASEPATH') or exit('No direct script access allowed'); ?>
<div class="widget" id="widget-<?php echo basename(__FILE__,".php"); ?>" data-name="<?php echo _l('calendar'); ?>">
  <div class="clearfix"></div>
  <div class="card">
   <div class="card-body">
    <div class="widget-dragger"></div>
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
                    <button id="btn-new-schedule" onclick = "showNewPopUp()" type="button" class="btn btn-primary btn-block sidebar-new-schedule-btn">
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



</div>
<div class="clearfix"></div>
</div>

