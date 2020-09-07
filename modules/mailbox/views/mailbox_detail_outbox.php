<?php defined('BASEPATH') or exit('No direct script access allowed'); ?>
<!-- Detailed Email View -->
<div class="email-app-details show">
<?php
  $starred = "favorite";
  $important = "";            
  if($inbox->stared==1){
      $starred = "favorite warning";
  }
  if($inbox->important==1){
      $important = '<span class="badge badge-light-danger badge-pill ml-1">'._l('mailbox_mark_as_not_important').'</span>';
  }
?>
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
              <?php if($group== "detail"){
                  echo $title;
                } else {
                    echo _l('mailbox_'.$group);    
                }
              ?>
              <?php echo $important; ?>
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
                  <span class="no-of-list d-none d-sm-block ml-1">1-10 of 653</span>
              </li>
              <li class="list-inline-item">
                  <button class="btn btn-icon email-pagination-prev action-icon">
                      <i class='bx bx-chevron-left'></i>
                  </button>
              </li>
              <li class="list-inline-item">
                  <button class="btn btn-icon email-pagination-next action-icon">
                      <i class='bx bx-chevron-right'></i>
                  </button>
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
                                    <?php echo staff_profile_image($inbox->sender_staff_id, ['mr-2 rounded-circle',], '', ['width' => '30', 'height' => '30', 'alt' => 'avtar img holder']);?> 
                                  </div>
                              </div>
                              <div class="media-body mt-25">
                                  <span class="text-primary"><?php echo $inbox->sender_name;?></span>
                                  <span class="d-sm-inline d-none">to <?php echo $inbox->to;?></span>
                                  <small class="text-muted d-block">cc <?php echo $inbox->cc;?></small>
                              </div>
                          </div>
                          <div class="information d-sm-flex d-none align-items-center">
                              <small class="text-muted mr-50"><?php echo _dt($inbox->date_sent)?></small>
                              <span class="<?php echo $starred; ?>">
                                  <i class="bx bxs-star mr-25"></i>
                              </span>
                              <div class="dropdown">
                                  <a href="#" class="dropdown-toggle" id="third-open-menu" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                      <i class='bx bx-dots-vertical-rounded mr-0'></i>
                                  </a>
                                  <div class="dropdown-menu dropdown-menu-right" aria-labelledby="second-open-submenu">
                                      <a href="<?php echo admin_url().'mailbox/reply/'.$inbox->id.'/reply/outbox';?>" class="dropdown-item mail-reply">
                                          <i class='bx bx-share'></i>
                                          <?php echo _l('mailbox_reply'); ?>
                                      </a>
                                      <a href="<?php echo admin_url().'mailbox/reply/'.$inbox->id.'/forward/outbox';?>" class="dropdown-item">
                                          <i class='bx bx-redo'></i>
                                          <?php echo _l('mailbox_forward'); ?>  
                                      </a>
                                  </div>
                              </div>
                          </div>
                      </div>
                      <div id="collapse7" role="tabpanel" aria-labelledby="headingCollapse7" class="collapse show">
                          <div class="card-content">
                              <div class="card-body py-1">
                                <?php echo $inbox->body?>
                              </div>
                              <?php if($inbox->has_attachment > 0){?>
                              <div class="card-footer pt-0 border-top">
                                  <label class="sidebar-label"><?php echo _l('mailbox_file_attachment')?></label>
                                  <ul class="list-unstyled mb-0">
                                    <?php foreach($attachments as $attachment){ 
                                      $attachment_url = module_dir_url(MAILBOX_MODULE_NAME) .'uploads/'.$type.'/'. $inbox->id . '/'.$attachment['file_name'];
                                      ?>
                                      <li class="cursor-pointer pb-25" href="<?php echo $attachment_url; ?>">
                                          <img src="<?php echo base_url();?>assets/frest/app-assets/images/icon/<?php echo $attachment['file_name'];?>.png" height="30" alt="<?php echo $attachment['file_name'];?>.png">
                                          <small class="text-muted ml-1 attchement-text"><?php echo $attachment['file_name']; ?></small>
                                      </li>
                                    <?php }?>
                                  </ul>
                              </div>
                              <?php }?>
                          </div>
                      </div>
                  </div>
              </div>
          </div>
      </div>
      <!-- email details  end-->
  </div>
</div>
<!--/ Detailed Email View -->
<script>
  var mailid = <?php echo $inbox->id;?>;
  var mailtype = '<?php echo $type;?>';
</script>
