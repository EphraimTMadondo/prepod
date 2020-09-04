<?php defined('BASEPATH') or exit('No direct script access allowed'); ?>
<!-- Timeline Widget Starts -->
<div  class="widget<?php if(count($projects_activity) == 0){echo ' hide';} ?>" id="widget-<?php echo basename(__FILE__,".php"); ?>" data-name="<?php echo _l('home_project_activity'); ?>">
  <div class="card ">
      <div class="card-header">
          <h4 class="card-title">
            <?php echo _l('home_project_activity'); ?>
          </h4>
      </div>
      <div class="card-content">
          <div class="card-body">
              <ul class="widget-timeline">
              <?php
                foreach($projects_activity as $activity){
                  $name = $activity['fullname'];
                  if($activity['staff_id'] != 0){
                  $href = admin_url('profile/'.$activity['staff_id']);
                  } else if($activity['contact_id'] != 0){
                    $name = '<span class="label label-info inline-block mright5">'._l('is_customer_indicator') . '</span> - ' . $name;
                    $href = admin_url('clients/client/'.get_user_id_by_contact_id($activity['contact_id']).'?contactid='.$activity['contact_id']);
                  } else {
                  $href = '';
                  $name = '[CRON]';
                }?>
                  <li class="timeline-items timeline-icon-success active">
                      <div class="timeline-time">Mon 8:17pm</div>
                      <h6 class="timeline-title">Jonny Richie Commented</h6>
                      <p class="timeline-text">on <a href="JavaScript:void(0);">Project name</a></p>
                      <div class="timeline-content">
                          Story behind vedio game and lame is very creative
                      </div>
                  </li>
                <?php } ?>
              </ul>
              <!-- <button class="btn btn-block btn-primary">View All Notifications</button> -->
          </div>
      </div>
  </div>
</div>
<!-- Timeline Widget Ends -->
