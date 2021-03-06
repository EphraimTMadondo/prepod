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
                      <div class="_buttons">
                        <a href="#" onclick="new_category(); return false;" class="btn btn-primary"><?php echo _l('new_expense_category'); ?></a>
                    </div>
                    <div class="clearfix"></div>
                    <hr class="hr-panel-heading" />
                    <div class="clearfix"></div>
                    <?php render_datatable(array(_l('name'),_l('dt_expense_description'),_l('options')),'expenses-categories'); ?>
                </div>
            </div>
        </div>
    </div>
</div>
</div>
<?php $this->load->view('admin/expenses/expense_category'); ?>
<?php init_tail(); ?>
<script>
    $(function(){
        initDataTable('.table-expenses-categories', window.location.href, [2], [2]);
    });
</script>
</body>
</html>
