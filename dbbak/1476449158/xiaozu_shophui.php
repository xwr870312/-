<?php return array (
  0 => 'CREATE TABLE `xiaozu_shophui` (
  `id` int(20) NOT NULL AUTO_INCREMENT,
  `name` varchar(255) NOT NULL COMMENT \'规则名称\',
  `limittype` int(1) NOT NULL COMMENT \'是否指定具体时间1否2指定星期3指定小时\',
  `limitweek` varchar(255) NOT NULL COMMENT \'具体时间：周几\',
  `limittimes` text NOT NULL COMMENT \'限制每天具体时间\',
  `mjlimitcost` int(11) NOT NULL COMMENT \'每满费用金额\',
  `limitzhekoucost` int(11) NOT NULL COMMENT \'折扣限制金额\',
  `controltype` int(1) NOT NULL COMMENT \'规则类型：1赠，3折扣，2减费用\',
  `controlcontent` int(20) DEFAULT NULL COMMENT \'限制内容填写赠品ID，折扣率，费用等大于0\',
  `starttime` int(11) NOT NULL COMMENT \'开始时间\',
  `endtime` int(11) NOT NULL COMMENT \'结束时间\',
  `status` tinyint(1) NOT NULL COMMENT \'状态1有效 2无效\',
  `shopid` int(20) NOT NULL COMMENT \'店铺id\',
  `signid` int(20) NOT NULL,
  `cattype` int(1) NOT NULL DEFAULT \'1\' COMMENT \'1外卖 2订台\',
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=9 DEFAULT CHARSET=utf8',
  1 => 'INSERT INTO `xiaozu_shophui`(`id`,`name`,`limittype`,`limitweek`,`limittimes`,`mjlimitcost`,`limitzhekoucost`,`controltype`,`controlcontent`,`starttime`,`endtime`,`status`,`shopid`,`signid`,`cattype`) VALUES(\'6\',\'每满50减5元\',\'1\',\'\',\'\',\'50\',\'0\',\'2\',\'5\',\'1451923200\',\'1483718399\',\'1\',\'15\',\'0\',\'0\')',
  2 => 'INSERT INTO `xiaozu_shophui`(`id`,`name`,`limittype`,`limitweek`,`limittimes`,`mjlimitcost`,`limitzhekoucost`,`controltype`,`controlcontent`,`starttime`,`endtime`,`status`,`shopid`,`signid`,`cattype`) VALUES(\'7\',\'满一百元减十元\',\'2\',\'1,2,3,4,5\',\'08:00-15:00\',\'100\',\'0\',\'2\',\'20\',\'1452441600\',\'1484150399\',\'1\',\'167\',\'0\',\'0\')',
)?>