<?php
require("../../inc/header.php");

/*
		SoftName : EmpireBak Version 2010
		Author   : wm_chief
		Copyright: Powered by www.phome.net
*/

DoSetDbChar('utf8');
E_D("DROP TABLE IF EXISTS `live_admin_action`;");
E_C("CREATE TABLE `live_admin_action` (
  `action_id` tinyint(3) unsigned NOT NULL AUTO_INCREMENT,
  `parent_id` tinyint(3) unsigned DEFAULT '0',
  `action_code` varchar(20) DEFAULT '',
  `action_name` varchar(100) DEFAULT '',
  `action_link` varchar(300) DEFAULT NULL,
  `level` varchar(20) DEFAULT '',
  PRIMARY KEY (`action_id`),
  UNIQUE KEY `action_id` (`action_id`),
  KEY `parent_id` (`parent_id`) USING BTREE
) ENGINE=MyISAM AUTO_INCREMENT=196 DEFAULT CHARSET=utf8");
E_D("replace into `live_admin_action` values('1','144','setting_1','基本设置','admin/setting/index/1','3');");
E_D("replace into `live_admin_action` values('27','145','region','地区管理','admin/region','-3');");
E_D("replace into `live_admin_action` values('45','147','article','新闻管理','admin/article','-3');");
E_D("replace into `live_admin_action` values('170','169','menu_user','会员管理',NULL,'2');");
E_D("replace into `live_admin_action` values('171','170','user','用户管理','admin/user','3');");
E_D("replace into `live_admin_action` values('77','151','page','单页内容管理','admin/pages','-3');");
E_D("replace into `live_admin_action` values('136','154','role','角色管理','admin/adminuser/role_list','3');");
E_D("replace into `live_admin_action` values('124','154','admin_user','管理员列表','admin/adminuser/admin_list','3');");
E_D("replace into `live_admin_action` values('134','146','live_room','直播室管理','admin/liveroom/tlist/29','3');");
E_D("replace into `live_admin_action` values('178','138','menu_menu','导航管理',NULL,'-2');");
E_D("replace into `live_admin_action` values('137','150','ad_home','广告内容管理','admin/advertisement/tlist','3');");
E_D("replace into `live_admin_action` values('138','0','global','全局',NULL,'1');");
E_D("replace into `live_admin_action` values('139','0','info','信息管理',NULL,'1');");
E_D("replace into `live_admin_action` values('140','0','ad','广告管理',NULL,'1');");
E_D("replace into `live_admin_action` values('141','0','pages','单页管理',NULL,'-1');");
E_D("replace into `live_admin_action` values('143','0','action','管理员',NULL,'1');");
E_D("replace into `live_admin_action` values('144','138','menu_general','全局配置',NULL,'2');");
E_D("replace into `live_admin_action` values('145','138','menu_public','公共数据管理',NULL,'-1');");
E_D("replace into `live_admin_action` values('146','139','menu_live','直播管理',NULL,'2');");
E_D("replace into `live_admin_action` values('147','139','menu_article','资讯管理',NULL,'-2');");
E_D("replace into `live_admin_action` values('177','178','menu','导航管理','admin/category/tlist/menu','-3');");
E_D("replace into `live_admin_action` values('169','0','user','会员管理',NULL,'1');");
E_D("replace into `live_admin_action` values('150','140','menu_ad','广告管理',NULL,'2');");
E_D("replace into `live_admin_action` values('151','141','menu_page','单页管理',NULL,'-2');");
E_D("replace into `live_admin_action` values('154','143','menu_admin','管理员',NULL,'2');");
E_D("replace into `live_admin_action` values('168','154','action_log','操作日志','actionlog','3');");
E_D("replace into `live_admin_action` values('173','170','appvip','VIP用户申请','admin/user/appvip','-3');");
E_D("replace into `live_admin_action` values('174','170','getUsers','禁言用户激活','admin/user/getUsers','-3');");
E_D("replace into `live_admin_action` values('175','146','live_master','直播主题管理','admin/livemaster','-3');");
E_D("replace into `live_admin_action` values('176','146','live_app','直播申请管理','admin/liveapp','-1');");
E_D("replace into `live_admin_action` values('179','146','live_content','直播内容管理','admin/livecontent','-3');");
E_D("replace into `live_admin_action` values('180','139','menu_zt','专题管理',NULL,'-1');");
E_D("replace into `live_admin_action` values('181','180','zt','专题管理','admin/zt','-3');");
E_D("replace into `live_admin_action` values('182','147','notice','公告管理','admin/notice','-3');");
E_D("replace into `live_admin_action` values('183','144','setting_2','系统设置','admin/setting/index/2','3');");
E_D("replace into `live_admin_action` values('184','144','setting_3','SMTP设置','admin/setting/index/3','-3');");
E_D("replace into `live_admin_action` values('185','170','service','预约名单','admin/service','-3');");
E_D("replace into `live_admin_action` values('186','146','live_handan','喊单管理','admin/handan','-3');");
E_D("replace into `live_admin_action` values('187','144','moni','虚拟人设置','admin/moni','3');");
E_D("replace into `live_admin_action` values('188','146','chat_content','网友互动内容管理','admin/chatcontent','3');");
E_D("replace into `live_admin_action` values('189','146','qa_content','问答内容管理','admin/qacontent','-3');");
E_D("replace into `live_admin_action` values('190','0','help','帮助','','-1');");
E_D("replace into `live_admin_action` values('191','190','menu_help','在线手册','','2');");
E_D("replace into `live_admin_action` values('192','191','help_doc','后台操作说明','admin/help/doc','3');");
E_D("replace into `live_admin_action` values('193','146','classes','课程管理','admin/classes','3');");
E_D("replace into `live_admin_action` values('195','170','login_log','登陆日志','admin/user/login_log','3');");

require("../../inc/footer.php");
?>