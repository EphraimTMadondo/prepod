<?php defined('BASEPATH') or exit('No direct script access allowed'); ?>
<?php init_head(); ?>
<!-- BEGIN: Content-->
<div class="app-content content">
    <div class="content-overlay"></div>
    <div class="content-wrapper">
		<div class="row">
			<div class="col-md-12">
				<div class="card mt-2">
					<div class="card-body">
						<div class="_buttons">
							<a href="#" class="btn btn-primary" data-toggle="modal" data-target="#payment_mode_modal">
								<?php echo _l('new_payment_mode'); ?>
							</a>
						</div>
						<div class="clearfix"></div>
						<hr class="hr-panel-heading" />
						<p class="text-warning mtop5"><?php echo _l('payment_modes_add_edit_announcement'); ?></p>
						<div class="clearfix"></div>
						<?php render_datatable(array(
							_l('payment_modes_dt_name'),
							_l('payment_modes_dt_description'),
							_l('payment_modes_dt_active'),
							_l('options')
							),'payment-modes'); ?>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
	<?php $this->load->view('admin/paymentmodes/paymentmode'); ?>
	<?php init_tail(); ?>
	<script>
		$(function(){
			initDataTable('.table-payment-modes', window.location.href, [3], [3]);
		});
	</script>
</body>
</html>
