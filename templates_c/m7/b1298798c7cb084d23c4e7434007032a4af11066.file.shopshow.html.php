<?php /* Smarty version Smarty-3.1.10, created on 2016-10-14 15:02:00
         compiled from "D:\WWW\templates\m7\market\shopshow.html" */ ?>
<?php /*%%SmartyHeaderCode:13678580082e83c17a3-77638098%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'b1298798c7cb084d23c4e7434007032a4af11066' => 
    array (
      0 => 'D:\\WWW\\templates\\m7\\market\\shopshow.html',
      1 => 1469566320,
      2 => 'file',
    ),
    'c8b8fbceefe7392d8117262db93261062901e598' => 
    array (
      0 => 'D:\\WWW\\templates\\m7\\public\\site.html',
      1 => 1476192577,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '13678580082e83c17a3-77638098',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'tempdir' => 0,
    'sitename' => 0,
    'keywords' => 0,
    'description' => 0,
    'metadata' => 0,
    'siteurl' => 0,
    'sitebk' => 0,
    'is_static' => 0,
    'controlname' => 0,
    'mapname' => 0,
    'member' => 0,
    'sitelogo' => 0,
    'footlink' => 0,
    'items' => 0,
    'list' => 0,
    'list2' => 0,
    'itv' => 0,
    'litel' => 0,
    'toplink' => 0,
    'beian' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.10',
  'unifunc' => 'content_580082e90b22e5_19452729',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_580082e90b22e5_19452729')) {function content_580082e90b22e5_19452729($_smarty_tpl) {?><?php if (!is_callable('smarty_function_load_data')) include 'D:\\WWW\\lib\\Smarty\\libs\\plugins\\function.load_data.php';
?><!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml"> 
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta http-equiv="X-UA-Compatible" content="IE=edge, chrome=1">
 <title> 零食铺-<?php echo $_smarty_tpl->tpl_vars['sitename']->value;?>
</title>
<meta name="Keywords" content="<?php echo $_smarty_tpl->tpl_vars['keywords']->value;?>
" />
<meta name="description" content="<?php echo $_smarty_tpl->tpl_vars['description']->value;?>
" />
<?php echo stripslashes($_smarty_tpl->tpl_vars['metadata']->value);?>

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
<link href="<?php echo $_smarty_tpl->tpl_vars['siteurl']->value;?>
/templates/<?php echo $_smarty_tpl->tpl_vars['tempdir']->value;?>
/public/css/style.css" rel="stylesheet" type="text/css" />
<link rel="stylesheet" type="text/css" href="<?php echo $_smarty_tpl->tpl_vars['siteurl']->value;?>
/templates/<?php echo $_smarty_tpl->tpl_vars['tempdir']->value;?>
/public/css/common.css">
<link rel="stylesheet" type="text/css" href="<?php echo $_smarty_tpl->tpl_vars['siteurl']->value;?>
/templates/<?php echo $_smarty_tpl->tpl_vars['tempdir']->value;?>
/public/css/newtype.css"> 
<link rel="stylesheet" type="text/css" href="<?php echo $_smarty_tpl->tpl_vars['siteurl']->value;?>
/templates/<?php echo $_smarty_tpl->tpl_vars['tempdir']->value;?>
/public/css/wmr_login.css">
    

<link rel="stylesheet" type="text/css" href="<?php echo $_smarty_tpl->tpl_vars['siteurl']->value;?>
/templates/<?php echo $_smarty_tpl->tpl_vars['tempdir']->value;?>
/public/css/newtop/ntopcommon.css"> 
<link rel="stylesheet" type="text/css" href="<?php echo $_smarty_tpl->tpl_vars['siteurl']->value;?>
/templates/<?php echo $_smarty_tpl->tpl_vars['tempdir']->value;?>
/public/css/newtop/ntopjquery-ui-1.10.4.custom.min.css"> 
<!-- <link rel="stylesheet" type="text/css" href="<?php echo $_smarty_tpl->tpl_vars['siteurl']->value;?>
/templates/<?php echo $_smarty_tpl->tpl_vars['tempdir']->value;?>
/public/css/newtop/ntopstyles.css">  -->

<link rel="stylesheet" type="text/css" href="<?php echo $_smarty_tpl->tpl_vars['siteurl']->value;?>
/templates/<?php echo $_smarty_tpl->tpl_vars['tempdir']->value;?>
/public/css/market.css">  
<link rel="stylesheet" type="text/css" href="<?php echo $_smarty_tpl->tpl_vars['siteurl']->value;?>
/templates/<?php echo $_smarty_tpl->tpl_vars['tempdir']->value;?>
/public/css/newmarket.css">  
  <link rel="stylesheet" href="<?php echo $_smarty_tpl->tpl_vars['siteurl']->value;?>
/templates/<?php echo $_smarty_tpl->tpl_vars['tempdir']->value;?>
/public/css/ladda-themeless.min.css?v=20141030">
  <link rel="stylesheet" href="<?php echo $_smarty_tpl->tpl_vars['siteurl']->value;?>
/templates/<?php echo $_smarty_tpl->tpl_vars['tempdir']->value;?>
/public/css/dorm.css">
<style>
a {
text-decoration: none;
color: #000;
}
</style>


<div class="mmbg" <?php if (!empty($_smarty_tpl->tpl_vars['sitebk']->value)){?>style="background:#f5f5f4;"<?php }?>></div>
 <script src="<?php echo $_smarty_tpl->tpl_vars['siteurl']->value;?>
/templates/<?php echo $_smarty_tpl->tpl_vars['tempdir']->value;?>
/public/js/jquerynew.js" type="text/javascript" language="javascript"></script>
 <script src="<?php echo $_smarty_tpl->tpl_vars['siteurl']->value;?>
/templates/<?php echo $_smarty_tpl->tpl_vars['tempdir']->value;?>
/public/js/allj.js" type="text/javascript" language="javascript"></script>
 <script type="text/javascript" language="javascript" src="<?php echo $_smarty_tpl->tpl_vars['siteurl']->value;?>
/templates/<?php echo $_smarty_tpl->tpl_vars['tempdir']->value;?>
/public/js/artdialog/artDialog.js?skin=blue"></script> 
<script src="<?php echo $_smarty_tpl->tpl_vars['siteurl']->value;?>
/templates/<?php echo $_smarty_tpl->tpl_vars['tempdir']->value;?>
/public/js/template.min.js" type="text/javascript" language="javascript"></script>
 <script src="<?php echo $_smarty_tpl->tpl_vars['siteurl']->value;?>
/templates/<?php echo $_smarty_tpl->tpl_vars['tempdir']->value;?>
/public/js/jquery.lazyload.min.js" type="text/javascript" language="javascript"></script> 
 
  
 <script>
 	$(function() { 
$("img").lazyload({ 
effect : "fadeIn" 
}); 
}); 
</script> 
 
<script type="text/javascript" language="javascript" src="<?php echo $_smarty_tpl->tpl_vars['siteurl']->value;?>
/templates/<?php echo $_smarty_tpl->tpl_vars['tempdir']->value;?>
/public/js/slides.jquery.js"> </script>
 <script src="<?php echo $_smarty_tpl->tpl_vars['siteurl']->value;?>
/templates/<?php echo $_smarty_tpl->tpl_vars['tempdir']->value;?>
/public/js/marketcart.js" type="text/javascript" language="javascript"></script>
<script>
		var shopid = "<?php echo $_smarty_tpl->tpl_vars['shopinfo']->value['id'];?>
"; 
	$(function(){
			$('#bannerBox').slides({
				preload: true,
				preloadImage: '/upload/images/shop/loading.gif',
				play: 5000,
				pause: 2500,
				hoverPause: true,
				generatePagination:false
			});
		}); 
		var findtype = '<?php echo $_smarty_tpl->tpl_vars['findtype']->value;?>
';
		
		if(findtype == 1){
			alert('你选择的区域范围内无小卖铺');
			window.location.href= '<?php echo FUNC_function(array('type'=>'url','link'=>"/site/guide"),$_smarty_tpl);?>
';
		}
		
		
		var locationfalse = false;
</script>
 


 <script> 
	var siteurl = "<?php echo $_smarty_tpl->tpl_vars['siteurl']->value;?>
";
	var is_static ="<?php echo $_smarty_tpl->tpl_vars['is_static']->value;?>
";
	var controllername= '<?php echo $_smarty_tpl->tpl_vars['controlname']->value;?>
';
</script>

<!--[if lte IE 6]>
<script src="<?php echo $_smarty_tpl->tpl_vars['siteurl']->value;?>
/templates/<?php echo $_smarty_tpl->tpl_vars['tempdir']->value;?>
/public/js/DD_belatedPNG_0.0.8a.js" type="text/javascript"></script>
    <script type="text/javascript">
        DD_belatedPNG.fix('div, ul, img, li, input , a'); 
    </script>
<script src="<?php echo $_smarty_tpl->tpl_vars['siteurl']->value;?>
/templates/<?php echo $_smarty_tpl->tpl_vars['tempdir']->value;?>
/public/js/ie6.js" type="text/javascript"></script>


<![endif]--> 
</head> 
<body>

<!--谁去拿外卖 -->

       <div id="modal-shuiqunawaimai" class="modal-who-get-dishes modal hide fade" aria-hidden="true" tabindex="-1">
      <div class="modal-header"> <a href="#" class="close" aria-hidden="true">×</a>
        <h3>谁去拿外卖</h3>
      </div>
      <div class="modal-body">
        <div class="who-get-dishes-wrapper">
          <h2 class="wgd-badge"></h2>
          <a id="trigger" class="wgd-btn"></a> <span class="wgd-rules">随机到最小数字的人去拿外卖</span> <span id="lastResult" class="wgd-bg-text">↓ Start</span>
          <ul id="result" class="wgd-result-list">
          </ul>
        </div>
      </div>
    </div>

<script type="text/javascript">

  var eleme = eleme || {};


</script>

<script type="text/javascript" src="<?php echo $_smarty_tpl->tpl_vars['siteurl']->value;?>
/templates/<?php echo $_smarty_tpl->tpl_vars['tempdir']->value;?>
/public/js/whoqunawaimai.js"></script>
<link rel="stylesheet" type="text/css" href="<?php echo $_smarty_tpl->tpl_vars['siteurl']->value;?>
/templates/<?php echo $_smarty_tpl->tpl_vars['tempdir']->value;?>
/public/css/whonawaimai.css">
<!--谁去拿外卖  end-->







<div class="topCon">
    <div class="topBox">
        <div class="topL">
            <div class="topLbox"><i></i><span>当前位置：</span><b><?php echo (($tmp = @$_smarty_tpl->tpl_vars['mapname']->value)===null||$tmp==='' ? '' : $tmp);?>
</b><a href="<?php echo FUNC_function(array('type'=>'url','link'=>"/site/guide"),$_smarty_tpl);?>
">[切换地址]</a></div>
        </div>
        <div class="topR">
            <div class="topRsignin">
                <ul>
                    <!--<li><span>您好请登录</span></li>-->
                    <?php if (!empty($_smarty_tpl->tpl_vars['member']->value['uid'])){?>
                    <li>
                        <a href="<?php echo FUNC_function(array('type'=>'url','link'=>"/member/base"),$_smarty_tpl);?>
">您好，<?php echo $_smarty_tpl->tpl_vars['member']->value['username'];?>
</a>&nbsp;&nbsp;&nbsp;&nbsp;
                        <a href="<?php echo FUNC_function(array('type'=>'url','link'=>"/member/loginout"),$_smarty_tpl);?>
">退出</a>
                    </li>
                    <?php }else{ ?>
                    <li>
                        <a href="<?php echo FUNC_function(array('type'=>'url','link'=>"/member/login"),$_smarty_tpl);?>
">登录</a>&nbsp;&nbsp;&nbsp;&nbsp;
                       <a href="<?php echo FUNC_function(array('type'=>'url','link'=>"/member/regester"),$_smarty_tpl);?>
">注册</a>
                    </li>
                    <?php }?>
                </ul>
            </div>
            <div class="topRmoed"><a href="javascript:;"><i></i>手机版</a></div>
        </div>
    </div>
</div>
<!---------------------------------------顶部结束--------------------------------------->

<!---------------------------------------头部开始--------------------------------------->
<div class="headCon">
    <div class="headBox">
        <div class="headLogo"><a href="<?php echo $_smarty_tpl->tpl_vars['siteurl']->value;?>
"><img style="margin-top:5px;" src="<?php echo $_smarty_tpl->tpl_vars['sitelogo']->value;?>
"></a></div>
        <div class="headNav" style="background:none;height:0;">
            <ul>
                <?php if (!empty($_smarty_tpl->tpl_vars['footlink']->value)){?>
                <?php $_smarty_tpl->tpl_vars['footlink'] = new Smarty_variable(unserialize($_smarty_tpl->tpl_vars['footlink']->value), null, 0);?>
                <?php  $_smarty_tpl->tpl_vars['items'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['items']->_loop = false;
 $_smarty_tpl->tpl_vars['myid'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['footlink']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['items']->key => $_smarty_tpl->tpl_vars['items']->value){
$_smarty_tpl->tpl_vars['items']->_loop = true;
 $_smarty_tpl->tpl_vars['myid']->value = $_smarty_tpl->tpl_vars['items']->key;
?>
                <li ><a href="<?php echo $_smarty_tpl->tpl_vars['items']->value['typeurl'];?>
"><?php echo $_smarty_tpl->tpl_vars['items']->value['typename'];?>
</a></li>
                <?php } ?>
                <?php }?>
				<!-- class="headNavaA" -->
            </ul>
        </div>
        <div class="headSearch"><input type="text" class="headSeaText" id="search_input" placeholder="输入商家/美食"><input type="button" id="comtopsearch" class="headSeaBut" style="border:0px solid #fff;"></div>
    </div>
</div>
<script type="text/javascript">
    $('#comtopsearch').click(function(){

        search();
    })

    function search()
    {
        var searchname = $('#search_input').val();

        if( searchname != '' )
        {
            var url = siteurl+'/index.php?ctrl=site&action=shoplist&shopsearch='+searchname;
            location.href=url;
        }else{

            alert("搜索条件不能为空！");

        }
    }

</script>


<div style="clear:both;"></div>


<div class="mmbg" <?php if (!empty($_smarty_tpl->tpl_vars['sitebk']->value)){?>style="background:#f5f5f4;"<?php }?>></div>

 
 
 
<style>

.shopheader{ display:none; position:relative;  background:#fba6a6; width:100%;height:130px;}
.spinfo{ position:relative;padding:15px 21px 0px 21px;width:331px ; float:left; height:111px; border:2px #fedddd solid;}
.spinfoLeft{ width:76px; height:76px; background:#ffffff; padding:6px; float:left;}
.spinfoLeft img { width:82px; height:82px; }
.spinfoRight{ position:relative; width:212px; padding-left:17px; float:left;}
.spinfoRight ul li{ height:29px; line-height:29px; color:#ffffff; font-family:微软雅黑; font-size:14px; }
.spinfodrwo ul li{ height:29px; line-height:29px; color:#ffffff; font-family:微软雅黑; font-size:14px; }

.spinfodrwo{ display:none; position:absolute; right:0px; z-index:999999999; top:130px; background:#fba6a6; padding:15px 21px 0px 21px;width:331px;  border:2px #fedddd solid; border-top:none; height:66px;}


.spiRig{float:right;  height:130px; line-height:130px; text-align:center; padding-top:20px;}
.spiRig p{font-family:微软雅黑;height: 25px; line-height:25px;color:#ffffff;}
.spiRig p.sp{font-size: 26px;font-weight: bold; margin-top:25px;}
.spiRig li{float:left; width:90px; height:90px; margin-left:30px; background:url(<?php echo $_smarty_tpl->tpl_vars['siteurl']->value;?>
/templates/<?php echo $_smarty_tpl->tpl_vars['tempdir']->value;?>
/public/images/yuanB.png) center no-repeat;}
</style>

<style>
.m-cf {
width: 1156px;
margin:20px auto 0px;
height: 66px;
padding: 20px 22px;
background-color: #ffffff;
}
.f-radius {
border-radius: 2px;
-moz-border-radius: 2px;
-webkit-border-radius: 2px;
}
.f-shadow-con {
background-color: #ffffff;
box-shadow: 0px 1px 4px 2px rgba(0, 0, 0, 0.1);
-moz-box-shadow: 0px 1px 4px 2px rgba(0, 0, 0, 0.1);
-webkit-box-shadow: 0px 1px 4px 2px rgba(0, 0, 0, 0.1);
filter: progid:DXImageTransform.Microsoft.Shadow(color=#f0f0f0, Direction=2, Strength=2);
}
.m-cf .logo {
float: left;
height: 66px;
width: 66px;
}
.m-cf .title {
float: left;
margin-top: 7px;
margin-left: 15px;
width: 260px;
margin-right: 15px;
}
.m-cf .title h3 {
font-size: 18px;
font-weight: bold;
color: #535353;
margin-bottom: 0px;
cursor: pointer;
width: 260px;
text-overflow: ellipsis;
overflow: hidden;
white-space: nowrap;
height: 25px;
margin-top: 5px;
margin-top: 5px;
}
.m-cf .title h3 #supplierName_span {
display: inline-block;
max-width: 180px;
zoom: 1;
text-overflow: ellipsis;
overflow: hidden;
white-space: nowrap;
float: left;
}
a {
text-decoration: none;
color: #535353;
}
.service_status_0 {
font-size: 14px;
font-family: "Microsoft YaHei",微软雅黑,"Microsoft JhengHei", "黑体";
font-weight: normal;
margin-left: 20px;
height: 31px;
display: inline-block;
color: #ff7c24;
cursor: auto;
}
.f-fl {
float: left;
}
.m-cf .num {
margin-left: 5px;
color: #ffc700;
}
.f-14 {
font-size: 14px;
}
.m-cf .liang {
margin-left: 5px;
color: #666;
}
.f-13 {
font-size: 13px;
}
.m-cf .shoucang {
float: right;
padding-left: 20px;
padding-right: 20px;
margin-top: 5px;
}
.m-cf .shoucang a p {
padding-top: 41px;
}
a.l-shoucang {
background: url(<?php echo $_smarty_tpl->tpl_vars['siteurl']->value;?>
/templates/<?php echo $_smarty_tpl->tpl_vars['tempdir']->value;?>
/public/images/all.png) no-repeat -353px -98px;
width: 40px;
height: 40px;
display: block;
}
a.l-shoucang11{
background: url(<?php echo $_smarty_tpl->tpl_vars['siteurl']->value;?>
/templates/<?php echo $_smarty_tpl->tpl_vars['tempdir']->value;?>
/public/images/all.png) no-repeat -397px -98px;
width: 40px;
height: 40px;
display: block;
}
.m-cf .sudu {
float: right;
border-right: 1px solid #ccc;
padding-right: 20px;
margin-top: 5px;
}
.m-cf .sudu span {
color: #ff6931;
}
.f-36 {
font-size: 36px;
}
.m-cf .sudu span {
color: #ff6931;
}

.m-cf .sudu p {
text-align: center;
padding-top: 5px;
}
.m-cf .sudus {
float: right;
border-right: 1px solid #ccc;
padding-right: 20px;
margin-top: 5px;
margin-right: 20px;
}.m-cf .sudus span {
color: #ff6931;
}
.f-36 {
font-size: 36px;
}
.Star_y {
  background: url(<?php echo $_smarty_tpl->tpl_vars['siteurl']->value;?>
/templates/<?php echo $_smarty_tpl->tpl_vars['tempdir']->value;?>
/public/images/shop/Star_y.gif) repeat-x scroll 0 0 transparent;
  display: inline-block;
  height: 12px;
}
.Star_g {
  background: url(<?php echo $_smarty_tpl->tpl_vars['siteurl']->value;?>
/templates/<?php echo $_smarty_tpl->tpl_vars['tempdir']->value;?>
/public/images/shop/Star_g.gif) repeat-x scroll 0 0 transparent;
  display: inline-block;
  font-size: 1%;
  height: 12px;
  line-height: 12px !important;
  margin: 3px 0 0;
  width: 60px;
}


	   .m-cf .sudus{margin-top:0px;  height: 60px;}
	   .m-cf .sudu{ margin-top:0px; height: 60px;}
	   .f-36{font-size:30px;}
	 
	 
</style>
 
<div class="m-cf f-shadow-con f-radius" id="restaurant-panel">
                <div class="logo" style="float: left;
height: 66px;
width: 66px;
margin: 0px;">
	            
					
						<img src="<?php echo $_smarty_tpl->tpl_vars['imgserver']->value;?>
<?php echo (($tmp = @$_smarty_tpl->tpl_vars['shopinfo']->value['shoplogo'])===null||$tmp==='' ? $_smarty_tpl->tpl_vars['shoplogo']->value : $tmp);?>
" width="66px" height="66px">
					
					
				
                </div>
                <div class="title">
                    <h3 class="f-dian c-24231e">
                     	<a href="javascript:void(0);" id="supplierName_span" title="<?php echo $_smarty_tpl->tpl_vars['shopinfo']->value['shopname'];?>
"><?php echo $_smarty_tpl->tpl_vars['shopinfo']->value['shopname'];?>
</a>
                     	<span class="status service_status_0" id="status_resturant"><?php echo $_smarty_tpl->tpl_vars['shopinfo']->value['opentype'];?>

						<?php if ($_smarty_tpl->tpl_vars['shopopeninfo']->value['opentype']==2){?>正在营业
                    <?php }elseif($_smarty_tpl->tpl_vars['shopopeninfo']->value['opentype']==3){?>休息中,但接受预定
                    <?php }else{ ?>休息中
                    <?php }?>
						
						</span>
                     </h3>
                    <span class="f-fl f-s4">
                      <div class="hc_xinxin_div" style="margin:3px 3px 0 0;"> <span class="Star_g" original-title="<?php echo $_smarty_tpl->tpl_vars['shopinfo']->value['point']*20;?>
" style="margin:0px 0px 0px 0px;"> <span class="Star_y" style="width:<?php echo $_smarty_tpl->tpl_vars['shopinfo']->value['point']*20;?>
%;"></span> </span> </div>
				
                    </span>
                    <span class="f-14 num c-999">  <?php echo $_smarty_tpl->tpl_vars['shopinfo']->value['point'];?>
.0</span>
                    <span class="f-13 liang">  
					
					<?php  $_smarty_tpl->tpl_vars['itvv'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['itvv']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['mainattr']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['itvv']->key => $_smarty_tpl->tpl_vars['itvv']->value){
$_smarty_tpl->tpl_vars['itvv']->_loop = true;
?>
			
						 <?php  $_smarty_tpl->tpl_vars['itv'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['itv']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['shopattr']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['itv']->key => $_smarty_tpl->tpl_vars['itv']->value){
$_smarty_tpl->tpl_vars['itv']->_loop = true;
?>
							
							 <?php if ($_smarty_tpl->tpl_vars['itv']->value['firstattr']==$_smarty_tpl->tpl_vars['itvv']->value['id']){?>
							     <?php if ($_smarty_tpl->tpl_vars['itvv']->value['type']=='checkbox'){?>
									<?php echo $_smarty_tpl->tpl_vars['itv']->value['value'];?>

								 <?php }?>
							 <?php }?>
							
						 <?php } ?>
			  
			       <?php } ?></span>
                </div>
                
                
                <div class="shoucang" onclick="favor()">
                	
                	
                		<a href="javascript:void(0);" <?php if (!empty($_smarty_tpl->tpl_vars['collect']->value)){?> style="display:none;" <?php }?>  onclick="myFavorite2();" id="AddFavShop"  class="favor_0 l-shoucang" id="isFavor">
						
						<p class="f-13" id="favor">未收藏</p>
						
						</a>
						
						
						<a href="javascript:void(0);" <?php if (empty($_smarty_tpl->tpl_vars['collect']->value)){?> style="display:none; " <?php }?> onclick="delFav();"   id="CancelFavShop"  class="favor_0 l-shoucang11" id="isFavor"><p class="f-13" id="favor">已收藏</p></a>
                	
                </div>
                <div class="sudu">
                	<div>
                		<span class="f-36">						
						
						<?php echo $_smarty_tpl->tpl_vars['shopinfo']->value['maketime'];?>

                    </span><span class="f-14">分钟</span>
                    <p class="f-13" style="padding-top:0px;">送餐速度</p></div>
                </div>
                <div class="sudus">
                	<div>
                		<span class="f-36" id="deliveryLeastValue"><?php echo $_smarty_tpl->tpl_vars['shopinfo']->value['limitcost'];?>
</span><span class="f-14">元</span>
                    <p class="f-13">起送价</p></div>
                </div>
				  <div class="sudus">
                	<div>
                		<span class="f-36" id="deliveryLeastValue"><?php echo $_smarty_tpl->tpl_vars['shopinfo']->value['pscost'];?>
</span><span class="f-14">元</span>
                    <p class="f-13">配送费</p></div>
                </div>
				 
            </div>

			
			
			
			
			<div class="container clearfix" style="width:1200px; margin:0 auto;">
  <div class="row">
  
  
  
  <section class="container home-tuan-subcat-box">
	<div class="container home-tuan-subcat">
		<ul class="clearfix">
			<li class="first"></li>
			<li data-spm="0" class="current"><a href="javascript:void(0);" id="allfoodshow">全部</a></li>
			
			<?php  $_smarty_tpl->tpl_vars['items'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['items']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['catlist']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['items']->key => $_smarty_tpl->tpl_vars['items']->value){
$_smarty_tpl->tpl_vars['items']->_loop = true;
?>
			
			<li data-spm="<?php echo $_smarty_tpl->tpl_vars['items']->value['id'];?>
"><a href="javascript:void(0);"   class="hassub"><?php echo $_smarty_tpl->tpl_vars['items']->value['name'];?>
<i class="arr-down"></i></a></li>
			
			 <?php } ?> 
		
		</ul>
		<div class="tuan-search" style="width:256px;">
		<form action="/search/" id="J_tuan_search">
			<input  style="width:236px;" type="text" id="bldsearch" class="input J_input" name="keyword" value="" placeholder="请输入商品名称搜索" autocomplete="off" maxlength="200">
			
		</form>
		<script>
		
		
							//输入即使搜索商品
									$("#bldsearch").keyup(function(){
											
											var  name= $('#bldsearch').val();
											
											//$(".goodlist").hide();
											 
											 name = escape(name);
											// alert(name);
											var templist = $('#itemlist').find('.item-wrap');
											for(var i=0;i<$(templist).length;i++){
											   var checkstr = $(templist).eq(i).attr('goodname');
											 
											   checkstr = escape(checkstr); 
											   if(checkstr.indexOf(name) < 0){
											      $(templist).eq(i).hide();
											   }else{
											   //还需要检测 是否是显示分类的;											   
												/* 	if( $(templist).eq(i).is(":visible") ){
													alert(1);
													$(templist).eq(i).show();
													}
													
													if( $(templist).eq(i).is(":hidden") ){
														alert(0);
														$(templist).eq(i).hide();
													}
													*/
												$(templist).eq(i).show();		
													
											   }
											}
											 
											
											
											
											
											//var url = siteurl+'/index.php?ctrl=wxsite&action=shopshow&id='+shopid+'&shopsearch='+name;
																		
										   // location.href=url;
										   
										
										   
								
									});
		
		</script>
		</div>
		</div>
		
		<div class="container home-tuan-subcat2" id="twocatelist" style="display:none;">
			<ul class="clearfix">
				<li  class="twocateall"><a class="current" href="javascript:void(0);" data-spm="">全部</a></li>
			
				<?php  $_smarty_tpl->tpl_vars['items'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['items']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['catlist']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['items']->key => $_smarty_tpl->tpl_vars['items']->value){
$_smarty_tpl->tpl_vars['items']->_loop = true;
?>
					<?php  $_smarty_tpl->tpl_vars['itv'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['itv']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['items']->value['det']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['itv']->key => $_smarty_tpl->tpl_vars['itv']->value){
$_smarty_tpl->tpl_vars['itv']->_loop = true;
?>
				<li style="display:none;" class="twocategood_<?php echo $_smarty_tpl->tpl_vars['itv']->value['parent_id'];?>
"><a data-spm="<?php echo $_smarty_tpl->tpl_vars['itv']->value['id'];?>
"  href="javascript:void(0); "><?php echo $_smarty_tpl->tpl_vars['itv']->value['name'];?>
(<?php echo $_smarty_tpl->tpl_vars['itv']->value['shuliang'];?>
)</a></li>
					<?php } ?>
				  <?php } ?>
			
			</ul>
		
		</div>
