<?php return array (
  0 => 'CREATE TABLE `xiaozu_shoptx` (
  `id` int(20) NOT NULL AUTO_INCREMENT,
  `cost` decimal(7,2) NOT NULL DEFAULT \'0.00\',
  `type` int(1) NOT NULL DEFAULT \'0\',
  `status` tinyint(1) NOT NULL DEFAULT \'0\',
  `addtime` int(12) NOT NULL,
  `shopid` int(20) NOT NULL,
  `shopuid` int(20) NOT NULL,
  `name` varchar(100) NOT NULL,
  `yue` double(8,2) NOT NULL,
  `jsid` int(20) NOT NULL DEFAULT \'0\',
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=23 DEFAULT CHARSET=utf8',
  1 => 'INSERT INTO `xiaozu_shoptx`(`id`,`cost`,`type`,`status`,`addtime`,`shopid`,`shopuid`,`name`,`yue`,`jsid`) VALUES(\'17\',\'0.00\',\'3\',\'2\',\'1457918089\',\'0\',\'4\',\'2016-03-11日结算转入\',\'0.00\',\'8\')',
  2 => 'INSERT INTO `xiaozu_shoptx`(`id`,`cost`,`type`,`status`,`addtime`,`shopid`,`shopuid`,`name`,`yue`,`jsid`) VALUES(\'18\',\'0.00\',\'3\',\'2\',\'1474273751\',\'0\',\'1112\',\'2016-09-16日结算转入\',\'0.00\',\'9\')',
  3 => 'INSERT INTO `xiaozu_shoptx`(`id`,`cost`,`type`,`status`,`addtime`,`shopid`,`shopuid`,`name`,`yue`,`jsid`) VALUES(\'19\',\'0.00\',\'3\',\'2\',\'1474273752\',\'0\',\'1112\',\'2016-09-16优惠买单日结算转入\',\'0.00\',\'10\')',
  4 => 'INSERT INTO `xiaozu_shoptx`(`id`,`cost`,`type`,`status`,`addtime`,`shopid`,`shopuid`,`name`,`yue`,`jsid`) VALUES(\'20\',\'0.00\',\'3\',\'2\',\'1474273751\',\'0\',\'2954\',\'2016-09-16日结算转入\',\'0.00\',\'11\')',
  5 => 'INSERT INTO `xiaozu_shoptx`(`id`,`cost`,`type`,`status`,`addtime`,`shopid`,`shopuid`,`name`,`yue`,`jsid`) VALUES(\'21\',\'0.00\',\'3\',\'2\',\'1474273752\',\'0\',\'2954\',\'2016-09-16优惠买单日结算转入\',\'0.00\',\'12\')',
  6 => 'INSERT INTO `xiaozu_shoptx`(`id`,`cost`,`type`,`status`,`addtime`,`shopid`,`shopuid`,`name`,`yue`,`jsid`) VALUES(\'22\',\'1.00\',\'1\',\'2\',\'1474808849\',\'0\',\'1112\',\'账号充值\',\'1.00\',\'0\')',
)?>