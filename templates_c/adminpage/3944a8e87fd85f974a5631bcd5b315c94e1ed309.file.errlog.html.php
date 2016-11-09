<?php /* Smarty version Smarty-3.1.10, created on 2016-10-14 15:01:25
         compiled from "D:\WWW\templates\adminpage\other\errlog.html" */ ?>
<?php /*%%SmartyHeaderCode:25281580082c594f729-16721781%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '3944a8e87fd85f974a5631bcd5b315c94e1ed309' => 
    array (
      0 => 'D:\\WWW\\templates\\adminpage\\other\\errlog.html',
      1 => 1469566320,
      2 => 'file',
    ),
    '30cbfcccba46f05c2cbc1a09a2aca9524dda8480' => 
    array (
      0 => 'D:\\WWW\\templates\\adminpage\\public\\admin.html',
      1 => 1476191110,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '25281580082c594f729-16721781',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'tempdir' => 0,
    'siteurl' => 0,
    'is_static' => 0,
    'admininfo' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.10',
  'unifunc' => 'content_580082c5b250b6_61889682',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_580082c5b250b6_61889682')) {function content_580082c5b250b6_61889682($_smarty_tpl) {?><?php if (!is_callable('smarty_modifier_date_format')) include 'D:\\WWW\\lib\\Smarty\\libs\\plugins\\modifier.date_format.php';
?>﻿ <html xmlns="http://www.w3.org/1999/xhtml"><head> 
<meta http-equiv="Content-Type" content="text/html; charset=utf-8"> 
<meta http-equiv="Content-Language" content="zh-CN"> 
<meta content="all" name="robots"> 
<meta name="description" content=""> 
<meta content="" name="keywords"> 
<title>后台管理中心 </title>  
<link rel="stylesheet" type="text/css" href="<?php echo $_smarty_tpl->tpl_vars['siteurl']->value;?>
/templates/<?php echo $_smarty_tpl->tpl_vars['tempdir']->value;?>
/public/css/admin1.css"> 
 <script src="<?php echo $_smarty_tpl->tpl_vars['siteurl']->value;?>
/templates/<?php echo $_smarty_tpl->tpl_vars['tempdir']->value;?>
/public/js/jquery.js" type="text/javascript" language="javascript"></script>
 <script src="<?php echo $_smarty_tpl->tpl_vars['siteurl']->value;?>
/templates/<?php echo $_smarty_tpl->tpl_vars['tempdir']->value;?>
/public/js/public.js" type="text/javascript" language="javascript"></script>
 <script type="text/javascript" language="javascript" src="<?php echo $_smarty_tpl->tpl_vars['siteurl']->value;?>
/templates/<?php echo $_smarty_tpl->tpl_vars['tempdir']->value;?>
/public/js/artdialog/artDialog.js?skin=blue"></script>
 <script src="<?php echo $_smarty_tpl->tpl_vars['siteurl']->value;?>
/templates/<?php echo $_smarty_tpl->tpl_vars['tempdir']->value;?>
/public/js/template.min.js" type="text/javascript" language="javascript"></script>

<script type="text/javascript" language="javascript" src="<?php echo $_smarty_tpl->tpl_vars['siteurl']->value;?>
/templates/<?php echo $_smarty_tpl->tpl_vars['tempdir']->value;?>
/public/js/artdialog/plugins/iframeTools.js"></script>
 
<script>
	var menu = null;
	var siteurl = "<?php echo $_smarty_tpl->tpl_vars['siteurl']->value;?>
";
	var is_static ="<?php echo $_smarty_tpl->tpl_vars['is_static']->value;?>
";
	if(screen.width > 1359){
		
		$('.newtop').css('width',screen.width);
		$('.newmain').css('width',screen.width);
		$('.newfoot').css('width',screen.width);
	}  
	
</script> 
</head> 
<body> 
<div id="cat_zhe" class="cart_zhe" style="display:none;"></div>
<div id="cat_tj" class="cart_out_cat" style="display:none;"> 数据提交中..</div>
<div class="newtop">
	  <div class="newadddiv">
	  <div class="newlogo">
	  	  <div class="imglogo"><a href="<?php echo $_smarty_tpl->tpl_vars['siteurl']->value;?>
" target="_blank"><img src="<?php echo $_smarty_tpl->tpl_vars['siteurl']->value;?>
/templates/<?php echo $_smarty_tpl->tpl_vars['tempdir']->value;?>
/public/images/admin/logo.png"> </a></div>
	  </div>
	  <div class="newtopnav">
	  	 <ul>
	  	  <?php echo $_smarty_tpl->getSubTemplate (((string)$_smarty_tpl->tpl_vars['tempdir']->value)."/public/admin_module.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>
 
	  	 	<ul>
	  	
	  </div>
	</div>
</div> 
<div style="clear:both;"></div>
<div class="newmain">
	<!-- 提示导航-->
   <div class="top_nav">
	    <div class="nav2 datainfo">
	    	<?php echo smarty_modifier_date_format(time(),"%Y-%m-%d");?>
  
	    </div>
	    <div class="nav2 positioninfo" id="positionname2">
	    	网站首页
	    </div>
	    <div class="nav2 orderinfo">
	    	您有今天有0 个订单待审核
	    </div>
   </div>
   <!-- 主内容区-->
   <div class="newmain_all">
   	 <!-- 主内左区-->
   	 <div class="left_content">
   	 	   <!-- 主内左区用户信息-->
   	 	   <div class="userinfo">
   	 	   	   <div class="user_area">
   	 	   	   	      <div class="user_name">
   	 	   	   	      	<?php echo $_smarty_tpl->tpl_vars['admininfo']->value['username'];?>

   	 	   	   	      </div>
   	 	   	   	      <div class="content_url">
   	 	   	   	      	 <a href="<?php echo FUNC_function(array('type'=>'url','link'=>"/member/adminloginout"),$_smarty_tpl);?>
" class="out">退出</a> 
   	 	   	   	      	 <a onClick="modifypwd();" href="#">修改密码</a>
   	 	   	   	      </div>
   	 	   	  </div>
   	 	   	  <div class="now_name" id="nowactioninfo">
   	 	   	    	网站首页
   	 	   	    </div>
   	 	   </div>
   	 	   <!-- 主内左区导航条-->
   	 	    <div class="left_nav">
   	 	    	  <ul> 
   	 	    	  	
   	 	    	  	
   	 	    	  	 <?php echo $_smarty_tpl->getSubTemplate (((string)$_smarty_tpl->tpl_vars['tempdir']->value)."/public/admin_menu.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>

   	 	    	 
   	 	    	     <li style="text-align:center;"><a href="<?php echo $_smarty_tpl->tpl_vars['siteurl']->value;?>
" style="color:#0076cf;" target="_blank">返回网站首页</a></li>
   	 	    	  </ul>
   	 	    </div>
   	 	    <div class="left_navend">
   	 	    </div>
   	 	    <!-- 主内左区天气预报-->
   	 	    <div class="weather" id="weatherinfo" style="display:none;">
   	 	    	 <div class="todayweacher">
   	 	    	      <div class="weacher_left">
   	 	    	      	 <div id="wtoday_img"> </div>
   	 	    	      	 <div><span id="wcity" style="padding-right:5px;"></span><span id="wqihou"></span></div>
   	 	    	      </div>
   	 	    	      <div class="weacher_right" id="wwendu">
   	 	    	      	 
   	 	    	      </div>	 
   	 	    	 </div>
   	 	    	 <div style="clear:both;">
   	 	    	 	   <div class="tom">
   	 	    	 	   	    <div id="tom_1" class="tom_img"></div>
   	 	    	 	   	    <div class="tom_wendu" id="tom_day"></div>
   	 	    	 	   	    <div class="tom_wendu" id="tom_wendu"></div>
   	 	    	 	   	
   	 	    	 	   	</div>
   	 	    	 	   <div class="tom">
   	 	    	 	   	    <div id="tom_tom" class="tom_img"></div>
   	 	    	 	   	    <div class="tom_wendu" id="tom_tday"></div>
   	 	    	 	   	    <div class="tom_wendu" id="tom_twendu"></div>
   	 	    	 	   	</div>
   	 	    	 </div>
   	 	    </div>
   	 	     
   	  </div>
   	  
 
 
  
 
 
 <div class="right_content">
	<div class="show_content_m">
   	        	 <div class="show_content_m_ti">
   	        	 	   <div class="showtop_t" id="positionname">错误日志</div>
   	        	 </div>
   	        	 <div class="show_content_m_t2">
   	        	 	
   	        	 	

      <div style="width:auto;overflow-x:hidden;overflow-y:auto">
           <div class="tags">

          <div id="tagscontent">

            <div id="con_one_1">

              <div class="table_td" style="margin-top:10px;">

              <form method="post" action="" onsubmit="return remind();" id="delform">

                  <table border="0" cellspacing="2" cellpadding="4" class="list" name="table" id="table" width="100%">

                    <thead>

                      <tr>

                        <th width="60px"></th>

                        <th align="center">文件夹名称</th>

                        <th align="center">操作</th>
                      </tr>

                    </thead>

                     <tbody>

                      <?php  $_smarty_tpl->tpl_vars['items'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['items']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['list']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['items']->key => $_smarty_tpl->tpl_vars['items']->value){
$_smarty_tpl->tpl_vars['items']->_loop = true;
?>
                      <tr class="s_out" onmouseover="this.bgColor='#F5F5F5';" onmouseout="this.bgColor='ffffff';" bgcolor="#ffffff">
                        <td align="center" ><input type="checkbox" name="<?php echo $_smarty_tpl->tpl_vars['items']->value;?>
" value="<?php echo $_smarty_tpl->tpl_vars['items']->value;?>
" ></td>
                        <td align="center">/log/<?php echo $_smarty_tpl->tpl_vars['items']->value;?>
</td>

                        <td align="center"><a onclick="return remind(this);" href="<?php echo FUNC_function(array('type'=>'url','link'=>"/adminpage/other/module/delerrlog/dirname/".((string)$_smarty_tpl->tpl_vars['items']->value)."/datatype/json"),$_smarty_tpl);?>
">删除</a>&nbsp;&nbsp;&nbsp;&nbsp;<a href="<?php echo FUNC_function(array('type'=>'url','link'=>"/adminpage/other/module/download/dirname/".((string)$_smarty_tpl->tpl_vars['items']->value)),$_smarty_tpl);?>
">下载</a></td>
                      </tr>
                       <?php } ?>

                    </tbody>

                  </table>

                <div class="blank20"></div>

                </form>

                <div class="page_newc">


                 </div>

                <div class="blank20"></div>

              </div>

            </div>

          </div>

        </div>


  </div>

</div>









<script>
	var tablist=	<?php echo json_encode($_smarty_tpl->tpl_vars['tablist']->value);?>
;
	//空气开始结束
	//时间间隔

	function bkbase(dirname){
		if(confirm('确定操作吗？')){
		$("input[name='"+dirname+"']").attr('checked',true);
		$("input[name='name22']").attr('disabled',true);
		trancert(dirname,'<?php echo $_smarty_tpl->tpl_vars['deftb']->value;?>
');
	}
	}
	function trancert(dirname,tbname){
		//tablist
		var nowtb = tbname;
		var nexttab =
		 $('#showstatus').text('还原'+tbname+'表');
		 $.ajax({
     type: 'post',
     async:false,
     data:{'tabelname':tbname,'dirname':dirname},
     url: '<?php echo FUNC_function(array('type'=>'url','link'=>"/adminpage/other/module/savebkdata"),$_smarty_tpl);?>
',
     dataType: 'json',success: function(content) {
     	if(content.error == false){

     	}else{
     		if(content.error == true)
     		{
     			$('#showstatus').text(content,msg);
     		}else{

     			$('#showstatus').text(content);

     		}
     	}
     	 gettb(dirname,tbname);
	   },
     error: function(content) {
     	 $('#showstatus').text('数据获取失败');

        gettb(dirname,tbname);
	     }
     });







	}
	function gettb(dirname,tbname){
    	var k=0;
		 var d=0;
		 var newxtb = '';
		$.each(tablist,function(i,field){
			if(field == tbname)
			{
				d=k+1;
			}
			if(d > 0 && d== k){
				newxtb = field;
				return false;
			}
			k++;

		});
		if(newxtb == ''){
			$('#showstatus').text('还原完成');
		}else{
			setTimeout("trancert('"+dirname+"','"+newxtb+"')",200);
		}
	}
</script>
<!--newmain 结束-->
 
   	        	 	
               <div class="show_content_m_t3">
   	        	 </div>
   	        	 
   	       </div>
   	       <!-- show_content_m结束-->


   	  </div>
   	  <!-- right_content 结束-->
   	  
   </div>
   <!-- newmain_all 结束-->
</div>	
	
<!--newmain 结束-->
















<div style="clear:both;"></div>
<div class="newfoot">
	
	  版权所有 @ waimairen
</div>	
<script>
$(function(){ 
 $('.show_page a').wrap('<li></li>');
 $('.show_page').find('.current').eq(0).parent().css({'background':'#f60'}); 
});
   function limitalert(){
		//diaerror("您暂无权限设置,如有疑问请联系QQ：375952873  Tel：18538930577");
	}
</script>
</body>
</html>





<?php }} ?>