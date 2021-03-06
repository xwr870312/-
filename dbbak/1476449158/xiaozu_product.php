<?php return array (
  0 => 'CREATE TABLE `xiaozu_product` (
  `id` int(11) NOT NULL AUTO_INCREMENT COMMENT \'子商品ID\',
  `goodsid` int(20) NOT NULL COMMENT \'主商品ID\',
  `goodsname` varchar(255) DEFAULT NULL COMMENT \'商品名称\',
  `attrname` varchar(255) DEFAULT NULL COMMENT \'属性描述\',
  `attrids` varchar(255) NOT NULL COMMENT \'包含规格值ID集，分割\',
  `stock` int(5) NOT NULL DEFAULT \'0\' COMMENT \'库存\',
  `cost` decimal(8,2) NOT NULL DEFAULT \'0.00\' COMMENT \'销售价格\',
  `shopid` int(20) NOT NULL DEFAULT \'0\',
  `bagcost` decimal(5,2) NOT NULL DEFAULT \'0.00\',
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=203 DEFAULT CHARSET=utf8',
  1 => 'INSERT INTO `xiaozu_product`(`id`,`goodsid`,`goodsname`,`attrname`,`attrids`,`stock`,`cost`,`shopid`,`bagcost`) VALUES(\'45\',\'1031\',\'麻辣豆腐盖饭\',\'大份\',\'2\',\'107\',\'10.00\',\'4\',\'1.00\')',
  2 => 'INSERT INTO `xiaozu_product`(`id`,`goodsid`,`goodsname`,`attrname`,`attrids`,`stock`,`cost`,`shopid`,`bagcost`) VALUES(\'46\',\'1031\',\'麻辣豆腐盖饭\',\'小份\',\'3\',\'103\',\'8.00\',\'4\',\'1.00\')',
  3 => 'INSERT INTO `xiaozu_product`(`id`,`goodsid`,`goodsname`,`attrname`,`attrids`,`stock`,`cost`,`shopid`,`bagcost`) VALUES(\'47\',\'871\',\'虾仁面\',\'大份\',\'2\',\'111\',\'50.00\',\'4\',\'0.00\')',
  4 => 'INSERT INTO `xiaozu_product`(`id`,`goodsid`,`goodsname`,`attrname`,`attrids`,`stock`,`cost`,`shopid`,`bagcost`) VALUES(\'48\',\'871\',\'虾仁面\',\'小份\',\'3\',\'111\',\'30.00\',\'4\',\'0.00\')',
  5 => 'INSERT INTO `xiaozu_product`(`id`,`goodsid`,`goodsname`,`attrname`,`attrids`,`stock`,`cost`,`shopid`,`bagcost`) VALUES(\'49\',\'868\',\'清汤面\',\'大份\',\'2\',\'111\',\'20.00\',\'4\',\'0.00\')',
  6 => 'INSERT INTO `xiaozu_product`(`id`,`goodsid`,`goodsname`,`attrname`,`attrids`,`stock`,`cost`,`shopid`,`bagcost`) VALUES(\'50\',\'868\',\'清汤面\',\'小份\',\'3\',\'1111\',\'10.00\',\'4\',\'0.00\')',
  7 => 'INSERT INTO `xiaozu_product`(`id`,`goodsid`,`goodsname`,`attrname`,`attrids`,`stock`,`cost`,`shopid`,`bagcost`) VALUES(\'51\',\'867\',\'牛肉盖浇饭\',\'大份\',\'2\',\'106\',\'41.00\',\'4\',\'0.00\')',
  8 => 'INSERT INTO `xiaozu_product`(`id`,`goodsid`,`goodsname`,`attrname`,`attrids`,`stock`,`cost`,`shopid`,`bagcost`) VALUES(\'52\',\'867\',\'牛肉盖浇饭\',\'小份\',\'3\',\'110\',\'31.00\',\'4\',\'0.00\')',
  9 => 'INSERT INTO `xiaozu_product`(`id`,`goodsid`,`goodsname`,`attrname`,`attrids`,`stock`,`cost`,`shopid`,`bagcost`) VALUES(\'53\',\'869\',\'蒜汁拌面\',\'大份\',\'2\',\'111\',\'35.00\',\'4\',\'0.00\')',
  10 => 'INSERT INTO `xiaozu_product`(`id`,`goodsid`,`goodsname`,`attrname`,`attrids`,`stock`,`cost`,`shopid`,`bagcost`) VALUES(\'54\',\'869\',\'蒜汁拌面\',\'小份\',\'3\',\'111\',\'20.00\',\'4\',\'0.00\')',
  11 => 'INSERT INTO `xiaozu_product`(`id`,`goodsid`,`goodsname`,`attrname`,`attrids`,`stock`,`cost`,`shopid`,`bagcost`) VALUES(\'55\',\'872\',\'香菇热干面\',\'大份\',\'2\',\'111\',\'20.00\',\'4\',\'0.00\')',
  12 => 'INSERT INTO `xiaozu_product`(`id`,`goodsid`,`goodsname`,`attrname`,`attrids`,`stock`,`cost`,`shopid`,`bagcost`) VALUES(\'56\',\'872\',\'香菇热干面\',\'小份\',\'3\',\'111\',\'15.00\',\'4\',\'0.00\')',
  13 => 'INSERT INTO `xiaozu_product`(`id`,`goodsid`,`goodsname`,`attrname`,`attrids`,`stock`,`cost`,`shopid`,`bagcost`) VALUES(\'57\',\'873\',\'鸡蛋捞面\',\'大份\',\'2\',\'111\',\'25.00\',\'4\',\'0.00\')',
  14 => 'INSERT INTO `xiaozu_product`(`id`,`goodsid`,`goodsname`,`attrname`,`attrids`,`stock`,`cost`,`shopid`,`bagcost`) VALUES(\'58\',\'873\',\'鸡蛋捞面\',\'小份\',\'3\',\'111\',\'15.00\',\'4\',\'0.00\')',
  15 => 'INSERT INTO `xiaozu_product`(`id`,`goodsid`,`goodsname`,`attrname`,`attrids`,`stock`,`cost`,`shopid`,`bagcost`) VALUES(\'59\',\'874\',\'鱼香肉丝盖浇饭\',\'大份\',\'2\',\'111\',\'22.00\',\'4\',\'0.00\')',
  16 => 'INSERT INTO `xiaozu_product`(`id`,`goodsid`,`goodsname`,`attrname`,`attrids`,`stock`,`cost`,`shopid`,`bagcost`) VALUES(\'60\',\'874\',\'鱼香肉丝盖浇饭\',\'小份\',\'3\',\'111\',\'15.00\',\'4\',\'0.00\')',
  17 => 'INSERT INTO `xiaozu_product`(`id`,`goodsid`,`goodsname`,`attrname`,`attrids`,`stock`,`cost`,`shopid`,`bagcost`) VALUES(\'61\',\'875\',\'炸酱面\',\'大份\',\'2\',\'111\',\'22.00\',\'4\',\'0.00\')',
  18 => 'INSERT INTO `xiaozu_product`(`id`,`goodsid`,`goodsname`,`attrname`,`attrids`,`stock`,`cost`,`shopid`,`bagcost`) VALUES(\'62\',\'875\',\'炸酱面\',\'小份\',\'3\',\'111\',\'15.00\',\'4\',\'0.00\')',
  19 => 'INSERT INTO `xiaozu_product`(`id`,`goodsid`,`goodsname`,`attrname`,`attrids`,`stock`,`cost`,`shopid`,`bagcost`) VALUES(\'63\',\'1516\',\'朝鲜冷面\',\'大份\',\'2\',\'111\',\'20.00\',\'4\',\'0.00\')',
  20 => 'INSERT INTO `xiaozu_product`(`id`,`goodsid`,`goodsname`,`attrname`,`attrids`,`stock`,`cost`,`shopid`,`bagcost`) VALUES(\'64\',\'1516\',\'朝鲜冷面\',\'小份\',\'3\',\'110\',\'10.00\',\'4\',\'0.00\')',
  21 => 'INSERT INTO `xiaozu_product`(`id`,`goodsid`,`goodsname`,`attrname`,`attrids`,`stock`,`cost`,`shopid`,`bagcost`) VALUES(\'108\',\'1520\',\'黄焖鸡\',\'大份,特辣\',\'2,15\',\'999\',\'15.00\',\'4\',\'0.00\')',
  22 => 'INSERT INTO `xiaozu_product`(`id`,`goodsid`,`goodsname`,`attrname`,`attrids`,`stock`,`cost`,`shopid`,`bagcost`) VALUES(\'109\',\'1520\',\'黄焖鸡\',\'大份,中辣\',\'2,13\',\'100\',\'15.00\',\'4\',\'0.00\')',
  23 => 'INSERT INTO `xiaozu_product`(`id`,`goodsid`,`goodsname`,`attrname`,`attrids`,`stock`,`cost`,`shopid`,`bagcost`) VALUES(\'110\',\'1520\',\'黄焖鸡\',\'大份,微辣\',\'2,12\',\'94\',\'15.00\',\'4\',\'0.00\')',
  24 => 'INSERT INTO `xiaozu_product`(`id`,`goodsid`,`goodsname`,`attrname`,`attrids`,`stock`,`cost`,`shopid`,`bagcost`) VALUES(\'111\',\'1520\',\'黄焖鸡\',\'小份,特辣\',\'3,15\',\'106\',\'10.00\',\'4\',\'0.00\')',
  25 => 'INSERT INTO `xiaozu_product`(`id`,`goodsid`,`goodsname`,`attrname`,`attrids`,`stock`,`cost`,`shopid`,`bagcost`) VALUES(\'112\',\'1520\',\'黄焖鸡\',\'小份,中辣\',\'3,13\',\'98\',\'10.00\',\'4\',\'0.00\')',
  26 => 'INSERT INTO `xiaozu_product`(`id`,`goodsid`,`goodsname`,`attrname`,`attrids`,`stock`,`cost`,`shopid`,`bagcost`) VALUES(\'113\',\'1520\',\'黄焖鸡\',\'小份,微辣\',\'3,12\',\'99\',\'10.00\',\'4\',\'0.00\')',
)?>