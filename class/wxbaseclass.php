<?php 

/**
 * @class baseclass 
 * @描述   基础类
 */
class wxbaseclass
{
	 public $mysql;
	 public $memberCls;
	 public $member;
	 public $pageCls;
	 public $admin;
	 public $digui;
	 function init(){
	 	     //主要是检测权限  
	 	     $controller = Mysite::$app->getController();
	 	     $this->mysql =  new mysql_class(); 
	 	     $this->memberCls = new memberclass($this->mysql); 
	 	     $this->member = $this->memberCls->getinfo();  
	 	     $this->pageCls = new page();
	 	     $this->admin =  $this->memberCls->getadmininfo();  
	 	     $this->digui = array();//递归处理数组
	 	     $data['member'] = $this->member; 
	 	     $data['admininfo'] = $this->admin;   
 	 	     $logintype = ICookie::get('logintype');  
			 
			if( !strpos($_SERVER["HTTP_USER_AGENT"],'MicroMessenger')    ){    //判断是微信浏览器不
				$data['WeChatType']  =  0;  
			}else{
				$data['WeChatType']   = 1;//微信端
			}			
			 
 if(Mysite::$app->config['wxLoginType'] == 0 ){
			 if(is_mobile_request()){ 

		 $action = Mysite::$app->getAction();
		   
		  		 
				 
				if( strpos($_SERVER["HTTP_USER_AGENT"],'MicroMessenger')  &&  $action != 'indexshoplistdata' &&   $action != 'shoplistdata' &&   $action != 'saveloation' &&   $action != 'index'  &&   $action != 'dwLocation'   && $action != 'shoplist'  ){    //判断是微信浏览器不
									 $wxopenid  = ICookie::get('wxopenid');  
										 
											 $code = IFilter::act(IReq::get('code')); 
											 $state = IFilter::act(IReq::get('state'));
											  
											 $doinsert = 0;
											 if(empty($wxopenid)){
													//echo 'openid 为空';
													if(empty($code)){
													   //跳转到微信OPenlink  
													   $this->getwxcode(); 
													}else{
														//返回code 
														 $this->setwxlogin($doinsert);
													} 
											 }else{
											       $wxinfo =  $this->mysql->select_one("select * from ".Mysite::$app->config['tablepre']."wxuser where openid='".$wxopenid."'");
												 
													if(empty($wxinfo)){
														/*未关注用户不可登陆*/
														if(empty($code)){
														  $this->getwxcode();  
														}else{ 
														   $this->setwxlogin($doinsert); 
														}
													}
											 } 
						}
						
						
			 }else{  
			 
						 
			 
											 $wxopenid  = ICookie::get('wxopenid');  
											 $code = IFilter::act(IReq::get('code')); 
											 $state = IFilter::act(IReq::get('state'));
											  
											 $doinsert = 0;
											 if(empty($wxopenid)){
													//echo 'openid 为空';
													if(empty($code)){
													   //跳转到微信OPenlink  
													   $this->getwxcode(); 
													}else{
														//返回code 
														 $this->setwxlogin($doinsert);
													} 
											 }else{
													 $wxinfo =  $this->mysql->select_one("select * from ".Mysite::$app->config['tablepre']."wxuser where openid='".$wxopenid."'");
												 
													if(empty($wxinfo)){
														/*未关注用户不可登陆*/
														if(empty($code)){
														  $this->getwxcode();  
														}else{ 
														   $this->setwxlogin($doinsert); 
														}
													}
													 
											 } 
						# }
							
			}


}  
			$checkmodule =  $this->mysql->select_one("select * from ".Mysite::$app->config['tablepre']."module  where name='".$controller."' and install=1 limit 0,20");  
	 	     if(empty($checkmodule) && !in_array($controller,array('site','market'))){ 
	 	         $this->message('未安装此模版'); 
	 	     }   
	 	     $action = Mysite::$app->getAction();  
	 	     $data['moduleid']= $checkmodule['id']; 
	 	     $data['moduleparent'] = $checkmodule['parent_id']; 
	 	     $id = intval(IFilter::act(IReq::get('id'))); 
	 	     $data['id'] = $id; 
	 	   
	 	     Mysite::$app->setdata($data);  
	 	     
	 } 
	 
