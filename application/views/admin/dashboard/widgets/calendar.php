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

            <div class="calendar-view">
                <?
                        
                       
                
                ?>
                <div class="calendar-action d-flex align-items-center flex-wrap">
                    <!-- sidebar toggle button for small sceen -->
                    <button class="btn btn-icon sidebar-toggle-btn">
                        <i class="bx bx-menu font-large-1"></i>
                    </button>
                    <!-- dropdown button to change calendar-view -->
                    <div class="dropdown d-inline mr-75">
                        <button id="dropdownMenu-calendarType" class="btn btn-action dropdown-toggle" type="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="true">
                            <i id="calendarTypeIcon" class="bx bx-calendar-alt"></i>
                            <span id="calendarTypeName">Dropdown</span>
                        </button>
                        <ul class="dropdown-menu dropdown-menu-right" role="menu" aria-labelledby="dropdownMenu-calendarType">
                            <li role="presentation">
                                <a class="dropdown-menu-title dropdown-item" role="menuitem" data-action="toggle-daily">
                                    <i class="bx bx-calendar-alt mr-50"></i>
                                    <span>Daily</span>
                                </a>
                            </li>
                            <li role="presentation">
                                <a class="dropdown-menu-title dropdown-item" role="menuitem" data-action="toggle-weekly">
                                    <i class='bx bx-calendar-event mr-50'></i>
                                    <span>Weekly</span>
                                </a>
                            </li>
                            <li role="presentation">
                                <a class="dropdown-menu-title dropdown-item" role="menuitem" data-action="toggle-monthly">
                                    <i class="bx bx-calendar mr-50"></i>
                                    <span>Month</span>
                                </a>
                            </li>
                            <li role="presentation">
                                <a class="dropdown-menu-title dropdown-item" role="menuitem" data-action="toggle-weeks2">
                                    <i class='bx bx-calendar-check mr-50'></i>
                                    <span>2 weeks</span>
                                </a>
                            </li>
                            <li role="presentation">
                                <a class="dropdown-menu-title dropdown-item" role="menuitem" data-action="toggle-weeks3">
                                    <i class='bx bx-calendar-check mr-50'></i>
                                    <span>3 weeks</span>
                                </a>
                            </li>
                            <li role="presentation" class="dropdown-divider"></li>
                            <li role="presentation">
                                <div role="menuitem" data-action="toggle-workweek" class="dropdown-item">
                                    <input type="checkbox" class="tui-full-calendar-checkbox-square" value="toggle-workweek" checked>
                                    <span class="checkbox-title bg-primary"></span>
                                    <span>Show weekends</span>
                                </div>
                            </li>
                            <li role="presentation">
                                <div role="menuitem" data-action="toggle-start-day-1" class="dropdown-item">
                                    <input type="checkbox" class="tui-full-calendar-checkbox-square" value="toggle-start-day-1">
                                    <span class="checkbox-title"></span>
                                    <span>Start Week on Monday</span>
                                </div>
                            </li>
                            <li role="presentation">
                                <div role="menuitem" data-action="toggle-narrow-weekend" class="dropdown-item">
                                    <input type="checkbox" class="tui-full-calendar-checkbox-square" value="toggle-narrow-weekend">
                                    <span class="checkbox-title"></span>
                                    <span>Narrower than weekdays</span>
                                </div>
                            </li>
                        </ul>
                    </div>
                    <!-- calenadar next and previous navigate button -->
                    <span id="menu-navi" class="menu-navigation">
                        <button type="button" class="btn btn-action move-today mr-50 px-75" data-action="move-today">Today</button>
                        <button type="button" class="btn btn-icon btn-action  move-day mr-50 px-50" data-action="move-prev">
                            <i class="bx bx-chevron-left" data-action="move-prev"></i>
                        </button>
                        <button type="button" class="btn btn-icon btn-action move-day mr-50 px-50" data-action="move-next">
                            <i class="bx bx-chevron-right" data-action="move-next"></i>
                        </button>
                    </span>
                    <span id="renderRange" class="render-range"></span>
                </div>
                <!-- calendar view  -->
                <div id="calendar3" class="calendar-content"></div>
            </div>
            <!-- calendar view end  -->
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
<!---ISSUE STARTS HERE"-->
<?php init_tail('calendar'); ?> 


