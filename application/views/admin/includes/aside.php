<?php defined('BASEPATH') or exit('No direct script access allowed');
   $totalQuickActionsRemoved = 0;
   $quickActions = $this->app->get_quick_actions_links();
   foreach($quickActions as $key => $item){
    if(isset($item['permission'])){
     if(!has_permission($item['permission'],'','create')){
       $totalQuickActionsRemoved++;
     }
   }
   }
   ?>
<aside id="menu" class="sidebar">
   <ul class="nav metis-menu" id="side-menu">
      <li class="dashboard_user<?php if($totalQuickActionsRemoved == count($quickActions)){echo ' dashboard-user-no-qa';}?>">
         <?php echo _l('welcome_top',$current_user->firstname); ?> <i class="fa fa-power-off top-left-logout pull-right" data-toggle="tooltip" data-title="<?php echo _l('nav_logout'); ?>" data-placement="right" onclick="logout(); return false;"></i>
      </li>
      <?php if($totalQuickActionsRemoved != count($quickActions)){ ?>
      <li class="quick-links">
         <div class="dropdown dropdown-quick-links">
            <a href="#" class="dropdown-toggle" id="dropdownQuickLinks" data-toggle="dropdown" aria-haspopup="true" aria-expanded="true">
            <i class="fa fa-gavel" aria-hidden="true"></i>
            </a>
            <ul class="dropdown-menu" aria-labelledby="dropdownQuickLinks">
               <?php
                  foreach($quickActions as $key => $item){
                   $url = '';
                   if(isset($item['permission'])){
                     if(!has_permission($item['permission'],'','create')){
                      continue;
                    }
                  }
                  if(isset($item['custom_url'])){
                    $url = $item['url'];
                  } else {
                    $url = admin_url(''.$item['url']);
                  }
                  $href_attributes = '';
                  if(isset($item['href_attributes'])){
                    foreach ($item['href_attributes'] as $key => $val) {
                      $href_attributes .= $key . '=' . '"' . $val . '"';
                    }
                  }
                  ?>
               <li>
                  <a href="<?php echo $url; ?>" <?php echo $href_attributes; ?>>
                  <i class="fa fa-plus-square-o"></i>
                  <?php echo $item['name']; ?>
                  </a>
               </li>
               <?php } ?>
            </ul>
         </div>
      </li>
      <?php } ?>
      <?php
         hooks()->do_action('before_render_aside_menu');
         ?>

        <li class="menu-item-dashboard">
            <a href="https://worksuite.app/os/admin/" aria-expanded="false">
                <i class="fa fa-home menu-icon"></i>
                <span class="menu-text">Dashboard</span>
            </a>
        </li>
        
        <li class="menu-item-dashboard">
            <a href="#" aria-expanded="false">
                 <i class="fa fa-user-o menu-icon"></i>
                 <span class="menu-text">CRM</span>
                <span class="fa arrow"></span>
            </a>
            <ul class="nav nav-second-level collapse" aria-expanded="false">
                <li class="menu-item-customers">
                    <a href="https://worksuite.app/os/admin/clients" aria-expanded="false">
                        <i class="fa fa-user-o menu-icon"></i>
                        <span class="menu-text">Customers             </span>
                    </a>
               </li>
               <li class="menu-item-sales"
         >
         <a href="#"
          aria-expanded="false"
          >
             <i class="fa fa-balance-scale menu-icon"></i>
             <span class="menu-text">
             Sales             </span>
                          <span class="fa arrow"></span>
                      </a>
                  <ul class="nav nav-second-level collapse" aria-expanded="false">
                        <li class="sub-menu-item-proposals"
              >
              <a href="https://worksuite.app/os/admin/proposals"
               >
                              <span class="sub-menu-text">
                  Proposals               </span>
               </a>
            </li>
                        <li class="sub-menu-item-estimates"
              >
              <a href="https://worksuite.app/os/admin/estimates"
               >
                              <span class="sub-menu-text">
                  Estimates               </span>
               </a>
            </li>
                        <li class="sub-menu-item-invoices"
              >
              <a href="https://worksuite.app/os/admin/invoices"
               >
                              <span class="sub-menu-text">
                  Invoices               </span>
               </a>
            </li>
                        <li class="sub-menu-item-payments"
              >
              <a href="https://worksuite.app/os/admin/payments"
               >
                              <span class="sub-menu-text">
                  Payments               </span>
               </a>
            </li>
                        <li class="sub-menu-item-credit_notes"
              >
              <a href="https://worksuite.app/os/admin/credit_notes"
               >
                              <span class="sub-menu-text">
                  Credit Notes               </span>
               </a>
            </li>
                        <li class="sub-menu-item-items"
              >
              <a href="https://worksuite.app/os/admin/invoice_items"
               >
                              <span class="sub-menu-text">
                  Items               </span>
               </a>
            </li>
                     </ul>
               </li>
               
               
               <li class="menu-item-leads">
                     <a href="#" aria-expanded="false">
                         <i class=" menu-icon"></i>
                         <span class="menu-text">
                             Leads             </span>
                                          <span class="fa arrow"></span>
                                  </a>
                                  <ul class="nav nav-second-level collapse" aria-expanded="false">
                                               <li class="sub-menu-item-leads-sources"><a href="https://worksuite.app/os/admin/leads/sources">
                                                          <span class="sub-menu-text">
                                      Sources                      </span>
                              </a>
                          </li>
                                         <li class="sub-menu-item-leads-statuses"><a href="https://worksuite.app/os/admin/leads/statuses">
                                                          <span class="sub-menu-text">
                                      Statuses                      </span>
                              </a>
                          </li>
                                         <li class="sub-menu-item-web-to-lead"><a href="https://worksuite.app/os/admin/leads/forms">
                                                          <span class="sub-menu-text">
                                      Web to Lead                      </span>
                              </a>
                          </li>
                            </ul>
              </li>
            </ul>
        </li>
        
        <li class="menu-item-dashboard">
            <a href="#" aria-expanded="false">
                <i class="fa fa-user-circle menu-icon"></i>
                <span class="menu-text">HRM</span>
                <span class="fa arrow"></span>
            </a>
            <ul class="nav nav-second-level collapse" aria-expanded="false">
                        <li class="sub-menu-item-hrm_dashboard">
              <a href="https://worksuite.app/os/admin/hrm"><i class="fa fa-home menu-icon"></i><span class="sub-menu-text">Dashboard</span></a>
            </li>
            <li class="sub-menu-item-hrm_staff">
              <a href="https://worksuite.app/os/admin/hrm/staff_infor">
                              <i class="fa fa-address-book menu-icon"></i>
                              <span class="sub-menu-text">
                  Staff               </span>
               </a>
            </li>
                        <li class="sub-menu-item-hrm_staff_contract"
              >
              <a href="https://worksuite.app/os/admin/hrm/contracts"
               >
                              <i class="fa fa-file menu-icon"></i>
                              <span class="sub-menu-text">
                  Contract               </span>
               </a>
            </li>
                        <li class="sub-menu-item-hrm_insurrance"
              >
              <a href="https://worksuite.app/os/admin/hrm/insurances"
               >
                              <i class="fa fa-medkit menu-icon"></i>
                              <span class="sub-menu-text">
                  Insurance               </span>
               </a>
            </li>
                        <li class="sub-menu-item-hrm_timekeeping"
              >
              <a href="https://worksuite.app/os/admin/hrm/timekeeping"
               >
                              <i class="fa fa fa-pencil menu-icon"></i>
                              <span class="sub-menu-text">
                  Shifts               </span>
               </a>
            </li>
                        <li class="sub-menu-item-hrm_payroll"
              >
              <a href="https://worksuite.app/os/admin/hrm/payroll"
               >
                              <i class="fa fa-dollar menu-icon"></i>
                              <span class="sub-menu-text">
                  Salary               </span>
               </a>
            </li>
                        <li class="sub-menu-item-hrm_setting"
              >
              <a href="https://worksuite.app/os/admin/hrm/setting"
               >
                              <i class="fa fa-cog menu-icon"></i>
                              <span class="sub-menu-text">
                  Setting               </span>
               </a>
            </li>
                     </ul>
        </li>
        
        <li class="menu-item-dashboard">
            <a href="#" aria-expanded="false">
                 <i class="fa fa-file-text-o menu-icon"></i>
                 <span class="menu-text">ACCOUNTING</span>
                <span class="fa arrow"></span>
            </a>
            <ul class="nav nav-second-level collapse" aria-expanded="false">
                <li class="menu-item-expenses"
                     >
                     <a href="https://worksuite.app/os/admin/expenses"
                      aria-expanded="false"
                      >
                         <i class="fa fa-file-text-o menu-icon"></i>
                         <span class="menu-text">
                         Expenses             </span>
                                  </a>
               </li>
            </ul>
        </li>
        
        <li class="menu-item-dashboard">
            <a href="#" aria-expanded="false">
                 <i class="fa fa-bars menu-icon"></i>
                 <span class="menu-text">PROJECTS</span>
                <span class="fa arrow"></span>
            </a>
            <ul class="nav nav-second-level collapse" aria-expanded="false">
                <li class="menu-item-projects"
                     >
                     <a href="https://worksuite.app/os/admin/projects"
                      aria-expanded="false"
                      >
                         <i class="fa fa-bars menu-icon"></i>
                         <span class="menu-text">
                         Projects             </span>
                                  </a>
               </li>
                <li class="menu-item-contracts"
                     >
                     <a href="https://worksuite.app/os/admin/contracts"
                      aria-expanded="false"
                      >
                         <i class="fa fa-file menu-icon"></i>
                         <span class="menu-text">
                         Contracts             </span>
                                  </a>
               </li>
               <li class="menu-item-assets"
         >
         <a href="#"
          aria-expanded="false"
          >
             <i class="fa fa-bank menu-icon"></i>
             <span class="menu-text">
             Asset Management             </span>
                          <span class="fa arrow"></span>
                      </a>
                  <ul class="nav nav-second-level collapse" aria-expanded="false">
                        <li class="sub-menu-item-assets_menu"
              >
              <a href="https://worksuite.app/os/admin/assets/manage_assets"
               >
                              <i class="fa fa-bank menu-icon"></i>
                              <span class="sub-menu-text">
                  Asset               </span>
               </a>
            </li>
                        <li class="sub-menu-item-allocations"
              >
              <a href="https://worksuite.app/os/admin/assets/allocation"
               >
                              <i class="fa fa-pencil-square-o menu-icon"></i>
                              <span class="sub-menu-text">
                  Allocation               </span>
               </a>
            </li>
                        <li class="sub-menu-item-evictions"
              >
              <a href="https://worksuite.app/os/admin/assets/eviction"
               >
                              <i class="fa fa-pencil-square menu-icon"></i>
                              <span class="sub-menu-text">
                  Revoke               </span>
               </a>
            </li>
                        <li class="sub-menu-item-depreciations"
              >
              <a href="https://worksuite.app/os/admin/assets/depreciation"
               >
                              <i class="fa fa-legal menu-icon"></i>
                              <span class="sub-menu-text">
                  Depreciation               </span>
               </a>
            </li>
                        <li class="sub-menu-item-settings"
              >
              <a href="https://worksuite.app/os/admin/assets/setting"
               >
                              <i class="fa fa-cogs menu-icon"></i>
                              <span class="sub-menu-text">
                  Setting               </span>
               </a>
            </li>
                     </ul>
               </li>
            </ul>
        </li>
        
        <li class="menu-item-dashboard">
            <a href="#" aria-expanded="false">
                 <i class="fa fa-tasks menu-icon"></i>
                 <span class="menu-text">TASKS</span>
                <span class="fa arrow"></span>
            </a>
            <ul class="nav nav-second-level collapse" aria-expanded="false">
                <li class="menu-item-tasks"
                     >
                     <a href="https://worksuite.app/os/admin/tasks"
                      aria-expanded="false"
                      >
                         <i class="fa fa-tasks menu-icon"></i>
                         <span class="menu-text">
                         Tasks             </span>
                                  </a>
               </li>
            </ul>
        </li>
        
        <li class="menu-item-dashboard">
            <a href="#" aria-expanded="false">
                 <i class="fa fa-calendar menu-icon"></i>
                 <span class="menu-text">CALENDER</span>
                <span class="fa arrow"></span>
            </a>
            <ul class="nav nav-second-level collapse" aria-expanded="false">
                <li class="sub-menu-item-hrm_dashboard">
                    <a href="https://worksuite.app/os/admin/hrm">
                        <i class="fa fa-home menu-icon"></i>
                        <span class="sub-menu-text">Dashboard</span>
                    </a>
                </li>
            </ul>
        </li>
        
        <li class="menu-item-dashboard">
            <a href="#" aria-expanded="false">
                 <i class="fa fa-envelope menu-icon"></i>
                 <span class="menu-text">EMAIL</span>
                <span class="fa arrow"></span>
            </a>
            <ul class="nav nav-second-level collapse" aria-expanded="false">
                <li class="menu-item-mailbox"
         >
         <a href="https://worksuite.app/os/admin/mailbox"
          aria-expanded="false"
          >
             <i class="fa fa-envelope-square menu-icon"></i>
             <span class="menu-text">
             Mailbox             </span>
                      </a>
               </li>
            </ul>
        </li>
        
        <li class="menu-item-dashboard">
            <a href="#" aria-expanded="false">
                 <i class="fa fa-cogs menu-icon"></i>
                 <span class="menu-text">UTILITIES</span>
                <span class="fa arrow"></span>
            </a>
            <ul class="nav nav-second-level collapse" aria-expanded="false">


