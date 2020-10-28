<?php defined('BASEPATH') or exit('No direct script access allowed'); ?>

<ul class="nav nav-tabs" role="tablist"

style = 

"
   background: #fff;
    -webkit-box-shadow: 0 1px 15px 1px rgba(90,90,90,.08);
    flex-wrap: nowrap;
    display: block;
    background: transparent;

"

>
<?php


$actual_link = (isset($_SERVER['HTTPS']) && $_SERVER['HTTPS'] === 'on' ? "https" : "http") . "://$_SERVER[HTTP_HOST]$_SERVER[REQUEST_URI]";



?>
  <?php
  foreach(filter_client_visible_tabs($customer_tabs) as $key => $tab){
    ?>
    <li class="nav-item" style = "border-bottom: 1px solid #e5e5e5;
    border-bottom-width: 1px;
    border-bottom-style: solid;
    border-bottom-color: rgb(229, 229, 229);">

      <a class="nav-link <?php if(strpos($actual_link, $key)!=false){echo 'active ';} ?>" data-group="<?php echo $key; ?>" href="<?php echo admin_url('clients/client/'.$client->userid.'?group='.$key); ?>">
        <?php if(!empty($tab['icon'])){ ?>
            <i class="<?php echo $tab['icon']; ?> menu-icon" aria-hidden="true"></i>
        <?php } ?>
        <?php echo $tab['name']; ?>
      </a>
    </li>
  <?php } ?>
</ul>
