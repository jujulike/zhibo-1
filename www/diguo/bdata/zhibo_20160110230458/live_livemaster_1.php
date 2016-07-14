<?php
require("../../inc/header.php");

/*
		SoftName : EmpireBak Version 2010
		Author   : wm_chief
		Copyright: Powered by www.phome.net
*/

DoSetDbChar('utf8');
E_D("DROP TABLE IF EXISTS `live_livemaster`;");
E_C("CREATE TABLE `live_livemaster` (
  `masterid` int(11) NOT NULL AUTO_INCREMENT,
  `mastertitle` varchar(100) DEFAULT NULL,
  `masterinfo` varchar(1000) DEFAULT NULL,
  `roomid` int(11) DEFAULT NULL,
  `hits` int(11) DEFAULT '0',
  `btime` int(11) DEFAULT NULL,
  `etime` int(11) DEFAULT NULL,
  `author` varchar(50) DEFAULT NULL,
  `userid` int(11) DEFAULT NULL,
  `sort` int(11) DEFAULT NULL,
  `status` tinyint(4) DEFAULT '1' COMMENT '0:未生效；1：已开始；2：结束；-1：被关闭',
  `mtime` int(11) DEFAULT NULL,
  `ctime` int(11) DEFAULT NULL,
  PRIMARY KEY (`masterid`)
) ENGINE=MyISAM AUTO_INCREMENT=30 DEFAULT CHARSET=utf8");
E_D("replace into `live_livemaster` values('29','亿洋网络直播','直播主题简介','26','0',NULL,'1403856732','ey_test','63',NULL,'2',NULL,'1396505255');");

require("../../inc/footer.php");
?>