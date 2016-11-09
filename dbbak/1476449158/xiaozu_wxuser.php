<?php return array (
  0 => 'CREATE TABLE `xiaozu_wxuser` (
  `openid` varchar(255) NOT NULL,
  `uid` int(20) NOT NULL,
  `is_bang` int(1) NOT NULL DEFAULT \'0\',
  `wxlat` varchar(255) DEFAULT NULL,
  `wxlng` varchar(255) DEFAULT NULL,
  `access_token` varchar(100) DEFAULT NULL,
  `expires_in` int(12) DEFAULT NULL,
  `refresh_token` varchar(255) DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8',
  1 => 'INSERT INTO `xiaozu_wxuser`(`openid`,`uid`,`is_bang`,`wxlat`,`wxlng`,`access_token`,`expires_in`,`refresh_token`) VALUES(\'orW81t4TB5pxBNEqU-KLtq_4PQKQ\',\'2953\',\'0\',\'\',\'\',\'AA7i9SO4RU0-Dk4J_uEIOeUZyfSuerjxyULx88OhFNu2fMqshhtiDmAIotYSWgI5Gpv58C8ML1EZI4WO7E39TQWvDxNnOiAar1OH\',\'1472712548\',\'Edd8b9QghEzmM3vBbraO7jQBI80ZKsYhwPbYaY9hv94fQ2Sy4N3OuNkHGQIrydU19PEn7JXRpxnGBpR1viwnCJiG_TIvfAvXZKp3IV4uarg\')',
)?>