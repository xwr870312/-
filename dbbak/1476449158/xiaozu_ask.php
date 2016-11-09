<?php return array (
  0 => 'CREATE TABLE `xiaozu_ask` (
  `id` int(20) NOT NULL AUTO_INCREMENT,
  `uid` int(20) NOT NULL,
  `shopid` int(20) NOT NULL DEFAULT \'0\' COMMENT \'当为网站留言时此值为0\',
  `content` varchar(250) NOT NULL,
  `addtime` int(11) NOT NULL,
  `typeid` int(2) NOT NULL,
  `replycontent` varchar(250) DEFAULT NULL,
  `replytime` int(11) NOT NULL DEFAULT \'0\',
  `replyname` varchar(255) DEFAULT NULL COMMENT \'回复者\',
  `is_show` int(1) NOT NULL DEFAULT \'0\',
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=4 DEFAULT CHARSET=utf8',
  1 => 'INSERT INTO `xiaozu_ask`(`id`,`uid`,`shopid`,`content`,`addtime`,`typeid`,`replycontent`,`replytime`,`replyname`,`is_show`) VALUES(\'1\',\'6\',\'0\',\'外卖人网上订餐系统8.0更新上线了\',\'1451004008\',\'5\',\'\',\'0\',\'\',\'0\')',
  2 => 'INSERT INTO `xiaozu_ask`(`id`,`uid`,`shopid`,`content`,`addtime`,`typeid`,`replycontent`,`replytime`,`replyname`,`is_show`) VALUES(\'2\',\'0\',\'0\',\'11111\',\'1453426486\',\'5\',\'\',\'0\',\'\',\'0\')',
  3 => 'INSERT INTO `xiaozu_ask`(`id`,`uid`,`shopid`,`content`,`addtime`,`typeid`,`replycontent`,`replytime`,`replyname`,`is_show`) VALUES(\'3\',\'2958\',\'0\',\'留言测试\',\'1476418322\',\'2\',\'回复留言测试\',\'1476418345\',\'\',\'0\')',
)?>