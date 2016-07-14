<?php
require("../../inc/header.php");

/*
		SoftName : EmpireBak Version 2010
		Author   : wm_chief
		Copyright: Powered by www.phome.net
*/

DoSetDbChar('utf8');
E_D("DROP TABLE IF EXISTS `live_service_reserver`;");
E_C("CREATE TABLE `live_service_reserver` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(30) DEFAULT NULL,
  `phone` varchar(20) DEFAULT NULL,
  `cardnumber` varchar(20) DEFAULT NULL,
  `email` varchar(50) DEFAULT NULL,
  `address` varchar(100) DEFAULT NULL,
  `regmoney` int(11) DEFAULT NULL,
  `servertime` varchar(30) DEFAULT NULL COMMENT '在线预约',
  `message` text,
  `ctime` int(11) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=11 DEFAULT CHARSET=utf8");
E_D("replace into `live_service_reserver` values('3','dgt1981','15057489802','123456789123456','test_1@yuyaoit.cn','联  络  地  址','100','上午8点','客  户  留  言','1400589653');");

require("../../inc/footer.php");
?>