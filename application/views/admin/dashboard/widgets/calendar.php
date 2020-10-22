<?php defined('BASEPATH') or exit('No direct script access allowed'); ?>
<div class="widget" id="widget-<?php echo basename(__FILE__,".php"); ?>" data-name="<?php echo _l('calendar'); ?>">
  <div class="clearfix"></div>
  <div class="card">
   <div class="card-body">
    <div class="widget-dragger"></div>
    <div class="dt-loader hide"></div>
    <?php $this->load->view('admin/utilities/calendar_filters'); ?>
    <div id="calendar"></div>
  </div>
</div>
<div class="clearfix"></div>
</div>
