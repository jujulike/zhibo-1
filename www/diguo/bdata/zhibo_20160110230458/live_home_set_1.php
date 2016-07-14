<?php
require("../../inc/header.php");

/*
		SoftName : EmpireBak Version 2010
		Author   : wm_chief
		Copyright: Powered by www.phome.net
*/

DoSetDbChar('utf8');
E_D("DROP TABLE IF EXISTS `live_home_set`;");
E_C("CREATE TABLE `live_home_set` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `title` varchar(120) NOT NULL,
  `c-title` varchar(120) NOT NULL,
  `desc` varchar(500) NOT NULL,
  `content` text NOT NULL,
  `url` varchar(200) DEFAULT NULL,
  `ctime` int(10) unsigned NOT NULL DEFAULT '0',
  `mtime` int(10) unsigned NOT NULL DEFAULT '0',
  `imgthumb` varchar(100) DEFAULT NULL,
  `sort` int(10) NOT NULL DEFAULT '0',
  `status` tinyint(1) unsigned NOT NULL,
  `cateid` int(11) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=94 DEFAULT CHARSET=utf8");
E_D("replace into `live_home_set` values('80','TTTTTTTT','tttttttt','','<div class=\"j-i-con\">\n	<div class=\"j-i-hot\">\n		<img src=\"./upload/pages/20130228/227212e7737a9aa14b07fa6a9bf41e76.png\" alt=\"\" /> \n		<div>\n			<h2>\n				森德金融研究所\n			</h2>\n			<p>\n				Sendo Financial Research Institute\n			</p>\n		</div>\n	</div>\n	<ul class=\"j-i-slogan\">\n		<li>\n			<strong>定位：</strong>中国最卓越的贵金属投资研究所\n		</li>\n		<li>\n			<strong>理念：</strong>广而严整谓之森，从道而行谓之德\n		</li>\n		<li>\n			<strong>使命：</strong>以3A为核心，打造A friend，A key，A world\n		</li>\n	</ul>\n	<ul class=\"j-i-sende\">\n		<li>\n			A friend —— 森德是您投资路上的良师益友。\n		</li>\n		<li>\n			A key —— 森德是您开启财富之门的金钥匙。\n		</li>\n		<li>\n			A world —— 森德与您共创贵金属投资大世界。\n		</li>\n	</ul>\n</div>','ddddddddddddd','1362044400','1370437706','upload/pages/20130228/00d831e441cc6d8c458d8eda62ff07f7.jpg','0','1','64');");
E_D("replace into `live_home_set` values('81','人物志','本期明星','','<div class=\"j-p-con\">\n	<div class=\"j-p-img\">\n		<img alt=\"\" src=\"./upload/pages/20130228/cbc216a6d1f212e2969586ef2eb21923.jpg\" /> \n		<p>\n			陈明燕 <span id=\"__kindeditor_bookmark_end_3__\"></span> \n		</p>\n	</div>\n	<div class=\"j-p-info\">\n		上海交通大学MBA <br />\n具有多年金融市场实战经验<br />\n曾任职香港知名金融机构，负责宏观研究及资金管理工作<br />\n现任：森德金融研究所 主任研究员<br />\n<br />\n《银天下日刊》主编<br />\n《银天下特刊》主编<br />\n《银天下周刊》宏观栏目主编<br />\n独家研创《波段制胜秘笈》、在变化莫测的贵金属市场，获得持续、稳定的盈利！<br />\n	</div>\n</div>','34343434343','1362045241','1370437727','','0','1','64');");
E_D("replace into `live_home_set` values('82','谈股论金','白银带给我的，是另一种人生','','<ul class=\"m-j-list\">\n	<li>\n		<a href=\"http://www.baidao.com/adimages/ad/20121025/index.html\" target=\"_bank\"><img src=\"./upload/pages/20130228/d9618b8f63ec7f3badfda31599b14d17.jpg\" alt=\"\" /> </a> \n		<p>\n			<a href=\"http://www.baidao.com/adimages/ad/20121025/index.html\" target=\"_bank\">9月直播培训活动颁奖典礼</a> \n		</p>\n	</li>\n	<li>\n		<a href=\"http://www.baidao.com/adimages/ad/20120918/index.html\" target=\"_bank\"><img src=\"./upload/pages/20130228/11980aee8ca049eaf206e2c2d6d6dbeb.jpg\" alt=\"\" /> </a> \n		<p>\n			<a href=\"http://www.baidao.com/adimages/ad/20120918/index.html\" target=\"_bank\">QE3白银之夜精彩回顾</a> \n		</p>\n	</li>\n	<li>\n		<a href=\"http://www.baidao.com/adimages/ad/2012124/index.html\" target=\"_bank\"><img src=\"./upload/pages/20130228/8e5b67e1287d7096f17842977b8fcab7.jpg\" alt=\"\" /> </a> \n		<p>\n			<a href=\"http://www.baidao.com/adimages/ad/2012124/index.html\" target=\"_bank\">拜师军团突破千人大关</a> \n		</p>\n	</li>\n	<li>\n		<a href=\"http://www.baidao.com/adimages/ad/20121024/index.html\" target=\"_bank\"><img src=\"./upload/pages/20130228/699a4b77e0d17c301bf3d55105cee91e.jpg\" alt=\"\" /> </a> \n		<p>\n			<a href=\"http://www.baidao.com/adimages/ad/20121024/index.html\" target=\"_bank\">银天下iPhone版伴您随行</a> \n		</p>\n	</li>\n	<li>\n		<a href=\"http://www.baidao.com/ad/v/doc/ad/20121107/index.html\" target=\"_bank\"><img src=\"./upload/pages/20130228/435116835dba58c4bed202db306bf1ee.jpg\" alt=\"\" /> </a> \n		<p>\n			<a href=\"http://www.baidao.com/ad/v/doc/ad/20121107/index.html\" target=\"_bank\">融金汇银车队勇夺前三</a> \n		</p>\n	</li>\n	<li>\n		<a href=\"http://www.tiantong99.com/templets/tiantong/ym/201212312/index.html\" target=\"_bank\"><img src=\"./upload/pages/20130228/4b64e5c9c9141ae5adde8f6524a0ea9b.jpg\" alt=\"\" /> </a> \n		<p>\n			<a href=\"http://www.tiantong99.com/templets/tiantong/ym/201212312/index.html\" target=\"_bank\">森德爱心传递首发站</a> \n		</p>\n	</li>\n</ul>','fdfsfssfsf','1362045653','1370437864','','0','1','64');");
E_D("replace into `live_home_set` values('83','进步墙','fdfdfdfdfd','','<ul class=\"p-w-list\">\n	<li>\n		<img src=\"./upload/pages/20130302/3e1d4857fc42e05aefd0b47d6a6c47db.png\" alt=\"\" /> \n		<div class=\"p-w-l-info\">\n			<h2>\n				银天下3.3正式上线\n			</h2>\n<span class=\"pwl-time\"></span><span class=\"pwl-name\">【商科洁】</span> \n			<p>\n				做设计的可能看起来有点孤独，常常对着电脑不善言谈。闲暇时分不自主地去直播室看银友们互动谈话，很温馨很奋进，促使着我：银天下界面会更友好，因为我们一直在努力！\n			</p>\n		</div>\n	</li>\n	<li>\n		<img src=\"./upload/pages/20130302/e1fe0d51184c089b7621ea4e2d4573ac.png\" alt=\"\" /> \n		<div class=\"p-w-l-info\">\n			<h2>\n				银天下3.3正式上线\n			</h2>\n<span class=\"pwl-time\"></span><span class=\"pwl-name\">【王欢】</span> \n			<p>\n				同事都笑我是老好人，银天下产品技术后台一有啥紧急状态总是我第一个上。嘿嘿，为了广大奋斗在前线的银友们和分析师操盘手们能赚更多的钱，我值了！\n			</p>\n		</div>\n	</li>\n	<li>\n		<img src=\"./upload/pages/20130302/24466c8618eb5898e0868b54e58cbf50.png\" alt=\"\" /> \n		<div class=\"p-w-l-info\">\n			<h2>\n				银天下3.3正式上线\n			</h2>\n<span class=\"pwl-time\"></span><span class=\"pwl-name\">【马如麟】</span> \n			<p>\n				产品部是做什么的，就是一切为了用户，用户体验至上。为此，银天下3.3版相对于之前版本改进了许多，特别是直播大厅使用感觉更顺溜了，快去看看吧……\n			</p>\n		</div>\n	</li>\n</ul>','fdfdfdfdfd','1362052213','1370437671','','0','1','64');");
E_D("replace into `live_home_set` values('84','直播大厅','fdfdfd','','每日9:00—24:00，分析师在线解盘、喊单，上万名投资者在这里分享忧乐','stock','1362053642','1362961836','upload/pages/20130228/903cac76392b52fd18183f73c2673da9.png','0','1','66');");
E_D("replace into `live_home_set` values('85','实时行情','sfsfs','','现货白银、黄金T+D等8大品种实时报价，析需求<img src=\"http://localhost/project/stock/assets/kindeditor/plugins/emoticons/images/0.gif\" alt=\"\" border=\"0\" />','dfdfd','1362054058','1362961850','upload/pages/20130302/77d20cd94e21c325cc06c22c7faca320.png','0','1','66');");
E_D("replace into `live_home_set` values('86','在线资讯','gdgd','','您关注的财经数据、贵金属要闻、名家专栏一网打尽，全面知悉，省时省力','dgdg','1362054120','1362961860','upload/pages/20130302/ac0195e8c6da0f765137bb2644a52d5f.png','0','1','66');");
E_D("replace into `live_home_set` values('87','AAA内参','fsfsfs','','专家研究员精彩解读市场每日09:00提供出入场点位，权威报告，深入浅出','gdgd','1362054148','1362961871','upload/pages/20130302/113a8ef3c7911ec8b1a20682bf5d06d4.png','0','1','66');");
E_D("replace into `live_home_set` values('88','Vip专区','ffsfs','','《交易之声》、绿色通道、专家面对面账户分析报告，VIP客户专属服务','http://223.26.59.97/project/chatsystem/index.php/help/perpage/70','1362054175','1362964081','upload/pages/20130302/b0e016b55007a557977c29123c5ed159.png','0','1','66');");
E_D("replace into `live_home_set` values('89','模拟大赛','fdfdfd','','大赛英雄排行榜','simula','1362054255','1362961892','upload/pages/20130302/c4104224e41d16eb01ee4384411e36ff.png','0','1','66');");
E_D("replace into `live_home_set` values('90','谈股论金简介：','简介简介','','国内首款贵金属投资服务平台，由森德金融研究所专业打造。集市场资讯、行情走势、直播互动、操盘建议、交易策略等于一体，为客户提供全方位一站式的全新服务。','fdfdfd','1362054941','1362961907','upload/pages/20130228/1c07e2045a253a4a63d2cdea3a53a87a.png','0','1','67');");
E_D("replace into `live_home_set` values('91','团队规模：','团队规模：','','57位专业分析师，他们是学术掌门、是实战大师、是媒体明星、是知名财经评论家，但他们在这里，只有一个身份——您投资路上的良师益友。','fffff','1362054984','1362961918','upload/pages/20130228/be8d59253d52e83bb9badf5f53445a43.png','0','1','67');");
E_D("replace into `live_home_set` values('92','专业素质：','专业素质：','','成为银天下的智囊团，是森德金融研究所最近最值得骄傲的事了。经过层层选拔（历史数据调查、实盘操作高水准考核、专业播主培训等）最终才能在这里微笑着和大家道声“早安，直播开始了”。','dddddd','1362055049','1362961929','upload/pages/20130228/35ccc9af6b50210143383e4e26597aa3.png','0','1','67');");
E_D("replace into `live_home_set` values('93','自由添加主题','','','','','1362450850','1362453050','','0','0',NULL);");

require("../../inc/footer.php");
?>