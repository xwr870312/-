<?php return array (
  0 => 'CREATE TABLE `xiaozu_paytype` (
  `id` int(20) NOT NULL AUTO_INCREMENT,
  `name` varchar(100) NOT NULL,
  `arrayset` text NOT NULL,
  `is_plug` int(1) NOT NULL COMMENT \'0不调用接口，1调用接口文件\',
  PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8',
)?>