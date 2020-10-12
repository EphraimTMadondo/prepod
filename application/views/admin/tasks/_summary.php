<?php defined('BASEPATH') or exit('No direct script access allowed'); ?>
<h4 class="mbot15"><?php echo _l('tasks_summary'); ?></h4>
<div class="row">
  <?php 
       
  foreach(tasks_summary_data((isset($rel_id) ? $rel_id : null),(isset($rel_type) ? $rel_type : null)) as $summary){ ?>
    <div class="col-md-2 col-xs-6 border-right">
      <h3 class="bold no-mtop"><?php echo $summary['total_tasks']; ?></h3>
<<<<<<< HEAD
      <p style="color:<?php echo $summary['color']; ?>" class="font-medium mb-0">
        <?php echo $summary['name']; ?>
      </p>
      <p class="font-medium-xs mb-0 text-muted">
=======
      <p style="color:<?php echo $summary['color']; ?>" class="font-medium no-mbot">
        <?php echo $summary['name']; ?>
      </p>
      <p class="font-medium-xs no-mbot text-muted">
>>>>>>> d71d750e00250050260fb71bf92c645d4ca43ed1
        <?php echo _l('tasks_view_assigned_to_user'); ?>: <?php echo $summary['total_my_tasks']; ?>
      </p>
    </div>
    <?php } ?>
  </div>
<<<<<<< HEAD
  <hr class="hr-panel-heading" />
=======
  <hr class="hr-panel-heading" />
>>>>>>> d71d750e00250050260fb71bf92c645d4ca43ed1
