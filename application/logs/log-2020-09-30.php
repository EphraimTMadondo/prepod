<?php defined('BASEPATH') OR exit('No direct script access allowed'); ?>

ERROR - 2020-09-30 11:16:33 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/worksuite/public_html/prepod/application/libraries/import/Import_leads.php 19
ERROR - 2020-09-30 11:24:34 --> Query error: Column 'company_username' in where clause is ambiguous - Invalid query: SELECT COUNT(*) AS `numrows`
FROM `tblleads`
JOIN `tblleads_sources` ON `tblleads_sources`.`id`=`tblleads`.`source`
LEFT JOIN `tblstaff` ON `tblstaff`.`staffid`=`tblleads`.`assigned`
WHERE `company_username` = 'asdfs'
AND `status` = '3'
ERROR - 2020-09-30 11:24:34 --> Severity: error --> Exception: Call to a member function num_rows() on boolean /home/worksuite/public_html/prepod/system/database/DB_query_builder.php 1430
ERROR - 2020-09-30 12:25:12 --> Could not find the language line "18-24"
ERROR - 2020-09-30 12:25:12 --> Could not find the language line "25-29"
ERROR - 2020-09-30 12:25:12 --> Could not find the language line "30-39"
ERROR - 2020-09-30 12:25:12 --> Could not find the language line "40-60"
ERROR - 2020-09-30 12:25:12 --> Severity: Warning --> Invalid argument supplied for foreach() /home/worksuite/public_html/prepod/modules/hrm/views/hrm_dashboard.php 242
ERROR - 2020-09-30 12:28:49 --> Could not find the language line "18-24"
ERROR - 2020-09-30 12:28:49 --> Could not find the language line "25-29"
ERROR - 2020-09-30 12:28:49 --> Could not find the language line "30-39"
ERROR - 2020-09-30 12:28:49 --> Could not find the language line "40-60"
ERROR - 2020-09-30 12:28:49 --> Severity: Warning --> Invalid argument supplied for foreach() /home/worksuite/public_html/prepod/modules/hrm/views/hrm_dashboard.php 244
ERROR - 2020-09-30 12:34:43 --> Could not find the language line "18-24"
ERROR - 2020-09-30 12:34:43 --> Could not find the language line "25-29"
ERROR - 2020-09-30 12:34:43 --> Could not find the language line "30-39"
ERROR - 2020-09-30 12:34:43 --> Could not find the language line "40-60"
ERROR - 2020-09-30 12:34:43 --> Severity: Warning --> Invalid argument supplied for foreach() /home/worksuite/public_html/prepod/modules/hrm/views/hrm_dashboard.php 242
ERROR - 2020-09-30 12:50:00 --> Could not find the language line "18-24"
ERROR - 2020-09-30 12:50:00 --> Could not find the language line "25-29"
ERROR - 2020-09-30 12:50:00 --> Could not find the language line "30-39"
ERROR - 2020-09-30 12:50:00 --> Could not find the language line "40-60"
ERROR - 2020-09-30 12:50:00 --> Severity: Warning --> Invalid argument supplied for foreach() /home/worksuite/public_html/prepod/modules/hrm/views/hrm_dashboard.php 239
ERROR - 2020-09-30 12:53:06 --> Could not find the language line "18-24"
ERROR - 2020-09-30 12:53:06 --> Could not find the language line "25-29"
ERROR - 2020-09-30 12:53:06 --> Could not find the language line "30-39"
ERROR - 2020-09-30 12:53:06 --> Could not find the language line "40-60"
ERROR - 2020-09-30 12:53:07 --> Severity: Warning --> Invalid argument supplied for foreach() /home/worksuite/public_html/prepod/modules/hrm/views/hrm_dashboard.php 239
ERROR - 2020-09-30 13:00:08 --> Could not find the language line "18-24"
ERROR - 2020-09-30 13:00:08 --> Could not find the language line "25-29"
ERROR - 2020-09-30 13:00:08 --> Could not find the language line "30-39"
ERROR - 2020-09-30 13:00:08 --> Could not find the language line "40-60"
ERROR - 2020-09-30 13:00:08 --> Severity: Warning --> Invalid argument supplied for foreach() /home/worksuite/public_html/prepod/modules/hrm/views/hrm_dashboard.php 238
ERROR - 2020-09-30 11:21:34 --> 404 Page Not Found: ../../modules/assets/controllers/Assets/frest
ERROR - 2020-09-30 11:21:37 --> 404 Page Not Found: ../../modules/assets/controllers/Assets/frest
ERROR - 2020-09-30 13:21:44 --> Severity: Warning --> Illegal string offset 'app-field-wrapper' /home/worksuite/public_html/prepod/application/helpers/fields_helper.php 309
ERROR - 2020-09-30 13:21:44 --> Severity: Warning --> Invalid argument supplied for foreach() /home/worksuite/public_html/prepod/application/helpers/fields_helper.php 310
ERROR - 2020-09-30 11:22:11 --> 404 Page Not Found: ../../modules/assets/controllers/Assets/frest
ERROR - 2020-09-30 11:23:10 --> 404 Page Not Found: ../../modules/assets/controllers/Assets/frest
ERROR - 2020-09-30 11:23:16 --> 404 Page Not Found: ../../modules/assets/controllers/Assets/frest
ERROR - 2020-09-30 13:24:42 --> Query error: Column 'company_username' in where clause is ambiguous - Invalid query: SELECT `tblitems`.`id` as `itemid`, `rate`, `t1`.`taxrate` as `taxrate`, `t1`.`id` as `taxid`, `t1`.`name` as `taxname`, `t2`.`taxrate` as `taxrate_2`, `t2`.`id` as `taxid_2`, `t2`.`name` as `taxname_2`, `description`, `long_description`, `group_id`, `tblitems_groups`.`name` as `group_name`, `unit`
FROM `tblitems`
LEFT JOIN `tbltaxes` `t1` ON `t1`.`id` = `tblitems`.`tax`
LEFT JOIN `tbltaxes` `t2` ON `t2`.`id` = `tblitems`.`tax2`
LEFT JOIN `tblitems_groups` ON `tblitems_groups`.`id` = `tblitems`.`group_id`
WHERE `company_username` = 'asdfs'
AND `tblitems`.`id` = '13'
ORDER BY `description` ASC
ERROR - 2020-09-30 13:24:42 --> Severity: error --> Exception: Call to a member function row() on boolean /home/worksuite/public_html/prepod/application/models/Invoice_items_model.php 40
ERROR - 2020-09-30 13:35:13 --> Could not find the language line "18-24"
ERROR - 2020-09-30 13:35:13 --> Could not find the language line "25-29"
ERROR - 2020-09-30 13:35:13 --> Could not find the language line "30-39"
ERROR - 2020-09-30 13:35:13 --> Could not find the language line "40-60"
ERROR - 2020-09-30 13:35:13 --> Severity: Warning --> Invalid argument supplied for foreach() /home/worksuite/public_html/prepod/modules/hrm/views/hrm_dashboard.php 240
ERROR - 2020-09-30 13:35:19 --> Could not find the language line "18-24"
ERROR - 2020-09-30 13:35:19 --> Could not find the language line "25-29"
ERROR - 2020-09-30 13:35:19 --> Could not find the language line "30-39"
ERROR - 2020-09-30 13:35:19 --> Could not find the language line "40-60"
ERROR - 2020-09-30 13:35:19 --> Severity: Warning --> Invalid argument supplied for foreach() /home/worksuite/public_html/prepod/modules/hrm/views/hrm_dashboard.php 240
ERROR - 2020-09-30 11:37:17 --> 404 Page Not Found: /index
ERROR - 2020-09-30 11:37:17 --> 404 Page Not Found: /index
ERROR - 2020-09-30 11:37:17 --> 404 Page Not Found: /index
ERROR - 2020-09-30 13:38:51 --> Could not find the language line "Asset Management"
ERROR - 2020-09-30 13:39:10 --> Could not find the language line "Allocation"
ERROR - 2020-09-30 13:39:10 --> Could not find the language line "time"
ERROR - 2020-09-30 13:39:10 --> Could not find the language line "action"
ERROR - 2020-09-30 13:39:17 --> Could not find the language line "Revoke"
ERROR - 2020-09-30 13:39:17 --> Could not find the language line "time"
ERROR - 2020-09-30 13:39:17 --> Could not find the language line "action"
ERROR - 2020-09-30 13:39:22 --> Could not find the language line "Depreciation"
ERROR - 2020-09-30 13:39:46 --> Could not find the language line "18-24"
ERROR - 2020-09-30 13:39:46 --> Could not find the language line "25-29"
ERROR - 2020-09-30 13:39:46 --> Could not find the language line "30-39"
ERROR - 2020-09-30 13:39:46 --> Could not find the language line "40-60"
ERROR - 2020-09-30 13:39:46 --> Severity: Warning --> Invalid argument supplied for foreach() /home/worksuite/public_html/prepod/modules/hrm/views/hrm_dashboard.php 240
ERROR - 2020-09-30 11:40:16 --> 404 Page Not Found: admin/Webfonts/fa-solid-900.woff2
ERROR - 2020-09-30 11:40:16 --> 404 Page Not Found: admin/Webfonts/fa-solid-900.woff
ERROR - 2020-09-30 11:40:16 --> 404 Page Not Found: admin/Webfonts/fa-solid-900.ttf
ERROR - 2020-09-30 11:43:10 --> 404 Page Not Found: ../../modules/assets/controllers/Assets/frest
ERROR - 2020-09-30 11:45:06 --> 404 Page Not Found: ../../modules/assets/controllers/Assets/frest
ERROR - 2020-09-30 11:45:44 --> 404 Page Not Found: ../../modules/assets/controllers/Assets/frest
ERROR - 2020-09-30 11:46:05 --> 404 Page Not Found: ../../modules/assets/controllers/Assets/frest
ERROR - 2020-09-30 14:28:48 --> Query error: Column 'company_username' in where clause is ambiguous - Invalid query: SELECT COUNT(*) AS `numrows`
FROM `tblleads`
JOIN `tblleads_sources` ON `tblleads_sources`.`id`=`tblleads`.`source`
LEFT JOIN `tblstaff` ON `tblstaff`.`staffid`=`tblleads`.`assigned`
WHERE `company_username` = 'asdfs'
AND `status` = '3'
ERROR - 2020-09-30 14:28:48 --> Severity: error --> Exception: Call to a member function num_rows() on boolean /home/worksuite/public_html/prepod/system/database/DB_query_builder.php 1430
ERROR - 2020-09-30 14:31:20 --> Query error: Column 'company_username' in where clause is ambiguous - Invalid query: SELECT COUNT(*) AS `numrows`
FROM `tblleads`
JOIN `tblleads_sources` ON `tblleads_sources`.`id`=`tblleads`.`source`
LEFT JOIN `tblstaff` ON `tblstaff`.`staffid`=`tblleads`.`assigned`
WHERE `company_username` = 'asdfs'
AND `status` = '3'
ERROR - 2020-09-30 14:31:20 --> Severity: error --> Exception: Call to a member function num_rows() on boolean /home/worksuite/public_html/prepod/system/database/DB_query_builder.php 1430
ERROR - 2020-09-30 14:34:33 --> Query error: Column 'company_username' in where clause is ambiguous - Invalid query: SELECT COUNT(*) AS `numrows`
FROM `tblleads`
JOIN `tblleads_sources` ON `tblleads_sources`.`id`=`tblleads`.`source`
LEFT JOIN `tblstaff` ON `tblstaff`.`staffid`=`tblleads`.`assigned`
WHERE `company_username` = 'asdfs'
AND `status` = '3'
ERROR - 2020-09-30 14:34:33 --> Severity: error --> Exception: Call to a member function num_rows() on boolean /home/worksuite/public_html/prepod/system/database/DB_query_builder.php 1430
ERROR - 2020-09-30 14:37:27 --> Query error: Column 'company_username' in where clause is ambiguous - Invalid query: SELECT COUNT(*) AS `numrows`
FROM `tblleads`
JOIN `tblleads_sources` ON `tblleads_sources`.`id`=`tblleads`.`source`
LEFT JOIN `tblstaff` ON `tblstaff`.`staffid`=`tblleads`.`assigned`
WHERE `company_username` = 'asdfs'
AND `status` = '3'
ERROR - 2020-09-30 14:37:27 --> Severity: error --> Exception: Call to a member function num_rows() on boolean /home/worksuite/public_html/prepod/system/database/DB_query_builder.php 1430
ERROR - 2020-09-30 14:40:57 --> Query error: Column 'company_username' in where clause is ambiguous - Invalid query: SELECT COUNT(*) AS `numrows`
FROM `tblleads`
JOIN `tblleads_sources` ON `tblleads_sources`.`id`=`tblleads`.`source`
LEFT JOIN `tblstaff` ON `tblstaff`.`staffid`=`tblleads`.`assigned`
WHERE `company_username` = 'asdfs'
AND `status` = '3'
ERROR - 2020-09-30 14:40:57 --> Severity: error --> Exception: Call to a member function num_rows() on boolean /home/worksuite/public_html/prepod/system/database/DB_query_builder.php 1430
ERROR - 2020-09-30 14:42:32 --> Query error: Column 'company_username' in where clause is ambiguous - Invalid query: SELECT COUNT(*) AS `numrows`
FROM `tblleads`
JOIN `tblleads_sources` ON `tblleads_sources`.`id`=`tblleads`.`source`
LEFT JOIN `tblstaff` ON `tblstaff`.`staffid`=`tblleads`.`assigned`
WHERE `company_username` = 'asdfs'
AND `status` = '3'
ERROR - 2020-09-30 14:42:32 --> Severity: error --> Exception: Call to a member function num_rows() on boolean /home/worksuite/public_html/prepod/system/database/DB_query_builder.php 1430
ERROR - 2020-09-30 14:44:32 --> Query error: Column 'company_username' in where clause is ambiguous - Invalid query: SELECT COUNT(*) AS `numrows`
FROM `tblleads`
JOIN `tblleads_sources` ON `tblleads_sources`.`id`=`tblleads`.`source`
LEFT JOIN `tblstaff` ON `tblstaff`.`staffid`=`tblleads`.`assigned`
WHERE `company_username` = 'asdfs'
AND `status` = '3'
ERROR - 2020-09-30 14:44:32 --> Severity: error --> Exception: Call to a member function num_rows() on boolean /home/worksuite/public_html/prepod/system/database/DB_query_builder.php 1430
ERROR - 2020-09-30 15:30:38 --> Severity: Warning --> Invalid argument supplied for foreach() /home/worksuite/public_html/prepod/application/views/admin/clients/manage.php 109
ERROR - 2020-09-30 14:42:06 --> 404 Page Not Found: ../../modules/assets/controllers/Assets/frest
ERROR - 2020-09-30 14:42:13 --> 404 Page Not Found: ../../modules/assets/controllers/Assets/frest
ERROR - 2020-09-30 14:42:34 --> 404 Page Not Found: ../../modules/assets/controllers/Assets/frest
ERROR - 2020-09-30 14:42:41 --> 404 Page Not Found: ../../modules/assets/controllers/Assets/frest
ERROR - 2020-09-30 14:43:37 --> 404 Page Not Found: ../../modules/assets/controllers/Assets/frest
ERROR - 2020-09-30 17:20:27 --> Severity: Warning --> Invalid argument supplied for foreach() /home/worksuite/public_html/prepod/application/views/admin/clients/manage.php 109
ERROR - 2020-09-30 15:53:04 --> 404 Page Not Found: ../../modules/assets/controllers/Assets/frest
ERROR - 2020-09-30 15:53:10 --> 404 Page Not Found: ../../modules/assets/controllers/Assets/frest
ERROR - 2020-09-30 15:53:31 --> 404 Page Not Found: /index
ERROR - 2020-09-30 15:53:32 --> 404 Page Not Found: ../../modules/assets/controllers/Assets/frest
ERROR - 2020-09-30 15:53:50 --> 404 Page Not Found: /index
ERROR - 2020-09-30 15:53:50 --> 404 Page Not Found: ../../modules/assets/controllers/Assets/frest
ERROR - 2020-09-30 15:54:09 --> 404 Page Not Found: /index
ERROR - 2020-09-30 15:54:10 --> 404 Page Not Found: ../../modules/assets/controllers/Assets/frest
ERROR - 2020-09-30 15:54:13 --> 404 Page Not Found: ../../modules/assets/controllers/Assets/frest
ERROR - 2020-09-30 15:54:18 --> 404 Page Not Found: ../../modules/assets/controllers/Assets/frest
ERROR - 2020-09-30 15:54:28 --> 404 Page Not Found: ../../modules/assets/controllers/Assets/frest
ERROR - 2020-09-30 15:54:28 --> 404 Page Not Found: ../../modules/assets/controllers/Assets/frest
ERROR - 2020-09-30 15:54:48 --> 404 Page Not Found: ../../modules/assets/controllers/Assets/frest
ERROR - 2020-09-30 15:54:50 --> 404 Page Not Found: ../../modules/assets/controllers/Assets/frest
ERROR - 2020-09-30 17:52:06 --> 404 Page Not Found: ../../modules/assets/controllers/Assets/frest
ERROR - 2020-09-30 18:04:07 --> 404 Page Not Found: ../../modules/assets/controllers/Assets/frest
ERROR - 2020-09-30 18:04:50 --> 404 Page Not Found: ../../modules/assets/controllers/Assets/frest
ERROR - 2020-09-30 20:04:52 --> Query error: Column 'company_username' in where clause is ambiguous - Invalid query: SELECT COUNT(*) AS `numrows`
FROM `tblleads`
JOIN `tblleads_sources` ON `tblleads_sources`.`id`=`tblleads`.`source`
LEFT JOIN `tblstaff` ON `tblstaff`.`staffid`=`tblleads`.`assigned`
WHERE `company_username` = 'asdfs'
AND `status` = '3'
ERROR - 2020-09-30 20:04:52 --> Severity: error --> Exception: Call to a member function num_rows() on boolean /home/worksuite/public_html/prepod/system/database/DB_query_builder.php 1430
