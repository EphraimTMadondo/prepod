<!-- BEGIN: Content-->
<div class="app-content content">
    <div class="content-area-wrapper">
        <div class="sidebar-left">
            <div class="sidebar">
                <div class="todo-sidebar d-flex">
                    <span class="sidebar-close-icon">
                    <script>
                          var message2 = "hiiiiii";
                          var type2 = "success"
                                </script>
                        <i class="bx bx-x"></i>
                    </span>
                    <!-- todo app menu -->

                    
                    <div class="todo-app-menu">
                           
                        <div class="form-group text-center add-task">
                            <?php if(has_permission('tasks','','create')){ ?>
                            <a href="#" onclick="new_task(<?php if($this->input->get('project_id')){ echo "'".admin_url('tasks/task?rel_id='.$this->input->get('project_id').'&rel_type=project')."'";} ?>); return false;" class="btn btn-primary btn-block  my-1"><?php echo _l('new_task'); ?></a>
                            <?php } ?>

                        <!--
                            <a href="<?php // if(!$this->input->get('project_id')){ echo admin_url('tasks/switch_kanban/'.$switch_kanban); } else { echo admin_url('projects/view/'.$this->input->get('project_id').'?group=project_tasks'); }; ?>" class="btn btn-secondary btn-block  my-1">
                                <?php // if($switch_kanban == 1){ echo _l('switch_to_list_view');}else{echo _l('leads_switch_to_kanban');}; ?>
                            </a>
                            -->
                        </div>
                        <!-- sidebar list start -->
                        <div class="sidebar-menu-list">
                            <label class="filter-label mt-2 mb-1 pt-25"><?php echo _l('tasks_summary'); ?></label>
                            <div class="list-group">
                            <?php     
                                foreach(tasks_summary_data((isset($rel_id) ? $rel_id : null),(isset($rel_type) ? $rel_type : null)) as $summary){ ?>
                                    <a href="#" class="list-group-item border-0 d-flex align-items-center justify-content-between">
                                        <span><?php echo $summary['name']; ?></span>
                                        <span class="badge badge-success"><?php echo $summary['total_my_tasks']; ?></span>
                                    </a>
                                    <?php } 
                                ?>
                            </div>
                        </div>
                        <!-- sidebar list end -->
                    </div>
                </div>
            </div>
        </div>
        <div class="content-right">
            <div class="content-overlay"></div>
            <div class="content-wrapper">
                <div class="content-header row">
                </div>
                <div class="content-body">
                    <div class="app-content-overlay"></div>
                    <div class="todo-app-area">
                        <div class="todo-app-list-wrapper">
                            <div class="todo-app-list">
                                <div class="todo-fixed-search d-flex justify-content-between align-items-center">
                                    <div class="sidebar-toggle d-block d-lg-none">
                                        <i class="bx bx-menu"></i>
                                    </div>
                                    <fieldset class="form-group position-relative has-icon-left m-0 flex-grow-1">
                                        <input type="text" class="form-control todo-search" id="todo-search" placeholder="Search Task">
                                        <div class="form-control-position" style="padding-top:8px">
                                            <i class="bx bx-search"></i>
                                        </div>
                                    </fieldset>
                                    <div class="todo-sort dropdown mr-1">
                                        <button class="btn dropdown-toggle sorting" type="button" id="sortDropdown" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                            <i class="bx bx-filter"></i>
                                            <span>Sort</span>
                                        </button>
                                        <div class="dropdown-menu dropdown-menu-right" aria-labelledby="sortDropdown">
                                            <a class="dropdown-item ascending" href="#">Ascending</a>
                                            <a class="dropdown-item descending" href="#">Descending</a>
                                        </div>
                                    </div>
                                </div>
                                <div class="todo-task-list list-group">
                                    <!-- task list start -->
                                    <ul class="todo-task-list-wrapper list-unstyled" id="todo-task-list-drag"></ul>
                                    <!-- task list end -->
                                    <div class="no-results">
                                        <h5>No Items Found</h5>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- END: Content-->
