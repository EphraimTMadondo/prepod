<?php defined('BASEPATH') or exit('No direct script access allowed'); ?>
<?php init_head(); ?>
<!-- BEGIN: Content-->
<div class="app-content content">
	<div class="content-overlay"></div>
	<div class="content-wrapper">
		<div class="row">
			<?php
			include_once(APPPATH.'views/admin/invoices/filter_params.php');
			$this->load->view('admin/invoices/list_template');
			?>
		</div>
	</div>
</div>
<?php $this->load->view('admin/includes/modals/sales_attach_file'); ?>
<script>var hidden_columns = [2,6,7,8];</script>
<?php init_tail(); ?>
<script>
	function custom_view(){
      var view = $('#select-filter').val();
      console.log(view);
      dt_custom_view(view,'.table-invoices',view);
   }

	$(function(){
		init_invoice();
	});
</script>
</body>
</html>
