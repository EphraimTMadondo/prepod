<?php defined('BASEPATH') or exit('No direct script access allowed'); ?>
<?php init_head(); ?>
<!-- BEGIN: Content-->
<div class="app-content content">
    <div class="content-overlay"></div>
    <div class="content-wrapper">
        <div class="row">
            <div class="col-md-12">
                <div class="card" style="margin-top: 2rem;">
                    <div class="card-body">
                        <h4 class="no-margin">
                            <?php echo $title; ?>
                            <?php if(!is_admin()){ ?><br />
                            <small><?php echo _l('reminders_view_none_admin'); ?></small>
                            <?php } ?>
                        </h4>
                        <hr class="hr-panel-heading" />
                           <?php render_datatable(array(
                            _l( 'reminder_related'),
                            _l('reminder_description'),
                            _l( 'reminder_date'),
                            _l( 'reminder_staff'),
                            _l( 'reminder_is_notified'),
                            ), 'reminders'); ?>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<?php $this->load->view('admin/includes/modals/reminder',array(
    'id'=>'',
    'name'=>'',
    'members'=>$members,
    'reminder_title'=>_l('edit',_l('reminder')))
    ); ?>
<?php init_tail(); ?>
<script>
        $(function(){
            initDataTable('.table-reminders', admin_url + 'misc/reminders_table', undefined, undefined, undefined, [2,'asc']);
        });
    </script>
</body>
</html>
