<?php 
   defined('BASEPATH') or exit('No direct script access allowed'); 
   ini_set('display_errors', 1);
?>

<?php
if($this->session->has_userdata('tasks_kanban_view') && $this->session->userdata('tasks_kanban_view') == 'true') { 
      init_head(true, 'task_kanban');
   } else { 
      init_head(true, 'task_list');
}?>

<!-- BEGIN: Content-->
<?php
if($this->session->has_userdata('tasks_kanban_view') && $this->session->userdata('tasks_kanban_view') == 'true') { 
      $this->load->view("admin/tasks/tasks_kanban.php");
   } else { 
      $this->load->view("admin/tasks/tasks_list.php");
}?>
<!-- END: Content-->

<?php
if($this->session->has_userdata('tasks_kanban_view') && $this->session->userdata('tasks_kanban_view') == 'true') { 
      init_tail('task_kanban');
   } else { 
      init_tail('task_list');
}?>
</body>
</html>
