<?php init_head();?>
<!-- BEGIN: Content-->
<div class="app-content content">
    <div class="content-overlay"></div>
    <div class="content-wrapper">
      <div class="row">
         <div class="col-md-12" id="small-table">
            <div class="card">
               <div class="card-body">
                <?php echo form_hidden('rec_channel_id', $rec_channel_id); ?>
                  <div class="row">
                     <div class="col-md-12">
                      <h4 class="no-margin font-bold"><i class="fa fa-feed menu-icon" aria-hidden="true"></i> <?php echo _l($title); ?></h4>
                      <hr />
                    </div>
                  </div>
                  <a href="<?php echo admin_url('recruitment/add_edit_recruitment_channel'); ?>" class="btn btn-primary"><?php echo _l('new'); ?></a>
                    <br><br><br>
                  <?php render_datatable(array(
	_l('id'),
	_l('r_form_name'),
	_l('recruitment_campaign'),
	_l('form_type'),
	_l('status'),

), 'table_recruitment_channel');?>
               </div>
            </div>
         </div>
        <div class="col-md-7 small-table-right-col">
          <div id="campaign_sm_view" class="hide">
          </div>
        </div>

      </div>
   </div>
</div>
<?php init_tail();?>
</body>
</html>
