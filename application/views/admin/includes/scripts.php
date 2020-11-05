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
 106 <script src="<?php echo base_url();?>modules/assets/js/proposal.js"></script>\r
 107 \r
 108 <script src="<?php echo base_url();?>modules/hrm/assets/js/jobposition.js"></script>\r
 109 <script src="<?php echo base_url();?>modules/hrm/assets/js/managecontract.js"></script>\r
 110 <script src="<?php echo base_url();?>modules/hrm/assets/js/managesettings.js"></script>\r
 111 <script src="<?php echo base_url();?>modules/hrm/assets/js/managestaff.js"></script>\r
 112 <script src="<?php echo base_url();?>modules/hrm/assets/js/mmember.js"></script>\r
 113 <script src="<?php echo base_url();?>modules/hrm/assets/js/payroll.js"></script>\r
 114 <script src="<?php echo base_url();?>modules/hrm/assets/js/payrollincludes.js"></script>\r
 115 <script src="<?php echo base_url();?>modules/hrm/assets/js/payslip.js"></script>\r
 116 <script src="<?php echo base_url();?>modules/hrm/assets/js/workplace.js"></script>\r
 117 \r
 118 <script src="<?php echo base_url();?>assets/js/app.js"></script>\r
 119 <script src="<?php echo base_url();?>assets/plugins/datetimepicker/jquery.datetimepicker.full.js"></script>\r
 120 <script src="<?php echo base_url();?>application/views/themes/assets/plugins/accounting.js/accounting.js"></script>\r
 121 \r
 122 <script src="<?php echo base_url();?>application/views/themes/assets/plugins/internal/validation/app-form-validation.js"></script>\r
 123 <script src="<?php echo base_url();?>assets/builds/common.js"></script>\r
 124 <script src="<?php echo base_url();?>assets/plugins/internal/validation/app-form-validation.js"></script>\r
 125 \r
 126 \r
 127 \r
 128 \r
 129 \r
 130 \r
 131 \r
 132 <!-- END: Theme JS-->\r
 133 \r
 134 <!-- BEGIN: Page JS-->\r
 135 <?php\r
 136    switch($page)\r
 137    {\r
 138       case 'dashboard':\r
 139          echo "<script src='".base_url()."assets/frest/app-assets/js/scripts/pages/dashboard-ecommerce.min.js'></script>\n";\r
 140          echo "<script src='".base_url()."assets/frest/app-assets/js/scripts/cards/widgets.js'></script>\n";\r
 141          echo "<script src='".base_url()."assets/frest/app-assets/js/scripts/extensions/calendar/calendars-data.js'></script>\n";\r
 142          echo "<script src='".base_url()."assets/frest/app-assets/js/scripts/extensions/calendar/schedules.js'></script>\n";\r
 143          echo "<script src='".base_url()."assets/frest/app-assets/js/scripts/extensions/calendar/app-calendar.js'></script>\n";\r
 144       break;\r
 145       case 'calendar':\r
 146          echo "<script src='".base_url()."assets/frest/app-assets/js/scripts/extensions/calendar/calendars-data.js'></script>\n";\r
 147          echo "<script src='".base_url()."assets/frest/app-assets/js/scripts/extensions/calendar/schedules.js'></script>\n";\r
 148          echo "<script src='".base_url()."assets/frest/app-assets/js/scripts/extensions/calendar/app-calendar.js'></script>\n";\r
 149       break;\r
 150       case "task_list":\r
 151          echo "<script src='".base_url()."assets/frest/app-assets/js/scripts/pages/app-todo.js'></script>\n";\r
 152       break;\r
 153       case "mailbox":\r
 154          echo "<script src='".base_url()."assets/frest/app-assets/js/scripts/pages/app-email.js'></script>\n";\r
 155       break;\r
 156       case "projects":\r
 157          echo "<script src='".base_url()."assets/js/projects.js'></script>\n";\r
 158       break;\r
 159       default:\r
 160       break;\r
 161    }\r
 162 ?>\r
 163 \r
 164 <script>\r
 165         function custom_fields_hyperlink(){\r
 166          var cf_hyperlink = $('body').find('.cf-hyperlink');\r
 167          if(cf_hyperlink.length){\r
 168              $.each(cf_hyperlink,function(){\r
 169                 var cfh_wrapper = $(this);\r
 170                 var cfh_field_to = cfh_wrapper.attr('data-fieldto');\r
 171                 var cfh_field_id = cfh_wrapper.attr('data-field-id');\r
 172                 var textEl = $('body').find('#custom_fields_'+cfh_field_to+'_'+cfh_field_id+'_popover');\r
 173                 var hiddenField = $("#custom_fields\\\["+cfh_field_to+"\\\]\\\["+cfh_field_id+"\\\]");\r
 174                 var cfh_value = cfh_wrapper.attr('data-value');\r
 175                 hiddenField.val(cfh_value);\r
 176 \r
 177                 if($(hiddenField.val()).html() != ''){\r
 178                     textEl.html($(hiddenField.val()).html());\r
 179                 }\r
 180                 var cfh_field_name = cfh_wrapper.attr('data-field-name');\r
 181                 textEl.popover({\r
 182                     html: true,\r
 183                     trigger: "manual",\r
 184                     placement: "top",\r
 185                     title:cfh_field_name,\r
 186                     content:function(){\r
 187                         return $(cfh_popover_templates[cfh_field_id]).html();\r
 188                     }\r
 189                 }).on("click", function(e){\r
 190                     var $popup = $(this);\r
 191                     $popup.popover("toggle");\r
 192                     var titleField = $("#custom_fields_"+cfh_field_to+"_"+cfh_field_id+"_title");\r
 193                     var urlField = $("#custom_fields_"+cfh_field_to+"_"+cfh_field_id+"_link");\r
 194                     var ttl = $(hiddenField.val()).html();\r
 195                     var cfUrl = $(hiddenField.val()).attr("href");\r
 196                     if(cfUrl){\r
 197                         $('#cf_hyperlink_open_'+cfh_field_id).attr('href',(cfUrl.indexOf('://') === -1 ? 'http://' + cfUrl : cfUrl));\r
 198                     }\r
 199                     titleField.val(ttl);\r
 200                     urlField.val(cfUrl);\r
 201                     $("#custom_fields_"+cfh_field_to+"_"+cfh_field_id+"_btn-save").click(function(){\r
 202                         hiddenField.val((urlField.val() != '' ? '<a href="'+urlField.val()+'" target="_blank">' + titleField.val() + '</a>' : ''));\r
 203                         textEl.html(titleField.val() == "" ? "Click here to add link" : titleField.val());\r
 204                         $popup.popover("toggle");\r
 205                     });\r
 206                     $("#custom_fields_"+cfh_field_to+"_"+cfh_field_id+"_btn-cancel").click(function(){\r
 207                         if(urlField.val() == ''){\r
 208                             hiddenField.val('');\r
 209                         }\r
 210                         $popup.popover("toggle");\r
 211                     });\r
 212                 });\r
 213             });\r
 214          }\r
 215      }\r
 216  </script>\r
 217 <!-- END: Page JS-->\r