<script>
	$(function(){
		if(get_url_param('eventid')) {
			view_event(get_url_param('eventid'));
		}
	});
	
</script>


 <!-- Perfect-scrollbar  -->
 <script src="<?php echo base_url();?>assets/plugins/perfect-scrollbar/perfect-scrollbar-1.4.0/dist/perfect-scrollbar.js"></script>
    
   



<script src="https://uicdn.toast.com/tui.code-snippet/v1.5.2/tui-code-snippet.min.js"></script
     <script src="https://uicdn.toast.com/tui.time-picker/latest/tui-time-picker.min.js"></script>
   
   <script src="https://uicdn.toast.com/tui-calendar/latest/tui-calendar.js"></script>
   <script src="https://uicdn.toast.com/tui.date-picker/latest/tui-date-picker.min.js"></script>
    
    <!-- Chance -->
    <script src="<?php echo base_url();?>assets/frest/app-assets/vendors/js/calendar/chance.min.js"></script>
    
  
   
    
    <!-- Apex Calendar -->
    
<!--
    <script src="<?php echo base_url();?>assets/frest/app-assets/vendors/js/charts/apexcharts.min.js"></script> -->
    
        <!-- Custom JS -->
  <!-- <script src="<?php echo base_url();?>assets/js/dashboard-custom.js"></script>

-->

            
            
        <script>
//added from frest appocal.js
'use strict';
var ScheduleList = [];



        function formatDate(str)
        {
           var res = str.split(" ");
        
        //get month
        var months =  ["Jan", "Feb", "Mar","Apr","May", "Jun", "Jul","Aug", "Sep","Oct","Nov", "Dec"];
        var monthNo;
        var monthNoUse;
        var i = 0;
        while (i < months.length) {
             
              if(res[1] === months[i])
              {
                 monthNo = i++;
               
                 if(monthNo < 9)
                 { 
                     monthNoUse = "0"+i;
                 }
                 if(monthNo = 10)
                 {
                     monthNoUse = ""+i;
                 }
                 else
                 {
                     monthNoUse =""+i;
                 }
                 
                 
              }
               i++;
            }
        
            var output = res[3]+"-"+monthNoUse+"-" + res[2]+ " "+ "12:00";
            
          return output;
        }

function showNewPopUp(event){
    var d;
    if(event == null){
        d = new Date();
    }else{
        d = new Date(event.start);
    }
    
     //var d = event.start.format();
 //   if (!$.fullCalendar.moment(d).hasTime()) {
     //   d += ' 00:00';
 //   }
    var vformat = (app.options.time_format == 24 ? app.options.date_format + ' H:i' : app.options.date_format + ' g:i A');
   //var fmt = new DateFormatter();
   var d1 = formatDate(d.toString());
  //var d1 = "2020-09-01 13:00";
    $("input[name='start'].datetimepicker").val(d1);
    //alert(JSON.stringify(event.start) + " " + d1);
    $('#newEventModal').modal('show');
}










 var resultout;
