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
                        <a href="<?php echo admin_url('custom_fields/field'); ?>" class="btn btn-primary"><?php echo _l('new_custom_field'); ?></a>
                    </div>
                    <div class="clearfix"></div>
                    <hr class="hr-panel-heading" />
                    <div class="clearfix"></div>
                    <?php render_datatable(
                        array(
                            _l('id'),
                            _l('custom_field_dt_field_name'),
                            _l('custom_field_dt_field_to'),
                            _l('custom_field_dt_field_type'),
                            _l('kb_article_slug'),
                            _l('custom_field_add_edit_active'),
                            ),'custom-fields'); ?>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <?php init_tail(); ?>
    <script>
        $(function(){
            initDataTable('.table-custom-fields', window.location.href);
        });
    </script>
</body>
</html>
