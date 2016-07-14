<?php
require("../../inc/header.php");

/*
		SoftName : EmpireBak Version 2010
		Author   : wm_chief
		Copyright: Powered by www.phome.net
*/

DoSetDbChar('utf8');
E_D("DROP TABLE IF EXISTS `live_attach_cate`;");
E_C("CREATE TABLE `live_attach_cate` (
  `attachcateid` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `action` varchar(100) DEFAULT NULL,
  `detailid` bigint(20) DEFAULT NULL,
  `ctime` int(11) DEFAULT NULL,
  PRIMARY KEY (`attachcateid`),
  UNIQUE KEY `confid` (`attachcateid`)
) ENGINE=MyISAM AUTO_INCREMENT=131 DEFAULT CHARSET=utf8");
E_D("replace into `live_attach_cate` values('58','admin/agent/edit_agent/1','1','1374132403');");
E_D("replace into `live_attach_cate` values('59','admin/agent/add_agent','3','1374132891');");
E_D("replace into `live_attach_cate` values('60','admin/agent/add_agent','4','1374133214');");
E_D("replace into `live_attach_cate` values('61','admin/agent/add_agent','5','1374214284');");
E_D("replace into `live_attach_cate` values('62','admin/agent/add_agent','6','1374214390');");
E_D("replace into `live_attach_cate` values('63','admin/agent/add_agent','7','1374214521');");
E_D("replace into `live_attach_cate` values('64','admin/agent/add_agent','8','1374214582');");
E_D("replace into `live_attach_cate` values('65','admin/agent/add_agent','9','1374214830');");
E_D("replace into `live_attach_cate` values('66','admin/agent/add_agent','10','1374215022');");
E_D("replace into `live_attach_cate` values('67','admin/agent/add_agent','11','1374215099');");
E_D("replace into `live_attach_cate` values('68','admin/agent/add_agent','12','1374215235');");
E_D("replace into `live_attach_cate` values('69','admin/agent/add_agent','13','1374215255');");
E_D("replace into `live_attach_cate` values('70','admin/agent/add_agent','14','1374215449');");
E_D("replace into `live_attach_cate` values('71','admin/agent/edit_agent/26','26','1375495495');");
E_D("replace into `live_attach_cate` values('72','admin/article/editArticle/151','151','1389168658');");
E_D("replace into `live_attach_cate` values('80','production','17','1389838607');");
E_D("replace into `live_attach_cate` values('81','production','18','1389838790');");
E_D("replace into `live_attach_cate` values('82','production','19','1389838817');");
E_D("replace into `live_attach_cate` values('87','production','20','1393478521');");
E_D("replace into `live_attach_cate` values('88','production','21','1393478685');");
E_D("replace into `live_attach_cate` values('89','production','22','1393481728');");
E_D("replace into `live_attach_cate` values('90','production','23','1393481785');");
E_D("replace into `live_attach_cate` values('91','production','26','1393481939');");
E_D("replace into `live_attach_cate` values('92','production','27','1393481991');");
E_D("replace into `live_attach_cate` values('93','production','28','1393482043');");
E_D("replace into `live_attach_cate` values('94','production','29','1393482098');");
E_D("replace into `live_attach_cate` values('95','production','70','1393482463');");
E_D("replace into `live_attach_cate` values('96','production','71','1393482489');");
E_D("replace into `live_attach_cate` values('97','production','72','1393482509');");
E_D("replace into `live_attach_cate` values('98','production','74','1393482608');");
E_D("replace into `live_attach_cate` values('99','production','75','1393482687');");
E_D("replace into `live_attach_cate` values('100','production','69','1393482774');");
E_D("replace into `live_attach_cate` values('101','production','25','1393482804');");
E_D("replace into `live_attach_cate` values('102','production','24','1393482830');");
E_D("replace into `live_attach_cate` values('103','production','73','1393482851');");
E_D("replace into `live_attach_cate` values('104','article','88','1395988540');");
E_D("replace into `live_attach_cate` values('105','article','89','1395988581');");
E_D("replace into `live_attach_cate` values('106','article','90','1395988612');");
E_D("replace into `live_attach_cate` values('107','article','91','1395988635');");
E_D("replace into `live_attach_cate` values('108','article','92','1395988692');");
E_D("replace into `live_attach_cate` values('109','article','93','1395988717');");
E_D("replace into `live_attach_cate` values('110','article','94','1395988738');");
E_D("replace into `live_attach_cate` values('111','article','95','1395988760');");
E_D("replace into `live_attach_cate` values('112','article','96','1395988794');");
E_D("replace into `live_attach_cate` values('113','article','97','1395988815');");
E_D("replace into `live_attach_cate` values('114','article','98','1395988838');");
E_D("replace into `live_attach_cate` values('115','article','99','1395988857');");
E_D("replace into `live_attach_cate` values('116','article','100','1395988880');");
E_D("replace into `live_attach_cate` values('117','article','101','1395988900');");
E_D("replace into `live_attach_cate` values('118','article','102','1395988924');");
E_D("replace into `live_attach_cate` values('119','article','103','1395988949');");
E_D("replace into `live_attach_cate` values('120','article','104','1395988970');");
E_D("replace into `live_attach_cate` values('121','article','121','1396227010');");
E_D("replace into `live_attach_cate` values('122','article','122','1396227026');");
E_D("replace into `live_attach_cate` values('123','article','123','1396227050');");
E_D("replace into `live_attach_cate` values('124','article','124','1396227083');");
E_D("replace into `live_attach_cate` values('125','article','125','1396227102');");
E_D("replace into `live_attach_cate` values('126','article','126','1396227121');");
E_D("replace into `live_attach_cate` values('127','article','127','1396227139');");
E_D("replace into `live_attach_cate` values('128','article','128','1396227158');");
E_D("replace into `live_attach_cate` values('129','article','129','1396227178');");
E_D("replace into `live_attach_cate` values('130','article','130','1396227223');");

require("../../inc/footer.php");
?>