<li class="menu-item-utilities"
         >
         <a href="#"
          aria-expanded="false"
          >
             <i class="fa fa-cogs menu-icon"></i>
             <span class="menu-text">
             Utilities             </span>
                          <span class="fa arrow"></span>
                      </a>
                  <ul class="nav nav-second-level collapse" aria-expanded="false">
                        <li class="sub-menu-item-media"
              >
              <a href="https://worksuite.app/os/admin/utilities/media"
               >
                              <span class="sub-menu-text">
                  Media               </span>
               </a>
            </li>
                        <li class="sub-menu-item-bulk-pdf-exporter"
              >
              <a href="https://worksuite.app/os/admin/utilities/bulk_pdf_exporter"
               >
                              <span class="sub-menu-text">
                  Bulk PDF Export               </span>
               </a>
            </li>
                        <li class="sub-menu-item-calendar"
              >
              <a href="https://worksuite.app/os/admin/utilities/calendar"
               >
                              <span class="sub-menu-text">
                  Calendar               </span>
               </a>
            </li>
                        <li class="sub-menu-item-announcements"
              >
              <a href="https://worksuite.app/os/admin/announcements"
               >
                              <span class="sub-menu-text">
                  Announcements               </span>
               </a>
            </li>
                        <li class="sub-menu-item-goals-tracking"
              >
              <a href="https://worksuite.app/os/admin/goals"
               >
                              <span class="sub-menu-text">
                  Goals               </span>
               </a>
            </li>
                        <li class="sub-menu-item-activity-log"
              >
              <a href="https://worksuite.app/os/admin/utilities/activity_log"
               >
                              <span class="sub-menu-text">
                  Activity Log               </span>
               </a>
            </li>
                        <li class="sub-menu-item-surveys"
              >
              <a href="https://worksuite.app/os/admin/surveys"
               >
                              <span class="sub-menu-text">
                  Surveys               </span>
               </a>
            </li>
                        <li class="sub-menu-item-ticket-pipe-log"
              >
              <a href="https://worksuite.app/os/admin/utilities/pipe_log"
               >
                              <span class="sub-menu-text">
                  Ticket Pipe Log               </span>
               </a>
            </li>
                     </ul>
               </li>
               
               
            <li class="menu-item-support">
                     <a href="#" aria-expanded="false">
                         <i class=" menu-icon"></i>
                         <span class="menu-text">
                             Support             </span>
                                          <span class="fa arrow"></span>
                                  </a>
                                  <ul class="nav nav-second-level collapse" aria-expanded="false">
                                               <li class="sub-menu-item-departments"><a href="https://worksuite.app/os/admin/departments">
                                                          <span class="sub-menu-text">
                                      Departments                      </span>
                              </a>
                          </li>
                                         <li class="sub-menu-item-tickets-predefined-replies"><a href="https://worksuite.app/os/admin/tickets/predefined_replies">
                                                          <span class="sub-menu-text">
                                      Predefined Replies                      </span>
                              </a>
                          </li>
                                         <li class="sub-menu-item-tickets-services"><a href="https://worksuite.app/os/admin/tickets/services">
                                                          <span class="sub-menu-text">
                                      Services                      </span>
                              </a>
                          </li>
                                         <li class="sub-menu-item-tickets-spam-filters"><a href="https://worksuite.app/os/admin/spam_filters/view/tickets">
                                                          <span class="sub-menu-text">
                                      Spam Filters                      </span>
                              </a>
                          </li>
                            </ul>
              </li>
              
            
            <li class="menu-item-knowledge-base"
         >
         <a href="https://worksuite.app/os/admin/knowledge_base"
          aria-expanded="false"
          >
             <i class="fa fa-folder-open-o menu-icon"></i>
             <span class="menu-text">
             Knowledge Base             </span>
                      </a>
               </li>
               
               
               <li class="menu-item-subscriptions"
         >
               <a href="https://worksuite.app/os/admin/subscriptions"
          aria-expanded="false"
          >
             <i class="fa fa-repeat menu-icon"></i>
             <span class="menu-text">
             Subscriptions             </span>
                      </a>
               </li>
                  <li class="menu-item-expenses"
         >
         <a href="https://worksuite.app/os/admin/expenses"
          aria-expanded="false"
          >
             <i class="fa fa-file-text-o menu-icon"></i>
             <span class="menu-text">
             Expenses             </span>
                      </a>
               </li>
                  <li class="menu-item-contracts"
         >
         <a href="https://worksuite.app/os/admin/contracts"
          aria-expanded="false"
          >
             <i class="fa fa-file menu-icon"></i>
             <span class="menu-text">
             Contracts             </span>
                      </a>
               </li>
                  <li class="menu-item-projects"
         >
         <a href="https://worksuite.app/os/admin/projects"
          aria-expanded="false"
          >
             <i class="fa fa-bars menu-icon"></i>
             <span class="menu-text">
             Projects             </span>
                      </a>
               </li>
                  <li class="menu-item-tasks"
         >
         <a href="https://worksuite.app/os/admin/tasks"
          aria-expanded="false"
          >
             <i class="fa fa-tasks menu-icon"></i>
             <span class="menu-text">
             Tasks             </span>
                      </a>
               </li>
                  <li class="menu-item-support"
         >
         <a href="https://worksuite.app/os/admin/tickets"
          aria-expanded="false"
          >
             <i class="fa fa-ticket menu-icon"></i>
             <span class="menu-text">
             Support             </span>
                      </a>
               </li>
            </ul>
            
            
            <li class="menu-item-reports"
         >
         <a href="#"
          aria-expanded="false"
          >
             <i class="fa fa-area-chart menu-icon"></i>
             <span class="menu-text">
             Reports             </span>
                          <span class="fa arrow"></span>
                      </a>
                  <ul class="nav nav-second-level collapse" aria-expanded="false">
                        <li class="sub-menu-item-sales-reports"
              >
              <a href="https://worksuite.app/os/admin/reports/sales"
               >
                              <span class="sub-menu-text">
                  Sales               </span>
               </a>
            </li>
                        <li class="sub-menu-item-expenses-reports"
              >
              <a href="https://worksuite.app/os/admin/reports/expenses"
               >
                              <span class="sub-menu-text">
                  Expenses               </span>
               </a>
            </li>
                        <li class="sub-menu-item-expenses-vs-income-reports"
              >
              <a href="https://worksuite.app/os/admin/reports/expenses_vs_income"
               >
                              <span class="sub-menu-text">
                  Expenses vs Income               </span>
               </a>
            </li>
                        <li class="sub-menu-item-leads-reports"
              >
              <a href="https://worksuite.app/os/admin/reports/leads"
               >
                              <span class="sub-menu-text">
                  Leads               </span>
               </a>
            </li>
                        <li class="sub-menu-item-timesheets-reports"
              >
              <a href="https://worksuite.app/os/admin/staff/timesheets?view=all"
               >
                              <span class="sub-menu-text">
                  Timesheets overview               </span>
               </a>
            </li>
                        <li class="sub-menu-item-knowledge-base-reports"
              >
              <a href="https://worksuite.app/os/admin/reports/knowledge_base_articles"
               >
                              <span class="sub-menu-text">
                  KB Articles               </span>
               </a>
            </li>
                     </ul>
               </li>
               
               
            
        </li>
               
      <?php if(false) foreach($sidebar_menu as $key => $item){
         if(isset($item['collapse']) && count($item['children']) === 0) {
           continue;
         }
         ?>
      <li class="menu-item-<?php echo $item['slug']; ?>"
         <?php echo _attributes_to_string(isset($item['li_attributes']) ? $item['li_attributes'] : []); ?>>
         <a href="<?php echo count($item['children']) > 0 ? '#' : $item['href']; ?>"
          aria-expanded="false"
          <?php echo _attributes_to_string(isset($item['href_attributes']) ? $item['href_attributes'] : []); ?>>
             <i class="<?php echo $item['icon']; ?> menu-icon"></i>
             <span class="menu-text">
             <?php echo _l($item['name'],'', false); ?>
             </span>
             <?php if(count($item['children']) > 0){ ?>
             <span class="fa arrow"></span>
             <?php } ?>
         </a>
         <?php if(count($item['children']) > 0){ ?>
         <ul class="nav nav-second-level collapse" aria-expanded="false">
            <?php foreach($item['children'] as $submenu){
               ?>
            <li class="sub-menu-item-<?php echo $submenu['slug']; ?>"
              <?php echo _attributes_to_string(isset($submenu['li_attributes']) ? $submenu['li_attributes'] : []); ?>>
              <a href="<?php echo $submenu['href']; ?>"
               <?php echo _attributes_to_string(isset($submenu['href_attributes']) ? $submenu['href_attributes'] : []); ?>>
               <?php if(!empty($submenu['icon'])){ ?>
               <i class="<?php echo $submenu['icon']; ?> menu-icon"></i>
               <?php } ?>
               <span class="sub-menu-text">
                  <?php echo _l($submenu['name'],'',false); ?>
               </span>
               </a>
            </li>
            <?php } ?>
         </ul>
         <?php } ?>
      </li>
      <?php hooks()->do_action('after_render_single_aside_menu', $item); ?>
      <?php } ?>
      <?php if($this->app->show_setup_menu() == true && (is_staff_member() || is_admin())){ ?>
      <li<?php if(get_option('show_setup_menu_item_only_on_hover') == 1) { echo ' style="display:none;"'; } ?> id="setup-menu-item">
         <a href="#" class="open-customizer"><i class="fa fa-cog menu-icon"></i>
         <span class="menu-text">
            <?php echo _l('setting_bar_heading'); ?>
            <?php
                if ($modulesNeedsUpgrade = $this->app_modules->number_of_modules_that_require_database_upgrade()) {
                  echo '<span class="badge menu-badge bg-warning">' . $modulesNeedsUpgrade . '</span>';
                }
            ?>
         </span>
         </a>
         <?php } ?>
      </li>
      <?php hooks()->do_action('after_render_aside_menu'); ?>
      <?php $this->load->view('admin/projects/pinned'); ?>
   </ul>
</aside>
