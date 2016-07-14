<?php
require("../../inc/header.php");

/*
		SoftName : EmpireBak Version 2010
		Author   : wm_chief
		Copyright: Powered by www.phome.net
*/

DoSetDbChar('utf8');
E_D("DROP TABLE IF EXISTS `live_system_config`;");
E_C("CREATE TABLE `live_system_config` (
  `confid` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `confkey` varchar(30) NOT NULL,
  `confval` mediumtext,
  `confnote` varchar(100) DEFAULT NULL,
  `memo` varchar(200) DEFAULT NULL,
  `fieldtype` varchar(255) DEFAULT 'text' COMMENT '字段类型',
  `sort` int(11) DEFAULT NULL COMMENT '排序,按数字大小排序',
  `mtime` int(11) NOT NULL,
  `ctime` int(11) DEFAULT NULL,
  `status` tinyint(4) DEFAULT '1',
  `cfgcate` tinyint(4) DEFAULT NULL,
  PRIMARY KEY (`confid`),
  UNIQUE KEY `base_id` (`confid`)
) ENGINE=MyISAM AUTO_INCREMENT=85 DEFAULT CHARSET=utf8");
E_D("replace into `live_system_config` values('6','isaudit','1','互动是否需要审核',NULL,'radio',NULL,'1434505682','1368670376','1','2');");
E_D("replace into `live_system_config` values('35','word_filter','fuck\n电话\n贱人\n妈的\n傻逼','设置敏感词过滤<br/>(每行一个规则)',NULL,'textarea',NULL,'1434505682',NULL,'1','2');");
E_D("replace into `live_system_config` values('36','checkmobile','0','是否开启手机短信验证','如开启需要有短信接口支持','radio',NULL,'1399943436',NULL,'2','1');");
E_D("replace into `live_system_config` values('37','tpl','themes/v2/','前台模版路径设置','','text','-1','1400044299',NULL,'2','2');");
E_D("replace into `live_system_config` values('38','tpl_admin','themes/admin/','后台模版路径设置','','text','-2','1400044299',NULL,'2','2');");
E_D("replace into `live_system_config` values('39','comm','themes/comm/','公共调用资源路径设置','','text','-3','1400044299',NULL,'2','2');");
E_D("replace into `live_system_config` values('40','site_title','慧通网络聊天室财经直播室','网站名称','','text',NULL,'1452436911',NULL,'1','1');");
E_D("replace into `live_system_config` values('41','site_keywords','慧通直播室,喊单系统,外汇喊单,黄金喊单,白银喊单','网站关键字','','text',NULL,'1452436911',NULL,'1','1');");
E_D("replace into `live_system_config` values('42','site_desc','慧通网络聊天室财经直播室','网站描述','','textarea',NULL,'1452436911',NULL,'1','1');");
E_D("replace into `live_system_config` values('43','site_copyright','慧通网络聊天室财经直播室版权所有','版权及备案信息','','textarea',NULL,'1452436911',NULL,'1','1');");
E_D("replace into `live_system_config` values('44','vercode_adminlogin','0','后台登录是否开启验证码','','checkbox',NULL,'1375406072',NULL,'2','2');");
E_D("replace into `live_system_config` values('45','imgthumb','upload/pages/20150727/5105601c14040399b5f4fa3b223ca369.png','网站logo','','img',NULL,'1452436911',NULL,'1','1');");
E_D("replace into `live_system_config` values('46','companyname','这里是公司名称','公司名称','','text',NULL,'1373960682',NULL,'2','1');");
E_D("replace into `live_system_config` values('51','article_thumb_width','200','资讯缩略图宽','','text',NULL,'1400744078',NULL,'2','2');");
E_D("replace into `live_system_config` values('52','article_thumb_height','200','资讯缩略图长','','text',NULL,'1400744078',NULL,'2','2');");
E_D("replace into `live_system_config` values('53','make_thumb','1','上传图片是否生成缩略图',NULL,'radio',NULL,'1400744078',NULL,'2','2');");
E_D("replace into `live_system_config` values('54','visitor_access','1','允许游客进入直播室',NULL,'radio',NULL,'1400044299',NULL,'2','1');");
E_D("replace into `live_system_config` values('55','allow_qqlogin','1','允许腾讯微博快捷登录',NULL,'radio',NULL,'1395811773',NULL,'2','1');");
E_D("replace into `live_system_config` values('56','allow_swlogin','1','允许新浪微博快捷登录',NULL,'radio',NULL,'1395811773',NULL,'2','1');");
E_D("replace into `live_system_config` values('57','yy_channel','39861788','输入YY频道ID',NULL,'text',NULL,'1452436911',NULL,'1','1');");
E_D("replace into `live_system_config` values('58','yy_subchannel','39861788','输入YY子频道ID',NULL,'text',NULL,'1452436911',NULL,'1','1');");
E_D("replace into `live_system_config` values('59','video_src','http://player.youku.com/player.php/sid/XNjkyNDcxMjAw/v.swf','输入视频链接（flash地址）',NULL,'text',NULL,'1401864410',NULL,'2','1');");
E_D("replace into `live_system_config` values('60','visitor_active','1','允许游客聊天互动',NULL,'radio',NULL,'1434505682',NULL,'1','2');");
E_D("replace into `live_system_config` values('61','smtp_server','smtp.126.com','系统消息SMTP服务器','','text',NULL,'1399943430',NULL,'2','3');");
E_D("replace into `live_system_config` values('62','smtp_username','eyoung_info@126.com','系统消息SMTP帐号','','text',NULL,'1399943430',NULL,'2','3');");
E_D("replace into `live_system_config` values('63','smtp_passwd','meiyoumima','系统消息SMTP密码','','text',NULL,'1399943430',NULL,'2','3');");
E_D("replace into `live_system_config` values('64','smtp_port','25','系统消息SMTP端口号',NULL,'text',NULL,'1399943430',NULL,'1','3');");
E_D("replace into `live_system_config` values('65','status_offline_time','20','设置用户离线时间（秒）',NULL,'text',NULL,'1434505682',NULL,'1','2');");
E_D("replace into `live_system_config` values('66','status_saystop_time','600','设置用户禁言时间（秒）',NULL,'text',NULL,'1434505682',NULL,'1','2');");
E_D("replace into `live_system_config` values('67','status_roomout_time','3600','设置用户踢出生效时间（秒）',NULL,'text',NULL,'1434505682',NULL,'1','2');");
E_D("replace into `live_system_config` values('68','open_vote','1','是否开启投票功能',NULL,'radio',NULL,'1405927272',NULL,'2','2');");
E_D("replace into `live_system_config` values('69','visitor_question','1','是否允许游客提问',NULL,'radio',NULL,'1405927272',NULL,'2','2');");
E_D("replace into `live_system_config` values('71','site_reg_vcode','1','开启注册验证码',NULL,'radio',NULL,'1405927272',NULL,'2','2');");
E_D("replace into `live_system_config` values('72','site_count_code','','网站统计代码',NULL,'textarea','100','1434505682',NULL,'1','2');");
E_D("replace into `live_system_config` values('73','site_complaint_qq','76314154','投诉建议QQ',NULL,'text',NULL,'1452436911',NULL,'1','1');");
E_D("replace into `live_system_config` values('74','site_customer_qq','76314154','在线客服QQ',NULL,'text',NULL,'1452436911',NULL,'1','1');");
E_D("replace into `live_system_config` values('75','site_customer_weixin','themes/images/public/qq/wx.jpg','官方微信二维码地址',NULL,'text',NULL,'1401864410',NULL,'2','1');");
E_D("replace into `live_system_config` values('76','site_customer_phone','400-888-888','在线客服电话',NULL,'text',NULL,'1401864410',NULL,'2','1');");
E_D("replace into `live_system_config` values('77','visitor_viewlive','1','游客是否可见直播内容',NULL,'radio',NULL,'1405927272',NULL,'2','2');");
E_D("replace into `live_system_config` values('78','visitor_viewqa','1','游客是否可见播主问答',NULL,'radio',NULL,'1405927272',NULL,'2','2');");
E_D("replace into `live_system_config` values('79','visitor_vote','1','允许游客投票',NULL,'radio',NULL,'1434505682',NULL,'1','2');");
E_D("replace into `live_system_config` values('80','site_help','http://www.yuyaoit.cn/news/detail/172','在线帮忙手册',NULL,'text',NULL,'0',NULL,'2','2');");
E_D("replace into `live_system_config` values('81','open_camera_model','0','开启第三方直播调用模式','开启后YY模式将被关闭','radio',NULL,'1452436911',NULL,'1','1');");
E_D("replace into `live_system_config` values('82','thirdparty_url_live','http://219.239.223.158:81/camera.html','第三方直播地址调用','开启第三方直播调用后有效','text',NULL,'1452436911',NULL,'1','1');");
E_D("replace into `live_system_config` values('83','thirdparty_url_player','http://219.239.223.158:81/liveplayer.html','第三方视频观看地址调用','开启第三方直播调用后有效','text',NULL,'1452436911',NULL,'1','1');");
E_D("replace into `live_system_config` values('84','open_roomkey','0','是否开启房间密码认证',NULL,'radio',NULL,'1434505682',NULL,'1','2');");

require("../../inc/footer.php");
?>