<?php defined('BASEPATH') or exit('No direct script access allowed'); ?>
     <!--
<div class="widget" id="widget-<?php echo basename(__FILE__,".php"); ?>" data-name="<?php echo _l('home_weekly_payment_records'); ?>">
   <?php if(has_permission('payments','','view') || has_permission('invoices','','view_own')){ ?>
   <div class="row" id="weekly_payments">
      <div class="col-md-12">
         <div class="card">
         <div class="card-header">
              <h4 class="card-title"><?php echo _l('home_weekly_payment_records'); ?></h4>
          </div>
            <div class="card-body padding-10">
               <div class="widget-dragger"></div>
               <div class="col-md-12">
                  <?php if(has_permission('reports','','view')){ ?>
                  <a href="<?php echo admin_url('reports/sales'); ?>" class="float-right"><?php echo _l('home_stats_full_report'); ?></a>
                  <div class="clearfix"></div>
                  <?php } ?>
                  <div class="clearfix"></div>
                  <?php if (is_using_multiple_currencies()) { ?>
                    <select class="selectpicker pull-left mbot15" name="currency" data-none-selected-text="<?php echo _l('dropdown_non_selected_tex'); ?>">
                       <?php foreach($currencies as $currency){
                          $selected = '';
                          if($currency['isdefault'] == 1){
                           $selected = 'selected';
                        }
                        ?>
                        <option value="<?php echo $currency['id']; ?>" <?php echo $selected; ?> data-subtext="<?php echo $currency['name']; ?>"><?php echo $currency['symbol']; ?></option>
                        <?php } ?>
                     </select>
                   <?php } ?>
                  <div class="height-180">
                     <canvas id="weekly-payment-statistics"></canvas>
                  </div>
                   <div class="clearfix"></div>
                </div>
             </div>
          </div>
       </div>
    </div>
    <?php } ?>
 </div>

 -->