<?php return array (
  0 => 'CREATE TABLE `xiaozu_adv` (
  `id` int(20) NOT NULL AUTO_INCREMENT,
  `title` varchar(50) NOT NULL COMMENT \'广告标题\',
  `advtype` varchar(10) NOT NULL COMMENT \'广告类型code\',
  `img` varchar(255) DEFAULT NULL COMMENT \'图片地址\',
  `linkurl` varchar(255) DEFAULT NULL COMMENT \'超链接\',
  `module` varchar(50) DEFAULT \'newgreen\',
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=8 DEFAULT CHARSET=utf8',
  1 => 'INSERT INTO `xiaozu_adv`(`id`,`title`,`advtype`,`img`,`linkurl`,`module`) VALUES(\'1\',\'7.0升级中\',\'lunbo\',\'/upload/goods/20160110153053459.jpg\',\'#\',\'m7\')',
  2 => 'INSERT INTO `xiaozu_adv`(`id`,`title`,`advtype`,`img`,`linkurl`,`module`) VALUES(\'2\',\'7.0更新中\',\'marketlb\',\'/upload/goods/20160110154126310.jpg\',\'#\',\'m7\')',
  3 => 'INSERT INTO `xiaozu_adv`(`id`,`title`,`advtype`,`img`,`linkurl`,`module`) VALUES(\'3\',\'微信\',\'weixinlb\',\'/upload/goods/20160109181719939.png\',\'#\',\'m7\')',
  4 => 'INSERT INTO `xiaozu_adv`(`id`,`title`,`advtype`,`img`,`linkurl`,`module`) VALUES(\'6\',\'111\',\'weixinlb\',\'/upload/goods/20160109181732839.png\',\'#\',\'m7\')',
  5 => 'INSERT INTO `xiaozu_adv`(`id`,`title`,`advtype`,`img`,`linkurl`,`module`) VALUES(\'5\',\'跑腿PC端上线了\',\'paotuiimg\',\'/upload/goods/20150829102419498.png\',\'#\',\'m7\')',
  6 => 'INSERT INTO `xiaozu_adv`(`id`,`title`,`advtype`,`img`,`linkurl`,`module`) VALUES(\'7\',\' 微信端积分总换页面一张图片\',\'wxgift\',\'/upload/goods/20160110154138176.png\',\'#\',\'m7\')',
)?>