<?php 
header("Access-Control-Allow-Origin: *");
defined('BASEPATH') or exit('No direct script access allowed'); ?>
<meta name=”viewport” content=”width=device-width, initial-scale=1?>

<!---- APP ID 

795771364508068F
VERSION v8.0

--->






<script>
  window.fbAsyncInit = function() {
    FB.init({
      appId      : '795771364508068',
      cookie     : true,
      xfbml      : true,
      version    : 'v8.0'
    });
      
    FB.AppEvents.logPageView();  
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
   
   function facebookInit()
   {
       
                    
                        
                
            
          
            FB.getLoginStatus(function(response) {
  
   var stringj = JSON.stringify(response);
   // alert(stringj);
       FB.logout();
  
    
});
            
                
                    
                    
   }

</script>
<div id = "site" style ="display: none;">
<?php echo site_url();?>
</div>


<div id="fb-root"></div>


<style>
#wrapper {
    margin:0;
    margin-left:auto;
    margin-right:auto;
    width:width:device-width;
    min-height: 100%;
    min-width: 320px;
}

#content
{
    background-color: #f9fafb;
    margin-bottom:0;
    /*padding-bottom: 280px;*/
}

.row
{
    background-color: #f9fafb;
}

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
    font-size: 34px;
}
body{
    min-height:100vh;
    background-color:#f9fafb;
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
  
    font-weight: 700;
    font-size:24px;
    padding: 11px 20px;
    letter-spacing: 3px;
}
</style>

  
 

  
      

   <?php // echo form_open($this->uri->uri_string(),array('class'=>'login-form')); ?>
      
       <?php echo form_open('authentication/login_admin', ['id'=>'register-form']); ?>

     <?php hooks()->do_action('clients_login_form_start'); ?>
                     
     <div style = "text-align: center;">
      <div class="card main-area">
        <div class="card-body"   style = “text-align: center;”>
          <h1 class="login-title">LOG IN</h1>
            <div id = "form-items" style = "display: inline-block; width: 100%; -webkit-box-orient: vertical; -webkit-box-direction: normal; -webkit-box-pack: center;">
                
 <div style = "display:flex; padding-bottom: 15%;padding-top: 5%;">
                    
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
                        <!--Google Sign In -->
                         <meta name="google-signin-scope" content="profile email">
    <meta name="google-signin-client_id" content="875467174336-7j1j7g7k4ket6s0i71jrejefsqh0i7mv.apps.googleusercontent.com">
    <script src="https://apis.google.com/js/platform.js" async defer></script>
                        <div class="g-signin2" data-onsuccess="onSignIn" data-theme="dark"></div>
                        
</div>
    <script>
      function onSignIn(googleUser) {
         // alert("google running");
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
        
        
      }
    </script>
                        
                  <script>
                  
                                function newlogin()
                                {
                                                 FB.getLoginStatus(function(response) {
  if (response.status === 'connected') {
    var accessToken = response.authResponse.accessToken;
  } 
} );  
                                
                        
                                  }
                  </script>
                    
                   
                <div class="form-group" style = "margin-bottom: 50px;">
                    <div style= "display: flex; position: relative; border-bottom: 2px solid; justify-content: space-between;flex: 1; color: #b9babb;">
                 
                        <img src = "<?php echo base_url();?>uploads/company/email.jpg" style = "height: 20px; margin: 17px 0px; "</img>
                        <input type="text" autofocus="true" class="form-control custom-input" name="email" id="email" placeholder="Email">
                    </div>
                    <?php echo form_error('email'); ?>
                </div>
            
            <!--color #b9babb-->
            
            <div class="form-group"  style = "margin-bottom: 50px;">
                <div style="border-bottom: 2px solid #b9babb; display: flex; position: relative; -webkit-box-pack: center;">
                    <img src = "<?php echo base_url();?>uploads/company/password2.png" style = "height: 20px; margin: 17px 0px; "</img>

                    <input type="password" class="form-control custom-input" name="password" id="password" placeholder = "Password" ></input>
                    <small style = "margin: 16px 0 0 0px; vertical-align: middle;"><a style = "" href="<?php echo site_url('authentication/forgot_password'); ?>">Forgot?</a>
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
                   <button type="submit" class="btn btn-info btn-block pb-button--primary" style ="border-radius: 2px; background-color:blue;"><?php echo _l('clients_login_login_string'); ?></button>
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
        
         <script>
                function checkLoginState()
                {
                
           
            FB.getLoginStatus(function(response) {
  
   var stringj = JSON.stringify(response);
   var array1 = res = stringj.split('"userID"');
   var split2 = res[1];
  var split3 = split2.split('"');
    var split4 = split3[1].split(':');
  // alert(stringj);
    var userID = split3[1];


    



    
        $.ajax({
                url: "<?php echo base_url();?>index.php/authentication/facebook_login",
                type: "POST",
                success: function(result){
                    
                     if(result == 1)
                     {
                         var site = document.getElementById("site").innerHTML;
                        window.location.href = site+"/admin";
                     }
                     else
                     {
                 //  alert("Facebook login failed please try again.");
                     }
                    
                },
                data:{
                    userID: userID
                }
            });
            
            
    
});
            
                }
                </script>
    </div>

