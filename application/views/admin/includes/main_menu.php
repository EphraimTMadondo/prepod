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
<style>

        .btn-primary
        {
        
        }
       
</style>


    <!-- BEGIN: Main Menu-->
    <div class="main-menu menu-fixed menu-dark menu-accordion menu-shadow" data-scroll-to-active="true">
        <div class="navbar-header">
            <ul class="nav navbar-nav flex-row">
                <li class="nav-item mr-auto"><?php get_company_logo(get_admin_uri().'/') ?></li>
                <li class="nav-item nav-toggle"><a class="nav-link modern-nav-toggle pr-0" data-toggle="collapse"><i class="bx bx-x d-block d-xl-none font-medium-4 primary"></i><i class="toggle-icon bx bx-disc font-medium-4 d-none d-xl-block primary" data-ticon="bx-disc"></i></a></li>
            </ul>
        </div>
        <div class="shadow-bottom"></div>
        <div class="main-menu-content">
            <ul class="navigation navigation-main" id="main-menu-navigation" data-menu="menu-navigation" data-icon-style="lines">
            <?php
         
         //Showing user companies
         $staffid = get_staff_user_id();
         $this->db->where('staffid', $staffid);
         $companies = $this->db->get(db_prefix() . 'staff_companies')->result_array();
         //print_r($companies);
  
  
  
  ?>
            <li <?php 
            if(sizeof($companies) <= 1)
            {
                    echo "style = 'display: none'";
            }
            ?> class=" nav-item"><a href="#"><i class="menu-livicon" data-icon="unlink"></i><span class="menu-title" data-i18n="Quick Links">My Companies</span></a>
            <?php
            if(!empty($companies))
            {
            
           ?>
          
                <ul class="menu-content">
                <?php
            foreach($companies as $company)
            {
                
            
            
            ?>
             <li>
         

           <a id = "<?php echo $company['company_username'];  ?>" onclick ="change_company(this.id)" aria-expanded="false" ><i class="bx bx-right-arrow-alt"></i><span class="menu-item" data-i18n="Basic"><?php echo $company['company_username'];  ?> </span></a>
               
                   
               </li>
               
              
           
            
            <?php
            }
            ?>
            </ul>
            <?php
            }
            ?>

            <?php

                    setcookie("new_company", "", time() - 3600); 

                ?>
                        <script>
                            
                function change_company(current_company)
                {
                    //clear cookie
                
                   // document.cookie = escape("new_company") + "=" + escape(value) + "; path=/";
                  // document.cookie = "new_company = ; expires = Thu, 01 Jan 1970 00:00:00 GMT";
                  //  document.cookie = "new_company" + "=" + "; expires=" + "Thu, 01 Jan 1970 00:00:00 GMT";
                                  
                                  if (window.confirm("Switch current company to "+current_company+ "?")) { 
                                     //createCookie("new_company",current_company );
                                            
                                            $.ajax({
                url: "<?php echo base_url();?>index.php/admin/staff/change_company",
                type: "POST",
                success: function(result){
                   
                     
                    alert(result);
                    location.reload();
                    
                    
                },
                data:{
                    company: current_company
                }
            });
                                    }
               }
                
                
               function createCookie(name,value) {
                         
                         document.cookie = escape(name) + "=" + escape(value) + "; path=/";
                       }
                
            </script>

          
            <?php if($totalQuickActionsRemoved != count($quickActions)){ ?>
                <li class=" nav-item"><a href="#"><i class="menu-livicon" data-icon="unlink"></i><span class="menu-title" data-i18n="Quick Links">Quick Links</span></a>
                    <ul class="menu-content">
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
                            <a href="<?php echo $url; ?>" <?php echo $href_attributes; ?>><i class="bx bx-right-arrow-alt"></i><span class="menu-item" data-i18n="Basic"><?php echo $item['name']; ?></span></a>
                        </li>
                        <?php } ?>
                    </ul>
                </li>
                <?php } ?>
                <?php
                hooks()->do_action('before_render_aside_menu');
                ?>
                <li class=" nav-item"><a href="<?php echo base_url();?>admin/mailbox"><i class="menu-livicon" data-icon="envelope-pull"></i><span class="menu-title" data-i18n="Email">Email</span></a>
                </li>
                <li class="nav-item"><a href="#"><i class="menu-livicon" data-icon="notebook"></i><span class="menu-title" data-i18n="CMR">CRM</span></a>
                    <ul class="menu-content">
                        <li><a href="<?php echo base_url();?>admin/clients"><i class="bx bx-right-arrow-alt"></i><span class="menu-item" data-i18n="Customers List">Customers</span></a>
                        </li>
                        <li><a href="<?php echo base_url();?>admin/proposals"><i class="bx bx-right-arrow-alt"></i><span class="menu-item" data-i18n="Proposals">Proposals</span></a>
                        </li>
                        <li><a href="app-invoice-edit.html"><i class="bx bx-right-arrow-alt"></i><span class="menu-item" data-i18n="Invoice Edit">Leads</span></a>
                            <ul class="menu-content">
                                <li><a href="<?php echo base_url();?>admin/leads"><i class="bx bx-right-arrow-alt"></i><span class="menu-item" data-i18n="Dashboard">Dashboard</span></a>
                                <li><a href="<?php echo base_url();?>admin/leads/sources"><i class="bx bx-right-arrow-alt"></i><span class="menu-item" data-i18n="Sources">Sources</span></a>
                                <li><a href="<?php echo base_url();?>admin/leads/statuses"><i class="bx bx-right-arrow-alt"></i><span class="menu-item" data-i18n="Statuses">Statuses</span></a>
                           
                            
                            </ul>
                        </li>
                        <li><a href="<?php echo base_url();?>admin/contracts"><i class="bx bx-right-arrow-alt"></i><span class="menu-item" data-i18n="Contracts">Contracts</span></a>
                        </li>
                    </ul>
                </li>
                <li class=" nav-item"><a href="#"><i class="menu-livicon" data-icon="bar-chart"></i><span class="menu-title" data-i18n="Accounting">Accounting</span></a>
                    <ul class="menu-content">
                        <li><a href="<?php echo base_url();?>admin/expenses"><i class="bx bx-right-arrow-alt"></i><span class="menu-item" data-i18n="Expenses">Expenses</span></a>
                        <li><a href="<?php echo base_url();?>admin/estimates"><i class="bx bx-right-arrow-alt"></i><span class="menu-item" data-i18n="Estimates">Estimates</span></a>
                        <li><a href="<?php echo base_url();?>admin/invoices"><i class="bx bx-right-arrow-alt"></i><span class="menu-item" data-i18n="Invoices">Invoices</span></a>
                        <li><a href="<?php echo base_url();?>admin/payments"><i class="bx bx-right-arrow-alt"></i><span class="menu-item" data-i18n="Payments">Payments</span></a>
                        <li><a href="<?php echo base_url();?>admin/credit_notes"><i class="bx bx-right-arrow-alt"></i><span class="menu-item" data-i18n="Credit Notes">Credit Notes</span></a>
                        <li><a href="<?php echo base_url();?>admin/invoice_items"><i class="bx bx-right-arrow-alt"></i><span class="menu-item" data-i18n="Products & Services">Products & Services</span></a>
                    </ul>
                </li>
                <li class="nav-item"><a href="#"><i class="menu-livicon" data-icon="notebook"></i><span class="menu-title" data-i18n="HRM">HRM</span></a>
                    <ul class="menu-content">
                        <li><a href="<?php echo base_url();?>admin/hrm"><i class="bx bx-right-arrow-alt"></i><span class="menu-item" data-i18n="Dashboard">Dashboard</span></a>
                        </li>
                        <li><a href="<?php echo base_url();?>admin/staff"><i class="bx bx-right-arrow-alt"></i><span class="menu-item" data-i18n="Staff">Staff</span></a>
                        </li>
                        
                        <li><a href="<?php echo base_url();?>admin/departments"><i class="bx bx-right-arrow-alt"></i><span class="menu-item" data-i18n="Departments">Departments</span></a>
                        </li>

                        <li><a href="<?php echo base_url();?>admin/hrm/contracts"><i class="bx bx-right-arrow-alt"></i><span class="menu-item" data-i18n="Contracts">Contract</span></a>
                        </li>
                        <li><a href="<?php echo base_url();?>admin/hrm/insurances"><i class="bx bx-right-arrow-alt"></i><span class="menu-item" data-i18n="Insuarance">Insuarance</span></a>
                        </li>
                        <li><a href="<?php echo base_url();?>admin/hrm/timekeeping"><i class="bx bx-right-arrow-alt"></i><span class="menu-item" data-i18n="Shifts">Shifts</span></a>
                        </li>
                        <li><a href="<?php echo base_url();?>admin/hrm/payroll"><i class="bx bx-right-arrow-alt"></i><span class="menu-item" data-i18n="Salary">Salary</span></a>
                        </li>
                        <li><a href="<?php echo base_url();?>admin/hrm/setting"><i class="bx bx-right-arrow-alt"></i><span class="menu-item" data-i18n="Settings">Settings</span></a>
                        </li>
                    </ul>
                </li>
                <li class=" nav-item"><a href="<?php echo base_url();?>admin/projects"><i class="menu-livicon" data-icon="grid"></i><span class="menu-title" data-i18n="Projects">Projects</span></a>
                </li>
                <li class="nav-item"><a href="#"><i class="menu-livicon" data-icon="briefcase"></i><span class="menu-title" data-i18n="Asset Management">Asset Management</span></a>
                    <ul class="menu-content">
                        <li><a href="<?php echo base_url();?>admin/assets/manage_assets"><i class="bx bx-right-arrow-alt"></i><span class="menu-item" data-i18n="Assets">Assets</span></a>
                        </li>
                        <!--
                        <li><a href="<?php echo base_url();?>admin/assets/allocation"><i class="bx bx-right-arrow-alt"></i><span class="menu-item" data-i18n="Allocation">Allocation</span></a>
                        </li> -->
                        <li><a href="<?php echo base_url();?>admin/assets/eviction"><i class="bx bx-right-arrow-alt"></i><span class="menu-item" data-i18n="Remove">Remove</span></a>
                        </li>
                        <li><a href="<?php echo base_url();?>admin/assets/depreciation"><i class="bx bx-right-arrow-alt"></i><span class="menu-item" data-i18n="Depreciation">Depreciation</span></a>
                        </li>
                        <li><a href="<?php echo base_url();?>admin/assets/setting"><i class="bx bx-right-arrow-alt"></i><span class="menu-item" data-i18n="Settings">Settings</span></a>
                        </li>
                    </ul>
                </li>
                <li class=" nav-item"><a href="<?php echo base_url();?>admin/tasks"><i class="menu-livicon" data-icon="check-alt"></i><span class="menu-title" data-i18n="Tasks">Tasks</span></a>
                </li>
                <li class=" nav-item"><a href="<?php echo base_url();?>admin/utilities/calendar"><i class="menu-livicon" data-icon="calendar"></i><span class="menu-title" data-i18n="Calendar">Calendar</span></a>
                </li>
                <li class=" nav-item"><a href="<?php echo base_url();?>admin/utilities/media"><i class="menu-livicon" data-icon="morph-folder"></i><span class="menu-item" data-i18n="Media">Work Drive</span></a>
                </li>
                <li class="nav-item"><a href="#"><i class="menu-livicon" data-icon="clapboard"></i><span class="menu-title" data-i18n="Utilities">Utilities</span></a>
                    <ul class="menu-content">
                    <!--
                        <li><a href="<?php echo base_url();?>admin/utilities/bulk_pdf_exporter"><i class="bx bx-right-arrow-alt"></i><span class="menu-item" data-i18n="Bulk PDF Export">Bulk PDF Export</span></a>
                        </li> -->
                        <li><a href="<?php echo base_url();?>admin/announcements"><i class="bx bx-right-arrow-alt"></i><span class="menu-item" data-i18n="Announcements">Announcements</span></a>
                        </li>
                        <li><a href="<?php echo base_url();?>admin/goals"><i class="bx bx-right-arrow-alt"></i><span class="menu-item" data-i18n="Goals">Goals</span></a>
                        </li>
                        <li><a href="<?php echo base_url();?>admin/utilities/activity_log"><i class="bx bx-right-arrow-alt"></i><span class="menu-item" data-i18n="Activity Log">Activity Log</span></a>
                        </li>
                        <li><a href="<?php echo base_url();?>admin/surveys"><i class="bx bx-right-arrow-alt"></i><span class="menu-item" data-i18n="Surveys">Surveys</span></a>
                        </li>
                        <li><a href="<?php echo base_url();?>admin/utilities/pipe_log"><i class="bx bx-right-arrow-alt"></i><span class="menu-item" data-i18n="Ticket Pipe Log">Ticket Pipe Log</span></a>
                        </li>
                    </ul>
                </li>
                <li class="nav-item"><a href="#"><i class="menu-livicon" data-icon="bar-chart"></i><span class="menu-title" data-i18n="Reports">Reports</span></a>
                    <ul class="menu-content">
                        <li><a href="<?php echo base_url();?>admin/reports/sales"><i class="bx bx-right-arrow-alt"></i><span class="menu-item" data-i18n="Sales">Sales</span></a>
                        </li>
                        <li><a href="<?php echo base_url();?>admin/reports/expenses"><i class="bx bx-right-arrow-alt"></i><span class="menu-item" data-i18n="Expenses">Expenses</span></a>
                        </li>
                        <li><a href="<?php echo base_url();?>admin/reports/expenses_vs_income"><i class="bx bx-right-arrow-alt"></i><span class="menu-item" data-i18n="Expenses vs Income">Expenses vs Income</span></a>
                        </li>
                        <li><a href="<?php echo base_url();?>admin/reports/leads"><i class="bx bx-right-arrow-alt"></i><span class="menu-item" data-i18n="Leads">Leads</span></a>
                        </li>
                        
                        <li><a href="<?php echo base_url();?>admin/reports/knowledge_base_articles"><i class="bx bx-right-arrow-alt"></i><span class="menu-item" data-i18n="KB Articles">KB Articles</span></a>
                        </li>
                    </ul>
                </li>
                <li class="menu-content"><a href="#"><i class="menu-livicon" data-icon="settings"></i><span class="menu-title" data-i18n="Reports">Setup</span></a>
                    <ul class="menu-content">
                        <?php
                        $totalSetupMenuItems = 0;
                        foreach($setup_menu as $key => $item){
                            if(isset($item['collapse']) && count($item['children']) === 0) {
                            continue;
                        }
                        $totalSetupMenuItems++;
                        ?>
                        <li>
                            <a href="<?php echo count($item['children']) > 0 ? '#' : $item['href']; ?>"><i class="bx bx-right-arrow-alt"></i><span class="menu-title" data-i18n="<?php echo _l($item['name'],'', false); ?>"><?php echo _l($item['name'],'', false); ?></span></a>
                            <?php if(count($item['children']) > 0){ ?>
                                <ul class="menu-content">
                                    <?php foreach($item['children'] as $submenu){ ?>
                                        <li><a href="<?php echo $submenu['href']; ?>"><i class="bx bx-right-arrow-alt"></i><span class="menu-item" data-i18n="<?php echo _l($submenu['name'],'',false); ?>"><?php echo _l($submenu['name'],'',false); ?></span></a>
                                        </li>
                                    <?php } ?>
                                </ul>
                            <?php } ?>
                        </li>
                        <?php hooks()->do_action('after_render_single_setup_menu', $item); ?>
                        <?php } ?>
                        <?php if(get_option('show_help_on_setup_menu') == 1 && is_admin()){ $totalSetupMenuItems++; ?>
                            <li><a href="<?php echo hooks()->apply_filters('help_menu_item_link','https://help.perfexcrm.com'); ?>"><i class="bx bx-link"></i><span class="menu-item" data-i18n="<?php echo hooks()->apply_filters('help_menu_item_text',_l('setup_help')); ?>"><?php echo hooks()->apply_filters('help_menu_item_text',_l('setup_help')); ?></span></a>
                            </li>
                        <?php } ?>
                    </ul>
                </li>
                
                <li class=" nav-item"><a href="<?php echo site_url(); ?>admin/account"><i class="menu-livicon" data-icon="unlink"></i><span class="menu-title" data-i18n="Quick Links">My Account</span></a>
                        </li>

            </ul>
        </div>
    </div>
    <!-- END: Main Menu-->