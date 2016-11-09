<?php
class method   extends areaadminbaseclass
{
	 function savearea(){
	   
	  $id = intval(IReq::get('uid'));
		$data['name'] = IReq::get('name');
		$data['orderid']  = intval(IReq::get('orderid'));
		$data['pin'] = IReq::get('pin');
		$data['parent_id'] = intval(IReq::get('parent_id'));
		$data['imgurl'] = IReq::get('imgurl');
		$data['is_com'] = intval(IReq::get('is_com'));
		if(empty($id))
		{
			$data['lng'] = 0;
		  $data['lat'] = 0;
			$link = IUrl::creatUrl('area/adminarealist');
			if(empty($data['name']))  $this->message('area_emptyname',$link);
			if(empty($data['pin']))	$this->message('area_emptyfirdstword',$link);
			if($data['parent_id'] == 0 )$this->message('area_cantaddfirstarea',$link);
			 $checkarea = $this->mysql->select_one("select * from ".Mysite::$app->config['tablepre']."area where id =".$data['parent_id']."");
      if($checkarea['admin_id'] != $this->admin['uid']) $this->message('area_noownmanegeparent');
      $data['admin_id'] = $this->admin['uid'];
			if(!$this->mysql->insert(Mysite::$app->config['tablepre'].'area',$data)){
			   $this->message('system_err');
			} 
		}else{
			$link = IUrl::creatUrl('area/adminarealist/id/'.$id);
			if(empty($data['name']))  $this->message('area_emptyname',$link);
			if(empty($data['pin']))	$this->message('area_emptyfirdstword',$link);
			if($data['parent_id'] == 0)$this->message('area_cantaddfirstarea',$link);
		  $checkarea = $this->mysql->select_one("select * from ".Mysite::$app->config['tablepre']."area where id =".$data['parent_id']."");
      if($checkarea['admin_id'] != $this->admin['uid']) $this->message('area_noownmanegeparent');
      $checkarea = $this->mysql->select_one("select * from ".Mysite::$app->config['tablepre']."area where id =".$id."");
      if($checkarea['admin_id'] != $this->admin['uid']) $this->message('area_noownmange'); 
			$this->mysql->update(Mysite::$app->config['tablepre'].'area',$data,"id='".$id."'");
		}
		$link = IUrl::creatUrl('area/adminarealist');
		$this->success('success',$link);
	 }
	    
