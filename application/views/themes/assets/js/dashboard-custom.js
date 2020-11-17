
//alert("code has run start");
//var Calendar = tui.Calendar;

$(document).ready ( function(){
    //alert("code has run1");
    //init_weekly_payment_statistics2();
    //alert("code has run2");
    
    
    prepareCalendar();
    
});



function init_weekly_payment_statistics2(data) {

      var $primary = '#5A8DEE';
      var $danger = '#FF5B5C';
      var $warning = '#FDAC41';
      var $info = '#00CFDD';
      var $secondary = '#828D99';
      var $secondary_light = '#e7edf3';
      var $light_primary = "#E2ECFF";



    //alert("Just CHecking");

        if ($('#weekly-payment-statistics2').length > 0) {
            //alert("length > 0");
            if (typeof(weekly_payments_statistics) !== 'undefined') {
                weekly_payments_statistics.destroy();
            }
            if (typeof(data) == 'undefined') {
                var currency = $('select[name="currency"]').val();
                alert("currency "+ currency);
                $.get(admin_url + 'home/weekly_payments_statistics/' + currency, function(response) {
                    
                    //Added By Leo
                    //alert(response);
                    var newData = [];
                    newData.push({
                              name: response.datasets[0].label,
                              data: response.datasets[0].data,
                              type: 'area',
                            });
                    newData.push({
                              name: response.datasets[1].label,
                              data: response.datasets[1].data,
                              type: 'area',
                            });
                    var orderSummaryChartOptions = {
                        chart: {
                          height: 270,
                          type: 'line',
                          stacked: false,
                          toolbar: {
                            show: false,
                          },
                          sparkline: {
                            enabled: true
                          },
                        },
                        colors: [$primary, $primary],
                        dataLabels: {
                          enabled: false
                        },
                        stroke: {
                          curve: 'smooth',
                          width: 2.5,
                          dashArray: [0, 8]
                        },
                        fill: {
                          type: 'gradient',
                          gradient: {
                            inverseColors: false,
                            shade: 'light',
                            type: "vertical",
                            gradientToColors: [$light_primary, $primary],
                            opacityFrom: 0.7,
                            opacityTo: 0.55,
                            stops: [0, 80, 100]
                          }
                        },
                        series: newData,
                    
                        xaxis: {
                          offsetY: -50,
                          categories: ['', "Monday", "Tuesday", "Wednesday", "Thursday", "Friday", "Saturday", "Sunday",''],
                          axisBorder: {
                            show: false,
                          },
                          axisTicks: {
                            show: false,
                          },
                          labels: {
                            show: true,
                            style: {
                              colors: $secondary
                            }
                          }
                        },
                        tooltip: {
                          x: { show: false }
                        },
                    };
                
                    var chart = new ApexCharts(document.querySelector("#weekly-payment-statistics2"), orderSummaryChartOptions);
                    chart.render();

                }, 'json');
            } else {
                // weekly_payments_statistics = new Chart($('#weekly-payment-statistics'), {
                //     type: 'bar',
                //     data: data,
                //     options: {
                //         responsive: true,
                //         scales: {
                //             yAxes: [{
                //               ticks: {
                //                 beginAtZero: true,
                //               }
                //             }]
                //         },
                //     },
                // });
                
                //Added By Leo
                var newData = [];
                newData.push({
                          name: data.datasets[0].label,
                          data: data.datasets[0].data,
                          type: 'area',
                        });
                newData.push({
                          name: data.datasets[1].label,
                          data: data.datasets[1].data,
                          type: 'area',
                        });

                    
                if(JSON.stringify(data.datasets[0].data) == "[0,0,0,0,0,0,0]" && JSON.stringify(data.datasets[1].data) == "[0,0,0,0,0,0,0]"){
                    //newData = [data.datasets[0].data,data.datasets[1].data,[100,100,100,100,100,100,100]];
                    
                    newData.push({
                          name: "",
                          data: [100,100,100,100,100,100,100],
                          type: 'area',
                        });
                }
                //alert(JSON.stringify(newData));

                    var orderSummaryChartOptions = {
                        chart: {
                          height: 270,
                          type: 'line',
                          stacked: false,
                          toolbar: {
                            show: false,
                          },
                          sparkline: {
                            enabled: true
                          },
                        },
                        colors: [$primary, $primary],
                        dataLabels: {
                          enabled: false
                        },
                        stroke: {
                          curve: 'smooth',
                          width: 2.5,
                          dashArray: [0, 8]
                        },
                        fill: {
                          type: 'gradient',
                          gradient: {
                            inverseColors: false,
                            shade: 'light',
                            type: "vertical",
                            gradientToColors: [$light_primary, $primary],
                            opacityFrom: 0.7,
                            opacityTo: 0.55,
                            stops: [0, 80, 100]
                          }
                        },
                        series: newData,
                        xaxis: {
                          offsetY: -50,
                          categories: ["Monday", "Tuesday", "Wednesday", "Thursday", "Friday", "Saturday", "Sunday"],
                          axisBorder: {
                            show: false,
                          },
                          axisTicks: {
                            show: false,
                          },
                          labels: {
                            show: true,
                            style: {
                              colors: $secondary
                            }
                          }
                        },
                        tooltip: {
                          x: { show: false }
                        },
                    };
                    
                    var chart = new ApexCharts(document.querySelector("#weekly-payment-statistics2"), orderSummaryChartOptions);
                    chart.render();
            }

        }


    
    // var orderSummaryChartOptions = {
    //     chart: {
    //       height: 270,
    //       type: 'line',
    //       stacked: false,
    //       toolbar: {
    //         show: false,
    //       },
    //       sparkline: {
    //         enabled: true
    //       },
    //     },
    //     colors: [$primary, $primary],
    //     dataLabels: {
    //       enabled: false
    //     },
    //     stroke: {
    //       curve: 'smooth',
    //       width: 2.5,
    //       dashArray: [0, 8]
    //     },
    //     fill: {
    //       type: 'gradient',
    //       gradient: {
    //         inverseColors: false,
    //         shade: 'light',
    //         type: "vertical",
    //         gradientToColors: [$light_primary, $primary],
    //         opacityFrom: 0.7,
    //         opacityTo: 0.55,
    //         stops: [0, 80, 100]
    //       }
    //     },
    //     series: [{
    //       name: 'Weeks',
    //       data: [165, 175, 162, 173, 160, 195, 160, 170, 160],
    //       type: 'area',
    //     }, {
    //       name: 'Months',
    //       data: [168, 168, 155, 178, 155, 170, 190, 160, 150],
    //       type: 'line',
    //     }],
    
    //     xaxis: {
    //       offsetY: -50,
    //       categories: ['', "Monday", "Tuesday", "Wednesday", "Thursday", "Friday", "Saturday", "Sunday",''],
    //       axisBorder: {
    //         show: false,
    //       },
    //       axisTicks: {
    //         show: false,
    //       },
    //       labels: {
    //         show: true,
    //         style: {
    //           colors: $secondary
    //         }
    //       }
    //     },
    //     tooltip: {
    //       x: { show: false }
    //     },
    // }
    
    
    // var chart = new ApexCharts(document.querySelector("#weekly-payment-statistics2"), orderSummaryChartOptions);
    
    // chart.render();

}


