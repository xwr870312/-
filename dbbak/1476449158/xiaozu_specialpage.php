<?php return array (
  0 => 'CREATE TABLE `xiaozu_specialpage` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(50) NOT NULL COMMENT \'名称\',
  `indeximg` varchar(255) NOT NULL COMMENT \'首页显示图片	\',
  `imgwidth` varchar(50) NOT NULL DEFAULT \'50%\' COMMENT \'首页显示图片宽度\',
  `imgheight` varchar(50) NOT NULL DEFAULT \'62\' COMMENT \'首页显示图片高度\',
  `specialimg` varchar(255) NOT NULL COMMENT \'首页显示图片	\',
  `color` varchar(20) NOT NULL COMMENT \'专题页背景主色调\',
  `showtype` int(1) NOT NULL DEFAULT \'0\' COMMENT \'针对的是商品还是店铺  默认0为店铺 1为商品\',
  `is_custom` int(1) NOT NULL DEFAULT \'1\' COMMENT \'是否是自定义	默认为1固定的  0为自定义的\',
  `cx_type` int(1) NOT NULL COMMENT \'如果是商品1为折扣  如果是店铺 1为推荐店铺  2为免减商家 3为打折商家 4免配送费\',
  `listids` text NOT NULL COMMENT \'如果是自定义的话 所对应的店铺id集或者商品id集\',
  `ruleintro` text COMMENT \'规则说明\',
  `is_show` int(1) NOT NULL DEFAULT \'1\' COMMENT \'是否展示 默认1展示 0不展示\',
  `orderid` int(11) NOT NULL COMMENT \'排序\',
  `addtime` int(11) NOT NULL COMMENT \'添加时间\',
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=11 DEFAULT CHARSET=utf8',
  1 => 'INSERT INTO `xiaozu_specialpage`(`id`,`name`,`indeximg`,`imgwidth`,`imgheight`,`specialimg`,`color`,`showtype`,`is_custom`,`cx_type`,`listids`,`ruleintro`,`is_show`,`orderid`,`addtime`) VALUES(\'1\',\'热销菜品\',\'/upload/goods/20160109181816384.png\',\'50%\',\'62\',\'/upload/goods/20160109190519260.png\',\'#2e170e\',\'1\',\'0\',\'0\',\'2,76,36,875,868,963,874,872,1657,1668\',\'<div class=\\"foodiscorule\\">
   <ul>
    <li>1. 代金券新老用户分享</li>
    <li>2. 代金券不可与其他优惠券叠加使用，首单支付代金券不可叠加</li>
    <li>3. 仅限在外卖人最新客户端下单且选择在线支付时使用</li>
    <li>4. 使用代金券下单的手机号，必须为抢代金券是手机号码</li>
    <li>5. 最终解释权归所有</li>
   </ul>
  </div>\',\'1\',\'5\',\'1456826487\')',
  2 => 'INSERT INTO `xiaozu_specialpage`(`id`,`name`,`indeximg`,`imgwidth`,`imgheight`,`specialimg`,`color`,`showtype`,`is_custom`,`cx_type`,`listids`,`ruleintro`,`is_show`,`orderid`,`addtime`) VALUES(\'3\',\'立减优惠\',\'/upload/goods/20160109181759282.png\',\'50%\',\'62\',\'/upload/goods/20160109164849274.png\',\'#2e170e\',\'0\',\'1\',\'2\',\'15\',\'\',\'1\',\'6\',\'1452337662\')',
  3 => 'INSERT INTO `xiaozu_specialpage`(`id`,`name`,`indeximg`,`imgwidth`,`imgheight`,`specialimg`,`color`,`showtype`,`is_custom`,`cx_type`,`listids`,`ruleintro`,`is_show`,`orderid`,`addtime`) VALUES(\'4\',\'抢购专区\',\'/upload/goods/20160109172703484.png\',\'50%\',\'62\',\'/upload/goods/20160109172718119.png\',\'green\',\'0\',\'0\',\'0\',\'15,16,13\',\'\',\'1\',\'7\',\'1465028301\')',
  4 => 'INSERT INTO `xiaozu_specialpage`(`id`,`name`,`indeximg`,`imgwidth`,`imgheight`,`specialimg`,`color`,`showtype`,`is_custom`,`cx_type`,`listids`,`ruleintro`,`is_show`,`orderid`,`addtime`) VALUES(\'5\',\'免费配送\',\'/upload/goods/20160109170443956.png\',\'50%\',\'62\',\'/upload/goods/20160109190637543.png\',\'yellow\',\'0\',\'1\',\'4\',\'228,164,165,3101\',\'\',\'1\',\'8\',\'1452337648\')',
  5 => 'INSERT INTO `xiaozu_specialpage`(`id`,`name`,`indeximg`,`imgwidth`,`imgheight`,`specialimg`,`color`,`showtype`,`is_custom`,`cx_type`,`listids`,`ruleintro`,`is_show`,`orderid`,`addtime`) VALUES(\'6\',\'外卖订餐\',\'/upload/goods/20160109183935808.png\',\'50%\',\'62\',\'\',\'#fff\',\'0\',\'1\',\'6\',\'\',\'\',\'0\',\'1\',\'1452354399\')',
  6 => 'INSERT INTO `xiaozu_specialpage`(`id`,`name`,`indeximg`,`imgwidth`,`imgheight`,`specialimg`,`color`,`showtype`,`is_custom`,`cx_type`,`listids`,`ruleintro`,`is_show`,`orderid`,`addtime`) VALUES(\'7\',\'在线超市\',\'/upload/goods/20160109183951820.png\',\'50%\',\'62\',\'\',\'#fff\',\'0\',\'1\',\'7\',\'\',\'\',\'0\',\'2\',\'1452354408\')',
  7 => 'INSERT INTO `xiaozu_specialpage`(`id`,`name`,`indeximg`,`imgwidth`,`imgheight`,`specialimg`,`color`,`showtype`,`is_custom`,`cx_type`,`listids`,`ruleintro`,`is_show`,`orderid`,`addtime`) VALUES(\'8\',\'预定点菜\',\'/upload/goods/20160109184001957.png\',\'50%\',\'62\',\'\',\'#fff\',\'0\',\'1\',\'8\',\'\',\'\',\'0\',\'3\',\'1452354415\')',
  8 => 'INSERT INTO `xiaozu_specialpage`(`id`,`name`,`indeximg`,`imgwidth`,`imgheight`,`specialimg`,`color`,`showtype`,`is_custom`,`cx_type`,`listids`,`ruleintro`,`is_show`,`orderid`,`addtime`) VALUES(\'9\',\'跑腿服务\',\'/upload/goods/20160109172403134.png\',\'50%\',\'62\',\'\',\'#fff\',\'0\',\'1\',\'9\',\'\',\'\',\'0\',\'4\',\'1452354421\')',
)?>