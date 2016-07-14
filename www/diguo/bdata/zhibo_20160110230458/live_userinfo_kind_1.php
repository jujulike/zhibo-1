<?php
require("../../inc/header.php");

/*
		SoftName : EmpireBak Version 2010
		Author   : wm_chief
		Copyright: Powered by www.phome.net
*/

DoSetDbChar('utf8');
E_D("DROP TABLE IF EXISTS `live_userinfo_kind`;");
E_C("CREATE TABLE `live_userinfo_kind` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `userid` int(11) DEFAULT NULL,
  `roomid` int(11) DEFAULT NULL,
  `ctime` int(11) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=67 DEFAULT CHARSET=utf8");
E_D("replace into `live_userinfo_kind` values('43','26','12',NULL);");
E_D("replace into `live_userinfo_kind` values('26','30','10',NULL);");
E_D("replace into `live_userinfo_kind` values('32','36','16',NULL);");
E_D("replace into `live_userinfo_kind` values('37','32','10',NULL);");
E_D("replace into `live_userinfo_kind` values('38','32','12',NULL);");
E_D("replace into `live_userinfo_kind` values('39','29','19',NULL);");
E_D("replace into `live_userinfo_kind` values('40','29','21',NULL);");
E_D("replace into `live_userinfo_kind` values('41','52','21',NULL);");
E_D("replace into `live_userinfo_kind` values('47','37','25',NULL);");
E_D("replace into `live_userinfo_kind` values('46','37','14',NULL);");
E_D("replace into `live_userinfo_kind` values('48','63','26',NULL);");
E_D("replace into `live_userinfo_kind` values('50','86','26',NULL);");
E_D("replace into `live_userinfo_kind` values('54','89','26',NULL);");
E_D("replace into `live_userinfo_kind` values('56','92','26',NULL);");
E_D("replace into `live_userinfo_kind` values('57','114','26',NULL);");
E_D("replace into `live_userinfo_kind` values('59','122','26',NULL);");
E_D("replace into `live_userinfo_kind` values('60','121','26',NULL);");
E_D("replace into `live_userinfo_kind` values('61','120','26',NULL);");
E_D("replace into `live_userinfo_kind` values('62','119','26',NULL);");
E_D("replace into `live_userinfo_kind` values('63','118','26',NULL);");
E_D("replace into `live_userinfo_kind` values('64','117','26',NULL);");
E_D("replace into `live_userinfo_kind` values('66','127','26',NULL);");

require("../../inc/footer.php");
?>