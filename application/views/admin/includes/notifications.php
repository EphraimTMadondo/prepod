<?php defined('BASEPATH') or exit('No direct script access allowed'); ?>
<style>

.width400 {
  width: 400px;
}

.dropup, .dropright, .dropdown, .dropleft {
  position: relative;
}



.dropdown-menu {
  position: absolute;
  top: 100%;
  left: 0;
  z-index: 1000;
  display: none;
  float: left;
  min-width: 160px;
  padding: 5px 0;
  margin: 2px 0 0;
  font-size: 14px;
  text-align: left;
  list-style: none;
  background-color: #fff;
  background-clip: padding-box;
  border: 1px solid #ccc;
  border: 1px solid rgba(0,0,0,.15);
  border-radius: 4px;
  -webkit-box-shadow: 0 6px 12px rgba(0,0,0,.175);
  box-shadow: 0 6px 12px rgba(0,0,0,.175);
}
</style>
<style>
.navbar-right .dropdown-menu {
  right: 0;
  left: auto;
}
.notification-box {
    padding: 10px 10px;
    border-bottom: 1px solid #f0f0f0;
}
.navbar-right .dropdown-menu.notifications li:last-child {
    padding: 15px;
    font-weight: 500;
    text-align: center;
}

.notification-wrapper:hover
{
  background: #e4e8f1;
}

</style>

  <i class="fa fa-bell-o fa-fw fa-lg"></i>
  <?php if($current_user->total_unread_notifications > 0){ ?>
  <?php } ?>
</a>
<ul style = "right: 0;
    left: auto;padding: 0px 0;" class="dropdown-menu notifications animated fadeIn width400" data-total-unread="<?php echo $current_user->total_unread_notifications; ?>">
  <li class="not_mark_all_as_read" style = "background-color: #5A8DEE; padding: 8px 12px 6px;" >
    <a href="#" style = "color:white" onclick="mark_all_notifications_as_read_inline(); return false;"><?php echo _l('mark_all_as_read'); ?></a>
  </li>

  <?php
  $_notifications = $this->misc_model->get_user_notifications();
  $limit = 0;
  foreach($_notifications as $notification){ 
    if($limit < 4)
    {
    ?>
    <li class="relative notification-wrapper" data-notification-id="<?php echo $notification['id']; ?>">
      <?php if(!empty($notification['link'])){ ?>
        <a href="<?php echo admin_url($notification['link']); ?>" class="notification-top notification-link">
        <?php } ?>
        <div class="notification-box<?php if($notification['isread_inline'] == 0){echo ' unread';} ?>">
          <?php
          if(($notification['fromcompany'] == NULL && $notification['fromuserid'] != 0) || ($notification['fromcompany'] == NULL && $notification['fromclientid'] != 0)){
            if($notification['fromuserid'] != 0){
             echo staff_profile_image($notification['fromuserid'],array('staff-profile-image-small','img-circle notification-image','pull-left'));
           } else {
            echo '<img src="'.contact_profile_image_url($notification['fromclientid']).'" class="client-profile-image-small img-circle pull-left notification-image">';
          }
        }
        ?>
        <div class="media-body" style = "padding-top: 2%;
    padding-bottom: 2%;">
          <?php
          $additional_data = '';
          if(!empty($notification['additional_data'])){
            $additional_data = unserialize($notification['additional_data']);

            $i = 0;
            foreach($additional_data as $data){
              if(strpos($data,'<lang>') !== false){
                $lang = get_string_between($data, '<lang>', '</lang>');
                $temp = _l($lang);
                if(strpos($temp,'project_status_') !== FALSE){
                  $status = get_project_status_by_id(strafter($temp, 'project_status_'));
                  $temp = $status['name'];
                }
                $additional_data[$i] = $temp;
              }
              $i++;
            }
          }
          $description = _l($notification['description'], $additional_data);
          if(($notification['fromcompany'] == NULL && $notification['fromuserid'] != 0)
            || ($notification['fromcompany'] == NULL && $notification['fromclientid'] != 0)){
           if($notification['fromuserid'] != 0){
            $description = $notification['from_fullname']. ' - ' . $description;
          } else {
            $description = $notification['from_fullname']. ' - ' . $description . '<br /><span class="label inline-block mtop5 label-info">'._l('is_customer_indicator').'</span>';
          }
        }
        echo '<span class="notification-title">'. $description .'</span>'; ?><br />
        <small class="text-muted">
          <span class="text-has-action" data-placement="right" data-toggle="tooltip" data-title="<?php echo _dt($notification['date']); ?>">
            <?php echo time_ago($notification['date']); ?>
          </span>
        </small>
      </div>
    </div>
    <?php if(!empty($notification['link'])){ ?>
    </a>
  <?php } ?>
  <?php if($notification['isread_inline'] == 0){ ?>
    <a href="#" class="text-muted pull-right not-mark-as-read-inline" onclick="set_notification_read_inline(<?php echo $notification['id']; ?>);" data-placement="left" data-toggle="tooltip" data-title="<?php echo _l('mark_as_read'); ?>"><small><i class="fa fa-circle-thin" aria-hidden="true"></i></small></a>
  <?php } ?>
</li>

  
<?php
    $limit++;
  }
} ?>
<?php if(count($_notifications) != 0){ ?>
  
<?php } ?>
<li class="text-center" style = "
    padding: 8px 16px;
    color: #333;
">
  <?php if(count($_notifications) > 0){ ?>
    <a href="<?php echo admin_url('profile?notifications=true'); ?>"><?php echo _l('nav_view_all_notifications'); ?></a>
  <?php } else { ?>
    <?php echo _l('nav_no_notifications'); ?>
  <?php } ?>
</li>
</ul>
