<?php return array (
  0 => 'CREATE TABLE `xiaozu_menu` (
  `name` varchar(100) NOT NULL COMMENT \'操作名称\',
  `cnname` varchar(200) NOT NULL,
  `moduleid` int(20) NOT NULL,
  `group` int(20) NOT NULL,
  `id` int(5) DEFAULT \'0\'
) ENGINE=MyISAM DEFAULT CHARSET=utf8',
  1 => 'INSERT INTO `xiaozu_menu`(`name`,`cnname`,`moduleid`,`group`,`id`) VALUES(\'shop\',\'店铺销量分析\',\'18\',\'6\',\'0\')',
  2 => 'INSERT INTO `xiaozu_menu`(`name`,`cnname`,`moduleid`,`group`,`id`) VALUES(\'orderyjin\',\'商家结算\',\'5\',\'6\',\'0\')',
  3 => 'INSERT INTO `xiaozu_menu`(`name`,`cnname`,`moduleid`,`group`,`id`) VALUES(\'newslist\',\'新闻列表\',\'7\',\'6\',\'0\')',
  4 => 'INSERT INTO `xiaozu_menu`(`name`,`cnname`,`moduleid`,`group`,`id`) VALUES(\'newslist\',\'新闻列表\',\'7\',\'7\',\'0\')',
  5 => 'INSERT INTO `xiaozu_menu`(`name`,`cnname`,`moduleid`,`group`,`id`) VALUES(\'newstype\',\'新闻分类\',\'7\',\'7\',\'1\')',
  6 => 'INSERT INTO `xiaozu_menu`(`name`,`cnname`,`moduleid`,`group`,`id`) VALUES(\'ordertoday\',\'当天订单处理\',\'5\',\'12\',\'0\')',
  7 => 'INSERT INTO `xiaozu_menu`(`name`,`cnname`,`moduleid`,`group`,`id`) VALUES(\'psymap\',\'配送员订单\',\'32\',\'4\',\'1\')',
  8 => 'INSERT INTO `xiaozu_menu`(`name`,`cnname`,`moduleid`,`group`,`id`) VALUES(\'memberlistps\',\'配送员管理\',\'32\',\'4\',\'0\')',
  9 => 'INSERT INTO `xiaozu_menu`(`name`,`cnname`,`moduleid`,`group`,`id`) VALUES(\'orderyjin\',\'店铺订单统计\',\'5\',\'4\',\'3\')',
  10 => 'INSERT INTO `xiaozu_menu`(`name`,`cnname`,`moduleid`,`group`,`id`) VALUES(\'ordertotal\',\'网站订单统计\',\'5\',\'4\',\'2\')',
  11 => 'INSERT INTO `xiaozu_menu`(`name`,`cnname`,`moduleid`,`group`,`id`) VALUES(\'ordertoday\',\'当天订单处理\',\'5\',\'4\',\'1\')',
  12 => 'INSERT INTO `xiaozu_menu`(`name`,`cnname`,`moduleid`,`group`,`id`) VALUES(\'orderlist\',\'所有订单\',\'5\',\'4\',\'0\')',
  13 => 'INSERT INTO `xiaozu_menu`(`name`,`cnname`,`moduleid`,`group`,`id`) VALUES(\'addshop\',\'后台添加店铺\',\'3\',\'4\',\'1\')',
  14 => 'INSERT INTO `xiaozu_menu`(`name`,`cnname`,`moduleid`,`group`,`id`) VALUES(\'adminshoplist\',\'后台商家列表\',\'3\',\'4\',\'0\')',
  15 => 'INSERT INTO `xiaozu_menu`(`name`,`cnname`,`moduleid`,`group`,`id`) VALUES(\'memberlistshop\',\'商家会员列表\',\'2\',\'4\',\'0\')',
  16 => 'INSERT INTO `xiaozu_menu`(`name`,`cnname`,`moduleid`,`group`,`id`) VALUES(\'rechargezend\',\'充值余额送列表\',\'16\',\'1\',\'2\')',
  17 => 'INSERT INTO `xiaozu_menu`(`name`,`cnname`,`moduleid`,`group`,`id`) VALUES(\'juanmarketing\',\'营销分享优惠券列表\',\'16\',\'1\',\'1\')',
  18 => 'INSERT INTO `xiaozu_menu`(`name`,`cnname`,`moduleid`,`group`,`id`) VALUES(\'juanopenset\',\'优惠券设置\',\'16\',\'1\',\'0\')',
  19 => 'INSERT INTO `xiaozu_menu`(`name`,`cnname`,`moduleid`,`group`,`id`) VALUES(\'singlelist\',\'单页列表\',\'12\',\'1\',\'0\')',
  20 => 'INSERT INTO `xiaozu_menu`(`name`,`cnname`,`moduleid`,`group`,`id`) VALUES(\'complaintlist\',\'投诉管理列表\',\'11\',\'1\',\'4\')',
  21 => 'INSERT INTO `xiaozu_menu`(`name`,`cnname`,`moduleid`,`group`,`id`) VALUES(\'complreasonlist\',\'投诉原因列表\',\'11\',\'1\',\'3\')',
  22 => 'INSERT INTO `xiaozu_menu`(`name`,`cnname`,`moduleid`,`group`,`id`) VALUES(\'pmsglist\',\'私信列表\',\'11\',\'1\',\'2\')',
  23 => 'INSERT INTO `xiaozu_menu`(`name`,`cnname`,`moduleid`,`group`,`id`) VALUES(\'asklist\',\'后台留言列表\',\'11\',\'1\',\'1\')',
  24 => 'INSERT INTO `xiaozu_menu`(`name`,`cnname`,`moduleid`,`group`,`id`) VALUES(\'shopmsglist\',\'商家入驻留言列表\',\'11\',\'1\',\'0\')',
  25 => 'INSERT INTO `xiaozu_menu`(`name`,`cnname`,`moduleid`,`group`,`id`) VALUES(\'adminpsset\',\'网站配送设置\',\'10\',\'1\',\'2\')',
  26 => 'INSERT INTO `xiaozu_menu`(`name`,`cnname`,`moduleid`,`group`,`id`) VALUES(\'addarealist\',\'后台添加购区域\',\'10\',\'1\',\'1\')',
  27 => 'INSERT INTO `xiaozu_menu`(`name`,`cnname`,`moduleid`,`group`,`id`) VALUES(\'adminarealist\',\'后台区域列表\',\'10\',\'1\',\'0\')',
  28 => 'INSERT INTO `xiaozu_menu`(`name`,`cnname`,`moduleid`,`group`,`id`) VALUES(\'errlog\',\'错误日志\',\'17\',\'1\',\'10\')',
  29 => 'INSERT INTO `xiaozu_menu`(`name`,`cnname`,`moduleid`,`group`,`id`) VALUES(\'delpsorder\',\'清理为空配送单\',\'17\',\'1\',\'9\')',
  30 => 'INSERT INTO `xiaozu_menu`(`name`,`cnname`,`moduleid`,`group`,`id`) VALUES(\'cleartpl\',\'清理缓存\',\'17\',\'1\',\'8\')',
  31 => 'INSERT INTO `xiaozu_menu`(`name`,`cnname`,`moduleid`,`group`,`id`) VALUES(\'rebkdata\',\'还原数据\',\'17\',\'1\',\'7\')',
  32 => 'INSERT INTO `xiaozu_menu`(`name`,`cnname`,`moduleid`,`group`,`id`) VALUES(\'basedata\',\'备份数据\',\'17\',\'1\',\'6\')',
  33 => 'INSERT INTO `xiaozu_menu`(`name`,`cnname`,`moduleid`,`group`,`id`) VALUES(\'smsset\',\'短信设置\',\'17\',\'1\',\'5\')',
  34 => 'INSERT INTO `xiaozu_menu`(`name`,`cnname`,`moduleid`,`group`,`id`) VALUES(\'emailset\',\'邮箱设置\',\'17\',\'1\',\'4\')',
  35 => 'INSERT INTO `xiaozu_menu`(`name`,`cnname`,`moduleid`,`group`,`id`) VALUES(\'othertpl\',\'短信/邮件模板设置\',\'17\',\'1\',\'3\')',
  36 => 'INSERT INTO `xiaozu_menu`(`name`,`cnname`,`moduleid`,`group`,`id`) VALUES(\'specialpage\',\'专题页管理\',\'17\',\'1\',\'2\')',
  37 => 'INSERT INTO `xiaozu_menu`(`name`,`cnname`,`moduleid`,`group`,`id`) VALUES(\'loginlist\',\'第三方登陆\',\'17\',\'1\',\'1\')',
  38 => 'INSERT INTO `xiaozu_menu`(`name`,`cnname`,`moduleid`,`group`,`id`) VALUES(\'paylist\',\'支付接口列表\',\'17\',\'1\',\'0\')',
  39 => 'INSERT INTO `xiaozu_menu`(`name`,`cnname`,`moduleid`,`group`,`id`) VALUES(\'giftlog\',\'礼品兑换记录\',\'8\',\'1\',\'2\')',
  40 => 'INSERT INTO `xiaozu_menu`(`name`,`cnname`,`moduleid`,`group`,`id`) VALUES(\'gifttype\',\'礼品类型\',\'8\',\'1\',\'1\')',
  41 => 'INSERT INTO `xiaozu_menu`(`name`,`cnname`,`moduleid`,`group`,`id`) VALUES(\'giftlist\',\'礼品列表\',\'8\',\'1\',\'0\')',
  42 => 'INSERT INTO `xiaozu_menu`(`name`,`cnname`,`moduleid`,`group`,`id`) VALUES(\'helpcenter\',\'帮助中心\',\'7\',\'1\',\'4\')',
  43 => 'INSERT INTO `xiaozu_menu`(`name`,`cnname`,`moduleid`,`group`,`id`) VALUES(\'newstype\',\'新闻分类\',\'7\',\'1\',\'3\')',
  44 => 'INSERT INTO `xiaozu_menu`(`name`,`cnname`,`moduleid`,`group`,`id`) VALUES(\'newslist\',\'新闻列表\',\'7\',\'1\',\'2\')',
  45 => 'INSERT INTO `xiaozu_menu`(`name`,`cnname`,`moduleid`,`group`,`id`) VALUES(\'lifeassistant\',\'生活服务管理\',\'7\',\'1\',\'1\')',
  46 => 'INSERT INTO `xiaozu_menu`(`name`,`cnname`,`moduleid`,`group`,`id`) VALUES(\'information\',\'网站通知管理\',\'7\',\'1\',\'0\')',
  47 => 'INSERT INTO `xiaozu_menu`(`name`,`cnname`,`moduleid`,`group`,`id`) VALUES(\'shoptxtlog\',\'店铺资金记录\',\'5\',\'1\',\'10\')',
  48 => 'INSERT INTO `xiaozu_menu`(`name`,`cnname`,`moduleid`,`group`,`id`) VALUES(\'shoptx\',\'店铺提现记录\',\'5\',\'1\',\'9\')',
  49 => 'INSERT INTO `xiaozu_menu`(`name`,`cnname`,`moduleid`,`group`,`id`) VALUES(\'shopjsadd\',\'店铺结算处理\',\'5\',\'1\',\'8\')',
  50 => 'INSERT INTO `xiaozu_menu`(`name`,`cnname`,`moduleid`,`group`,`id`) VALUES(\'ordercomment\',\'订单评价列表\',\'5\',\'1\',\'7\')',
  51 => 'INSERT INTO `xiaozu_menu`(`name`,`cnname`,`moduleid`,`group`,`id`) VALUES(\'beizhulist\',\'订单备注\',\'5\',\'1\',\'6\')',
  52 => 'INSERT INTO `xiaozu_menu`(`name`,`cnname`,`moduleid`,`group`,`id`) VALUES(\'shophuiorder\',\'闪惠订单\',\'5\',\'1\',\'5\')',
  53 => 'INSERT INTO `xiaozu_menu`(`name`,`cnname`,`moduleid`,`group`,`id`) VALUES(\'setpaotui\',\'跑腿信息设置\',\'5\',\'1\',\'4\')',
  54 => 'INSERT INTO `xiaozu_menu`(`name`,`cnname`,`moduleid`,`group`,`id`) VALUES(\'drawsmlist\',\'退款原因说明\',\'5\',\'1\',\'3\')',
  55 => 'INSERT INTO `xiaozu_menu`(`name`,`cnname`,`moduleid`,`group`,`id`) VALUES(\'drawbacklog\',\'退款申请处理\',\'5\',\'1\',\'2\')',
  56 => 'INSERT INTO `xiaozu_menu`(`name`,`cnname`,`moduleid`,`group`,`id`) VALUES(\'ordertoday\',\'当天订单处理\',\'5\',\'1\',\'1\')',
  57 => 'INSERT INTO `xiaozu_menu`(`name`,`cnname`,`moduleid`,`group`,`id`) VALUES(\'orderlist\',\'所有订单\',\'5\',\'1\',\'0\')',
  58 => 'INSERT INTO `xiaozu_menu`(`name`,`cnname`,`moduleid`,`group`,`id`) VALUES(\'psyyj\',\'配送员佣金统计\',\'18\',\'1\',\'9\')',
  59 => 'INSERT INTO `xiaozu_menu`(`name`,`cnname`,`moduleid`,`group`,`id`) VALUES(\'index\',\'网站信息\',\'1\',\'4\',\'0\')',
  60 => 'INSERT INTO `xiaozu_menu`(`name`,`cnname`,`moduleid`,`group`,`id`) VALUES(\'shopjsover\',\'店铺结算统计\',\'18\',\'1\',\'8\')',
  61 => 'INSERT INTO `xiaozu_menu`(`name`,`cnname`,`moduleid`,`group`,`id`) VALUES(\'orderyjin\',\'店铺订单统计\',\'18\',\'1\',\'7\')',
  62 => 'INSERT INTO `xiaozu_menu`(`name`,`cnname`,`moduleid`,`group`,`id`) VALUES(\'areadtoji\',\'区域管理统计\',\'18\',\'1\',\'6\')',
  63 => 'INSERT INTO `xiaozu_menu`(`name`,`cnname`,`moduleid`,`group`,`id`) VALUES(\'tjshophui\',\'闪惠订单统计\',\'18\',\'1\',\'5\')',
  64 => 'INSERT INTO `xiaozu_menu`(`name`,`cnname`,`moduleid`,`group`,`id`) VALUES(\'ordertotal\',\'网站订单统计\',\'18\',\'1\',\'4\')',
  65 => 'INSERT INTO `xiaozu_menu`(`name`,`cnname`,`moduleid`,`group`,`id`) VALUES(\'user\',\'会员购买数据\',\'18\',\'1\',\'3\')',
  66 => 'INSERT INTO `xiaozu_menu`(`name`,`cnname`,`moduleid`,`group`,`id`) VALUES(\'goods\',\'菜品销量分析\',\'18\',\'1\',\'2\')',
  67 => 'INSERT INTO `xiaozu_menu`(`name`,`cnname`,`moduleid`,`group`,`id`) VALUES(\'shop\',\'店铺销量分析\',\'18\',\'1\',\'1\')',
  68 => 'INSERT INTO `xiaozu_menu`(`name`,`cnname`,`moduleid`,`group`,`id`) VALUES(\'area\',\'地区销量分析\',\'18\',\'1\',\'0\')',
  69 => 'INSERT INTO `xiaozu_menu`(`name`,`cnname`,`moduleid`,`group`,`id`) VALUES(\'searchattr\',\'搜索关键词\',\'3\',\'1\',\'7\')',
  70 => 'INSERT INTO `xiaozu_menu`(`name`,`cnname`,`moduleid`,`group`,`id`) VALUES(\'goodsgg\',\'商品规格\',\'3\',\'1\',\'6\')',
  71 => 'INSERT INTO `xiaozu_menu`(`name`,`cnname`,`moduleid`,`group`,`id`) VALUES(\'goodsattr\',\'商品属性\',\'3\',\'1\',\'5\')',
  72 => 'INSERT INTO `xiaozu_menu`(`name`,`cnname`,`moduleid`,`group`,`id`) VALUES(\'goodssign\',\'促销商品标签\',\'3\',\'1\',\'4\')',
  73 => 'INSERT INTO `xiaozu_menu`(`name`,`cnname`,`moduleid`,`group`,`id`) VALUES(\'shoptype\',\'后台模型\',\'3\',\'1\',\'3\')',
  74 => 'INSERT INTO `xiaozu_menu`(`name`,`cnname`,`moduleid`,`group`,`id`) VALUES(\'addshop\',\'后台添加店铺\',\'3\',\'1\',\'2\')',
  75 => 'INSERT INTO `xiaozu_menu`(`name`,`cnname`,`moduleid`,`group`,`id`) VALUES(\'adminshopwati\',\'后台待审核商家\',\'3\',\'1\',\'1\')',
  76 => 'INSERT INTO `xiaozu_menu`(`name`,`cnname`,`moduleid`,`group`,`id`) VALUES(\'adminshoplist\',\'后台商家列表\',\'3\',\'1\',\'0\')',
  77 => 'INSERT INTO `xiaozu_menu`(`name`,`cnname`,`moduleid`,`group`,`id`) VALUES(\'grouplist\',\'会员分组\',\'2\',\'1\',\'7\')',
  78 => 'INSERT INTO `xiaozu_menu`(`name`,`cnname`,`moduleid`,`group`,`id`) VALUES(\'addgroup\',\'添加会员分组\',\'2\',\'1\',\'6\')',
  79 => 'INSERT INTO `xiaozu_menu`(`name`,`cnname`,`moduleid`,`group`,`id`) VALUES(\'addmember\',\'添加会员\',\'2\',\'1\',\'5\')',
  80 => 'INSERT INTO `xiaozu_menu`(`name`,`cnname`,`moduleid`,`group`,`id`) VALUES(\'memcostloglist\',\'会员余额操作日志\',\'2\',\'1\',\'4\')',
  81 => 'INSERT INTO `xiaozu_menu`(`name`,`cnname`,`moduleid`,`group`,`id`) VALUES(\'memberlistshop\',\'商家会员列表\',\'2\',\'1\',\'3\')',
  82 => 'INSERT INTO `xiaozu_menu`(`name`,`cnname`,`moduleid`,`group`,`id`) VALUES(\'memberlist\',\'普通会员列表\',\'2\',\'1\',\'2\')',
  83 => 'INSERT INTO `xiaozu_menu`(`name`,`cnname`,`moduleid`,`group`,`id`) VALUES(\'addadmin\',\'添加管理员\',\'2\',\'1\',\'1\')',
  84 => 'INSERT INTO `xiaozu_menu`(`name`,`cnname`,`moduleid`,`group`,`id`) VALUES(\'adminlist\',\'管理员列表\',\'2\',\'1\',\'0\')',
  85 => 'INSERT INTO `xiaozu_menu`(`name`,`cnname`,`moduleid`,`group`,`id`) VALUES(\'limitset\',\'后台菜单管理\',\'1\',\'1\',\'5\')',
  86 => 'INSERT INTO `xiaozu_menu`(`name`,`cnname`,`moduleid`,`group`,`id`) VALUES(\'footinfo\',\'网站底部\',\'1\',\'1\',\'4\')',
  87 => 'INSERT INTO `xiaozu_menu`(`name`,`cnname`,`moduleid`,`group`,`id`) VALUES(\'toplink\',\'网站导航\',\'1\',\'1\',\'3\')',
  88 => 'INSERT INTO `xiaozu_menu`(`name`,`cnname`,`moduleid`,`group`,`id`) VALUES(\'otherset\',\'网站限制\',\'1\',\'1\',\'2\')',
  89 => 'INSERT INTO `xiaozu_menu`(`name`,`cnname`,`moduleid`,`group`,`id`) VALUES(\'siteset\',\'网站设置\',\'1\',\'1\',\'1\')',
  90 => 'INSERT INTO `xiaozu_menu`(`name`,`cnname`,`moduleid`,`group`,`id`) VALUES(\'index\',\'网站信息\',\'1\',\'1\',\'0\')',
  91 => 'INSERT INTO `xiaozu_menu`(`name`,`cnname`,`moduleid`,`group`,`id`) VALUES(\'sharejsinfo\',\'分享优惠券展示信息列表\',\'16\',\'1\',\'3\')',
  92 => 'INSERT INTO `xiaozu_menu`(`name`,`cnname`,`moduleid`,`group`,`id`) VALUES(\'virtualinfo\',\'店铺刷单\',\'16\',\'1\',\'4\')',
  93 => 'INSERT INTO `xiaozu_menu`(`name`,`cnname`,`moduleid`,`group`,`id`) VALUES(\'receivejuanlog\',\'优惠券领取记录列表\',\'16\',\'1\',\'5\')',
  94 => 'INSERT INTO `xiaozu_menu`(`name`,`cnname`,`moduleid`,`group`,`id`) VALUES(\'cardlist\',\'充值卡列表\',\'16\',\'1\',\'6\')',
  95 => 'INSERT INTO `xiaozu_menu`(`name`,`cnname`,`moduleid`,`group`,`id`) VALUES(\'addcard\',\'添加充值卡\',\'16\',\'1\',\'7\')',
  96 => 'INSERT INTO `xiaozu_menu`(`name`,`cnname`,`moduleid`,`group`,`id`) VALUES(\'juanlist\',\'优惠券列表\',\'16\',\'1\',\'8\')',
  97 => 'INSERT INTO `xiaozu_menu`(`name`,`cnname`,`moduleid`,`group`,`id`) VALUES(\'addjuan\',\'添加优惠券\',\'16\',\'1\',\'9\')',
  98 => 'INSERT INTO `xiaozu_menu`(`name`,`cnname`,`moduleid`,`group`,`id`) VALUES(\'scoreset\',\'积分设置\',\'16\',\'1\',\'10\')',
  99 => 'INSERT INTO `xiaozu_menu`(`name`,`cnname`,`moduleid`,`group`,`id`) VALUES(\'prensentjuan\',\'赠送卷设置\',\'16\',\'1\',\'11\')',
  100 => 'INSERT INTO `xiaozu_menu`(`name`,`cnname`,`moduleid`,`group`,`id`) VALUES(\'sendtasklist\',\'群发任务\',\'16\',\'1\',\'12\')',
  101 => 'INSERT INTO `xiaozu_menu`(`name`,`cnname`,`moduleid`,`group`,`id`) VALUES(\'sendtask\',\'发布群发任务\',\'16\',\'1\',\'13\')',
  102 => 'INSERT INTO `xiaozu_menu`(`name`,`cnname`,`moduleid`,`group`,`id`) VALUES(\'advlist\',\'广告列表\',\'14\',\'1\',\'0\')',
  103 => 'INSERT INTO `xiaozu_menu`(`name`,`cnname`,`moduleid`,`group`,`id`) VALUES(\'advtype\',\'广告类型\',\'14\',\'1\',\'1\')',
  104 => 'INSERT INTO `xiaozu_menu`(`name`,`cnname`,`moduleid`,`group`,`id`) VALUES(\'wxset\',\'微信基本设置\',\'28\',\'1\',\'0\')',
  105 => 'INSERT INTO `xiaozu_menu`(`name`,`cnname`,`moduleid`,`group`,`id`) VALUES(\'wxmenu\',\'微信菜单\',\'28\',\'1\',\'1\')',
  106 => 'INSERT INTO `xiaozu_menu`(`name`,`cnname`,`moduleid`,`group`,`id`) VALUES(\'wxback\',\'微信自动回复\',\'28\',\'1\',\'2\')',
  107 => 'INSERT INTO `xiaozu_menu`(`name`,`cnname`,`moduleid`,`group`,`id`) VALUES(\'wxuser\',\'微信用户\',\'28\',\'1\',\'3\')',
  108 => 'INSERT INTO `xiaozu_menu`(`name`,`cnname`,`moduleid`,`group`,`id`) VALUES(\'yiqisaylist\',\'微信端一起说留言管理\',\'28\',\'1\',\'4\')',
  109 => 'INSERT INTO `xiaozu_menu`(`name`,`cnname`,`moduleid`,`group`,`id`) VALUES(\'glywxmsg\',\'微信端管理员发布置顶留言\',\'28\',\'1\',\'5\')',
  110 => 'INSERT INTO `xiaozu_menu`(`name`,`cnname`,`moduleid`,`group`,`id`) VALUES(\'memberlistps\',\'配送员管理\',\'32\',\'1\',\'0\')',
  111 => 'INSERT INTO `xiaozu_menu`(`name`,`cnname`,`moduleid`,`group`,`id`) VALUES(\'psymap\',\'配送员订单\',\'32\',\'1\',\'1\')',
  112 => 'INSERT INTO `xiaozu_menu`(`name`,`cnname`,`moduleid`,`group`,`id`) VALUES(\'appset\',\'app设置\',\'34\',\'1\',\'0\')',
  113 => 'INSERT INTO `xiaozu_menu`(`name`,`cnname`,`moduleid`,`group`,`id`) VALUES(\'buyerapp\',\'app用户端\',\'34\',\'1\',\'1\')',
  114 => 'INSERT INTO `xiaozu_menu`(`name`,`cnname`,`moduleid`,`group`,`id`) VALUES(\'buyermsg\',\'app用户群发\',\'34\',\'1\',\'2\')',
  115 => 'INSERT INTO `xiaozu_menu`(`name`,`cnname`,`moduleid`,`group`,`id`) VALUES(\'shopapp\',\'app商家端\',\'34\',\'1\',\'3\')',
  116 => 'INSERT INTO `xiaozu_menu`(`name`,`cnname`,`moduleid`,`group`,`id`) VALUES(\'psapp\',\'app配送员\',\'34\',\'1\',\'4\')',
)?>