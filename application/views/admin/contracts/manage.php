<?php defined('BASEPATH') or exit('No direct script access allowed'); ?>
<?php init_head(); ?>

<!-- BEGIN: Content-->
<div class="app-content content">
    <div class="content-overlay"></div>
    <div class="content-wrapper">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="_filters _hidden_inputs hidden">
                        <?php
                        echo form_hidden('exclude_trashed_contracts',true);
                        echo form_hidden('expired');
                        echo form_hidden('without_dateend');
                        echo form_hidden('trash');
                        foreach($years as $year){
                         echo form_hidden('year_'.$year['year'],$year['year']);
                     }
                     for ($m = 1; $m <= 12; $m++) {
                        echo form_hidden('contracts_by_month_'.$m);
                    }
                    foreach($contract_types as $type){
                        echo form_hidden('contracts_by_type_'.$type['id']);
                    }
                    ?>
                </div>
                <div class="card-body _buttons">
                    <?php if(has_permission('contracts','','create')){ ?>
                    <a href="<?php echo admin_url('contracts/contract'); ?>" class="btn btn-primary"><?php echo _l('new_contract'); ?></a>
                    <?php } ?>
                    <select class="selectpicker" id="select-filter" data-live-search="true" onChange="custom_view()" data-style="btn-primary">
                        <option value="exclude_trashed_contracts" data-tokens="<?php echo _l('contracts_view_exclude_trashed'); ?>"><?php echo _l('contracts_view_exclude_trashed'); ?></option>
                        <?php if(count($groups) > 0){ ?>
                            <optgroup label="<?php echo _l('customer_groups'); ?>">
                                <?php foreach($groups as $group){ ?>
                                <option value="customer_group_<?php echo $group['id']; ?>" data-tokens="<?php echo $group['name']; ?>"><?php echo $group['name']; ?></option>
                                <?php } ?>
                            </optgroup>
                        <?php } ?>
                        <option value="exclude_trashed_contracts" data-tokens="<?php echo _l('contracts_view_exclude_trashed'); ?>"><?php echo _l('contracts_view_exclude_trashed'); ?></option>
                        <option value="" data-tokens="<?php echo _l('contracts_view_all'); ?>"><?php echo _l('contracts_view_all'); ?></option>
                        <option value="expired" data-tokens="<?php echo _l('contracts_view_expired'); ?>"><?php echo _l('contracts_view_expired'); ?></option>
                        <option value="without_dateend" data-tokens="<?php echo _l('contracts_view_without_dateend'); ?>"><?php echo _l('contracts_view_without_dateend'); ?></option>
                        <option value="trash" data-tokens="<?php echo _l('contracts_view_trash'); ?>"><?php echo _l('contracts_view_trash'); ?></option>
                        <?php if(count($years) > 0){ ?>
                            <?php foreach($years as $year){ ?>
                                <option value="year_<?php echo $year['year']; ?>" data-tokens="<?php echo _l('customers_assigned_to_me'); ?>"><?php echo $year['year']; ?></option>
                            <?php } ?>
                        <?php } ?>
                        <optgroup label="<?php echo _l('months'); ?>">
                            <?php for ($m = 1; $m <= 12; $m++) { ?>
                                <option value="contracts_by_month_<?php echo $m; ?>" data-tokens="<?php echo _l(date('F', mktime(0, 0, 0, $m, 1))); ?>"><?php echo _l(date('F', mktime(0, 0, 0, $m, 1))); ?></option>
                            <?php } ?>
                        </optgroup>
                        <?php if(count($contract_types) > 0){ ?>
                            <?php foreach($contract_types as $type){ ?>
                                <option value="contracts_by_type_<?php echo $type['id']; ?>" data-tokens="<?php echo $type['name']; ?>"><?php echo $type['name']; ?></option>
                            <?php } ?>
                        <?php } ?>
                    </select>
                    <a href="#" onClick="toggleStats();" class="float-right btn btn-primary ml-1 mb-1 btn-with-tooltip cursor-pointer" title="<?php echo _l('view_stats_tooltip'); ?>"><i class="bx bx-bar-chart-alt"></i></a>
                    <div class="clearfix"></div>
                    <hr class="hr-panel-heading stats-top hide" />
                    <div class="row" id="contract_summary">
                        <?php $minus_7_days = date('Y-m-d', strtotime("-7 days")); ?>
                        <?php $plus_7_days = date('Y-m-d', strtotime("+7 days"));
                        $where_own = array();
                        if(!has_permission('contracts','','view')){
                            $where_own = array('addedfrom'=>get_staff_user_id());
                        }
                        ?>
                        
                        <?php
                                 $companyusername =  $_SESSION['current_company'];
                        ?>
                        <div class="col-md-12 stats-top hide">
                            <h4 class="no-margin text-success"><?php echo _l('contract_summary_heading'); ?></h4>                                                                           
                        </div>
                        <div class="col-md-2 col-xs-6 border-right stats-top hide">
                            <h3 class="bold">
                                         <?php echo total_rows(db_prefix().'contracts','(DATE(dateend) >"'.date('Y-m-d').'" AND company_username='."'$companyusername'".' AND trash=0' .(count($where_own) > 0 ? ' AND addedfrom='.get_staff_user_id() : '').') OR (DATE(dateend) IS NULL AND company_username='."'$companyusername'".' AND trash=0' .(count($where_own) > 0 ? ' AND addedfrom='.get_staff_user_id() : '').')'); ?>                            </h3>
                        
                            <span class="text-info"><?php echo _l('contract_summary_active'); ?></span>
                        </div>
                        <div class="col-md-2 col-xs-6 border-right stats-top hide">
                            <h3 class="bold"><?php echo total_rows(db_prefix().'contracts',array_merge(array('DATE(dateend) <'=>date('Y-m-d'),'trash'=>0,"company_username='$companyusername'"),$where_own)); ?></h3>

                            <span class="text-danger"><?php echo _l('contract_summary_expired'); ?></span>
                        </div>
                        <div class="col-md-2 col-xs-6 border-right stats-top hide">
                            <h3 class="bold"><?php
                                echo total_rows(
                                 db_prefix().'contracts','dateend BETWEEN "'.$minus_7_days.'" AND "'.$plus_7_days.'" AND trash=0 AND dateend is NOT NULL AND dateend >"'.date('Y-m-d').'"' .' AND company_username='."'$companyusername'". (count($where_own) > 0 ? ' AND addedfrom='.get_staff_user_id() : '')); ?></h3>

                                <span class="text-warning"><?php echo _l('contract_summary_about_to_expire'); ?></span>
                            </div>
                            <div class="col-md-2 col-xs-6 border-right stats-top hide">
                                <h3 class="bold"><?php
                                        echo total_rows(db_prefix().'contracts','dateadded BETWEEN "'.$minus_7_days.'" AND "'.$plus_7_days.'" AND trash=0'.' AND company_username='."'$companyusername'". (count($where_own) > 0 ? ' AND addedfrom='.get_staff_user_id() : '')); ?></h3>

                                    <span class="text-success"><?php echo _l('contract_summary_recently_added'); ?></span>
                                </div>
                                <div class="col-md-2 col-xs-6 stats-top hide">
                                    <h3 class="bold"><?php echo total_rows(db_prefix().'contracts',"company_username='$companyusername'".' AND trash=1'); ?></h3>

                                    <span class="text-muted"><?php echo _l('contract_summary_trash'); ?></span>
                                </div>
                                <div class="clearfix stats-top hide"></div>
                                <hr class="hr-panel-heading stats-top hide" />
                                <div class="col-md-6 mt-1 border-right stats-top hide">
                                    <h4><?php echo _l('contract_summary_by_type'); ?></h4>
                                    <div class="relative" style="max-height:400px">
                                        <canvas class="chart" height="400" id="contracts-by-type-chart"></canvas>
                                    </div>
                                </div>
                                <div class="col-md-6 mt-1 stats-top hide">
                                    <h4><?php echo _l('contract_summary_by_type_value'); ?> (<span data-toggle="tooltip" data-title="<?php echo _l('base_currency_string'); ?>" class="text-has-action"><?php echo $base_currency->name; ?></span>)</h4>
                                    <div class="relative" style="max-height:400px">
                                        <canvas class="chart" height="400" id="contracts-value-by-type-chart"></canvas>
                                    </div>
                                </div>
                                <?php echo form_hidden('custom_view'); ?>
                                <div class="col-md-12 border-top mt-1">
                                    <?php $this->load->view('admin/contracts/table_html'); ?>
                                </div>
                            </div>
                        </div>
                    </div>
               </div>
           </div>
       </div>
   </div>
   <?php init_tail("contracts"); ?>
   <script>

   function custom_view(){
      var view = $('#select-filter').val();
      console.log(view);
      dt_custom_view(view,'.table-contracts',view);
   }

    function toggleStats() {
        $('.stats-top').toggle();

        new Chart($('#contracts-by-type-chart'), {
            type: 'bar',
            data: <?php echo $chart_types; ?>,
            options: {
                legend: {
                    display: false,
                },
                responsive: true,
                maintainAspectRatio:false,
                scales: {
                    yAxes: [{
                        display: true,
                        ticks: {
                            suggestedMin: 0,
                        }
                    }]
                }
            }
        });
        new Chart($('#contracts-value-by-type-chart'), {
            type: 'line',
            data: <?php echo $chart_types_values; ?>,
            options: {
                responsive: true,
                legend: {
                    display: false,
                },
                maintainAspectRatio:false,
                scales: {
                    yAxes: [{
                        display: true,
                        ticks: {
                            suggestedMin: 0,
                        }
                    }]
                }
            }
        });
    }

    $(function(){

        var ContractsServerParams = {};
        $.each($('._hidden_inputs._filters input'),function(){
            ContractsServerParams[$(this).attr('name')] = '[name="'+$(this).attr('name')+'"]';
        });

        initDataTable('.table-contracts', admin_url+'contracts/table', undefined, undefined, ContractsServerParams,<?php echo hooks()->apply_filters('contracts_table_default_order', json_encode(array(6,'asc'))); ?>);

        new Chart($('#contracts-by-type-chart'), {
            type: 'bar',
            data: <?php echo $chart_types; ?>,
            options: {
                legend: {
                    display: false,
                },
                responsive: true,
                maintainAspectRatio:false,
                scales: {
                    yAxes: [{
                        display: true,
                        ticks: {
                            suggestedMin: 0,
                        }
                    }]
                }
            }
        });
        new Chart($('#contracts-value-by-type-chart'), {
            type: 'line',
            data: <?php echo $chart_types_values; ?>,
            options: {
                responsive: true,
                legend: {
                    display: false,
                },
                maintainAspectRatio:false,
                scales: {
                    yAxes: [{
                        display: true,
                        ticks: {
                            suggestedMin: 0,
                        }
                    }]
                }
            }
        });
    });
</script>
</body>
</html>
