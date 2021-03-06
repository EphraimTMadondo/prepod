<?php defined('BASEPATH') or exit('No direct script access allowed'); ?>
<div class="card section-heading section-announcements">
    <div class="card-body">
        <h4 class="no-margin section-text"><?php echo _l('announcements'); ?></h4>
    </div>
</div>
<div class="card">
    <div class="card-body">
        <?php if(count($announcements) > 0){ ?>
            <table class="table dt-table table-announcements" data-order-col="1" data-order-type="desc">
                <thead>
                    <tr>
                        <th class="th-announcement-name"><?php echo _l('announcement_name'); ?></th>
                        <th class="th-announcement-date"><?php echo _l('announcement_date_list'); ?></th>
                    </tr>
                </thead>
                <tbody>
                    <?php foreach($announcements as $announcement){ ?>
                    <tr>
                        <td><a href="<?php echo site_url('clients/announcement/'.$announcement['announcementid']); ?>"><?php echo $announcement['name']; ?></a></td>
                        <td data-order="<?php echo $announcement['dateadded']; ?>"><?php echo _d($announcement['dateadded']); ?></td>
                    </tr>
                    <?php } ?>
                </tbody>
            </table>
        <?php } else { ?>
            <p class="no-margin"><?php echo _l('no_announcements'); ?></p>
        <?php } ?>
    </div>
</div>
