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

<!-- Task App Widget Starts -->
<div class="col-lg-7">
   <div class="row">
      <div class="col-12">
         <div class="card widget-todo">
               <div class="card-header border-bottom d-flex justify-content-between align-items-center">
                  <h4 class="card-title d-flex">
                     <i class='bx bx-check font-medium-5 pl-25 pr-75'></i>Tasks
                  </h4>
                  <ul class="list-inline d-flex mb-0">
                     <li class="d-flex align-items-center">
                           <i class='bx bx-check-circle font-medium-3 mr-50'></i>
                           <div class="dropdown">
                              <div class="dropdown-toggle mr-1" role="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">All Task
                              </div>
                              <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                                 <a class="dropdown-item" href="#">Option 1</a>
                                 <a class="dropdown-item" href="#">Option 2</a>
                                 <a class="dropdown-item" href="#">Option 3</a>
                              </div>
                           </div>
                     </li>
                     <li class="d-flex align-items-center">
                           <i class='bx bx-sort mr-50 font-medium-3'></i>
                           <div class="dropdown">
                              <div class="dropdown-toggle" role="button" id="dropdownMenuButton2" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">All Task
                              </div>
                              <div class="dropdown-menu" aria-labelledby="dropdownMenuButton2">
                                 <a class="dropdown-item" href="#">Option 1</a>
                                 <a class="dropdown-item" href="#">Option 2</a>
                                 <a class="dropdown-item" href="#">Option 3</a>
                              </div>
                           </div>
                     </li>
                  </ul>
               </div>
               <div class="card-body px-0 py-1">
                  <ul class="widget-todo-list-wrapper" id="widget-todo-list">
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
                                       <img src="../../../app-assets/images/profile/user-uploads/social-2.jpg" alt="img placeholder" height="32" width="32">
                                 </div>
                                 <i class="bx bx-dots-vertical-rounded font-medium-3 cursor-pointer"></i>
                              </div>
                           </div>
                     </li>
                     <li class="widget-todo-item completed">
                           <div class="widget-todo-title-wrapper d-flex justify-content-between align-items-center mb-50">
                              <div class="widget-todo-title-area d-flex align-items-center">
                                 <i class='bx bx-grid-vertical mr-25 font-medium-4 cursor-move'></i>
                                 <div class="checkbox checkbox-shadow">
                                       <input type="checkbox" class="checkbox__input" id="checkbox3" checked>
                                       <label for="checkbox3"></label>
                                 </div>
                                 <span class="widget-todo-title ml-50">Dribble, Behance, UpLabs & Pinterest
                                       Post</span>
                              </div>
                              <div class="widget-todo-item-action d-flex align-items-center">
                                 <div class="badge badge-pill badge-light-primary mr-1">UI/UX</div>
                                 <div class="avatar bg-rgba-primary m-0 mr-50">
                                       <div class="avatar-content">
                                          <span class="font-size-base text-primary">JP</span>
                                       </div>
                                 </div>
                                 <i class="bx bx-dots-vertical-rounded font-medium-3 cursor-pointer"></i>
                              </div>
                           </div>
                     </li>
                     <li class="widget-todo-item">
                           <div class="widget-todo-title-wrapper d-flex justify-content-between align-items-center mb-50">
                              <div class="widget-todo-title-area d-flex align-items-center">
                                 <i class='bx bx-grid-vertical mr-25 font-medium-4 cursor-move'></i>
                                 <div class="checkbox checkbox-shadow">
                                       <input type="checkbox" class="checkbox__input" id="checkbox4">
                                       <label for="checkbox4"></label>
                                 </div>
                                 <span class="widget-todo-title ml-50">Fresh Design Web & Responsive
                                       Miracle</span>
                              </div>
                              <div class="widget-todo-item-action d-flex align-items-center">
                                 <div class="badge badge-pill badge-light-info mr-1">Design</div>
                                 <div class="avatar m-0 mr-50">
                                       <img src="../../../app-assets/images/profile/user-uploads/user-05.jpg" alt="img placeholder" height="32" width="32">
                                 </div>
                                 <i class="bx bx-dots-vertical-rounded font-medium-3 cursor-pointer"></i>
                              </div>
                           </div>
                     </li>
                     <li class="widget-todo-item">
                           <div class="widget-todo-title-wrapper d-flex justify-content-between align-items-center mb-50">
                              <div class="widget-todo-title-area d-flex align-items-center">
                                 <i class='bx bx-grid-vertical mr-25 font-medium-4 cursor-move'></i>
                                 <div class="checkbox checkbox-shadow">
                                       <input type="checkbox" class="checkbox__input" id="checkbox5">
                                       <label for="checkbox5"></label>
                                 </div>
                                 <span class="widget-todo-title ml-50">Add Calendar page and source and
                                       credit page in
                                       documentation</span>
                              </div>
                              <div class="widget-todo-item-action d-flex align-items-center">
                                 <div class="badge badge-pill badge-light-warning mr-1">Javascript</div>
                                 <div class="avatar bg-rgba-primary m-0 mr-50">
                                       <div class="avatar-content">
                                          <span class="font-size-base text-primary">AK</span>
                                       </div>
                                 </div>
                                 <i class="bx bx-dots-vertical-rounded font-medium-3 cursor-pointer"></i>
                              </div>
                           </div>
                     </li>
                     <li class="widget-todo-item">
                           <div class="widget-todo-title-wrapper d-flex justify-content-between align-items-center mb-50">
                              <div class="widget-todo-title-area d-flex align-items-center">
                                 <i class='bx bx-grid-vertical mr-25 font-medium-4 cursor-move'></i>
                                 <div class="checkbox checkbox-shadow">
                                       <input type="checkbox" class="checkbox__input" id="checkbox6">
                                       <label for="checkbox6"></label>
                                 </div>
                                 <span class="widget-todo-title ml-50">Add Angular Starter-kit</span>
                              </div>
                              <div class="widget-todo-item-action d-flex align-items-center">
                                 <div class="badge badge-pill badge-light-primary mr-1">UI/UX</div>
                                 <div class="avatar m-0 mr-50">
                                       <img src="../../../app-assets/images/profile/user-uploads/user-05.jpg" alt="img placeholder" height="32" width="32">
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
   </div>
   <!-- Task App Widget Ends -->