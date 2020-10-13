<?php defined('BASEPATH') OR exit('No direct script access allowed'); ?>

ERROR - 2020-09-18 10:09:45 --> Severity: Warning --> Illegal string offset 'app-field-wrapper' /home/worksuite/public_html/prepod/application/helpers/fields_helper.php 309
ERROR - 2020-09-18 10:09:45 --> Severity: Warning --> Invalid argument supplied for foreach() /home/worksuite/public_html/prepod/application/helpers/fields_helper.php 310
ERROR - 2020-09-18 11:50:06 --> Could not find the language line "18-24"
ERROR - 2020-09-18 11:50:06 --> Could not find the language line "25-29"
ERROR - 2020-09-18 11:50:06 --> Could not find the language line "30-39"
ERROR - 2020-09-18 11:50:06 --> Could not find the language line "40-60"
ERROR - 2020-09-18 11:50:06 --> Severity: Warning --> Division by zero /home/worksuite/public_html/prepod/modules/hrm/models/Hrm_model.php 2386
ERROR - 2020-09-18 11:50:06 --> Severity: Warning --> A non-numeric value encountered /home/worksuite/public_html/prepod/modules/hrm/models/Hrm_model.php 2386
ERROR - 2020-09-18 11:50:06 --> Severity: Warning --> Division by zero /home/worksuite/public_html/prepod/modules/hrm/models/Hrm_model.php 2386
ERROR - 2020-09-18 11:50:06 --> Severity: Warning --> A non-numeric value encountered /home/worksuite/public_html/prepod/modules/hrm/models/Hrm_model.php 2386
ERROR - 2020-09-18 11:50:06 --> Severity: Warning --> Invalid argument supplied for foreach() /home/worksuite/public_html/prepod/modules/hrm/views/hrm_dashboard.php 242
ERROR - 2020-09-18 09:50:35 --> 404 Page Not Found: admin/Webfonts/fa-solid-900.woff2
ERROR - 2020-09-18 09:50:35 --> 404 Page Not Found: admin/Webfonts/fa-solid-900.woff
ERROR - 2020-09-18 09:50:35 --> 404 Page Not Found: admin/Webfonts/fa-solid-900.ttf
ERROR - 2020-09-18 11:55:08 --> Query error: Column 'company_username' in where clause is ambiguous - Invalid query: SELECT `amount`, `tblinvoicepaymentrecords`.`date`
FROM `tblinvoicepaymentrecords`
JOIN `tblinvoices` ON `tblinvoices`.`id` = `tblinvoicepaymentrecords`.`invoiceid`
WHERE `company_username` = 'vertix'
AND YEAR(tblinvoicepaymentrecords.date) = '2020'
ERROR - 2020-09-18 11:55:08 --> Severity: error --> Exception: Call to a member function result_array() on boolean /home/worksuite/public_html/prepod/application/models/Reports_model.php 560
ERROR - 2020-09-18 11:55:12 --> Query error: Column 'company_username' in where clause is ambiguous - Invalid query: SELECT `amount`, `tblinvoicepaymentrecords`.`date`
FROM `tblinvoicepaymentrecords`
JOIN `tblinvoices` ON `tblinvoices`.`id` = `tblinvoicepaymentrecords`.`invoiceid`
WHERE `company_username` = 'vertix'
AND YEAR(tblinvoicepaymentrecords.date) = '2020'
ERROR - 2020-09-18 11:55:12 --> Severity: error --> Exception: Call to a member function result_array() on boolean /home/worksuite/public_html/prepod/application/models/Reports_model.php 463
ERROR - 2020-09-18 11:57:41 --> Query error: Column 'company_username' in where clause is ambiguous - Invalid query: SELECT *, `tblcontracts_types`.`name` as `type_name`, `tblcontracts`.`id` as `id`, `tblcontracts`.`addedfrom`
FROM `tblcontracts`
LEFT JOIN `tblcontracts_types` ON `tblcontracts_types`.`id` = `tblcontracts`.`contract_type`
JOIN `tblclients` ON `tblclients`.`userid` = `tblcontracts`.`client`
WHERE `company_username` = 'vertix'
AND `tblcontracts`.`id` = '4'
ERROR - 2020-09-18 11:57:41 --> Severity: error --> Exception: Call to a member function row() on boolean /home/worksuite/public_html/prepod/application/models/Contracts_model.php 32
ERROR - 2020-09-18 11:57:45 --> Query error: Column 'company_username' in where clause is ambiguous - Invalid query: SELECT *, `tblcontracts_types`.`name` as `type_name`, `tblcontracts`.`id` as `id`, `tblcontracts`.`addedfrom`
FROM `tblcontracts`
LEFT JOIN `tblcontracts_types` ON `tblcontracts_types`.`id` = `tblcontracts`.`contract_type`
JOIN `tblclients` ON `tblclients`.`userid` = `tblcontracts`.`client`
WHERE `company_username` = 'vertix'
AND `tblcontracts`.`id` = '4'
ERROR - 2020-09-18 11:57:45 --> Severity: error --> Exception: Call to a member function row() on boolean /home/worksuite/public_html/prepod/application/models/Contracts_model.php 32
ERROR - 2020-09-18 11:57:50 --> Query error: Column 'company_username' in where clause is ambiguous - Invalid query: SELECT *, `tblcontracts_types`.`name` as `type_name`, `tblcontracts`.`id` as `id`, `tblcontracts`.`addedfrom`
FROM `tblcontracts`
LEFT JOIN `tblcontracts_types` ON `tblcontracts_types`.`id` = `tblcontracts`.`contract_type`
JOIN `tblclients` ON `tblclients`.`userid` = `tblcontracts`.`client`
WHERE `company_username` = 'vertix'
AND `tblcontracts`.`id` = '2'
ERROR - 2020-09-18 11:57:50 --> Severity: error --> Exception: Call to a member function row() on boolean /home/worksuite/public_html/prepod/application/models/Contracts_model.php 32
ERROR - 2020-09-18 11:58:07 --> Query error: Column 'company_username' in where clause is ambiguous - Invalid query: SELECT *, `tblcontracts_types`.`name` as `type_name`, `tblcontracts`.`id` as `id`, `tblcontracts`.`addedfrom`
FROM `tblcontracts`
LEFT JOIN `tblcontracts_types` ON `tblcontracts_types`.`id` = `tblcontracts`.`contract_type`
JOIN `tblclients` ON `tblclients`.`userid` = `tblcontracts`.`client`
WHERE `company_username` = 'vertix'
AND `tblcontracts`.`id` = '7'
ERROR - 2020-09-18 11:58:07 --> Severity: error --> Exception: Call to a member function row() on boolean /home/worksuite/public_html/prepod/application/models/Contracts_model.php 32
ERROR - 2020-09-18 11:13:19 --> 404 Page Not Found: ../../modules/assets/controllers/Assets/frest
ERROR - 2020-09-18 11:13:42 --> 404 Page Not Found: ../../modules/assets/controllers/Assets/frest
ERROR - 2020-09-18 11:13:49 --> 404 Page Not Found: ../../modules/assets/controllers/Assets/frest
ERROR - 2020-09-18 11:13:55 --> 404 Page Not Found: ../../modules/assets/controllers/Assets/frest
ERROR - 2020-09-18 11:14:21 --> 404 Page Not Found: ../../modules/assets/controllers/Assets/frest
ERROR - 2020-09-18 13:14:24 --> Severity: Warning --> Illegal string offset 'app-field-wrapper' /home/worksuite/public_html/prepod/application/helpers/fields_helper.php 309
ERROR - 2020-09-18 13:14:24 --> Severity: Warning --> Invalid argument supplied for foreach() /home/worksuite/public_html/prepod/application/helpers/fields_helper.php 310
ERROR - 2020-09-18 11:14:50 --> 404 Page Not Found: ../../modules/assets/controllers/Assets/frest
ERROR - 2020-09-18 11:15:17 --> 404 Page Not Found: ../../modules/assets/controllers/Assets/frest
ERROR - 2020-09-18 11:15:25 --> 404 Page Not Found: ../../modules/assets/controllers/Assets/frest
ERROR - 2020-09-18 13:16:07 --> Could not find the language line "18-24"
ERROR - 2020-09-18 13:16:07 --> Could not find the language line "25-29"
ERROR - 2020-09-18 13:16:07 --> Could not find the language line "30-39"
ERROR - 2020-09-18 13:16:07 --> Could not find the language line "40-60"
ERROR - 2020-09-18 13:16:07 --> Severity: Warning --> Invalid argument supplied for foreach() /home/worksuite/public_html/prepod/modules/hrm/views/hrm_dashboard.php 242
ERROR - 2020-09-18 11:16:08 --> 404 Page Not Found: ../../modules/assets/controllers/Assets/frest
ERROR - 2020-09-18 11:16:44 --> 404 Page Not Found: ../../modules/assets/controllers/Assets/frest
ERROR - 2020-09-18 11:17:58 --> 404 Page Not Found: ../../modules/assets/controllers/Assets/frest
ERROR - 2020-09-18 13:18:06 --> Could not find the language line "Asset Management"
ERROR - 2020-09-18 11:36:28 --> 404 Page Not Found: ../../modules/assets/controllers/Assets/frest
ERROR - 2020-09-18 15:19:50 --> Severity: Warning --> Invalid argument supplied for foreach() /home/worksuite/public_html/prepod/application/controllers/admin/Proposals.php 707
ERROR - 2020-09-18 15:39:12 --> Severity: Warning --> Invalid argument supplied for foreach() /home/worksuite/public_html/prepod/application/controllers/admin/Proposals.php 707
ERROR - 2020-09-18 15:39:12 --> Severity: Warning --> Use of undefined constant kanban_items - assumed 'kanban_items' (this will throw an Error in a future version of PHP) /home/worksuite/public_html/prepod/application/controllers/admin/Proposals.php 714
ERROR - 2020-09-18 15:42:03 --> Severity: Warning --> Invalid argument supplied for foreach() /home/worksuite/public_html/prepod/application/controllers/admin/Proposals.php 707
ERROR - 2020-09-18 15:42:03 --> Severity: Warning --> Use of undefined constant kanban_items - assumed 'kanban_items' (this will throw an Error in a future version of PHP) /home/worksuite/public_html/prepod/application/controllers/admin/Proposals.php 714
ERROR - 2020-09-18 15:42:16 --> Severity: Warning --> Invalid argument supplied for foreach() /home/worksuite/public_html/prepod/application/controllers/admin/Proposals.php 707
ERROR - 2020-09-18 15:42:16 --> Severity: Warning --> Use of undefined constant kanban_items - assumed 'kanban_items' (this will throw an Error in a future version of PHP) /home/worksuite/public_html/prepod/application/controllers/admin/Proposals.php 714
ERROR - 2020-09-18 15:46:46 --> Severity: Warning --> Invalid argument supplied for foreach() /home/worksuite/public_html/prepod/application/controllers/admin/Proposals.php 707
ERROR - 2020-09-18 15:48:42 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/worksuite/public_html/prepod/application/controllers/admin/Proposals.php 712
ERROR - 2020-09-18 15:48:42 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/worksuite/public_html/prepod/application/controllers/admin/Proposals.php 712
ERROR - 2020-09-18 15:48:42 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/worksuite/public_html/prepod/application/controllers/admin/Proposals.php 712
ERROR - 2020-09-18 15:48:42 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/worksuite/public_html/prepod/application/controllers/admin/Proposals.php 712
ERROR - 2020-09-18 15:48:42 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/worksuite/public_html/prepod/application/controllers/admin/Proposals.php 712
ERROR - 2020-09-18 15:48:42 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/worksuite/public_html/prepod/application/controllers/admin/Proposals.php 712
ERROR - 2020-09-18 16:28:45 --> Severity: error --> Exception: Function name must be a string /home/worksuite/public_html/prepod/application/controllers/admin/Proposals.php 718
ERROR - 2020-09-18 16:29:04 --> Severity: error --> Exception: Function name must be a string /home/worksuite/public_html/prepod/application/controllers/admin/Proposals.php 718
ERROR - 2020-09-18 22:47:14 --> Could not find the language line "Asset Management"
ERROR - 2020-09-18 22:47:16 --> Could not find the language line "Allocation"
ERROR - 2020-09-18 22:47:16 --> Could not find the language line "time"
ERROR - 2020-09-18 22:47:16 --> Could not find the language line "action"
ERROR - 2020-09-18 22:47:17 --> Could not find the language line "Allocation"
ERROR - 2020-09-18 22:47:17 --> Could not find the language line "time"
ERROR - 2020-09-18 22:47:17 --> Could not find the language line "action"
ERROR - 2020-09-18 22:47:19 --> Could not find the language line "Revoke"
ERROR - 2020-09-18 22:47:19 --> Could not find the language line "time"
ERROR - 2020-09-18 22:47:19 --> Could not find the language line "action"
ERROR - 2020-09-18 22:47:20 --> Could not find the language line "Depreciation"
ERROR - 2020-09-18 22:56:22 --> Severity: Warning --> Invalid argument supplied for foreach() /home/worksuite/public_html/prepod/application/helpers/fields_helper.php 333
ERROR - 2020-09-18 22:58:35 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near 'ASC
    LIMIT 0, 25' at line 7 - Invalid query: 
    SELECT SQL_CALC_FOUND_ROWS staffid, company_username ,staffid,company_username
    FROM tblstaff_companies
    
    
    WHERE  tblstaff_companies.company_username = 'asdfs'
    
    ORDER BY  ASC
    LIMIT 0, 25
    
