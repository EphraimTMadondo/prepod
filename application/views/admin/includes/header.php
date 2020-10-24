<?php defined('BASEPATH') or exit('No direct script access allowed');
ob_start();
?>
<!-- BEGIN: Body-->
<?php
   switch($page)
   {
      case 'task_list':
         echo "<body class='vertical-layout vertical-menu-modern semi-dark-layout content-left-sidebar todo-application navbar-sticky footer-static ' data-open='click' data-menu='vertical-menu-modern' data-col='content-left-sidebar' data-layout='semi-dark-layout'>\n";
      break;
      case 'mailbox':
         echo "<body class='vertical-layout vertical-menu-modern semi-dark-layout content-left-sidebar email-application navbar-sticky footer-static  ' data-open='click' data-menu='vertical-menu-modern' data-col='content-left-sidebar' data-layout='semi-dark-layout'>\n";
      break;
      default:
         echo "<body class='vertical-layout vertical-menu-modern semi-dark-layout 2-columns  navbar-sticky footer-static  ' data-open='click' data-menu='vertical-menu-modern' data-col='2-columns' data-layout='semi-dark-layout'>\n";
      break;
   }
?>

<?php hooks()->do_action('after_body_start'); ?>

<!-- BEGIN: Header-->
<div class="header-navbar-shadow"></div>
<style>
.fa-clock-o:before {
    content: "\f017";
}

#lightbox, .lightboxOverlay {
    z-index: 100002!important;
}

.lightbox {
    position: absolute;
    left: 0;
    width: 100%;
    z-index: 10000;
    font-weight: 400;
}

.system-popup {
    position: fixed;
    width: 100%;
    height: 100%;
    top: 0;
    left: 0;
    background: #fff;
    z-index: 99999;
    text-align: center;
}
.system-popup .popup-wrapper {
    width: 60%;
    margin: 0 auto;
    display: table;
    height: 100%;
    display: -webkit-box;
    display: -ms-flexbox;
    display: flex;
    -webkit-box-orient: vertical;
    -webkit-box-direction: normal;
    -ms-flex-direction: column;
    flex-direction: column;
    -webkit-box-align: center;
    -ms-flex-align: center;
    align-items: center;
    -webkit-box-pack: center;
    -ms-flex-pack: center;
    justify-content: center;
}

.system-popup .popup-message {
    font-family: Helvetica;
    font-weight: 600;
    font-size: 38px;
}

.system-popup .system-popup-close::before {
    -webkit-transform: rotate(45deg);
    transform: rotate(45deg);
}
.system-popup .system-popup-close {
    position: absolute;
    width: 60px;
    height: 60px;
    overflow: hidden;
    top: 30px;
    right: 150px;
    background: 0 0;
    border: 0;
    opacity: .2;
    outline: 0;
}

.system-popup .system-popup-close::after, .system-popup .system-popup-close::before {
    content: '';
    position: absolute;
    height: 3px;
    width: 100%;
    top: 50%;
    left: 0;
    margin-top: -1px;
    background: #000;
}



.h1, .h2, .h3, h1, h2, h3 {
    margin-top: 20px;
    margin-bottom: 10px;
}

.btn-light, .btn-light.hover, .btn-light:hover {
    color: #FFF;
  
}
button:not(:disabled), [type="button"]:not(:disabled), [type="reset"]:not(:disabled), [type="submit"]:not(:disabled) {
    cursor: pointer;
}

.system-popup .system-popup-close::before {
    -webkit-transform: rotate(45deg);
    transform: rotate(45deg);
}

.system-popup .system-popup-close::after {
    -webkit-transform: rotate(-45deg);
    transform: rotate(-45deg);
}

element.style {
}
.started-timers-top .top-dropdown-btn {
    display: block;
    padding-top: 8px;
    padding-bottom: 8px;
    font-size: 15px;
    min-width: 50%;
    margin: 0 auto;
    margin-top: 14px;
    border-radius: 3px!important;
}
.dropdown-menu .divider {
    height: 1px;
    margin: 9px 0;
    overflow: hidden;
    background-color: #e5e5e5;
}

.navbar-right .dropdown-menu {
    right: 0;
    left: auto;
}

.started-timers-top {
    padding: 15px!important;
}

.width350 {
    width: 350px;
}


   </style>
