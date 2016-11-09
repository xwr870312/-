<?php return array (
  0 => 'CREATE TABLE `xiaozu_goodssign` (
  `id` int(10) NOT NULL AUTO_INCREMENT,
  `name` varchar(50) NOT NULL,
  `imgurl` varchar(255) DEFAULT NULL,
  `type` varchar(50) DEFAULT NULL COMMENT \'goods商品,shop店铺,cx促销3类型\',
  `instro` varchar(100) DEFAULT NULL COMMENT \'说明\',
  `typevalue` int(1) NOT NULL DEFAULT \'0\' COMMENT \'0无,1新品，2热门，3推荐\',
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=10 DEFAULT CHARSET=utf8',
  1 => 'INSERT INTO `xiaozu_goodssign`(`id`,`name`,`imgurl`,`type`,`instro`,`typevalue`) VALUES(\'7\',\'新品推荐\',\'/upload/goods/20160111104451851.png\',\'cx\',\'新品推荐\',\'0\')',
  2 => 'INSERT INTO `xiaozu_goodssign`(`id`,`name`,`imgurl`,`type`,`instro`,`typevalue`) VALUES(\'3\',\'在线支付\',\'/upload/goods/20160110164634919.png\',\'cx\',\'在线支付\',\'0\')',
  3 => 'INSERT INTO `xiaozu_goodssign`(`id`,`name`,`imgurl`,`type`,`instro`,`typevalue`) VALUES(\'4\',\'减\',\'/upload/goods/20160111104541554.png\',\'cx\',\'减\',\'0\')',
  4 => 'INSERT INTO `xiaozu_goodssign`(`id`,`name`,`imgurl`,`type`,`instro`,`typevalue`) VALUES(\'5\',\'券\',\'/upload/goods/20160111104558907.png\',\'cx\',\'券\',\'0\')',
  5 => 'INSERT INTO `xiaozu_goodssign`(`id`,`name`,`imgurl`,`type`,`instro`,`typevalue`) VALUES(\'9\',\'超时赔付\',\'/upload/goods/20160111104624365.png\',\'cx\',\'超时赔付\',\'0\')',
)?>