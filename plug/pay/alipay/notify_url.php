<?php
/* *
 * 功能：支付宝服务器异步通知页面
 * 版本：3.3
 * 日期：2012-07-23
 * 说明：
 * 以下代码只是为了方便商户测试而提供的样例代码，商户可以根据自己网站的需要，按照技术文档编写,并非一定要使用该代码。
 * 该代码仅供学习和研究支付宝接口使用，只是提供一个参考。


 *************************页面功能说明*************************
 * 创建该页面文件时，请留心该页面文件中无任何HTML代码及空格。
 * 该页面不能在本机电脑测试，请到服务器上做测试。请确保外部可以访问该页面。
 * 该页面调试工具请使用写文本函数logResult，该函数已被默认关闭，见alipay_notify_class.php中的函数verifyNotify
 * 如果没有收到该页面返回的 success 信息，支付宝会在24小时内按一定的时间策略重发通知
 */


$hopedir = '../../../';
$config = $hopedir."config/hopeconfig.php";   
$cfg = include($config); 

  
	
require_once("alipay.config.php");
require_once("lib/alipay_notify.class.php");

//计算得出通知验证结果
$alipayNotify = new AlipayNotify($alipay_config);
$verify_result = $alipayNotify->verifyNotify();

function dosengprint($msg,$machine_code,$mKey){
  	$xmlData = '<xml>
 <mKey><![CDATA['.$mKey.']]></mKey >
<machine_code><![CDATA['.$machine_code.']]></machine_code > 
<Content><![CDATA['.$msg.']]></Content >
</xml>';

//第一种发送方式，也是推荐的方式：
$url = 'http://app.waimairen.com/print.php';  //接收xml数据的文件
$header[] = "Content-type: text/xml";        //定义content-type为xml,注意是数组
$ch = curl_init ($url);
curl_setopt($ch, CURLOPT_URL, $url);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
curl_setopt($ch, CURLOPT_HTTPHEADER, $header);
curl_setopt($ch, CURLOPT_POST, 1);
curl_setopt($ch, CURLOPT_POSTFIELDS, $xmlData);
$response = curl_exec($ch);
if(curl_errno($ch)){
    print curl_error($ch);
}
curl_close($ch);  
return $response;
  	
  }
 
