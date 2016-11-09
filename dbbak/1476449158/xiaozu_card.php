<?php return array (
  0 => 'CREATE TABLE `xiaozu_card` (
  `id` int(20) NOT NULL AUTO_INCREMENT,
  `card` varchar(50) NOT NULL,
  `card_password` varchar(255) NOT NULL,
  `uid` int(20) NOT NULL DEFAULT \'0\',
  `username` varchar(100) DEFAULT NULL,
  `cost` int(4) NOT NULL DEFAULT \'0\',
  `status` int(1) NOT NULL DEFAULT \'0\',
  `creattime` int(12) NOT NULL DEFAULT \'0\',
  `usetime` int(12) NOT NULL DEFAULT \'0\',
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=3 DEFAULT CHARSET=utf8',
  1 => 'INSERT INTO `xiaozu_card`(`id`,`card`,`card_password`,`uid`,`username`,`cost`,`status`,`creattime`,`usetime`) VALUES(\'1\',\'wmr145049752908085\',\'fb6d1ebfb42\',\'6\',\'wmr\',\'10\',\'1\',\'1450497529\',\'0\')',
  2 => 'INSERT INTO `xiaozu_card`(`id`,`card`,`card_password`,`uid`,`username`,`cost`,`status`,`creattime`,`usetime`) VALUES(\'2\',\'wmr145049752916602\',\'ff45de2d588\',\'0\',\'\',\'10\',\'0\',\'1450497529\',\'0\')',
)?>