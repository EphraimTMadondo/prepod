<?php defined('BASEPATH') OR exit('No direct script access allowed'); ?>

ERROR - 2020-08-06 00:13:57 --> Severity: Notice --> Undefined variable: total_undismissed_announcements /home/worksuite/public_html/os/application/views/admin/dashboard/widgets/user_data.php 54
ERROR - 2020-08-06 00:14:01 --> Severity: Notice --> Trying to get property 'staffid' of non-object /home/worksuite/public_html/os/application/libraries/mails/Staff_event_notification.php 27
ERROR - 2020-08-06 00:14:01 --> Severity: Notice --> Trying to get property 'email' of non-object /home/worksuite/public_html/os/application/libraries/mails/Staff_event_notification.php 30
ERROR - 2020-08-06 00:14:01 --> Severity: Notice --> Trying to get property 'staffid' of non-object /home/worksuite/public_html/os/application/libraries/mails/Staff_event_notification.php 31
ERROR - 2020-08-06 00:14:01 --> Severity: Notice --> Undefined index: current_company /home/worksuite/public_html/os/application/models/Staff_model.php 333
ERROR - 2020-08-06 00:14:01 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near ')
ORDER BY `firstname` DESC' at line 3 - Invalid query: SELECT *
FROM `tblstaff`
WHERE `staffid` IN()
ORDER BY `firstname` DESC
ERROR - 2020-08-06 00:14:01 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /home/worksuite/public_html/os/system/core/Exceptions.php:271) /home/worksuite/public_html/os/system/core/Common.php 570
ERROR - 2020-08-06 00:14:03 --> Query error: Column 'id' in field list is ambiguous - Invalid query: SELECT tbltasks.name as title, id, (CASE rel_type
        WHEN "contract" THEN (SELECT subject FROM tblcontracts WHERE tblcontracts.id = tbltasks.rel_id)
        WHEN "estimate" THEN (SELECT id FROM tblestimates WHERE tblestimates.id = tbltasks.rel_id)
        WHEN "proposal" THEN (SELECT id FROM tblproposals WHERE tblproposals.id = tbltasks.rel_id)
        WHEN "invoice" THEN (SELECT id FROM tblinvoices WHERE tblinvoices.id = tbltasks.rel_id)
        WHEN "ticket" THEN (SELECT CONCAT(CONCAT("#", tbltickets.ticketid), " - ", tbltickets.subject) FROM tbltickets WHERE tbltickets.ticketid=tbltasks.rel_id)
        WHEN "lead" THEN (SELECT CASE tblleads.email WHEN "" THEN tblleads.name ELSE CONCAT(tblleads.name, " - ", tblleads.email) END FROM tblleads WHERE tblleads.id=tbltasks.rel_id)
        WHEN "customer" THEN (SELECT CASE company WHEN "" THEN (SELECT CONCAT(firstname, " ", lastname) FROM tblcontacts WHERE userid = tblclients.userid and is_primary = 1) ELSE company END FROM tblclients WHERE tblclients.userid=tbltasks.rel_id)
        WHEN "project" THEN (SELECT CONCAT(CONCAT(CONCAT("#", tblprojects.id), " - ", tblprojects.name), " - ", (SELECT CASE company WHEN "" THEN (SELECT CONCAT(firstname, " ", lastname) FROM tblcontacts WHERE userid = tblclients.userid and is_primary = 1) ELSE company END FROM tblclients WHERE userid=tblprojects.clientid)) FROM tblprojects WHERE tblprojects.id=tbltasks.rel_id)
        WHEN "expense" THEN (SELECT CASE expense_name WHEN "" THEN tblexpenses_categories.name ELSE
         CONCAT(tblexpenses_categories.name, ' (', tblexpenses.expense_name, ')') END FROM tblexpenses JOIN tblexpenses_categories ON tblexpenses_categories.id = tblexpenses.category WHERE tblexpenses.id=tbltasks.rel_id)
        ELSE NULL
        END) as rel_name, rel_id, status, CASE WHEN duedate IS NULL THEN startdate ELSE duedate END as date, `value`
