<?php return array (
  0 => 'CREATE TABLE `xiaozu_wxjuan` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `cartname` varchar(50) NOT NULL COMMENT \'优惠卷名称\',
  `cartdesrc` varchar(255) NOT NULL COMMENT \'优惠卷描述\',
  `status` int(1) NOT NULL DEFAULT \'0\' COMMENT \'0未使用，1已绑定，2已使用，3无效\',
  `cost` int(5) NOT NULL COMMENT \'优惠金额\',
  `limitcost` int(5) NOT NULL COMMENT \'最低消费限制金额\',
  `creattime` int(11) NOT NULL DEFAULT \'0\' COMMENT \'制造时间\',
  `endtime` int(11) NOT NULL DEFAULT \'0\' COMMENT \'失效时间\',
  `lqrule` varchar(50) NOT NULL COMMENT \'lqrule\',
  `limitdayshu` int(11) NOT NULL COMMENT \'限制每天领取次数\',
  `limitzongshu` int(11) NOT NULL COMMENT \'限制总共领取次数\',
  `lqlink` varchar(255) NOT NULL COMMENT \'领取连接\',
  `sharetitle` varchar(255) NOT NULL COMMENT \'分享标题\',
  `sharezhaiy` varchar(255) NOT NULL COMMENT \'分享摘要\',
  `shareimg` varchar(255) NOT NULL COMMENT \'分享图片\',
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=6 DEFAULT CHARSET=utf8',
)?>