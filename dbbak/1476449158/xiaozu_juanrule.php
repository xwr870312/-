<?php return array (
  0 => 'CREATE TABLE `xiaozu_juanrule` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(255) NOT NULL COMMENT \'名称\',
  `type` int(1) NOT NULL COMMENT \'营销类型 1充值  2下单成功分享优惠券  3会员中心推广优惠券\',
  `juantotalcost` decimal(12,2) DEFAULT NULL COMMENT \'充值赠送优惠券总金额\',
  `juannum` int(11) NOT NULL COMMENT \'送多少张优惠券(type3固定为1张)\',
  `jiancostmin` decimal(8,2) NOT NULL COMMENT \'满---最小\',
  `jiancostmax` decimal(8,2) NOT NULL COMMENT \'满---最大\',
  `jiacostmin` decimal(8,2) NOT NULL COMMENT \'减---最小\',
  `jiacostmax` decimal(8,2) NOT NULL COMMENT \'减---最大\',
  `endtime` int(11) NOT NULL COMMENT \'失效时间\',
  `paytype` varchar(20) DEFAULT NULL COMMENT \'(1,2) 1支持货到付款2支持在线支付\',
  `is_open` int(1) NOT NULL DEFAULT \'1\' COMMENT \'是否启用默认1开启\',
  `addtime` int(11) NOT NULL COMMENT \'添加时间\',
  `orderid` int(11) NOT NULL COMMENT \'排序\',
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=4 DEFAULT CHARSET=utf8 COMMENT=\'分享优惠券规则类型\'',
  1 => 'INSERT INTO `xiaozu_juanrule`(`id`,`name`,`type`,`juantotalcost`,`juannum`,`jiancostmin`,`jiancostmax`,`jiacostmin`,`jiacostmax`,`endtime`,`paytype`,`is_open`,`addtime`,`orderid`) VALUES(\'1\',\'充值优惠券类型\',\'1\',\'100.00\',\'0\',\'100.00\',\'100.00\',\'20.00\',\'20.00\',\'1466761211\',\'2\',\'1\',\'1464571810\',\'1\')',
  2 => 'INSERT INTO `xiaozu_juanrule`(`id`,`name`,`type`,`juantotalcost`,`juannum`,`jiancostmin`,`jiancostmax`,`jiacostmin`,`jiacostmax`,`endtime`,`paytype`,`is_open`,`addtime`,`orderid`) VALUES(\'2\',\'下单成功分享优惠券\',\'2\',\'0.00\',\'6\',\'20.00\',\'50.00\',\'3.00\',\'5.00\',\'1466156404\',\'2\',\'1\',\'1464505863\',\'2\')',
  3 => 'INSERT INTO `xiaozu_juanrule`(`id`,`name`,`type`,`juantotalcost`,`juannum`,`jiancostmin`,`jiancostmax`,`jiacostmin`,`jiacostmax`,`endtime`,`paytype`,`is_open`,`addtime`,`orderid`) VALUES(\'3\',\'推广优惠券\',\'3\',\'0.00\',\'1\',\'10.00\',\'30.00\',\'2.00\',\'4.00\',\'1466242807\',\'2\',\'1\',\'1464505897\',\'3\')',
)?>