	 private function curl_get_content($url)
	{
		$info = file_get_contents($url,true);
		return $info; 
	} 
	 //判断微信登陆
	 public function setwxlogin($doinsert =0){
	 	   $code = IFilter::act(IReq::get('code'));   
		   $userinfo = array();
	       $token_link = 'https://api.weixin.qq.com/sns/oauth2/access_token?appid='.Mysite::$app->config['wxappid'].'&secret='.Mysite::$app->config['wxsecret'].'&code='.$code.'&grant_type=authorization_code'; 
		   $token =json_decode($this->curl_get_content($token_link), TRUE); 
	       if(isset($token['access_token'])){
				$userinfo['openid'] = $token['openid'];
				$userinfo['unionid'] = $token['unionid'];
				$userinfo['access_token'] = $token['access_token'];
				$userinfo['refresh_token'] = $token['refresh_token'];
				$expires_in = $token['expires_in']; 
				if($expires_in < 1){
					//刷新CODE
					$refresh_link = 'https://api.weixin.qq.com/sns/oauth2/refresh_token?appid='.Mysite::$app->config['wxappid'].'&grant_type=refresh_token&refresh_token='.$userinfo['refresh_token'];
					$refresh =json_decode($this->curl_get_content($refresh_link), TRUE); 
					if(isset($refresh['access_token'])){
						$userinfo['openid'] = $refresh['openid'];
						$userinfo['unionid'] = $refresh['unionid'];
						$userinfo['access_token'] = $refresh['access_token'];
						$userinfo['refresh_token'] = $refresh['refresh_token'];
						$expires_in = $refresh['expires_in']; 
					}else{ 
						echo $refresh['errcode'];
					    exit;
					} 
				}
			
		}else{
			echo $token['errcode'];
			exit;
		}
		 
		
		$check_link = 'https://api.weixin.qq.com/sns/auth?access_token='.$userinfo['access_token'].'&openid='.$userinfo['openid'];
		$checkopen =json_decode($this->curl_get_content($check_link), TRUE); 
		if($checkopen['errcode'] == 0){
			
		}else{ 
			echo $checkopen['errcode'];
			exit; 
		} 
		
		//获取用户信息
		$getlink = 'https://api.weixin.qq.com/sns/userinfo?access_token='.$userinfo['access_token'].'&openid='.$userinfo['openid'];
		$wxuser =json_decode($this->curl_get_content($getlink), TRUE); 
		 
		
		if(isset($wxuser['openid'])){ 
		}else{
			echo $wxuser['errcode'];
			exit; 
		}
		 
		//构造微信APP登录 xiaozu_wxappoauth
		$wxoauth['openid'] = $wxuser['openid']; 
		$wxoauth['username'] =  $wxuser['nickname'];
		$wxoauth['imgurl'] = $wxuser['headimgurl']; 
		
		
		 
		 
		 //openId 
		 //username
		 //imgurl
		 //uid 
         //
        $oauthinfo =  $this->mysql->select_one("select * from ".Mysite::$app->config['tablepre']."wxuser where openid='".$wxuser['openid']."'  ");
		if(empty($oauthinfo)){//写用户数据  
					$arr['username'] = $wxoauth['openid'];
					$arr['phone'] = '';
					$arr['address'] = '';
					$arr['password'] = md5($wxoauth['openid']);
					$arr['email'] = '';
					$arr['creattime'] = time(); 
					$arr['score']  =0;
				    $arr['logintime'] = time(); 
				 
					$arr['loginip'] ='';
					$arr['group'] = 10;
					$arr['logo'] = $wxoauth['imgurl'];
					$arr['sex'] = $wxuser['sex'];  //用户的性别，值为1时是男性，值为2时是女性，值为0时是未知 
					$newusername = $wxoauth['username'];
					$checkusername ='xxx';
				    $k = 0;
					while(!empty($checkusername)){
						$newusername = $k==0? $newusername:$newusername.$k;
						$checkusername = $this->mysql->select_one("select * from ".Mysite::$app->config['tablepre']."member where username ='".$newusername."' ");
						$k = $k+1;
						if(empty($checkusername)){
							break;
						}
					}
					$arr['username'] = $newusername; 
					$this->mysql->insert(Mysite::$app->config['tablepre']."member",$arr);
					$uid = $this->mysql->insertid(); 
					
					$mbdata['uid'] = $uid;
					$mbdata['openid'] = $wxoauth['openid'];
					$mbdata['is_bang'] = 0; 
					$mbdata['access_token'] = $userinfo['access_token'];
					$mbdata['expires_in'] = $userinfo['expires_in']+time();
					$mbdata['refresh_token'] = $userinfo['refresh_token']; 
					$this->mysql->insert(Mysite::$app->config['tablepre'].'wxuser',$mbdata);   
		}else{//更新用户数据  
			$mbdata['access_token'] = $userinfo['access_token'];
			$mbdata['expires_in'] = $userinfo['expires_in']+time();
			$mbdata['refresh_token'] = $userinfo['refresh_token']; 
			$this->mysql->update(Mysite::$app->config['tablepre'].'wxuser',$mbdata,"openid='".$wxuser['openid']."'");    
			$membercheck = $this->mysql->select_one("select * from ".Mysite::$app->config['tablepre']."member where uid ='".$oauthinfo['uid']."' ");    
			if(!empty($membercheck)){
				if(empty($membercheck['username'])){
					$newusername = $wxoauth['username'];
					$checkusername ='xxx';
				    $k = 0;
					while(!empty($checkusername)){
						$newusername = $k==0? $newusername:$newusername.$k;
						$checkusername = $this->mysql->select_one("select * from ".Mysite::$app->config['tablepre']."member where username ='".$newusername."' ");
						$k = $k+1;
						if(empty($checkusername)){
							break;
						}
					}
					$cnewdata['username'] = $newusername; 
				}
				$cnewdata['logo'] = $wxoauth['imgurl'];
				$cnewdata['sex'] = $wxuser['sex']; 
				$this->mysql->update(Mysite::$app->config['tablepre'].'member',$cnewdata,"uid='".$oauthinfo['uid']."'");  
			}else{
				$arr['username'] = $wxoauth['openid'];
				$arr['phone'] = '';
				$arr['address'] = '';
				$arr['password'] = md5($wxoauth['openid']);
				$arr['email'] = '';
				$arr['creattime'] = time(); 
				$arr['score']  =0;
				$arr['logintime'] = time();  
				$arr['loginip'] ='';
				$arr['group'] = 10;
				$arr['logo'] = $wxoauth['imgurl'];
				$arr['sex'] = $wxoauth['sex'];  //用户的性别，值为1时是男性，值为2时是女性，值为0时是未知 
				$arr['uid'] = $oauthinfo['uid'];
				$newusername = $wxoauth['username'];
				$checkusername ='xxx';
				$k = 0;
				while(!empty($checkusername)){
					$newusername = $k==0? $newusername:$newusername.$k;
					$checkusername = $this->mysql->select_one("select * from ".Mysite::$app->config['tablepre']."member where username ='".$newusername."' ");
					$k = $k+1;
					if(empty($checkusername)){
						break;
					}
				}
				$arr['username'] = $newusername; 
				$this->mysql->insert(Mysite::$app->config['tablepre']."member",$arr);
				$uid = $this->mysql->insertid();
			}	
			
		}
		ICookie::set('logintype','wx',86400);
		ICookie::set('wxopenid',$wxuser['openid'],86400); 
	 } 
	 public function getwxcode(){
		 
			 
			 
		 
	 	  //  $myurl=  IUrl::getUrl();
	 	//  $content = 'https://open.weixin.qq.com/connect/oauth2/authorize?appid=wx520c15f417810387&redirect_uri=http%3A%2F%2Fchong.qq.com%2Fphp%2Findex.php%3Fd%3D%26c%3DwxAdapter%26m%3DmobileDeal%26showwxpaytitle%3D1%26vb2ctag%3D4_2030_5_1194_60&response_type=code&scope=snsapi_base&state=123#wechat_redirect';
	 //	  print_r(urldecode($content));
	 	//   print_r('<br>');
	 	    $myurl = Mysite::$app->config['siteurl'].$_SERVER["REQUEST_URI"];  
	 	//    print_r($myurl);
	 	  // print_r('<br>');
		 
	 	    $newurl = urlencode($myurl);
			 
	 	    $getlink = "https://open.weixin.qq.com/connect/oauth2/authorize?appid=".Mysite::$app->config['wxappid']."&redirect_uri=".$newurl."&response_type=code&scope=snsapi_userinfo&state=123#wechat_redirect";
	 	//    print_r($getlink);
	 	   header("location:".$getlink);
	 	    exit;
	 	    // $info = file_get_contents($getlink);
	 }
	 public function checkadminlogin(){
	 	 $link = IUrl::creatUrl('member/adminlogin'); 
	 	 if($this->admin['uid'] == 0) $this->message('未登陆',$link); 
	 }
	 public function checkmemberlogin(){
	 	 $link = IUrl::creatUrl('member/login'); 
	 	 if($this->member['uid'] == 0) $this->message('未登陆',$link); 
	 }
	 public function checkshoplogin(){
	 	 $link = IUrl::creatUrl('member/shoplogin'); 
	 	 if($this->member['uid'] == 0&&$this->admin['uid'] == 0)  $this->message('未登陆',$link); 
	 	 $shopid = ICookie::get('adminshopid');
	 	 if(empty($shopid)) $this->message('未登陆',$link); 
	 }
	 public static function sqllink($where,$sqlkey,$sqlvalue,$fuhao){
	 	  if(empty($sqlvalue)){
	 	     return  $where;
	 	  }else{
	 	  	 if(empty($where)){
	 	  	   return  '`'.$sqlkey.'`'.$fuhao.'\''.$sqlvalue.'\'';
	 	  	 }else{
	 	  	 	 return $where.' and `'.$sqlkey.'`'.$fuhao.'\''.$sqlvalue.'\'';
	 	  	 }
	 	  }
	   
	 }
	 public static function message($msg,$link=''){
	 
	 		$datatype = IFilter::act(IReq::get('datatype')); 
	 		if($datatype == 'json'){
	 			 //languagecls
	 			 $lngcls = new languagecls();
	 			 $msg = $lngcls->show($msg);
	 			 echo json_encode(array('error'=>true,'msg'=>$msg));  
	       exit; 
	 		}else{   
         self::refunction($msg,$link);
	 		} 
   }
   public static function refunction($msg,$info=''){
   	  $newrul = empty($info)?Mysite::$app->config['siteurl']:$info;
	    header("Content-Type:text/html;charset=utf-8"); 
	    if(!empty($msg))
	    {
	    	 $lngcls = new languagecls();
	 			 $msg = $lngcls->show($msg);
			   echo '<script>alert(\''.$msg.'\');location.href=\''.$newrul.'\';</script>';
		  }else{
		     echo '<script>location.href=\''.$newrul.'\';</script>';
	  	}
      exit;
   }
   public static function success($msg,$link=''){
   	   $datatype = IFilter::act(IReq::get('datatype')); 
	 		if($datatype == 'json'){
	 			 echo json_encode(array('error'=>false,'msg'=>$msg)); 
	       exit; 
	 		}else{
	 			 self::refunction($msg,$link); 
	 		}
    	
   }
   
