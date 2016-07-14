<?php
require("../../inc/header.php");

/*
		SoftName : EmpireBak Version 2010
		Author   : wm_chief
		Copyright: Powered by www.phome.net
*/

DoSetDbChar('utf8');
E_D("DROP TABLE IF EXISTS `live_livecontent`;");
E_C("CREATE TABLE `live_livecontent` (
  `contentid` int(11) NOT NULL AUTO_INCREMENT,
  `contentcate` int(11) DEFAULT NULL COMMENT '直播内容分类',
  `content` text,
  `author` varchar(30) DEFAULT NULL,
  `userid` int(11) DEFAULT NULL,
  `masterid` int(11) DEFAULT NULL,
  `type` tinyint(4) DEFAULT '1' COMMENT '1:所有人可见，2：VIP可见；',
  `istop` tinyint(4) DEFAULT '0' COMMENT '1:置顶',
  `ishot` tinyint(4) DEFAULT '0' COMMENT '1:精华',
  `mtime` int(11) DEFAULT NULL,
  `ctime` int(11) DEFAULT NULL,
  PRIMARY KEY (`contentid`)
) ENGINE=MyISAM AUTO_INCREMENT=528 DEFAULT CHARSET=utf8");

require("../../inc/footer.php");
?>