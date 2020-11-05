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
  29 \r
  30 <script type="text/javascript" id="jquery-validation-js" src="<?php echo base_url();?>assets/plugins/jquery-validation/jquery.validate.min.js"></script>\r
  31 \r
  32 <!---\r
  33 <script type="text/javascript" id="google-js" src="https://apis.google.com/js/api.js?onload=onGoogleApiLoad" defer></script>\r
  34 <script type="text/javascript" id="common-js" src="<?php echo base_url();?>assets/builds/common.js"></script>\r
  35 <script type="text/javascript" id="app-js" src="<?php echo base_url();?>assets/js/main.js"></script>\r
  36 \r
  37 -->\r
  38 \r
  39 \r
  40 \r
  41 <?php\r
  42    switch($page)\r
  43    {\r
  44       case 'dashboard':\r
  45      \r
  46          echo "<script src='".base_url()."assets/frest/app-assets/vendors/js/charts/apexcharts.min.js'></script>\n";\r
  47          echo "<script src='".base_url()."assets/frest/app-assets/vendors/js/extensions/dragula.min.js'></script>\n";\r
  48          echo "<script src='".base_url()."assets/frest/app-assets/vendors/js/extensions/swiper.min.js'></script>\n";\r
  49          echo "<script src='".base_url()."assets/frest/app-assets/vendors/js/charts/chart.min.js'></script>\n";\r
  50    \r
  51          echo "<script src='".base_url()."assets/frest/app-assets/vendors/js/extensions/moment.min.js'></script>\n";\r
  52          echo "<script src='".base_url()."application/views/themes/assets/js/dashboard-custom.js'></script>\n";\r
  53        \r
  54       \r
  55       break;\r
  56       case 'calendar':\r
  57          echo "<script src='".base_url()."assets/frest/app-assets/vendors/js/calendar/tui-code-snippet.min.js'></script>\n";\r
  58          echo "<script src='".base_url()."assets/frest/app-assets/vendors/js/calendar/tui-dom.js'></script>\n";\r
  59          echo "<script src='".base_url()."assets/frest/app-assets/vendors/js/calendar/tui-time-picker.min.js'></script>\n";\r
  60          echo "<script src='".base_url()."assets/frest/app-assets/vendors/js/calendar/tui-date-picker.min.js'></script>\n";\r
  61          echo "<script src='".base_url()."assets/frest/app-assets/vendors/js/extensions/moment.min.js'></script>\n";\r
  62          echo "<script src='".base_url()."assets/frest/app-assets/vendors/js/calendar/chance.min.js'></script>\n";\r
  63          echo "<script src='".base_url()."assets/frest/app-assets/vendors/js/calendar/tui-calendar.min.js'></script>\n";\r
  64       break;\r
  65       case "task_kanban":\r
  66       case "proposals_kanban":\r
  67       case "leads":\r
  68          echo "<script src='".base_url()."assets/frest/app-assets/vendors/js/jkanban/jkanban.min.js'></script>\n";\r
  69          echo "<script src='".base_url()."assets/frest/app-assets/vendors/js/editors/quill/quill.min.js'></script>\n";\r
  70       break;\r
  71       case "task_list":\r
  72          echo "<script src='".base_url()."assets/frest/app-assets/vendors/js/editors/quill/quill.min.js'></script>\n";\r
  73          echo "<script src='".base_url()."assets/frest/app-assets/vendors/js/extensions/dragula.min.js'></script>\n";\r
  74       break;\r
  75       case "mailbox":\r
  76          echo "<script src='".base_url()."assets/frest/app-assets/vendors/js/editors/quill/quill.min.js'></script>\n";\r
  77          echo "<script src='".base_url()."assets/frest/app-assets/vendors/js/extensions/toastr.min.js'></script>\n";\r
  78       break;\r
  79       case "contracts":\r
  80       case "projects":\r
  81       case "reports":\r
  82       case "staff":\r
  83          echo "<script src='".base_url()."assets/plugins/jquery-circle-progress/circle-progress.min.js'></script>\n";\r
  84          echo "<script src='".base_url()."assets/frest/app-assets/vendors/js/charts/chart.min.js'></script>\n";\r
  85       break;\r
  86       case "hrm":\r
  87       case "purchase":\r
  88       case "staff":\r
  89          echo "<script src='".base_url()."modules/assets/plugins/handsontable/handsontable.full.min.js'></script>\n";\r
  90       break;\r
  91       default:\r
  92       break;\r
  93    }\r
  94 ?>\r
  95 <!-- BEGIN Vendor JS-->\r
  96 \r
  97 <!-- BEGIN: Theme JS-->\r
  98 <script src="<?php echo base_url();?>assets/frest/app-assets/js/scripts/configs/vertical-menu-dark.min.js"></script>\r
  99 <script src="<?php echo base_url();?>assets/frest/app-assets/js/core/app-menu.min.js"></script>\r
 100 <!---\r
 101 <script src="<?php echo base_url();?>assets/frest/app-assets/js/scripts/pickers/dateTime/pick-a-datetime.js"></script> -->\r
 102 \r
 103 <script src="<?php echo base_url();?>assets/frest/app-assets/js/core/app.js"></script>\r
 104 <script src="<?php echo base_url();?>assets/frest/app-assets/js/scripts/components.min.js"></script>\r
 105 <script src="<?php echo base_url();?>assets/frest/app-assets/js/scripts/footer.min.js"></script>\r
 106 \r
 107 <script src="<?php echo base_url();?>modules/hrm/assets/js/managedayoff.js"></script>\r
 108 <script src="<?php echo base_url();?>modules/hrm/assets/js/allowancetype.js"></script>\r
 109 <script src="<?php echo base_url();?>modules/hrm/assets/js/contract.js"></script>\r
 110 <script src="<?php echo base_url();?>modules/hrm/assets/js/contracttype.js"></script>\r
 111 <script src="<?php echo base_url();?>modules/assets/js/proposal.js"></script>\r
 112 \r
 113 <script src="<?php echo base_url();?>modules/hrm/assets/js/jobposition.js"></script>\r
 114 <script src="<?php echo base_url();?>modules/hrm/assets/js/managecontract.js"></script>\r
 115 <script src="<?php echo base_url();?>modules/hrm/assets/js/managesettings.js"></script>\r
 116 <script src="<?php echo base_url();?>modules/hrm/assets/js/managestaff.js"></script>\r
 117 <script src="<?php echo base_url();?>modules/hrm/assets/js/mmember.js"></script>\r
 118 <script src="<?php echo base_url();?>modules/hrm/assets/js/payroll.js"></script>\r
 119 <script src="<?php echo base_url();?>modules/hrm/assets/js/payrollincludes.js"></script>\r
 120 <script src="<?php echo base_url();?>modules/hrm/assets/js/payslip.js"></script>\r
 121 <script src="<?php echo base_url();?>modules/hrm/assets/js/workplace.js"></script>\r
 122 \r
 123 <script src="<?php echo base_url();?>assets/js/app.js"></script>\r
 124 <script src="<?php echo base_url();?>assets/plugins/datetimepicker/jquery.datetimepicker.full.js"></script>\r
 125 <script src="<?php echo base_url();?>application/views/themes/assets/plugins/accounting.js/accounting.js"></script>\r
 126 \r
 127 <script src="<?php echo base_url();?>application/views/themes/assets/plugins/internal/validation/app-form-validation.js"></script>\r
 128 <script src="<?php echo base_url();?>assets/builds/common.js"></script>\r
 129 <script src="<?php echo base_url();?>assets/plugins/internal/validation/app-form-validation.js"></script>\r
 130 \r
 131 \r
 132 \r
 133 \r
 134 \r
 135 \r
 136 \r
 137 <!-- END: Theme JS-->\r
 138 \r
 139 <!-- BEGIN: Page JS-->\r
 140 <?php\r
 141    switch($page)\r
 142    {\r
 143       case 'dashboard':\r
 144          echo "<script src='".base_url()."assets/frest/app-assets/js/scripts/pages/dashboard-ecommerce.min.js'></script>\n";\r
 145          echo "<script src='".base_url()."assets/frest/app-assets/js/scripts/cards/widgets.js'></script>\n";\r
 146          echo "<script src='".base_url()."assets/frest/app-assets/js/scripts/extensions/calendar/calendars-data.js'></script>\n";\r
 147          echo "<script src='".base_url()."assets/frest/app-assets/js/scripts/extensions/calendar/schedules.js'></script>\n";\r
 148          echo "<script src='".base_url()."assets/frest/app-assets/js/scripts/extensions/calendar/app-calendar.js'></script>\n";\r
 149       break;\r
 150       case 'calendar':\r
 151          echo "<script src='".base_url()."assets/frest/app-assets/js/scripts/extensions/calendar/calendars-data.js'></script>\n";\r
 152          echo "<script src='".base_url()."assets/frest/app-assets/js/scripts/extensions/calendar/schedules.js'></script>\n";\r
 153          echo "<script src='".base_url()."assets/frest/app-assets/js/scripts/extensions/calendar/app-calendar.js'></script>\n";\r
 154       break;\r
 155       case "task_list":\r
 156          echo "<script src='".base_url()."assets/frest/app-assets/js/scripts/pages/app-todo.js'></script>\n";\r
 157       break;\r
 158       case "mailbox":\r
 159          echo "<script src='".base_url()."assets/frest/app-assets/js/scripts/pages/app-email.js'></script>\n";\r
 160       break;\r
 161       case "projects":\r
 162          echo "<script src='".base_url()."assets/js/projects.js'></script>\n";\r
 163       break;\r
 164       default:\r
 165       break;\r
 166    }\r
 167 ?>\r
 168 \r
 169 <script>\r
 170         function custom_fields_hyperlink(){\r
 171          var cf_hyperlink = $('body').find('.cf-hyperlink');\r
 172          if(cf_hyperlink.length){\r
 173              $.each(cf_hyperlink,function(){\r
 174                 var cfh_wrapper = $(this);\r
 175                 var cfh_field_to = cfh_wrapper.attr('data-fieldto');\r
 176                 var cfh_field_id = cfh_wrapper.attr('data-field-id');\r
 177                 var textEl = $('body').find('#custom_fields_'+cfh_field_to+'_'+cfh_field_id+'_popover');\r
 178                 var hiddenField = $("#custom_fields\\\["+cfh_field_to+"\\\]\\\["+cfh_field_id+"\\\]");\r
 179                 var cfh_value = cfh_wrapper.attr('data-value');\r
 180                 hiddenField.val(cfh_value);\r
 181 \r
 182                 if($(hiddenField.val()).html() != ''){\r
 183                     textEl.html($(hiddenField.val()).html());\r
 184                 }\r
 185                 var cfh_field_name = cfh_wrapper.attr('data-field-name');\r
 186                 textEl.popover({\r
 187                     html: true,\r
 188                     trigger: "manual",\r
 189                     placement: "top",\r
 190                     title:cfh_field_name,\r
 191                     content:function(){\r
 192                         return $(cfh_popover_templates[cfh_field_id]).html();\r
 193                     }\r
 194                 }).on("click", function(e){\r
 195                     var $popup = $(this);\r
 196                     $popup.popover("toggle");\r
 197                     var titleField = $("#custom_fields_"+cfh_field_to+"_"+cfh_field_id+"_title");\r
 198                     var urlField = $("#custom_fields_"+cfh_field_to+"_"+cfh_field_id+"_link");\r
 199                     var ttl = $(hiddenField.val()).html();\r
 200                     var cfUrl = $(hiddenField.val()).attr("href");\r
 201                     if(cfUrl){\r
 202                         $('#cf_hyperlink_open_'+cfh_field_id).attr('href',(cfUrl.indexOf('://') === -1 ? 'http://' + cfUrl : cfUrl));\r
 203                     }\r
 204                     titleField.val(ttl);\r
 205                     urlField.val(cfUrl);\r
 206                     $("#custom_fields_"+cfh_field_to+"_"+cfh_field_id+"_btn-save").click(function(){\r
 207                         hiddenField.val((urlField.val() != '' ? '<a href="'+urlField.val()+'" target="_blank">' + titleField.val() + '</a>' : ''));\r
 208                         textEl.html(titleField.val() == "" ? "Click here to add link" : titleField.val());\r
 209                         $popup.popover("toggle");\r
 210                     });\r
 211                     $("#custom_fields_"+cfh_field_to+"_"+cfh_field_id+"_btn-cancel").click(function(){\r
 212                         if(urlField.val() == ''){\r
 213                             hiddenField.val('');\r
 214                         }\r
 215                         $popup.popover("toggle");\r
 216                     });\r
 217                 });\r
 218             });\r
 219          }\r
 220      }\r
 221  </script>\r
 222 <!-- END: Page JS-->\r