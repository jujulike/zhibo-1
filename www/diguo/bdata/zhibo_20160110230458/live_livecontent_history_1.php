<?php
require("../../inc/header.php");

/*
		SoftName : EmpireBak Version 2010
		Author   : wm_chief
		Copyright: Powered by www.phome.net
*/

DoSetDbChar('utf8');
E_D("DROP TABLE IF EXISTS `live_livecontent_history`;");
E_C("CREATE TABLE `live_livecontent_history` (
  `contentid` int(11) NOT NULL AUTO_INCREMENT,
  `content` text,
  `author` varchar(30) DEFAULT NULL,
  `userid` int(11) DEFAULT NULL,
  `masterid` int(11) DEFAULT NULL,
  `type` tinyint(4) DEFAULT '1' COMMENT '1:所有人可见，2：VIP可见；',
  `actime` int(11) DEFAULT NULL,
  `hisotrydate` varchar(10) DEFAULT NULL,
  `ctime` int(11) DEFAULT NULL,
  PRIMARY KEY (`contentid`)
) ENGINE=MyISAM AUTO_INCREMENT=170 DEFAULT CHARSET=utf8");
E_D("replace into `live_livecontent_history` values('166','<p>\n	haha\n</p>','亿洋网络','63','29','1','1402326110',NULL,'1422875763');");
E_D("replace into `live_livecontent_history` values('167','<img src=\"http://local.yuyaoit.cn/project/eysystem/ey_goldchat/simple_yy/themes/comm/js/kindeditor/plugins/flower/images/63.gif\" /><img src=\"http://local.yuyaoit.cn/project/eysystem/ey_goldchat/simple_yy/themes/comm/js/kindeditor/plugins/flower/images/63.gif\" /><img src=\"http://local.yuyaoit.cn/project/eysystem/ey_goldchat/simple_yy/themes/comm/js/kindeditor/plugins/flower/images/63.gif\" /><img src=\"http://local.yuyaoit.cn/project/eysystem/ey_goldchat/simple_yy/themes/comm/js/kindeditor/plugins/flower/images/63.gif\" />','亿洋网络','63','29','1','1402326920',NULL,'1422875763');");
E_D("replace into `live_livecontent_history` values('168','我是播主，我是播主亲亲亲亲亲','亿洋网络','63','29','1','1403856709',NULL,'1422875763');");
E_D("replace into `live_livecontent_history` values('169','网友互动','亿洋网络','63','29','1','1403856732',NULL,'1422875763');");

require("../../inc/footer.php");
?>