<?php defined('BASEPATH') or exit('No direct script access allowed'); ?>
<?php init_head(); ?>
<!-- BEGIN: Content-->
<div class="app-content content">
	<div class="content-overlay"></div>
	<div class="content-wrapper">
  <div class="row">
    <div class="col-md-3">
      <div class="card">
        <div class="card-body">
          <ul class="nav nav-tabs flex-column">
            <?php
            $i = 0;
            foreach($tab as $group){
              ?>
              <li class="nav-item <?php if($i == 0){echo " active"; } ?>" >
              <a class="nav-link <?php if($i == 0){echo " active"; } ?>" href="<?php echo admin_url('assets/setting?group='.$group); ?>" data-group="<?php echo htmlspecialchars($group); ?>">
                <?php if($group == 'asset_group'){ echo '<i class="bx bx-customize"></i>'; }elseif($group == 'asset_unit'){echo '<i class="bx bx-cube"></i>';}elseif($group == 'asset_location'){echo '<i class="bx bx-navigation"></i>';}?>  <?php echo htmlspecialchars(_l($group)); ?></a>
              </li>
              <?php $i++; } ?>
          </ul>
        </div>
      </div>
    </div>
    <div class="col-md-9">
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
<?php init_tail(); ?>
<script>
  appValidateForm($('form'),{group_name:'required', unit_name:'required'});
</script>

</body>
</html>
