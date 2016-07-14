<?php
require("../../inc/header.php");

/*
		SoftName : EmpireBak Version 2010
		Author   : wm_chief
		Copyright: Powered by www.phome.net
*/

DoSetDbChar('utf8');
E_D("DROP TABLE IF EXISTS `live_master_q2a`;");
E_C("CREATE TABLE `live_master_q2a` (
  `questionid` int(11) NOT NULL AUTO_INCREMENT,
  `questioncontent` tinytext,
  `questionname` varchar(30) DEFAULT NULL,
  `answercontent` tinytext,
  `answername` varchar(30) DEFAULT NULL,
  `masterid` int(11) DEFAULT NULL,
  `tolive` tinyint(4) DEFAULT '0' COMMENT '1:推送到直播室',
  `status` tinyint(4) DEFAULT '0' COMMENT '0：未回答；1：已回答',
  `mtime` int(11) DEFAULT NULL,
  `ctime` int(11) DEFAULT NULL,
  `questionuserid` int(11) DEFAULT NULL,
  `answeruserid` int(11) DEFAULT NULL,
  PRIMARY KEY (`questionid`)
) ENGINE=MyISAM AUTO_INCREMENT=105 DEFAULT CHARSET=utf8");
E_D("replace into `live_master_q2a` values('100','这是我刚刚提的问题','阿二二',NULL,NULL,'29','0','0',NULL,'1401864564','69',NULL);");
E_D("replace into `live_master_q2a` values('104','我再提个问题看看','阿二二','我又回答了','亿洋网络','29','0','0','1403856485','1401864640','69','63');");
E_D("replace into `live_master_q2a` values('103','我要问问题向播主','3333','我回答了，请确认','亿洋网络','29','0','0','1403856462','1403856443','75','63');");

require("../../inc/footer.php");
?>