FROM `tbltasks`, `tbloptions`
WHERE `tbltasks`.`company_username` = 'basic_smith'
AND `status` != 5
AND CASE WHEN duedate IS NULL THEN (startdate BETWEEN '2020-01-01' AND '2021/08/06') ELSE (duedate BETWEEN '2020-01-01' AND '2021/08/06') END
AND `name` = 'calendar_only_assigned_tasks'
ERROR - 2020-08-06 00:20:02 --> Severity: Notice --> Trying to get property 'staffid' of non-object /home/worksuite/public_html/os/application/libraries/mails/Staff_event_notification.php 27
ERROR - 2020-08-06 00:20:02 --> Severity: Notice --> Trying to get property 'email' of non-object /home/worksuite/public_html/os/application/libraries/mails/Staff_event_notification.php 30
ERROR - 2020-08-06 00:20:02 --> Severity: Notice --> Trying to get property 'staffid' of non-object /home/worksuite/public_html/os/application/libraries/mails/Staff_event_notification.php 31
ERROR - 2020-08-06 00:20:02 --> Severity: Notice --> Undefined index: current_company /home/worksuite/public_html/os/application/models/Staff_model.php 333
ERROR - 2020-08-06 00:20:02 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near ')
ORDER BY `firstname` DESC' at line 3 - Invalid query: SELECT *
FROM `tblstaff`
WHERE `staffid` IN()
ORDER BY `firstname` DESC
ERROR - 2020-08-06 00:20:02 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /home/worksuite/public_html/os/system/core/Exceptions.php:271) /home/worksuite/public_html/os/system/core/Common.php 570
ERROR - 2020-08-06 00:26:01 --> Severity: Notice --> Trying to get property 'staffid' of non-object /home/worksuite/public_html/os/application/libraries/mails/Staff_event_notification.php 27
ERROR - 2020-08-06 00:26:01 --> Severity: Notice --> Trying to get property 'email' of non-object /home/worksuite/public_html/os/application/libraries/mails/Staff_event_notification.php 30
ERROR - 2020-08-06 00:26:01 --> Severity: Notice --> Trying to get property 'staffid' of non-object /home/worksuite/public_html/os/application/libraries/mails/Staff_event_notification.php 31
ERROR - 2020-08-06 00:26:02 --> Severity: Notice --> Undefined index: current_company /home/worksuite/public_html/os/application/models/Staff_model.php 333
ERROR - 2020-08-06 00:26:02 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near ')
ORDER BY `firstname` DESC' at line 3 - Invalid query: SELECT *
FROM `tblstaff`
WHERE `staffid` IN()
ORDER BY `firstname` DESC
ERROR - 2020-08-06 00:26:02 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /home/worksuite/public_html/os/system/core/Exceptions.php:271) /home/worksuite/public_html/os/system/core/Common.php 570
ERROR - 2020-08-06 00:32:01 --> Severity: Notice --> Trying to get property 'staffid' of non-object /home/worksuite/public_html/os/application/libraries/mails/Staff_event_notification.php 27
ERROR - 2020-08-06 00:32:01 --> Severity: Notice --> Trying to get property 'email' of non-object /home/worksuite/public_html/os/application/libraries/mails/Staff_event_notification.php 30
ERROR - 2020-08-06 00:32:01 --> Severity: Notice --> Trying to get property 'staffid' of non-object /home/worksuite/public_html/os/application/libraries/mails/Staff_event_notification.php 31
ERROR - 2020-08-06 00:32:01 --> Severity: Notice --> Undefined index: current_company /home/worksuite/public_html/os/application/models/Staff_model.php 333
ERROR - 2020-08-06 00:32:01 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near ')
ORDER BY `firstname` DESC' at line 3 - Invalid query: SELECT *
FROM `tblstaff`
WHERE `staffid` IN()
ORDER BY `firstname` DESC
ERROR - 2020-08-06 00:32:01 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /home/worksuite/public_html/os/system/core/Exceptions.php:271) /home/worksuite/public_html/os/system/core/Common.php 570
ERROR - 2020-08-06 00:35:01 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/worksuite/public_html/os/application/libraries/App.php 261
ERROR - 2020-08-06 00:35:01 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/worksuite/public_html/os/application/libraries/App.php 261
ERROR - 2020-08-06 00:35:01 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/worksuite/public_html/os/application/libraries/App.php 261
ERROR - 2020-08-06 00:35:03 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/worksuite/public_html/os/application/libraries/App.php 261
ERROR - 2020-08-06 00:35:03 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/worksuite/public_html/os/application/libraries/App.php 261
ERROR - 2020-08-06 00:35:03 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/worksuite/public_html/os/application/libraries/App.php 261
ERROR - 2020-08-06 00:35:03 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/worksuite/public_html/os/application/libraries/App.php 261
ERROR - 2020-08-06 00:35:03 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/worksuite/public_html/os/application/libraries/App.php 261
ERROR - 2020-08-06 00:35:03 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/worksuite/public_html/os/application/libraries/App.php 261
ERROR - 2020-08-06 00:35:03 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/worksuite/public_html/os/application/libraries/App.php 261
ERROR - 2020-08-06 00:36:02 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/worksuite/public_html/os/application/libraries/App.php 261
ERROR - 2020-08-06 00:38:02 --> Severity: Notice --> Trying to get property 'staffid' of non-object /home/worksuite/public_html/os/application/libraries/mails/Staff_event_notification.php 27
ERROR - 2020-08-06 00:38:02 --> Severity: Notice --> Trying to get property 'email' of non-object /home/worksuite/public_html/os/application/libraries/mails/Staff_event_notification.php 30
ERROR - 2020-08-06 00:38:02 --> Severity: Notice --> Trying to get property 'staffid' of non-object /home/worksuite/public_html/os/application/libraries/mails/Staff_event_notification.php 31
ERROR - 2020-08-06 00:38:02 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near ')
ORDER BY `firstname` DESC' at line 3 - Invalid query: SELECT *
FROM `tblstaff`
WHERE `staffid` IN()
ORDER BY `firstname` DESC
ERROR - 2020-08-06 00:38:02 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /home/worksuite/public_html/os/system/core/Exceptions.php:271) /home/worksuite/public_html/os/system/core/Common.php 570
ERROR - 2020-08-06 00:40:37 --> Severity: Notice --> Undefined index: company_info_format /home/worksuite/public_html/os/application/libraries/App.php 272
ERROR - 2020-08-06 00:44:01 --> Severity: Notice --> Trying to get property 'staffid' of non-object /home/worksuite/public_html/os/application/libraries/mails/Staff_event_notification.php 27
ERROR - 2020-08-06 00:44:01 --> Severity: Notice --> Trying to get property 'email' of non-object /home/worksuite/public_html/os/application/libraries/mails/Staff_event_notification.php 30
ERROR - 2020-08-06 00:44:01 --> Severity: Notice --> Trying to get property 'staffid' of non-object /home/worksuite/public_html/os/application/libraries/mails/Staff_event_notification.php 31
ERROR - 2020-08-06 00:44:01 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near ')
ORDER BY `firstname` DESC' at line 3 - Invalid query: SELECT *
FROM `tblstaff`
WHERE `staffid` IN()
ORDER BY `firstname` DESC
ERROR - 2020-08-06 00:44:01 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /home/worksuite/public_html/os/system/core/Exceptions.php:271) /home/worksuite/public_html/os/system/core/Common.php 570
ERROR - 2020-08-06 00:49:02 --> Severity: Notice --> Trying to get property 'staffid' of non-object /home/worksuite/public_html/os/application/libraries/mails/Staff_event_notification.php 27
ERROR - 2020-08-06 00:49:02 --> Severity: Notice --> Trying to get property 'email' of non-object /home/worksuite/public_html/os/application/libraries/mails/Staff_event_notification.php 30
ERROR - 2020-08-06 00:49:02 --> Severity: Notice --> Trying to get property 'staffid' of non-object /home/worksuite/public_html/os/application/libraries/mails/Staff_event_notification.php 31
ERROR - 2020-08-06 00:49:02 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near ')
ORDER BY `firstname` DESC' at line 3 - Invalid query: SELECT *
FROM `tblstaff`
WHERE `staffid` IN()
ORDER BY `firstname` DESC
ERROR - 2020-08-06 00:49:02 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /home/worksuite/public_html/os/system/core/Exceptions.php:271) /home/worksuite/public_html/os/system/core/Common.php 570
ERROR - 2020-08-06 00:55:02 --> Severity: Notice --> Trying to get property 'staffid' of non-object /home/worksuite/public_html/os/application/libraries/mails/Staff_event_notification.php 27
ERROR - 2020-08-06 00:55:02 --> Severity: Notice --> Trying to get property 'email' of non-object /home/worksuite/public_html/os/application/libraries/mails/Staff_event_notification.php 30
ERROR - 2020-08-06 00:55:02 --> Severity: Notice --> Trying to get property 'staffid' of non-object /home/worksuite/public_html/os/application/libraries/mails/Staff_event_notification.php 31
ERROR - 2020-08-06 00:55:02 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near ')
ORDER BY `firstname` DESC' at line 3 - Invalid query: SELECT *
FROM `tblstaff`
WHERE `staffid` IN()
ORDER BY `firstname` DESC
ERROR - 2020-08-06 00:55:02 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /home/worksuite/public_html/os/system/core/Exceptions.php:271) /home/worksuite/public_html/os/system/core/Common.php 570
ERROR - 2020-08-06 01:01:01 --> Severity: Notice --> Trying to get property 'staffid' of non-object /home/worksuite/public_html/os/application/libraries/mails/Staff_event_notification.php 27
ERROR - 2020-08-06 01:01:01 --> Severity: Notice --> Trying to get property 'email' of non-object /home/worksuite/public_html/os/application/libraries/mails/Staff_event_notification.php 30
ERROR - 2020-08-06 01:01:01 --> Severity: Notice --> Trying to get property 'staffid' of non-object /home/worksuite/public_html/os/application/libraries/mails/Staff_event_notification.php 31
ERROR - 2020-08-06 01:01:01 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near ')
ORDER BY `firstname` DESC' at line 3 - Invalid query: SELECT *
FROM `tblstaff`
WHERE `staffid` IN()
ORDER BY `firstname` DESC
ERROR - 2020-08-06 01:01:01 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /home/worksuite/public_html/os/system/core/Exceptions.php:271) /home/worksuite/public_html/os/system/core/Common.php 570
ERROR - 2020-08-06 01:01:35 --> Severity: Notice --> Undefined index: paymentmethod_mollie_api_key /home/worksuite/public_html/os/application/libraries/App.php 272
ERROR - 2020-08-06 01:01:35 --> Severity: Notice --> Undefined index: paymentmethod_paypal_braintree_merchant_id /home/worksuite/public_html/os/application/libraries/App.php 272
ERROR - 2020-08-06 01:01:35 --> Severity: Notice --> Undefined index: paymentmethod_paypal_braintree_api_private_key /home/worksuite/public_html/os/application/libraries/App.php 272
ERROR - 2020-08-06 01:01:35 --> Severity: Notice --> Undefined index: paymentmethod_paypal_checkout_secret /home/worksuite/public_html/os/application/libraries/App.php 272
ERROR - 2020-08-06 01:01:35 --> Severity: Notice --> Undefined index: paymentmethod_paypal_username /home/worksuite/public_html/os/application/libraries/App.php 272
ERROR - 2020-08-06 01:01:35 --> Severity: Notice --> Undefined index: paymentmethod_paypal_password /home/worksuite/public_html/os/application/libraries/App.php 272
ERROR - 2020-08-06 01:01:35 --> Severity: Notice --> Undefined index: paymentmethod_paypal_signature /home/worksuite/public_html/os/application/libraries/App.php 272
ERROR - 2020-08-06 01:01:35 --> Severity: Notice --> Undefined index: paymentmethod_payu_money_salt /home/worksuite/public_html/os/application/libraries/App.php 272
ERROR - 2020-08-06 01:01:35 --> Severity: Notice --> Undefined index: paymentmethod_stripe_api_secret_key /home/worksuite/public_html/os/application/libraries/App.php 272
ERROR - 2020-08-06 01:01:35 --> Severity: Notice --> Undefined index: paymentmethod_stripe_ideal_api_secret_key /home/worksuite/public_html/os/application/libraries/App.php 272
ERROR - 2020-08-06 01:01:35 --> Severity: Notice --> Undefined index: paymentmethod_two_checkout_private_key /home/worksuite/public_html/os/application/libraries/App.php 272
ERROR - 2020-08-06 01:01:35 --> Severity: Notice --> Undefined index: mail_engine /home/worksuite/public_html/os/application/helpers/settings_helper.php 140
ERROR - 2020-08-06 01:01:35 --> Severity: Warning --> Creating default object from empty value /home/worksuite/public_html/os/application/helpers/settings_helper.php 141
ERROR - 2020-08-06 01:01:35 --> Query error: Unknown column 'mail_engine' in 'field list' - Invalid query: UPDATE `tbl_sub_options_10` SET `mail_engine` = '{\"value\":\"phpmailer\"}'
WHERE `company_username` = 'basic_smith'
ERROR - 2020-08-06 01:01:35 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /home/worksuite/public_html/os/system/core/Exceptions.php:271) /home/worksuite/public_html/os/system/core/Common.php 570
ERROR - 2020-08-06 01:02:01 --> Severity: Notice --> Trying to get property 'staffid' of non-object /home/worksuite/public_html/os/application/libraries/mails/Staff_event_notification.php 27
ERROR - 2020-08-06 01:02:01 --> Severity: Notice --> Trying to get property 'email' of non-object /home/worksuite/public_html/os/application/libraries/mails/Staff_event_notification.php 30
ERROR - 2020-08-06 01:02:01 --> Severity: Notice --> Trying to get property 'staffid' of non-object /home/worksuite/public_html/os/application/libraries/mails/Staff_event_notification.php 31
ERROR - 2020-08-06 01:02:01 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near ')
ORDER BY `firstname` DESC' at line 3 - Invalid query: SELECT *
FROM `tblstaff`
WHERE `staffid` IN()
ORDER BY `firstname` DESC
ERROR - 2020-08-06 01:02:01 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /home/worksuite/public_html/os/system/core/Exceptions.php:271) /home/worksuite/public_html/os/system/core/Common.php 570
ERROR - 2020-08-06 01:03:02 --> Severity: Notice --> Trying to get property 'staffid' of non-object /home/worksuite/public_html/os/application/libraries/mails/Staff_event_notification.php 27
ERROR - 2020-08-06 01:03:02 --> Severity: Notice --> Trying to get property 'email' of non-object /home/worksuite/public_html/os/application/libraries/mails/Staff_event_notification.php 30
ERROR - 2020-08-06 01:03:02 --> Severity: Notice --> Trying to get property 'staffid' of non-object /home/worksuite/public_html/os/application/libraries/mails/Staff_event_notification.php 31
ERROR - 2020-08-06 01:03:02 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near ')
ORDER BY `firstname` DESC' at line 3 - Invalid query: SELECT *
FROM `tblstaff`
WHERE `staffid` IN()
ORDER BY `firstname` DESC
ERROR - 2020-08-06 01:03:02 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /home/worksuite/public_html/os/system/core/Exceptions.php:271) /home/worksuite/public_html/os/system/core/Common.php 570
ERROR - 2020-08-06 01:04:01 --> Severity: Notice --> Trying to get property 'staffid' of non-object /home/worksuite/public_html/os/application/libraries/mails/Staff_event_notification.php 27
ERROR - 2020-08-06 01:04:01 --> Severity: Notice --> Trying to get property 'email' of non-object /home/worksuite/public_html/os/application/libraries/mails/Staff_event_notification.php 30
ERROR - 2020-08-06 01:04:01 --> Severity: Notice --> Trying to get property 'staffid' of non-object /home/worksuite/public_html/os/application/libraries/mails/Staff_event_notification.php 31
ERROR - 2020-08-06 01:04:01 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near ')
ORDER BY `firstname` DESC' at line 3 - Invalid query: SELECT *
FROM `tblstaff`
WHERE `staffid` IN()
ORDER BY `firstname` DESC
ERROR - 2020-08-06 01:04:01 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /home/worksuite/public_html/os/system/core/Exceptions.php:271) /home/worksuite/public_html/os/system/core/Common.php 570
ERROR - 2020-08-06 01:04:58 --> Severity: Notice --> Undefined index: paymentmethod_mollie_api_key /home/worksuite/public_html/os/application/libraries/App.php 272
ERROR - 2020-08-06 01:04:58 --> Severity: Notice --> Undefined index: paymentmethod_paypal_braintree_merchant_id /home/worksuite/public_html/os/application/libraries/App.php 272
ERROR - 2020-08-06 01:04:58 --> Severity: Notice --> Undefined index: paymentmethod_paypal_braintree_api_private_key /home/worksuite/public_html/os/application/libraries/App.php 272
ERROR - 2020-08-06 01:04:58 --> Severity: Notice --> Undefined index: paymentmethod_paypal_checkout_secret /home/worksuite/public_html/os/application/libraries/App.php 272
ERROR - 2020-08-06 01:04:58 --> Severity: Notice --> Undefined index: paymentmethod_paypal_username /home/worksuite/public_html/os/application/libraries/App.php 272
ERROR - 2020-08-06 01:04:58 --> Severity: Notice --> Undefined index: paymentmethod_paypal_password /home/worksuite/public_html/os/application/libraries/App.php 272
ERROR - 2020-08-06 01:04:58 --> Severity: Notice --> Undefined index: paymentmethod_paypal_signature /home/worksuite/public_html/os/application/libraries/App.php 272
ERROR - 2020-08-06 01:04:58 --> Severity: Notice --> Undefined index: paymentmethod_payu_money_salt /home/worksuite/public_html/os/application/libraries/App.php 272
ERROR - 2020-08-06 01:04:58 --> Severity: Notice --> Undefined index: paymentmethod_stripe_api_secret_key /home/worksuite/public_html/os/application/libraries/App.php 272
ERROR - 2020-08-06 01:04:58 --> Severity: Notice --> Undefined index: paymentmethod_stripe_ideal_api_secret_key /home/worksuite/public_html/os/application/libraries/App.php 272
ERROR - 2020-08-06 01:04:58 --> Severity: Notice --> Undefined index: paymentmethod_two_checkout_private_key /home/worksuite/public_html/os/application/libraries/App.php 272
ERROR - 2020-08-06 01:04:58 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /home/worksuite/public_html/os/system/core/Exceptions.php:271) /home/worksuite/public_html/os/system/helpers/url_helper.php 564
ERROR - 2020-08-06 01:05:01 --> Severity: Notice --> Trying to get property 'staffid' of non-object /home/worksuite/public_html/os/application/libraries/mails/Staff_event_notification.php 27
ERROR - 2020-08-06 01:05:01 --> Severity: Notice --> Trying to get property 'email' of non-object /home/worksuite/public_html/os/application/libraries/mails/Staff_event_notification.php 30
ERROR - 2020-08-06 01:05:01 --> Severity: Notice --> Trying to get property 'staffid' of non-object /home/worksuite/public_html/os/application/libraries/mails/Staff_event_notification.php 31
ERROR - 2020-08-06 01:05:01 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near ')
ORDER BY `firstname` DESC' at line 3 - Invalid query: SELECT *
FROM `tblstaff`
WHERE `staffid` IN()
ORDER BY `firstname` DESC
ERROR - 2020-08-06 01:05:01 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /home/worksuite/public_html/os/system/core/Exceptions.php:271) /home/worksuite/public_html/os/system/core/Common.php 570
ERROR - 2020-08-06 01:06:01 --> Severity: Notice --> Trying to get property 'staffid' of non-object /home/worksuite/public_html/os/application/libraries/mails/Staff_event_notification.php 27
ERROR - 2020-08-06 01:06:01 --> Severity: Notice --> Trying to get property 'email' of non-object /home/worksuite/public_html/os/application/libraries/mails/Staff_event_notification.php 30
ERROR - 2020-08-06 01:06:01 --> Severity: Notice --> Trying to get property 'staffid' of non-object /home/worksuite/public_html/os/application/libraries/mails/Staff_event_notification.php 31
ERROR - 2020-08-06 01:06:01 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near ')
ORDER BY `firstname` DESC' at line 3 - Invalid query: SELECT *
FROM `tblstaff`
WHERE `staffid` IN()
ORDER BY `firstname` DESC
ERROR - 2020-08-06 01:06:01 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /home/worksuite/public_html/os/system/core/Exceptions.php:271) /home/worksuite/public_html/os/system/core/Common.php 570
ERROR - 2020-08-06 01:07:02 --> Severity: Notice --> Trying to get property 'staffid' of non-object /home/worksuite/public_html/os/application/libraries/mails/Staff_event_notification.php 27
ERROR - 2020-08-06 01:07:02 --> Severity: Notice --> Trying to get property 'email' of non-object /home/worksuite/public_html/os/application/libraries/mails/Staff_event_notification.php 30
ERROR - 2020-08-06 01:07:02 --> Severity: Notice --> Trying to get property 'staffid' of non-object /home/worksuite/public_html/os/application/libraries/mails/Staff_event_notification.php 31
ERROR - 2020-08-06 01:07:02 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near ')
ORDER BY `firstname` DESC' at line 3 - Invalid query: SELECT *
FROM `tblstaff`
WHERE `staffid` IN()
ORDER BY `firstname` DESC
ERROR - 2020-08-06 01:07:02 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /home/worksuite/public_html/os/system/core/Exceptions.php:271) /home/worksuite/public_html/os/system/core/Common.php 570
ERROR - 2020-08-06 01:08:01 --> Severity: Notice --> Trying to get property 'staffid' of non-object /home/worksuite/public_html/os/application/libraries/mails/Staff_event_notification.php 27
ERROR - 2020-08-06 01:08:01 --> Severity: Notice --> Trying to get property 'email' of non-object /home/worksuite/public_html/os/application/libraries/mails/Staff_event_notification.php 30
ERROR - 2020-08-06 01:08:01 --> Severity: Notice --> Trying to get property 'staffid' of non-object /home/worksuite/public_html/os/application/libraries/mails/Staff_event_notification.php 31
ERROR - 2020-08-06 01:08:01 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near ')
ORDER BY `firstname` DESC' at line 3 - Invalid query: SELECT *
FROM `tblstaff`
WHERE `staffid` IN()
ORDER BY `firstname` DESC
ERROR - 2020-08-06 01:08:01 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /home/worksuite/public_html/os/system/core/Exceptions.php:271) /home/worksuite/public_html/os/system/core/Common.php 570
ERROR - 2020-08-06 01:09:01 --> Severity: Notice --> Trying to get property 'staffid' of non-object /home/worksuite/public_html/os/application/libraries/mails/Staff_event_notification.php 27
ERROR - 2020-08-06 01:09:01 --> Severity: Notice --> Trying to get property 'email' of non-object /home/worksuite/public_html/os/application/libraries/mails/Staff_event_notification.php 30
ERROR - 2020-08-06 01:09:01 --> Severity: Notice --> Trying to get property 'staffid' of non-object /home/worksuite/public_html/os/application/libraries/mails/Staff_event_notification.php 31
ERROR - 2020-08-06 01:09:01 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near ')
ORDER BY `firstname` DESC' at line 3 - Invalid query: SELECT *
FROM `tblstaff`
WHERE `staffid` IN()
ORDER BY `firstname` DESC
ERROR - 2020-08-06 01:09:01 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /home/worksuite/public_html/os/system/core/Exceptions.php:271) /home/worksuite/public_html/os/system/core/Common.php 570
ERROR - 2020-08-06 01:10:02 --> Severity: Notice --> Trying to get property 'staffid' of non-object /home/worksuite/public_html/os/application/libraries/mails/Staff_event_notification.php 27
ERROR - 2020-08-06 01:10:02 --> Severity: Notice --> Trying to get property 'email' of non-object /home/worksuite/public_html/os/application/libraries/mails/Staff_event_notification.php 30
ERROR - 2020-08-06 01:10:02 --> Severity: Notice --> Trying to get property 'staffid' of non-object /home/worksuite/public_html/os/application/libraries/mails/Staff_event_notification.php 31
ERROR - 2020-08-06 01:10:02 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near ')
ORDER BY `firstname` DESC' at line 3 - Invalid query: SELECT *
FROM `tblstaff`
WHERE `staffid` IN()
ORDER BY `firstname` DESC
ERROR - 2020-08-06 01:10:02 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /home/worksuite/public_html/os/system/core/Exceptions.php:271) /home/worksuite/public_html/os/system/core/Common.php 570
ERROR - 2020-08-06 01:11:01 --> Severity: Notice --> Trying to get property 'staffid' of non-object /home/worksuite/public_html/os/application/libraries/mails/Staff_event_notification.php 27
ERROR - 2020-08-06 01:11:01 --> Severity: Notice --> Trying to get property 'email' of non-object /home/worksuite/public_html/os/application/libraries/mails/Staff_event_notification.php 30
ERROR - 2020-08-06 01:11:01 --> Severity: Notice --> Trying to get property 'staffid' of non-object /home/worksuite/public_html/os/application/libraries/mails/Staff_event_notification.php 31
ERROR - 2020-08-06 01:11:01 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near ')
ORDER BY `firstname` DESC' at line 3 - Invalid query: SELECT *
FROM `tblstaff`
WHERE `staffid` IN()
ORDER BY `firstname` DESC
ERROR - 2020-08-06 01:11:01 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /home/worksuite/public_html/os/system/core/Exceptions.php:271) /home/worksuite/public_html/os/system/core/Common.php 570
ERROR - 2020-08-06 01:12:02 --> Severity: Notice --> Trying to get property 'staffid' of non-object /home/worksuite/public_html/os/application/libraries/mails/Staff_event_notification.php 27
ERROR - 2020-08-06 01:12:02 --> Severity: Notice --> Trying to get property 'email' of non-object /home/worksuite/public_html/os/application/libraries/mails/Staff_event_notification.php 30
ERROR - 2020-08-06 01:12:02 --> Severity: Notice --> Trying to get property 'staffid' of non-object /home/worksuite/public_html/os/application/libraries/mails/Staff_event_notification.php 31
ERROR - 2020-08-06 01:12:02 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near ')
ORDER BY `firstname` DESC' at line 3 - Invalid query: SELECT *
FROM `tblstaff`
WHERE `staffid` IN()
ORDER BY `firstname` DESC
ERROR - 2020-08-06 01:12:02 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /home/worksuite/public_html/os/system/core/Exceptions.php:271) /home/worksuite/public_html/os/system/core/Common.php 570
ERROR - 2020-08-06 01:13:01 --> Severity: Notice --> Trying to get property 'staffid' of non-object /home/worksuite/public_html/os/application/libraries/mails/Staff_event_notification.php 27
ERROR - 2020-08-06 01:13:01 --> Severity: Notice --> Trying to get property 'email' of non-object /home/worksuite/public_html/os/application/libraries/mails/Staff_event_notification.php 30
ERROR - 2020-08-06 01:13:01 --> Severity: Notice --> Trying to get property 'staffid' of non-object /home/worksuite/public_html/os/application/libraries/mails/Staff_event_notification.php 31
ERROR - 2020-08-06 01:13:01 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near ')
ORDER BY `firstname` DESC' at line 3 - Invalid query: SELECT *
FROM `tblstaff`
WHERE `staffid` IN()
ORDER BY `firstname` DESC
ERROR - 2020-08-06 01:13:01 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /home/worksuite/public_html/os/system/core/Exceptions.php:271) /home/worksuite/public_html/os/system/core/Common.php 570
ERROR - 2020-08-06 01:14:01 --> Severity: Notice --> Trying to get property 'staffid' of non-object /home/worksuite/public_html/os/application/libraries/mails/Staff_event_notification.php 27
ERROR - 2020-08-06 01:14:01 --> Severity: Notice --> Trying to get property 'email' of non-object /home/worksuite/public_html/os/application/libraries/mails/Staff_event_notification.php 30
ERROR - 2020-08-06 01:14:01 --> Severity: Notice --> Trying to get property 'staffid' of non-object /home/worksuite/public_html/os/application/libraries/mails/Staff_event_notification.php 31
ERROR - 2020-08-06 01:14:01 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near ')
ORDER BY `firstname` DESC' at line 3 - Invalid query: SELECT *
FROM `tblstaff`
WHERE `staffid` IN()
ORDER BY `firstname` DESC
ERROR - 2020-08-06 01:14:01 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /home/worksuite/public_html/os/system/core/Exceptions.php:271) /home/worksuite/public_html/os/system/core/Common.php 570
ERROR - 2020-08-06 01:15:01 --> Severity: Notice --> Trying to get property 'staffid' of non-object /home/worksuite/public_html/os/application/libraries/mails/Staff_event_notification.php 27
ERROR - 2020-08-06 01:15:01 --> Severity: Notice --> Trying to get property 'email' of non-object /home/worksuite/public_html/os/application/libraries/mails/Staff_event_notification.php 30
ERROR - 2020-08-06 01:15:01 --> Severity: Notice --> Trying to get property 'staffid' of non-object /home/worksuite/public_html/os/application/libraries/mails/Staff_event_notification.php 31
ERROR - 2020-08-06 01:15:01 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near ')
ORDER BY `firstname` DESC' at line 3 - Invalid query: SELECT *
FROM `tblstaff`
WHERE `staffid` IN()
ORDER BY `firstname` DESC
ERROR - 2020-08-06 01:15:01 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /home/worksuite/public_html/os/system/core/Exceptions.php:271) /home/worksuite/public_html/os/system/core/Common.php 570
ERROR - 2020-08-06 01:16:02 --> Severity: Notice --> Trying to get property 'staffid' of non-object /home/worksuite/public_html/os/application/libraries/mails/Staff_event_notification.php 27
ERROR - 2020-08-06 01:16:02 --> Severity: Notice --> Trying to get property 'email' of non-object /home/worksuite/public_html/os/application/libraries/mails/Staff_event_notification.php 30
ERROR - 2020-08-06 01:16:02 --> Severity: Notice --> Trying to get property 'staffid' of non-object /home/worksuite/public_html/os/application/libraries/mails/Staff_event_notification.php 31
ERROR - 2020-08-06 01:16:02 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near ')
ORDER BY `firstname` DESC' at line 3 - Invalid query: SELECT *
FROM `tblstaff`
WHERE `staffid` IN()
ORDER BY `firstname` DESC
ERROR - 2020-08-06 01:16:02 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /home/worksuite/public_html/os/system/core/Exceptions.php:271) /home/worksuite/public_html/os/system/core/Common.php 570
ERROR - 2020-08-06 01:17:01 --> Severity: Notice --> Trying to get property 'staffid' of non-object /home/worksuite/public_html/os/application/libraries/mails/Staff_event_notification.php 27
ERROR - 2020-08-06 01:17:01 --> Severity: Notice --> Trying to get property 'email' of non-object /home/worksuite/public_html/os/application/libraries/mails/Staff_event_notification.php 30
ERROR - 2020-08-06 01:17:01 --> Severity: Notice --> Trying to get property 'staffid' of non-object /home/worksuite/public_html/os/application/libraries/mails/Staff_event_notification.php 31
ERROR - 2020-08-06 01:17:01 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near ')
ORDER BY `firstname` DESC' at line 3 - Invalid query: SELECT *
FROM `tblstaff`
WHERE `staffid` IN()
ORDER BY `firstname` DESC
ERROR - 2020-08-06 01:17:01 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /home/worksuite/public_html/os/system/core/Exceptions.php:271) /home/worksuite/public_html/os/system/core/Common.php 570
ERROR - 2020-08-06 01:18:01 --> Severity: Notice --> Trying to get property 'staffid' of non-object /home/worksuite/public_html/os/application/libraries/mails/Staff_event_notification.php 27
ERROR - 2020-08-06 01:18:01 --> Severity: Notice --> Trying to get property 'email' of non-object /home/worksuite/public_html/os/application/libraries/mails/Staff_event_notification.php 30
ERROR - 2020-08-06 01:18:01 --> Severity: Notice --> Trying to get property 'staffid' of non-object /home/worksuite/public_html/os/application/libraries/mails/Staff_event_notification.php 31
ERROR - 2020-08-06 01:18:01 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near ')
ORDER BY `firstname` DESC' at line 3 - Invalid query: SELECT *
FROM `tblstaff`
WHERE `staffid` IN()
ORDER BY `firstname` DESC
ERROR - 2020-08-06 01:18:01 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /home/worksuite/public_html/os/system/core/Exceptions.php:271) /home/worksuite/public_html/os/system/core/Common.php 570
ERROR - 2020-08-06 01:19:02 --> Severity: Notice --> Trying to get property 'staffid' of non-object /home/worksuite/public_html/os/application/libraries/mails/Staff_event_notification.php 27
ERROR - 2020-08-06 01:19:02 --> Severity: Notice --> Trying to get property 'email' of non-object /home/worksuite/public_html/os/application/libraries/mails/Staff_event_notification.php 30
ERROR - 2020-08-06 01:19:02 --> Severity: Notice --> Trying to get property 'staffid' of non-object /home/worksuite/public_html/os/application/libraries/mails/Staff_event_notification.php 31
ERROR - 2020-08-06 01:19:02 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near ')
ORDER BY `firstname` DESC' at line 3 - Invalid query: SELECT *
FROM `tblstaff`
WHERE `staffid` IN()
ORDER BY `firstname` DESC
ERROR - 2020-08-06 01:19:02 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /home/worksuite/public_html/os/system/core/Exceptions.php:271) /home/worksuite/public_html/os/system/core/Common.php 570
ERROR - 2020-08-06 01:20:01 --> Severity: Notice --> Trying to get property 'staffid' of non-object /home/worksuite/public_html/os/application/libraries/mails/Staff_event_notification.php 27
ERROR - 2020-08-06 01:20:01 --> Severity: Notice --> Trying to get property 'email' of non-object /home/worksuite/public_html/os/application/libraries/mails/Staff_event_notification.php 30
ERROR - 2020-08-06 01:20:01 --> Severity: Notice --> Trying to get property 'staffid' of non-object /home/worksuite/public_html/os/application/libraries/mails/Staff_event_notification.php 31
ERROR - 2020-08-06 01:20:01 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near ')
ORDER BY `firstname` DESC' at line 3 - Invalid query: SELECT *
FROM `tblstaff`
WHERE `staffid` IN()
ORDER BY `firstname` DESC
ERROR - 2020-08-06 01:20:01 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /home/worksuite/public_html/os/system/core/Exceptions.php:271) /home/worksuite/public_html/os/system/core/Common.php 570
ERROR - 2020-08-06 01:21:02 --> Severity: Notice --> Trying to get property 'staffid' of non-object /home/worksuite/public_html/os/application/libraries/mails/Staff_event_notification.php 27
ERROR - 2020-08-06 01:21:02 --> Severity: Notice --> Trying to get property 'email' of non-object /home/worksuite/public_html/os/application/libraries/mails/Staff_event_notification.php 30
ERROR - 2020-08-06 01:21:02 --> Severity: Notice --> Trying to get property 'staffid' of non-object /home/worksuite/public_html/os/application/libraries/mails/Staff_event_notification.php 31
ERROR - 2020-08-06 01:21:02 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near ')
ORDER BY `firstname` DESC' at line 3 - Invalid query: SELECT *
FROM `tblstaff`
WHERE `staffid` IN()
ORDER BY `firstname` DESC
ERROR - 2020-08-06 01:21:02 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /home/worksuite/public_html/os/system/core/Exceptions.php:271) /home/worksuite/public_html/os/system/core/Common.php 570
ERROR - 2020-08-06 01:22:01 --> Severity: Notice --> Trying to get property 'staffid' of non-object /home/worksuite/public_html/os/application/libraries/mails/Staff_event_notification.php 27
ERROR - 2020-08-06 01:22:01 --> Severity: Notice --> Trying to get property 'email' of non-object /home/worksuite/public_html/os/application/libraries/mails/Staff_event_notification.php 30
ERROR - 2020-08-06 01:22:01 --> Severity: Notice --> Trying to get property 'staffid' of non-object /home/worksuite/public_html/os/application/libraries/mails/Staff_event_notification.php 31
ERROR - 2020-08-06 01:22:01 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near ')
ORDER BY `firstname` DESC' at line 3 - Invalid query: SELECT *
FROM `tblstaff`
WHERE `staffid` IN()
ORDER BY `firstname` DESC
ERROR - 2020-08-06 01:22:01 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /home/worksuite/public_html/os/system/core/Exceptions.php:271) /home/worksuite/public_html/os/system/core/Common.php 570
ERROR - 2020-08-06 01:23:01 --> Severity: Notice --> Trying to get property 'staffid' of non-object /home/worksuite/public_html/os/application/libraries/mails/Staff_event_notification.php 27
ERROR - 2020-08-06 01:23:01 --> Severity: Notice --> Trying to get property 'email' of non-object /home/worksuite/public_html/os/application/libraries/mails/Staff_event_notification.php 30
ERROR - 2020-08-06 01:23:01 --> Severity: Notice --> Trying to get property 'staffid' of non-object /home/worksuite/public_html/os/application/libraries/mails/Staff_event_notification.php 31
ERROR - 2020-08-06 01:23:01 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near ')
ORDER BY `firstname` DESC' at line 3 - Invalid query: SELECT *
FROM `tblstaff`
WHERE `staffid` IN()
ORDER BY `firstname` DESC
ERROR - 2020-08-06 01:23:01 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /home/worksuite/public_html/os/system/core/Exceptions.php:271) /home/worksuite/public_html/os/system/core/Common.php 570
ERROR - 2020-08-06 01:24:02 --> Severity: Notice --> Trying to get property 'staffid' of non-object /home/worksuite/public_html/os/application/libraries/mails/Staff_event_notification.php 27
ERROR - 2020-08-06 01:24:02 --> Severity: Notice --> Trying to get property 'email' of non-object /home/worksuite/public_html/os/application/libraries/mails/Staff_event_notification.php 30
ERROR - 2020-08-06 01:24:02 --> Severity: Notice --> Trying to get property 'staffid' of non-object /home/worksuite/public_html/os/application/libraries/mails/Staff_event_notification.php 31
ERROR - 2020-08-06 01:24:02 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near ')
ORDER BY `firstname` DESC' at line 3 - Invalid query: SELECT *
FROM `tblstaff`
WHERE `staffid` IN()
ORDER BY `firstname` DESC
ERROR - 2020-08-06 01:24:02 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /home/worksuite/public_html/os/system/core/Exceptions.php:271) /home/worksuite/public_html/os/system/core/Common.php 570
ERROR - 2020-08-06 01:25:01 --> Severity: Notice --> Trying to get property 'staffid' of non-object /home/worksuite/public_html/os/application/libraries/mails/Staff_event_notification.php 27
ERROR - 2020-08-06 01:25:01 --> Severity: Notice --> Trying to get property 'email' of non-object /home/worksuite/public_html/os/application/libraries/mails/Staff_event_notification.php 30
ERROR - 2020-08-06 01:25:01 --> Severity: Notice --> Trying to get property 'staffid' of non-object /home/worksuite/public_html/os/application/libraries/mails/Staff_event_notification.php 31
ERROR - 2020-08-06 01:25:01 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near ')
ORDER BY `firstname` DESC' at line 3 - Invalid query: SELECT *
FROM `tblstaff`
WHERE `staffid` IN()
ORDER BY `firstname` DESC
ERROR - 2020-08-06 01:25:01 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /home/worksuite/public_html/os/system/core/Exceptions.php:271) /home/worksuite/public_html/os/system/core/Common.php 570
ERROR - 2020-08-06 01:26:02 --> Severity: Notice --> Trying to get property 'staffid' of non-object /home/worksuite/public_html/os/application/libraries/mails/Staff_event_notification.php 27
ERROR - 2020-08-06 01:26:02 --> Severity: Notice --> Trying to get property 'email' of non-object /home/worksuite/public_html/os/application/libraries/mails/Staff_event_notification.php 30
ERROR - 2020-08-06 01:26:02 --> Severity: Notice --> Trying to get property 'staffid' of non-object /home/worksuite/public_html/os/application/libraries/mails/Staff_event_notification.php 31
ERROR - 2020-08-06 01:26:02 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near ')
ORDER BY `firstname` DESC' at line 3 - Invalid query: SELECT *
FROM `tblstaff`
WHERE `staffid` IN()
ORDER BY `firstname` DESC
ERROR - 2020-08-06 01:26:02 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /home/worksuite/public_html/os/system/core/Exceptions.php:271) /home/worksuite/public_html/os/system/core/Common.php 570
ERROR - 2020-08-06 01:27:01 --> Severity: Notice --> Trying to get property 'staffid' of non-object /home/worksuite/public_html/os/application/libraries/mails/Staff_event_notification.php 27
ERROR - 2020-08-06 01:27:01 --> Severity: Notice --> Trying to get property 'email' of non-object /home/worksuite/public_html/os/application/libraries/mails/Staff_event_notification.php 30
ERROR - 2020-08-06 01:27:01 --> Severity: Notice --> Trying to get property 'staffid' of non-object /home/worksuite/public_html/os/application/libraries/mails/Staff_event_notification.php 31
ERROR - 2020-08-06 01:27:01 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near ')
ORDER BY `firstname` DESC' at line 3 - Invalid query: SELECT *
FROM `tblstaff`
WHERE `staffid` IN()
ORDER BY `firstname` DESC
ERROR - 2020-08-06 01:27:01 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /home/worksuite/public_html/os/system/core/Exceptions.php:271) /home/worksuite/public_html/os/system/core/Common.php 570
ERROR - 2020-08-06 01:28:02 --> Severity: Notice --> Trying to get property 'staffid' of non-object /home/worksuite/public_html/os/application/libraries/mails/Staff_event_notification.php 27
ERROR - 2020-08-06 01:28:02 --> Severity: Notice --> Trying to get property 'email' of non-object /home/worksuite/public_html/os/application/libraries/mails/Staff_event_notification.php 30
ERROR - 2020-08-06 01:28:02 --> Severity: Notice --> Trying to get property 'staffid' of non-object /home/worksuite/public_html/os/application/libraries/mails/Staff_event_notification.php 31
ERROR - 2020-08-06 01:28:02 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near ')
ORDER BY `firstname` DESC' at line 3 - Invalid query: SELECT *
FROM `tblstaff`
WHERE `staffid` IN()
ORDER BY `firstname` DESC
ERROR - 2020-08-06 01:28:02 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /home/worksuite/public_html/os/system/core/Exceptions.php:271) /home/worksuite/public_html/os/system/core/Common.php 570
ERROR - 2020-08-06 01:29:01 --> Severity: Notice --> Trying to get property 'staffid' of non-object /home/worksuite/public_html/os/application/libraries/mails/Staff_event_notification.php 27
ERROR - 2020-08-06 01:29:01 --> Severity: Notice --> Trying to get property 'email' of non-object /home/worksuite/public_html/os/application/libraries/mails/Staff_event_notification.php 30
ERROR - 2020-08-06 01:29:01 --> Severity: Notice --> Trying to get property 'staffid' of non-object /home/worksuite/public_html/os/application/libraries/mails/Staff_event_notification.php 31
ERROR - 2020-08-06 01:29:01 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near ')
ORDER BY `firstname` DESC' at line 3 - Invalid query: SELECT *
FROM `tblstaff`
WHERE `staffid` IN()
ORDER BY `firstname` DESC
ERROR - 2020-08-06 01:29:01 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /home/worksuite/public_html/os/system/core/Exceptions.php:271) /home/worksuite/public_html/os/system/core/Common.php 570
ERROR - 2020-08-06 01:30:01 --> Severity: Notice --> Trying to get property 'staffid' of non-object /home/worksuite/public_html/os/application/libraries/mails/Staff_event_notification.php 27
ERROR - 2020-08-06 01:30:01 --> Severity: Notice --> Trying to get property 'email' of non-object /home/worksuite/public_html/os/application/libraries/mails/Staff_event_notification.php 30
ERROR - 2020-08-06 01:30:01 --> Severity: Notice --> Trying to get property 'staffid' of non-object /home/worksuite/public_html/os/application/libraries/mails/Staff_event_notification.php 31
ERROR - 2020-08-06 01:30:01 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near ')
ORDER BY `firstname` DESC' at line 3 - Invalid query: SELECT *
FROM `tblstaff`
WHERE `staffid` IN()
ORDER BY `firstname` DESC
ERROR - 2020-08-06 01:30:01 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /home/worksuite/public_html/os/system/core/Exceptions.php:271) /home/worksuite/public_html/os/system/core/Common.php 570
ERROR - 2020-08-06 01:31:01 --> Severity: Notice --> Trying to get property 'staffid' of non-object /home/worksuite/public_html/os/application/libraries/mails/Staff_event_notification.php 27
ERROR - 2020-08-06 01:31:01 --> Severity: Notice --> Trying to get property 'email' of non-object /home/worksuite/public_html/os/application/libraries/mails/Staff_event_notification.php 30
ERROR - 2020-08-06 01:31:01 --> Severity: Notice --> Trying to get property 'staffid' of non-object /home/worksuite/public_html/os/application/libraries/mails/Staff_event_notification.php 31
ERROR - 2020-08-06 01:31:01 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near ')
ORDER BY `firstname` DESC' at line 3 - Invalid query: SELECT *
FROM `tblstaff`
WHERE `staffid` IN()
ORDER BY `firstname` DESC
ERROR - 2020-08-06 01:31:01 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /home/worksuite/public_html/os/system/core/Exceptions.php:271) /home/worksuite/public_html/os/system/core/Common.php 570
ERROR - 2020-08-06 01:32:01 --> Severity: Notice --> Trying to get property 'staffid' of non-object /home/worksuite/public_html/os/application/libraries/mails/Staff_event_notification.php 27
ERROR - 2020-08-06 01:32:01 --> Severity: Notice --> Trying to get property 'email' of non-object /home/worksuite/public_html/os/application/libraries/mails/Staff_event_notification.php 30
ERROR - 2020-08-06 01:32:01 --> Severity: Notice --> Trying to get property 'staffid' of non-object /home/worksuite/public_html/os/application/libraries/mails/Staff_event_notification.php 31
ERROR - 2020-08-06 01:32:01 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near ')
ORDER BY `firstname` DESC' at line 3 - Invalid query: SELECT *
FROM `tblstaff`
WHERE `staffid` IN()
ORDER BY `firstname` DESC
ERROR - 2020-08-06 01:32:01 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /home/worksuite/public_html/os/system/core/Exceptions.php:271) /home/worksuite/public_html/os/system/core/Common.php 570
ERROR - 2020-08-06 01:33:02 --> Severity: Notice --> Trying to get property 'staffid' of non-object /home/worksuite/public_html/os/application/libraries/mails/Staff_event_notification.php 27
ERROR - 2020-08-06 01:33:02 --> Severity: Notice --> Trying to get property 'email' of non-object /home/worksuite/public_html/os/application/libraries/mails/Staff_event_notification.php 30
ERROR - 2020-08-06 01:33:02 --> Severity: Notice --> Trying to get property 'staffid' of non-object /home/worksuite/public_html/os/application/libraries/mails/Staff_event_notification.php 31
ERROR - 2020-08-06 01:33:02 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near ')
ORDER BY `firstname` DESC' at line 3 - Invalid query: SELECT *
FROM `tblstaff`
WHERE `staffid` IN()
ORDER BY `firstname` DESC
ERROR - 2020-08-06 01:33:02 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /home/worksuite/public_html/os/system/core/Exceptions.php:271) /home/worksuite/public_html/os/system/core/Common.php 570
ERROR - 2020-08-06 01:34:01 --> Severity: Notice --> Trying to get property 'staffid' of non-object /home/worksuite/public_html/os/application/libraries/mails/Staff_event_notification.php 27
ERROR - 2020-08-06 01:34:01 --> Severity: Notice --> Trying to get property 'email' of non-object /home/worksuite/public_html/os/application/libraries/mails/Staff_event_notification.php 30
ERROR - 2020-08-06 01:34:01 --> Severity: Notice --> Trying to get property 'staffid' of non-object /home/worksuite/public_html/os/application/libraries/mails/Staff_event_notification.php 31
ERROR - 2020-08-06 01:34:01 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near ')
ORDER BY `firstname` DESC' at line 3 - Invalid query: SELECT *
FROM `tblstaff`
WHERE `staffid` IN()
ORDER BY `firstname` DESC
ERROR - 2020-08-06 01:34:01 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /home/worksuite/public_html/os/system/core/Exceptions.php:271) /home/worksuite/public_html/os/system/core/Common.php 570
ERROR - 2020-08-06 01:35:02 --> Severity: Notice --> Trying to get property 'staffid' of non-object /home/worksuite/public_html/os/application/libraries/mails/Staff_event_notification.php 27
ERROR - 2020-08-06 01:35:02 --> Severity: Notice --> Trying to get property 'email' of non-object /home/worksuite/public_html/os/application/libraries/mails/Staff_event_notification.php 30
ERROR - 2020-08-06 01:35:02 --> Severity: Notice --> Trying to get property 'staffid' of non-object /home/worksuite/public_html/os/application/libraries/mails/Staff_event_notification.php 31
ERROR - 2020-08-06 01:35:02 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near ')
ORDER BY `firstname` DESC' at line 3 - Invalid query: SELECT *
FROM `tblstaff`
WHERE `staffid` IN()
ORDER BY `firstname` DESC
ERROR - 2020-08-06 01:35:02 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /home/worksuite/public_html/os/system/core/Exceptions.php:271) /home/worksuite/public_html/os/system/core/Common.php 570
ERROR - 2020-08-06 01:36:01 --> Severity: Notice --> Trying to get property 'staffid' of non-object /home/worksuite/public_html/os/application/libraries/mails/Staff_event_notification.php 27
ERROR - 2020-08-06 01:36:01 --> Severity: Notice --> Trying to get property 'email' of non-object /home/worksuite/public_html/os/application/libraries/mails/Staff_event_notification.php 30
ERROR - 2020-08-06 01:36:01 --> Severity: Notice --> Trying to get property 'staffid' of non-object /home/worksuite/public_html/os/application/libraries/mails/Staff_event_notification.php 31
ERROR - 2020-08-06 01:36:01 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near ')
ORDER BY `firstname` DESC' at line 3 - Invalid query: SELECT *
FROM `tblstaff`
WHERE `staffid` IN()
ORDER BY `firstname` DESC
ERROR - 2020-08-06 01:36:01 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /home/worksuite/public_html/os/system/core/Exceptions.php:271) /home/worksuite/public_html/os/system/core/Common.php 570
ERROR - 2020-08-06 01:37:02 --> Severity: Notice --> Trying to get property 'staffid' of non-object /home/worksuite/public_html/os/application/libraries/mails/Staff_event_notification.php 27
ERROR - 2020-08-06 01:37:02 --> Severity: Notice --> Trying to get property 'email' of non-object /home/worksuite/public_html/os/application/libraries/mails/Staff_event_notification.php 30
ERROR - 2020-08-06 01:37:02 --> Severity: Notice --> Trying to get property 'staffid' of non-object /home/worksuite/public_html/os/application/libraries/mails/Staff_event_notification.php 31
ERROR - 2020-08-06 01:37:02 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near ')
ORDER BY `firstname` DESC' at line 3 - Invalid query: SELECT *
FROM `tblstaff`
WHERE `staffid` IN()
ORDER BY `firstname` DESC
ERROR - 2020-08-06 01:37:02 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /home/worksuite/public_html/os/system/core/Exceptions.php:271) /home/worksuite/public_html/os/system/core/Common.php 570
ERROR - 2020-08-06 01:38:01 --> Severity: Notice --> Trying to get property 'staffid' of non-object /home/worksuite/public_html/os/application/libraries/mails/Staff_event_notification.php 27
ERROR - 2020-08-06 01:38:01 --> Severity: Notice --> Trying to get property 'email' of non-object /home/worksuite/public_html/os/application/libraries/mails/Staff_event_notification.php 30
ERROR - 2020-08-06 01:38:01 --> Severity: Notice --> Trying to get property 'staffid' of non-object /home/worksuite/public_html/os/application/libraries/mails/Staff_event_notification.php 31
ERROR - 2020-08-06 01:38:01 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near ')
ORDER BY `firstname` DESC' at line 3 - Invalid query: SELECT *
FROM `tblstaff`
WHERE `staffid` IN()
ORDER BY `firstname` DESC
ERROR - 2020-08-06 01:38:01 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /home/worksuite/public_html/os/system/core/Exceptions.php:271) /home/worksuite/public_html/os/system/core/Common.php 570
ERROR - 2020-08-06 01:39:02 --> Severity: Notice --> Trying to get property 'staffid' of non-object /home/worksuite/public_html/os/application/libraries/mails/Staff_event_notification.php 27
ERROR - 2020-08-06 01:39:02 --> Severity: Notice --> Trying to get property 'email' of non-object /home/worksuite/public_html/os/application/libraries/mails/Staff_event_notification.php 30
ERROR - 2020-08-06 01:39:02 --> Severity: Notice --> Trying to get property 'staffid' of non-object /home/worksuite/public_html/os/application/libraries/mails/Staff_event_notification.php 31
ERROR - 2020-08-06 01:39:02 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near ')
ORDER BY `firstname` DESC' at line 3 - Invalid query: SELECT *
FROM `tblstaff`
WHERE `staffid` IN()
ORDER BY `firstname` DESC
ERROR - 2020-08-06 01:39:02 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /home/worksuite/public_html/os/system/core/Exceptions.php:271) /home/worksuite/public_html/os/system/core/Common.php 570
ERROR - 2020-08-06 01:40:01 --> Severity: Notice --> Trying to get property 'staffid' of non-object /home/worksuite/public_html/os/application/libraries/mails/Staff_event_notification.php 27
ERROR - 2020-08-06 01:40:01 --> Severity: Notice --> Trying to get property 'email' of non-object /home/worksuite/public_html/os/application/libraries/mails/Staff_event_notification.php 30
ERROR - 2020-08-06 01:40:01 --> Severity: Notice --> Trying to get property 'staffid' of non-object /home/worksuite/public_html/os/application/libraries/mails/Staff_event_notification.php 31
ERROR - 2020-08-06 01:40:01 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near ')
ORDER BY `firstname` DESC' at line 3 - Invalid query: SELECT *
FROM `tblstaff`
WHERE `staffid` IN()
ORDER BY `firstname` DESC
ERROR - 2020-08-06 01:40:01 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /home/worksuite/public_html/os/system/core/Exceptions.php:271) /home/worksuite/public_html/os/system/core/Common.php 570
ERROR - 2020-08-06 01:41:01 --> Severity: Notice --> Trying to get property 'staffid' of non-object /home/worksuite/public_html/os/application/libraries/mails/Staff_event_notification.php 27
ERROR - 2020-08-06 01:41:01 --> Severity: Notice --> Trying to get property 'email' of non-object /home/worksuite/public_html/os/application/libraries/mails/Staff_event_notification.php 30
ERROR - 2020-08-06 01:41:01 --> Severity: Notice --> Trying to get property 'staffid' of non-object /home/worksuite/public_html/os/application/libraries/mails/Staff_event_notification.php 31
ERROR - 2020-08-06 01:41:01 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near ')
ORDER BY `firstname` DESC' at line 3 - Invalid query: SELECT *
FROM `tblstaff`
WHERE `staffid` IN()
ORDER BY `firstname` DESC
ERROR - 2020-08-06 01:41:01 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /home/worksuite/public_html/os/system/core/Exceptions.php:271) /home/worksuite/public_html/os/system/core/Common.php 570
ERROR - 2020-08-06 01:42:01 --> Severity: Notice --> Trying to get property 'staffid' of non-object /home/worksuite/public_html/os/application/libraries/mails/Staff_event_notification.php 27
ERROR - 2020-08-06 01:42:01 --> Severity: Notice --> Trying to get property 'email' of non-object /home/worksuite/public_html/os/application/libraries/mails/Staff_event_notification.php 30
ERROR - 2020-08-06 01:42:01 --> Severity: Notice --> Trying to get property 'staffid' of non-object /home/worksuite/public_html/os/application/libraries/mails/Staff_event_notification.php 31
ERROR - 2020-08-06 01:42:01 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near ')
ORDER BY `firstname` DESC' at line 3 - Invalid query: SELECT *
FROM `tblstaff`
WHERE `staffid` IN()
ORDER BY `firstname` DESC
ERROR - 2020-08-06 01:42:01 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /home/worksuite/public_html/os/system/core/Exceptions.php:271) /home/worksuite/public_html/os/system/core/Common.php 570
ERROR - 2020-08-06 01:43:02 --> Severity: Notice --> Trying to get property 'staffid' of non-object /home/worksuite/public_html/os/application/libraries/mails/Staff_event_notification.php 27
ERROR - 2020-08-06 01:43:02 --> Severity: Notice --> Trying to get property 'email' of non-object /home/worksuite/public_html/os/application/libraries/mails/Staff_event_notification.php 30
ERROR - 2020-08-06 01:43:02 --> Severity: Notice --> Trying to get property 'staffid' of non-object /home/worksuite/public_html/os/application/libraries/mails/Staff_event_notification.php 31
ERROR - 2020-08-06 01:43:02 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near ')
ORDER BY `firstname` DESC' at line 3 - Invalid query: SELECT *
FROM `tblstaff`
WHERE `staffid` IN()
ORDER BY `firstname` DESC
ERROR - 2020-08-06 01:43:02 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /home/worksuite/public_html/os/system/core/Exceptions.php:271) /home/worksuite/public_html/os/system/core/Common.php 570
ERROR - 2020-08-06 01:44:01 --> Severity: Notice --> Trying to get property 'staffid' of non-object /home/worksuite/public_html/os/application/libraries/mails/Staff_event_notification.php 27
ERROR - 2020-08-06 01:44:01 --> Severity: Notice --> Trying to get property 'email' of non-object /home/worksuite/public_html/os/application/libraries/mails/Staff_event_notification.php 30
ERROR - 2020-08-06 01:44:01 --> Severity: Notice --> Trying to get property 'staffid' of non-object /home/worksuite/public_html/os/application/libraries/mails/Staff_event_notification.php 31
ERROR - 2020-08-06 01:44:02 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near ')
ORDER BY `firstname` DESC' at line 3 - Invalid query: SELECT *
FROM `tblstaff`
WHERE `staffid` IN()
ORDER BY `firstname` DESC
ERROR - 2020-08-06 01:44:02 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /home/worksuite/public_html/os/system/core/Exceptions.php:271) /home/worksuite/public_html/os/system/core/Common.php 570
ERROR - 2020-08-06 01:45:01 --> Severity: Notice --> Trying to get property 'staffid' of non-object /home/worksuite/public_html/os/application/libraries/mails/Staff_event_notification.php 27
ERROR - 2020-08-06 01:45:01 --> Severity: Notice --> Trying to get property 'email' of non-object /home/worksuite/public_html/os/application/libraries/mails/Staff_event_notification.php 30
ERROR - 2020-08-06 01:45:01 --> Severity: Notice --> Trying to get property 'staffid' of non-object /home/worksuite/public_html/os/application/libraries/mails/Staff_event_notification.php 31
ERROR - 2020-08-06 01:45:01 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near ')
ORDER BY `firstname` DESC' at line 3 - Invalid query: SELECT *
FROM `tblstaff`
WHERE `staffid` IN()
ORDER BY `firstname` DESC
ERROR - 2020-08-06 01:45:01 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /home/worksuite/public_html/os/system/core/Exceptions.php:271) /home/worksuite/public_html/os/system/core/Common.php 570
ERROR - 2020-08-06 01:46:01 --> Severity: Notice --> Trying to get property 'staffid' of non-object /home/worksuite/public_html/os/application/libraries/mails/Staff_event_notification.php 27
ERROR - 2020-08-06 01:46:01 --> Severity: Notice --> Trying to get property 'email' of non-object /home/worksuite/public_html/os/application/libraries/mails/Staff_event_notification.php 30
ERROR - 2020-08-06 01:46:01 --> Severity: Notice --> Trying to get property 'staffid' of non-object /home/worksuite/public_html/os/application/libraries/mails/Staff_event_notification.php 31
ERROR - 2020-08-06 01:46:01 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near ')
ORDER BY `firstname` DESC' at line 3 - Invalid query: SELECT *
FROM `tblstaff`
WHERE `staffid` IN()
ORDER BY `firstname` DESC
ERROR - 2020-08-06 01:46:01 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /home/worksuite/public_html/os/system/core/Exceptions.php:271) /home/worksuite/public_html/os/system/core/Common.php 570
ERROR - 2020-08-06 01:47:02 --> Severity: Notice --> Trying to get property 'staffid' of non-object /home/worksuite/public_html/os/application/libraries/mails/Staff_event_notification.php 27
ERROR - 2020-08-06 01:47:02 --> Severity: Notice --> Trying to get property 'email' of non-object /home/worksuite/public_html/os/application/libraries/mails/Staff_event_notification.php 30
ERROR - 2020-08-06 01:47:02 --> Severity: Notice --> Trying to get property 'staffid' of non-object /home/worksuite/public_html/os/application/libraries/mails/Staff_event_notification.php 31
ERROR - 2020-08-06 01:47:02 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near ')
ORDER BY `firstname` DESC' at line 3 - Invalid query: SELECT *
FROM `tblstaff`
WHERE `staffid` IN()
ORDER BY `firstname` DESC
ERROR - 2020-08-06 01:47:02 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /home/worksuite/public_html/os/system/core/Exceptions.php:271) /home/worksuite/public_html/os/system/core/Common.php 570
ERROR - 2020-08-06 01:48:01 --> Severity: Notice --> Trying to get property 'staffid' of non-object /home/worksuite/public_html/os/application/libraries/mails/Staff_event_notification.php 27
ERROR - 2020-08-06 01:48:01 --> Severity: Notice --> Trying to get property 'email' of non-object /home/worksuite/public_html/os/application/libraries/mails/Staff_event_notification.php 30
ERROR - 2020-08-06 01:48:01 --> Severity: Notice --> Trying to get property 'staffid' of non-object /home/worksuite/public_html/os/application/libraries/mails/Staff_event_notification.php 31
ERROR - 2020-08-06 01:48:01 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near ')
ORDER BY `firstname` DESC' at line 3 - Invalid query: SELECT *
FROM `tblstaff`
WHERE `staffid` IN()
ORDER BY `firstname` DESC
ERROR - 2020-08-06 01:48:01 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /home/worksuite/public_html/os/system/core/Exceptions.php:271) /home/worksuite/public_html/os/system/core/Common.php 570
ERROR - 2020-08-06 01:49:01 --> Severity: Notice --> Trying to get property 'staffid' of non-object /home/worksuite/public_html/os/application/libraries/mails/Staff_event_notification.php 27
ERROR - 2020-08-06 01:49:01 --> Severity: Notice --> Trying to get property 'email' of non-object /home/worksuite/public_html/os/application/libraries/mails/Staff_event_notification.php 30
ERROR - 2020-08-06 01:49:01 --> Severity: Notice --> Trying to get property 'staffid' of non-object /home/worksuite/public_html/os/application/libraries/mails/Staff_event_notification.php 31
ERROR - 2020-08-06 01:49:01 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near ')
ORDER BY `firstname` DESC' at line 3 - Invalid query: SELECT *
FROM `tblstaff`
WHERE `staffid` IN()
ORDER BY `firstname` DESC
ERROR - 2020-08-06 01:49:01 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /home/worksuite/public_html/os/system/core/Exceptions.php:271) /home/worksuite/public_html/os/system/core/Common.php 570
ERROR - 2020-08-06 01:50:02 --> Severity: Notice --> Trying to get property 'staffid' of non-object /home/worksuite/public_html/os/application/libraries/mails/Staff_event_notification.php 27
ERROR - 2020-08-06 01:50:02 --> Severity: Notice --> Trying to get property 'email' of non-object /home/worksuite/public_html/os/application/libraries/mails/Staff_event_notification.php 30
ERROR - 2020-08-06 01:50:02 --> Severity: Notice --> Trying to get property 'staffid' of non-object /home/worksuite/public_html/os/application/libraries/mails/Staff_event_notification.php 31
ERROR - 2020-08-06 01:50:02 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near ')
ORDER BY `firstname` DESC' at line 3 - Invalid query: SELECT *
FROM `tblstaff`
WHERE `staffid` IN()
ORDER BY `firstname` DESC
ERROR - 2020-08-06 01:50:02 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /home/worksuite/public_html/os/system/core/Exceptions.php:271) /home/worksuite/public_html/os/system/core/Common.php 570
ERROR - 2020-08-06 01:51:01 --> Severity: Notice --> Trying to get property 'staffid' of non-object /home/worksuite/public_html/os/application/libraries/mails/Staff_event_notification.php 27
ERROR - 2020-08-06 01:51:01 --> Severity: Notice --> Trying to get property 'email' of non-object /home/worksuite/public_html/os/application/libraries/mails/Staff_event_notification.php 30
ERROR - 2020-08-06 01:51:01 --> Severity: Notice --> Trying to get property 'staffid' of non-object /home/worksuite/public_html/os/application/libraries/mails/Staff_event_notification.php 31
ERROR - 2020-08-06 01:51:01 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near ')
ORDER BY `firstname` DESC' at line 3 - Invalid query: SELECT *
FROM `tblstaff`
WHERE `staffid` IN()
ORDER BY `firstname` DESC
ERROR - 2020-08-06 01:51:01 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /home/worksuite/public_html/os/system/core/Exceptions.php:271) /home/worksuite/public_html/os/system/core/Common.php 570
ERROR - 2020-08-06 01:52:01 --> Severity: Notice --> Trying to get property 'staffid' of non-object /home/worksuite/public_html/os/application/libraries/mails/Staff_event_notification.php 27
ERROR - 2020-08-06 01:52:01 --> Severity: Notice --> Trying to get property 'email' of non-object /home/worksuite/public_html/os/application/libraries/mails/Staff_event_notification.php 30
ERROR - 2020-08-06 01:52:01 --> Severity: Notice --> Trying to get property 'staffid' of non-object /home/worksuite/public_html/os/application/libraries/mails/Staff_event_notification.php 31
ERROR - 2020-08-06 01:52:01 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near ')
ORDER BY `firstname` DESC' at line 3 - Invalid query: SELECT *
FROM `tblstaff`
WHERE `staffid` IN()
ORDER BY `firstname` DESC
ERROR - 2020-08-06 01:52:01 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /home/worksuite/public_html/os/system/core/Exceptions.php:271) /home/worksuite/public_html/os/system/core/Common.php 570
ERROR - 2020-08-06 01:53:01 --> Severity: Notice --> Trying to get property 'staffid' of non-object /home/worksuite/public_html/os/application/libraries/mails/Staff_event_notification.php 27
ERROR - 2020-08-06 01:53:01 --> Severity: Notice --> Trying to get property 'email' of non-object /home/worksuite/public_html/os/application/libraries/mails/Staff_event_notification.php 30
ERROR - 2020-08-06 01:53:01 --> Severity: Notice --> Trying to get property 'staffid' of non-object /home/worksuite/public_html/os/application/libraries/mails/Staff_event_notification.php 31
ERROR - 2020-08-06 01:53:01 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near ')
ORDER BY `firstname` DESC' at line 3 - Invalid query: SELECT *
FROM `tblstaff`
WHERE `staffid` IN()
ORDER BY `firstname` DESC
ERROR - 2020-08-06 01:53:01 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /home/worksuite/public_html/os/system/core/Exceptions.php:271) /home/worksuite/public_html/os/system/core/Common.php 570
ERROR - 2020-08-06 01:54:02 --> Severity: Notice --> Trying to get property 'staffid' of non-object /home/worksuite/public_html/os/application/libraries/mails/Staff_event_notification.php 27
ERROR - 2020-08-06 01:54:02 --> Severity: Notice --> Trying to get property 'email' of non-object /home/worksuite/public_html/os/application/libraries/mails/Staff_event_notification.php 30
ERROR - 2020-08-06 01:54:02 --> Severity: Notice --> Trying to get property 'staffid' of non-object /home/worksuite/public_html/os/application/libraries/mails/Staff_event_notification.php 31
ERROR - 2020-08-06 01:54:02 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near ')
ORDER BY `firstname` DESC' at line 3 - Invalid query: SELECT *
FROM `tblstaff`
WHERE `staffid` IN()
ORDER BY `firstname` DESC
ERROR - 2020-08-06 01:54:02 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /home/worksuite/public_html/os/system/core/Exceptions.php:271) /home/worksuite/public_html/os/system/core/Common.php 570
ERROR - 2020-08-06 01:55:01 --> Severity: Notice --> Trying to get property 'staffid' of non-object /home/worksuite/public_html/os/application/libraries/mails/Staff_event_notification.php 27
ERROR - 2020-08-06 01:55:01 --> Severity: Notice --> Trying to get property 'email' of non-object /home/worksuite/public_html/os/application/libraries/mails/Staff_event_notification.php 30
ERROR - 2020-08-06 01:55:01 --> Severity: Notice --> Trying to get property 'staffid' of non-object /home/worksuite/public_html/os/application/libraries/mails/Staff_event_notification.php 31
ERROR - 2020-08-06 01:55:01 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near ')
ORDER BY `firstname` DESC' at line 3 - Invalid query: SELECT *
FROM `tblstaff`
WHERE `staffid` IN()
ORDER BY `firstname` DESC
ERROR - 2020-08-06 01:55:01 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /home/worksuite/public_html/os/system/core/Exceptions.php:271) /home/worksuite/public_html/os/system/core/Common.php 570
ERROR - 2020-08-06 01:56:02 --> Severity: Notice --> Trying to get property 'staffid' of non-object /home/worksuite/public_html/os/application/libraries/mails/Staff_event_notification.php 27
ERROR - 2020-08-06 01:56:02 --> Severity: Notice --> Trying to get property 'email' of non-object /home/worksuite/public_html/os/application/libraries/mails/Staff_event_notification.php 30
ERROR - 2020-08-06 01:56:02 --> Severity: Notice --> Trying to get property 'staffid' of non-object /home/worksuite/public_html/os/application/libraries/mails/Staff_event_notification.php 31
ERROR - 2020-08-06 01:56:02 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near ')
ORDER BY `firstname` DESC' at line 3 - Invalid query: SELECT *
FROM `tblstaff`
WHERE `staffid` IN()
ORDER BY `firstname` DESC
ERROR - 2020-08-06 01:56:02 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /home/worksuite/public_html/os/system/core/Exceptions.php:271) /home/worksuite/public_html/os/system/core/Common.php 570
ERROR - 2020-08-06 01:57:01 --> Severity: Notice --> Trying to get property 'staffid' of non-object /home/worksuite/public_html/os/application/libraries/mails/Staff_event_notification.php 27
ERROR - 2020-08-06 01:57:01 --> Severity: Notice --> Trying to get property 'email' of non-object /home/worksuite/public_html/os/application/libraries/mails/Staff_event_notification.php 30
ERROR - 2020-08-06 01:57:01 --> Severity: Notice --> Trying to get property 'staffid' of non-object /home/worksuite/public_html/os/application/libraries/mails/Staff_event_notification.php 31
ERROR - 2020-08-06 01:57:01 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near ')
ORDER BY `firstname` DESC' at line 3 - Invalid query: SELECT *
FROM `tblstaff`
WHERE `staffid` IN()
ORDER BY `firstname` DESC
ERROR - 2020-08-06 01:57:01 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /home/worksuite/public_html/os/system/core/Exceptions.php:271) /home/worksuite/public_html/os/system/core/Common.php 570
ERROR - 2020-08-06 01:58:01 --> Severity: Notice --> Trying to get property 'staffid' of non-object /home/worksuite/public_html/os/application/libraries/mails/Staff_event_notification.php 27
ERROR - 2020-08-06 01:58:01 --> Severity: Notice --> Trying to get property 'email' of non-object /home/worksuite/public_html/os/application/libraries/mails/Staff_event_notification.php 30
ERROR - 2020-08-06 01:58:01 --> Severity: Notice --> Trying to get property 'staffid' of non-object /home/worksuite/public_html/os/application/libraries/mails/Staff_event_notification.php 31
ERROR - 2020-08-06 01:58:01 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near ')
ORDER BY `firstname` DESC' at line 3 - Invalid query: SELECT *
FROM `tblstaff`
WHERE `staffid` IN()
ORDER BY `firstname` DESC
ERROR - 2020-08-06 01:58:01 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /home/worksuite/public_html/os/system/core/Exceptions.php:271) /home/worksuite/public_html/os/system/core/Common.php 570
ERROR - 2020-08-06 01:59:02 --> Severity: Notice --> Trying to get property 'staffid' of non-object /home/worksuite/public_html/os/application/libraries/mails/Staff_event_notification.php 27
ERROR - 2020-08-06 01:59:02 --> Severity: Notice --> Trying to get property 'email' of non-object /home/worksuite/public_html/os/application/libraries/mails/Staff_event_notification.php 30
ERROR - 2020-08-06 01:59:02 --> Severity: Notice --> Trying to get property 'staffid' of non-object /home/worksuite/public_html/os/application/libraries/mails/Staff_event_notification.php 31
ERROR - 2020-08-06 01:59:02 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near ')
ORDER BY `firstname` DESC' at line 3 - Invalid query: SELECT *
FROM `tblstaff`
WHERE `staffid` IN()
ORDER BY `firstname` DESC
ERROR - 2020-08-06 01:59:02 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /home/worksuite/public_html/os/system/core/Exceptions.php:271) /home/worksuite/public_html/os/system/core/Common.php 570
ERROR - 2020-08-06 02:00:01 --> Severity: Notice --> Trying to get property 'staffid' of non-object /home/worksuite/public_html/os/application/libraries/mails/Staff_event_notification.php 27
ERROR - 2020-08-06 02:00:01 --> Severity: Notice --> Trying to get property 'email' of non-object /home/worksuite/public_html/os/application/libraries/mails/Staff_event_notification.php 30
ERROR - 2020-08-06 02:00:01 --> Severity: Notice --> Trying to get property 'staffid' of non-object /home/worksuite/public_html/os/application/libraries/mails/Staff_event_notification.php 31
ERROR - 2020-08-06 02:00:01 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near ')
ORDER BY `firstname` DESC' at line 3 - Invalid query: SELECT *
FROM `tblstaff`
WHERE `staffid` IN()
ORDER BY `firstname` DESC
ERROR - 2020-08-06 02:00:01 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /home/worksuite/public_html/os/system/core/Exceptions.php:271) /home/worksuite/public_html/os/system/core/Common.php 570
ERROR - 2020-08-06 02:01:01 --> Severity: Notice --> Trying to get property 'staffid' of non-object /home/worksuite/public_html/os/application/libraries/mails/Staff_event_notification.php 27
ERROR - 2020-08-06 02:01:02 --> Severity: Notice --> Trying to get property 'email' of non-object /home/worksuite/public_html/os/application/libraries/mails/Staff_event_notification.php 30
ERROR - 2020-08-06 02:01:02 --> Severity: Notice --> Trying to get property 'staffid' of non-object /home/worksuite/public_html/os/application/libraries/mails/Staff_event_notification.php 31
ERROR - 2020-08-06 02:01:02 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near ')
ORDER BY `firstname` DESC' at line 3 - Invalid query: SELECT *
FROM `tblstaff`
WHERE `staffid` IN()
ORDER BY `firstname` DESC
ERROR - 2020-08-06 02:01:02 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /home/worksuite/public_html/os/system/core/Exceptions.php:271) /home/worksuite/public_html/os/system/core/Common.php 570
ERROR - 2020-08-06 02:02:01 --> Severity: Notice --> Trying to get property 'staffid' of non-object /home/worksuite/public_html/os/application/libraries/mails/Staff_event_notification.php 27
ERROR - 2020-08-06 02:02:01 --> Severity: Notice --> Trying to get property 'email' of non-object /home/worksuite/public_html/os/application/libraries/mails/Staff_event_notification.php 30
ERROR - 2020-08-06 02:02:01 --> Severity: Notice --> Trying to get property 'staffid' of non-object /home/worksuite/public_html/os/application/libraries/mails/Staff_event_notification.php 31
ERROR - 2020-08-06 02:02:01 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near ')
ORDER BY `firstname` DESC' at line 3 - Invalid query: SELECT *
FROM `tblstaff`
WHERE `staffid` IN()
ORDER BY `firstname` DESC
ERROR - 2020-08-06 02:02:01 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /home/worksuite/public_html/os/system/core/Exceptions.php:271) /home/worksuite/public_html/os/system/core/Common.php 570
ERROR - 2020-08-06 02:03:02 --> Severity: Notice --> Trying to get property 'staffid' of non-object /home/worksuite/public_html/os/application/libraries/mails/Staff_event_notification.php 27
ERROR - 2020-08-06 02:03:02 --> Severity: Notice --> Trying to get property 'email' of non-object /home/worksuite/public_html/os/application/libraries/mails/Staff_event_notification.php 30
ERROR - 2020-08-06 02:03:02 --> Severity: Notice --> Trying to get property 'staffid' of non-object /home/worksuite/public_html/os/application/libraries/mails/Staff_event_notification.php 31
ERROR - 2020-08-06 02:03:02 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near ')
ORDER BY `firstname` DESC' at line 3 - Invalid query: SELECT *
FROM `tblstaff`
WHERE `staffid` IN()
ORDER BY `firstname` DESC
ERROR - 2020-08-06 02:03:02 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /home/worksuite/public_html/os/system/core/Exceptions.php:271) /home/worksuite/public_html/os/system/core/Common.php 570
ERROR - 2020-08-06 02:04:01 --> Severity: Notice --> Trying to get property 'staffid' of non-object /home/worksuite/public_html/os/application/libraries/mails/Staff_event_notification.php 27
ERROR - 2020-08-06 02:04:01 --> Severity: Notice --> Trying to get property 'email' of non-object /home/worksuite/public_html/os/application/libraries/mails/Staff_event_notification.php 30
ERROR - 2020-08-06 02:04:01 --> Severity: Notice --> Trying to get property 'staffid' of non-object /home/worksuite/public_html/os/application/libraries/mails/Staff_event_notification.php 31
ERROR - 2020-08-06 02:04:01 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near ')
ORDER BY `firstname` DESC' at line 3 - Invalid query: SELECT *
FROM `tblstaff`
WHERE `staffid` IN()
ORDER BY `firstname` DESC
ERROR - 2020-08-06 02:04:01 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /home/worksuite/public_html/os/system/core/Exceptions.php:271) /home/worksuite/public_html/os/system/core/Common.php 570
ERROR - 2020-08-06 02:05:01 --> Severity: Notice --> Trying to get property 'staffid' of non-object /home/worksuite/public_html/os/application/libraries/mails/Staff_event_notification.php 27
ERROR - 2020-08-06 02:05:01 --> Severity: Notice --> Trying to get property 'email' of non-object /home/worksuite/public_html/os/application/libraries/mails/Staff_event_notification.php 30
ERROR - 2020-08-06 02:05:01 --> Severity: Notice --> Trying to get property 'staffid' of non-object /home/worksuite/public_html/os/application/libraries/mails/Staff_event_notification.php 31
ERROR - 2020-08-06 02:05:01 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near ')
ORDER BY `firstname` DESC' at line 3 - Invalid query: SELECT *
FROM `tblstaff`
WHERE `staffid` IN()
ORDER BY `firstname` DESC
ERROR - 2020-08-06 02:05:01 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /home/worksuite/public_html/os/system/core/Exceptions.php:271) /home/worksuite/public_html/os/system/core/Common.php 570
ERROR - 2020-08-06 02:06:01 --> Severity: Notice --> Trying to get property 'staffid' of non-object /home/worksuite/public_html/os/application/libraries/mails/Staff_event_notification.php 27
ERROR - 2020-08-06 02:06:01 --> Severity: Notice --> Trying to get property 'email' of non-object /home/worksuite/public_html/os/application/libraries/mails/Staff_event_notification.php 30
ERROR - 2020-08-06 02:06:01 --> Severity: Notice --> Trying to get property 'staffid' of non-object /home/worksuite/public_html/os/application/libraries/mails/Staff_event_notification.php 31
ERROR - 2020-08-06 02:06:01 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near ')
ORDER BY `firstname` DESC' at line 3 - Invalid query: SELECT *
FROM `tblstaff`
WHERE `staffid` IN()
ORDER BY `firstname` DESC
ERROR - 2020-08-06 02:06:01 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /home/worksuite/public_html/os/system/core/Exceptions.php:271) /home/worksuite/public_html/os/system/core/Common.php 570
ERROR - 2020-08-06 00:06:45 --> 404 Page Not Found: ../../modules/assets/controllers/Assets/plugins
ERROR - 2020-08-06 00:06:59 --> 404 Page Not Found: ../../modules/assets/controllers/Assets/plugins
ERROR - 2020-08-06 02:07:01 --> Severity: Notice --> Trying to get property 'staffid' of non-object /home/worksuite/public_html/os/application/libraries/mails/Staff_event_notification.php 27
ERROR - 2020-08-06 02:07:01 --> Severity: Notice --> Trying to get property 'email' of non-object /home/worksuite/public_html/os/application/libraries/mails/Staff_event_notification.php 30
ERROR - 2020-08-06 02:07:01 --> Severity: Notice --> Trying to get property 'staffid' of non-object /home/worksuite/public_html/os/application/libraries/mails/Staff_event_notification.php 31
ERROR - 2020-08-06 02:07:01 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near ')
ORDER BY `firstname` DESC' at line 3 - Invalid query: SELECT *
FROM `tblstaff`
WHERE `staffid` IN()
ORDER BY `firstname` DESC
ERROR - 2020-08-06 02:07:01 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /home/worksuite/public_html/os/system/core/Exceptions.php:271) /home/worksuite/public_html/os/system/core/Common.php 570
ERROR - 2020-08-06 00:07:24 --> 404 Page Not Found: ../../modules/assets/controllers/Assets/plugins
ERROR - 2020-08-06 00:07:37 --> 404 Page Not Found: ../../modules/assets/controllers/Assets/plugins
ERROR - 2020-08-06 00:07:51 --> 404 Page Not Found: ../../modules/assets/controllers/Assets/plugins
ERROR - 2020-08-06 00:07:52 --> 404 Page Not Found: ../../modules/assets/controllers/Assets/plugins
ERROR - 2020-08-06 00:07:57 --> 404 Page Not Found: ../../modules/assets/controllers/Assets/plugins
ERROR - 2020-08-06 02:08:02 --> Severity: Notice --> Trying to get property 'staffid' of non-object /home/worksuite/public_html/os/application/libraries/mails/Staff_event_notification.php 27
ERROR - 2020-08-06 02:08:02 --> Severity: Notice --> Trying to get property 'email' of non-object /home/worksuite/public_html/os/application/libraries/mails/Staff_event_notification.php 30
ERROR - 2020-08-06 02:08:02 --> Severity: Notice --> Trying to get property 'staffid' of non-object /home/worksuite/public_html/os/application/libraries/mails/Staff_event_notification.php 31
ERROR - 2020-08-06 02:08:02 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near ')
ORDER BY `firstname` DESC' at line 3 - Invalid query: SELECT *
FROM `tblstaff`
WHERE `staffid` IN()
ORDER BY `firstname` DESC
ERROR - 2020-08-06 02:08:02 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /home/worksuite/public_html/os/system/core/Exceptions.php:271) /home/worksuite/public_html/os/system/core/Common.php 570
ERROR - 2020-08-06 00:08:02 --> 404 Page Not Found: ../../modules/assets/controllers/Assets/plugins
ERROR - 2020-08-06 00:08:02 --> 404 Page Not Found: ../../modules/assets/controllers/Assets/plugins
ERROR - 2020-08-06 00:08:15 --> 404 Page Not Found: ../../modules/assets/controllers/Assets/plugins
ERROR - 2020-08-06 02:09:01 --> Severity: Notice --> Trying to get property 'staffid' of non-object /home/worksuite/public_html/os/application/libraries/mails/Staff_event_notification.php 27
ERROR - 2020-08-06 02:09:01 --> Severity: Notice --> Trying to get property 'email' of non-object /home/worksuite/public_html/os/application/libraries/mails/Staff_event_notification.php 30
ERROR - 2020-08-06 02:09:01 --> Severity: Notice --> Trying to get property 'staffid' of non-object /home/worksuite/public_html/os/application/libraries/mails/Staff_event_notification.php 31
ERROR - 2020-08-06 02:09:01 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near ')
ORDER BY `firstname` DESC' at line 3 - Invalid query: SELECT *
FROM `tblstaff`
WHERE `staffid` IN()
ORDER BY `firstname` DESC
ERROR - 2020-08-06 02:09:01 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /home/worksuite/public_html/os/system/core/Exceptions.php:271) /home/worksuite/public_html/os/system/core/Common.php 570
ERROR - 2020-08-06 02:10:01 --> Severity: Notice --> Trying to get property 'staffid' of non-object /home/worksuite/public_html/os/application/libraries/mails/Staff_event_notification.php 27
ERROR - 2020-08-06 02:10:01 --> Severity: Notice --> Trying to get property 'email' of non-object /home/worksuite/public_html/os/application/libraries/mails/Staff_event_notification.php 30
ERROR - 2020-08-06 02:10:01 --> Severity: Notice --> Trying to get property 'staffid' of non-object /home/worksuite/public_html/os/application/libraries/mails/Staff_event_notification.php 31
ERROR - 2020-08-06 02:10:01 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near ')
ORDER BY `firstname` DESC' at line 3 - Invalid query: SELECT *
FROM `tblstaff`
WHERE `staffid` IN()
ORDER BY `firstname` DESC
ERROR - 2020-08-06 02:10:01 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /home/worksuite/public_html/os/system/core/Exceptions.php:271) /home/worksuite/public_html/os/system/core/Common.php 570
ERROR - 2020-08-06 00:10:39 --> 404 Page Not Found: ../../modules/assets/controllers/Assets/plugins
ERROR - 2020-08-06 00:10:40 --> 404 Page Not Found: ../../modules/assets/controllers/Assets/plugins
ERROR - 2020-08-06 00:10:52 --> 404 Page Not Found: ../../modules/assets/controllers/Assets/plugins
ERROR - 2020-08-06 00:10:53 --> 404 Page Not Found: ../../modules/assets/controllers/Assets/plugins
ERROR - 2020-08-06 02:11:01 --> Severity: Notice --> Trying to get property 'staffid' of non-object /home/worksuite/public_html/os/application/libraries/mails/Staff_event_notification.php 27
ERROR - 2020-08-06 02:11:01 --> Severity: Notice --> Trying to get property 'email' of non-object /home/worksuite/public_html/os/application/libraries/mails/Staff_event_notification.php 30
ERROR - 2020-08-06 02:11:01 --> Severity: Notice --> Trying to get property 'staffid' of non-object /home/worksuite/public_html/os/application/libraries/mails/Staff_event_notification.php 31
ERROR - 2020-08-06 02:11:01 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near ')
ORDER BY `firstname` DESC' at line 3 - Invalid query: SELECT *
FROM `tblstaff`
WHERE `staffid` IN()
ORDER BY `firstname` DESC
ERROR - 2020-08-06 02:11:01 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /home/worksuite/public_html/os/system/core/Exceptions.php:271) /home/worksuite/public_html/os/system/core/Common.php 570
ERROR - 2020-08-06 00:11:13 --> 404 Page Not Found: ../../modules/assets/controllers/Assets/plugins
ERROR - 2020-08-06 00:11:15 --> 404 Page Not Found: ../../modules/assets/controllers/Assets/plugins
ERROR - 2020-08-06 02:12:01 --> Severity: Notice --> Trying to get property 'staffid' of non-object /home/worksuite/public_html/os/application/libraries/mails/Staff_event_notification.php 27
ERROR - 2020-08-06 02:12:01 --> Severity: Notice --> Trying to get property 'email' of non-object /home/worksuite/public_html/os/application/libraries/mails/Staff_event_notification.php 30
ERROR - 2020-08-06 02:12:01 --> Severity: Notice --> Trying to get property 'staffid' of non-object /home/worksuite/public_html/os/application/libraries/mails/Staff_event_notification.php 31
ERROR - 2020-08-06 02:12:01 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near ')
ORDER BY `firstname` DESC' at line 3 - Invalid query: SELECT *
FROM `tblstaff`
WHERE `staffid` IN()
ORDER BY `firstname` DESC
ERROR - 2020-08-06 02:12:01 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /home/worksuite/public_html/os/system/core/Exceptions.php:271) /home/worksuite/public_html/os/system/core/Common.php 570
ERROR - 2020-08-06 00:12:06 --> 404 Page Not Found: ../../modules/assets/controllers/Assets/plugins
ERROR - 2020-08-06 00:12:07 --> 404 Page Not Found: ../../modules/assets/controllers/Assets/plugins
ERROR - 2020-08-06 00:12:23 --> 404 Page Not Found: ../../modules/assets/controllers/Assets/plugins
ERROR - 2020-08-06 00:12:24 --> 404 Page Not Found: ../../modules/assets/controllers/Assets/plugins
ERROR - 2020-08-06 00:12:34 --> 404 Page Not Found: ../../modules/assets/controllers/Assets/plugins
ERROR - 2020-08-06 02:13:01 --> Severity: Notice --> Trying to get property 'staffid' of non-object /home/worksuite/public_html/os/application/libraries/mails/Staff_event_notification.php 27
ERROR - 2020-08-06 02:13:01 --> Severity: Notice --> Trying to get property 'email' of non-object /home/worksuite/public_html/os/application/libraries/mails/Staff_event_notification.php 30
ERROR - 2020-08-06 02:13:01 --> Severity: Notice --> Trying to get property 'staffid' of non-object /home/worksuite/public_html/os/application/libraries/mails/Staff_event_notification.php 31
ERROR - 2020-08-06 02:13:01 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near ')
ORDER BY `firstname` DESC' at line 3 - Invalid query: SELECT *
FROM `tblstaff`
WHERE `staffid` IN()
ORDER BY `firstname` DESC
ERROR - 2020-08-06 02:13:01 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /home/worksuite/public_html/os/system/core/Exceptions.php:271) /home/worksuite/public_html/os/system/core/Common.php 570
ERROR - 2020-08-06 02:14:01 --> Severity: Notice --> Trying to get property 'staffid' of non-object /home/worksuite/public_html/os/application/libraries/mails/Staff_event_notification.php 27
ERROR - 2020-08-06 02:14:01 --> Severity: Notice --> Trying to get property 'email' of non-object /home/worksuite/public_html/os/application/libraries/mails/Staff_event_notification.php 30
ERROR - 2020-08-06 02:14:01 --> Severity: Notice --> Trying to get property 'staffid' of non-object /home/worksuite/public_html/os/application/libraries/mails/Staff_event_notification.php 31
ERROR - 2020-08-06 02:14:01 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near ')
ORDER BY `firstname` DESC' at line 3 - Invalid query: SELECT *
FROM `tblstaff`
WHERE `staffid` IN()
ORDER BY `firstname` DESC
ERROR - 2020-08-06 02:14:01 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /home/worksuite/public_html/os/system/core/Exceptions.php:271) /home/worksuite/public_html/os/system/core/Common.php 570
ERROR - 2020-08-06 00:14:21 --> 404 Page Not Found: ../../modules/assets/controllers/Assets/plugins
ERROR - 2020-08-06 00:14:57 --> 404 Page Not Found: ../../modules/assets/controllers/Assets/plugins
ERROR - 2020-08-06 02:15:02 --> Severity: Notice --> Trying to get property 'staffid' of non-object /home/worksuite/public_html/os/application/libraries/mails/Staff_event_notification.php 27
ERROR - 2020-08-06 02:15:02 --> Severity: Notice --> Trying to get property 'email' of non-object /home/worksuite/public_html/os/application/libraries/mails/Staff_event_notification.php 30
ERROR - 2020-08-06 02:15:02 --> Severity: Notice --> Trying to get property 'staffid' of non-object /home/worksuite/public_html/os/application/libraries/mails/Staff_event_notification.php 31
ERROR - 2020-08-06 02:15:02 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near ')
ORDER BY `firstname` DESC' at line 3 - Invalid query: SELECT *
FROM `tblstaff`
WHERE `staffid` IN()
ORDER BY `firstname` DESC
ERROR - 2020-08-06 02:15:02 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /home/worksuite/public_html/os/system/core/Exceptions.php:271) /home/worksuite/public_html/os/system/core/Common.php 570
ERROR - 2020-08-06 00:15:24 --> 404 Page Not Found: ../../modules/assets/controllers/Assets/plugins
ERROR - 2020-08-06 00:15:25 --> 404 Page Not Found: ../../modules/assets/controllers/Assets/plugins
ERROR - 2020-08-06 00:15:43 --> 404 Page Not Found: ../../modules/assets/controllers/Assets/plugins
ERROR - 2020-08-06 00:15:45 --> 404 Page Not Found: ../../modules/assets/controllers/Assets/plugins
ERROR - 2020-08-06 00:15:52 --> 404 Page Not Found: ../../modules/assets/controllers/Assets/plugins
ERROR - 2020-08-06 00:15:52 --> 404 Page Not Found: ../../modules/assets/controllers/Assets/plugins
ERROR - 2020-08-06 02:16:01 --> Severity: Notice --> Trying to get property 'staffid' of non-object /home/worksuite/public_html/os/application/libraries/mails/Staff_event_notification.php 27
ERROR - 2020-08-06 02:16:01 --> Severity: Notice --> Trying to get property 'email' of non-object /home/worksuite/public_html/os/application/libraries/mails/Staff_event_notification.php 30
ERROR - 2020-08-06 02:16:01 --> Severity: Notice --> Trying to get property 'staffid' of non-object /home/worksuite/public_html/os/application/libraries/mails/Staff_event_notification.php 31
ERROR - 2020-08-06 02:16:01 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near ')
ORDER BY `firstname` DESC' at line 3 - Invalid query: SELECT *
FROM `tblstaff`
WHERE `staffid` IN()
ORDER BY `firstname` DESC
ERROR - 2020-08-06 02:16:01 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /home/worksuite/public_html/os/system/core/Exceptions.php:271) /home/worksuite/public_html/os/system/core/Common.php 570
ERROR - 2020-08-06 02:17:02 --> Severity: Notice --> Trying to get property 'staffid' of non-object /home/worksuite/public_html/os/application/libraries/mails/Staff_event_notification.php 27
ERROR - 2020-08-06 02:17:02 --> Severity: Notice --> Trying to get property 'email' of non-object /home/worksuite/public_html/os/application/libraries/mails/Staff_event_notification.php 30
ERROR - 2020-08-06 02:17:02 --> Severity: Notice --> Trying to get property 'staffid' of non-object /home/worksuite/public_html/os/application/libraries/mails/Staff_event_notification.php 31
ERROR - 2020-08-06 02:17:02 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near ')
ORDER BY `firstname` DESC' at line 3 - Invalid query: SELECT *
FROM `tblstaff`
WHERE `staffid` IN()
ORDER BY `firstname` DESC
ERROR - 2020-08-06 02:17:02 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /home/worksuite/public_html/os/system/core/Exceptions.php:271) /home/worksuite/public_html/os/system/core/Common.php 570
ERROR - 2020-08-06 02:18:01 --> Severity: Notice --> Trying to get property 'staffid' of non-object /home/worksuite/public_html/os/application/libraries/mails/Staff_event_notification.php 27
ERROR - 2020-08-06 02:18:01 --> Severity: Notice --> Trying to get property 'email' of non-object /home/worksuite/public_html/os/application/libraries/mails/Staff_event_notification.php 30
ERROR - 2020-08-06 02:18:01 --> Severity: Notice --> Trying to get property 'staffid' of non-object /home/worksuite/public_html/os/application/libraries/mails/Staff_event_notification.php 31
ERROR - 2020-08-06 02:18:01 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near ')
ORDER BY `firstname` DESC' at line 3 - Invalid query: SELECT *
FROM `tblstaff`
WHERE `staffid` IN()
ORDER BY `firstname` DESC
ERROR - 2020-08-06 02:18:01 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /home/worksuite/public_html/os/system/core/Exceptions.php:271) /home/worksuite/public_html/os/system/core/Common.php 570
ERROR - 2020-08-06 02:18:21 --> Severity: Notice --> Undefined variable: table_count /home/worksuite/public_html/os/application/helpers/settings_helper.php 40
ERROR - 2020-08-06 02:18:21 --> Severity: Warning --> Division by zero /home/worksuite/public_html/os/application/helpers/settings_helper.php 40
ERROR - 2020-08-06 02:19:01 --> Severity: Notice --> Trying to get property 'staffid' of non-object /home/worksuite/public_html/os/application/libraries/mails/Staff_event_notification.php 27
ERROR - 2020-08-06 02:19:01 --> Severity: Notice --> Trying to get property 'email' of non-object /home/worksuite/public_html/os/application/libraries/mails/Staff_event_notification.php 30
ERROR - 2020-08-06 02:19:01 --> Severity: Notice --> Trying to get property 'staffid' of non-object /home/worksuite/public_html/os/application/libraries/mails/Staff_event_notification.php 31
ERROR - 2020-08-06 02:19:01 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near ')
ORDER BY `firstname` DESC' at line 3 - Invalid query: SELECT *
FROM `tblstaff`
WHERE `staffid` IN()
ORDER BY `firstname` DESC
ERROR - 2020-08-06 02:19:01 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /home/worksuite/public_html/os/system/core/Exceptions.php:271) /home/worksuite/public_html/os/system/core/Common.php 570
ERROR - 2020-08-06 02:20:02 --> Severity: Notice --> Trying to get property 'staffid' of non-object /home/worksuite/public_html/os/application/libraries/mails/Staff_event_notification.php 27
ERROR - 2020-08-06 02:20:02 --> Severity: Notice --> Trying to get property 'email' of non-object /home/worksuite/public_html/os/application/libraries/mails/Staff_event_notification.php 30
ERROR - 2020-08-06 02:20:02 --> Severity: Notice --> Trying to get property 'staffid' of non-object /home/worksuite/public_html/os/application/libraries/mails/Staff_event_notification.php 31
ERROR - 2020-08-06 02:20:02 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near ')
ORDER BY `firstname` DESC' at line 3 - Invalid query: SELECT *
FROM `tblstaff`
WHERE `staffid` IN()
ORDER BY `firstname` DESC
ERROR - 2020-08-06 02:20:02 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /home/worksuite/public_html/os/system/core/Exceptions.php:271) /home/worksuite/public_html/os/system/core/Common.php 570
ERROR - 2020-08-06 02:21:01 --> Severity: Notice --> Trying to get property 'staffid' of non-object /home/worksuite/public_html/os/application/libraries/mails/Staff_event_notification.php 27
ERROR - 2020-08-06 02:21:01 --> Severity: Notice --> Trying to get property 'email' of non-object /home/worksuite/public_html/os/application/libraries/mails/Staff_event_notification.php 30
ERROR - 2020-08-06 02:21:01 --> Severity: Notice --> Trying to get property 'staffid' of non-object /home/worksuite/public_html/os/application/libraries/mails/Staff_event_notification.php 31
ERROR - 2020-08-06 02:21:01 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near ')
ORDER BY `firstname` DESC' at line 3 - Invalid query: SELECT *
FROM `tblstaff`
WHERE `staffid` IN()
ORDER BY `firstname` DESC
ERROR - 2020-08-06 02:21:01 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /home/worksuite/public_html/os/system/core/Exceptions.php:271) /home/worksuite/public_html/os/system/core/Common.php 570
ERROR - 2020-08-06 02:22:01 --> Severity: Notice --> Trying to get property 'staffid' of non-object /home/worksuite/public_html/os/application/libraries/mails/Staff_event_notification.php 27
ERROR - 2020-08-06 02:22:01 --> Severity: Notice --> Trying to get property 'email' of non-object /home/worksuite/public_html/os/application/libraries/mails/Staff_event_notification.php 30
ERROR - 2020-08-06 02:22:01 --> Severity: Notice --> Trying to get property 'staffid' of non-object /home/worksuite/public_html/os/application/libraries/mails/Staff_event_notification.php 31
ERROR - 2020-08-06 02:22:02 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near ')
ORDER BY `firstname` DESC' at line 3 - Invalid query: SELECT *
FROM `tblstaff`
WHERE `staffid` IN()
ORDER BY `firstname` DESC
ERROR - 2020-08-06 02:22:02 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /home/worksuite/public_html/os/system/core/Exceptions.php:271) /home/worksuite/public_html/os/system/core/Common.php 570
ERROR - 2020-08-06 02:23:01 --> Severity: Notice --> Trying to get property 'staffid' of non-object /home/worksuite/public_html/os/application/libraries/mails/Staff_event_notification.php 27
ERROR - 2020-08-06 02:23:01 --> Severity: Notice --> Trying to get property 'email' of non-object /home/worksuite/public_html/os/application/libraries/mails/Staff_event_notification.php 30
ERROR - 2020-08-06 02:23:01 --> Severity: Notice --> Trying to get property 'staffid' of non-object /home/worksuite/public_html/os/application/libraries/mails/Staff_event_notification.php 31
ERROR - 2020-08-06 02:23:01 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near ')
ORDER BY `firstname` DESC' at line 3 - Invalid query: SELECT *
FROM `tblstaff`
WHERE `staffid` IN()
ORDER BY `firstname` DESC
ERROR - 2020-08-06 02:23:01 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /home/worksuite/public_html/os/system/core/Exceptions.php:271) /home/worksuite/public_html/os/system/core/Common.php 570
ERROR - 2020-08-06 02:24:02 --> Severity: Notice --> Trying to get property 'staffid' of non-object /home/worksuite/public_html/os/application/libraries/mails/Staff_event_notification.php 27
ERROR - 2020-08-06 02:24:02 --> Severity: Notice --> Trying to get property 'email' of non-object /home/worksuite/public_html/os/application/libraries/mails/Staff_event_notification.php 30
ERROR - 2020-08-06 02:24:02 --> Severity: Notice --> Trying to get property 'staffid' of non-object /home/worksuite/public_html/os/application/libraries/mails/Staff_event_notification.php 31
ERROR - 2020-08-06 02:24:02 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near ')
ORDER BY `firstname` DESC' at line 3 - Invalid query: SELECT *
FROM `tblstaff`
WHERE `staffid` IN()
ORDER BY `firstname` DESC
ERROR - 2020-08-06 02:24:02 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /home/worksuite/public_html/os/system/core/Exceptions.php:271) /home/worksuite/public_html/os/system/core/Common.php 570
ERROR - 2020-08-06 02:25:01 --> Severity: Notice --> Trying to get property 'staffid' of non-object /home/worksuite/public_html/os/application/libraries/mails/Staff_event_notification.php 27
ERROR - 2020-08-06 02:25:01 --> Severity: Notice --> Trying to get property 'email' of non-object /home/worksuite/public_html/os/application/libraries/mails/Staff_event_notification.php 30
ERROR - 2020-08-06 02:25:01 --> Severity: Notice --> Trying to get property 'staffid' of non-object /home/worksuite/public_html/os/application/libraries/mails/Staff_event_notification.php 31
ERROR - 2020-08-06 02:25:01 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near ')
ORDER BY `firstname` DESC' at line 3 - Invalid query: SELECT *
FROM `tblstaff`
WHERE `staffid` IN()
ORDER BY `firstname` DESC
ERROR - 2020-08-06 02:25:01 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /home/worksuite/public_html/os/system/core/Exceptions.php:271) /home/worksuite/public_html/os/system/core/Common.php 570
ERROR - 2020-08-06 02:26:02 --> Severity: Notice --> Trying to get property 'staffid' of non-object /home/worksuite/public_html/os/application/libraries/mails/Staff_event_notification.php 27
ERROR - 2020-08-06 02:26:02 --> Severity: Notice --> Trying to get property 'email' of non-object /home/worksuite/public_html/os/application/libraries/mails/Staff_event_notification.php 30
ERROR - 2020-08-06 02:26:02 --> Severity: Notice --> Trying to get property 'staffid' of non-object /home/worksuite/public_html/os/application/libraries/mails/Staff_event_notification.php 31
ERROR - 2020-08-06 02:26:02 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near ')
ORDER BY `firstname` DESC' at line 3 - Invalid query: SELECT *
FROM `tblstaff`
WHERE `staffid` IN()
ORDER BY `firstname` DESC
ERROR - 2020-08-06 02:26:02 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /home/worksuite/public_html/os/system/core/Exceptions.php:271) /home/worksuite/public_html/os/system/core/Common.php 570
ERROR - 2020-08-06 02:27:01 --> Severity: Notice --> Trying to get property 'staffid' of non-object /home/worksuite/public_html/os/application/libraries/mails/Staff_event_notification.php 27
ERROR - 2020-08-06 02:27:01 --> Severity: Notice --> Trying to get property 'email' of non-object /home/worksuite/public_html/os/application/libraries/mails/Staff_event_notification.php 30
ERROR - 2020-08-06 02:27:01 --> Severity: Notice --> Trying to get property 'staffid' of non-object /home/worksuite/public_html/os/application/libraries/mails/Staff_event_notification.php 31
ERROR - 2020-08-06 02:27:01 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near ')
ORDER BY `firstname` DESC' at line 3 - Invalid query: SELECT *
FROM `tblstaff`
WHERE `staffid` IN()
ORDER BY `firstname` DESC
ERROR - 2020-08-06 02:27:01 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /home/worksuite/public_html/os/system/core/Exceptions.php:271) /home/worksuite/public_html/os/system/core/Common.php 570
ERROR - 2020-08-06 02:27:18 --> Query error: Table 'worksuit_os.tbltbl_sub_options_13' doesn't exist - Invalid query: ALTER TABLE `tbltbl_sub_options_13`
	ADD `col_492` TEXT NULL DEFAULT ''
