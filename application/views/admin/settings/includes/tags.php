<?php defined('BASEPATH') or exit('No direct script access allowed');
$tags = get_tags();
$totalTags = count($tags);
?>
<div class="row">
    <div class="col-md-<?php if($totalTags > 0){echo '12';} else {echo '12 text-center';}?>">
        <ul class="list-group mb-0">
          <?php
          foreach($tags as $tag){ ?>
          <li class="list-group-item settings-tag-wrapper">
              <span class="settings-tag-name"></span>
              <div class="form-group mb-0 settings-tag-input">
                  <div class="input-group">
                    <div class="input-group-append">
                        <?php echo total_rows(db_prefix().'taggables',array('tag_id'=>$tag['id'])); ?>
                    </div>
                    <input type="text" name="tags[<?php echo $tag['id']; ?>]" value="<?php echo $tag['name']; ?>" class="form-control">
                    <div class="input-group-append">
                      <a class="btn btn-danger _delete" href="<?php echo admin_url('settings/delete_tag/'.$tag['id']); ?>"><i class="bx bx-trash"></i></a>
                  </div>
              </div>
          </div>
      </li>
      <?php }
      if($totalTags == 0){ ?>
      <li class="list-group-item mb-0"><?php echo _l('no_tags_used'); ?></li>
      <?php } ?>
  </ul>
</div>
</div>
