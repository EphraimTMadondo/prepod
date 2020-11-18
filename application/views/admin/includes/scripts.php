<?php defined('BASEPATH') or exit('No direct script access allowed'); ?>
<?php include_once(APPPATH.'views/admin/includes/helpers_bottom.php'); ?>

 <!-- BEGIN: Vendor JS-->
 <script src="<?php echo base_url();?>assets/frest/app-assets/vendors/js/vendors.min.js"></script>
<script src="<?php echo base_url();?>assets/frest/app-assets/fonts/LivIconsEvo/js/LivIconsEvo.tools.min.js"></script>
<script src="<?php echo base_url();?>assets/frest/app-assets/fonts/LivIconsEvo/js/LivIconsEvo.defaults.min.js"></script>
<script src="<?php echo base_url();?>assets/frest/app-assets/fonts/LivIconsEvo/js/LivIconsEvo.min.js"></script>


<!-- Datepicker -->
<?php
   echo "<script src='".base_url()."assets/frest/app-assets/vendors/js/pickers/pickadate/picker.js'></script>\n";
   echo "<script src='".base_url()."assets/frest/app-assets/vendors/js/pickers/pickadate/legacy.js'></script>\n";
   echo "<script src='".base_url()."assets/frest/app-assets/vendors/js/pickers/pickadate/picker.date.js'></script>\n";
   echo "<script src='".base_url()."assets/frest/app-assets/vendors/js/pickers/pickadate/picker.time.js'></script>\n";
   echo "<script src='".base_url()."assets/frest/app-assets/vendors/js/pickers/daterange/moment.min.js'></script>\n";
   echo "<script src='".base_url()."assets/frest/app-assets/vendors/js/pickers/daterange/daterangepicker.js'></script>\n";
?>


<!-- Data tables -->
<script src="<?php echo base_url();?>assets/frest/app-assets/vendors/js/tables/datatable/datatables.min.js"></script>
<script src="<?php echo base_url();?>assets/frest/app-assets/vendors/js/tables/datatable/dataTables.bootstrap4.min.js"></script>
<script src="<?php echo base_url();?>assets/frest/app-assets/vendors/js/tables/datatable/dataTables.buttons.min.js"></script>
<script src="<?php echo base_url();?>assets/frest/app-assets/vendors/js/tables/datatable/buttons.html5.min.js"></script>
<script src="<?php echo base_url();?>assets/frest/app-assets/vendors/js/tables/datatable/buttons.print.min.js"></script>
<script src="<?php echo base_url();?>assets/frest/app-assets/vendors/js/tables/datatable/buttons.bootstrap.min.js"></script>
<script src="<?php echo base_url();?>assets/frest/app-assets/vendors/js/tables/datatable/pdfmake.min.js"></script>
<script src="<?php echo base_url();?>assets/frest/app-assets/vendors/js/tables/datatable/vfs_fonts.js"></script>
<script src="<?php echo base_url();?>assets/frest/app-assets/vendors/js/extensions/dropzone.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap-select@1.13.14/dist/js/bootstrap-select.min.js"></script>
<script src="<?php echo base_url();?>assets/plugins/bootstrap-select-ajax/js/ajax-bootstrap-select.js"></script>

<script type="text/javascript" id="tinymce-js" src="<?php echo base_url();?>assets/plugins/tinymce/tinymce.min.js?v=2.4.2"></script>
<script type="text/javascript" id="jquery-shortcuts-js" src="<?php echo base_url();?>assets/plugins/jquery-shortcuts/jquery.shortcuts.js"></script>
<script type="text/javascript" id="jquery-validation-js" src="<?php echo base_url();?>assets/plugins/jquery-validation/jquery.validate.min.js?v=2.4.2"></script>
<script type="text/javascript" id="google-js" src="https://apis.google.com/js/api.js?onload=onGoogleApiLoad" defer></script>
<script type="text/javascript" id="common-js" src="<?php echo base_url();?>assets/builds/common.js"></script>
<script type="text/javascript" id="app-js" src="https://worksuite.app/prepod/assets/js/main.js"></script>

<!-- BEGIN Vendor JS-->

