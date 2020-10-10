<?php defined('BASEPATH') or exit('No direct script access allowed'); ?>
<?php init_head(true,'projects'); ?>
<!-- BEGIN: Content-->
<div class="app-content content">
   <div class="content-overlay"></div>
   <div class="content-wrapper">
   <?php echo form_hidden('project_id',$project->id) ?>
      <div class="row">
         <div class="col-md-12">
            <div class="card mt-2 project-top-panel panel-full">
               <div class="card-body _buttons">
                  <div class="row">
                     <div class="col-md-7 project-heading">
                        <h3 class="hide project-name"><?php echo $project->name; ?></h3>
                        <div id="project_view_name">
                           <select class="selectpicker " data-style="btn-primary" id="project_top" data-width="100%"<?php if(count($other_projects) > 6){ ?> data-live-search="true" <?php } ?>>
                              <option value="<?php echo $project->id; ?>" selected data-content="<?php echo $project->name; ?> - <small><?php echo $project->client_data->company; ?></small>">
                                <?php echo $project->client_data->company; ?> <?php echo $project->name; ?>
                              </option>
                              <?php foreach($other_projects as $op){ ?>
                              <option value="<?php echo $op['id']; ?>" data-subtext="<?php echo $op['company']; ?>">#<?php echo $op['id']; ?> - <?php echo $op['name']; ?></option>
                              <?php } ?>
                           </select>
                        </div>
                        <div class="visible-xs">
                           <div class="clearfix"></div>
                        </div>
                        <?php echo '<div class="badge badge-'.$project_status['color'].' float-right ml-1 mt-1 p8 project-status-label-'.$project->status.'">'.$project_status['name'].'</div>'; ?>
                     </div>
                     <div class="col-md-5 text-right">
                        <?php if(has_permission('tasks','','create')){ ?>
                        <a href="#" onclick="new_task_from_relation(undefined,'project',<?php echo $project->id; ?>); return false;" class="btn btn-primary"><?php echo _l('new_task'); ?></a>
                        <?php } ?>
                        <?php
                           $invoice_func = 'pre_invoice_project';
                           ?>
                        <?php if(has_permission('invoices','','create')){ ?>
                        <a href="#" onclick="<?php echo $invoice_func; ?>(<?php echo $project->id; ?>); return false;" class="invoice-project btn btn-primary<?php if($project->client_data->active == 0){echo ' disabled';} ?>"><?php echo _l('invoice_project'); ?></a>
                        <?php } ?>
                        <?php
                           $project_pin_tooltip = _l('pin_project');
                           if(total_rows(db_prefix().'pinned_projects',array('staff_id'=>get_staff_user_id(),'project_id'=>$project->id)) > 0){
                             $project_pin_tooltip = _l('unpin_project');
                           }
                           ?>
                        <div class="btn-group">
                           <select class="selectpicker" id="select-filter" onChange="custom_view()" data-style="btn-primary">
                              <option value="#" ><?php echo _l('more'); ?></option>
                              <option value="<?php echo admin_url('projects/pin_action/'.$project->id); ?>" ><?php echo $project_pin_tooltip; ?></option>
                              <?php if(has_permission('projects','','edit')){ ?>
                                 <option value="<?php echo admin_url('projects/project/'.$project->id); ?>" ><?php echo _l('edit_project'); ?></option>
                              <?php } ?>
                              <?php if(has_permission('projects','','create')){ ?>
                                 <option value="<?php echo _l('copy_project'); ?>">
                                 <?php echo _l('copy_project'); ?>
                                 </option>
                              <?php } ?>
                              <?php if(has_permission('projects','','create') || has_permission('projects','','edit')){ ?>
                                 <?php foreach($statuses as $status){
                                    if($status['id'] == $project->status){continue;}
                                    ?>
                                    <option value="status_id<?php echo $status['id']; ?>:<?php echo $project->id; ?>"><?php echo _l('project_mark_as',$status['name']); ?></option>
                                 <?php } ?>
                              <?php } ?>
                              <?php if(has_permission('projects','','create')){ ?>
                                 <option value="<?php echo admin_url('projects/export_project_data/'.$project->id); ?>" target="_blank"><?php echo _l('export_project_data'); ?></option>
                              <?php } ?>
                              <?php if(is_admin()){ ?>
                                 <option value="<?php echo admin_url('projects/view_project_as_client/'.$project->id .'/'.$project->clientid); ?>" target="_blank"><?php echo _l('project_view_as_client'); ?></option>
                              <?php } ?>
                              <?php if(has_permission('projects','','delete')){ ?>
                                 <option value="<?php echo admin_url('projects/delete/'.$project->id); ?>" class="_delete">
                                    <span class="text-danger"><?php echo _l('delete_project'); ?></span>
                                 </option>
                              <?php } ?>
                           </select>
                        </div>
                     </div>
                  </div>
               </div>
            </div>
            <div class="card project-menu-panel">
               <div class="card-body">
                  <?php hooks()->do_action('before_render_project_view', $project->id); ?>
                  <?php $this->load->view('admin/projects/project_tabs'); ?>
               </div>
            </div>
            <?php
               if((has_permission('projects','','create') || has_permission('projects','','edit'))
                 && $project->status == 1
                 && $this->projects_model->timers_started_for_project($project->id)
                 && $tab['slug'] != 'project_milestones') {
               ?>
            <div class="alert alert-warning project-no-started-timers-found mb-1">
               <?php echo _l('project_not_started_status_tasks_timers_found'); ?>
            </div>
            <?php } ?>
            <?php
               if($project->deadline && date('Y-m-d') > $project->deadline
                && $project->status == 2
                && $tab['slug'] != 'project_milestones') {
               ?>
            <div class="alert alert-warning bold project-due-notice mb-1">
               <?php echo _l('project_due_notice', floor((abs(time() - strtotime($project->deadline)))/(60*60*24))); ?>
            </div>
            <?php } ?>
            <?php
               if(!has_contact_permission('projects',get_primary_contact_user_id($project->clientid))
                 && total_rows(db_prefix().'contacts',array('userid'=>$project->clientid)) > 0
                 && $tab['slug'] != 'project_milestones') {
               ?>
            <div class="alert alert-warning project-permissions-warning mb-1">
               <?php echo _l('project_customer_permission_warning'); ?>
            </div>
            <?php } ?>
            <div class="card">
               <div class="card-body">
                  <?php $this->load->view(($tab ? $tab['view'] : 'admin/projects/project_overview')); ?>
               </div>
            </div>
         </div>
      </div>
   </div>