function prepareCalendar(){
    // var calendar_selector2 = $('#calendar2');
    // if (calendar_selector2.length > 0) {
    //     var calendar = new Calendar('#calendar', {
    //       defaultView: 'month',
    //       taskView: true,
    //       template: {
    //         monthDayname: function(dayname) {
    //           return '<span class="calendar-week-dayname-name">' + dayname.label + '</span>';
    //         }
            
    //       }
    //     });
    // }
    
    //alert("Calendar step");
    // var calendar = new Calendar('#calendar2', {
    //     defaultView: 'month',
    // taskView: true,    // Can be also ['milestone', 'task']
    // scheduleView: true,  // Can be also ['allday', 'time']
    // template: {
    //     milestone: function(schedule) {
    //         return '<span style="color:red;"><i class="fa fa-flag"></i> ' + schedule.title + '</span>';
    //     },
    //     milestoneTitle: function() {
    //         return 'Milestone';
    //     },
    //     task: function(schedule) {
    //         return '&nbsp;&nbsp;#' + schedule.title;
    //     },
    //     taskTitle: function() {
    //         return '<label><input type="checkbox" />Task</label>';
    //     },
    //     allday: function(schedule) {
    //         return schedule.title + ' <i class="bx bx-refresh"></i>';
    //     },
    //     alldayTitle: function() {
    //         return 'All Day';
    //     },
    //     time: function(schedule) {
    //         return schedule.title + ' <i class="bx bx-refresh"></i>' + schedule.start;
    //     }
    // },
    // month: {
    //     daynames: ['Sun', 'Mon', 'Tue', 'Wed', 'Thu', 'Fri', 'Sat'],
    //     startDayOfWeek: 0,
    //     narrowWeekend: true
    // },
    // week: {
    //     daynames: ['Sun', 'Mon', 'Tue', 'Wed', 'Thu', 'Fri', 'Sat'],
    //     startDayOfWeek: 0,
    //     narrowWeekend: true
    // }
    // });
}