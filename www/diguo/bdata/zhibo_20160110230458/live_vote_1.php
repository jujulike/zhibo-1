<?php
require("../../inc/header.php");

/*
		SoftName : EmpireBak Version 2010
		Author   : wm_chief
		Copyright: Powered by www.phome.net
*/

DoSetDbChar('utf8');
E_D("DROP TABLE IF EXISTS `live_vote`;");
E_C("CREATE TABLE `live_vote` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `vote_id` tinyint(3) unsigned NOT NULL,
  `votetype` tinyint(4) DEFAULT NULL COMMENT '投票种类2：看多，1：震荡，0：看空',
  `userid` int(11) DEFAULT NULL,
  `ip` int(11) DEFAULT NULL,
  `votedate` date DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=157 DEFAULT CHARSET=utf8");
E_D("replace into `live_vote` values('22','0','0','63','2130706433','2014-05-16');");
E_D("replace into `live_vote` values('25','0','1','530405','2130706433','2014-06-27');");
E_D("replace into `live_vote` values('26','0','0','55513653','2130706433','2014-06-27');");
E_D("replace into `live_vote` values('27','0','1','38604194','2130706433','2014-06-27');");
E_D("replace into `live_vote` values('28','0','0','80409840','2130706433','2014-06-28');");
E_D("replace into `live_vote` values('29','0','0','63','2130706433','2014-06-28');");
E_D("replace into `live_vote` values('30','0','0','63','2130706433','2014-06-30');");
E_D("replace into `live_vote` values('31','0','2','12529237','2130706433','2014-07-02');");
E_D("replace into `live_vote` values('32','0','1','88854543','2130706433','2014-07-15');");
E_D("replace into `live_vote` values('33','0','1','44716434','2130706433','2014-07-15');");
E_D("replace into `live_vote` values('34','0','1','53012206','2130706433','2014-07-15');");
E_D("replace into `live_vote` values('38','0','0','17952079','2130706433','2014-07-16');");
E_D("replace into `live_vote` values('39','0','0',NULL,'2130706433','2014-07-16');");
E_D("replace into `live_vote` values('40','0','1','61117734','2130706433','2014-07-16');");
E_D("replace into `live_vote` values('41','0','0','33717627','2130706433','2014-07-17');");
E_D("replace into `live_vote` values('42','0','1','27223548','2130706433','2014-07-19');");
E_D("replace into `live_vote` values('43','0','0','23524','2130706433','2014-07-19');");
E_D("replace into `live_vote` values('44','0','0','95724327','2130706433','2014-07-19');");
E_D("replace into `live_vote` values('45','0','0','63','2130706433','2014-07-21');");
E_D("replace into `live_vote` values('49','0','1','74','2130706433','2014-07-21');");
E_D("replace into `live_vote` values('50','0','2','67629313','2130706433','2014-07-24');");
E_D("replace into `live_vote` values('51','0','2','41825392','2130706433','2014-07-25');");
E_D("replace into `live_vote` values('52','0','0','63','2130706433','2014-07-25');");
E_D("replace into `live_vote` values('53','0','2','84527032','2130706433','2014-07-28');");
E_D("replace into `live_vote` values('54','0','1','63','2130706433','2014-07-31');");
E_D("replace into `live_vote` values('55','0','0','23899596','2130706433','2014-07-31');");
E_D("replace into `live_vote` values('56','0','0','69310504','2095321408','2015-03-25');");
E_D("replace into `live_vote` values('57','0','2','40631288','-635603670','2015-03-31');");
E_D("replace into `live_vote` values('58','0','0','71715435','-632468941','2015-03-31');");
E_D("replace into `live_vote` values('59','0','2','16927575','1879418910','2015-03-31');");
E_D("replace into `live_vote` values('60','0','2','9376188','993219292','2015-04-01');");
E_D("replace into `live_vote` values('61','0','1','84','1699831958','2015-04-02');");
E_D("replace into `live_vote` values('62','0','2','80175587','1848934784','2015-04-02');");
E_D("replace into `live_vote` values('63','0','0','58607142','2095330097','2015-04-02');");
E_D("replace into `live_vote` values('64','0','1','18375062','1035709992','2015-04-02');");
E_D("replace into `live_vote` values('65','0','2','32556711','1936163681','2015-04-04');");
E_D("replace into `live_vote` values('66','0','2','8439505','1857874987','2015-04-07');");
E_D("replace into `live_vote` values('67','0','2','32212597','-745609310','2015-04-09');");
E_D("replace into `live_vote` values('68','0','0','93046525','-543980704','2015-04-09');");
E_D("replace into `live_vote` values('69','0','2','48315163','-544071561','2015-04-10');");
E_D("replace into `live_vote` values('70','0','2','85914407','2067007742','2015-04-10');");
E_D("replace into `live_vote` values('71','0','0','65526864','1996412804','2015-04-10');");
E_D("replace into `live_vote` values('72','0','2','89627767','974399390','2015-04-11');");
E_D("replace into `live_vote` values('73','0','2','68826301','-1949611883','2015-04-11');");
E_D("replace into `live_vote` values('74','0','2','813315','29837115','2015-04-11');");
E_D("replace into `live_vote` values('75','0','2','89145852','-1266106065','2015-04-13');");
E_D("replace into `live_vote` values('76','0','0','1228528','2088832926','2015-04-13');");
E_D("replace into `live_vote` values('77','0','2','93654292','-632941894','2015-04-14');");
E_D("replace into `live_vote` values('78','0','2','94917394','2103369984','2015-04-16');");
E_D("replace into `live_vote` values('79','0','2','34341659','1918649274','2015-04-16');");
E_D("replace into `live_vote` values('80','0','2','92124165','2095321213','2015-04-17');");
E_D("replace into `live_vote` values('81','0','0','50227688','-632468941','2015-04-17');");
E_D("replace into `live_vote` values('82','0','2','98843953','2147483647','2015-05-12');");
E_D("replace into `live_vote` values('83','0','1','85','2147483647','2015-05-12');");
E_D("replace into `live_vote` values('84','0','0','85','2147483647','2015-05-12');");
E_D("replace into `live_vote` values('85','0','0','85','2147483647','2015-05-12');");
E_D("replace into `live_vote` values('86','0','2','84730528','2147483647','2015-05-15');");
E_D("replace into `live_vote` values('87','0','2','84730528','2147483647','2015-05-15');");
E_D("replace into `live_vote` values('88','0','2','84730528','2147483647','2015-05-15');");
E_D("replace into `live_vote` values('89','0','2','84730528','2147483647','2015-05-15');");
E_D("replace into `live_vote` values('90','0','2','84730528','2147483647','2015-05-15');");
E_D("replace into `live_vote` values('91','0','2','84730528','2147483647','2015-05-15');");
E_D("replace into `live_vote` values('92','0','1','84730528','2147483647','2015-05-15');");
E_D("replace into `live_vote` values('93','0','1','84730528','2147483647','2015-05-15');");
E_D("replace into `live_vote` values('94','0','1','84730528','2147483647','2015-05-15');");
E_D("replace into `live_vote` values('95','4','2','84730528','2147483647','2015-05-15');");
E_D("replace into `live_vote` values('96','3','2','84730528','2147483647','2015-05-15');");
E_D("replace into `live_vote` values('97','3','1','84730528','2147483647','2015-05-15');");
E_D("replace into `live_vote` values('98','4','0','84730528','2147483647','2015-05-15');");
E_D("replace into `live_vote` values('99','5','2','84730528','2147483647','2015-05-15');");
E_D("replace into `live_vote` values('100','4','1','84730528','2147483647','2015-05-15');");
E_D("replace into `live_vote` values('101','3','2','84730528','2147483647','2015-05-15');");
E_D("replace into `live_vote` values('102','3','2','84730528','2147483647','2015-05-15');");
E_D("replace into `live_vote` values('103','3','2','84730528','2147483647','2015-05-15');");
E_D("replace into `live_vote` values('104','3','2','16227815','2147483647','2015-05-15');");
E_D("replace into `live_vote` values('105','3','0','16227815','2147483647','2015-05-15');");
E_D("replace into `live_vote` values('106','3','2','16227815','2147483647','2015-05-15');");
E_D("replace into `live_vote` values('107','3','2','16227815','2147483647','2015-05-15');");
E_D("replace into `live_vote` values('108','3','1','16227815','2147483647','2015-05-15');");
E_D("replace into `live_vote` values('109','4','2','16227815','2147483647','2015-05-15');");
E_D("replace into `live_vote` values('110','5','0','16227815','2147483647','2015-05-15');");
E_D("replace into `live_vote` values('111','5','2','16227815','2147483647','2015-05-15');");
E_D("replace into `live_vote` values('112','4','1','84730528','2147483647','2015-05-15');");
E_D("replace into `live_vote` values('113','3','2','16227815','2147483647','2015-05-15');");
E_D("replace into `live_vote` values('114','3','2','77987191','2147483647','2015-05-15');");
E_D("replace into `live_vote` values('115','3','1','77987191','2147483647','2015-05-15');");
E_D("replace into `live_vote` values('116','3','0','77987191','2147483647','2015-05-15');");
E_D("replace into `live_vote` values('117','3','1','77987191','2147483647','2015-05-15');");
E_D("replace into `live_vote` values('118','3','2','16227815','2147483647','2015-05-15');");
E_D("replace into `live_vote` values('119','3','2','17158667','2147483647','2015-05-17');");
E_D("replace into `live_vote` values('120','4','2','48636970','2147483647','2015-05-17');");
E_D("replace into `live_vote` values('121','4','1','48636970','2147483647','2015-05-17');");
E_D("replace into `live_vote` values('122','5','2','48636970','2147483647','2015-05-17');");
E_D("replace into `live_vote` values('123','4','1','70107960','2147483647','2015-05-17');");
E_D("replace into `live_vote` values('124','5','0','70107960','2147483647','2015-05-17');");
E_D("replace into `live_vote` values('125','4','1','70107960','2147483647','2015-05-17');");
E_D("replace into `live_vote` values('126','4','1','70107960','2147483647','2015-05-17');");
E_D("replace into `live_vote` values('127','4','1','70107960','2147483647','2015-05-17');");
E_D("replace into `live_vote` values('128','3','2','56087240','2147483647','2015-05-18');");
E_D("replace into `live_vote` values('129','3','0','49068947','1857283162','2015-05-24');");
E_D("replace into `live_vote` values('130','3','2','93812099','-573750477','2015-05-26');");
E_D("replace into `live_vote` values('131','3','1','72029933','-1418387661','2015-05-27');");
E_D("replace into `live_vote` values('132','3','2','69834186','-1212556442','2015-05-29');");
E_D("replace into `live_vote` values('133','4','1','69834186','-1212556442','2015-05-29');");
E_D("replace into `live_vote` values('134','5','0','69834186','-1212556442','2015-05-29');");
E_D("replace into `live_vote` values('135','3','2','3923900','1985081961','2015-06-01');");
E_D("replace into `live_vote` values('136','3','2','68593177','1996560343','2015-06-02');");
E_D("replace into `live_vote` values('137','3','2','80528300','-573738786','2015-06-03');");
E_D("replace into `live_vote` values('138','4','0','111','-573738786','2015-06-03');");
E_D("replace into `live_vote` values('139','5','2','111','-573738786','2015-06-03');");
E_D("replace into `live_vote` values('140','3','2','124','-573750485','2015-06-09');");
E_D("replace into `live_vote` values('141','3','2','38420720','659237792','2015-06-10');");
E_D("replace into `live_vote` values('142','5','0','38420720','659237792','2015-06-10');");
E_D("replace into `live_vote` values('143','4','2','38420720','659237792','2015-06-10');");
E_D("replace into `live_vote` values('144','3','2','126','-1418388081','2015-06-10');");
E_D("replace into `live_vote` values('145','3','0','118','-1418388081','2015-06-10');");
E_D("replace into `live_vote` values('146','3','1','126','-1418445880','2015-06-11');");
E_D("replace into `live_vote` values('147','3','2','113','-1418445880','2015-06-11');");
E_D("replace into `live_vote` values('148','3','0','118','-1418445880','2015-06-11');");
E_D("replace into `live_vote` values('149','3','1','45318303','1985081662','2015-06-12');");
E_D("replace into `live_vote` values('150','5','0','126','1985081662','2015-06-12');");
E_D("replace into `live_vote` values('151','3','2','113','1985081662','2015-06-12');");
E_D("replace into `live_vote` values('152','3','1','59731424','-1418273214','2015-06-15');");
E_D("replace into `live_vote` values('153','3','1','55735870','2130706433','2015-06-17');");
E_D("replace into `live_vote` values('154','4','1','38610187','2130706433','2015-07-27');");
E_D("replace into `live_vote` values('155','3','2','5920038','2130706433','2016-01-10');");
E_D("replace into `live_vote` values('156','5','0','5920038','2130706433','2016-01-10');");

require("../../inc/footer.php");
?>