</div>
</div>
</div>
<?php if(isset($discussion)){
   echo form_hidden('discussion_id',$discussion->id);
   echo form_hidden('discussion_user_profile_image_url',$discussion_user_profile_image_url);
   echo form_hidden('current_user_is_admin',$current_user_is_admin);
   }
   echo form_hidden('project_percent',$percent);
   ?>
<div id="invoice_project"></div>
<div id="pre_invoice_project"></div>
<?php $this->load->view('admin/projects/milestone'); ?>
<?php $this->load->view('admin/projects/copy_settings'); ?>
<?php $this->load->view('admin/projects/_mark_tasks_finished'); ?>
<?php init_tail('projects'); ?>
<!-- For invoices table -->
<script>
   taskid = '<?php echo $this->input->get('taskid'); ?>';
</script>
<script>
   
   function custom_view(){
      var view = $('#select-filter').val();
      if(view === "#")
         return;

      if(view === "<?php echo _l('copy_project'); ?>"){
         copy_project();
      } else if(view.startsWith("status_id")){
         view = view.replace("status_id","");
         viewComponents = view.split(":");
         project_mark_as_modal(viewComponents[0],viewComponents[1], $('#select-filter'));
      } else {
         windor.location.href = view;
      }
   }
   
   var gantt_data = {};
   <?php if(isset($gantt_data)){ ?>
   gantt_data = <?php echo json_encode($gantt_data); ?>;

   <?php } ?>
   var discussion_id = $('input[name="discussion_id"]').val();
   var discussion_user_profile_image_url = $('input[name="discussion_user_profile_image_url"]').val();
   var current_user_is_admin = $('input[name="current_user_is_admin"]').val();
   var project_id = $('input[name="project_id"]').val();
   if(typeof(discussion_id) != 'undefined'){
     discussion_comments('#discussion-comments',discussion_id,'regular');
   }
   $(function(){
    var project_progress_color = '<?php echo hooks()->apply_filters('admin_project_progress_color','#84c529'); ?>';
    var circle = $('.project-progress').circleProgress({fill: {
     gradient: [project_progress_color, project_progress_color]
   }}).on('circle-animation-progress', function(event, progress, stepValue) {
     $(this).find('strong.project-percent').html(parseInt(100 * stepValue) + '<i>%</i>');
   });
   });

   function discussion_comments(selector,discussion_id,discussion_type){
     var defaults = _get_jquery_comments_default_config(<?php echo json_encode(get_project_discussions_language_array()); ?>);
     var options = {
      // https://github.com/Viima/jquery-comments/pull/169
      wysiwyg_editor: {
            opts: {
                enable: true,
                is_html: true,
                container_id: 'editor-container',
                comment_index: 0,
            },
            init: function (textarea, content) {
                var comment_index = textarea.data('comment_index');
                 var editorConfig = _simple_editor_config();
                 editorConfig.setup = function(ed) {
                      textarea.data('wysiwyg_editor', ed);

                      ed.on('change', function() {
                          var value = ed.getContent();
                          if (value !== ed._lastChange) {
                            ed._lastChange = value;
                            textarea.trigger('change');
                          }
                      });

                      ed.on('keyup', function() {
                        var value = ed.getContent();
                          if (value !== ed._lastChange) {
                            ed._lastChange = value;
                            textarea.trigger('change');
                          }
                      });

                      ed.on('Focus', function (e) {
                        textarea.trigger('click');
                      });

                      ed.on('init', function() {
                        if (content) ed.setContent(content);
                      })
                  }

                var editor = init_editor('#'+ this.get_container_id(comment_index), editorConfig)
            },
            get_container: function (textarea) {
                if (!textarea.data('comment_index')) {
                    textarea.data('comment_index', ++this.opts.comment_index);
                }
                return $('<div/>', {
                    'id': this.get_container_id(this.opts.comment_index)
                });
            },
            get_contents: function(editor) {
               return editor.getContent();
            },
            on_post_comment: function(editor, evt) {
               editor.setContent('');
            },
            get_container_id: function(comment_index) {
              var container_id = this.opts.container_id;
              if (comment_index) container_id = container_id + "-" + comment_index;
              return container_id;
            }
        },
      currentUserIsAdmin:current_user_is_admin,
      getComments: function(success, error) {
        $.get(admin_url + 'projects/get_discussion_comments/'+discussion_id+'/'+discussion_type,function(response){
          success(response);
        },'json');
      },
      postComment: function(commentJSON, success, error) {
        $.ajax({
          type: 'post',
          url: admin_url + 'projects/add_discussion_comment/'+discussion_id+'/'+discussion_type,
          data: commentJSON,
          success: function(comment) {
            comment = JSON.parse(comment);
            success(comment)
          },
          error: error
        });
      },
      putComment: function(commentJSON, success, error) {
        $.ajax({
          type: 'post',
          url: admin_url + 'projects/update_discussion_comment',
          data: commentJSON,
          success: function(comment) {
            comment = JSON.parse(comment);
            success(comment)
          },
          error: error
        });
      },
      deleteComment: function(commentJSON, success, error) {
        $.ajax({
          type: 'post',
          url: admin_url + 'projects/delete_discussion_comment/'+commentJSON.id,
          success: success,
          error: error
        });
      },
      uploadAttachments: function(commentArray, success, error) {
        var responses = 0;
        var successfulUploads = [];
        var serverResponded = function() {
          responses++;
            // Check if all requests have finished
            if(responses == commentArray.length) {
                // Case: all failed
                if(successfulUploads.length == 0) {
                  error();
                // Case: some succeeded
              } else {
                successfulUploads = JSON.parse(successfulUploads);
                success(successfulUploads)
              }
            }
          }
          $(commentArray).each(function(index, commentJSON) {
            // Create form data
            var formData = new FormData();
            if(commentJSON.file.size && commentJSON.file.size > app.max_php_ini_upload_size_bytes){
             alert_float('danger',"<?php echo _l("file_exceeds_max_filesize"); ?>");
             serverResponded();
           } else {
            $(Object.keys(commentJSON)).each(function(index, key) {
              var value = commentJSON[key];
              if(value) formData.append(key, value);
            });

            if (typeof(csrfData) !== 'undefined') {
               formData.append(csrfData['token_name'], csrfData['hash']);
            }
            $.ajax({
              url: admin_url + 'projects/add_discussion_comment/'+discussion_id+'/'+discussion_type,
              type: 'POST',
              data: formData,
              cache: false,
              contentType: false,
              processData: false,
              success: function(commentJSON) {
                successfulUploads.push(commentJSON);
                serverResponded();
              },
              error: function(data) {
               var error = JSON.parse(data.responseText);
               alert_float('danger',error.message);
               serverResponded();
             },
           });
          }
        });
        }
      }
      var settings = $.extend({}, defaults, options);
    $(selector).comments(settings);
   }
</script>
</body>
</html>
