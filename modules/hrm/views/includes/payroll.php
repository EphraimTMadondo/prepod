<?php defined('BASEPATH') or exit('No direct script access allowed'); ?>
<div>
<div class="_buttons">
<style>
            .modal .modal-content .modal-header {
            align-items: center;
        }
        
                .modal-header {
            display: block;
            background: #226faa;
            padding: 15px 30px;
           
        }

 

.bootstrap-select .dropdown-menu>li:first-child>a {
    border-radius: 0;
}

._filter_data .dropdown-menu li a, .bootstrap-select .dropdown-menu li a {
    padding: 6px 16px;
}

        .hrm-width150 {
    width: 150%;
}

        .modal-title
        {
          color: white;
        }
        
        
.h3, .h4, h3, h4 {
    font-weight: 400;
}
.h4, h4 {
    font-size: 18px;
}
.h4, .h5, .h6, h4, h5, h6 {
    margin-top: 10px;
    margin-bottom: 10px;
}
 
.modal-body {
    position: relative;
    -webkit-box-flex: 1;
    -webkit-flex: 1 1 auto;
    -ms-flex: 1 1 auto;
    flex: 1 1 auto;
    padding: 1.3rem 2.3rem;
}

.form-control {
    display: block;
    width: 100%;
    height: calc(1.4em + .94rem + 3.7px);
    padding: .47rem .8rem;
    font-size: 1rem;
    line-height: 1.4;
    color: #475F7B;
    background-color: #FFF;
    border: 1px solid #DFE3E7;
    border-radius: .267rem;
    -webkit-transition: border-color .15s ease-in-out,box-shadow .15s ease-in-out;
    transition: border-color .15s ease-in-out,box-shadow .15s ease-in-out;
}
                                        
</style>
    <a href="#" onclick="new_salary_form(); return false;" class="btn btn-primary">
        <?php echo _l('new_salary_form'); ?>
    </a>
</div>
<div class="clearfix"></div>
<hr class="hr-panel-heading" />
<div class="clearfix"></div>
<table class="table dt-table">
 <thead>
    <th><?php echo _l('id'); ?></th>
    <th><?php echo _l('salary_form_name'); ?></th>
    <th><?php echo _l('amount'); ?></th>
    <th><?php echo _l('taxable'); ?></th>
    <th><?php echo _l('options'); ?></th>
 </thead>
 <tbody>
    <?php foreach($salary_form as $c){ ?>
    <tr>
       <td><?php echo htmlspecialchars($c['form_id']); ?></td>
       <td><?php echo htmlspecialchars($c['form_name']); ?></td>
       <td><?php echo app_format_money($c['salary_val'],$base_currency->symbol); ?></td>
       <td><?php if($c['tax'] == 0){echo _l('no');}else{echo _l('yes');}?></td>
       <td>
         <a href="#" onclick="edit_salary_form(this,<?php echo htmlspecialchars($c['form_id']); ?>); return false" data-taxable="<?php echo htmlspecialchars($c['tax']); ?>" data-name="<?php echo htmlspecialchars($c['form_name']); ?>" data-amount="<?php echo htmlspecialchars($c['salary_val']); ?>" class="btn btn-light btn-icon"><i class="bx bx-pencil"></i></a>
          <a href="<?php echo admin_url('hrm/delete_salary_form/'.$c['form_id']); ?>" class="btn btn-danger btn-icon _delete"><i class="bx bx-trash"></i></a>
       </td>
    </tr>
    <?php } ?>
 </tbody>
</table>       
<div class="modal fade" id="salary_form" tabindex="-1" role="dialog">
    <div class="modal-dialog">
        <?php echo form_open(admin_url('hrm/salary_form')); ?>
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                <h4 class="modal-title">
                    <span class="edit-title"><?php echo _l('edit_salary_form'); ?></span>
                    <span class="add-title"><?php echo _l('new_salary_form'); ?></span>
                </h4>
            </div>
            <div class="modal-body">
                <div class="row">
                    <div class="col-md-12">
                     <div id="additional_salary_form"></div>   
                     <div class="form">     
                        <?php 
                        echo render_input('form_name','salary_form_name'); ?>
                        <?php 
                        echo render_input('salary_val','amount','','number'); ?>

                        <label for="tax" class="control-label"><?php echo _l('taxable'); ?></label>
                        <select name="tax" class="selectpicker" data-style="btn-outline-light" id="taxable" data-width="100%" data-none-selected-text="<?php echo _l('dropdown_non_selected_tex'); ?>"> 
                           <option value=""></option>                  
                           <option value="0"><?php echo _l('no'); ?></option>
                           <option value="1"><?php echo _l('yes'); ?></option>
                        </select>

                    </div>
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
</div>
</body>
</html>
