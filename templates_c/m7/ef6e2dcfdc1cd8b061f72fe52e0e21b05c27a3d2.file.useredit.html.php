<?php /* Smarty version Smarty-3.1.10, created on 2016-10-14 17:48:07
         compiled from "D:\WWW\templates\m7\shopcenter\useredit.html" */ ?>
<?php /*%%SmartyHeaderCode:37445800a9d79e59d4-26097653%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'ef6e2dcfdc1cd8b061f72fe52e0e21b05c27a3d2' => 
    array (
      0 => 'D:\\WWW\\templates\\m7\\shopcenter\\useredit.html',
      1 => 1469566320,
      2 => 'file',
    ),
    'df0cb5b8908594147f27031e7703fd9e3950a91c' => 
    array (
      0 => 'D:\\WWW\\templates\\m7\\public\\shopcenter.html',
      1 => 1469566320,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '37445800a9d79e59d4-26097653',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'tempdir' => 0,
    'sitename' => 0,
    'keywords' => 0,
    'description' => 0,
    'siteurl' => 0,
    'adminshopid' => 0,
    'shopinfo' => 0,
    'toplink' => 0,
    'items' => 0,
    'beian' => 0,
    'footerdata' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.10',
  'unifunc' => 'content_5800a9d81e94f0_09658231',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5800a9d81e94f0_09658231')) {function content_5800a9d81e94f0_09658231($_smarty_tpl) {?><?php if (!is_callable('smarty_function_load_data')) include 'D:\\WWW\\lib\\Smarty\\libs\\plugins\\function.load_data.php';
if (!is_callable('smarty_function_html_select_time')) include 'D:\\WWW\\lib\\Smarty\\libs\\plugins\\function.html_select_time.php';
?><!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml"> 
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title> 商家管理中心-<?php echo $_smarty_tpl->tpl_vars['sitename']->value;?>
</title>
<meta name="Keywords" content="<?php echo $_smarty_tpl->tpl_vars['keywords']->value;?>
" />
<meta name="description" content="<?php echo $_smarty_tpl->tpl_vars['description']->value;?>
" />  
<link rel="stylesheet" type="text/css" href="<?php echo $_smarty_tpl->tpl_vars['siteurl']->value;?>
/templates/<?php echo $_smarty_tpl->tpl_vars['tempdir']->value;?>
/public/shopcenter/css/commom.css" />
<link rel="stylesheet" type="text/css" href="<?php echo $_smarty_tpl->tpl_vars['siteurl']->value;?>
/templates/<?php echo $_smarty_tpl->tpl_vars['tempdir']->value;?>
/public/shopcenter/css/shangjiaAdmin.css" />

<script src="<?php echo $_smarty_tpl->tpl_vars['siteurl']->value;?>
/templates/<?php echo $_smarty_tpl->tpl_vars['tempdir']->value;?>
/public/js/jquerynew.js" type="text/javascript" language="javascript"></script>
<script src="<?php echo $_smarty_tpl->tpl_vars['siteurl']->value;?>
/templates/<?php echo $_smarty_tpl->tpl_vars['tempdir']->value;?>
/public/js/allj.js" type="text/javascript" language="javascript"></script>
<script type="text/javascript" language="javascript" src="<?php echo $_smarty_tpl->tpl_vars['siteurl']->value;?>
/templates/<?php echo $_smarty_tpl->tpl_vars['tempdir']->value;?>
/public/js/artdialog/artDialog.js?skin=blue"></script>

  <script type="text/javascript" language="javascript" src="<?php echo $_smarty_tpl->tpl_vars['siteurl']->value;?>
/templates/<?php echo $_smarty_tpl->tpl_vars['tempdir']->value;?>
/public/js/artdialog/plugins/iframeTools.js"></script>
  <script type="text/javascript" language="javascript" src="<?php echo $_smarty_tpl->tpl_vars['siteurl']->value;?>
/templates/<?php echo $_smarty_tpl->tpl_vars['tempdir']->value;?>
/public/js/template.min.js"></script>
  <script type="text/javascript" language="javascript" src="<?php echo $_smarty_tpl->tpl_vars['siteurl']->value;?>
/templates/<?php echo $_smarty_tpl->tpl_vars['tempdir']->value;?>
/public/js/ajaxfileupload.js"> </script>
  <script>
  	var mynomenu='baseset';
  	</script>

<script> 
	var siteurl = "<?php echo $_smarty_tpl->tpl_vars['siteurl']->value;?>
"; 
</script>
<!--[if lte IE 6]>
<script src="<?php echo $_smarty_tpl->tpl_vars['siteurl']->value;?>
/templates/<?php echo $_smarty_tpl->tpl_vars['tempdir']->value;?>
/public/js/DD_belatedPNG_0.0.8a.js" type="text/javascript"></script>
    <script type="text/javascript">
        DD_belatedPNG.fix('div, ul, img, li, input , a');
        $('#footer').css('display','none');
    </script>
<![endif]--> 
</head>
<body> 
<?php echo smarty_function_load_data(array('assign'=>"shopinfo",'table'=>"shop",'where'=>"`id`=".((string)$_smarty_tpl->tpl_vars['adminshopid']->value),'type'=>"one"),$_smarty_tpl);?>
 
<div style="position: fixed;top: 0;left: 0;right: 0;bottom: 0;z-index: -1;background:url(<?php echo $_smarty_tpl->tpl_vars['siteurl']->value;?>
/templates/<?php echo $_smarty_tpl->tpl_vars['tempdir']->value;?>
/public/shopcenter/images/background.png);"></div>
<!---header start--->
	<div class="header">
    	<div class="top">
        	<div class="topLeft fl">
            	<ul class="fr">
                	<li><a href="<?php echo FUNC_function(array('type'=>'url','link'=>"/shopcenter/useredit"),$_smarty_tpl);?>
">店铺管理</a></li> 
                    <li><a href="<?php echo FUNC_function(array('type'=>'url','link'=>"/shopcenter/shoporderlist"),$_smarty_tpl);?>
">订单管理</a></li>
                    <li><a href="<?php echo FUNC_function(array('type'=>'url','link'=>"/shopcenter/fastfood"),$_smarty_tpl);?>
">快速下单</a></li>
                    <li><a href="<?php echo FUNC_function(array('type'=>'url','link'=>"/shopcenter/draworderset"),$_smarty_tpl);?>
">退款订单管理</a></li>
 
                </ul>
                 <div class="cl"></div>
            </div>
            <div class="topRight fr">
            	
                    <span  style="color: #c7c7c7;font-size: 14px;padding: 5px;" onclick="openlink('<?php echo FUNC_function(array('type'=>'url','link'=>"/member/base"),$_smarty_tpl);?>
');" class="curbtn">会员中心 </span>
                    <span class="username curbtn" onclick="openlink('<?php echo FUNC_function(array('type'=>'url','link'=>"/member/loginout"),$_smarty_tpl);?>
');">退出<img src="<?php echo $_smarty_tpl->tpl_vars['siteurl']->value;?>
/templates/<?php echo $_smarty_tpl->tpl_vars['tempdir']->value;?>
/public/shopcenter/images/usernameBg.png" /></span>
                 
                
            </div>
            <div class="cl"></div>
            
            
            <div class="shangjiaTop">
            	<div class="sjgl">
                	
                </div>
            	
            </div>
        </div>
    	
    </div>
    <!---header end--->
    <script>
	$(function(){
		var clientWidth = document.body.clientWidth;
		/*alert(clientWidth);*/
		if( clientWidth<=1347 ){
			
			$(".content").css("width","1240px");
			$(".conleft").removeClass("content_left");
			
		}
	});
