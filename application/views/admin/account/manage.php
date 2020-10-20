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
   <div class="content">
      <div class="row">
         <div class="col-md-12">
            <div class="mtop20 mbot10">
               <div style ="text-align:center">
                   <?php 
                   
                        $Date =  date("Y-m-d"); 
                   
                    if($Date < $this->account_model->get_next_payment_date())
                    {
                   ?>
                     <img src = "<?php echo base_url();?>uploads/company/paidup.png" style = "height: 100px;"</img>
                      <p class = "center">All Paid Up!</p>
                   <?php
                    }
                    else
                    {
                   ?>
                             <img src = "<?php echo base_url();?>uploads/company/paydue.png" style = "height: 100px;"</img>
                            <p class = "center">Payment Due!</p>
                    <?php
                    }
                   ?>
                   
                   </div>
            </div>
            <div class="row">
               <div class="col-md-12" id="small-table">
                  <div class="card">
          
                  
            
                   
               </div>
               <div class = "row" style="padding-left:7%;">
                   
                   <div class = "col-md-3" style ="text-align: center;">
                <div class="card widget">
                        <div class="panel_s todo-panel">
                          <div  class="panel-body padding-10">
                              <div class="col-md-12 text-stats-wrapper"></div>
                              <p class="center newTitle">  <?php print_r($this->account_model->get_status()) ;?> </p>
                              
                              <hr class="mtop15">
                                <p class = "center">Account Status</p>
                               
                              
                          </div>
                          
                        </div>
                        
                    </div>
                      <button id="history" onclick ="history()" class="center btn btn-info">Payment History</button>
                      </div>
                    <div class = "col-md-1"></div>
                           <div class = "col-md-3" style ="text-align: center;">
                <div class="card widget">
                        <div class="panel_s todo-panel">
                          <div  class="panel-body padding-10">
                              <div class="col-md-12 text-stats-wrapper"></div>
                              <p class="center newTitle"> <?php print_r($this->account_model->get_next_payment_date()) ;?> </p>
                              
                              <hr class="mtop15">
                                <p class = "center">Next Payment</p>
                               
                              
                          </div>
                          
                        </div>
                        
                    </div>
                      <button onclick = "make_payment()" class="center btn btn-info">Make Payment</button>
                      </div>
                    <div class = "col-md-1"></div>
                  <div class = "col-md-3" style ="text-align: center;">
                <div class="card widget">
                        <div class="panel_s todo-panel">
                          <div  class="panel-body padding-10">
                              <div class="col-md-12 text-stats-wrapper"></div>
                              <p class="center newTitle"> <?php print_r($this->account_model->get_max_users()) ;?> </p>
                              
                              <hr class="mtop15">
                                <p class = "center">Max Users</p>
                               
                              
                          </div>
                          
                        </div>
                        
                    </div>
                      <button id ="update" onclick="update()" class="center btn btn-info">Update</button>
                      </div>
                      <div id ="site" name = "<?php echo site_url();?>" style = "">
                      "<?php echo site_url();?>"
                </div>
                      <script>

                      function update()
                      {
                          window.open(document.getElementById("site").name +"/account/update","_self")
                      }
                      
                       function history()
                      {
                          window.open(document.getElementById("site").name +"/account/payments","_self")
                      }
                       function make_payment()
                      {
                          window.open(document.getElementById("site").name +"/account/make_payment","_self")
                      }
                          
                      </script>
                    </div>
               <div class="col-md-7 small-table-right-col">
                  <div id="expense" class="hide">
                  </div>
               </div>
            </div>
         </div>
      </div>
   </div>
</div>

<!-- /.modal -->

<?php init_tail(); ?>

</body>
</html>
