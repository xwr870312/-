<?php return array (
  0 => 'CREATE TABLE `xiaozu_group` (
  `id` int(20) NOT NULL AUTO_INCREMENT,
  `name` varchar(100) NOT NULL COMMENT \'用户组名称\',
  `type` varchar(100) NOT NULL COMMENT \'前台或者后台\',
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=18 DEFAULT CHARSET=utf8',
  1 => 'INSERT INTO `xiaozu_group`(`id`,`name`,`type`) VALUES(\'1\',\'超级管理员\',\'admin\')',
  2 => 'INSERT INTO `xiaozu_group`(`id`,`name`,`type`) VALUES(\'2\',\'配送员\',\'font\')',
  3 => 'INSERT INTO `xiaozu_group`(`id`,`name`,`type`) VALUES(\'3\',\'商家会员\',\'font\')',
  4 => 'INSERT INTO `xiaozu_group`(`id`,`name`,`type`) VALUES(\'4\',\'区域管理员\',\'admin\')',
  5 => 'INSERT INTO `xiaozu_group`(`id`,`name`,`type`) VALUES(\'5\',\'普通会员\',\'font\')',
)?>