ERROR - 2020-08-06 02:28:01 --> Severity: Notice --> Trying to get property 'staffid' of non-object /home/worksuite/public_html/os/application/libraries/mails/Staff_event_notification.php 27
ERROR - 2020-08-06 02:28:01 --> Severity: Notice --> Trying to get property 'email' of non-object /home/worksuite/public_html/os/application/libraries/mails/Staff_event_notification.php 30
ERROR - 2020-08-06 02:28:01 --> Severity: Notice --> Trying to get property 'staffid' of non-object /home/worksuite/public_html/os/application/libraries/mails/Staff_event_notification.php 31
ERROR - 2020-08-06 02:28:01 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near ')
ORDER BY `firstname` DESC' at line 3 - Invalid query: SELECT *
FROM `tblstaff`
WHERE `staffid` IN()
ORDER BY `firstname` DESC
ERROR - 2020-08-06 02:28:01 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /home/worksuite/public_html/os/system/core/Exceptions.php:271) /home/worksuite/public_html/os/system/core/Common.php 570
ERROR - 2020-08-06 02:28:24 --> Query error: Table 'worksuit_os.tbl_sub_options_13' doesn't exist - Invalid query: ALTER TABLE `tbl_sub_options_13`
	ADD `col_492` TEXT NULL DEFAULT ''
