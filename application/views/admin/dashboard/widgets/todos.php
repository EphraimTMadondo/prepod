<?php defined('BASEPATH') or exit('No direct script access allowed'); ?>
<!-- Task App Widget Starts -->
<div id="widget-<?php echo basename(__FILE__,".php"); ?>" data-name="<?php echo _l('home_my_todo_items'); ?>">
   <div class="row">
      <div class="col-12">
         <div class="card widget-todo">
         <div class="card-header border-bottom d-flex justify-content-between align-items-center">
            <h4 class="card-title d-flex">
               <i class='bx bx-check font-medium-5 pl-25 pr-75'></i><?php echo _l('home_my_todo_items'); ?>
            </h4>
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
                        <i class='bx bx-grid-vertical mr-25 font-medium-4 cursor-move'></i>
                        <div class="checkbox checkbox-shadow">
                        <input type="checkbox" class="checkbox__input" id="checkbox2">
                        <label for="checkbox2"></label>
                        </div>
                        <span class="widget-todo-title ml-50">Check all the changes that you did,
                        before you commit</span>
                     </div>
                     <div class="widget-todo-item-action d-flex align-items-center">
                        <div class="badge badge-pill badge-light-danger mr-1">backend</div>
                        <div class="avatar m-0 mr-50">
                        <img src="../../../app-assets/images/profile/user-uploads/social-2.jpg" alt="img placeholder"
                           height="32" width="32">
                        </div>
                        <i class="bx bx-dots-vertical-rounded font-medium-3 cursor-pointer"></i>
                     </div>
                  </div>
               </li>
            </ul>
         </div>
      </div>
   </div>
</div>
<!-- Task App Widget Ends -->