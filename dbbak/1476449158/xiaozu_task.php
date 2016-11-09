<?php return array (
  0 => 'CREATE TABLE `xiaozu_task` (
  `id` int(20) NOT NULL AUTO_INCREMENT,
  `taskname` varchar(100) NOT NULL,
  `tasktype` int(1) NOT NULL,
  `taskusertype` int(1) NOT NULL,
  `tasklimit` text NOT NULL,
  `start_id` int(20) NOT NULL,
  `end_id` int(20) NOT NULL,
  `content` text NOT NULL,
  `status` int(1) NOT NULL,
  `othercontent` varchar(255) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8',
)?>