<?php
require("../../inc/header.php");

/*
		SoftName : EmpireBak Version 2010
		Author   : wm_chief
		Copyright: Powered by www.phome.net
*/

DoSetDbChar('utf8');
E_D("DROP TABLE IF EXISTS `live_action_log`;");
E_C("CREATE TABLE `live_action_log` (
  `logid` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `userid` tinyint(3) unsigned NOT NULL DEFAULT '0',
  `info` varchar(255) NOT NULL DEFAULT '',
  `isadmin` tinyint(4) NOT NULL DEFAULT '1' COMMENT '1:管理员 2:用户',
  `ip` varchar(15) NOT NULL DEFAULT '',
  `ctime` int(10) unsigned NOT NULL DEFAULT '0',
  PRIMARY KEY (`logid`),
  KEY `log_time` (`ctime`) USING BTREE,
  KEY `user_id` (`userid`) USING BTREE
) ENGINE=MyISAM AUTO_INCREMENT=1896 DEFAULT CHARSET=utf8");
E_D("replace into `live_action_log` values('1880','1','清空操作日志：action_log','1','127.0.0.1','1437977682');");
E_D("replace into `live_action_log` values('1881','1','设置用户等级：127','1','127.0.0.1','1437977840');");
E_D("replace into `live_action_log` values('1882','1','编辑会员：liuzihan','1','127.0.0.1','1437977866');");
E_D("replace into `live_action_log` values('1883','1','删除内容：[pt鲜花]','1','127.0.0.1','1451886231');");
E_D("replace into `live_action_log` values('1884','1','删除内容：[pt看多]','1','127.0.0.1','1451886235');");
E_D("replace into `live_action_log` values('1885','1','删除内容：[pt看多]','1','127.0.0.1','1451888252');");
E_D("replace into `live_action_log` values('1886','1','删除内容：[pt看多]','1','127.0.0.1','1451888257');");
E_D("replace into `live_action_log` values('1887','1','删除内容：[pt掌声]','1','127.0.0.1','1451888264');");
E_D("replace into `live_action_log` values('1888','1','删除内容：[pt震荡]','1','127.0.0.1','1451888284');");
E_D("replace into `live_action_log` values('1889','1','编辑系统设置','1','127.0.0.1','1452436911');");
E_D("replace into `live_action_log` values('1890','1','编辑广告：客服4','1','127.0.0.1','1452436928');");
E_D("replace into `live_action_log` values('1891','1','编辑广告：客服5','1','127.0.0.1','1452436937');");
E_D("replace into `live_action_log` values('1892','1','编辑广告：客服3','1','127.0.0.1','1452436994');");
E_D("replace into `live_action_log` values('1893','1','编辑广告：客服2','1','127.0.0.1','1452437000');");
E_D("replace into `live_action_log` values('1894','1','编辑广告：客服6','1','127.0.0.1','1452437006');");
E_D("replace into `live_action_log` values('1895','1','编辑广告：客服1','1','127.0.0.1','1452437024');");

require("../../inc/footer.php");
?>