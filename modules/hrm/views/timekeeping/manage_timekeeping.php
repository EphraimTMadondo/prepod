<?php defined('BASEPATH') or exit('No direct script access allowed'); ?>
<?php init_head(true, "hrm"); ?>
<!-- BEGIN: Content-->
<div class="app-content content">
    <div class="content-overlay"></div>
    <div class="content-wrapper">
    <div class="row">
     <?php if($this->session->flashdata('debug')){ ?>
       <div class="col-lg-12">
        <div class="alert alert-warning">
         <?php echo $this->session->flashdata('debug'); ?>
       </div>
     </div>
   <?php } ?>
   <div class="card col-md-2">
    <ul class="nav nav-pills mt-1 flex-column">
      <?php
      $i = 0;
      foreach($tab as $t){
        ?>
        <li class=" nav-item">
        <a class="nav-link <?php if($t == $group){echo 'active'; } ?>" href="<?php echo admin_url('hrm/timekeeping?group='.$t); ?>" data-group="<?php echo htmlspecialchars($t); ?>">
          <?php
          if ($t == 'manage_dayoff') {
            echo '<i class=" fa fa-hotel"></i> '._l($t);
          }elseif ($t == 'allocate_shiftwork') {
            echo '<i class=" fa fa-fax"></i> '._l($t);
          }elseif ($t == 'table_shiftwork') {
            echo '<i class=" fa fa-table"></i> '._l($t);
          }
          ?>
          </a>
        </li>
        <?php $i++; } ?>
      </ul>
  </div>

  <div class="col-md-10">
    <div class="card">
     <div class="card-body">
      <?php $this->load->view($tabs['view']); ?>
      
    </div>
  </div>
</div>
<div class="clearfix"></div>
</div>
<?php echo form_close(); ?>
<div class="btn-bottom-pusher"></div>
</div>
</div>
<div id="new_version"></div>
<?php init_tail("hrm"); ?>
<?php hooks()->do_action('settings_tab_footer', $tab); ?>
</body>
</html>
