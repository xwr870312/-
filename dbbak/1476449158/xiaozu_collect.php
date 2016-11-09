<?php return array (
  0 => 'CREATE TABLE `xiaozu_collect` (
  `id` int(20) NOT NULL AUTO_INCREMENT,
  `uid` int(20) NOT NULL,
  `collectid` int(20) NOT NULL COMMENT \'对应商品/店铺ID\',
  `collecttype` int(1) NOT NULL COMMENT \'0店铺  1商品\',
  `shopuid` int(20) NOT NULL COMMENT \'店铺所有者ID\',
  `orderid` int(11) NOT NULL DEFAULT \'100\',
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=5 DEFAULT CHARSET=utf8',
)?>