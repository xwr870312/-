<?php
class method   extends adminbaseclass
{		
	function qunputjuan(){			//群发优惠卷
		
		$juanid = intval( IReq::get('xzejuan') );
		if($juanid < 1) $this->message('不存在此优惠卷！');
		$juaninfo = $this->mysql->select_one("select * from   ".Mysite::$app->config['tablepre']."wxjuan where id = ".$juanid." ");		
		if( empty($juaninfo) ){
			$this->message('请选择优惠卷！');
		}
		
		$ordercishu = intval( IReq::get('ordercishu') );	//下单次数
	
		$joinstarttime = strtotime( trim(IReq::get('joinstarttime')) );			//加入开始时间
      	$joinendtime = strtotime( trim(IReq::get('joinendtime')) );				//加入结束时间
		
		$uid = trim( IReq::get('useruid') );

		
		
		$uidarray  = array();
		
		if( !empty($uid) ){
			$uidarr = explode(",",$uid);
			foreach( $uidarr as $key=>$value ){
				
				$wxmemberinfo = $this->mysql->select_one("select a.*,b.* from   ".Mysite::$app->config['tablepre']."wxuser as a left join  ".Mysite::$app->config['tablepre']."member as b on b.uid = a.uid where  a.uid = ".$value."  ");
				if(!empty($wxmemberinfo) ){
				
					$maijiagoumaishu = $this->mysql->counts("select * from ".Mysite::$app->config['tablepre']."order where buyeruid='".$value."' and  status = 3 order by id desc");	//用户成功下单次数
					if( !empty($joinstarttime) && !empty($joinendtime) ){
						$where = ' where a.uid = '.$value.' and '.$joinstarttime.' < b.creattime and '.$joinendtime.' > b.creattime ' ;
						
					}else{
						$where = 'where a.uid = '.$value.'';
					}
				
					if(!empty($ordercishu)){
						if( $ordercishu <= $maijiagoumaishu ){
							$memberinfo = $this->mysql->select_one("select a.*,b.* from   ".Mysite::$app->config['tablepre']."wxuser as a left join  ".Mysite::$app->config['tablepre']."member as b on b.uid = a.uid    ".$where." ");
						}else{
							$memberinfo = array();
						}
					}else{
						$memberinfo = $this->mysql->select_one("select a.*,b.* from   ".Mysite::$app->config['tablepre']."wxuser as a left join  ".Mysite::$app->config['tablepre']."member as b on b.uid = a.uid    ".$where." ");
					}
					
					
					if( !empty($memberinfo) ){		
						$openid = trim($memberinfo['openid']);
						$data['uid']  =  $value;
						$data['username'] = $memberinfo['username'];
						$data['juanid']   = $juanid;
						$data['juanname'] = $juaninfo['cartname'];
						$data['juancost'] = $juaninfo['cost'];
						$data['juanlimitcost'] = $juaninfo['limitcost'];
						$data['endtime'] = $juaninfo['endtime'];
						$data['lqstatus']  = 0;
						$data['status']  = 0;
						$data['juanshu']  = 1;
						$data['fafangtime']  = time();
						
						$uidarray[]= '"'.$openid.'"';
						
						$this->mysql->insert(Mysite::$app->config['tablepre'].'wxuserjuan',$data);
					}
				}			
			}
			
			$senduidaarr = implode(',',$uidarray); 
		
			$openidarr = $senduidaarr;
		
				$this->id = $this->mysql->insertid();

	        	       $temp_content = '恭喜：'.$memberinfo['username'].'\n';
					    $temp_content .='与'.date('Y-m-d H:i',$data['fafangtime']).'\n';
	        	       $temp_content .='由'.Mysite::$app->config['sitename'].'\n';	        	      
	        	       $temp_content .='提供的'.$juaninfo['cartname'].'\n';
	        	       $temp_content .='优惠卷';	    	      
	        	   				   
	        	       $contents = $temp_content;					   
				
	        	       if(!empty($contents)){
	        	       	
	        	       	 $time = time();
	           	       $tempstr = md5(Mysite::$app->config['wxtoken'].$time);
	                   $tempstr = substr($tempstr,3,15);
					    $dolink = Mysite::$app->config['siteurl'].'/index.php?ctrl=wxsite&action=getjuan&id='.$this->id;
					
	                   $backinfo = '';
	                 if(!empty($dolink)){
		                    	$templink = $dolink;
		                     for($i=0;$i<strlen($templink);$i++){
	                           $backinfo .= ord($templink[$i]).',';
                         }
                   }
		               $contents .= '<a href=\''.trim($dolink).'\'>点击领取优惠卷</a>';
	        
	        	        $wx_s = new wx_s(); 
			/* 		print_r($openidarr);
				 			exit;  */
						if($wx_s->qunsendmsg($contents,$openidarr)){
								$link  =IUrl::creatUrl('adminpage/weixin/module/wxjuanput');
								// logwrite('微信客服发送成功:'.$contents.$openidarr.$wx_s->err());
							$this->message('发送成功',$link );
							
	        	          }else{
	        	       	 logwrite('微信客服发送错误:'.$contents.$openidarr.$wx_s->err());  
							//$link  =IUrl::creatUrl('adminpage/weixin/module/wxjuanput');
							$this->message($wx_s->err());
	        	         }
	        	       }
	        	       
			
			
			
			
			
		}else{
			
			$memberinfo = $this->mysql->getarr("select a.*,b.* from   ".Mysite::$app->config['tablepre']."wxuser as a left join  ".Mysite::$app->config['tablepre']."member as b on a.uid = b.uid   ");
			
			foreach( $memberinfo as $key=>$value ){
					$data['uid']  =  $value['uid'];
				
					$maijiagoumaishu = $this->mysql->counts("select * from ".Mysite::$app->config['tablepre']."order where buyeruid='".$value."' and  status = 3 order by id desc");	//用户成功下单次数
			
			
				if( !empty($joinstarttime) && !empty($joinendtime) ){
					$where = ' where a.uid = '.$value['uid'].' and '.$joinstarttime.' < b.creattime and '.$joinendtime.' > b.creattime ' ;
					
				}else{
					$where = 'where a.uid = '.$value['uid'].'';
				}
			
				if(!empty($ordercishu)){
					if( $ordercishu <= $maijiagoumaishu ){
						$memberinfo = $this->mysql->select_one("select a.*,b.* from   ".Mysite::$app->config['tablepre']."wxuser as a left join  ".Mysite::$app->config['tablepre']."member as b on b.uid = a.uid    ".$where." ");
					}else{
						$memberinfo = array();
					}
				}else{
					$memberinfo = $this->mysql->select_one("select a.*,b.* from   ".Mysite::$app->config['tablepre']."wxuser as a left join  ".Mysite::$app->config['tablepre']."member as b on b.uid = a.uid    ".$where." ");
				}
				
				
					if( empty($memberinfo) ){
					$openid = trim($memberinfo['openid']);	
					$data['uid']  =  $value;
					$data['username'] = $memberinfo['username'];
					$data['juanid']   = $juanid;
					$data['juanname'] = $juaninfo['cartname'];
					$data['juancost'] = $juaninfo['cost'];
					$data['juanlimitcost'] = $juaninfo['limitcost'];
					$data['endtime'] = $juaninfo['endtime'];
					$data['lqstatus']  = 0;
					$data['status']  = 0;
					$data['juanshu']  = 1;
					$data['fafangtime']  = time();					
					$uidarray[]= '"'.$openid.'"';
					 $this->mysql->insert(Mysite::$app->config['tablepre'].'wxuserjuan',$data);
					}
			}
			
			
			
			$senduidaarr = implode(',',$uidarray); 
		
			$openidarr = $senduidaarr;
		
				$this->id = $this->mysql->insertid();

	        	       $temp_content = '恭喜：'.$memberinfo['username'].'\n';
					    $temp_content .='与'.date('Y-m-d H:i',$data['fafangtime']).'\n';
	        	       $temp_content .='由'.Mysite::$app->config['sitename'].'\n';	        	      
	        	       $temp_content .='提供的'.$juaninfo['cartname'].'\n';
	        	       $temp_content .='优惠卷';	    	      
	        	   				   
	        	       $contents = $temp_content;					   
				
	        	       if(!empty($contents)){
	        	       	
	        	       	 $time = time();
	           	       $tempstr = md5(Mysite::$app->config['wxtoken'].$time);
	                   $tempstr = substr($tempstr,3,15);
					    $dolink = Mysite::$app->config['siteurl'].'/index.php?ctrl=wxsite&action=getjuan&id='.$this->id;
					
	                   $backinfo = '';
	                 if(!empty($dolink)){
		                    	$templink = $dolink;
		                     for($i=0;$i<strlen($templink);$i++){
	                           $backinfo .= ord($templink[$i]).',';
                         }
                   }
		               $contents .= '<a href=\''.trim($dolink).'\'>点击领取优惠卷</a>';
	        
	        	        $wx_s = new wx_s(); 
			/* 		print_r($openidarr);
				 			exit;  */
						if($wx_s->qunsendmsg($contents,$openidarr)){
								$link  =IUrl::creatUrl('adminpage/weixin/module/wxjuanput');
								// logwrite('微信客服发送成功:'.$contents.$openidarr.$wx_s->err());
							$this->message('发送成功',$link );
							
	        	          }else{
	        	       	 logwrite('微信客服发送错误:'.$contents.$openidarr.$wx_s->err());  
							//$link  =IUrl::creatUrl('adminpage/weixin/module/wxjuanput');
							$this->message($wx_s->err());
	        	         }
	        	       }
	        	       
			
			
			
			
			
		}
			$this->success('success');
	}
	function limitalert(){
	 	#$this->message("您暂无权限设置,如有疑问请联系QQ：375952873  Tel：18538930577");
	}
	function delputjuan(){		
		 $id = IReq::get('id'); 
		 if(empty($id))  $this->message('不能为空！'); 
		 $ids = is_array($id)? join(',',$id):$id;    
	   $this->mysql->delete(Mysite::$app->config['tablepre'].'wxuserjuan',"id in($ids)");  
	   $this->success('success'); 
	}
	function putuserjuan(){		// 发放优惠卷(单个人)
			
		$uid = intval( IReq::get('useruid') ); 	 // 顾客ID	
		if(empty($uid)) $this->message('顾客ID不能为空'); 
		$memberinfo = $this->mysql->select_one("select a.*,b.* from   ".Mysite::$app->config['tablepre']."wxuser as a left join  ".Mysite::$app->config['tablepre']."member as b on b.uid = a.uid   where a.uid = ".$uid." ");
		if( empty($memberinfo) ){
			$this->message('没有此顾客的ID！');
		}
		
		$juanid = intval( IReq::get('xzejuan') );	//选择优惠卷ID
		if($juanid < 1) $this->message('不存在此优惠卷！');
		$juaninfo = $this->mysql->select_one("select * from   ".Mysite::$app->config['tablepre']."wxjuan where id = ".$juanid." ");		
		if( empty($juaninfo) ){
			$this->message('请选择优惠卷！');
		}
	
		$putcount = intval( IReq::get('putcount') );	//发放数量
		if($putcount < 1) $this->message('发放数量不能小于1');
		
		$data['uid']  =  $uid;
		$data['username'] = $memberinfo['username'];
		$data['juanid']   = $juanid;
		$data['juanname'] = $juaninfo['cartname'];
		$data['juancost'] = $juaninfo['cost'];
		$data['juanlimitcost'] = $juaninfo['limitcost'];
		$data['endtime'] = $juaninfo['endtime'];
		$data['status']  = 0;
		$data['lqstatus']  = 0;
		$data['juanshu']  = $putcount;
		$data['fafangtime']  = time();
		
		
		$openid = trim($memberinfo['openid']);
	
		 if(!empty($memberinfo)){        	   
					$this->mysql->insert(Mysite::$app->config['tablepre'].'wxuserjuan',$data);
					$this->id = $this->mysql->insertid();
					
	        	       $temp_content = '恭喜：'.$memberinfo['username'].'\n';
					    $temp_content .='与'.date('Y-m-d H:i',$data['fafangtime']).'\n';
	        	       $temp_content .='由'.Mysite::$app->config['sitename'].'\n';	        	      
	        	       $temp_content .='提供的'.$juaninfo['cartname'].'\n';
	        	       $temp_content .='优惠卷';	    	      
	        	   				   
	        	       $contents = $temp_content;					   
				
	        	       if(!empty($contents)){
	        	       	
	        	       	 $time = time();
	           	       $tempstr = md5(Mysite::$app->config['wxtoken'].$time);
	                   $tempstr = substr($tempstr,3,15);
					    $dolink = Mysite::$app->config['siteurl'].'/index.php?ctrl=wxsite&action=getjuan&id='.$this->id;
	                 
	                   $backinfo = '';
	                 if(!empty($dolink)){
		                    	$templink = $dolink;
		                     for($i=0;$i<strlen($templink);$i++){
	                           $backinfo .= ord($templink[$i]).',';
                         }
                   }
		              
		               $linkstr =  Mysite::$app->config['siteurl'].'/index.php?ctrl=wxsite&action=index&openid='.$openid.'&actime='.$time.'&sign='.$tempstr.'&backinfo='.$backinfo;
		               $contents .= '<a href=\''.trim($dolink).'\'>点击领取优惠卷</a>';
	        	      	#   print_r($contents); 	
	        	        $wx_s = new wx_s(); 
					/* 	print_r($contents);
						print_r($openid); */
						if($wx_s->sendmsg($contents,$openid)){
							
								$link  =IUrl::creatUrl('adminpage/weixin/module/wxjuanput');
							$this->message('发送成功',$link);
							
	        	          }else{
	        	       	 logwrite('微信客服发送错误:'.$contents.$openid.$wx_s->err());  
							//$link  =IUrl::creatUrl('adminpage/weixin/module/wxjuanput');
							$this->message($wx_s->err());
	        	         }
	        	       }
	        	       
	      }
		
		
		

		
		$this->success('success');
			
	}
	function deljuan(){  /*  删除优惠卷 */
		
		 $id = IReq::get('id'); 
		 if(empty($id))  $this->message('不能为空！'); 
		 $ids = is_array($id)? join(',',$id):$id;    
	   $this->mysql->delete(Mysite::$app->config['tablepre'].'wxjuan',"id in($ids)");  
	   $this->success('success'); 
	   

		
	}
	function lingquyyj(){
	$juanid = intval( IReq::get('juanid') );
		$data['juanid']  = $juanid;
		
		$juaninfo = $this->mysql->select_one("select * from   ".Mysite::$app->config['tablepre']."wxjuan where id = ".$juanid." ");
		$data['juaninfo']  = $juaninfo;
		
		$creattime = $juaninfo['creattime'];
		$endtime = $juaninfo['endtime'];
		
		$tianshu = ( $endtime - $creattime )/24/60/60;
		$data['tianshu']  = $tianshu;
		
		Mysite::$app->setdata($data);			
			
	}
	function xiulqjuan(){			//	修改/更新领取优惠卷
		
		$juanid = intval(IReq::get('juanid'));
			$lqrule = trim(IReq::get('lqrule')); //领取规则
		$lqcishu = intval(IReq::get(lqcishu)); //领取次数
		$lqlianjie = trim(IReq::get('lqlianjie')); //领取连接
		$sharetitle = trim(IReq::get('sharetitle')); //分享标题
		$sharezhaiyao = trim(IReq::get('sharezhaiyao'));//分享摘要
		$imgurl = trim(IReq::get('imgurl'));//分享图片
		
	/* 	if(empty($lqrule)) $this->message('优惠卷名称不能为空！');
		if(empty($lqcishu))$this->message('优惠卷描述姓名不能为空！');		
		if(empty($lqlianjie))$this->message('优惠卷描述姓名不能为空！');		
	
	 */
			
			$data['lqrule'] = $lqrule;
			
			if( $lqrule == 0 ){
				$data['limitdayshu'] = $lqcishu;
				$data['limitzongshu'] = 0;
			}else{
				$data['limitdayshu'] = 0;
				$data['limitzongshu'] = $lqcishu;
			}
		
			$data['lqlink'] = $lqlianjie;
			$data['sharetitle'] = $sharetitle;
			$data['sharezhaiy'] = $sharezhaiyao;			
			$data['shareimg'] = $imgurl;
	
			//uid ,  usetime username 
			if( $juanid > 0 ){
					 $this->mysql->update(Mysite::$app->config['tablepre'].'wxjuan',$data,"id='".$juanid."'");
			}else{
				$this->mysql->insert(Mysite::$app->config['tablepre'].'wxjuan',$data);

			}
			 
	
		

		$this->success('success');
	
	}
	function xiugaiwxjuan(){	/* 修改优惠卷 */
		$juanid = intval( IReq::get('juanid') );
		$data['juanid']  = $juanid;
		
		$juaninfo = $this->mysql->select_one("select * from   ".Mysite::$app->config['tablepre']."wxjuan where id = ".$juanid." ");
		$data['juaninfo']  = $juaninfo;
		
		$creattime = $juaninfo['creattime'];
		$endtime = $juaninfo['endtime'];
		
		$tianshu = ( $endtime - $creattime )/24/60/60;
		$data['tianshu']  = $tianshu;
		
		Mysite::$app->setdata($data);
	}
	function ajaxwxyyj(){	/* 新建优惠卷 */
	
	$juanid = intval(IReq::get('juanid'));
		/* 	$data['juanid'] = 1;
		if( !empty($juanid) ){
			
			$juaninfo = $this->mysql->select_one("select * from   ".Mysite::$app->config['tablepre']."wxjuan where id = ".$juanid." ");
			
			$data['juaninfo']  = $juaninfo;
			Mysite::$app->setdata($data);
			
		} */
		$cartname = trim(IReq::get('cartname')); //卡名字
		$cartdesrc = trim(IReq::get('cartdesrc')); //卡描述
		$card_cost = intval(IReq::get('cost')); //优惠金额
		$limit_cost = intval(IReq::get('limitcost')); //限制金额
		$card_time = intval(IReq::get('card_time'));//有效时间
		
		if(empty($cartname)) $this->message('优惠卷名称不能为空！');
		if(empty($cartdesrc))$this->message('优惠卷描述姓名不能为空！');		
		if($card_cost < 1) $this->message('优惠金额错误！');
		if($limit_cost < 1) $this->message('优惠限制金额错误！');
		if($card_time < 1) $this->message('时间填写错误！'); 
		
		$timenow = time();
		
	
			$data['cartname'] = $cartname;
			$data['cartdesrc'] = $cartdesrc;
			$data['status'] = 0;
			$data['cost'] = $card_cost;
			$data['limitcost'] = $limit_cost;
			$data['creattime'] = $timenow;
			$data['endtime'] = $timenow+$card_time*24*60*60;
			
			//uid ,  usetime username 
			if( $juanid > 0 ){
					 $this->mysql->update(Mysite::$app->config['tablepre'].'wxjuan',$data,"id='".$juanid."'");
			}else{
				$this->mysql->insert(Mysite::$app->config['tablepre'].'wxjuan',$data);

			}
			 
	
		

		$this->success('success');
	
		
		
		
	}
   function wxsetsave(){
	   $this->limitalert();
   	$info['wxtoken'] = trim(IReq::get('wxtoken'));
		$info['wxappid'] = trim(IReq::get('wxappid'));
		$info['wxsecret'] = trim(IReq::get('wxsecret'));
		if(empty($info['wxtoken'])) $this->message('自定义token不能为空');
		if(empty($info['wxappid'])) $this->message('微信appid不能为空');
		if(empty($info['wxsecret'])) $this->message('微信secret不能为空');
	  $config = new config('hopeconfig.php',hopedir);
	  $config->write($info);
	  $this->success('操作成功');
   }

