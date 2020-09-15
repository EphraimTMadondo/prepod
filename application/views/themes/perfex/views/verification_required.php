<?php defined('BASEPATH') or exit('No direct script access allowed'); ?>
<div class="row">
    <div class="col-md-12">
        <div class="card section-heading section-verification-required">
           <div class="card-body">
            <h4 class="no-margin section-text"><?php echo _l('email_verification_required'); ?></h4>
        </div>
    </div>
    <div class="card">
        <div class="card-body">

            <div class="alert alert-warning no-mbot verification-required-alert">
                <h4 class="verification-required-heading"><?php echo _l('email_verification_required_message'); ?></h4>
                <p class="bold verification-required-message"><?php echo _l('email_verification_required_message_mail', site_url('verification/resend')); ?></p>
            </div>

        </div>
    </div>
</div>
</div>
