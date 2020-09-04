<?php defined('BASEPATH') or exit('No direct script access allowed'); ?>
<div class="widget<?php if(!is_staff_member()){echo ' hide';} ?>" id="widget-<?php echo basename(__FILE__,".php"); ?>" data-name="<?php echo _l('s_chart',_l('leads')); ?>">
   <?php if(is_staff_member()){ ?>
   <div class="row">
      <div class="col-md-12">
         <div class="card">
            <div class="card-header">
               <h4 class="card-title"><?php echo _l('home_lead_overview'); ?></h4>
            </div>
            <div class="card-content">
               <div class="card-body">
                  <canvas class="chart" height="250" id="leads_status_stats"></canvas>
               </div>
            </div>
         </div>
      </div>
   </div>
   <?php } ?>
</div>
