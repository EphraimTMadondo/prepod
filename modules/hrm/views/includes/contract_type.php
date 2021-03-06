<?php defined('BASEPATH') or exit('No direct script access allowed'); ?>
<div>
<div class="_buttons">
    <a href="#" onclick="new_contract_type(); return false;" class="btn btn-primary">
        <?php echo _l('new_contract_type'); ?>
    </a>
</div>
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
<div class="clearfix"></div>
<hr class="hr-panel-heading" />
<div class="clearfix"></div>
<table class="table dt-table">
 <thead>
    <th><?php echo _l('id'); ?></th>
    <th><?php echo _l('contract_name'); ?></th>
    <th><?php echo _l('contract_type'); ?></th>
    <th><?php echo _l('duration'); ?></th>
    <th><?php echo _l('insurrance'); ?></th>
    <th><?php echo _l('options'); ?></th>
 </thead>
 <tbody>
    <?php foreach($contract as $c){ ?>
    <tr>
       <td><?php echo htmlspecialchars($c['id_contracttype']); ?></td>
       <td><?php echo htmlspecialchars($c['name_contracttype']); ?></td>
       <td><?php echo htmlspecialchars($c['contracttype']); ?></td>
       <td><?php echo htmlspecialchars($c['duration']).' '._l($c['unit']); ?></td>
       <td><?php if($c['insurance'] == 0){echo _l('no');}else{echo _l('yes');}?></td>
       <td>
         <a href="#" onclick="edit_contract_type(this,<?php echo htmlspecialchars($c['id_contracttype']); ?>); return false" data-name="<?php echo htmlspecialchars($c['name_contracttype']);  ?>" data-contracttype="<?php echo htmlspecialchars($c['contracttype']);  ?>" data-duration="<?php echo htmlspecialchars($c['duration']);  ?>" data-insurance="<?php echo htmlspecialchars($c['insurance']);?>" data-unit="<?php echo htmlspecialchars($c['unit']);?>" class="btn btn-light btn-icon"><i class="bx bx-pencil"></i></a>
          <a href="<?php echo admin_url('hrm/delete_contract_type/'.$c['id_contracttype']); ?>" class="btn btn-danger btn-icon _delete"><i class="bx bx-trash"></i></a>
       </td>
    </tr>
    <?php } ?>
 </tbody>
</table>       
<div class="modal fade" id="contract_type" tabindex="-1" role="dialog">
    <div class="modal-dialog">
        <?php echo form_open(admin_url('hrm/contract_type')); ?>
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                <h4 class="modal-title">
                    <span class="edit-title"><?php echo _l('edit_contract_type'); ?></span>
                    <span class="add-title"><?php echo _l('new_contract_type'); ?></span>
                </h4>
            </div>
            <div class="modal-body">
                <div class="row">
                    <div class="col-md-12">
                     <div id="additional_contract_type"></div>   
                     <div class="form">     
                        <?php 
                        echo render_input('name_contracttype','contract_name'); ?>
                        <?php 
                        echo render_input('contracttype','contract_type'); ?>
                        <div class="row">
                        	<div class="col-md-8">
                        	<?php 
                        	echo render_input('duration','duration','','number'); ?>
                        	</div>
                        	<div class="col-md-4">
	                        	<label for="unit" class="control-label"><?php echo _l('unit'); ?></label>
	                        	<select name="unit" class="selectpicker" data-style="btn-outline-light" id="unit" data-width="100%" data-none-selected-text="<?php echo _l('dropdown_non_selected_tex'); ?>"> 
	                           	<option value=""></option>                  
	                           	<option value="month"><?php echo _l('month'); ?></option>
	                           	<option value="year"><?php echo _l('year'); ?></option>
	                        	</select>
                        	</div>
                        </div>
                        <label for="insurance" class="control-label"><?php echo _l('insurrance'); ?></label>
                        <select name="insurance" class="selectpicker" data-style="btn-outline-light" id="insurance" data-width="100%" data-none-selected-text="<?php echo _l('dropdown_non_selected_tex'); ?>"> 
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
