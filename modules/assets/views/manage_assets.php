<?php init_head(); ?>
<!-- BEGIN: Content-->
<div class="app-content content">
<style>
            .modal .modal-content .modal-header {
            align-items: center;
        }
        
                .modal-header {
            display: block;
            background: #226faa;
            padding: 15px 30px;
        }
        
        .modal-body {
    position: relative;
    padding: 15px;
}

.modal-title
{
    color: white;
}

                                        
</style>
	<div class="content-overlay"></div>
	<div class="content-wrapper">
    <div class="row">
        <div class="col-md-12">
          <div class="card mt-2">
              <div class="card-body">
                <div class="row">
                    <div class="col-md-8">
                    <h4 class="no-margin font-bold"><i class="fa fa-bank" aria-hidden="true"></i> <?php echo _l($title); ?></h4>
                    <hr />
                  </div>
                  <div class="col-md-4">
                    <?php if (has_permission('assets', '', 'create') || is_admin()) { ?>
                      <a href="#" onclick="new_asset(); return false;" class="btn btn-primary float-right ml-1">
                          <?php echo _l('new_asset'); ?>
                      </a>
                    <?php } ?>
                  </div>
                </div>
                <ul class="nav nav-tabs mt-2" role="tablist">
                  <li class="nav-item active">
                    <a  class="nav-link active" href="#all_asset" aria-controls="all_asset" role="tab" data-toggle="tab" aria-controls="all_asset">
                      <i class="bx bx-home align-middle"></i>
                      <span class="align-middle"><?php echo _l('all_asset'); ?></span>
                    </a>
                  </li>
                  <li class="nav-item">
                    <a  class="nav-link" href="#not_pending_yet" aria-controls="not_pending_yet" role="tab" data-toggle="tab" aria-controls="not_pending_yet">
                      <i class="bx bx-briefcase align-middle"></i>
                      <span class="align-middle"><?php echo htmlspecialchars(_l('not_pending_yet')); ?></span>
                    </a>
                  </li>
                  <li class="nav-item">
                    <a  class="nav-link" href="#using" aria-controls="using" role="tab" data-toggle="tab" aria-controls="using">
                      <i class="bx bx-expand align-middle"></i>
                      <span class="align-middle"><?php echo htmlspecialchars(_l('using')); ?></span>
                    </a>
                  </li>
                  <li class="nav-item">
                    <a  class="nav-link" href="#liquidation" aria-controls="liquidation" role="tab" data-toggle="tab" aria-controls="liquidation">
                      <i class="bx bx-message-square align-middle"></i>
                      <span class="align-middle"><?php echo htmlspecialchars(_l('liquidation')); ?></span>
                    </a>
                  </li>
                  <li class="nav-item">
                    <a  class="nav-link" href="#warranty_repair" aria-controls="warranty_repair" role="tab" data-toggle="tab" aria-controls="warranty_repair">
                      <i class="bx bx-cog align-middle"></i>
                      <span class="align-middle"><?php echo htmlspecialchars(_l('warranty_repair')); ?></span>
                    </a>
                  </li>
                  <li class="nav-item">
                    <a  class="nav-link" href="#lost" aria-controls="lost" role="tab" data-toggle="tab" aria-controls="lost">
                      <i class="bx bx-window-open align-middle"></i>
                      <span class="align-middle"><?php echo htmlspecialchars(_l('lost')); ?></span>
                    </a>
                  </li>
                  <li class="nav-item">
                    <a  class="nav-link" href="#broken" aria-controls="broken" role="tab" data-toggle="tab" aria-controls="broken">
                      <i class="bx bx-x align-middle"></i>
                      <span class="align-middle"><?php echo htmlspecialchars(_l('broken')); ?></span>
                    </a>
                  </li>
              </ul>
              <?php echo form_hidden('asset_id',$asset_id); ?>
              <div class="tab-content">
                <div role="tab-pane" class="tab-pane active" id="all_asset">
                  <?php
                      $table_data = array(
                          _l('asset_code'),
                          _l('asset_name'),
                          _l('asset_group'),
                          _l('date_buy'),
                          _l('amount_allocate'),       
                          _l('amount_rest'),
                          _l('original_price'),
                          _l('unit'),
                          _l('department'),                           
                          );
                      render_datatable($table_data,'table_assets1',['asset_sm' => 'asset_sm']);
                      ?>
                </div>
                <div role="tab-pane" class="tab-pane" id="not_pending_yet">
                  <?php
                      $table_data = array(
                          _l('asset_code'),
                          _l('asset_name'),
                          _l('asset_group'),
                          _l('date_buy'),
                          _l('amount_allocate'),       
                          _l('amount_rest'),
                          _l('original_price'),
                          _l('unit'),
                          _l('department'),                           
                          );
                      render_datatable($table_data,'table_assets2',['asset_sm' => 'asset_sm']);
                      ?>
                </div>
                <div role="tab-pane" class="tab-pane" id="using">
                  <?php
                      $table_data = array(
                          _l('asset_code'),
                          _l('asset_name'),
                          _l('asset_group'),
                          _l('date_buy'),
                          _l('amount_allocate'),       
                          _l('amount_rest'),
                          _l('original_price'),
                          _l('unit'),
                          _l('department'),                           
                          );
                      render_datatable($table_data,'table_assets3',['asset_sm' => 'asset_sm']);
                      ?>
                </div>
                <div role="tab-pane" class="tab-pane" id="liquidation">
                  <?php
                      $table_data = array(
                          _l('asset_code'),
                          _l('asset_name'),
                          _l('asset_group'),
                          _l('date_buy'),
                          _l('amount_allocate'),       
                          _l('amount_rest'),
                          _l('original_price'),
                          _l('unit'),
                          _l('department'),                           
                          );
                      render_datatable($table_data,'table_assets4',['asset_sm' => 'asset_sm']);
                      ?>
                </div>
                <div role="tab-pane" class="tab-pane" id="warranty_repair">
                  <?php
                      $table_data = array(
                          _l('asset_code'),
                          _l('asset_name'),
                          _l('asset_group'),
                          _l('date_buy'),
                          _l('amount_allocate'),       
                          _l('amount_rest'),
                          _l('original_price'),
                          _l('unit'),
                          _l('department'),                           
                          );
                      render_datatable($table_data,'table_assets5',['asset_sm' => 'asset_sm']);
                      ?>
                </div>
                <div role="tab-pane" class="tab-pane" id="lost">
                  <?php
                      $table_data = array(
                          _l('asset_code'),
                          _l('asset_name'),
                          _l('asset_group'),
                          _l('date_buy'),
                          _l('amount_allocate'),       
                          _l('amount_rest'),
                          _l('original_price'),
                          _l('unit'),
                          _l('department'),                           
                          );
                      render_datatable($table_data,'table_assets6',['asset_sm' => 'asset_sm']);
                      ?>
                </div>
                <div role="tab-pane" class="tab-pane" id="broken">
                  <?php
                      $table_data = array(
                          _l('asset_code'),
                          _l('asset_name'),
                          _l('asset_group'),
                          _l('date_buy'),
                          _l('amount_allocate'),       
                          _l('amount_rest'),
                          _l('original_price'),
                          _l('unit'),
                          _l('department'),                           
                          );
                      render_datatable($table_data,'table_assets7',['asset_sm' => 'asset_sm']);
                      ?>
                </div>
              </div>
          </div>
        </div>
      </div>
    </div>
  </div>
