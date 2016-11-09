<?php return array (
  0 => 'CREATE TABLE `xiaozu_comment` (
  `id` int(20) NOT NULL AUTO_INCREMENT,
  `orderid` int(20) NOT NULL,
  `orderdetid` int(20) NOT NULL,
  `shopid` int(20) NOT NULL,
  `goodsid` int(20) NOT NULL,
  `uid` int(20) NOT NULL DEFAULT \'0\',
  `content` varchar(250) DEFAULT NULL,
  `addtime` int(12) NOT NULL DEFAULT \'0\',
  `replycontent` varchar(250) DEFAULT NULL,
  `replytime` int(11) NOT NULL DEFAULT \'0\',
  `point` int(1) NOT NULL COMMENT \'评分\',
  `is_show` int(1) NOT NULL DEFAULT \'0\' COMMENT \'0展示，1不展示\',
  `virtualname` varchar(50) DEFAULT NULL COMMENT \' 新增 虚拟评论人名称\',
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=7 DEFAULT CHARSET=utf8',
  1 => 'INSERT INTO `xiaozu_comment`(`id`,`orderid`,`orderdetid`,`shopid`,`goodsid`,`uid`,`content`,`addtime`,`replycontent`,`replytime`,`point`,`is_show`,`virtualname`) VALUES(\'5\',\'0\',\'0\',\'4\',\'1535\',\'0\',\'很好很棒好逼真\',\'2016\',\'\',\'0\',\'5\',\'0\',\'测试123\')',
  2 => 'INSERT INTO `xiaozu_comment`(`id`,`orderid`,`orderdetid`,`shopid`,`goodsid`,`uid`,`content`,`addtime`,`replycontent`,`replytime`,`point`,`is_show`,`virtualname`) VALUES(\'6\',\'0\',\'0\',\'4\',\'1520\',\'0\',\'dsadas\',\'1464969600\',\'\',\'0\',\'5\',\'0\',\'dasd\')',
)?>