if($verify_result) {//验证成功
	/////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////
	//请在这里加上商户的业务逻辑程序代

	
	//——请根据您的业务逻辑来编写程序（以下代码仅作参考）——
	
    //获取支付宝的通知返回参数，可参考技术文档中服务器异步通知参数列表
	
	//商户订单号
	$out_trade_no = $_POST['out_trade_no'];

	//支付宝交易号
	$trade_no = $_POST['trade_no'];

	//交易状态
	 $trade_status = $_POST['trade_status'];
  
   $lnk = mysql_connect($cfg['dbhost'], $cfg['dbuser'], $cfg['dbpw']) or die ('Not connected : ' . mysql_error()); 
   $version = mysql_get_server_info(); 
   if($version > '4.1' && $cfg['dbcharset']) {
				mysql_query("SET NAMES '".$cfg['dbcharset']."'");
   } 
   if($version > '5.0') {
				mysql_query("SET sql_mode=''");
   } 
   if(!@mysql_select_db($cfg['dbname'])){ 
				if(@mysql_error()) {
					echo '数据库连接失败';exit;
				} else {
					mysql_select_db($cfg['dbname']);
	      }
   }
 
   $info =  mysql_query("SELECT * from `".$cfg['tablepre']."onlinelog` where id = ".$out_trade_no." ");
   $backinfog = mysql_fetch_assoc($info);
   
 
   
  
    if($_POST['trade_status'] == 'TRADE_FINISHED') {
    	if(!empty($backinfog)){
    		if($backinfog['status'] == 0){
    			 if($backinfog['type'] == 'order'){
    			 	//更新此状态为1
    			 	//更新订单
    			 	 mysql_query("UPDATE  `".$cfg['tablepre']."onlinelog` SET  `status` =  1 where `id`=".$out_trade_no." ");  
    			 	 mysql_query("UPDATE  `".$cfg['tablepre']."order` SET  `paystatus` =  1,`status` =  1,`paytype_name` =  'alipay',`trade_no` =  ".$trade_no."  where `id`=".$backinfog['upid']."");  
    			 	  
					 $info = file_get_contents($cfg['siteurl']."/index.php?ctrl=site&action=postmsgbypay&orderid=".$backinfog['upid']);
    			 	  
    			 	 
    		   }elseif($backinfog['type'] == 'acount'){
				   
				   
				   
    		  	 mysql_query("UPDATE  `".$cfg['tablepre']."onlinelog` SET  `status` =  1 where `id`=".$out_trade_no." ");  
    		  	 mysql_query("UPDATE  `".$cfg['tablepre']."member` SET  `cost` =  `cost`+".$backinfog['cost']." where `uid`=".$backinfog['upid']."");  
    		  	  $info =  mysql_query("SELECT * from `".$cfg['tablepre']."member` where uid = ".$backinfog['upid']." ");
              $memberinfo = mysql_fetch_assoc($info);
              $dotime = time(); 
    		  		mysql_query("INSERT INTO `".$cfg['tablepre']."memberlog` (`id` ,`userid` ,`type` ,`addtype` ,`result` ,`addtime` ,`content` ,`title` ,`acount` )VALUES (NULL , '".$memberinfo['uid']."', '2', '1', '".$backinfog['cost']."', '".$dotime."', '在线充值', '使用支付宝在线充值".$backinfog['cost']."元', '".$memberinfo['cost']."');");
					 
					 $acountinfo = file_get_contents($cfg['siteurl']."/index.php?ctrl=site&action=acountpayaddlog&id=".$out_trade_no);

    			 }elseif($backinfog['type'] == 'yhorder'){ 
					   mysql_query("UPDATE  `".$cfg['tablepre']."onlinelog` SET  `status` =  1 where `id`=".$out_trade_no." ");  
    			 	  mysql_query("UPDATE  `".$cfg['tablepre']."shophuiorder` SET  `paystatus` =  1,`status` =  1   where `id`=".$backinfog['upid']."");   
						$orderinfo =  mysql_query("SELECT * from `".$cfg['tablepre']."shophuiorder` where id = ".$backinfog['upid']." ");
						$orderinfo = mysql_fetch_assoc($orderinfo);
						
						if($orderinfo['uid'] > 0 && $orderinfo['givejifen'] > 0){
							$memberinfo =  mysql_query("SELECT * from `".$cfg['tablepre']."member` where uid = ".$orderinfo['uid']." "); 
							$memberinfo = mysql_fetch_assoc($memberinfo);
							if(!empty($memberinfo)){
								$sorce = $orderinfo['givejifen'];
								mysql_query("UPDATE  `".$cfg['tablepre']."member` SET  `score`=`score`+".$sorce." where `uid`=".$orderinfo['uid']."");  
								$allscore = $memberinfo['score']+$sorce;  
								mysql_query("INSERT INTO `".$cfg['tablepre']."memberlog` (`id` ,`userid` ,`type` ,`addtype` ,`result` ,`addtime` ,`content` ,`title` ,`acount` )VALUES (NULL , '".$memberinfo['uid']."', '1', '1', '".$sorce."', '".time()."', '优惠买单', '赠送积分".$sorce."元', '".$memberinfo['cost']."');");
							}
							
						}  
					 
					 
				}
    		}
    		// id  type  upid  cost  status  addtime 
    	}
		//判断该笔订单是否在商户网站中已经做过处理
			//如果没有做过处理，根据订单号（out_trade_no）在商户网站的订单系统中查到该笔订单的详细，并执行商户的业务程序
			//如果有做过处理，不执行商户的业务程序
				
		//注意：
		//该种交易状态只在两种情况下出现
		//1、开通了普通即时到账，买家付款成功后。
		//2、开通了高级即时到账，从该笔交易成功时间算起，过了签约时的可退款时限（如：三个月以内可退款、一年以内可退款等）后。

        //调试用，写文本函数记录程序运行情况是否正常
        //logResult("这里写入想要调试的代码变量值，或其他运行的结果记录");
    }
    else if ($_POST['trade_status'] == 'TRADE_SUCCESS') {
    	if(!empty($backinfog)){
    		if($backinfog['status'] == 0){
    			 if($backinfog['type'] == 'order'){
    			 	//更新此状态为1
    			 	//更新订单
    			 	 mysql_query("UPDATE  `".$cfg['tablepre']."onlinelog` SET  `status` =  1 where `id`=".$out_trade_no." ");  
    			 	 mysql_query("UPDATE  `".$cfg['tablepre']."order` SET  `paystatus` =  1,`status` =  1,`paytype_name` =  'alipay',`trade_no` =  ".$trade_no." where `id`=".$backinfog['upid']."");  
    			 	   
    			    $info = file_get_contents($cfg['siteurl']."/index.php?ctrl=site&action=postmsgbypay&orderid=".$backinfog['upid']);
    			 	 
    		   }elseif($backinfog['type'] == 'acount'){
    		  	 mysql_query("UPDATE  `".$cfg['tablepre']."onlinelog` SET  `status` =  1 where `id`=".$out_trade_no." ");  
    		  	 mysql_query("UPDATE  `".$cfg['tablepre']."member` SET  `cost` =  `cost`+".$backinfog['cost']." where `uid`=".$backinfog['upid']."");  
    		  	  $info =  mysql_query("SELECT * from `".$cfg['tablepre']."member` where uid = ".$backinfog['upid']." ");
              $memberinfo = mysql_fetch_assoc($info);
              $dotime = time(); 
    		  		mysql_query("INSERT INTO `".$cfg['tablepre']."memberlog` (`id` ,`userid` ,`type` ,`addtype` ,`result` ,`addtime` ,`content` ,`title` ,`acount` )VALUES (NULL , '".$memberinfo['uid']."', '2', '1', '".$backinfog['cost']."', '".$dotime."', '在线充值', '使用支付宝在线充值".$backinfog['cost']."元', '".$memberinfo['cost']."');");
			$acountinfo = file_get_contents($cfg['siteurl']."/index.php?ctrl=site&action=acountpayaddlog&id=".$out_trade_no);

    			 }elseif($backinfog['type'] == 'yhorder'){ 
					  mysql_query("UPDATE  `".$cfg['tablepre']."onlinelog` SET  `status` =  1 where `id`=".$out_trade_no." ");  
    			 	  mysql_query("UPDATE  `".$cfg['tablepre']."shophuiorder` SET  `paystatus` =  1,`status` =  1   where `id`=".$backinfog['upid']."");   
						$orderinfo =  mysql_query("SELECT * from `".$cfg['tablepre']."shophuiorder` where id = ".$backinfog['upid']." ");
						$orderinfo = mysql_fetch_assoc($orderinfo);
						
						if($orderinfo['uid'] > 0 && $orderinfo['givejifen'] > 0){
							$memberinfo =  mysql_query("SELECT * from `".$cfg['tablepre']."member` where uid = ".$orderinfo['uid']." "); 
							$memberinfo = mysql_fetch_assoc($memberinfo);
							if(!empty($memberinfo)){
								$sorce = $orderinfo['givejifen'];
								mysql_query("UPDATE  `".$cfg['tablepre']."member` SET  `score`=`score`+".$sorce." where `uid`=".$orderinfo['uid']."");  
								$allscore = $memberinfo['score']+$sorce;  
								mysql_query("INSERT INTO `".$cfg['tablepre']."memberlog` (`id` ,`userid` ,`type` ,`addtype` ,`result` ,`addtime` ,`content` ,`title` ,`acount` )VALUES (NULL , '".$memberinfo['uid']."', '1', '1', '".$sorce."', '".time()."', '优惠买单', '赠送积分".$sorce."元', '".$memberinfo['cost']."');");
							}
							
						}  
				}
    		}
    		// id  type  upid  cost  status  addtime 
    	}
		//判断该笔订单是否在商户网站中已经做过处理
			//如果没有做过处理，根据订单号（out_trade_no）在商户网站的订单系统中查到该笔订单的详细，并执行商户的业务程序
			//如果有做过处理，不执行商户的业务程序
				
		//注意：
		//该种交易状态只在一种情况下出现——开通了高级即时到账，买家付款成功后。

        //调试用，写文本函数记录程序运行情况是否正常
        //logResult("这里写入想要调试的代码变量值，或其他运行的结果记录");
    }

	//——请根据您的业务逻辑来编写程序（以上代码仅作参考）——
   mysql_close($lnk);      
	echo "success";		//请不要修改或删除
	
	/////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////
}
else {
    //验证失败
    echo "fail";

    //调试用，写文本函数记录程序运行情况是否正常
    //logResult("这里写入想要调试的代码变量值，或其他运行的结果记录");
}
 
?>