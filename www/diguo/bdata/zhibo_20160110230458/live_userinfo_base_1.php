<?php
require("../../inc/header.php");

/*
		SoftName : EmpireBak Version 2010
		Author   : wm_chief
		Copyright: Powered by www.phome.net
*/

DoSetDbChar('utf8');
E_D("DROP TABLE IF EXISTS `live_userinfo_base`;");
E_C("CREATE TABLE `live_userinfo_base` (
  `userid` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `username` varchar(32) DEFAULT NULL,
  `passwd` varchar(32) DEFAULT NULL,
  `name` varchar(32) DEFAULT NULL,
  `imgthumb` varchar(100) DEFAULT NULL,
  `email` varchar(64) DEFAULT NULL,
  `qq` varchar(20) DEFAULT NULL,
  `phone` varchar(20) DEFAULT NULL,
  `birthday` varchar(10) DEFAULT NULL,
  `age` varchar(10) DEFAULT NULL,
  `stockage` tinyint(4) DEFAULT NULL,
  `homepage` varchar(50) DEFAULT NULL,
  `gender` varchar(1) DEFAULT '0',
  `usertype` smallint(6) DEFAULT NULL,
  `kind` varchar(1000) DEFAULT NULL COMMENT 'VIP权限记录缓存',
  `userinfo` tinytext,
  `regtime` int(11) DEFAULT NULL,
  `regip` int(11) DEFAULT NULL,
  `level` tinyint(4) DEFAULT '0' COMMENT '会员等级：0:普通用户，1：为VIP',
  `ismaster` tinyint(4) DEFAULT NULL COMMENT '是否为播主',
  `status` smallint(6) DEFAULT '1',
  `ctime` int(11) DEFAULT NULL,
  `mtime` int(11) DEFAULT NULL,
  `approomvip` int(11) DEFAULT '0' COMMENT '为要申请VIP的直播室ID',
  `appstatus` tinyint(4) DEFAULT '0' COMMENT '0为未申请，1为申请',
  `recomm_sort` int(11) DEFAULT NULL,
  PRIMARY KEY (`userid`),
  UNIQUE KEY `userid` (`userid`)
) ENGINE=MyISAM AUTO_INCREMENT=132 DEFAULT CHARSET=utf8");
E_D("replace into `live_userinfo_base` values('94','李放放','c5059fc090d73ae343983849f671a4d7','沐浴春风',NULL,'422554023@qq.con','422554023','13803457479',NULL,NULL,NULL,NULL,'0',NULL,NULL,NULL,NULL,'-1212558229','0',NULL,'1','1433216172',NULL,'0','0',NULL);");
E_D("replace into `live_userinfo_base` values('89','1234567','e10adc3949ba59abbe56e057f20f883e','笑看人生',NULL,'1129448428@qq.com','1129448428','13671031523',NULL,NULL,NULL,NULL,'1',NULL,'a:1:{i:0;s:2:\"26\";}',NULL,NULL,'-1212558229','7','0','1','1433213919','1433214045','0','0',NULL);");
E_D("replace into `live_userinfo_base` values('93','dongzheng','e10adc3949ba59abbe56e057f20f883e','风轻云淡',NULL,'1126526349@qq.com','1126526349','13632609159',NULL,NULL,NULL,NULL,'1',NULL,NULL,NULL,NULL,'-1212558229','1',NULL,'1','1433215811','1433216792','0','0',NULL);");
E_D("replace into `live_userinfo_base` values('116','13671031523','e10adc3949ba59abbe56e057f20f883e','戈壁',NULL,'1031325450@qq.com','1031325450','13671031523',NULL,NULL,NULL,NULL,'0',NULL,NULL,NULL,NULL,'-1212668563','5',NULL,'1','1433754955','1433754973','0','0',NULL);");
E_D("replace into `live_userinfo_base` values('91','12345','e10adc3949ba59abbe56e057f20f883e','老张',NULL,'2232932372@qq.com','2232932372','13994839710',NULL,NULL,NULL,NULL,'0',NULL,NULL,NULL,NULL,'-1212558229','3',NULL,'1','1433214389','1433820964','0','0',NULL);");
E_D("replace into `live_userinfo_base` values('92','750197119','e10adc3949ba59abbe56e057f20f883e','刘经理',NULL,'750197119@qq.com','750197119','13671031523',NULL,NULL,NULL,NULL,'1',NULL,'a:1:{i:0;s:2:\"26\";}',NULL,NULL,'-1212558229','0','26','1','1433214849','1433754788','0','0',NULL);");
E_D("replace into `live_userinfo_base` values('98','zhangyong','e10adc3949ba59abbe56e057f20f883e','蓝色电极',NULL,'9587973@qq.com','9587973','13361581619',NULL,NULL,NULL,NULL,'0',NULL,NULL,NULL,NULL,'-1212558229','1',NULL,'1','1433216655','1433216775','0','0',NULL);");
E_D("replace into `live_userinfo_base` values('118','2892756771','e10adc3949ba59abbe56e057f20f883e','泰世通 — 贾经理',NULL,'2892756771@qq.com','2892756771','13671031523',NULL,NULL,NULL,NULL,'0',NULL,'a:1:{i:0;s:2:\"26\";}',NULL,NULL,'-573750485','1','26','1','1433813246','1433822240','0','0',NULL);");
E_D("replace into `live_userinfo_base` values('97','李放放2','c5059fc090d73ae343983849f671a4d7','后会无期',NULL,'3191314766@qq.com','3191314766','13803457479',NULL,NULL,NULL,NULL,'0',NULL,NULL,NULL,NULL,'-1212558229','0',NULL,'1','1433216483',NULL,'0','0',NULL);");
E_D("replace into `live_userinfo_base` values('99','wangwei','e10adc3949ba59abbe56e057f20f883e','一方寸土',NULL,'1445055878@qq.com','1445055878','15513804892',NULL,NULL,NULL,NULL,'0',NULL,NULL,NULL,NULL,'-1212558229','2',NULL,'1','1433216914','1433297386','0','0',NULL);");
E_D("replace into `live_userinfo_base` values('100','weiyun','e10adc3949ba59abbe56e057f20f883e','微云',NULL,'2738731919@qq.com','2738731919','15513804892',NULL,NULL,NULL,NULL,'0',NULL,NULL,NULL,NULL,'-1212558229','0',NULL,'1','1433217142','1433297439','0','0',NULL);");
E_D("replace into `live_userinfo_base` values('101','18005625966','e10adc3949ba59abbe56e057f20f883e','游泳儿',NULL,'494370750@qq.com','494370750','18005625966',NULL,NULL,NULL,NULL,'0',NULL,NULL,NULL,NULL,'-1212558229','3',NULL,'1','1433217370','1433217396','0','0',NULL);");
E_D("replace into `live_userinfo_base` values('102','13911644336','e10adc3949ba59abbe56e057f20f883e','老三',NULL,'383673678@qq.com','383673678','13911644336',NULL,NULL,NULL,NULL,'0',NULL,NULL,NULL,NULL,'-1212558229','6',NULL,'1','1433217501','1433217514','0','0',NULL);");
E_D("replace into `live_userinfo_base` values('103','13506480668','e10adc3949ba59abbe56e057f20f883e','东子',NULL,'1466295538@qq.com','1466295538','13506480668',NULL,NULL,NULL,NULL,'0',NULL,NULL,NULL,NULL,'-1212558229','5',NULL,'1','1433217613','1433217628','0','0',NULL);");
E_D("replace into `live_userinfo_base` values('104','18635612238','e10adc3949ba59abbe56e057f20f883e','Perdre tou',NULL,'746034282@qq.com','746034282','18635612238',NULL,NULL,NULL,NULL,'0',NULL,NULL,NULL,NULL,'-1212558229','3',NULL,'1','1433217794','1433217810','0','0',NULL);");
E_D("replace into `live_userinfo_base` values('105','13292715555','e10adc3949ba59abbe56e057f20f883e','黑色时代',NULL,'1004047905@qq.com','1004047905','13292715555',NULL,NULL,NULL,NULL,'0',NULL,NULL,NULL,NULL,'-1212558229','3',NULL,'1','1433217926','1433217941','0','0',NULL);");
E_D("replace into `live_userinfo_base` values('106','liuruncheng','e10adc3949ba59abbe56e057f20f883e','淡蓝色的烟',NULL,'2498496617@qq.com','2498496617','13427501428',NULL,NULL,NULL,NULL,'0',NULL,NULL,NULL,NULL,'-1212558229','0',NULL,'1','1433229818',NULL,'0','0',NULL);");
E_D("replace into `live_userinfo_base` values('107','cuijiliang','e10adc3949ba59abbe56e057f20f883e','崔纪良',NULL,'470065563@qq.com','470065563','18035631088',NULL,NULL,NULL,NULL,'1',NULL,NULL,NULL,NULL,'-1212558229','2',NULL,'1','1433235475','1433239903','0','0',NULL);");
E_D("replace into `live_userinfo_base` values('108','anjie','e10adc3949ba59abbe56e057f20f883e','金喜',NULL,'461948507@qq.com','461948507','15003431928',NULL,NULL,NULL,NULL,'0',NULL,NULL,NULL,NULL,'-1212558229','3',NULL,'1','1433235619','1433239925','0','0',NULL);");
E_D("replace into `live_userinfo_base` values('109','wenjidong','e10adc3949ba59abbe56e057f20f883e','金丰',NULL,'526453688@qq.com','526453688','13803431069',NULL,NULL,NULL,NULL,'0',NULL,NULL,NULL,NULL,'-1212558229','1',NULL,'1','1433235842','1433239937','0','0',NULL);");
E_D("replace into `live_userinfo_base` values('110','zhangweifang','e10adc3949ba59abbe56e057f20f883e','7012',NULL,'466967394@qq.com','466967394','15234601633',NULL,NULL,NULL,NULL,'0',NULL,NULL,NULL,NULL,'-1212558229','1',NULL,'1','1433239296','1433239958','0','0',NULL);");
E_D("replace into `live_userinfo_base` values('111','gaoxinping','e10adc3949ba59abbe56e057f20f883e','大贵',NULL,'1527514350@qq.com','1527514350','18503515215',NULL,NULL,NULL,NULL,'0',NULL,NULL,NULL,NULL,'-1212558229','6',NULL,'1','1433239518','1433239970','0','0',NULL);");
E_D("replace into `live_userinfo_base` values('112','zhangwei','e10adc3949ba59abbe56e057f20f883e','蔷薇',NULL,'354130765@qq.com','354130765','13613483842',NULL,NULL,NULL,NULL,'0',NULL,NULL,NULL,NULL,'-1212558229','1',NULL,'1','1433239647','1433239978','0','0',NULL);");
E_D("replace into `live_userinfo_base` values('113','1129973911','c2856731b92b20c050459031941e4a22','小财迷',NULL,'1129973911@qq.com','1129973911','18651236543',NULL,NULL,NULL,NULL,'0',NULL,NULL,NULL,NULL,'-573738786','0',NULL,'1','1433298756',NULL,'0','0',NULL);");
E_D("replace into `live_userinfo_base` values('114','xufujun','e10adc3949ba59abbe56e057f20f883e','舵主',NULL,'2623925297@qq.com','2623925297','15234175306',NULL,NULL,NULL,NULL,'0',NULL,'a:1:{i:0;s:2:\"26\";}',NULL,NULL,'-573738786','0','26','1','1433302354','1433819818','0','0',NULL);");
E_D("replace into `live_userinfo_base` values('115','13292128950','e10adc3949ba59abbe56e057f20f883e','绝对值',NULL,'1149141680@qq.com','11491416080','13292128950',NULL,NULL,NULL,NULL,'0',NULL,NULL,NULL,NULL,'-1212668563','0',NULL,'1','1433751097',NULL,'0','0',NULL);");
E_D("replace into `live_userinfo_base` values('117','1469591921','e10adc3949ba59abbe56e057f20f883e','泰世通 — 李经理',NULL,'1469591921@qq.com','1469591921','13671031523',NULL,NULL,NULL,NULL,'0',NULL,'a:1:{i:0;s:2:\"26\";}',NULL,NULL,'-573750485','1','26','1','1433812873','1433822249','0','0',NULL);");
E_D("replace into `live_userinfo_base` values('119','353909204','e10adc3949ba59abbe56e057f20f883e','泰世通 — 谢经理',NULL,'353909204@qq.com','353909204','13671031523',NULL,NULL,NULL,NULL,'0',NULL,'a:1:{i:0;s:2:\"26\";}',NULL,NULL,'-573750485','1','26','1','1433813354','1433822229','0','0',NULL);");
E_D("replace into `live_userinfo_base` values('120','574136472','e10adc3949ba59abbe56e057f20f883e','泰世通 — 王经理',NULL,'574136472@qq.com','574136472','13671031523',NULL,NULL,NULL,NULL,'0',NULL,'a:1:{i:0;s:2:\"26\";}',NULL,NULL,'-573750485','1','26','1','1433813474','1433822222','0','0',NULL);");
E_D("replace into `live_userinfo_base` values('121','932424766','e10adc3949ba59abbe56e057f20f883e','泰世通 — 邓经理',NULL,'932424766@qq.com','932424766','13671031523',NULL,NULL,NULL,NULL,'0',NULL,'a:1:{i:0;s:2:\"26\";}',NULL,NULL,'-573750485','1','26','1','1433813574','1433822213','0','0',NULL);");
E_D("replace into `live_userinfo_base` values('122','489511945','e10adc3949ba59abbe56e057f20f883e','泰世通 — 范经理',NULL,'489511945@qq.com','489511945','13671031523',NULL,NULL,NULL,NULL,'0',NULL,'a:1:{i:0;s:2:\"26\";}',NULL,NULL,'-573750485','1','26','1','1433813673','1433822203','0','0',NULL);");
E_D("replace into `live_userinfo_base` values('123','2576383942','e10adc3949ba59abbe56e057f20f883e','看我笑',NULL,'2576383942@qq.com','2576383942','13671031523',NULL,NULL,NULL,NULL,'0',NULL,NULL,NULL,NULL,'-573750485','0',NULL,'1','1433815356',NULL,'0','0',NULL);");
E_D("replace into `live_userinfo_base` values('124','147427107','e10adc3949ba59abbe56e057f20f883e','炒白银换金屋',NULL,'147427107@qq.com','147427107','13671031523',NULL,NULL,NULL,NULL,'0',NULL,NULL,NULL,NULL,'-573750485','0',NULL,'1','1433815512',NULL,'0','0',NULL);");
E_D("replace into `live_userinfo_base` values('125','2818430997','e10adc3949ba59abbe56e057f20f883e','小辣椒',NULL,'2818430997@qq.com','2818430997','13671031523',NULL,NULL,NULL,NULL,'0',NULL,NULL,NULL,NULL,'-573750485','0',NULL,'1','1433815650',NULL,'0','0',NULL);");
E_D("replace into `live_userinfo_base` values('126','1901172848','e10adc3949ba59abbe56e057f20f883e','美美的',NULL,'1901172848@qq.com','1901172848','13671031523',NULL,NULL,NULL,NULL,'0',NULL,NULL,NULL,NULL,'-573750485','0',NULL,'1','1433816058',NULL,'0','0',NULL);");
E_D("replace into `live_userinfo_base` values('127','liuzihan','aa302fce5539ed4efa01495a04a12bd0','liuzihan',NULL,'1222@qq.com','12112','13800138000',NULL,NULL,NULL,NULL,'0',NULL,'a:1:{i:0;s:2:\"26\";}',NULL,NULL,'1857105205','0','26','1','1433856386','1437977866','0','0',NULL);");
E_D("replace into `live_userinfo_base` values('129','18098926941','e10adc3949ba59abbe56e057f20f883e','浪天涯',NULL,'546849097@qq.com','546849097','18098926941',NULL,NULL,NULL,NULL,'0',NULL,NULL,NULL,NULL,'-1418445880','0',NULL,'1','1434011711','1434011753','0','0',NULL);");
E_D("replace into `live_userinfo_base` values('130','w123456','3d24b838770ee90773804e8599e549ff','w123',NULL,'854873557@qq.com','854873557','13485378400',NULL,NULL,NULL,NULL,'0',NULL,NULL,NULL,NULL,'1021282421','0',NULL,'1','1434445466',NULL,'0','0',NULL);");
E_D("replace into `live_userinfo_base` values('131','123456','10b28df7c98111e63cdfb3a2eca7f7bf','花间草',NULL,'1254715625@qq.com','1254715625','18175863383',NULL,NULL,NULL,NULL,'0',NULL,NULL,NULL,NULL,'2130706433','0',NULL,'1','1451882057',NULL,'0','0',NULL);");

require("../../inc/footer.php");
?>