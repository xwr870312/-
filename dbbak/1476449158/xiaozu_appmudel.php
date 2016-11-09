<?php return array (
  0 => 'CREATE TABLE `xiaozu_appmudel` (
  `name` varchar(100) NOT NULL COMMENT \'模块名称--固定写\',
  `imgurl` varchar(255) NOT NULL COMMENT \'模块图标 \',
  `is_display` int(1) NOT NULL COMMENT \' 0不在首页展示   1在首页展示\',
  `cnname` varchar(100) NOT NULL COMMENT \'中文名称（统一录入 无ID 仅name关键字）\',
  `ctlname` varchar(100) NOT NULL COMMENT \'ctlname\',
  `is_install` int(1) DEFAULT \'0\' COMMENT \'0.APP完全不显示，1APP上显示\',
  `orderid` int(5) NOT NULL DEFAULT \'0\',
  PRIMARY KEY (`name`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8',
  1 => 'INSERT INTO `xiaozu_appmudel`(`name`,`imgurl`,`is_display`,`cnname`,`ctlname`,`is_install`,`orderid`) VALUES(\'waimai\',\'/upload/goods/20151209172321460.png\',\'1\',\'外卖\',\'\',\'1\',\'1\')',
  2 => 'INSERT INTO `xiaozu_appmudel`(`name`,`imgurl`,`is_display`,`cnname`,`ctlname`,`is_install`,`orderid`) VALUES(\'market\',\'/upload/goods/20151209172327928.png\',\'1\',\'超市\',\'\',\'0\',\'2\')',
  3 => 'INSERT INTO `xiaozu_appmudel`(`name`,`imgurl`,`is_display`,`cnname`,`ctlname`,`is_install`,`orderid`) VALUES(\'diancai\',\'/upload/goods/20151209172334880.png\',\'1\',\'点菜\',\'\',\'1\',\'3\')',
  4 => 'INSERT INTO `xiaozu_appmudel`(`name`,`imgurl`,`is_display`,`cnname`,`ctlname`,`is_install`,`orderid`) VALUES(\'dingtai\',\'/upload/goods/20151209172339618.png\',\'1\',\'订台\',\'\',\'1\',\'4\')',
  5 => 'INSERT INTO `xiaozu_appmudel`(`name`,`imgurl`,`is_display`,`cnname`,`ctlname`,`is_install`,`orderid`) VALUES(\'paotui\',\'/upload/goods/20151209174536887.png\',\'1\',\'跑腿\',\'\',\'0\',\'5\')',
  6 => 'INSERT INTO `xiaozu_appmudel`(`name`,`imgurl`,`is_display`,`cnname`,`ctlname`,`is_install`,`orderid`) VALUES(\'gift\',\'/upload/goods/20160110135537453.png\',\'1\',\'礼品\',\'\',\'1\',\'2\')',
  7 => 'INSERT INTO `xiaozu_appmudel`(`name`,`imgurl`,`is_display`,`cnname`,`ctlname`,`is_install`,`orderid`) VALUES(\'collect\',\'/upload/goods/20160110135528286.png\',\'1\',\'收藏\',\'\',\'1\',\'1\')',
  8 => 'INSERT INTO `xiaozu_appmudel`(`name`,`imgurl`,`is_display`,`cnname`,`ctlname`,`is_install`,`orderid`) VALUES(\'newuser\',\'/upload/goods/20160110135543449.png\',\'1\',\'我是新手\',\'\',\'1\',\'3\')',
)?>