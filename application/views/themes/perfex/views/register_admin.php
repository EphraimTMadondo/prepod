<?php defined('BASEPATH') or exit('No direct script access allowed'); ?>

    
<style>
    #wrapper {
    margin:0;
    margin-left:auto;
    margin-right:auto;
    width:device-width;
    min-height: 100%;
    min-width: 320px;
}
    #content
    {
        background-color: #f9fafb;
        margin-bottom:0;
         padding-bottom: 280px;
    }

::placeholder { /* Chrome, Firefox, Opera, Safari 10.1+ */
  color: #006FB8 !important; 
  opacity: 1 !important; /* Firefox */
}

:-ms-input-placeholder { /* Internet Explorer 10-11 */
  color: #006FB8 !important;
}

::-ms-input-placeholder { /* Microsoft Edge */
  color: #006FB8 !important;
}

.form-control{
    
    border: 0;
    -webkit-box-flex: 0;
    flex: 0 1 400px;
    z-index: 1;
    padding-left: 38px;
    background-position: left center;
    background-repeat: no-repeat;
    font-size: 20px !important;
    padding: 9px 10px;
    margin: 0;
}
@media only screen and (max-width: 992px) {
    
    .form-items{
        padding: 0px 2px 10px 2px !important;
        
    }
    .heading{
        font-size: 30px !important;
        font-weight: 700 !important;
    }
     
        
    .ourForm {
         transform: translateY(0%) !important;
    }

}

.main-area{
    margin: 40px 60px 52px;
    display: block;
    box-sizing: border-box;
    background: #fff;
    margin: 0 auto;
    max-width: 400px;
    color: #b9babb;
    position: relative;
    display: flex;
    flex-direction: column;
    text-align: center;
    margin-bottom: 30px;
     /*transform: translateY(25%);*/
    margin-top:30px;
}
.login-title{
    text-align: center;
    font-weight: 100;
    text-transform: uppercase;
    letter-spacing: 3px;
    color: black;
    font-weight:600;
    margin: 40px;
    font-size: 28px;
}
body{
    min-height:100vh;
    background-color:#f7f7f7;
}
.custom-input{
    border: 0 !important;
    -webkit-box-flex: 0;
    flex: 0 1 400px !important;
    z-index: 1;
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
}

.card .card-body{
    padding:60px;
}
.main-area {
    width:500px;
    max-width:500px;
}
.pb-button--primary {
    color: #fff;
    background-color: #08a742 !important;
    font-weight: 700;
    font-size:24px;
    padding: 11px 20px;
    letter-spacing: 3px;
}

</style>


<?php echo form_open('authentication/register', ['id'=>'register-form']); ?>
<div style = "text-align: center; top: 50%;">
    <div class="card main-area">
        <div class="card-body" style ="text-align: center;">
            <!--<div class = "form-items" style = "padding: 10px 30px 10px 30px; margin-bottom: 0px;">-->
            <div class = "" style = "">
                <h1 class = "heading login-title">Try Worksuite for 14 days</h1>
                <div class="form-group mtop15 register-firstname-group" style = "margin-bottom: 50px;" >
                    <p style = "text-align: center; margin-bottom: 65px;font-size:15px;">Immediate access. No credit card required. </p>
                    <div style= "display: flex; position: relative; border-bottom: 2px solid; justify-content: space-between;flex: 1; color: #b9babb;">  
                        <img src = "<?php echo base_url();?>uploads/company/profile.png" style = "height: 20px; margin: 17px 0px; "</img>
                        <input type="text" class="form-control custom-input" name="firstname" id="firstname" placeholder="Full Name" value="<?php echo set_value('firstname'); ?>">
                    </div>
                    <?php echo form_error('firstname'); ?>
                </div>
               
                <div class="form-group register-email-group" style = "margin-bottom: 55px;">
                    <div style= "display: flex; position: relative; border-bottom: 2px solid; justify-content: space-between;flex: 1; color: #b9babb;"> 
                        <img src = "<?php echo base_url();?>uploads/company/email.jpg" style = "height: 20px; margin: 17px 0px; "</img>
                        <input type="email"  class="form-control custom-input" name="email" id="email" placeholder="Email" value="<?php echo set_value('email'); ?>">
                    </div>
                    <?php echo form_error('email'); ?>
                </div>
                <!--
                <div class="form-group register-contact-phone-group">
                    <label class="control-label" for="contact_phonenumber">Admin Phonenumber</label>
                    <input type="text" class="form-control" name="contact_phonenumber" id="contact_phonenumber" value="<?php echo set_value('contact_phonenumber'); ?>">
                </div>
                
                <div class="form-group register-position-group">
                    <label class="control-label" for="title"><?php echo _l('contact_position'); ?></label>
                    <input type="text" class="form-control" name="title" id="title" value="<?php echo set_value('title'); ?>">
                </div>
                <div class="form-group mtop15 register-company-group">
                    <label class="control-label" for="company"><?php echo _l('clients_company'); ?></label>
                    <input type="text" class="form-control" name="company" id="company" value="<?php echo set_value('company'); ?>">
                    <?php echo form_error('company'); ?>
                    
                    -->
                             
                <div class="form-group">
                    <button id=submitBtn type="submit" autocomplete="off"  class="btn btn-info btn-block  pb-button--primary" style ="border-radius: 2px;" >Continue</button>
                </div>
                <div class="register-contact-custom-fields">
                    <?php echo render_custom_fields( 'contacts','',array('show_on_client_portal'=>1)); ?>
                </div>
                        
                <div class="form-group">
                    <div class="col-md-12 text-center"></div>
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
    <?php echo form_close(); ?>
</div>
</div>