</script>
 <!------以上是公共的头部部分------->
 
  <!---content start--->
	<div class="content">
   	 	<!---content left start--->
		<div class="conleft content_left fl" style="height:730px;">
        	<div class="nav" style="height:732px;">
            	<ul>
                	<li onclick="openlink('<?php echo FUNC_function(array('type'=>'url','link'=>"/shopcenter/useredit"),$_smarty_tpl);?>
');" data="baseset"><div class="navimg"><img src="<?php echo $_smarty_tpl->tpl_vars['siteurl']->value;?>
/templates/<?php echo $_smarty_tpl->tpl_vars['tempdir']->value;?>
/public/shopcenter/images/dpsz.png" /></div>
					<a href="<?php echo FUNC_function(array('type'=>'url','link'=>"/shopcenter/useredit"),$_smarty_tpl);?>
">店铺设置</a></li>
                    <li onclick="openlink('<?php if (empty($_smarty_tpl->tpl_vars['shopinfo']->value['shoptype'])){?><?php echo FUNC_function(array('type'=>'url','link'=>"/shopcenter/goodslist"),$_smarty_tpl);?>
<?php }else{ ?><?php echo FUNC_function(array('type'=>'url','link'=>"/shopcenter/marketgoodslist"),$_smarty_tpl);?>
<?php }?>');" data="basemenu"><div class="navimg"><img src="<?php echo $_smarty_tpl->tpl_vars['siteurl']->value;?>
/templates/<?php echo $_smarty_tpl->tpl_vars['tempdir']->value;?>
/public/shopcenter/images/cdgl.png" /></div><a href="<?php if (empty($_smarty_tpl->tpl_vars['shopinfo']->value['shoptype'])){?><?php echo FUNC_function(array('type'=>'url','link'=>"/shopcenter/goodslist"),$_smarty_tpl);?>
<?php }else{ ?><?php echo FUNC_function(array('type'=>'url','link'=>"/shopcenter/marketgoodslist"),$_smarty_tpl);?>
<?php }?>">菜单管理</a></li>
                    <li onclick="openlink('<?php echo FUNC_function(array('type'=>'url','link'=>"/shopcenter/shoporderlist"),$_smarty_tpl);?>