<div class="modal fade" id="assets" tabindex="-1" role="dialog">
    <div class="modal-dialog">
        <?php echo form_open_multipart(admin_url('assets/asset'),array('id'=>'assets-form')); ?>
        <div class="modal-content modalwidth">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                <h4 class="modal-title">
                    <span class="edit-title"><?php echo htmlspecialchars(_l('edit_asset')); ?></span>
                    <span class="add-title"><?php echo htmlspecialchars(_l('new_asset')); ?></span>
                </h4>
            </div>
            <div class="modal-body">
                <div class="row">
                    <div class="col-md-12">
                        <div id="additional"></div>
                    <div class="panel panel-info">
                      <div class="card-title"><?php echo htmlspecialchars(_l('asset_information')) ?></div>
                      <div class="card-body">
                        <div class="row">
                          <div class="col-md-6">
                          <?php echo render_input('assets_code','asset_code','') ?>
                          </div>
                          <div class="col-md-6">
                          <?php echo render_input('assets_name','asset_name','') ?>
                          </div>
                        </div>
                        <div class="row">
                          <div class="col-md-6">
                          <?php $arrAtt = array();
                          $arrAtt['data-type'] = 'currency';
                          echo render_input('amount','amounts','','number') ?>
                          </div>
                          <div class="col-md-6">
                          <label for="unit"><?php echo htmlspecialchars(_l('unit')); ?></label>
                          <select name="unit" id="unit" class="selectpicker" data-style="btn-outline-light" data-live-search="true" data-width="100%" data-none-selected-text="<?php echo htmlspecialchars(_l('ticket_settings_none_assigned')); ?>">
                            <option value=""></option>
                            <?php foreach($unit as $s) { ?>
                              <option value="<?php echo htmlspecialchars($s['unit_id']); ?>"><?php echo htmlspecialchars($s['unit_name']); ?></option>
                              <?php } ?>
                          </select>
                          </div>
                        </div>
                        <div class="row">
                          <div class="col-md-6">
                          <?php echo render_input('series','series','') ?>
                          </div>
                          <div class="col-md-6">
                          <label for="asset_group"><?php echo htmlspecialchars(_l('asset_group')); ?></label>
                          <select name="asset_group" id="asset_group" class="selectpicker" data-style="btn-outline-light" data-live-search="true" data-width="100%" data-none-selected-text="<?php echo htmlspecialchars(_l('ticket_settings_none_assigned')); ?>">
                            <option value=""></option>
                            <?php foreach($group as $s) { ?>
                              <option value="<?php echo htmlspecialchars($s['group_id']); ?>"><?php echo htmlspecialchars($s['group_name']); ?></option>
                              <?php } ?>
                          </select>
                          </div>
                        </div>
                        <div class="row">
                          <div class="col-md-6">
                          <label for="department"><?php echo htmlspecialchars(_l('room_management')); ?></label>
                          <select name="department" id="department" class="selectpicker" data-style="btn-outline-light" data-live-search="true" data-width="100%" data-none-selected-text="<?php echo htmlspecialchars(_l('ticket_settings_none_assigned')); ?>">
                            <option value=""></option>
                            <?php foreach($departments as $s) { ?>
                              <option value="<?php echo htmlspecialchars($s['departmentid']); ?>"><?php echo htmlspecialchars($s['name']); ?></option>
                              <?php } ?>
                          </select>
                          </div>
                          <div class="col-md-6">
                          <label for="asset_location"><?php echo htmlspecialchars(_l('asset_location')); ?></label>
                          <select name="asset_location" id="asset_location" class="selectpicker" data-style="btn-outline-light" data-live-search="true" data-width="100%" data-none-selected-text="<?php echo htmlspecialchars(_l('ticket_settings_none_assigned')); ?>">
                            <option value=""></option>
                            <?php foreach($location as $s) { ?>
                              <option value="<?php echo htmlspecialchars($s['location_id']); ?>"><?php echo htmlspecialchars($s['location']); ?></option>
                              <?php } ?>
                          </select>
                          </div>
                        </div>
                        <br>
                        <div class="row">
                          <div class="col-md-6">
                          <?php echo render_date_input('date_buy','date_buy','') ?>
                          </div>
                          <div class="col-md-6">
                          <?php echo render_input('warranty_period','warranty_period','','number') ?>
                          </div>
                        </div>
                        <div class="row">
                          <div class="col-md-6">
                          <?php echo render_input('unit_price','unit_price','','text',$arrAtt) ?>
                          </div>
                          <div class="col-md-6">
                          <?php echo render_input('depreciation','depreciation_month','','number') ?>
                          </div>
                        </div>
                      </div>
                    </div>
                    <div class="panel panel-info">
                      <div class="card-title"><?php echo htmlspecialchars(_l('supplier_information')) ?></div>
                      <div class="card-body">
                        <div class="row">
                          <div class="col-md-6">
                          <?php echo render_input('supplier_name','supplier_name','') ?>
                          </div>
                          <div class="col-md-6">
                          <?php echo render_input('supplier_phone','supplier_phone','') ?>
                          </div>
                        </div>
                        <div class="row">
                          <div class="col-md-12">
                          <?php echo render_input('supplier_address','supplier_address','') ?>
                          </div>
                        </div>
                      </div>
                    </div>
                        <div class="row">
                          <div class="col-md-12">
                          <?php echo render_textarea('description','description','') ?>
                          </div>
                        </div>
                        <div class="row">
                          <div class="col-md-12">
                          <?php echo render_input('file','file_asset','','file') ?>
                          </div>
                        </div>
                    </div>
                </div>
              
            </div>
                <div class="modal-footer">
                    <button type="
                    " class="btn btn-default" data-dismiss="modal"><?php echo htmlspecialchars(_l('close')); ?></button>
                    <button id="sm_btn" type="submit" class="btn btn-secondary"><?php echo htmlspecialchars(_l('submit')); ?></button>
                </div>
            </div><!-- /.modal-content -->
            <?php echo form_close(); ?>
        </div><!-- /.modal-dialog -->
    </div><!-- /.modal -->
