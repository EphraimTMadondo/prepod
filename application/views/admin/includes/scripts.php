?php defined('BASEPATH') or exit('No direct script access allowed'); ?>\r
   2 <?php include_once(APPPATH.'views/admin/includes/helpers_bottom.php'); ?>\r
   3  <!-- BEGIN: Vendor JS-->\r
   4 <script src="<?php echo base_url();?>assets/frest/app-assets/vendors/js/vendors.min.js"></script>\r
   5 <script src="<?php echo base_url();?>assets/frest/app-assets/fonts/LivIconsEvo/js/LivIconsEvo.tools.min.js"></script>\r
   6 <script src="<?php echo base_url();?>assets/frest/app-assets/fonts/LivIconsEvo/js/LivIconsEvo.defaults.min.js"></script>\r
   7 <script src="<?php echo base_url();?>assets/frest/app-assets/fonts/LivIconsEvo/js/LivIconsEvo.min.js"></script>\r
   8 \r
   9 \r
  10 \r
  11 \r
  12 \r
  13 <!-- Data tables -->\r
  14 <script src="<?php echo base_url();?>assets/frest/app-assets/vendors/js/tables/datatable/datatables.min.js"></script>\r
  15 <script src="<?php echo base_url();?>assets/frest/app-assets/vendors/js/tables/datatable/dataTables.bootstrap4.min.js"></script>\r
  16 <script src="<?php echo base_url();?>assets/frest/app-assets/vendors/js/tables/datatable/dataTables.buttons.min.js"></script>\r
  17 <script src="<?php echo base_url();?>assets/frest/app-assets/vendors/js/tables/datatable/buttons.html5.min.js"></script>\r
  18 <script src="<?php echo base_url();?>assets/frest/app-assets/vendors/js/tables/datatable/buttons.print.min.js"></script>\r
  19 <script src="<?php echo base_url();?>assets/frest/app-assets/vendors/js/tables/datatable/buttons.bootstrap.min.js"></script>\r
  20 <script src="<?php echo base_url();?>assets/frest/app-assets/vendors/js/tables/datatable/pdfmake.min.js"></script>\r
  21 <script src="<?php echo base_url();?>assets/frest/app-assets/vendors/js/tables/datatable/vfs_fonts.js"></script>\r
  22 <script src="<?php echo base_url();?>assets/frest/app-assets/vendors/js/extensions/dropzone.min.js"></script>\r
  23 <script src="https://cdn.jsdelivr.net/npm/bootstrap-select@1.13.14/dist/js/bootstrap-select.min.js"></script>\r
  24 <script src="<?php echo base_url();?>assets/plugins/bootstrap-select-ajax/js/ajax-bootstrap-select.min.js"></script>\r
  25 \r
  26 \r
  27 <script type="text/javascript" id="tinymce-js" src="<?php echo base_url();?>assets/plugins/tinymce/tinymce.min.js?v=2.4.2"></script>\r
  28 <script type="text/javascript" id="jquery-shortcuts-js" src="<?php echo base_url();?>assets/plugins/jquery-shortcuts/jquery.shortcuts.js"></script>\r
  29 <script type="text/javascript" id="jquery-validation-js" src="<?php echo base_url();?>assets/plugins/jquery-validation/jquery.validate.min.js?v=2.4.2"></script>\r
  30 <script type="text/javascript" id="google-js" src="https://apis.google.com/js/api.js?onload=onGoogleApiLoad" defer></script>\r
  31 <script type="text/javascript" id="common-js" src="<?php echo base_url();?>assets/builds/common.js"></script>\r
  32 <script type="text/javascript" id="app-js" src="<?php echo base_url();?>assets/js/main.js"></script>\r
  33 \r
  34 \r
  35 \r
  36 <?php\r
  37    switch($page)\r
  38    {\r
  39       case 'dashboard':\r
  40      \r
  41          echo "<script src='".base_url()."assets/frest/app-assets/vendors/js/charts/apexcharts.min.js'></script>\n";\r
  42          echo "<script src='".base_url()."assets/frest/app-assets/vendors/js/extensions/dragula.min.js'></script>\n";\r
  43          echo "<script src='".base_url()."assets/frest/app-assets/vendors/js/extensions/swiper.min.js'></script>\n";\r
  44          echo "<script src='".base_url()."assets/frest/app-assets/vendors/js/charts/chart.min.js'></script>\n";\r
  45    \r
  46          echo "<script src='".base_url()."assets/frest/app-assets/vendors/js/extensions/moment.min.js'></script>\n";\r
  47          echo "<script src='".base_url()."application/views/themes/assets/js/dashboard-custom.js'></script>\n";\r
  48        \r
  49       \r
  50       break;\r
  51       case 'calendar':\r
  52          echo "<script src='".base_url()."assets/frest/app-assets/vendors/js/calendar/tui-code-snippet.min.js'></script>\n";\r
  53          echo "<script src='".base_url()."assets/frest/app-assets/vendors/js/calendar/tui-dom.js'></script>\n";\r
  54          echo "<script src='".base_url()."assets/frest/app-assets/vendors/js/calendar/tui-time-picker.min.js'></script>\n";\r
  55          echo "<script src='".base_url()."assets/frest/app-assets/vendors/js/calendar/tui-date-picker.min.js'></script>\n";\r
  56          echo "<script src='".base_url()."assets/frest/app-assets/vendors/js/extensions/moment.min.js'></script>\n";\r
  57          echo "<script src='".base_url()."assets/frest/app-assets/vendors/js/calendar/chance.min.js'></script>\n";\r
  58          echo "<script src='".base_url()."assets/frest/app-assets/vendors/js/calendar/tui-calendar.min.js'></script>\n";\r
  59       break;\r
  60       case "task_kanban":\r
  61       case "proposals_kanban":\r
  62       case "leads":\r
  63          echo "<script src='".base_url()."assets/frest/app-assets/vendors/js/jkanban/jkanban.min.js'></script>\n";\r
  64          echo "<script src='".base_url()."assets/frest/app-assets/vendors/js/editors/quill/quill.min.js'></script>\n";\r
  65       break;\r
  66       case "task_list":\r
  67          echo "<script src='".base_url()."assets/frest/app-assets/vendors/js/editors/quill/quill.min.js'></script>\n";\r
  68          echo "<script src='".base_url()."assets/frest/app-assets/vendors/js/extensions/dragula.min.js'></script>\n";\r
  69       break;\r
  70       case "mailbox":\r
  71          echo "<script src='".base_url()."assets/frest/app-assets/vendors/js/editors/quill/quill.min.js'></script>\n";\r
  72          echo "<script src='".base_url()."assets/frest/app-assets/vendors/js/extensions/toastr.min.js'></script>\n";\r
  73       break;\r
  74       case "contracts":\r
  75       case "projects":\r
  76       case "reports":\r
  77       case "staff":\r
  78          echo "<script src='".base_url()."assets/plugins/jquery-circle-progress/circle-progress.min.js'></script>\n";\r
  79          echo "<script src='".base_url()."assets/frest/app-assets/vendors/js/charts/chart.min.js'></script>\n";\r
  80       break;\r
  81       case "hrm":\r
  82       case "purchase":\r
  83       case "staff":\r
  84          echo "<script src='".base_url()."modules/assets/plugins/handsontable/handsontable.full.min.js'></script>\n";\r
  85       break;\r
  86       default:\r
  87       break;\r
  88    }\r
  89 ?>\r
  90 <!-- BEGIN Vendor JS-->\r
  91 \r
  92 <!-- BEGIN: Theme JS-->\r
  93 <script src="<?php echo base_url();?>assets/frest/app-assets/js/scripts/configs/vertical-menu-dark.min.js"></script>\r
  94 <script src="<?php echo base_url();?>assets/frest/app-assets/js/core/app-menu.min.js"></script>\r
  95 <!---\r
  96 <script src="<?php echo base_url();?>assets/frest/app-assets/js/scripts/pickers/dateTime/pick-a-datetime.js"></script> -->\r
  97 \r
  98 <script src="<?php echo base_url();?>assets/frest/app-assets/js/core/app.js"></script>\r
  99 <script src="<?php echo base_url();?>assets/frest/app-assets/js/scripts/components.min.js"></script>\r
 100 <script src="<?php echo base_url();?>assets/frest/app-assets/js/scripts/footer.min.js"></script>\r
 101 \r
 102 <script src="<?php echo base_url();?>modules/hrm/assets/js/managedayoff.js"></script>\r
 103 <script src="<?php echo base_url();?>modules/hrm/assets/js/allowancetype.js"></script>\r
 104 <script src="<?php echo base_url();?>modules/hrm/assets/js/contract.js"></script>\r
 105 <script src="<?php echo base_url();?>modules/hrm/assets/js/contracttype.js"></script>\r
 106 <script src="<?php echo base_url();?>modules/hrm/assets/js/jobposition.js"></script>\r
 107 <script src="<?php echo base_url();?>modules/hrm/assets/js/managecontract.js"></script>\r
 108 <script src="<?php echo base_url();?>modules/hrm/assets/js/managesettings.js"></script>\r
 109 <script src="<?php echo base_url();?>modules/hrm/assets/js/managestaff.js"></script>\r
 110 <script src="<?php echo base_url();?>modules/hrm/assets/js/mmember.js"></script>\r
 111 <script src="<?php echo base_url();?>modules/hrm/assets/js/payroll.js"></script>\r
 112 <script src="<?php echo base_url();?>modules/hrm/assets/js/payrollincludes.js"></script>\r
 113 <script src="<?php echo base_url();?>modules/hrm/assets/js/payslip.js"></script>\r
 114 <script src="<?php echo base_url();?>modules/hrm/assets/js/workplace.js"></script>\r
 115 \r
 116 <script src="<?php echo base_url();?>assets/js/app.js"></script>\r
 117 <script src="<?php echo base_url();?>assets/plugins/datetimepicker/jquery.datetimepicker.full.js"></script>\r
 118 <script src="<?php echo base_url();?>application/views/themes/assets/plugins/accounting.js/accounting.js"></script>\r
 119 <script src="<?php echo base_url();?>application/views/assets/builds/vendor-admin.js"></script>\r
 120 \r
 121 \r
 122 \r
 123 <!-- END: Theme JS-->\r
 124 \r
 125 <!-- BEGIN: Page JS-->\r
 126 <?php\r
 127    switch($page)\r
 128    {\r
 129       case 'dashboard':\r
 130          echo "<script src='".base_url()."assets/frest/app-assets/js/scripts/pages/dashboard-ecommerce.min.js'></script>\n";\r
 131          echo "<script src='".base_url()."assets/frest/app-assets/js/scripts/cards/widgets.js'></script>\n";\r
 132          echo "<script src='".base_url()."assets/frest/app-assets/js/scripts/extensions/calendar/calendars-data.js'></script>\n";\r
 133          echo "<script src='".base_url()."assets/frest/app-assets/js/scripts/extensions/calendar/schedules.js'></script>\n";\r
 134          echo "<script src='".base_url()."assets/frest/app-assets/js/scripts/extensions/calendar/app-calendar.js'></script>\n";\r
 135       break;\r
 136       case 'calendar':\r
 137          echo "<script src='".base_url()."assets/frest/app-assets/js/scripts/extensions/calendar/calendars-data.js'></script>\n";\r
 138          echo "<script src='".base_url()."assets/frest/app-assets/js/scripts/extensions/calendar/schedules.js'></script>\n";\r
 139          echo "<script src='".base_url()."assets/frest/app-assets/js/scripts/extensions/calendar/app-calendar.js'></script>\n";\r
 140       break;\r
 141       case "task_list":\r
 142          echo "<script src='".base_url()."assets/frest/app-assets/js/scripts/pages/app-todo.js'></script>\n";\r
 143       break;\r
 144       case "mailbox":\r
 145          echo "<script src='".base_url()."assets/frest/app-assets/js/scripts/pages/app-email.js'></script>\n";\r
 146       break;\r
 147       case "projects":\r
 148          echo "<script src='".base_url()."assets/js/projects.js'></script>\n";\r
 149       break;\r
 150       default:\r
 151       break;\r
 152    }\r
 153 ?>\r
 154 \r
 155 <script>\r
 156         function custom_fields_hyperlink(){\r
 157          var cf_hyperlink = $('body').find('.cf-hyperlink');\r
 158          if(cf_hyperlink.length){\r
 159              $.each(cf_hyperlink,function(){\r
 160                 var cfh_wrapper = $(this);\r
 161                 var cfh_field_to = cfh_wrapper.attr('data-fieldto');\r
 162                 var cfh_field_id = cfh_wrapper.attr('data-field-id');\r
 163                 var textEl = $('body').find('#custom_fields_'+cfh_field_to+'_'+cfh_field_id+'_popover');\r
 164                 var hiddenField = $("#custom_fields\\\["+cfh_field_to+"\\\]\\\["+cfh_field_id+"\\\]");\r
 165                 var cfh_value = cfh_wrapper.attr('data-value');\r
 166                 hiddenField.val(cfh_value);\r
 167 \r
 168                 if($(hiddenField.val()).html() != ''){\r
 169                     textEl.html($(hiddenField.val()).html());\r
 170                 }\r
 171                 var cfh_field_name = cfh_wrapper.attr('data-field-name');\r
 172                 textEl.popover({\r
 173                     html: true,\r
 174                     trigger: "manual",\r
 175                     placement: "top",\r
 176                     title:cfh_field_name,\r
 177                     content:function(){\r
 178                         return $(cfh_popover_templates[cfh_field_id]).html();\r
 179                     }\r
 180                 }).on("click", function(e){\r
 181                     var $popup = $(this);\r
 182                     $popup.popover("toggle");\r
 183                     var titleField = $("#custom_fields_"+cfh_field_to+"_"+cfh_field_id+"_title");\r
 184                     var urlField = $("#custom_fields_"+cfh_field_to+"_"+cfh_field_id+"_link");\r
 185                     var ttl = $(hiddenField.val()).html();\r
 186                     var cfUrl = $(hiddenField.val()).attr("href");\r
 187                     if(cfUrl){\r
 188                         $('#cf_hyperlink_open_'+cfh_field_id).attr('href',(cfUrl.indexOf('://') === -1 ? 'http://' + cfUrl : cfUrl));\r
 189                     }\r
 190                     titleField.val(ttl);\r
 191                     urlField.val(cfUrl);\r
 192                     $("#custom_fields_"+cfh_field_to+"_"+cfh_field_id+"_btn-save").click(function(){\r
 193                         hiddenField.val((urlField.val() != '' ? '<a href="'+urlField.val()+'" target="_blank">' + titleField.val() + '</a>' : ''));\r
 194                         textEl.html(titleField.val() == "" ? "Click here to add link" : titleField.val());\r
 195                         $popup.popover("toggle");\r
 196                     });\r
 197                     $("#custom_fields_"+cfh_field_to+"_"+cfh_field_id+"_btn-cancel").click(function(){\r
 198                         if(urlField.val() == ''){\r
 199                             hiddenField.val('');\r
 200                         }\r
 201                         $popup.popover("toggle");\r
 202                     });\r
 203                 });\r
 204             });\r
 205          }\r
 206      }\r
 207  </script>\r
 208 <!-- END: Page JS-->\r