</section>
  
  <script>
	$(".home-tuan-subcat li").click(function(){
		$(this).siblings().removeClass("current").end().addClass ("current");
		var currparentcateid = $(".home-tuan-subcat li.current").attr('data-spm');
		$("#twocatelist li").hide();
		if( currparentcateid == 0 ){
			$("#twocatelist").hide();
			$("#itemlist .item-wrap").show();
			
		}else{
			$(".twocateall").show();
			$("#twocatelist").show();
			$(".twocategood_"+currparentcateid).show();
			
			$("#itemlist .item-wrap").hide();
			$("#itemlist").find( $(".parentid_"+currparentcateid) ).show();
			
		}
	});
	
	$(".home-tuan-subcat2 li a").click(function(){
		$(this).siblings().removeClass("current").end().addClass ("current");
		var currparentcateid = $(".home-tuan-subcat li.current").attr('data-spm');
		var currtwocateid = $(this).attr('data-spm');
		
		if( currtwocateid == 0 ){
			$("#itemlist").find( $(".parentid_"+currparentcateid) ).show();
		}else{
			$("#itemlist .item-wrap").hide();
			$("#itemlist").find( $(".twotypeid_"+currparentcateid+currtwocateid) ).show();
			
		}
		
	});
  </script>

  
  
  

    <div class="itemlist clearfix" id="itemlist" style="margin-bottom:20px;">
  <?php  $_smarty_tpl->tpl_vars['items'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['items']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['catlist']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['items']->key => $_smarty_tpl->tpl_vars['items']->value){
$_smarty_tpl->tpl_vars['items']->_loop = true;
?>
  

  
  	<?php if (!empty($_smarty_tpl->tpl_vars['items']->value['ids'])){?> 
	<?php echo smarty_function_load_data(array('assign'=>"listdet",'table'=>"goods",'where'=>"shopid = '".((string)$_smarty_tpl->tpl_vars['shopinfo']->value['id'])."' and typeid in(".((string)$_smarty_tpl->tpl_vars['items']->value['ids']).") ",'orderby'=>"good_order desc",'limit'=>"1000"),$_smarty_tpl);?>
 
        	 <?php  $_smarty_tpl->tpl_vars['itk'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['itk']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['listdet']->value['list']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['itk']->key => $_smarty_tpl->tpl_vars['itk']->value){
$_smarty_tpl->tpl_vars['itk']->_loop = true;
?>
			   
        <?php $_smarty_tpl->tpl_vars['myweeks'] = new Smarty_variable(explode(",",$_smarty_tpl->tpl_vars['itk']->value['weeks']), null, 0);?> 
						  <?php if ($_smarty_tpl->tpl_vars['itk']->value['is_waisong']==1&&in_array($_smarty_tpl->tpl_vars['weekji']->value,$_smarty_tpl->tpl_vars['myweeks']->value)){?>
  
			 <?php echo smarty_function_load_data(array('assign'=>"twocatinfo",'table'=>"marketcate",'type'=>"one",'where'=>"id = '".((string)$_smarty_tpl->tpl_vars['itk']->value['id'])."'  "),$_smarty_tpl);?>
 
			 
			 
			 
			 
  <div class="item-wrap parentid_<?php echo $_smarty_tpl->tpl_vars['items']->value['id'];?>
 goodsli twotypeid_<?php echo $_smarty_tpl->tpl_vars['items']->value['id'];?>
<?php echo $_smarty_tpl->tpl_vars['itk']->value['typeid'];?>
" goodname="<?php echo $_smarty_tpl->tpl_vars['itk']->value['name'];?>
" parentid="<?php echo $_smarty_tpl->tpl_vars['items']->value['id'];?>
" twotypeid="<?php echo $_smarty_tpl->tpl_vars['itk']->value['typeid'];?>
" goodsid="item_<?php echo $_smarty_tpl->tpl_vars['itk']->value['id'];?>
" >
    <div class="item" data-rid="415">
      <div class="mark" id="mark-415" style="display: none;"></div>
      
        <div class="img">
      
        <img id="lazy-item-img-0" class="lazy"  src="<?php echo $_smarty_tpl->tpl_vars['imgserver']->value;?>
<?php echo (($tmp = @$_smarty_tpl->tpl_vars['itk']->value['img'])===null||$tmp==='' ? $_smarty_tpl->tpl_vars['shoplogo']->value : $tmp);?>
"  data-original="<?php echo $_smarty_tpl->tpl_vars['imgserver']->value;?>
<?php echo (($tmp = @$_smarty_tpl->tpl_vars['itk']->value['img'])===null||$tmp==='' ? $_smarty_tpl->tpl_vars['shoplogo']->value : $tmp);?>
" style="display: inline;"></div>
      <div class="info">
        <div class="name" title="<?php echo $_smarty_tpl->tpl_vars['itk']->value['name'];?>
"><?php echo $_smarty_tpl->tpl_vars['itk']->value['name'];?>
</div>
        <div class="price">￥<?php echo $_smarty_tpl->tpl_vars['itk']->value['cost'];?>
</div>
      </div>
      <div class="buy" style="display: block;">

					<?php if ($_smarty_tpl->tpl_vars['shopopeninfo']->value['opentype']==2){?>
          <?php if ($_smarty_tpl->tpl_vars['itk']->value['is_live']==1){?>
						<?php if ($_smarty_tpl->tpl_vars['itk']->value['count']>0){?>
							 <div  onclick="<?php if ($_smarty_tpl->tpl_vars['itk']->value['have_det']==1){?>addproduct(<?php echo $_smarty_tpl->tpl_vars['itk']->value['id'];?>
,<?php echo $_smarty_tpl->tpl_vars['itk']->value['shopid'];?>
,1,this);<?php }else{ ?>addonedish('<?php echo $_smarty_tpl->tpl_vars['itk']->value['id'];?>
','<?php echo $_smarty_tpl->tpl_vars['itk']->value['shopid'];?>
',1,this);<?php }?>"   style="background: #ff6b90;  cursor:pointer; color: #fff;" class="break">购买</div>
						<?php }else{ ?>
							<div    style="background: #ccc;  cursor:pointer; color: #fff;" class="break">售尽</div>
						<?php }?>
          <?php }else{ ?>
          <div    style="background: #ccc;  cursor:pointer; color: #fff;" class="break">已下架</div>
          <?php }?>
                    <?php }elseif($_smarty_tpl->tpl_vars['shopopeninfo']->value['opentype']==3){?>
					
					 <div   onclick="addonedish('<?php echo $_smarty_tpl->tpl_vars['itk']->value['id'];?>
','<?php echo $_smarty_tpl->tpl_vars['itk']->value['shopid'];?>
',1,this);"   style="background: green; cursor:pointer; color: #fff;"  class="break">休息中<?php echo $_smarty_tpl->tpl_vars['shopopeninfo']->value['opentype'];?>
</div>
					
                    <?php }else{ ?>
					
					 <div class="break">休息中</div>
					
                    <?php }?>
       
      
      </div>
    </div>
  </div>
  
       
  <?php }?>
  
   <?php } ?> 
   <?php }?>
   

  <?php } ?>

  