ERROR - 2020-08-06 02:29:02 --> Severity: Notice --> Trying to get property 'staffid' of non-object /home/worksuite/public_html/os/application/libraries/mails/Staff_event_notification.php 27
ERROR - 2020-08-06 02:29:02 --> Severity: Notice --> Trying to get property 'email' of non-object /home/worksuite/public_html/os/application/libraries/mails/Staff_event_notification.php 30
ERROR - 2020-08-06 02:29:02 --> Severity: Notice --> Trying to get property 'staffid' of non-object /home/worksuite/public_html/os/application/libraries/mails/Staff_event_notification.php 31
ERROR - 2020-08-06 02:29:02 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near ')
ORDER BY `firstname` DESC' at line 3 - Invalid query: SELECT *
FROM `tblstaff`
WHERE `staffid` IN()
ORDER BY `firstname` DESC
ERROR - 2020-08-06 02:29:02 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /home/worksuite/public_html/os/system/core/Exceptions.php:271) /home/worksuite/public_html/os/system/core/Common.php 570
ERROR - 2020-08-06 02:30:01 --> Query error: Table 'worksuit_os.tbl_sub_options_ref' doesn't exist - Invalid query: SELECT *
FROM `tbl_sub_options_ref`
WHERE `field_name` = 'last_upgrade_copy_data'
ERROR - 2020-08-06 00:30:21 --> Query error: Table 'worksuit_os.tbl_sub_options_ref' doesn't exist - Invalid query: SELECT DISTINCT `table_name`
FROM `tbl_sub_options_ref`
ERROR - 2020-08-06 02:31:01 --> Query error: Table 'worksuit_os.tbl_sub_options_ref' doesn't exist - Invalid query: SELECT *
FROM `tbl_sub_options_ref`
WHERE `field_name` = 'last_upgrade_copy_data'
ERROR - 2020-08-06 00:31:31 --> Query error: Table 'worksuit_os.tbl_sub_options_ref' doesn't exist - Invalid query: SELECT DISTINCT `table_name`
FROM `tbl_sub_options_ref`
ERROR - 2020-08-06 02:32:01 --> Query error: Table 'worksuit_os.tbl_sub_options_ref' doesn't exist - Invalid query: SELECT *
FROM `tbl_sub_options_ref`
WHERE `field_name` = 'last_upgrade_copy_data'
ERROR - 2020-08-06 02:32:56 --> Query error: Table 'worksuit_os.tbl_sub_options_ref' doesn't exist - Invalid query: SELECT *
FROM `tbl_sub_options_ref`
WHERE `field_name` = 'last_upgrade_copy_data'
ERROR - 2020-08-06 00:33:02 --> Severity: Notice --> Undefined index: current_company /home/worksuite/public_html/os/application/libraries/App.php 469
ERROR - 2020-08-06 00:33:02 --> Query error: Table 'worksuit_os.tbl_sub_options_ref' doesn't exist - Invalid query: SELECT DISTINCT `table_name`
FROM `tbl_sub_options_ref`
ERROR - 2020-08-06 00:33:02 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /home/worksuite/public_html/os/system/core/Exceptions.php:271) /home/worksuite/public_html/os/system/core/Common.php 570
ERROR - 2020-08-06 00:33:37 --> Severity: Notice --> Undefined variable: name2 /home/worksuite/public_html/os/application/libraries/App.php 254
ERROR - 2020-08-06 00:33:37 --> Severity: Notice --> Undefined variable: name2 /home/worksuite/public_html/os/application/libraries/App.php 254
ERROR - 2020-08-06 00:33:37 --> Severity: Notice --> Undefined variable: name2 /home/worksuite/public_html/os/application/libraries/App.php 254
ERROR - 2020-08-06 00:33:37 --> Severity: Notice --> Undefined variable: name2 /home/worksuite/public_html/os/application/libraries/App.php 254
ERROR - 2020-08-06 00:33:37 --> Severity: Notice --> Undefined variable: name2 /home/worksuite/public_html/os/application/libraries/App.php 254
ERROR - 2020-08-06 00:33:37 --> Severity: Notice --> Undefined variable: name2 /home/worksuite/public_html/os/application/libraries/App.php 254
ERROR - 2020-08-06 00:33:37 --> Severity: Notice --> Undefined variable: name2 /home/worksuite/public_html/os/application/libraries/App.php 254
ERROR - 2020-08-06 00:33:37 --> Severity: Notice --> Undefined variable: name2 /home/worksuite/public_html/os/application/libraries/App.php 254
ERROR - 2020-08-06 00:33:37 --> Severity: Notice --> Undefined variable: name2 /home/worksuite/public_html/os/application/libraries/App.php 254
ERROR - 2020-08-06 00:33:37 --> Severity: Notice --> Undefined variable: name2 /home/worksuite/public_html/os/application/libraries/App.php 254
ERROR - 2020-08-06 02:33:37 --> Severity: Notice --> Undefined variable: name2 /home/worksuite/public_html/os/application/libraries/App.php 254
ERROR - 2020-08-06 02:33:37 --> Severity: Notice --> Undefined variable: name2 /home/worksuite/public_html/os/application/libraries/App.php 254
ERROR - 2020-08-06 02:33:37 --> Severity: Notice --> Undefined variable: name2 /home/worksuite/public_html/os/application/libraries/App.php 254
ERROR - 2020-08-06 02:33:37 --> Severity: Notice --> Undefined variable: name2 /home/worksuite/public_html/os/application/libraries/App.php 254
ERROR - 2020-08-06 02:33:37 --> Severity: Notice --> Undefined variable: name2 /home/worksuite/public_html/os/application/libraries/App.php 254
ERROR - 2020-08-06 02:33:37 --> Severity: Notice --> Undefined variable: name2 /home/worksuite/public_html/os/application/libraries/App.php 254
ERROR - 2020-08-06 02:33:37 --> Severity: Notice --> Undefined variable: name2 /home/worksuite/public_html/os/application/libraries/App.php 254
ERROR - 2020-08-06 02:33:37 --> Severity: Notice --> Undefined variable: name2 /home/worksuite/public_html/os/application/libraries/App.php 254
ERROR - 2020-08-06 02:33:37 --> Severity: Notice --> Undefined variable: name2 /home/worksuite/public_html/os/application/libraries/App.php 254
ERROR - 2020-08-06 02:33:37 --> Severity: Notice --> Undefined variable: name2 /home/worksuite/public_html/os/application/libraries/App.php 254
ERROR - 2020-08-06 02:33:37 --> Severity: Notice --> Undefined variable: name2 /home/worksuite/public_html/os/application/libraries/App.php 254
ERROR - 2020-08-06 02:33:37 --> Severity: Notice --> Undefined index: last_upgrade_copy_data /home/worksuite/public_html/os/application/libraries/App.php 292
ERROR - 2020-08-06 02:33:37 --> Severity: Notice --> Undefined variable: name2 /home/worksuite/public_html/os/application/libraries/App.php 254
ERROR - 2020-08-06 02:33:37 --> Severity: Notice --> Undefined variable: name2 /home/worksuite/public_html/os/application/libraries/App.php 254
ERROR - 2020-08-06 02:33:37 --> Severity: Notice --> Undefined variable: name2 /home/worksuite/public_html/os/application/libraries/App.php 254
ERROR - 2020-08-06 02:33:37 --> Severity: Notice --> Undefined variable: name2 /home/worksuite/public_html/os/application/libraries/App.php 254
ERROR - 2020-08-06 02:33:37 --> Severity: Notice --> Undefined variable: name2 /home/worksuite/public_html/os/application/libraries/App.php 254
ERROR - 2020-08-06 02:33:37 --> Severity: Notice --> Undefined variable: name2 /home/worksuite/public_html/os/application/libraries/App.php 254
ERROR - 2020-08-06 02:33:37 --> Severity: Notice --> Undefined variable: name2 /home/worksuite/public_html/os/application/libraries/App.php 254
ERROR - 2020-08-06 02:33:37 --> Severity: Notice --> Undefined variable: name2 /home/worksuite/public_html/os/application/libraries/App.php 254
ERROR - 2020-08-06 02:33:37 --> Severity: Notice --> Undefined variable: name2 /home/worksuite/public_html/os/application/libraries/App.php 254
ERROR - 2020-08-06 02:33:37 --> Severity: Notice --> Undefined variable: name2 /home/worksuite/public_html/os/application/libraries/App.php 254
ERROR - 2020-08-06 02:33:37 --> Severity: Notice --> Undefined variable: name2 /home/worksuite/public_html/os/application/libraries/App.php 254
ERROR - 2020-08-06 02:33:37 --> Severity: Notice --> Undefined variable: name2 /home/worksuite/public_html/os/application/libraries/App.php 254
ERROR - 2020-08-06 02:33:37 --> Severity: Notice --> Undefined variable: name2 /home/worksuite/public_html/os/application/libraries/App.php 254
ERROR - 2020-08-06 02:33:37 --> Severity: Notice --> Undefined variable: name2 /home/worksuite/public_html/os/application/libraries/App.php 254
ERROR - 2020-08-06 02:33:37 --> Severity: Notice --> Undefined variable: name2 /home/worksuite/public_html/os/application/libraries/App.php 254
ERROR - 2020-08-06 02:33:37 --> Severity: Notice --> Undefined variable: name2 /home/worksuite/public_html/os/application/libraries/App.php 254
ERROR - 2020-08-06 02:33:37 --> Severity: Notice --> Undefined variable: name2 /home/worksuite/public_html/os/application/libraries/App.php 254
ERROR - 2020-08-06 02:33:37 --> Severity: Notice --> Undefined index: enable_google_picker /home/worksuite/public_html/os/application/libraries/App.php 292
ERROR - 2020-08-06 02:33:37 --> Severity: Notice --> Undefined variable: name2 /home/worksuite/public_html/os/application/libraries/App.php 254
ERROR - 2020-08-06 02:33:37 --> Severity: Notice --> Undefined variable: name2 /home/worksuite/public_html/os/application/libraries/App.php 254
ERROR - 2020-08-06 02:33:37 --> Severity: Notice --> Undefined variable: name2 /home/worksuite/public_html/os/application/libraries/App.php 254
ERROR - 2020-08-06 02:33:37 --> Severity: Notice --> Undefined variable: name2 /home/worksuite/public_html/os/application/libraries/App.php 254
ERROR - 2020-08-06 02:33:37 --> Severity: Notice --> Undefined variable: name2 /home/worksuite/public_html/os/application/libraries/App.php 254
ERROR - 2020-08-06 02:33:37 --> Severity: Notice --> Undefined variable: name2 /home/worksuite/public_html/os/application/libraries/App.php 254
ERROR - 2020-08-06 02:33:37 --> Severity: Notice --> Undefined variable: name2 /home/worksuite/public_html/os/application/libraries/App.php 254
ERROR - 2020-08-06 02:33:37 --> Severity: Notice --> Undefined variable: name2 /home/worksuite/public_html/os/application/libraries/App.php 254
ERROR - 2020-08-06 00:34:01 --> Severity: Notice --> Undefined index: current_company /home/worksuite/public_html/os/application/libraries/App.php 469
ERROR - 2020-08-06 00:34:01 --> Severity: Notice --> Undefined variable: name2 /home/worksuite/public_html/os/application/libraries/App.php 254
ERROR - 2020-08-06 00:34:01 --> Severity: Notice --> Undefined variable: name2 /home/worksuite/public_html/os/application/libraries/App.php 254
ERROR - 2020-08-06 00:34:01 --> Severity: Notice --> Undefined variable: name2 /home/worksuite/public_html/os/application/libraries/App.php 254
ERROR - 2020-08-06 00:34:01 --> Severity: Notice --> Undefined variable: name2 /home/worksuite/public_html/os/application/libraries/App.php 254
ERROR - 2020-08-06 00:34:01 --> Severity: Notice --> Undefined variable: name2 /home/worksuite/public_html/os/application/libraries/App.php 254
ERROR - 2020-08-06 00:34:01 --> Severity: Notice --> Undefined variable: name2 /home/worksuite/public_html/os/application/libraries/App.php 254
ERROR - 2020-08-06 00:34:01 --> Severity: Notice --> Undefined variable: name2 /home/worksuite/public_html/os/application/libraries/App.php 254
ERROR - 2020-08-06 00:34:01 --> Severity: Notice --> Undefined variable: name2 /home/worksuite/public_html/os/application/libraries/App.php 254
ERROR - 2020-08-06 00:34:01 --> Severity: Notice --> Undefined variable: name2 /home/worksuite/public_html/os/application/libraries/App.php 254
ERROR - 2020-08-06 00:34:01 --> Severity: Notice --> Undefined variable: name2 /home/worksuite/public_html/os/application/libraries/App.php 254
ERROR - 2020-08-06 02:34:01 --> Severity: Notice --> Undefined variable: name2 /home/worksuite/public_html/os/application/libraries/App.php 254
ERROR - 2020-08-06 02:34:01 --> Severity: Notice --> Undefined variable: name2 /home/worksuite/public_html/os/application/libraries/App.php 254
ERROR - 2020-08-06 02:34:01 --> Severity: Notice --> Undefined variable: name2 /home/worksuite/public_html/os/application/libraries/App.php 254
ERROR - 2020-08-06 02:34:01 --> Severity: Notice --> Undefined variable: name2 /home/worksuite/public_html/os/application/libraries/App.php 254
ERROR - 2020-08-06 02:34:01 --> Severity: Notice --> Undefined variable: name2 /home/worksuite/public_html/os/application/libraries/App.php 254
ERROR - 2020-08-06 02:34:01 --> Severity: Notice --> Undefined variable: name2 /home/worksuite/public_html/os/application/libraries/App.php 254
ERROR - 2020-08-06 02:34:01 --> Severity: Notice --> Undefined variable: name2 /home/worksuite/public_html/os/application/libraries/App.php 254
ERROR - 2020-08-06 02:34:01 --> Severity: Notice --> Undefined variable: name2 /home/worksuite/public_html/os/application/libraries/App.php 254
ERROR - 2020-08-06 02:34:01 --> Severity: Notice --> Undefined variable: name2 /home/worksuite/public_html/os/application/libraries/App.php 254
ERROR - 2020-08-06 02:34:01 --> Severity: Notice --> Undefined variable: name2 /home/worksuite/public_html/os/application/libraries/App.php 254
ERROR - 2020-08-06 02:34:01 --> Severity: Notice --> Undefined variable: name2 /home/worksuite/public_html/os/application/libraries/App.php 254
ERROR - 2020-08-06 02:34:01 --> Severity: Notice --> Undefined index: last_upgrade_copy_data /home/worksuite/public_html/os/application/libraries/App.php 292
ERROR - 2020-08-06 02:34:01 --> Severity: Notice --> Undefined variable: name2 /home/worksuite/public_html/os/application/libraries/App.php 254
ERROR - 2020-08-06 02:34:01 --> Severity: Notice --> Undefined variable: name2 /home/worksuite/public_html/os/application/libraries/App.php 254
ERROR - 2020-08-06 02:34:01 --> Severity: Notice --> Undefined variable: name2 /home/worksuite/public_html/os/application/libraries/App.php 254
ERROR - 2020-08-06 02:34:01 --> Severity: Notice --> Undefined variable: name2 /home/worksuite/public_html/os/application/libraries/App.php 254
ERROR - 2020-08-06 02:34:01 --> Severity: Notice --> Undefined variable: name2 /home/worksuite/public_html/os/application/libraries/App.php 254
ERROR - 2020-08-06 02:34:01 --> Severity: Notice --> Undefined variable: name2 /home/worksuite/public_html/os/application/libraries/App.php 254
ERROR - 2020-08-06 02:34:01 --> Severity: Notice --> Undefined variable: name2 /home/worksuite/public_html/os/application/libraries/App.php 254
ERROR - 2020-08-06 02:34:01 --> Severity: Notice --> Undefined variable: name2 /home/worksuite/public_html/os/application/libraries/App.php 254
ERROR - 2020-08-06 02:34:01 --> Severity: Notice --> Undefined variable: name2 /home/worksuite/public_html/os/application/libraries/App.php 254
ERROR - 2020-08-06 02:34:01 --> Severity: Notice --> Undefined variable: name2 /home/worksuite/public_html/os/application/libraries/App.php 254
ERROR - 2020-08-06 02:34:01 --> Severity: Notice --> Undefined variable: name2 /home/worksuite/public_html/os/application/libraries/App.php 254
ERROR - 2020-08-06 02:34:01 --> Severity: Notice --> Undefined variable: name2 /home/worksuite/public_html/os/application/libraries/App.php 254
ERROR - 2020-08-06 02:34:01 --> Severity: Notice --> Undefined variable: name2 /home/worksuite/public_html/os/application/libraries/App.php 254
ERROR - 2020-08-06 02:34:01 --> Severity: Notice --> Undefined variable: name2 /home/worksuite/public_html/os/application/libraries/App.php 254
ERROR - 2020-08-06 02:34:01 --> Severity: Notice --> Undefined variable: name2 /home/worksuite/public_html/os/application/libraries/App.php 254
ERROR - 2020-08-06 02:34:01 --> Severity: Notice --> Undefined variable: name2 /home/worksuite/public_html/os/application/libraries/App.php 254
ERROR - 2020-08-06 02:34:01 --> Severity: Notice --> Trying to get property 'staffid' of non-object /home/worksuite/public_html/os/application/libraries/mails/Staff_event_notification.php 27
ERROR - 2020-08-06 02:34:01 --> Severity: Notice --> Undefined variable: name2 /home/worksuite/public_html/os/application/libraries/App.php 254
ERROR - 2020-08-06 02:34:01 --> Severity: Notice --> Undefined index: enable_gdpr /home/worksuite/public_html/os/application/libraries/App.php 292
ERROR - 2020-08-06 02:34:01 --> Severity: Notice --> Undefined variable: name2 /home/worksuite/public_html/os/application/libraries/App.php 254
ERROR - 2020-08-06 02:34:01 --> Severity: Notice --> Undefined index: enable_gdpr /home/worksuite/public_html/os/application/libraries/App.php 292
ERROR - 2020-08-06 02:34:01 --> Severity: Notice --> Undefined variable: name2 /home/worksuite/public_html/os/application/libraries/App.php 254
ERROR - 2020-08-06 02:34:01 --> Severity: Notice --> Undefined index: enable_gdpr /home/worksuite/public_html/os/application/libraries/App.php 292
ERROR - 2020-08-06 02:34:01 --> Severity: Notice --> Undefined variable: name2 /home/worksuite/public_html/os/application/libraries/App.php 254
ERROR - 2020-08-06 02:34:01 --> Severity: Notice --> Undefined index: enable_gdpr /home/worksuite/public_html/os/application/libraries/App.php 292
ERROR - 2020-08-06 02:34:01 --> Severity: Notice --> Undefined variable: name2 /home/worksuite/public_html/os/application/libraries/App.php 254
ERROR - 2020-08-06 02:34:01 --> Severity: Notice --> Undefined index: enable_gdpr /home/worksuite/public_html/os/application/libraries/App.php 292
ERROR - 2020-08-06 02:34:01 --> Severity: Notice --> Undefined variable: name2 /home/worksuite/public_html/os/application/libraries/App.php 254
ERROR - 2020-08-06 02:34:01 --> Severity: Notice --> Undefined index: enable_gdpr /home/worksuite/public_html/os/application/libraries/App.php 292
ERROR - 2020-08-06 02:34:01 --> Severity: Notice --> Undefined variable: name2 /home/worksuite/public_html/os/application/libraries/App.php 254
ERROR - 2020-08-06 02:34:01 --> Severity: Notice --> Undefined variable: name2 /home/worksuite/public_html/os/application/libraries/App.php 254
ERROR - 2020-08-06 02:34:01 --> Severity: Notice --> Undefined variable: name2 /home/worksuite/public_html/os/application/libraries/App.php 254
ERROR - 2020-08-06 02:34:01 --> Severity: Notice --> Undefined variable: name2 /home/worksuite/public_html/os/application/libraries/App.php 254
ERROR - 2020-08-06 02:34:01 --> Severity: Notice --> Trying to get property 'email' of non-object /home/worksuite/public_html/os/application/libraries/mails/Staff_event_notification.php 30
ERROR - 2020-08-06 02:34:01 --> Severity: Notice --> Trying to get property 'staffid' of non-object /home/worksuite/public_html/os/application/libraries/mails/Staff_event_notification.php 31
ERROR - 2020-08-06 02:34:01 --> Severity: Notice --> Undefined variable: name2 /home/worksuite/public_html/os/application/libraries/App.php 254
ERROR - 2020-08-06 02:34:01 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near ')
ORDER BY `firstname` DESC' at line 3 - Invalid query: SELECT *
FROM `tblstaff`
WHERE `staffid` IN()
ORDER BY `firstname` DESC
ERROR - 2020-08-06 02:34:01 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /home/worksuite/public_html/os/system/core/Exceptions.php:271) /home/worksuite/public_html/os/system/core/Common.php 570
ERROR - 2020-08-06 02:35:01 --> Severity: Notice --> Trying to get property 'staffid' of non-object /home/worksuite/public_html/os/application/libraries/mails/Staff_event_notification.php 27
ERROR - 2020-08-06 02:35:01 --> Severity: Notice --> Trying to get property 'email' of non-object /home/worksuite/public_html/os/application/libraries/mails/Staff_event_notification.php 30
ERROR - 2020-08-06 02:35:01 --> Severity: Notice --> Trying to get property 'staffid' of non-object /home/worksuite/public_html/os/application/libraries/mails/Staff_event_notification.php 31
ERROR - 2020-08-06 02:35:01 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near ')
ORDER BY `firstname` DESC' at line 3 - Invalid query: SELECT *
FROM `tblstaff`
WHERE `staffid` IN()
ORDER BY `firstname` DESC
ERROR - 2020-08-06 02:35:01 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /home/worksuite/public_html/os/system/core/Exceptions.php:271) /home/worksuite/public_html/os/system/core/Common.php 570
ERROR - 2020-08-06 00:36:01 --> Severity: Notice --> Undefined index: current_company /home/worksuite/public_html/os/application/libraries/App.php 469
ERROR - 2020-08-06 00:36:01 --> Severity: Notice --> Undefined variable: name2 /home/worksuite/public_html/os/application/libraries/App.php 254
ERROR - 2020-08-06 00:36:01 --> Severity: Notice --> Undefined variable: name2 /home/worksuite/public_html/os/application/libraries/App.php 254
ERROR - 2020-08-06 00:36:01 --> Severity: Notice --> Undefined variable: name2 /home/worksuite/public_html/os/application/libraries/App.php 254
ERROR - 2020-08-06 00:36:01 --> Severity: Notice --> Undefined variable: name2 /home/worksuite/public_html/os/application/libraries/App.php 254
ERROR - 2020-08-06 00:36:01 --> Severity: Notice --> Undefined variable: name2 /home/worksuite/public_html/os/application/libraries/App.php 254
ERROR - 2020-08-06 00:36:01 --> Severity: Notice --> Undefined variable: name2 /home/worksuite/public_html/os/application/libraries/App.php 254
ERROR - 2020-08-06 00:36:01 --> Severity: Notice --> Undefined variable: name2 /home/worksuite/public_html/os/application/libraries/App.php 254
ERROR - 2020-08-06 00:36:01 --> Severity: Notice --> Undefined variable: name2 /home/worksuite/public_html/os/application/libraries/App.php 254
ERROR - 2020-08-06 00:36:01 --> Severity: Notice --> Undefined variable: name2 /home/worksuite/public_html/os/application/libraries/App.php 254
ERROR - 2020-08-06 00:36:01 --> Severity: Notice --> Undefined variable: name2 /home/worksuite/public_html/os/application/libraries/App.php 254
ERROR - 2020-08-06 02:36:01 --> Severity: Notice --> Undefined variable: name2 /home/worksuite/public_html/os/application/libraries/App.php 254
ERROR - 2020-08-06 02:36:01 --> Severity: Notice --> Undefined variable: name2 /home/worksuite/public_html/os/application/libraries/App.php 254
ERROR - 2020-08-06 02:36:01 --> Severity: Notice --> Undefined variable: name2 /home/worksuite/public_html/os/application/libraries/App.php 254
ERROR - 2020-08-06 02:36:01 --> Severity: Notice --> Undefined variable: name2 /home/worksuite/public_html/os/application/libraries/App.php 254
ERROR - 2020-08-06 02:36:01 --> Severity: Notice --> Undefined variable: name2 /home/worksuite/public_html/os/application/libraries/App.php 254
ERROR - 2020-08-06 02:36:01 --> Severity: Notice --> Undefined variable: name2 /home/worksuite/public_html/os/application/libraries/App.php 254
ERROR - 2020-08-06 02:36:01 --> Severity: Notice --> Undefined variable: name2 /home/worksuite/public_html/os/application/libraries/App.php 254
ERROR - 2020-08-06 02:36:01 --> Severity: Notice --> Undefined variable: name2 /home/worksuite/public_html/os/application/libraries/App.php 254
ERROR - 2020-08-06 02:36:01 --> Severity: Notice --> Undefined variable: name2 /home/worksuite/public_html/os/application/libraries/App.php 254
ERROR - 2020-08-06 02:36:01 --> Severity: Notice --> Undefined variable: name2 /home/worksuite/public_html/os/application/libraries/App.php 254
ERROR - 2020-08-06 02:36:01 --> Severity: Notice --> Undefined variable: name2 /home/worksuite/public_html/os/application/libraries/App.php 254
ERROR - 2020-08-06 02:36:01 --> Severity: Notice --> Undefined index: last_upgrade_copy_data /home/worksuite/public_html/os/application/libraries/App.php 292
ERROR - 2020-08-06 02:36:01 --> Severity: Notice --> Undefined variable: name2 /home/worksuite/public_html/os/application/libraries/App.php 254
ERROR - 2020-08-06 02:36:01 --> Severity: Notice --> Undefined variable: name2 /home/worksuite/public_html/os/application/libraries/App.php 254
ERROR - 2020-08-06 02:36:01 --> Severity: Notice --> Undefined variable: name2 /home/worksuite/public_html/os/application/libraries/App.php 254
ERROR - 2020-08-06 02:36:01 --> Severity: Notice --> Undefined variable: name2 /home/worksuite/public_html/os/application/libraries/App.php 254
ERROR - 2020-08-06 02:36:01 --> Severity: Notice --> Undefined variable: name2 /home/worksuite/public_html/os/application/libraries/App.php 254
ERROR - 2020-08-06 02:36:01 --> Severity: Notice --> Undefined variable: name2 /home/worksuite/public_html/os/application/libraries/App.php 254
ERROR - 2020-08-06 02:36:01 --> Severity: Notice --> Undefined variable: name2 /home/worksuite/public_html/os/application/libraries/App.php 254
ERROR - 2020-08-06 02:36:01 --> Severity: Notice --> Undefined variable: name2 /home/worksuite/public_html/os/application/libraries/App.php 254
ERROR - 2020-08-06 02:36:01 --> Severity: Notice --> Undefined variable: name2 /home/worksuite/public_html/os/application/libraries/App.php 254
ERROR - 2020-08-06 02:36:01 --> Severity: Notice --> Undefined variable: name2 /home/worksuite/public_html/os/application/libraries/App.php 254
ERROR - 2020-08-06 02:36:01 --> Severity: Notice --> Undefined variable: name2 /home/worksuite/public_html/os/application/libraries/App.php 254
ERROR - 2020-08-06 02:36:01 --> Severity: Notice --> Undefined variable: name2 /home/worksuite/public_html/os/application/libraries/App.php 254
ERROR - 2020-08-06 02:36:01 --> Severity: Notice --> Undefined variable: name2 /home/worksuite/public_html/os/application/libraries/App.php 254
ERROR - 2020-08-06 02:36:01 --> Severity: Notice --> Undefined variable: name2 /home/worksuite/public_html/os/application/libraries/App.php 254
ERROR - 2020-08-06 02:36:01 --> Severity: Notice --> Undefined variable: name2 /home/worksuite/public_html/os/application/libraries/App.php 254
ERROR - 2020-08-06 02:36:01 --> Severity: Notice --> Undefined variable: name2 /home/worksuite/public_html/os/application/libraries/App.php 254
ERROR - 2020-08-06 02:36:01 --> Severity: Notice --> Trying to get property 'staffid' of non-object /home/worksuite/public_html/os/application/libraries/mails/Staff_event_notification.php 27
ERROR - 2020-08-06 02:36:01 --> Severity: Notice --> Undefined variable: name2 /home/worksuite/public_html/os/application/libraries/App.php 254
ERROR - 2020-08-06 02:36:01 --> Severity: Notice --> Undefined index: enable_gdpr /home/worksuite/public_html/os/application/libraries/App.php 292
ERROR - 2020-08-06 02:36:01 --> Severity: Notice --> Undefined variable: name2 /home/worksuite/public_html/os/application/libraries/App.php 254
ERROR - 2020-08-06 02:36:01 --> Severity: Notice --> Undefined index: enable_gdpr /home/worksuite/public_html/os/application/libraries/App.php 292
ERROR - 2020-08-06 02:36:01 --> Severity: Notice --> Undefined variable: name2 /home/worksuite/public_html/os/application/libraries/App.php 254
ERROR - 2020-08-06 02:36:01 --> Severity: Notice --> Undefined index: enable_gdpr /home/worksuite/public_html/os/application/libraries/App.php 292
ERROR - 2020-08-06 02:36:01 --> Severity: Notice --> Undefined variable: name2 /home/worksuite/public_html/os/application/libraries/App.php 254
ERROR - 2020-08-06 02:36:01 --> Severity: Notice --> Undefined index: enable_gdpr /home/worksuite/public_html/os/application/libraries/App.php 292
ERROR - 2020-08-06 02:36:01 --> Severity: Notice --> Undefined variable: name2 /home/worksuite/public_html/os/application/libraries/App.php 254
ERROR - 2020-08-06 02:36:01 --> Severity: Notice --> Undefined index: enable_gdpr /home/worksuite/public_html/os/application/libraries/App.php 292
ERROR - 2020-08-06 02:36:01 --> Severity: Notice --> Undefined variable: name2 /home/worksuite/public_html/os/application/libraries/App.php 254
ERROR - 2020-08-06 02:36:01 --> Severity: Notice --> Undefined index: enable_gdpr /home/worksuite/public_html/os/application/libraries/App.php 292
ERROR - 2020-08-06 02:36:01 --> Severity: Notice --> Undefined variable: name2 /home/worksuite/public_html/os/application/libraries/App.php 254
ERROR - 2020-08-06 02:36:01 --> Severity: Notice --> Undefined variable: name2 /home/worksuite/public_html/os/application/libraries/App.php 254
ERROR - 2020-08-06 02:36:01 --> Severity: Notice --> Undefined variable: name2 /home/worksuite/public_html/os/application/libraries/App.php 254
ERROR - 2020-08-06 02:36:01 --> Severity: Notice --> Undefined variable: name2 /home/worksuite/public_html/os/application/libraries/App.php 254
ERROR - 2020-08-06 02:36:01 --> Severity: Notice --> Trying to get property 'email' of non-object /home/worksuite/public_html/os/application/libraries/mails/Staff_event_notification.php 30
ERROR - 2020-08-06 02:36:01 --> Severity: Notice --> Trying to get property 'staffid' of non-object /home/worksuite/public_html/os/application/libraries/mails/Staff_event_notification.php 31
ERROR - 2020-08-06 02:36:01 --> Severity: Notice --> Undefined variable: name2 /home/worksuite/public_html/os/application/libraries/App.php 254
ERROR - 2020-08-06 02:36:01 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near ')
ORDER BY `firstname` DESC' at line 3 - Invalid query: SELECT *
FROM `tblstaff`
WHERE `staffid` IN()
ORDER BY `firstname` DESC
ERROR - 2020-08-06 02:36:01 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /home/worksuite/public_html/os/system/core/Exceptions.php:271) /home/worksuite/public_html/os/system/core/Common.php 570
ERROR - 2020-08-06 00:36:40 --> Severity: Notice --> Undefined variable: name2 /home/worksuite/public_html/os/application/libraries/App.php 254
ERROR - 2020-08-06 00:36:40 --> Severity: Notice --> Undefined variable: name2 /home/worksuite/public_html/os/application/libraries/App.php 254
ERROR - 2020-08-06 00:36:40 --> Severity: Notice --> Undefined variable: name2 /home/worksuite/public_html/os/application/libraries/App.php 254
ERROR - 2020-08-06 00:36:40 --> Severity: Notice --> Undefined variable: name2 /home/worksuite/public_html/os/application/libraries/App.php 254
ERROR - 2020-08-06 00:36:40 --> Severity: Notice --> Undefined variable: name2 /home/worksuite/public_html/os/application/libraries/App.php 254
ERROR - 2020-08-06 00:36:40 --> Severity: Notice --> Undefined variable: name2 /home/worksuite/public_html/os/application/libraries/App.php 254
ERROR - 2020-08-06 00:36:40 --> Severity: Notice --> Undefined variable: name2 /home/worksuite/public_html/os/application/libraries/App.php 254
ERROR - 2020-08-06 00:36:40 --> Severity: Notice --> Undefined variable: name2 /home/worksuite/public_html/os/application/libraries/App.php 254
ERROR - 2020-08-06 00:36:40 --> Severity: Notice --> Undefined variable: name2 /home/worksuite/public_html/os/application/libraries/App.php 254
ERROR - 2020-08-06 00:36:40 --> Severity: Notice --> Undefined variable: name2 /home/worksuite/public_html/os/application/libraries/App.php 254
ERROR - 2020-08-06 02:36:40 --> Severity: Notice --> Undefined variable: name2 /home/worksuite/public_html/os/application/libraries/App.php 254
ERROR - 2020-08-06 02:36:40 --> Severity: Notice --> Undefined variable: name2 /home/worksuite/public_html/os/application/libraries/App.php 254
ERROR - 2020-08-06 02:36:40 --> Severity: Notice --> Undefined variable: name2 /home/worksuite/public_html/os/application/libraries/App.php 254
ERROR - 2020-08-06 02:36:40 --> Severity: Notice --> Undefined variable: name2 /home/worksuite/public_html/os/application/libraries/App.php 254
ERROR - 2020-08-06 02:36:40 --> Severity: Notice --> Undefined variable: name2 /home/worksuite/public_html/os/application/libraries/App.php 254
ERROR - 2020-08-06 02:36:40 --> Severity: Notice --> Undefined variable: name2 /home/worksuite/public_html/os/application/libraries/App.php 254
ERROR - 2020-08-06 02:36:40 --> Severity: Notice --> Undefined variable: name2 /home/worksuite/public_html/os/application/libraries/App.php 254
ERROR - 2020-08-06 02:36:40 --> Severity: Notice --> Undefined variable: name2 /home/worksuite/public_html/os/application/libraries/App.php 254
ERROR - 2020-08-06 02:36:40 --> Severity: Notice --> Undefined variable: name2 /home/worksuite/public_html/os/application/libraries/App.php 254
ERROR - 2020-08-06 02:36:40 --> Severity: Notice --> Undefined variable: name2 /home/worksuite/public_html/os/application/libraries/App.php 254
ERROR - 2020-08-06 02:36:40 --> Severity: Notice --> Undefined variable: name2 /home/worksuite/public_html/os/application/libraries/App.php 254
ERROR - 2020-08-06 02:36:40 --> Severity: Notice --> Undefined index: last_upgrade_copy_data /home/worksuite/public_html/os/application/libraries/App.php 292
ERROR - 2020-08-06 02:36:40 --> Severity: Notice --> Undefined variable: name2 /home/worksuite/public_html/os/application/libraries/App.php 254
ERROR - 2020-08-06 02:36:40 --> Severity: Notice --> Undefined variable: name2 /home/worksuite/public_html/os/application/libraries/App.php 254
ERROR - 2020-08-06 02:36:40 --> Severity: Notice --> Undefined variable: name2 /home/worksuite/public_html/os/application/libraries/App.php 254
ERROR - 2020-08-06 02:36:40 --> Severity: Notice --> Undefined variable: name2 /home/worksuite/public_html/os/application/libraries/App.php 254
ERROR - 2020-08-06 02:36:40 --> Severity: Notice --> Undefined variable: name2 /home/worksuite/public_html/os/application/libraries/App.php 254
ERROR - 2020-08-06 02:36:40 --> Severity: Notice --> Undefined variable: name2 /home/worksuite/public_html/os/application/libraries/App.php 254
ERROR - 2020-08-06 02:36:40 --> Severity: Notice --> Undefined variable: name2 /home/worksuite/public_html/os/application/libraries/App.php 254
ERROR - 2020-08-06 02:36:40 --> Severity: Notice --> Undefined variable: name2 /home/worksuite/public_html/os/application/libraries/App.php 254
ERROR - 2020-08-06 02:36:40 --> Severity: Notice --> Undefined variable: name2 /home/worksuite/public_html/os/application/libraries/App.php 254
ERROR - 2020-08-06 02:36:40 --> Severity: Notice --> Undefined variable: name2 /home/worksuite/public_html/os/application/libraries/App.php 254
ERROR - 2020-08-06 02:36:40 --> Severity: Notice --> Undefined variable: name2 /home/worksuite/public_html/os/application/libraries/App.php 254
ERROR - 2020-08-06 02:36:40 --> Severity: Notice --> Undefined variable: name2 /home/worksuite/public_html/os/application/libraries/App.php 254
ERROR - 2020-08-06 02:36:40 --> Severity: Notice --> Undefined variable: name2 /home/worksuite/public_html/os/application/libraries/App.php 254
ERROR - 2020-08-06 02:36:40 --> Severity: Notice --> Undefined variable: name2 /home/worksuite/public_html/os/application/libraries/App.php 254
ERROR - 2020-08-06 02:36:40 --> Severity: Notice --> Undefined variable: name2 /home/worksuite/public_html/os/application/libraries/App.php 254
ERROR - 2020-08-06 02:36:40 --> Severity: Notice --> Undefined variable: name2 /home/worksuite/public_html/os/application/libraries/App.php 254
ERROR - 2020-08-06 02:36:40 --> Severity: Notice --> Undefined variable: name2 /home/worksuite/public_html/os/application/libraries/App.php 254
ERROR - 2020-08-06 02:36:40 --> Severity: Notice --> Undefined index: enable_google_picker /home/worksuite/public_html/os/application/libraries/App.php 292
ERROR - 2020-08-06 02:36:40 --> Severity: Notice --> Undefined variable: name2 /home/worksuite/public_html/os/application/libraries/App.php 254
ERROR - 2020-08-06 02:36:40 --> Severity: Notice --> Undefined variable: name2 /home/worksuite/public_html/os/application/libraries/App.php 254
ERROR - 2020-08-06 02:36:40 --> Severity: Notice --> Undefined variable: name2 /home/worksuite/public_html/os/application/libraries/App.php 254
ERROR - 2020-08-06 02:36:40 --> Severity: Notice --> Undefined variable: name2 /home/worksuite/public_html/os/application/libraries/App.php 254
ERROR - 2020-08-06 02:36:40 --> Severity: Notice --> Undefined variable: name2 /home/worksuite/public_html/os/application/libraries/App.php 254
ERROR - 2020-08-06 02:36:40 --> Severity: Notice --> Undefined variable: name2 /home/worksuite/public_html/os/application/libraries/App.php 254
ERROR - 2020-08-06 02:36:40 --> Severity: Notice --> Undefined variable: name2 /home/worksuite/public_html/os/application/libraries/App.php 254
ERROR - 2020-08-06 02:36:40 --> Severity: Notice --> Undefined variable: name2 /home/worksuite/public_html/os/application/libraries/App.php 254
ERROR - 2020-08-06 02:36:40 --> Severity: Notice --> Undefined variable: table_count /home/worksuite/public_html/os/application/models/Utilities_model.php 564
ERROR - 2020-08-06 02:36:40 --> Severity: Warning --> Division by zero /home/worksuite/public_html/os/application/models/Utilities_model.php 564
ERROR - 2020-08-06 02:36:40 --> Severity: error --> Exception: Modulo by zero /home/worksuite/public_html/os/application/models/Utilities_model.php 644
ERROR - 2020-08-06 02:36:40 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /home/worksuite/public_html/os/system/core/Exceptions.php:271) /home/worksuite/public_html/os/system/core/Common.php 570
ERROR - 2020-08-06 00:37:01 --> Severity: Notice --> Undefined index: current_company /home/worksuite/public_html/os/application/libraries/App.php 469
ERROR - 2020-08-06 00:37:01 --> Severity: Notice --> Undefined variable: name2 /home/worksuite/public_html/os/application/libraries/App.php 254
ERROR - 2020-08-06 00:37:01 --> Severity: Notice --> Undefined variable: name2 /home/worksuite/public_html/os/application/libraries/App.php 254
ERROR - 2020-08-06 00:37:01 --> Severity: Notice --> Undefined variable: name2 /home/worksuite/public_html/os/application/libraries/App.php 254
ERROR - 2020-08-06 00:37:01 --> Severity: Notice --> Undefined variable: name2 /home/worksuite/public_html/os/application/libraries/App.php 254
ERROR - 2020-08-06 00:37:01 --> Severity: Notice --> Undefined variable: name2 /home/worksuite/public_html/os/application/libraries/App.php 254
ERROR - 2020-08-06 00:37:01 --> Severity: Notice --> Undefined variable: name2 /home/worksuite/public_html/os/application/libraries/App.php 254
ERROR - 2020-08-06 00:37:01 --> Severity: Notice --> Undefined variable: name2 /home/worksuite/public_html/os/application/libraries/App.php 254
ERROR - 2020-08-06 00:37:01 --> Severity: Notice --> Undefined variable: name2 /home/worksuite/public_html/os/application/libraries/App.php 254
ERROR - 2020-08-06 00:37:01 --> Severity: Notice --> Undefined variable: name2 /home/worksuite/public_html/os/application/libraries/App.php 254
ERROR - 2020-08-06 00:37:01 --> Severity: Notice --> Undefined variable: name2 /home/worksuite/public_html/os/application/libraries/App.php 254
ERROR - 2020-08-06 02:37:01 --> Severity: Notice --> Undefined variable: name2 /home/worksuite/public_html/os/application/libraries/App.php 254
ERROR - 2020-08-06 02:37:01 --> Severity: Notice --> Undefined variable: name2 /home/worksuite/public_html/os/application/libraries/App.php 254
ERROR - 2020-08-06 02:37:01 --> Severity: Notice --> Undefined variable: name2 /home/worksuite/public_html/os/application/libraries/App.php 254
ERROR - 2020-08-06 02:37:01 --> Severity: Notice --> Undefined variable: name2 /home/worksuite/public_html/os/application/libraries/App.php 254
ERROR - 2020-08-06 02:37:01 --> Severity: Notice --> Undefined variable: name2 /home/worksuite/public_html/os/application/libraries/App.php 254
ERROR - 2020-08-06 02:37:01 --> Severity: Notice --> Undefined variable: name2 /home/worksuite/public_html/os/application/libraries/App.php 254
ERROR - 2020-08-06 02:37:01 --> Severity: Notice --> Undefined variable: name2 /home/worksuite/public_html/os/application/libraries/App.php 254
ERROR - 2020-08-06 02:37:01 --> Severity: Notice --> Undefined variable: name2 /home/worksuite/public_html/os/application/libraries/App.php 254
ERROR - 2020-08-06 02:37:01 --> Severity: Notice --> Undefined variable: name2 /home/worksuite/public_html/os/application/libraries/App.php 254
ERROR - 2020-08-06 02:37:01 --> Severity: Notice --> Undefined variable: name2 /home/worksuite/public_html/os/application/libraries/App.php 254
ERROR - 2020-08-06 02:37:01 --> Severity: Notice --> Undefined variable: name2 /home/worksuite/public_html/os/application/libraries/App.php 254
ERROR - 2020-08-06 02:37:01 --> Severity: Notice --> Undefined index: last_upgrade_copy_data /home/worksuite/public_html/os/application/libraries/App.php 292
ERROR - 2020-08-06 02:37:01 --> Severity: Notice --> Undefined variable: name2 /home/worksuite/public_html/os/application/libraries/App.php 254
ERROR - 2020-08-06 02:37:01 --> Severity: Notice --> Undefined variable: name2 /home/worksuite/public_html/os/application/libraries/App.php 254
ERROR - 2020-08-06 02:37:01 --> Severity: Notice --> Undefined variable: name2 /home/worksuite/public_html/os/application/libraries/App.php 254
ERROR - 2020-08-06 02:37:01 --> Severity: Notice --> Undefined variable: name2 /home/worksuite/public_html/os/application/libraries/App.php 254
ERROR - 2020-08-06 02:37:01 --> Severity: Notice --> Undefined variable: name2 /home/worksuite/public_html/os/application/libraries/App.php 254
ERROR - 2020-08-06 02:37:01 --> Severity: Notice --> Undefined variable: name2 /home/worksuite/public_html/os/application/libraries/App.php 254
ERROR - 2020-08-06 02:37:01 --> Severity: Notice --> Undefined variable: name2 /home/worksuite/public_html/os/application/libraries/App.php 254
ERROR - 2020-08-06 02:37:01 --> Severity: Notice --> Undefined variable: name2 /home/worksuite/public_html/os/application/libraries/App.php 254
ERROR - 2020-08-06 02:37:01 --> Severity: Notice --> Undefined variable: name2 /home/worksuite/public_html/os/application/libraries/App.php 254
ERROR - 2020-08-06 02:37:01 --> Severity: Notice --> Undefined variable: name2 /home/worksuite/public_html/os/application/libraries/App.php 254
ERROR - 2020-08-06 02:37:01 --> Severity: Notice --> Undefined variable: name2 /home/worksuite/public_html/os/application/libraries/App.php 254
ERROR - 2020-08-06 02:37:01 --> Severity: Notice --> Undefined variable: name2 /home/worksuite/public_html/os/application/libraries/App.php 254
ERROR - 2020-08-06 02:37:01 --> Severity: Notice --> Undefined variable: name2 /home/worksuite/public_html/os/application/libraries/App.php 254
ERROR - 2020-08-06 02:37:01 --> Severity: Notice --> Undefined variable: name2 /home/worksuite/public_html/os/application/libraries/App.php 254
ERROR - 2020-08-06 02:37:01 --> Severity: Notice --> Undefined variable: name2 /home/worksuite/public_html/os/application/libraries/App.php 254
ERROR - 2020-08-06 02:37:01 --> Severity: Notice --> Undefined variable: name2 /home/worksuite/public_html/os/application/libraries/App.php 254
ERROR - 2020-08-06 02:37:01 --> Severity: Notice --> Trying to get property 'staffid' of non-object /home/worksuite/public_html/os/application/libraries/mails/Staff_event_notification.php 27
ERROR - 2020-08-06 02:37:01 --> Severity: Notice --> Undefined variable: name2 /home/worksuite/public_html/os/application/libraries/App.php 254
ERROR - 2020-08-06 02:37:01 --> Severity: Notice --> Undefined index: enable_gdpr /home/worksuite/public_html/os/application/libraries/App.php 292
ERROR - 2020-08-06 02:37:01 --> Severity: Notice --> Undefined variable: name2 /home/worksuite/public_html/os/application/libraries/App.php 254
ERROR - 2020-08-06 02:37:01 --> Severity: Notice --> Undefined index: enable_gdpr /home/worksuite/public_html/os/application/libraries/App.php 292
ERROR - 2020-08-06 02:37:01 --> Severity: Notice --> Undefined variable: name2 /home/worksuite/public_html/os/application/libraries/App.php 254
ERROR - 2020-08-06 02:37:01 --> Severity: Notice --> Undefined index: enable_gdpr /home/worksuite/public_html/os/application/libraries/App.php 292
ERROR - 2020-08-06 02:37:01 --> Severity: Notice --> Undefined variable: name2 /home/worksuite/public_html/os/application/libraries/App.php 254
ERROR - 2020-08-06 02:37:01 --> Severity: Notice --> Undefined index: enable_gdpr /home/worksuite/public_html/os/application/libraries/App.php 292
ERROR - 2020-08-06 02:37:01 --> Severity: Notice --> Undefined variable: name2 /home/worksuite/public_html/os/application/libraries/App.php 254
ERROR - 2020-08-06 02:37:01 --> Severity: Notice --> Undefined index: enable_gdpr /home/worksuite/public_html/os/application/libraries/App.php 292
ERROR - 2020-08-06 02:37:01 --> Severity: Notice --> Undefined variable: name2 /home/worksuite/public_html/os/application/libraries/App.php 254
ERROR - 2020-08-06 02:37:01 --> Severity: Notice --> Undefined index: enable_gdpr /home/worksuite/public_html/os/application/libraries/App.php 292
ERROR - 2020-08-06 02:37:01 --> Severity: Notice --> Undefined variable: name2 /home/worksuite/public_html/os/application/libraries/App.php 254
ERROR - 2020-08-06 02:37:01 --> Severity: Notice --> Undefined variable: name2 /home/worksuite/public_html/os/application/libraries/App.php 254
ERROR - 2020-08-06 02:37:01 --> Severity: Notice --> Undefined variable: name2 /home/worksuite/public_html/os/application/libraries/App.php 254
ERROR - 2020-08-06 02:37:01 --> Severity: Notice --> Undefined variable: name2 /home/worksuite/public_html/os/application/libraries/App.php 254
ERROR - 2020-08-06 02:37:01 --> Severity: Notice --> Trying to get property 'email' of non-object /home/worksuite/public_html/os/application/libraries/mails/Staff_event_notification.php 30
ERROR - 2020-08-06 02:37:01 --> Severity: Notice --> Trying to get property 'staffid' of non-object /home/worksuite/public_html/os/application/libraries/mails/Staff_event_notification.php 31
ERROR - 2020-08-06 02:37:01 --> Severity: Notice --> Undefined variable: name2 /home/worksuite/public_html/os/application/libraries/App.php 254
ERROR - 2020-08-06 02:37:01 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near ')
ORDER BY `firstname` DESC' at line 3 - Invalid query: SELECT *
FROM `tblstaff`
WHERE `staffid` IN()
ORDER BY `firstname` DESC
ERROR - 2020-08-06 02:37:01 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /home/worksuite/public_html/os/system/core/Exceptions.php:271) /home/worksuite/public_html/os/system/core/Common.php 570
ERROR - 2020-08-06 00:38:02 --> Severity: Notice --> Undefined index: current_company /home/worksuite/public_html/os/application/libraries/App.php 469
ERROR - 2020-08-06 00:38:02 --> Severity: Notice --> Undefined variable: name2 /home/worksuite/public_html/os/application/libraries/App.php 254
ERROR - 2020-08-06 00:38:02 --> Severity: Notice --> Undefined variable: name2 /home/worksuite/public_html/os/application/libraries/App.php 254
ERROR - 2020-08-06 00:38:02 --> Severity: Notice --> Undefined variable: name2 /home/worksuite/public_html/os/application/libraries/App.php 254
ERROR - 2020-08-06 00:38:02 --> Severity: Notice --> Undefined variable: name2 /home/worksuite/public_html/os/application/libraries/App.php 254
ERROR - 2020-08-06 00:38:02 --> Severity: Notice --> Undefined variable: name2 /home/worksuite/public_html/os/application/libraries/App.php 254
ERROR - 2020-08-06 00:38:02 --> Severity: Notice --> Undefined variable: name2 /home/worksuite/public_html/os/application/libraries/App.php 254
ERROR - 2020-08-06 00:38:02 --> Severity: Notice --> Undefined variable: name2 /home/worksuite/public_html/os/application/libraries/App.php 254
ERROR - 2020-08-06 00:38:02 --> Severity: Notice --> Undefined variable: name2 /home/worksuite/public_html/os/application/libraries/App.php 254
ERROR - 2020-08-06 00:38:02 --> Severity: Notice --> Undefined variable: name2 /home/worksuite/public_html/os/application/libraries/App.php 254
ERROR - 2020-08-06 00:38:02 --> Severity: Notice --> Undefined variable: name2 /home/worksuite/public_html/os/application/libraries/App.php 254
ERROR - 2020-08-06 02:38:02 --> Severity: Notice --> Undefined variable: name2 /home/worksuite/public_html/os/application/libraries/App.php 254
ERROR - 2020-08-06 02:38:02 --> Severity: Notice --> Undefined variable: name2 /home/worksuite/public_html/os/application/libraries/App.php 254
ERROR - 2020-08-06 02:38:02 --> Severity: Notice --> Undefined variable: name2 /home/worksuite/public_html/os/application/libraries/App.php 254
ERROR - 2020-08-06 02:38:02 --> Severity: Notice --> Undefined variable: name2 /home/worksuite/public_html/os/application/libraries/App.php 254
ERROR - 2020-08-06 02:38:02 --> Severity: Notice --> Undefined variable: name2 /home/worksuite/public_html/os/application/libraries/App.php 254
ERROR - 2020-08-06 02:38:02 --> Severity: Notice --> Undefined variable: name2 /home/worksuite/public_html/os/application/libraries/App.php 254
ERROR - 2020-08-06 02:38:02 --> Severity: Notice --> Undefined variable: name2 /home/worksuite/public_html/os/application/libraries/App.php 254
ERROR - 2020-08-06 02:38:02 --> Severity: Notice --> Undefined variable: name2 /home/worksuite/public_html/os/application/libraries/App.php 254
ERROR - 2020-08-06 02:38:02 --> Severity: Notice --> Undefined variable: name2 /home/worksuite/public_html/os/application/libraries/App.php 254
ERROR - 2020-08-06 02:38:02 --> Severity: Notice --> Undefined variable: name2 /home/worksuite/public_html/os/application/libraries/App.php 254
ERROR - 2020-08-06 02:38:02 --> Severity: Notice --> Undefined variable: name2 /home/worksuite/public_html/os/application/libraries/App.php 254
ERROR - 2020-08-06 02:38:02 --> Severity: Notice --> Undefined index: last_upgrade_copy_data /home/worksuite/public_html/os/application/libraries/App.php 292
ERROR - 2020-08-06 02:38:02 --> Severity: Notice --> Undefined variable: name2 /home/worksuite/public_html/os/application/libraries/App.php 254
ERROR - 2020-08-06 02:38:02 --> Severity: Notice --> Undefined variable: name2 /home/worksuite/public_html/os/application/libraries/App.php 254
ERROR - 2020-08-06 02:38:02 --> Severity: Notice --> Undefined variable: name2 /home/worksuite/public_html/os/application/libraries/App.php 254
ERROR - 2020-08-06 02:38:02 --> Severity: Notice --> Undefined variable: name2 /home/worksuite/public_html/os/application/libraries/App.php 254
ERROR - 2020-08-06 02:38:02 --> Severity: Notice --> Undefined variable: name2 /home/worksuite/public_html/os/application/libraries/App.php 254
ERROR - 2020-08-06 02:38:02 --> Severity: Notice --> Undefined variable: name2 /home/worksuite/public_html/os/application/libraries/App.php 254
ERROR - 2020-08-06 02:38:02 --> Severity: Notice --> Undefined variable: name2 /home/worksuite/public_html/os/application/libraries/App.php 254
ERROR - 2020-08-06 02:38:02 --> Severity: Notice --> Undefined variable: name2 /home/worksuite/public_html/os/application/libraries/App.php 254
ERROR - 2020-08-06 02:38:02 --> Severity: Notice --> Undefined variable: name2 /home/worksuite/public_html/os/application/libraries/App.php 254
ERROR - 2020-08-06 02:38:02 --> Severity: Notice --> Undefined variable: name2 /home/worksuite/public_html/os/application/libraries/App.php 254
ERROR - 2020-08-06 02:38:02 --> Severity: Notice --> Undefined variable: name2 /home/worksuite/public_html/os/application/libraries/App.php 254
ERROR - 2020-08-06 02:38:02 --> Severity: Notice --> Undefined variable: name2 /home/worksuite/public_html/os/application/libraries/App.php 254
ERROR - 2020-08-06 02:38:02 --> Severity: Notice --> Undefined variable: name2 /home/worksuite/public_html/os/application/libraries/App.php 254
ERROR - 2020-08-06 02:38:02 --> Severity: Notice --> Undefined variable: name2 /home/worksuite/public_html/os/application/libraries/App.php 254
ERROR - 2020-08-06 02:38:02 --> Severity: Notice --> Undefined variable: name2 /home/worksuite/public_html/os/application/libraries/App.php 254
ERROR - 2020-08-06 02:38:02 --> Severity: Notice --> Undefined variable: name2 /home/worksuite/public_html/os/application/libraries/App.php 254
ERROR - 2020-08-06 02:38:02 --> Severity: Notice --> Trying to get property 'staffid' of non-object /home/worksuite/public_html/os/application/libraries/mails/Staff_event_notification.php 27
ERROR - 2020-08-06 02:38:02 --> Severity: Notice --> Undefined variable: name2 /home/worksuite/public_html/os/application/libraries/App.php 254
ERROR - 2020-08-06 02:38:02 --> Severity: Notice --> Undefined index: enable_gdpr /home/worksuite/public_html/os/application/libraries/App.php 292
ERROR - 2020-08-06 02:38:02 --> Severity: Notice --> Undefined variable: name2 /home/worksuite/public_html/os/application/libraries/App.php 254
ERROR - 2020-08-06 02:38:02 --> Severity: Notice --> Undefined index: enable_gdpr /home/worksuite/public_html/os/application/libraries/App.php 292
ERROR - 2020-08-06 02:38:02 --> Severity: Notice --> Undefined variable: name2 /home/worksuite/public_html/os/application/libraries/App.php 254
ERROR - 2020-08-06 02:38:02 --> Severity: Notice --> Undefined index: enable_gdpr /home/worksuite/public_html/os/application/libraries/App.php 292
ERROR - 2020-08-06 02:38:02 --> Severity: Notice --> Undefined variable: name2 /home/worksuite/public_html/os/application/libraries/App.php 254
ERROR - 2020-08-06 02:38:02 --> Severity: Notice --> Undefined index: enable_gdpr /home/worksuite/public_html/os/application/libraries/App.php 292
ERROR - 2020-08-06 02:38:02 --> Severity: Notice --> Undefined variable: name2 /home/worksuite/public_html/os/application/libraries/App.php 254
ERROR - 2020-08-06 02:38:02 --> Severity: Notice --> Undefined index: enable_gdpr /home/worksuite/public_html/os/application/libraries/App.php 292
ERROR - 2020-08-06 02:38:02 --> Severity: Notice --> Undefined variable: name2 /home/worksuite/public_html/os/application/libraries/App.php 254
ERROR - 2020-08-06 02:38:02 --> Severity: Notice --> Undefined index: enable_gdpr /home/worksuite/public_html/os/application/libraries/App.php 292
ERROR - 2020-08-06 02:38:02 --> Severity: Notice --> Undefined variable: name2 /home/worksuite/public_html/os/application/libraries/App.php 254
ERROR - 2020-08-06 02:38:02 --> Severity: Notice --> Undefined variable: name2 /home/worksuite/public_html/os/application/libraries/App.php 254
ERROR - 2020-08-06 02:38:02 --> Severity: Notice --> Undefined variable: name2 /home/worksuite/public_html/os/application/libraries/App.php 254
ERROR - 2020-08-06 02:38:02 --> Severity: Notice --> Undefined variable: name2 /home/worksuite/public_html/os/application/libraries/App.php 254
ERROR - 2020-08-06 02:38:02 --> Severity: Notice --> Trying to get property 'email' of non-object /home/worksuite/public_html/os/application/libraries/mails/Staff_event_notification.php 30
ERROR - 2020-08-06 02:38:02 --> Severity: Notice --> Trying to get property 'staffid' of non-object /home/worksuite/public_html/os/application/libraries/mails/Staff_event_notification.php 31
ERROR - 2020-08-06 02:38:02 --> Severity: Notice --> Undefined variable: name2 /home/worksuite/public_html/os/application/libraries/App.php 254
ERROR - 2020-08-06 02:38:02 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near ')
ORDER BY `firstname` DESC' at line 3 - Invalid query: SELECT *
FROM `tblstaff`
WHERE `staffid` IN()
ORDER BY `firstname` DESC
ERROR - 2020-08-06 02:38:02 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /home/worksuite/public_html/os/system/core/Exceptions.php:271) /home/worksuite/public_html/os/system/core/Common.php 570
ERROR - 2020-08-06 00:38:55 --> Severity: Notice --> Undefined variable: name2 /home/worksuite/public_html/os/application/libraries/App.php 254
ERROR - 2020-08-06 00:38:55 --> Severity: Notice --> Undefined variable: name2 /home/worksuite/public_html/os/application/libraries/App.php 254
ERROR - 2020-08-06 00:38:55 --> Severity: Notice --> Undefined variable: name2 /home/worksuite/public_html/os/application/libraries/App.php 254
ERROR - 2020-08-06 00:38:55 --> Severity: Notice --> Undefined variable: name2 /home/worksuite/public_html/os/application/libraries/App.php 254
ERROR - 2020-08-06 00:38:55 --> Severity: Notice --> Undefined variable: name2 /home/worksuite/public_html/os/application/libraries/App.php 254
ERROR - 2020-08-06 00:38:55 --> Severity: Notice --> Undefined variable: name2 /home/worksuite/public_html/os/application/libraries/App.php 254
ERROR - 2020-08-06 00:38:55 --> Severity: Notice --> Undefined variable: name2 /home/worksuite/public_html/os/application/libraries/App.php 254
ERROR - 2020-08-06 00:38:55 --> Severity: Notice --> Undefined variable: name2 /home/worksuite/public_html/os/application/libraries/App.php 254
ERROR - 2020-08-06 00:38:55 --> Severity: Notice --> Undefined variable: name2 /home/worksuite/public_html/os/application/libraries/App.php 254
ERROR - 2020-08-06 00:38:55 --> Severity: Notice --> Undefined variable: name2 /home/worksuite/public_html/os/application/libraries/App.php 254
ERROR - 2020-08-06 02:38:55 --> Severity: Notice --> Undefined variable: name2 /home/worksuite/public_html/os/application/libraries/App.php 254
ERROR - 2020-08-06 02:38:55 --> Severity: Notice --> Undefined variable: name2 /home/worksuite/public_html/os/application/libraries/App.php 254
ERROR - 2020-08-06 02:38:55 --> Severity: Notice --> Undefined variable: name2 /home/worksuite/public_html/os/application/libraries/App.php 254
ERROR - 2020-08-06 02:38:55 --> Severity: Notice --> Undefined variable: name2 /home/worksuite/public_html/os/application/libraries/App.php 254
ERROR - 2020-08-06 02:38:55 --> Severity: Notice --> Undefined variable: name2 /home/worksuite/public_html/os/application/libraries/App.php 254
ERROR - 2020-08-06 02:38:55 --> Severity: Notice --> Undefined variable: name2 /home/worksuite/public_html/os/application/libraries/App.php 254
ERROR - 2020-08-06 02:38:55 --> Severity: Notice --> Undefined variable: name2 /home/worksuite/public_html/os/application/libraries/App.php 254
ERROR - 2020-08-06 02:38:55 --> Severity: Notice --> Undefined variable: name2 /home/worksuite/public_html/os/application/libraries/App.php 254
ERROR - 2020-08-06 02:38:55 --> Severity: Notice --> Undefined variable: name2 /home/worksuite/public_html/os/application/libraries/App.php 254
ERROR - 2020-08-06 02:38:55 --> Severity: Notice --> Undefined variable: name2 /home/worksuite/public_html/os/application/libraries/App.php 254
ERROR - 2020-08-06 02:38:55 --> Severity: Notice --> Undefined variable: name2 /home/worksuite/public_html/os/application/libraries/App.php 254
ERROR - 2020-08-06 02:38:55 --> Severity: Notice --> Undefined index: last_upgrade_copy_data /home/worksuite/public_html/os/application/libraries/App.php 292
ERROR - 2020-08-06 02:38:55 --> Severity: Notice --> Undefined variable: name2 /home/worksuite/public_html/os/application/libraries/App.php 254
ERROR - 2020-08-06 02:38:55 --> Severity: Notice --> Undefined variable: name2 /home/worksuite/public_html/os/application/libraries/App.php 254
ERROR - 2020-08-06 02:38:55 --> Severity: Notice --> Undefined variable: name2 /home/worksuite/public_html/os/application/libraries/App.php 254
ERROR - 2020-08-06 02:38:55 --> Severity: Notice --> Undefined variable: name2 /home/worksuite/public_html/os/application/libraries/App.php 254
ERROR - 2020-08-06 02:38:55 --> Severity: Notice --> Undefined variable: name2 /home/worksuite/public_html/os/application/libraries/App.php 254
ERROR - 2020-08-06 02:38:55 --> Severity: Notice --> Undefined variable: name2 /home/worksuite/public_html/os/application/libraries/App.php 254
ERROR - 2020-08-06 02:38:55 --> Severity: Notice --> Undefined variable: name2 /home/worksuite/public_html/os/application/libraries/App.php 254
ERROR - 2020-08-06 02:38:55 --> Severity: Notice --> Undefined variable: name2 /home/worksuite/public_html/os/application/libraries/App.php 254
ERROR - 2020-08-06 02:38:55 --> Severity: Notice --> Undefined variable: name2 /home/worksuite/public_html/os/application/libraries/App.php 254
ERROR - 2020-08-06 02:38:55 --> Severity: Notice --> Undefined variable: name2 /home/worksuite/public_html/os/application/libraries/App.php 254
ERROR - 2020-08-06 02:38:55 --> Severity: Notice --> Undefined variable: name2 /home/worksuite/public_html/os/application/libraries/App.php 254
ERROR - 2020-08-06 02:38:55 --> Severity: Notice --> Undefined variable: name2 /home/worksuite/public_html/os/application/libraries/App.php 254
ERROR - 2020-08-06 02:38:55 --> Severity: Notice --> Undefined variable: name2 /home/worksuite/public_html/os/application/libraries/App.php 254
ERROR - 2020-08-06 02:38:55 --> Severity: Notice --> Undefined variable: name2 /home/worksuite/public_html/os/application/libraries/App.php 254
ERROR - 2020-08-06 02:38:55 --> Severity: Notice --> Undefined variable: name2 /home/worksuite/public_html/os/application/libraries/App.php 254
ERROR - 2020-08-06 02:38:55 --> Severity: Notice --> Undefined variable: name2 /home/worksuite/public_html/os/application/libraries/App.php 254
ERROR - 2020-08-06 02:38:55 --> Severity: Notice --> Undefined variable: name2 /home/worksuite/public_html/os/application/libraries/App.php 254
ERROR - 2020-08-06 02:38:55 --> Severity: Notice --> Undefined index: enable_google_picker /home/worksuite/public_html/os/application/libraries/App.php 292
ERROR - 2020-08-06 02:38:55 --> Severity: Notice --> Undefined variable: name2 /home/worksuite/public_html/os/application/libraries/App.php 254
ERROR - 2020-08-06 02:38:55 --> Severity: Notice --> Undefined variable: name2 /home/worksuite/public_html/os/application/libraries/App.php 254
ERROR - 2020-08-06 02:38:55 --> Severity: Notice --> Undefined variable: name2 /home/worksuite/public_html/os/application/libraries/App.php 254
ERROR - 2020-08-06 02:38:55 --> Severity: Notice --> Undefined variable: name2 /home/worksuite/public_html/os/application/libraries/App.php 254
ERROR - 2020-08-06 02:38:55 --> Severity: Notice --> Undefined variable: name2 /home/worksuite/public_html/os/application/libraries/App.php 254
ERROR - 2020-08-06 02:38:55 --> Severity: Notice --> Undefined variable: name2 /home/worksuite/public_html/os/application/libraries/App.php 254
ERROR - 2020-08-06 02:38:55 --> Severity: Notice --> Undefined variable: name2 /home/worksuite/public_html/os/application/libraries/App.php 254
ERROR - 2020-08-06 02:38:55 --> Severity: Notice --> Undefined variable: name2 /home/worksuite/public_html/os/application/libraries/App.php 254
ERROR - 2020-08-06 00:39:01 --> Severity: Notice --> Undefined index: current_company /home/worksuite/public_html/os/application/libraries/App.php 469
ERROR - 2020-08-06 00:39:01 --> Severity: Notice --> Undefined variable: name2 /home/worksuite/public_html/os/application/libraries/App.php 254
ERROR - 2020-08-06 00:39:01 --> Severity: Notice --> Undefined variable: name2 /home/worksuite/public_html/os/application/libraries/App.php 254
ERROR - 2020-08-06 00:39:01 --> Severity: Notice --> Undefined variable: name2 /home/worksuite/public_html/os/application/libraries/App.php 254
ERROR - 2020-08-06 00:39:01 --> Severity: Notice --> Undefined variable: name2 /home/worksuite/public_html/os/application/libraries/App.php 254
ERROR - 2020-08-06 00:39:01 --> Severity: Notice --> Undefined variable: name2 /home/worksuite/public_html/os/application/libraries/App.php 254
ERROR - 2020-08-06 00:39:01 --> Severity: Notice --> Undefined variable: name2 /home/worksuite/public_html/os/application/libraries/App.php 254
ERROR - 2020-08-06 00:39:01 --> Severity: Notice --> Undefined variable: name2 /home/worksuite/public_html/os/application/libraries/App.php 254
ERROR - 2020-08-06 00:39:01 --> Severity: Notice --> Undefined variable: name2 /home/worksuite/public_html/os/application/libraries/App.php 254
ERROR - 2020-08-06 00:39:01 --> Severity: Notice --> Undefined variable: name2 /home/worksuite/public_html/os/application/libraries/App.php 254
ERROR - 2020-08-06 00:39:01 --> Severity: Notice --> Undefined variable: name2 /home/worksuite/public_html/os/application/libraries/App.php 254
ERROR - 2020-08-06 02:39:01 --> Severity: Notice --> Undefined variable: name2 /home/worksuite/public_html/os/application/libraries/App.php 254
ERROR - 2020-08-06 02:39:01 --> Severity: Notice --> Undefined variable: name2 /home/worksuite/public_html/os/application/libraries/App.php 254
ERROR - 2020-08-06 02:39:01 --> Severity: Notice --> Undefined variable: name2 /home/worksuite/public_html/os/application/libraries/App.php 254
ERROR - 2020-08-06 02:39:01 --> Severity: Notice --> Undefined variable: name2 /home/worksuite/public_html/os/application/libraries/App.php 254
ERROR - 2020-08-06 02:39:01 --> Severity: Notice --> Undefined variable: name2 /home/worksuite/public_html/os/application/libraries/App.php 254
ERROR - 2020-08-06 02:39:01 --> Severity: Notice --> Undefined variable: name2 /home/worksuite/public_html/os/application/libraries/App.php 254
ERROR - 2020-08-06 02:39:01 --> Severity: Notice --> Undefined variable: name2 /home/worksuite/public_html/os/application/libraries/App.php 254
ERROR - 2020-08-06 02:39:01 --> Severity: Notice --> Undefined variable: name2 /home/worksuite/public_html/os/application/libraries/App.php 254
ERROR - 2020-08-06 02:39:01 --> Severity: Notice --> Undefined variable: name2 /home/worksuite/public_html/os/application/libraries/App.php 254
ERROR - 2020-08-06 02:39:01 --> Severity: Notice --> Undefined variable: name2 /home/worksuite/public_html/os/application/libraries/App.php 254
ERROR - 2020-08-06 02:39:01 --> Severity: Notice --> Undefined variable: name2 /home/worksuite/public_html/os/application/libraries/App.php 254
ERROR - 2020-08-06 02:39:01 --> Severity: Notice --> Undefined index: last_upgrade_copy_data /home/worksuite/public_html/os/application/libraries/App.php 292
ERROR - 2020-08-06 02:39:01 --> Severity: Notice --> Undefined variable: name2 /home/worksuite/public_html/os/application/libraries/App.php 254
ERROR - 2020-08-06 02:39:01 --> Severity: Notice --> Undefined variable: name2 /home/worksuite/public_html/os/application/libraries/App.php 254
ERROR - 2020-08-06 02:39:01 --> Severity: Notice --> Undefined variable: name2 /home/worksuite/public_html/os/application/libraries/App.php 254
ERROR - 2020-08-06 02:39:01 --> Severity: Notice --> Undefined variable: name2 /home/worksuite/public_html/os/application/libraries/App.php 254
ERROR - 2020-08-06 02:39:01 --> Severity: Notice --> Undefined variable: name2 /home/worksuite/public_html/os/application/libraries/App.php 254
ERROR - 2020-08-06 02:39:01 --> Severity: Notice --> Undefined variable: name2 /home/worksuite/public_html/os/application/libraries/App.php 254
ERROR - 2020-08-06 02:39:01 --> Severity: Notice --> Undefined variable: name2 /home/worksuite/public_html/os/application/libraries/App.php 254
ERROR - 2020-08-06 02:39:01 --> Severity: Notice --> Undefined variable: name2 /home/worksuite/public_html/os/application/libraries/App.php 254
ERROR - 2020-08-06 02:39:01 --> Severity: Notice --> Undefined variable: name2 /home/worksuite/public_html/os/application/libraries/App.php 254
ERROR - 2020-08-06 02:39:01 --> Severity: Notice --> Undefined variable: name2 /home/worksuite/public_html/os/application/libraries/App.php 254
ERROR - 2020-08-06 02:39:01 --> Severity: Notice --> Undefined variable: name2 /home/worksuite/public_html/os/application/libraries/App.php 254
ERROR - 2020-08-06 02:39:01 --> Severity: Notice --> Undefined variable: name2 /home/worksuite/public_html/os/application/libraries/App.php 254
ERROR - 2020-08-06 02:39:01 --> Severity: Notice --> Undefined variable: name2 /home/worksuite/public_html/os/application/libraries/App.php 254
ERROR - 2020-08-06 02:39:01 --> Severity: Notice --> Undefined variable: name2 /home/worksuite/public_html/os/application/libraries/App.php 254
ERROR - 2020-08-06 02:39:01 --> Severity: Notice --> Undefined variable: name2 /home/worksuite/public_html/os/application/libraries/App.php 254
ERROR - 2020-08-06 02:39:01 --> Severity: Notice --> Undefined variable: name2 /home/worksuite/public_html/os/application/libraries/App.php 254
ERROR - 2020-08-06 02:39:01 --> Severity: Notice --> Trying to get property 'staffid' of non-object /home/worksuite/public_html/os/application/libraries/mails/Staff_event_notification.php 27
ERROR - 2020-08-06 02:39:01 --> Severity: Notice --> Undefined variable: name2 /home/worksuite/public_html/os/application/libraries/App.php 254
ERROR - 2020-08-06 02:39:01 --> Severity: Notice --> Undefined index: enable_gdpr /home/worksuite/public_html/os/application/libraries/App.php 292
ERROR - 2020-08-06 02:39:01 --> Severity: Notice --> Undefined variable: name2 /home/worksuite/public_html/os/application/libraries/App.php 254
ERROR - 2020-08-06 02:39:01 --> Severity: Notice --> Undefined index: enable_gdpr /home/worksuite/public_html/os/application/libraries/App.php 292
ERROR - 2020-08-06 02:39:01 --> Severity: Notice --> Undefined variable: name2 /home/worksuite/public_html/os/application/libraries/App.php 254
ERROR - 2020-08-06 02:39:01 --> Severity: Notice --> Undefined index: enable_gdpr /home/worksuite/public_html/os/application/libraries/App.php 292
ERROR - 2020-08-06 02:39:01 --> Severity: Notice --> Undefined variable: name2 /home/worksuite/public_html/os/application/libraries/App.php 254
ERROR - 2020-08-06 02:39:01 --> Severity: Notice --> Undefined index: enable_gdpr /home/worksuite/public_html/os/application/libraries/App.php 292
ERROR - 2020-08-06 02:39:01 --> Severity: Notice --> Undefined variable: name2 /home/worksuite/public_html/os/application/libraries/App.php 254
ERROR - 2020-08-06 02:39:01 --> Severity: Notice --> Undefined index: enable_gdpr /home/worksuite/public_html/os/application/libraries/App.php 292
ERROR - 2020-08-06 02:39:01 --> Severity: Notice --> Undefined variable: name2 /home/worksuite/public_html/os/application/libraries/App.php 254
ERROR - 2020-08-06 02:39:01 --> Severity: Notice --> Undefined index: enable_gdpr /home/worksuite/public_html/os/application/libraries/App.php 292
ERROR - 2020-08-06 02:39:01 --> Severity: Notice --> Undefined variable: name2 /home/worksuite/public_html/os/application/libraries/App.php 254
ERROR - 2020-08-06 02:39:01 --> Severity: Notice --> Undefined variable: name2 /home/worksuite/public_html/os/application/libraries/App.php 254
ERROR - 2020-08-06 02:39:01 --> Severity: Notice --> Undefined variable: name2 /home/worksuite/public_html/os/application/libraries/App.php 254
ERROR - 2020-08-06 02:39:01 --> Severity: Notice --> Undefined variable: name2 /home/worksuite/public_html/os/application/libraries/App.php 254
ERROR - 2020-08-06 02:39:01 --> Severity: Notice --> Trying to get property 'email' of non-object /home/worksuite/public_html/os/application/libraries/mails/Staff_event_notification.php 30
ERROR - 2020-08-06 02:39:01 --> Severity: Notice --> Trying to get property 'staffid' of non-object /home/worksuite/public_html/os/application/libraries/mails/Staff_event_notification.php 31
ERROR - 2020-08-06 02:39:01 --> Severity: Notice --> Undefined variable: name2 /home/worksuite/public_html/os/application/libraries/App.php 254
ERROR - 2020-08-06 02:39:01 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near ')
ORDER BY `firstname` DESC' at line 3 - Invalid query: SELECT *
FROM `tblstaff`
WHERE `staffid` IN()
ORDER BY `firstname` DESC
ERROR - 2020-08-06 02:39:01 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /home/worksuite/public_html/os/system/core/Exceptions.php:271) /home/worksuite/public_html/os/system/core/Common.php 570
ERROR - 2020-08-06 02:40:01 --> Severity: Notice --> Trying to get property 'staffid' of non-object /home/worksuite/public_html/os/application/libraries/mails/Staff_event_notification.php 27
ERROR - 2020-08-06 02:40:01 --> Severity: Notice --> Trying to get property 'email' of non-object /home/worksuite/public_html/os/application/libraries/mails/Staff_event_notification.php 30
ERROR - 2020-08-06 02:40:01 --> Severity: Notice --> Trying to get property 'staffid' of non-object /home/worksuite/public_html/os/application/libraries/mails/Staff_event_notification.php 31
ERROR - 2020-08-06 02:40:01 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near ')
ORDER BY `firstname` DESC' at line 3 - Invalid query: SELECT *
FROM `tblstaff`
WHERE `staffid` IN()
ORDER BY `firstname` DESC
ERROR - 2020-08-06 02:40:01 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /home/worksuite/public_html/os/system/core/Exceptions.php:271) /home/worksuite/public_html/os/system/core/Common.php 570
ERROR - 2020-08-06 00:40:11 --> Query error: Unknown column 'col_41' in 'field list' - Invalid query: INSERT INTO `tbl_sub_options_1` (`col_1`, `col_2`, `col_3`, `col_4`, `col_5`, `col_6`, `col_7`, `col_8`, `col_9`, `col_10`, `col_11`, `col_12`, `col_13`, `col_14`, `col_15`, `col_16`, `col_17`, `col_18`, `col_19`, `col_20`, `col_21`, `col_22`, `col_23`, `col_24`, `col_25`, `col_26`, `col_27`, `col_28`, `col_29`, `col_30`, `col_31`, `col_32`, `col_33`, `col_34`, `col_35`, `col_36`, `col_37`, `col_38`, `col_39`, `col_40`, `col_41`, `col_42`, `col_43`, `col_44`, `col_45`, `col_46`, `col_47`, `col_48`, `col_49`, `company_username`) VALUES ('{\"id\":\"1\",\"name\":\"dateformat\",\"value\":\"Y-m-d|%Y-%m-%d\",\"autoload\":\"1\",\"company_username\":\"\"}', '{\"id\":\"2\",\"name\":\"companyname\",\"value\":\"Worksuite\",\"autoload\":\"1\",\"company_username\":\"\"}', '{\"id\":\"3\",\"name\":\"services\",\"value\":\"1\",\"autoload\":\"1\",\"company_username\":\"tbga\"}', '{\"id\":\"4\",\"name\":\"maximum_allowed_ticket_attachments\",\"value\":\"4\",\"autoload\":\"1\",\"company_username\":\"tbga\"}', '{\"id\":\"5\",\"name\":\"ticket_attachments_file_extensions\",\"value\":\".jpg,.png,.pdf,.doc,.zip,.rar\",\"autoload\":\"1\",\"company_username\":\"tbga\"}', '{\"id\":\"6\",\"name\":\"staff_access_only_assigned_departments\",\"value\":\"1\",\"autoload\":\"1\",\"company_username\":\"tbga\"}', '{\"id\":\"7\",\"name\":\"use_knowledge_base\",\"value\":\"1\",\"autoload\":\"1\",\"company_username\":\"tbga\"}', '{\"id\":\"8\",\"name\":\"smtp_email\",\"value\":\"hello@worksuite.app\",\"autoload\":\"1\",\"company_username\":\"\"}', '{\"id\":\"9\",\"name\":\"smtp_password\",\"value\":\"19313919b16b1f1bab4ec01c234b2e858232f4fa42508753102260c4c7190cbcca0506c511f6f9d4427cedd155b9d9918c1211f55ed3ad53a6f7c12dfc60b3d5w84\\/DUPctDbcNwfeGwlPY4Ie+X58ZUzfpkD2gPPRMG1mfNazsQuwSGcVy2Hrk5UTGbABF6iipvg3JGzJdutRQ8DFWTPL9xt1BTTS24xh\\/TWJA62GJsVFIeWJ5o+ij0xZ2nLND0YywPoDWkhq0iZeIjL31ZTpB0Xz4\\/wYS5YRSjv3YoBdzLn+5YHYfKYA7iJ9CKKHU0VI16Xp6Kdcv0\\/r2gaGrzWlc7hxsNOnkwQPGeFz5c9ml5e6TdG6ge7Ri0jI\",\"autoload\":\"1\",\"company_username\":\"\"}', '{\"id\":\"10\",\"name\":\"company_info_format\",\"value\":\"{company_name}<br \\/>\\r\\n{address}<br \\/>\\r\\n{city} {state}<br \\/>\\r\\n{country_code} {zip_code}<br \\/>\\r\\n{vat_number_with_label}\",\"autoload\":\"0\",\"company_username\":\"\"}', '{\"id\":\"11\",\"name\":\"smtp_port\",\"value\":\"mail.worksuite.app\",\"autoload\":\"1\",\"company_username\":\"\"}', '{\"id\":\"12\",\"name\":\"smtp_host\",\"value\":\"mail.worksuite.app\",\"autoload\":\"1\",\"company_username\":\"\"}', '{\"id\":\"13\",\"name\":\"smtp_email_charset\",\"value\":\"utf-8\",\"autoload\":\"1\",\"company_username\":\"\"}', '{\"id\":\"14\",\"name\":\"default_timezone\",\"value\":\"Africa\\/Harare\",\"autoload\":\"1\",\"company_username\":\"\"}', '{\"id\":\"15\",\"name\":\"clients_default_theme\",\"value\":\"perfex\",\"autoload\":\"1\",\"company_username\":\"\"}', '{\"id\":\"16\",\"name\":\"company_logo\",\"value\":\"logo.png\",\"autoload\":\"1\",\"company_username\":\"\"}', '{\"id\":\"17\",\"name\":\"tables_pagination_limit\",\"value\":\"25\",\"autoload\":\"1\",\"company_username\":\"\"}', '{\"id\":\"18\",\"name\":\"main_domain\",\"value\":\"\",\"autoload\":\"1\",\"company_username\":\"\"}', '{\"id\":\"19\",\"name\":\"allow_registration\",\"value\":\"1\",\"autoload\":\"1\",\"company_username\":\"tbga\"}', '{\"id\":\"20\",\"name\":\"knowledge_base_without_registration\",\"value\":\"1\",\"autoload\":\"1\",\"company_username\":\"tbga\"}', '{\"id\":\"21\",\"name\":\"email_signature\",\"value\":\"Team Worksuite\",\"autoload\":\"1\",\"company_username\":\"tbga\"}', '{\"id\":\"22\",\"name\":\"default_staff_role\",\"value\":\"1\",\"autoload\":\"1\",\"company_username\":\"\"}', '{\"id\":\"23\",\"name\":\"newsfeed_maximum_files_upload\",\"value\":\"10\",\"autoload\":\"1\",\"company_username\":\"\"}', '{\"id\":\"24\",\"name\":\"contract_expiration_before\",\"value\":\"4\",\"autoload\":\"1\",\"company_username\":\"tbga\"}', '{\"id\":\"25\",\"name\":\"invoice_prefix\",\"value\":\"INV-\",\"autoload\":\"1\",\"company_username\":\"\"}', '{\"id\":\"26\",\"name\":\"decimal_separator\",\"value\":\".\",\"autoload\":\"1\",\"company_username\":\"\"}', '{\"id\":\"27\",\"name\":\"thousand_separator\",\"value\":\",\",\"autoload\":\"1\",\"company_username\":\"\"}', '{\"id\":\"28\",\"name\":\"invoice_company_name\",\"value\":\"Worksuite Inc\",\"autoload\":\"1\",\"company_username\":\"tbga\"}', '{\"id\":\"29\",\"name\":\"invoice_company_address\",\"value\":\"7 Frank Johnson Ave, Eastlea.\",\"autoload\":\"1\",\"company_username\":\"tbga\"}', '{\"id\":\"30\",\"name\":\"invoice_company_city\",\"value\":\"Harare\",\"autoload\":\"1\",\"company_username\":\"tbga\"}', '{\"id\":\"31\",\"name\":\"invoice_company_country_code\",\"value\":\"+263\",\"autoload\":\"1\",\"company_username\":\"tbga\"}', '{\"id\":\"32\",\"name\":\"invoice_company_postal_code\",\"value\":\"0000\",\"autoload\":\"1\",\"company_username\":\"tbga\"}', '{\"id\":\"33\",\"name\":\"invoice_company_phonenumber\",\"value\":\"773502063\",\"autoload\":\"1\",\"company_username\":\"tbga\"}', '{\"id\":\"34\",\"name\":\"view_invoice_only_logged_in\",\"value\":\"0\",\"autoload\":\"1\",\"company_username\":\"\"}', '{\"id\":\"35\",\"name\":\"invoice_number_format\",\"value\":\"1\",\"autoload\":\"1\",\"company_username\":\"\"}', '{\"id\":\"36\",\"name\":\"next_invoice_number\",\"value\":\"3\",\"autoload\":\"0\",\"company_username\":\"\"}', '{\"id\":\"37\",\"name\":\"active_language\",\"value\":\"english\",\"autoload\":\"1\",\"company_username\":\"\"}', '{\"id\":\"38\",\"name\":\"invoice_number_decrement_on_delete\",\"value\":\"1\",\"autoload\":\"1\",\"company_username\":\"\"}', '{\"id\":\"39\",\"name\":\"automatically_send_invoice_overdue_reminder_after\",\"value\":\"1\",\"autoload\":\"1\",\"company_username\":\"\"}', '{\"id\":\"40\",\"name\":\"automatically_resend_invoice_overdue_reminder_after\",\"value\":\"3\",\"autoload\":\"1\",\"company_username\":\"\"}', '{\"id\":\"41\",\"name\":\"expenses_auto_operations_hour\",\"value\":\"21\",\"autoload\":\"1\",\"company_username\":\"tbga\"}', '{\"id\":\"42\",\"name\":\"delete_only_on_last_invoice\",\"value\":\"1\",\"autoload\":\"1\",\"company_username\":\"\"}', '{\"id\":\"43\",\"name\":\"delete_only_on_last_estimate\",\"value\":\"1\",\"autoload\":\"1\",\"company_username\":\"\"}', '{\"id\":\"44\",\"name\":\"create_invoice_from_recurring_only_on_paid_invoices\",\"value\":\"0\",\"autoload\":\"1\",\"company_username\":\"\"}', '{\"id\":\"45\",\"name\":\"allow_payment_amount_to_be_modified\",\"value\":\"0\",\"autoload\":\"1\",\"company_username\":\"\"}', '{\"id\":\"46\",\"name\":\"rtl_support_client\",\"value\":\"0\",\"autoload\":\"1\",\"company_username\":\"\"}', '{\"id\":\"47\",\"name\":\"limit_top_search_bar_results_to\",\"value\":\"10\",\"autoload\":\"1\",\"company_username\":\"\"}', '{\"id\":\"48\",\"name\":\"estimate_prefix\",\"value\":\"EST-\",\"autoload\":\"1\",\"company_username\":\"\"}', '{\"id\":\"49\",\"name\":\"next_estimate_number\",\"value\":\"2\",\"autoload\":\"0\",\"company_username\":\"\"}', 'basic_smith')
ERROR - 2020-08-06 02:41:01 --> Severity: Notice --> Trying to get property 'staffid' of non-object /home/worksuite/public_html/os/application/libraries/mails/Staff_event_notification.php 27
ERROR - 2020-08-06 02:41:01 --> Severity: Notice --> Trying to get property 'email' of non-object /home/worksuite/public_html/os/application/libraries/mails/Staff_event_notification.php 30
ERROR - 2020-08-06 02:41:01 --> Severity: Notice --> Trying to get property 'staffid' of non-object /home/worksuite/public_html/os/application/libraries/mails/Staff_event_notification.php 31
ERROR - 2020-08-06 02:41:01 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near ')
ORDER BY `firstname` DESC' at line 3 - Invalid query: SELECT *
FROM `tblstaff`
WHERE `staffid` IN()
ORDER BY `firstname` DESC
ERROR - 2020-08-06 02:41:01 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /home/worksuite/public_html/os/system/core/Exceptions.php:271) /home/worksuite/public_html/os/system/core/Common.php 570
ERROR - 2020-08-06 02:42:02 --> Severity: Notice --> Trying to get property 'staffid' of non-object /home/worksuite/public_html/os/application/libraries/mails/Staff_event_notification.php 27
ERROR - 2020-08-06 02:42:02 --> Severity: Notice --> Trying to get property 'email' of non-object /home/worksuite/public_html/os/application/libraries/mails/Staff_event_notification.php 30
ERROR - 2020-08-06 02:42:02 --> Severity: Notice --> Trying to get property 'staffid' of non-object /home/worksuite/public_html/os/application/libraries/mails/Staff_event_notification.php 31
ERROR - 2020-08-06 02:42:02 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near ')
ORDER BY `firstname` DESC' at line 3 - Invalid query: SELECT *
FROM `tblstaff`
WHERE `staffid` IN()
ORDER BY `firstname` DESC
ERROR - 2020-08-06 02:42:02 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /home/worksuite/public_html/os/system/core/Exceptions.php:271) /home/worksuite/public_html/os/system/core/Common.php 570
ERROR - 2020-08-06 02:43:02 --> Severity: Notice --> Trying to get property 'staffid' of non-object /home/worksuite/public_html/os/application/libraries/mails/Staff_event_notification.php 27
ERROR - 2020-08-06 02:43:02 --> Severity: Notice --> Trying to get property 'email' of non-object /home/worksuite/public_html/os/application/libraries/mails/Staff_event_notification.php 30
ERROR - 2020-08-06 02:43:02 --> Severity: Notice --> Trying to get property 'staffid' of non-object /home/worksuite/public_html/os/application/libraries/mails/Staff_event_notification.php 31
ERROR - 2020-08-06 02:43:02 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near ')
ORDER BY `firstname` DESC' at line 3 - Invalid query: SELECT *
FROM `tblstaff`
WHERE `staffid` IN()
ORDER BY `firstname` DESC
ERROR - 2020-08-06 02:43:02 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /home/worksuite/public_html/os/system/core/Exceptions.php:271) /home/worksuite/public_html/os/system/core/Common.php 570
ERROR - 2020-08-06 02:43:45 --> Severity: Warning --> A non-numeric value encountered /home/worksuite/public_html/os/application/helpers/settings_helper.php 103
ERROR - 2020-08-06 02:43:45 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '1) VALUES ('{\"name\":\"ticket_import_reply_only\",\"value\":\"1\",\"autoload\":' at line 1 - Invalid query: INSERT INTO `tbl_sub_options_13` (1) VALUES ('{\"name\":\"ticket_import_reply_only\",\"value\":\"1\",\"autoload\":1}')
ERROR - 2020-08-06 02:43:45 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /home/worksuite/public_html/os/system/core/Exceptions.php:271) /home/worksuite/public_html/os/system/core/Common.php 570
ERROR - 2020-08-06 02:44:01 --> Severity: Notice --> Trying to get property 'staffid' of non-object /home/worksuite/public_html/os/application/libraries/mails/Staff_event_notification.php 27
ERROR - 2020-08-06 02:44:01 --> Severity: Notice --> Trying to get property 'email' of non-object /home/worksuite/public_html/os/application/libraries/mails/Staff_event_notification.php 30
ERROR - 2020-08-06 02:44:01 --> Severity: Notice --> Trying to get property 'staffid' of non-object /home/worksuite/public_html/os/application/libraries/mails/Staff_event_notification.php 31
ERROR - 2020-08-06 02:44:01 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near ')
ORDER BY `firstname` DESC' at line 3 - Invalid query: SELECT *
FROM `tblstaff`
WHERE `staffid` IN()
ORDER BY `firstname` DESC
ERROR - 2020-08-06 02:44:01 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /home/worksuite/public_html/os/system/core/Exceptions.php:271) /home/worksuite/public_html/os/system/core/Common.php 570
ERROR - 2020-08-06 02:45:02 --> Severity: Notice --> Trying to get property 'staffid' of non-object /home/worksuite/public_html/os/application/libraries/mails/Staff_event_notification.php 27
ERROR - 2020-08-06 02:45:02 --> Severity: Notice --> Trying to get property 'email' of non-object /home/worksuite/public_html/os/application/libraries/mails/Staff_event_notification.php 30
ERROR - 2020-08-06 02:45:02 --> Severity: Notice --> Trying to get property 'staffid' of non-object /home/worksuite/public_html/os/application/libraries/mails/Staff_event_notification.php 31
ERROR - 2020-08-06 02:45:02 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near ')
ORDER BY `firstname` DESC' at line 3 - Invalid query: SELECT *
FROM `tblstaff`
WHERE `staffid` IN()
ORDER BY `firstname` DESC
ERROR - 2020-08-06 02:45:02 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /home/worksuite/public_html/os/system/core/Exceptions.php:271) /home/worksuite/public_html/os/system/core/Common.php 570
ERROR - 2020-08-06 02:46:01 --> Severity: Notice --> Trying to get property 'staffid' of non-object /home/worksuite/public_html/os/application/libraries/mails/Staff_event_notification.php 27
ERROR - 2020-08-06 02:46:01 --> Severity: Notice --> Trying to get property 'email' of non-object /home/worksuite/public_html/os/application/libraries/mails/Staff_event_notification.php 30
ERROR - 2020-08-06 02:46:01 --> Severity: Notice --> Trying to get property 'staffid' of non-object /home/worksuite/public_html/os/application/libraries/mails/Staff_event_notification.php 31
ERROR - 2020-08-06 02:46:01 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near ')
ORDER BY `firstname` DESC' at line 3 - Invalid query: SELECT *
FROM `tblstaff`
WHERE `staffid` IN()
ORDER BY `firstname` DESC
ERROR - 2020-08-06 02:46:01 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /home/worksuite/public_html/os/system/core/Exceptions.php:271) /home/worksuite/public_html/os/system/core/Common.php 570
ERROR - 2020-08-06 02:46:02 --> Query error: Duplicate column name 'col_492' - Invalid query: ALTER TABLE `tbl_sub_options_13`
	ADD `col_492` TEXT NULL DEFAULT ''