	 public static function shopIsopen($is_open,$starttime,$is_orderbefore,$nowhour){ 
		  $find = 0 ;
		  $hfind =0;
		  $gotime ='';
		  $opentype = 0;
		  $endtime = '';
		  $checkstart = '';
		  $checkend = '';
		  if($is_open == 0){
		  	   $opentype = 4;//店铺休息
		  }else{
		 	if(empty($starttime)){
		 		  $opentype = 1;//已打烊
		 	}else{
		 		$foo = explode('|',$starttime);
				$opentime=array();
		 		foreach($foo as $key=>$value){
		 			
		 			if(!empty($value)){
		 				$mytime = explode('-',$value);
		 			 
		 				if(count($mytime) > 1){
		 				
		 					$time1 = strtotime($mytime[0]);
		 					$time2 = strtotime($mytime[1]);
							$opentime[]=$time1;
		 					if($nowhour >= $time1 && $nowhour <= $time2){
		 						$find = 1;
		 						$opentype = 2;//营业中 
		 						$gotime = empty($gotime)?$mytime[0]:$gotime;
		 						$endtime = !empty($mytime[1])?strtotime($mytime[1]):$endtime;
		 					}
		 					if($nowhour <= $time2){
//		 						$hfind = 1;
		 						$gotime = empty($gotime)?$mytime[0]:$gotime; 
		 						$checkstart = empty($checkstart)?strtotime($mytime[0]):$checkstart; 
		 					  $checkend = !empty($mytime[1])?strtotime($mytime[1]):$checkend;
		 					} 
		 				}
		 			}
		 		}

					if($nowhour < $opentime[0]){
						$hfind = 1;
					}

		 		if($opentype == 0){
		 		   if($is_orderbefore == 1 && $hfind ==1){
		 			   $opentype = 3;//3接受预定 
		 		   }
		 		} 
		 	}
		 } 
		 return array('opentype'=>$opentype,'newstartime'=>$gotime,'endtime'=>$endtime,'startoktime'=>$checkstart,'startendtime'=>$checkend); 
	 }
	 public function pscost($shopinfo,$goodsnum=0,$tareaid=0){
  	$backdata = array('pscost'=>0,'pstype'=>0,'canps'=>0);
  	$locationtype = Mysite::$app->config['locationtype'];
  	if($locationtype == 1  && $tareaid == 0 ){
  	  //地图模式
  	  $valuelist = empty($shopinfo['pradiusvalue'])? unserialize(Mysite::$app->config['radiusvalue']):unserialize($shopinfo['pradiusvalue']);
  	   $lat = ICookie::get('lat');  
  	  if(!empty($lat)){ 
  	       	  $lng = ICookie::get('lng');   
  	       	  $lat = empty($lat)?0:$lat;
  	       	  $lng = empty($lng)?0:$lng;
  	       	  $shoplat = isset($shopinfo['lat'])?$shopinfo['lat']:0;
  	       	  $shoplng = isset($shopinfo['lng'])?$shopinfo['lng']:0;
  	       	  $juli =  $this->GetDistance($lat,$lng, $shoplat,$shoplng, 1); 
  	       	  $pradiusvalue =  unserialize($shopinfo['pradiusvalue']);
  	       	  $juliceshi = intval($juli/1000);
  	       	  if(is_array($valuelist)){
  	       	  foreach($valuelist as $key=>$value){
  	       	    if($juliceshi == $key){
  	       	        $backdata['pscost'] = $value;
  	       	        $backdata['canps'] = 1;
  	       	    }
  	       	  }
  	       	} 
  	  }
  	  
  	}else{
  	  //区域模式
  	  //pradiusvalue	pscost
  	  $backdata['pscost'] = $shopinfo['pscost'];
  	  $areaid = ICookie::get('myaddress');
	    $areaid = $tareaid==0?$areaid:$tareaid;
  	  if(!empty($areaid)){  
  	  	$checkareainfo = $this->mysql->select_one("select * from ".Mysite::$app->config['tablepre']."areashop where areaid = ".$areaid." and shopid = ".$shopinfo['id'].""); 
  	  	if(!empty($checkareainfo)) $backdata['canps'] = 1;
  	  }
  	}
  	$backdata['pstype'] = $shopinfo['sendtype']; 
  	return $backdata; 
  }
  
