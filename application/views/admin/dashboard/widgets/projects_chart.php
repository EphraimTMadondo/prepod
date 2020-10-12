<?php defined('BASEPATH') or exit('No direct script access allowed'); ?>
<div class="widget" id="widget-<?php echo basename(__FILE__,".php"); ?>" data-name="<?php echo _l('s_chart',_l('projects')); ?>">
  <div class="row">
    <div class="col-md-12">
      <div class="card">
          <div class="card-header">
              <h4 class="card-title"><?php echo _l('home_stats_by_project_status'); ?></h4>
          </div>
          <div class="card-content">
              <div class="card-body">
                <div class="height-300">
                    <canvas id="projects_status_stats"></canvas>
                </div>
              </div>
          </div>
      </div>
   </div>
 </div>
</div>
