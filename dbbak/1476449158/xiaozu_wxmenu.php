<?php return array (
  0 => 'CREATE TABLE `xiaozu_wxmenu` (
  `id` int(20) NOT NULL AUTO_INCREMENT,
  `type` varchar(10) NOT NULL COMMENT \'view表示连接，click事件\',
  `name` varchar(255) NOT NULL COMMENT \'an钮事件名称\',
  `values` text COMMENT \'当type为view时跳转连接，当click为则为内容\',
  `parent_id` int(20) NOT NULL DEFAULT \'0\' COMMENT \'0一级菜单\',
  `sort` int(3) NOT NULL,
  `msgtype` int(1) NOT NULL DEFAULT \'0\' COMMENT \'0:连接1文本2图文\',
  `code` varchar(100) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=30 DEFAULT CHARSET=utf8',
  1 => 'INSERT INTO `xiaozu_wxmenu`(`id`,`type`,`name`,`values`,`parent_id`,`sort`,`msgtype`,`code`) VALUES(\'14\',\'view\',\'跑腿服务\',\'a:2:{s:7:\\"lj_link\\";s:58:\\"http://ts.dearsure.com/index.php?ctrl=wxsite&action=paotui\\";s:8:\\"lj_title\\";s:12:\\"跑腿服务\\";}\',\'0\',\'11\',\'0\',\'g\')',
  2 => 'INSERT INTO `xiaozu_wxmenu`(`id`,`type`,`name`,`values`,`parent_id`,`sort`,`msgtype`,`code`) VALUES(\'16\',\'view\',\'体验新版\',\'a:2:{s:7:\\"lj_link\\";s:44:\\"http://ts.dearsure.com/index.php?ctrl=wxsite\\";s:8:\\"lj_title\\";s:12:\\"在线下单\\";}\',\'0\',\'12\',\'0\',\'acount\')',
  3 => 'INSERT INTO `xiaozu_wxmenu`(`id`,`type`,`name`,`values`,`parent_id`,`sort`,`msgtype`,`code`) VALUES(\'28\',\'view\',\'升级报告\',\'a:2:{s:7:\\"lj_link\\";s:22:\\"http://ts.dearsure.com\\";s:8:\\"lj_title\\";s:12:\\"升级报告\\";}\',\'0\',\'10\',\'0\',\'y\')',
)?>