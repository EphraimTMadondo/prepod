<?php defined('BASEPATH') or exit('No direct script access allowed'); ?>
<?php init_head(); ?>
<!-- BEGIN: Content-->
<div class="app-content content">
    <div class="content-overlay"></div>
    <div class="content-wrapper">
		<div class="row">
			<?php $this->load->view('quotations/list_template'); ?>
		</div>
	</div>
</div>

<?php init_tail(); ?>

</body>
</html>
