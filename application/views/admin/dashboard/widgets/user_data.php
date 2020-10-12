<?php defined('BASEPATH') or exit('No direct script access allowed'); 
 $companyusername = $_SESSION['current_company'];
?>
<!-- User Data Widget Swiper Starts -->
<div class="widget"  id="widget-<?php echo basename(__FILE__,".php"); ?>" data-name="<?php echo _l('user_widget'); ?>">
   <div class="card">
      <div class="card-header border-bottom d-flex justify-content-between align-items-center">
         <h5 class="card-title"><i class="bx bx-box font-medium-5 align-middle"></i> User Data</h5>
         <i class="bx bx-dots-vertical-rounded font-medium-3 cursor-pointer"></i>
      </div>
      <div class="card-content">
         <div class="card-body py-1">
               <!-- user data swiper starts -->
               <div class="widget-earnings-swiper swiper-container p-1">
                  <div class="swiper-wrapper">
                     <div class="swiper-slide rounded swiper-shadow py-75 px-2 d-flex align-items-center swiper-slide-active" id="home_tab_tasks">
                           <i class="bx bx-task mr-50 font-large-1"></i>
                           <div class="swiper-text">
                              <?php echo _l('home_my_tasks'); ?>
                              <p class="mb-0 font-small-2 font-weight-normal"></p>
                           </div>
                     </div>
                     <div class="swiper-slide rounded swiper-shadow py-75 px-2 d-flex align-items-center" onclick="init_table_staff_projects(true);" id="home_my_projects">
                           <i class="bx bx-briefcase mr-50 font-large-1"></i>
                           <div class="swiper-text">
                              <?php echo _l('home_my_projects'); ?>
                              <p class="mb-0 font-small-2 font-weight-normal"></p>
                           </div>
                     </div>
                     <div class="swiper-slide rounded swiper-shadow py-75 px-2 d-flex align-items-center"  onclick="initDataTable('.table-my-reminders', admin_url + 'misc/my_reminders', undefined, undefined,undefined,[2,'asc']);" id="home_my_reminders">
                           <i class="bx bx-alarm mr-50 font-large-1"></i>
                           <div class="swiper-text">
                              <?php echo _l('my_reminders'); ?>
                              <p class="mb-0 font-small-2 font-weight-normal">
                              <?php
                                 $total_reminders = total_rows(db_prefix().'reminders',
                                    array(
                                    'isnotified'=>0,
                                    'staff'=>get_staff_user_id(),
                                    'company_username'=>$companyusername,
                                 )
                                 );
                                 if($total_reminders > 0){
                                    echo $total_reminders;
                                 }
                                 ?>
                              </p>
                           </div>
                     </div>
                     <?php if((get_option('access_tickets_to_none_staff_members') == 1 && !is_staff_member()) || is_staff_member()){ ?>
                        <div class="swiper-slide rounded swiper-shadow py-75 px-2 d-flex align-items-center"  onclick="init_table_tickets(true);" id="home_tab_tickets">
                              <i class="bx bx-support mr-50 font-large-1"></i>
                              <div class="swiper-text">
                                 <?php echo _l('home_tickets'); ?>
                                 <p class="mb-0 font-small-2 font-weight-normal"></p>
                              </div>
                        </div>
                     <?php } ?>
                     <?php if(is_staff_member()){ ?>
                        <div class="swiper-slide rounded swiper-shadow py-75 px-2 d-flex align-items-center"  onclick="init_table_announcements(true);" id="home_announcements">
                              <i class="bx bx-notification mr-50 font-large-1"></i>
                              <div class="swiper-text">
                                 <?php echo _l('home_announcements'); ?>
                                 <p class="mb-0 font-small-2 font-weight-normal"><?php if($total_undismissed_announcements != 0){ echo $total_undismissed_announcements;} ?></p>
                              </div>
                        </div>
                     <?php } ?>
                     <?php if(is_admin()){ ?>
                        <div class="swiper-slide rounded swiper-shadow py-75 px-2 d-flex align-items-center" id="home_tab_activity">
                              <i class="bx bx-time mr-50 font-large-1"></i>
                              <div class="swiper-text">
                                 <?php echo _l('home_latest_activity'); ?>
                                 <p class="mb-0 font-small-2 font-weight-normal"></p>
                              </div>
                        </div>
                     <?php } ?>
                  </div>
               </div>
               <!-- user data swiper ends -->

               <!-- user data content start -->
               <div class="main-wrapper-content">
                  <div class="wrapper-content" data-earnings="home_tab_tasks">
<<<<<<< HEAD
                     <a href="<?php echo admin_url('tasks/list_tasks'); ?>" class="mb-1 inline-block full-width"><?php echo _l('home_widget_view_all'); ?></a>
=======
                     <a href="<?php echo admin_url('tasks/list_tasks'); ?>" class="mbot20 inline-block full-width"><?php echo _l('home_widget_view_all'); ?></a>