</div>

    <div class="sidecart" id="sidecart" style="left: 1270.5px;">
      <div class="cart-title">购物车</div>
	  
	   <div class="cartItemList" id="cartinfodet" style="display:;">
         
        </div>
	  
      
      <div id="cart-container">
        <div class="list-wrap">
          <div id="cart-items" style="display: none;">
  </div>
        </div>
        <div class="sumup" id="sumup" style="display: none;">
          <span class="sum-quantity">
            <span class="food_num n">0</span>
            件商品
          </span>
          <span class="sum-amount">
            合计
            <span class="food_amount n">0</span>
            元
          </span>
        </div>

        <div class="order-info" id="order-info" style="display: none;">
          <form>
            <div class="tup">
              <input type="text" name="phone" id="phone-ipt" placeholder="手机号" value="">
            </div>
            <div class="tup">
              <input type="text" name="dormitory" id="dormitory-ipt" placeholder="寝室号" value="">
            </div>
            <div class="tup">
              <input type="text" name="coupon" id="coupon-ipt" placeholder="优惠券(选填)">
            </div>
            <div class="tup">
              <input type="text" name="remark" id="remark-ipt" placeholder="备注(选填)">
            </div>
            <div class="paytype">
              <i>付款方式：</i>
              <label><input name="paytype" type="radio" value="0" checked="">货到付款</label>
              <label><input name="paytype" type="radio" value="1">支付宝</label>
            </div>

           <!-- <div class='tup verify-image' id="verify-image">
              <input type='text' name='verify-image-input' class="verify-image-input pull-left" placeholder='验证码' />
              <img class="verify-image-img" src="" alt="验证码"/>
            </div>
            <div class='tup verify-sms' id="verify-sms">
              <input type='text' name='verify-sms-input' class="verify-sms-input pull-left" placeholder='请输入短信验证码'/>
              <input type="button" class="verify-sms-btn"/>
            </div>-->

            <div class="tup error" id="send-time"></div>
            <div class="tup error" id="order-error-info"></div>

          </form>
        </div>
      </div>

     


    </div>
  </div>
  <!-- end row -->
