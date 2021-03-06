<?php init_head(); ?>
<!-- BEGIN: Content-->
<div class="app-content content">
	<div class="content-overlay"></div>
	<div class="content-wrapper">
      <div class="row">
         <div class="col-md-12">
            <div class="card">
               <div class="card-body">
                  <div class="row">
                     <div class="col-md-12">
                      <h4 class="no-margin font-bold"><i class="fa fa-edit" aria-hidden="true"></i> <?php echo htmlspecialchars(_l($title)); ?></h4>
                      <hr />
                    </div>
                  </div>
                <?php
                  $table_data = array(
                        _l('time'),
                        _l('asset_name'),
                        _l('acction_code'),
                        _l('action'),
                        _l('quantity_as_qty'),
                        _l('acction_from'),
                        _l('acction_to'),                                 
                        );
                  render_datatable($table_data,'table_action');
                        ?>
               </div>
            </div>
         </div>
      </div>
   </div>
</div>
</div>
<?php init_tail(); ?>
</body>
</html>
<script>
  initDataTable('.table-table_action', admin_url+'assets/table_action_allocate/allocation');
</script>