</div>
<?php init_tail(); ?>
</body>
</html>
<script>var hidden_columns = [2,3,6,7,8];</script>
<script>
  appValidateForm($('#assets-form'),{assets_name:'required',amount:'required',unit:'required',date_buy:'required',warranty_period:'required',unit_price:'required',depreciation:'required',assets_code: {
               required: true,
               remote: {
                url: site_url + "admin/assets/assets_code_exists",
                type: 'post',
                data: {
                    assets_code: function() {
                        return $('input[name="assets_code"]').val();
                    },
                    id: function() {
                        return $('input[name="id"]').val();
                    }
                }
            }
           }});
  initDataTable('.table-table_assets1', admin_url+'assets/table_assets/'+'all_asset');
  initDataTable('.table-table_assets2', admin_url+'assets/table_assets/'+'not_pending_yet');
  initDataTable('.table-table_assets3', admin_url+'assets/table_assets/'+'using');
  initDataTable('.table-table_assets4', admin_url+'assets/table_assets/'+'liquidation');
  initDataTable('.table-table_assets5', admin_url+'assets/table_assets/'+'warranty_repair');
  initDataTable('.table-table_assets6', admin_url+'assets/table_assets/'+'lost');
  initDataTable('.table-table_assets7', admin_url+'assets/table_assets/'+'broken');

  function new_asset(){
    $('#assets').modal('show');
    $('.edit-title').addClass('hide');
    $('.add-title').removeClass('hide');
    $('#additional').html('');
  }
  function edit_asset(invoker,id){
    $('#additional').html('');
    $('#additional').append(hidden_input('id',id));
    $('#assets input[name="assets_code"]').val($(invoker).data('assets_code'));
    $('#assets input[name="assets_name"]').val($(invoker).data('assets_name'));
    $('#assets input[name="date_buy"]').val($(invoker).data('date_buy'));
    $('#assets input[name="amount"]').val($(invoker).data('amount'));
    $('#assets input[name="unit_price"]').val($(invoker).data('unit_price'));
    $('#assets input[name="supplier_phone"]').val($(invoker).data('supplier_phone'));
    $('#assets input[name="supplier_name"]').val($(invoker).data('supplier_name'));
    $('#assets input[name="supplier_address"]').val($(invoker).data('supplier_address'));
    $('#assets input[name="series"]').val($(invoker).data('series'));
    $('#assets input[name="warranty_period"]').val($(invoker).data('warranty_period'));
    $('#assets input[name="depreciation"]').val($(invoker).data('depreciation'));
    $('#assets select[name="unit"]').val($(invoker).data('unit'));
    $('#assets select[name="unit"]').change();
    $('#assets select[name="asset_group"]').val($(invoker).data('asset_group'));
    $('#assets select[name="asset_group"]').change();
    $('#assets select[name="department"]').val($(invoker).data('department'));
    $('#assets select[name="department"]').change();
    $('#assets select[name="asset_location"]').val($(invoker).data('asset_location'));
    $('#assets select[name="asset_location"]').change();
    $('#assets textarea[name="description"]').val($(invoker).data('description'));
    $('#assets').modal('show');
    $('.edit-title').removeClass('hide');
    $('.add-title').addClass('hide');
  }
  init_asset();
  function init_asset(id) {
    load_small_table_item_asset(id, '#asset_sm_view', 'asset_id', 'assets/get_asset_data_ajax', '.asset_sm');
  }
  function load_small_table_item_asset(pr_id, selector, input_name, url, table) {
    var _tmpID = $('input[name="' + input_name + '"]').val();
    // Check if id passed from url, hash is prioritized becuase is last
    if (_tmpID !== '' && !window.location.hash) {
        pr_id = _tmpID;
        // Clear the current id value in case user click on the left sidebar credit_note_ids
        $('input[name="' + input_name + '"]').val('');
    } else {
        // check first if hash exists and not id is passed, becuase id is prioritized
        if (window.location.hash && !pr_id) {
            pr_id = window.location.hash.substring(1); //Puts hash in variable, and removes the # character
        }
    }
    if (typeof(pr_id) == 'undefined' || pr_id === '') { return; }
    if (!$("body").hasClass('small-table')) { toggle_small_view_asset(table, selector); }
    $('input[name="' + input_name + '"]').val(pr_id);
    do_hash_helper(pr_id);
    $(selector).load(admin_url + url + '/' + pr_id);
    if (is_mobile()) {
        $('html, body').animate({
            scrollTop: $(selector).offset().top + 150
        }, 600);
    }
}
function toggle_small_view_asset(table, main_data) {

    $("body").toggleClass('small-table');
    var tablewrap = $('#small-table');
    if (tablewrap.length === 0) { return; }
    var _visible = false;
    if (tablewrap.hasClass('col-md-5')) {
        tablewrap.removeClass('col-md-5').addClass('col-md-12');
        _visible = true;
        $('.toggle-small-view').find('i').removeClass('fa fa-angle-double-right').addClass('fa fa-angle-double-left');
    } else {
        tablewrap.addClass('col-md-5').removeClass('col-md-12');
        $('.toggle-small-view').find('i').removeClass('fa fa-angle-double-left').addClass('fa fa-angle-double-right');
    }
    var _table = $(table).DataTable();
    // Show hide hidden columns
    _table.columns(hidden_columns).visible(_visible, false);
    _table.columns.adjust();
    $(main_data).toggleClass('hide');
    $(window).trigger('resize');
}
function preview_asset_btn(invoker){
    var id = $(invoker).attr('id');
    var rel_id = $(invoker).attr('rel_id');
    view_asset_file(id, rel_id);
}

function view_asset_file(id, rel_id) {
      $('#asset_file_data').empty();
      $("#asset_file_data").load(admin_url + 'assets/file/' + id + '/' + rel_id, function(response, status, xhr) {
          if (status == "error") {
              alert_float('danger', xhr.statusText);
          }
      });
}
function close_modal_preview(){
 $('._project_file').modal('hide');
}
</script>
