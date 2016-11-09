<?php return array (
  0 => 'CREATE TABLE `xiaozu_pmes` (
  `id` int(20) NOT NULL AUTO_INCREMENT,
  `uid` int(20) DEFAULT \'0\',
  `username` varchar(100) DEFAULT NULL,
  `usercontent` text,
  `userimg` varchar(255) DEFAULT NULL,
  `creattime` int(12) NOT NULL DEFAULT \'0\',
  `backuid` int(20) NOT NULL DEFAULT \'0\',
  `backcontent` text,
  `backimg` varchar(255) DEFAULT NULL,
  `backtime` int(12) NOT NULL DEFAULT \'0\',
  `backusername` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=8 DEFAULT CHARSET=utf8',
  1 => 'INSERT INTO `xiaozu_pmes`(`id`,`uid`,`username`,`usercontent`,`userimg`,`creattime`,`backuid`,`backcontent`,`backimg`,`backtime`,`backusername`) VALUES(\'7\',\'1\',\'waimairen\',\'我的私信，&lt;img src=http://7.0.com/upload/emotion/28.gif?ver=1 alt=吃饭 /&gt;&lt;img src=http://7.0.com/upload/emotion/21.gif?ver=1 alt=呕吐 /&gt;&lt;img src=http://7.0.com/upload/emotion/37.gif alt=降温 /&gt;\',\'\',\'1436945798\',\'0\',\'\',\'\',\'0\',\'网站客服\')',
  2 => 'INSERT INTO `xiaozu_pmes`(`id`,`uid`,`username`,`usercontent`,`userimg`,`creattime`,`backuid`,`backcontent`,`backimg`,`backtime`,`backusername`) VALUES(\'6\',\'1\',\'waimairen\',\'分享图片\',\'/upload/user/20150715152358343.png\',\'1436945044\',\'0\',\'\',\'\',\'0\',\'网站客服\')',
)?>