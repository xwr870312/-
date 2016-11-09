<?php return array (
  0 => 'CREATE TABLE `xiaozu_paylist` (
  `id` int(5) NOT NULL AUTO_INCREMENT,
  `loginname` varchar(10) NOT NULL,
  `logindesc` varchar(100) NOT NULL,
  `logourl` varchar(255) NOT NULL,
  `addmeta` varchar(255) DEFAULT NULL COMMENT \'附加meta内容\',
  `temp` text NOT NULL,
  `type` int(1) NOT NULL DEFAULT \'0\' COMMENT \'0表示网站使用，1表示手机使用\',
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=15 DEFAULT CHARSET=utf8',
  1 => 'INSERT INTO `xiaozu_paylist`(`id`,`loginname`,`logindesc`,`logourl`,`addmeta`,`temp`,`type`) VALUES(\'8\',\'open_acout\',\'余额支付\',\'\',\'\',\'[]\',\'0\')',
  2 => 'INSERT INTO `xiaozu_paylist`(`id`,`loginname`,`logindesc`,`logourl`,`addmeta`,`temp`,`type`) VALUES(\'9\',\'alipay\',\'支付宝\',\'http://192.168.0.101/plug/pay/alipay/images/alipay.gif\',\'\',\'{\\"partner\\":\\"\\",\\"key\\":\\"\\",\\"seller_email\\":\\"\\"}\',\'1\')',
  3 => 'INSERT INTO `xiaozu_paylist`(`id`,`loginname`,`logindesc`,`logourl`,`addmeta`,`temp`,`type`) VALUES(\'10\',\'alimobile\',\'支付宝手机支付\',\'http://192.168.0.117/plug/pay/alimobile/images/\',\'\',\'{\\"partner\\":\\"waimairen\\",\\"key\\":\\"waimairen\\",\\"seller_email\\":\\"waimairen@qq.com\\"}\',\'2\')',
  4 => 'INSERT INTO `xiaozu_paylist`(`id`,`loginname`,`logindesc`,`logourl`,`addmeta`,`temp`,`type`) VALUES(\'12\',\'weixin\',\'微信支付\',\'http://ts.dearsure.com/plug/pay/weixin/images/\',\'\',\'[]\',\'2\')',
  5 => 'INSERT INTO `xiaozu_paylist`(`id`,`loginname`,`logindesc`,`logourl`,`addmeta`,`temp`,`type`) VALUES(\'13\',\'weixinapp\',\'微信支付app\',\'http://ts.dearsure.com/plug/pay/weixinapp/images/\',\'\',\'[]\',\'2\')',
  6 => 'INSERT INTO `xiaozu_paylist`(`id`,`loginname`,`logindesc`,`logourl`,`addmeta`,`temp`,`type`) VALUES(\'14\',\'paypal\',\'paypal\',\'http://ts.dearsure.com/plug/pay/paypal/images/btn_buynowCC_LG.gif\',\'\',\'{\\"business\\":\\"\\",\\"currency_code\\":\\"\\"}\',\'0\')',
)?>