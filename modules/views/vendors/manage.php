<?php defined('BASEPATH') or exit('No direct script access allowed'); ?>
<?php init_head(); ?>
<!-- BEGIN: Content-->
<div class="app-content content">
    <div class="content-overlay"></div>
    <div class="content-wrapper">
      <div class="row">
         <div class="col-md-12">
            
            <div class="card">
               <div class="card-body">
                  <div class="_buttons">
                     <?php if (has_permission('purchase','','create')) { ?>
                     <a href="<?php echo admin_url('purchase/vendor'); ?>" class="btn btn-info mr-1 test pull-left display-block">
                     <?php echo _l('new_vendor'); ?></a>
                     <a href="<?php echo admin_url('purchase/all_contacts'); ?>" class="btn btn-primary mr-1">
                     <?php echo _l('vendor_contacts'); ?></a>
                     
                   
                  <?php } ?>
                  </div>
                 
                  
                  
                  <div class="clearfix mt-2"></div>
                  <div class="row col-md-12"><hr/></div>
                  <?php
                     $table_data = array();
                     $_table_data = array(
                      '<span class="hide"> - </span><div class="checkbox mass_select_all_wrap"><input type="checkbox" id="mass_select_all" data-to-table="vendors"><label></label></div>',
                       array(
                         'name'=>_l('the_number_sign'),
                         'th_attrs'=>array('class'=>'toggleable', 'id'=>'th-number')
                        ),
                         array(
                         'name'=>_l('clients_list_company'),
                         'th_attrs'=>array('class'=>'toggleable', 'id'=>'th-company')
                        ),
                         array(
                         'name'=>_l('contact_primary'),
                         'th_attrs'=>array('class'=>'toggleable', 'id'=>'th-primary-contact')
                        ),
                         array(
                         'name'=>_l('company_primary_email'),
                         'th_attrs'=>array('class'=>'toggleable', 'id'=>'th-primary-contact-email')
                        ),
                        array(
                         'name'=>_l('clients_list_phone'),
                         'th_attrs'=>array('class'=>'toggleable', 'id'=>'th-phone')
                        ),
                         array(
                         'name'=>_l('customer_active'),
                         'th_attrs'=>array('class'=>'toggleable', 'id'=>'th-active')
                        ),
              
                        array(
                         'name'=>_l('date_created'),
                         'th_attrs'=>array('class'=>'toggleable', 'id'=>'th-date-created')
                        ),
                      );
                     foreach($_table_data as $_t){
                      array_push($table_data,$_t);
                     }

                     $custom_fields = get_custom_fields('customers',array('show_on_table'=>1));
                     foreach($custom_fields as $field){
                      array_push($table_data,$field['name']);
                     }

                     $table_data = hooks()->apply_filters('customers_table_columns', $table_data);

                     render_datatable($table_data,'vendors',[],[
                           'data-last-order-identifier' => 'customers',
                           'data-default-order'         => get_table_last_order('customers'),
                     ]);
                     ?>
               </div>
            </div>
         </div>
      </div>
   </div>
</div>
<?php init_tail(); ?>
</body>
</html>
