<?php defined('BASEPATH') or exit('No direct script access allowed'); ?>
<!-- Task App Widget Starts -->
<div id="widget-<?php echo basename(__FILE__,".php"); ?>" data-name="<?php echo _l('home_my_todo_items'); ?>">
   <div class="row">
      <div class="col-12">
         <div class="card widget-todo">
            <div class="card-header border-bottom d-flex justify-content-between align-items-center">
               <h4 class="card-title d-flex">Tasks</h4>
               <div class="heading-elements">
                  <a href="<?php echo admin_url('todo'); ?>" type="button" class="btn btn-sm btn-light-primary"><?php echo _l('home_widget_view_all'); ?></a>
                  <a href="#__todo" data-toggle="modal" type="button" class="btn btn-sm btn-light-primary"><?php echo _l('new_todo'); ?></a>
               </div>
            </div>
            <div class="card-body px-0 py-1">
               <?php $total_todos = count($todos); ?>
               <ul class="widget-todo-list-wrapper" id="widget-todo-list">
                  <?php foreach($todos as $todo) { ?>
                  <li class="widget-todo-item">
                     <div class="widget-todo-title-wrapper d-flex justify-content-between align-items-center mb-50">
                        <div class="widget-todo-title-area d-flex align-items-center">
                           <i class='bx bx-grid-vertical mr-25 font-medium-3 cursor-move'></i>
                           <span class="checkbox checkbox-shadow">
                              <input type="checkbox" name="todo_id" id="<?php echo $todo['todoid']; ?>" class="checkbox__input" value="<?php echo $todo['todoid']; ?>">
                              <label for="<?php echo $todo['todoid']; ?>"></label>
                           </span>
                           <span class="widget-todo-title ml-50"><?php echo $todo['description']; ?></span>
                        </div>
                        <div class="widget-todo-item-action d-flex align-items-center">
                           <div class="dropdown">
                              <i class="bx bx-dots-vertical-rounded font-medium-3 cursor-pointer" role="button" id="dropdownMenuButton<?php echo $todo['todoid']; ?>" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"></i>
                              <div class="dropdown-menu" aria-labelledby="dropdownMenuButton<?php echo $todo['todoid']; ?>">
                                 <a class="dropdown-item" href="#"  onclick="edit_todo_item(<?php echo $todo['todoid']; ?>); return false;">Edit</a>
                                 <a class="dropdown-item" href="#"  onclick="delete_todo_item(this,<?php echo $todo['todoid']; ?>); return false;">Delete</a>
                              </div>
                           </div>
                        </div>
                     </div>
                  </li>
                  <?php } ?>
               </ul>
            </div>
      </div>
   </div>
   <?php $this->load->view('admin/todos/_todo.php'); ?>
</div>
<!-- Task App Widget Ends -->