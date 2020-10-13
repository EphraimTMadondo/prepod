<?php defined('BASEPATH') OR exit('No direct script access allowed'); ?>

ERROR - 2020-10-12 00:07:04 --> 404 Page Not Found: ../../modules/assets/controllers/Assets/frest
ERROR - 2020-10-12 00:07:11 --> 404 Page Not Found: ../../modules/assets/controllers/Assets/frest
ERROR - 2020-10-12 00:07:18 --> 404 Page Not Found: ../../modules/assets/controllers/Assets/frest
ERROR - 2020-10-12 02:07:45 --> Query error: Column 'company_username' in where clause is ambiguous - Invalid query: SELECT `tblitems`.`id` as `itemid`, `rate`, `t1`.`taxrate` as `taxrate`, `t1`.`id` as `taxid`, `t1`.`name` as `taxname`, `t2`.`taxrate` as `taxrate_2`, `t2`.`id` as `taxid_2`, `t2`.`name` as `taxname_2`, `description`, `long_description`, `group_id`, `tblitems_groups`.`name` as `group_name`, `unit`
FROM `tblitems`
LEFT JOIN `tbltaxes` `t1` ON `t1`.`id` = `tblitems`.`tax`
LEFT JOIN `tbltaxes` `t2` ON `t2`.`id` = `tblitems`.`tax2`
LEFT JOIN `tblitems_groups` ON `tblitems_groups`.`id` = `tblitems`.`group_id`
WHERE `company_username` = 'asdfs'
AND `tblitems`.`id` = '13'
ORDER BY `description` ASC
ERROR - 2020-10-12 02:07:45 --> Severity: error --> Exception: Call to a member function row() on boolean /home/worksuite/public_html/prepod/application/models/Invoice_items_model.php 40
ERROR - 2020-10-12 09:06:50 --> 404 Page Not Found: ../../modules/assets/controllers/Assets/frest
ERROR - 2020-10-12 09:07:12 --> 404 Page Not Found: ../../modules/assets/controllers/Assets/frest
ERROR - 2020-10-12 18:38:07 --> Query error: Column 'company_username' in where clause is ambiguous - Invalid query: SELECT `tblitems`.`id` as `itemid`, `rate`, `t1`.`taxrate` as `taxrate`, `t1`.`id` as `taxid`, `t1`.`name` as `taxname`, `t2`.`taxrate` as `taxrate_2`, `t2`.`id` as `taxid_2`, `t2`.`name` as `taxname_2`, `description`, `long_description`, `group_id`, `tblitems_groups`.`name` as `group_name`, `unit`
FROM `tblitems`
LEFT JOIN `tbltaxes` `t1` ON `t1`.`id` = `tblitems`.`tax`
LEFT JOIN `tbltaxes` `t2` ON `t2`.`id` = `tblitems`.`tax2`
LEFT JOIN `tblitems_groups` ON `tblitems_groups`.`id` = `tblitems`.`group_id`
WHERE `company_username` = 'asdfs'
AND `tblitems`.`id` = '13'
ORDER BY `description` ASC
ERROR - 2020-10-12 18:38:07 --> Severity: error --> Exception: Call to a member function row() on boolean /home/worksuite/public_html/prepod/application/models/Invoice_items_model.php 40
ERROR - 2020-10-12 18:44:31 --> Could not find the language line "edit_salary_form"
ERROR - 2020-10-12 18:45:42 --> Could not find the language line "18-24"
ERROR - 2020-10-12 18:45:42 --> Could not find the language line "25-29"
ERROR - 2020-10-12 18:45:42 --> Could not find the language line "30-39"
ERROR - 2020-10-12 18:45:42 --> Could not find the language line "40-60"
ERROR - 2020-10-12 18:45:42 --> Severity: Warning --> Invalid argument supplied for foreach() /home/worksuite/public_html/prepod/modules/hrm/views/hrm_dashboard.php 231
ERROR - 2020-10-12 18:46:00 --> Could not find the language line ""
ERROR - 2020-10-12 18:46:00 --> Could not find the language line ""
ERROR - 2020-10-12 16:46:10 --> 404 Page Not Found: admin/Webfonts/fa-solid-900.woff2
ERROR - 2020-10-12 16:46:10 --> 404 Page Not Found: admin/Webfonts/fa-solid-900.woff
ERROR - 2020-10-12 16:46:11 --> 404 Page Not Found: admin/Webfonts/fa-solid-900.ttf
ERROR - 2020-10-12 19:14:57 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/worksuite/public_html/prepod/application/views/admin/contracts/manage.php 34
ERROR - 2020-10-12 19:16:25 --> Severity: Warning --> date_format() expects parameter 1 to be DateTimeInterface, boolean given /home/worksuite/public_html/prepod/application/helpers/general_helper.php 520
ERROR - 2020-10-12 19:17:25 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/worksuite/public_html/prepod/application/views/admin/contracts/manage.php 34
ERROR - 2020-10-12 19:18:17 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/worksuite/public_html/prepod/application/views/admin/contracts/manage.php 34
