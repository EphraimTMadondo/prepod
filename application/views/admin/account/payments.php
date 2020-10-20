<?php defined('BASEPATH') or exit('No direct script access allowed'); ?>
<?php init_head(); ?>
<div id="wrapper">
 
    
   <div class="content">
      <div class="row">
          	<div class="col-md-12">
                <div class="mtop20 mbot10">
               	<div class="card">
               	        	<div class="panel-body">
                    
                        <button  onclick ="overview()" class="center btn btn-info">Overview</button>
                          <script>
                      function overview()
                      {
                          window.open("https://worksuite.app/os/admin/account/","_self")
                      }
                      
                          
                      </script>

                         </div>
                   </div>
            </div>
				<div class="card">
					<div class="panel-body">
					 
					 
					   <table class="table table-staff dataTable no-footer dtr-inline">
  <tr>
    <th><strong>Date</strong></th>
    <th><strong>Amount</strong></th>
 
  </tr>
  	 <?php $array = $this->account_model->get_payments() ;?>
  <tr>
     <?php foreach ($array as $value) 
     {
     ?>
    <td><?php echo $value['date'] ?></td>
     <td><?php echo '$'.number_format((float)$value['amount'], 2, '.', ''); ?></td>
      </tr>
    <?php
     }
     ?>
    

 

</table>
					
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
