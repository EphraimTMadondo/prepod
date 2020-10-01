<?php defined('BASEPATH') or exit('No direct script access allowed'); ?>
<?php init_head(); ?><!-- BEGIN: Content-->
<div class="app-content content">
    <div class="content-overlay"></div>
    <div class="content-wrapper">
		<div class="row">
			<div class="col-md-12">
				<div class="card mt-2">
					<div class="card-body">
						<div class="_buttons">
							<?php if(is_admin()) { ?>
							<a href="<?php echo admin_url('announcements/announcement'); ?>" class="btn btn-primary"><?php echo _l('new_announcement'); ?></a>
							<div class="clearfix"></div>
							<hr class="hr-panel-heading" />
							<?php } else { echo '<h4 class="no-margin bold">'._l('announcements').'</h4>';} ?>
						</div>
						<div class="clearfix"></div>
						<?php render_datatable(array(_l('name'),_l('announcement_date_list')),'announcements'); ?>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>
<?php init_tail(); ?>
</body>
</html>
