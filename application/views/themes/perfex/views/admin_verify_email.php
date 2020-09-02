<?php defined('BASEPATH') or exit('No direct script access allowed'); ?>
<style>
    #wrapper {
    margin:0;
    margin-left:auto;
    margin-right:auto;
    width:device-width;
}
.dead-center {
    margin: 0;
    position: absolute;
    top: 50%;
    -ms-transform: translateY(-50%);
    transform: translateY(-50%);
    left: 0px;
    right: 0px;
}
body #wrapper{
    margin: 0;
    position: absolute;
    top: 50%;
    -ms-transform: translateY(-50%);
    transform: translateY(-50%);
    left: 0px;
    right: 0px;
    min-height: initial;
}
h1.text-uppercase.register-heading {
    max-width: 500px;
    margin: auto;
    padding-bottom:20px;
}
</style>

<div id="wrapper">
    

    <meta name=”viewport” content=”width=device-width, initial-scale=1″>
    <div class="text-center">
        <h1 class="text-uppercase register-heading">Nice! You're on your way to becoming a Worksuite user.</h1>
        <label class="control-label" for="firstname">Please check your email to confirm your account.</label><br/>
        <label class="control-label" for="firstname">If you do not see your email please check your Spam/Junk folder for the email or <a href="https://worksuite.app/os/authentication/resend_verification">resend Verification Link</a></label>
        <!--Add a resend verification link button-->
        <br/>
        <?Php if(isset($resend_email)){
            ?>
            <label class="control-label test-success"style="margin-top:20px; color: white; font-size: 15px; padding: 5px 20px; background: #37e622; border-radius: 10px;">Verification Link has been resent.</a></label>
            <?Php
        }
        ?>

    </div>
</div>