<?php defined('BASEPATH') or exit('No direct script access allowed'); ?>
<div class="col-md-12">
  <div class="card mb-1 mt-2">
    <div class="card-body _buttons">
      <?php $this->load->view('admin/estimates/estimates_top_stats');
      ?>
      <?php if(has_permission('estimates','','create')){ ?>
      <a href="<?php echo admin_url('estimates/estimate'); ?>" class="btn btn-primary new new-estimate-btn"><?php echo _l('create_new_estimate'); ?></a>
      <?php } ?>
      <a href="<?php echo admin_url('estimates/pipeline/'.$switch_pipeline); ?>" class="btn btn-primary switch-pipeline hidden-xs"><?php echo _l('switch_to_pipeline'); ?></a>
      <a href="#" class="btn btn-primary float-right btn-with-tooltip estimates-total" onclick="slideToggle('#stats-top'); init_estimates_total(true); return false;" data-toggle="tooltip" title="<?php echo _l('view_stats_tooltip'); ?>"><i class="bx bx-bar-chart"></i></a>
    </div>
    <div class="card-body">
        <!-- if estimateid found in url -->
        <?php echo form_hidden('estimateid',$estimateid); ?>
        <?php $this->load->view('admin/estimates/table_html'); ?>
      </div>
  </div>
</div>
