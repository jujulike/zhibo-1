<?php
require("../../inc/header.php");

/*
		SoftName : EmpireBak Version 2010
		Author   : wm_chief
		Copyright: Powered by www.phome.net
*/

DoSetDbChar('utf8');
E_D("DROP TABLE IF EXISTS `live_liveroom`;");
E_C("CREATE TABLE `live_liveroom` (
  `roomid` int(11) NOT NULL AUTO_INCREMENT,
  `roomname` varchar(100) DEFAULT NULL,
  `cateid` int(11) DEFAULT NULL,
  `roominfo` varchar(2000) DEFAULT NULL,
  `userid` int(11) DEFAULT NULL,
  `userinfo` varchar(1000) DEFAULT NULL,
  `imgthumb` varchar(100) DEFAULT NULL,
  `sort` int(11) DEFAULT NULL,
  `status` tinyint(4) DEFAULT '0',
  `mtime` int(11) DEFAULT NULL,
  `ctime` int(11) DEFAULT NULL,
  `btime` tinyint(4) DEFAULT NULL,
  `etime` tinyint(4) DEFAULT NULL,
  `reason` varchar(1000) DEFAULT NULL,
  `linkphone` varchar(30) DEFAULT NULL,
  `linkqq` varchar(20) DEFAULT NULL,
  `linkman` varchar(30) DEFAULT NULL,
  `roompass` varchar(32) DEFAULT NULL,
  `hits` int(11) DEFAULT '0',
  PRIMARY KEY (`roomid`)
) ENGINE=MyISAM AUTO_INCREMENT=27 DEFAULT CHARSET=utf8");
E_D("replace into `live_liveroom` values('26','泰世通直播系统','29','粤贵银是经广东省政府同意，由广东省经济和信息化委员会批复成立，经广东省黄金协会以及省地方国企组建，在国务院、央行等五部委联合颁布的关于中国金融创新文件指示精神之下，特别是国务院在中国经济特区中设立的前台经济特区指示精神之下，广东省政府对贵金属市场进行合理合规性管理基础上设立广东省贵金属交易中心所设立的第一个贵金属现货交易产品。','63','申请人简介','','0','1','1433240378','1396505196','9','17','申请理由','15959595959','','ey_test','123456','6189');");

require("../../inc/footer.php");
?>