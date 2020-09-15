<?php defined('BASEPATH') or exit('No direct script access allowed'); ?>
<div class="col-md-12">
  <div class="card mbot10">
   <div class="card-body _buttons">

    <?php if(has_permission('purchase','','create')){ ?>
     <a href="<?php echo admin_url('purchase/estimate'); ?>" class="btn btn-info pull-left new"><?php echo _l('create_new_estimate'); ?></a>
   <?php } ?>
  <div class="display-block text-right"> 
  
 
      
      

  <div class="clearfix"></div>



<a href="#" class="btn btn-default btn-with-tooltip toggle-small-view hidden-xs" onclick="toggle_small_estimate_view('.table-pur_estimates','#estimate'); return false;" data-toggle="tooltip" title="<?php echo _l('estimates_toggle_table_tooltip'); ?>"><i class="fa fa-angle-double-left"></i></a>

</div>
</div>
</div>
<div class="row">
  <div class="col-md-12" id="small-table">
    <div class="card">
      <div class="card-body">
        <!-- if estimateid found in url -->
        <?php echo form_hidden('estimateid',$estimateid); ?>
         <?php $this->load->view('quotations/table_html'); ?>
      </div>
    </div>
  </div>
  <div class="col-md-7 small-table-right-col">
    <div id="estimate" class="hide">
    </div>
  </div>
</div>
</div>
