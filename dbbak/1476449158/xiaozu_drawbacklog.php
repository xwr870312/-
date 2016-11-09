<?php return array (
  0 => 'CREATE TABLE `xiaozu_drawbacklog` (
  `id` int(20) NOT NULL AUTO_INCREMENT,
  `uid` int(20) NOT NULL,
  `username` varchar(100) NOT NULL,
  `reason` varchar(255) NOT NULL,
  `orderid` int(20) NOT NULL,
  `shopid` int(11) NOT NULL,
  `content` text NOT NULL,
  `phone` varchar(50) NOT NULL,
  `contactname` varchar(100) NOT NULL,
  `status` int(1) DEFAULT \'0\' COMMENT \'退款状态 0未待处理 1为已退 2为拒绝退款\',
  `addtime` int(12) DEFAULT NULL,
  `cost` decimal(6,2) DEFAULT \'0.00\',
  `bkcontent` varchar(255) DEFAULT NULL COMMENT \'回复说明\',
  `admin_id` int(20) NOT NULL DEFAULT \'0\',
  `type` int(11) NOT NULL DEFAULT \'0\' COMMENT \'0为待商家确认 1为商家同意退款 2为商家拒绝退款\',
  KEY `id` (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8',
)?>