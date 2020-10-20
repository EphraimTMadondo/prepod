<?php defined('BASEPATH') or exit('No direct script access allowed'); ?>
<?php init_head(); ?>
<div id="wrapper">
    <style>
        .newTitle
            {
                font-size: 25px;
                padding-top:15px;
            }
    </style>
    <style>

.choose{
    border-color: grey;
   
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
  background-color: green;
  color: white;
}
.selected1{
    border-color:#08a742;
    
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
    background-color:#08a742;
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

.panel_s .panel-body{
    padding:60px;
}
.main-area {
    /*width:500px;*/
    max-width:500px;
}
.pb-button--primary {
    color: #fff;
    background-color: #08a742 !important;
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
    
   <div class="content">
      
      <div class="row">
          
        
               
                     
        <div class = "col-md-4"></div>     
        
         <div class="col-md-4" style = "text-align: center;padding-top: 50px;" >
             <?php echo form_open('admin/account/update', ['id'=>'register-form']); ?>
             
              <div class="card widget" >
                        <div class="panel_s todo-panel">
                          <div  class="panel-body padding-10"style = "text-align: center;" >
                              
                                 <div>
                              
                                 <p style = "text-align: center; margin-bottom: 10px;font-size:15px;">How many people in your company will use Worksuite? </p>
                                    <hr class="mtop15">
                                <div style = "display:flex; text-align: center;" >
                                    <div id = "1" class = "choose"  onclick="selected(this.id)"><strong> 1-2</strong></div>
                                    <div id = "2" class = "choose"  onclick="selected(this.id)"><strong> 3-5</strong></div>
                                    <div id = "3" class = "choose"  onclick="selected(this.id)"><strong> 6-10</strong></div>
                                    <div id = "4" class = "choose"  onclick="selected(this.id)"><strong> 11-50</strong></div>
                                    <div id = "5" class = "choose"  onclick="selected(this.id)"><strong> 50+</strong></div>
                                </div>
                                <input type="choose" name="choose" id="choose" style= "display : none !important;">
                                <?php echo form_error('choose'); ?>
                               
                               </div>
                              
                          </div>
                         
                          
                        </div>
                        
                    </div>
             
                               <button class="center btn btn-info">Update</button>
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
    <?php echo form_close(); ?>
      </div>
         <div class = "col-md-4"></div>    
   </div>
</div>

<!-- /.modal -->

<?php init_tail(); ?>

</body>
</html>
