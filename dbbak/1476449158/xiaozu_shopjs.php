<?php return array (
  0 => 'CREATE TABLE `xiaozu_shopjs` (
  `id` int(20) NOT NULL AUTO_INCREMENT,
  `onlinecost` decimal(7,1) NOT NULL,
  `onlinecount` int(5) NOT NULL,
  `unlinecount` int(11) NOT NULL,
  `unlinecost` decimal(7,2) NOT NULL,
  `yjb` int(11) NOT NULL,
  `yjcost` decimal(5,2) NOT NULL COMMENT \'佣金比例\',
  `pstype` int(1) NOT NULL,
  `shopid` int(20) NOT NULL,
  `shopuid` int(20) NOT NULL,
  `acountcost` decimal(5,2) NOT NULL,
  `addtime` int(12) NOT NULL,
  `jstime` int(12) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=13 DEFAULT CHARSET=utf8',
  1 => 'INSERT INTO `xiaozu_shopjs`(`id`,`onlinecost`,`onlinecount`,`unlinecount`,`unlinecost`,`yjb`,`yjcost`,`pstype`,`shopid`,`shopuid`,`acountcost`,`addtime`,`jstime`) VALUES(\'8\',\'0.0\',\'0\',\'0\',\'0.00\',\'5\',\'0.00\',\'0\',\'4\',\'4\',\'0.00\',\'1457918088\',\'1457625600\')',
  2 => 'INSERT INTO `xiaozu_shopjs`(`id`,`onlinecost`,`onlinecount`,`unlinecount`,`unlinecost`,`yjb`,`yjcost`,`pstype`,`shopid`,`shopuid`,`acountcost`,`addtime`,`jstime`) VALUES(\'9\',\'0.0\',\'0\',\'0\',\'0.00\',\'10\',\'0.00\',\'0\',\'193\',\'1112\',\'0.00\',\'1474273750\',\'1473955200\')',
  3 => 'INSERT INTO `xiaozu_shopjs`(`id`,`onlinecost`,`onlinecount`,`unlinecount`,`unlinecost`,`yjb`,`yjcost`,`pstype`,`shopid`,`shopuid`,`acountcost`,`addtime`,`jstime`) VALUES(\'10\',\'0.0\',\'0\',\'0\',\'0.00\',\'0\',\'0.00\',\'0\',\'193\',\'1112\',\'0.00\',\'1474273750\',\'1473955200\')',
  4 => 'INSERT INTO `xiaozu_shopjs`(`id`,`onlinecost`,`onlinecount`,`unlinecount`,`unlinecost`,`yjb`,`yjcost`,`pstype`,`shopid`,`shopuid`,`acountcost`,`addtime`,`jstime`) VALUES(\'11\',\'0.0\',\'0\',\'0\',\'0.00\',\'10\',\'0.00\',\'1\',\'195\',\'2954\',\'0.00\',\'1474273750\',\'1473955200\')',
  5 => 'INSERT INTO `xiaozu_shopjs`(`id`,`onlinecost`,`onlinecount`,`unlinecount`,`unlinecost`,`yjb`,`yjcost`,`pstype`,`shopid`,`shopuid`,`acountcost`,`addtime`,`jstime`) VALUES(\'12\',\'0.0\',\'0\',\'0\',\'0.00\',\'0\',\'0.00\',\'0\',\'195\',\'2954\',\'0.00\',\'1474273750\',\'1473955200\')',
)?>