	 function adminarealist(){
	 	 $areainfo = $this->mysql->getarr("select * from ".Mysite::$app->config['tablepre']."area  where admin_id = '".$this->admin['uid']."'  order by orderid asc");
	  //	print_r($areainfo);
		//&nbsp;&nbsp;&nbsp;&nbsp;
		$parentids = array();
		foreach($areainfo as $key=>$value){
		  $parentids[] = $value['parent_id'];
		}
		//去重
		$parentids = array_unique($parentids);
		$data['parent_ids'] = $parentids;
	 	 $this->getgodigui($areainfo,0,0);
	 	 $data['arealist'] = $this->digui;

	 
	 	 Mysite::$app->setdata($data);
	 }
	 function setps(){
		$shopid =  intval(IReq::get('shopid'));
	 	  if(empty($shopid))
	 	  {
	 	  	 echo '店铺不存在';
	 	  	 exit;
	 	   }
	 	  $shopinfo= $this->mysql->select_one("select * from ".Mysite::$app->config['tablepre']."shop where id=".$shopid."  ");
	 	  if(empty($shopinfo))
	 	  {
	 	     echo '店铺不存在';
	 	  	 exit;
	 	  }
	 	  $tempinfo = array();
	 	  if($shopinfo['shoptype'] == 0){ 
	 	     $tempinfo = 	$this->mysql->select_one("select * from ".Mysite::$app->config['tablepre']."shopfast where shopid=".$shopid."  ");
	 	  }else{
	 	  	$tempinfo = 	$this->mysql->select_one("select * from ".Mysite::$app->config['tablepre']."shopmarket where shopid=".$shopid."  ");
	 	  }
	   $data['shopinfo'] = $shopinfo;
	   $data['shopdetinfo'] = $tempinfo;
	   
	   
	   //地区信息 
	    $areainfo = $this->mysql->getarr("select * from ".Mysite::$app->config['tablepre']."area  where admin_id = '".$this->admin['uid']."' order by orderid asc");
	  //	print_r($areainfo);
		//&nbsp;&nbsp;&nbsp;&nbsp;
		$parentids = array();
		foreach($areainfo as $key=>$value){
		  $parentids[] = $value['parent_id'];
		}
		//去重
		$parentids = array_unique($parentids);
		$data['parent_ids'] = $parentids;
	 	 $this->getgodigui($areainfo,0,0);
	 	 $data['arealist'] = $this->digui; 
	 	 
	 	 
	 	 //配送费  
	 	 $data['shopvalues'] = array();
	 	 if(empty($tempinfo['pradiusvalue'])){
	 	 	 $data['shopvalues'] = unserialize(Mysite::$app->config['radiusvalue']);
	 	 }else{
	 	 	$data['shopvalues'] =  unserialize($tempinfo['pradiusvalue']);
	 	 }
	 	 $data['dolenth'] = count($data['shopvalues']);
	 	 
	 	 
	 	 
	 	 //店铺可配送区域
	 	 $choicelist = $this->mysql->getarr("select * from ".Mysite::$app->config['tablepre']."areashop where shopid = ".$shopid."   order by areaid asc limit 0,1000");
	 	 $temp = array();
	 	 foreach($choicelist as $key=>$value){
	 	   $temp[]= $value['areaid'];
	 	 }
	 	 $data['choiceid']  = $temp; 
	   Mysite::$app->setdata($data);
	}
	function savesetps(){
		$shopid =  intval(IReq::get('shopid'));
		if(empty($shopid)){ 
			 echo "<script>parent.uploaderror('店铺ID不存在');</script>";
		 	 exit; 
		}
		$shopinfo= $this->mysql->select_one("select * from ".Mysite::$app->config['tablepre']."shop where id=".$shopid."  ");
		if(empty($shopinfo)){
			echo "<script>parent.uploaderror('店铺不存在');</script>";
		 	 exit; 
		}
		 $tempinfo = array();
	 	  if(empty($shopinfo['shoptype'])){ 
	 	     $tempinfo = 	$this->mysql->select_one("select * from ".Mysite::$app->config['tablepre']."shopfast where shopid=".$shopid."  ");
	 	  }else{
	 	  	$tempinfo = 	$this->mysql->select_one("select * from ".Mysite::$app->config['tablepre']."shopmarket where shopid=".$shopid."  ");
	 	  }
	  if(empty($tempinfo)){
	  	echo "<script>parent.uploaderror('店铺数据不存在');</script>";
		 	 exit; 
	  }
	  $data['sendtype'] = intval(IReq::get('sendtype'));
	  $data['pscost'] =  intval(IReq::get('pscost'));
	  $data['pradius'] = intval(IReq::get('pradius'));
	  $tempdo = array();
	  for($i=0;$i< $data['pradius'];$i++){
	    $tempdo[$i] = intval(IReq::get('radiusvalue'.$i));
	  }
	  $data['pradiusvalue'] = serialize($tempdo);
	   
	 if(empty($shopinfo['shoptype'])){ 
	 	   $this->mysql->update(Mysite::$app->config['tablepre'].'shopfast',$data,"shopid='".$shopid."'");
	 }else{
	 	  $this->mysql->update(Mysite::$app->config['tablepre'].'shopmarket',$data,"shopid='".$shopid."'");
	 }//更新店铺配送设置
	 $areaids = IReq::get('areaids');
	 if(is_array($areaids)){
	 	   
	 	   //首先清理数据存在的区域数据
	 	   $this->mysql->delete(Mysite::$app->config['tablepre']."areashop"," shopid='".$shopid."'  "); 
	 	   $checkareais = $areaids;
	 	   while(count($checkareais) > 0){
	 	   	   $checkarealist = $this->mysql->getarr("select * from ".Mysite::$app->config['tablepre']."area where id in(".join(',',$checkareais).") and admin_id='".$this->admin['uid']."'  order by id desc limit 0,1000");
	 	   	   $checkareais = array();
	 	   	   foreach($checkarealist as $key=>$value){
	 	   	   	  $areadata['shopid'] = $shopid;
	 	   	   	  $areadata['areaid'] = $value['id']; 
	 	   	      $this->mysql->insert(Mysite::$app->config['tablepre']."areashop",$areadata);
	 	   	      if($value['parent_id'] > 0){
	 	   	        $checkareais[] = $value['parent_id'];
	 	   	      }
	 	   	   }
	 	       $checkareais = array_unique($checkareais);
	 	   }
	 	   
	 	
	 	 
  	}else{
  		if(Mysite::$app->config['locationtype'] !=1){
  		  echo "<script>parent.uploaderror('配送区域未选择');</script>";
		 	 exit; 
  		}
  			
  	}
  	 
	   echo "<script>parent.uploadsucess('');</script>";
		 exit;
	  
	}
	 //递归转换保存到数据中
	 /*
	 arraylist 数据数据
	 $nowid  当前接点的parent_ID,
	 $nowkey  当前循环次数
	 */
	 function getgodigui($arraylist,$nowid,$nowkey){
	 	   if(count($arraylist) > 0){
	 	      foreach($arraylist as $key=>$value){
	 	         if($value['parent_id'] == $nowid){
	 	             $value['space'] = $nowkey;
	 	             $donextkey = $nowkey+1;
	 	             $donextid = $value['id'];
	 	             $this->digui[] = $value;
	 	              $this->getgodigui($arraylist,$donextid,$donextkey);
	 	         }
	 	      }

	 	   }
	 }
  function baidumap(){
    $id = intval(IReq::get('id'));
		 $areainfo = $this->mysql->select_one("select * from ".Mysite::$app->config['tablepre']."area where  id = '$id' and admin_id = '".$this->admin['uid']."' order by id asc");
		 if(empty($areainfo)){
		   echo '获取信息失败';
		   exit;
		 }
		 $is_name = 1;
		 $data['arealng'] = 0;
		 $data['arealat'] = 0;
		 $data['nowcityname'] = '';
		 if(empty($areainfo['parent_id'])){
		    $data['nowcityname'] = $areainfo['name'];
		    $checklng = intval($areainfo['lng']);
		    if(!empty($checklng)){
		      $is_name = 2;
		      $data['arealng'] = $areainfo['lng'];
		      $data['arealat'] = $areainfo['lat'];
		    }

		 }else{
		 	   $data['nowcityname'] = $areainfo['name'];
		 	    $pinfo = $this->mysql->select_one("select * from ".Mysite::$app->config['tablepre']."area where  id = '".$areainfo['parent_id']."' and admin_id = '".$this->admin['uid']."' order by id asc");
		 	    if(empty($pinfo)){
		         echo '获取上级地址失败';
		         exit;
		      }
		     $checklng = intval($areainfo['lng']);
		     if(!empty($checklng)){
		        $is_name = 2;
		        $data['arealng'] = $areainfo['lng'];
		        $data['arealat'] = $areainfo['lat'];
		     }else{
		     	   $checklng2 = intval($pinfo['lng']);
		     	   if(!empty($checklng2)){
		     	     $is_name = 2;
		           $data['arealng'] = $pinfo['lng'];
		           $data['arealat'] = $pinfo['lat'];
		         }else{

		           echo '未设置上级地址百度坐标';
		           exit;
		         }
		     }



		 }
		 $data['arealng'] = $data['arealng'] == 0?Mysite::$app->config['baidulng']:$data['arealng'];
		 $data['arealat'] = $data['arealat'] == 0?Mysite::$app->config['baidulat']:$data['arealat'];
      
		 $data['is_name'] = $is_name;
		 $data['myareaid'] = $id;
		 $data['baidumapkey'] = Mysite::$app->config['baidumapkey'];
		 Mysite::$app->setdata($data);
  }
  function savemaplocation(){
  	 $id = intval(IReq::get('id'));
		if($id < 1){
		  $this->message('area_empty');
		}
		 $data['lng'] = IReq::get('lng');
		$data['lat'] = IReq::get('lat');
		if(empty($data['lng'])) $this->message('emptylng');
		if(empty($data['lat'])) $this->message('emptylat');
		 $areainfo = $this->mysql->select_one("select * from ".Mysite::$app->config['tablepre']."area where  id = '".$id."' order by id asc");
		 if(empty($areainfo)) $this->message('area_empty');
		 if($areainfo['admin_id'] != $this->admin['uid']) $this->message('area_noownmange');
		$this->mysql->update(Mysite::$app->config['tablepre'].'area',$data,"id='".$id."'");
		if(!empty($areainfo)){
	    $areasearch = new areasearch($this->mysql);    
      $areasearch->setdata($areainfo['name'],'1',$id,$areainfo['lat'],$areainfo['lng']);
      $areasearch->del();
      if($areasearch->save()){
    	
      }else{
       $checkinfo = $areasearch->error(); 
      } 
    }
		
		
		
	   $this->success('success');
  }
	 