</div>
			
			
			
			
<script>
		var memberid = <?php echo $_smarty_tpl->tpl_vars['member']->value['uid'];?>
;
var allowedguestbuy = <?php echo (($tmp = @$_smarty_tpl->tpl_vars['allowedguestbuy']->value)===null||$tmp==='' ? 0 : $tmp);?>
;     
//添加店铺收藏
function myFavorite2()
{ 
  var url = siteurl+'/index.php?ctrl=shop&action=addcollect&datatype=json&collectid='+shopid+'&type=0'; 
  var backinfo = ajaxback(url,{});
  if(backinfo.flag == false){ 
     		$('#AddFavShop').hide(); 
     		$('#CancelFavShop').show();
   }else{ 
   	diaerror(backinfo.content); 
  }  
}  
//删除店铺收藏
function delFav()
{ 
	var url = siteurl+'/index.php?ctrl=shop&action=delcollect&datatype=json&collectid='+shopid+'&type=0'; 
  var backinfo = ajaxback(url,{});
  if(backinfo.flag == false){ 
      $('#AddFavShop').show(); 
      $('#CancelFavShop').hide();
   }else{ 
   	 diaerror(backinfo.content); 
  }  
}
	
	
</script>			
			
			
			
			
		
   <div id="product_one" class="cart_products_list" style="width:260px;display:none;"> 
    <div class="cart_products_title" onclick="closeproductdiv();">
	     <span  >X</span>
	</div> 
	 <div   class="productloding">
	      数据加载中....
	</div>
	<div    class="cart_products_content_area">
	 
	
	      
	</div> 
