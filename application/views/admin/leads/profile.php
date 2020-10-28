<?php defined('BASEPATH') or exit('No direct script access allowed'); ?>
<div class="<?php if($openEdit == true){echo 'open-edit ';} ?>lead-wrapper" <?php if(isset($lead) && ($lead->junk == 1 || $lead->lost == 1)){ echo 'lead-is-junk-or-lost';} ?>>
   <?php if(isset($lead)){ ?>
   <style>
         .nav-tabs {
    border-bottom: 1px solid #ddd;
}
.horizontal-scrollable-tabs .horizontal-tabs .nav-tabs-horizontal {
    overflow-x: auto;
    overflow-y: hidden;
    display: -webkit-box;
    display: -moz-box;
}

.modal-title {
    margin: 0;
    line-height: 1.42857143;
}


.h1, .h2, .h3, .h4, .h5, .h6, h1, h2, h3, h4, h5, h6 {

    color: white;
}

         .preview-tabs-top
         {
            display: flex;
         }


         

   </style>
 
</div>
<?php if(isset($lead) && $lead_locked == true){ ?>
<script>
  $(function() {
      // Set all fields to disabled if lead is locked
      $.each($('.lead-wrapper').find('input, select, textarea'), function() {
          $(this).attr('disabled', true);
          if($(this).is('select')) {
              $(this).selectpicker('refresh');
          }
      });
  });
</script>
<?php } ?>
