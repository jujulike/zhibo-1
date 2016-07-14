<?php
require("../../inc/header.php");

/*
		SoftName : EmpireBak Version 2010
		Author   : wm_chief
		Copyright: Powered by www.phome.net
*/

DoSetDbChar('utf8');
E_D("DROP TABLE IF EXISTS `live_user_sso`;");
E_C("CREATE TABLE `live_user_sso` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `userid` int(11) DEFAULT NULL,
  `sso_type` int(11) DEFAULT NULL COMMENT '1:qq 2:sina',
  `openid` varchar(80) DEFAULT '0' COMMENT '1:禁言',
  `token` varchar(500) DEFAULT NULL,
  `status` tinyint(4) DEFAULT '1',
  `ctime` int(11) DEFAULT NULL,
  `mtime` int(11) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=61 DEFAULT CHARSET=utf8");
E_D("replace into `live_user_sso` values('60','62','2','2821051911','a:4:{s:12:\"access_token\";s:32:\"2.00RTquED0Tj5bE7dcd1cbc0d06VHEB\";s:9:\"remind_in\";s:6:\"127588\";s:10:\"expires_in\";i:127588;s:3:\"uid\";s:10:\"2821051911\";}','1','1395819211',NULL);");

require("../../inc/footer.php");
?>