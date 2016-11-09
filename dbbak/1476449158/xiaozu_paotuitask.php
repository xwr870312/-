<?php return array (
  0 => 'CREATE TABLE `xiaozu_paotuitask` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `dno` varchar(100) NOT NULL,
  `uid` int(11) NOT NULL,
  `content` varchar(255) NOT NULL,
  `name` varchar(25) NOT NULL,
  `address` varchar(255) NOT NULL,
  `phone` varchar(20) NOT NULL,
  `addtime` int(11) NOT NULL,
  `status` int(11) NOT NULL COMMENT \'0 未处理  1已接受 2 已完成3取消订单\',
  `ordertype` int(11) NOT NULL,
  `ipaddress` varchar(255) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8',
)?>