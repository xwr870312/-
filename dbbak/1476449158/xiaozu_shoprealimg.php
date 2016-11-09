<?php return array (
  0 => 'CREATE TABLE `xiaozu_shoprealimg` (
  `id` int(20) NOT NULL AUTO_INCREMENT,
  `parent_id` int(20) NOT NULL,
  `img` varchar(250) NOT NULL,
  `imgname` varchar(250) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=4 DEFAULT CHARSET=utf8',
  1 => 'INSERT INTO `xiaozu_shoprealimg`(`id`,`parent_id`,`img`,`imgname`) VALUES(\'1\',\'1\',\'/upload/shoprealimg/20160331120717693.png\',\'20160331120717693.png\')',
  2 => 'INSERT INTO `xiaozu_shoprealimg`(`id`,`parent_id`,`img`,`imgname`) VALUES(\'2\',\'1\',\'/upload/shoprealimg/20160331120717286.png\',\'20160331120717286.png\')',
  3 => 'INSERT INTO `xiaozu_shoprealimg`(`id`,`parent_id`,`img`,`imgname`) VALUES(\'3\',\'2\',\'/upload/shoprealimg/20160331120739241.png\',\'20160331120739241.png\')',
)?>