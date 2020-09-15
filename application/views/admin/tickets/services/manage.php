<?php defined('BASEPATH') or exit('No direct script access allowed'); ?>
<?php init_head(); ?>

<!-- BEGIN: Content-->
<div class="app-content content">
    <div class="content-overlay"></div>
    <div class="content-wrapper">
		<div class="row">
			<div class="col-md-12">
				<div class="card mtop20">
					<div class="card-body">
						<div class="_buttons">
							<a href="#" onclick="new_service(); return false;" class="btn btn-primary"><?php echo _l('new_service'); ?></a>
						</div>
						<div class="clearfix"></div>
						<hr class="hr-panel-heading" />
						<div class="clearfix"></div>
						<?php render_datatable(array(
							_l('services_dt_name'),
							_l('options'),
							),'services'); ?>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
	<?php $this->load->view('admin/tickets/services/service'); ?>
	<?php init_tail(); ?>
	<script>
		$(function(){
			initDataTable('.table-services', window.location.href, [1], [1]);
		});
	</script>
</body>
</html>
