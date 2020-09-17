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




