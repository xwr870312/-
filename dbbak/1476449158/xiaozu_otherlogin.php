<?php return array (
  0 => 'CREATE TABLE `xiaozu_otherlogin` (
  `id` int(5) NOT NULL AUTO_INCREMENT,
  `loginname` varchar(10) NOT NULL,
  `logindesc` varchar(100) NOT NULL,
  `logourl` varchar(255) NOT NULL,
  `addmeta` varchar(255) DEFAULT NULL COMMENT \'附加meta内容\',
  `temp` text NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=4 DEFAULT CHARSET=utf8',
  1 => 'INSERT INTO `xiaozu_otherlogin`(`id`,`loginname`,`logindesc`,`logourl`,`addmeta`,`temp`) VALUES(\'3\',\'qq\',\'QQ登录接口\',\'http://192.168.0.104/plug/login/qq/images/qqb.png\',\'\',\'{\\"appid\\":\\"\\",\\"appkey\\":\\"\\",\\"callback\\":\\"http://192.168.0.104/index.php?ctrl=member&action=otherlogin&logintype=qq\\",\\"storageType\\":\\"file\\",\\"host\\":\\"localhost\\",\\"user\\":\\"root\\",\\"password\\":\\"root\\",\\"database\\":\\"test\\",\\"scope\\":\\"get_user_info\\",\\"errorReport\\":false}\')',
  2 => 'INSERT INTO `xiaozu_otherlogin`(`id`,`loginname`,`logindesc`,`logourl`,`addmeta`,`temp`) VALUES(\'2\',\'sina\',\'新浪登陆接口\',\'http://192.168.0.104/plug/login/sina/images/loginbtn_03.png\',\'\',\'{\\"appid\\":\\"\\",\\"appkey\\":\\"\\",\\"callback\\":\\"http://192.168.0.104/index.php?ctrl=member&action=otherlogin&logintype=sina\\"}\')',
)?>