   function wxmenu(){
		//构造微信 menu
		 $wxtoken = Mysite::$app->config['wxtoken'];
		 $errorlink  =IUrl::creatUrl('adminpage/weixin/module/wxset');
		 if(empty($wxtoken)) $this->message('未设置微信基本信息',$errorlink);
	   $data['wxmenu'] =  $this->mysql->getarr("select * from   ".Mysite::$app->config['tablepre']."wxmenu order by sort desc");
		 Mysite::$app->setdata($data);
	 }
	 function savewxmenu(){
		 $this->limitalert();
		$id = intval(IReq::get('id'));
		$data['name'] = trim(IReq::get('name'));
		$data['parent_id'] = intval(IReq::get('parent_id'));
		$data['type'] = trim(IReq::get('types'));
		$data['sort'] = intval(IReq::get('sort'));
		if(empty($data['name'])) $this->message('提交菜单名不能为空');
		$data['code'] = trim(IReq::get('code'));
		if(empty($data['code'])) $this->message('对应的code不能为空');
		$data['type'] = $data['type']=='view'?'view':'click';
		$data['msgtype'] = 0;
		$info = $this->mysql->select_one("select * from   ".Mysite::$app->config['tablepre']."wxmenu where id = ".$id." order by sort desc");

		if($data['type'] != 'view'){
			 $data['msgtype'] = 1;
		}
		if($id > 0){
			   unset($data['msgtype']);
			   $info = $this->mysql->select_one("select * from   ".Mysite::$app->config['tablepre']."wxmenu where id = ".$id." order by sort desc");
			   if(empty($info)) $this->message('菜单不存在');
			   if($data['type'] == 'view'){
			   	if($info['type'] != 'view'){
			   	  $data['msgtype'] = 0;
			   	  $data['values'] = '';
			   	}
			   }else{
			   	  if($info['type'] != 'click'){
			   	  	 $data['msgtype'] = 1;
			   	     $data['values'] = '';
			   	  }
			   }
				 $this->mysql->update(Mysite::$app->config['tablepre'].'wxmenu',$data,"id='".$id."'");
		}else{
				$this->mysql->insert(Mysite::$app->config['tablepre'].'wxmenu',$data);
		}
	  $this->success('操作成功');
	}
	function getwxmen(){
		$id = intval(IReq::get('id'));
		$info =  $this->mysql->select_one("select * from   ".Mysite::$app->config['tablepre']."wxmenu where id = ".$id." order by sort desc");

		if(empty($info)){
		   $this->message('获取失败');
		}
		$info['msglist']  = array();
		if($info['msgtype']  == 2){
			if(!empty($info['values'])){
		      $info['msglist'] =  unserialize($info['values']);
		  }
		}elseif($info['msgtype'] == 0){
			if(!empty($info['values'])){
		      $info['msglist'] =  unserialize($info['values']);
		  }
		}
		$this->success($info);
	}
	//保存菜单内容
	function savewxmenucontent(){
		$id = intval(IReq::get('id'));
		$msgtype = intval(IReq::get('msgtype'));
		if($id > 0){
			  if(empty($msgtype)){
			      $links = trim(IReq::get('values'));
			      if(empty($links)) $this->message('超连接不能为空');
			       $data['msgtype'] = 0;
			       $miaoshu = trim(IReq::get('miaoshu'));
			      if(empty($miaoshu)) $this->message('超连接描述不能为空');
			      $tempinfo['lj_link'] = $links;
			      $tempinfo['lj_title'] = $miaoshu;
			      $data['values'] = serialize($tempinfo);
			     	$this->mysql->update(Mysite::$app->config['tablepre'].'wxmenu',$data,"id='".$id."'");
			     	$this->success('操作成功');
			  }elseif($msgtype == 1){
			  	 $data['values'] = trim(IReq::get('wb_content'));
			  	 if(empty($data['values'])) $this->message('内容不能为空');
			  	 $data['msgtype'] = 1;
			     $this->mysql->update(Mysite::$app->config['tablepre'].'wxmenu',$data,"id='".$id."'");
			     $this->success('操作成功');
			  }elseif($msgtype == 2){
			  	   $biaoti = IReq::get('biaoti');
			  	   $miaoshu = IReq::get('miaoshu');
			  	   $tupian = IReq::get('tupian');
			  	   $lianjie = IReq::get('lianjie');
			  	   $doshow = array();
			  	   if(is_array($biaoti)){
			  	   	  foreach($biaoti as $key=>$value){
			  	   	  	if(!empty($value)){
			  	   	    $tempinfo['biaoti'] = $value;
			  	   	    $tempinfo['miaoshu']  =  isset($miaoshu[$key])? $miaoshu[$key]:'';
			  	   	    $tempinfo['tupian']    =  isset($tupian[$key])? $tupian[$key]:'';
			  	   	    $tempinfo['lianjie']   =  isset($lianjie[$key])? $lianjie[$key]:'';
			  	   	    $doshow[] = $tempinfo;
			  	   	    }
			  	   	  }
			  	   }else{
			  	   	   if(empty($biaoti)) $this->message('提交数据不能为空');
			  	   	    $tempinfo['biaoti'] = $biaoti;
			  	   	    $tempinfo['miaoshu']  =  $miaoshu;
			  	   	    $tempinfo['tupian']    =  $tupian;
			  	   	    $tempinfo['lianjie']   =  $lianjie;
			  	   	     $doshow[] = $tempinfo;
			  	   }
			  	   if(empty($doshow)) $this->message('提交数据不能为空');
			     	$data['msgtype'] = 2;
			  	  $data['values'] = serialize($doshow);
			  	  $this->mysql->update(Mysite::$app->config['tablepre'].'wxmenu',$data,"id='".$id."'");
			  	  $this->success('操作成功');
			  }
			  $this->message('未定义的操作');
		}
		$this->success('操作成功');
	}


