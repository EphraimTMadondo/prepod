<?php defined('BASEPATH') or exit('No direct script access allowed'); ?>
<?php init_head(); ?>
<!-- BEGIN: Content-->
<div class="app-content content">
  <div class="content-overlay"></div>
  <div class="content-wrapper">
  <div class="row">
   <div class="col-md-12">
    <div class="card mtop20">
     <div class="card-body">
       <div class="_buttons">
        <a href="<?php echo admin_url('leads/form'); ?>" class="btn btn-info pull-left"><?php echo _l('new_form'); ?></a>
      </div>
      <div class="clearfix"></div>
      <hr class="hr-panel-heading" />
      <?php hooks()->do_action('forms_table_start'); ?>
      <div class="clearfix"></div>
      <?php render_datatable(array(
       _l('id'),
       _l('form_name'),
       _l('total_submissions'),
       _l('leads_dt_datecreated'),
       ),'web-to-lead'); ?>
     </div>
   </div>
 </div>
</div>
</div>
</div>
<?php init_tail(); ?>
<script>
$(function(){
    initDataTable('.table-web-to-lead', window.location.href);
});
</script>
</body>
</html>
