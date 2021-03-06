<?php return array (
  0 => 'CREATE TABLE `xiaozu_module` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(100) NOT NULL,
  `cnname` varchar(100) NOT NULL,
  `install` int(1) NOT NULL DEFAULT \'0\' COMMENT \'0表未安装1，表已安装\',
  `parent_id` int(5) NOT NULL DEFAULT \'0\' COMMENT \'上级模块\',
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=1115 DEFAULT CHARSET=utf8',
  1 => 'INSERT INTO `xiaozu_module`(`id`,`name`,`cnname`,`install`,`parent_id`) VALUES(\'1\',\'system\',\'系统管理\',\'1\',\'0\')',
  2 => 'INSERT INTO `xiaozu_module`(`id`,`name`,`cnname`,`install`,`parent_id`) VALUES(\'2\',\'member\',\'用户管理\',\'1\',\'0\')',
  3 => 'INSERT INTO `xiaozu_module`(`id`,`name`,`cnname`,`install`,`parent_id`) VALUES(\'3\',\'shop\',\'店铺管理\',\'1\',\'0\')',
  4 => 'INSERT INTO `xiaozu_module`(`id`,`name`,`cnname`,`install`,`parent_id`) VALUES(\'18\',\'analysis\',\'数据分析模块\',\'1\',\'0\')',
  5 => 'INSERT INTO `xiaozu_module`(`id`,`name`,`cnname`,`install`,`parent_id`) VALUES(\'5\',\'order\',\'订单管理\',\'1\',\'0\')',
  6 => 'INSERT INTO `xiaozu_module`(`id`,`name`,`cnname`,`install`,`parent_id`) VALUES(\'7\',\'news\',\'内容管理\',\'1\',\'0\')',
  7 => 'INSERT INTO `xiaozu_module`(`id`,`name`,`cnname`,`install`,`parent_id`) VALUES(\'8\',\'gift\',\'礼品管理\',\'1\',\'0\')',
  8 => 'INSERT INTO `xiaozu_module`(`id`,`name`,`cnname`,`install`,`parent_id`) VALUES(\'17\',\'other\',\'其他管理\',\'1\',\'0\')',
  9 => 'INSERT INTO `xiaozu_module`(`id`,`name`,`cnname`,`install`,`parent_id`) VALUES(\'10\',\'area\',\'区域管理\',\'1\',\'3\')',
  10 => 'INSERT INTO `xiaozu_module`(`id`,`name`,`cnname`,`install`,`parent_id`) VALUES(\'11\',\'ask\',\'留言管理\',\'1\',\'7\')',
  11 => 'INSERT INTO `xiaozu_module`(`id`,`name`,`cnname`,`install`,`parent_id`) VALUES(\'12\',\'single\',\'单页\',\'1\',\'7\')',
  12 => 'INSERT INTO `xiaozu_module`(`id`,`name`,`cnname`,`install`,`parent_id`) VALUES(\'16\',\'card\',\'营销管理\',\'1\',\'0\')',
  13 => 'INSERT INTO `xiaozu_module`(`id`,`name`,`cnname`,`install`,`parent_id`) VALUES(\'14\',\'adv\',\'广告管理\',\'1\',\'7\')',
  14 => 'INSERT INTO `xiaozu_module`(`id`,`name`,`cnname`,`install`,`parent_id`) VALUES(\'20\',\'html5\',\'手机模块\',\'1\',\'16\')',
  15 => 'INSERT INTO `xiaozu_module`(`id`,`name`,`cnname`,`install`,`parent_id`) VALUES(\'28\',\'weixin\',\'微信\',\'1\',\'0\')',
  16 => 'INSERT INTO `xiaozu_module`(`id`,`name`,`cnname`,`install`,`parent_id`) VALUES(\'30\',\'wxsite\',\'微信网站\',\'1\',\'28\')',
  17 => 'INSERT INTO `xiaozu_module`(`id`,`name`,`cnname`,`install`,`parent_id`) VALUES(\'31\',\'plate\',\'订台\',\'1\',\'1\')',
  18 => 'INSERT INTO `xiaozu_module`(`id`,`name`,`cnname`,`install`,`parent_id`) VALUES(\'32\',\'psuser\',\'配送员模块\',\'1\',\'3\')',
  19 => 'INSERT INTO `xiaozu_module`(`id`,`name`,`cnname`,`install`,`parent_id`) VALUES(\'34\',\'app\',\'app\',\'1\',\'28\')',
  20 => 'INSERT INTO `xiaozu_module`(`id`,`name`,`cnname`,`install`,`parent_id`) VALUES(\'35\',\'shopcenter\',\'shopcenter\',\'1\',\'16\')',
)?>