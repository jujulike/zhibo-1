<?php
require("../../inc/header.php");

/*
		SoftName : EmpireBak Version 2010
		Author   : wm_chief
		Copyright: Powered by www.phome.net
*/

DoSetDbChar('utf8');
E_D("DROP TABLE IF EXISTS `live_category`;");
E_C("CREATE TABLE `live_category` (
  `cateid` int(11) NOT NULL AUTO_INCREMENT COMMENT '分类ID',
  `catename` varchar(30) DEFAULT NULL,
  `parentid` int(11) DEFAULT '0',
  `func` varchar(30) DEFAULT NULL COMMENT '所属对象，分类信息用于哪个功能',
  `alias` varchar(30) DEFAULT NULL,
  `info` varchar(1000) DEFAULT NULL,
  `sort` int(11) DEFAULT NULL,
  `status` tinyint(4) DEFAULT '1',
  `mtime` int(11) DEFAULT NULL,
  `ctime` int(11) DEFAULT NULL,
  `total` int(11) DEFAULT '0',
  `showtype` varchar(30) DEFAULT '1' COMMENT '1:WEB站；2：WAP站 3:微信站',
  `iscommend` tinyint(1) DEFAULT '1' COMMENT '是否显示在导航栏，默认1为显示',
  PRIMARY KEY (`cateid`)
) ENGINE=MyISAM AUTO_INCREMENT=171 DEFAULT CHARSET=utf8");
E_D("replace into `live_category` values('29','视频直播厅','0','live','stock','','1','1',NULL,'1396254968','0','','1');");
E_D("replace into `live_category` values('32','直播内容分类','0','livecate',NULL,NULL,NULL,'1',NULL,'1355061971','0','1','1');");
E_D("replace into `live_category` values('100','关于我们','0','pages','','','0','1',NULL,'1395985369','0','1','1');");
E_D("replace into `live_category` values('106','下载专区','0','pages','','','2','1','1400144694','1395991282','0','','1');");
E_D("replace into `live_category` values('71','网友互动','32','livecate',NULL,'','2','1',NULL,'1372143327','0','1','1');");
E_D("replace into `live_category` values('72','消息解读','32','livecate',NULL,'','1','1',NULL,'1372143314','0','1','1');");
E_D("replace into `live_category` values('73','行情播报','32','livecate',NULL,'','3','1',NULL,'1372143343','0','1','1');");
E_D("replace into `live_category` values('74','投资者教育','32','livecate',NULL,'','4','1',NULL,'1372143355','0','1','1');");
E_D("replace into `live_category` values('75','操作喊单','32','livecate',NULL,'','5','1',NULL,'1372143370','0','1','1');");
E_D("replace into `live_category` values('112','经济数据','109','pages','','','3','1',NULL,'1395993742','0','1','1');");
E_D("replace into `live_category` values('111','etf持仓量','109','pages','','','2','1',NULL,'1395993728','0','1','1');");
E_D("replace into `live_category` values('117','联系我们','0','pages','','','4','1',NULL,'1395996423','0','1','1');");
E_D("replace into `live_category` values('122','财经资讯','0','article','','','2','1','1400148147','1396059316','0','1','1');");
E_D("replace into `live_category` values('156','财经新闻','122','article','','','1','1',NULL,'1400148189','0','1','1');");
E_D("replace into `live_category` values('130','直播室客服','0','advertising','room','','0','1','1405923233','1396253152','0','1','1');");
E_D("replace into `live_category` values('169','视频区域下方链接','0','advertising','room','','0','1','1405923245','1405915721','0','1','1');");
E_D("replace into `live_category` values('157','每日评论','122','article','','','2','1',NULL,'1400148200','0','1','1');");
E_D("replace into `live_category` values('110','每日点评','109','pages','','','1','1',NULL,'1395993711','0','1','1');");
E_D("replace into `live_category` values('109','研究中心','0','pages','','','3','1',NULL,'1395993692','0','1','1');");
E_D("replace into `live_category` values('147','产品中心','0','pages','','','0','1',NULL,'1400138500','0','1','1');");
E_D("replace into `live_category` values('151','投资学院','0','article','','','0','1',NULL,'1400139809','0','1','1');");
E_D("replace into `live_category` values('152','新手入门','151','article','','','0','1',NULL,'1400139824','0','1','1');");
E_D("replace into `live_category` values('153','深入研究','151','article','','','1','1','1400139913','1400139881','0','1','1');");
E_D("replace into `live_category` values('154','视频教学','151','article','','','2','1','1400139920','1400139903','0','1','1');");
E_D("replace into `live_category` values('168','视频区域上方链接','0','advertising','room','','0','1','1405923237','1405915714','0','1','1');");
E_D("replace into `live_category` values('160','在线开户','0','pages','','','0','1',NULL,'1400562492','0','1','1');");
E_D("replace into `live_category` values('161','联系客服','160','pages','','','0','1',NULL,'1400562514','0','1','1');");
E_D("replace into `live_category` values('162','在线预约','160','pages','','','2','1',NULL,'1400562528','0','1','1');");
E_D("replace into `live_category` values('167','公告','0','advertising','room','','0','1','1405923249','1405677487','0','1','1');");
E_D("replace into `live_category` values('166','页头导航','0','advertising','room','','0','1','1405923241','1405677267','0','1','1');");
E_D("replace into `live_category` values('165','免责声明','0','pages','','','0','1',NULL,'1400833799','0','1','1');");
E_D("replace into `live_category` values('170','首页轮播图片','0','advertising','home','','0','1','1406208737','1406208725','0','1','1');");

require("../../inc/footer.php");
?>