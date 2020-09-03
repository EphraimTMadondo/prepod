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
                     <?php echo form_hidden('todo_order',$todo['item_order']); ?>
                     <?php echo form_hidden('finished',0); ?>
                     <div class="widget-todo-title-wrapper d-flex justify-content-between align-items-center mb-50">
                        <div class="widget-todo-title-area d-flex align-items-center">
                           <div class="checkbox checkbox-shadow">
                              <input type="checkbox" name="todo_id" id="<?php echo $todo['todoid']; ?>" class="checkbox__input" value="<?php echo $todo['todoid']; ?>">
                              <label for="<?php echo $todo['todoid']; ?>"></label>
                           </div>
                           <span class="widget-todo-title ml-50"><?php echo $todo['description']; ?></span>
                        </div>
                        <div class="widget-todo-item-action d-flex align-items-center">
                           <i class="bx bx-dots-vertical-rounded font-medium-3 cursor-pointer"></i>
                        </div>
                     </div>
                  </li>
                  <?php } ?>
                  <li class="widget-todo-item">
                     <div class="widget-todo-title-wrapper d-flex justify-content-between align-items-center mb-50">
                        <div class="widget-todo-title-area d-flex align-items-center">
                           <i class='bx bx-grid-vertical mr-25 font-medium-4 cursor-move'></i>
                           <div class="checkbox checkbox-shadow">
                                 <input type="checkbox" class="checkbox__input" id="checkbox1">
                                 <label for="checkbox1"></label>
                           </div>
                           <span class="widget-todo-title ml-50">Add SCSS and JS files if
                                 required</span>
                        </div>
                        <div class="widget-todo-item-action d-flex align-items-center">
                           <div class="badge badge-pill badge-light-success mr-1">frontend</div>
                           <div class="avatar bg-rgba-primary m-0 mr-50">
                                 <div class="avatar-content">
                                    <span class="font-size-base text-primary">RA</span>
                                 </div>
                           </div>
                           <i class="bx bx-dots-vertical-rounded font-medium-3 cursor-pointer"></i>
                        </div>
                     </div>
                  </li>
               </ul>
            </div>
      </div>
   </div>
   <?php $this->load->view('admin/todos/_todo.php'); ?>
</div>
<!-- Task App Widget Ends -->