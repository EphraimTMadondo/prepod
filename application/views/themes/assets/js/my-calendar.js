/*=========================================================================================
    File Name: toast-ui-calendar.js
    Description: toast-ui-calendar
    --------------------------------------------------------------------------------------
    Item Name: Frest HTML Admin Template
    Version: 1.0
    Author: PIXINVENT
    Author URL: http://www.themeforest.net/user/pixinvent
==========================================================================================*/
'use strict';

(function (window, Calendar) {
  // variables
  var cal, resizeThrottled;
  var useCreationPopup = false;
  var useDetailPopup = false;

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



  // calendar default on click event
  cal.on({
    'clickSchedule': function (event) {
        //var schedule = cal.getSchedule(schedule[0].id, schedule[0].calendarId);
        //console.log(schedule.color);
        console.log(JSON.stringify(event.schedule));
        
        switch(event.schedule.raw._tooltip.split(" ")[0]){
            case "Event":
                $(".tui-full-calendar-popup-top-line").css("background-color", event.schedule.color);
                $(".tui-full-calendar-calendar-dot").css("background-color", event.schedule.borderColor);
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

  // A listener for click the menu
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
    //setSchedules();
    getMySchedules();
  }

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
    //setSchedules();
    getMySchedules();
  }

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
    var calendar = scheduleData.calendar || findCalendar(scheduleData.calendarId);
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
    //generateSchedule(cal.getViewName(), cal.getDateRangeStart(), cal.getDateRangeEnd());
    getMySchedules();
    cal.createSchedules(ScheduleList);
    refreshScheduleVisibility();
  }
  // Events initialize
  function setEventListener() {
    $('.menu-navigation').on('click', onClickNavi);
    $('.dropdown-menu [role="menuitem"]').on('click', onClickMenu);
    $('.sidebar-calendars').on('change', onChangeCalendars);
    $('.sidebar-new-schedule-btn').on('click', createNewSchedule);
    window.addEventListener('resize', resizeThrottled);
  }
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
  
  
  $("#btn-new-schedule").on("click", function (){
      showNewPopUp(null);
  });

})();

$(document).ready(function () {
//alert("Point reached start");
  // calendar sidebar scrollbar
  if ($('.sidebar').length > 0) {
    var sidebar = new PerfectScrollbar(".sidebar", {
      wheelPropagation: false
    });
  }
  //alert("Point reached start2");
  // sidebar menu toggle
  $(".sidebar-toggle-btn").on("click", function () {
    $(".sidebar").toggleClass("show");
    $(".app-content-overlay").toggleClass("show");
  });
  //alert("Point reached start3");
  // on click Overlay hide sidebar and overlay
  $(".app-content-overlay, .sidebar-new-schedule-btn").on("click", function () {
    $(".sidebar").removeClass("show");
    $(".app-content-overlay").removeClass("show");
  });
  //alert("Point reached start4");
});

$(window).on("resize", function () {
  // sidebar and overlay hide if screen resize
  if ($(window).width() < 991) {
    $(".sidebar").removeClass("show");
    $(".app-content-overlay").removeClass("show");
  }
})



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

function showEvent(event){
    // element.attr('title', event._tooltip);
    // element.attr('onclick', event.onclick);
    // element.attr('data-toggle', 'tooltip');
    // if (!event.url) {
    //     element.click(function() { view_event(event.eventid); });
    // }
    //alert("View event " + event.id);
    view_event(event.id);
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
                    title: item.title,
                    category: 'time',
                    dueDateClass: '',
                    start: item.start,
                    end: item.end,
                    color: item.color,
                    backgroundColor: item.color,
                    borderColor: "#0000001c",
                    raw:item,
                });
                
                break;
            case "Project":
                schedule.push({
                    id: "",
                    calendarId: item.userid,
                    title: item.title,
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
                    title: item.title,
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
                    title: item.title,
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
                    title: item.title,
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
    console.log(schedule.color);
}




