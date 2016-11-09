<?php return array (
  0 => 'CREATE TABLE `xiaozu_gift` (
  `id` int(20) NOT NULL AUTO_INCREMENT,
  `market_cost` decimal(10,2) NOT NULL,
  `score` int(7) NOT NULL DEFAULT \'0\',
  `title` varchar(100) DEFAULT NULL,
  `content` text,
  `typeid` int(10) NOT NULL DEFAULT \'0\',
  `sell_count` int(5) NOT NULL DEFAULT \'0\' COMMENT \'销售数量\',
  `stock` int(6) NOT NULL DEFAULT \'0\' COMMENT \'库存\',
  `img` varchar(100) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=4 DEFAULT CHARSET=utf8',
  1 => 'INSERT INTO `xiaozu_gift`(`id`,`market_cost`,`score`,`title`,`content`,`typeid`,`sell_count`,`stock`,`img`) VALUES(\'2\',\'80.00\',\'100\',\'熊猫公仔\',\'聚宝盒：专注收集各种大小钱币、灵气、运气、财运等等\',\'1\',\'11\',\'99\',\'/upload/goods/20160110153733471.jpg\')',
  2 => 'INSERT INTO `xiaozu_gift`(`id`,`market_cost`,`score`,`title`,`content`,`typeid`,`sell_count`,`stock`,`img`) VALUES(\'3\',\'168.00\',\'500\',\'大白\',\'<span style=\\"color:#333333;font-family:arial, 宋体, sans-serif;font-size:14px;line-height:24px;text-indent:28px;\\">大白（Baymax），迪士尼动画《</span><a target=\\"_blank\\" href=\\"http://baike.baidu.com/view/12135859.htm\\" style=\\"color:#136ec2;text-decoration:none;font-family:arial, 宋体, sans-serif;font-size:14px;line-height:24px;text-indent:28px;\\">超能陆战队</a><span style=\\"color:#333333;font-family:arial, 宋体, sans-serif;font-size:14px;line-height:24px;text-indent:28px;\\">》中的健康机器人，是一个体型胖胖的充气机器人，因呆萌的外表和善良的本质获得大家的喜爱，被称为“萌神”。</span>\',\'1\',\'20\',\'81\',\'/upload/goods/20160110153942795.jpg\')',
)?>