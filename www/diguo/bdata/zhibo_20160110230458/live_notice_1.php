<?php
require("../../inc/header.php");

/*
		SoftName : EmpireBak Version 2010
		Author   : wm_chief
		Copyright: Powered by www.phome.net
*/

DoSetDbChar('utf8');
E_D("DROP TABLE IF EXISTS `live_notice`;");
E_C("CREATE TABLE `live_notice` (
  `noticeid` int(11) NOT NULL AUTO_INCREMENT,
  `title` varchar(120) NOT NULL,
  `link` varchar(120) DEFAULT NULL,
  `content` text NOT NULL,
  `author` varchar(30) DEFAULT NULL,
  `imgthumb` varchar(100) NOT NULL,
  `ctime` int(10) unsigned NOT NULL DEFAULT '0',
  `mtime` int(10) unsigned NOT NULL DEFAULT '0',
  `uid` int(10) unsigned NOT NULL DEFAULT '0',
  `mid` int(10) NOT NULL DEFAULT '0',
  `sort` int(10) NOT NULL DEFAULT '0',
  `status` tinyint(1) unsigned NOT NULL DEFAULT '0',
  PRIMARY KEY (`noticeid`)
) ENGINE=MyISAM AUTO_INCREMENT=166 DEFAULT CHARSET=utf8");

require("../../inc/footer.php");
?>