	function delarea()
	{
		 $uid = intval(IReq::get('id'));
		 if(empty($uid))  $this->message('area_empty');
		 $areainfo = $this->mysql->select_one("select * from ".Mysite::$app->config['tablepre']."area where  parent_id = '".$uid."' order by id asc");
		 if(!empty($areainfo)) $this->message('area_isextchild');
		 $areainfo = $this->mysql->select_one("select * from ".Mysite::$app->config['tablepre']."area where  id = '".$uid."' order by id asc");
		 if(empty($areainfo)) $this->message('area_empty');
		 if($areainfo['admin_id'] != $this->admin['uid']) $this->message('area_noownmange');

	   $this->mysql->delete(Mysite::$app->config['tablepre'].'area',"id = '$uid'"); 
	   $this->mysql->delete(Mysite::$app->config['tablepre'].'areashop',"areaid = '$uid'"); 

	   $this->success('success');;
	}
	function addarealist(){
		 $areainfo = $this->mysql->getarr("select * from ".Mysite::$app->config['tablepre']."area  where admin_id='".$this->admin['uid']."' order by orderid asc");
	  //	print_r($areainfo);
		//&nbsp;&nbsp;&nbsp;&nbsp;
		$parentids = array();
		foreach($areainfo as $key=>$value){
		  $parentids[] = $value['parent_id'];
		}
		//去重
		$parentids = array_unique($parentids);
		$data['parent_ids'] = $parentids;
	 	 $this->getgodigui($areainfo,0,0);
	 	 $data['arealist'] = $this->digui;
	 	 Mysite::$app->setdata($data);
	}
}



?>