</div>



  <div style="clear:both;"></div>
  <script>
  $('.box').hover(function(){
  	 $(this).css('background-color','rgb(241, 241, 241)');
  });
  $('.box').mouseleave(function(){
  	 $(this).css('background-color','');
  });
  	</script>

 
<style>

.footer01 .dianhua{  width:250px; height:83px; float:left; font-family:微软雅黑;}
.footer01 .dianhua ul{}
.footer01 .dianhua li{ float:left; display:inline; width:154px; padding-left:80px; color:#FFFFFF}
.footer01 .dianhua li b{ color:#6CCB3B}
.footer01 .dianhua li b#font24{ font-size:20px; color:#ffffff;}
.footer01 .dianhua li.li1{ background:url(<?php echo $_smarty_tpl->tpl_vars['siteurl']->value;?>
/templates/<?php echo $_smarty_tpl->tpl_vars['tempdir']->value;?>
/public/img/index_r62_c6.png) left center no-repeat; height:74px; width:170px}
.footer01 .dianhua li.li2{ background: url(<?php echo $_smarty_tpl->tpl_vars['siteurl']->value;?>
/templates/<?php echo $_smarty_tpl->tpl_vars['tempdir']->value;?>
/public/img/iconfont-mark.png) left center no-repeat; height:74px;background-size: 50px 50px;}
.footer01 .dianhua li b#font24 a {
color: #fff;
}
</style>



<div class="footer01" style="height:245px;">
<div style="background:#f38383; height:20px;"></div>
		  <div style="background:#f38383; width:100%; margin:0 auto;height:170px;">
				  <div class="box02">

					
					   <div style="float:left; width:490px">
					   
						 <?php echo smarty_function_load_data(array('assign'=>"list",'table'=>"newstype",'where'=>"displaytype=1 and parent_id=0",'fileds'=>"*",'limit'=>3,'orderby'=>"orderid asc"),$_smarty_tpl);?>
 
								 <?php  $_smarty_tpl->tpl_vars['items'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['items']->_loop = false;
 $_smarty_tpl->tpl_vars['mykey'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['list']->value['list']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['items']->key => $_smarty_tpl->tpl_vars['items']->value){
$_smarty_tpl->tpl_vars['items']->_loop = true;
 $_smarty_tpl->tpl_vars['mykey']->value = $_smarty_tpl->tpl_vars['items']->key;
?>   
					   
						<dl>
						   <dt ><?php echo $_smarty_tpl->tpl_vars['items']->value['name'];?>
</dt>
								<?php if ($_smarty_tpl->tpl_vars['items']->value['type']==2){?>
									  <?php echo smarty_function_load_data(array('assign'=>"list2",'table'=>"newstype",'fileds'=>"*",'where'=>"parent_id=".((string)$_smarty_tpl->tpl_vars['items']->value['id']),'limit'=>4),$_smarty_tpl);?>
 
									   <?php  $_smarty_tpl->tpl_vars['itv'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['itv']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['list2']->value['list']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['itv']->key => $_smarty_tpl->tpl_vars['itv']->value){
$_smarty_tpl->tpl_vars['itv']->_loop = true;
?>  
						   
						   <dd><a href="<?php echo FUNC_function(array('type'=>'url','link'=>"/site/newstype/id/".((string)$_smarty_tpl->tpl_vars['itv']->value['id'])),$_smarty_tpl);?>
" ><?php echo $_smarty_tpl->tpl_vars['itv']->value['name'];?>
</a></dd>
						   
							<?php } ?> 
							
							
							
									  
									  
								  <?php }else{ ?>
									  <?php echo smarty_function_load_data(array('assign'=>"list2",'table'=>"news",'fileds'=>"id,title,typeid",'where'=>"typeid=".((string)$_smarty_tpl->tpl_vars['items']->value['id']),'limit'=>4),$_smarty_tpl);?>
 
									  <?php  $_smarty_tpl->tpl_vars['itv'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['itv']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['list2']->value['list']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['itv']->key => $_smarty_tpl->tpl_vars['itv']->value){
$_smarty_tpl->tpl_vars['itv']->_loop = true;
?>    
									   <dd><a href="<?php echo FUNC_function(array('type'=>'url','link'=>"/site/news/id/".((string)$_smarty_tpl->tpl_vars['itv']->value['id'])),$_smarty_tpl);?>
" ><?php echo $_smarty_tpl->tpl_vars['itv']->value['title'];?>
</a></dd>
									  
										<?php } ?> 
								 <?php }?>
						  
						</dl>
						 <?php } ?>   
						</div>
						
						
						   <div class="dianhua" style="width:320px;">
						 <ul>
						   <li class="li1" style="background:none; margin-left:20px; width:135px; padding-left:0px;">
						   
						   <img style="width:135px; height:153px;" src="<?php echo $_smarty_tpl->tpl_vars['siteurl']->value;?>
/templates/<?php echo $_smarty_tpl->tpl_vars['tempdir']->value;?>
/public/img/wmr_ewm.png" />
						  
											 </li>
						   <li class="li2" style="background:none; margin-left:20px;  width:135px;padding-left:0px;">
						   
						      <img style="width:135px; height:153px;" src="<?php echo $_smarty_tpl->tpl_vars['siteurl']->value;?>
/templates/<?php echo $_smarty_tpl->tpl_vars['tempdir']->value;?>
/public/img/wmr_android.png" />
						  
						   </li>
						 </ul>
					   </div>
						
						
						   <div class="dianhua" style="float:right;">
						 <ul>
						   <li class="li1"><strong>客服电话</strong><br /><b id="font24"><?php echo $_smarty_tpl->tpl_vars['litel']->value;?>
</b><br />周一至周日&nbsp;09:30-21:30
						   
						  
											 </li>
						   <li class="li2"><strong>欢迎留言 </strong><br /><b id="font24"><a href="<?php echo FUNC_function(array('type'=>'url','link'=>"/ask/index"),$_smarty_tpl);?>
" >反馈留言</a></b><br />您的意见对我们至关重要</li>
						 </ul>
					   </div>
						
						
				</div> 
		</div>
				 <div class="footer02" style="height:50px; margin-top:-2px;">
			  <p>
			  
			  <P class="" >
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
			  <P class="">Copyright©2009-2014 <?php echo $_smarty_tpl->tpl_vars['sitename']->value;?>
  | <?php echo $_smarty_tpl->tpl_vars['beian']->value;?>
    </P>
			   
			  </div> 

 
</div>



</body>
</html><?php }} ?>