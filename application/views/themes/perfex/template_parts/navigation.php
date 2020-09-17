<?php defined('BASEPATH') or exit('No direct script access allowed'); ?>
    <?php  
    if(isset($_SERVER['HTTPS']) && $_SERVER['HTTPS'] === 'on')   
         $url = "https://";   
    else  
         $url = "http://";   
    // Append the host(domain name, ip) to the URL.   
    $url.= $_SERVER['HTTP_HOST'];   
    
    // Append the requested resource location to the URL   
    $url.= $_SERVER['REQUEST_URI'];    
      

  ?>   
 <?php
                    if($url == "https://www.worksuite.app/os/authentication/login" || $url == "https://worksuite.app/os/authentication/login" || $url == "https://worksuite.app/os/authentication/login_admin" || $url == "https://www.worksuite.app/os/authentication/register"|| $url =="https://worksuite.app/os/authentication/register" || $url == "https://worksuite.app/os/authentication/login"||$url =="https://worksuite.app/os/authentication/register2" || $url == "https://worksuite.app/os/authentication/register3" ) { ?>
<nav class="navbar navbar-default header" style ="background-color: #f9fafb !IMPORTANT;background: none; margin-bottom:0px">
    <?php

}
else
{

?>

<nav class="navbar navbar-default header">


<?php
}
?>
<style>

#login_btn
{
    background-color: #006FB8 !important;
    color: white  !important;
}

#reg_btn
{
    
    background-color: #006FB8 !important;
    color: white  !important;
}

.menu-text
{
    
    color: #006FB8 !important;
    
}

li.customers-nav-item-register a:not(.menu-text) {
    color: #006fb8 !important;
    display: none;
}
    
.navbar-nav>li>a {
    color: #006FB8;
    line-height: 62px;
    font-size: 15px;
}
    
.navbar-default{
    background:transparent;
}
.customers-nav-item-knowledge-base a{
    color: #006fb8 !important;
}
.navbar-default .navbar-nav>li.customers-nav-item-login>a {
    background: #006fb8 !important;
    color:#f9fafb !important;
}
.navbar-default .navbar-nav>li.customers-nav-item-login>a:active, .navbar-default .navbar-nav>li.customers-nav-item-login>a:hover {
    background: #006fb8 !important;
}
h1.text-uppercase.register-heading {
    color: #006fb8;
}
#submitBtn{
    background:#006fb8;
}
#submitBtn:hover{
    background:#03a9f4;
}

