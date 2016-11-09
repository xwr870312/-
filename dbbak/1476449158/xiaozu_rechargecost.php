<?php return array (
  0 => 'CREATE TABLE `xiaozu_rechargecost` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `cost` decimal(12,2) NOT NULL COMMENT \'充值金额\',
  `is_sendcost` int(1) NOT NULL DEFAULT \'1\' COMMENT \'是否赠送账户余额   默认1赠送0不\',
  `sendcost` decimal(12,2) NOT NULL COMMENT \'赠送金额\',
  `is_sendjuan` int(1) NOT NULL COMMENT \'是否赠送优惠券  默认0不赠送1赠送\',
  `sendjuancost` decimal(12,2) DEFAULT NULL COMMENT \'赠送优惠券总额\',
  `orderid` int(11) NOT NULL COMMENT \'排序\',
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=4 DEFAULT CHARSET=utf8',
  1 => 'INSERT INTO `xiaozu_rechargecost`(`id`,`cost`,`is_sendcost`,`sendcost`,`is_sendjuan`,`sendjuancost`,`orderid`) VALUES(\'1\',\'50.00\',\'1\',\'5.00\',\'1\',\'100.00\',\'1\')',
  2 => 'INSERT INTO `xiaozu_rechargecost`(`id`,`cost`,`is_sendcost`,`sendcost`,`is_sendjuan`,`sendjuancost`,`orderid`) VALUES(\'2\',\'100.00\',\'1\',\'20.00\',\'1\',\'100.00\',\'2\')',
  3 => 'INSERT INTO `xiaozu_rechargecost`(`id`,`cost`,`is_sendcost`,`sendcost`,`is_sendjuan`,`sendjuancost`,`orderid`) VALUES(\'3\',\'200.00\',\'1\',\'30.00\',\'1\',\'100.00\',\'3\')',
)?>