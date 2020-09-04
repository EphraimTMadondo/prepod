<?php 
   defined('BASEPATH') or exit('No direct script access allowed'); 
   ini_set('display_errors', 1);
?>
<?php init_head(); ?>
<link rel="stylesheet" type="text/css" href="<?php echo base_url();?>assets/frest/app-assets/vendors/css/jkanban/jkanban.min.css">
<link rel="stylesheet" type="text/css" href="<?php echo base_url();?>assets/frest/app-assets/vendors/css/forms/select/select2.min.css">
<link rel="stylesheet" type="text/css" href="<?php echo base_url();?>assets/frest/app-assets/vendors/css/editors/quill/quill.snow.css">
<link rel="stylesheet" type="text/css" href="<?php echo base_url();?>assets/frest/app-assets/vendors/css/pickers/pickadate/pickadate.css">
<link rel="stylesheet" type="text/css" href="<?php echo base_url();?>assets/frest/app-assets/css/pages/app-todo.css">
<link rel="stylesheet" type="text/css" href="<?php echo base_url();?>assets/frest/app-assets/css/pages/app-kanban.css">
<!-- BEGIN: Content-->
<?php
if($this->session->has_userdata('tasks_kanban_view') && $this->session->userdata('tasks_kanban_view') == 'true') { 
      $this->load->view("admin/tasks/tasks_kanban.php");
   } else { 
      $this->load->view("admin/tasks/tasks_list.php");
}?>
<!-- END: Content-->
<?php init_tail(); ?>
<script src="<?php echo base_url();?>assets/frest/app-assets/vendors/js/forms/select/select2.full.min.js"></script>
<script src="<?php echo base_url();?>assets/frest/app-assets/vendors/js/jkanban/jkanban.min.js"></script>
<script src="<?php echo base_url();?>assets/frest/app-assets/vendors/js/pickers/pickadate/picker.js"></script>
<script src="<?php echo base_url();?>assets/frest/app-assets/vendors/js/pickers/pickadate/picker.date.js"></script>
<script src="<?php echo base_url();?>assets/frest/app-assets/vendors/js/editors/quill/quill.min.js"></script>
<script src="<?php echo base_url();?>assets/frest/app-assets/vendors/js/extensions/dragula.min.js"></script>
<script src="<?php echo base_url();?>assets/frest/app-assets/js/scripts/pages/app-todo.js"></script>
<script src="<?php echo base_url();?>assets/frest/app-assets/js/scripts/pages/app-kanban.js"></script>
</body>
</html>
