<?php defined('BASEPATH') or exit('No direct script access allowed'); 

 $companyusername = $_SESSION['current_company'];

?>
<!-- Earnings Widget Swiper Starts -->
<div class="widget" id="widget-<?php echo basename(__FILE__,".php"); ?>" data-name="<?php echo _l('user_widget'); ?>" id="widget-earnings">
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
                              <?php echo _l('home_my_reminders'); ?>
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
      <div class="main-wrapper-content">
         <div class="wrapper-content" data-earnings="home_tab_tasks">
               <div class="widget-earnings-scroll table-responsive">
                  <table class="table table-borderless widget-earnings-width mb-0">
                     <tbody>
                           <tr>
                              <td class="pr-75">
                                 <div class="media align-items-center">
                                       <a class="media-left mr-50" href="#">
                                          <img src="../../../app-assets/images/portrait/small/avatar-s-8.jpg" alt="avatar" class="rounded-circle" height="30" width="30">
                                       </a>
                                       <div class="media-body">
                                          <h6 class="media-heading mb-0">Mera Baker</h6>
                                          <span class="font-small-2">Ux Designer</span>
                                       </div>
                                 </div>
                              </td>
                              <td class="px-0 w-25">
                                 <div class="progress progress-bar-primary progress-sm mb-0">
                                       <div class="progress-bar" role="progressbar" aria-valuenow="55" aria-valuemin="80" aria-valuemax="100" style="width:55%;"></div>
                                 </div>
                              </td>
                              <td class="text-center"><span class="badge badge-light-primary">+ $860</span>
                              </td>
                           </tr>
                           <tr>
                              <td class="pr-75">
                                 <div class="media align-items-center">
                                       <a class="media-left mr-50" href="#">
                                          <img src="../../../app-assets/images/portrait/small/avatar-s-10.jpg" alt="avatar" class="rounded-circle" height="30" width="30">
                                       </a>
                                       <div class="media-body">
                                          <h6 class="media-heading mb-0">Jerry Lter</h6>
                                          <span class="font-small-2">Designer</span>
                                       </div>
                                 </div>
                              </td>
                              <td class="px-0 w-25">
                                 <div class="progress progress-bar-info progress-sm mb-0">
                                       <div class="progress-bar" role="progressbar" aria-valuenow="33" aria-valuemin="80" aria-valuemax="100" style="width:33%;"></div>
                                 </div>
                              </td>
                              <td class="text-center"><span class="badge badge-light-warning">- $280</span>
                              </td>
                           </tr>
                           <tr>
                              <td class="pr-75">
                                 <div class="media align-items-center">
                                       <a class="media-left mr-50" href="#">
                                          <img src="../../../app-assets/images/portrait/small/avatar-s-11.jpg" alt="avatar" class="rounded-circle" height="30" width="30">
                                       </a>
                                       <div class="media-body">
                                          <h6 class="media-heading mb-0">Pauly uez</h6>
                                          <span class="font-small-2">Devloper</span>
                                       </div>
                                 </div>
                              </td>
                              <td class="px-0 w-25">
                                 <div class="progress progress-bar-success progress-sm mb-0">
                                       <div class="progress-bar" role="progressbar" aria-valuenow="10" aria-valuemin="80" aria-valuemax="100" style="width:10%;"></div>
                                 </div>
                              </td>
                              <td class="text-center"><span class="badge badge-light-success">+ $853</span>
                              </td>
                           </tr>
                           <tr>
                              <td class="pr-75">
                                 <div class="media align-items-center">
                                       <a class="media-left mr-50" href="#">
                                          <img src="../../../app-assets/images/portrait/small/avatar-s-11.jpg" alt="avatar" class="rounded-circle" height="30" width="30">
                                       </a>
                                       <div class="media-body">
                                          <h6 class="media-heading mb-0">Lary Masey</h6>
                                          <span class="font-small-2">Marketing</span>
                                       </div>
                                 </div>
                              </td>
                              <td class="px-0 w-25">
                                 <div class="progress progress-bar-primary progress-sm mb-0">
                                       <div class="progress-bar" role="progressbar" aria-valuenow="15" aria-valuemin="80" aria-valuemax="100" style="width:15%;"></div>
                                 </div>
                              </td>
                              <td class="text-center"><span class="badge badge-light-primary">+ $125</span>
                              </td>
                           </tr>
                           <tr>
                              <td class="pr-75">
                                 <div class="media align-items-center">
                                       <a class="media-left mr-50" href="#">
                                          <img src="../../../app-assets/images/portrait/small/avatar-s-12.jpg" alt="avatar" class="rounded-circle" height="30" width="30">
                                       </a>
                                       <div class="media-body">
                                          <h6 class="media-heading mb-0">Lula Taylor</h6>
                                          <span class="font-small-2">Degigner</span>
                                       </div>
                                 </div>
                              </td>
                              <td class="px-0 w-25">
                                 <div class="progress progress-bar-danger progress-sm mb-0">
                                       <div class="progress-bar" role="progressbar" aria-valuenow="35" aria-valuemin="80" aria-valuemax="100" style="width:35%;"></div>
                                 </div>
                              </td>
                              <td class="text-center"><span class="badge badge-light-danger">- $310</span>
                              </td>
                           </tr>
                     </tbody>
                  </table>
               </div>
         </div>
      </div>
   </div>
</div>
<!-- Earnings Widget Swiper Ends -->
