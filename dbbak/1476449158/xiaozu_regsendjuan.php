<?php return array (
  0 => 'CREATE TABLE `xiaozu_regsendjuan` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(60) NOT NULL,
  `limitcost` decimal(10,2) NOT NULL,
  `jiancost` decimal(10,2) NOT NULL,
  `starttime` int(11) NOT NULL,
  `endtime` int(11) NOT NULL,
  `is_open` int(1) NOT NULL DEFAULT \'0\' COMMENT \'默认0开启 1不开启\',
  PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8',
)?>