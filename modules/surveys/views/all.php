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
						<?php if(has_permission('surveys','','create') || has_permission('surveys','','view')){ ?>
						<div class="_buttons">
							<?php if(has_permission('surveys','','create')){ ?>
							<a href="<?php echo admin_url('surveys/survey'); ?>" class="btn btn-primary"><?php echo _l('new_survey'); ?></a>
							<?php } ?>
							<?php if(has_permission('surveys','','view')){ ?>
							<a href="<?php echo admin_url('surveys/mail_lists'); ?>" class="btn btn-primary"><?php echo _l('mail_lists'); ?></a>
							<?php } ?>
						</div>
						<div class="clearfix"></div>
						<hr class="hr-panel-heading" />
						<?php } ?>
						<div class="clearfix"></div>
						<?php render_datatable(array(
							_l('id'),
							_l('survey_dt_name'),
							_l('survey_dt_total_questions'),
							_l('survey_dt_total_participants'),
							_l('survey_dt_date_created'),
							_l('survey_dt_active'),
							),'surveys'); ?>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
	<?php init_tail(); ?>
	<script>
		$(function(){
			initDataTable('.table-surveys', window.location.href);
		});
	</script>
</body>
</html>
