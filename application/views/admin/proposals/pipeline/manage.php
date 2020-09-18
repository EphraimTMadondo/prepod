<?php defined('BASEPATH') or exit('No direct script access allowed'); ?>
<?php init_head(true, 'proposals_kanban'); ?>
<!-- BEGIN: Content-->
<div class="app-content content">
   <div class="content-overlay"></div>
   <div class="content-wrapper">
        <div class="content-header row">
            <div class="col-md-8">
                <?php if(has_permission('proposals','','create')){ ?>
                <a href="<?php echo admin_url('proposals/proposal'); ?>" class="btn btn-primary float-left new"><?php echo _l('new_proposal'); ?></a>
                <?php } ?>
                <a href="<?php echo admin_url('proposals/pipeline/'.$switch_pipeline); ?>" class="btn btn-light ml-1 float-left"><?php echo _l('switch_to_list_view'); ?></a>
            </div>
            <div class="col-md-4" data-toggle="tooltip" data-placement="bottom" data-title="<?php echo _l('search_by_tags'); ?>">
                <?php echo render_input('search','','','search',array('data-name'=>'search','onkeyup'=>'proposals_pipeline();'),array(),'no-margin') ?>
                <?php echo form_hidden('sort_type'); ?>
                <?php echo form_hidden('sort',(get_option('default_proposals_pipeline_sort') != '' ? get_option('default_proposals_pipeline_sort_type') : '')); ?>
            </div>
            <?php echo form_hidden('proposalid',$proposalid); ?>
            <div class="col-md-12">
                <div class="kanban-leads-sort">
                    <span class="bold"><?php echo _l('proposals_pipeline_sort'); ?>: </span>
                    <a href="#" onclick="proposal_pipeline_sort('datecreated'); return false" class="datecreated">
                        <?php if(get_option('default_proposals_pipeline_sort') == 'datecreated'){echo '<i class="kanban-sort-icon fa fa-sort-amount-'.strtolower(get_option('default_proposals_pipeline_sort_type')).'"></i> ';} ?><?php echo _l('proposals_sort_datecreated'); ?>
                        </a>
                    |
                    <a href="#" onclick="proposal_pipeline_sort('date'); return false" class="date">
                    <?php if(get_option('default_proposals_pipeline_sort') == 'date'){echo '<i class="kanban-sort-icon fa fa-sort-amount-'.strtolower(get_option('default_proposals_pipeline_sort_type')).'"></i> ';} ?><?php echo _l('proposals_sort_proposal_date'); ?>
                        </a>
                    |
                    <a href="#" onclick="proposal_pipeline_sort('pipeline_order');return false;" class="pipeline_order">
                        <?php if(get_option('default_proposals_pipeline_sort') == 'pipeline_order'){echo '<i class="kanban-sort-icon fa fa-sort-amount-'.strtolower(get_option('default_proposals_pipeline_sort_type')).'"></i> ';} ?><?php echo _l('proposals_sort_pipeline'); ?>
                        </a>
                    |
                    <a href="#" onclick="proposal_pipeline_sort('open_till');return false;" class="open_till">
                    <?php if(get_option('default_proposals_pipeline_sort') == 'open_till'){echo '<i class="kanban-sort-icon fa fa-sort-amount-'.strtolower(get_option('default_proposals_pipeline_sort_type')).'"></i> ';} ?><?php echo _l('proposals_sort_open_till'); ?>
                    </a>
                </div>
            </div>
        </div>
        <div class="content-body">
                <!-- Basic Kanban App -->
            <div class="kanban-overlay"></div>
            <section id="kanban-wrapper" class="mt-2">
                <div class="row">
                    <div class="col-12">
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
<div id="proposal">
</div>
<?php $this->load->view('admin/includes/modals/sales_attach_file'); ?>
<?php init_tail('proposals_kanban'); ?>
<div id="convert_helper"></div>
<script>
   $(function(){
    proposals_pipeline();
  });
</script>
</body>
</html>
