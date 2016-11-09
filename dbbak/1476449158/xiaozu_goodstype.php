<?php return array (
  0 => 'CREATE TABLE `xiaozu_goodstype` (
  `id` int(10) NOT NULL AUTO_INCREMENT,
  `shopid` int(20) NOT NULL COMMENT \'店铺ID\',
  `name` varchar(50) NOT NULL COMMENT \'分类名称\',
  `orderid` int(3) NOT NULL DEFAULT \'0\',
  `cattype` int(1) NOT NULL DEFAULT \'1\' COMMENT \'1外卖 2订台\',
  PRIMARY KEY (`id`),
  KEY `shopid` (`shopid`)
) ENGINE=MyISAM AUTO_INCREMENT=304 DEFAULT CHARSET=utf8',
  1 => 'INSERT INTO `xiaozu_goodstype`(`id`,`shopid`,`name`,`orderid`,`cattype`) VALUES(\'285\',\'4\',\'特色小炒\',\'2\',\'0\')',
  2 => 'INSERT INTO `xiaozu_goodstype`(`id`,`shopid`,`name`,`orderid`,`cattype`) VALUES(\'286\',\'4\',\'凉菜系列\',\'3\',\'0\')',
  3 => 'INSERT INTO `xiaozu_goodstype`(`id`,`shopid`,`name`,`orderid`,`cattype`) VALUES(\'287\',\'4\',\'饮料系列\',\'4\',\'0\')',
  4 => 'INSERT INTO `xiaozu_goodstype`(`id`,`shopid`,`name`,`orderid`,`cattype`) VALUES(\'301\',\'193\',\'炒菜\',\'0\',\'0\')',
  5 => 'INSERT INTO `xiaozu_goodstype`(`id`,`shopid`,`name`,`orderid`,`cattype`) VALUES(\'302\',\'198\',\'主食\',\'0\',\'0\')',
  6 => 'INSERT INTO `xiaozu_goodstype`(`id`,`shopid`,`name`,`orderid`,`cattype`) VALUES(\'303\',\'198\',\'饮品\',\'1\',\'0\')',
)?>