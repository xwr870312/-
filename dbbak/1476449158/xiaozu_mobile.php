<?php return array (
  0 => 'CREATE TABLE `xiaozu_mobile` (
  `id` int(20) NOT NULL AUTO_INCREMENT,
  `phone` varchar(50) NOT NULL,
  `addtime` int(12) NOT NULL,
  `code` varchar(50) NOT NULL,
  `is_send` int(1) NOT NULL DEFAULT \'0\',
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=2 DEFAULT CHARSET=utf8',
  1 => 'INSERT INTO `xiaozu_mobile`(`id`,`phone`,`addtime`,`code`,`is_send`) VALUES(\'1\',\'15738832712\',\'1449109151\',\'17216\',\'1\')',
)?>