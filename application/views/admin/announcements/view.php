<?php defined('BASEPATH') or exit('No direct script access allowed'); ?>
<?php init_head(); ?><!-- BEGIN: Content-->
<div class="app-content content">
    <div class="content-overlay"></div>
    <div class="content-wrapper">
        <div class="row">
            <div class="col-md-7">
                <div class="card mt-2">
                    <div class="card-body tc-content">
                      <h4 class="bold no-margin"><?php echo $announcement->name; ?>
                        <?php if (is_admin()) { ?>
                          <a href="<?php echo admin_url('announcements/announcement/' . $announcement->announcementid); ?>" class="float-right">
                            <small><?php echo _l('edit'); ?></small>
                          </a>
                        <?php } ?>
                      </h4>
                      <p class="text-muted mtop10 mb-0"><?php echo _l('announcement_date',_dt($announcement->dateadded)); ?></p>
                      <?php if($announcement->showname == 1){ ?>
                      <p class="text-muted no-margin"><?php echo _l('announcement_from') . ' ' . $announcement->userid; ?></p>
                      <?php } ?>
                      <hr class="hr-panel-heading" />
                      <div class="clearfix"></div>
                      <?php echo $announcement->message; ?>
                  </div>
              </div>
          </div>
          <?php if(count($recent_announcements) > 0){ ?>
          <div class="col-md-5">
            <div class="card mt-2">
                <div class="card-body">
                    <h4 class="bold no-margin"><?php echo _l('announcements_recent'); ?></h4>
                    <hr class="hr-panel-heading" />
                    <?php foreach($recent_announcements as $announcement){ ?>
                    <a class="bold" href="<?php echo admin_url('announcements/view/'.$announcement['announcementid']); ?>">
                        <?php echo $announcement['name']; ?></a>
                        <p class="text-muted no-margin"><?php echo _l('announcement_date',_dt($announcement['dateadded'])); ?></p>
                        <?php if($announcement['showname'] == 1){ ?>
                        <p class="text-muted no-margin"><?php echo _l('announcement_from') . ' ' . $announcement['userid']; ?></p>
                        <?php } ?>
                        <div class="mt-1">
                            <?php echo strip_tags(mb_substr($announcement['message'],0,250)) . '...'; ?>
                            <hr class="hr-panel-heading" />
                            <?php } ?>
                        </div>
                    </div>
                </div>
                <?php } ?>
            </div>
        </div>
    </div>
    <?php init_tail(); ?>
</body>
</html>