ERROR - 2020-08-06 02:47:01 --> Severity: Notice --> Trying to get property 'staffid' of non-object /home/worksuite/public_html/os/application/libraries/mails/Staff_event_notification.php 27
ERROR - 2020-08-06 02:47:01 --> Severity: Notice --> Trying to get property 'email' of non-object /home/worksuite/public_html/os/application/libraries/mails/Staff_event_notification.php 30
ERROR - 2020-08-06 02:47:01 --> Severity: Notice --> Trying to get property 'staffid' of non-object /home/worksuite/public_html/os/application/libraries/mails/Staff_event_notification.php 31
ERROR - 2020-08-06 02:47:01 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near ')
ORDER BY `firstname` DESC' at line 3 - Invalid query: SELECT *
FROM `tblstaff`
WHERE `staffid` IN()
ORDER BY `firstname` DESC
ERROR - 2020-08-06 02:47:01 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /home/worksuite/public_html/os/system/core/Exceptions.php:271) /home/worksuite/public_html/os/system/core/Common.php 570
ERROR - 2020-08-06 02:47:02 --> Severity: Warning --> A non-numeric value encountered /home/worksuite/public_html/os/application/helpers/settings_helper.php 103
ERROR - 2020-08-06 02:47:02 --> Severity: Warning --> A non-numeric value encountered /home/worksuite/public_html/os/application/helpers/settings_helper.php 105
ERROR - 2020-08-06 02:47:02 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '1) VALUES ('{\"name\":\"ticket_import_reply_only\",\"value\":\"1\",\"autoload\":' at line 1 - Invalid query: INSERT INTO `tbl1` (1) VALUES ('{\"name\":\"ticket_import_reply_only\",\"value\":\"1\",\"autoload\":1}')
ERROR - 2020-08-06 02:47:02 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /home/worksuite/public_html/os/system/core/Exceptions.php:271) /home/worksuite/public_html/os/system/core/Common.php 570
ERROR - 2020-08-06 02:48:01 --> Severity: Notice --> Trying to get property 'staffid' of non-object /home/worksuite/public_html/os/application/libraries/mails/Staff_event_notification.php 27
ERROR - 2020-08-06 02:48:01 --> Severity: Notice --> Trying to get property 'email' of non-object /home/worksuite/public_html/os/application/libraries/mails/Staff_event_notification.php 30
ERROR - 2020-08-06 02:48:01 --> Severity: Notice --> Trying to get property 'staffid' of non-object /home/worksuite/public_html/os/application/libraries/mails/Staff_event_notification.php 31
ERROR - 2020-08-06 02:48:01 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near ')
ORDER BY `firstname` DESC' at line 3 - Invalid query: SELECT *
FROM `tblstaff`
WHERE `staffid` IN()
ORDER BY `firstname` DESC
ERROR - 2020-08-06 02:48:01 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /home/worksuite/public_html/os/system/core/Exceptions.php:271) /home/worksuite/public_html/os/system/core/Common.php 570
ERROR - 2020-08-06 02:49:02 --> Severity: Notice --> Trying to get property 'staffid' of non-object /home/worksuite/public_html/os/application/libraries/mails/Staff_event_notification.php 27
ERROR - 2020-08-06 02:49:02 --> Severity: Notice --> Trying to get property 'email' of non-object /home/worksuite/public_html/os/application/libraries/mails/Staff_event_notification.php 30
ERROR - 2020-08-06 02:49:02 --> Severity: Notice --> Trying to get property 'staffid' of non-object /home/worksuite/public_html/os/application/libraries/mails/Staff_event_notification.php 31
ERROR - 2020-08-06 02:49:02 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near ')
ORDER BY `firstname` DESC' at line 3 - Invalid query: SELECT *
FROM `tblstaff`
WHERE `staffid` IN()
ORDER BY `firstname` DESC
ERROR - 2020-08-06 02:49:02 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /home/worksuite/public_html/os/system/core/Exceptions.php:271) /home/worksuite/public_html/os/system/core/Common.php 570
ERROR - 2020-08-06 02:50:01 --> Severity: Notice --> Trying to get property 'staffid' of non-object /home/worksuite/public_html/os/application/libraries/mails/Staff_event_notification.php 27
ERROR - 2020-08-06 02:50:01 --> Severity: Notice --> Trying to get property 'email' of non-object /home/worksuite/public_html/os/application/libraries/mails/Staff_event_notification.php 30
ERROR - 2020-08-06 02:50:01 --> Severity: Notice --> Trying to get property 'staffid' of non-object /home/worksuite/public_html/os/application/libraries/mails/Staff_event_notification.php 31
ERROR - 2020-08-06 02:50:01 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near ')
ORDER BY `firstname` DESC' at line 3 - Invalid query: SELECT *
FROM `tblstaff`
WHERE `staffid` IN()
ORDER BY `firstname` DESC
ERROR - 2020-08-06 02:50:01 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /home/worksuite/public_html/os/system/core/Exceptions.php:271) /home/worksuite/public_html/os/system/core/Common.php 570
ERROR - 2020-08-06 02:51:02 --> Severity: Notice --> Trying to get property 'staffid' of non-object /home/worksuite/public_html/os/application/libraries/mails/Staff_event_notification.php 27
ERROR - 2020-08-06 02:51:02 --> Severity: Notice --> Trying to get property 'email' of non-object /home/worksuite/public_html/os/application/libraries/mails/Staff_event_notification.php 30
ERROR - 2020-08-06 02:51:02 --> Severity: Notice --> Trying to get property 'staffid' of non-object /home/worksuite/public_html/os/application/libraries/mails/Staff_event_notification.php 31
ERROR - 2020-08-06 02:51:02 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near ')
ORDER BY `firstname` DESC' at line 3 - Invalid query: SELECT *
FROM `tblstaff`
WHERE `staffid` IN()
ORDER BY `firstname` DESC
ERROR - 2020-08-06 02:51:02 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /home/worksuite/public_html/os/system/core/Exceptions.php:271) /home/worksuite/public_html/os/system/core/Common.php 570
ERROR - 2020-08-06 02:52:02 --> Severity: Notice --> Trying to get property 'staffid' of non-object /home/worksuite/public_html/os/application/libraries/mails/Staff_event_notification.php 27
ERROR - 2020-08-06 02:52:02 --> Severity: Notice --> Trying to get property 'email' of non-object /home/worksuite/public_html/os/application/libraries/mails/Staff_event_notification.php 30
ERROR - 2020-08-06 02:52:02 --> Severity: Notice --> Trying to get property 'staffid' of non-object /home/worksuite/public_html/os/application/libraries/mails/Staff_event_notification.php 31
ERROR - 2020-08-06 02:52:02 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near ')
ORDER BY `firstname` DESC' at line 3 - Invalid query: SELECT *
FROM `tblstaff`
WHERE `staffid` IN()
ORDER BY `firstname` DESC
ERROR - 2020-08-06 02:52:02 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /home/worksuite/public_html/os/system/core/Exceptions.php:271) /home/worksuite/public_html/os/system/core/Common.php 570
ERROR - 2020-08-06 02:53:01 --> Severity: Notice --> Trying to get property 'staffid' of non-object /home/worksuite/public_html/os/application/libraries/mails/Staff_event_notification.php 27
ERROR - 2020-08-06 02:53:01 --> Severity: Notice --> Trying to get property 'email' of non-object /home/worksuite/public_html/os/application/libraries/mails/Staff_event_notification.php 30
ERROR - 2020-08-06 02:53:01 --> Severity: Notice --> Trying to get property 'staffid' of non-object /home/worksuite/public_html/os/application/libraries/mails/Staff_event_notification.php 31
ERROR - 2020-08-06 02:53:01 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near ')
ORDER BY `firstname` DESC' at line 3 - Invalid query: SELECT *
FROM `tblstaff`
WHERE `staffid` IN()
ORDER BY `firstname` DESC
ERROR - 2020-08-06 02:53:01 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /home/worksuite/public_html/os/system/core/Exceptions.php:271) /home/worksuite/public_html/os/system/core/Common.php 570
ERROR - 2020-08-06 02:54:02 --> Severity: Notice --> Trying to get property 'staffid' of non-object /home/worksuite/public_html/os/application/libraries/mails/Staff_event_notification.php 27
ERROR - 2020-08-06 02:54:02 --> Severity: Notice --> Trying to get property 'email' of non-object /home/worksuite/public_html/os/application/libraries/mails/Staff_event_notification.php 30
ERROR - 2020-08-06 02:54:02 --> Severity: Notice --> Trying to get property 'staffid' of non-object /home/worksuite/public_html/os/application/libraries/mails/Staff_event_notification.php 31
ERROR - 2020-08-06 02:54:02 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near ')
ORDER BY `firstname` DESC' at line 3 - Invalid query: SELECT *
FROM `tblstaff`
WHERE `staffid` IN()
ORDER BY `firstname` DESC
ERROR - 2020-08-06 02:54:02 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /home/worksuite/public_html/os/system/core/Exceptions.php:271) /home/worksuite/public_html/os/system/core/Common.php 570
ERROR - 2020-08-06 02:54:22 --> Severity: Warning --> A non-numeric value encountered /home/worksuite/public_html/os/application/helpers/settings_helper.php 103
ERROR - 2020-08-06 02:54:22 --> Severity: Warning --> A non-numeric value encountered /home/worksuite/public_html/os/application/helpers/settings_helper.php 107
ERROR - 2020-08-06 02:54:22 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '1 = '{\"name\":\"ticket_import_reply_only\",\"value\":\"1\",\"autoload\":1}'
WHE' at line 1 - Invalid query: UPDATE `tbl1` SET 1 = '{\"name\":\"ticket_import_reply_only\",\"value\":\"1\",\"autoload\":1}'
WHERE `company_username` = 'basic_smith'
ERROR - 2020-08-06 02:54:22 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /home/worksuite/public_html/os/system/core/Exceptions.php:271) /home/worksuite/public_html/os/system/core/Common.php 570
ERROR - 2020-08-06 02:55:01 --> Severity: Notice --> Trying to get property 'staffid' of non-object /home/worksuite/public_html/os/application/libraries/mails/Staff_event_notification.php 27
ERROR - 2020-08-06 02:55:01 --> Severity: Notice --> Trying to get property 'email' of non-object /home/worksuite/public_html/os/application/libraries/mails/Staff_event_notification.php 30
ERROR - 2020-08-06 02:55:01 --> Severity: Notice --> Trying to get property 'staffid' of non-object /home/worksuite/public_html/os/application/libraries/mails/Staff_event_notification.php 31
ERROR - 2020-08-06 02:55:01 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near ')
ORDER BY `firstname` DESC' at line 3 - Invalid query: SELECT *
FROM `tblstaff`
WHERE `staffid` IN()
ORDER BY `firstname` DESC
ERROR - 2020-08-06 02:55:01 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /home/worksuite/public_html/os/system/core/Exceptions.php:271) /home/worksuite/public_html/os/system/core/Common.php 570
ERROR - 2020-08-06 02:56:02 --> Severity: Notice --> Trying to get property 'staffid' of non-object /home/worksuite/public_html/os/application/libraries/mails/Staff_event_notification.php 27
ERROR - 2020-08-06 02:56:02 --> Severity: Notice --> Trying to get property 'email' of non-object /home/worksuite/public_html/os/application/libraries/mails/Staff_event_notification.php 30
ERROR - 2020-08-06 02:56:02 --> Severity: Notice --> Trying to get property 'staffid' of non-object /home/worksuite/public_html/os/application/libraries/mails/Staff_event_notification.php 31
ERROR - 2020-08-06 02:56:02 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near ')
ORDER BY `firstname` DESC' at line 3 - Invalid query: SELECT *
FROM `tblstaff`
WHERE `staffid` IN()
ORDER BY `firstname` DESC
ERROR - 2020-08-06 02:56:02 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /home/worksuite/public_html/os/system/core/Exceptions.php:271) /home/worksuite/public_html/os/system/core/Common.php 570
ERROR - 2020-08-06 00:57:01 --> Severity: error --> Exception: syntax error, unexpected '`' /home/worksuite/public_html/os/application/helpers/settings_helper.php 105
ERROR - 2020-08-06 00:57:07 --> Severity: error --> Exception: syntax error, unexpected '`' /home/worksuite/public_html/os/application/helpers/settings_helper.php 105
ERROR - 2020-08-06 02:57:40 --> Severity: Warning --> A non-numeric value encountered /home/worksuite/public_html/os/application/helpers/settings_helper.php 103
ERROR - 2020-08-06 02:57:40 --> Severity: Warning --> A non-numeric value encountered /home/worksuite/public_html/os/application/helpers/settings_helper.php 106
ERROR - 2020-08-06 02:58:02 --> Severity: Notice --> Trying to get property 'staffid' of non-object /home/worksuite/public_html/os/application/libraries/mails/Staff_event_notification.php 27
ERROR - 2020-08-06 02:58:02 --> Severity: Notice --> Trying to get property 'email' of non-object /home/worksuite/public_html/os/application/libraries/mails/Staff_event_notification.php 30
ERROR - 2020-08-06 02:58:02 --> Severity: Notice --> Trying to get property 'staffid' of non-object /home/worksuite/public_html/os/application/libraries/mails/Staff_event_notification.php 31
ERROR - 2020-08-06 02:58:02 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near ')
ORDER BY `firstname` DESC' at line 3 - Invalid query: SELECT *
FROM `tblstaff`
WHERE `staffid` IN()
ORDER BY `firstname` DESC
ERROR - 2020-08-06 02:58:02 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /home/worksuite/public_html/os/system/core/Exceptions.php:271) /home/worksuite/public_html/os/system/core/Common.php 570
ERROR - 2020-08-06 02:58:35 --> Query error: Duplicate column name 'col_492' - Invalid query: ALTER TABLE `tbl_sub_options_13`
	ADD `col_492` TEXT NULL DEFAULT ''