');" data="baseorder"><div class="navimg"><img src="<?php echo $_smarty_tpl->tpl_vars['siteurl']->value;?>
/templates/<?php echo $_smarty_tpl->tpl_vars['tempdir']->value;?>
/public/shopcenter/images/ddgl.png" /></div>
					<a href="<?php echo FUNC_function(array('type'=>'url','link'=>"/shopcenter/shoporderlist"),$_smarty_tpl);?>
">订单管理</a></li>
                    <li onclick="openlink('<?php echo FUNC_function(array('type'=>'url','link'=>"/shopcenter/shoptotal"),$_smarty_tpl);?>
');" data="baseordertj"><div class="navimg"><img src="<?php echo $_smarty_tpl->tpl_vars['siteurl']->value;?>
/templates/<?php echo $_smarty_tpl->tpl_vars['tempdir']->value;?>
/public/shopcenter/images/ddtj.png" /></div>
					<a href="<?php echo FUNC_function(array('type'=>'url','link'=>"/shopcenter/shoptotal"),$_smarty_tpl);?>
">订单统计</a></li>
					
					<li onclick="openlink('<?php echo FUNC_function(array('type'=>'url','link'=>"/shopcenter/setshophui"),$_smarty_tpl);?>
');" data="baseshorder">
					<div class="navimg"><img src="<?php echo $_smarty_tpl->tpl_vars['siteurl']->value;?>
/templates/<?php echo $_smarty_tpl->tpl_vars['tempdir']->value;?>
/public/shopcenter/images/ddgl.png" /></div>
					<a href="<?php echo FUNC_function(array('type'=>'url','link'=>"/shopcenter/setshophui"),$_smarty_tpl);?>
">闪惠管理</a></li>
					
					
                    <li onclick="openlink('<?php echo FUNC_function(array('type'=>'url','link'=>"/shopcenter/setshoparea"),$_smarty_tpl);?>
');" data="basearea"><div class="navimg"><img src="<?php echo $_smarty_tpl->tpl_vars['siteurl']->value;?>
/templates/<?php echo $_smarty_tpl->tpl_vars['tempdir']->value;?>
/public/shopcenter/images/psqy.png" /></div>
					<a href="<?php echo FUNC_function(array('type'=>'url','link'=>"/shopcenter/setshoparea"),$_smarty_tpl);?>
">配送区域</a></li>
                    <li onclick="openlink('<?php echo FUNC_function(array('type'=>'url','link'=>"/shopcenter/cxrule"),$_smarty_tpl);?>
');"  data="basecx"><div class="navimg"><img src="<?php echo $_smarty_tpl->tpl_vars['siteurl']->value;?>
/templates/<?php echo $_smarty_tpl->tpl_vars['tempdir']->value;?>
/public/shopcenter/images/xxgz.png" /></div>
					<a href="<?php echo FUNC_function(array('type'=>'url','link'=>"/shopcenter/cxrule"),$_smarty_tpl);?>
">促销规则</a></li>
                    <li onclick="openlink('<?php echo FUNC_function(array('type'=>'url','link'=>"/shopcenter/shopask"),$_smarty_tpl);?>
');" data="baseask"><div class="navimg"><img src="<?php echo $_smarty_tpl->tpl_vars['siteurl']->value;?>
/templates/<?php echo $_smarty_tpl->tpl_vars['tempdir']->value;?>
/public/shopcenter/images/lygl.png" /></div>
					<a href="<?php echo FUNC_function(array('type'=>'url','link'=>"/shopcenter/shopask"),$_smarty_tpl);?>
