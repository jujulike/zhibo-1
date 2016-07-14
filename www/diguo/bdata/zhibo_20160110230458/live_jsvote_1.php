<?php
require("../../inc/header.php");

/*
		SoftName : EmpireBak Version 2010
		Author   : wm_chief
		Copyright: Powered by www.phome.net
*/

DoSetDbChar('utf8');
E_D("DROP TABLE IF EXISTS `live_jsvote`;");
E_C("CREATE TABLE `live_jsvote` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `vote_user` tinyint(3) unsigned NOT NULL,
  `userid` int(11) DEFAULT NULL,
  `ip` int(11) DEFAULT NULL,
  `votedate` date DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=46 DEFAULT CHARSET=utf8");
E_D("replace into `live_jsvote` values('1','83','83','2147483647','2015-05-17');");
E_D("replace into `live_jsvote` values('2','85','83','2147483647','2015-04-06');");
E_D("replace into `live_jsvote` values('3','85','83','2147483647','2015-05-17');");
E_D("replace into `live_jsvote` values('4','85','83','2147483647','2015-05-17');");
E_D("replace into `live_jsvote` values('5','85','83','2147483647','2015-05-16');");
E_D("replace into `live_jsvote` values('6','85','48636970','2147483647','2015-05-17');");
E_D("replace into `live_jsvote` values('7','85','70107960','2147483647','2015-05-17');");
E_D("replace into `live_jsvote` values('8','85','70107960','2147483647','2015-05-17');");
E_D("replace into `live_jsvote` values('9','85','70107960','2147483647','2015-05-17');");
E_D("replace into `live_jsvote` values('10','85','70107960','2147483647','2015-05-17');");
E_D("replace into `live_jsvote` values('11','85','70107960','2147483647','2015-05-17');");
E_D("replace into `live_jsvote` values('12','85','70107960','2147483647','2015-05-17');");
E_D("replace into `live_jsvote` values('13','85','70107960','2147483647','2015-05-17');");
E_D("replace into `live_jsvote` values('14','85','70107960','2147483647','2015-05-17');");
E_D("replace into `live_jsvote` values('15','85','70107960','2147483647','2015-05-17');");
E_D("replace into `live_jsvote` values('16','85','86','2147483647','2015-05-17');");
E_D("replace into `live_jsvote` values('17','85','48458840','2147483647','2015-05-18');");
E_D("replace into `live_jsvote` values('18','85','59172919','1857282855','2015-05-19');");
E_D("replace into `live_jsvote` values('19','85','59172919','1857282855','2015-05-19');");
E_D("replace into `live_jsvote` values('20','85','59172919','1857282855','2015-05-19');");
E_D("replace into `live_jsvote` values('21','85','56527939','-1212557907','2015-05-20');");
E_D("replace into `live_jsvote` values('22','85','49068947','1857283162','2015-05-24');");
E_D("replace into `live_jsvote` values('23','85','49068947','1857283162','2015-05-24');");
E_D("replace into `live_jsvote` values('24','85','49068947','1857283162','2015-05-24');");
E_D("replace into `live_jsvote` values('25','85','49068947','1857283162','2015-05-24');");
E_D("replace into `live_jsvote` values('26','85','71798144','-573738501','2015-05-25');");
E_D("replace into `live_jsvote` values('27','85','5024739','1857283162','2015-05-26');");
E_D("replace into `live_jsvote` values('28','85','5024739','1857283162','2015-05-26');");
E_D("replace into `live_jsvote` values('29','86','5024739','1857283162','2015-05-26');");
E_D("replace into `live_jsvote` values('30','85','29425322','1857283162','2015-05-26');");
E_D("replace into `live_jsvote` values('31','86','29425322','1857283162','2015-05-26');");
E_D("replace into `live_jsvote` values('32','86','93812099','-573750477','2015-05-26');");
E_D("replace into `live_jsvote` values('33','85','93812099','-573750477','2015-05-26');");
E_D("replace into `live_jsvote` values('34','85','39416234','1857283162','2015-05-27');");
E_D("replace into `live_jsvote` values('35','86','39416234','1857283162','2015-05-27');");
E_D("replace into `live_jsvote` values('36','86','69834186','-1212556442','2015-05-29');");
E_D("replace into `live_jsvote` values('37','85','83829762','1857148556','2015-06-01');");
E_D("replace into `live_jsvote` values('38','86','83829762','1857148556','2015-06-01');");
E_D("replace into `live_jsvote` values('39','92','92','-1212558229','2015-06-02');");
E_D("replace into `live_jsvote` values('40','114','111','-573738786','2015-06-03');");
E_D("replace into `live_jsvote` values('41','114','28589859','1857148556','2015-06-04');");
E_D("replace into `live_jsvote` values('42','114','90','-552722533','2015-06-05');");
E_D("replace into `live_jsvote` values('43','114','97719524','-573750485','2015-06-08');");
E_D("replace into `live_jsvote` values('44','114','117','-573750485','2015-06-09');");
E_D("replace into `live_jsvote` values('45','114','121','-573750485','2015-06-09');");

require("../../inc/footer.php");
?>