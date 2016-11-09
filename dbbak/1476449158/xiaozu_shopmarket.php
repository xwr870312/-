<?php return array (
  0 => 'CREATE TABLE `xiaozu_shopmarket` (
  `shopid` int(20) NOT NULL,
  `is_orderbefore` tinyint(1) NOT NULL DEFAULT \'0\' COMMENT \'0不支持提前预定，1支持\',
  `delaytime` int(5) NOT NULL DEFAULT \'0\' COMMENT \'营业时间和下单时间补差\',
  `limitcost` int(3) NOT NULL DEFAULT \'0\' COMMENT \'起送价格\',
  `limitstro` varchar(255) DEFAULT NULL COMMENT \'起送说明\',
  `befortime` int(1) NOT NULL DEFAULT \'0\' COMMENT \'起送提前天数\',
  `sendtype` tinyint(1) NOT NULL DEFAULT \'0\' COMMENT \'0网站配送，1自行配送\',
  `is_hot` int(1) NOT NULL DEFAULT \'0\' COMMENT \'热卖\',
  `is_com` int(1) NOT NULL DEFAULT \'0\' COMMENT \'推荐\',
  `is_new` int(1) NOT NULL COMMENT \'新店\',
  `maketime` int(5) DEFAULT \'0\',
  `pradius` int(1) NOT NULL DEFAULT \'1\',
  `pradiusvalue` text,
  `pscost` int(2) DEFAULT \'0\',
  `arrivetime` varchar(20) DEFAULT NULL,
  `postdate` text,
  `is_hui` int(1) NOT NULL DEFAULT \'0\' COMMENT \'管理员开启闪惠默认0为未开启 1开启\',
  `is_shophui` int(1) NOT NULL DEFAULT \'0\' COMMENT \'商家开启闪惠默认0为未开启 1开启\',
  `is_shgift` int(1) NOT NULL DEFAULT \'0\' COMMENT \'商家是否开启送积分\',
  `sendgift` int(11) NOT NULL COMMENT \'多少元赠送1积分\',
  `interval_minit` int(2) NOT NULL DEFAULT \'30\' COMMENT \'分钟数\',
  `is_sendqianjuan` int(1) NOT NULL DEFAULT \'0\' COMMENT \'是否下单前领取代金券 默认0关闭\',
  `is_sendhoujuan` int(1) NOT NULL DEFAULT \'0\' COMMENT \'是否下单后赠送代金券 默认0关闭\',
  UNIQUE KEY `shopid` (`shopid`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8',
  1 => 'INSERT INTO `xiaozu_shopmarket`(`shopid`,`is_orderbefore`,`delaytime`,`limitcost`,`limitstro`,`befortime`,`sendtype`,`is_hot`,`is_com`,`is_new`,`maketime`,`pradius`,`pradiusvalue`,`pscost`,`arrivetime`,`postdate`,`is_hui`,`is_shophui`,`is_shgift`,`sendgift`,`interval_minit`,`is_sendqianjuan`,`is_sendhoujuan`) VALUES(\'4\',\'0\',\'0\',\'0\',\'\',\'0\',\'0\',\'0\',\'0\',\'0\',\'0\',\'1\',\'\',\'0\',\'\',\'a:41:{i:0;a:3:{s:1:\\"s\\";i:36000;s:1:\\"e\\";i:37200;s:1:\\"i\\";s:0:\\"\\";}i:1;a:3:{s:1:\\"s\\";i:37200;s:1:\\"e\\";i:38400;s:1:\\"i\\";s:0:\\"\\";}i:2;a:3:{s:1:\\"s\\";i:38400;s:1:\\"e\\";i:39600;s:1:\\"i\\";s:0:\\"\\";}i:3;a:3:{s:1:\\"s\\";i:39600;s:1:\\"e\\";i:40800;s:1:\\"i\\";s:0:\\"\\";}i:4;a:3:{s:1:\\"s\\";i:40800;s:1:\\"e\\";i:42000;s:1:\\"i\\";s:0:\\"\\";}i:5;a:3:{s:1:\\"s\\";i:42000;s:1:\\"e\\";i:43200;s:1:\\"i\\";s:0:\\"\\";}i:6;a:3:{s:1:\\"s\\";i:43200;s:1:\\"e\\";i:44400;s:1:\\"i\\";s:0:\\"\\";}i:7;a:3:{s:1:\\"s\\";i:44400;s:1:\\"e\\";i:45600;s:1:\\"i\\";s:0:\\"\\";}i:8;a:3:{s:1:\\"s\\";i:45600;s:1:\\"e\\";i:46800;s:1:\\"i\\";s:0:\\"\\";}i:9;a:3:{s:1:\\"s\\";i:46800;s:1:\\"e\\";i:48000;s:1:\\"i\\";s:0:\\"\\";}i:10;a:3:{s:1:\\"s\\";i:48000;s:1:\\"e\\";i:49200;s:1:\\"i\\";s:0:\\"\\";}i:11;a:3:{s:1:\\"s\\";i:49200;s:1:\\"e\\";i:50400;s:1:\\"i\\";s:0:\\"\\";}i:12;a:3:{s:1:\\"s\\";i:50400;s:1:\\"e\\";i:51600;s:1:\\"i\\";s:0:\\"\\";}i:13;a:3:{s:1:\\"s\\";i:51600;s:1:\\"e\\";i:52800;s:1:\\"i\\";s:0:\\"\\";}i:14;a:3:{s:1:\\"s\\";i:52800;s:1:\\"e\\";i:54000;s:1:\\"i\\";s:0:\\"\\";}i:15;a:3:{s:1:\\"s\\";i:54000;s:1:\\"e\\";i:55200;s:1:\\"i\\";s:0:\\"\\";}i:16;a:3:{s:1:\\"s\\";i:55200;s:1:\\"e\\";i:56400;s:1:\\"i\\";s:0:\\"\\";}i:17;a:3:{s:1:\\"s\\";i:56400;s:1:\\"e\\";i:57600;s:1:\\"i\\";s:0:\\"\\";}i:18;a:3:{s:1:\\"s\\";i:57600;s:1:\\"e\\";i:58800;s:1:\\"i\\";s:0:\\"\\";}i:19;a:3:{s:1:\\"s\\";i:58800;s:1:\\"e\\";i:60000;s:1:\\"i\\";s:0:\\"\\";}i:20;a:3:{s:1:\\"s\\";i:60000;s:1:\\"e\\";i:61200;s:1:\\"i\\";s:0:\\"\\";}i:21;a:3:{s:1:\\"s\\";i:61200;s:1:\\"e\\";i:62400;s:1:\\"i\\";s:0:\\"\\";}i:22;a:3:{s:1:\\"s\\";i:62400;s:1:\\"e\\";i:63600;s:1:\\"i\\";s:0:\\"\\";}i:23;a:3:{s:1:\\"s\\";i:63600;s:1:\\"e\\";i:64800;s:1:\\"i\\";s:0:\\"\\";}i:24;a:3:{s:1:\\"s\\";i:64800;s:1:\\"e\\";i:66000;s:1:\\"i\\";s:0:\\"\\";}i:25;a:3:{s:1:\\"s\\";i:66000;s:1:\\"e\\";i:67200;s:1:\\"i\\";s:0:\\"\\";}i:26;a:3:{s:1:\\"s\\";i:67200;s:1:\\"e\\";i:68400;s:1:\\"i\\";s:0:\\"\\";}i:27;a:3:{s:1:\\"s\\";i:68400;s:1:\\"e\\";i:69600;s:1:\\"i\\";s:0:\\"\\";}i:28;a:3:{s:1:\\"s\\";i:69600;s:1:\\"e\\";i:70800;s:1:\\"i\\";s:0:\\"\\";}i:29;a:3:{s:1:\\"s\\";i:70800;s:1:\\"e\\";i:72000;s:1:\\"i\\";s:0:\\"\\";}i:30;a:3:{s:1:\\"s\\";i:72000;s:1:\\"e\\";i:73200;s:1:\\"i\\";s:0:\\"\\";}i:31;a:3:{s:1:\\"s\\";i:73200;s:1:\\"e\\";i:74400;s:1:\\"i\\";s:0:\\"\\";}i:32;a:3:{s:1:\\"s\\";i:74400;s:1:\\"e\\";i:75600;s:1:\\"i\\";s:0:\\"\\";}i:33;a:3:{s:1:\\"s\\";i:75600;s:1:\\"e\\";i:76800;s:1:\\"i\\";s:0:\\"\\";}i:34;a:3:{s:1:\\"s\\";i:76800;s:1:\\"e\\";i:78000;s:1:\\"i\\";s:0:\\"\\";}i:35;a:3:{s:1:\\"s\\";i:78000;s:1:\\"e\\";i:79200;s:1:\\"i\\";s:0:\\"\\";}i:36;a:3:{s:1:\\"s\\";i:79200;s:1:\\"e\\";i:80400;s:1:\\"i\\";s:0:\\"\\";}i:37;a:3:{s:1:\\"s\\";i:80400;s:1:\\"e\\";i:81600;s:1:\\"i\\";s:0:\\"\\";}i:38;a:3:{s:1:\\"s\\";i:81600;s:1:\\"e\\";i:82800;s:1:\\"i\\";s:0:\\"\\";}i:39;a:3:{s:1:\\"s\\";i:82800;s:1:\\"e\\";i:84000;s:1:\\"i\\";s:0:\\"\\";}i:40;a:3:{s:1:\\"s\\";i:84000;s:1:\\"e\\";i:85200;s:1:\\"i\\";s:0:\\"\\";}}\',\'0\',\'0\',\'0\',\'0\',\'30\',\'0\',\'0\')',
  2 => 'INSERT INTO `xiaozu_shopmarket`(`shopid`,`is_orderbefore`,`delaytime`,`limitcost`,`limitstro`,`befortime`,`sendtype`,`is_hot`,`is_com`,`is_new`,`maketime`,`pradius`,`pradiusvalue`,`pscost`,`arrivetime`,`postdate`,`is_hui`,`is_shophui`,`is_shgift`,`sendgift`,`interval_minit`,`is_sendqianjuan`,`is_sendhoujuan`) VALUES(\'103\',\'1\',\'0\',\'0\',\'\',\'0\',\'0\',\'0\',\'0\',\'0\',\'0\',\'10\',\'a:10:{i:0;i:3;i:1;i:0;i:2;i:0;i:3;i:0;i:4;i:0;i:5;i:0;i:6;i:0;i:7;i:0;i:8;i:0;i:9;i:0;}\',\'1\',\'59分钟\',\'a:48:{i:0;a:4:{s:1:\\"s\\";i:60;s:1:\\"e\\";i:1860;s:1:\\"i\\";s:0:\\"\\";s:4:\\"cost\\";s:0:\\"\\";}i:1;a:4:{s:1:\\"s\\";i:1860;s:1:\\"e\\";i:3660;s:1:\\"i\\";s:0:\\"\\";s:4:\\"cost\\";s:0:\\"\\";}i:2;a:4:{s:1:\\"s\\";i:3660;s:1:\\"e\\";i:5460;s:1:\\"i\\";s:0:\\"\\";s:4:\\"cost\\";s:0:\\"\\";}i:3;a:4:{s:1:\\"s\\";i:5460;s:1:\\"e\\";i:7260;s:1:\\"i\\";s:0:\\"\\";s:4:\\"cost\\";s:0:\\"\\";}i:4;a:4:{s:1:\\"s\\";i:7260;s:1:\\"e\\";i:9060;s:1:\\"i\\";s:0:\\"\\";s:4:\\"cost\\";s:0:\\"\\";}i:5;a:4:{s:1:\\"s\\";i:9060;s:1:\\"e\\";i:10860;s:1:\\"i\\";s:0:\\"\\";s:4:\\"cost\\";s:0:\\"\\";}i:6;a:4:{s:1:\\"s\\";i:10860;s:1:\\"e\\";i:12660;s:1:\\"i\\";s:0:\\"\\";s:4:\\"cost\\";s:0:\\"\\";}i:7;a:4:{s:1:\\"s\\";i:12660;s:1:\\"e\\";i:14460;s:1:\\"i\\";s:0:\\"\\";s:4:\\"cost\\";s:0:\\"\\";}i:8;a:4:{s:1:\\"s\\";i:14460;s:1:\\"e\\";i:16260;s:1:\\"i\\";s:0:\\"\\";s:4:\\"cost\\";s:0:\\"\\";}i:9;a:4:{s:1:\\"s\\";i:16260;s:1:\\"e\\";i:18060;s:1:\\"i\\";s:0:\\"\\";s:4:\\"cost\\";s:0:\\"\\";}i:10;a:4:{s:1:\\"s\\";i:18060;s:1:\\"e\\";i:19860;s:1:\\"i\\";s:0:\\"\\";s:4:\\"cost\\";s:0:\\"\\";}i:11;a:4:{s:1:\\"s\\";i:19860;s:1:\\"e\\";i:21660;s:1:\\"i\\";s:0:\\"\\";s:4:\\"cost\\";s:0:\\"\\";}i:12;a:4:{s:1:\\"s\\";i:21660;s:1:\\"e\\";i:23460;s:1:\\"i\\";s:0:\\"\\";s:4:\\"cost\\";s:0:\\"\\";}i:13;a:4:{s:1:\\"s\\";i:23460;s:1:\\"e\\";i:25260;s:1:\\"i\\";s:0:\\"\\";s:4:\\"cost\\";s:0:\\"\\";}i:14;a:4:{s:1:\\"s\\";i:25260;s:1:\\"e\\";i:27060;s:1:\\"i\\";s:0:\\"\\";s:4:\\"cost\\";s:0:\\"\\";}i:15;a:4:{s:1:\\"s\\";i:27060;s:1:\\"e\\";i:28860;s:1:\\"i\\";s:0:\\"\\";s:4:\\"cost\\";s:0:\\"\\";}i:16;a:4:{s:1:\\"s\\";i:28860;s:1:\\"e\\";i:30660;s:1:\\"i\\";s:0:\\"\\";s:4:\\"cost\\";s:0:\\"\\";}i:17;a:4:{s:1:\\"s\\";i:30660;s:1:\\"e\\";i:32460;s:1:\\"i\\";s:0:\\"\\";s:4:\\"cost\\";s:0:\\"\\";}i:18;a:4:{s:1:\\"s\\";i:32460;s:1:\\"e\\";i:34260;s:1:\\"i\\";s:0:\\"\\";s:4:\\"cost\\";s:0:\\"\\";}i:19;a:4:{s:1:\\"s\\";i:34260;s:1:\\"e\\";i:36060;s:1:\\"i\\";s:0:\\"\\";s:4:\\"cost\\";s:0:\\"\\";}i:20;a:4:{s:1:\\"s\\";i:36060;s:1:\\"e\\";i:37860;s:1:\\"i\\";s:0:\\"\\";s:4:\\"cost\\";s:0:\\"\\";}i:21;a:4:{s:1:\\"s\\";i:37860;s:1:\\"e\\";i:39660;s:1:\\"i\\";s:0:\\"\\";s:4:\\"cost\\";s:0:\\"\\";}i:22;a:4:{s:1:\\"s\\";i:39660;s:1:\\"e\\";i:41460;s:1:\\"i\\";s:0:\\"\\";s:4:\\"cost\\";s:0:\\"\\";}i:23;a:4:{s:1:\\"s\\";i:41460;s:1:\\"e\\";i:43260;s:1:\\"i\\";s:0:\\"\\";s:4:\\"cost\\";s:0:\\"\\";}i:24;a:4:{s:1:\\"s\\";i:43260;s:1:\\"e\\";i:45060;s:1:\\"i\\";s:0:\\"\\";s:4:\\"cost\\";s:0:\\"\\";}i:25;a:4:{s:1:\\"s\\";i:45060;s:1:\\"e\\";i:46860;s:1:\\"i\\";s:0:\\"\\";s:4:\\"cost\\";s:0:\\"\\";}i:26;a:4:{s:1:\\"s\\";i:46860;s:1:\\"e\\";i:48660;s:1:\\"i\\";s:0:\\"\\";s:4:\\"cost\\";s:0:\\"\\";}i:27;a:4:{s:1:\\"s\\";i:48660;s:1:\\"e\\";i:50460;s:1:\\"i\\";s:0:\\"\\";s:4:\\"cost\\";s:0:\\"\\";}i:28;a:4:{s:1:\\"s\\";i:50460;s:1:\\"e\\";i:52260;s:1:\\"i\\";s:0:\\"\\";s:4:\\"cost\\";s:0:\\"\\";}i:29;a:4:{s:1:\\"s\\";i:52260;s:1:\\"e\\";i:54060;s:1:\\"i\\";s:0:\\"\\";s:4:\\"cost\\";s:0:\\"\\";}i:30;a:4:{s:1:\\"s\\";i:54060;s:1:\\"e\\";i:55860;s:1:\\"i\\";s:0:\\"\\";s:4:\\"cost\\";s:0:\\"\\";}i:31;a:4:{s:1:\\"s\\";i:55860;s:1:\\"e\\";i:57660;s:1:\\"i\\";s:0:\\"\\";s:4:\\"cost\\";s:0:\\"\\";}i:32;a:4:{s:1:\\"s\\";i:57660;s:1:\\"e\\";i:59460;s:1:\\"i\\";s:0:\\"\\";s:4:\\"cost\\";s:0:\\"\\";}i:33;a:4:{s:1:\\"s\\";i:59460;s:1:\\"e\\";i:61260;s:1:\\"i\\";s:0:\\"\\";s:4:\\"cost\\";s:0:\\"\\";}i:34;a:4:{s:1:\\"s\\";i:61260;s:1:\\"e\\";i:63060;s:1:\\"i\\";s:0:\\"\\";s:4:\\"cost\\";s:0:\\"\\";}i:35;a:4:{s:1:\\"s\\";i:63060;s:1:\\"e\\";i:64860;s:1:\\"i\\";s:0:\\"\\";s:4:\\"cost\\";s:0:\\"\\";}i:36;a:4:{s:1:\\"s\\";i:64860;s:1:\\"e\\";i:66660;s:1:\\"i\\";s:0:\\"\\";s:4:\\"cost\\";s:0:\\"\\";}i:37;a:4:{s:1:\\"s\\";i:66660;s:1:\\"e\\";i:68460;s:1:\\"i\\";s:0:\\"\\";s:4:\\"cost\\";s:0:\\"\\";}i:38;a:4:{s:1:\\"s\\";i:68460;s:1:\\"e\\";i:70260;s:1:\\"i\\";s:0:\\"\\";s:4:\\"cost\\";s:0:\\"\\";}i:39;a:4:{s:1:\\"s\\";i:70260;s:1:\\"e\\";i:72060;s:1:\\"i\\";s:0:\\"\\";s:4:\\"cost\\";s:0:\\"\\";}i:40;a:4:{s:1:\\"s\\";i:72060;s:1:\\"e\\";i:73860;s:1:\\"i\\";s:0:\\"\\";s:4:\\"cost\\";s:0:\\"\\";}i:41;a:4:{s:1:\\"s\\";i:73860;s:1:\\"e\\";i:75660;s:1:\\"i\\";s:0:\\"\\";s:4:\\"cost\\";s:0:\\"\\";}i:42;a:4:{s:1:\\"s\\";i:75660;s:1:\\"e\\";i:77460;s:1:\\"i\\";s:0:\\"\\";s:4:\\"cost\\";s:0:\\"\\";}i:43;a:4:{s:1:\\"s\\";i:77460;s:1:\\"e\\";i:79260;s:1:\\"i\\";s:0:\\"\\";s:4:\\"cost\\";s:0:\\"\\";}i:44;a:4:{s:1:\\"s\\";i:79260;s:1:\\"e\\";i:81060;s:1:\\"i\\";s:0:\\"\\";s:4:\\"cost\\";s:0:\\"\\";}i:45;a:4:{s:1:\\"s\\";i:81060;s:1:\\"e\\";i:82860;s:1:\\"i\\";s:0:\\"\\";s:4:\\"cost\\";s:0:\\"\\";}i:46;a:4:{s:1:\\"s\\";i:82860;s:1:\\"e\\";i:84660;s:1:\\"i\\";s:0:\\"\\";s:4:\\"cost\\";s:0:\\"\\";}i:47;a:4:{s:1:\\"s\\";i:84660;s:1:\\"e\\";i:86340;s:1:\\"i\\";s:0:\\"\\";s:4:\\"cost\\";s:0:\\"\\";}}\',\'0\',\'0\',\'0\',\'0\',\'30\',\'0\',\'0\')',
  3 => 'INSERT INTO `xiaozu_shopmarket`(`shopid`,`is_orderbefore`,`delaytime`,`limitcost`,`limitstro`,`befortime`,`sendtype`,`is_hot`,`is_com`,`is_new`,`maketime`,`pradius`,`pradiusvalue`,`pscost`,`arrivetime`,`postdate`,`is_hui`,`is_shophui`,`is_shgift`,`sendgift`,`interval_minit`,`is_sendqianjuan`,`is_sendhoujuan`) VALUES(\'180\',\'0\',\'0\',\'0\',\'\',\'0\',\'0\',\'0\',\'0\',\'0\',\'0\',\'1\',\'\',\'0\',\'\',\'\',\'0\',\'0\',\'0\',\'0\',\'30\',\'0\',\'0\')',
  4 => 'INSERT INTO `xiaozu_shopmarket`(`shopid`,`is_orderbefore`,`delaytime`,`limitcost`,`limitstro`,`befortime`,`sendtype`,`is_hot`,`is_com`,`is_new`,`maketime`,`pradius`,`pradiusvalue`,`pscost`,`arrivetime`,`postdate`,`is_hui`,`is_shophui`,`is_shgift`,`sendgift`,`interval_minit`,`is_sendqianjuan`,`is_sendhoujuan`) VALUES(\'182\',\'0\',\'0\',\'0\',\'\',\'0\',\'0\',\'0\',\'0\',\'0\',\'0\',\'1\',\'\',\'0\',\'\',\'\',\'0\',\'0\',\'0\',\'0\',\'30\',\'0\',\'0\')',
  5 => 'INSERT INTO `xiaozu_shopmarket`(`shopid`,`is_orderbefore`,`delaytime`,`limitcost`,`limitstro`,`befortime`,`sendtype`,`is_hot`,`is_com`,`is_new`,`maketime`,`pradius`,`pradiusvalue`,`pscost`,`arrivetime`,`postdate`,`is_hui`,`is_shophui`,`is_shgift`,`sendgift`,`interval_minit`,`is_sendqianjuan`,`is_sendhoujuan`) VALUES(\'195\',\'1\',\'0\',\'0\',\'\',\'0\',\'0\',\'0\',\'0\',\'0\',\'0\',\'0\',\'a:0:{}\',\'0\',\'\',\'a:32:{i:0;a:4:{s:1:\\"s\\";i:28800;s:1:\\"e\\";i:30600;s:1:\\"i\\";s:0:\\"\\";s:4:\\"cost\\";s:1:\\"0\\";}i:1;a:4:{s:1:\\"s\\";i:30600;s:1:\\"e\\";i:32400;s:1:\\"i\\";s:0:\\"\\";s:4:\\"cost\\";s:1:\\"0\\";}i:2;a:4:{s:1:\\"s\\";i:32400;s:1:\\"e\\";i:34200;s:1:\\"i\\";s:0:\\"\\";s:4:\\"cost\\";s:1:\\"0\\";}i:3;a:4:{s:1:\\"s\\";i:34200;s:1:\\"e\\";i:36000;s:1:\\"i\\";s:0:\\"\\";s:4:\\"cost\\";s:1:\\"0\\";}i:4;a:4:{s:1:\\"s\\";i:36000;s:1:\\"e\\";i:37800;s:1:\\"i\\";s:0:\\"\\";s:4:\\"cost\\";s:1:\\"0\\";}i:5;a:4:{s:1:\\"s\\";i:37800;s:1:\\"e\\";i:39600;s:1:\\"i\\";s:0:\\"\\";s:4:\\"cost\\";s:1:\\"0\\";}i:6;a:4:{s:1:\\"s\\";i:39600;s:1:\\"e\\";i:41400;s:1:\\"i\\";s:0:\\"\\";s:4:\\"cost\\";s:1:\\"0\\";}i:7;a:4:{s:1:\\"s\\";i:41400;s:1:\\"e\\";i:43200;s:1:\\"i\\";s:0:\\"\\";s:4:\\"cost\\";s:1:\\"0\\";}i:8;a:4:{s:1:\\"s\\";i:43380;s:1:\\"e\\";i:45180;s:1:\\"i\\";s:0:\\"\\";s:4:\\"cost\\";s:1:\\"0\\";}i:9;a:4:{s:1:\\"s\\";i:45180;s:1:\\"e\\";i:46980;s:1:\\"i\\";s:0:\\"\\";s:4:\\"cost\\";s:1:\\"0\\";}i:10;a:4:{s:1:\\"s\\";i:46980;s:1:\\"e\\";i:48780;s:1:\\"i\\";s:0:\\"\\";s:4:\\"cost\\";s:1:\\"0\\";}i:11;a:4:{s:1:\\"s\\";i:48780;s:1:\\"e\\";i:50580;s:1:\\"i\\";s:0:\\"\\";s:4:\\"cost\\";s:1:\\"0\\";}i:12;a:4:{s:1:\\"s\\";i:50580;s:1:\\"e\\";i:52380;s:1:\\"i\\";s:0:\\"\\";s:4:\\"cost\\";s:1:\\"0\\";}i:13;a:4:{s:1:\\"s\\";i:52380;s:1:\\"e\\";i:54180;s:1:\\"i\\";s:0:\\"\\";s:4:\\"cost\\";s:1:\\"0\\";}i:14;a:4:{s:1:\\"s\\";i:54180;s:1:\\"e\\";i:55980;s:1:\\"i\\";s:0:\\"\\";s:4:\\"cost\\";s:1:\\"0\\";}i:15;a:4:{s:1:\\"s\\";i:55980;s:1:\\"e\\";i:57780;s:1:\\"i\\";s:0:\\"\\";s:4:\\"cost\\";s:1:\\"0\\";}i:16;a:4:{s:1:\\"s\\";i:57780;s:1:\\"e\\";i:59580;s:1:\\"i\\";s:0:\\"\\";s:4:\\"cost\\";s:1:\\"0\\";}i:17;a:4:{s:1:\\"s\\";i:59580;s:1:\\"e\\";i:61380;s:1:\\"i\\";s:0:\\"\\";s:4:\\"cost\\";s:1:\\"0\\";}i:18;a:4:{s:1:\\"s\\";i:61380;s:1:\\"e\\";i:63180;s:1:\\"i\\";s:0:\\"\\";s:4:\\"cost\\";s:1:\\"0\\";}i:19;a:4:{s:1:\\"s\\";i:63180;s:1:\\"e\\";i:64980;s:1:\\"i\\";s:0:\\"\\";s:4:\\"cost\\";s:1:\\"0\\";}i:20;a:4:{s:1:\\"s\\";i:64980;s:1:\\"e\\";i:66780;s:1:\\"i\\";s:0:\\"\\";s:4:\\"cost\\";s:1:\\"0\\";}i:21;a:4:{s:1:\\"s\\";i:66780;s:1:\\"e\\";i:68580;s:1:\\"i\\";s:0:\\"\\";s:4:\\"cost\\";s:1:\\"0\\";}i:22;a:4:{s:1:\\"s\\";i:68580;s:1:\\"e\\";i:70380;s:1:\\"i\\";s:0:\\"\\";s:4:\\"cost\\";s:1:\\"0\\";}i:23;a:4:{s:1:\\"s\\";i:70380;s:1:\\"e\\";i:72180;s:1:\\"i\\";s:0:\\"\\";s:4:\\"cost\\";s:1:\\"0\\";}i:24;a:4:{s:1:\\"s\\";i:72180;s:1:\\"e\\";i:73980;s:1:\\"i\\";s:0:\\"\\";s:4:\\"cost\\";s:1:\\"0\\";}i:25;a:4:{s:1:\\"s\\";i:73980;s:1:\\"e\\";i:75780;s:1:\\"i\\";s:0:\\"\\";s:4:\\"cost\\";s:1:\\"0\\";}i:26;a:4:{s:1:\\"s\\";i:75780;s:1:\\"e\\";i:77580;s:1:\\"i\\";s:0:\\"\\";s:4:\\"cost\\";s:1:\\"0\\";}i:27;a:4:{s:1:\\"s\\";i:77580;s:1:\\"e\\";i:79380;s:1:\\"i\\";s:0:\\"\\";s:4:\\"cost\\";s:1:\\"0\\";}i:28;a:4:{s:1:\\"s\\";i:79380;s:1:\\"e\\";i:81180;s:1:\\"i\\";s:0:\\"\\";s:4:\\"cost\\";s:1:\\"0\\";}i:29;a:4:{s:1:\\"s\\";i:81180;s:1:\\"e\\";i:82980;s:1:\\"i\\";s:0:\\"\\";s:4:\\"cost\\";s:1:\\"0\\";}i:30;a:4:{s:1:\\"s\\";i:82980;s:1:\\"e\\";i:84780;s:1:\\"i\\";s:0:\\"\\";s:4:\\"cost\\";s:1:\\"0\\";}i:31;a:4:{s:1:\\"s\\";i:84780;s:1:\\"e\\";i:86280;s:1:\\"i\\";s:0:\\"\\";s:4:\\"cost\\";s:1:\\"0\\";}}\',\'1\',\'1\',\'0\',\'0\',\'30\',\'0\',\'0\')',
  6 => 'INSERT INTO `xiaozu_shopmarket`(`shopid`,`is_orderbefore`,`delaytime`,`limitcost`,`limitstro`,`befortime`,`sendtype`,`is_hot`,`is_com`,`is_new`,`maketime`,`pradius`,`pradiusvalue`,`pscost`,`arrivetime`,`postdate`,`is_hui`,`is_shophui`,`is_shgift`,`sendgift`,`interval_minit`,`is_sendqianjuan`,`is_sendhoujuan`) VALUES(\'197\',\'0\',\'0\',\'0\',\'\',\'0\',\'0\',\'0\',\'0\',\'0\',\'0\',\'1\',\'a:1:{i:0;i:6;}\',\'0\',\'\',\'a:32:{i:0;a:4:{s:1:\\"s\\";i:28800;s:1:\\"e\\";i:30600;s:1:\\"i\\";s:0:\\"\\";s:4:\\"cost\\";s:0:\\"\\";}i:1;a:4:{s:1:\\"s\\";i:30600;s:1:\\"e\\";i:32400;s:1:\\"i\\";s:0:\\"\\";s:4:\\"cost\\";s:0:\\"\\";}i:2;a:4:{s:1:\\"s\\";i:32400;s:1:\\"e\\";i:34200;s:1:\\"i\\";s:0:\\"\\";s:4:\\"cost\\";s:0:\\"\\";}i:3;a:4:{s:1:\\"s\\";i:34200;s:1:\\"e\\";i:36000;s:1:\\"i\\";s:0:\\"\\";s:4:\\"cost\\";s:0:\\"\\";}i:4;a:4:{s:1:\\"s\\";i:36000;s:1:\\"e\\";i:37800;s:1:\\"i\\";s:0:\\"\\";s:4:\\"cost\\";s:0:\\"\\";}i:5;a:4:{s:1:\\"s\\";i:37800;s:1:\\"e\\";i:39600;s:1:\\"i\\";s:0:\\"\\";s:4:\\"cost\\";s:0:\\"\\";}i:6;a:4:{s:1:\\"s\\";i:39600;s:1:\\"e\\";i:41400;s:1:\\"i\\";s:0:\\"\\";s:4:\\"cost\\";s:0:\\"\\";}i:7;a:4:{s:1:\\"s\\";i:41400;s:1:\\"e\\";i:43200;s:1:\\"i\\";s:0:\\"\\";s:4:\\"cost\\";s:0:\\"\\";}i:8;a:4:{s:1:\\"s\\";i:43320;s:1:\\"e\\";i:45120;s:1:\\"i\\";s:0:\\"\\";s:4:\\"cost\\";s:0:\\"\\";}i:9;a:4:{s:1:\\"s\\";i:45120;s:1:\\"e\\";i:46920;s:1:\\"i\\";s:0:\\"\\";s:4:\\"cost\\";s:0:\\"\\";}i:10;a:4:{s:1:\\"s\\";i:46920;s:1:\\"e\\";i:48720;s:1:\\"i\\";s:0:\\"\\";s:4:\\"cost\\";s:0:\\"\\";}i:11;a:4:{s:1:\\"s\\";i:48720;s:1:\\"e\\";i:50520;s:1:\\"i\\";s:0:\\"\\";s:4:\\"cost\\";s:0:\\"\\";}i:12;a:4:{s:1:\\"s\\";i:50520;s:1:\\"e\\";i:52320;s:1:\\"i\\";s:0:\\"\\";s:4:\\"cost\\";s:0:\\"\\";}i:13;a:4:{s:1:\\"s\\";i:52320;s:1:\\"e\\";i:54120;s:1:\\"i\\";s:0:\\"\\";s:4:\\"cost\\";s:0:\\"\\";}i:14;a:4:{s:1:\\"s\\";i:54120;s:1:\\"e\\";i:55920;s:1:\\"i\\";s:0:\\"\\";s:4:\\"cost\\";s:0:\\"\\";}i:15;a:4:{s:1:\\"s\\";i:55920;s:1:\\"e\\";i:57720;s:1:\\"i\\";s:0:\\"\\";s:4:\\"cost\\";s:0:\\"\\";}i:16;a:4:{s:1:\\"s\\";i:57720;s:1:\\"e\\";i:59520;s:1:\\"i\\";s:0:\\"\\";s:4:\\"cost\\";s:0:\\"\\";}i:17;a:4:{s:1:\\"s\\";i:59520;s:1:\\"e\\";i:61320;s:1:\\"i\\";s:0:\\"\\";s:4:\\"cost\\";s:0:\\"\\";}i:18;a:4:{s:1:\\"s\\";i:61320;s:1:\\"e\\";i:63120;s:1:\\"i\\";s:0:\\"\\";s:4:\\"cost\\";s:0:\\"\\";}i:19;a:4:{s:1:\\"s\\";i:63120;s:1:\\"e\\";i:64920;s:1:\\"i\\";s:0:\\"\\";s:4:\\"cost\\";s:0:\\"\\";}i:20;a:4:{s:1:\\"s\\";i:64920;s:1:\\"e\\";i:66720;s:1:\\"i\\";s:0:\\"\\";s:4:\\"cost\\";s:0:\\"\\";}i:21;a:4:{s:1:\\"s\\";i:66720;s:1:\\"e\\";i:68520;s:1:\\"i\\";s:0:\\"\\";s:4:\\"cost\\";s:0:\\"\\";}i:22;a:4:{s:1:\\"s\\";i:68520;s:1:\\"e\\";i:70320;s:1:\\"i\\";s:0:\\"\\";s:4:\\"cost\\";s:0:\\"\\";}i:23;a:4:{s:1:\\"s\\";i:70320;s:1:\\"e\\";i:72120;s:1:\\"i\\";s:0:\\"\\";s:4:\\"cost\\";s:0:\\"\\";}i:24;a:4:{s:1:\\"s\\";i:72120;s:1:\\"e\\";i:73920;s:1:\\"i\\";s:0:\\"\\";s:4:\\"cost\\";s:0:\\"\\";}i:25;a:4:{s:1:\\"s\\";i:73920;s:1:\\"e\\";i:75720;s:1:\\"i\\";s:0:\\"\\";s:4:\\"cost\\";s:0:\\"\\";}i:26;a:4:{s:1:\\"s\\";i:75720;s:1:\\"e\\";i:77520;s:1:\\"i\\";s:0:\\"\\";s:4:\\"cost\\";s:0:\\"\\";}i:27;a:4:{s:1:\\"s\\";i:77520;s:1:\\"e\\";i:79320;s:1:\\"i\\";s:0:\\"\\";s:4:\\"cost\\";s:0:\\"\\";}i:28;a:4:{s:1:\\"s\\";i:79320;s:1:\\"e\\";i:81120;s:1:\\"i\\";s:0:\\"\\";s:4:\\"cost\\";s:0:\\"\\";}i:29;a:4:{s:1:\\"s\\";i:81120;s:1:\\"e\\";i:82920;s:1:\\"i\\";s:0:\\"\\";s:4:\\"cost\\";s:0:\\"\\";}i:30;a:4:{s:1:\\"s\\";i:82920;s:1:\\"e\\";i:84720;s:1:\\"i\\";s:0:\\"\\";s:4:\\"cost\\";s:0:\\"\\";}i:31;a:4:{s:1:\\"s\\";i:84720;s:1:\\"e\\";i:86280;s:1:\\"i\\";s:0:\\"\\";s:4:\\"cost\\";s:0:\\"\\";}}\',\'0\',\'0\',\'0\',\'0\',\'30\',\'0\',\'0\')',
)?>