<?php defined('BASEPATH') OR exit('No direct script access allowed'); ?>

ERROR - 2020-10-09 08:03:02 --> 404 Page Not Found: ../../modules/assets/controllers/Assets/frest
ERROR - 2020-10-09 11:49:06 --> Query error: Column 'company_username' in where clause is ambiguous - Invalid query: SELECT `amount`, `tblinvoicepaymentrecords`.`date`
FROM `tblinvoicepaymentrecords`
JOIN `tblinvoices` ON `tblinvoices`.`id` = `tblinvoicepaymentrecords`.`invoiceid`
WHERE `company_username` = 'asdfs'
AND YEAR(tblinvoicepaymentrecords.date) = '2020'
ERROR - 2020-10-09 11:49:06 --> Severity: error --> Exception: Call to a member function result_array() on boolean /home/worksuite/public_html/prepod/application/models/Reports_model.php 560
ERROR - 2020-10-09 11:49:08 --> Query error: Column 'company_username' in where clause is ambiguous - Invalid query: SELECT `amount`, `tblinvoicepaymentrecords`.`date`
FROM `tblinvoicepaymentrecords`
JOIN `tblinvoices` ON `tblinvoices`.`id` = `tblinvoicepaymentrecords`.`invoiceid`
WHERE `company_username` = 'asdfs'
AND YEAR(tblinvoicepaymentrecords.date) = '2020'
ERROR - 2020-10-09 11:49:08 --> Severity: error --> Exception: Call to a member function result_array() on boolean /home/worksuite/public_html/prepod/application/models/Reports_model.php 463
ERROR - 2020-10-09 16:49:28 --> 404 Page Not Found: ../../modules/assets/controllers/Assets/frest
ERROR - 2020-10-09 16:49:32 --> 404 Page Not Found: ../../modules/assets/controllers/Assets/frest
