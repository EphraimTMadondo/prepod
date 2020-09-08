<?php defined('BASEPATH') or exit('No direct script access allowed'); ?>
<?php init_head(true, 'mailbox'); ?>

<!-- BEGIN: Content-->
<div class="app-content content">
    <div class="content-area-wrapper">
        <div class="sidebar-left">
            <div class="sidebar">
                <div class="sidebar-content email-app-sidebar d-flex">
                    <!-- sidebar close icon -->
                    <span class="sidebar-close-icon">
                        <i class="bx bx-x"></i>
                    </span>
                    <!-- sidebar close icon -->
                    <div class="email-app-menu">
                        <div class="form-group form-group-compose">
                            <!-- compose button  -->
                            <button type="button" class="btn btn-primary btn-block my-2 compose-btn">
                                <i class="bx bx-plus"></i>
                                Compose
                            </button>
                        </div>
                        <div class="sidebar-menu-list">
                            <!-- sidebar menu  -->
                            <div class="list-group list-group-messages">
                                <a href="<?php echo admin_url('mailbox?group=inbox'); ?>" class="list-group-item pt-0 <?php if($group == 'inbox'){echo 'active ';} ?>" id="inbox-menu">
                                    <div class="fonticon-wrap d-inline mr-25">
                                        <i class="livicon-evo" data-options="name: envelope-put.svg; size: 24px; style: lines; strokeColor:<?php if($group == 'inbox'){echo '#5A8DEE;';} else{ echo '#475f7b;';} ?> eventOn:grandparent; duration:0.85;">
                                        </i>
                                    </div>
                                    <?php echo _l('mailbox_inbox'); ?>
                                    <?php
                                        $num_unread = total_rows(db_prefix() . 'mail_inbox', ['read' => '0','to_staff_id' => get_staff_user_id()]);
                                        if($num_unread > 0){
                                    ?>
                                    <span class="badge badge-light-primary badge-pill badge-round float-right mt-50"><?php echo $num_unread; ?></span>
                                    <?php }  ?>
                                </a>
                                <a href="<?php echo admin_url('mailbox?group=sent'); ?>" class="list-group-item <?php if($group == 'sent'){echo 'active ';} ?>">
                                    <div class="fonticon-wrap d-inline mr-25">
                                        <i class="livicon-evo" data-options="name: paper-plane.svg; size: 24px; style: lines; strokeColor:<?php if($group == 'sent'){echo '#5A8DEE;';} else{ echo '#475f7b;';} ?> eventOn:grandparent; duration:0.85;">
                                        </i>
                                    </div>
                                    <?php echo _l('mailbox_sent'); ?>
                                </a>
                                <a href="<?php echo admin_url('mailbox?group=draft'); ?>" class="list-group-item <?php if($group == 'draft'){echo 'active ';} ?>">
                                    <div class="fonticon-wrap d-inline mr-25">
                                        <i class="livicon-evo" data-options="name: pen.svg; size: 24px; style: lines; strokeColor:<?php if($group == 'draft'){echo '#5A8DEE;';} else{ echo '#475f7b;';} ?> eventOn:grandparent; duration:0.85;">
                                        </i>
                                    </div> <?php echo _l('mailbox_draft'); ?>
                                </a>
                                <a href="<?php echo admin_url('mailbox?group=starred'); ?>" class="list-group-item <?php if($group == 'starred'){echo 'active ';} ?>">
                                    <div class="fonticon-wrap d-inline mr-25">
                                        <i class="livicon-evo" data-options="name: star.svg; size: 24px; style: lines; strokeColor:<?php if($group == 'starred'){echo '#5A8DEE;';} else{ echo '#475f7b;';} ?> eventOn:grandparent; duration:0.85;">
                                        </i>
                                    </div>
                                    <?php echo _l('mailbox_starred'); ?>
                                </a>
                                <a href="<?php echo admin_url('mailbox?group=trash'); ?>" class="list-group-item <?php if($group == 'trash'){echo 'active ';} ?>">
                                    <div class="fonticon-wrap d-inline mr-25">
                                        <i class="livicon-evo" data-options="name: trash.svg; size: 24px; style: lines; strokeColor:<?php if($group == 'trash'){echo '#5A8DEE;';} else{ echo '#475f7b;';} ?> eventOn:grandparent; duration:0.85;">
                                        </i>
                                    </div>
                                    <?php echo _l('mailbox_trash'); ?>
                                </a>
                                <a href="<?php echo admin_url('mailbox?group=config'); ?>" class="list-group-item <?php if($group == 'config'){echo 'active ';} ?>">
                                    <div class="fonticon-wrap d-inline mr-25">
                                        <i class="livicon-evo" data-options="name: gears.svg; size: 24px; style: lines; strokeColor:<?php if($group == 'config'){echo '#5A8DEE;';} else{ echo '#475f7b;';} ?> eventOn:grandparent; duration:0.85;">
                                        </i>
                                    </div>
                                    <?php echo _l('mailbox_config'); ?>
                                </a>
                            </div>
                            <!-- sidebar menu  end-->
                            <!-- sidebar label start -->
                            <label class="sidebar-label">Labels</label>
                                <div class="list-group list-group-labels ">
                                    <a href="<?php echo admin_url('mailbox?group=important'); ?>" class="list-group-item d-flex justify-content-between align-items-center">
                                        <?php echo _l('mailbox_important'); ?>
                                        <span class="bullet bullet-success bullet-sm"></span>
                                    </a>
                                </div>
                                <!-- sidebar label end -->
                        </div>
                    </div>
                </div>
                <!-- User new mail right area -->
                <div class="compose-new-mail-sidebar">
                    <div class="card shadow-none quill-wrapper p-0">
                        <div class="card-header">
                            <h3 class="card-title" id="emailCompose">New Message</h3>
                            <button type="button" class="close close-icon">
                                <i class="bx bx-x"></i>
                            </button>
                        </div>

                        <!-- form start -->
                        <?php echo form_open_multipart(admin_url().'mailbox/compose',array('id'=>'compose-form')); ?>        
                        <?php
                            $to = '';
                            $cc = '';
                            $subject = '';
                            $body = '';
                        ?>
                        <?php if(isset($mail)){        
                            $to = $mail->to;
                            $cc = $mail->cc;
                            $subject = $mail->subject;
                            $body = $mail->body;
                        }
                        ?>
                            <div class="card-content">
                                <div class="card-body pt-0">
                                    <!-- <div class="form-group pb-50">
                                        <label for="emailfrom">from</label>
                                        <input type="text" id="emailfrom" class="form-control" placeholder="user@example.com" disabled>
                                    </div> -->
                                    <div class="form-label-group">
                                        <input name="to" type="email" id="emailTo" class="form-control" placeholder="To" required>
                                        <label for="emailTo">To</label>
                                    </div>
                                    <div class="form-label-group">
                                        <input name="subject" type="text" id="emailSubject" class="form-control" placeholder="Subject">
                                        <label for="emailSubject">Subject</label>
                                    </div>
                                    <div class="form-label-group">
                                        <input name="cc" type="text" id="emailCC" class="form-control" placeholder="CC">
                                        <label for="emailCC">CC</label>
                                    </div>
                                    <!-- <div class="form-label-group">
                                        <input type="text" id="emailBCC" class="form-control" placeholder="BCC">
                                        <label for=gg"emailBCC">BCC</label>
                                    </div> -->
                                    <!-- Compose mail Quill editor -->
                                    <div class="snow-container border rounded p-50 ">
                                        <div class="compose-editor mx-75"></div>
                                        <div class="d-flex justify-content-end">
                                            <div class="compose-quill-toolbar pb-0">
                                                <span class="ql-formats mr-0">
                                                    <button class="ql-bold"></button>
                                                    <button class="ql-italic"></button>
                                                    <button class="ql-underline"></button>
                                                    <button class="ql-link"></button>
                                                    <button class="ql-image"></button>
                                                </span>
                                            </div>
                                        </div>
                                    </div>
                                    <textarea name="body" hidden id="hiddenBody"></textarea>
                                    <div class="form-group mt-2">
                                        <div class="custom-file">
                                            <input extension="<?php echo str_replace('.','',get_option('ticket_attachments_file_extensions')); ?>" filesize="<?php echo file_upload_max_size(); ?>" name="attachments[0]" accept="<?php echo get_ticket_form_accepted_mimes(); ?>" type="file" class="custom-file-input" id="emailAttach">
                                            <label class="custom-file-label" for="emailAttach">Attach file</label>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="card-footer d-flex justify-content-end pt-0">
                                <button type="reset" class="btn btn-light-secondary cancel-btn mr-1">
                                    <i class='bx bx-x mr-25'></i>
                                    <span class="d-sm-inline d-none">Cancel</span>
                                </button>
                                <?php if(!isset($mail)){?>   
                                    <!-- <button type="submit" name="sendmail" value="draft" class="btn-send btn btn-primary">
                                        <i class='bx bx-edit mr-25'></i> <span class="d-sm-inline d-none"><?php echo _l('mailbox_save_draft'); ?></span>
                                    </button> -->
                                <?php } ?>
                                <button type="submit" name="sendmail" value="outbox" class="btn-send btn btn-info">
                                    <i class='bx bx-send mr-25'></i> <span class="d-sm-inline d-none"><?php echo _l('mailbox_send'); ?></span>
                                </button>
                            </div>
                        <?php echo form_close(); ?>
                        <!-- form start end-->
                    </div>
                </div>
                <!--/ User Chat profile right area -->
            </div>
        </div>
        <div class="content-right">
            <div class="content-overlay"></div>
            <div class="content-wrapper">
                <div class="content-header row">
                </div>
                <div class="content-body">
                    <!-- email app overlay -->
                    <div class="app-content-overlay"></div>
                    <div class="email-app-area">
                        <!-- Email list Area -->
                        <div class="email-app-list-wrapper">
                            <div class="email-app-list">
                                <div class="email-action">
                                    <!-- action left start here -->
                                    <div class="action-left d-flex align-items-center">
                                        <!-- select All checkbox -->
                                        <div style="margin-top:-8" class="checkbox checkbox-shadow checkbox-sm selectAll mr-50">
                                            <input type="checkbox" id="checkboxsmall">
                                            <label for="checkboxsmall"></label>
                                        </div>
                                        <!-- delete unread dropdown -->
                                        <ul class="list-inline m-0 d-flex">
                                            <li class="list-inline-item mail-delete" >
                                                <button type="button" class="btn btn-icon action-icon">
                                                    <span class="fonticon-wrap">
                                                        <i class="livicon-evo" data-options="name: trash.svg; size: 24px; style: lines; strokeColor:#475f7b; eventOn:grandparent; duration:0.85;">
                                                        </i>
                                                    </span>
                                                </button>
                                            </li>
                                            <li class="list-inline-item mail-unread">
                                                <button type="button" class="btn btn-icon action-icon">
                                                    <span class="fonticon-wrap d-inline mr-25">
                                                        <i class="livicon-evo" data-options="name: envelope-put.svg; size: 24px; style: lines; strokeColor:#475f7b; eventOn:grandparent; duration:0.85;">
                                                        </i>
                                                    </span>
                                                </button>
                                            </li>
                                            <li class="list-inline-item">
                                                <div class="dropdown">
                                                    <button type="button" class="dropdown-toggle btn btn-icon action-icon" id="folder" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                                        <span class="fonticon-wrap">
                                                            <i class="livicon-evo" data-options="name: morph-folder.svg; size: 24px; style: lines; strokeColor:#475f7b; eventOn:grandparent; duration:0.85;">
                                                            </i>
                                                        </span>
                                                    </button>
                                                    <div class="dropdown-menu dropdown-menu-right" aria-labelledby="folder">
                                                        <a class="dropdown-item" href="#"><i class="bx bx-edit"></i> Draft</a>
                                                        <a class="dropdown-item" href="#"><i class="bx bx-trash"></i>Trash</a>
                                                    </div>
                                                </div>
                                            </li>
                                            <li class="list-inline-item">
                                                    <div class="dropdown">
                                                        <button type="button" class="btn btn-icon dropdown-toggle action-icon" id="tag" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                                            <span class="fonticon-wrap">
                                                                <i class="livicon-evo" data-options="name: tag.svg; size: 24px; style: lines; strokeColor:#475f7b; eventOn:grandparent; duration:0.85;">
                                                                </i>
                                                            </span>
                                                        </button>
                                                        <div class="dropdown-menu dropdown-menu-right" aria-labelledby="tag">
                                                            <a href="#" class="dropdown-item align-items-center">
                                                                <span class="bullet bullet-success bullet-sm"></span>
                                                                <span><?php echo _l('mailbox_important'); ?></span>
                                                            </a>
                                                        </div>
                                                    </div>
                                                </li>
                                        </ul>
                                    </div>
                                    <!-- action left end here -->

                                    <!-- action right start here -->
                                    <div class="action-right d-flex flex-grow-1 align-items-center justify-content-around">
                                        <!-- search bar  -->
                                        <div class="email-fixed-search flex-grow-1">
                                            <div class="sidebar-toggle d-block d-lg-none">
                                                <i class="bx bx-menu"></i>
                                            </div>
                                            <fieldset class="form-group position-relative has-icon-left m-0">
                                                <input type="text" class="form-control" id="email-search" placeholder="Search email">
                                                <div class="form-control-position">
                                                    <i class="bx bx-search"></i>
                                                </div>
                                            </fieldset>
                                        </div>
                                        <!-- pagination and page count -->
                                        <!-- <span class="d-none d-sm-block">1-10 of 653</span> -->
                                        <button class="btn btn-icon email-pagination-prev d-none d-sm-block">
                                            <i class="bx bx-chevron-left"></i>
                                        </button>
                                        <button class="btn btn-icon email-pagination-next d-none d-sm-block">
                                            <i class="bx bx-chevron-right"></i>
                                        </button>
                                    </div>
                                </div>
                                <!-- / action right -->

                                <!-- email user list start -->
                                <div class="email-user-list list-group">
                                    <ul class="users-list-wrapper media-list">
                                    <?php
                                        if($group == 'sent' || $group == 'draft'){
                                            $this->load->view('table_outbox', ['group' => $group]);
                                        } else {
                                            $this->load->view('table', ['group' => $group]);
                                        }
                                    ?>
                                    </ul>
                                    <!-- email user list end -->

                                    <!-- no result when nothing to show on list -->
                                    <div class="no-results">
                                        <i class="bx bx-error-circle font-large-2"></i>
                                        <h5>No Items Found</h5>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!--/ Email list Area -->

                        <!-- Detailed Email View -->
                        <div class="email-app-details">
                                <!-- email detail view header -->
                                <div class="email-detail-header">
                                    <div class="email-header-left d-flex align-items-center mb-1">
                                        <span class="go-back mr-50">
                                            <span class="fonticon-wrap d-inline">
                                                <i class="livicon-evo" data-options="name: chevron-left.svg; size: 32px; style: lines; strokeColor:#475f7b; eventOn:grandparent; duration:0.85;">
                                                </i>
                                            </span>
                                        </span>
                                        <h5 class="email-detail-title font-weight-normal mb-0">
                                            Advertising Internet Online
                                            <span class="badge badge-light-danger badge-pill ml-1">PRODUCT</span>
                                        </h5>
                                    </div>
                                    <div class="email-header-right mb-1 ml-2 pl-1">
                                        <ul class="list-inline m-0">
                                            <li class="list-inline-item">
                                                <button class="btn btn-icon action-icon">
                                                    <span class="fonticon-wrap">
                                                        <i class="livicon-evo" data-options="name: trash.svg; size: 24px; style: lines; strokeColor:#475f7b; eventOn:grandparent; duration:0.85;">
                                                        </i>
                                                    </span>
                                                </button>
                                            </li>
                                            <li class="list-inline-item">
                                                <button class="btn btn-icon action-icon">
                                                    <span class="fonticon-wrap">
                                                        <i class="livicon-evo" data-options="name: envelope-put.svg; size: 24px; style: lines; strokeColor:#475f7b; eventOn:grandparent; duration:0.85;">
                                                        </i>
                                                    </span>
                                                </button>
                                            </li>
                                            <li class="list-inline-item">
                                                <div class="dropdown">
                                                    <button class="btn btn-icon dropdown-toggle action-icon" id="open-mail-menu" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                                        <span class="fonticon-wrap">
                                                            <i class="livicon-evo" data-options="name: morph-folder.svg; size: 24px; style: lines; strokeColor:#475f7b; eventOn:grandparent; duration:0.85;">
                                                            </i>
                                                        </span>
                                                    </button>
                                                    <div class="dropdown-menu dropdown-menu-right" aria-labelledby="open-mail-menu">
                                                        <a class="dropdown-item" href="#"><i class="bx bx-edit"></i> Draft</a>
                                                        <a class="dropdown-item" href="#"><i class="bx bx-info-circle"></i> Spam</a>
                                                        <a class="dropdown-item" href="#"><i class="bx bx-trash"></i> Trash</a>
                                                    </div>
                                                </div>
                                            </li>
                                            <li class="list-inline-item">
                                                <div class="dropdown">
                                                    <button class="btn btn-icon dropdown-toggle action-icon" id="open-mail-tag" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                                        <span class="fonticon-wrap">
                                                            <i class="livicon-evo" data-options="name: tag.svg; size: 24px; style: lines; strokeColor:#475f7b; eventOn:grandparent; duration:0.85;">
                                                            </i>
                                                        </span>
                                                    </button>
                                                    <div class="dropdown-menu dropdown-menu-right" aria-labelledby="open-mail-tag">
                                                        <a href="#" class="dropdown-item align-items-center">
                                                            <span class="bullet bullet-success bullet-sm"></span>
                                                            Product
                                                        </a>
                                                    </div>
                                                </div>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                                <!-- email detail view header end-->
                                <div class="email-scroll-area">
                                    <!-- email details  -->
                                    <div class="row">
                                        <div class="col-12">
                                            <div class="collapsible email-detail-head">
                                                <div class="card collapse-header open" role="tablist">
                                                    <div id="headingCollapse7" class="card-header d-flex justify-content-between align-items-center" data-toggle="collapse" role="tab" data-target="#collapse7" aria-expanded="false" aria-controls="collapse7">
                                                        <div class="collapse-title media">
                                                            <div class="pr-1">
                                                                <div class="avatar mr-75">
                                                                    <img src="../../../app-assets/images/portrait/small/avatar-s-18.jpg" alt="avtar img holder" width="30" height="30">
                                                                </div>
                                                            </div>
                                                            <div class="media-body mt-25">
                                                                <span class="text-primary">Elnora Reese</span>
                                                                <span class="d-sm-inline d-none">&lt;elnora@gmail.com&gt;</span>
                                                                <small class="text-muted d-block">to Lois Jimenez</small>
                                                            </div>
                                                        </div>
                                                        <div class="information d-sm-flex d-none align-items-center">
                                                            <small class="text-muted mr-50">05 Jul 2019, 10:30</small>
                                                            <span class="favorite warning">
                                                                <i class="bx bxs-star mr-25"></i>
                                                            </span>
                                                            <div class="dropdown">
                                                                <a href="#" class="dropdown-toggle" id="third-open-menu" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                                                    <i class='bx bx-dots-vertical-rounded mr-0'></i>
                                                                </a>
                                                                <div class="dropdown-menu dropdown-menu-right" aria-labelledby="second-open-submenu">
                                                                    <a href="#" class="dropdown-item mail-reply">
                                                                        <i class='bx bx-share'></i>
                                                                        Reply
                                                                    </a>
                                                                    <a href="#" class="dropdown-item">
                                                                        <i class='bx bx-redo'></i>
                                                                        Forward
                                                                    </a>
                                                                    <a href="#" class="dropdown-item">
                                                                        <i class='bx bx-info-circle'></i>
                                                                        Report Spam
                                                                    </a>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div id="collapse7" role="tabpanel" aria-labelledby="headingCollapse7" class="collapse show">
                                                        <div class="card-content">
                                                            <div class="card-body py-1">
                                                                <p class="text-bold-500">Greetings!</p>
                                                                <p>
                                                                    It is a long established fact that a reader will be distracted by the readable content of a page
                                                                    when looking at its layout.The point of using Lorem Ipsum is that it has a more-or-less normal
                                                                    distribution of letters, as opposed to using 'Content here, content here',making it look like
                                                                    readable English.
                                                                </p>
                                                                <p>
                                                                    There are many variations of passages of Lorem Ipsum available, but the majority have suffered
                                                                    alteration in some form, by injected humour, or randomised words which don't look even slightly
                                                                    believable.
                                                                </p>
                                                                <p class="mb-0">Sincerely yours,</p>
                                                                <p class="text-bold-500">Envato Design Team</p>
                                                            </div>
                                                            <div class="card-footer pt-0 border-top">
                                                                <label class="sidebar-label">Attached Files</label>
                                                                <ul class="list-unstyled mb-0">
                                                                    <li class="cursor-pointer pb-25">
                                                                        <img src="../../../app-assets/images/icon/psd.png" height="30" alt="psd.png">
                                                                        <small class="text-muted ml-1 attchement-text">uikit-design.psd</small>
                                                                    </li>
                                                                    <li class="cursor-pointer">
                                                                        <img src="../../../app-assets/images/icon/sketch.png" height="30" alt="sketch.png">
                                                                        <small class="text-muted ml-1 attchement-text">uikit-design.sketch</small>
                                                                    </li>
                                                                </ul>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- email details  end-->
                                    <div class="row px-2 mb-4">
                                        <!-- quill editor for reply message -->
                                        <div class="col-12 px-0">
                                            <div class="card shadow-none border rounded">
                                                <div class="card-body quill-wrapper">
                                                    <span>Reply to Lois Jimenez</span>
                                                    <div class="snow-container" id="detail-view-quill">
                                                        <div class="detail-view-editor"></div>
                                                        <div class="d-flex justify-content-end">
                                                            <div class="detail-quill-toolbar">
                                                                <span class="ql-formats mr-50">
                                                                    <button class="ql-bold"></button>
                                                                    <button class="ql-italic"></button>
                                                                    <button class="ql-underline"></button>
                                                                    <button class="ql-link"></button>
                                                                    <button class="ql-image"></button>
                                                                </span>
                                                            </div>
                                                            <button class="btn btn-primary send-btn">
                                                                <i class='bx bx-send mr-25'></i>
                                                                <span class="d-none d-sm-inline"> Send</span>
                                                            </button>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        <!--/ Detailed Email View -->
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- END: Content-->
<?php init_tail('mailbox'); ?>
<script type="text/javascript">
	"use strict";

    // $(function(){
    //     //Added by Ephraim
    //     $.ajax({
    //         metho: "POST",
    //         url:admin_url + 'mailbox/table/<?php //echo $group;?>'
    //     }).done(function(response){
    //         var data = JSON.parse(response);
    //         var aaData = data["aaData"];
    //         aaData.map(row => {
    //             $('.users-list-wrapper').append(row);
    //         });
    //     })
    // });
</script>
</body>
</html>