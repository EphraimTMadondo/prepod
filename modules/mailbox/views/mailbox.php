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
                                            <label for="checkboxsmall"></label>
                                            <input type="checkbox" id="checkboxsmall">
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
                        <?php 
                        if($group == 'compose' && !isset($type)){
                            $this->load->view('mailbox/mailbox_compose'); 
                        } else if($group == 'compose' && $type=='reply'){
                            $this->load->view('mailbox/mailbox_reply'); 
                        } else if($group == 'detail' && $type=='inbox'){
                            $this->load->view('mailbox/mailbox_detail'); 
                        } else if($group == 'detail' && $type=='outbox'){
                            $this->load->view('mailbox/mailbox_detail_outbox'); 
                        } else if($group == 'config'){
                            $this->load->view('mailbox/mailbox_config'); 
                        } else {?>
                            <?php
                                $table_data = array();
                                $obj = array(
                                    'name'=>_l('mailbox_from'),
                                    'th_attrs'=>array('class'=>'toggleable', 'id'=>'th-mailbox-from')
                                );
                                if($group == 'sent'){
                                $obj = array(
                                    'name'=>_l('mailbox_to'),
                                    'th_attrs'=>array('class'=>'toggleable', 'id'=>'th-mailbox-to')
                                );
                                }
                                $_table_data = array(
                                '<span class="hide"> - </span><div class="checkbox mass_select_all_wrap"><input type="checkbox" id="mass_select_all" data-to-table="mailbox"><label></label></div>',                                                                             
                                    $obj
                                ,
                                    array(
                                    'name'=>_l('mailbox_subject'),
                                    'th_attrs'=>array('class'=>'toggleable', 'id'=>'th-mailbox-subject')
                                ),
                                    array(
                                    'name'=>_l('mailbox_date'),
                                    'th_attrs'=>array('class'=>'toggleable', 'id'=>'th-mailbox-date')
                                ),                                        
                                );
                                foreach($_table_data as $_t){
                                array_push($table_data,$_t);
                                }                                     

                                $table_data = hooks()->apply_filters('mailbox_table_columns', $table_data);

                                render_datatable($table_data,'mailbox',[],[
                                    'data-last-order-identifier' => 'mailbox',
                                    'data-default-order'         => get_table_last_order('mailbox'),
                                ]);
                                ?>
                        <?php } ?>
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