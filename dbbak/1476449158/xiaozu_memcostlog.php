<?php return array (
  0 => 'CREATE TABLE `xiaozu_memcostlog` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `uid` int(11) NOT NULL COMMENT \'用户uid\',
  `username` varchar(30) NOT NULL COMMENT \'用户名\',
  `cost` decimal(10,2) NOT NULL COMMENT \'剩余金额\',
  `bdtype` int(1) NOT NULL COMMENT \'变动类型 1为增加 2为减少\',
  `bdcost` decimal(10,2) NOT NULL COMMENT \'本次充值/扣除金额\',
  `curcost` decimal(10,2) NOT NULL COMMENT \'当前金额\',
  `bdliyou` varchar(255) NOT NULL COMMENT \'变动原因\',
  `czuid` int(11) NOT NULL COMMENT \'操作用户uid\',
  `czusername` varchar(30) NOT NULL COMMENT \'操作用户名称\',
  `addtime` int(11) NOT NULL COMMENT \'操作日期\',
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=4 DEFAULT CHARSET=utf8',
  1 => 'INSERT INTO `xiaozu_memcostlog`(`id`,`uid`,`username`,`cost`,`bdtype`,`bdcost`,`curcost`,`bdliyou`,`czuid`,`czusername`,`addtime`) VALUES(\'1\',\'2936\',\'wmr\',\'56.00\',\'2\',\'20.00\',\'36.00\',\'下单余额消费\',\'2936\',\'wmr\',\'1459153863\')',
  2 => 'INSERT INTO `xiaozu_memcostlog`(`id`,`uid`,`username`,`cost`,`bdtype`,`bdcost`,`curcost`,`bdliyou`,`czuid`,`czusername`,`addtime`) VALUES(\'2\',\'2936\',\'wmr\',\'36.00\',\'2\',\'13.00\',\'23.00\',\'下单余额消费\',\'2936\',\'wmr\',\'1459154590\')',
  3 => 'INSERT INTO `xiaozu_memcostlog`(`id`,`uid`,`username`,`cost`,`bdtype`,`bdcost`,`curcost`,`bdliyou`,`czuid`,`czusername`,`addtime`) VALUES(\'3\',\'2959\',\'luguiyao\',\'0.00\',\'1\',\'111.00\',\'111.00\',\'管理员直接操作变动\',\'1\',\'admin\',\'1473519570\')',
)?>