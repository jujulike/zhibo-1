<?php
require("../../inc/header.php");

/*
		SoftName : EmpireBak Version 2010
		Author   : wm_chief
		Copyright: Powered by www.phome.net
*/

DoSetDbChar('utf8');
E_D("DROP TABLE IF EXISTS `live_chatcontent_history`;");
E_C("CREATE TABLE `live_chatcontent_history` (
  `chatid` int(11) NOT NULL AUTO_INCREMENT,
  `masterid` int(11) DEFAULT NULL,
  `chatcontent` mediumtext,
  `chatname` varchar(255) DEFAULT NULL,
  `chatuserid` int(11) DEFAULT NULL,
  `mtime` int(11) DEFAULT NULL,
  `ctime` int(11) DEFAULT NULL,
  PRIMARY KEY (`chatid`)
) ENGINE=MyISAM AUTO_INCREMENT=70 DEFAULT CHARSET=utf8");
E_D("replace into `live_chatcontent_history` values('69','29','test','游客45612637','45612637','0','1422875763');");

require("../../inc/footer.php");
?>