<!-- BEGIN: Theme JS-->
<script src="https://worksuite.app/prepod/assets/frest/app-assets/js/scripts/configs/vertical-menu-dark.min.js"></script>
<script src="https://worksuite.app/prepod/assets/frest/app-assets/js/core/app-menu.min.js"></script>
<script src="https://worksuite.app/prepod/assets/frest/app-assets/js/scripts/pickers/dateTime/pick-a-datetime.js"></script>
<script src="https://worksuite.app/prepod/assets/frest/app-assets/js/core/app.js"></script>
<script src="https://worksuite.app/prepod/assets/frest/app-assets/js/scripts/components.min.js"></script>
<script src="https://worksuite.app/prepod/assets/frest/app-assets/js/scripts/footer.min.js"></script>
<!-- END: Theme JS-->

<!-- BEGIN: Page JS-->
<!-- END: Page JS-->
<script>
        function custom_fields_hyperlink(){
         var cf_hyperlink = $('body').find('.cf-hyperlink');
         if(cf_hyperlink.length){
             $.each(cf_hyperlink,function(){
                var cfh_wrapper = $(this);
                var cfh_field_to = cfh_wrapper.attr('data-fieldto');
                var cfh_field_id = cfh_wrapper.attr('data-field-id');
                var textEl = $('body').find('#custom_fields_'+cfh_field_to+'_'+cfh_field_id+'_popover');
                var hiddenField = $("#custom_fields\\\["+cfh_field_to+"\\\]\\\["+cfh_field_id+"\\\]");
                var cfh_value = cfh_wrapper.attr('data-value');
                hiddenField.val(cfh_value);

                if($(hiddenField.val()).html() != ''){
                    textEl.html($(hiddenField.val()).html());
                }
                var cfh_field_name = cfh_wrapper.attr('data-field-name');
                textEl.popover({
                    html: true,
                    trigger: "manual",
                    placement: "top",
                    title:cfh_field_name,
                    content:function(){
                        return $(cfh_popover_templates[cfh_field_id]).html();
                    }
                }).on("click", function(e){
                    var $popup = $(this);
                    $popup.popover("toggle");
                    var titleField = $("#custom_fields_"+cfh_field_to+"_"+cfh_field_id+"_title");
                    var urlField = $("#custom_fields_"+cfh_field_to+"_"+cfh_field_id+"_link");
                    var ttl = $(hiddenField.val()).html();
                    var cfUrl = $(hiddenField.val()).attr("href");
                    if(cfUrl){
                        $('#cf_hyperlink_open_'+cfh_field_id).attr('href',(cfUrl.indexOf('://') === -1 ? 'http://' + cfUrl : cfUrl));
                    }
                    titleField.val(ttl);
                    urlField.val(cfUrl);
                    $("#custom_fields_"+cfh_field_to+"_"+cfh_field_id+"_btn-save").click(function(){
                        hiddenField.val((urlField.val() != '' ? '<a href="'+urlField.val()+'" target="_blank">' + titleField.val() + '</a>' : ''));
                        textEl.html(titleField.val() == "" ? "Click here to add link" : titleField.val());
                        $popup.popover("toggle");
                    });
                    $("#custom_fields_"+cfh_field_to+"_"+cfh_field_id+"_btn-cancel").click(function(){
                        if(urlField.val() == ''){
                            hiddenField.val('');
                        }
                        $popup.popover("toggle");
                    });
                });
            });
         }
     }

     	//Make all doc nubers uneditable
	var x = document.getElementsByName("number");
var i;
for (i = 0; i < x.length; i++) {

    x[i].setAttribute("readonly", true )
  
}

function appTagsInput(e) {
    void 0 === e && (e = $("body").find("input.tagsinput")),
        e.length &&
            e.tagit({
                availableTags: app.available_tags,
                allowSpaces: !0,
                animate: !1,
                placeholderText: app.lang.tag,
                showAutocompleteOnFocus: !0,
                caseSensitive: !1,
                autocomplete: { appendTo: "#inputTagsWrapper" },
                afterTagAdded: function (e, t) {
                    var a = app.available_tags.indexOf($.trim($(t.tag).find(".tagit-label").text()));
                    if (a > -1) {
                        var n = app.available_tags_ids[a];
                        $(t.tag).addClass("tag-id-" + n);
                    }
                    showHideTagsPlaceholder($(this));
                },
                afterTagRemoved: function (e, t) {
                    showHideTagsPlaceholder($(this));
                },
            });
}
 </script>
 
<!-- END: Page JS-->