ERROR - 2020-08-06 02:58:54 --> Severity: Warning --> A non-numeric value encountered /home/worksuite/public_html/os/application/helpers/settings_helper.php 103
ERROR - 2020-08-06 02:59:01 --> Severity: Notice --> Trying to get property 'staffid' of non-object /home/worksuite/public_html/os/application/libraries/mails/Staff_event_notification.php 27
ERROR - 2020-08-06 02:59:01 --> Severity: Notice --> Trying to get property 'email' of non-object /home/worksuite/public_html/os/application/libraries/mails/Staff_event_notification.php 30
ERROR - 2020-08-06 02:59:01 --> Severity: Notice --> Trying to get property 'staffid' of non-object /home/worksuite/public_html/os/application/libraries/mails/Staff_event_notification.php 31
ERROR - 2020-08-06 02:59:01 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near ')
ORDER BY `firstname` DESC' at line 3 - Invalid query: SELECT *
FROM `tblstaff`
WHERE `staffid` IN()
ORDER BY `firstname` DESC
ERROR - 2020-08-06 02:59:01 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /home/worksuite/public_html/os/system/core/Exceptions.php:271) /home/worksuite/public_html/os/system/core/Common.php 570
ERROR - 2020-08-06 03:00:02 --> Severity: Notice --> Trying to get property 'staffid' of non-object /home/worksuite/public_html/os/application/libraries/mails/Staff_event_notification.php 27
ERROR - 2020-08-06 03:00:02 --> Severity: Notice --> Trying to get property 'email' of non-object /home/worksuite/public_html/os/application/libraries/mails/Staff_event_notification.php 30
ERROR - 2020-08-06 03:00:02 --> Severity: Notice --> Trying to get property 'staffid' of non-object /home/worksuite/public_html/os/application/libraries/mails/Staff_event_notification.php 31
ERROR - 2020-08-06 03:00:02 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near ')
ORDER BY `firstname` DESC' at line 3 - Invalid query: SELECT *
FROM `tblstaff`
WHERE `staffid` IN()
ORDER BY `firstname` DESC
ERROR - 2020-08-06 03:00:02 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /home/worksuite/public_html/os/system/core/Exceptions.php:271) /home/worksuite/public_html/os/system/core/Common.php 570
ERROR - 2020-08-06 03:00:41 --> Severity: Warning --> A non-numeric value encountered /home/worksuite/public_html/os/application/helpers/settings_helper.php 103
ERROR - 2020-08-06 03:01:01 --> Severity: Notice --> Trying to get property 'staffid' of non-object /home/worksuite/public_html/os/application/libraries/mails/Staff_event_notification.php 27
ERROR - 2020-08-06 03:01:01 --> Severity: Notice --> Trying to get property 'email' of non-object /home/worksuite/public_html/os/application/libraries/mails/Staff_event_notification.php 30
ERROR - 2020-08-06 03:01:01 --> Severity: Notice --> Trying to get property 'staffid' of non-object /home/worksuite/public_html/os/application/libraries/mails/Staff_event_notification.php 31
ERROR - 2020-08-06 03:01:01 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near ')
ORDER BY `firstname` DESC' at line 3 - Invalid query: SELECT *
FROM `tblstaff`
WHERE `staffid` IN()
ORDER BY `firstname` DESC
ERROR - 2020-08-06 03:01:01 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /home/worksuite/public_html/os/system/core/Exceptions.php:271) /home/worksuite/public_html/os/system/core/Common.php 570
ERROR - 2020-08-06 03:01:06 --> Severity: Warning --> A non-numeric value encountered /home/worksuite/public_html/os/application/helpers/settings_helper.php 103
ERROR - 2020-08-06 03:02:02 --> Severity: Notice --> Trying to get property 'staffid' of non-object /home/worksuite/public_html/os/application/libraries/mails/Staff_event_notification.php 27
ERROR - 2020-08-06 03:02:02 --> Severity: Notice --> Trying to get property 'email' of non-object /home/worksuite/public_html/os/application/libraries/mails/Staff_event_notification.php 30
ERROR - 2020-08-06 03:02:02 --> Severity: Notice --> Trying to get property 'staffid' of non-object /home/worksuite/public_html/os/application/libraries/mails/Staff_event_notification.php 31
ERROR - 2020-08-06 03:02:02 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near ')
ORDER BY `firstname` DESC' at line 3 - Invalid query: SELECT *
FROM `tblstaff`
WHERE `staffid` IN()
ORDER BY `firstname` DESC
ERROR - 2020-08-06 03:02:02 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /home/worksuite/public_html/os/system/core/Exceptions.php:271) /home/worksuite/public_html/os/system/core/Common.php 570
ERROR - 2020-08-06 03:03:01 --> Severity: Notice --> Trying to get property 'staffid' of non-object /home/worksuite/public_html/os/application/libraries/mails/Staff_event_notification.php 27
ERROR - 2020-08-06 03:03:01 --> Severity: Notice --> Trying to get property 'email' of non-object /home/worksuite/public_html/os/application/libraries/mails/Staff_event_notification.php 30
ERROR - 2020-08-06 03:03:01 --> Severity: Notice --> Trying to get property 'staffid' of non-object /home/worksuite/public_html/os/application/libraries/mails/Staff_event_notification.php 31
ERROR - 2020-08-06 03:03:01 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near ')
ORDER BY `firstname` DESC' at line 3 - Invalid query: SELECT *
FROM `tblstaff`
WHERE `staffid` IN()
ORDER BY `firstname` DESC
ERROR - 2020-08-06 03:03:01 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /home/worksuite/public_html/os/system/core/Exceptions.php:271) /home/worksuite/public_html/os/system/core/Common.php 570
ERROR - 2020-08-06 03:04:01 --> Severity: Notice --> Trying to get property 'staffid' of non-object /home/worksuite/public_html/os/application/libraries/mails/Staff_event_notification.php 27
ERROR - 2020-08-06 03:04:01 --> Severity: Notice --> Trying to get property 'email' of non-object /home/worksuite/public_html/os/application/libraries/mails/Staff_event_notification.php 30
ERROR - 2020-08-06 03:04:01 --> Severity: Notice --> Trying to get property 'staffid' of non-object /home/worksuite/public_html/os/application/libraries/mails/Staff_event_notification.php 31
ERROR - 2020-08-06 03:04:01 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near ')
ORDER BY `firstname` DESC' at line 3 - Invalid query: SELECT *
FROM `tblstaff`
WHERE `staffid` IN()
ORDER BY `firstname` DESC
ERROR - 2020-08-06 03:04:01 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /home/worksuite/public_html/os/system/core/Exceptions.php:271) /home/worksuite/public_html/os/system/core/Common.php 570
ERROR - 2020-08-06 03:05:01 --> Severity: Notice --> Trying to get property 'staffid' of non-object /home/worksuite/public_html/os/application/libraries/mails/Staff_event_notification.php 27
ERROR - 2020-08-06 03:05:01 --> Severity: Notice --> Trying to get property 'email' of non-object /home/worksuite/public_html/os/application/libraries/mails/Staff_event_notification.php 30
ERROR - 2020-08-06 03:05:01 --> Severity: Notice --> Trying to get property 'staffid' of non-object /home/worksuite/public_html/os/application/libraries/mails/Staff_event_notification.php 31
ERROR - 2020-08-06 03:05:02 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near ')
ORDER BY `firstname` DESC' at line 3 - Invalid query: SELECT *
FROM `tblstaff`
WHERE `staffid` IN()
ORDER BY `firstname` DESC
ERROR - 2020-08-06 03:05:02 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /home/worksuite/public_html/os/system/core/Exceptions.php:271) /home/worksuite/public_html/os/system/core/Common.php 570
ERROR - 2020-08-06 03:05:03 --> Query error: Unknown column 'tbl_sub_options_13' in 'field list' - Invalid query: UPDATE `tbl_sub_options_13` SET `tbl_sub_options_13` = '{\"name\":\"ticket_import_reply_only\",\"value\":\"1\",\"autoload\":1}'
WHERE `company_username` = 'basic_smith'
ERROR - 2020-08-06 03:06:01 --> Severity: Notice --> Trying to get property 'staffid' of non-object /home/worksuite/public_html/os/application/libraries/mails/Staff_event_notification.php 27
ERROR - 2020-08-06 03:06:01 --> Severity: Notice --> Trying to get property 'email' of non-object /home/worksuite/public_html/os/application/libraries/mails/Staff_event_notification.php 30
ERROR - 2020-08-06 03:06:01 --> Severity: Notice --> Trying to get property 'staffid' of non-object /home/worksuite/public_html/os/application/libraries/mails/Staff_event_notification.php 31
ERROR - 2020-08-06 03:06:01 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near ')
ORDER BY `firstname` DESC' at line 3 - Invalid query: SELECT *
FROM `tblstaff`
WHERE `staffid` IN()
ORDER BY `firstname` DESC
ERROR - 2020-08-06 03:06:01 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /home/worksuite/public_html/os/system/core/Exceptions.php:271) /home/worksuite/public_html/os/system/core/Common.php 570
ERROR - 2020-08-06 03:06:06 --> Severity: Warning --> A non-numeric value encountered /home/worksuite/public_html/os/application/helpers/settings_helper.php 116
ERROR - 2020-08-06 03:06:06 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /home/worksuite/public_html/os/application/helpers/settings_helper.php:111) /home/worksuite/public_html/os/system/helpers/url_helper.php 564
ERROR - 2020-08-06 03:07:01 --> Severity: Notice --> Trying to get property 'staffid' of non-object /home/worksuite/public_html/os/application/libraries/mails/Staff_event_notification.php 27
ERROR - 2020-08-06 03:07:01 --> Severity: Notice --> Trying to get property 'email' of non-object /home/worksuite/public_html/os/application/libraries/mails/Staff_event_notification.php 30
ERROR - 2020-08-06 03:07:01 --> Severity: Notice --> Trying to get property 'staffid' of non-object /home/worksuite/public_html/os/application/libraries/mails/Staff_event_notification.php 31
ERROR - 2020-08-06 03:07:01 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near ')
ORDER BY `firstname` DESC' at line 3 - Invalid query: SELECT *
FROM `tblstaff`
WHERE `staffid` IN()
ORDER BY `firstname` DESC
ERROR - 2020-08-06 03:07:01 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /home/worksuite/public_html/os/system/core/Exceptions.php:271) /home/worksuite/public_html/os/system/core/Common.php 570
ERROR - 2020-08-06 03:08:01 --> Severity: Notice --> Trying to get property 'staffid' of non-object /home/worksuite/public_html/os/application/libraries/mails/Staff_event_notification.php 27
ERROR - 2020-08-06 03:08:01 --> Severity: Notice --> Trying to get property 'email' of non-object /home/worksuite/public_html/os/application/libraries/mails/Staff_event_notification.php 30
ERROR - 2020-08-06 03:08:01 --> Severity: Notice --> Trying to get property 'staffid' of non-object /home/worksuite/public_html/os/application/libraries/mails/Staff_event_notification.php 31
ERROR - 2020-08-06 03:08:01 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near ')
ORDER BY `firstname` DESC' at line 3 - Invalid query: SELECT *
FROM `tblstaff`
WHERE `staffid` IN()
ORDER BY `firstname` DESC
ERROR - 2020-08-06 03:08:01 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /home/worksuite/public_html/os/system/core/Exceptions.php:271) /home/worksuite/public_html/os/system/core/Common.php 570
ERROR - 2020-08-06 03:09:02 --> Severity: Notice --> Trying to get property 'staffid' of non-object /home/worksuite/public_html/os/application/libraries/mails/Staff_event_notification.php 27
ERROR - 2020-08-06 03:09:02 --> Severity: Notice --> Trying to get property 'email' of non-object /home/worksuite/public_html/os/application/libraries/mails/Staff_event_notification.php 30
ERROR - 2020-08-06 03:09:02 --> Severity: Notice --> Trying to get property 'staffid' of non-object /home/worksuite/public_html/os/application/libraries/mails/Staff_event_notification.php 31
ERROR - 2020-08-06 03:09:02 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near ')
ORDER BY `firstname` DESC' at line 3 - Invalid query: SELECT *
FROM `tblstaff`
WHERE `staffid` IN()
ORDER BY `firstname` DESC
ERROR - 2020-08-06 03:09:02 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /home/worksuite/public_html/os/system/core/Exceptions.php:271) /home/worksuite/public_html/os/system/core/Common.php 570
ERROR - 2020-08-06 03:10:01 --> Severity: Notice --> Trying to get property 'staffid' of non-object /home/worksuite/public_html/os/application/libraries/mails/Staff_event_notification.php 27
ERROR - 2020-08-06 03:10:01 --> Severity: Notice --> Trying to get property 'email' of non-object /home/worksuite/public_html/os/application/libraries/mails/Staff_event_notification.php 30
ERROR - 2020-08-06 03:10:01 --> Severity: Notice --> Trying to get property 'staffid' of non-object /home/worksuite/public_html/os/application/libraries/mails/Staff_event_notification.php 31
ERROR - 2020-08-06 03:10:01 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near ')
ORDER BY `firstname` DESC' at line 3 - Invalid query: SELECT *
FROM `tblstaff`
WHERE `staffid` IN()
ORDER BY `firstname` DESC
ERROR - 2020-08-06 03:10:01 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /home/worksuite/public_html/os/system/core/Exceptions.php:271) /home/worksuite/public_html/os/system/core/Common.php 570
ERROR - 2020-08-06 03:10:11 --> Severity: Warning --> Attempt to assign property 'value' of non-object /home/worksuite/public_html/os/application/helpers/settings_helper.php 213
ERROR - 2020-08-06 03:10:11 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '1 = '1'
WHERE `company_username` = 'basic_smith'' at line 1 - Invalid query: UPDATE `tbl_sub_options_13` SET 1 = '1'
WHERE `company_username` = 'basic_smith'
ERROR - 2020-08-06 03:10:11 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /home/worksuite/public_html/os/system/core/Exceptions.php:271) /home/worksuite/public_html/os/system/core/Common.php 570
ERROR - 2020-08-06 03:11:02 --> Severity: Notice --> Trying to get property 'staffid' of non-object /home/worksuite/public_html/os/application/libraries/mails/Staff_event_notification.php 27
ERROR - 2020-08-06 03:11:02 --> Severity: Notice --> Trying to get property 'email' of non-object /home/worksuite/public_html/os/application/libraries/mails/Staff_event_notification.php 30
ERROR - 2020-08-06 03:11:02 --> Severity: Notice --> Trying to get property 'staffid' of non-object /home/worksuite/public_html/os/application/libraries/mails/Staff_event_notification.php 31
ERROR - 2020-08-06 03:11:02 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near ')
ORDER BY `firstname` DESC' at line 3 - Invalid query: SELECT *
FROM `tblstaff`
WHERE `staffid` IN()
ORDER BY `firstname` DESC
ERROR - 2020-08-06 03:11:02 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /home/worksuite/public_html/os/system/core/Exceptions.php:271) /home/worksuite/public_html/os/system/core/Common.php 570
ERROR - 2020-08-06 03:12:01 --> Severity: Notice --> Trying to get property 'staffid' of non-object /home/worksuite/public_html/os/application/libraries/mails/Staff_event_notification.php 27
ERROR - 2020-08-06 03:12:01 --> Severity: Notice --> Trying to get property 'email' of non-object /home/worksuite/public_html/os/application/libraries/mails/Staff_event_notification.php 30
ERROR - 2020-08-06 03:12:01 --> Severity: Notice --> Trying to get property 'staffid' of non-object /home/worksuite/public_html/os/application/libraries/mails/Staff_event_notification.php 31
ERROR - 2020-08-06 03:12:01 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near ')
ORDER BY `firstname` DESC' at line 3 - Invalid query: SELECT *
FROM `tblstaff`
WHERE `staffid` IN()
ORDER BY `firstname` DESC
ERROR - 2020-08-06 03:12:01 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /home/worksuite/public_html/os/system/core/Exceptions.php:271) /home/worksuite/public_html/os/system/core/Common.php 570
ERROR - 2020-08-06 03:13:01 --> Severity: Notice --> Trying to get property 'staffid' of non-object /home/worksuite/public_html/os/application/libraries/mails/Staff_event_notification.php 27
ERROR - 2020-08-06 03:13:01 --> Severity: Notice --> Trying to get property 'email' of non-object /home/worksuite/public_html/os/application/libraries/mails/Staff_event_notification.php 30
ERROR - 2020-08-06 03:13:01 --> Severity: Notice --> Trying to get property 'staffid' of non-object /home/worksuite/public_html/os/application/libraries/mails/Staff_event_notification.php 31
ERROR - 2020-08-06 03:13:01 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near ')
ORDER BY `firstname` DESC' at line 3 - Invalid query: SELECT *
FROM `tblstaff`
WHERE `staffid` IN()
ORDER BY `firstname` DESC
ERROR - 2020-08-06 03:13:01 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /home/worksuite/public_html/os/system/core/Exceptions.php:271) /home/worksuite/public_html/os/system/core/Common.php 570
ERROR - 2020-08-06 03:14:02 --> Severity: Notice --> Trying to get property 'staffid' of non-object /home/worksuite/public_html/os/application/libraries/mails/Staff_event_notification.php 27
ERROR - 2020-08-06 03:14:02 --> Severity: Notice --> Trying to get property 'email' of non-object /home/worksuite/public_html/os/application/libraries/mails/Staff_event_notification.php 30
ERROR - 2020-08-06 03:14:02 --> Severity: Notice --> Trying to get property 'staffid' of non-object /home/worksuite/public_html/os/application/libraries/mails/Staff_event_notification.php 31
ERROR - 2020-08-06 03:14:02 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near ')
ORDER BY `firstname` DESC' at line 3 - Invalid query: SELECT *
FROM `tblstaff`
WHERE `staffid` IN()
ORDER BY `firstname` DESC
ERROR - 2020-08-06 03:14:02 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /home/worksuite/public_html/os/system/core/Exceptions.php:271) /home/worksuite/public_html/os/system/core/Common.php 570
ERROR - 2020-08-06 03:15:02 --> Severity: Notice --> Trying to get property 'staffid' of non-object /home/worksuite/public_html/os/application/libraries/mails/Staff_event_notification.php 27
ERROR - 2020-08-06 03:15:02 --> Severity: Notice --> Trying to get property 'email' of non-object /home/worksuite/public_html/os/application/libraries/mails/Staff_event_notification.php 30
ERROR - 2020-08-06 03:15:02 --> Severity: Notice --> Trying to get property 'staffid' of non-object /home/worksuite/public_html/os/application/libraries/mails/Staff_event_notification.php 31
ERROR - 2020-08-06 03:15:02 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near ')
ORDER BY `firstname` DESC' at line 3 - Invalid query: SELECT *
FROM `tblstaff`
WHERE `staffid` IN()
ORDER BY `firstname` DESC
ERROR - 2020-08-06 03:15:02 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /home/worksuite/public_html/os/system/core/Exceptions.php:271) /home/worksuite/public_html/os/system/core/Common.php 570
ERROR - 2020-08-06 03:16:02 --> Severity: Notice --> Trying to get property 'staffid' of non-object /home/worksuite/public_html/os/application/libraries/mails/Staff_event_notification.php 27
ERROR - 2020-08-06 03:16:02 --> Severity: Notice --> Trying to get property 'email' of non-object /home/worksuite/public_html/os/application/libraries/mails/Staff_event_notification.php 30
ERROR - 2020-08-06 03:16:02 --> Severity: Notice --> Trying to get property 'staffid' of non-object /home/worksuite/public_html/os/application/libraries/mails/Staff_event_notification.php 31
ERROR - 2020-08-06 03:16:02 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near ')
ORDER BY `firstname` DESC' at line 3 - Invalid query: SELECT *
FROM `tblstaff`
WHERE `staffid` IN()
ORDER BY `firstname` DESC
ERROR - 2020-08-06 03:16:02 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /home/worksuite/public_html/os/system/core/Exceptions.php:271) /home/worksuite/public_html/os/system/core/Common.php 570
ERROR - 2020-08-06 03:17:02 --> Severity: Notice --> Trying to get property 'staffid' of non-object /home/worksuite/public_html/os/application/libraries/mails/Staff_event_notification.php 27
ERROR - 2020-08-06 03:17:02 --> Severity: Notice --> Trying to get property 'email' of non-object /home/worksuite/public_html/os/application/libraries/mails/Staff_event_notification.php 30
ERROR - 2020-08-06 03:17:02 --> Severity: Notice --> Trying to get property 'staffid' of non-object /home/worksuite/public_html/os/application/libraries/mails/Staff_event_notification.php 31
ERROR - 2020-08-06 03:17:02 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near ')
ORDER BY `firstname` DESC' at line 3 - Invalid query: SELECT *
FROM `tblstaff`
WHERE `staffid` IN()
ORDER BY `firstname` DESC
ERROR - 2020-08-06 03:17:02 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /home/worksuite/public_html/os/system/core/Exceptions.php:271) /home/worksuite/public_html/os/system/core/Common.php 570
ERROR - 2020-08-06 03:18:01 --> Severity: Notice --> Trying to get property 'staffid' of non-object /home/worksuite/public_html/os/application/libraries/mails/Staff_event_notification.php 27
ERROR - 2020-08-06 03:18:01 --> Severity: Notice --> Trying to get property 'email' of non-object /home/worksuite/public_html/os/application/libraries/mails/Staff_event_notification.php 30
ERROR - 2020-08-06 03:18:01 --> Severity: Notice --> Trying to get property 'staffid' of non-object /home/worksuite/public_html/os/application/libraries/mails/Staff_event_notification.php 31
ERROR - 2020-08-06 03:18:01 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near ')
ORDER BY `firstname` DESC' at line 3 - Invalid query: SELECT *
FROM `tblstaff`
WHERE `staffid` IN()
ORDER BY `firstname` DESC
ERROR - 2020-08-06 03:18:01 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /home/worksuite/public_html/os/system/core/Exceptions.php:271) /home/worksuite/public_html/os/system/core/Common.php 570
ERROR - 2020-08-06 03:18:32 --> Severity: Warning --> Attempt to assign property 'value' of non-object /home/worksuite/public_html/os/application/helpers/settings_helper.php 213
ERROR - 2020-08-06 03:18:32 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '1 = '1'
WHERE `company_username` = 'basic_smith'' at line 1 - Invalid query: UPDATE `tbl_sub_options_13` SET 1 = '1'
WHERE `company_username` = 'basic_smith'
ERROR - 2020-08-06 03:18:32 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /home/worksuite/public_html/os/system/core/Exceptions.php:271) /home/worksuite/public_html/os/system/core/Common.php 570
ERROR - 2020-08-06 03:19:02 --> Severity: Notice --> Trying to get property 'staffid' of non-object /home/worksuite/public_html/os/application/libraries/mails/Staff_event_notification.php 27
ERROR - 2020-08-06 03:19:02 --> Severity: Notice --> Trying to get property 'email' of non-object /home/worksuite/public_html/os/application/libraries/mails/Staff_event_notification.php 30
ERROR - 2020-08-06 03:19:02 --> Severity: Notice --> Trying to get property 'staffid' of non-object /home/worksuite/public_html/os/application/libraries/mails/Staff_event_notification.php 31
ERROR - 2020-08-06 03:19:02 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near ')
ORDER BY `firstname` DESC' at line 3 - Invalid query: SELECT *
FROM `tblstaff`
WHERE `staffid` IN()
ORDER BY `firstname` DESC
ERROR - 2020-08-06 03:19:02 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /home/worksuite/public_html/os/system/core/Exceptions.php:271) /home/worksuite/public_html/os/system/core/Common.php 570
ERROR - 2020-08-06 03:19:29 --> Severity: Warning --> Attempt to assign property 'value' of non-object /home/worksuite/public_html/os/application/helpers/settings_helper.php 213
ERROR - 2020-08-06 03:19:29 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '1 = '1'
WHERE `company_username` = 'basic_smith'' at line 1 - Invalid query: UPDATE `tbl_sub_options_13` SET 1 = '1'
WHERE `company_username` = 'basic_smith'
ERROR - 2020-08-06 03:19:29 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /home/worksuite/public_html/os/application/helpers/settings_helper.php:220) /home/worksuite/public_html/os/system/core/Common.php 570
ERROR - 2020-08-06 03:20:01 --> Severity: Notice --> Trying to get property 'staffid' of non-object /home/worksuite/public_html/os/application/libraries/mails/Staff_event_notification.php 27
ERROR - 2020-08-06 03:20:01 --> Severity: Notice --> Trying to get property 'email' of non-object /home/worksuite/public_html/os/application/libraries/mails/Staff_event_notification.php 30
ERROR - 2020-08-06 03:20:01 --> Severity: Notice --> Trying to get property 'staffid' of non-object /home/worksuite/public_html/os/application/libraries/mails/Staff_event_notification.php 31
ERROR - 2020-08-06 03:20:01 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near ')
ORDER BY `firstname` DESC' at line 3 - Invalid query: SELECT *
FROM `tblstaff`
WHERE `staffid` IN()
ORDER BY `firstname` DESC
ERROR - 2020-08-06 03:20:01 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /home/worksuite/public_html/os/system/core/Exceptions.php:271) /home/worksuite/public_html/os/system/core/Common.php 570
ERROR - 2020-08-06 03:21:02 --> Severity: Notice --> Trying to get property 'staffid' of non-object /home/worksuite/public_html/os/application/libraries/mails/Staff_event_notification.php 27
ERROR - 2020-08-06 03:21:02 --> Severity: Notice --> Trying to get property 'email' of non-object /home/worksuite/public_html/os/application/libraries/mails/Staff_event_notification.php 30
ERROR - 2020-08-06 03:21:02 --> Severity: Notice --> Trying to get property 'staffid' of non-object /home/worksuite/public_html/os/application/libraries/mails/Staff_event_notification.php 31
ERROR - 2020-08-06 03:21:02 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near ')
ORDER BY `firstname` DESC' at line 3 - Invalid query: SELECT *
FROM `tblstaff`
WHERE `staffid` IN()
ORDER BY `firstname` DESC
ERROR - 2020-08-06 03:21:02 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /home/worksuite/public_html/os/system/core/Exceptions.php:271) /home/worksuite/public_html/os/system/core/Common.php 570
ERROR - 2020-08-06 03:22:01 --> Severity: Notice --> Trying to get property 'staffid' of non-object /home/worksuite/public_html/os/application/libraries/mails/Staff_event_notification.php 27
ERROR - 2020-08-06 03:22:02 --> Severity: Notice --> Trying to get property 'email' of non-object /home/worksuite/public_html/os/application/libraries/mails/Staff_event_notification.php 30
ERROR - 2020-08-06 03:22:02 --> Severity: Notice --> Trying to get property 'staffid' of non-object /home/worksuite/public_html/os/application/libraries/mails/Staff_event_notification.php 31
ERROR - 2020-08-06 03:22:02 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near ')
ORDER BY `firstname` DESC' at line 3 - Invalid query: SELECT *
FROM `tblstaff`
WHERE `staffid` IN()
ORDER BY `firstname` DESC
ERROR - 2020-08-06 03:22:02 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /home/worksuite/public_html/os/system/core/Exceptions.php:271) /home/worksuite/public_html/os/system/core/Common.php 570
ERROR - 2020-08-06 03:23:01 --> Severity: Notice --> Trying to get property 'staffid' of non-object /home/worksuite/public_html/os/application/libraries/mails/Staff_event_notification.php 27
ERROR - 2020-08-06 03:23:01 --> Severity: Notice --> Trying to get property 'email' of non-object /home/worksuite/public_html/os/application/libraries/mails/Staff_event_notification.php 30
ERROR - 2020-08-06 03:23:01 --> Severity: Notice --> Trying to get property 'staffid' of non-object /home/worksuite/public_html/os/application/libraries/mails/Staff_event_notification.php 31
ERROR - 2020-08-06 03:23:01 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near ')
ORDER BY `firstname` DESC' at line 3 - Invalid query: SELECT *
FROM `tblstaff`
WHERE `staffid` IN()
ORDER BY `firstname` DESC
ERROR - 2020-08-06 03:23:01 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /home/worksuite/public_html/os/system/core/Exceptions.php:271) /home/worksuite/public_html/os/system/core/Common.php 570
ERROR - 2020-08-06 03:24:02 --> Severity: Notice --> Trying to get property 'staffid' of non-object /home/worksuite/public_html/os/application/libraries/mails/Staff_event_notification.php 27
ERROR - 2020-08-06 03:24:02 --> Severity: Notice --> Trying to get property 'email' of non-object /home/worksuite/public_html/os/application/libraries/mails/Staff_event_notification.php 30
ERROR - 2020-08-06 03:24:02 --> Severity: Notice --> Trying to get property 'staffid' of non-object /home/worksuite/public_html/os/application/libraries/mails/Staff_event_notification.php 31
ERROR - 2020-08-06 03:24:02 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near ')
ORDER BY `firstname` DESC' at line 3 - Invalid query: SELECT *
FROM `tblstaff`
WHERE `staffid` IN()
ORDER BY `firstname` DESC
ERROR - 2020-08-06 03:24:02 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /home/worksuite/public_html/os/system/core/Exceptions.php:271) /home/worksuite/public_html/os/system/core/Common.php 570
ERROR - 2020-08-06 03:25:01 --> Severity: Notice --> Trying to get property 'staffid' of non-object /home/worksuite/public_html/os/application/libraries/mails/Staff_event_notification.php 27
ERROR - 2020-08-06 03:25:01 --> Severity: Notice --> Trying to get property 'email' of non-object /home/worksuite/public_html/os/application/libraries/mails/Staff_event_notification.php 30
ERROR - 2020-08-06 03:25:01 --> Severity: Notice --> Trying to get property 'staffid' of non-object /home/worksuite/public_html/os/application/libraries/mails/Staff_event_notification.php 31
ERROR - 2020-08-06 03:25:01 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near ')
ORDER BY `firstname` DESC' at line 3 - Invalid query: SELECT *
FROM `tblstaff`
WHERE `staffid` IN()
ORDER BY `firstname` DESC
ERROR - 2020-08-06 03:25:01 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /home/worksuite/public_html/os/system/core/Exceptions.php:271) /home/worksuite/public_html/os/system/core/Common.php 570
ERROR - 2020-08-06 03:26:02 --> Severity: Notice --> Trying to get property 'staffid' of non-object /home/worksuite/public_html/os/application/libraries/mails/Staff_event_notification.php 27
ERROR - 2020-08-06 03:26:02 --> Severity: Notice --> Trying to get property 'email' of non-object /home/worksuite/public_html/os/application/libraries/mails/Staff_event_notification.php 30
ERROR - 2020-08-06 03:26:02 --> Severity: Notice --> Trying to get property 'staffid' of non-object /home/worksuite/public_html/os/application/libraries/mails/Staff_event_notification.php 31
ERROR - 2020-08-06 03:26:02 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near ')
ORDER BY `firstname` DESC' at line 3 - Invalid query: SELECT *
FROM `tblstaff`
WHERE `staffid` IN()
ORDER BY `firstname` DESC
ERROR - 2020-08-06 03:26:02 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /home/worksuite/public_html/os/system/core/Exceptions.php:271) /home/worksuite/public_html/os/system/core/Common.php 570
ERROR - 2020-08-06 03:27:01 --> Severity: Notice --> Trying to get property 'staffid' of non-object /home/worksuite/public_html/os/application/libraries/mails/Staff_event_notification.php 27
ERROR - 2020-08-06 03:27:01 --> Severity: Notice --> Trying to get property 'email' of non-object /home/worksuite/public_html/os/application/libraries/mails/Staff_event_notification.php 30
ERROR - 2020-08-06 03:27:01 --> Severity: Notice --> Trying to get property 'staffid' of non-object /home/worksuite/public_html/os/application/libraries/mails/Staff_event_notification.php 31
ERROR - 2020-08-06 03:27:01 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near ')
ORDER BY `firstname` DESC' at line 3 - Invalid query: SELECT *
FROM `tblstaff`
WHERE `staffid` IN()
ORDER BY `firstname` DESC
ERROR - 2020-08-06 03:27:01 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /home/worksuite/public_html/os/system/core/Exceptions.php:271) /home/worksuite/public_html/os/system/core/Common.php 570
ERROR - 2020-08-06 03:27:26 --> Severity: Warning --> Attempt to assign property 'value' of non-object /home/worksuite/public_html/os/application/helpers/settings_helper.php 213
ERROR - 2020-08-06 03:27:26 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '1 = '1'
WHERE `company_username` = 'basic_smith'' at line 1 - Invalid query: UPDATE `tbl_sub_options_13` SET 1 = '1'
WHERE `company_username` = 'basic_smith'
ERROR - 2020-08-06 03:27:26 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /home/worksuite/public_html/os/application/helpers/settings_helper.php:218) /home/worksuite/public_html/os/system/core/Common.php 570
ERROR - 2020-08-06 03:28:02 --> Severity: Notice --> Trying to get property 'staffid' of non-object /home/worksuite/public_html/os/application/libraries/mails/Staff_event_notification.php 27
ERROR - 2020-08-06 03:28:02 --> Severity: Notice --> Trying to get property 'email' of non-object /home/worksuite/public_html/os/application/libraries/mails/Staff_event_notification.php 30
ERROR - 2020-08-06 03:28:02 --> Severity: Notice --> Trying to get property 'staffid' of non-object /home/worksuite/public_html/os/application/libraries/mails/Staff_event_notification.php 31
ERROR - 2020-08-06 03:28:02 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near ')
ORDER BY `firstname` DESC' at line 3 - Invalid query: SELECT *
FROM `tblstaff`
WHERE `staffid` IN()
ORDER BY `firstname` DESC
ERROR - 2020-08-06 03:28:02 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /home/worksuite/public_html/os/system/core/Exceptions.php:271) /home/worksuite/public_html/os/system/core/Common.php 570
ERROR - 2020-08-06 03:29:02 --> Severity: Notice --> Trying to get property 'staffid' of non-object /home/worksuite/public_html/os/application/libraries/mails/Staff_event_notification.php 27
ERROR - 2020-08-06 03:29:02 --> Severity: Notice --> Trying to get property 'email' of non-object /home/worksuite/public_html/os/application/libraries/mails/Staff_event_notification.php 30
ERROR - 2020-08-06 03:29:02 --> Severity: Notice --> Trying to get property 'staffid' of non-object /home/worksuite/public_html/os/application/libraries/mails/Staff_event_notification.php 31
ERROR - 2020-08-06 03:29:02 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near ')
ORDER BY `firstname` DESC' at line 3 - Invalid query: SELECT *
FROM `tblstaff`
WHERE `staffid` IN()
ORDER BY `firstname` DESC
ERROR - 2020-08-06 03:29:02 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /home/worksuite/public_html/os/system/core/Exceptions.php:271) /home/worksuite/public_html/os/system/core/Common.php 570
ERROR - 2020-08-06 03:29:07 --> Severity: Warning --> Attempt to assign property 'value' of non-object /home/worksuite/public_html/os/application/helpers/settings_helper.php 213
ERROR - 2020-08-06 03:29:07 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '1 = '1'
WHERE `company_username` = 'basic_smith'' at line 1 - Invalid query: UPDATE `tbl_sub_options_13` SET 1 = '1'
WHERE `company_username` = 'basic_smith'
ERROR - 2020-08-06 03:29:07 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /home/worksuite/public_html/os/application/helpers/settings_helper.php:218) /home/worksuite/public_html/os/system/core/Common.php 570
ERROR - 2020-08-06 03:30:01 --> Severity: Notice --> Trying to get property 'staffid' of non-object /home/worksuite/public_html/os/application/libraries/mails/Staff_event_notification.php 27
ERROR - 2020-08-06 03:30:01 --> Severity: Notice --> Trying to get property 'email' of non-object /home/worksuite/public_html/os/application/libraries/mails/Staff_event_notification.php 30
ERROR - 2020-08-06 03:30:01 --> Severity: Notice --> Trying to get property 'staffid' of non-object /home/worksuite/public_html/os/application/libraries/mails/Staff_event_notification.php 31
ERROR - 2020-08-06 03:30:01 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near ')
ORDER BY `firstname` DESC' at line 3 - Invalid query: SELECT *
FROM `tblstaff`
WHERE `staffid` IN()
ORDER BY `firstname` DESC
ERROR - 2020-08-06 03:30:01 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /home/worksuite/public_html/os/system/core/Exceptions.php:271) /home/worksuite/public_html/os/system/core/Common.php 570
ERROR - 2020-08-06 03:30:11 --> Severity: Warning --> Attempt to assign property 'value' of non-object /home/worksuite/public_html/os/application/helpers/settings_helper.php 213
ERROR - 2020-08-06 03:30:11 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '1 = '1'
WHERE `company_username` = 'basic_smith'' at line 1 - Invalid query: UPDATE `tbl_sub_options_13` SET 1 = '1'
WHERE `company_username` = 'basic_smith'
ERROR - 2020-08-06 03:30:11 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /home/worksuite/public_html/os/application/helpers/settings_helper.php:218) /home/worksuite/public_html/os/system/core/Common.php 570
ERROR - 2020-08-06 03:31:01 --> Severity: Notice --> Trying to get property 'staffid' of non-object /home/worksuite/public_html/os/application/libraries/mails/Staff_event_notification.php 27
ERROR - 2020-08-06 03:31:01 --> Severity: Notice --> Trying to get property 'email' of non-object /home/worksuite/public_html/os/application/libraries/mails/Staff_event_notification.php 30
ERROR - 2020-08-06 03:31:01 --> Severity: Notice --> Trying to get property 'staffid' of non-object /home/worksuite/public_html/os/application/libraries/mails/Staff_event_notification.php 31
ERROR - 2020-08-06 03:31:01 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near ')
ORDER BY `firstname` DESC' at line 3 - Invalid query: SELECT *
FROM `tblstaff`
WHERE `staffid` IN()
ORDER BY `firstname` DESC
ERROR - 2020-08-06 03:31:01 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /home/worksuite/public_html/os/system/core/Exceptions.php:271) /home/worksuite/public_html/os/system/core/Common.php 570
ERROR - 2020-08-06 03:32:01 --> Severity: Notice --> Trying to get property 'staffid' of non-object /home/worksuite/public_html/os/application/libraries/mails/Staff_event_notification.php 27
ERROR - 2020-08-06 03:32:01 --> Severity: Notice --> Trying to get property 'email' of non-object /home/worksuite/public_html/os/application/libraries/mails/Staff_event_notification.php 30
ERROR - 2020-08-06 03:32:01 --> Severity: Notice --> Trying to get property 'staffid' of non-object /home/worksuite/public_html/os/application/libraries/mails/Staff_event_notification.php 31
ERROR - 2020-08-06 03:32:01 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near ')
ORDER BY `firstname` DESC' at line 3 - Invalid query: SELECT *
FROM `tblstaff`
WHERE `staffid` IN()
ORDER BY `firstname` DESC
ERROR - 2020-08-06 03:32:01 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /home/worksuite/public_html/os/system/core/Exceptions.php:271) /home/worksuite/public_html/os/system/core/Common.php 570
ERROR - 2020-08-06 03:33:01 --> Severity: Warning --> Attempt to assign property 'value' of non-object /home/worksuite/public_html/os/application/helpers/settings_helper.php 214
ERROR - 2020-08-06 03:33:01 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '1 = '1'
WHERE `company_username` = 'basic_smith'' at line 1 - Invalid query: UPDATE `tbl_sub_options_13` SET 1 = '1'
WHERE `company_username` = 'basic_smith'
ERROR - 2020-08-06 03:33:01 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /home/worksuite/public_html/os/application/helpers/settings_helper.php:200) /home/worksuite/public_html/os/system/core/Common.php 570
ERROR - 2020-08-06 03:33:01 --> Severity: Notice --> Trying to get property 'staffid' of non-object /home/worksuite/public_html/os/application/libraries/mails/Staff_event_notification.php 27
ERROR - 2020-08-06 03:33:01 --> Severity: Notice --> Trying to get property 'email' of non-object /home/worksuite/public_html/os/application/libraries/mails/Staff_event_notification.php 30
ERROR - 2020-08-06 03:33:01 --> Severity: Notice --> Trying to get property 'staffid' of non-object /home/worksuite/public_html/os/application/libraries/mails/Staff_event_notification.php 31
ERROR - 2020-08-06 03:33:01 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near ')
ORDER BY `firstname` DESC' at line 3 - Invalid query: SELECT *
FROM `tblstaff`
WHERE `staffid` IN()
ORDER BY `firstname` DESC
ERROR - 2020-08-06 03:33:01 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /home/worksuite/public_html/os/application/helpers/settings_helper.php:200) /home/worksuite/public_html/os/system/core/Common.php 570
ERROR - 2020-08-06 03:34:01 --> Severity: Notice --> Trying to get property 'staffid' of non-object /home/worksuite/public_html/os/application/libraries/mails/Staff_event_notification.php 27
ERROR - 2020-08-06 03:34:01 --> Severity: Notice --> Trying to get property 'email' of non-object /home/worksuite/public_html/os/application/libraries/mails/Staff_event_notification.php 30
ERROR - 2020-08-06 03:34:01 --> Severity: Notice --> Trying to get property 'staffid' of non-object /home/worksuite/public_html/os/application/libraries/mails/Staff_event_notification.php 31
ERROR - 2020-08-06 03:34:01 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near ')
ORDER BY `firstname` DESC' at line 3 - Invalid query: SELECT *
FROM `tblstaff`
WHERE `staffid` IN()
ORDER BY `firstname` DESC
ERROR - 2020-08-06 03:34:01 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /home/worksuite/public_html/os/application/helpers/settings_helper.php:200) /home/worksuite/public_html/os/system/core/Common.php 570
ERROR - 2020-08-06 03:35:02 --> Severity: Notice --> Trying to get property 'staffid' of non-object /home/worksuite/public_html/os/application/libraries/mails/Staff_event_notification.php 27
ERROR - 2020-08-06 03:35:02 --> Severity: Notice --> Trying to get property 'email' of non-object /home/worksuite/public_html/os/application/libraries/mails/Staff_event_notification.php 30
ERROR - 2020-08-06 03:35:02 --> Severity: Notice --> Trying to get property 'staffid' of non-object /home/worksuite/public_html/os/application/libraries/mails/Staff_event_notification.php 31
ERROR - 2020-08-06 03:35:02 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near ')
ORDER BY `firstname` DESC' at line 3 - Invalid query: SELECT *
FROM `tblstaff`
WHERE `staffid` IN()
ORDER BY `firstname` DESC
ERROR - 2020-08-06 03:35:02 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /home/worksuite/public_html/os/application/helpers/settings_helper.php:200) /home/worksuite/public_html/os/system/core/Common.php 570
ERROR - 2020-08-06 03:36:01 --> Severity: Notice --> Trying to get property 'staffid' of non-object /home/worksuite/public_html/os/application/libraries/mails/Staff_event_notification.php 27
ERROR - 2020-08-06 03:36:01 --> Severity: Notice --> Trying to get property 'email' of non-object /home/worksuite/public_html/os/application/libraries/mails/Staff_event_notification.php 30
ERROR - 2020-08-06 03:36:01 --> Severity: Notice --> Trying to get property 'staffid' of non-object /home/worksuite/public_html/os/application/libraries/mails/Staff_event_notification.php 31
ERROR - 2020-08-06 03:36:01 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near ')
ORDER BY `firstname` DESC' at line 3 - Invalid query: SELECT *
FROM `tblstaff`
WHERE `staffid` IN()
ORDER BY `firstname` DESC
ERROR - 2020-08-06 03:36:01 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /home/worksuite/public_html/os/application/helpers/settings_helper.php:200) /home/worksuite/public_html/os/system/core/Common.php 570
ERROR - 2020-08-06 03:37:02 --> Severity: Notice --> Trying to get property 'staffid' of non-object /home/worksuite/public_html/os/application/libraries/mails/Staff_event_notification.php 27
ERROR - 2020-08-06 03:37:02 --> Severity: Notice --> Trying to get property 'email' of non-object /home/worksuite/public_html/os/application/libraries/mails/Staff_event_notification.php 30
ERROR - 2020-08-06 03:37:02 --> Severity: Notice --> Trying to get property 'staffid' of non-object /home/worksuite/public_html/os/application/libraries/mails/Staff_event_notification.php 31
ERROR - 2020-08-06 03:37:02 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near ')
ORDER BY `firstname` DESC' at line 3 - Invalid query: SELECT *
FROM `tblstaff`
WHERE `staffid` IN()
ORDER BY `firstname` DESC
ERROR - 2020-08-06 03:37:02 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /home/worksuite/public_html/os/application/helpers/settings_helper.php:200) /home/worksuite/public_html/os/system/core/Common.php 570
ERROR - 2020-08-06 03:37:38 --> Severity: Warning --> Attempt to assign property 'value' of non-object /home/worksuite/public_html/os/application/helpers/settings_helper.php 214
ERROR - 2020-08-06 03:37:38 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '1 = '1'
WHERE `company_username` = 'basic_smith'' at line 1 - Invalid query: UPDATE `tbl_sub_options_13` SET 1 = '1'
WHERE `company_username` = 'basic_smith'
ERROR - 2020-08-06 03:37:38 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /home/worksuite/public_html/os/application/helpers/settings_helper.php:212) /home/worksuite/public_html/os/system/core/Common.php 570
ERROR - 2020-08-06 03:38:01 --> Severity: Notice --> Trying to get property 'staffid' of non-object /home/worksuite/public_html/os/application/libraries/mails/Staff_event_notification.php 27
ERROR - 2020-08-06 03:38:01 --> Severity: Notice --> Trying to get property 'email' of non-object /home/worksuite/public_html/os/application/libraries/mails/Staff_event_notification.php 30
ERROR - 2020-08-06 03:38:01 --> Severity: Notice --> Trying to get property 'staffid' of non-object /home/worksuite/public_html/os/application/libraries/mails/Staff_event_notification.php 31
ERROR - 2020-08-06 03:38:01 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near ')
ORDER BY `firstname` DESC' at line 3 - Invalid query: SELECT *
FROM `tblstaff`
WHERE `staffid` IN()
ORDER BY `firstname` DESC
ERROR - 2020-08-06 03:38:01 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /home/worksuite/public_html/os/system/core/Exceptions.php:271) /home/worksuite/public_html/os/system/core/Common.php 570
ERROR - 2020-08-06 03:39:02 --> Severity: Notice --> Trying to get property 'staffid' of non-object /home/worksuite/public_html/os/application/libraries/mails/Staff_event_notification.php 27
ERROR - 2020-08-06 03:39:02 --> Severity: Notice --> Trying to get property 'email' of non-object /home/worksuite/public_html/os/application/libraries/mails/Staff_event_notification.php 30
ERROR - 2020-08-06 03:39:02 --> Severity: Notice --> Trying to get property 'staffid' of non-object /home/worksuite/public_html/os/application/libraries/mails/Staff_event_notification.php 31
ERROR - 2020-08-06 03:39:02 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near ')
ORDER BY `firstname` DESC' at line 3 - Invalid query: SELECT *
FROM `tblstaff`
WHERE `staffid` IN()
ORDER BY `firstname` DESC
ERROR - 2020-08-06 03:39:02 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /home/worksuite/public_html/os/system/core/Exceptions.php:271) /home/worksuite/public_html/os/system/core/Common.php 570
ERROR - 2020-08-06 03:40:01 --> Severity: Notice --> Trying to get property 'staffid' of non-object /home/worksuite/public_html/os/application/libraries/mails/Staff_event_notification.php 27
ERROR - 2020-08-06 03:40:01 --> Severity: Notice --> Trying to get property 'email' of non-object /home/worksuite/public_html/os/application/libraries/mails/Staff_event_notification.php 30
ERROR - 2020-08-06 03:40:01 --> Severity: Notice --> Trying to get property 'staffid' of non-object /home/worksuite/public_html/os/application/libraries/mails/Staff_event_notification.php 31
ERROR - 2020-08-06 03:40:01 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near ')
ORDER BY `firstname` DESC' at line 3 - Invalid query: SELECT *
FROM `tblstaff`
WHERE `staffid` IN()
ORDER BY `firstname` DESC
ERROR - 2020-08-06 03:40:01 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /home/worksuite/public_html/os/system/core/Exceptions.php:271) /home/worksuite/public_html/os/system/core/Common.php 570
ERROR - 2020-08-06 03:40:05 --> Severity: Warning --> Attempt to assign property 'value' of non-object /home/worksuite/public_html/os/application/helpers/settings_helper.php 214
ERROR - 2020-08-06 03:40:05 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '1 = '1'
WHERE `company_username` = 'basic_smith'' at line 1 - Invalid query: UPDATE `tbl_sub_options_13` SET 1 = '1'
WHERE `company_username` = 'basic_smith'
ERROR - 2020-08-06 03:40:05 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /home/worksuite/public_html/os/application/helpers/settings_helper.php:212) /home/worksuite/public_html/os/system/core/Common.php 570
ERROR - 2020-08-06 03:41:02 --> Severity: Notice --> Trying to get property 'staffid' of non-object /home/worksuite/public_html/os/application/libraries/mails/Staff_event_notification.php 27
ERROR - 2020-08-06 03:41:02 --> Severity: Notice --> Trying to get property 'email' of non-object /home/worksuite/public_html/os/application/libraries/mails/Staff_event_notification.php 30
ERROR - 2020-08-06 03:41:02 --> Severity: Notice --> Trying to get property 'staffid' of non-object /home/worksuite/public_html/os/application/libraries/mails/Staff_event_notification.php 31
ERROR - 2020-08-06 03:41:02 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near ')
ORDER BY `firstname` DESC' at line 3 - Invalid query: SELECT *
FROM `tblstaff`
WHERE `staffid` IN()
ORDER BY `firstname` DESC
ERROR - 2020-08-06 03:41:02 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /home/worksuite/public_html/os/system/core/Exceptions.php:271) /home/worksuite/public_html/os/system/core/Common.php 570
ERROR - 2020-08-06 03:42:01 --> Severity: Notice --> Trying to get property 'staffid' of non-object /home/worksuite/public_html/os/application/libraries/mails/Staff_event_notification.php 27
ERROR - 2020-08-06 03:42:01 --> Severity: Notice --> Trying to get property 'email' of non-object /home/worksuite/public_html/os/application/libraries/mails/Staff_event_notification.php 30
ERROR - 2020-08-06 03:42:01 --> Severity: Notice --> Trying to get property 'staffid' of non-object /home/worksuite/public_html/os/application/libraries/mails/Staff_event_notification.php 31
ERROR - 2020-08-06 03:42:01 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near ')
ORDER BY `firstname` DESC' at line 3 - Invalid query: SELECT *
FROM `tblstaff`
WHERE `staffid` IN()
ORDER BY `firstname` DESC
ERROR - 2020-08-06 03:42:01 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /home/worksuite/public_html/os/system/core/Exceptions.php:271) /home/worksuite/public_html/os/system/core/Common.php 570
ERROR - 2020-08-06 03:43:01 --> Severity: Notice --> Trying to get property 'staffid' of non-object /home/worksuite/public_html/os/application/libraries/mails/Staff_event_notification.php 27
ERROR - 2020-08-06 03:43:01 --> Severity: Notice --> Trying to get property 'email' of non-object /home/worksuite/public_html/os/application/libraries/mails/Staff_event_notification.php 30
ERROR - 2020-08-06 03:43:01 --> Severity: Notice --> Trying to get property 'staffid' of non-object /home/worksuite/public_html/os/application/libraries/mails/Staff_event_notification.php 31
ERROR - 2020-08-06 03:43:01 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near ')
ORDER BY `firstname` DESC' at line 3 - Invalid query: SELECT *
FROM `tblstaff`
WHERE `staffid` IN()
ORDER BY `firstname` DESC
ERROR - 2020-08-06 03:43:01 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /home/worksuite/public_html/os/system/core/Exceptions.php:271) /home/worksuite/public_html/os/system/core/Common.php 570
ERROR - 2020-08-06 01:44:01 --> 404 Page Not Found: ../../modules/assets/controllers/Assets/plugins
ERROR - 2020-08-06 03:44:01 --> Severity: Notice --> Trying to get property 'staffid' of non-object /home/worksuite/public_html/os/application/libraries/mails/Staff_event_notification.php 27
ERROR - 2020-08-06 03:44:01 --> Severity: Notice --> Trying to get property 'email' of non-object /home/worksuite/public_html/os/application/libraries/mails/Staff_event_notification.php 30
ERROR - 2020-08-06 03:44:01 --> Severity: Notice --> Trying to get property 'staffid' of non-object /home/worksuite/public_html/os/application/libraries/mails/Staff_event_notification.php 31
ERROR - 2020-08-06 03:44:01 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near ')
ORDER BY `firstname` DESC' at line 3 - Invalid query: SELECT *
FROM `tblstaff`
WHERE `staffid` IN()
ORDER BY `firstname` DESC
ERROR - 2020-08-06 03:44:01 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /home/worksuite/public_html/os/system/core/Exceptions.php:271) /home/worksuite/public_html/os/system/core/Common.php 570
ERROR - 2020-08-06 01:44:02 --> 404 Page Not Found: ../../modules/assets/controllers/Assets/plugins
ERROR - 2020-08-06 01:44:13 --> 404 Page Not Found: ../../modules/assets/controllers/Assets/plugins
ERROR - 2020-08-06 01:44:14 --> 404 Page Not Found: ../../modules/assets/controllers/Assets/plugins
ERROR - 2020-08-06 01:44:33 --> 404 Page Not Found: ../../modules/assets/controllers/Assets/plugins
ERROR - 2020-08-06 01:44:34 --> 404 Page Not Found: ../../modules/assets/controllers/Assets/plugins
ERROR - 2020-08-06 01:44:49 --> 404 Page Not Found: ../../modules/assets/controllers/Assets/plugins
ERROR - 2020-08-06 03:45:01 --> Severity: Notice --> Trying to get property 'staffid' of non-object /home/worksuite/public_html/os/application/libraries/mails/Staff_event_notification.php 27
ERROR - 2020-08-06 03:45:01 --> Severity: Notice --> Trying to get property 'email' of non-object /home/worksuite/public_html/os/application/libraries/mails/Staff_event_notification.php 30
ERROR - 2020-08-06 03:45:01 --> Severity: Notice --> Trying to get property 'staffid' of non-object /home/worksuite/public_html/os/application/libraries/mails/Staff_event_notification.php 31
ERROR - 2020-08-06 03:45:01 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near ')
ORDER BY `firstname` DESC' at line 3 - Invalid query: SELECT *
FROM `tblstaff`
WHERE `staffid` IN()
ORDER BY `firstname` DESC
ERROR - 2020-08-06 03:45:01 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /home/worksuite/public_html/os/system/core/Exceptions.php:271) /home/worksuite/public_html/os/system/core/Common.php 570
ERROR - 2020-08-06 03:46:01 --> Severity: Notice --> Trying to get property 'staffid' of non-object /home/worksuite/public_html/os/application/libraries/mails/Staff_event_notification.php 27
ERROR - 2020-08-06 03:46:01 --> Severity: Notice --> Trying to get property 'email' of non-object /home/worksuite/public_html/os/application/libraries/mails/Staff_event_notification.php 30
ERROR - 2020-08-06 03:46:01 --> Severity: Notice --> Trying to get property 'staffid' of non-object /home/worksuite/public_html/os/application/libraries/mails/Staff_event_notification.php 31
ERROR - 2020-08-06 03:46:01 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near ')
ORDER BY `firstname` DESC' at line 3 - Invalid query: SELECT *
FROM `tblstaff`
WHERE `staffid` IN()
ORDER BY `firstname` DESC
ERROR - 2020-08-06 03:46:01 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /home/worksuite/public_html/os/system/core/Exceptions.php:271) /home/worksuite/public_html/os/system/core/Common.php 570
ERROR - 2020-08-06 01:46:05 --> 404 Page Not Found: ../../modules/assets/controllers/Assets/plugins
ERROR - 2020-08-06 01:46:06 --> 404 Page Not Found: ../../modules/assets/controllers/Assets/plugins
ERROR - 2020-08-06 03:47:01 --> Severity: Notice --> Trying to get property 'staffid' of non-object /home/worksuite/public_html/os/application/libraries/mails/Staff_event_notification.php 27
ERROR - 2020-08-06 03:47:01 --> Severity: Notice --> Trying to get property 'email' of non-object /home/worksuite/public_html/os/application/libraries/mails/Staff_event_notification.php 30
ERROR - 2020-08-06 03:47:01 --> Severity: Notice --> Trying to get property 'staffid' of non-object /home/worksuite/public_html/os/application/libraries/mails/Staff_event_notification.php 31
ERROR - 2020-08-06 03:47:01 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near ')
ORDER BY `firstname` DESC' at line 3 - Invalid query: SELECT *
FROM `tblstaff`
WHERE `staffid` IN()
ORDER BY `firstname` DESC
ERROR - 2020-08-06 03:47:01 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /home/worksuite/public_html/os/system/core/Exceptions.php:271) /home/worksuite/public_html/os/system/core/Common.php 570
ERROR - 2020-08-06 03:48:01 --> Severity: Notice --> Trying to get property 'staffid' of non-object /home/worksuite/public_html/os/application/libraries/mails/Staff_event_notification.php 27
ERROR - 2020-08-06 03:48:02 --> Severity: Notice --> Trying to get property 'email' of non-object /home/worksuite/public_html/os/application/libraries/mails/Staff_event_notification.php 30
ERROR - 2020-08-06 03:48:02 --> Severity: Notice --> Trying to get property 'staffid' of non-object /home/worksuite/public_html/os/application/libraries/mails/Staff_event_notification.php 31
ERROR - 2020-08-06 03:48:02 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near ')
ORDER BY `firstname` DESC' at line 3 - Invalid query: SELECT *
FROM `tblstaff`
WHERE `staffid` IN()
ORDER BY `firstname` DESC
ERROR - 2020-08-06 03:48:02 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /home/worksuite/public_html/os/system/core/Exceptions.php:271) /home/worksuite/public_html/os/system/core/Common.php 570
ERROR - 2020-08-06 03:49:01 --> Severity: Notice --> Trying to get property 'staffid' of non-object /home/worksuite/public_html/os/application/libraries/mails/Staff_event_notification.php 27
ERROR - 2020-08-06 03:49:01 --> Severity: Notice --> Trying to get property 'email' of non-object /home/worksuite/public_html/os/application/libraries/mails/Staff_event_notification.php 30
ERROR - 2020-08-06 03:49:01 --> Severity: Notice --> Trying to get property 'staffid' of non-object /home/worksuite/public_html/os/application/libraries/mails/Staff_event_notification.php 31
ERROR - 2020-08-06 03:49:01 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near ')
ORDER BY `firstname` DESC' at line 3 - Invalid query: SELECT *
FROM `tblstaff`
WHERE `staffid` IN()
ORDER BY `firstname` DESC
ERROR - 2020-08-06 03:49:01 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /home/worksuite/public_html/os/system/core/Exceptions.php:271) /home/worksuite/public_html/os/system/core/Common.php 570
ERROR - 2020-08-06 01:50:01 --> 404 Page Not Found: ../../modules/assets/controllers/Assets/plugins
ERROR - 2020-08-06 03:50:01 --> Severity: Notice --> Trying to get property 'staffid' of non-object /home/worksuite/public_html/os/application/libraries/mails/Staff_event_notification.php 27
ERROR - 2020-08-06 03:50:01 --> Severity: Notice --> Trying to get property 'email' of non-object /home/worksuite/public_html/os/application/libraries/mails/Staff_event_notification.php 30
ERROR - 2020-08-06 03:50:01 --> Severity: Notice --> Trying to get property 'staffid' of non-object /home/worksuite/public_html/os/application/libraries/mails/Staff_event_notification.php 31
ERROR - 2020-08-06 03:50:01 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near ')
ORDER BY `firstname` DESC' at line 3 - Invalid query: SELECT *
FROM `tblstaff`
WHERE `staffid` IN()
ORDER BY `firstname` DESC
ERROR - 2020-08-06 03:50:01 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /home/worksuite/public_html/os/system/core/Exceptions.php:271) /home/worksuite/public_html/os/system/core/Common.php 570
ERROR - 2020-08-06 03:51:01 --> Severity: Notice --> Trying to get property 'staffid' of non-object /home/worksuite/public_html/os/application/libraries/mails/Staff_event_notification.php 27
ERROR - 2020-08-06 03:51:01 --> Severity: Notice --> Trying to get property 'email' of non-object /home/worksuite/public_html/os/application/libraries/mails/Staff_event_notification.php 30
ERROR - 2020-08-06 03:51:01 --> Severity: Notice --> Trying to get property 'staffid' of non-object /home/worksuite/public_html/os/application/libraries/mails/Staff_event_notification.php 31
ERROR - 2020-08-06 03:51:01 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near ')
ORDER BY `firstname` DESC' at line 3 - Invalid query: SELECT *
FROM `tblstaff`
WHERE `staffid` IN()
ORDER BY `firstname` DESC
ERROR - 2020-08-06 03:51:01 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /home/worksuite/public_html/os/system/core/Exceptions.php:271) /home/worksuite/public_html/os/system/core/Common.php 570
ERROR - 2020-08-06 03:52:01 --> Severity: Notice --> Trying to get property 'staffid' of non-object /home/worksuite/public_html/os/application/libraries/mails/Staff_event_notification.php 27
ERROR - 2020-08-06 03:52:01 --> Severity: Notice --> Trying to get property 'email' of non-object /home/worksuite/public_html/os/application/libraries/mails/Staff_event_notification.php 30
ERROR - 2020-08-06 03:52:01 --> Severity: Notice --> Trying to get property 'staffid' of non-object /home/worksuite/public_html/os/application/libraries/mails/Staff_event_notification.php 31
ERROR - 2020-08-06 03:52:01 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near ')
ORDER BY `firstname` DESC' at line 3 - Invalid query: SELECT *
FROM `tblstaff`
WHERE `staffid` IN()
ORDER BY `firstname` DESC
ERROR - 2020-08-06 03:52:01 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /home/worksuite/public_html/os/system/core/Exceptions.php:271) /home/worksuite/public_html/os/system/core/Common.php 570
ERROR - 2020-08-06 03:53:02 --> Severity: Notice --> Trying to get property 'staffid' of non-object /home/worksuite/public_html/os/application/libraries/mails/Staff_event_notification.php 27
ERROR - 2020-08-06 03:53:02 --> Severity: Notice --> Trying to get property 'email' of non-object /home/worksuite/public_html/os/application/libraries/mails/Staff_event_notification.php 30
ERROR - 2020-08-06 03:53:02 --> Severity: Notice --> Trying to get property 'staffid' of non-object /home/worksuite/public_html/os/application/libraries/mails/Staff_event_notification.php 31
ERROR - 2020-08-06 03:53:02 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near ')
ORDER BY `firstname` DESC' at line 3 - Invalid query: SELECT *
FROM `tblstaff`
WHERE `staffid` IN()
ORDER BY `firstname` DESC
ERROR - 2020-08-06 03:53:02 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /home/worksuite/public_html/os/system/core/Exceptions.php:271) /home/worksuite/public_html/os/system/core/Common.php 570
ERROR - 2020-08-06 03:54:01 --> Severity: Notice --> Trying to get property 'staffid' of non-object /home/worksuite/public_html/os/application/libraries/mails/Staff_event_notification.php 27
ERROR - 2020-08-06 03:54:01 --> Severity: Notice --> Trying to get property 'email' of non-object /home/worksuite/public_html/os/application/libraries/mails/Staff_event_notification.php 30
ERROR - 2020-08-06 03:54:01 --> Severity: Notice --> Trying to get property 'staffid' of non-object /home/worksuite/public_html/os/application/libraries/mails/Staff_event_notification.php 31
ERROR - 2020-08-06 03:54:01 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near ')
ORDER BY `firstname` DESC' at line 3 - Invalid query: SELECT *
FROM `tblstaff`
WHERE `staffid` IN()
ORDER BY `firstname` DESC
ERROR - 2020-08-06 03:54:01 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /home/worksuite/public_html/os/system/core/Exceptions.php:271) /home/worksuite/public_html/os/system/core/Common.php 570
ERROR - 2020-08-06 03:55:02 --> Severity: Notice --> Trying to get property 'staffid' of non-object /home/worksuite/public_html/os/application/libraries/mails/Staff_event_notification.php 27
ERROR - 2020-08-06 03:55:02 --> Severity: Notice --> Trying to get property 'email' of non-object /home/worksuite/public_html/os/application/libraries/mails/Staff_event_notification.php 30
ERROR - 2020-08-06 03:55:02 --> Severity: Notice --> Trying to get property 'staffid' of non-object /home/worksuite/public_html/os/application/libraries/mails/Staff_event_notification.php 31
ERROR - 2020-08-06 03:55:02 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near ')
ORDER BY `firstname` DESC' at line 3 - Invalid query: SELECT *
FROM `tblstaff`
WHERE `staffid` IN()
ORDER BY `firstname` DESC
ERROR - 2020-08-06 03:55:02 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /home/worksuite/public_html/os/system/core/Exceptions.php:271) /home/worksuite/public_html/os/system/core/Common.php 570
ERROR - 2020-08-06 03:56:01 --> Severity: Notice --> Trying to get property 'staffid' of non-object /home/worksuite/public_html/os/application/libraries/mails/Staff_event_notification.php 27
ERROR - 2020-08-06 03:56:01 --> Severity: Notice --> Trying to get property 'email' of non-object /home/worksuite/public_html/os/application/libraries/mails/Staff_event_notification.php 30
ERROR - 2020-08-06 03:56:01 --> Severity: Notice --> Trying to get property 'staffid' of non-object /home/worksuite/public_html/os/application/libraries/mails/Staff_event_notification.php 31
ERROR - 2020-08-06 03:56:01 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near ')
ORDER BY `firstname` DESC' at line 3 - Invalid query: SELECT *
FROM `tblstaff`
WHERE `staffid` IN()
ORDER BY `firstname` DESC
ERROR - 2020-08-06 03:56:01 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /home/worksuite/public_html/os/system/core/Exceptions.php:271) /home/worksuite/public_html/os/system/core/Common.php 570
ERROR - 2020-08-06 03:57:01 --> Severity: Notice --> Trying to get property 'staffid' of non-object /home/worksuite/public_html/os/application/libraries/mails/Staff_event_notification.php 27
ERROR - 2020-08-06 03:57:02 --> Severity: Notice --> Trying to get property 'email' of non-object /home/worksuite/public_html/os/application/libraries/mails/Staff_event_notification.php 30
ERROR - 2020-08-06 03:57:02 --> Severity: Notice --> Trying to get property 'staffid' of non-object /home/worksuite/public_html/os/application/libraries/mails/Staff_event_notification.php 31
ERROR - 2020-08-06 03:57:02 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near ')
ORDER BY `firstname` DESC' at line 3 - Invalid query: SELECT *
FROM `tblstaff`
WHERE `staffid` IN()
ORDER BY `firstname` DESC
ERROR - 2020-08-06 03:57:02 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /home/worksuite/public_html/os/system/core/Exceptions.php:271) /home/worksuite/public_html/os/system/core/Common.php 570
ERROR - 2020-08-06 03:58:01 --> Severity: Notice --> Trying to get property 'staffid' of non-object /home/worksuite/public_html/os/application/libraries/mails/Staff_event_notification.php 27
ERROR - 2020-08-06 03:58:01 --> Severity: Notice --> Trying to get property 'email' of non-object /home/worksuite/public_html/os/application/libraries/mails/Staff_event_notification.php 30
ERROR - 2020-08-06 03:58:01 --> Severity: Notice --> Trying to get property 'staffid' of non-object /home/worksuite/public_html/os/application/libraries/mails/Staff_event_notification.php 31
ERROR - 2020-08-06 03:58:01 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near ')
ORDER BY `firstname` DESC' at line 3 - Invalid query: SELECT *
FROM `tblstaff`
WHERE `staffid` IN()
ORDER BY `firstname` DESC
ERROR - 2020-08-06 03:58:01 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /home/worksuite/public_html/os/system/core/Exceptions.php:271) /home/worksuite/public_html/os/system/core/Common.php 570
ERROR - 2020-08-06 03:59:02 --> Severity: Notice --> Trying to get property 'staffid' of non-object /home/worksuite/public_html/os/application/libraries/mails/Staff_event_notification.php 27
ERROR - 2020-08-06 03:59:02 --> Severity: Notice --> Trying to get property 'email' of non-object /home/worksuite/public_html/os/application/libraries/mails/Staff_event_notification.php 30
ERROR - 2020-08-06 03:59:02 --> Severity: Notice --> Trying to get property 'staffid' of non-object /home/worksuite/public_html/os/application/libraries/mails/Staff_event_notification.php 31
ERROR - 2020-08-06 03:59:02 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near ')
ORDER BY `firstname` DESC' at line 3 - Invalid query: SELECT *
FROM `tblstaff`
WHERE `staffid` IN()
ORDER BY `firstname` DESC
ERROR - 2020-08-06 03:59:02 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /home/worksuite/public_html/os/system/core/Exceptions.php:271) /home/worksuite/public_html/os/system/core/Common.php 570
ERROR - 2020-08-06 04:00:01 --> Severity: Notice --> Trying to get property 'staffid' of non-object /home/worksuite/public_html/os/application/libraries/mails/Staff_event_notification.php 27
ERROR - 2020-08-06 04:00:01 --> Severity: Notice --> Trying to get property 'email' of non-object /home/worksuite/public_html/os/application/libraries/mails/Staff_event_notification.php 30
ERROR - 2020-08-06 04:00:01 --> Severity: Notice --> Trying to get property 'staffid' of non-object /home/worksuite/public_html/os/application/libraries/mails/Staff_event_notification.php 31
ERROR - 2020-08-06 04:00:01 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near ')
ORDER BY `firstname` DESC' at line 3 - Invalid query: SELECT *
FROM `tblstaff`
WHERE `staffid` IN()
ORDER BY `firstname` DESC
ERROR - 2020-08-06 04:00:01 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /home/worksuite/public_html/os/system/core/Exceptions.php:271) /home/worksuite/public_html/os/system/core/Common.php 570
ERROR - 2020-08-06 04:01:02 --> Severity: Notice --> Trying to get property 'staffid' of non-object /home/worksuite/public_html/os/application/libraries/mails/Staff_event_notification.php 27
ERROR - 2020-08-06 04:01:02 --> Severity: Notice --> Trying to get property 'email' of non-object /home/worksuite/public_html/os/application/libraries/mails/Staff_event_notification.php 30
ERROR - 2020-08-06 04:01:02 --> Severity: Notice --> Trying to get property 'staffid' of non-object /home/worksuite/public_html/os/application/libraries/mails/Staff_event_notification.php 31
ERROR - 2020-08-06 04:01:02 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near ')
ORDER BY `firstname` DESC' at line 3 - Invalid query: SELECT *
FROM `tblstaff`
WHERE `staffid` IN()
ORDER BY `firstname` DESC
ERROR - 2020-08-06 04:01:02 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /home/worksuite/public_html/os/system/core/Exceptions.php:271) /home/worksuite/public_html/os/system/core/Common.php 570
ERROR - 2020-08-06 04:02:01 --> Severity: Notice --> Trying to get property 'staffid' of non-object /home/worksuite/public_html/os/application/libraries/mails/Staff_event_notification.php 27
ERROR - 2020-08-06 04:02:01 --> Severity: Notice --> Trying to get property 'email' of non-object /home/worksuite/public_html/os/application/libraries/mails/Staff_event_notification.php 30
ERROR - 2020-08-06 04:02:01 --> Severity: Notice --> Trying to get property 'staffid' of non-object /home/worksuite/public_html/os/application/libraries/mails/Staff_event_notification.php 31
ERROR - 2020-08-06 04:02:01 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near ')
ORDER BY `firstname` DESC' at line 3 - Invalid query: SELECT *
FROM `tblstaff`
WHERE `staffid` IN()
ORDER BY `firstname` DESC
ERROR - 2020-08-06 04:02:01 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /home/worksuite/public_html/os/system/core/Exceptions.php:271) /home/worksuite/public_html/os/system/core/Common.php 570
ERROR - 2020-08-06 04:03:01 --> Severity: Notice --> Trying to get property 'staffid' of non-object /home/worksuite/public_html/os/application/libraries/mails/Staff_event_notification.php 27
ERROR - 2020-08-06 04:03:01 --> Severity: Notice --> Trying to get property 'email' of non-object /home/worksuite/public_html/os/application/libraries/mails/Staff_event_notification.php 30
ERROR - 2020-08-06 04:03:01 --> Severity: Notice --> Trying to get property 'staffid' of non-object /home/worksuite/public_html/os/application/libraries/mails/Staff_event_notification.php 31
ERROR - 2020-08-06 04:03:01 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near ')
ORDER BY `firstname` DESC' at line 3 - Invalid query: SELECT *
FROM `tblstaff`
WHERE `staffid` IN()
ORDER BY `firstname` DESC
ERROR - 2020-08-06 04:03:01 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /home/worksuite/public_html/os/system/core/Exceptions.php:271) /home/worksuite/public_html/os/system/core/Common.php 570
ERROR - 2020-08-06 04:04:01 --> Severity: Notice --> session_start(): A session had already been started - ignoring /home/worksuite/public_html/os/application/controllers/Authentication.php 148
ERROR - 2020-08-06 04:04:02 --> Severity: Notice --> Trying to get property 'staffid' of non-object /home/worksuite/public_html/os/application/libraries/mails/Staff_event_notification.php 27
ERROR - 2020-08-06 04:04:02 --> Severity: Notice --> Trying to get property 'email' of non-object /home/worksuite/public_html/os/application/libraries/mails/Staff_event_notification.php 30
ERROR - 2020-08-06 04:04:02 --> Severity: Notice --> Trying to get property 'staffid' of non-object /home/worksuite/public_html/os/application/libraries/mails/Staff_event_notification.php 31
ERROR - 2020-08-06 04:04:02 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near ')
ORDER BY `firstname` DESC' at line 3 - Invalid query: SELECT *
FROM `tblstaff`
WHERE `staffid` IN()
ORDER BY `firstname` DESC
ERROR - 2020-08-06 04:04:02 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /home/worksuite/public_html/os/system/core/Exceptions.php:271) /home/worksuite/public_html/os/system/core/Common.php 570
ERROR - 2020-08-06 04:05:01 --> Severity: Notice --> Trying to get property 'staffid' of non-object /home/worksuite/public_html/os/application/libraries/mails/Staff_event_notification.php 27
ERROR - 2020-08-06 04:05:01 --> Severity: Notice --> Trying to get property 'email' of non-object /home/worksuite/public_html/os/application/libraries/mails/Staff_event_notification.php 30
ERROR - 2020-08-06 04:05:01 --> Severity: Notice --> Trying to get property 'staffid' of non-object /home/worksuite/public_html/os/application/libraries/mails/Staff_event_notification.php 31
ERROR - 2020-08-06 04:05:01 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near ')
ORDER BY `firstname` DESC' at line 3 - Invalid query: SELECT *
FROM `tblstaff`
WHERE `staffid` IN()
ORDER BY `firstname` DESC
ERROR - 2020-08-06 04:05:01 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /home/worksuite/public_html/os/system/core/Exceptions.php:271) /home/worksuite/public_html/os/system/core/Common.php 570
ERROR - 2020-08-06 04:06:01 --> Severity: Notice --> Trying to get property 'staffid' of non-object /home/worksuite/public_html/os/application/libraries/mails/Staff_event_notification.php 27
ERROR - 2020-08-06 04:06:01 --> Severity: Notice --> Trying to get property 'email' of non-object /home/worksuite/public_html/os/application/libraries/mails/Staff_event_notification.php 30
ERROR - 2020-08-06 04:06:01 --> Severity: Notice --> Trying to get property 'staffid' of non-object /home/worksuite/public_html/os/application/libraries/mails/Staff_event_notification.php 31
ERROR - 2020-08-06 04:06:01 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near ')
ORDER BY `firstname` DESC' at line 3 - Invalid query: SELECT *
FROM `tblstaff`
WHERE `staffid` IN()
ORDER BY `firstname` DESC
ERROR - 2020-08-06 04:06:01 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /home/worksuite/public_html/os/system/core/Exceptions.php:271) /home/worksuite/public_html/os/system/core/Common.php 570
ERROR - 2020-08-06 04:07:01 --> Severity: Notice --> Trying to get property 'staffid' of non-object /home/worksuite/public_html/os/application/libraries/mails/Staff_event_notification.php 27
ERROR - 2020-08-06 04:07:01 --> Severity: Notice --> Trying to get property 'email' of non-object /home/worksuite/public_html/os/application/libraries/mails/Staff_event_notification.php 30
ERROR - 2020-08-06 04:07:01 --> Severity: Notice --> Trying to get property 'staffid' of non-object /home/worksuite/public_html/os/application/libraries/mails/Staff_event_notification.php 31
ERROR - 2020-08-06 04:07:01 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near ')
ORDER BY `firstname` DESC' at line 3 - Invalid query: SELECT *
FROM `tblstaff`
WHERE `staffid` IN()
ORDER BY `firstname` DESC
ERROR - 2020-08-06 04:07:01 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /home/worksuite/public_html/os/system/core/Exceptions.php:271) /home/worksuite/public_html/os/system/core/Common.php 570
ERROR - 2020-08-06 02:22:29 --> 404 Page Not Found: ../../modules/assets/controllers/Assets/plugins
ERROR - 2020-08-06 02:22:30 --> 404 Page Not Found: ../../modules/assets/controllers/Assets/plugins
ERROR - 2020-08-06 02:22:54 --> 404 Page Not Found: ../../modules/assets/controllers/Assets/plugins
ERROR - 2020-08-06 02:22:54 --> 404 Page Not Found: ../../modules/assets/controllers/Assets/plugins
ERROR - 2020-08-06 02:22:58 --> 404 Page Not Found: ../../modules/assets/controllers/Assets/plugins
ERROR - 2020-08-06 02:22:58 --> 404 Page Not Found: ../../modules/assets/controllers/Assets/plugins
ERROR - 2020-08-06 04:23:02 --> Severity: Notice --> Trying to get property 'staffid' of non-object /home/worksuite/public_html/os/application/libraries/mails/Staff_event_notification.php 27
ERROR - 2020-08-06 04:23:02 --> Severity: Notice --> Trying to get property 'email' of non-object /home/worksuite/public_html/os/application/libraries/mails/Staff_event_notification.php 30
ERROR - 2020-08-06 04:23:02 --> Severity: Notice --> Trying to get property 'staffid' of non-object /home/worksuite/public_html/os/application/libraries/mails/Staff_event_notification.php 31
ERROR - 2020-08-06 04:23:02 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near ')
ORDER BY `firstname` DESC' at line 3 - Invalid query: SELECT *
FROM `tblstaff`
WHERE `staffid` IN()
ORDER BY `firstname` DESC
ERROR - 2020-08-06 04:23:02 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /home/worksuite/public_html/os/system/core/Exceptions.php:271) /home/worksuite/public_html/os/system/core/Common.php 570
ERROR - 2020-08-06 02:23:15 --> 404 Page Not Found: ../../modules/assets/controllers/Assets/plugins
ERROR - 2020-08-06 02:23:16 --> 404 Page Not Found: ../../modules/assets/controllers/Assets/plugins
ERROR - 2020-08-06 04:24:01 --> Severity: Notice --> Trying to get property 'staffid' of non-object /home/worksuite/public_html/os/application/libraries/mails/Staff_event_notification.php 27
ERROR - 2020-08-06 04:24:01 --> Severity: Notice --> Trying to get property 'email' of non-object /home/worksuite/public_html/os/application/libraries/mails/Staff_event_notification.php 30
ERROR - 2020-08-06 04:24:01 --> Severity: Notice --> Trying to get property 'staffid' of non-object /home/worksuite/public_html/os/application/libraries/mails/Staff_event_notification.php 31
ERROR - 2020-08-06 04:24:01 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near ')
ORDER BY `firstname` DESC' at line 3 - Invalid query: SELECT *
FROM `tblstaff`
WHERE `staffid` IN()
ORDER BY `firstname` DESC
ERROR - 2020-08-06 04:24:01 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /home/worksuite/public_html/os/system/core/Exceptions.php:271) /home/worksuite/public_html/os/system/core/Common.php 570
ERROR - 2020-08-06 04:25:02 --> Severity: Notice --> Trying to get property 'staffid' of non-object /home/worksuite/public_html/os/application/libraries/mails/Staff_event_notification.php 27
ERROR - 2020-08-06 04:25:02 --> Severity: Notice --> Trying to get property 'email' of non-object /home/worksuite/public_html/os/application/libraries/mails/Staff_event_notification.php 30
ERROR - 2020-08-06 04:25:02 --> Severity: Notice --> Trying to get property 'staffid' of non-object /home/worksuite/public_html/os/application/libraries/mails/Staff_event_notification.php 31
ERROR - 2020-08-06 04:25:02 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near ')
ORDER BY `firstname` DESC' at line 3 - Invalid query: SELECT *
FROM `tblstaff`
WHERE `staffid` IN()
ORDER BY `firstname` DESC
ERROR - 2020-08-06 04:25:02 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /home/worksuite/public_html/os/system/core/Exceptions.php:271) /home/worksuite/public_html/os/system/core/Common.php 570
ERROR - 2020-08-06 04:26:01 --> Severity: Notice --> Trying to get property 'staffid' of non-object /home/worksuite/public_html/os/application/libraries/mails/Staff_event_notification.php 27
ERROR - 2020-08-06 04:26:01 --> Severity: Notice --> Trying to get property 'email' of non-object /home/worksuite/public_html/os/application/libraries/mails/Staff_event_notification.php 30
ERROR - 2020-08-06 04:26:01 --> Severity: Notice --> Trying to get property 'staffid' of non-object /home/worksuite/public_html/os/application/libraries/mails/Staff_event_notification.php 31
ERROR - 2020-08-06 04:26:01 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near ')
ORDER BY `firstname` DESC' at line 3 - Invalid query: SELECT *
FROM `tblstaff`
WHERE `staffid` IN()
ORDER BY `firstname` DESC
ERROR - 2020-08-06 04:26:01 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /home/worksuite/public_html/os/system/core/Exceptions.php:271) /home/worksuite/public_html/os/system/core/Common.php 570
ERROR - 2020-08-06 04:27:02 --> Severity: Notice --> Trying to get property 'staffid' of non-object /home/worksuite/public_html/os/application/libraries/mails/Staff_event_notification.php 27
ERROR - 2020-08-06 04:27:02 --> Severity: Notice --> Trying to get property 'email' of non-object /home/worksuite/public_html/os/application/libraries/mails/Staff_event_notification.php 30
ERROR - 2020-08-06 04:27:02 --> Severity: Notice --> Trying to get property 'staffid' of non-object /home/worksuite/public_html/os/application/libraries/mails/Staff_event_notification.php 31
ERROR - 2020-08-06 04:27:02 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near ')
ORDER BY `firstname` DESC' at line 3 - Invalid query: SELECT *
FROM `tblstaff`
WHERE `staffid` IN()
ORDER BY `firstname` DESC
ERROR - 2020-08-06 04:27:02 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /home/worksuite/public_html/os/system/core/Exceptions.php:271) /home/worksuite/public_html/os/system/core/Common.php 570
ERROR - 2020-08-06 04:28:01 --> Severity: Notice --> Trying to get property 'staffid' of non-object /home/worksuite/public_html/os/application/libraries/mails/Staff_event_notification.php 27
ERROR - 2020-08-06 04:28:01 --> Severity: Notice --> Trying to get property 'email' of non-object /home/worksuite/public_html/os/application/libraries/mails/Staff_event_notification.php 30
ERROR - 2020-08-06 04:28:01 --> Severity: Notice --> Trying to get property 'staffid' of non-object /home/worksuite/public_html/os/application/libraries/mails/Staff_event_notification.php 31
ERROR - 2020-08-06 04:28:01 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near ')
ORDER BY `firstname` DESC' at line 3 - Invalid query: SELECT *
FROM `tblstaff`
WHERE `staffid` IN()
ORDER BY `firstname` DESC
ERROR - 2020-08-06 04:28:01 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /home/worksuite/public_html/os/system/core/Exceptions.php:271) /home/worksuite/public_html/os/system/core/Common.php 570
ERROR - 2020-08-06 04:29:01 --> Severity: Notice --> Trying to get property 'staffid' of non-object /home/worksuite/public_html/os/application/libraries/mails/Staff_event_notification.php 27
ERROR - 2020-08-06 04:29:01 --> Severity: Notice --> Trying to get property 'email' of non-object /home/worksuite/public_html/os/application/libraries/mails/Staff_event_notification.php 30
ERROR - 2020-08-06 04:29:01 --> Severity: Notice --> Trying to get property 'staffid' of non-object /home/worksuite/public_html/os/application/libraries/mails/Staff_event_notification.php 31
ERROR - 2020-08-06 04:29:01 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near ')
ORDER BY `firstname` DESC' at line 3 - Invalid query: SELECT *
FROM `tblstaff`
WHERE `staffid` IN()
ORDER BY `firstname` DESC
ERROR - 2020-08-06 04:29:01 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /home/worksuite/public_html/os/system/core/Exceptions.php:271) /home/worksuite/public_html/os/system/core/Common.php 570
ERROR - 2020-08-06 04:30:02 --> Severity: Notice --> Trying to get property 'staffid' of non-object /home/worksuite/public_html/os/application/libraries/mails/Staff_event_notification.php 27
ERROR - 2020-08-06 04:30:02 --> Severity: Notice --> Trying to get property 'email' of non-object /home/worksuite/public_html/os/application/libraries/mails/Staff_event_notification.php 30
ERROR - 2020-08-06 04:30:02 --> Severity: Notice --> Trying to get property 'staffid' of non-object /home/worksuite/public_html/os/application/libraries/mails/Staff_event_notification.php 31
ERROR - 2020-08-06 04:30:02 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near ')
ORDER BY `firstname` DESC' at line 3 - Invalid query: SELECT *
FROM `tblstaff`
WHERE `staffid` IN()
ORDER BY `firstname` DESC
ERROR - 2020-08-06 04:30:02 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /home/worksuite/public_html/os/system/core/Exceptions.php:271) /home/worksuite/public_html/os/system/core/Common.php 570
ERROR - 2020-08-06 04:31:02 --> Severity: Notice --> Trying to get property 'staffid' of non-object /home/worksuite/public_html/os/application/libraries/mails/Staff_event_notification.php 27
ERROR - 2020-08-06 04:31:02 --> Severity: Notice --> Trying to get property 'email' of non-object /home/worksuite/public_html/os/application/libraries/mails/Staff_event_notification.php 30
ERROR - 2020-08-06 04:31:02 --> Severity: Notice --> Trying to get property 'staffid' of non-object /home/worksuite/public_html/os/application/libraries/mails/Staff_event_notification.php 31
ERROR - 2020-08-06 04:31:02 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near ')
ORDER BY `firstname` DESC' at line 3 - Invalid query: SELECT *
FROM `tblstaff`
WHERE `staffid` IN()
ORDER BY `firstname` DESC
ERROR - 2020-08-06 04:31:02 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /home/worksuite/public_html/os/system/core/Exceptions.php:271) /home/worksuite/public_html/os/system/core/Common.php 570
ERROR - 2020-08-06 04:32:02 --> Severity: Notice --> Trying to get property 'staffid' of non-object /home/worksuite/public_html/os/application/libraries/mails/Staff_event_notification.php 27
ERROR - 2020-08-06 04:32:02 --> Severity: Notice --> Trying to get property 'email' of non-object /home/worksuite/public_html/os/application/libraries/mails/Staff_event_notification.php 30
ERROR - 2020-08-06 04:32:02 --> Severity: Notice --> Trying to get property 'staffid' of non-object /home/worksuite/public_html/os/application/libraries/mails/Staff_event_notification.php 31
ERROR - 2020-08-06 04:32:02 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near ')
ORDER BY `firstname` DESC' at line 3 - Invalid query: SELECT *
FROM `tblstaff`
WHERE `staffid` IN()
ORDER BY `firstname` DESC
ERROR - 2020-08-06 04:32:02 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /home/worksuite/public_html/os/system/core/Exceptions.php:271) /home/worksuite/public_html/os/system/core/Common.php 570
ERROR - 2020-08-06 04:33:01 --> Severity: Notice --> Trying to get property 'staffid' of non-object /home/worksuite/public_html/os/application/libraries/mails/Staff_event_notification.php 27
ERROR - 2020-08-06 04:33:01 --> Severity: Notice --> Trying to get property 'email' of non-object /home/worksuite/public_html/os/application/libraries/mails/Staff_event_notification.php 30
ERROR - 2020-08-06 04:33:01 --> Severity: Notice --> Trying to get property 'staffid' of non-object /home/worksuite/public_html/os/application/libraries/mails/Staff_event_notification.php 31
ERROR - 2020-08-06 04:33:01 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near ')
ORDER BY `firstname` DESC' at line 3 - Invalid query: SELECT *
FROM `tblstaff`
WHERE `staffid` IN()
ORDER BY `firstname` DESC
ERROR - 2020-08-06 04:33:01 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /home/worksuite/public_html/os/system/core/Exceptions.php:271) /home/worksuite/public_html/os/system/core/Common.php 570
ERROR - 2020-08-06 04:34:02 --> Severity: Notice --> Trying to get property 'staffid' of non-object /home/worksuite/public_html/os/application/libraries/mails/Staff_event_notification.php 27
ERROR - 2020-08-06 04:34:02 --> Severity: Notice --> Trying to get property 'email' of non-object /home/worksuite/public_html/os/application/libraries/mails/Staff_event_notification.php 30
ERROR - 2020-08-06 04:34:02 --> Severity: Notice --> Trying to get property 'staffid' of non-object /home/worksuite/public_html/os/application/libraries/mails/Staff_event_notification.php 31
ERROR - 2020-08-06 04:34:02 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near ')
ORDER BY `firstname` DESC' at line 3 - Invalid query: SELECT *
FROM `tblstaff`
WHERE `staffid` IN()
ORDER BY `firstname` DESC
ERROR - 2020-08-06 04:34:02 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /home/worksuite/public_html/os/system/core/Exceptions.php:271) /home/worksuite/public_html/os/system/core/Common.php 570
ERROR - 2020-08-06 04:35:02 --> Severity: Notice --> Trying to get property 'staffid' of non-object /home/worksuite/public_html/os/application/libraries/mails/Staff_event_notification.php 27
ERROR - 2020-08-06 04:35:02 --> Severity: Notice --> Trying to get property 'email' of non-object /home/worksuite/public_html/os/application/libraries/mails/Staff_event_notification.php 30
ERROR - 2020-08-06 04:35:02 --> Severity: Notice --> Trying to get property 'staffid' of non-object /home/worksuite/public_html/os/application/libraries/mails/Staff_event_notification.php 31
ERROR - 2020-08-06 04:35:02 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near ')
ORDER BY `firstname` DESC' at line 3 - Invalid query: SELECT *
FROM `tblstaff`
WHERE `staffid` IN()
ORDER BY `firstname` DESC
ERROR - 2020-08-06 04:35:02 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /home/worksuite/public_html/os/system/core/Exceptions.php:271) /home/worksuite/public_html/os/system/core/Common.php 570
ERROR - 2020-08-06 04:36:02 --> Severity: Notice --> Trying to get property 'staffid' of non-object /home/worksuite/public_html/os/application/libraries/mails/Staff_event_notification.php 27
ERROR - 2020-08-06 04:36:02 --> Severity: Notice --> Trying to get property 'email' of non-object /home/worksuite/public_html/os/application/libraries/mails/Staff_event_notification.php 30
ERROR - 2020-08-06 04:36:02 --> Severity: Notice --> Trying to get property 'staffid' of non-object /home/worksuite/public_html/os/application/libraries/mails/Staff_event_notification.php 31
ERROR - 2020-08-06 04:36:02 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near ')
ORDER BY `firstname` DESC' at line 3 - Invalid query: SELECT *
FROM `tblstaff`
WHERE `staffid` IN()
ORDER BY `firstname` DESC
ERROR - 2020-08-06 04:36:02 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /home/worksuite/public_html/os/system/core/Exceptions.php:271) /home/worksuite/public_html/os/system/core/Common.php 570
ERROR - 2020-08-06 04:36:42 --> Severity: Notice --> Undefined variable: total_undismissed_announcements /home/worksuite/public_html/os/application/views/admin/dashboard/widgets/user_data.php 54
ERROR - 2020-08-06 02:36:43 --> 404 Page Not Found: ../../modules/assets/controllers/Assets/plugins
ERROR - 2020-08-06 04:36:46 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '*
FROM `tbltasks`, `tbl_sub_options_ref`
WHERE `tbltasks`.`company_username` = '' at line 13 - Invalid query: SELECT tbltasks.name as title, id, (CASE rel_type
        WHEN "contract" THEN (SELECT subject FROM tblcontracts WHERE tblcontracts.id = tbltasks.rel_id)
        WHEN "estimate" THEN (SELECT id FROM tblestimates WHERE tblestimates.id = tbltasks.rel_id)
        WHEN "proposal" THEN (SELECT id FROM tblproposals WHERE tblproposals.id = tbltasks.rel_id)
        WHEN "invoice" THEN (SELECT id FROM tblinvoices WHERE tblinvoices.id = tbltasks.rel_id)
        WHEN "ticket" THEN (SELECT CONCAT(CONCAT("#", tbltickets.ticketid), " - ", tbltickets.subject) FROM tbltickets WHERE tbltickets.ticketid=tbltasks.rel_id)
        WHEN "lead" THEN (SELECT CASE tblleads.email WHEN "" THEN tblleads.name ELSE CONCAT(tblleads.name, " - ", tblleads.email) END FROM tblleads WHERE tblleads.id=tbltasks.rel_id)
        WHEN "customer" THEN (SELECT CASE company WHEN "" THEN (SELECT CONCAT(firstname, " ", lastname) FROM tblcontacts WHERE userid = tblclients.userid and is_primary = 1) ELSE company END FROM tblclients WHERE tblclients.userid=tbltasks.rel_id)
        WHEN "project" THEN (SELECT CONCAT(CONCAT(CONCAT("#", tblprojects.id), " - ", tblprojects.name), " - ", (SELECT CASE company WHEN "" THEN (SELECT CONCAT(firstname, " ", lastname) FROM tblcontacts WHERE userid = tblclients.userid and is_primary = 1) ELSE company END FROM tblclients WHERE userid=tblprojects.clientid)) FROM tblprojects WHERE tblprojects.id=tbltasks.rel_id)
        WHEN "expense" THEN (SELECT CASE expense_name WHEN "" THEN tblexpenses_categories.name ELSE
         CONCAT(tblexpenses_categories.name, ' (', tblexpenses.expense_name, ')') END FROM tblexpenses JOIN tblexpenses_categories ON tblexpenses_categories.id = tblexpenses.category WHERE tblexpenses.id=tbltasks.rel_id)
        ELSE NULL
        END) as rel_name, rel_id, status, CASE WHEN duedate IS NULL THEN startdate ELSE duedate END as date, *
