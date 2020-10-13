<?php defined('BASEPATH') OR exit('No direct script access allowed'); ?>

ERROR - 2020-09-17 08:45:10 --> Severity: Warning --> Illegal string offset 'app-field-wrapper' /home/worksuite/public_html/prepod/application/helpers/fields_helper.php 309
ERROR - 2020-09-17 08:45:10 --> Severity: Warning --> Invalid argument supplied for foreach() /home/worksuite/public_html/prepod/application/helpers/fields_helper.php 310
ERROR - 2020-09-17 15:47:24 --> Query error: Column 'company_username' in where clause is ambiguous - Invalid query: SELECT `tblitems`.`id` as `itemid`, `rate`, `t1`.`taxrate` as `taxrate`, `t1`.`id` as `taxid`, `t1`.`name` as `taxname`, `t2`.`taxrate` as `taxrate_2`, `t2`.`id` as `taxid_2`, `t2`.`name` as `taxname_2`, `description`, `long_description`, `group_id`, `tblitems_groups`.`name` as `group_name`, `unit`
FROM `tblitems`
LEFT JOIN `tbltaxes` `t1` ON `t1`.`id` = `tblitems`.`tax`
LEFT JOIN `tbltaxes` `t2` ON `t2`.`id` = `tblitems`.`tax2`
LEFT JOIN `tblitems_groups` ON `tblitems_groups`.`id` = `tblitems`.`group_id`
WHERE `company_username` = 'vertix'
AND `tblitems`.`id` = '5'
ORDER BY `description` ASC
ERROR - 2020-09-17 15:47:24 --> Severity: error --> Exception: Call to a member function row() on boolean /home/worksuite/public_html/prepod/application/models/Invoice_items_model.php 40
ERROR - 2020-09-17 15:56:13 --> Query error: Column 'company_username' in where clause is ambiguous - Invalid query: SELECT `tblitems`.`id` as `itemid`, `rate`, `t1`.`taxrate` as `taxrate`, `t1`.`id` as `taxid`, `t1`.`name` as `taxname`, `t2`.`taxrate` as `taxrate_2`, `t2`.`id` as `taxid_2`, `t2`.`name` as `taxname_2`, `description`, `long_description`, `group_id`, `tblitems_groups`.`name` as `group_name`, `unit`
FROM `tblitems`
LEFT JOIN `tbltaxes` `t1` ON `t1`.`id` = `tblitems`.`tax`
LEFT JOIN `tbltaxes` `t2` ON `t2`.`id` = `tblitems`.`tax2`
LEFT JOIN `tblitems_groups` ON `tblitems_groups`.`id` = `tblitems`.`group_id`
WHERE `company_username` = 'vertix'
AND `tblitems`.`id` = '4'
ORDER BY `description` ASC
ERROR - 2020-09-17 15:56:13 --> Severity: error --> Exception: Call to a member function row() on boolean /home/worksuite/public_html/prepod/application/models/Invoice_items_model.php 40
ERROR - 2020-09-17 16:19:33 --> Query error: Column 'company_username' in where clause is ambiguous - Invalid query: SELECT `tblitems`.`id` as `itemid`, `rate`, `t1`.`taxrate` as `taxrate`, `t1`.`id` as `taxid`, `t1`.`name` as `taxname`, `t2`.`taxrate` as `taxrate_2`, `t2`.`id` as `taxid_2`, `t2`.`name` as `taxname_2`, `description`, `long_description`, `group_id`, `tblitems_groups`.`name` as `group_name`, `unit`
FROM `tblitems`
LEFT JOIN `tbltaxes` `t1` ON `t1`.`id` = `tblitems`.`tax`
LEFT JOIN `tbltaxes` `t2` ON `t2`.`id` = `tblitems`.`tax2`
LEFT JOIN `tblitems_groups` ON `tblitems_groups`.`id` = `tblitems`.`group_id`
WHERE `company_username` = 'vertix'
AND `tblitems`.`id` = '3'
ORDER BY `description` ASC
ERROR - 2020-09-17 16:19:33 --> Severity: error --> Exception: Call to a member function row() on boolean /home/worksuite/public_html/prepod/application/models/Invoice_items_model.php 40
ERROR - 2020-09-17 14:31:36 --> 404 Page Not Found: /index
ERROR - 2020-09-17 14:39:22 --> 404 Page Not Found: ../../modules/assets/controllers/Assets/frest
ERROR - 2020-09-17 14:40:09 --> 404 Page Not Found: ../../modules/assets/controllers/Assets/frest
