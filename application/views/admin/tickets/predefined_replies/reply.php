<?php defined('BASEPATH') or exit('No direct script access allowed'); ?>
<?php init_head(); ?>
<!-- BEGIN: Content-->
<div class="app-content content">
    <div class="content-overlay"></div>
    <div class="content-wrapper">
		<div class="row">
			<div class="col-md-8 col-md-offset-2">
				<div class="card mtop20">
					<div class="card-body">
					<h4 class="no-margin">
					<?php echo $title; ?>
					</h4>
					  <hr class="hr-panel-heading" />
						<?php if(isset($predefined_reply)){ ?>
						<a href="<?php echo admin_url('tickets/predefined_reply'); ?>" class="btn btn-success mb-1"><?php echo _l('new_predefined_reply'); ?></a>
						<div class="clearfix"></div>
						<?php } ?>
						<?php echo form_open($this->uri->uri_string()); ?>

						<?php $value = (isset($predefined_reply) ? $predefined_reply->name : ''); ?>
						<?php $attrs = (isset($predefined_reply) ? array() : array('autofocus'=>true)); ?>
						<?php echo render_input('name','predefined_reply_add_edit_name',$value,'text',$attrs); ?>
						<?php $contents = ''; if(isset($predefined_reply)){$contents = $predefined_reply->message;} ?>
						<?php echo render_textarea('message','',$contents,array(),array(),'','tinymce'); ?>
						<button type="submit" class="btn btn-primary float-right"><?php echo _l('submit'); ?></button>
						<?php echo form_close(); ?>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>
<?php init_tail(); ?>
<script>
	$(function(){
		appValidateForm($('form'),{name:'required'});
	});
</script>
</body>
</html>
