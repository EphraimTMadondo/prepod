<?php defined('BASEPATH') or exit('No direct script access allowed'); ?>
<?php init_head(); ?>
<!-- BEGIN: Content-->
<div class="app-content content">
	<div class="content-overlay"></div>
	<div class="content-wrapper">
      <div class="row">
        <div class="_filters _hidden_inputs">
           <?php
            foreach($statuses as $status) {
               echo form_hidden('credit_notes_status_'.$status['id'],isset($status['filter_default'])
                  && $status['filter_default'] ? 'true' : '');
            }
           foreach($years as $year){
              echo form_hidden('year_'.$year['year'],$year['year']);
           }
        ?>
     </div>
     <div class="col-md-12">
         <div class="card mb-1">
            <div class="card-body _buttons">
               <?php if(has_permission('credit_notes','','create')){ ?>
               <a href="<?php echo admin_url('credit_notes/credit_note'); ?>" class="btn btn-primary">
                  <?php echo _l('new_credit_note'); ?>
               </a>
               <?php } ?>
               <select class="selectpicker" id="select-filter" data-live-search="true" onChange="custom_view()" data-style="btn-primary">
                  <option value="" data-tokens="<?php echo _l('credit_notes_list_all'); ?>"><?php echo _l('credit_notes_list_all'); ?></option>
                  <?php foreach($statuses as $status){ ?>
                     <option value="credit_notes_status_<?php echo $status['id']; ?>" data-tokens="<?php echo format_credit_note_status($status['id'],true); ?>"><?php echo format_credit_note_status($status['id'],true); ?></option>
                  <?php } ?>
                  <?php
                     if(count($years) > 0){ ?>
                     <?php foreach($years as $year){ ?>
                        <option value="" data-tokens="year_<?php echo $year['year']; ?>"><?php echo $year['year']; ?></option>
                     <?php } ?>
                  <?php } ?>
               </select>
            </div>
            <div class="card-body">
               <!-- if credit not id found in url -->
               <?php echo form_hidden('credit_note_id',$credit_note_id); ?>
               <?php $this->load->view('admin/credit_notes/table_html'); ?>
            </div>
         </div>
      </div>
   </div>
</div>
<?php $this->load->view('admin/includes/modals/sales_attach_file'); ?>
<script>
   var hidden_columns = [4,5,6,7];
</script>
<?php init_tail(); ?>
<script>
	function custom_view(){
      var view = $('#select-filter').val();
      dt_custom_view(view,'.table-credit-notes',view);
   }

   $(function(){
       var Credit_Notes_ServerParams = {};
     $.each($('._hidden_inputs._filters input'),function(){
       Credit_Notes_ServerParams[$(this).attr('name')] = '[name="'+$(this).attr('name')+'"]';
     });
     initDataTable('.table-credit-notes', admin_url+'credit_notes/table', ['undefined'], ['undefined'], Credit_Notes_ServerParams, [0, 'desc']);
     init_credit_note();
  });
</script>
</body>
</html>