(function (window, Calendar) {
  // variables
  var cal, resizeThrottled;
  var useCreationPopup = false;
  var useDetailPopup = false ;

  // default keys and styles of calendar
  var themeConfig = {
    'common.border': '1px solid #DFE3E7',
    'common.backgroundColor': 'white',
    'common.holiday.color': '#FF5B5C',
    'common.saturday.color': '#304156',
    'common.dayname.color': '#304156',
    'month.dayname.borderLeft': '1px solid transparent',
    'month.dayname.fontSize': '1rem',
    'week.dayGridSchedule.borderRadius': '4px',
    'week.timegridSchedule.borderRadius': '4px',
  }

  // calendar initialize here
  cal = new Calendar('#calendar3', {
    defaultView: 'month',
    useCreationPopup: useCreationPopup,
    useDetailPopup: useDetailPopup,
    calendars: CalendarList,
    theme: themeConfig,
    template: {
      milestone: function (model) {
        return '<span class="bx bx-flag align-middle"></span> <span style="background-color: ' + model.bgColor + '">' + model.title + '</span>';
      },
      allday: function (schedule) {
        return getTimeTemplate(schedule, true);
      },
      time: function (schedule) {
        return getTimeTemplate(schedule, false);
      }
    }
  });

  

  // Create Event according to their Template
  function getTimeTemplate(schedule, isAllDay) {
    var html = [];
    var start = moment(schedule.start.toUTCString());
    if (!isAllDay) {
      html.push('<span>' + start.format('HH:mm') + '</span> ');
    }
    if (schedule.isPrivate) {
      html.push('<span class="bx bxs-lock-alt font-size-small align-middle"></span>');
      html.push(' Private');
    } else {
      if (schedule.isReadOnly) {
        html.push('<span class="bx bx-block font-size-small align-middle"></span>');
      } else if (schedule.recurrenceRule) {
        html.push('<span class="bx bx-repeat font-size-small align-middle"></span>');
      } else if (schedule.attendees.length) {
        html.push('<span class="bx bxs-user font-size-small align-middle"></span>');
      } else if (schedule.location) {
        html.push('<span class="bx bxs-map font-size-small align-middle"></span>');
      }
      html.push(' ' + schedule.title);
    }
    return html.join('');
  }


        
      

    function onClickMenu(e) {
    var target = $(e.target).closest('[role="menuitem"]')[0];
    var action = getDataAction(target);
    var options = cal.getOptions();
    var viewName = '';
    // on click of dropdown button change calendar view
    switch (action) {
      case 'toggle-daily':
        viewName = 'day';
        break;
      case 'toggle-weekly':
        viewName = 'week';
        break;
      case 'toggle-monthly':
        options.month.visibleWeeksCount = 0;
        options.month.isAlways6Week = false;
        viewName = 'month';
        break;
      case 'toggle-weeks2':
        options.month.visibleWeeksCount = 2;
        viewName = 'month';
        break;
      case 'toggle-weeks3':
        options.month.visibleWeeksCount = 3;
        viewName = 'month';
        break;
      case 'toggle-narrow-weekend':
        options.month.narrowWeekend = !options.month.narrowWeekend;
        options.week.narrowWeekend = !options.week.narrowWeekend;
        viewName = cal.getViewName();

        target.querySelector('input').checked = options.month.narrowWeekend;
        break;
      case 'toggle-start-day-1':
        options.month.startDayOfWeek = options.month.startDayOfWeek ? 0 : 1;
        options.week.startDayOfWeek = options.week.startDayOfWeek ? 0 : 1;
        viewName = cal.getViewName();

        target.querySelector('input').checked = options.month.startDayOfWeek;
        break;
      case 'toggle-workweek':
        options.month.workweek = !options.month.workweek;
        options.week.workweek = !options.week.workweek;
        viewName = cal.getViewName();

        target.querySelector('input').checked = !options.month.workweek;
        break;
      default:
        break;
    }
    cal.setOptions(options, true);
    cal.changeView(viewName, true);

    setDropdownCalendarType();
    setRenderRangeText();
    setSchedules();
  }
  
  function showEvent(event){
     
     //element.attr('title', event._tooltip);
     //element.attr('onclick', event.onclick);
    // element.attr('data-toggle', 'tooltip');
     if (!event.url) {
        // element.click(function() { view_event(event.eventid); });
     }
    //alert("View event " + event.id);
    view_event(event.id);
}
  /**
  function showNewPopUp(event){
    var d;
    if(event == null){
        d = new Date();
    }else{
        d = new Date(event.start);
    }
    
    //var d = event.start.format();
    if (!$.fullCalendar.moment(d).hasTime()) {
        d += ' 00:00';
    }
    var vformat = (app.options.time_format == 24 ? app.options.date_format + ' H:i' : app.options.date_format + ' g:i A');
    var fmt = new DateFormatter();
    var d1 = fmt.formatDate(new Date(d), vformat);
    $("input[name='start'].datetimepicker").val(d1);
    //alert(JSON.stringify(event.start) + " " + d1);
    $('#newEventModal').modal('show');
}

**/
  
    // calendar default on click event
  cal.on({
    'clickSchedule': function (event) {
        //var schedule = cal.getSchedule(schedule[0].id, schedule[0].calendarId);
        //console.log(schedule.color);
        console.log(JSON.stringify(event.schedule));
        
        switch(event.schedule.raw._tooltip.split(" ")[0]){
            case "Event":
                //$(".tui-full-calendar-popup-top-line").css("background-color", event.schedule.color);
               // $(".tui-full-calendar-calendar-dot").css("background-color", event.schedule.borderColor);
                showEvent(event.schedule);
                break;
            case "Project":
                window.open(event.schedule.raw.url,"_self");
                break;
            case "Task":
                eval(event.schedule.raw.onclick.split(" ")[0]+";");
                break;
            case "Proposal":
                window.open(event.schedule.raw.url,"_self");
                break;
            case "Estimate":
                window.open(event.schedule.raw.url,"_self");
                break;
            
        }
        
      
      //alert("Event Sechdule raw tooltip " + JSON.stringify(event.schedule.raw._tooltip.split(" ")[0]));
    },
    'beforeCreateSchedule': function (event) {
      // new schedule create and save
      //saveNewSchedule(e);
      showNewPopUp(event);
    },
    'beforeUpdateSchedule': function (event) {
      // schedule update
      event.schedule.start = event.start;
      event.schedule.end = event.end;
      cal.updateSchedule(event.schedule.id, event.schedule.calendarId, event.schedule);
      console.log(JSON.stringify(event.schedule));
      showEvent(event.schedule);
    },
    'beforeDeleteSchedule': function (e) {
      // schedule delete
      console.log('beforeDeleteSchedule', e);
      cal.deleteSchedule(e.schedule.id, e.schedule.calendarId);
    },
    'clickTimezonesCollapseBtn': function (timezonesCollapsed) {
      if (timezonesCollapsed) {
        cal.setTheme({
          'week.daygridLeft.width': '77px',
          'week.timegridLeft.width': '77px'
        });
      } else {
        cal.setTheme({
          'week.daygridLeft.width': '60px',
          'week.timegridLeft.width': '60px'
        });
      }
      return true;
    }
  });
  

  // on click of next and previous button view change
  function onClickNavi(e) {
    var action = getDataAction(e.target);
    switch (action) {
      case 'move-prev':
        cal.prev();
        break;
      case 'move-next':
        cal.next();
        break;
      case 'move-today':
        cal.today();
        break;
      default:
        return;
    }
    setRenderRangeText();
    setSchedules();
  }
var calendar;
  // Click of new schedule button's open schedule create popup
  function createNewSchedule(event) {
    var start = event.start ? new Date(event.start.getTime()) : new Date();
    var end = event.end ? new Date(event.end.getTime()) : moment().add(1, 'hours').toDate();

    if (useCreationPopup) {
      cal.openCreationPopup({
        start: start,
        end: end
      });
    }
  }
  // new schedule create
  function saveNewSchedule(scheduleData) {
    calendar = scheduleData.calendar || findCalendar(scheduleData.calendarId);
    var schedule = {
      id: String(chance.guid()),
      title: scheduleData.title,
      isAllDay: scheduleData.isAllDay,
      start: scheduleData.start,
      end: scheduleData.end,
      category: scheduleData.isAllDay ? 'allday' : 'time',
      dueDateClass: '',
      color: calendar.color,
      bgColor: calendar.bgColor,
      dragBgColor: calendar.bgColor,
      borderColor: calendar.borderColor,
      location: scheduleData.location,
      raw: {
        class: scheduleData.raw['class']
      },
      state: scheduleData.state
    };
    if (calendar) {
      schedule.calendarId = calendar.id;
      schedule.color = calendar.color;
      schedule.bgColor = calendar.bgColor;
      schedule.borderColor = calendar.borderColor;
    }

    cal.createSchedules([schedule]);

    refreshScheduleVisibility();
  }


      function setEventListener() {
    $('.menu-navigation').on('click', onClickNavi);
    $('.dropdown-menu [role="menuitem"]').on('click', onClickMenu);
    $('.sidebar-calendars').on('change', onChangeCalendars);
    $('.sidebar-new-schedule-btn').on('click', createNewSchedule);
    window.addEventListener('resize', resizeThrottled);
  }
  
  
  // view all checkbox initialize
  function onChangeCalendars(e) {
    var calendarId = e.target.value;
    var checked = e.target.checked;
    var viewAll = document.querySelector('.sidebar-calendars-item input');
    var calendarElements = Array.prototype.slice.call(document.querySelectorAll('#calendarList input'));
    var allCheckedCalendars = true;

    if (calendarId === 'all') {
      allCheckedCalendars = checked;

      calendarElements.forEach(function (input) {
        var span = input.parentNode;
        input.checked = checked;
       
       
        input.addEventListener('click', onClickDay, false);
        
        
    
    
      
        span.style.backgroundColor = checked ? span.style.borderColor : 'transparent';
        
   
      });

      CalendarList.forEach(function (calendar) {
        calendar.checked = checked;
      });
    } else {
      findCalendar(calendarId).checked = checked;

      allCheckedCalendars = calendarElements.every(function (input) {
        return input.checked;
      });

      if (allCheckedCalendars) {
        viewAll.checked = true;
      } else {
        viewAll.checked = false;
      }
    }
    refreshScheduleVisibility();
  }
  // schedule refresh according to view
  function refreshScheduleVisibility() {
    var calendarElements = Array.prototype.slice.call(document.querySelectorAll('#calendarList input'));

    CalendarList.forEach(function (calendar) {
      cal.toggleSchedules(calendar.id, !calendar.checked, false);
    });

    cal.render(true);

    calendarElements.forEach(function (input) {
      var span = input.nextElementSibling;
      span.style.backgroundColor = input.checked ? span.style.borderColor : 'transparent';
    });
  }
  // calendar type set on dropdown button
  function setDropdownCalendarType() {
    var calendarTypeName = document.getElementById('calendarTypeName');
    var calendarTypeIcon = document.getElementById('calendarTypeIcon');
    var options = cal.getOptions();
    var type = cal.getViewName();
    var iconClassName;

    if (type === 'day') {
      type = 'Daily';
      iconClassName = 'bx bx-calendar-alt mr-25';
    } else if (type === 'week') {
      type = 'Weekly';
      iconClassName = 'bx bx-calendar-event mr-25';
    } else if (options.month.visibleWeeksCount === 2) {
      type = '2 weeks';
      iconClassName = 'bx bx-calendar-check mr-25';
    } else if (options.month.visibleWeeksCount === 3) {
      type = '3 weeks';
      iconClassName = 'bx bx-calendar-check mr-25';
    } else {
      type = 'Monthly';
      iconClassName = 'bx bx-calendar mr-25';
    }
    calendarTypeName.innerHTML = type;
    calendarTypeIcon.className = iconClassName;
  }

  function setRenderRangeText() {
    var renderRange = document.getElementById('renderRange');
    var options = cal.getOptions();
    var viewName = cal.getViewName();
    var html = [];
    if (viewName === 'day') {
      html.push(moment(cal.getDate().getTime()).format('YYYY-MM-DD'));
    } else if (viewName === 'month' &&
      (!options.month.visibleWeeksCount || options.month.visibleWeeksCount > 4)) {
      html.push(moment(cal.getDate().getTime()).format('YYYY-MM'));
    } else {
      html.push(moment(cal.getDateRangeStart().getTime()).format('YYYY-MM-DD'));
      html.push('-');
      html.push(moment(cal.getDateRangeEnd().getTime()).format(' MM.DD'));
    }
    renderRange.innerHTML = html.join('');
  }
  // Randome Generated schedule
  function setSchedules() {
    cal.clear();
    generateSchedule(cal.getViewName(), cal.getDateRangeStart(), cal.getDateRangeEnd());
    cal.createSchedules(ScheduleList);
    refreshScheduleVisibility();
  }

  function generateSchedule(viewName, renderStart, renderEnd) {
    getMySchedules();
 
  }




  // Events initialize
   /**
  function setEventListener() {
    $('.menu-navigation').on('click', onClickNavi);
    $('.dropdown-menu [role="menuitem"]').on('click', onClickMenu);
    $('.sidebar-calendars').on('change', onChangeCalendars);
    $('.sidebar-new-schedule-btn').on('click', createNewSchedule);
    window.addEventListener('resize', resizeThrottled);
  }
  
  **/
  // get data-action atrribute's value
  function getDataAction(target) {
    return target.dataset ? target.dataset.action : target.getAttribute('data-action');
  }
  resizeThrottled = tui.util.throttle(function () {
    cal.render();
  }, 50);
  window.cal = cal;
  setDropdownCalendarType();
  setRenderRangeText();
  setSchedules();
  setEventListener();
})(window, tui.Calendar);

