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
      <select class="selectpicker" id="select-filter" data-live-search="true" onChange="custom_view()" data-style="btn-primary">
          <option value="" data-tokens="<?php echo _l('estimates_list_all'); ?>"><?php echo _l('estimates_list_all'); ?></option>
          <option value="not_sent" data-tokens="<?php echo _l('not_sent_indicator'); ?>"><?php echo _l('not_sent_indicator'); ?></option>
          <option value="invoiced" data-tokens="<?php echo _l('estimate_invoiced'); ?>"><?php echo _l('estimate_invoiced'); ?></option>
          <option value="not_invoiced" data-tokens="<?php echo _l('estimates_not_invoiced'); ?>"><?php echo _l('estimates_not_invoiced'); ?></option>
          <?php foreach($estimate_statuses as $status){ ?>
            <option value="estimates_<?php echo $status; ?>" data-tokens="<?php echo format_estimate_status($status,'',false); ?>"><?php echo format_estimate_status($status,'',false); ?></option>
          <?php } ?>

          <?php if(count($estimates_sale_agents) > 0){ ?>
            <optgroup label="<?php echo _l('sale_agent_string'); ?>">
                  <?php foreach($estimates_sale_agents as $agent){ ?>
                      <option value="sale_agent_<?php echo $agent['sale_agent']; ?>" data-tokens="<?php echo $agent['full_name']; ?>"><?php echo $agent['full_name']; ?></option>
                  <?php } ?>
              </optgroup>
          <?php } ?>

          <?php if(count($estimates_years) > 0){ ?>
            <?php foreach($estimates_years as $year){ ?>
              <option value="year_<?php echo $year['year']; ?>" data-tokens="<?php echo $year['year']; ?>"><?php echo $year['year']; ?></option>
          <?php } ?>
        <?php } ?>
      </select>
      <a href="#" class="btn btn-primary float-right btn-with-tooltip estimates-total" onclick="slideToggle('#stats-top'); init_estimates_total(true); return false;" data-toggle="tooltip" title="<?php echo _l('view_stats_tooltip'); ?>"><i class="bx bx-bar-chart"></i></a>
    </div>
    <div class="card-body">
        <!-- if estimateid found in url -->
        <?php echo form_hidden('estimateid',$estimateid); ?>
        <?php $this->load->view('admin/estimates/table_html'); ?>
      </div>
  </div>
</div>
