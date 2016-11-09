<?php return array (
  0 => 'CREATE TABLE `xiaozu_score_log` (
  `id` int(20) NOT NULL AUTO_INCREMENT,
  `uid` int(20) NOT NULL DEFAULT \'0\',
  `type` int(1) NOT NULL DEFAULT \'0\',
  `score` int(7) NOT NULL DEFAULT \'0\',
  `title` varchar(100) DEFAULT NULL,
  `content` text,
  `addtime` int(12) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8',
)?>