// set sidebar calendar list
(function () {
  var calendarList = document.getElementById('calendarList');
  var html = [];
  CalendarList.forEach(function (calendar) {
    html.push('<div class="sidebar-calendars-item"><label>' +
      '<input type="checkbox" class="tui-full-calendar-checkbox-round" value="' + calendar.id + '" checked>' +
      '<span style="border-color: ' + calendar.borderColor + '; background-color: ' + calendar.borderColor + ';"></span>' +
      '<span>' + calendar.name + '</span>' +
      '</label></div>'
    );
  });
  calendarList.innerHTML = html.join('\n');
})();

$(document).ready(function () {

  // calendar sidebar scrollbar
  if ($('.sidebar').length > 0) {
    var sidebar = new PerfectScrollbar(".sidebar", {
      wheelPropagation: false
    });
  }
  // sidebar menu toggle
  $(".sidebar-toggle-btn").on("click", function () {
    $(".sidebar").toggleClass("show");
    $(".app-content-overlay").toggleClass("show");
  })
  // on click Overlay hide sidebar and overlay
  $(".app-content-overlay, .sidebar-new-schedule-btn").on("click", function () {
    $(".sidebar").removeClass("show");
    $(".app-content-overlay").removeClass("show");
  });
})

$(window).on("resize", function () {
  // sidebar and overlay hide if screen resize
  if ($(window).width() < 991) {
    $(".sidebar").removeClass("show");
    $(".app-content-overlay").removeClass("show");
  }
})

        
        //eND of from app-cal.js
    


        
        function getMySchedules(){
            
              var csrf_token_name = '<?Php echo $this->security->get_csrf_hash(); ?>'
        var getCalendarLink = "<?php echo base_url();?>admin/utilities/get_calendar_data";
        var myTimeZone = '<?Php echo get_option('default_timezone'); ?>';
    
        
            var today = new Date();

            
            var d = new Date();
            var year = d.getFullYear();
            var month = d.getMonth();
            var day = d.getDate();
            var nextYear = new Date(year + 1, month, day);
            
            var dd = String(nextYear.getDate()).padStart(2, '0');
            var mm = String(nextYear.getMonth() + 1).padStart(2, '0'); //January is 0!
            var yyyy = nextYear.getFullYear();
            
           var nextYearDate = yyyy + '/' + mm + '/'  + dd;
          
           // alert("this is running");
            $.ajax({
                url: "<?php echo base_url();?>index.php/admin/utilities/get_calendar_data",
                type: "POST",
                success: function(result){
                    //$("#div1").html(result);
                     resultout  = result;
                     
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
        
        
        
function setSchedules2(data) {
    var invertedColor;
    var calendarColors = [
    "#28B8DA",
    "#03a9f4",
    "#c53da9",
    "#757575",
    "#8e24aa",
    "#d81b60",
    "#0288d1",
    "#7cb342",
    "#fb8c00",
    "#84c529",
    "#fb3b3b"
    ];
    var schedule = [];
    cal.clear();
    var id = 0;
    data.forEach(function(item,index){
        id++;
        switch(item._tooltip.split(" ")[0]){
            case "Event":
                
                schedule.push({
                    id: item.eventid,
                    calendarId: item.userid,
                    title: "Event " + item.title,
                    category: 'time',
                    dueDateClass: '',
                    start: item.start,
                    end: item.end,
                    color: 	'#000000',
                    backgroundColor: item.color,
                    borderColor: "#0000001c",
                    raw:item,
                });
                
                
                break;
        
            case "Project":
                schedule.push({
                    id: "",
                    calendarId: item.userid,
                    title: "Project " + item.title,
                    category: 'time',
                    dueDateClass: '',
                    start: item.date,
                    end: item.date,
                    color: item.color,
                    backgroundColor: item.color,
                    borderColor: "#0000001c",
                    raw:item,
                });
                break;
            
            case "Task":
                schedule.push({
                    id: item.id,
                    calendarId: item.userid,
                    title: "Task " +item.title,
                    category: 'time',
                    dueDateClass: '',
                    start: item.date,
                    end: item.date,
                    color: item.color,
                    backgroundColor: item.color,
                    borderColor: "#0000001c",
                    raw:item,
                });
                $('[title ="'+item.title+'"]').removeAttr('onclick');
                $('[title ="'+item.title+'"]').attr("onClick", item.onclick);
                break;
        
            case "Proposal":
                schedule.push({
                    id: item.id,
                    calendarId: item.userid,
                    title: "Proposal " + item.title,
                    category: 'time',
                    dueDateClass: '',
                    start: item.date,
                    end: item.date,
                    color: item.color,
                    backgroundColor: item.color,
                    borderColor: "#0000001c",
                    raw:item,
                });
                break;
            
            case "Estimate":
                schedule.push({
                    id: item.id,
                    calendarId: item.userid,
                    title: "Estimate " + item.title,
                    category: 'time',
                    dueDateClass: '',
                    start: item.date,
                    end: item.date,
                    color: item.color,
                    backgroundColor: item.color,
                    borderColor: "#0000001c",
                    raw:item,
                });
                break;
                
        
        }
        //alert("Event" + item._tooltip.split(" ")[0]);
        
    });
    cal.createSchedules(schedule);
    
    //alert(JSON.stringify(schedule));
    
    var element = cal.getElement(schedule[0].id, schedule[0].calendarId);
    console.log(element);
    var schedule = cal.getSchedule(schedule[0].id, schedule[0].calendarId);
    //console.log(schedule.color);
}



// constructor
function ScheduleInfo() {
  this.id = null;
  this.calendarId = null;

  this.title = null;
  this.body = null;
  this.isAllday = false;
  this.start = null;
  this.end = null;
  this.category = '';
  this.dueDateClass = '';

  this.color = null;
  this.bgColor = null;
  this.dragBgColor = null;
  this.borderColor = null;
  this.customStyle = '';

  this.isFocused = false;
  this.isPending = false;
  this.isVisible = true;
  this.isReadOnly = false;
  this.goingDuration = 0;
  this.comingDuration = 0;
  this.recurrenceRule = '';

  this.raw = {
    memo: '',
    hasToOrCc: false,
    hasRecurrenceRule: false,
    location: null,
    class: 'public', // or 'private'
    creator: {
      name: '',
      avatar: '',
      company: '',
      email: '',
      phone: ''
    }
  };
}




    //On click of day
    //tui-full-calendar-weekday-grid-line  tui-full-calendar-near-month-day
    // tui-full-calendar-holiday-sun  tui-full-calendar-extra-date
    var allDays = document.getElementsByClassName("tui-full-calendar-weekday-grid-line");
    
    var onClickDay = function() {
        //var attribute = this.getAttribute("data-myattribute");
        alert("daay clicked");
    };
    
    for (var i = 0; i < allDays.length; i++) {
        allDays[i].setAttribute('onclick','onClickDay')
    }
    

    
    
    //functions needed from schedule.js
    
    
    
        
    </script>
     <script src="<?php echo base_url();?>assets/frest/app-assets/js/scripts/modal/components-modal.js"></script>
    <script src="<?php echo base_url();?>assets/frest/app-assets/js/scripts/extensions/calendar/calendars-data.js"></script>
    <script src="<?php echo base_url();?>assets/frest/app-assets/js/scripts/extensions/calendar/schedules.js"></script>
    <!--<script src="<?php echo base_url();?>assets/frest/app-assets/js/scripts/extensions/calendar/app-calendar.js"></script>-->
    
           <script>
                // Change live the colors for colorpicker in kanban/pipeline
    $("body").on('click', '.cpicker', function() {
        var color = $(this).data('color');
        // Clicked on the same selected color
        if ($(this).hasClass('cpicker-big')) { return false; }

        $(this).parents('.cpicker-wrapper').find('.cpicker-big').removeClass('cpicker-big').addClass('cpicker-small');
        $(this).removeClass('cpicker-small', 'fast').addClass('cpicker-big', 'fast');
        if ($(this).hasClass('kanban-cpicker')) {
            $(this).parents('.panel-heading-bg').css('background', color);
            $(this).parents('.panel-heading-bg').css('border', '1px solid ' + color);
        } else if ($(this).hasClass('calendar-cpicker')) {
            $("body").find('._event input[name="color"]').val(color);
        }
    });
        </script>



  </div>
</div>
<div class="clearfix"></div>
</div>

