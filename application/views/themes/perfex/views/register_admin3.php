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

@media only screen and (max-width: 992px) {
    .ourForm{
         transform: translateY(0%) !important;
    }
}
.choose{
    border-color: grey;
    height: 60px;
    width: 85px;
    border-style: solid;
    border-width: thin;
    margin-right: 1%;
    margin-left: 1%;
    text-align: center;
    font-size:140%;
    padding-top: 5%;
    padding-bottom: 5%;
    font-weight: 100;
     
}
.choose:hover {
  background-color: #006FB8 !important;
  color: white;
}
.selected1{
    border-color:#08a742;
    height: 60px;
    width: 85px;
    border-style: solid;
    border-width: thin;
    margin-right: 1%;
    margin-left: 1%;
    text-align: center;
    font-size:140%;
    padding-top: 5%;
    padding-bottom: 5%;
    font-weight: 100;
    background-color: #006FB8 !important;

    color: white;
}
.customers-extended{
    /*background-color:red;*/
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
    /*width:500px;*/
    max-width:500px;
}
.pb-button--primary {
    color: #fff;
     background-color: #006FB8 !important;

    font-weight: 700;
    font-size:18px;
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
.bootstrap-select:not([class*=col-]):not([class*=form-control]):not(.input-group-btn) {
    width: 100%;
}
.choose:hover {
    background-color: #08a742;
    border-color:#08a742;
    color: white;
}
.choose{
    color: #000;
}
p {
    color: #26292c94;
}
</style>

<meta name=”viewport” content=”width=device-width, initial-scale=1″>
 <!--<div class="col-md-4 col-md-offset-0 col-sm-8 col-sm-offset-2">-->
<div style = "text-align: center; top: 50%;" >
 <?php echo form_open('authentication/register3', ['id'=>'register-form']); ?>
    <div class="card main-area">
        <div class="card-body" style ="height: 100%; justify-content: space-between; ">
            
        <h1 class="login-title">MAKE WORKSUITE TRULY YOURS</h1>
     
        <p style = "text-align: center; margin-bottom: 35px;font-size:15px;">We'll use this info to personalize your experience. </p>

        <div class="form-group register-address-group" style = "margin-bottom: 20px;">
        <p style = "text-align: center; margin-bottom: 10px;font-size:15px;">How many people in your company will use Worksuite? </p>
        <div style = "display:flex;">
            <div id = "1" class = "choose"  onclick="selected(this.id)"><strong> 1-2</strong></div>
            <div id = "2" class = "choose"  onclick="selected(this.id)"><strong> 3-5</strong></div>
            <div id = "3" class = "choose"  onclick="selected(this.id)"><strong> 6-10</strong></div>
            <div id = "4" class = "choose"  onclick="selected(this.id)"><strong> 11-50</strong></div>
            <div id = "5" class = "choose"  onclick="selected(this.id)"><strong> 50+</strong></div>
        </div>
        <input type="choose" name="choose" id="choose" style= "display : none !important;">
        <?php echo form_error('choose'); ?>
    </div>
    <script>
        function selected(id){
            document.getElementById("choose").value = id;
           document.getElementById(id).className = "selected1"; 
            
            for (i = 1; i < 6; i++) {
                if(i != id){
                    document.getElementById(i).className = "choose"; 
                }
            }
        }
    </script>
    <?php
    
    $industries = ['Software, App Development','Health','Tech Startup', 'Education and Training','Real Estate','Creative Agency','Financial or Credit Services','News, Media and Publications','Manufacturing',
    'IT Services','Consulting','Construnction','Trade(Retail, Wholesale)','Other'];
    
    
    ?>
    <style>
        .selected
        {
            display:none; 
        }
    </style> 
    <label class="control-label" for="country">Company Industry</label>
    <div class="form-group register-country-group" style = "margin-bottom: 45px;">
        <select data-none-selected-text="<?php echo _l('dropdown_non_selected_tex'); ?>"  name="industry" class="" id="industry">
            <option value=""></option>
            <option value ="Software, App Development" >Software, App Development</option>
            <option value ="Health">Health</option>
            <option value ="Tech Startup">Tech Startup</option>
            <option value ="Education and Training">Education and Training</option>
            <option value ="Real Estate">Real Estate</option>
            <option value ="Creative Agency">Creative Agency</option>
            <option value ="Financial or Credit Services">Financial or Credit Services</option>
            <option value ="News, Media and Publications">News, Media and Publications</option>
            <option value ="Manufacturing">Manufacturing</option>
            <option value ="IT Services">IT Services</option>
            <option value ="Consulting">Consulting</option>
            <option value ="Construnction">Construnction</option>
            <option value ="Trade(Retail, Wholesale)">Trade(Retail, Wholesale)</option>
            <option value ="Other">Other</option>
        </select>
    </div>

    <div class="form-group">
        <button type="submit" autocomplete="off"  class="btn btn-info btn-block pb-button--primary">Start using Worksuite</button>
    </div>
                    
          

             
           
</div>
</div>
<?php echo form_close(); ?>
</div>    