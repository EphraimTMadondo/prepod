<?php defined('BASEPATH') or exit('No direct script access allowed'); ?>
<div id="wrapper">
    
<style>
    #wrapper {
    margin:0;
    margin-left:auto;
    margin-right:auto;
    width:device-width;
}
.pb-button--primary {
    color: #fff;
    background-color: #08a742 !important;
    font-weight: 700;
    font-size:18px;
    padding: 11px 20px;
    letter-spacing: 3px;
    width:100%;
}
.custom-input{
    border: 0 !important;
    -webkit-box-flex: 0;
    flex: 0 1 400px !important;
    padding-left: 38px;
    background-position: left center;
    background-repeat: no-repeat;
    font-size: 20px !important;
    padding: 9px 10px !important;
    margin: 0;
    color: #26292C  !important;
    font-family: "SourceSansPro",sans-serif;
    outline: none;
    border-radius: 0;
    min-width: 0;
    transition: padding 0.2s, background-position 0.2s ease !important;
    width: 100%;
    box-sizing: content-box;
    
    white);
    letter-spacing: normal;
    word-spacing: normal;
    text-transform: none;
    text-indent: 0px;
    text-shadow: none;
    display: inline-block !important;
    text-align: start;
    -webkit-appearance: textfield !important;
    -webkit-font-smoothing: antialiased;
    height: 100%;
    display: flex;
    flex-direction: column;
    justify-content: space-between;
    flex: 1;
    padding: 0 126px;
    
    outline: 0;
    border-width: 0 0 2px;
    border-radius: 0%;
}
.underlined-input{
    display: flex;
    position: relative;
    border-bottom: 2px solid;
    justify-content: space-between;
    flex: 1;
    color: #b9babb;
}
label.control-label {
    text-align: left;
    width: 100%;
    margin-left: 10px;
    margin-top: 10px;
    color: #428dc7;
}

.login-title{
    text-align: center;
    font-weight: 100;
    text-transform: uppercase;
    letter-spacing: 3px;
    color: black;
    font-weight:600;
    margin: 40px;
    font-size: 23px;
}
</style>
<meta name=”viewport” content=”width=device-width, initial-scale=1″>
<div class="col-md-4 col-md-offset-4 text-center mbot15">
    
     <?php echo form_open('authentication/complete_registration', ['id'=>'register-form']); ?>
 
      <div class="panel_s">
         <div class="panel-body">
                    <h1 class="text-uppercase register-heading login-title">Please enter your password below</h1>
                    <div class="form-group register-password-group underlined-input">
                        <input type="password" class="form-control custom-input" name="password" id="password" placeholder="<?php echo _l('clients_register_password'); ?>">
                        <?php echo form_error('password'); ?>
                    </div>
                    <div class="form-group register-password-repeat-group underlined-input">
                        <input type="password" class="form-control custom-input" name="passwordr" id="passwordr" placeholder="<?php echo _l('clients_register_password_repeat'); ?>">
                        <?php echo form_error('passwordr'); ?>
                    </div>
                    
                
                    <div class="row">
                        <div class="col-md-12 text-center">
                            <div class="form-group">
                                <button id=submitBtn type="submit" autocomplete="off"  class="btn btn-info pb-button--primary"><?php echo _l('clients_register_string'); ?></button>
                            </div>
                        </div>
                    </div>
                    <div class="register-contact-custom-fields">
                        <?php echo render_custom_fields( 'contacts','',array('show_on_client_portal'=>1)); ?>
                    </div>
                
                    <?php if (is_gdpr() && get_option('gdpr_enable_terms_and_conditions') == 1) { ?>
                    <div class="col-md-12 register-terms-and-conditions-wrapper">
                        <div class="text-center">
                           <div class="checkbox">
                            <input type="checkbox" name="accept_terms_and_conditions" id="accept_terms_and_conditions" <?php echo set_checkbox('accept_terms_and_conditions', 'on'); ?>>
                            <label for="accept_terms_and_conditions">
                                <?php echo _l('gdpr_terms_agree', terms_url()); ?>
                            </label>
                        </div>
                        <?php echo form_error('accept_terms_and_conditions'); ?>
                    </div>
            </div>
            <?php } ?>
            <?php if(get_option('use_recaptcha_customers_area') == 1 && get_option('recaptcha_secret_key') != '' && get_option('recaptcha_site_key') != ''){ ?>
            <div class="col-md-12 register-recaptcha">
               <div class="g-recaptcha" data-sitekey="<?php echo get_option('recaptcha_site_key'); ?>"></div>
               <?php echo form_error('g-recaptcha-response'); ?>
           </div>

           <?php } ?>
           
           </div>
           
      
      
       
   </div>
</div>
</div>

<?php echo form_close(); ?>
</div>
</div>