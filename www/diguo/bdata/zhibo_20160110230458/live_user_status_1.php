<?php
require("../../inc/header.php");

/*
		SoftName : EmpireBak Version 2010
		Author   : wm_chief
		Copyright: Powered by www.phome.net
*/

DoSetDbChar('utf8');
E_D("DROP TABLE IF EXISTS `live_user_status`;");
E_C("CREATE TABLE `live_user_status` (
  `userid` int(11) NOT NULL DEFAULT '0',
  `roomid` int(11) DEFAULT NULL,
  `status` tinyint(4) DEFAULT '0' COMMENT '0:禁言,1:踢出',
  `vtime` int(11) DEFAULT NULL,
  `atime` int(11) DEFAULT NULL,
  PRIMARY KEY (`userid`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8");

require("../../inc/footer.php");
?>