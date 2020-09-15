<?php defined('BASEPATH') or exit('No direct script access allowed'); ?>
<div class="card section-heading section-estimates">
    <div class="card-body">
        <h4 class="no-margin section-text"><?php echo _l('clients_my_estimates'); ?></h4>
    </div>
</div>
<div class="card">
    <div class="card-body">
        <?php get_template_part('estimates_stats'); ?>
        <hr />
        <?php get_template_part('estimates_table'); ?>
    </div>
</div>
