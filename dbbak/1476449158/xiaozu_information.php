<?php return array (
  0 => 'CREATE TABLE `xiaozu_information` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `title` varchar(200) NOT NULL,
  `img` varchar(255) NOT NULL,
  `addtime` int(11) NOT NULL,
  `orderid` mediumint(11) NOT NULL,
  `content` text NOT NULL,
  `phone` varchar(15) NOT NULL COMMENT \'电话-生活助手页面用-type为2时候\',
  `type` int(1) NOT NULL COMMENT \'type 1为网站通知 2为生活助手\',
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=11 DEFAULT CHARSET=utf8',
  1 => 'INSERT INTO `xiaozu_information`(`id`,`title`,`img`,`addtime`,`orderid`,`content`,`phone`,`type`) VALUES(\'1\',\'为大众提供低门框创业平台，帮助创建零售店升级互联网\',\'/upload/notice/20160327160745131.jpg\',\'1459008000\',\'1\',\'为大众提供低门框创业平台，帮助创建零售店升级互联网为大众提供低门框创业平台，帮助创建零售店升级互联网为大众提供低门框创业平台，帮助创建零售店升级互联网\',\'\',\'1\')',
  2 => 'INSERT INTO `xiaozu_information`(`id`,`title`,`img`,`addtime`,`orderid`,`content`,`phone`,`type`) VALUES(\'8\',\'生活服务测试\',\'\',\'1476201600\',\'1\',\'生活服务测试\',\'15874102541\',\'2\')',
  3 => 'INSERT INTO `xiaozu_information`(`id`,`title`,`img`,`addtime`,`orderid`,`content`,`phone`,`type`) VALUES(\'2\',\'通知2\',\'/upload/notice/20160327160819693.png\',\'1459008000\',\'2\',\'倒萨打算打算的撒111\',\'\',\'1\')',
  4 => 'INSERT INTO `xiaozu_information`(`id`,`title`,`img`,`addtime`,`orderid`,`content`,`phone`,`type`) VALUES(\'4\',\'好运来搬家\',\'/upload/notice/20160328093113836.png\',\'1459094400\',\'1\',\'好运来搬家服务部于1998年，多年来积累了丰富的经验和良好的客户\',\'15738832712\',\'2\')',
  5 => 'INSERT INTO `xiaozu_information`(`id`,`title`,`img`,`addtime`,`orderid`,`content`,`phone`,`type`) VALUES(\'5\',\'光合装饰\',\'/upload/notice/20160328093738136.png\',\'1459094400\',\'1\',\'sddddddd\',\'15738832712\',\'2\')',
  6 => 'INSERT INTO `xiaozu_information`(`id`,`title`,`img`,`addtime`,`orderid`,`content`,`phone`,`type`) VALUES(\'7\',\'网站通知测试\',\'\',\'1475337600\',\'0\',\'网站通知测试\',\'\',\'1\')',
)?>