>>>>>>> d71d750e00250050260fb71bf92c645d4ca43ed1
                        <div class="clearfix"></div>
                        <div class="_hidden_inputs _filters _tasks_filters">
                           <?php
                              echo form_hidden('my_tasks',true);
                              foreach($task_statuses as $status){
                                 $val = 'true';
                                 if($status['id'] == Tasks_model::STATUS_COMPLETE){
                                 $val = '';
                              }
                              echo form_hidden('task_status_'.$status['id'],$val);
                              }
                              ?>
                        </div>
                        <div class="widget-earnings-scroll table-responsive">
                           <?php $this->load->view('admin/tasks/_table'); ?>
                        </div>
                     </div>              
                  </div>
                  <?php if((get_option('access_tickets_to_none_staff_members') == 1 && !is_staff_member()) || is_staff_member()){ ?>
                  <div class="wrapper-content" data-earnings="home_tab_tickets">
<<<<<<< HEAD
                     <a href="<?php echo admin_url('tickets'); ?>" class="mb-1 inline-block full-width"><?php echo _l('home_widget_view_all'); ?></a>
=======
                     <a href="<?php echo admin_url('tickets'); ?>" class="mbot20 inline-block full-width"><?php echo _l('home_widget_view_all'); ?></a>
>>>>>>> d71d750e00250050260fb71bf92c645d4ca43ed1
                     <div class="clearfix"></div>
                     <div class="_filters _hidden_inputs hidden tickets_filters">
                        <?php
                           // On home only show on hold, open and in progress
                           echo form_hidden('ticket_status_1',true);
                           echo form_hidden('ticket_status_2',true);
                           echo form_hidden('ticket_status_4',true);
                           ?>
                     </div>
                     <?php echo AdminTicketsTableStructure(); ?>
                  </div>
                  <?php } ?>
                  <div class="wrapper-content" data-earnings="home_my_projects">
<<<<<<< HEAD
                     <a href="<?php echo admin_url('projects'); ?>" class="mb-1 inline-block full-width"><?php echo _l('home_widget_view_all'); ?></a>
=======
                     <a href="<?php echo admin_url('projects'); ?>" class="mbot20 inline-block full-width"><?php echo _l('home_widget_view_all'); ?></a>
>>>>>>> d71d750e00250050260fb71bf92c645d4ca43ed1
                     <div class="clearfix"></div>
                     <?php render_datatable(array(
                        _l('project_name'),
                        _l('project_start_date'),
                        _l('project_deadline'),
                        _l('project_status'),
                        ),'staff-projects',[], [
                        'data-last-order-identifier' => 'my-projects',
                        'data-default-order'  => get_table_last_order('my-projects'),
                        ]);
                        ?>              
                  </div>
                  <div class="wrapper-content" data-earnings="home_my_reminders">
<<<<<<< HEAD
                     <a href="<?php echo admin_url('misc/reminders'); ?>" class="mb-1 inline-block full-width">
=======
                     <a href="<?php echo admin_url('misc/reminders'); ?>" class="mbot20 inline-block full-width">
>>>>>>> d71d750e00250050260fb71bf92c645d4ca43ed1
                        <?php echo _l('home_widget_view_all'); ?>
                        </a>
                        <?php render_datatable(array(
                           _l( 'reminder_related'),
                           _l('reminder_description'),
                           _l( 'reminder_date'),
                           ), 'my-reminders'); ?>            
                  </div>
                  <?php if(is_staff_member()){ ?>
                     <div class="wrapper-content" data-earnings="home_announcements">
                        <?php if(is_admin()){ ?>
<<<<<<< HEAD
                        <a href="<?php echo admin_url('announcements'); ?>" class="mb-1 inline-block full-width"><?php echo _l('home_widget_view_all'); ?></a>
=======
                        <a href="<?php echo admin_url('announcements'); ?>" class="mbot20 inline-block full-width"><?php echo _l('home_widget_view_all'); ?></a>
>>>>>>> d71d750e00250050260fb71bf92c645d4ca43ed1
                        <div class="clearfix"></div>
                        <?php } ?>
                        <?php render_datatable(array(_l('announcement_name'),_l('announcement_date_list')),'announcements'); ?>
                     </div>
                  <?php } ?>
                  <?php if(is_admin()){ ?>
                     <div class="wrapper-content" data-earnings="home_tab_activity">
<<<<<<< HEAD
                        <a href="<?php echo admin_url('utilities/activity_log'); ?>" class="mb-1 inline-block full-width"><?php echo _l('home_widget_view_all'); ?></a>
=======
                        <a href="<?php echo admin_url('utilities/activity_log'); ?>" class="mbot20 inline-block full-width"><?php echo _l('home_widget_view_all'); ?></a>
>>>>>>> d71d750e00250050260fb71bf92c645d4ca43ed1
                        <div class="clearfix"></div>
                        <div class="activity-feed">
                           <?php foreach($activity_log as $log){
                                 if($log['company_username'] == $companyusername)
                                 {
                           
                           ?>
                           <div class="feed-item">
                              <div class="date">
                                 <span class="text-has-action" data-toggle="tooltip" data-title="<?php echo _dt($log['date']); ?>">
                                 <?php echo time_ago($log['date']); ?>
                                 </span>
                              </div>
                              <div class="text">
                                 <?php echo $log['staffid']; ?><br />
                                 <?php echo $log['description']; ?>
                              </div>
                           </div>
                           <?php 
                                 } 
                           }?>
                        </div>
                     </div>
                  <?php } ?>
               <!-- user data content ends -->
         </div>
      </div>
   </div>
</div>
<!-- User Data Widget Swiper Ends -->