	function wxback(){
		$pageinfo = new page();
	 	$pageinfo->setpage(IReq::get('page'));
		$data['list'] = $this->mysql->getarr("select *  from ".Mysite::$app->config['tablepre']."wxback   order by id desc  limit ".$pageinfo->startnum().", ".$pageinfo->getsize()." ");
		$shuliang  = $this->mysql->counts("select *  from ".Mysite::$app->config['tablepre']."wxback ");
		$pageinfo->setnum($shuliang);
		$data['pagecontent'] = $pageinfo->getpagebar();
    Mysite::$app->setdata($data);
	}
	function savewxback(){
		 $this->limitalert();
	  $id = intval(IReq::get('id'));
	  $data['code'] = trim(IReq::get('code'));
	  if(empty($data['code'])) $this->message('code不能为空');
	  $data['msgtype'] = intval(IReq::get('msgtype'));
	  if(!in_array($data['msgtype'],array('1','2','3'))) $this->message('类型错误');
	  if($data['msgtype'] ==  1){
	  	$datainfo['lj_title'] =  trim(IReq::get('lj_title'));
	  	$datainfo['lj_link'] =  trim(IReq::get('lj_link'));
	  	if(empty($datainfo['lj_title'])) $this->message('连接标题不能为空');
	  	if(empty($datainfo['lj_link'])) $this->message('连接地址不能为空');
	  	$data['values'] = serialize($datainfo);
	  }elseif($data['msgtype'] ==  2){
	  	 $data['values'] = trim(IReq::get('wb_content'));
	  	 if(empty($data['values'])) $this->message('文本不能为空');

	  }elseif($data['msgtype'] == 3){
	  	     $biaoti = IReq::get('biaoti');
			  	   $miaoshu = IReq::get('miaoshu');
			  	   $tupian = IReq::get('tupian');
			  	   $lianjie = IReq::get('lianjie');
			  	   $doshow = array();
			  	   if(is_array($biaoti)){
			  	   	  foreach($biaoti as $key=>$value){
			  	   	  	if(!empty($value)){
			  	   	    $tempinfo['biaoti'] = $value;
			  	   	    $tempinfo['miaoshu']  =  isset($miaoshu[$key])? $miaoshu[$key]:'';
			  	   	    $tempinfo['tupian']    =  isset($tupian[$key])? $tupian[$key]:'';
			  	   	    $tempinfo['lianjie']   =  isset($lianjie[$key])? $lianjie[$key]:'';
			  	   	    $doshow[] = $tempinfo;
			  	   	    }
			  	   	  }
			  	   }else{
			  	   	   if(empty($biaoti)) $this->message('提交数据不能为空');
			  	   	    $tempinfo['biaoti'] = $biaoti;
			  	   	    $tempinfo['miaoshu']  =  $miaoshu;
			  	   	    $tempinfo['tupian']    =  $tupian;
			  	   	    $tempinfo['lianjie']   =  $lianjie;
			  	   	     $doshow[] = $tempinfo;
			  	   }
			  	   if(empty($doshow)) $this->message('提交数据不能为空');
	  	      $data['values'] = serialize($doshow);
	  }
	  if($id > 0){
	       $this->mysql->update(Mysite::$app->config['tablepre'].'wxback',$data,"id='".$id."'");
	  }else{
	  		 $this->mysql->insert(Mysite::$app->config['tablepre'].'wxback',$data);
	  }
	  $this->success('操作成功');
	}
	function getwxback(){
		 $id = intval(IReq::get('id'));
		 if($id < 1) $this->message('微信获取错误');
		 	$info  = $this->mysql->select_one("select *  from ".Mysite::$app->config['tablepre']."wxback where id=".$id."");
		 	if(empty($info)) $this->message('微信错误');
		 $temp = array();
		 if($info['msgtype']   == 1){
		      $info['listcontent'] = unserialize($info['values']);
		 }elseif($info['msgtype'] == 3){
		 	   $info['listcontent'] = unserialize($info['values']);
		 }
		 $this->success($info);
	}
	function delwxback(){
		 $this->limitalert();
		 $id = intval(IReq::get('id'));
		 if($id < 1) $this->message('提交ID错误');
		 $this->mysql->delete(Mysite::$app->config['tablepre'].'wxback',"id  in(".$id.")");
	  	$this->success('操作成功');
	}
	 function delwxmenu(){
		 $this->limitalert();
	 	$this->checkadminlogin();
		 $id = intval(IReq::get('id'));
		 if($id < 1) $this->message('提交ID错误');
		 $this->mysql->delete(Mysite::$app->config['tablepre'].'wxmenu',"id  in(".$id.")");
	   $this->success('操作成功');
	}
function  updatewxmenu(){
	  $this->limitalert();
	//更新菜单到服务器
		$this->checkadminlogin();
	    $info =  $this->mysql->getarr("select * from   ".Mysite::$app->config['tablepre']."wxmenu   order by sort desc");
	    $tempinfo = array();
	    foreach($info as $key=>$value){
	    	if($value['parent_id']  == 0){ 
	    		  $value['sub_button'] = array();
	    		  foreach($info as $k=>$val){
	    		    if($value['id'] == $val['parent_id']){
	    		    	$value['sub_button'][] = $val;
	    		    }
	    		  }
	    		  $tempinfo[] = $value;
	    	}
	    }
	   /*转换为菜单*/
	   $menuinfo = array(); 
	   foreach($tempinfo as $key=>$value){
	      if(count($value['sub_button']) > 0){
	    			$temhuan = array();
	    			$temhuan['name'] = urlencode($value['name']); 
	    			foreach($value['sub_button'] as $k=>$v){
              			 $temsub = array();
              			 $temsub['name'] = urlencode($v['name']);
              			 $temsub['type'] =  $v['type'];
               
					   if($v['type'] == 'view'){
			  		        $tempdatac = unserialize($v['values']);
	    			        $temsub['url'] = $tempdatac['lj_link'];
	    			   }else{
	    			       $temsub['key'] = $v['code'];
	    			   }
                       $temhuan['sub_button'][] =  $temsub;
            
        	       }
	    			$menuinfo['button'][] = $temhuan; 
	       }else{ 
	    		$temhuan = array();
	    		$temhuan['name'] = urlencode($value['name']);
				$temhuan['type'] =  $value['type'];
                if($value['type'] == 'view'){
			          $tempdatac = unserialize($value['values']);
	    			  $temhuan['url'] = $tempdatac['lj_link'];
	    	    }else{
	    			  $temhuan['key'] = $value['code'];
	    	    }
	    			 
	    			$menuinfo['button'][] = $temhuan;
	       }
	    }
	    	 
	    $testinfo =   urldecode(json_encode($menuinfo));
		 
	     $wx_s = new wx_s();
	     if($wx_s->savemenu($testinfo)){
	    		$this->success('操作成功');
	     }else{
	    		$this->message($wx_s->err());
	     }



	}
	function delwxbd(){
		 $id = intval(IReq::get('id'));
		 if($id < 1) $this->message('提交ID错误');
		 $this->mysql->delete(Mysite::$app->config['tablepre'].'wxuser',"id  in(".$id.")");
	  	$this->success(array('error'=>false));
	}
	function wxuser(){
		$pageinfo = new page();
		$pageinfo->setpage(IReq::get('page'));
		$data['list'] = $this->mysql->getarr("select a.openid,a.is_bang,b.*  from ".Mysite::$app->config['tablepre']."wxuser  as a left join ".Mysite::$app->config['tablepre']."member as b on b.uid = a.uid   order by a.uid desc  limit ".$pageinfo->startnum().", ".$pageinfo->getsize()." ");
		$shuliang  = $this->mysql->counts("select * from ".Mysite::$app->config['tablepre']."wxuser  ");
		$pageinfo->setnum($shuliang);
		$data['pagecontent'] = $pageinfo->getpagebar();
    Mysite::$app->setdata($data);


		/*
		$wx_s = new wx_s();

	  print_r($wx_s->get_img());

		if($wx_s->menu()){
		print_r($wx_s->returnmenu());
	}else{
		$this->json($wx_s->err());
	} */
		/*
		if($wx_s->get_user()){
			print_r($wx_s->userlist());
		}else{
			echo $wx_s->err();
		} */
		 /*
		if($wx_s->sendmsg('订单编号为：dno371033343,总价48元，详情：番茄炒蛋7元','oKDxjuLiZlRRIaI_RVdex2NOJx_E')){
		    echo 'ok';
		}else{
		   echo $wx_s->err();
		}*/
		/*
		if($wx_s->sendmsg('测试发送客服消息3','oKDxjuL-79rRF_ZQaElogLFlaTho')){
		    echo 'ok';
		}else{
		   echo $wx_s->err();
		}*/
		/*设置 发送客服消息   oKDxjuLiZlRRIaI_RVdex2NOJx_E     */
	}
	function getoneuser(){
		$openid = trim(IReq::get('openid'));
	  $wx_s = new wx_s();
	  if($wx_s->showuserinfo($openid)){
	  	$this->success($wx_s->getone());
	  }else{
	  	$info = $wx_s->err();
	  	$this->message($info);
	  }

	}
	function sendwxmsg(){
		$openid = trim(IReq::get('openid'));
		$content = trim(IReq::get('content'));
		if(empty($content)) $this->message('发送内容不能为空');
		$wx_s = new wx_s();
		if($wx_s->sendmsg($content,$openid)){
		  $this->success('操作成功');
		}else{
			$this->message($wx_s->err());
		}
	}
	
