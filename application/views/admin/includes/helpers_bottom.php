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
input.tagit-hidden-field {
    display: none;
}

.h5, h5 {
    font-size: 14px;
}

.tagsinput, input#tags {
    width: 100%;
    opacity: 0;
    height: 31.56px;
}


button, input, select, textarea {
    font-family: inherit;
    font-size: inherit;
    line-height: inherit;
}
.modal-content {
    position: relative;
    display: flex;
    flex-direction: column;
    width: 100%;
    pointer-events: auto;
    background-color: #FFFFFF;
    background-clip: padding-box;
    border: none solid rgba(0, 0, 0, 0.2);
    border-radius: 0.267rem;
    outline: 0;
}
.modal-body {
    position: relative;
    padding: 15px;
    padding-top: 0px;
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
.task-info-heading {
    font-size: 15px;
}
.task-info-created small {
    font-size: 85%;
}
.h3, .h4, h3, h4 {
    /* font-weight: 400; */
}

form.dropzone {
    background-color: #fbfdff;
    border: 1px dashed #c0ccda;
    border-radius: 6px;
}

.dropzone .dz-message {
    /* margin-top: 45px; */
    color: #03a9f4;
}

.dropzone .dz-message {
    text-align: center;
    margin: 2em 0;
}

html {
    font-size: 15px;
    height: 100%;
    letter-spacing: 0.01rem;
}
.fa {
    /* display: inline-block; */
    /* font: normal normal normal 14px/1 FontAwesome; */
    /* font-size: inherit; */
    /* text-rendering: auto; */
    -webkit-font-smoothing: antialiased;
    -moz-osx-font-smoothing: grayscale;
}
.task-modal-single .trigger i {
    font-size: 10px;
}

.task-single-col-right .task-menu-options {
    position: absolute;
    margin-top: 10px;
    right: 10px;
}
.h4, .h5, .h6, h4, h5, h6 {
    margin-top: 10px;
    margin-bottom: 10px;
}
.task-single-col-left {
    padding: 25px;
    background: #fff;
    min-height: 600px;
    border-bottom-left-radius: 6px;
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
    width: 100%;
}

.mbot10 {
    margin-bottom: 10px;
}   

.disabled, :disabled {
    color: #828D99 !important;
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