">留言评价</a></li>
                    
                    
                </ul>
               
            </div>
        </div>	
       <!---content left end---> 
       
       
       
       
       
           
  <!---content right start---> 
  
  
  <div class="conWaiSet fr">
        	
            <div class="shopSetTop">
            	<span>店铺设置</span>
            </div> 
            	  <?php echo $_smarty_tpl->getSubTemplate (((string)$_smarty_tpl->tpl_vars['tempdir']->value)."/shopcenter/usereditmenu.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>
  
             <div class="cl"></div>  
                <form id="loginForm" method="post" action="<?php echo FUNC_function(array('type'=>'url','link'=>"/shopcenter/savebase"),$_smarty_tpl);?>
">
                 <div class="jutiSet">
        		     	<div class="serxuanze">
                    		<div class="xuanze_left">
                        	<span>店铺名字：</span>
                        </div>
                        <div class="dianpu_right" style="width:387px;">
                        	<input type="text" style="width:387px;" id="shopname" name="shopname" value="<?php echo $_smarty_tpl->tpl_vars['shopinfo']->value['shopname'];?>
"    />
                            
                        </div>
                        <div class="cl"></div>
                    </div>
                    <div class="serxuanze">
                    	<div class="xuanze_left">
                        	<span>接单电话：</span>
                        </div>
                        <div class="dianpu_right" style="width:387px;">
                        	<input type="text" style="width:387px;"  id="phone" name="phone" value="<?php echo $_smarty_tpl->tpl_vars['shopinfo']->value['phone'];?>
"     />
                            
                        </div>
                        <div class="cl"></div>
                    </div>
                    <div class="serxuanze">
                    	<div class="xuanze_left">
                        	<span>店铺负责人电话：</span>
                        </div>
                        <div class="dianpu_right" style="width:387px;">
                        	<input type="text" style="width:387px; "  id="maphone" name="maphone" value="<?php echo $_smarty_tpl->tpl_vars['shopinfo']->value['maphone'];?>
"  />
                            
                        </div>
                        <div class="cl"></div>
                    </div>
                    
                    <div class="upimg">
                    	<div class="file_img">
                        	 <img src="<?php echo $_smarty_tpl->tpl_vars['shopinfo']->value['shoplogo'];?>
" width="136" height="130" id="imgshow" <?php if (empty($_smarty_tpl->tpl_vars['shopinfo']->value['shoplogo'])){?> style="display:none;"<?php }?>>  
                        </div>
                        <div class="file_xxiang">
                        	<input type="hidden" name="shoplogo" id="shoplogo" value="<?php echo $_smarty_tpl->tpl_vars['shopinfo']->value['shoplogo'];?>
" class="skey" style="width:150px;" > 
                     <div id="div-headpicUpload" style="display:block;"> 
		                  <form id="form1" name="form1" method="post"  enctype="multipart/form-data" target="ifr-headpic-upload" onsubmit="return checkImagetype('1');">    
		                  	<div class=""> 
		               		<input name="head" type="file" id="imgFile" style="width:70px;float:left;" name="imgFile" onchange="$('#input1').val($(this).val())"  class="curbtn">
		               		<input id="submitImg" type="button" value="上传" class="ss_sc curbtn" style="width:40px;float:left; border:1px solid #ccc;background-color:white;height:22px;line-height:12px;margin-top:5px;margin-left:20px;" >   
		               	</div>  
		               </form> 
		             </div>
		                         <div class="cl"></div>
                        </div>
                    </div>
                    
                    
                    <div class="serxuanze">
                    	<div class="xuanze_left">
                        	<span>店铺地址：</span>
                        </div>
                        <div class="dianpu_right">
                        	<input type="text" style="width:569px; " id="address" name="address" value="<?php echo $_smarty_tpl->tpl_vars['shopinfo']->value['address'];?>
" />
                            
                        </div>
                        <div class="cl"></div>
                    </div>
                    
                    <div class="serxuanze" style=" width:767px;">
                    	<div class="xuanze_left">
                        	<span>百度坐标：</span>
                        </div>
                        <div class="dianpu_right" style="width:498px; margin-right:0px; padding-right:0px;">
                        	<input type="text" style="width:488px; " name="baidumap" value="<?php echo $_smarty_tpl->tpl_vars['shopinfo']->value['lng'];?>
,<?php echo $_smarty_tpl->tpl_vars['shopinfo']->value['lat'];?>
"  />
                            
                        </div>
                        <div class="geiquAdd curbtn fr" onclick="biaoji();" >
                        	给取地址
                        </div>
                        <div class="cl"></div>
                    </div>
                    <div class="serxuanze">
                    	<div class="xuanze_left">
                        	<span>邮箱地址：</span>
                        </div>
                        <div class="dianpu_right">
                        	<input type="text" style="width:569px;" id="email" name="email" value="<?php echo $_smarty_tpl->tpl_vars['shopinfo']->value['email'];?>
" />
                            
                        </div>
                        <div class="cl"></div>
                    </div>
                    
                     <?php $_smarty_tpl->tpl_vars['foo'] = new Smarty_variable(explode("|",$_smarty_tpl->tpl_vars['shopinfo']->value['starttime']), null, 0);?>
                     <?php  $_smarty_tpl->tpl_vars['items'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['items']->_loop = false;
 $_smarty_tpl->tpl_vars['myid'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['foo']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['items']->key => $_smarty_tpl->tpl_vars['items']->value){
$_smarty_tpl->tpl_vars['items']->_loop = true;
 $_smarty_tpl->tpl_vars['myid']->value = $_smarty_tpl->tpl_vars['items']->key;
?>
                     <?php if (!empty($_smarty_tpl->tpl_vars['items']->value)){?>
                     <?php $_smarty_tpl->tpl_vars['newtime'] = new Smarty_variable(explode("-",$_smarty_tpl->tpl_vars['items']->value), null, 0);?>
                     <?php if (count($_smarty_tpl->tpl_vars['newtime']->value)==2){?>
                     <?php $_smarty_tpl->createLocalArrayVariable('newtimedata', null, 0);
$_smarty_tpl->tpl_vars['newtimedata']->value[] = $_smarty_tpl->tpl_vars['newtime']->value[0];?>
                     <?php $_smarty_tpl->createLocalArrayVariable('newtimedata', null, 0);
$_smarty_tpl->tpl_vars['newtimedata']->value[] = $_smarty_tpl->tpl_vars['newtime']->value[1];?>
                     <?php }?>
                     <?php }?>
                     <?php } ?>
                     <div class="serxuanze">
                         <div class="xuanze_left">
                             <span>营业时间：</span>
                         </div>
                         <div class="xuanze_right" style="width:589px;">
                             <div style="vertical-align: middle;line-height:40px;width: 569px;">
                                 <?php echo smarty_function_html_select_time(array('time'=>$_smarty_tpl->tpl_vars['newtimedata']->value[0],'display_seconds'=>0,'field_array'=>"dotime"),$_smarty_tpl);?>
&nbsp;&nbsp;--&nbsp;&nbsp;<?php echo smarty_function_html_select_time(array('time'=>$_smarty_tpl->tpl_vars['newtimedata']->value[1],'display_seconds'=>0,'field_array'=>"dotime"),$_smarty_tpl);?>

                             </div>
                         </div>
                         <div class="cl"></div>
                     </div>
                     <div class="serxuanze" id="starttime2">
                         <div class="xuanze_left">
                             <span>营业时间：</span>
                         </div>
                         <div class="xuanze_right" style="width:589px;">
                             <div style="vertical-align: middle;line-height:40px;width: 569px;">
                                 <?php echo smarty_function_html_select_time(array('time'=>$_smarty_tpl->tpl_vars['newtimedata']->value[2],'display_seconds'=>0,'field_array'=>"dotime"),$_smarty_tpl);?>
&nbsp;&nbsp;--&nbsp;&nbsp;<?php echo smarty_function_html_select_time(array('time'=>$_smarty_tpl->tpl_vars['newtimedata']->value[3],'display_seconds'=>0,'field_array'=>"dotime"),$_smarty_tpl);?>

                                 &nbsp;&nbsp;<a href="#" onclick="detimelist(2);">删除</a>
                             </div>
                         </div>
                         <div class="cl"></div>
                     </div>
                     <div class="serxuanze" id="starttime4">
                         <div class="xuanze_left">
                             <span>营业时间：</span>
                         </div>
                         <div class="xuanze_right" style="width:589px;">
                             <div style="vertical-align: middle;line-height:40px;width: 569px;">
                                 <?php echo smarty_function_html_select_time(array('time'=>$_smarty_tpl->tpl_vars['newtimedata']->value[4],'display_seconds'=>0,'field_array'=>"dotime"),$_smarty_tpl);?>
&nbsp;&nbsp;--&nbsp;&nbsp;<?php echo smarty_function_html_select_time(array('time'=>$_smarty_tpl->tpl_vars['newtimedata']->value[5],'display_seconds'=>0,'field_array'=>"dotime"),$_smarty_tpl);?>

                                 &nbsp;&nbsp;<a href="#" onclick="detimelist(4);">删除</a>
                             </div>
                         </div>
                         <div class="cl"></div>
                     </div>
                     <div class="serxuanze" id="newtime">
                         <div class="xuanze_left">
                         </div>
                         <div class="xuanze_right" style="width:589px;">
                             <a href="javescript:;" onclick="outtimelist();">新增营业时间</a>
                         </div>
                         <div class="cl"></div>
                     </div>
					     <div class="serxuanze">
                    	<div class="xuanze_left">
                        	<span>默认商品单位：</span>
                        </div>
                        <div class="dianpu_right" style="width:auto; background:none; ">
                        	<input type="text" style="width:150px; float:left;" id="goodattrdefault" name="goodattrdefault" value="<?php echo $_smarty_tpl->tpl_vars['shopinfo']->value['goodattrdefault'];?>
"  /><span style="float:left; margin-left:20px;">比如：份 / 斤 / 个 / 盒</span>
                            
                        </div>
                        <div class="cl"></div>
                    </div>
					<div class="cl"></div>
                     <div class="serxuanze">
                    	<div class="xuanze_left">
                        	<span>是否开启在线支付：</span>
                        </div>
                        <div class="xuanze_right">
                        	<input type="radio"   name="is_onlinepay"   value="1" <?php if ($_smarty_tpl->tpl_vars['shopinfo']->value['is_onlinepay']==1){?>checked<?php }?>/>是 <input type="radio"  name="is_onlinepay"   value="0" <?php if ($_smarty_tpl->tpl_vars['shopinfo']->value['is_onlinepay']==0){?>checked<?php }?>/>否
                        </div>
                  </div>
                        <div class="cl"></div>
                  <div class="serxuanze">
                    	<div class="xuanze_left">
                        	<span>是否开启到付：</span>
                        </div>
                        <div class="xuanze_right">
                        	<input type="radio"   name="is_daopay"   value="1" <?php if ($_smarty_tpl->tpl_vars['shopinfo']->value['is_daopay']==1){?>checked<?php }?>/>是 <input type="radio"  name="is_daopay"   value="0" <?php if ($_smarty_tpl->tpl_vars['shopinfo']->value['is_daopay']==0){?>checked<?php }?>/>否
                        </div>
                        <div class="cl"></div>
                    </div>
					  <div class="cl"></div>
				  <div class="serxuanze">
                    	<div class="xuanze_left">
                        	<span>是否营业：</span>
                        </div>
                        <div class="xuanze_right">
                        	<input type="radio"   name="is_open"   value="1" <?php if ($_smarty_tpl->tpl_vars['shopinfo']->value['is_open']==1){?>checked<?php }?>/>是 <input type="radio"  name="is_open"   value="0" <?php if ($_smarty_tpl->tpl_vars['shopinfo']->value['is_open']==0){?>checked<?php }?>/>否
                        </div>
                        <div class="cl"></div>
                    </div>
					
 		
 
					
					
					
                  	 <div class="settijiao">
                    	
                          <div class="xuanze_right hc_login_btn_div" ></div>
                         
                     
                        <div class="cl"></div>
                    </div>
                    
                    
       			 </div>
              </form>  
                
                
        </div>
        <div class="cl"></div>
        
        
       
        
        
        <!---content right end---> 
  
  
   
 <!---content right start---> 
<script type="text/javascript"> 
var areagrade ='0';// ;
var defaultid = '';
 
</script> 
<script type="text/javascript">
    $('.hc_login_btn_div').click(function(){
        var shopname = $('input[name="shopname"]').val();
        var phone = $('input[name="phone"]').val();
        var address = $('input[name="address"]').val();
        var shortname = $('input[name="shortname"]').val();
        var email =$('input[name="email"]').val();
        var goodattrdefault =$('input[name="goodattrdefault"]').val();
        var IMEI = $('input[name="IMEI"]').val();
        var is_open =  $("input[name='is_open']:checked").val();
        var is_onlinepay =  $("input[name='is_onlinepay']:checked").val();
        var is_daopay =  $("input[name='is_daopay']:checked").val();

        var hour1=$("select[name='dotime[Time_Hour]']").eq(0).val();
        var Minute1=$("select[name='dotime[Time_Minute]']").eq(0).val();
        var hour2=$("select[name='dotime[Time_Hour]']").eq(1).val();
        var Minute2=$("select[name='dotime[Time_Minute]']").eq(1).val();
        if((hour1 == 0 && Minute1 == 0) || (hour2 == 0 && Minute2 == 0)){
            var alltime1='';
        }else{
            var alltime1=hour1+','+Minute1+','+hour2+','+Minute2;
        }
        var hour3=$("select[name='dotime[Time_Hour]']").eq(2).val();
        var Minute3=$("select[name='dotime[Time_Minute]']").eq(2).val();
        var hour4=$("select[name='dotime[Time_Hour]']").eq(3).val();
        var Minute4=$("select[name='dotime[Time_Minute]']").eq(3).val();
        if((hour3 == 0 && Minute3 == 0) || (hour4 == 0 && Minute4 == 0)){
            var alltime2='';
        }else{
            var alltime2=','+hour3+','+Minute3+','+hour4+','+Minute4;
        }
        var hour5=$("select[name='dotime[Time_Hour]']").eq(4).val();
        var Minute5=$("select[name='dotime[Time_Minute]']").eq(4).val();
        var hour6=$("select[name='dotime[Time_Hour]']").eq(5).val();
        var Minute6=$("select[name='dotime[Time_Minute]']").eq(5).val();
        if((hour5 == 0 && Minute5 == 0) || (hour6 == 0 && Minute6 == 0) || alltime2==''){
            var alltime3='';
        }else{
            var alltime3=','+hour5+','+Minute5+','+hour6+','+Minute6;
        }
        var starttime = alltime1+alltime2+alltime3;
        var otherlink = $('input[name="otherlink"]').val();
        var baidumap = $('input[name="baidumap"]').val();
		 
        var backinfo = ajaxback('<?php echo FUNC_function(array('type'=>'url','link'=>"/shopcenter/useredit/datatype/json"),$_smarty_tpl);?>
',{'shopname':shopname,'IMEI':IMEI,'phone':phone,'address':address,'shortname':shortname,'email':email,'goodattrdefault':goodattrdefault,'is_open':is_open,'is_onlinepay':is_onlinepay,'is_daopay':is_daopay,'starttime':starttime,'otherlink':otherlink,'baidumap':baidumap,'maphone':$('input[name="maphone"]').val()});
        if(backinfo.flag == true)
        {
            diaerror(backinfo.content);
        }else{
            artsucces('保存成功');
            location.reload();
        }
    });
	$(".hc_login_input").change(function(j){
		var v=$(this).val();
		var p=$(this).attr("shopname"); 
		switch(p){
		case "shopname":	if(v == '' ||v == null){
			  alert('用户名不能为空'); 
			} 
		break;
		case "shortname":
		 	var patrn=/[u4e00-u9fa5]/;  
			if(v == '' ||v == null){
			  alert('店铺CODE不能为空'); 
			} 
		break; 
		case "phone":
		   if(v == '' ||v == null){
			  alert('联系电话不能为空'); 
			} 
		break;
		case "address":
		   if(v == '' ||v == null){
			  alert('联系地址不能为空'); 
			} 
		break;
		case "pwd":
			var patrn=/(.){4,16}/;  
			if(!patrn.exec(v)){
				 alert('密码是4-16位的字母、数字,区分大小写');  
			 } 
		break;
		}
	});
	$('#submitImg').click(function(){
		ajaxFileUpload();
	});
	function ajaxFileUpload()
	{
		$("#loading")
		.ajaxStart(function(){
			$(this).show();
		})
		.ajaxComplete(function(){
			$(this).hide();
		});
  
		$.ajaxFileUpload
		(
			{
				url:'<?php echo FUNC_function(array('type'=>'url','link'=>"/other/userupload/type/shoplogo/datatype/json"),$_smarty_tpl);?>
',
				secureuri:false,
				fileElementId:'imgFile',
				dataType: 'json',
				data:{name:'logan', id:'id'},
				success: function (data, status)
				{
					if(typeof(data.error) != 'undefined')
					{
						if(data.error == false)
						{ 
						 
							$('#img').val(data.msg);
 	           $('#imgshow').attr('src',data.msg);
 	                $('#imgshow').show(); 
						}else
						{
							alert(data.msg);
						}
					}else{
					  alert(data);
					}
				},
				error: function (data, status, e)
				{
					alert(e);
				}
			}
		)
		
		return false;

	}
	var dialogs ;
 function uploads(){  
 	  dialogs = art.dialog.open('<?php echo FUNC_function(array('type'=>'url','link'=>"/other/userupload/func/uploadsucess/type/shoplogo"),$_smarty_tpl);?>
');
 	  dialogs.title('上传图片'); 
 }
 function uploadsucess(linkurl){
 	dialogs.close(); 
 	$('#img').val(linkurl);
 	$('#imgshow').attr('src',linkurl);
 	$('#imgshow').show(); 
}
function uploaderror(msg){
	 alert(msg);
		dialogs.close();
		uploads();
}


var ditulog;
function biaoji(){
    	mydialog = art.dialog.open(siteurl+'/index.php?ctrl=area&action=shopbaidumap',{height:'550px',width:'850px'},false);
    	//http://www.hanwoba.com/index.php?ctrl=admin&action=baidumap&id=2#
	 	 mydialog.title('设置标记百度地址位置'); 
	 	 mydialog.height('500px');
 }
 function closemydilog(){
 	mydialog.close();
}
    $(function(){
        var newtime2="<?php echo $_smarty_tpl->tpl_vars['newtimedata']->value[2];?>
";
        var newtime4="<?php echo $_smarty_tpl->tpl_vars['newtimedata']->value[4];?>
";
        if(newtime2 == '' || newtime2 == null){
            $("#starttime2").hide();
        }
        if(newtime4 == '' || newtime4 == null){
            $("#starttime4").hide();
        }
        if(newtime2 != '' && newtime4 != ''){
            $("#newtime").hide();
        }
    });
    function outtimelist(){
        var starttime2=$("#starttime2").css("display");
        var starttime4=$("#starttime4").css("display");
        if(starttime2 == 'none'){
            $("#starttime2").show();
        }
        if(starttime2 != 'none' && starttime4 == 'none'){
            $("#starttime4").show();
            $("#newtime").hide();
        }
    }

    function detimelist(time){
        var starttime4=$("#starttime4").css("display");
        if(time == 2 && starttime4 == 'none'){
            $("#starttime2").hide();
            $("select[name='dotime[Time_Hour]']").eq(2).val(0);
            $("select[name='dotime[Time_Minute]']").eq(2).val(0);
            $("select[name='dotime[Time_Hour]']").eq(3).val(0);
            $("select[name='dotime[Time_Minute]']").eq(3).val(0);
            $("#newtime").show();
        }else if(time == 4){
            $("#starttime4").hide();
            $("select[name='dotime[Time_Hour]']").eq(4).val(0);
            $("select[name='dotime[Time_Minute]']").eq(4).val(0);
            $("select[name='dotime[Time_Hour]']").eq(5).val(0);
            $("select[name='dotime[Time_Minute]']").eq(5).val(0);
            $("#newtime").show();
        }else{
            alert('删除顺序错误');
        }
    }

</script> 
 
  
       
       
       
       
       
       
       
       </div>
    



<!------以下是公共的底部部分------->

    <div class="footer">
    	<div class="foot1">
        <center>
        	<div class="db">
        	   <?php if (!empty($_smarty_tpl->tpl_vars['toplink']->value)){?>
	 	      <?php $_smarty_tpl->tpl_vars['toplink'] = new Smarty_variable(unserialize($_smarty_tpl->tpl_vars['toplink']->value), null, 0);?>
		  	  <?php  $_smarty_tpl->tpl_vars['items'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['items']->_loop = false;
 $_smarty_tpl->tpl_vars['myid'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['toplink']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['items']->key => $_smarty_tpl->tpl_vars['items']->value){
$_smarty_tpl->tpl_vars['items']->_loop = true;
 $_smarty_tpl->tpl_vars['myid']->value = $_smarty_tpl->tpl_vars['items']->key;
?> 
			         <a href="<?php echo $_smarty_tpl->tpl_vars['items']->value['typeurl'];?>
"><?php echo $_smarty_tpl->tpl_vars['items']->value['typename'];?>
</a> | 
			    <?php } ?>
			<?php }?> 
         
            </div></center>
            <div class="cl"></div>
        </div>
        <div class="foot2">
        	<p>@2008-2012 <?php echo $_smarty_tpl->tpl_vars['sitename']->value;?>
 <?php echo $_smarty_tpl->tpl_vars['beian']->value;?>
 <?php echo stripslashes($_smarty_tpl->tpl_vars['footerdata']->value);?>
</p>
        </div>
    </div>
 
 <script>
                	
				$(function(){
					 
			  	if("undefined" != typeof mynomenu){
					   var allobj = $('.nav').find('li');
					  $.each(allobj, function(i, newobj) {
					  	if($(this).attr('data') == mynomenu){
					  	   $(this).addClass('on');
					  	 }
					  	//alert($(this).attr('data'));
					   	  
					  });
				 	}
					$(".nav ul li").click(function(){
					    	$(this).addClass('on').siblings().removeClass('on');
						
					});	 
				});
				function openlink(newlinkes){
					window.location.href=newlinkes;
				}
</script> 
  
</body>
</html><?php }} ?>