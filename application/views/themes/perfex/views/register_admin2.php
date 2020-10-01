<?php defined('BASEPATH') or exit('No direct script access allowed'); ?>
<div id="wrapper">
    
<style>
#wrapper {
    margin:0;
    margin-left:auto;
    margin-right:auto;
    width:device-width;
    min-height: 100%;
    min-width: 320px;
}
#content{
    background-color: #f9fafb;
    margin-bottom:0;
    padding-bottom: 280px;
}

@media only screen and (max-width: 992px) {
        
    .ourForm{
        transform: translateY(0%) !important;
    }
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
    background-color:#f9fafb;
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
.dropdown.bootstrap-select.form-control.custom-input.bs3 {
    background: transparent;
    box-shadow: initial;
    padding: 0px !important;
}
</style>

<meta name=”viewport” content=”width=device-width, initial-scale=1″>
<!-- <div class="col-md-4 col-md-offset-4 text-center mbot15"> -->
<div style = "text-align: center; top: 50%;" >
    <?php echo form_open('authentication/register2', ['id'=>'register-form']); ?>
    <div class="card main-area ">
        <div class="card-body" style ="height: 100%; justify-content: space-between; ">
            <h1 class = "heading login-title">COMPANY DETAILS</h1>
            <div class="form-group mt-1 register-company-group underlined-input">
                <input type="text"  placeholder = <?php echo _l('clients_company'); ?> class="form-control custom-input" name="company" id="company" value="<?php echo set_value('company'); ?>">
                <?php echo form_error('company'); ?>
            </div>
                    
            <div class="form-group mt-1 register-company-group underlined-input">
                <input type="text"  placeholder ="Company Username" class="form-control custom-input" name="company_username" id="company_username" value="<?php echo set_value('company_username'); ?>">
                <?php echo form_error('company_username'); ?>
            </div>
            
            <div class="form-group register-company-phone-group underlined-input">
                <input type="text" class="form-control custom-input" name="phonenumber" id="phonenumber" placeholder=<?php echo _l('clients_phone'); ?> value="<?php echo set_value('phonenumber'); ?>">
            </div>
            <div class="form-group register-address-group underlined-input">
                <input type="text" class="form-control custom-input" placeholder = <?php echo _l('clients_address'); ?> name="address" id="address" value="<?php echo set_value('address'); ?>">
            </div>
                    
            <div class="form-group register-city-group underlined-input">
                <input type="text" placeholder = <?php echo _l('clients_city'); ?> class="form-control custom-input" name="city" id="city" value="<?php echo set_value('city'); ?>">
            </div>
                    
            <div class="form-group register-country-group">
                <label class="control-label" for="country"><?php echo _l('clients_country'); ?></label>
                <select data-none-selected-text="<?php echo _l('dropdown_non_selected_tex'); ?>" data-live-search="true" name="country" class="form-control custom-input" id="country">
                    <option value=""></option>
                    <?php foreach(get_all_countries() as $country){ ?>
                    <option value="<?php echo $country['country_id']; ?>"<?php if(get_option('customer_default_country') == $country['country_id']){echo ' selected';} ?> <?php echo set_select('country', $country['country_id']); ?>><?php echo $country['short_name']; ?></option>
                    <?php } ?>
                </select>
            </div>


            
                    
            <?php if(get_option('company_requires_vat_number_field') == 1){ ?>
            <div class="form-group register-vat-group underlined-input" style="display:none">
                
                <input type="text"  placeholder=<?php echo _l('clients_vat'); ?> class="form-control custom-input" name="vat" id="vat" value="<?php echo set_value('vat'); ?>">
            </div>
            <?php } ?>
            <div class="form-group">
                <button type="submit" autocomplete="off"  class="btn btn-secondary btn-block pb-button--primary">Submit</button>
            </div>
            <div class="register-company-custom-fields underlined-input" style="display:none;">
                <?php echo render_custom_fields( 'customers','',array('show_on_client_portal'=>1)); ?>
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
    <?php echo form_close(); ?>
</div>
        