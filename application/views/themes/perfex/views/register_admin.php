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
    background-color: #006FB8 !important;
    font-weight: 700;
    font-size:24px;
    padding: 11px 20px;
    letter-spacing: 3px;
}

</style>


<?php echo form_open('authentication/register', ['id'=>'register-form']); ?>

<script>
  window.fbAsyncInit = function() {
    FB.init({
      appId      : '795771364508068',
      cookie     : true,
      xfbml      : true,
      version    : 'v8.0'
    });
      
    FB.AppEvents.logPageView();  
    FB.logout();
     var token =  FB.AppEvents.getUserID();
    
    
    // *** here is my code ***
    if (typeof facebookInit == 'function') {
        
        facebookInit();
    }
      
      
  };

  (function(d, s, id){
     var js, fjs = d.getElementsByTagName(s)[0];
     if (d.getElementById(id)) {return;}
     js = d.createElement(s); js.id = id;
     js.src = "https://connect.facebook.net/en_US/sdk.js";
     fjs.parentNode.insertBefore(js, fjs);
   }(document, 'script', 'facebook-jssdk'));
   


</script>

<div id = "site" style = "display: none"><? echo base_url() ?></div>
             




<div style = "text-align: center; top: 50%;">
    <div class="card main-area">
        <div class="card-body" style ="text-align: center;">
            <!--<div class = "form-items" style = "padding: 10px 30px 10px 30px; margin-bottom: 0px;">-->
            <div class = "" style = "">
                <h1 class = "heading login-title">Try Worksuite for 14 days</h1>
                <div class="form-group mtop15 register-firstname-group" style = "margin-bottom: 50px;" >
                    <p style = "text-align: center; margin-bottom: 55px;font-size:15px;">Immediate access. No credit card required. </p>
                    <div >
                                 <!--Google Sign In -->
                         <meta name="google-signin-scope" content="profile email">
    <meta name="google-signin-client_id" content="875467174336-7j1j7g7k4ket6s0i71jrejefsqh0i7mv.apps.googleusercontent.com">
    <script src="https://apis.google.com/js/platform.js" async defer></script>
    
    <div style = "display:flex;padding-bottom: 50px;
">
                    <fb:login-button 
                            
                            id = "loginFB"
                          scope="public_profile,email"
                          onlogin="checkLoginState();"
                          data-button-type="continue_with" 
                          data-layout="default" 
                          
                           data-use-continue-as="false" 
                           data-width=""
                           data-size="large"
                           
                           
                          
                          >
                        </fb:login-button>
                        
                       <div style="padding-right: 3%"></div> 
                
                <style>
                            element.style {
                            height: 36px;
                            width: none !important;
                        }
                          </style>  
                        <div class="g-signin2" data-onsuccess="onSignIn" data-theme="dark"
                            style =""
                        
                        
                        ></div>
    
    </div>

                  
                        
                    <div style= "display: flex; position: relative; border-bottom: 2px solid; justify-content: space-between;flex: 1; color: #b9babb;">  
                        <img src = "<?php echo base_url();?>uploads/company/profile.png" style = "height: 20px; margin: 17px 0px; "</img>
                        <input type="text" class="form-control custom-input" name="firstname" id="firstname" placeholder="Full Name" value="<?php echo set_value('firstname'); ?>">
                    </div>
                    <?php echo form_error('firstname'); ?>
                </div>
         
               <input name="facebook" id="facebook" value = "none" style ="display:none;">
               
                 <input name="google" id="google" value ="none" style ="display:none;">
                
               <?
               if($_SESSION['other_verification'] != "yes")
               {
                   
                  ?>
                <div id = "emaildiv" class="form-group register-email-group" style = "margin-bottom: 55px;">
                    <div style= "display: flex; position: relative; border-bottom: 2px solid; justify-content: space-between;flex: 1; color: #b9babb;"> 
                    
                        <img src = "<?php echo base_url();?>uploads/company/email.jpg" style = "height: 20px; margin: 17px 0px; "</img>
                        
                        <input type="email"  class="form-control custom-input" name="email" id="email" placeholder="Email" value="<?php echo set_value('email'); ?>">
                    </div>
                    <?php echo form_error('email'); ?>
                </div>
                <?
                
                }
                
                ?>
                
                 <script>
             function facebookInit()
                {
              //  alert("facebook init wrking");
                                FB.getLoginStatus(function(response) {
  
   var stringj = JSON.stringify(response);
   if(stringj.includes("unknown"))
   {
       FB.logout();
    //   alert("unkown");
       document.getElementById("facebook").value = "none";

        
   }
   else
   {
    //     alert("logged in");
         
                    FB.getLoginStatus(function(response) {
                   FB.logout();
                   var stringj = JSON.stringify(response);
                   var array1 = res = stringj.split('"userID"');
                   var split2 = res[1];
                  var split3 = split2.split('"');
                    var split4 = split3[1].split(':');
                    
                    var userID = split3[1];
                  //  alert(userID);
    document.getElementById("emaildiv").style.visibility = "hidden";
   }
   
   // alert(stringj);
  //  document.getElementById("email").value = "dummyvalue@dum.com";
  //  document.getElementById("facebook").value = userID;

  //  document.getElementById("emaildiv").style.visibility = "hidden";
    
});
 }
                }
    </script>
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
                 <script>
            
              
              
             function newlogin()
             {
//alert("run if clicked?");
                  if(document.getElementById("emaildiv").style.visibility == "hidden")
    {
    
    document.getElementById("emaildiv").style.visibility = "block";
    }
    
                 
             }
             
        
             
                function checkLoginState()
                {
                


           
            FB.getLoginStatus(function(response) {
  
   
                       // alert("checklogin running");
                        
                       var stringj = JSON.stringify(response);
                       var array1 = res = stringj.split('"userID"');
                       var split2 = res[1];
                      var split3 = split2.split('"');
                        var split4 = split3[1].split(':');
                        
                        var userID = split3[1];
                     //   alert(userID);
                       // document.getElementById("email").value = "dummyvalue@dum.com";
                        document.getElementById("facebook").value = userID;
                    
                        document.getElementById("emaildiv").style.visibility = "hidden";
                        
                        
                    });
                                
                }
                </script>
                
                <script>
      function onSignIn(googleUser) {
        //  alert("google sign in");
        // Useful data for your client-side scripts:
        var profile = googleUser.getBasicProfile();
        console.log("ID: " + profile.getId()); // Don't send this directly to your server!
        console.log('Full Name: ' + profile.getName());
        console.log('Given Name: ' + profile.getGivenName());
        console.log('Family Name: ' + profile.getFamilyName());
        console.log("Image URL: " + profile.getImageUrl());
        console.log("Email: " + profile.getEmail());

        // The ID token you need to pass to your backend:
        var id_token = googleUser.getAuthResponse().id_token;
        console.log("ID Token: " + id_token);
        
         $.ajax({
                url: "<?php echo base_url();?>index.php/authentication/google_login",
                type: "POST",
                success: function(result){
                    
                     if(result == 1)
                     {
                         var site = document.getElementById("site").innerHTML;
                        window.location.href = site+"/admin";
                     }
                     else
                     {
                    // alert("Google login failed please try again.");
                     }
                    
                },
                data:{
                    id_token: id_token
                }
            });
        
   
  //  document.getElementById("email").value = "dummyvalue@dum.com";
  document.getElementById("google").value = id_token;
  // alert("google value is"+ document.getElementById("google").value );
    

    document.getElementById("emaildiv").style.visibility = "hidden";
    //  document.getElementById("logoutframe").style.visibility = "block";   
        

        
        
      }
      
    </script>
  
</div>
</div>