<nav class="header-navbar main-header-navbar navbar-expand-lg navbar navbar-with-menu fixed-top ">
   <div class="navbar-wrapper">
      <div class="navbar-container content">
            <div class="navbar-collapse" id="navbar-mobile">
               <div class="mr-auto float-left bookmark-wrapper d-flex align-items-center">
                  <ul class="nav navbar-nav">
                        <li class="nav-item mobile-menu d-xl-none mr-auto"><a class="nav-link nav-menu-main menu-toggle hidden-xs" href="#"><i class="ficon bx bx-menu"></i></a></li>
                  </ul>
                  <ul class="nav navbar-nav bookmark-icons">
                        <li class="nav-item d-none d-lg-block"><a class="nav-link" href="<?php echo base_url();?>admin/mailbox" data-toggle="tooltip" data-placement="top" title="Email"><i class="ficon bx bx-envelope"></i></a></li>
                        <li class="nav-item d-none d-lg-block"><a class="nav-link" href="<?php echo base_url();?>admin/tasks" data-toggle="tooltip" data-placement="top" title="Todo"><i class="ficon bx bx-check-circle"></i></a></li>
                        <li class="nav-item d-none d-lg-block"><a class="nav-link" href="<?php echo base_url();?>admin/utilities/calendar" data-toggle="tooltip" data-placement="top" title="Calendar"><i class="ficon bx bx-calendar-alt"></i></a></li>
                  </ul>
                  <ul class="nav navbar-nav">
                        <li class="nav-item d-none d-lg-block"><a class="nav-link bookmark-star"><i class="ficon bx bx-star warning"></i></a>
                           <div class="bookmark-input search-input">
                              <div class="bookmark-input-icon"><i class="bx bx-search primary"></i></div>
                              <input class="form-control input" type="text" placeholder="<?php echo _l('top_search_placeholder'); ?>" tabindex="0" data-search="template-search">
                              <ul class="search-list"></ul>
                           </div>
                        </li>
                  </ul>
               </div>
               <ul class="nav navbar-nav float-right">
                  <li class="dropdown dropdown-language nav-item"><a class="dropdown-toggle nav-link" id="dropdown-flag" href="#" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><span class="selected-language"><?php echo _l('language'); ?></span></a>
                        <div class="dropdown-menu" aria-labelledby="dropdown-flag">
                           <?php foreach($this->app->get_available_languages() as $user_lang) { ?>
                              <a class="dropdown-item" href="<?php echo admin_url('staff/change_language/'.$user_lang); ?>" data-language="en"><?php echo ucfirst($user_lang); ?></a>
                           <?php } ?>
                        </div>
                  </li>
                  <li class="nav-item d-none d-lg-block"><a class="nav-link nav-link-expand"><i class="ficon bx bx-fullscreen"></i></a></li>
                  <li class="nav-item nav-search"><a class="nav-link nav-link-search"><i class="ficon bx bx-search"></i></a>
                        <div class="search-input">
                           <div class="search-input-icon"><i class="bx bx-search primary"></i></div>
                           <input class="input" type="text" placeholder="<?php echo _l('top_search_placeholder'); ?>" tabindex="-1" data-search="template-search">
                           <div class="search-input-close"><i class="bx bx-x"></i></div>
                           <ul class="search-list"></ul>
                        </div>
                  </li>
                  <li style = "padding-top: 23;" class="dropdown nav-item icon header-timers timer-button" data-placement="bottom" data-toggle="tooltip" data-title="<?php echo _l('my_timesheets'); ?>">
      <a href="#" id="top-timers" class="dropdown-toggle top-timers" data-toggle="dropdown">
         <i class="fa fa-clock-o fa-fw fa-lg" aria-hidden="true"></i>
         <span class="label bg-success icon-total-indicator icon-started-timers<?php if ($totalTimers = count($startedTimers) == 0){ echo ' hide'; }?>">
            <?php echo count($startedTimers); ?>
         </span>
      </a>
      <ul class="dropdown-menu animated fadeIn started-timers-top width350" style = "right: 0;
    left: auto;" id="started-timers-top">
         <?php $this->load->view('admin/tasks/started_timers',array('startedTimers'=>$startedTimers)); ?>
      </ul>
   </li>
                  <li class="dropdown dropdown-notification nav-item notifications-wrapper" >
                     <a class="nav-link nav-link-label" href="#" data-toggle="dropdown"><i class="ficon bx bx-bell bx-tada bx-flip-horizontal"></i>
                     <?php if($current_user->total_unread_notifications > 0){ ?>
                        <span class="badge badge-pill badge-danger badge-up"><?php echo $current_user->total_unread_notifications; ?></span>
                     <?php } ?></a>
                     <?php $this->load->view('admin/includes/notifications'); ?>
                  </li>
                  <li class="dropdown dropdown-user nav-item"><a class="dropdown-toggle nav-link dropdown-user-link" href="#" data-toggle="dropdown">
                           <div class="user-nav d-sm-flex d-none"><span class="user-name"><?php echo get_staff_full_name(); ?></span><span class="user-status text-muted">Available</span></div><span>
                              <?php echo staff_profile_image($current_user->staffid, array('round'), 'small', array('height' => '40', 'width' => '40')); ?> 
                           </span>
                        </a>
                        <div class="dropdown-menu dropdown-menu-right pb-0">
                           <a class="dropdown-item" href="<?php echo admin_url('profile'); ?>"><i class="bx bx-user mr-50"></i> <?php echo _l('nav_my_profile'); ?></a>
                           <a class="dropdown-item" href="<?php echo admin_url('staff/edit_profile'); ?>"><i class="bx bx-user mr-50"></i> <?php echo _l('nav_edit_profile'); ?></a>
                           <a class="dropdown-item" href="<?php echo admin_url('staff/timesheets'); ?>"><i class="bx bx-check-square mr-50"></i> <?php echo _l('my_timesheets'); ?></a>
                           <div class="dropdown-divider mb-0"></div><a class="dropdown-item" href="#" onclick="logout(); return false;"><i class="bx bx-power-off mr-50"></i> <?php echo _l('nav_logout'); ?></a>
                        </div>
                  </li>
               </ul>
            </div>
      </div>
   </div>
</nav>
<!-- END: Header-->
