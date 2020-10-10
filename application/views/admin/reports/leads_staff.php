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
                    <a href="<?php echo admin_url('reports/leads'); ?>"  data-toggle="tooltip" data-title="<?php echo _l('leads_report_converted_notice'); ?>" class="btn btn-primary"><?php echo _l('switch_to_staff_report'); ?></a>
                </div>
            </div>
        </div>
        <div class="col-md-12 animated fadeIn">
            <div class="card mt-2">
                <div class="card-body">
                    <?php echo form_open($this->uri->uri_string().'?type=staff'); ?>
                    <div class="row">
                        <div class="col-md-4">
                            <?php echo render_date_input('staff_report_from_date','from_date',$this->input->post('staff_report_from_date')); ?>
                        </div>
                        <div class="col-md-4">
                            <?php echo render_date_input('staff_report_to_date','to_date',$this->input->post('staff_report_to_date')); ?>
                        </div>
                        <div class="col-md-4">
                            <button type="submit" class="btn btn-secondary label-margin"><?php echo _l('generate'); ?></button>
                        </div>
                    </div>
                    <?php echo form_close(); ?>
                    <hr />
                    <div class="relative" style="max-height:380px">
                        <canvas class="leads-staff-report mt-2" height="380" id="leads-staff-report"></canvas>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
</div>
<?php init_tail('reports'); ?>
<script>
    window.onload = function(){
        new Chart($('#leads-staff-report'),{
            data:<?php echo $leads_staff_report; ?>,
            type:'bar',
            options:{responsive:true,maintainAspectRatio:false}
        })
    };
</script>
</body>
</html>
