<?php defined('BASEPATH') or exit('No direct script access allowed'); ?>
 <h4 style= "color:white"><?php echo '<i class=" fa fa-hotel"></i> '. $title; ?></h4>
 <br/>
 <style>
            .modal .modal-content .modal-header {
            align-items: center;
        }
        
                .modal-header {
            display: block;
            background: #226faa;
            padding: 15px 30px;
           
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
 <a href="#" onclick="new_leave(); return false;" class="btn btn-primary"><?php echo _l('new_leave'); ?></a>
 <br/><br/>
<div class="horizontal-scrollable-tabs preview-tabs-top">
  <div class="horizontal-tabs">
    <ul class="nav nav-tabs nav-tabs-horizontal" role="tablist">
      <li role="presentation" class="nav-item active">
        <a class="nav-link active" href="#holiday" aria-controls="holiday" role="tab" data-toggle="tab"><?php echo _l('holiday'); ?></a>
      </li>
      <li class="nav-item" role="presentation">
        <a class="nav-link" href="#event_break" aria-controls="event_break" role="tab" data-toggle="tab"><?php echo _l('event_break'); ?></a>
      </li>
      <li class="nav-item" role="presentation">
        <a class="nav-link" href="#unexpected_break" aria-controls="unexpected_break" role="tab" data-toggle="tab"><?php echo _l('unexpected_break'); ?></a>
      </li>
    </ul>
  </div>
</div>
<div class="tab-content">
  <div role="tab-pane" class="tab-pane active" id="holiday">
    <table class="table dt-table">
       <thead>
        <tr>
          <th><?php echo _l('break_date'); ?></th>
          <th><?php echo _l('leave_reason'); ?></th>
          <th><?php echo _l('timekeeping'); ?></th>
          <th><?php echo _l('department'); ?></th>
          <th><?php echo _l('position'); ?></th>
          <th><?php echo _l('add_from'); ?></th>
          <th><?php echo _l('options'); ?></th>
        </tr>
       </thead>
       <tbody>
        <?php foreach($holiday as $d) {
            if($d['company_username']== $_SESSION['current_company']){
        
        ?>
            <tr>
              <td><?php echo _d($d['break_date']); ?></td>
              <td><?php echo htmlspecialchars($d['off_reason']); ?></td>
              <td><?php echo _l($d['timekeeping']); ?></td>
              <td><?php echo get_dpm_in_dayoff($d['department']); ?></td>
              <td><?php echo get_position_in_dayoff($d['position']); ?></td>
              <td><a href="<?php echo admin_url('hrm/member/'.$d["add_from"]); ?>">
                    <?php echo staff_profile_image($d['add_from'],[
                'staff-profile-image-small mr-1',
                ], 'small', [
                'data-toggle' => 'tooltip',
                'data-title'  => get_staff_full_name($d['add_from']),
                ]); ?>
                 </a></td>
              <td>
               <a href="#" onclick="edit_day_off(this,<?php echo htmlspecialchars($d['id']); ?>); return false" data-off_reason="<?php echo htmlspecialchars($d['off_reason']); ?>" data-off_type="<?php echo htmlspecialchars($d['off_type']); ?>" data-break_date="<?php echo htmlspecialchars($d['break_date']); ?>" data-timekeeping="<?php echo htmlspecialchars($d['timekeeping']); ?>" data-department="<?php echo htmlspecialchars($d['department']); ?>" data-position="<?php echo htmlspecialchars($d['position']); ?>" class="btn btn-light btn-icon"><i class="bx bx-pencil"></i></a>
                <a href="<?php echo admin_url('hrm/delete_day_off/'.$d['id']); ?>" class="btn btn-danger btn-icon _delete"><i class="bx bx-trash"></i></a>
              </td>
            </tr>
          <?php } }?>
       </tbody>
      </table>
  </div>
  <div role="tab-pane" class="tab-pane" id="event_break">
    <table class="table dt-table">
       <thead>
        <tr>
          <th><?php echo _l('break_date'); ?></th>
          <th><?php echo _l('leave_reason'); ?></th>
          <th><?php echo _l('timekeeping'); ?></th>
          <th><?php echo _l('department'); ?></th>
          <th><?php echo _l('position'); ?></th>
          <th><?php echo _l('add_from'); ?></th>
          <th><?php echo _l('options'); ?></th>
        </tr>
       </thead>
       <tbody>
          <?php foreach($event_break as $d) {?>
            <tr>
              <td><?php echo _d($d['break_date']); ?></td>
              <td><?php echo htmlspecialchars($d['off_reason']); ?></td>
              <td><?php echo _l($d['timekeeping']); ?></td>
              <td><?php echo get_dpm_in_dayoff($d['department']); ?></td>
              <td><?php echo get_position_in_dayoff($d['position']); ?></td>
              <td><a href="<?php echo admin_url('hrm/member/'.$d["add_from"]); ?>">
                    <?php echo staff_profile_image($d['add_from'],[
                'staff-profile-image-small mr-1',
                ], 'small', [
                'data-toggle' => 'tooltip',
                'data-title'  => get_staff_full_name($d['add_from']),
                ]); ?>
                 </a></td>
              <td>
                <a href="#" onclick="edit_day_off(this,<?php echo htmlspecialchars($d['id']); ?>); return false" data-off_reason="<?php echo htmlspecialchars($d['off_reason']); ?>" data-off_type="<?php echo htmlspecialchars($d['off_type']); ?>" data-break_date="<?php echo htmlspecialchars($d['break_date']); ?>" data-timekeeping="<?php echo htmlspecialchars($d['timekeeping']); ?>" data-department="<?php echo htmlspecialchars($d['department']); ?>" data-position="<?php echo htmlspecialchars($d['position']); ?>" class="btn btn-light btn-icon"><i class="bx bx-pencil"></i></a>
                <a href="<?php echo admin_url('hrm/delete_day_off/'.$d['id']); ?>" class="btn btn-danger btn-icon _delete"><i class="bx bx-trash"></i></a>
              </td>
            </tr>
          <?php } ?>
       </tbody>
      </table>
  </div>
  <div role="tab-pane" class="tab-pane" id="unexpected_break">
    <table class="table dt-table">
       <thead>
        <tr>
          <th><?php echo _l('break_date'); ?></th>
          <th><?php echo _l('leave_reason'); ?></th>
          <th><?php echo _l('timekeeping'); ?></th>
          <th><?php echo _l('department'); ?></th>
          <th><?php echo _l('position'); ?></th>
          <th><?php echo _l('add_from'); ?></th>
          <th><?php echo _l('options'); ?></th>
        </tr>
       </thead>
       <tbody>
          <?php foreach($unexpected_break as $d) {?>
            <tr>
              <td><?php echo _d($d['break_date']); ?></td>
              <td><?php echo htmlspecialchars($d['off_reason']); ?></td>
              <td><?php echo _l($d['timekeeping']); ?></td>
              <td><?php echo get_dpm_in_dayoff($d['department']); ?></td>
              <td><?php echo get_position_in_dayoff($d['position']); ?></td>
              <td><a href="<?php echo admin_url('hrm/member/'.$d["add_from"]); ?>">
                    <?php echo staff_profile_image($d['add_from'],[
                'staff-profile-image-small mr-1',
                ], 'small', [
                'data-toggle' => 'tooltip',
                'data-title'  => get_staff_full_name($d['add_from']),
                ]); ?>
                 </a></td>
              <td>
                <a href="#" onclick="edit_day_off(this,<?php echo htmlspecialchars($d['id']); ?>); return false" data-off_reason="<?php echo htmlspecialchars($d['off_reason']); ?>" data-off_type="<?php echo htmlspecialchars($d['off_type']); ?>" data-break_date="<?php echo htmlspecialchars($d['break_date']); ?>" data-timekeeping="<?php echo htmlspecialchars($d['timekeeping']); ?>" data-department="<?php echo htmlspecialchars($d['department']); ?>" data-position="<?php echo htmlspecialchars($d['position']); ?>" class="btn btn-light btn-icon"><i class="bx bx-pencil"></i></a>
                <a href="<?php echo admin_url('hrm/delete_day_off/'.$d['id']); ?>" class="btn btn-danger btn-icon _delete"><i class="bx bx-trash"></i></a>
              </td>
            </tr>
          <?php } ?>

       </tbody>
      </table>
  </div>
</div>
<div class="modal fade" id="leave_modal" tabindex="-1" role="dialog">
  <div class="modal-dialog">
     <?php echo form_open(admin_url('hrm/day_off'),array('id'=>'leave_modal-form')); ?> 

      <div class="modal-content hrm-width150">
          <div class="modal-header">
              <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
              <h4 class="modal-title">
                  <span class="edit-title"><?php echo _l('edit_break_date'); ?></span>
                  <span class="add-title"><?php echo _l('new_break_date'); ?></span>
              </h4>
          </div>
          <div class="modal-body">
              <div id="additional_leave"></div> 
              <div class="row">
                <div class="col-md-4">
                  <h4><?php echo _l('general_infor') ?></h4>
                  <hr/>
                </div>
              </div>
              <div class="row">
                <div class="col-md-6">
                <?php echo render_input('leave_reason','leave_reason','') ?> 
                </div>
                <div class="col-md-6">
                <label for="leave_type" class="control-label"><?php echo _l('leave_type'); ?></label>
                <select name="leave_type" class="selectpicker" data-style="btn-outline-light" id="leave_type" data-width="100%" data-none-selected-text="<?php echo _l('dropdown_non_selected_tex'); ?>"> 
                  <option value=""></option>                  
                  <option value="holiday"><?php echo _l('holiday'); ?></option>
                  <option value="event_break"><?php echo _l('event_break'); ?></option>
                  <option value="unexpected_break"><?php echo _l('unexpected_break'); ?></option>
                </select>
                </div>

              </div>
              <hr>
              <div class="row">
                <div class="col-md-4">
                  <h4><?php echo _l('list_break_date') ?></h4>
                  <hr/>
                </div>
                <div class="list_break_date">
                  <div class="row col-md-12" id="break_date-item"> 
                    <div class="col-md-3">
                    <?php echo render_date_input('break_date[0]','break_date',''); ?> </div>
                    <div class="col-md-2">
                    <div class="select-placeholder form-group">
                    <label for="timekeeping[0]"><?php echo _l('timekeeping'); ?></label>
                        <select name="timekeeping[0]" id="timekeeping[0]" class="selectpicker" data-style="btn-outline-light" data-width="100%" data-none-selected-text="<?php echo _l('dropdown_non_selected_tex'); ?>" data-hide-disabled="true"> 
                        
                        <option value="yes"><?php echo _l('yes'); ?></option>
                        <option value="no"><?php echo _l('no'); ?></option>
                        </select>
                     </div> 
                    </div>
                    <div class="col-md-3">
                    <div class="select-placeholder form-group">
                    <label for="department[0]"><?php echo _l('department'); ?></label>
                        <select name="department[0]" id="department[0]" class="selectpicker" data-style="btn-outline-light" data-width="100%" data-none-selected-text="<?php echo _l('all'); ?>" data-hide-disabled="true">  
                         <option value=""></option> 
                          <?php foreach($departments as $dpm){ ?>
                            <option value="<?php echo htmlspecialchars($dpm['departmentid']); ?>"><?php echo htmlspecialchars($dpm['name']); ?></option>
                          <?php } ?>
                      </select>
                     </div> 
                    </div>
                    <div class="col-md-3">
                    <div class="select-placeholder form-group">					   
                    <label for="position[0]"><?php echo _l('position'); ?></label>
                        <select name="position[0]" id="position[0]" class="selectpicker" data-style="btn-outline-light" data-width="100%" data-none-selected-text="<?php echo _l('all'); ?>" data-hide-disabled="true">
                         <option value=""></option> 
                          <?php foreach($positions as $dpm){ ?>
                            <option value="<?php echo htmlspecialchars($dpm['position_id']); ?>"><?php echo htmlspecialchars($dpm['position_name']); ?></option>
                          <?php } ?>   
                        </select>
                     </div> 
                    </div>
                  </div>
                </div>
              </div>
          </div>
              <div class="modal-footer">
                  <button type="button" class="btn btn-default" data-dismiss="modal"><?php echo _l('close'); ?></button>
                  <button type="submit" class="btn btn-secondary"><?php echo _l('submit'); ?></button>
              </div>
          </div>
          <?php echo form_close(); ?>
      </div>
  </div>
  <div class="modal fade" id="leave_modal_update" tabindex="-1" role="dialog">
  <div class="modal-dialog">
     <?php echo form_open(admin_url('hrm/day_off'),array('id'=>'leave_modal_update-form')); ?> 

      <div class="modal-content hrm-width150">
          <div class="modal-header">
              <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
              <h4 class="modal-title">
                  <span class="edit-title"><?php echo _l('edit_break_date'); ?></span>  
              </h4>
          </div>
          <div class="modal-body">
              <div id="additional_leave_update"></div> 
              <div class="row">
                <div class="col-md-4">
                  <h4><?php echo _l('general_infor') ?></h4>
                  <hr/>
                </div>
              </div>
              <div class="row">
                <div class="col-md-6">
                <?php echo render_input('leave_reason','leave_reason','') ?> 
                </div>
                <div class="col-md-6">
                <label for="leave_type" class="control-label"><?php echo _l('leave_type'); ?></label>
                <select name="leave_type" class="selectpicker" data-style="btn-outline-light" id="leave_type" data-width="100%" data-none-selected-text="<?php echo _l('dropdown_non_selected_tex'); ?>"> 
                  <option value=""></option>                  
                  <option value="holiday"><?php echo _l('holiday'); ?></option>
                  <option value="event_break"><?php echo _l('event_break'); ?></option>
                  <option value="unexpected_break"><?php echo _l('unexpected_break'); ?></option>
                </select>
                </div>

              </div>
              <hr>
              <div class="row">

                  <div class="row col-md-12"> 
                    <div class="col-md-3">
                    <?php echo render_date_input('break_date','break_date',''); ?> </div>
                    <div class="col-md-3">
                    <div class="select-placeholder form-group">
                    <label for="timekeeping"><?php echo _l('timekeeping'); ?></label>
                        <select name="timekeeping" id="timekeeping" class="selectpicker" data-style="btn-outline-light" data-width="100%" data-none-selected-text="<?php echo _l('dropdown_non_selected_tex'); ?>" data-hide-disabled="true"> 
                        
                        <option value="yes"><?php echo _l('yes'); ?></option>
                        <option value="no"><?php echo _l('no'); ?></option>
                        </select>
                     </div> 
                    </div>
                  

                    <div class="col-md-3">
                    <div class="select-placeholder form-group">
                    <label for="department"><?php echo _l('department'); ?></label>
                        <select name="department" id="department" class="selectpicker" data-style="btn-outline-light" data-width="100%" data-none-selected-text="<?php echo _l('all'); ?>" data-hide-disabled="true">  
                         <option value="0"></option> 
                          <?php foreach($departments as $dpm){ ?>
                            <option value="<?php echo htmlspecialchars($dpm['departmentid']); ?>"><?php echo htmlspecialchars($dpm['name']); ?></option>
                          <?php } ?>
                      </select>
                     </div> 
                    </div>
                    <div class="col-md-3">
                    <div class="select-placeholder form-group">							   
                    <label for="position"><?php echo _l('position'); ?></label>
                        <select name="position" id="position" class="selectpicker" data-style="btn-outline-light" data-width="100%" data-none-selected-text="<?php echo _l('all'); ?>" data-hide-disabled="true">
                         <option value="0"></option> 
                          <?php foreach($positions as $dpm){ ?>
                            <option value="<?php echo htmlspecialchars($dpm['position_id']); ?>"><?php echo htmlspecialchars($dpm['position_name']); ?></option>
                          <?php } ?>   
                        </select>
                     </div> 
                    </div>
                    
                  </div>
              
              </div>
          </div>
              <div class="modal-footer">
                  <button type="button" class="btn btn-default" data-dismiss="modal"><?php echo _l('close'); ?></button>
                  <button type="submit" class="btn btn-secondary"><?php echo _l('submit'); ?></button>
              </div>
          </div>
          <?php echo form_close(); ?>
      </div>
  </div>