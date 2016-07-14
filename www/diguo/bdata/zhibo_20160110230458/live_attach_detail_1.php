<?php
require("../../inc/header.php");

/*
		SoftName : EmpireBak Version 2010
		Author   : wm_chief
		Copyright: Powered by www.phome.net
*/

DoSetDbChar('utf8');
E_D("DROP TABLE IF EXISTS `live_attach_detail`;");
E_C("CREATE TABLE `live_attach_detail` (
  `attachid` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `attachcateid` int(11) DEFAULT NULL,
  `userid` bigint(20) DEFAULT NULL,
  `attachname` varchar(30) DEFAULT NULL,
  `attachpath` varchar(100) DEFAULT NULL,
  `attachsourcepath` varchar(100) DEFAULT NULL,
  `clientname` varchar(255) DEFAULT '1',
  `attachdetail` text,
  `filetype` varchar(10) DEFAULT '扩展名',
  `ctime` int(11) DEFAULT NULL,
  `isimage` tinyint(1) DEFAULT '1' COMMENT '是否是图片：1为图片',
  `status` tinyint(4) DEFAULT '1',
  PRIMARY KEY (`attachid`),
  UNIQUE KEY `attachtid` (`attachid`)
) ENGINE=MyISAM AUTO_INCREMENT=371 DEFAULT CHARSET=utf8");
E_D("replace into `live_attach_detail` values('275','58',NULL,NULL,'upload/agent/20130718/c5a590ce6cd01841e38303bbddb8d75b.jpg',NULL,'1',NULL,'扩展名','1374132403','1','1');");
E_D("replace into `live_attach_detail` values('278','58',NULL,NULL,'upload/agent/20130718/12bd567dd2d56595c20eac42a69e3b07.jpg',NULL,'1',NULL,'扩展名','1374132591','1','1');");
E_D("replace into `live_attach_detail` values('282','60',NULL,NULL,'upload/agent/20130718/d68dfa9361bd29739c160769eea7f664.jpg',NULL,'1',NULL,'扩展名','1374133214','1','1');");
E_D("replace into `live_attach_detail` values('283','60',NULL,NULL,'upload/agent/20130718/d6761dfb4cafcaa3c7250df77717574d.jpg',NULL,'1',NULL,'扩展名','1374133237','1','1');");
E_D("replace into `live_attach_detail` values('284','71',NULL,NULL,'',NULL,'1',NULL,'扩展名','1375495495','1','1');");
E_D("replace into `live_attach_detail` values('285','71',NULL,NULL,'',NULL,'1',NULL,'扩展名','1375495495','1','1');");
E_D("replace into `live_attach_detail` values('286','71',NULL,NULL,'',NULL,'1',NULL,'扩展名','1375495495','1','1');");
E_D("replace into `live_attach_detail` values('325','80',NULL,NULL,'upload/production/20140226/thumb_img/1393385432180353843.jpg','upload/production/20140226/source_img/20140226113032_37600.jpg','1',NULL,'扩展名','1393385445','1','1');");
E_D("replace into `live_attach_detail` values('324','80',NULL,NULL,'upload/production/20140226/thumb_img/1393385432133021321.jpg','upload/production/20140226/source_img/20140226113031_46768.jpg','1',NULL,'扩展名','1393385445','1','1');");
E_D("replace into `live_attach_detail` values('323','80',NULL,NULL,'upload/production/20140226/thumb_img/1393385431407816376.jpg','upload/production/20140226/source_img/20140226113031_23900.jpg','1',NULL,'扩展名','1393385445','1','1');");
E_D("replace into `live_attach_detail` values('310','81',NULL,NULL,'upload/production/20140116/thumb_img/1389838783252917104.jpg','upload/production/20140116/source_img/20140116101943_67801.jpg','1',NULL,'扩展名','1389838790','1','1');");
E_D("replace into `live_attach_detail` values('311','81',NULL,NULL,'upload/production/20140116/thumb_img/1389838784679613388.jpg','upload/production/20140116/source_img/20140116101944_43912.jpg','1',NULL,'扩展名','1389838790','1','1');");
E_D("replace into `live_attach_detail` values('312','81',NULL,NULL,'upload/production/20140116/thumb_img/1389838784735640533.jpg','upload/production/20140116/source_img/20140116101944_75173.jpg','1',NULL,'扩展名','1389838790','1','1');");
E_D("replace into `live_attach_detail` values('313','82',NULL,NULL,'upload/production/20140116/thumb_img/1389838811299385963.jpg','upload/production/20140116/source_img/20140116102011_24828.jpg','1',NULL,'扩展名','1389838817','1','1');");
E_D("replace into `live_attach_detail` values('314','82',NULL,NULL,'upload/production/20140116/thumb_img/1389838812834887873.jpg','upload/production/20140116/source_img/20140116102012_23307.jpg','1',NULL,'扩展名','1389838817','1','1');");
E_D("replace into `live_attach_detail` values('315','82',NULL,NULL,'upload/production/20140116/thumb_img/1389838812037052699.jpg','upload/production/20140116/source_img/20140116102012_85726.jpg','1',NULL,'扩展名','1389838817','1','1');");
E_D("replace into `live_attach_detail` values('326','80',NULL,NULL,'upload/production/20140226/thumb_img/1393385432915370434.jpg','upload/production/20140226/source_img/20140226113032_62138.jpg','1',NULL,'扩展名','1393385445','1','1');");
E_D("replace into `live_attach_detail` values('327','87',NULL,NULL,'upload/production/20140227/thumb_img/1393478429211625390.jpg','upload/production/20140227/source_img/20140227132029_92089.jpg','1',NULL,'扩展名','1393478521','1','1');");
E_D("replace into `live_attach_detail` values('328','88',NULL,NULL,'upload/production/20140227/thumb_img/1393478579627120733.jpg','upload/production/20140227/source_img/20140227132259_95248.jpg','1',NULL,'扩展名','1393478685','1','1');");
E_D("replace into `live_attach_detail` values('329','89',NULL,NULL,'upload/production/20140227/thumb_img/1393481628665295433.jpg','upload/production/20140227/source_img/20140227141348_13051.jpg','1',NULL,'扩展名','1393481728','1','1');");
E_D("replace into `live_attach_detail` values('330','90',NULL,NULL,'upload/production/20140227/thumb_img/1393481775527181393.jpg','upload/production/20140227/source_img/20140227141615_67584.jpg','1',NULL,'扩展名','1393481785','1','1');");
E_D("replace into `live_attach_detail` values('331','91',NULL,NULL,'upload/production/20140227/thumb_img/1393481932964767093.jpg','upload/production/20140227/source_img/20140227141852_26655.jpg','1',NULL,'扩展名','1393481939','1','1');");
E_D("replace into `live_attach_detail` values('332','92',NULL,NULL,'upload/production/20140227/thumb_img/1393481983123204767.jpg','upload/production/20140227/source_img/20140227141943_42118.jpg','1',NULL,'扩展名','1393481991','1','1');");
E_D("replace into `live_attach_detail` values('333','93',NULL,NULL,'upload/production/20140227/thumb_img/1393482036495618085.jpg','upload/production/20140227/source_img/20140227142036_99197.png','1',NULL,'扩展名','1393482043','1','1');");
E_D("replace into `live_attach_detail` values('334','94',NULL,NULL,'upload/production/20140227/thumb_img/1393482085948549726.jpg','upload/production/20140227/source_img/20140227142125_93479.jpg','1',NULL,'扩展名','1393482098','1','1');");
E_D("replace into `live_attach_detail` values('335','95',NULL,NULL,'upload/production/20140227/thumb_img/1393482456872207676.jpg','upload/production/20140227/source_img/20140227142736_21260.png','1',NULL,'扩展名','1393482463','1','1');");
E_D("replace into `live_attach_detail` values('336','96',NULL,NULL,'upload/production/20140227/thumb_img/1393482482378699587.jpg','upload/production/20140227/source_img/20140227142802_47136.png','1',NULL,'扩展名','1393482489','1','1');");
E_D("replace into `live_attach_detail` values('337','97',NULL,NULL,'upload/production/20140227/thumb_img/1393482503214867719.jpg','upload/production/20140227/source_img/20140227142823_95932.png','1',NULL,'扩展名','1393482509','1','1');");
E_D("replace into `live_attach_detail` values('338','98',NULL,NULL,'upload/production/20140227/thumb_img/1393482601371482692.jpg','upload/production/20140227/source_img/20140227143001_64176.png','1',NULL,'扩展名','1393482608','1','1');");
E_D("replace into `live_attach_detail` values('339','99',NULL,NULL,'upload/production/20140227/thumb_img/1393482678574277735.jpg','upload/production/20140227/source_img/20140227143118_11985.png','1',NULL,'扩展名','1393482687','1','1');");
E_D("replace into `live_attach_detail` values('340','100',NULL,NULL,'upload/production/20140227/thumb_img/1393482771053156628.jpg','upload/production/20140227/source_img/20140227143251_79623.jpg','1',NULL,'扩展名','1393482774','1','1');");
E_D("replace into `live_attach_detail` values('341','101',NULL,NULL,'upload/production/20140227/thumb_img/1393482801964150947.jpg','upload/production/20140227/source_img/20140227143321_47647.jpg','1',NULL,'扩展名','1393482804','1','1');");
E_D("replace into `live_attach_detail` values('342','102',NULL,NULL,'upload/production/20140227/thumb_img/1393482827444009323.jpg','upload/production/20140227/source_img/20140227143347_31838.jpg','1',NULL,'扩展名','1393482830','1','1');");
E_D("replace into `live_attach_detail` values('343','103',NULL,NULL,'upload/production/20140227/thumb_img/1393482848307156639.jpg','upload/production/20140227/source_img/20140227143407_99475.jpg','1',NULL,'扩展名','1393482851','1','1');");
E_D("replace into `live_attach_detail` values('344','104',NULL,NULL,'upload/news/20140328/thumb_img/1395988487267013429.jpg','upload/news/20140328/source_img/20140328063447_23785.jpg','1',NULL,'扩展名','1395988540','1','1');");
E_D("replace into `live_attach_detail` values('345','105',NULL,NULL,'upload/news/20140328/thumb_img/1395988576449773985.jpg','upload/news/20140328/source_img/20140328063616_60237.jpg','1',NULL,'扩展名','1395988581','1','1');");
E_D("replace into `live_attach_detail` values('346','106',NULL,NULL,'upload/news/20140328/thumb_img/1395988606359822323.jpg','upload/news/20140328/source_img/20140328063646_23120.jpg','1',NULL,'扩展名','1395988612','1','1');");
E_D("replace into `live_attach_detail` values('347','107',NULL,NULL,'upload/news/20140328/thumb_img/1395988630808399365.jpg','upload/news/20140328/source_img/20140328063710_82990.jpg','1',NULL,'扩展名','1395988635','1','1');");
E_D("replace into `live_attach_detail` values('348','108',NULL,NULL,'upload/news/20140328/thumb_img/1395988683420603845.jpg','upload/news/20140328/source_img/20140328063803_44027.jpg','1',NULL,'扩展名','1395988692','1','1');");
E_D("replace into `live_attach_detail` values('349','109',NULL,NULL,'upload/news/20140328/thumb_img/1395988713649693814.jpg','upload/news/20140328/source_img/20140328063833_84816.jpg','1',NULL,'扩展名','1395988717','1','1');");
E_D("replace into `live_attach_detail` values('350','110',NULL,NULL,'upload/news/20140328/thumb_img/1395988734107815921.jpg','upload/news/20140328/source_img/20140328063854_15001.jpg','1',NULL,'扩展名','1395988738','1','1');");
E_D("replace into `live_attach_detail` values('351','111',NULL,NULL,'upload/news/20140328/thumb_img/1395988755619399936.jpg','upload/news/20140328/source_img/20140328063915_44972.jpg','1',NULL,'扩展名','1395988760','1','1');");
E_D("replace into `live_attach_detail` values('352','112',NULL,NULL,'upload/news/20140328/thumb_img/1395988790600210375.jpg','upload/news/20140328/source_img/20140328063950_89359.jpg','1',NULL,'扩展名','1395988794','1','1');");
E_D("replace into `live_attach_detail` values('353','113',NULL,NULL,'upload/news/20140328/thumb_img/1395988810326568246.jpg','upload/news/20140328/source_img/20140328064010_27572.jpg','1',NULL,'扩展名','1395988815','1','1');");
E_D("replace into `live_attach_detail` values('354','114',NULL,NULL,'upload/news/20140328/thumb_img/1395988831356257159.jpg','upload/news/20140328/source_img/20140328064031_34378.jpg','1',NULL,'扩展名','1395988838','1','1');");
E_D("replace into `live_attach_detail` values('355','115',NULL,NULL,'upload/news/20140328/thumb_img/1395988852805357510.jpg','upload/news/20140328/source_img/20140328064052_53390.jpg','1',NULL,'扩展名','1395988857','1','1');");
E_D("replace into `live_attach_detail` values('356','116',NULL,NULL,'upload/news/20140328/thumb_img/1395988876832197528.jpg','upload/news/20140328/source_img/20140328064116_50740.jpg','1',NULL,'扩展名','1395988880','1','1');");
E_D("replace into `live_attach_detail` values('357','117',NULL,NULL,'upload/news/20140328/thumb_img/1395988896364488484.jpg','upload/news/20140328/source_img/20140328064136_96712.jpg','1',NULL,'扩展名','1395988900','1','1');");
E_D("replace into `live_attach_detail` values('358','118',NULL,NULL,'upload/news/20140328/thumb_img/1395988920669192742.jpg','upload/news/20140328/source_img/20140328064200_41909.jpg','1',NULL,'扩展名','1395988924','1','1');");
E_D("replace into `live_attach_detail` values('359','119',NULL,NULL,'upload/news/20140328/thumb_img/1395988942171185559.jpg','upload/news/20140328/source_img/20140328064222_67469.jpg','1',NULL,'扩展名','1395988949','1','1');");
E_D("replace into `live_attach_detail` values('360','120',NULL,NULL,'upload/news/20140328/thumb_img/1395988962940463700.jpg','upload/news/20140328/source_img/20140328064242_93888.jpg','1',NULL,'扩展名','1395988970','1','1');");
E_D("replace into `live_attach_detail` values('361','121',NULL,NULL,'upload/news/20140331/thumb_img/1396227007343202338.jpg','upload/news/20140331/source_img/20140331005007_41893.jpg','1',NULL,'扩展名','1396227010','1','1');");
E_D("replace into `live_attach_detail` values('362','122',NULL,NULL,'upload/news/20140331/thumb_img/1396227023794413840.jpg','upload/news/20140331/source_img/20140331005023_67917.jpg','1',NULL,'扩展名','1396227026','1','1');");
E_D("replace into `live_attach_detail` values('363','123',NULL,NULL,'upload/news/20140331/thumb_img/1396227042505406683.jpg','upload/news/20140331/source_img/20140331005042_59133.jpg','1',NULL,'扩展名','1396227050','1','1');");
E_D("replace into `live_attach_detail` values('364','124',NULL,NULL,'upload/news/20140331/thumb_img/1396227062520624073.jpg','upload/news/20140331/source_img/20140331005102_28124.jpg','1',NULL,'扩展名','1396227083','1','1');");
E_D("replace into `live_attach_detail` values('365','125',NULL,NULL,'upload/news/20140331/thumb_img/1396227097482742960.jpg','upload/news/20140331/source_img/20140331005137_88464.jpg','1',NULL,'扩展名','1396227102','1','1');");
E_D("replace into `live_attach_detail` values('366','126',NULL,NULL,'upload/news/20140331/thumb_img/1396227116582955056.jpg','upload/news/20140331/source_img/20140331005156_63322.jpg','1',NULL,'扩展名','1396227121','1','1');");
E_D("replace into `live_attach_detail` values('367','127',NULL,NULL,'upload/news/20140331/thumb_img/1396227135247355481.jpg','upload/news/20140331/source_img/20140331005215_86827.jpg','1',NULL,'扩展名','1396227139','1','1');");
E_D("replace into `live_attach_detail` values('368','128',NULL,NULL,'upload/news/20140331/thumb_img/1396227155389245447.jpg','upload/news/20140331/source_img/20140331005235_65816.jpg','1',NULL,'扩展名','1396227158','1','1');");
E_D("replace into `live_attach_detail` values('369','129',NULL,NULL,'upload/news/20140331/thumb_img/1396227168708582255.jpg','upload/news/20140331/source_img/20140331005248_28061.jpg','1',NULL,'扩展名','1396227178','1','1');");
E_D("replace into `live_attach_detail` values('370','130',NULL,NULL,'upload/news/20140331/thumb_img/1396227217201579743.jpg','upload/news/20140331/source_img/20140331005337_28380.jpg','1',NULL,'扩展名','1396227223','1','1');");

require("../../inc/footer.php");
?>