<?php return array (
  0 => 'CREATE TABLE `xiaozu_marketcate` (
  `id` int(20) NOT NULL AUTO_INCREMENT,
  `name` varchar(50) NOT NULL COMMENT \'目录名称\',
  `keywd` varchar(50) DEFAULT NULL COMMENT \'关键字\',
  `desc` varchar(255) DEFAULT NULL COMMENT \'描述\',
  `parent_id` int(20) NOT NULL DEFAULT \'0\' COMMENT \'上级ID  0为1级目录\',
  `shopid` int(20) DEFAULT NULL,
  `orderid` int(5) NOT NULL DEFAULT \'999\',
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=256 DEFAULT CHARSET=utf8',
  1 => 'INSERT INTO `xiaozu_marketcate`(`id`,`name`,`keywd`,`desc`,`parent_id`,`shopid`,`orderid`) VALUES(\'142\',\'食品零食\',\'\',\'\',\'0\',\'103\',\'1\')',
  2 => 'INSERT INTO `xiaozu_marketcate`(`id`,`name`,`keywd`,`desc`,`parent_id`,`shopid`,`orderid`) VALUES(\'144\',\'饼干糕点\',\'\',\'\',\'142\',\'103\',\'1\')',
  3 => 'INSERT INTO `xiaozu_marketcate`(`id`,`name`,`keywd`,`desc`,`parent_id`,`shopid`,`orderid`) VALUES(\'194\',\'方便速食\',\'\',\'\',\'142\',\'103\',\'6\')',
  4 => 'INSERT INTO `xiaozu_marketcate`(`id`,`name`,`keywd`,`desc`,`parent_id`,`shopid`,`orderid`) VALUES(\'196\',\'糕点\',\'\',\'\',\'142\',\'103\',\'4\')',
  5 => 'INSERT INTO `xiaozu_marketcate`(`id`,`name`,`keywd`,`desc`,`parent_id`,`shopid`,`orderid`) VALUES(\'197\',\'薯片膨化\',\'\',\'\',\'142\',\'103\',\'5\')',
  6 => 'INSERT INTO `xiaozu_marketcate`(`id`,`name`,`keywd`,`desc`,`parent_id`,`shopid`,`orderid`) VALUES(\'249\',\'小食品\',\'\',\'\',\'0\',\'195\',\'1\')',
  7 => 'INSERT INTO `xiaozu_marketcate`(`id`,`name`,`keywd`,`desc`,`parent_id`,`shopid`,`orderid`) VALUES(\'250\',\'零食\',\'\',\'\',\'249\',\'195\',\'1\')',
  8 => 'INSERT INTO `xiaozu_marketcate`(`id`,`name`,`keywd`,`desc`,`parent_id`,`shopid`,`orderid`) VALUES(\'251\',\'饮料\',\'\',\'\',\'249\',\'195\',\'2\')',
  9 => 'INSERT INTO `xiaozu_marketcate`(`id`,`name`,`keywd`,`desc`,`parent_id`,`shopid`,`orderid`) VALUES(\'252\',\'水果\',\'\',\'\',\'249\',\'195\',\'3\')',
  10 => 'INSERT INTO `xiaozu_marketcate`(`id`,`name`,`keywd`,`desc`,`parent_id`,`shopid`,`orderid`) VALUES(\'253\',\'采购1\',\'\',\'\',\'0\',\'197\',\'1\')',
  11 => 'INSERT INTO `xiaozu_marketcate`(`id`,`name`,`keywd`,`desc`,`parent_id`,`shopid`,`orderid`) VALUES(\'254\',\'零食\',\'\',\'\',\'253\',\'197\',\'1\')',
  12 => 'INSERT INTO `xiaozu_marketcate`(`id`,`name`,`keywd`,`desc`,`parent_id`,`shopid`,`orderid`) VALUES(\'255\',\'饮料\',\'\',\'\',\'253\',\'197\',\'2\')',
)?>