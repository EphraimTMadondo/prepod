<?php defined('BASEPATH') or exit('No direct script access allowed'); ?>
<?php init_head(); ?>
<!-- BEGIN: Content-->
<div class="app-content content">
    <div class="content-overlay"></div>
    <div class="content-wrapper">
		<div class="row">
			<?php
			echo form_open($this->uri->uri_string(),array('id'=>'estimate-form','class'=>'_transaction_form'));
			if(isset($estimate)){
				echo form_hidden('isedit');
			}
			?>
			<div class="col-md-12">
				<?php $this->load->view('quotations/estimate_template'); ?>
			</div>
			<?php echo form_close(); ?>
			
		</div>
	</div>
</div>
</div>
<?php init_tail(); ?>
</body>
</html>
<?php require 'modules/purchase/assets/js/estimate_js.php';?>