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

<?php
if($this->session->has_userdata('tasks_kanban_view') && $this->session->userdata('tasks_kanban_view') == 'true') { 
      $this->load->view("admin/tasks/tasks_kanban.php");
   } else { 
      $this->load->view("admin/tasks/tasks_list.php");
}?>

<?php
if($this->session->has_userdata('tasks_kanban_view') && $this->session->userdata('tasks_kanban_view') == 'true') { 
      init_tail('task_kanban');
   } else { 
      init_tail('task_list');
}?>
<script>
$(function() {
   var parameters = [];
    requestGetJSON('tasks/table',parameters).done(function(response){
       console.log(response);
       if(response.aaData){
          response.aaData.map(aRow => {
            $('.todo-task-list-wrapper').append(aRow);
          });
       }
    });
});
</script>
</body>
</html>