.dead-center {
    margin: 0;
    position: absolute;
    top: 50%;
    -ms-transform: translateY(-50%);
    transform: translateY(-50%);
    left: 0px;
    right: 0px;
}
body{
    min-height:100vh;
    background:#f9fafb;
}
#register_button{
    margin: 30px 0px;
    background-color: #006fb8;
}
</style>
    
    
    

   <?php
                    if($url == "https://www.worksuite.app/os/authentication/login" || $url == "https://worksuite.app/os/authentication/login" || $url == "https://worksuite.app/os/authentication/login_admin" || $url == "https://www.worksuite.app/os/authentication/register"|| $url =="https://worksuite.app/os/authentication/register" || $url == "https://worksuite.app/os/authentication/login"||$url =="https://worksuite.app/os/authentication/register2" || $url == "https://worksuite.app/os/authentication/register3" ) { ?>
<div class="container">
    <?php

}
else
{

?>

<div class="container" >


<?php
}
?>
   
      <!-- Brand and toggle get grouped for better mobile display -->
      <div class="navbar-header">
         <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#theme-navbar-collapse" aria-expanded="false">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
         </button>
         <?php get_company_logo('','navbar-brand logo'); ?>
      </div>
      <!-- Collect the nav links, forms, and other content for toggling -->
      <div class="collapse navbar-collapse" id="theme-navbar-collapse">
         <ul class="nav navbar-nav navbar-right">
            <?php hooks()->do_action('customers_navigation_start'); ?>
            <?php
              if($url == "https://www.worksuite.app/os/authentication/register"|| $url =="https://worksuite.app/os/authentication/register"  || $url == "https://worksuite.app/os/authentication/register3")
                     { ?>
                       <li class="customers-nav-item-register">
                     <a  class = "menu-text" >Already a Worksuite user?</a>
                     </li>
                
                    <?php   
                     } ?>
            <?php
            if($url == "https://www.worksuite.app/os/authentication/register2"|| $url =="https://worksuite.app/os/authentication/register2"){?>
                <li class="customers-nav-item-register">
                    <a  class = "menu-text" >Already a Worksuite user?</a>
                </li>
            <?php }?>
            <?php
            if($url == "https://www.worksuite.app/os/authentication/login" || $url == "https://worksuite.app/os/authentication/login"){?>
                <li class="customers-nav-item-register">
                    <a  class = "menu-text" >Not yet a Worksuite user?</a>
                </li>
                <li class="customers-nav-item-register">
                        <button id="register_button" onclick="myFunction()" type="button" class="btn btn-primary">Register</button>
                        <script>
                            function myFunction(){
                                window.open("https://worksuite.app/os/authentication/register","_self");
                            }
                        </script>
                </li>
            <?php }?>
            <?php foreach($menu as $item_id => $item) { ?>
               <li class="customers-nav-item-<?php echo $item_id; ?>"
                  <?php echo _attributes_to_string(isset($item['li_attributes']) ? $item['li_attributes'] : []); ?>>
                   
                  <a href="<?php echo $item['href'];?>"
                    <?php if($item_id == 'login' && ($url == "https://www.worksuite.app/os/authentication/login" || $url == "https://worksuite.app/os/authentication/login" || $url == "https://worksuite.app/os/authentication/login_admin"))
                     {
                      
                       echo  "style = 'display: none'";
                     }
                     if($item_id == 'login' && ($url == "https://www.worksuite.app/os/authentication/register"|| $url =="https://worksuite.app/os/authentication/register" || $url =="https://worksuite.app/os/authentication/register2" || $url == "https://worksuite.app/os/authentication/register3"))
                     { 
                       
                       echo  "id = 'login_btn' class='login_button'";
                       
                     }
                     if($item_id == 'knowledge-base' &&($url == "https://www.worksuite.app/os/authentication/login"||$url ==  "https://www.worksuite.app/os/authentication/register" || $url == "https://worksuite.app/os/authentication/login" || $url == "https://worksuite.app/os/authentication/register" || $url == "https://worksuite.app/os/authentication/login_admin" || $url == "https://worksuite.app/os/authentication/register2"|| $url == "https://worksuite.app/os/authentication/register3" ))
                     {
                      
                       //echo  "class = 'menu-text'";
                       echo  "style = 'display: none'";
                     }
                     
                     
                     ?>
                     
                     <?php echo _attributes_to_string(isset($item['href_attributes']) ? $item['href_attributes'] : []); ?>>
                    
                     <?php
                     if(!empty($item['icon'])){
                        echo '<i class="'.$item['icon'].'"></i> ';
                     }
                     echo $item['name'];
                     ?>
                  </a>
               </li>
            <?php } ?>
                
            <?php hooks()->do_action('customers_navigation_end'); ?>
            <?php if(is_client_logged_in()) { ?>
               <li class="dropdown customers-nav-item-profile">
                  <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">
                     <img src="<?php echo contact_profile_image_url($contact->id,'thumb'); ?>" data-toggle="tooltip" data-title="<?php echo html_escape($contact->firstname . ' ' .$contact->lastname); ?>" data-placement="bottom" class="img avatar avata-sm mr-1">
                     <span class="caret"></span>
                  </a>
                  <ul class="dropdown-menu animated fadeIn">
                     <li class="customers-nav-item-edit-profile">
                        <a href="<?php echo site_url('clients/profile'); ?>">
                           <?php echo _l('clients_nav_profile'); ?>
                        </a>
                     </li>
                     <?php if($contact->is_primary == 1){ ?>
                        <li class="customers-nav-item-company-info">
                           <a href="<?php echo site_url('clients/company'); ?>">
                              <?php echo _l('client_company_info'); ?>
                           </a>
                        </li>
                     <?php } ?>
                     <?php if(can_logged_in_contact_update_credit_card()){ ?>
                        <li class="customers-nav-item-stripe-card">
                           <a href="<?php echo site_url('clients/credit_card'); ?>">
                              <?php echo _l('credit_card'); ?>
                           </a>
                        </li>
                     <?php } ?>
                     <?php if (is_gdpr() && get_option('show_gdpr_in_customers_menu') == '1') { ?>
                        <li class="customers-nav-item-announcements">
                           <a href="<?php echo site_url('clients/gdpr'); ?>">
                              <?php echo _l('gdpr_short'); ?>
                           </a>
                        </li>
                     <?php } ?>
                     <li class="customers-nav-item-announcements">
                        <a href="<?php echo site_url('clients/announcements'); ?>">
                           <?php echo _l('announcements'); ?>
                           <?php if($total_undismissed_announcements != 0){ ?>
                              <span class="badge"><?php echo $total_undismissed_announcements; ?></span>
                           <?php } ?>
                        </a>
                     </li>
                     <?php if(can_logged_in_contact_change_language()) {
                        ?>
                        <li class="dropdown-submenu pull-left customers-nav-item-languages">
                           <a href="#" tabindex="-1">
                              <?php echo _l('language'); ?>
                           </a>
                           <ul class="dropdown-menu dropdown-menu-left">
                              <li class="<?php if($client->default_language == ""){echo 'active';} ?>">
                                 <a href="<?php echo site_url('clients/change_language'); ?>">
                                    <?php echo _l('system_default_string'); ?>
                                 </a>
                              </li>
                              <?php foreach($this->app->get_available_languages() as $user_lang) { ?>
                                 <li <?php if($client->default_language == $user_lang){echo 'class="active"';} ?>>
                                    <a href="<?php echo site_url('clients/change_language/'.$user_lang); ?>">
                                       <?php echo ucfirst($user_lang); ?>
                                    </a>
                                 </li>
                              <?php } ?>
                           </ul>
                        </li>
                     <?php } ?>
                     <li class="customers-nav-item-logout">
                        <a href="<?php echo site_url('authentication/logout'); ?>">
                           <?php echo _l('clients_nav_logout'); ?>
                        </a>
                     </li>
                  </ul>
               </li>
            <?php } ?>
            <?php hooks()->do_action('customers_navigation_after_profile'); ?>
         </ul>
      </div>
      <!-- /.navbar-collapse -->
   </div>
   <!-- /.container-fluid -->
</nav>