	function yiqisaylist(){
	

		$pageinfo = new page();
	 	$pageinfo->setpage(IReq::get('page'));
		$data['list'] = $this->mysql->getarr("select *  from ".Mysite::$app->config['tablepre']."wxback   order by id desc  limit ".$pageinfo->startnum().", ".$pageinfo->getsize()." ");

		$togethersaylist1 = $this->mysql->getarr(" select * from ".Mysite::$app->config['tablepre']."wxcomment as a left join ".Mysite::$app->config['tablepre']."member  as b  on a.uid = b.uid  where is_top=0 order by addtime desc   limit ".$pageinfo->startnum().", ".$pageinfo->getsize()." ");
	#	print_r($togethersaylist);
		$togethersaylist = array();
		foreach($togethersaylist1 as $key=>$value){
			$value['pingjiazongshu'] =  $this->mysql->counts(" select * from ".Mysite::$app->config['tablepre']."wxreplycomment where parentid  = ".$value['id']."  ");  // 评价总数
			$value['zongzanshu'] =  $this->mysql->counts(" select * from ".Mysite::$app->config['tablepre']."wxpjzan where commentid  = ".$value['id']."  ");   //赞总数
			$value['beijubaoshu'] =  $this->mysql->counts(" select * from ".Mysite::$app->config['tablepre']."wxuserjubao where commentid  = ".$value['id']."  ");   //赞总数
			$togethersaylist[] = $value;
		}
		$data['togethersaylist'] = $togethersaylist;
		
			$shuliang  = $this->mysql->counts("select * from ".Mysite::$app->config['tablepre']."wxcomment as a left join ".Mysite::$app->config['tablepre']."member  as b  on a.uid = b.uid  where is_top=0 ");
		$pageinfo->setnum($shuliang);
			$data['pagecontent'] = $pageinfo->getpagebar();
#		print_r($data['togethersaylist']);
		Mysite::$app->setdata($data);
		
	}
	function showwxusercomm(){//设置是否展示
		
		$id = IFilter::act(IReq::get('id'));
		$checkinfo = $this->mysql->select_one(" select * from ".Mysite::$app->config['tablepre']."wxcomment where id = '".$id."' ");
		if( !empty($checkinfo) ){
			if( $checkinfo['is_show'] == 1 ){
				$data['is_show'] = 0;				
			}else{
				$data['is_show'] = 1;				
			}
			$this->mysql->update(Mysite::$app->config['tablepre'].'wxcomment',$data,"id='".$id."'");
				$this->success('success');
		}else{
			$this->message('未找到对应的说说');
		}

	}
	function delwxusersay(){
   	  $id = IFilter::act(IReq::get('id'));
		  if(empty($id))  $this->message('获取ID失败');
		  $ids = is_array($id)? join(',',$id):$id;
		 if(empty($ids))  $this->message('获取ID失败');
	    $this->mysql->delete(Mysite::$app->config['tablepre'].'wxcomment'," id in($ids)");   //删除留言
	    $this->mysql->delete(Mysite::$app->config['tablepre'].'wxreplycomment'," parentid  in($ids)");// 删除留言所对应的 回复
	    $this->mysql->delete(Mysite::$app->config['tablepre'].'wxpjzan'," commentid in($ids)");//删除留言所对应的 赞 记录
	    $this->mysql->delete(Mysite::$app->config['tablepre'].'wxuserjubao'," commentid in($ids)");//删除留言所对应的 
	    $this->success('success','');
  }
  
