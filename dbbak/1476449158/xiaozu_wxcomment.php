<?php return array (
  0 => 'CREATE TABLE `xiaozu_wxcomment` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `uid` int(11) NOT NULL COMMENT \'微信用户uid\',
  `usercontent` varchar(500) NOT NULL COMMENT \'发表主题\',
  `userimg` varchar(500) NOT NULL COMMENT \'图片集\',
  `addtime` varchar(20) NOT NULL COMMENT \'添加时间\',
  `cityname` varchar(25) NOT NULL,
  `areaname` varchar(25) NOT NULL,
  `streetname` varchar(25) NOT NULL,
  `is_top` int(11) NOT NULL DEFAULT \'0\',
  `is_show` int(1) NOT NULL DEFAULT \'1\',
  PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COMMENT=\'微信一起说主表\'',
)?>