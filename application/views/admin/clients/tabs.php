<?php defined('BASEPATH') or exit('No direct script access allowed'); ?>
<style>

.nav {
    flex-wrap: nowrap;
    display: block;
}

navbar-pills-flat {
    background: #fff;
    -webkit-box-shadow: 0 1px 15px 1px rgba(90,90,90,.08);
    /* box-shadow: 0 1px 15px 1px rgba(90,90,90,.08); */
}

</style>
<ul class="nav nav-tabs" role="tablist">
  <?php
  foreach(filter_client_visible_tabs($customer_tabs) as $key => $tab){
    ?>
    <li class="nav-item">
      <a class="nav-link <?php if($key == 'profile'){echo 'active ';} ?>" data-group="<?php echo $key; ?>" href="<?php echo admin_url('clients/client/'.$client->userid.'?group='.$key); ?>">
        <?php if(!empty($tab['icon'])){ ?>
            <i class="<?php echo $tab['icon']; ?> menu-icon" aria-hidden="true"></i>
        <?php } ?>
        <?php echo $tab['name']; ?>
      </a>
    </li>
  <?php } ?>
</ul>
