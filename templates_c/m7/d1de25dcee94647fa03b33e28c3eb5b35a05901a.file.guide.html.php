<?php /* Smarty version Smarty-3.1.10, created on 2016-10-14 15:05:25
         compiled from "D:\WWW\templates\m7\site\guide.html" */ ?>
<?php /*%%SmartyHeaderCode:22023580083b53c1359-26800592%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'd1de25dcee94647fa03b33e28c3eb5b35a05901a' => 
    array (
      0 => 'D:\\WWW\\templates\\m7\\site\\guide.html',
      1 => 1473340929,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '22023580083b53c1359-26800592',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'sitename' => 0,
    'keywords' => 0,
    'description' => 0,
    'siteurl' => 0,
    'tempdir' => 0,
    'sitelogo' => 0,
    'member' => 0,
    'list' => 0,
    'items' => 0,
    'area_grade' => 0,
    'toplink' => 0,
    'beian' => 0,
    'footerdata' => 0,
    'newaddress' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.10',
  'unifunc' => 'content_580083b59bf194_08131202',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_580083b59bf194_08131202')) {function content_580083b59bf194_08131202($_smarty_tpl) {?><?php if (!is_callable('smarty_function_load_data')) include 'D:\\WWW\\lib\\Smarty\\libs\\plugins\\function.load_data.php';
?><!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">  
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title> 选择区域-<?php echo $_smarty_tpl->tpl_vars['sitename']->value;?>
</title>
<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
 <meta name="Keywords" content="<?php echo $_smarty_tpl->tpl_vars['keywords']->value;?>
" />
<meta name="description" content="<?php echo $_smarty_tpl->tpl_vars['description']->value;?>
" /> 
	  <link rel="shortcut icon" href="<?php echo $_smarty_tpl->tpl_vars['siteurl']->value;?>
/upload/favicon/favicon-16x16.png" type="image/png" />
    <link rel="icon" href="<?php echo $_smarty_tpl->tpl_vars['siteurl']->value;?>
/upload/favicon/favicon-16x16.png" type="image/png" sizes="16x16" />
    <link rel="icon" href="<?php echo $_smarty_tpl->tpl_vars['siteurl']->value;?>
/upload/favicon/favicon-32x32.png" type="image/png" sizes="32x32" />
    <link rel="icon" href="<?php echo $_smarty_tpl->tpl_vars['siteurl']->value;?>
/upload/favicon/favicon-48x48.png" type="image/png" sizes="48x48" />
    <link rel="icon" href="<?php echo $_smarty_tpl->tpl_vars['siteurl']->value;?>
/upload/favicon/favicon-64x64.png" type="image/png" sizes="64x64" />
 <link rel="stylesheet" type="text/css" href="<?php echo $_smarty_tpl->tpl_vars['siteurl']->value;?>
/templates/<?php echo $_smarty_tpl->tpl_vars['tempdir']->value;?>
/public/css/bootstrap.min.css" />
<link rel="stylesheet" type="text/css" href="<?php echo $_smarty_tpl->tpl_vars['siteurl']->value;?>
/templates/<?php echo $_smarty_tpl->tpl_vars['tempdir']->value;?>
/public/css/login_index.css" />
 <script src="<?php echo $_smarty_tpl->tpl_vars['siteurl']->value;?>
/templates/<?php echo $_smarty_tpl->tpl_vars['tempdir']->value;?>
/public/js/jquerynew.js" type="text/javascript" language="javascript"></script>
 <script src="<?php echo $_smarty_tpl->tpl_vars['siteurl']->value;?>
/templates/<?php echo $_smarty_tpl->tpl_vars['tempdir']->value;?>
/public/js/bootstrap.min.js" type="text/javascript" language="javascript"></script>
 <script src="<?php echo $_smarty_tpl->tpl_vars['siteurl']->value;?>
/templates/<?php echo $_smarty_tpl->tpl_vars['tempdir']->value;?>
/public/js/jquery.cookie.js" type="text/javascript" language="javascript"></script>
 
 
 
 <script>
 	var siteurl = '<?php echo $_smarty_tpl->tpl_vars['siteurl']->value;?>
';
 	</script>
 	<!--[if lte IE 6]>
<script src="<?php echo $_smarty_tpl->tpl_vars['siteurl']->value;?>
/templates/<?php echo $_smarty_tpl->tpl_vars['tempdir']->value;?>
/public/js/DD_belatedPNG_0.0.8a.js" type="text/javascript"></script>
    <script type="text/javascript">
        DD_belatedPNG.fix('div, ul, img, li, input , a'); 
    </script>
 
<![endif]--> 

<link rel="stylesheet" type="text/css" href="<?php echo $_smarty_tpl->tpl_vars['siteurl']->value;?>
/templates/<?php echo $_smarty_tpl->tpl_vars['tempdir']->value;?>
/public/css/newguidecss/main_0d353d8.css"/>
<link rel="stylesheet" type="text/css" href="<?php echo $_smarty_tpl->tpl_vars['siteurl']->value;?>
/templates/<?php echo $_smarty_tpl->tpl_vars['tempdir']->value;?>
/public/css/newguidecss/landing_4beaec1.css"/>

 <style>

#user_info {
  position: absolute;
  right: 10px;
  top: 23px;
  z-index: 10;
  zoom: 1;
  text-align: right;
  font: 12px Arial;
  color: #000;
  line-height: 18px;
  font-family: "Microsoft Yahei UI","Microsoft YaHei",Helvetica,Arial,sans-serif;
}.header-container #user_info .logout_info li {
  background: #85252C;
}
#user_info .logout_info li:first-child {
  border-radius: 17px 0 0 17px;
  margin: 0 2px;
}
#user_info .logout_info li {
  background: #dc1432;
  height: 35px;
  line-height: 34px;
  -webkit-transition: background-color .2s ease-in 0s;
  -moz-transition: background-color .2s ease-in 0s;
  -o-transition: background-color .2s ease-in 0s;
  transition: background-color .2s ease-in 0s;
}
#user_info li {
  float: left;
}#user_info a {
  color: #fff;
  text-decoration: none;
  display: inline;
  padding: 0 18px;
}
#user_info a {
  color: #fff;
  margin-left: 6px;
}
a:link, a:visited {
  color: #36c;
}.header-container #user_info .logout_info li {
  background: #85252C;
}
#user_info .logout_info li:last-child {
  border-radius: 0 17px 17px 0;
}
#user_info .logout_info li {
  background: #dc1432;
  height: 35px;
  line-height: 34px;
  -webkit-transition: background-color .2s ease-in 0s;
  -moz-transition: background-color .2s ease-in 0s;
  -o-transition: background-color .2s ease-in 0s;
  transition: background-color .2s ease-in 0s;
}
.guideTop{width:100%; height:80px;background:#ec5e5d;}
.guideContent{ width:1200px; margin:0 auto;}
.guideContent a img{ width:165px; height:55px;  float:left;   margin-top: 13px;}
.mmeberinfo{ float:right;}
.mmeberinfo li{ color:#fff;  font-size:16px; float:left; margin-left:15px; height:80px; line-height:80px;}
.mmeberinfo li a{ color:#fff;  font-size:16px;  height:80px; line-height:80px;}
 </style>
</head>

<body> 
<div class="guideTop">
	<div class="guideContent">
		<a href="<?php echo $_smarty_tpl->tpl_vars['siteurl']->value;?>
" >
			<img src="<?php echo $_smarty_tpl->tpl_vars['sitelogo']->value;?>
" />
		</a>
		<div class="mmeberinfo">
				<ul>
			 
		 <?php if (!empty($_smarty_tpl->tpl_vars['member']->value['uid'])){?>   
		 
		 <li><a  target="_bank" href="<?php echo FUNC_function(array('type'=>'url','link'=>"/member/base"),$_smarty_tpl);?>
" >你好，<?php echo $_smarty_tpl->tpl_vars['member']->value['username'];?>
</a></li> 
				<li style="width:2px;">|</li>
				<li><a  target="_bank" href="<?php echo FUNC_function(array('type'=>'url','link'=>"/member/loginout"),$_smarty_tpl);?>
" >退出</a></li>
		 
		   <?php }else{ ?>
				<li><a  target="_bank" href="<?php echo FUNC_function(array('type'=>'url','link'=>"/member/login"),$_smarty_tpl);?>
" >登录</a></li> 
				<li style="width:2px;">|</li>
				<li><a target="_bank" href="<?php echo FUNC_function(array('type'=>'url','link'=>"/member/regester"),$_smarty_tpl);?>
" >注册</a></li>
		
		<?php }?> 
			</ul>
		</div>
	</div>
</div>
<div id="header" class="header-container clearfix" style="height:480px;     background: url(<?php echo $_smarty_tpl->tpl_vars['siteurl']->value;?>
/upload/images/landing_bg_1e47940.png) no-repeat;">
  <div class="logo-section"> <img src="<?php echo $_smarty_tpl->tpl_vars['siteurl']->value;?>
/upload/images/guideBg.png"> </div>
  <div class="nav-section" style="    width: 760px;">
    <div class="nav-wrapper">
      <div id="landing-citybar" class="citybar-section">
        <div class="city-dropdown open">
          <div id="all" class="city-locate dropdown-toggle" style="height:55px;">
			<?php echo smarty_function_load_data(array('assign'=>"list",'table'=>"area",'fileds'=>"*",'where'=>"parent_id = 0",'limit'=>1),$_smarty_tpl);?>
   
					 <?php  $_smarty_tpl->tpl_vars['items'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['items']->_loop = false;
 $_smarty_tpl->tpl_vars['myid'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['list']->value['list']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['items']->key => $_smarty_tpl->tpl_vars['items']->value){
$_smarty_tpl->tpl_vars['items']->_loop = true;
 $_smarty_tpl->tpl_vars['myid']->value = $_smarty_tpl->tpl_vars['items']->key;
?> 
					 
		  <a class="current-city" data-name="<?php echo $_smarty_tpl->tpl_vars['items']->value['name'];?>
" data-code="<?php echo $_smarty_tpl->tpl_vars['items']->value['id'];?>
"> <?php echo $_smarty_tpl->tpl_vars['items']->value['name'];?>
</a> <b class="arrow"></b> 
		   <?php } ?> 
		  </div>
            <div  id="twojiguide" class="dropdown-menu" style="display:none;">
            <div class="city-disabled">已开通地区</div>
            <ul class="city-list">
			<?php echo smarty_function_load_data(array('assign'=>"list",'table'=>"area",'fileds'=>"*",'where'=>"parent_id = 0",'limit'=>100),$_smarty_tpl);?>
   
					 <?php  $_smarty_tpl->tpl_vars['items'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['items']->_loop = false;
 $_smarty_tpl->tpl_vars['myid'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['list']->value['list']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['items']->key => $_smarty_tpl->tpl_vars['items']->value){
$_smarty_tpl->tpl_vars['items']->_loop = true;
 $_smarty_tpl->tpl_vars['myid']->value = $_smarty_tpl->tpl_vars['items']->key;
?> 
					 
					 
              <li class="city-item" data-name="<?php echo $_smarty_tpl->tpl_vars['items']->value['name'];?>
" data-code="<?php echo $_smarty_tpl->tpl_vars['items']->value['id'];?>
">
			    <?php if ($_smarty_tpl->tpl_vars['area_grade']->value==1){?><a href="<?php echo FUNC_function(array('type'=>'url','link'=>"/site/setlocationlink/areaid/".((string)$_smarty_tpl->tpl_vars['items']->value['id'])),$_smarty_tpl);?>
"><?php }?>
			  <?php echo $_smarty_tpl->tpl_vars['items']->value['name'];?>

			    <?php if ($_smarty_tpl->tpl_vars['area_grade']->value==1){?></a><?php }?>
			  </li>
			  
			  
			   <?php } ?> 
            
            </ul>
          </div>
        </div>
      </div>
	 <script>
	 
		$(function(){
		
			$("#all").click(function(){
				var shifouyc =document.getElementById("twojiguide").style.display;
		
				if(shifouyc=="none"){
				
				
					$("#twojiguide").show();
					
				}else{
					$("#twojiguide").hide();
				}
				$("#twoqidulist").hide();
				$("#search_result_list").hide();
			});
			$("#all").blur(function(){
			
				$("twojiguide").hide();
			
			});
			$(".city-list li").click(function(){
				
				var cityhtml = $(this).html();
				var cityid    = $(this).attr("data-code");
				var cityname    = $(this).attr("data-name");
				
				$(".current-city").html(cityhtml);
				$(".current-city").attr("data-code",cityid);
				$(".current-city").attr("data-name",cityname);
				$("#twojiguide").hide();
			});
			
			$(".gsearch_input").focus(function(){
					$("#twojiguide").hide();
					var curcityid = $(".current-city").attr("data-code");
					
					
					$("#twoqidulist").show();
					
					var url = '<?php echo FUNC_function(array('type'=>'url','link'=>"/site/twojiguide"),$_smarty_tpl);?>
'; 
					$.post(url, {'position':curcityid},function (data, textStatus){ 
							$('#diquli').html(data); 
						}, 'html');
					
			});
		showcurguidelist();			
			
		function showcurguidelist(){
			var curcityid = $(".current-city").attr("data-code");
					
					
					$("#twoqidulist").show();
					
					var url = '<?php echo FUNC_function(array('type'=>'url','link'=>"/site/twojiguide"),$_smarty_tpl);?>
'; 
					$.post(url, {'position':curcityid},function (data, textStatus){ 
							$('#diquli').html(data); 
						}, 'html');
		}	
			
			
		});
	 
	 </script>
      <div id="landing-search" class="search-section">
        <div class="search-control">
			
          <input type="text2" onkeydown="if(event.keyCode==13)beginSearch()"  class="gsearch_input  search-con placeholder-con" style="width:503px;" placeholder="请输入您的订餐地址（写字楼、小区或学校等）" >
       
          <input type="submit" class="search-btn hc_login_inputs_serch_btn"  style="background:url(<?php echo $_smarty_tpl->tpl_vars['siteurl']->value;?>
/upload/images/search-btn.png) no-repeat;width: 61px;"  value="">
        </div>
	<style>
	#twoqidulist{display:none;width:750px; right: 0px;top: 10px;background:#fff;overflow-y: auto; OVERFLOW-Y: auto;
OVERFLOW-X: hidden; z-index:9999999; position:absolute; margin-top:55px;border-top:1px solid #ccc; border-bottom:1px solid #ccc;}
	#twoqidulist li.tjli {
float: left;
background: #fff;
height: 55px;
padding: 0 20px;
line-height: 55px;
}
	#diquli{max-height:350px;}
	</style>		
		<div id="twoqidulist">
		<ul id="diquli">
		<!-- 	<li>2121</li>
			<li>2121</li> -->
		</ul>
		
		</div>
		
		<div class="dropup" style="position: relative;">

						<ul id="search_result_list" class="dropdown-menu" role="menu" aria-labelledby="dLabel" style= "position:absolute; top:55px; bottom:0px; background:#fff;">

						    

					  	</ul>

					</div>


        <div class="search-show s-item search-sug s-hide "></div>
        <div class="search-show s-item search-history s-hide"> </div>
        <div class="search-show s-item search-result s-hide"> </div>
        <div class="search-show s-item search-empty s-hide">
          <p>此地点附近暂无外卖餐厅，努力覆盖中...</p>
        </div>
      </div>
	  
	  
	  
		
		
		
		
		
    </div>
  </div>
 
 </div>


 
<div style="height:370px;   background:#fff; text-align:center;">
	<img style="padding-top:56px;" src="<?php echo $_smarty_tpl->tpl_vars['siteurl']->value;?>
/upload/images/guide_zhiyin.png" />
</div>

<div class="app-down" id="moui_1439793922133">
            <div class="inner" id="moui_1439793922132">
                <div class="app-phone" id="moui_1439793922160"></div>
                 <div class="app-code">
                  <div style="float:left;">
                   <P> <img style="width:124px; height:124px;" src="<?php echo $_smarty_tpl->tpl_vars['siteurl']->value;?>
/upload/app/m6wx_ewm.png" alt=""></P>
					<p style="width:124px; color:#fff; text-align:center; margin-top:5px;">微信端扫描二维码</p>
				</div>
				 <div  style="float:left; margin-left:20px;">
                   <P> <img style="width:124px; height:124px;" src="<?php echo $_smarty_tpl->tpl_vars['siteurl']->value;?>
/upload/app/m6app_ewm.png" alt=""></P>
					<p style="width:124px; color:#fff; text-align:center; margin-top:5px;">手机客户端下载</p>
				</div>
                </div>
            </div>
        </div>
		


<style>
.app-down {
  width: 100%;
  height: 352px;
  margin-top: 0px;
  background: url(<?php echo $_smarty_tpl->tpl_vars['siteurl']->value;?>
/upload/images/app-bg.png) repeat-x center top;
}
.app-down .inner {
  position: relative;
  width: 1135px;
  height: 100%;
  margin: 0 auto;
  text-align: left;
}
.app-down .inner .app-phone {
  position: absolute;
     left: -34px;
    bottom: -66px;
  width: 197px;
  height: 376px;
  background: url(<?php echo $_smarty_tpl->tpl_vars['siteurl']->value;?>
/upload/images/app-android.png) no-repeat center top;
}
.app-down .inner .app-instro {
  position: absolute;
  left: 235px;
  bottom: 5px;
  width: 523px;
  height: 289px;
  background: url(<?php echo $_smarty_tpl->tpl_vars['siteurl']->value;?>
/templates/<?php echo $_smarty_tpl->tpl_vars['tempdir']->value;?>
/public/images/appinstro.png) no-repeat center top;
}
.app-down .inner .app-code {
  position: absolute;
  right: 0;
  bottom: 18%;
}
app-down .inner .app-code .download {
  float: left;
  margin-right: 16px;
}


.guidefooter{ height:158px; background:url(<?php echo $_smarty_tpl->tpl_vars['siteurl']->value;?>
/templates/<?php echo $_smarty_tpl->tpl_vars['tempdir']->value;?>
/public/images/guidefooterBg.png) repeat; text-align:center;}
.guidefooter p,.guidefooter p a{  color:#fff;  font-size:17px;  }
.guidefooter .footlink{ padding-top:50px;}
.guidefooter .Copyright{ margin-top:36px;}
</style>



<div style="clear:both;"></div>

<div class="guidefooter">

	  <P class="footlink" >
			     <?php if (!empty($_smarty_tpl->tpl_vars['toplink']->value)){?>
	 	     	<?php $_smarty_tpl->tpl_vars['toplink'] = new Smarty_variable(unserialize($_smarty_tpl->tpl_vars['toplink']->value), null, 0);?>
       <?php  $_smarty_tpl->tpl_vars['items'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['items']->_loop = false;
 $_smarty_tpl->tpl_vars['myid'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['toplink']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
 $_smarty_tpl->tpl_vars['items']->total= $_smarty_tpl->_count($_from);
 $_smarty_tpl->tpl_vars['items']->iteration=0;
foreach ($_from as $_smarty_tpl->tpl_vars['items']->key => $_smarty_tpl->tpl_vars['items']->value){
$_smarty_tpl->tpl_vars['items']->_loop = true;
 $_smarty_tpl->tpl_vars['myid']->value = $_smarty_tpl->tpl_vars['items']->key;
 $_smarty_tpl->tpl_vars['items']->iteration++;
 $_smarty_tpl->tpl_vars['items']->last = $_smarty_tpl->tpl_vars['items']->iteration === $_smarty_tpl->tpl_vars['items']->total;
 $_smarty_tpl->tpl_vars['smarty']->value['foreach']['listname']['last'] = $_smarty_tpl->tpl_vars['items']->last;
?> 
			        
					   <a href="<?php echo $_smarty_tpl->tpl_vars['items']->value['typeurl'];?>
" class=""  data="<?php echo $_smarty_tpl->tpl_vars['items']->value['typeurl'];?>
"><span style="line-height:16px;"><?php echo $_smarty_tpl->tpl_vars['items']->value['typename'];?>
</span>
					   <?php if (!$_smarty_tpl->getVariable('smarty')->value['foreach']['listname']['last']){?><span> &nbsp;&nbsp;|&nbsp;&nbsp; </span><?php }?>
					   </a> 
		  <?php } ?>
		  <?php }?>
         	
			  
			  </P>
			  <P class="Copyright">Copyright©2015 <?php echo $_smarty_tpl->tpl_vars['sitename']->value;?>
  | <?php echo $_smarty_tpl->tpl_vars['beian']->value;?>
   <?php echo stripslashes($_smarty_tpl->tpl_vars['footerdata']->value);?>
 </P>
</div>

 
<script>
var $isFirstGuide = 0;
</script>


<script>
var returnFromIndex = 1;
function showText1(){
	$(".hc_index_login_logo_clouds").fadeIn("slow");
}

function showPrmoto1()
{
	$(".hc_index_login_logo_arrow").fadeIn("slow", showText1);
}

function showText2(){
	$(".mingshows_t2").fadeIn("slow");
}


function showPrmoto2()
{
	if ($isFirstGuide != 1)
	{
		return;
	}
	$(".mingshows_a2").fadeIn("slow", showText2);
}


$(document).ready(function(){
	if (document.all)
	{
		$(".hc_index_login_logo_clouds").css("background", "");
		$(".hc_index_login_logo_arrow").css("background", "");

		$(".mingshows_t2").css("background", "");
		$(".mingshows_a2").css("background", "");

	   
		
	}
	 showPrmoto1();
});


function HookFirstCharSel_Landmark()

{

	$(".sel_fa_lm").click(function(){

		var fchar = $(this).html();

		

		$(".lm_fa_active").removeClass("lm_fa_active");

		$(this).addClass("lm_fa_active");



		$("#item_list_ul_lm").html("");



		if (fchar == "全部")
		{
			$("#item_list_ul_lm").html( $("#item_list_ul_lm_data").html());
		}
		else
		{
			var index = 1;
			$("#item_list_ul_lm_data .pos_lmc_li").each(function(){
				if ($(this).attr("fa") == fchar)
				{
					var liv = $(this).closest("li").clone();
					if (index % 4 == 0) {
						liv.css("border-right", "0");

						liv.css("width", "130px");

					}

					else {

						liv.removeAttr("style");

					}

					index += 1;

					$("#item_list_ul_lm").append( liv );

				}

			});

		}

                 HookLanmarkMouseEvent();
	});
}

function HookFirstCharSel() 
{ 
	$(".sel_fa_dsc").click(function(){ 
		var fchar = $(this).html(); 
		$(".dsc_fa_active").removeClass("dsc_fa_active"); 
		$(this).addClass("dsc_fa_active"); 
		$("#item_list_ul_dsc").html(""); 
		if (fchar == "全部") 
		{ 
			$("#item_list_ul_dsc").html( $("#item_list_ul_dsc_data").html()); 
		} 
		else 
		{ 
			var index = 1; 
			$("#item_list_ul_dsc_data .pos_dsc_li").each(function(){ 
				if ($(this).attr("fa") == fchar) 
				{ 
					var liv = $(this).closest("li").clone(); 
					if (index % 4 == 0) { 
						liv.css("border-right", "0"); 
						liv.css("width", "130px"); 
					} 
					else { 
						liv.removeAttr("style"); 
					} 
					index += 1; 
					$("#item_list_ul_dsc").append( liv ); 
				} 
			}); 
		} 
		HookDscMouseEvent(); 
	});

} 
function beginSearch(){
	$(".gsearch_input").trigger("change");
}

$(".hc_index_login").click(function(){ 
	$(".dropup").removeClass("open"); 
});



$(".hc_login_inputs_serch_btn").click(function(){ 
	$("#twoqidulist").hide();
	$("#search_result_list").show();
	$(".gsearch_input").trigger("change"); 
	return false; 
});



$(".gsearch_input").change(function(){ 
	


	var s = $(this).val(); 
	if (s == "")
	{
		return;
	} 
	$(".dropup").addClass("open"); 
	$('#search_result_list').html(""); 
	var li_loading = $("#loading_rt_li").clone(); 
	$('#search_result_list').append(li_loading); 
	var url = '<?php echo FUNC_function(array('type'=>'url','link'=>"/site/searchposition"),$_smarty_tpl);?>
'; 
	$.post(url, {'position':s},function (data, textStatus){ 
			$('#search_result_list').html(data); 
		}, 'html');

});



$("#rt2_city_area").click(function(){
clearDiscId();
	$(".dropup").removeClass("open");  
	$('#popup_box_1').fadeOut(); 
	$('body').attr('class',''); 
	$('.modal-backdrop.fade.in').remove();
	$(".mingshows").css("display", "none"); 
	$(".li_area").removeClass('area_nclc'); 
	$(".li_area").removeClass('area_clc'); 
	$(".li_area").removeAttr('style');

});



$("#rt2_box_dsc").click(function(){ 
	clearDiscId();
	$('#popup_box_2').fadeOut(); 
	$('#popup_box_1').fadeIn(); 
});



$("#rt3_box_dsc").click(function(){

clearDiscId();
	$('#popup_box_3').fadeOut();

	$('body').attr('class','');

	$('.modal-backdrop.fade.in').remove();

	

});







function HookLanmarkMouseEvent()
{
    $(".pos_lmc_li").unbind();
	$(".pos_lmc_li").click(function(){

		var lm_id = $(this).attr('lm_id');

		var lm_name = $(this).html();

		addHisttoryAddress(lm_name,lm_id); 
		window.location.href = $(this).attr("href1"); 

	});

}

function HookDscMouseEvent()
{

	$(".pos_dsc_li").unbind();

	$(".pos_dsc_li").click(function(){
 
     
		$(".build_n1").html($(this).html()); 
		$('#popup_box_1').fadeOut(); 
		$('#popup_box_2').fadeIn();
		showPrmoto2(); 
		
		var url = '<?php echo FUNC_function(array('type'=>'url','link'=>"/site/searchdet"),$_smarty_tpl);?>
'; 
		var did = $(this).attr('dsc_id'); 
		setDicId(did);  
		$('#popup_box_2 .hc_login_pupopsBox_content').html(""); 
		var loadingBox = $(".loading_c").clone(); 
		loadingBox.removeClass("hidden"); 
		$('#popup_box_2 .hc_login_pupopsBox_content').append(loadingBox); 
		$.post(url, {'id':did},function (data, textStatus){  
			document.getElementById('hc_login_pupopsBox_content2').innerHTML=data; 
			HookFirstCharSel_Landmark(); 
				HookLanmarkMouseEvent(); 
			}, 'html');

	});

}



function showPopupBox_Dsc()

{



}



$(".li_area").click(function(){
<?php if ($_smarty_tpl->tpl_vars['area_grade']->value>1){?>
	var aid = $(this).attr('area_id'); 
	$(".area_n1").html($(this).find(".area_name").html()); 
	var pt = $(this).position();
	var mleft = pt.left;
	$(this).addClass("area_clc");
	//$(".li_area").removeClass("area_op");
	$(".li_area").addClass('area_nclc');
	$(this).removeClass("area_nclc");
	$(this).css("left", mleft.toString() + "px");
	$(".area_nclc").fadeOut();
	// animate end

	$(this).animate({left:"237.5px"},'normal' , function(){

	$('#popup_box_1').fadeIn();
	$('body').append('<div class="modal-backdrop fade in"></div>').attr('class','modal-open');
	var url = '<?php echo FUNC_function(array('type'=>'url','link'=>"/site/searchchild"),$_smarty_tpl);?>
'; 
	$('#popup_box_1 .hc_login_pupopsBox_content').html("");

	var loadingBox = $(".loading_c").clone();
	loadingBox.removeClass("hidden");

	$('#popup_box_1 .hc_login_pupopsBox_content').append(loadingBox);
	$.post(url, {'id':aid},function (data, textStatus){
		document.getElementById('hc_login_pupopsBox_content1').innerHTML=data;
		HookFirstCharSel();
		HookDscMouseEvent();

		if (returnFromIndex == 1)
		{
			var lastDscId = getDisId();
			if (lastDscId != -1)
			{
				<?php if ($_smarty_tpl->tpl_vars['area_grade']->value>2){?>
				$('.pos_dsc_li').each(function(){
						if ($(this).attr('dsc_id') == lastDscId)
						{
							$(this).trigger('click');
						}
					});
				<?php }?> 
			}
		}

	}, 'html');
}); 
<?php }?> 

});



$(".cityli").mouseout(function(){

	if (!bClicked)

	{

		$(this).addClass("city_op");

	}

	

});



$(".area_pic_fr").mouseenter(function(){

	$(this).find(".area_img_on").css("top", "0");

});



$(".area_pic_fr").mouseleave(function(){

	$(this).find(".area_img_on").css("top", "111px");

});

function clearDiscId()
{
	$.cookie('his_disc', null);
}

function setDicId(id)
{   
	$.cookie('his_disc', id, {expires:90});
}

function getDisId()
{
	var id = $.cookie('his_disc');  
	if (id != null && id !='null' && id != undefined)
	{
		return id;
	}
	else
	{ 
		return -1;
	}
}

function addHisttoryAddress(name, id){

	var newAddr = name.toString() + ":" + id.toString();

	var addrs = $.cookie('his_addrs');

	if (addrs != null) {

		var ar = addrs.split("|");

		ar.push(newAddr);

	}

	else {

		var ar = new Array();

		ar.push(newAddr);

	}



	var ss = ar.join("|");



	while (ar.length >  16) {

		ar.shift();

	}

	$.cookie('his_addrs', ss, {expires:90});
}



function getHistoryAddress(){

	$("#my_addr_list").html("");

	var arr = new Array();

	var addrs = $.cookie('his_addrs');

	if (addrs != null) {

		var ar = addrs.split("|");

		var index = 1;

		for(var i in ar){

    		var info = ar[i].split(":");

    		var addr_name = info[0];

    		var addr_id = info[1];



    		var a1 = $("<a></a>");

    		a1.html(addr_name);

    		var url = "/index.php?r=pos/set&lm_id="+addr_id.toString();

    		a1.attr("href", url);



    		var li1 = $("<li></li>");

    		li1.append(a1);



    		if (index % 4 == 0) {

					li1.css("border-right", "0");

					li1.css("width", "130px");

			}

			else {

					li1.removeAttr("style");

			}

			index += 1;



    		$("#my_addr_list").append(li1);

		}

	}

	

}



$(".hc_login_inputs_addrs").click(function(){

	$('#popup_box_3').fadeIn();

	$('body').append('<div class="modal-backdrop fade in"></div>').attr('class','modal-open');



	getHistoryAddress();

});



$(".hc_login_inputs_info_addrs_div").click(function(){

	$('#popup_box_3').fadeIn();

	$('body').append('<div class="modal-backdrop fade in"></div>').attr('class','modal-open');;



	getHistoryAddress();

});



$(".hc_login_inputs_login").click(function(){

	window.location.href = '<?php echo FUNC_function(array('type'=>'url','link'=>"/member/login"),$_smarty_tpl);?>
';  

}); 



$(".rt_2_city").click(function(){

	$('#popup_box_2').fadeOut();

	clearDiscId();
	$("#rt2_city_area").trigger("click");

});



$(".rt_2_area").click(function(){

	clearDiscId();
	$("#rt2_box_dsc").trigger("click");

});

</script>







<script type="text/javascript">



$(document).ready(function()

{

	var body_height = $(window).height(); //浏览器当前窗口可视区域高度

	if(body_height<=590){

		$('.hc_index_login_logo').css('margin-top','5px');

		$('.hc_index_login_logo').css('padding-bottom','25px');

	

	}else if(590<body_height&& body_height<= 640){

		$('.hc_index_login_logo').css('margin-top','15px');

		$('.hc_index_login_logo').css('padding-bottom','25px');

	}else if(640 < body_height && body_height <= 720){

		$('.hc_index_login_logo').css('margin-top','40px')

		$('.hc_index_login_logo').css('padding-bottom','45px');

	

	}else if(720 < body_height && body_height <= 840){

		$('.hc_index_login_logo').css('margin-top','80px');

	

	}else if(body_height>840){

		$('.hc_index_login_logo').css('margin-top','160px');

	

	}



})

</script>



<script type="text/javascript">
	$('.hc_city_change_div_yuan').click(function(){ 
		$('.hc_city_change_div_yuan').addClass('hc_city_change_div_yuan_filter');

	},function(){
		$('hc_city_change_div_yuan').removeClass('hc_city_change_div_yuan_filter');
	})
</script>

<script type="text/javascript">
//placeholder IE8
var _placeholderSupport = function() {
    var t = document.createElement("input");
    t.type = "text";
    return (typeof t.placeholder !== "undefined");
}();

window.onload = function() {
    var arrInputs = document.getElementsByTagName("input");
    for (var i = 0; i < arrInputs.length; i++) {
        var curInput = arrInputs[i];
        if (!curInput.type || curInput.type == "" || curInput.type == "text")
            HandlePlaceholder(curInput);
    }
};
 
function HandlePlaceholder(oTextbox) {
    if (!_placeholderSupport) {
        var curPlaceholder = oTextbox.getAttribute("placeholder");
        if (curPlaceholder && curPlaceholder.length > 0) {
            oTextbox.value = curPlaceholder;
            oTextbox.setAttribute("old_color", oTextbox.style.color);
            oTextbox.style.color = "#c0c0c0";
            oTextbox.onfocus = function() {
                this.style.color = this.getAttribute("old_color");
                if (this.value === curPlaceholder)
                    this.value = "";
            };
            oTextbox.onblur = function() {
                if (this.value === "") {
                    this.style.color = "#c0c0c0";
                    this.value = curPlaceholder;
                }
            }
        }
    }
}

$(document).ready(function(){
	if (returnFromIndex == 1)
	{
		var lastDscId = getDisId(); 
		if (lastDscId != -1)
		{
			/****  ***/
			for(var i=0;i<$('.li_area').length;i++)
			{
				if($('.li_area').eq(i).attr('area_id')== "<?php echo $_smarty_tpl->tpl_vars['newaddress']->value['parent_id'];?>
")
				{
					$(".li_area").eq(i).trigger('click');
					break;
				}
			}
			
		}
	}

	$(".hc_city_change_div_yuan").mouseenter(function(){
		 //$(this).tooltip('show');
		});

});
</script>
	
	
	
	
	
	
	
	
	
	
	
	
	
	
</html>
<?php }} ?>