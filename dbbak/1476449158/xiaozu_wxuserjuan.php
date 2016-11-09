<?php return array (
  0 => 'CREATE TABLE `xiaozu_wxuserjuan` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `juanid` int(11) NOT NULL,
  `fafangtime` int(11) NOT NULL,
  `uid` int(11) NOT NULL COMMENT \'顾客uid\',
  `username` varchar(50) NOT NULL COMMENT \'顾客姓名\',
  `juanname` varchar(50) NOT NULL COMMENT \'优惠卷名称\',
  `juancost` int(5) NOT NULL COMMENT \'面值\',
  `juanlimitcost` int(5) NOT NULL COMMENT \'限制金额\',
  `endtime` int(11) NOT NULL COMMENT \'过期时间\',
  `lqstatus` int(11) NOT NULL COMMENT \'领取状态\',
  `status` int(5) NOT NULL COMMENT \'状态\',
  `juanshu` int(5) NOT NULL COMMENT \'优惠卷数量\',
  `usetime` int(11) NOT NULL COMMENT \'优惠卷使用时间\',
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=3 DEFAULT CHARSET=utf8',
)?>