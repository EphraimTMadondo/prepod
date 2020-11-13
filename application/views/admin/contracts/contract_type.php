<?php defined('BASEPATH') or exit('No direct script access allowed'); ?>
<div class="modal fade" id="type" tabindex="-1" role="dialog">
<style>
         .nav-tabs {
    border-bottom: 1px solid #ddd;
}
.horizontal-scrollable-tabs .horizontal-tabs .nav-tabs-horizontal {
    overflow-x: auto;
    overflow-y: hidden;
    display: -webkit-box;
    display: -moz-box;
}


.top-lead-menu {
    margin-left: -15px;
    margin-right: -15px;
    margin-top: -15px;
    display: none;
}
.preview-tabs-top
{
   padding: 15px
}

.nav {
    padding-left: 0;
     margin-bottom: 0; */
    list-style: none; */
}

.modal-title {
    margin: 0;
    line-height: 1.42857143;
}

.modal-dialog {
    max-width: 640px;
    margin: 1.75rem auto;
}

.h1, .h2, .h3, .h4, .h5, .h6, h1, h2, h3, h4, h5, h6 {

    color: white;
}

         .preview-tabs-top
         {
            display: flex;
         }


         .modal-header {
    display: block;
    background: #226faa;
    padding: 15px 30px;
}    

   </style>
    <div class="modal-dialog">
        <?php echo form_open(admin_url('contracts/type'), array('id'=>'contract-type-form')); ?>
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                <h4 class="modal-title">
                    <span class="edit-title"><?php echo _l('contract_type_edit'); ?></span>
                    <span class="add-title"><?php echo _l('new_contract_type'); ?></span>
                </h4>
            </div>
            <div class="modal-body">
                <div class="row">
                    <div class="col-md-12">
                        <div id="additional"></div>
                        <?php echo render_input('name', 'contract_type_name'); ?>
                    </div>
                </div>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-default" data-dismiss="modal"><?php echo _l('close'); ?></button>
                <button type="submit" class="btn btn-secondary"><?php echo _l('submit'); ?></button>
            </div>
        </div><!-- /.modal-content -->
        <?php echo form_close(); ?>
    </div><!-- /.modal-dialog -->
</div><!-- /.modal -->

<script>
  window.addEventListener('load',function(){
      appValidateForm($('#contract-type-form'),{name:'required'},manage_contract_types);
      $('#type').on('hidden.bs.modal', function(event) {
        $('#additional').html('');
        $('#type input[name="name"]').val('');
        $('.add-title').removeClass('hide');
        $('.edit-title').removeClass('hide');
    });
  });
  function manage_contract_types(form) {
    var data = $(form).serialize();
    var url = form.action;
    $.post(url, data).done(function(response) {
        response = JSON.parse(response);
        if(response.success == true){
            alert_float('success',response.message);
            location.reload();
            if($('body').hasClass('contract') && typeof(response.id) != 'undefined') {
                var ctype = $('#contract_type');
                ctype.find('option:first').after('<option value="'+response.id+'">'+response.name+'</option>');
                ctype.selectpicker('val',response.id);
                ctype.selectpicker('refresh');
            }
        }
        if($.fn.DataTable.isDataTable('.table-contract-types')){
            $('.table-contract-types').DataTable().ajax.reload();
        }
        $('#type').modal('hide');
    });
    return false;
}
function new_type(){
    $('#type').modal('show');
    $('.edit-title').addClass('hide');
    
}
function edit_type(invoker,id){
    var name = $(invoker).data('name');
    $('#additional').append(hidden_input('id',id));
    $('#type input[name="name"]').val(name);
    $('#type').modal('show');
    $('.add-title').addClass('hide');
}
</script>
