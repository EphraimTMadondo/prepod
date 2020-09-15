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
							<a href="<?php echo admin_url('tickets/predefined_reply'); ?>" class="btn btn-primary"><?php echo _l('new_predefined_reply'); ?></a>
						</div>
						<div class="clearfix"></div>
						<hr class="hr-panel-heading" />
						<div class="clearfix"></div>
						<?php render_datatable(array(
							_l('predefined_replies_dt_name'),
							_l('options'),
							),'predefined-replies'); ?>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
	<?php init_tail(); ?>
	<script>
		$(function(){
			initDataTable('.table-predefined-replies', window.location.href, [1], [1]);
		});
	</script>
</body>
</html>
