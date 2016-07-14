<?php
require("../../inc/header.php");

/*
		SoftName : EmpireBak Version 2010
		Author   : wm_chief
		Copyright: Powered by www.phome.net
*/

DoSetDbChar('utf8');
E_D("DROP TABLE IF EXISTS `live_admin`;");
E_C("CREATE TABLE `live_admin` (
  `userid` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `username` varchar(30) NOT NULL,
  `passwd` varchar(64) NOT NULL,
  `realname` varchar(32) DEFAULT NULL,
  `kind` varchar(32) DEFAULT NULL,
  `token` varchar(64) DEFAULT NULL,
  `mtime` int(11) NOT NULL,
  `ctime` int(11) DEFAULT NULL,
  `ltime` int(11) DEFAULT NULL,
  `status` smallint(6) DEFAULT NULL,
  PRIMARY KEY (`userid`),
  UNIQUE KEY `admin_id` (`userid`)
) ENGINE=MyISAM AUTO_INCREMENT=2 DEFAULT CHARSET=utf8");
E_D("replace into `live_admin` values('1','admin','e10adc3949ba59abbe56e057f20f883e',NULL,NULL,'','0','1353638507','1353638508','99');");

require("../../inc/footer.php");
?>