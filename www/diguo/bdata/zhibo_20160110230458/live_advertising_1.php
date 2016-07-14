<?php
require("../../inc/header.php");

/*
		SoftName : EmpireBak Version 2010
		Author   : wm_chief
		Copyright: Powered by www.phome.net
*/

DoSetDbChar('utf8');
E_D("DROP TABLE IF EXISTS `live_advertising`;");
E_C("CREATE TABLE `live_advertising` (
  `advertid` int(11) NOT NULL AUTO_INCREMENT,
  `cateid` int(11) DEFAULT NULL,
  `title` varchar(120) NOT NULL,
  `link` varchar(120) NOT NULL,
  `desc` varchar(500) NOT NULL,
  `btime` int(11) NOT NULL,
  `etime` int(11) DEFAULT NULL,
  `imgthumb` varchar(100) NOT NULL,
  `adtype` tinyint(4) DEFAULT NULL,
  `hits` int(10) unsigned NOT NULL DEFAULT '0',
  `ctime` int(10) unsigned NOT NULL DEFAULT '0',
  `mtime` int(10) unsigned NOT NULL DEFAULT '0',
  `uid` int(10) unsigned NOT NULL DEFAULT '0',
  `mid` int(10) NOT NULL DEFAULT '0',
  `sort` int(10) NOT NULL DEFAULT '0',
  `status` tinyint(1) unsigned NOT NULL,
  `width` int(11) NOT NULL,
  `height` int(11) NOT NULL,
  `sourceimage` varchar(100) NOT NULL,
  `ispublic` tinyint(1) NOT NULL DEFAULT '0' COMMENT '0:未公开 1:公开',
  PRIMARY KEY (`advertid`)
) ENGINE=MyISAM AUTO_INCREMENT=160 DEFAULT CHARSET=utf8");
E_D("replace into `live_advertising` values('85','25','标题标题','','描述描述描述\n描述描述描述描述\n描述描述','0',NULL,'upload/pages/20121202/5640081a6987af90dfa179a08548a5a9.png','1','0','1354430486','1354430832','0','0','0','1','0','0','','0');");
E_D("replace into `live_advertising` values('86','29','下载YY/Skype链接','http://xxx.com','','0',NULL,'','1','0','1354435390','0','0','0','0','1','0','0','','0');");
E_D("replace into `live_advertising` values('87','30','首页通栏','http://www.fdsv.com','描述描述','0',NULL,'upload/pages/20121202/553162fcaeed2f1f699dc98a60dd98d3.jpg','2','0','1354435556','0','0','0','0','0','0','0','','0');");
E_D("replace into `live_advertising` values('88','28','右栏广告','http://www.91mp.com','描述描述描述''描述描述描述''描述描述','0',NULL,'upload/pages/20121203/96fe093ac91b175c71c3faa43ba82d3b.jpg','2','0','1354536035','1354536063','0','0','0','1','0','0','','0');");
E_D("replace into `live_advertising` values('89','34','关于直播室','http://www.163.com','描述描述描述描述\n描述描述\n描述描述描述\n描述描述描述','0',NULL,'','1','0','1355063088','0','0','0','0','1','0','0','','0');");
E_D("replace into `live_advertising` values('90','41','通栏图片','','','0',NULL,'upload/pages/20121211/ebb3e786045f0f4736bdc9a30e69906c.jpg','2','0','1355236217','1355236436','0','0','0','1','0','0','','0');");
E_D("replace into `live_advertising` values('91','46','中间通栏图片广告','','','0',NULL,'upload/pages/20121214/b3a8c3beee6f517123cf8cb6c8263a43.gif','2','0','1355238132','1355465559','0','0','0','1','0','0','','0');");
E_D("replace into `live_advertising` values('92','49','导航链接','http://bbs.163.com','','0',NULL,'','1','0','1355315332','0','0','0','0','0','0','0','','0');");
E_D("replace into `live_advertising` values('93','50','LOGO','','','0',NULL,'upload/pages/20130304/021c92942ced47487136ace468f38190.jpg','0','0','1355315399','1362378246','0','0','0','1','0','0','','0');");
E_D("replace into `live_advertising` values('94','47','中间栏广告','','','0',NULL,'upload/pages/20121214/99c166c505abfb689fb1fa1bfa37eb09.jpg','0','0','1355463921','0','0','0','0','0','0','0','','0');");
E_D("replace into `live_advertising` values('95','56','首页栏目','home','','0',NULL,'upload/pages/20130228/175e22ebc04ebd7aab96b34e0e2f4c23.jpg','0','0','1362030316','0','0','0','0','1','0','0','','0');");
E_D("replace into `live_advertising` values('96','57','直播大厅','gold','','0',NULL,'upload/pages/20130228/36ec36cb5c85e17531d68839ca58bd87.jpg','0','0','1362030398','1362491756','0','0','0','1','0','0','','0');");
E_D("replace into `live_advertising` values('97','59','轮播1','','','0',NULL,'upload/pages/20130228/4debc0de99427ff50dd4562e11c73588.jpg','0','0','1362036833','0','0','0','0','1','0','0','','0');");
E_D("replace into `live_advertising` values('98','60','轮播2','','','0',NULL,'upload/pages/20130228/011ce4152663dd298bb617969120e21b.jpg','0','0','1362036890','0','0','0','0','1','0','0','','0');");
E_D("replace into `live_advertising` values('99','61','轮播3','','','0',NULL,'upload/pages/20130228/05d5371a6a9fe3fb60341e804a482d4c.jpg','0','0','1362036922','0','0','0','0','1','0','0','','0');");
E_D("replace into `live_advertising` values('100','62','轮播4','','','0',NULL,'upload/pages/20130228/7201a87d56ef7202404810b9025e7008.jpg','0','0','1362036956','0','0','0','0','1','0','0','','0');");
E_D("replace into `live_advertising` values('101','63','轮播5','','','0',NULL,'upload/pages/20130228/56156b1519ada71cd6f02a337ec24e12.jpg','0','0','1362036988','0','0','0','0','1','0','0','','0');");
E_D("replace into `live_advertising` values('102','55','金银直播','','','0',NULL,'upload/pages/20130305/af2c06d9219085b57e04fd5b96a227ef.jpg','0','0','1362450454','1362451089','0','0','0','1','0','0','','0');");
E_D("replace into `live_advertising` values('103','64','贵金属','','','0',NULL,'upload/pages/20130305/e068b88a74407a2ecdb687e031c662b5.jpg','0','0','1362451179','1362537144','0','0','0','1','0','0','','0');");
E_D("replace into `live_advertising` values('104','35','aaa','','','0',NULL,'upload/pages/20130604/04c51b61029e9a20ffd0add4307043e4.jpg','0','0','1370323359','1370323425','0','0','0','1','0','0','','0');");
E_D("replace into `live_advertising` values('122','0','兴利投资','http://www.hzxltz.com/','','0',NULL,'','0','0','1396251057','0','0','0','3','1','0','0','','1');");
E_D("replace into `live_advertising` values('126','130','客服1','1254715625','<p>\n	<br />\n</p>','0',NULL,'upload/userimgthumb/20150202/pic_77_22/914e39308b073b18cd7430bd4f18b822.gif','2','0','1396253768','1452437024','0','0','1','1','77','22','upload/userimgthumb/20150202/914e39308b073b18cd7430bd4f18b822.gif','1');");
E_D("replace into `live_advertising` values('127','130','客服2','1254715625','<p>\n	<br />\n</p>','0',NULL,'upload/userimgthumb/20150202/pic_77_22/3f9a2db72ea0d168ed9f51582a0c270e.gif','2','0','1396253838','1452437000','0','0','2','1','77','22','upload/userimgthumb/20150202/3f9a2db72ea0d168ed9f51582a0c270e.gif','1');");
E_D("replace into `live_advertising` values('128','130','客服3','1254715625','<p>\n	<br />\n</p>','0',NULL,'upload/userimgthumb/20150202/pic_77_22/2c5434d30c88deb880db48b9a1fedfd6.gif','2','0','1396253894','1452436994','0','0','3','1','77','22','upload/userimgthumb/20150202/2c5434d30c88deb880db48b9a1fedfd6.gif','1');");
E_D("replace into `live_advertising` values('129','130','客服4','1254715625','<p>\n	<br />\n</p>','0',NULL,'upload/userimgthumb/20150202/pic_77_22/8643f701d8f916f8f5fb35333b745cc7.gif','2','0','1396253925','1452436928','0','0','4','1','77','22','upload/userimgthumb/20150202/8643f701d8f916f8f5fb35333b745cc7.gif','1');");
E_D("replace into `live_advertising` values('133','162','产品中心下方通栏图片','','','0',NULL,'upload/userimgthumb/20140521/5501f756a60f545545a2733880aa7ba4.jpg','0','0','1400655044','1400655076','0','0','0','1','0','0','upload/userimgthumb/20140521/5501f756a60f545545a2733880aa7ba4.jpg','1');");
E_D("replace into `live_advertising` values('134','166','首页','#','','0',NULL,'','1','0','1405677308','1432611323','0','0','1','1','0','0','','1');");
E_D("replace into `live_advertising` values('135','166','分析师直播室','http://www.aunigold99.com/gold/DailyData','','0',NULL,'','0','0','1405677327','1422876716','0','0','2','1','0','0','','1');");
E_D("replace into `live_advertising` values('136','166','财经日历','www.sina.com','','0',NULL,'','0','0','1405677347','0','0','0','3','1','0','0','','1');");
E_D("replace into `live_advertising` values('137','166','金融早餐','www.163.com','','0',NULL,'','0','0','1405677371','0','0','0','4','1','0','0','','1');");
E_D("replace into `live_advertising` values('138','167','公告内容','','广告内容3.','0',NULL,'','1','0','1405677525','1427873657','0','0','1','1','0','0','','1');");
E_D("replace into `live_advertising` values('139','166','客户活动','www.sina.com','','0',NULL,'','0','0','1405677863','0','0','0','5','1','0','0','','1');");
E_D("replace into `live_advertising` values('140','166','讲师团队','google.com','','0',NULL,'','0','0','1405677902','0','0','0','6','1','0','0','','1');");
E_D("replace into `live_advertising` values('141','168','介绍','#','','0',NULL,'','1','0','1405922567','1432611341','0','0','0','1','0','0','','1');");
E_D("replace into `live_advertising` values('142','168','MT4交易软件','http://files.metaquotes.net/5959/mt4/hf4setup.exe','','0',NULL,'','0','0','1405922567','1422875276','0','0','0','1','0','0','','0');");
E_D("replace into `live_advertising` values('143','168','快讯通下载','http://www.kuaixun360.com/','','0',NULL,'','0','0','1405922567','1405927590','0','0','0','1','0','0','','0');");
E_D("replace into `live_advertising` values('145','169','机构点评','http://www.kuaixun360.com/dianping/','','0',NULL,'','0','0','1405922820','1405927450','0','0','0','1','0','0','','0');");
E_D("replace into `live_advertising` values('146','169','财经日历','http://www.kuaixun360.com/caijingrili/','','0',NULL,'','0','0','1405922820','1405927465','0','0','1','1','0','0','','0');");
E_D("replace into `live_advertising` values('147','169','黄鱼ETF','http://www.kuaixun360.com/etf_gold/','','0',NULL,'','0','0','1405922820','1405927482','0','0','2','1','0','0','','0');");
E_D("replace into `live_advertising` values('148','169','白银ETF','http://www.kuaixun360.com/etf_silver/','','0',NULL,'','0','0','1405922820','1405927495','0','0','4','1','0','0','','0');");
E_D("replace into `live_advertising` values('149','167','公告内容2','','广告内容1.','0',NULL,'','1','0','1406208675','1427873622','0','0','0','1','0','0','','1');");
E_D("replace into `live_advertising` values('150','167','建议操作','','<h1>\n	<br />\n</h1>','0',NULL,'','1','0','1406208693','1433240784','0','0','0','1','0','0','','1');");
E_D("replace into `live_advertising` values('151','170','轮播广告1','','','0',NULL,'upload/userimgthumb/20140724/2f1c3a343b9fb0cb7a2e6b8dfb56f6c5.jpg','0','0','1406209234','1406773021','0','0','0','1','0','0','upload/userimgthumb/20140724/2f1c3a343b9fb0cb7a2e6b8dfb56f6c5.jpg','1');");
E_D("replace into `live_advertising` values('152','170','轮播广告2','','','0',NULL,'upload/userimgthumb/20140724/2f1c3a343b9fb0cb7a2e6b8dfb56f6c5.jpg','0','0','1406209234','1406209276','0','0','2','1','0','0','upload/userimgthumb/20140724/2f1c3a343b9fb0cb7a2e6b8dfb56f6c5.jpg','1');");
E_D("replace into `live_advertising` values('153','170','轮播广告3','http://www.163.com','','0',NULL,'upload/userimgthumb/20140724/2f1c3a343b9fb0cb7a2e6b8dfb56f6c5.jpg','0','0','1406209234','1406209264','0','0','3','1','0','0','upload/userimgthumb/20140724/2f1c3a343b9fb0cb7a2e6b8dfb56f6c5.jpg','1');");
E_D("replace into `live_advertising` values('155','130','客服5','1254715625','','0',NULL,'upload/userimgthumb/20150518/21a102d8dc52015ff99fd99c2bc27a39.gif','2','0','1431911544','1452436937','0','0','0','1','77','22','upload/userimgthumb/20150518/21a102d8dc52015ff99fd99c2bc27a39.gif','1');");
E_D("replace into `live_advertising` values('156','130','客服6','1254715625','','0',NULL,'upload/userimgthumb/20150518/e11c3dec045ca05a00741696101890d3.gif','2','0','1431911804','1452437005','0','0','0','1','77','22','upload/userimgthumb/20150518/e11c3dec045ca05a00741696101890d3.gif','1');");

require("../../inc/footer.php");
?>