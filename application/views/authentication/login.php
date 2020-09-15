<?php defined('BASEPATH') or exit('No direct script access allowed'); ?>
<meta name=”viewport” content=”width=device-width, initial-scale=1?>
<style>
    #wrapper {
    margin:0;
    margin-left:auto;
    margin-right:auto;
    width:width:device-width;
    min-height: 100%;
    min-width: 320px;
}
    
</style>

<style>
    #content
    {
        background-color: #f7f7f7;
        margin-bottom:0;
    }
</style>

<style>
    .row
    {
        background-color: #f7f7f7;
       
    }
</style>
    
<style>
    ::placeholder { /* Chrome, Firefox, Opera, Safari 10.1+ */
  color: #006FB8 !important; 
  opacity: 1 !important; /* Firefox */
   font-size: large !important;
}

:-ms-input-placeholder { /* Internet Explorer 10-11 */
  color: #006FB8 !important;
   font-size: large !important;
}

::-ms-input-placeholder { /* Microsoft Edge */
  color: #006FB8 !important;
  font-size: large !important;
}
</style>

  
 

  
      

   <?php // echo form_open($this->uri->uri_string(),array('class'=>'login-form')); ?>
      
       <?php echo form_open('authentication/login_admin', ['id'=>'register-form']); ?>

     <?php hooks()->do_action('clients_login_form_start'); ?>
     <style>
         
         
     </style>
     <div style = "text-align: center;">
      <div class="card" style ="
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
    
    
}
      
 
" >
           
           
           
           
         <div class="card-body"   style = “text-align: center;”
   
 >
             
          <h1 style= "text-align: center; font-family: 'Myriad Pro Bold Condensed';     font-weight: 100;
    text-transform: uppercase;
    letter-spacing: 1px;color: #006FB8;">LOG IN</h1>
            <div style =
            
            
            " 
                max-width: 400px;
                margin: 12px auto 40px;
                font-size: 16px;
                line-height: 1.5em;
                text-align: center;
                color: #26292c;
                font-weight: normal;
                display: block;
                
                height: 100%;
                display: flex;
                flex-direction: column;
                justify-content: space-between;
                flex: 1;
                padding: 0 126px;
}
                
                
                "
                
                        
            
            
            >
            
            </div>
    
    
            <div id = "form-items"
            
            style = "
            display: inline-block;
            width: 300px;
            -webkit-box-orient: vertical;
            -webkit-box-direction: normal;
            flex-direction: column;
            
            flex-wrap: nowrap;
            -webkit-box-pack: center;
            
            "
            
            
            
            >
            <div class="form-group" style = "margin-bottom: 50px;">
             <div style= "display: flex; position: relative; border-bottom: 2px solid; justify-content: space-between;flex: 1; color: #b9babb;">
               <input type="text" autofocus="true"  style =
               "
                border: 0;
                -webkit-box-flex: 0;
                flex: 0 1 400px;
                z-index: 1;
                padding-left: 38px;
                background-position: left center;
                background-repeat: no-repeat;
                font-size: 20px;
                padding: 9px 10px;
                margin: 0;
                color: #26292C;
                font-family: "SourceSansPro",sans-serif;
                outline: none;
                border-radius: 0;
                min-width: 0;
                transition: padding 0.2s, background-position 0.2s ease;
                width: 100%;
                box-sizing: content-box;

                white);
                letter-spacing: normal;
                word-spacing: normal;
                text-transform: none;
                text-indent: 0px;
                text-shadow: none;
                display: inline-block;
                text-align: start;
                -webkit-appearance: textfield;
                -webkit-font-smoothing: antialiased;
                height: 100%;
                display: flex;
                flex-direction: column;
                justify-content: space-between;
                flex: 1;
                padding: 0 126px;
               
               
               "
               
               class="form-control" name="email" id="email" placeholder="Email">
               </div>
               <?php echo form_error('email'); ?>
            </div>
            
          <!--color #b9babb-->
            
            <div class="form-group"  style = "margin-bottom: 50px;">
                <div style=
                "
                border-bottom: 2px solid #b9babb;
                display: flex;
                position: relative;
                -webkit-box-pack: center;
                
                
                ;">
             
               <input type="password" class="form-control" name="password" id="password" placeholder = "Password" style ="
                border: 0;
                -webkit-box-flex: 0;
                flex: 0 1 400px;
                z-index: 1;
                padding-left: 38px;
                background-position: left center;
                background-repeat: no-repeat;
                font-size: 20px;
                padding: 9px 10px;
                margin: 0;
                color: #26292C;
                font-family: "SourceSansPro",sans-serif;
                outline: none;
                border-radius: 0;
                min-width: 0;
                transition: padding 0.2s, background-position 0.2s ease;
                width: 100%;
                box-sizing: content-box;
                height: 33px;
                line-height: 33px;
                white);
                letter-spacing: normal;
                word-spacing: normal;
                text-transform: none;
                text-indent: 0px;
                text-shadow: none;
                display: inline-block;
                text-align: start;
                -webkit-appearance: textfield;
                -webkit-font-smoothing: antialiased;
                height: 100%;
                display: flex;
                flex-direction: column;
                justify-content: space-between;
                flex: 1;
                padding: 0 126px;
                            
               ">
               </input>
                <small style = "margin: 16px 0 0 0px;"><a style = "" href="<?php echo site_url('authentication/forgot_password'); ?>">Forgot?</a>
                </small>
                </div>
               <?php echo form_error('password'); ?>
            </div>
            <?php if(get_option('use_recaptcha_customers_area') == 1
                     && get_option('recaptcha_secret_key') != ''
                     && get_option('recaptcha_site_key') != ''){ ?>
            <div class="g-recaptcha mbot15" data-sitekey="<?php echo get_option('recaptcha_site_key'); ?>"></div>
            <?php echo form_error('g-recaptcha-response'); ?>
            <?php } ?>
           

            <div class="form-group"  style = "margin-bottom: 20px;">
               <button type="submit" class="btn btn-info btn-block" style ="border-radius: 2px; background-color:#006FB8;"><?php echo _l('clients_login_login_string'); ?></button>
               <?php if(get_option('allow_registration') == 1) { ?>
               <!--
               <a href="<?php echo site_url('authentication/register_admin'); ?>" class="btn btn-success btn-block"  style = "border-color: #5bc0de;color: #5bc0de; background-color:white"  ><?php echo _l('clients_register_string'); ?>
               </a>
               -->
               <?php } ?>
            </div>
             <div class="checkbox" style ="margin-left: 0px;   text-align:left; margin-bottom: 50px;">
               <input type="checkbox" name="remember" id="remember">
               <label style = "max-width: 370px; font-size: 15px; color:#006FB8" for="remember">
               <?php echo _l('clients_login_remember'); ?>
               </label>
               
               
             
             
             
             
                </div>
               </div>
               </div>
   

               
            <?php hooks()->do_action('clients_login_form_end'); ?>
            <?php echo form_close(); ?>  
          

