<?php defined('BASEPATH') or exit('No direct script access allowed'); ?>
<?php init_head(); ?>

<!-- BEGIN: Content-->
<div class="app-content content">
   <div class="content-overlay"></div>
		<div class="card mtop20">
			<div class="card-body">
				<?php $this->load->view('admin/payments/table_html'); ?>
			</div>
		</div>
	</div>
</div>
<?php init_tail(); ?>
<script>
	$(function(){
		initDataTable('.table-payments', admin_url+'payments/table', undefined, undefined,'undefined',<?php echo hooks()->apply_filters('payments_table_default_order', json_encode(array(0,'desc'))); ?>);
	});
</script>
</body>
</html>
