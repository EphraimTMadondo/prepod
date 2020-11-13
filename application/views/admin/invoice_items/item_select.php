<?php defined('BASEPATH') or exit('No direct script access allowed'); ?>
<div class="form-group mb-2 items-wrapper select-placeholder<?php if(has_permission('items','','create')){ echo ' input-group-select'; } ?>">
  <div class="<?php if(has_permission('items','','create')){ echo 'input-group input-group-select'; } ?>">
    <div class="items-select-wrapper">
     <select name="item_select" class="selectpicker no-margin<?php if($ajaxItems == true){echo ' ajax-search';} ?><?php if(has_permission('items','','create')){ echo ' _select_input_group'; } ?>" data-width="false" data-style="btn-outline-light" id="item_select" data-none-selected-text="<?php echo _l('add_item'); ?>" data-live-search="true">
      <option value=""></option>
      <?php
       $new_item = true; 
      
      foreach($items as $group_id=>$_items){ ?>
      <optgroup data-group-id="<?php echo $group_id; ?>" label="<?php echo $_items[0]['group_name']; ?>">
       <?php foreach($_items as $item){ ?>
       
       <option onclick="add_item_to_table('undefined','undefined',<?php echo $new_item; ?>); return false;"  value="<?php echo $item['id']; ?>" data-subtext="<?php echo strip_tags(mb_substr($item['long_description'],0,200)).'...'; ?>">(<?php echo app_format_number($item['rate']); ; ?>) <?php echo $item['description']; ?></option>
       <?php } ?>
     </optgroup>
     <?php } ?>
   </select>
 </div>
 <?php if(has_permission('items','','create')){ ?>
 <div class="input-group-append">
   <a class=" input-group-text" href="#" data-toggle="modal" data-target="#sales_item_modal">
    <i class="fa fa-plus"></i>
  </a>
</div>
<?php } ?>
</div>
</div>