FROM `tbltasks`, `tbl_sub_options_ref`
WHERE `tbltasks`.`company_username` = 'red_spec'
AND `status` != 5
AND CASE WHEN duedate IS NULL THEN (startdate BETWEEN '2020-01-01' AND '2021/08/06') ELSE (duedate BETWEEN '2020-01-01' AND '2021/08/06') END
AND `field_name` = 'calendar_only_assigned_tasks'
ERROR - 2020-08-06 04:37:01 --> Severity: Notice --> Trying to get property 'staffid' of non-object /home/worksuite/public_html/os/application/libraries/mails/Staff_event_notification.php 27
ERROR - 2020-08-06 04:37:01 --> Severity: Notice --> Trying to get property 'email' of non-object /home/worksuite/public_html/os/application/libraries/mails/Staff_event_notification.php 30
ERROR - 2020-08-06 04:37:01 --> Severity: Notice --> Trying to get property 'staffid' of non-object /home/worksuite/public_html/os/application/libraries/mails/Staff_event_notification.php 31
ERROR - 2020-08-06 04:37:01 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near ')
ORDER BY `firstname` DESC' at line 3 - Invalid query: SELECT *
FROM `tblstaff`
WHERE `staffid` IN()
ORDER BY `firstname` DESC
ERROR - 2020-08-06 04:37:01 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /home/worksuite/public_html/os/system/core/Exceptions.php:271) /home/worksuite/public_html/os/system/core/Common.php 570
ERROR - 2020-08-06 04:37:24 --> Severity: Notice --> session_start(): A session had already been started - ignoring /home/worksuite/public_html/os/application/controllers/Authentication.php 148
