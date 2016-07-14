<?php
require("../../inc/header.php");

/*
		SoftName : EmpireBak Version 2010
		Author   : wm_chief
		Copyright: Powered by www.phome.net
*/

DoSetDbChar('utf8');
E_D("DROP TABLE IF EXISTS `live_admin_user`;");
E_C("CREATE TABLE `live_admin_user` (
  `user_id` smallint(5) unsigned NOT NULL AUTO_INCREMENT,
  `user_name` varchar(60) NOT NULL DEFAULT '',
  `email` varchar(60) NOT NULL DEFAULT '',
  `password` varchar(32) NOT NULL DEFAULT '',
  `ec_salt` varchar(10) DEFAULT NULL,
  `add_time` int(11) NOT NULL DEFAULT '0',
  `last_login` int(11) NOT NULL DEFAULT '0',
  `last_ip` varchar(15) NOT NULL DEFAULT '',
  `action_list` text,
  `nav_list` text,
  `lang_type` varchar(50) NOT NULL DEFAULT '',
  `agency_id` smallint(5) unsigned DEFAULT '0',
  `suppliers_id` smallint(5) unsigned DEFAULT '0',
  `todolist` longtext,
  `role_id` smallint(5) DEFAULT NULL,
  PRIMARY KEY (`user_id`),
  KEY `user_name` (`user_name`) USING BTREE,
  KEY `agency_id` (`agency_id`) USING BTREE
) ENGINE=MyISAM AUTO_INCREMENT=18 DEFAULT CHARSET=utf8");
E_D("replace into `live_admin_user` values('1','admin','dgt@yuyit.cn','e10adc3949ba59abbe56e057f20f883e','108','1370392049','1376363079','127.0.0.1','all','会员列表|users.php?act=list,商品列表|goods.php?act=list,订单列表|order.php?act=list,用户评论|comment_manage.php?act=list','','0','0','\n',NULL);");
E_D("replace into `live_admin_user` values('16','admin1','admin@hyzxfy.com','e00cf25ad42683b3df678c61f42c6bda',NULL,'1429249275','0','',NULL,NULL,'','0','0',NULL,'11');");

require("../../inc/footer.php");
?>