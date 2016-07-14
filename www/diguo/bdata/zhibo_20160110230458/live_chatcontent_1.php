<?php
require("../../inc/header.php");

/*
		SoftName : EmpireBak Version 2010
		Author   : wm_chief
		Copyright: Powered by www.phome.net
*/

DoSetDbChar('utf8');
E_D("DROP TABLE IF EXISTS `live_chatcontent`;");
E_C("CREATE TABLE `live_chatcontent` (
  `chatid` int(11) NOT NULL AUTO_INCREMENT,
  `masterid` int(11) DEFAULT NULL,
  `chatcontent` mediumtext,
  `chatname` varchar(255) DEFAULT NULL,
  `level` tinyint(4) NOT NULL DEFAULT '-1',
  `chatuserid` int(11) DEFAULT NULL,
  `sourceimg` varchar(255) DEFAULT NULL,
  `imgthumb` varchar(255) DEFAULT NULL,
  `mtime` int(11) DEFAULT NULL,
  `status` tinyint(4) DEFAULT '0' COMMENT '1:放行 2:禁言',
  `ctime` int(11) DEFAULT NULL,
  PRIMARY KEY (`chatid`)
) ENGINE=MyISAM AUTO_INCREMENT=1710 DEFAULT CHARSET=utf8");
E_D("replace into `live_chatcontent` values('1656','29','15215','liuzihan','-2','127','','',NULL,'1','1434421109');");
E_D("replace into `live_chatcontent` values('1655','29','测试测试','游客99820330','-1','99820330','','','1434421086','1','1434421046');");
E_D("replace into `live_chatcontent` values('1662','29','12','游客42308611','-1','42308611','','',NULL,'0','1434464248');");
E_D("replace into `live_chatcontent` values('1658','29','兔兔','游客26472362','-1','26472362','','',NULL,'0','1434426504');");
E_D("replace into `live_chatcontent` values('1661','29','讲解谅解','游客26472362','-1','26472362','','','1434449749','1','1434426481');");
E_D("replace into `live_chatcontent` values('1660','29','链接','游客26472362','-1','26472362','','','1434449746','1','1434426528');");
E_D("replace into `live_chatcontent` values('1663','29','213123','游客42308611','-1','42308611','','',NULL,'0','1434464324');");
E_D("replace into `live_chatcontent` values('1664','29','12','游客38920950','-1','38920950','','',NULL,'0','1434464588');");
E_D("replace into `live_chatcontent` values('1665','29','还把啦','游客38920950','-1','38920950','','',NULL,'0','1434464610');");
E_D("replace into `live_chatcontent` values('1672','29','1212','游客42308611','-1','42308611','','',NULL,'0','1434464747');");
E_D("replace into `live_chatcontent` values('1671','29','[微笑]','游客42308611','-1','42308611','','','1434464738','1','1434464622');");
E_D("replace into `live_chatcontent` values('1670','29','[微笑]','游客42308611','-1','42308611','','','1434464734','1','1434464647');");
E_D("replace into `live_chatcontent` values('1669','29','[囧]','游客42308611','-1','42308611','','','1434464734','1','1434464668');");
E_D("replace into `live_chatcontent` values('1673','29','1212','游客55735870','-1','55735870','','',NULL,'0','1434505582');");
E_D("replace into `live_chatcontent` values('1674','29','56','游客55735870','-1','55735870','','',NULL,'0','1434505619');");
E_D("replace into `live_chatcontent` values('1675','29','12','游客55735870','-1','55735870','','',NULL,'0','1434510231');");
E_D("replace into `live_chatcontent` values('1676','29','qwe','游客55735870','-1','55735870','','',NULL,'0','1434510572');");
E_D("replace into `live_chatcontent` values('1677','29','23','游客37411863','-1','37411863','','',NULL,'0','1435038384');");
E_D("replace into `live_chatcontent` values('1678','29','12','游客207862','-1','207862','','',NULL,'0','1435300217');");
E_D("replace into `live_chatcontent` values('1679','29','12','游客207862','-1','207862','','',NULL,'0','1435300218');");
E_D("replace into `live_chatcontent` values('1680','29','23','游客82022114','-1','82022114','','',NULL,'0','1435819829');");
E_D("replace into `live_chatcontent` values('1681','29','12','游客38610187','-1','38610187','','',NULL,'0','1437976429');");
E_D("replace into `live_chatcontent` values('1682','29','gg','游客38617343','-1','38617343','','',NULL,'0','1451880398');");
E_D("replace into `live_chatcontent` values('1683','29','[嘘]','游客38617343','-1','38617343','','',NULL,'0','1451880422');");
E_D("replace into `live_chatcontent` values('1684','29','[img=/upload/imgthumb/20160104/thumb_img/1451880509551428457.jpg]','游客38617343','-1','38617343','/upload/imgthumb/20160104/source_img/20160104120829_38177.jpg','/upload/imgthumb/20160104/thumb_img/1451880509551428457.jpg',NULL,'0','1451880510');");
E_D("replace into `live_chatcontent` values('1685','29','[img=/upload/imgthumb/20160104/thumb_img/1451880530020060933.jpg]','游客38617343','-1','38617343','/upload/imgthumb/20160104/source_img/20160104120850_86484.jpg','/upload/imgthumb/20160104/thumb_img/1451880530020060933.jpg',NULL,'0','1451880531');");
E_D("replace into `live_chatcontent` values('1686','29','你好你好','游客38617343','-1','38617343','','',NULL,'0','1451880709');");
E_D("replace into `live_chatcontent` values('1687','29','11','花间草','0','131','','',NULL,'0','1451882077');");
E_D("replace into `live_chatcontent` values('1688','29','你好','花间草','0','131','','',NULL,'0','1451882090');");
E_D("replace into `live_chatcontent` values('1702','29','[话筒]','花间草','0','131','','',NULL,'0','1451888490');");
E_D("replace into `live_chatcontent` values('1690','29','[pt鲜花]','花间草','0','131','','',NULL,'0','1451882578');");
E_D("replace into `live_chatcontent` values('1691','29','[阴险]','花间草','0','131','','',NULL,'0','1451882600');");
E_D("replace into `live_chatcontent` values('1703','29','[微笑]','花间草','0','131','','',NULL,'0','1451889201');");
E_D("replace into `live_chatcontent` values('1693','29','[img=/upload/imgthumb/20160104/thumb_img/1451882801653207520.jpg]','花间草','0','131','/upload/imgthumb/20160104/source_img/20160104124641_38487.jpg','/upload/imgthumb/20160104/thumb_img/1451882801653207520.jpg',NULL,'0','1451882802');");
E_D("replace into `live_chatcontent` values('1697','29','[xkl拜年]','花间草','0','131','','',NULL,'0','1451886291');");
E_D("replace into `live_chatcontent` values('1696','29','[微笑]','花间草','0','131','','',NULL,'0','1451886150');");
E_D("replace into `live_chatcontent` values('1704','29','[哈欠]','花间草','0','131','','',NULL,'0','1451889207');");
E_D("replace into `live_chatcontent` values('1701','29','[悲伤]','花间草','0','131','','',NULL,'0','1451888454');");
E_D("replace into `live_chatcontent` values('1700','29','[黑线]','花间草','0','131','','',NULL,'0','1451886474');");
E_D("replace into `live_chatcontent` values('1705','29','3333','游客21812621','-1','21812621','','',NULL,'0','1451889223');");
E_D("replace into `live_chatcontent` values('1706','29','3333','游客21812621','-1','21812621','','',NULL,'0','1451889243');");
E_D("replace into `live_chatcontent` values('1707','29','[微笑]','花间草','0','131','','',NULL,'0','1451890250');");
E_D("replace into `live_chatcontent` values('1708','29','33333333333','游客26019331','-1','26019331','','',NULL,'0','1451890265');");
E_D("replace into `live_chatcontent` values('1709','29','3333333333','游客26019331','-1','26019331','','',NULL,'0','1451890286');");

require("../../inc/footer.php");
?>