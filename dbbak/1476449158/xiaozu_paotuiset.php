<?php return array (
  0 => 'CREATE TABLE `xiaozu_paotuiset` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `kg` varchar(20) NOT NULL,
  `kgcost` decimal(10,2) NOT NULL,
  `addkg` varchar(20) NOT NULL,
  `addkgcost` decimal(10,2) NOT NULL,
  `km` varchar(20) NOT NULL,
  `kmcost` decimal(10,2) NOT NULL,
  `addkm` varchar(20) NOT NULL,
  `addkmcost` decimal(10,2) NOT NULL,
  `postdate` text NOT NULL COMMENT \'跑腿取件或者收货时间\',
  `is_ptorderbefore` int(1) NOT NULL DEFAULT \'1\' COMMENT \'是否支持预定默认为1 支持预定\',
  `pt_orderday` int(11) NOT NULL DEFAULT \'1\' COMMENT \'预定天数 默认为1支持预定1天\',
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=2 DEFAULT CHARSET=utf8',
  1 => 'INSERT INTO `xiaozu_paotuiset`(`id`,`kg`,`kgcost`,`addkg`,`addkgcost`,`km`,`kmcost`,`addkm`,`addkmcost`,`postdate`,`is_ptorderbefore`,`pt_orderday`) VALUES(\'1\',\'5\',\'10.00\',\'2\',\'2.00\',\'1\',\'2.50\',\'2\',\'10.00\',\'a:9:{i:0;a:3:{s:1:\\"s\\";i:21600;s:1:\\"e\\";i:28800;s:1:\\"i\\";s:0:\\"\\";}i:1;a:3:{s:1:\\"s\\";i:28800;s:1:\\"e\\";i:36000;s:1:\\"i\\";s:0:\\"\\";}i:2;a:3:{s:1:\\"s\\";i:36000;s:1:\\"e\\";i:43200;s:1:\\"i\\";s:0:\\"\\";}i:3;a:3:{s:1:\\"s\\";i:43200;s:1:\\"e\\";i:50400;s:1:\\"i\\";s:0:\\"\\";}i:4;a:3:{s:1:\\"s\\";i:50400;s:1:\\"e\\";i:57600;s:1:\\"i\\";s:0:\\"\\";}i:5;a:3:{s:1:\\"s\\";i:57600;s:1:\\"e\\";i:64800;s:1:\\"i\\";s:0:\\"\\";}i:6;a:3:{s:1:\\"s\\";i:64800;s:1:\\"e\\";i:72000;s:1:\\"i\\";s:0:\\"\\";}i:7;a:3:{s:1:\\"s\\";i:72000;s:1:\\"e\\";i:79200;s:1:\\"i\\";s:0:\\"\\";}i:8;a:3:{s:1:\\"s\\";i:79200;s:1:\\"e\\";i:86340;s:1:\\"i\\";s:0:\\"\\";}}\',\'1\',\'7\')',
)?>