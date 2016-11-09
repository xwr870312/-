<?php return array (
  0 => 'CREATE TABLE `xiaozu_goodsimg` (
  `id` int(20) NOT NULL AUTO_INCREMENT,
  `goodsid` int(20) NOT NULL,
  `imgname` varchar(250) NOT NULL,
  `imgurl` varchar(250) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=3 DEFAULT CHARSET=utf8',
  1 => 'INSERT INTO `xiaozu_goodsimg`(`id`,`goodsid`,`imgname`,`imgurl`) VALUES(\'1\',\'1520\',\'20160331151608315.png\',\'/upload/goods/20160331151608315.png\')',
  2 => 'INSERT INTO `xiaozu_goodsimg`(`id`,`goodsid`,`imgname`,`imgurl`) VALUES(\'2\',\'1520\',\'20160331151608377.png\',\'/upload/goods/20160331151608377.png\')',
)?>