	//批量上传图片
	public function piliang(){
		if(is_array($_FILES)&& isset($_FILES['imgFile']))
		{
		 $uploaddir = "pliang";
		$json = new Services_JSON();
		$uploadpath = 'upload/'.$uploaddir.'/';
		$filepath = '/upload/'.$uploaddir.'/';
         $upload = new upload($uploadpath,array('gif','jpg','jpge','doc','png'));//upload 自动生成压缩图片
         $file = $upload->getfile();
         if($upload->errno!=15&&$upload->errno!=0){
			 
			  $this->message($upload->errmsg());   
		   }else{
			   //写到商品库表中   
               $data['imagename']= $file[0]['saveName'];
			   $data['imageurl']= $filepath.$file[0]['saveName'];
			   $data['addtime'] = time();
			
			   $this->mysql->insert(Mysite::$app->config['tablepre'].'imglist',$data); 
				$this->success($file[0]['saveName']); 
		   } 
		}else{
		 
			 $this->message('未定义的上传类型'); 
		}
	}
	function glywxmsg(){
		
		$togethersaylist1 = $this->mysql->getarr(" select * from ".Mysite::$app->config['tablepre']."wxcomment as a left join ".Mysite::$app->config['tablepre']."admin  as b  on a.uid = b.uid  where is_top=1 order by addtime desc ");
	#	print_r($togethersaylist);
		$togethersaylist = array();
		foreach($togethersaylist1 as $key=>$value){
			$value['pingjiazongshu'] =  $this->mysql->counts(" select * from ".Mysite::$app->config['tablepre']."wxreplycomment where parentid  = ".$value['id']."  ");  // 评价总数
			$value['zongzanshu'] =  $this->mysql->counts(" select * from ".Mysite::$app->config['tablepre']."wxpjzan where commentid  = ".$value['id']."  ");   //赞总数
			$value['beijubaoshu'] =  $this->mysql->counts(" select * from ".Mysite::$app->config['tablepre']."wxuserjubao where commentid  = ".$value['id']."  ");   //赞总数
			$togethersaylist[] = $value;
		}
		$data['togethersaylist'] = $togethersaylist;
		Mysite::$app->setdata($data);
	}
	function saveglywxmsg(){
		
			$uid =  ICookie::get('adminuid');  
	
		  $data['usercontent'] = IReq::get('glyfabucontent');	 	
		  if(empty($data['usercontent'])) $this->message('发表主题不能为空');
		  	if(!(IValidate::len($data['usercontent'],0,500)))  $this->message('发表主题不能大于500字');
			
			$checkinfo = $this->mysql->select_one(" select * from ".Mysite::$app->config['tablepre']."admin where uid = '".$uid."' ");
			if(empty($checkinfo)){
				$this->message("获取管理员错误");
			}
			$data['userimg'] =IReq::get('userimg');
			$data['uid'] = $uid;
			$data['is_top'] = 1;
			$data['addtime'] = time();
			 $this->mysql->insert(Mysite::$app->config['tablepre'].'wxcomment',$data); 
 
	    $this->success('操作成功'); 
   }
	function chakansayimgs(){
		
		$sayid = IReq::get('sayid');
	   $commentone = $this->mysql->select_one(" select * from ".Mysite::$app->config['tablepre']."wxcomment  where id = '".$sayid."'  order by addtime desc ");
		$userimg = $commentone['userimg'];
		$userimages = explode('@',$userimg);
		$data['userimages'] = $userimages;
		Mysite::$app->setdata($data);
	}	
	function glyuploadmoreimg(){
		if(is_array($_FILES)&& isset($_FILES['imgFile']))
		{
			$uploaddir = "wximages";
			$json = new Services_JSON();
			$uploadpath = 'upload/'.$uploaddir.'/';
			$filepath = '/upload/'.$uploaddir.'/';
			$upload = new upload($uploadpath,array('gif','jpg','jpge','doc','png'));//upload 自动生成压缩图片
			$file = $upload->getfile();
			if($upload->errno!=15&&$upload->errno!=0){
			 
				$this->message($upload->errmsg());   
			}else{
			  
				$this->success(Mysite::$app->config['siteurl'].$filepath.$file[0]['saveName']); 
			} 
		}else{
		 
			 $this->message('未定义的上传类型'); 
		}
	}
	
}



?>