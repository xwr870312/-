<?php return array (
  0 => 'CREATE TABLE `xiaozu_admin` (
  `uid` int(5) NOT NULL AUTO_INCREMENT,
  `username` varchar(50) NOT NULL,
  `password` varchar(100) NOT NULL,
  `time` int(11) NOT NULL,
  `logintime` int(11) NOT NULL,
  `loginip` varchar(30) DEFAULT NULL,
  `limit` text,
  `groupid` int(20) NOT NULL DEFAULT \'1\',
  PRIMARY KEY (`uid`)
) ENGINE=MyISAM AUTO_INCREMENT=91 DEFAULT CHARSET=utf8',
  1 => 'INSERT INTO `xiaozu_admin`(`uid`,`username`,`password`,`time`,`logintime`,`loginip`,`limit`,`groupid`) VALUES(\'1\',\'admin\',\'0192023a7bbd73250516f069df18b500\',\'0\',\'1476447092\',\'0.0.0.0\',\'siteset,seo_setsave,limitset,savelimitset,footlink,savefootlink,toplink,savetoplink,jflimitset,manegelist,manegeadd,editmanege,manegesave,delmanege,memberlist,addmember,editmember,membersave,delmember,oauthlist,deloauth,shoplist,shoplistw,shoptype,addshoptype,editshoptype,saveshoptype,delshoptype,arealist,addarea,eidtarea,savearea,cxsign,addcxsign,editcxsign,orderlist,ordertotal,markettj,marketorder,orderyjin,commentlist,delcommlist,asklist,delask,askshoplist,singlelist,addsingle,savesingle,delsingle,adv,addadv,advtype,giftlist,addgift,gifttype,addgifttype,giftlog,emailset,smsset,sendtasklist,sendtask,cardlist,addcard,juanlist,addjuan,excomm,pmes,loginlist,paylist,othertpl,ordertodayw,ordertoday,ordersend,basedata,rebkdata,market,addmarket,editmarket,delmarket,addmarkettype,delmarkettype,listmarkettype,friendlink,shoptopatt,wxset,wxback,wxmenu,printlog\',\'1\')',
  2 => 'INSERT INTO `xiaozu_admin`(`uid`,`username`,`password`,`time`,`logintime`,`loginip`,`limit`,`groupid`) VALUES(\'90\',\'qygly\',\'e10adc3949ba59abbe56e057f20f883e\',\'1473386297\',\'1474193936\',\'112.1.192.177\',\'\',\'4\')',
)?>