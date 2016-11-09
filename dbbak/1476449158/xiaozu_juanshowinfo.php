<?php return array (
  0 => 'CREATE TABLE `xiaozu_juanshowinfo` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `type` int(1) NOT NULL COMMENT \'类型 2为下单分享 3为推广分享\',
  `title` varchar(255) NOT NULL COMMENT \'标题\',
  `img` varchar(255) NOT NULL COMMENT \'分享的图标\',
  `describe` varchar(255) NOT NULL COMMENT \'简述\',
  `bigimg` varchar(255) NOT NULL COMMENT \'展示大图\',
  `color` varchar(10) NOT NULL COMMENT \'背景色调\',
  `actcolor` varchar(10) NOT NULL COMMENT \'活动规则背景色调\',
  `avtrule` text NOT NULL COMMENT \'活动规则\',
  `orderid` int(11) NOT NULL,
  `addtime` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=3 DEFAULT CHARSET=utf8 COMMENT=\'分享优惠券展示信息\'',
  1 => 'INSERT INTO `xiaozu_juanshowinfo`(`id`,`type`,`title`,`img`,`describe`,`bigimg`,`color`,`actcolor`,`avtrule`,`orderid`,`addtime`) VALUES(\'1\',\'2\',\'外卖人发红包啦，快去抢抢看~\',\'/upload/juan/20160612162907199.png\',\'外卖人发红包啦，外卖神器~~抢抢抢！！！\',\'/upload/juan/20160612162910737.png\',\'#FF3F26\',\'#FF8C7D\',\'<ul>
        <li>1.红包新老用户同享</li>
        <li>2.红包可与其他优惠叠加使用，首单支付红包不可叠加</li>
        <li>3.红包仅限在美团外卖最新版客户端下单且选择在线支付时使用</li>
        <li>4.使用红包时下单手机号码必须为抢红包时手机号码</li>
        <li>5.其他未尽事宜，请咨询客服</li>
        <li>6.红包解释权归官方网站所有</li>
    </ul>\',\'1\',\'1464693859\')',
  2 => 'INSERT INTO `xiaozu_juanshowinfo`(`id`,`type`,`title`,`img`,`describe`,`bigimg`,`color`,`actcolor`,`avtrule`,`orderid`,`addtime`) VALUES(\'2\',\'3\',\'会员推广分享优惠券领取优惠券红包啦！！！\',\'/upload/juan/20160612163003697.png\',\'会员推广分享优惠券领取优惠券红包啦，分享给好友，还有下单后分享者还可以返优惠券！！！\',\'/upload/juan/20160612163007903.png\',\'#F0F0F0\',\'#F0F0F0\',\'<ul><li><b>1</b>邀请新用户注册，TA立刻获得30元优惠券礼包。</li>
<li><b>2</b>TA完成首单消费的24小时内，您也获得30元优惠券礼包。</li>
<li><b>3</b>分享邀请链接给好友，让TA填写手机号码领取。微信端需要在会员中心绑定手机号码才能获得优惠券礼包。</li>
<li><b>4</b>同一手机号、同一手机设备、同一支付账户均视为同一用户，新注册的用户仅限成功领取一次优惠礼包。</li>
<li><b>5</b>活动解释权归外卖人所有。</li>
</ul>\',\'2\',\'1465720208\')',
)?>