  //发送通知信息
  
   public function checkpsinfo(){
	 	 $link = IUrl::creatUrl('member/login'); 
	 	 if($this->member['uid'] == 0) $this->message('未登陆',$link); 
	 	 $link = IUrl::creatUrl('member/base');
	 	 if($this->member['group'] != 2) $this->message('不是配送员',$link); 
	}
  
  
   function GetDistance($lat1, $lng1, $lat2, $lng2, $len_type = 1, $decimal = 2)
  {
     
    	 $earth = 6378.137;
    	 $pi = 3.1415926;
       $radLat1 = $lat1 * PI ()/ 180.0;   //PI()圆周率
       $radLat2 = $lat2 * PI() / 180.0;
       $a = $radLat1 - $radLat2;
       $b = ($lng1 * PI() / 180.0) - ($lng2 * PI() / 180.0);
       $s = 2 * asin(sqrt(pow(sin($a/2),2) + cos($radLat1) * cos($radLat2) * pow(sin($b/2),2)));
       $s = $s * EARTH_RADIUS;
       $s = round($s * 1000);
       if ($len_type > 1)
       {
           $s /= 1000;
       }
       return round($s, $decimal);
   } 
   function  getOpenPosttime($is_before,$starttime,$postdate,$minit,$befortime=0){ 
	    $backarray = array('is_opentime'=>0,'is_posttime'=>'','is_postdate'=>'','cost'=>0);
		$maxnowdaytime = strtotime(date('Y-m-d',time()));
		$daynottime = 24*60*60 -1; 
		$findpostime = false; 
		$posttime = time();
  		$miniday = $maxnowdaytime;
  		$maxday = $miniday+$daynottime; 
  	 
  		 
  	    $findps = false;
		$timelist = !empty($postdate)?unserialize($postdate):array();
		$data['pstimelist'] = array();
		$checknow = time();
		 $whilestatic = $befortime;
		$nowwhiltcheck = 0; 
		while($whilestatic >= $nowwhiltcheck){ 
		
		 
		    $nowstartcheck = $nowwhiltcheck*86400;
			foreach($timelist as $key=>$value){
				$docheck = $nowstartcheck+$value['s']; 
				if($docheck== $minit){
					$findps = true;
					$tempt['s'] = date('H:i',$miniday+$value['s']);
					$tempt['e'] = date('H:i',$miniday+$value['e']);
					$backarray['is_posttime'] = $nowstartcheck+$miniday+$value['s'];
					$backarray['is_postdate'] =  $tempt['s'] .'-'.$tempt['e'];
					$checkdotime = $nowstartcheck+$miniday+$value['e'];
					$backarray['cost'] = isset($value['cost'])?$value['cost']:0;
					if($checkdotime < $posttime){
						$backarray['is_opentime'] = 3; 
					}
					break;
				} 
			}
			$nowwhiltcheck = $nowwhiltcheck+1;
		}
		if($findps ==  false){
			$backarray['is_opentime'] = 2; 
		}
		 
		 return $backarray;
		 
		 
	}
   
   
}
?>