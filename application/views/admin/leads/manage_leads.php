<?php defined('BASEPATH') or exit('No direct script access allowed'); ?>
<?php init_head(true, 'leads'); ?>
<!-- BEGIN: Content-->
<div class="app-content content">
   <div class="content-overlay"></div>
   <div class="content-wrapper">
      <div class="row">
         <div class="col-md-12">
            <div class="card mtop20">
               <div class="card-body">
                  <div class="_buttons">
                     <a href="#" onclick="init_lead(); return false;" class="btn mr-1 btn-secondary">
                     <?php echo _l('new_lead'); ?>
                     </a>
                     <?php if(is_admin() || get_option('allow_non_admin_members_to_import_leads') == '1'){ ?>
                     <a href="<?php echo admin_url('leads/import'); ?>" class="btn btn-secondary hidden-xs">
                     <?php echo _l('import_leads'); ?>
                     </a>
                     <a href="<?php echo admin_url('leads/switch_kanban/'.$switch_kanban); ?>" class="btn btn-light ml-1 hidden-xs">
                     <?php if($switch_kanban == 1){ echo _l('leads_switch_to_kanban');}else{echo _l('switch_to_list_view');}; ?>
                     </a>
                     <a href="#" class="btn btn-light float-right btn-icon btn-with-tooltip" data-toggle="tooltip" data-title="<?php echo _l('leads_summary'); ?>" data-placement="bottom" onclick="slideToggle('.leads-overview'); return false;"><i class="bx bx-bar-chart"></i></a>
                     <?php } ?>
                     <div class="row mt-3">
                        <div class="col-md-5"></div>
                        <div class="col-md-7 col-xs-12 float-right leads-search">
                           <?php if($this->session->userdata('leads_kanban_view') == 'true') { ?>
                           <div data-toggle="tooltip" data-placement="bottom" data-title="<?php echo _l('search_by_tags'); ?>">
                              <?php echo render_input('search','','','search',array('data-name'=>'search','onkeyup'=>'leads_kanban();','placeholder'=>_l('leads_search')),array(),'no-margin') ?>
                           </div>
                           <?php } ?>
                           <?php echo form_hidden('sort_type'); ?>
                           <?php echo form_hidden('sort',(get_option('default_leads_kanban_sort') != '' ? get_option('default_leads_kanban_sort_type') : '')); ?>
                        </div>
                     </div>
                     <div class="clearfix"></div>
                     <div class="row hide leads-overview">
                        <hr class="hr-panel-heading" />
                        <div class="col-md-12">
                           <h4 class="no-margin"><?php echo _l('leads_summary'); ?></h4>
                        </div>
                        <?php
                           foreach($summary as $status) { ?>
                         
                              <div class="col-md-2 col-xs-6 border-right">
                                    <h3 class="bold">
                                       <?php
                                          if(isset($status['percent'])) {
                                             echo '<span data-toggle="tooltip" data-title="'.$status['total'].'">'.$status['percent'].'%</span>';
                                          } else {
                                             // Is regular status
                                             echo $status['total'];
                                          }
                                       ?>
                                    </h3>
                                   <span style="color:<?php echo $status['color']; ?>" class="<?php echo isset($status['junk']) || isset($status['lost']) ? 'text-danger' : ''; ?>"><?php echo $status['name']; ?></span>
                              </div>
                           <?php } ?>
                     </div>
                  </div>
                  <hr class="hr-panel-heading" />
                  <div class="tab-content">
                     <?php
                        if($this->session->has_userdata('leads_kanban_view') && $this->session->userdata('leads_kanban_view') == 'true') { ?>
                     <div class="active kan-ban-tab" id="kan-ban-tab" style="overflow:auto;">
                        <div class="kanban-leads-sort">
                           <span class="bold"><?php echo _l('leads_sort_by'); ?>: </span>
                           <a href="#" onclick="leads_kanban_sort('dateadded'); return false" class="dateadded">
                           <?php if(get_option('default_leads_kanban_sort') == 'dateadded'){echo '<i class="kanban-sort-icon fa fa-sort-amount-'.strtolower(get_option('default_leads_kanban_sort_type')).'"></i> ';} ?><?php echo _l('leads_sort_by_datecreated'); ?>
                           </a>
                           |
                           <a href="#" onclick="leads_kanban_sort('leadorder');return false;" class="leadorder">
                           <?php if(get_option('default_leads_kanban_sort') == 'leadorder'){echo '<i class="kanban-sort-icon fa fa-sort-amount-'.strtolower(get_option('default_leads_kanban_sort_type')).'"></i> ';} ?><?php echo _l('leads_sort_by_kanban_order'); ?>
                           </a>
                           |
                           <a href="#" onclick="leads_kanban_sort('lastcontact');return false;" class="lastcontact">
                           <?php if(get_option('default_leads_kanban_sort') == 'lastcontact'){echo '<i class="kanban-sort-icon fa fa-sort-amount-'.strtolower(get_option('default_leads_kanban_sort_type')).'"></i> ';} ?><?php echo _l('leads_sort_by_lastcontact'); ?>
                           </a>
                        </div>
                        <div class="row">
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
                     <?php } else { ?>
                     <div class="row" id="leads-table">
                        <div class="col-md-12">
                           <div class="row">
                              <div class="col-md-12">
                                 <p class="bold"><?php echo _l('filter_by'); ?></p>
                              </div>
                              <?php if(has_permission('leads','','view')){ ?>
                              <div class="col-md-3 leads-filter-column">
                                 <?php echo render_select('view_assigned',$staff,array('staffid',array('firstname','lastname')),'','',array('data-width'=>'100%','data-none-selected-text'=>_l('leads_dt_assigned')),array(),'no-mbot'); ?>
                              </div>
                              <?php } ?>
                              <div class="col-md-3 leads-filter-column">
                                 <?php
                                    $selected = array();
                                    if($this->input->get('status')) {
                                     $selected[] = $this->input->get('status');
                                    } else {
                                     foreach($statuses as $key => $status) {
                                       if($status['isdefault'] == 0) {
                                         $selected[] = $status['id'];
                                       } else {
                                         $statuses[$key]['option_attributes'] = array('data-subtext'=>_l('leads_converted_to_client'));
                                       }
                                     }
                                    }
                                    echo '<div id="leads-filter-status">';
                                    echo render_select('view_status[]',$statuses,array('id','name'),'',$selected,array('data-width'=>'100%','data-none-selected-text'=>_l('leads_all'),'multiple'=>true,'data-actions-box'=>true),array(),'no-mbot','',false);
                                    echo '</div>';
                                    ?>
                              </div>
                              <div class="col-md-3 leads-filter-column">
                                 <?php
                                    echo render_select('view_source',$sources,array('id','name'),'','',array('data-width'=>'100%','data-none-selected-text'=>_l('leads_source')),array(),'no-mbot');
                                    ?>
                              </div>
                              <div class="col-md-3 leads-filter-column">
                                 <div class="select-placeholder">
                                    <select name="custom_view" title="<?php echo _l('additional_filters'); ?>" id="custom_view" class="selectpicker" data-style="btn-outline-light" data-width="100%">
                                       <option value=""></option>
                                       <option value="lost"><?php echo _l('lead_lost'); ?></option>
                                       <option value="junk"><?php echo _l('lead_junk'); ?></option>
                                       <option value="public"><?php echo _l('lead_public'); ?></option>
                                       <option value="contacted_today"><?php echo _l('lead_add_edit_contacted_today'); ?></option>
                                       <option value="created_today"><?php echo _l('created_today'); ?></option>
                                       <?php if(has_permission('leads','','edit')){ ?>
                                       <option value="not_assigned"><?php echo _l('leads_not_assigned'); ?></option>
                                       <?php } ?>
                                       <?php if(isset($consent_purposes)) { ?>
                                         <optgroup label="<?php echo _l('gdpr_consent'); ?>">
                                             <?php foreach($consent_purposes as $purpose) { ?>
                                             <option value="consent_<?php echo $purpose['id']; ?>">
                                                <?php echo $purpose['name']; ?>
                                             </option>
                                             <?php } ?>
                                         </optgroup>
                                       <?php } ?>
                                    </select>
                                 </div>
                              </div>
                           </div>
                        </div>
                        <div class="clearfix"></div>
                        <hr class="hr-panel-heading" />
                        <div class="col-md-12">
                           <a href="#" data-toggle="modal" data-table=".table-leads" data-target="#leads_bulk_actions" class="hide bulk-actions-btn table-btn"><?php echo _l('bulk_actions'); ?></a>
                           <div class="modal fade bulk_actions" id="leads_bulk_actions" tabindex="-1" role="dialog">
                              <div class="modal-dialog" role="document">
                                 <div class="modal-content">
                                    <div class="modal-header">
                                       <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                                       <h4 class="modal-title"><?php echo _l('bulk_actions'); ?></h4>
                                    </div>
                                    <div class="modal-body">
                                       <?php if(has_permission('leads','','delete')){ ?>
                                       <div class="checkbox checkbox-danger">
                                          <input type="checkbox" name="mass_delete" id="mass_delete">
                                          <label for="mass_delete"><?php echo _l('mass_delete'); ?></label>
                                       </div>
                                       <hr class="mass_delete_separator" />
                                       <?php } ?>
                                       <div id="bulk_change">
                                       <div class="form-group">
                                              <div class="checkbox checkbox-primary checkbox-inline">
                                                <input type="checkbox" name="leads_bulk_mark_lost" id="leads_bulk_mark_lost" value="1">
                                                <label for="leads_bulk_mark_lost">
                                                <?php echo _l('lead_mark_as_lost'); ?>
                                                </label>
                                             </div>
                                         </div>
                                          <?php echo render_select('move_to_status_leads_bulk',$statuses,array('id','name'),'ticket_single_change_status'); ?>
                                          <?php
                                             echo render_select('move_to_source_leads_bulk',$sources,array('id','name'),'lead_source');
                                             echo render_datetime_input('leads_bulk_last_contact','leads_dt_last_contact');
                                             if(has_permission('leads','','edit')){
                                               echo render_select('assign_to_leads_bulk',$staff,array('staffid',array('firstname','lastname')),'leads_dt_assigned');
                                             }
                                             ?>
                                          <div class="form-group">
                                             <?php echo '<p><b><i class="fa fa-tag" aria-hidden="true"></i> ' . _l('tags') . ':</b></p>'; ?>
                                             <input type="text" class="tagsinput" id="tags_bulk" name="tags_bulk" value="" data-role="tagsinput">
                                          </div>
                                          <hr />
                                          <div class="form-group no-mbot">
                                             <div class="radio radio-primary radio-inline">
                                                <input type="radio" name="leads_bulk_visibility" id="leads_bulk_public" value="public">
                                                <label for="leads_bulk_public">
                                                <?php echo _l('lead_public'); ?>
                                                </label>
                                             </div>
                                             <div class="radio radio-primary radio-inline">
                                                <input type="radio" name="leads_bulk_visibility" id="leads_bulk_private" value="private">
                                                <label for="leads_bulk_private">
                                                <?php echo _l('private'); ?>
                                                </label>
                                             </div>
                                          </div>
                                       </div>
                                    </div>
                                    <div class="modal-footer">
                                       <button type="button" class="btn btn-default" data-dismiss="modal"><?php echo _l('close'); ?></button>
                                       <a href="#" class="btn btn-info" onclick="leads_bulk_action(this); return false;"><?php echo _l('confirm'); ?></a>
                                    </div>
                                 </div>
                                 <!-- /.modal-content -->
                              </div>
                              <!-- /.modal-dialog -->
                           </div>
                           <!-- /.modal -->
                           <?php

                              $table_data = array();
                              $_table_data = array(
                                '<span class="hide"> - </span><div class="checkbox mass_select_all_wrap"><input type="checkbox" id="mass_select_all" data-to-table="leads"><label></label></div>',
                                array(
                                 'name'=>_l('the_number_sign'),
                                 'th_attrs'=>array('class'=>'toggleable', 'id'=>'th-number')
                               ),
                                array(
                                 'name'=>_l('leads_dt_name'),
                                 'th_attrs'=>array('class'=>'toggleable', 'id'=>'th-name')
                               ),
                              );
                              if(is_gdpr() && get_option('gdpr_enable_consent_for_leads') == '1') {
                                $_table_data[] = array(
                                    'name'=>_l('gdpr_consent') .' ('._l('gdpr_short').')',
                                    'th_attrs'=>array('id'=>'th-consent', 'class'=>'not-export')
                                 );
                              }
                              $_table_data[] = array(
                               'name'=>_l('lead_company'),
                               'th_attrs'=>array('class'=>'toggleable', 'id'=>'th-company')
                              );
                              $_table_data[] =   array(
                               'name'=>_l('leads_dt_email'),
                               'th_attrs'=>array('class'=>'toggleable', 'id'=>'th-email')
                              );
                              $_table_data[] =  array(
                               'name'=>_l('leads_dt_phonenumber'),
                               'th_attrs'=>array('class'=>'toggleable', 'id'=>'th-phone')
                              );

                              $_table_data[] =  array(
                               'name'=>_l('tags'),
                               'th_attrs'=>array('class'=>'toggleable', 'id'=>'th-tags')
                              );
                              $_table_data[] = array(
                               'name'=>_l('leads_dt_assigned'),
                               'th_attrs'=>array('class'=>'toggleable', 'id'=>'th-assigned')
                              );
                              $_table_data[] = array(
                               'name'=>_l('leads_dt_status'),
                               'th_attrs'=>array('class'=>'toggleable', 'id'=>'th-status')
                              );
                              $_table_data[] = array(
                               'name'=>_l('leads_source'),
                               'th_attrs'=>array('class'=>'toggleable', 'id'=>'th-source')
                              );
                              $_table_data[] = array(
                               'name'=>_l('leads_dt_last_contact'),
                               'th_attrs'=>array('class'=>'toggleable', 'id'=>'th-last-contact')
                              );
                              $_table_data[] = array(
                                'name'=>_l('leads_dt_datecreated'),
                                'th_attrs'=>array('class'=>'date-created toggleable','id'=>'th-date-created')
                              );
                              foreach($_table_data as $_t){
                               array_push($table_data,$_t);
                              }
                              $custom_fields = get_custom_fields('leads',array('show_on_table'=>1));
                              foreach($custom_fields as $field){
                              array_push($table_data,$field['name']);
                              }
                              $table_data = hooks()->apply_filters('leads_table_columns', $table_data);
                              render_datatable($table_data,'leads',
                              array('customizable-table, table-responsive'),
                              array(
                               'id'=>'table-leads',
                               'data-last-order-identifier'=>'leads',
                               'data-default-order'=>get_table_last_order('leads'),
                               )); ?>
                        </div>
                     </div>
                     <?php } ?>
                  </div>
               </div>
            </div>
         </div>
      </div>
   </div>
