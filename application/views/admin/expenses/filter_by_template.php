<?php defined('BASEPATH') or exit('No direct script access allowed');
if(!isset($filter_table_name)){
    $filter_table_name = '.table-expenses';
}
?>
<div class="_filters _hidden_inputs hidden">
   <?php echo form_hidden('billable');
   echo form_hidden('non-billable');
   echo form_hidden('invoiced');
   echo form_hidden('unbilled');
   echo form_hidden('recurring');
   foreach($years as $year){
    echo form_hidden('year_'.$year['year'],$year['year']);
}
for ($m = 1; $m <= 12; $m++) {
   echo form_hidden('expenses_by_month_'.$m);
}
foreach($categories as $category){
 echo form_hidden('expenses_by_category_'.$category['id']);
}
?>
</div>

<select class="selectpicker" id="select-filter" data-live-search="true" onChange="custom_view()" data-style="btn-primary">
    <option value="" data-tokens="<?php echo _l('expenses_list_all'); ?>"><?php echo _l('expenses_list_all'); ?></option>
    <option value="billable" data-tokens="<?php echo _l('expenses_list_billable'); ?>"><?php echo _l('expenses_list_billable'); ?></option>
    <option value="non-billable" data-tokens="<?php echo _l('expenses_list_non_billable'); ?>"><?php echo _l('expenses_list_non_billable'); ?></option>
    <option value="invoiced" data-tokens="<?php echo _l('expenses_list_invoiced'); ?>"><?php echo _l('expenses_list_invoiced'); ?></option>
    <option value="unbilled" data-tokens="<?php echo _l('expenses_list_unbilled'); ?>"><?php echo _l('expenses_list_unbilled'); ?></option>
    <option value="recurring" data-tokens="<?php echo _l('expenses_list_recurring'); ?>"><?php echo _l('expenses_list_recurring'); ?></option>
    <?php if(count($years) > 0){ ?>
        <?php foreach($years as $year){ ?>
            <option value="year_<?php echo $year['year']; ?>" data-tokens="<?php echo $year['year']; ?>"><?php echo $year['year']; ?></option>
        <?php } ?>
    <?php } ?>
    <?php if(count($categories) > 0){ ?>
        <optgroup label="<?php echo _l('expenses_filter_by_categories'); ?>">
            <?php foreach($categories as $category){ ?>
                <option value="expenses_by_category_<?php echo $category['id']; ?>" data-tokens="<?php echo $category['name']; ?>"><?php echo $category['name']; ?></option>
            <?php } ?>
        </optgroup>
    <?php } ?>
    <optgroup label="<?php echo _l('months'); ?>">
        <?php for ($m = 1; $m <= 12; $m++) { ?>
            <option value="expenses_by_month_<?php echo $m; ?>" data-tokens="<?php echo _l(date('F', mktime(0, 0, 0, $m, 1))); ?>"><?php echo _l(date('F', mktime(0, 0, 0, $m, 1))); ?></option>
        <?php } ?>
    </optgroup>
</select>