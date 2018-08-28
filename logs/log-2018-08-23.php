<?php defined('BASEPATH') OR exit('No direct script access allowed'); ?>

ERROR - 2018-08-23 11:11:43 --> Login Error at line no 27 in C:\wamp64\www\AFP_NEW\api\application\models\Login_user_model.php
ERROR - 2018-08-23 11:11:43 --> Invalid username or password at line no 47 in C:\wamp64\www\AFP_NEW\api\application\controllers\Login_user.php
ERROR - 2018-08-23 11:11:58 --> Login Error at line no 27 in C:\wamp64\www\AFP_NEW\api\application\models\Login_user_model.php
ERROR - 2018-08-23 11:11:59 --> Invalid username or password at line no 47 in C:\wamp64\www\AFP_NEW\api\application\controllers\Login_user.php
ERROR - 2018-08-23 15:02:07 --> mysqli::query(): MySQL server has gone away at line no 305 in C:\wamp64\www\AFP_NEW\api\system\database\drivers\mysqli\mysqli_driver.php
ERROR - 2018-08-23 15:02:07 --> Query error: MySQL server has gone away - Invalid query: INSERT INTO `logs` (`errno`, `errtype`, `errstr`, `errfile`, `errline`, `user_agent`, `ip_address`, `time`) VALUES (2, 'Warning', 'mysqli::query(): MySQL server has gone away', 'C:\\wamp64\\www\\AFP_NEW\\api\\system\\database\\drivers\\mysqli\\mysqli_driver.php', 305, 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/68.0.3440.106 Safari/537.36', '::1', '2018-08-23 15:02:07')
ERROR - 2018-08-23 16:06:59 --> Query error: Unknown column 'us.RoleId=' in 'where clause' - Invalid query: SELECT `us`.`UserId`, `us`.`RoleId` as `RoleId`, `us`.`CompanyId`, `us`.`FirstName`, `us`.`LastName`, `us`.`Title`, `us`.`Sales_Assign`, `us`.`EmailAddress`, `us`.`Password`, `us`.`CountryId`, `us`.`StateId`, `us`.`City`, `us`.`ZipCode`, `us`.`PhoneNumber`, `us`.`IsActive`, `cp`.`Name`, `cp`.`Name`, `usms`.`RoleName`, (select count(CAssessmentId) from tblcandidateassessment where UserId=us.UserId and EndTime is not NULL) as total, (select count(CAssessmentId) from tblcandidateassessment where UserId=us.UserId and EndTime is NULL) as notgiven
FROM `tbluser` `us`
LEFT JOIN `tblcompany` `cp` ON `cp`.`CompanyId` = `us`.`CompanyId`
LEFT JOIN `tblmstuserrole` `usms` ON `usms`.`RoleId` = `us`.`RoleId`
WHERE `us`.`RoleId=` = 3
ORDER BY `us`.`FirstName` ASC
ERROR - 2018-08-23 16:15:00 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '`us`.`RoleId` = 3
ORDER BY `us`.`FirstName` ASC' at line 5 - Invalid query: SELECT `us`.`UserId`, `us`.`RoleId` as `RoleId`, `us`.`CompanyId`, `us`.`FirstName`, `us`.`LastName`, `us`.`Title`, `us`.`Sales_Assign`, `us`.`EmailAddress`, `us`.`Password`, `us`.`CountryId`, `us`.`StateId`, `us`.`City`, `us`.`ZipCode`, `us`.`PhoneNumber`, `us`.`IsActive`, `cp`.`Name`, `cp`.`Name`, `usms`.`RoleName`, (select count(CAssessmentId) from tblcandidateassessment where UserId=us.UserId and EndTime is not NULL) as total, (select count(CAssessmentId) from tblcandidateassessment where UserId=us.UserId and EndTime is NULL) as notgiven
FROM `tbluser` `us`
LEFT JOIN `tblcompany` `cp` ON `cp`.`CompanyId` = `us`.`CompanyId`
LEFT JOIN `tblmstuserrole` `usms` ON `usms`.`RoleId` = `us`.`RoleId`
WHERE `us`.`RoleId=2 ||` `us`.`RoleId` = 3
ORDER BY `us`.`FirstName` ASC
ERROR - 2018-08-23 16:19:12 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '`us`.`RoleId` = 3
ORDER BY `us`.`FirstName` ASC' at line 5 - Invalid query: SELECT `us`.`UserId`, `us`.`RoleId` as `RoleId`, `us`.`CompanyId`, `us`.`FirstName`, `us`.`LastName`, `us`.`Title`, `us`.`Sales_Assign`, `us`.`EmailAddress`, `us`.`Password`, `us`.`CountryId`, `us`.`StateId`, `us`.`City`, `us`.`ZipCode`, `us`.`PhoneNumber`, `us`.`IsActive`, `cp`.`Name`, `cp`.`Name`, `usms`.`RoleName`, (select count(CAssessmentId) from tblcandidateassessment where UserId=us.UserId and EndTime is not NULL) as total, (select count(CAssessmentId) from tblcandidateassessment where UserId=us.UserId and EndTime is NULL) as notgiven
FROM `tbluser` `us`
LEFT JOIN `tblcompany` `cp` ON `cp`.`CompanyId` = `us`.`CompanyId`
LEFT JOIN `tblmstuserrole` `usms` ON `usms`.`RoleId` = `us`.`RoleId`
WHERE `us`.`RoleId=2 ||` `us`.`RoleId` = 3
ORDER BY `us`.`FirstName` ASC
ERROR - 2018-08-23 16:22:35 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '`us`.`RoleId` = 3
ORDER BY `us`.`FirstName` ASC' at line 5 - Invalid query: SELECT `us`.`UserId`, `us`.`RoleId` as `RoleId`, `us`.`CompanyId`, `us`.`FirstName`, `us`.`LastName`, `us`.`Title`, `us`.`Sales_Assign`, `us`.`EmailAddress`, `us`.`Password`, `us`.`CountryId`, `us`.`StateId`, `us`.`City`, `us`.`ZipCode`, `us`.`PhoneNumber`, `us`.`IsActive`, `cp`.`Name`, `cp`.`Name`, `usms`.`RoleName`, (select count(CAssessmentId) from tblcandidateassessment where UserId=us.UserId and EndTime is not NULL) as total, (select count(CAssessmentId) from tblcandidateassessment where UserId=us.UserId and EndTime is NULL) as notgiven
FROM `tbluser` `us`
LEFT JOIN `tblcompany` `cp` ON `cp`.`CompanyId` = `us`.`CompanyId`
LEFT JOIN `tblmstuserrole` `usms` ON `usms`.`RoleId` = `us`.`RoleId`
WHERE `us`.`RoleId=2 ||` `us`.`RoleId` = 3
ORDER BY `us`.`FirstName` ASC
ERROR - 2018-08-23 17:27:42 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '`us`.`RoleId` = 3
ORDER BY `us`.`FirstName` ASC' at line 5 - Invalid query: SELECT `us`.`UserId`, `us`.`RoleId` as `RoleId`, `us`.`CompanyId`, `us`.`FirstName`, `us`.`LastName`, `us`.`Title`, `us`.`Sales_Assign`, `us`.`EmailAddress`, `us`.`Password`, `us`.`CountryId`, `us`.`StateId`, `us`.`City`, `us`.`ZipCode`, `us`.`PhoneNumber`, `us`.`IsActive`, `cp`.`Name`, `cp`.`Name`, `usms`.`RoleName`, (select count(CAssessmentId) from tblcandidateassessment where UserId=us.UserId and EndTime is not NULL) as total, (select count(CAssessmentId) from tblcandidateassessment where UserId=us.UserId and EndTime is NULL) as notgiven
FROM `tbluser` `us`
LEFT JOIN `tblcompany` `cp` ON `cp`.`CompanyId` = `us`.`CompanyId`
LEFT JOIN `tblmstuserrole` `usms` ON `usms`.`RoleId` = `us`.`RoleId`
WHERE `us`.`RoleId=2 ||` `us`.`RoleId` = 3
ORDER BY `us`.`FirstName` ASC
ERROR - 2018-08-23 17:38:38 --> Undefined variable: role_id at line no 11 in C:\wamp64\www\AFP_NEW\api\application\models\Dashboard_model.php
ERROR - 2018-08-23 17:38:38 --> Undefined variable: role_id at line no 15 in C:\wamp64\www\AFP_NEW\api\application\models\Dashboard_model.php
ERROR - 2018-08-23 17:38:38 --> Undefined variable: role_id at line no 18 in C:\wamp64\www\AFP_NEW\api\application\models\Dashboard_model.php
ERROR - 2018-08-23 17:38:42 --> Undefined variable: role_id at line no 11 in C:\wamp64\www\AFP_NEW\api\application\models\Dashboard_model.php
ERROR - 2018-08-23 17:38:42 --> Undefined variable: role_id at line no 15 in C:\wamp64\www\AFP_NEW\api\application\models\Dashboard_model.php
ERROR - 2018-08-23 17:38:42 --> Undefined variable: role_id at line no 18 in C:\wamp64\www\AFP_NEW\api\application\models\Dashboard_model.php
ERROR - 2018-08-23 17:39:08 --> Undefined variable: role_id at line no 11 in C:\wamp64\www\AFP_NEW\api\application\models\Dashboard_model.php
ERROR - 2018-08-23 17:39:08 --> Undefined variable: role_id at line no 15 in C:\wamp64\www\AFP_NEW\api\application\models\Dashboard_model.php
ERROR - 2018-08-23 17:39:08 --> Undefined variable: role_id at line no 18 in C:\wamp64\www\AFP_NEW\api\application\models\Dashboard_model.php
ERROR - 2018-08-23 17:39:12 --> Undefined variable: role_id at line no 11 in C:\wamp64\www\AFP_NEW\api\application\models\Dashboard_model.php
ERROR - 2018-08-23 17:39:12 --> Undefined variable: role_id at line no 15 in C:\wamp64\www\AFP_NEW\api\application\models\Dashboard_model.php
ERROR - 2018-08-23 17:39:12 --> Undefined variable: role_id at line no 18 in C:\wamp64\www\AFP_NEW\api\application\models\Dashboard_model.php
ERROR - 2018-08-23 17:39:29 --> Undefined variable: role_id at line no 11 in C:\wamp64\www\AFP_NEW\api\application\models\Dashboard_model.php
ERROR - 2018-08-23 17:39:29 --> Undefined variable: role_id at line no 15 in C:\wamp64\www\AFP_NEW\api\application\models\Dashboard_model.php
ERROR - 2018-08-23 17:39:30 --> Undefined variable: role_id at line no 18 in C:\wamp64\www\AFP_NEW\api\application\models\Dashboard_model.php
ERROR - 2018-08-23 17:39:33 --> Undefined variable: role_id at line no 11 in C:\wamp64\www\AFP_NEW\api\application\models\Dashboard_model.php
ERROR - 2018-08-23 17:39:33 --> Undefined variable: role_id at line no 15 in C:\wamp64\www\AFP_NEW\api\application\models\Dashboard_model.php
ERROR - 2018-08-23 17:39:34 --> Undefined variable: role_id at line no 18 in C:\wamp64\www\AFP_NEW\api\application\models\Dashboard_model.php
ERROR - 2018-08-23 17:40:41 --> Undefined variable: role_id at line no 11 in C:\wamp64\www\AFP_NEW\api\application\models\Dashboard_model.php
ERROR - 2018-08-23 17:40:42 --> Undefined variable: role_id at line no 15 in C:\wamp64\www\AFP_NEW\api\application\models\Dashboard_model.php
ERROR - 2018-08-23 17:40:42 --> Undefined variable: role_id at line no 18 in C:\wamp64\www\AFP_NEW\api\application\models\Dashboard_model.php
ERROR - 2018-08-23 17:40:45 --> Undefined variable: role_id at line no 11 in C:\wamp64\www\AFP_NEW\api\application\models\Dashboard_model.php
ERROR - 2018-08-23 17:40:45 --> Undefined variable: role_id at line no 15 in C:\wamp64\www\AFP_NEW\api\application\models\Dashboard_model.php
ERROR - 2018-08-23 17:40:46 --> Undefined variable: role_id at line no 18 in C:\wamp64\www\AFP_NEW\api\application\models\Dashboard_model.php
ERROR - 2018-08-23 17:41:11 --> Undefined variable: role_id at line no 9 in C:\wamp64\www\AFP_NEW\api\application\models\Dashboard_model.php
ERROR - 2018-08-23 17:41:11 --> Undefined variable: role_id at line no 13 in C:\wamp64\www\AFP_NEW\api\application\models\Dashboard_model.php
ERROR - 2018-08-23 17:41:11 --> Undefined variable: role_id at line no 16 in C:\wamp64\www\AFP_NEW\api\application\models\Dashboard_model.php
ERROR - 2018-08-23 17:41:15 --> Undefined variable: role_id at line no 9 in C:\wamp64\www\AFP_NEW\api\application\models\Dashboard_model.php
ERROR - 2018-08-23 17:41:15 --> Undefined variable: role_id at line no 13 in C:\wamp64\www\AFP_NEW\api\application\models\Dashboard_model.php
ERROR - 2018-08-23 17:41:16 --> Undefined variable: role_id at line no 16 in C:\wamp64\www\AFP_NEW\api\application\models\Dashboard_model.php
ERROR - 2018-08-23 17:42:27 --> Undefined variable: role_id at line no 11 in C:\wamp64\www\AFP_NEW\api\application\models\Dashboard_model.php
ERROR - 2018-08-23 17:42:27 --> Undefined variable: role_id at line no 15 in C:\wamp64\www\AFP_NEW\api\application\models\Dashboard_model.php
ERROR - 2018-08-23 17:42:27 --> Undefined variable: role_id at line no 18 in C:\wamp64\www\AFP_NEW\api\application\models\Dashboard_model.php
ERROR - 2018-08-23 17:42:31 --> Undefined variable: role_id at line no 11 in C:\wamp64\www\AFP_NEW\api\application\models\Dashboard_model.php
ERROR - 2018-08-23 17:42:31 --> Undefined variable: role_id at line no 15 in C:\wamp64\www\AFP_NEW\api\application\models\Dashboard_model.php
ERROR - 2018-08-23 17:42:31 --> Undefined variable: role_id at line no 18 in C:\wamp64\www\AFP_NEW\api\application\models\Dashboard_model.php
ERROR - 2018-08-23 17:43:31 --> Undefined variable: role_id at line no 11 in C:\wamp64\www\AFP_NEW\api\application\models\Dashboard_model.php
ERROR - 2018-08-23 17:43:31 --> Undefined variable: role_id at line no 15 in C:\wamp64\www\AFP_NEW\api\application\models\Dashboard_model.php
ERROR - 2018-08-23 17:43:32 --> Undefined variable: role_id at line no 18 in C:\wamp64\www\AFP_NEW\api\application\models\Dashboard_model.php
ERROR - 2018-08-23 17:43:35 --> Undefined variable: role_id at line no 11 in C:\wamp64\www\AFP_NEW\api\application\models\Dashboard_model.php
ERROR - 2018-08-23 17:43:35 --> Undefined variable: role_id at line no 15 in C:\wamp64\www\AFP_NEW\api\application\models\Dashboard_model.php
ERROR - 2018-08-23 17:43:36 --> Undefined variable: role_id at line no 18 in C:\wamp64\www\AFP_NEW\api\application\models\Dashboard_model.php
ERROR - 2018-08-23 17:43:54 --> Undefined variable: role_id at line no 9 in C:\wamp64\www\AFP_NEW\api\application\models\Dashboard_model.php
ERROR - 2018-08-23 17:43:55 --> Undefined variable: role_id at line no 13 in C:\wamp64\www\AFP_NEW\api\application\models\Dashboard_model.php
ERROR - 2018-08-23 17:43:55 --> Undefined variable: role_id at line no 16 in C:\wamp64\www\AFP_NEW\api\application\models\Dashboard_model.php
ERROR - 2018-08-23 17:43:58 --> Undefined variable: role_id at line no 9 in C:\wamp64\www\AFP_NEW\api\application\models\Dashboard_model.php
ERROR - 2018-08-23 17:43:59 --> Undefined variable: role_id at line no 13 in C:\wamp64\www\AFP_NEW\api\application\models\Dashboard_model.php
ERROR - 2018-08-23 17:43:59 --> Undefined variable: role_id at line no 16 in C:\wamp64\www\AFP_NEW\api\application\models\Dashboard_model.php
ERROR - 2018-08-23 17:44:37 --> Undefined variable: Role_id at line no 9 in C:\wamp64\www\AFP_NEW\api\application\models\Dashboard_model.php
ERROR - 2018-08-23 17:44:40 --> Undefined variable: Role_id at line no 9 in C:\wamp64\www\AFP_NEW\api\application\models\Dashboard_model.php
ERROR - 2018-08-23 17:44:43 --> Undefined variable: Role_id at line no 9 in C:\wamp64\www\AFP_NEW\api\application\models\Dashboard_model.php
ERROR - 2018-08-23 17:47:35 --> Undefined variable: Role_id at line no 9 in C:\wamp64\www\AFP_NEW\api\application\models\Dashboard_model.php
ERROR - 2018-08-23 17:47:35 --> Undefined variable: Role_id at line no 13 in C:\wamp64\www\AFP_NEW\api\application\models\Dashboard_model.php
ERROR - 2018-08-23 17:47:36 --> Undefined variable: Role_id at line no 16 in C:\wamp64\www\AFP_NEW\api\application\models\Dashboard_model.php
ERROR - 2018-08-23 17:47:39 --> Undefined variable: Role_id at line no 9 in C:\wamp64\www\AFP_NEW\api\application\models\Dashboard_model.php
ERROR - 2018-08-23 17:47:39 --> Undefined variable: Role_id at line no 13 in C:\wamp64\www\AFP_NEW\api\application\models\Dashboard_model.php
ERROR - 2018-08-23 17:47:40 --> Undefined variable: Role_id at line no 16 in C:\wamp64\www\AFP_NEW\api\application\models\Dashboard_model.php
ERROR - 2018-08-23 17:58:43 --> Undefined variable: Role_id at line no 9 in C:\wamp64\www\AFP_NEW\api\application\models\Dashboard_model.php
ERROR - 2018-08-23 17:58:43 --> Undefined variable: Role_id at line no 13 in C:\wamp64\www\AFP_NEW\api\application\models\Dashboard_model.php
ERROR - 2018-08-23 17:58:43 --> Undefined variable: Role_id at line no 16 in C:\wamp64\www\AFP_NEW\api\application\models\Dashboard_model.php
ERROR - 2018-08-23 17:58:47 --> Undefined variable: Role_id at line no 9 in C:\wamp64\www\AFP_NEW\api\application\models\Dashboard_model.php
ERROR - 2018-08-23 17:58:47 --> Undefined variable: Role_id at line no 13 in C:\wamp64\www\AFP_NEW\api\application\models\Dashboard_model.php
ERROR - 2018-08-23 17:58:47 --> Undefined variable: Role_id at line no 16 in C:\wamp64\www\AFP_NEW\api\application\models\Dashboard_model.php
ERROR - 2018-08-23 17:58:51 --> Undefined variable: Role_id at line no 9 in C:\wamp64\www\AFP_NEW\api\application\models\Dashboard_model.php
ERROR - 2018-08-23 17:58:51 --> Undefined variable: Role_id at line no 13 in C:\wamp64\www\AFP_NEW\api\application\models\Dashboard_model.php
ERROR - 2018-08-23 17:58:51 --> Undefined variable: Role_id at line no 16 in C:\wamp64\www\AFP_NEW\api\application\models\Dashboard_model.php
ERROR - 2018-08-23 18:05:41 --> Undefined variable: Role_id at line no 9 in C:\wamp64\www\AFP_NEW\api\application\models\Dashboard_model.php
ERROR - 2018-08-23 18:05:42 --> Undefined variable: Role_id at line no 13 in C:\wamp64\www\AFP_NEW\api\application\models\Dashboard_model.php
ERROR - 2018-08-23 18:05:42 --> Undefined variable: Role_id at line no 16 in C:\wamp64\www\AFP_NEW\api\application\models\Dashboard_model.php
ERROR - 2018-08-23 18:05:45 --> Undefined variable: Role_id at line no 9 in C:\wamp64\www\AFP_NEW\api\application\models\Dashboard_model.php
ERROR - 2018-08-23 18:05:45 --> Undefined variable: Role_id at line no 13 in C:\wamp64\www\AFP_NEW\api\application\models\Dashboard_model.php
ERROR - 2018-08-23 18:05:46 --> Undefined variable: Role_id at line no 16 in C:\wamp64\www\AFP_NEW\api\application\models\Dashboard_model.php
ERROR - 2018-08-23 18:08:45 --> Undefined variable: Role_id at line no 9 in C:\wamp64\www\AFP_NEW\api\application\models\Dashboard_model.php
ERROR - 2018-08-23 18:08:45 --> Undefined variable: Role_id at line no 13 in C:\wamp64\www\AFP_NEW\api\application\models\Dashboard_model.php
ERROR - 2018-08-23 18:08:45 --> Undefined variable: Role_id at line no 16 in C:\wamp64\www\AFP_NEW\api\application\models\Dashboard_model.php
ERROR - 2018-08-23 18:08:49 --> Undefined variable: Role_id at line no 9 in C:\wamp64\www\AFP_NEW\api\application\models\Dashboard_model.php
ERROR - 2018-08-23 18:08:49 --> Undefined variable: Role_id at line no 13 in C:\wamp64\www\AFP_NEW\api\application\models\Dashboard_model.php
ERROR - 2018-08-23 18:08:49 --> Undefined variable: Role_id at line no 16 in C:\wamp64\www\AFP_NEW\api\application\models\Dashboard_model.php
ERROR - 2018-08-23 18:10:38 --> Undefined variable: Role_id at line no 9 in C:\wamp64\www\AFP_NEW\api\application\models\Dashboard_model.php
ERROR - 2018-08-23 18:10:38 --> Undefined variable: Role_id at line no 13 in C:\wamp64\www\AFP_NEW\api\application\models\Dashboard_model.php
ERROR - 2018-08-23 18:10:38 --> Undefined variable: Role_id at line no 16 in C:\wamp64\www\AFP_NEW\api\application\models\Dashboard_model.php
ERROR - 2018-08-23 18:10:42 --> Undefined variable: Role_id at line no 9 in C:\wamp64\www\AFP_NEW\api\application\models\Dashboard_model.php
ERROR - 2018-08-23 18:10:42 --> Undefined variable: Role_id at line no 13 in C:\wamp64\www\AFP_NEW\api\application\models\Dashboard_model.php
ERROR - 2018-08-23 18:10:42 --> Undefined variable: Role_id at line no 16 in C:\wamp64\www\AFP_NEW\api\application\models\Dashboard_model.php
ERROR - 2018-08-23 18:11:27 --> Undefined variable: Role_id at line no 9 in C:\wamp64\www\AFP_NEW\api\application\models\Dashboard_model.php
ERROR - 2018-08-23 18:11:28 --> Undefined variable: Role_id at line no 13 in C:\wamp64\www\AFP_NEW\api\application\models\Dashboard_model.php
ERROR - 2018-08-23 18:11:28 --> Undefined variable: Role_id at line no 16 in C:\wamp64\www\AFP_NEW\api\application\models\Dashboard_model.php
ERROR - 2018-08-23 18:11:31 --> Undefined variable: Role_id at line no 9 in C:\wamp64\www\AFP_NEW\api\application\models\Dashboard_model.php
ERROR - 2018-08-23 18:11:32 --> Undefined variable: Role_id at line no 13 in C:\wamp64\www\AFP_NEW\api\application\models\Dashboard_model.php
ERROR - 2018-08-23 18:11:32 --> Undefined variable: Role_id at line no 16 in C:\wamp64\www\AFP_NEW\api\application\models\Dashboard_model.php
ERROR - 2018-08-23 18:12:46 --> Undefined variable: Role_id at line no 9 in C:\wamp64\www\AFP_NEW\api\application\models\Dashboard_model.php
ERROR - 2018-08-23 18:12:47 --> Undefined variable: Role_id at line no 13 in C:\wamp64\www\AFP_NEW\api\application\models\Dashboard_model.php
ERROR - 2018-08-23 18:12:47 --> Undefined variable: Role_id at line no 16 in C:\wamp64\www\AFP_NEW\api\application\models\Dashboard_model.php
ERROR - 2018-08-23 18:12:50 --> Undefined variable: Role_id at line no 9 in C:\wamp64\www\AFP_NEW\api\application\models\Dashboard_model.php
ERROR - 2018-08-23 18:12:51 --> Undefined variable: Role_id at line no 13 in C:\wamp64\www\AFP_NEW\api\application\models\Dashboard_model.php
ERROR - 2018-08-23 18:12:51 --> Undefined variable: Role_id at line no 16 in C:\wamp64\www\AFP_NEW\api\application\models\Dashboard_model.php
ERROR - 2018-08-23 18:27:58 --> Undefined variable: Role_id at line no 9 in C:\wamp64\www\AFP_NEW\api\application\models\Dashboard_model.php
ERROR - 2018-08-23 18:27:58 --> Undefined variable: Role_id at line no 13 in C:\wamp64\www\AFP_NEW\api\application\models\Dashboard_model.php
ERROR - 2018-08-23 18:27:58 --> Undefined variable: Role_id at line no 16 in C:\wamp64\www\AFP_NEW\api\application\models\Dashboard_model.php
ERROR - 2018-08-23 18:28:02 --> Undefined variable: Role_id at line no 9 in C:\wamp64\www\AFP_NEW\api\application\models\Dashboard_model.php
ERROR - 2018-08-23 18:28:03 --> Undefined variable: Role_id at line no 13 in C:\wamp64\www\AFP_NEW\api\application\models\Dashboard_model.php
ERROR - 2018-08-23 18:28:03 --> Undefined variable: Role_id at line no 16 in C:\wamp64\www\AFP_NEW\api\application\models\Dashboard_model.php
ERROR - 2018-08-23 18:28:27 --> Undefined variable: Role_id at line no 9 in C:\wamp64\www\AFP_NEW\api\application\models\Dashboard_model.php
ERROR - 2018-08-23 18:28:27 --> Undefined variable: Role_id at line no 13 in C:\wamp64\www\AFP_NEW\api\application\models\Dashboard_model.php
ERROR - 2018-08-23 18:28:27 --> Undefined variable: Role_id at line no 16 in C:\wamp64\www\AFP_NEW\api\application\models\Dashboard_model.php
ERROR - 2018-08-23 18:28:32 --> Undefined variable: Role_id at line no 9 in C:\wamp64\www\AFP_NEW\api\application\models\Dashboard_model.php
ERROR - 2018-08-23 18:28:32 --> Undefined variable: Role_id at line no 13 in C:\wamp64\www\AFP_NEW\api\application\models\Dashboard_model.php
ERROR - 2018-08-23 18:28:33 --> Undefined variable: Role_id at line no 16 in C:\wamp64\www\AFP_NEW\api\application\models\Dashboard_model.php
ERROR - 2018-08-23 13:56:48 --> 404 Page Not Found: Invitation/getAllCompany2

