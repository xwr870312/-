<?php return array (
  0 => 'CREATE TABLE `xiaozu_messages` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `username` varchar(30) NOT NULL,
  `phone` varchar(11) NOT NULL,
  `qq` int(15) NOT NULL,
  `shopname` varchar(255) NOT NULL,
  `shopaddress` varchar(255) NOT NULL,
  `addtime` varchar(11) NOT NULL,
  `is_pass` int(1) NOT NULL DEFAULT \'0\',
  PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8',
)?>