<?php defined('BASEPATH') OR exit('No direct script access allowed'); ?>

ERROR - 2020-09-25 09:56:55 --> Query error: Column 'company_username' in where clause is ambiguous - Invalid query: SELECT `amount`, `tblinvoicepaymentrecords`.`date`
FROM `tblinvoicepaymentrecords`
JOIN `tblinvoices` ON `tblinvoices`.`id` = `tblinvoicepaymentrecords`.`invoiceid`
WHERE `company_username` = 'asdfs'
AND YEAR(tblinvoicepaymentrecords.date) = '2020'
ERROR - 2020-09-25 09:56:55 --> Severity: error --> Exception: Call to a member function result_array() on boolean /home/worksuite/public_html/prepod/application/models/Reports_model.php 560
ERROR - 2020-09-25 10:08:43 --> 404 Page Not Found: /index
ERROR - 2020-09-25 10:08:44 --> 404 Page Not Found: /index
