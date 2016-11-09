<?php
//注册函数
 function FUNC_function($params,$smarty)
{ 
	  global $config;
	  $siteconfig = include($config);
	  $returndata = '';
	  switch($params['type'])
	  {
	  	 case 'url'://构造方式  /link/data
	  	   if(empty($params['link'])){
	  	   	$returndata = $siteconfig['siteurl']; 
	  	   }else{   
	  	   	   if($siteconfig['is_static'] == 1){//全静态
	  	   	 	       $returndata=$siteconfig['siteurl'].$params['link'];
	  	   	   }elseif($siteconfig['is_static'] == 2){//半静态
	  	   	   	    $returndata=$siteconfig['siteurl'].'/index.php'.$params['link'];
	  	   	   }else{//全动态
	  	   	   	   $dolink = explode('/',$params['link']);
	  	   	   	   $findkey = 0;
	  	   	 	    foreach($dolink as $key=>$value){ 
	  	   	 	  	 if(!empty($value)){
	  	   	 	  	 	  if($findkey == 0){
	  	   	 	  	 	  	$returndata=$siteconfig['siteurl'].'/index.php?ctrl='.$value;
	  	   	 	  	 	  }elseif($findkey == 1){
	  	   	 	  	 	  	$returndata .='&action='.$value;
	  	   	 	  	 	  }else{
	  	   	 	  	 	  	$returndata .= $findkey%2==0?'&'.$value:'='.$value;
	  	   	 	  	 	  }
	  	   	 	  	 	  $findkey++; 
	  	   	 	    	} 
	  	   	 	    } 
	  	   	 	
	  	   	   }
	  	   	 
	  	   }
	  	 break;
	  	 default:
	  	   $returndata = '调用你参数不足';
	  	 break;
	  	 
	  } 
		return $returndata;
}
//$smarty->registerPlugin("function","OFUC", "FUNC_function");
//$smarty->registerPlugin("block","OBLC", "FUNC_block");
//注册函数
function FUNC_block($params, $content, $smarty, &$repeat, $template)
{
		if (isset($content)) {   
			 $lang = $params["lang"];    
			 // do some translation with $content   
	      return $translation;
	  }
} 
	function getgoodscx($cost,$cxdata){
		$newarray = array('is_cx'=>0,'cost'=>$cost,'zhekou'=>10);
		if(!empty($cxdata)){
					//   	goodscx
			$nowdate = date('Y-m-d',time());
			$nowtime = time(); 
			if($nowtime > $cxdata['cxstarttime'] && $nowtime< $cxdata['ecxendttime']){
				//在促销时间段
				$checktime = $nowtime-strtotime($nowdate);
				if($checktime > $cxdata['cxstime1']  && $checktime < $cxdata['cxetime1']){
					$newarray['cost'] = $cost*$cxdata['cxzhe']*0.01;
					$newarray['is_cx'] = 1;
					$newarray['zhekou'] = $cxdata['cxzhe']*0.1;
					
					 //表示在促销
				}else{
					if($checktime > $cxdata['cxstime2']  && $checktime < $cxdata['cxetime2']){
						//表示在促销
						$newarray['cost'] = $cost*$cxdata['cxzhe']*0.01;
						$newarray['is_cx'] = 1;
						$newarray['zhekou'] = $cxdata['cxzhe']*0.1;
					} 
				}
			}
		} 
		return $newarray; 
	}
function is_mobile_request()   
{   
  $_SERVER['ALL_HTTP'] = isset($_SERVER['ALL_HTTP']) ? $_SERVER['ALL_HTTP'] : '';   
   
  if(preg_match('/(up.browser|up.link|mmp|symbian|smartphone|midp|wap|phone|iphone|ipad|ipod|android|xoom)/i', strtolower($_SERVER['HTTP_USER_AGENT'])))   
  {
  	return true;
  }
  if((isset($_SERVER['HTTP_ACCEPT'])) and (strpos(strtolower($_SERVER['HTTP_ACCEPT']),'application/vnd.wap.xhtml+xml') !== false)) {
    return true;
  } 
  
  if(isset($_SERVER['HTTP_X_WAP_PROFILE']))  
  {
  	return true;
  }  
  if(isset($_SERVER['HTTP_PROFILE']))   
  {
  	return true;
  }
  $mobile_ua = strtolower(substr($_SERVER['HTTP_USER_AGENT'],0,4));   
  $mobile_agents = array(   
        'w3c ','acs-','alav','alca','amoi','audi','avan','benq','bird','blac',   
        'blaz','brew','cell','cldc','cmd-','dang','doco','eric','hipt','inno',   
        'ipaq','java','jigs','kddi','keji','leno','lg-c','lg-d','lg-g','lge-',   
        'maui','maxo','midp','mits','mmef','mobi','mot-','moto','mwbp','nec-',   
        'newt','noki','oper','palm','pana','pant','phil','play','port','prox',   
        'qwap','sage','sams','sany','sch-','sec-','send','seri','sgh-','shar',   
        'sie-','siem','smal','smar','sony','sph-','symb','t-mo','teli','tim-',   
        'tosh','tsm-','upg1','upsi','vk-v','voda','wap-','wapa','wapi','wapp',   
        'wapr','webc','winw','winw','xda','xda-'  
        );   
  if(in_array($mobile_ua, $mobile_agents))   
  {
  	return true;
  }
    
  if(strpos(strtolower($_SERVER['ALL_HTTP']), 'operamini') !== false)   
  {
  	return true;
  }
  if(strpos(strtolower($_SERVER['HTTP_USER_AGENT']), 'windows phone') !== false)  {
  return true;
  }
  return false;
} 
function error($type,$msg){
	 
		logwrite($msg,1); 
 
}
function logwrite($msg,$checkflag = 1){
	/*写日志*/
	//时间   操作内容
	if($checkflag == 1){
	 
		$nowdate = date('Y-m-d',time());
		if(!file_exists(hopedir.'log/'.$nowdate.'.php'))//创建文件
	  { 
		if(!is_dir(hopedir.'log')){
			 mkdir(hopedir.'log', 0777);
		}
		$fp = @fopen(hopedir.'log/'.$nowdate.'.php', 'w');
		@fclose($fp); 
	  }
	  $file=fopen(hopedir.'log/'.$nowdate.'.php',"a+");
	  $linsk = $_SERVER['REQUEST_URI'];
	  $content = "时间:".date('Y-m-d H:i:s',time()).",".$linsk."描述:".$msg."\r\n";
	  fwrite($file, $content); 
	  fclose($file);
  }
   
   
}

function limitalert(){
  //$tmsg = '您暂无权限设置,如有疑问请联系QQ：375952873  Tel：18538930577';
    //return  $tmsg;  
 	}

?>