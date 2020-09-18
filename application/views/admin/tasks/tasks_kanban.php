<!-- BEGIN: Content-->
<div class="app-content content">
    <div class="content-overlay"></div>
    <div class="content-wrapper">
        <div class="content-header row">
            <div class="col-md-8">
                <?php if(has_permission('tasks','','create')){ ?>
                <a href="#" onclick="new_task(<?php if($this->input->get('project_id')){ echo "'".admin_url('tasks/task?rel_id='.$this->input->get('project_id').'&rel_type=project')."'";} ?>); return false;" class="btn btn-info pull-left new"><?php echo _l('new_task'); ?></a>
                <?php } ?>
                <a href="<?php if(!$this->input->get('project_id')){ echo admin_url('tasks/switch_kanban/'.$switch_kanban); } else { echo admin_url('projects/view/'.$this->input->get('project_id').'?group=project_tasks'); }; ?>" class="btn btn-default mleft10 pull-left hidden-xs">
                    <?php if($switch_kanban == 1){ echo _l('switch_to_list_view');}else{echo _l('leads_switch_to_kanban');}; ?>
                </a>
            </div>
            <div class="col-md-4">
                <?php if($this->session->has_userdata('tasks_kanban_view') && $this->session->userdata('tasks_kanban_view') == 'true') { ?>
                <div data-toggle="tooltip" data-placement="bottom" data-title="<?php echo _l('search_by_tags'); ?>">
                    <?php echo render_input('search','','','search',array('data-name'=>'search','onkeyup'=>'tasks_kanban();','placeholder'=>_l('search_tasks')),array(),'no-margin') ?>
                </div>
                <?php } else { ?>
                <?php $this->load->view('admin/tasks/tasks_filter_by',array('view_table_name'=>'.table-tasks')); ?>
                <a href="<?php echo admin_url('tasks/detailed_overview'); ?>" class="btn btn-success pull-right mright5"><?php echo _l('detailed_overview'); ?></a>
                <?php } ?>
            </div>
        </div>
        <div class="content-body">
            <!-- Basic Kanban App -->
            <div class="kanban-overlay"></div>
            <section id="kanban-wrapper">
                <div class="row">
                    <div class="col-12">
                        <button type="button" class="btn btn-primary mb-1" id="add-kanban">
                            <i class='bx bx-add-to-queue mr-50'></i> Add New Board
                        </button>
                        <div id="kanban-app"></div>
                    </div>
                </div>
                <!-- User new mail right area -->
                <div class="kanban-sidebar">
                    <div class="card shadow-none quill-wrapper">
                        <div class="card-header d-flex justify-content-between align-items-center border-bottom px-2 py-1">
                            <h3 class="card-title">UI Design</h3>
                            <button type="button" class="close close-icon">
                                <i class="bx bx-x"></i>
                            </button>
                        </div>
                        <!-- form start -->
                        <form class="edit-kanban-item">
                            <div class="card-content">
                                <div class="card-body">
                                    <div class="form-group">
                                        <label>Card Title</label>
                                        <input type="text" class="form-control edit-kanban-item-title" placeholder="kanban Title">
                                    </div>
                                    <div class="form-group">
                                        <label>Due Date</label>
                                        <input type="text" class="form-control edit-kanban-item-date" placeholder="21 August, 2019">
                                    </div>
                                    <div class="row">
                                        <div class="col-6">
                                            <div class="form-group">
                                                <label>Label</label>
                                                <select class="form-control text-white">
                                                    <option class="bg-primary" selected>Primary</option>
                                                    <option class="bg-danger">Danger</option>
                                                    <option class="bg-success">Success</option>
                                                    <option class="bg-info">Info</option>
                                                    <option class="bg-warning">Warning</option>
                                                    <option class="bg-secondary">Secondary</option>
                                                </select>
                                            </div>
                                        </div>
                                        <div class="col-6">
                                            <div class="form-group">
                                                <label>Member</label>
                                                <div class="d-flex align-items-center">
                                                    <div class="avatar m-0 mr-1">
                                                        <img src="../../../app-assets/images/portrait/small/avatar-s-20.jpg" height="36" width="36" alt="avtar img holder">
                                                    </div>
                                                    <div class="badge-circle badge-circle-light-secondary">
                                                        <i class="bx bx-plus"></i>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label>Attachment</label>
                                        <div class="custom-file">
                                            <input type="file" class="custom-file-input" id="emailAttach">
                                            <label class="custom-file-label" for="emailAttach">Attach file</label>
                                        </div>
                                    </div>
                                    <!-- Compose mail Quill editor -->
                                    <div class="form-group">
                                        <label>Comment</label>
                                        <div class="snow-container border rounded p-1">
                                            <div class="compose-editor"></div>
                                            <div class="d-flex justify-content-end">
                                                <div class="compose-quill-toolbar">
                                                    <span class="ql-formats mr-0">
                                                        <button class="ql-bold"></button>
                                                        <button class="ql-italic"></button>
                                                        <button class="ql-underline"></button>
                                                        <button class="ql-link"></button>
                                                        <button class="ql-image"></button>
                                                        <button class="btn btn-sm btn-primary btn-comment ml-25">Comment</button>
                                                    </span>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="card-footer d-flex justify-content-end">
                                <button type="reset" class="btn btn-light-danger delete-kanban-item d-flex align-items-center mr-1">
                                    <i class='bx bx-trash mr-50'></i>
                                    <span>Delete</span>
                                </button>
                                <button class="btn btn-primary glow update-kanban-item d-flex align-items-center">
                                    <i class='bx bx-send mr-50'></i>
                                    <span>Save</span>
                                </button>
                            </div>
                        </form>
                        <!-- form start end-->
                    </div>
                </div>
                <!--/ User Chat profile right area -->
            </section>
            <!--/ Sample Project kanban -->
        </div>
    </div>
</div>
<!-- END: Content-->