ERROR - 2020-09-18 22:58:35 --> Severity: error --> Exception: Call to a member function result_array() on boolean /home/worksuite/public_html/prepod/application/helpers/datatables_helper.php 222
ERROR - 2020-09-18 22:58:37 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near 'DESC
    LIMIT 0, 25' at line 7 - Invalid query: 
    SELECT SQL_CALC_FOUND_ROWS staffid, company_username ,staffid,company_username
    FROM tblstaff_companies
    
    
    WHERE  tblstaff_companies.company_username = 'asdfs'
    
    ORDER BY  DESC
    LIMIT 0, 25
    
ERROR - 2020-09-18 22:58:37 --> Severity: error --> Exception: Call to a member function result_array() on boolean /home/worksuite/public_html/prepod/application/helpers/datatables_helper.php 222
ERROR - 2020-09-18 22:58:41 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near 'ASC
    LIMIT 0, 25' at line 7 - Invalid query: 
    SELECT SQL_CALC_FOUND_ROWS staffid, company_username ,staffid,company_username
    FROM tblstaff_companies
    
    
    WHERE  tblstaff_companies.company_username = 'asdfs'
    
    ORDER BY  ASC
    LIMIT 0, 25
    
ERROR - 2020-09-18 22:58:41 --> Severity: error --> Exception: Call to a member function result_array() on boolean /home/worksuite/public_html/prepod/application/helpers/datatables_helper.php 222
ERROR - 2020-09-18 22:58:42 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near 'DESC
    LIMIT 0, 25' at line 7 - Invalid query: 
    SELECT SQL_CALC_FOUND_ROWS staffid, company_username ,staffid,company_username
    FROM tblstaff_companies
    
    
    WHERE  tblstaff_companies.company_username = 'asdfs'
    
    ORDER BY  DESC
    LIMIT 0, 25
    
ERROR - 2020-09-18 22:58:42 --> Severity: error --> Exception: Call to a member function result_array() on boolean /home/worksuite/public_html/prepod/application/helpers/datatables_helper.php 222
ERROR - 2020-09-18 22:58:43 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near 'ASC
    LIMIT 0, 25' at line 7 - Invalid query: 
    SELECT SQL_CALC_FOUND_ROWS staffid, company_username ,staffid,company_username
    FROM tblstaff_companies
    
    
    WHERE  tblstaff_companies.company_username = 'asdfs'
    
    ORDER BY  ASC
    LIMIT 0, 25
    
ERROR - 2020-09-18 22:58:43 --> Severity: error --> Exception: Call to a member function result_array() on boolean /home/worksuite/public_html/prepod/application/helpers/datatables_helper.php 222
ERROR - 2020-09-18 22:58:58 --> Severity: Warning --> Invalid argument supplied for foreach() /home/worksuite/public_html/prepod/application/helpers/fields_helper.php 333