</div>
<script id="hidden-columns-table-leads" type="text/json">
   <?php echo get_staff_meta(get_staff_user_id(), 'hidden-columns-table-leads'); ?>
</script>
<?php include_once(APPPATH.'views/admin/leads/status.php'); ?>
<?php init_tail('leads'); ?>
<script>
   var openLeadID = '<?php echo $leadid; ?>';

   function kanban_leads(){
        if ($('#kanban-app').length === 0) { return; }
        var parameters = [];
        var _kanban_param_val;

        //Sorting parameters
        var search = $('input[name="search"]').val();
        if (typeof(search) != 'undefined' && search !== '') { parameters['search'] = search; }

        var sort_type = $('input[name="sort_type"]');
        var sort = $('input[name="sort"]').val();
        if (sort_type.length != 0 && sort_type.val() !== '') {
            parameters['sort_by'] = sort_type.val();
            parameters['sort'] = sort;
        }

        parameters['kanban'] = true;
        requestGetJSON('proposals/get_pipeline_ajax',parameters).done(function(response){
            if(response.success){
                console.log(response);
                var kanban_curr_el, kanban_curr_item_id, kanban_item_title, kanban_data, kanban_item, kanban_users;

                // Kanban Board and Item Data passed by json
                var kanban_board_data = response.kanban_items.map(kanban_item => ({
                    id: "kanban-board-" + kanban_item.status,
                    title: kanban_item.title,
                    item: kanban_item.proposals.map(proposal => ({
                        id: proposal.id,
                        title: proposal.subject,
                        border: "success",
                        dueDate: proposal.open_till,
                        comment: 1,
                        attachment: 3,
                    })),
                }));

                // Kanban Board
                var KanbanExample = new jKanban({
                    element: "#kanban-wrapper", // selector of the kanban container
                    buttonContent: "Load More", // text or html content of the board button

                    // click on current kanban-item
                    click: function (el) {
                        // Set el to var kanban_curr_el, use this variable when updating title
                        kanban_curr_el = el;

                        // Extract  the kan ban item & id and set it to respective vars
                        kanban_item_title = $(el).contents()[0].data;
                        kanban_curr_item_id = $(el).attr("data-eid");

                        // open proposal modal
                        proposal_pipeline_open(kanban_curr_item_id);
                    },

                    buttonClick: function (el, boardId) {
                    
                    },
                    addItemButton: true, // add a button to board for easy item creation
                    boards: kanban_board_data // data passed from defined variable
                });

                
                // Add html for Custom Data-attribute to Kanban item
                var board_item_id, board_item_el;
                // Kanban board loop
                for (kanban_data in kanban_board_data) {
                    // Kanban board items loop
                    for (kanban_item in kanban_board_data[kanban_data].item) {
                    var board_item_details = kanban_board_data[kanban_data].item[kanban_item]; // set item details
                    board_item_id = $(board_item_details).attr("id"); // set 'id' attribute of kanban-item

                    (board_item_el = KanbanExample.findElement(board_item_id)), // find element of kanban-item by ID
                    (board_item_users = board_item_dueDate = board_item_comment = board_item_attachment = board_item_image = board_item_badge =
                        " ");

                    // check if users are defined or not and loop it for getting value from user's array
                    if (typeof $(board_item_el).attr("data-users") !== "undefined") {
                        for (kanban_users in kanban_board_data[kanban_data].item[kanban_item].users) {
                        board_item_users +=
                            '<li class="avatar pull-up my-0">' +
                            '<img class="media-object rounded-circle" src=" ' +
                            kanban_board_data[kanban_data].item[kanban_item].users[kanban_users] +
                            '" alt="Avatar" height="24" width="24">' +
                            "</li>";
                        }
                    }
                    // check if dueDate is defined or not
                    if (typeof $(board_item_el).attr("data-dueDate") !== "undefined") {
                        board_item_dueDate =
                        '<div class="kanban-due-date d-flex align-items-center mr-50">' +
                        '<i class="bx bx-time-five font-size-small mr-25"></i>' +
                        '<span class="font-size-small">' +
                        $(board_item_el).attr("data-dueDate") +
                        "</span>" +
                        "</div>";
                    }
                    // check if comment is defined or not
                    if (typeof $(board_item_el).attr("data-comment") !== "undefined") {
                        board_item_comment =
                        '<div class="kanban-comment d-flex align-items-center mr-50">' +
                        '<i class="bx bx-message font-size-small mr-25"></i>' +
                        '<span class="font-size-small">' +
                        $(board_item_el).attr("data-comment") +
                        "</span>" +
                        "</div>";
                    }
                    // check if attachment is defined or not
                    if (typeof $(board_item_el).attr("data-attachment") !== "undefined") {
                        board_item_attachment =
                        '<div class="kanban-attachment d-flex align-items-center">' +
                        '<i class="bx bx-link-alt font-size-small mr-25"></i>' +
                        '<span class="font-size-small">' +
                        $(board_item_el).attr("data-attachment") +
                        "</span>" +
                        "</div>";
                    }
                    // check if Image is defined or not
                    if (typeof $(board_item_el).attr("data-image") !== "undefined") {
                        board_item_image =
                        '<div class="kanban-image mb-1">' +
                        '<img class="img-fluid" src=" ' +
                        kanban_board_data[kanban_data].item[kanban_item].image +
                        '" alt="kanban-image">';
                        ("</div>");
                    }
                    // check if Badge is defined or not
                    if (typeof $(board_item_el).attr("data-badgeContent") !== "undefined") {
                        board_item_badge =
                        '<div class="kanban-badge">' +
                        '<div class="badge-circle badge-circle-sm badge-circle-light-' +
                        kanban_board_data[kanban_data].item[kanban_item].badgeColor +
                        ' font-size-small font-weight-bold">' +
                        kanban_board_data[kanban_data].item[kanban_item].badgeContent +
                        "</div>";
                        ("</div>");
                    }
                    // add custom 'kanban-footer'
                    if (
                        typeof (
                        $(board_item_el).attr("data-dueDate") ||
                        $(board_item_el).attr("data-comment") ||
                        $(board_item_el).attr("data-users") ||
                        $(board_item_el).attr("data-attachment")
                        ) !== "undefined"
                    ) {
                        $(board_item_el).append(
                        '<div class="kanban-footer d-flex justify-content-between mt-1">' +
                        '<div class="kanban-footer-left d-flex">' +
                        board_item_dueDate +
                        board_item_comment +
                        board_item_attachment +
                        "</div>" +
                        '<div class="kanban-footer-right">' +
                        '<div class="kanban-users">' +
                        board_item_badge +
                        '<ul class="list-unstyled users-list m-0 d-flex align-items-center">' +
                        board_item_users +
                        "</ul>" +
                        "</div>" +
                        "</div>" +
                        "</div>"
                        );
                    }
                    // add Image prepend to 'kanban-Item'
                    if (typeof $(board_item_el).attr("data-image") !== "undefined") {
                        $(board_item_el).prepend(board_item_image);
                    }
                    }
                }
            }
        });
    }

   $(function(){
      kanban_leads();
      $('#leads_bulk_mark_lost').on('change', function(){
          $('#move_to_status_leads_bulk').prop('disabled', $(this).prop('checked') == true);
          $('#move_to_status_leads_bulk').selectpicker('refresh')
       });
      $('#move_to_status_leads_bulk').on('change', function(){
        if($(this).selectpicker('val') != '') {
         $('#leads_bulk_mark_lost').prop('disabled', true);
         $('#leads_bulk_mark_lost').prop('checked', false);
      } else {
         $('#leads_bulk_mark_lost').prop('disabled', false);
      }
   });
   });
</script>
</body>
</html>
