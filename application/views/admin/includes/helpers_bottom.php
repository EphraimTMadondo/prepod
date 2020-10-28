<?php defined('BASEPATH') or exit('No direct script access allowed'); ?>
<?php include_once(APPPATH . 'views/admin/includes/modals/post_likes.php'); ?>
<?php include_once(APPPATH . 'views/admin/includes/modals/post_comment_likes.php'); ?>
<div id="event"></div>
<div id="newsfeed" class="animated fadeIn hide" <?php if($this->session->flashdata('newsfeed_auto')){echo 'data-newsfeed-auto';} ?>>
</div>
<style>
@media (min-width: 576px)
.modal-dialog {
    max-width: 640px;
    margin: 1.75rem auto;
}
  </style>
<!-- Task modal view -->
<div class="modal fade task-modal-single" id="task-modal" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel">
  <div class="modal-dialog <?php echo get_option('task_modal_class'); ?>">
    <div class="modal-content data">

    </div>
  </div>
</div>

<!--Add/edit task modal-->
<div id="_task"></div>

<!-- Lead Data Add/Edit-->
<?php
$actual_link = (isset($_SERVER['HTTPS']) && $_SERVER['HTTPS'] === 'on' ? "https" : "http") . "://$_SERVER[HTTP_HOST]$_SERVER[REQUEST_URI]";
if(strpos($actual_link, "admin/leads"))
{

  ?>
<style>
            .modal .modal-content .modal-header {
            align-items: center;
        }
        
                .modal-header {
            display: block;
            background: #226faa;
            padding: 15px 30px;
        }
        
        .modal-body {
    position: relative;
    padding: 15px;
}
.bootstrap-select>select {
    position: absolute!important;
    bottom: 0;
    left: 50%;
    display: block!important;
    width: .5px!important;
    height: 100%!important;
    padding: 0!important;
    opacity: 0!important;
    border: none;
    z-index: 0!important;
}

.bootstrap-select .btn-default {
    background: #fff!important;
    color: #415164!important;
    border: 1px solid #bfcbd9!important;
    -webkit-box-shadow: none;
    box-shadow: none;
    padding: 4px 10px;
    line-height: 2;
    height: 36px;
    text-transform: inherit;
    padding-left: 10px;
}

.h4
{
 color: white;
 }                                  
</style>
  <?php
}

?>
<div class="modal fade lead-modal" id="lead-modal" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel">
  <div class="modal-dialog <?php echo get_option('lead_modal_class'); ?>">
    <div class="modal-content data">

    </div>
  </div>
</div>

<div id="timers-logout-template-warning" class="hide">
  <h2 class="bold"><?php echo _l('timers_started_confirm_logout'); ?></h2>
  <hr />
  <a href="<?php echo admin_url('authentication/logout'); ?>" class="btn btn-danger"><?php echo _l('confirm_logout'); ?></a>
</div>

<!--Lead convert to customer modal-->
<div id="lead_convert_to_customer"></div>

<!--Lead reminder modal-->
<div id="lead_reminder_modal"></div>
