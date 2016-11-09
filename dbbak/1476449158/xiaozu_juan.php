<?php return array (
  0 => 'CREATE TABLE `xiaozu_juan` (
  `id` int(20) NOT NULL AUTO_INCREMENT,
  `card` varchar(20) NOT NULL COMMENT \'优惠劵卡号\',
  `card_password` varchar(10) NOT NULL COMMENT \'优惠劵密码\',
  `status` int(1) NOT NULL DEFAULT \'0\' COMMENT \'状态，0未使用，1已绑定，2已使用，3无效\',
  `creattime` int(11) NOT NULL COMMENT \'制造时间\',
  `cost` int(5) NOT NULL COMMENT \'优惠金额\',
  `limitcost` int(5) NOT NULL COMMENT \'购物车限制金额下限\',
  `endtime` int(11) NOT NULL DEFAULT \'0\' COMMENT \'失效时间\',
  `uid` int(20) NOT NULL DEFAULT \'0\' COMMENT \'用户ID\',
  `username` varchar(100) NOT NULL DEFAULT \'0\' COMMENT \'用户名\',
  `usetime` int(11) NOT NULL DEFAULT \'0\' COMMENT \'使用时间\',
  `name` varchar(50) NOT NULL DEFAULT \'优惠劵\',
  `bangphone` varchar(20) DEFAULT NULL COMMENT \'绑定手机号\',
  `orderid` int(11) DEFAULT NULL COMMENT \'分享领取订单ID\',
  `type` int(1) DEFAULT NULL COMMENT \'1充值2下单3推广\',
  `paytype` varchar(20) NOT NULL DEFAULT \'1,2\' COMMENT \'(1,2) 1支持货到付款2支持在线支付\',
  `shareuid` int(11) NOT NULL COMMENT \'分享者UID\',
  PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8',
)?>