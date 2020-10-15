<?php defined('BASEPATH') or exit('No direct script access allowed'); ?>
<?php include_once(APPPATH . 'views/admin/includes/modals/post_likes.php'); ?>
<?php include_once(APPPATH . 'views/admin/includes/modals/post_comment_likes.php'); ?>
<div id="event"></div>
<div id="newsfeed" class="animated fadeIn hide" <?php if($this->session->flashdata('newsfeed_auto')){echo 'data-newsfeed-auto';} ?>>
</div>
<style>
            .modal .modal-content .modal-header {
            align-items: center;
        }
        
                .modal-header {
            display: block;
            background: #226faa;
            padding: 15px 30px;
        }
        
        .modal-title {
    margin: 0;
    line-height: 1.42857143;
    color: white;
}

.color-white, .color-white[href] {
    color: #fff;
}

.task-single-col-right {
    background: #f0f5f7;
    padding: 13px 20px;
    border-bottom-right-radius: 6px;
}

button, input, optgroup, select, textarea {
    margin: 0;
    font-family: inherit;
    font-size: inherit;
    line-height: inherit;
}

element.style {
    margin-right: 5px !important;
}

.pull-left {
    float: left!important;
}

.no-margin {
    margin: 0!important;
}

.task-info-inline-input-edit {
    margin-top: -1px;
    background: #f0f5f7;
    border: 0;
    outline: 0;
    -webkit-box-shadow: none;
    box-shadow: none;
    border-bottom: 1px dashed #bbb;
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
