<?php defined('BASEPATH') or exit('No direct script access allowed'); ?>
<?php init_head(); ?>
<!-- BEGIN: Content-->
<div class="app-content content">
    <div class="content-overlay"></div>
    <div class="content-wrapper">
		<div class="row">
			<div class="col-md-12">
				<div class="card">
					<div class="card-body">
						<div class="row">
		                 <div class="col-md-12">
		                  <h4 class="no-margin font-bold"><i class="fa fa-shopping-basket" aria-hidden="true"></i> <?php echo _l($title); ?></h4>
		                  <hr />
		                 </div>
		              	</div>
		              	<div class="row">    
	                        <div class="_buttons col-md-3">
	                        	<?php if (has_permission('purchase', '', 'create') || is_admin()) { ?>
		                        <a href="<?php echo admin_url('purchase/pur_request'); ?>"class="btn btn-secondary pull-left mr-1 display-block">
		                            <?php echo _l('new_pur_request'); ?>
		                        </a>
		                        <?php } ?>
		                    </div>
                    	</div>
                    <br><br>
                    <?php render_datatable(array(
                        _l('purchase_request'),
                        _l('requester'),
                        _l('department'),
                        _l('request_date'),
                        _l('status'),
                        _l('options'),
                        ),'table_pur_request'); ?>
						
					</div>
				</div>
			</div>
		</div>
	</div>
</div>
<div class="modal fade" id="request_quotation" tabindex="-1" role="dialog">
  <div class="modal-dialog">
      <?php echo form_open_multipart(admin_url('purchase/send_request_quotation'),array('id'=>'send_rq-form')); ?>
      <div class="modal-content modal_withd">
          <div class="modal-header">
              <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
              <h4 class="modal-title">
                  <span><?php echo _l('request_quotation'); ?></span>
              </h4>
          </div>
          <div class="modal-body">
          	  <div id="additional_rqquo"></div>
              <div class="row">
                <div class="col-md-12 form-group">
                  <label for="vendor"><span class="text-danger">* </span><?php echo _l('vendor'); ?></label>
                    <select name="vendor[]" id="vendor" class="selectpicker" data-style="btn-outline-light" required multiple="true"  data-live-search="true" data-width="100%" data-none-selected-text="<?php echo _l('ticket_settings_none_assigned'); ?>" >
                        <?php foreach($vendors as $s) { ?>
                        <option value="<?php echo html_entity_decode($s['userid']); ?>"><?php echo html_entity_decode($s['company']); ?></option>
                          <?php } ?>
                    </select>
                    <br>
                </div>     
                
                <div class="col-md-12">
                  <?php echo render_input('subject','subject'); ?>
                </div>
                <div class="col-md-12">
                  <?php echo render_input('attachment','attachment','','file'); ?>
                </div>
                <div class="col-md-12">
                  <?php echo render_textarea('content','content','',array(),array(),'','tinymce') ?>
                </div>     
                <div id="type_care">
                  
                </div>        
              </div>
          </div>
          <div class="modal-footer">
              <button type=""class="btn btn-default" data-dismiss="modal"><?php echo _l('close'); ?></button>
              <button id="sm_btn" type="submit" class="btn btn-secondary"><?php echo _l('submit'); ?></button>
          </div>
      </div><!-- /.modal-content -->
          <?php echo form_close(); ?>
      </div><!-- /.modal-dialog -->
  </div><!-- /.modal -->
<?php init_tail(); ?>
</body>
</html>