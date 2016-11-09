<?php return array (
  0 => 'CREATE TABLE `xiaozu_friendlink` (
  `id` int(20) NOT NULL AUTO_INCREMENT,
  `type` smallint(1) NOT NULL DEFAULT \'1\',
  `typevalue` varchar(255) DEFAULT NULL,
  `linkurl` varchar(255) DEFAULT NULL,
  `title` varchar(255) DEFAULT NULL,
  `orderid` int(10) DEFAULT \'99\',
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=3 DEFAULT CHARSET=utf8',
)?>