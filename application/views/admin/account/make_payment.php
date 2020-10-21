<?php defined('BASEPATH') or exit('No direct script access allowed'); ?>
<?php init_head(); 

$amount = 1000;
?>
<div id="wrapper">
  
  <p id="amount" style = "display:none;"><?php echo $amount ?></p>
   <div class="content">
        <div class="row" style =  "margin-top: 5%">
             <div class = "col-md-4"></div> 
             
             <div class="col-md-4" style = "text-align: center;padding-top: 50px;" >
             
             
              <div id ="step1" class="card widget" >
                        <div class="panel_s todo-panel">
                          <div  class="panel-body padding-10"style = "text-align: center;" >
                              
                                <form id="payment-form" method="POST" action="https://merchant.com/charge-card">
                                       <p class="center"> Please Enter your card details: </p>
                           
                              <hr class="mtop15">
    <div class="one-liner">
      <div class="card-frame">
        <!-- form will be added here -->
      </div>
      <!-- add submit button -->  
      
      <button id="pay-button" class="center btn btn-info" disabled>
        Pay
      </button>
    </div>
    <p class="success-payment-message"></p>
  </form>
 
         <script src="https://cdn.checkout.com/js/framesv2.min.js"></script>
         
         </div>
          </div>
           </div>
          
        
         
        


  <script>
    var payButton = document.getElementById("pay-button");
    var form = document.getElementById("payment-form");

  Frames.init("pk_test_24f39b44-cde4-4e64-bd98-629e6cea6653");
    
   

    Frames.addEventHandler(
      Frames.Events.CARD_VALIDATION_CHANGED,
      function (event) {
        console.log("CARD_VALIDATION_CHANGED: %o", event);

        payButton.disabled = !Frames.isCardValid();
      }
    );

    Frames.addEventHandler(
      Frames.Events.CARD_TOKENIZED,
      function (event) {
        var el = document.querySelector(".success-payment-message");
        el.innerHTML = "Card tokenization completed<br>" +
          "Your card token is: <span class=\"token\">" + event.token + "</span>";
           document.getElementById("token").value = event.token;
           
            amount =  document.getElementById("amount").innerHTML;
           
            document.getElementById("Paynow").style.display = "block";
            
            var body = {
  "source": {
    "type": "token",
    "token":  event.token
  },
  "amount": amount,
  "currency": "USD",
  "reference": "ORD-5023-4E89",
  "metadata": {
    "udf1": "TEST123",
    "coupon_code": "NY2018",
    "partner_id": 123989
  }
}

                                    $.ajax("https://api.sandbox.checkout.com/payments", {
                    type: 'POST', // http method
                    contentType: "application/json",
                     headers: {
                         Authorization: 'sk_test_180465f7-7ffc-4bc3-8fcc-c5f9b9a0aefd', 
                        
                    
                     },
                    
            
                    data:   JSON.stringify(body)

                    
                    , success: function(data, status, xhr) { // success callback function
                    console.log('success');
                    if(status == "success")
                
                    {
                        alert("<?php echo $this->account_model->add_payment($amount)?>");
                    window.open("https://worksuite.app/os/admin/account/payments?payment_made=yes","_self");
                    }
                    else
                    {
                        window.open("https://worksuite.app/os/admin/account/make_payment?payment_failed=yes","_self");

                    }
                    }
                    , error: function(jqXhr, textStatus, errorMessage) { // error callback
                    console.log('error');
                            window.open("https://worksuite.app/os/admin/account/make_payment?payment_failed=yes","_self");
                    
                    }
                    });
                   

              
           
        
           
           
      }
    );

    form.addEventListener("submit", function (event) {
      event.preventDefault();
      Frames.submitCard();
    });
  </script>
  </div>
   <div class = "col-md-4"></div> 
  
  
   </div>
      
      <div class="row">
          
        
               
                     
        <div class = "col-md-4"></div>     
        
         <div class="col-md-4" style = "text-align: center;padding-top: 50px;" >
         
             
            
                    
                      <div id = "Paynow" class="card widget" style ="display : none;">
                        <div class="panel_s todo-panel">
                          <div  class="panel-body padding-10"style = "text-align: center;" >
                              
                            
                                 <?php echo form_open('admin/account/make_payment', ['id'=>'register-form']); ?>
                                 <p style = "text-align: center; margin-bottom: 10px;font-size:15px;">Please select your payment method</p>
                                    <hr class="mtop15">
                                <input type="token" name="token" id="token">
                                 <button class="center btn btn-info">Paynow</button>
                               
                               
                                   <?php echo form_close(); ?>
                              
                          </div>
                         
                          
                        </div>
                        
                    </div>
             
                            
                                                   

      </div>
         <div class = "col-md-4"></div>    
   </div>
</div>

<!-- /.modal -->

<?php init_tail(); ?>

</body>
</html>
