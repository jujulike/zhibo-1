<?php
require("../../inc/header.php");

/*
		SoftName : EmpireBak Version 2010
		Author   : wm_chief
		Copyright: Powered by www.phome.net
*/

DoSetDbChar('utf8');
E_D("DROP TABLE IF EXISTS `live_handan`;");
E_C("CREATE TABLE `live_handan` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `opentime` datetime DEFAULT NULL,
  `handan_type` varchar(10) DEFAULT NULL,
  `position` int(11) DEFAULT NULL COMMENT '仓位百分比',
  `handan_product` varchar(30) DEFAULT NULL,
  `openprice` int(11) DEFAULT NULL COMMENT '开仓价',
  `stopprice` int(11) DEFAULT NULL COMMENT '止损价',
  `stopsurplus` int(11) DEFAULT NULL COMMENT '止盈价',
  `closeprice` int(11) DEFAULT NULL COMMENT '平仓价',
  `closetime` datetime DEFAULT NULL COMMENT '平仓时间',
  `earnpoint` int(11) DEFAULT NULL COMMENT '赚取点数',
  `bak` varchar(500) DEFAULT NULL,
  `author` varchar(30) DEFAULT NULL,
  `ctime` int(11) DEFAULT NULL,
  `mtime` int(11) DEFAULT NULL,
  `masterid` int(11) DEFAULT NULL COMMENT '直播主题ID',
  PRIMARY KEY (`id`),
  KEY `masterid` (`masterid`)
) ENGINE=MyISAM AUTO_INCREMENT=50 DEFAULT CHARSET=utf8");
E_D("replace into `live_handan` values('13','2014-05-28 08:18:50','到价买入','0','华银15KG','0','0','0','0','2014-05-28 08:18:50','0','','分析师','1401265138',NULL,'29');");
E_D("replace into `live_handan` values('20','2014-05-28 08:18:50','到价买入','0','华银15KG','0','0','0','0','2014-05-28 08:18:50','0','','分析师','1401265138',NULL,'29');");
E_D("replace into `live_handan` values('24','2014-05-28 08:18:50','到价买入','0','华银15KG','0','0','0','0','2014-05-28 08:18:50','0','','分析师','1401265138',NULL,'29');");
E_D("replace into `live_handan` values('32','2014-05-28 08:18:50','到价买入','0','华银15KG','0','0','0','0','2014-05-28 08:18:50','0','','分析师','1401265138',NULL,'29');");
E_D("replace into `live_handan` values('36','2014-05-28 08:18:50','到价买入','0','华银15KG','0','0','0','0','2014-05-28 08:18:50','0','','分析师','1401265138',NULL,'29');");
E_D("replace into `live_handan` values('40','2014-05-28 08:18:50','到价买入','0','华银15KG','0','0','0','0','2014-05-28 08:18:50','0','','分析师','1401265138',NULL,'29');");
E_D("replace into `live_handan` values('44','2014-05-28 08:18:50','到价买入','0','华银15KG','0','0','0','0','2014-05-28 08:18:50','0','','分析师','1401265138',NULL,'29');");

require("../../inc/footer.php");
?>