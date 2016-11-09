<?php return array (
  0 => 'CREATE TABLE `xiaozu_oauth` (
  `id` int(20) NOT NULL AUTO_INCREMENT,
  `uid` int(20) NOT NULL,
  `token` varchar(255) NOT NULL,
  `openid` varchar(255) NOT NULL,
  `type` varchar(50) DEFAULT NULL,
  `addtime` int(12) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8',
)?>