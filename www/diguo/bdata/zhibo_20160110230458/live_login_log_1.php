<?php
require("../../inc/header.php");

/*
		SoftName : EmpireBak Version 2010
		Author   : wm_chief
		Copyright: Powered by www.phome.net
*/

DoSetDbChar('utf8');
E_D("DROP TABLE IF EXISTS `live_login_log`;");
E_C("CREATE TABLE `live_login_log` (
  `logid` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `userid` tinyint(3) unsigned NOT NULL DEFAULT '0',
  `username` varchar(30) DEFAULT NULL,
  `region` varchar(50) DEFAULT NULL,
  `ip` varchar(15) NOT NULL DEFAULT '',
  `cdate` varchar(15) DEFAULT NULL,
  `ctime` int(10) unsigned NOT NULL DEFAULT '0',
  PRIMARY KEY (`logid`),
  KEY `log_time` (`ctime`) USING BTREE,
  KEY `user_id` (`userid`) USING BTREE
) ENGINE=MyISAM AUTO_INCREMENT=1583 DEFAULT CHARSET=utf8");
E_D("replace into `live_login_log` values('1483','63','111111','本机地址  ','127.0.0.1','2014-07-25','1406273073');");
E_D("replace into `live_login_log` values('1484','74','222222','本机地址  ','127.0.0.1','2014-07-25','1406273383');");
E_D("replace into `live_login_log` values('1485','80','666666','本机地址  ','127.0.0.1','2014-07-25','1406257363');");
E_D("replace into `live_login_log` values('1486','82','test3','本机地址  ','127.0.0.1','2014-07-25','1406272158');");
E_D("replace into `live_login_log` values('1487','63','111111','本机地址  ','127.0.0.1','2014-07-28','1406540530');");
E_D("replace into `live_login_log` values('1488','63','111111','本机地址  ','127.0.0.1','2014-07-31','1406774545');");
E_D("replace into `live_login_log` values('1489','83','leidi','湖南省衡阳市 电信','124.228.17.64','2015-03-25','1427277000');");
E_D("replace into `live_login_log` values('1490','83','leidi','山西省长治市 联通ADSL','60.220.213.14','2015-03-30','1427727763');");
E_D("replace into `live_login_log` values('1491','83','leidi','湖南省衡阳市 电信','118.254.185.248','2015-03-31','1427782260');");
E_D("replace into `live_login_log` values('1492','84','123456','上海市 电信','101.81.96.150','2015-04-02','1427948420');");
E_D("replace into `live_login_log` values('1493','83','leidi','湖南省 电信','223.147.131.96','2015-04-09','1428559791');");
E_D("replace into `live_login_log` values('1494','85','xiaoxiao','局域网 对方和您在同一内部网','192.168.0.114','2015-05-12','1431409388');");
E_D("replace into `live_login_log` values('1495','83','leidi','局域网 对方和您在同一内部网','192.168.0.114','2015-05-13','1431507935');");
E_D("replace into `live_login_log` values('1496','83','leidi','局域网 对方和您在同一内部网','192.168.0.114','2015-05-14','1431589044');");
E_D("replace into `live_login_log` values('1497','85','xiaoxiao','局域网 对方和您在同一内部网','192.168.0.114','2015-05-14','1431592221');");
E_D("replace into `live_login_log` values('1498','85','xiaoxiao','局域网 对方和您在同一内部网','192.168.0.114','2015-05-15','1431681114');");
E_D("replace into `live_login_log` values('1499','83','leidi','局域网 对方和您在同一内部网','192.168.0.114','2015-05-15','1431681133');");
E_D("replace into `live_login_log` values('1500','84','123456','局域网 对方和您在同一内部网','192.168.0.114','2015-05-15','1431681185');");
E_D("replace into `live_login_log` values('1501','83','leidi','局域网 对方和您在同一内部网','192.168.0.114','2015-05-17','1431853697');");
E_D("replace into `live_login_log` values('1502','85','xiaoxiao','局域网 对方和您在同一内部网','192.168.0.114','2015-05-17','1431832205');");
E_D("replace into `live_login_log` values('1503','84','123456','局域网 对方和您在同一内部网','192.168.0.114','2015-05-17','1431832676');");
E_D("replace into `live_login_log` values('1504','86','12345678','局域网 对方和您在同一内部网','192.168.0.114','2015-05-17','1431868214');");
E_D("replace into `live_login_log` values('1505','85','xiaoxiao','湖南省衡阳市 电信ADSL','222.241.181.132','2015-05-18','1431943338');");
E_D("replace into `live_login_log` values('1506','83','leidi','局域网 对方和您在同一内部网','192.168.0.114','2015-05-18','1431911288');");
E_D("replace into `live_login_log` values('1507','84','123456','局域网 对方和您在同一内部网','192.168.0.114','2015-05-18','1431913582');");
E_D("replace into `live_login_log` values('1508','87','haha','局域网 对方和您在同一内部网','192.168.0.114','2015-05-18','1431918939');");
E_D("replace into `live_login_log` values('1509','86','12345678','山西省大同市 联通','221.205.67.51','2015-05-26','1432612326');");
E_D("replace into `live_login_log` values('1510','89','1234567','山西省太原市 联通','183.185.212.107','2015-06-02','1433214072');");
E_D("replace into `live_login_log` values('1511','92','750197119','山西省太原市 联通','183.185.212.107','2015-06-02','1433214952');");
E_D("replace into `live_login_log` values('1512','93','dongzheng','山西省太原市 联通','183.185.212.107','2015-06-02','1433215913');");
E_D("replace into `live_login_log` values('1513','98','zhangyong','山西省太原市 联通','183.185.212.107','2015-06-02','1433216680');");
E_D("replace into `live_login_log` values('1514','94','李放放','山西省太原市 联通','183.185.212.107','2015-06-02','1433217962');");
E_D("replace into `live_login_log` values('1515','101','18005625966','山西省太原市 联通','183.185.212.107','2015-06-02','1433225148');");
E_D("replace into `live_login_log` values('1516','102','13911644336','山西省太原市 联通','183.185.212.107','2015-06-02','1433225741');");
E_D("replace into `live_login_log` values('1517','106','liuruncheng','山西省太原市 联通','183.185.212.107','2015-06-02','1433229908');");
E_D("replace into `live_login_log` values('1518','108','anjie','山西省太原市 联通','183.185.212.107','2015-06-02','1433240118');");
E_D("replace into `live_login_log` values('1519','111','gaoxinping','山西省太原市 联通','183.185.212.107','2015-06-02','1433240810');");
E_D("replace into `live_login_log` values('1520','104','18635612238','山西省太原市小店区 联通ADSL','221.205.112.222','2015-06-03','1433296616');");
E_D("replace into `live_login_log` values('1521','100','weiyun','山西省太原市小店区 联通ADSL','221.205.112.222','2015-06-03','1433297286');");
E_D("replace into `live_login_log` values('1522','113','1129973911','山西省太原市小店区 联通ADSL','221.205.112.222','2015-06-03','1433298823');");
E_D("replace into `live_login_log` values('1523','111','gaoxinping','山西省太原市小店区 联通ADSL','221.205.112.222','2015-06-03','1433302143');");
E_D("replace into `live_login_log` values('1524','105','13292715555','山西省太原市小店区 联通ADSL','221.205.112.222','2015-06-03','1433326013');");
E_D("replace into `live_login_log` values('1525','90','1234','山西省 电信','223.14.31.155','2015-06-05','1433495972');");
E_D("replace into `live_login_log` values('1526','92','750197119','山西省太原市 联通','183.184.37.109','2015-06-08','1433755969');");
E_D("replace into `live_login_log` values('1527','108','anjie','山西省大同市 联通','221.205.67.43','2015-06-08','1433772497');");
E_D("replace into `live_login_log` values('1528','118','2892756771','山西省大同市 联通','221.205.67.43','2015-06-09','1433820258');");
E_D("replace into `live_login_log` values('1529','122','489511945','山西省大同市 联通','221.205.67.43','2015-06-09','1433814670');");
E_D("replace into `live_login_log` values('1530','120','574136472','山西省大同市 联通','221.205.67.43','2015-06-09','1433816389');");
E_D("replace into `live_login_log` values('1531','113','1129973911','山西省大同市 联通','221.205.67.43','2015-06-09','1433816539');");
E_D("replace into `live_login_log` values('1532','117','1469591921','山西省大同市 联通','221.205.67.43','2015-06-09','1433821986');");
E_D("replace into `live_login_log` values('1533','121','932424766','山西省大同市 联通','221.205.67.43','2015-06-09','1433817153');");
E_D("replace into `live_login_log` values('1534','124','147427107','山西省大同市 联通','221.205.67.43','2015-06-09','1433818235');");
E_D("replace into `live_login_log` values('1535','94','李放放','山西省大同市 联通','221.205.67.43','2015-06-09','1433822153');");
E_D("replace into `live_login_log` values('1536','126','1901172848','山西省大同市 联通','221.205.67.43','2015-06-09','1433819471');");
E_D("replace into `live_login_log` values('1537','114','xufujun','山西省大同市 联通','221.205.67.43','2015-06-09','1433819866');");
E_D("replace into `live_login_log` values('1538','115','13292128950','河北省张家口市 联通','221.194.244.97','2015-06-09','1433822655');");
E_D("replace into `live_login_log` values('1539','92','750197119','山西省大同市 联通','221.205.67.43','2015-06-09','1433820132');");
E_D("replace into `live_login_log` values('1540','91','12345','山西省大同市 联通','221.205.67.43','2015-06-09','1433820784');");
E_D("replace into `live_login_log` values('1541','102','13911644336','山西省大同市 联通','221.205.67.43','2015-06-09','1433821020');");
E_D("replace into `live_login_log` values('1542','127','liuzihan','山西省太原市 电信','110.177.45.53','2015-06-09','1433856429');");
E_D("replace into `live_login_log` values('1543','91','12345','山西省太原市 联通','171.117.29.143','2015-06-10','1433913703');");
E_D("replace into `live_login_log` values('1544','92','750197119','山西省太原市 联通','171.117.29.143','2015-06-10','1433921366');");
E_D("replace into `live_login_log` values('1545','103','13506480668','山西省太原市 联通','171.117.29.143','2015-06-10','1433901536');");
E_D("replace into `live_login_log` values('1546','127','liuzihan','湖南省衡阳市 电信','124.228.193.68','2015-06-10','1433907286');");
E_D("replace into `live_login_log` values('1547','114','xufujun','山西省太原市 联通','171.117.29.143','2015-06-10','1433919584');");
E_D("replace into `live_login_log` values('1548','128','leidi','湖南省衡阳市 电信ADSL','218.77.74.51','2015-06-10','1433907195');");
E_D("replace into `live_login_log` values('1549','102','13911644336','北京市 电信','124.127.159.104','2015-06-10','1433940410');");
E_D("replace into `live_login_log` values('1550','113','1129973911','山西省太原市 联通','171.117.29.143','2015-06-10','1433921465');");
E_D("replace into `live_login_log` values('1551','117','1469591921','山西省太原市 联通','171.117.29.143','2015-06-10','1433922311');");
E_D("replace into `live_login_log` values('1552','118','2892756771','山西省太原市 联通','171.117.29.143','2015-06-10','1433921519');");
E_D("replace into `live_login_log` values('1553','120','574136472','山西省太原市 联通','171.117.29.143','2015-06-10','1433921555');");
E_D("replace into `live_login_log` values('1554','126','1901172848','山西省太原市 联通','171.117.29.143','2015-06-10','1433921583');");
E_D("replace into `live_login_log` values('1555','94','李放放','山西省太原市 联通','171.117.29.143','2015-06-10','1433922382');");
E_D("replace into `live_login_log` values('1556','124','147427107','山西省太原市 联通','171.117.29.143','2015-06-10','1433921642');");
E_D("replace into `live_login_log` values('1557','93','dongzheng','广东省深圳市 长城宽带','115.174.82.78','2015-06-10','1433921831');");
E_D("replace into `live_login_log` values('1558','92','750197119','山西省太原市 联通','171.116.59.200','2015-06-11','1434007043');");
E_D("replace into `live_login_log` values('1559','125','2818430997','山西省太原市 联通','171.116.59.200','2015-06-11','1434007277');");
E_D("replace into `live_login_log` values('1560','124','147427107','山西省太原市 联通','171.116.59.200','2015-06-11','1434007326');");
E_D("replace into `live_login_log` values('1561','97','李放放2','山西省太原市 联通','171.116.59.200','2015-06-11','1434007870');");
E_D("replace into `live_login_log` values('1562','123','2576383942','山西省太原市 联通','171.116.59.200','2015-06-11','1434008908');");
E_D("replace into `live_login_log` values('1563','113','1129973911','山西省太原市 联通','171.116.59.200','2015-06-11','1434008160');");
E_D("replace into `live_login_log` values('1564','118','2892756771','山西省太原市 联通','171.116.59.200','2015-06-11','1434010258');");
E_D("replace into `live_login_log` values('1565','119','353909204','山西省太原市 联通','171.116.59.200','2015-06-11','1434008791');");
E_D("replace into `live_login_log` values('1566','126','1901172848','山西省太原市 联通','171.116.59.200','2015-06-11','1434012168');");
E_D("replace into `live_login_log` values('1567','98','zhangyong','山西省太原市 联通','171.116.59.200','2015-06-11','1434008497');");
E_D("replace into `live_login_log` values('1568','101','18005625966','安徽省铜陵市 电信','117.57.49.162','2015-06-11','1434012332');");
E_D("replace into `live_login_log` values('1569','93','dongzheng','广东省深圳市 长城宽带','115.174.82.78','2015-06-11','1434009477');");
E_D("replace into `live_login_log` values('1570','115','13292128950','河北省邢台市 联通','60.6.145.134','2015-06-11','1434013928');");
E_D("replace into `live_login_log` values('1571','92','750197119','山西省太原市 联通','118.81.241.62','2015-06-12','1434094078');");
E_D("replace into `live_login_log` values('1572','126','1901172848','山西省太原市 联通','118.81.241.62','2015-06-12','1434096833');");
E_D("replace into `live_login_log` values('1573','123','2576383942','山西省太原市 联通','118.81.241.62','2015-06-12','1434094179');");
E_D("replace into `live_login_log` values('1574','113','1129973911','山西省太原市 联通','118.81.241.62','2015-06-12','1434094418');");
E_D("replace into `live_login_log` values('1575','97','李放放2','山西省太原市 联通','118.81.241.62','2015-06-12','1434095356');");
E_D("replace into `live_login_log` values('1576','99','wangwei','山西省太原市 联通','118.81.241.62','2015-06-12','1434095468');");
E_D("replace into `live_login_log` values('1577','118','2892756771','山西省太原市 联通','118.81.241.62','2015-06-12','1434095840');");
E_D("replace into `live_login_log` values('1578','115','13292128950','河北省邢台市 联通','60.6.157.230','2015-06-12','1434106331');");
E_D("replace into `live_login_log` values('1579','92','750197119','山西省太原市 联通','171.118.222.66','2015-06-15','1434359700');");
E_D("replace into `live_login_log` values('1580','127','liuzihan','山西省太原市 电信','110.177.45.53','2015-06-16','1434464721');");
E_D("replace into `live_login_log` values('1581','130','w123456','山西省晋中市 联通','60.223.136.117','2015-06-16','1434448697');");
E_D("replace into `live_login_log` values('1582','131','123456','本机地址  ','127.0.0.1','2016-01-04','1451890294');");

require("../../inc/footer.php");
?>