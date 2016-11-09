<?php return array (
  0 => 'CREATE TABLE `xiaozu_newstype` (
  `id` int(20) NOT NULL AUTO_INCREMENT,
  `name` varchar(200) NOT NULL,
  `type` tinyint(1) NOT NULL DEFAULT \'1\' COMMENT \'目录类型：1文章目录 2包含下级目录 \',
  `parent_id` int(20) NOT NULL DEFAULT \'0\' COMMENT \'上级目录ID，0： 顶级目录\',
  `displaytype` tinyint(1) NOT NULL DEFAULT \'1\' COMMENT \'1：一个文章显示一个页面，2表示此目录文章先到到一个文章里\',
  `orderid` int(20) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=17 DEFAULT CHARSET=utf8',
  1 => 'INSERT INTO `xiaozu_newstype`(`id`,`name`,`type`,`parent_id`,`displaytype`,`orderid`) VALUES(\'3\',\'新手入门\',\'1\',\'0\',\'1\',\'3\')',
  2 => 'INSERT INTO `xiaozu_newstype`(`id`,`name`,`type`,`parent_id`,`displaytype`,`orderid`) VALUES(\'4\',\'物流及售后\',\'1\',\'0\',\'1\',\'4\')',
  3 => 'INSERT INTO `xiaozu_newstype`(`id`,`name`,`type`,`parent_id`,`displaytype`,`orderid`) VALUES(\'12\',\'常见问题\',\'1\',\'11\',\'1\',\'3\')',
  4 => 'INSERT INTO `xiaozu_newstype`(`id`,`name`,`type`,`parent_id`,`displaytype`,`orderid`) VALUES(\'15\',\'关于我们\',\'1\',\'0\',\'1\',\'2\')',
  5 => 'INSERT INTO `xiaozu_newstype`(`id`,`name`,`type`,`parent_id`,`displaytype`,`orderid`) VALUES(\'16\',\'新闻分类\',\'1\',\'0\',\'1\',\'6\')',
)?>