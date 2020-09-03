<?php defined('BASEPATH') or exit('No direct script access allowed'); 
 $companyusername = $_SESSION['current_company'];
?>
<!-- Earnings Widget Swiper Starts -->
<div class="widget" id="widget-earnings">
   <div class="card">
      <div class="card-content">
         <div class="card-body py-1">
               <!-- earnings swiper starts -->
               <div class="widget-earnings-swiper swiper-container p-1">
                  <div class="swiper-wrapper">
                     <div class="swiper-slide rounded swiper-shadow py-75 px-2 d-flex align-items-center swiper-slide-active" id="home_tab_tasks">
                           <i class="bx bx-pyramid mr-50 font-large-1"></i>
                           <div class="swiper-text">
                              <?php echo _l('home_my_tasks'); ?>
                              <p class="mb-0 font-small-2 font-weight-normal"></p>
                           </div>
                     </div>
                     <div class="swiper-slide rounded swiper-shadow py-75 px-2 d-flex align-items-center" onclick="init_table_staff_projects(true);" id="home_my_projects">
                           <i class="bx bx-pyramid mr-50 font-large-1"></i>
                           <div class="swiper-text">
                              <?php echo _l('home_my_projects'); ?>
                              <p class="mb-0 font-small-2 font-weight-normal"></p>
                           </div>
                     </div>
                     <div class="swiper-slide rounded swiper-shadow py-75 px-2 d-flex align-items-center"  onclick="initDataTable('.table-my-reminders', admin_url + 'misc/my_reminders', undefined, undefined,undefined,[2,'asc']);" id="home_my_reminders">
                           <i class="bx bx-pyramid mr-50 font-large-1"></i>
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
                              <i class="bx bx-pyramid mr-50 font-large-1"></i>
                              <div class="swiper-text">
                                 <?php echo _l('home_tickets'); ?>
                                 <p class="mb-0 font-small-2 font-weight-normal"></p>
                              </div>
                        </div>
                     <?php } ?>
                     <?php if(is_staff_member()){ ?>
                        <div class="swiper-slide rounded swiper-shadow py-75 px-2 d-flex align-items-center"  onclick="init_table_announcements(true);" id="home_announcements">
                              <i class="bx bx-pyramid mr-50 font-large-1"></i>
                              <div class="swiper-text">
                                 <?php echo _l('home_announcements'); ?>
                                 <p class="mb-0 font-small-2 font-weight-normal"><?php if($total_undismissed_announcements != 0){ echo $total_undismissed_announcements;} ?></p>
                              </div>
                        </div>
                     <?php } ?>
                     <?php if(is_admin()){ ?>
                        <div class="swiper-slide rounded swiper-shadow py-75 px-2 d-flex align-items-center" id="home_tab_activity">
                              <i class="bx bx-pyramid mr-50 font-large-1"></i>
                              <div class="swiper-text">
                                 <?php echo _l('home_latest_activity'); ?>
                                 <p class="mb-0 font-small-2 font-weight-normal"></p>
                              </div>
                        </div>
                     <?php } ?>
                  </div>
               </div>
               <!-- earnings swiper ends -->
         </div>
      </div>
      
   </div>
</div>
<!-- Earnings Widget Swiper Ends -->
