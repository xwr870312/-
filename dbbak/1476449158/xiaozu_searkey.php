<?php return array (
  0 => 'CREATE TABLE `xiaozu_searkey` (
  `type` int(1) NOT NULL COMMENT \'1外卖，2订台，3商城\',
  `goid` int(20) NOT NULL,
  `keycontent` varchar(100) NOT NULL,
  `title` varchar(255) NOT NULL,
  FULLTEXT KEY `keycontent` (`keycontent`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8',
  1 => 'INSERT INTO `xiaozu_searkey`(`type`,`goid`,`keycontent`,`title`) VALUES(\'1\',\'193\',\'wmqjd\',\'外卖旗舰店\')',
  2 => 'INSERT INTO `xiaozu_searkey`(`type`,`goid`,`keycontent`,`title`) VALUES(\'1\',\'193\',\'waimaiqijiandian\',\'外卖旗舰店\')',
  3 => 'INSERT INTO `xiaozu_searkey`(`type`,`goid`,`keycontent`,`title`) VALUES(\'1\',\'198\',\'ybb\',\'云爸爸KFC\')',
  4 => 'INSERT INTO `xiaozu_searkey`(`type`,`goid`,`keycontent`,`title`) VALUES(\'1\',\'198\',\'yunbaba\',\'云爸爸KFC\')',
  5 => 'INSERT INTO `xiaozu_searkey`(`type`,`goid`,`keycontent`,`title`) VALUES(\'1\',\'199\',\'ceshidianpu\',\'测试店铺\')',
  6 => 'INSERT INTO `xiaozu_searkey`(`type`,`goid`,`keycontent`,`title`) VALUES(\'1\',\'199\',\'csdp\',\'测试店铺\')',
)?>