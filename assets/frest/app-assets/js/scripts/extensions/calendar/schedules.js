'use strict';

/*eslint-disable*/
var ScheduleList = [];

var SCHEDULE_CATEGORY = [
  'milestone',
  'task'
];
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

// randome name generate
function generateNames() {
 
}
// generate randome schedule
function generateRandomSchedule(calendar, renderStart, renderEnd) {
  
}
// random schedule created
function generateSchedule(viewName, renderStart, renderEnd) {
 
}
