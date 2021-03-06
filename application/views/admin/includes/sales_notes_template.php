<?php defined('BASEPATH') or exit('No direct script access allowed');
$len = count($notes);
$i = 0;
?>
<div id="sales-notes-wrapper" data-total="<?php echo $len; ?>">
<?php foreach($notes as $note){ ?>
<div class="media sales-note-wrapper">
    <div class="media-left">
        <a href="<?php echo admin_url('profile/'.$note["addedfrom"]); ?>">
            <?php echo staff_profile_image($note['addedfrom'],array('staff-profile-image-small','media-object')); ?>
        </a>
    </div>
    <div class="media-body">
        <small class="text-muted display-block"><?php echo _dt($note['dateadded']); ?></small>
        <?php if($note['addedfrom'] == get_staff_user_id() || is_admin()){ ?>
        <a href="#" class="float-right text-danger" onclick="delete_sales_note(this,<?php echo $note['id']; ?>);return false;"><i class="fa fa fa-times"></i></a>
        <a href="#" class="float-right mr-1" onclick="toggle_edit_note(<?php echo $note['id']; ?>);return false;"><i class="bx bx-pencil"></i></a>
        <?php } ?>
        <h5 class="media-heading bold"><a href="<?php echo admin_url('profile/'.$note["addedfrom"]); ?>"><?php echo get_staff_full_name($note['addedfrom']); ?></a></h5>
        <div data-note-description="<?php echo $note['id']; ?>">
           <?php echo check_for_links($note['description']); ?>
        </div>
        <div data-note-edit-textarea="<?php echo $note['id']; ?>" class="hide mt-1">
            <?php echo render_textarea('note','',$note['description']); ?>
        <?php if($note['addedfrom'] == get_staff_user_id() || is_admin()){ ?>
        <div class="text-right">
            <button type="button" class="btn btn-default" onclick="toggle_edit_note(<?php echo $note['id']; ?>);return false;"><?php echo _l('cancel'); ?></button>
            <button type="button" class="btn btn-secondary" onclick="edit_note(<?php echo $note['id']; ?>);"><?php echo _l('update_note'); ?></button>
          </div>
        <?php } ?>
        </div>
    </div>
    <?php if ($i >= 0 && $i != $len - 1) {
        echo '<hr />';
    }
    ?>
</div>
<?php
$i++;
} ?>
</div>
