<?php defined('BASEPATH') or exit('No direct script access allowed'); 
   $companyusername = $_SESSION['current_company'];
?>
<div class="col-12 dashboard-users relative" id="widget-<?php echo basename(__FILE__,".php"); ?>" data-name="<?php echo _l('quick_stats'); ?>">
      <div class="row">
      <?php
         $initial_column = 'col-lg-3';
         if(!is_staff_member() && ((!has_permission('invoices','','view') && !has_permission('invoices','','view_own') && (get_option('allow_staff_view_invoices_assigned') == 0
           || (get_option('allow_staff_view_invoices_assigned') == 1 && !staff_has_assigned_invoices()))))) {
            $initial_column = 'col-lg-6';
         } else if(!is_staff_member() || (!has_permission('invoices','','view') && !has_permission('invoices','','view_own') && (get_option('allow_staff_view_invoices_assigned') == 1 && !staff_has_assigned_invoices()) || (get_option('allow_staff_view_invoices_assigned') == 0 && (!has_permission('invoices','','view') && !has_permission('invoices','','view_own'))))) {
            $initial_column = 'col-lg-4';
         }
      ?>
         <?php if(has_permission('invoices','','view') || has_permission('invoices','','view_own') || (get_option('allow_staff_view_invoices_assigned') == '1' && staff_has_assigned_invoices())){ ?>
         <div class="dashboard-users-warning col-xs-12 col-md-6 col-sm-6 <?php echo $initial_column; ?>">
            <div class="card text-center">
                <div class="card-content">
                     <?php
                        $total_invoices = total_rows(db_prefix().'invoices',"company_username ='$companyusername'",'status NOT IN (5,6),'.(!has_permission('invoices','','view') ? ' AND ' . get_invoices_where_sql_for_staff(get_staff_user_id()) : ''));
                        $total_invoices_awaiting_payment = total_rows(db_prefix().'invoices',"company_username ='$companyusername'",'status NOT IN (2,5,6)'.(!has_permission('invoices','','view') ? ' AND ' . get_invoices_where_sql_for_staff(get_staff_user_id()) : ''));
                        $percent_total_invoices_awaiting_payment = ($total_invoices > 0 ? number_format(($total_invoices_awaiting_payment * 100) / $total_invoices,2) : 0);
                     ?>
                     <div class="card-body py-1">
                        <div class="badge-circle badge-circle-lg badge-circle-light-warning mx-auto mb-50">
                              <i class="bx bx-user font-medium-5"></i>
                           </div>
                           <div class="text-muted line-ellipsis"><?php echo _l('invoices_awaiting_payment'); ?></div>
                           <h3 class="mb-0"><?php echo $total_invoices_awaiting_payment; ?> / <?php echo $total_invoices;?></h3>
                     </div>
                </div>
            </div>
         </div>
         <?php } ?>
         <?php if(is_staff_member()){ ?>
         <div class="dashboard-users-success col-xs-12 col-md-6 col-sm-6 <?php echo $initial_column; ?>">
            <div class="card text-center">
                <div class="card-content">
                  <div class="card-body py-1">
                     <?php
                        $where = '';
                        if(!is_admin()){
                           $where .= '(addedfrom = '.get_staff_user_id().' OR assigned = '.get_staff_user_id().')';
                        }
                        // Junk leads are excluded from total
                        $total_leads = total_rows(db_prefix().'leads',"company_username ='$companyusername'",($where == '' ? 'junk=0' : $where .= ' AND junk =0'));

                        if($where == ''){
                        $where .= 'status=1';
                        } else {
                        $where .= ' AND status =1';
                        }
                        
                        $total_leads_converted = total_rows(db_prefix().'leads',"company_username ='$companyusername'",$where);

                        $percent_total_leads_converted = ($total_leads > 0 ? number_format(($total_leads_converted * 100) / $total_leads,2) : 0);
                     ?>
                     <div class="badge-circle badge-circle-lg badge-circle-light-success mx-auto mb-50">
                           <i class="bx bx-user font-medium-5"></i>
                        </div>
                        <div class="text-muted line-ellipsis"><?php echo _l('leads_converted_to_client'); ?></div>
                        <h3 class="mb-0"><?php echo $total_leads_converted; ?> / <?php echo $total_leads; ?></h3>
                  </div>
                </div>
            </div>
         </div>
         <?php } ?>
         <div class="dashboard-users-primary col-xs-12 col-md-6 col-sm-6 <?php echo $initial_column; ?>">
            <div class="card text-center">
                <div class="card-content">
                  <div class="card-body py-1">
                     <?php
                        $_where = '';
                        $project_status = get_project_status_by_id(2);
                        if(!has_permission('projects','','view')){
                           $_where = 'id IN (SELECT project_id FROM '.db_prefix().'project_members WHERE staff_id='.get_staff_user_id().')';
                        }
                        $total_projects = total_rows(db_prefix().'projects',"company_username ='$companyusername'",$_where);

                        
                        $where = ($_where == '' ? '' : $_where.' AND ').'status = 2';
                        $total_projects_in_progress = total_rows(db_prefix().'projects',"company_username ='$companyusername'",$where);

                        $percent_in_progress_projects = ($total_projects > 0 ? number_format(($total_projects_in_progress * 100) / $total_projects,2) : 0);
                     ?>
                      <div class="badge-circle badge-circle-lg badge-circle-light-primary mx-auto mb-50">
                           <i class="bx bx-user font-medium-5"></i>
                        </div>
                        <div class="text-muted line-ellipsis"><?php echo _l('projects') . ' ' . $project_status['name']; ?></div>
                        <h3 class="mb-0"><?php echo $total_projects_in_progress; ?> / <?php echo $total_projects; ?></h3>
                  </div>
                </div>
            </div>
         </div>
         <div class="dashboard-users-danger col-xs-12 col-md-6 col-sm-6 <?php echo $initial_column; ?>">
            <div class="card text-center">
                <div class="card-content">
                  <div class="card-body py-1">
                     <?php
                        $_where = '';
                        if (!has_permission('tasks', '', 'view')) {
                           $_where = db_prefix().'tasks.id IN (SELECT taskid FROM '.db_prefix().'task_assigned WHERE staffid = ' . get_staff_user_id() . ')';
                        }
                        
                        $total_tasks = total_rows(db_prefix().'tasks',"company_username ='$companyusername'",$_where);

                        $where = ($_where == '' ? '' : $_where.' AND ').'status != '.Tasks_model::STATUS_COMPLETE;
                        $total_not_finished_tasks = total_rows(db_prefix().'tasks',"company_username ='$companyusername'",$where);


                        $percent_not_finished_tasks = ($total_tasks > 0 ? number_format(($total_not_finished_tasks * 100) / $total_tasks,2) : 0);
                     ?>
                      <div class="badge-circle badge-circle-lg badge-circle-light-danger mx-auto mb-50">
                           <i class="bx bx-user font-medium-5"></i>
                        </div>
                        <div class="text-muted line-ellipsis"><?php echo _l('tasks_not_finished'); ?> </div>
                        <h3 class="mb-0"><?php echo $total_not_finished_tasks; ?> / <?php echo $total_tasks; ?></h3>
                  </div>
            </div>
         </div>
      </div>
   </div>
