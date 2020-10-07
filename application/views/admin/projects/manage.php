<?php defined('BASEPATH') or exit('No direct script access allowed'); ?>
<?php init_head(); ?>
<!-- BEGIN: Content-->
<div class="app-content content">
	<div class="content-overlay"></div>
	<div class="content-wrapper">
    <div class="row">
      <div class="col-md-12">
        <div class="card">
          <div class="card-body">
            <div class="_buttons">
            <?php if(has_permission('projects','','create')){ ?>
              <a href="<?php echo admin_url('projects/project'); ?>" class="btn btn-primary">
                <?php echo _l('new_project'); ?>
              </a>
            <?php } ?>
            <select class="selectpicker" id="select-filter" data-live-search="true" onChange="custom_view()" data-style="btn-primary">
              <option value="" data-tokens="<?php echo _l('expenses_list_all'); ?>"><?php echo _l('expenses_list_all'); ?></option>
              <?php
                // Only show this filter if user has permission for projects view otherwise wont need this becuase by default this filter will be applied
                if(has_permission('projects','','view')){ ?>
                <option value="my_projects" data-tokens="<?php echo _l('home_my_projects'); ?>"><?php echo _l('home_my_projects'); ?></option>
                <?php } ?>
                <?php foreach($statuses as $status){ ?>
                  <option value="<?php echo 'project_status_'.$status['id']; ?>" data-tokens="<?php echo $status['name']; ?>"><?php echo $status['name']; ?></option>
                <?php } ?>
            </select>
              <div class="col-md-12">
                <h4 class="no-margin"><?php echo _l('projects_summary'); ?></h4>
                <?php
                $_where = '';
                if(!has_permission('projects','','view')){
                  $_where = 'id IN (SELECT project_id FROM '.db_prefix().'project_members WHERE staff_id='.get_staff_user_id().')';
                }
                ?>
              </div>
              <div class="col-md-12 row _filters _hidden_inputs center">
                <?php
                echo form_hidden('my_projects');
                foreach($statuses as $status){
                  $value = $status['id'];
                    if($status['filter_default'] == false && !$this->input->get('status')){
                      $value = '';
                    } else if($this->input->get('status')) {
                      $value = ($this->input->get('status') == $status['id'] ? $status['id'] : "");
                    }
                    echo form_hidden('project_status_'.$status['id'],$value);
                  ?>
                  <?
                    $companyusername = $_SESSION['current_company'];
                  ?>
                  <div class="col-md-2 col-xs-6 border-right">
                  <?php $where = ($_where == '' ? '' : $_where.' AND ').'status = '.$status['id']." AND company_username = '$companyusername'"; ?>

                  <a href="#" onclick="dt_custom_view('project_status_<?php echo $status['id']; ?>','.table-projects','project_status_<?php echo $status['id']; ?>',true); return false;">
                    <h3 class="bold"><?php echo total_rows(db_prefix().'projects',$where); ?></h3>
                    <span style="color:<?php echo $status['color']; ?>" project-status-<?php echo $status['id']; ?>">
                    <?php echo $status['name']; ?>
                    </span>
                  </a>
                </div>
                <?php } ?>
              </div>
            <div class="clearfix"></div>
            <hr class="hr-panel-heading" />
            <?php echo form_hidden('custom_view'); ?>
            <?php $this->load->view('admin/projects/table_html'); ?>
        </div>
        </div>
      </div>
    </div>
  </div>
</div>
<?php $this->load->view('admin/projects/copy_settings'); ?>
<?php init_tail(); ?>
<script>
function custom_view(){
  var view = $('#select-filter').val();
  dt_custom_view(view,'.table-projects',view);
}

$(function(){
     var ProjectsServerParams = {};

     $.each($('._hidden_inputs._filters input'),function(){
         ProjectsServerParams[$(this).attr('name')] = '[name="'+$(this).attr('name')+'"]';
     });

     initDataTable('.table-projects', admin_url+'projects/table', undefined, undefined, ProjectsServerParams, <?php echo hooks()->apply_filters('projects_table_default_order', json_encode(array(5,'asc'))); ?>);

     init_ajax_search('customer', '#clientid_copy_project.ajax-search');
});
</script>
</body>
</html>
