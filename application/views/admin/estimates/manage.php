<?php defined('BASEPATH') or exit('No direct script access allowed'); ?>
<?php init_head(); ?>
<!-- BEGIN: Content-->
<div class="app-content content">
	<div class="content-overlay"></div>
	<div class="content-wrapper">
		<div class="row">
			<?php $this->load->view('admin/estimates/list_template'); ?>
		</div>
	</div>
</div>
<?php $this->load->view('admin/includes/modals/sales_attach_file'); ?>
<script>var hidden_columns = [2,5,6,8,9];</script>
<?php init_tail(); ?>
<script>
   function custom_view(){
      var view = $('#select-filter').val();
      console.log(view);
      dt_custom_view(view,'.table-estimates',view);
   }

	$(function(){
		init_estimate();
	});
</script>
</body>
</html>
