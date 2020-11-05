<?php defined('BASEPATH') or exit('No direct script access allowed'); ?>\r
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
  40          echo "<script src='".base_url()."assets/frest/app-assets/vendors/js/pickers/daterange/daterangepicker.js'></script>\n";\r
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
 118 \r
 119 <!-- END: Theme JS-->\r
 120 \r
 121 <!-- BEGIN: Page JS-->\r
 122 <?php\r
 123    switch($page)\r
 124    {\r
 125       case 'dashboard':\r
 126          echo "<script src='".base_url()."assets/frest/app-assets/js/scripts/pages/dashboard-ecommerce.min.js'></script>\n";\r
 127          echo "<script src='".base_url()."assets/frest/app-assets/js/scripts/cards/widgets.js'></script>\n";\r
 128          echo "<script src='".base_url()."assets/frest/app-assets/js/scripts/extensions/calendar/calendars-data.js'></script>\n";\r
 129          echo "<script src='".base_url()."assets/frest/app-assets/js/scripts/extensions/calendar/schedules.js'></script>\n";\r
 130          echo "<script src='".base_url()."assets/frest/app-assets/js/scripts/extensions/calendar/app-calendar.js'></script>\n";\r
 131       break;\r
 132       case 'calendar':\r
 133          echo "<script src='".base_url()."assets/frest/app-assets/js/scripts/extensions/calendar/calendars-data.js'></script>\n";\r
 134          echo "<script src='".base_url()."assets/frest/app-assets/js/scripts/extensions/calendar/schedules.js'></script>\n";\r
 135          echo "<script src='".base_url()."assets/frest/app-assets/js/scripts/extensions/calendar/app-calendar.js'></script>\n";\r
 136       break;\r
 137       case "task_list":\r
 138          echo "<script src='".base_url()."assets/frest/app-assets/js/scripts/pages/app-todo.js'></script>\n";\r
 139       break;\r
 140       case "mailbox":\r
 141          echo "<script src='".base_url()."assets/frest/app-assets/js/scripts/pages/app-email.js'></script>\n";\r
 142       break;\r
 143       case "projects":\r
 144          echo "<script src='".base_url()."assets/js/projects.js'></script>\n";\r
 145       break;\r
 146       default:\r
 147       break;\r
 148    }\r
 149 ?>\r
 150 \r
 151 <script>\r
 152         function custom_fields_hyperlink(){\r
 153          var cf_hyperlink = $('body').find('.cf-hyperlink');\r
 154          if(cf_hyperlink.length){\r
 155              $.each(cf_hyperlink,function(){\r
 156                 var cfh_wrapper = $(this);\r
 157                 var cfh_field_to = cfh_wrapper.attr('data-fieldto');\r
 158                 var cfh_field_id = cfh_wrapper.attr('data-field-id');\r
 159                 var textEl = $('body').find('#custom_fields_'+cfh_field_to+'_'+cfh_field_id+'_popover');\r
 160                 var hiddenField = $("#custom_fields\\\["+cfh_field_to+"\\\]\\\["+cfh_field_id+"\\\]");\r
 161                 var cfh_value = cfh_wrapper.attr('data-value');\r
 162                 hiddenField.val(cfh_value);\r
 163 \r
 164                 if($(hiddenField.val()).html() != ''){\r
 165                     textEl.html($(hiddenField.val()).html());\r
 166                 }\r
 167                 var cfh_field_name = cfh_wrapper.attr('data-field-name');\r
 168                 textEl.popover({\r
 169                     html: true,\r
 170                     trigger: "manual",\r
 171                     placement: "top",\r
 172                     title:cfh_field_name,\r
 173                     content:function(){\r
 174                         return $(cfh_popover_templates[cfh_field_id]).html();\r
 175                     }\r
 176                 }).on("click", function(e){\r
 177                     var $popup = $(this);\r
 178                     $popup.popover("toggle");\r
 179                     var titleField = $("#custom_fields_"+cfh_field_to+"_"+cfh_field_id+"_title");\r
 180                     var urlField = $("#custom_fields_"+cfh_field_to+"_"+cfh_field_id+"_link");\r
 181                     var ttl = $(hiddenField.val()).html();\r
 182                     var cfUrl = $(hiddenField.val()).attr("href");\r
 183                     if(cfUrl){\r
 184                         $('#cf_hyperlink_open_'+cfh_field_id).attr('href',(cfUrl.indexOf('://') === -1 ? 'http://' + cfUrl : cfUrl));\r
 185                     }\r
 186                     titleField.val(ttl);\r
 187                     urlField.val(cfUrl);\r
 188                     $("#custom_fields_"+cfh_field_to+"_"+cfh_field_id+"_btn-save").click(function(){\r
 189                         hiddenField.val((urlField.val() != '' ? '<a href="'+urlField.val()+'" target="_blank">' + titleField.val() + '</a>' : ''));\r
 190                         textEl.html(titleField.val() == "" ? "Click here to add link" : titleField.val());\r
 191                         $popup.popover("toggle");\r
 192                     });\r
 193                     $("#custom_fields_"+cfh_field_to+"_"+cfh_field_id+"_btn-cancel").click(function(){\r
 194                         if(urlField.val() == ''){\r
 195                             hiddenField.val('');\r
 196                         }\r
 197                         $popup.popover("toggle");\r
 198                     });\r
 199                 });\r
 200             });\r
 201          }\r
 202      }\r
 203  </script>\r
 204 <!-- END: Page JS-->\r