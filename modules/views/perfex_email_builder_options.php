<?php defined('BASEPATH') or exit('No direct script access allowed'); ?>

<?php init_head(); ?>
<!-- BEGIN: Content-->
<div class="app-content content">
    <div class="content-overlay"></div>
    <div class="content-wrapper">
        <div class="row">
            <?php hooks()->do_action('before_options_perfex_email_builder'); ?>
            <div class="col-md-3">
                <ul class="nav nav-pills flex-column">
                    <li class="active"><a href="<?php echo admin_url(EMAIL_BUILDER_MODULE_NAME . '/options'); ?>"><?php echo _l('general'); ?></a></li>
                    <li class="disabled"><a href="<?php echo admin_url(EMAIL_BUILDER_MODULE_NAME . '/options?group=admin-code'); ?>" class="disabled"><?php echo _l('inject_code_admin'); ?> (In Development)</a></li>
                    <li class="disabled"><a href="<?php echo admin_url(EMAIL_BUILDER_MODULE_NAME . '/options?group=client-code'); ?>" class="disabled"><?php echo _l('inject_code_client'); ?> (In Development)</a></li>
                </ul>
            </div>
            <div class="col-md-9">
                <div class="card">
                    <div class="card-body">
                        <div class="tab-pane" role="tab-pane">
                            <div id="alert-info" style="display: none;" role="alert" class="alert alert-dismissible"> 
                                <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                                <span class="alert-content"></span>
                            </div>
                            <?php echo form_open('', ['id' => 'saveEmailBuilderOptions']); ?>
                                <div class="form-group">
                                    <label for="_default_media_folder"><?php echo _l('default_media_folder'); ?></label>
                                    <input required type="text" name="default_media_folder" id="_default_media_folder" value="<?php echo get_option(EMAIL_BUILDER_MODULE_NAME . '_default_media_folder'); ?>" class="form-control" />
                                </div>
                                <div class="form-group">
                                    <label for="old_email_header"><?php echo _l('old_email_header'); ?></label>
                                    <textarea required name="old_email_header" id="old_email_header" cols="30" rows="20" class="form-control">
                                        <?php echo get_option('old_email_header'); ?>
                                    </textarea>
                                </div>
                                <div class="form-group">
                                    <label for="old_email_footer"><?php echo _l('old_email_footer'); ?></label>
                                    <textarea required name="old_email_footer" id="old_email_footer" cols="30" rows="20" class="form-control">
                                        <?php echo get_option('old_email_footer'); ?>
                                    </textarea>
                                </div>
                                <div class="form-group">
                                    <button class="btn btn-primary" type="submit"><?php echo _l('save_general_options'); ?></button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
            <div class="clearfix"></div>
        </div>
    </div>
</div>
<?php init_tail(); ?>
</body>
</html>