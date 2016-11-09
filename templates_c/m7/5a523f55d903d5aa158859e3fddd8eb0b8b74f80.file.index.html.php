<?php /* Smarty version Smarty-3.1.10, created on 2016-11-09 11:57:52
         compiled from "/Applications/MAMP/htdocs/templates/m7/shop/index.html" */ ?>
<?php /*%%SmartyHeaderCode:95694114958229ec087eef0-58915470%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '5a523f55d903d5aa158859e3fddd8eb0b8b74f80' => 
    array (
      0 => '/Applications/MAMP/htdocs/templates/m7/shop/index.html',
      1 => 1469566320,
      2 => 'file',
    ),
    'dd2e1f6b63be66b670e281111672c6996355a7e4' => 
    array (
      0 => '/Applications/MAMP/htdocs/templates/m7/public/site.html',
      1 => 1476192576,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '95694114958229ec087eef0-58915470',
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
  'unifunc' => 'content_58229ec0b8ec92_15204302',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_58229ec0b8ec92_15204302')) {function content_58229ec0b8ec92_15204302($_smarty_tpl) {?><?php if (!is_callable('smarty_modifier_date_format')) include '/Applications/MAMP/htdocs/lib/Smarty/libs/plugins/modifier.date_format.php';
if (!is_callable('smarty_function_load_data')) include '/Applications/MAMP/htdocs/lib/Smarty/libs/plugins/function.load_data.php';
?><!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml"> 
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta http-equiv="X-UA-Compatible" content="IE=edge, chrome=1">
 <title> <?php echo $_smarty_tpl->tpl_vars['shopinfo']->value['shopname'];?>
-<?php echo $_smarty_tpl->tpl_vars['sitename']->value;?>
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
/public/css/shop.css">
<link rel="stylesheet" type="text/css" href="<?php echo $_smarty_tpl->tpl_vars['siteurl']->value;?>
/templates/<?php echo $_smarty_tpl->tpl_vars['tempdir']->value;?>
/public/css/outdiv.css">
<link href="<?php echo $_smarty_tpl->tpl_vars['siteurl']->value;?>
/templates/<?php echo $_smarty_tpl->tpl_vars['tempdir']->value;?>
/public/mnew7/css/wmr_shop.css" rel="stylesheet" type="text/css" />
<link rel="stylesheet" type="text/css" href="<?php echo $_smarty_tpl->tpl_vars['siteurl']->value;?>
/templates/<?php echo $_smarty_tpl->tpl_vars['tempdir']->value;?>
/public/mnew7/css/base.css" />


<div class="mmbg" <?php if (!empty($_smarty_tpl->tpl_vars['sitebk']->value)){?>style="background:url(<?php echo $_smarty_tpl->tpl_vars['sitebk']->value;?>
) repeat;"<?php }?>></div> 
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
  
<script src="<?php echo $_smarty_tpl->tpl_vars['siteurl']->value;?>
/templates/<?php echo $_smarty_tpl->tpl_vars['tempdir']->value;?>
/public/js/bootstrap.min.js" type="text/javascript" language="javascript"></script>
<script src="<?php echo $_smarty_tpl->tpl_vars['siteurl']->value;?>
/templates/<?php echo $_smarty_tpl->tpl_vars['tempdir']->value;?>
/public/js/hanwoshop.js" type="text/javascript" language="javascript"></script>
<script src="<?php echo $_smarty_tpl->tpl_vars['siteurl']->value;?>
/templates/<?php echo $_smarty_tpl->tpl_vars['tempdir']->value;?>
/public/js/cart.js" type="text/javascript" language="javascript"></script>
<script src="<?php echo $_smarty_tpl->tpl_vars['siteurl']->value;?>
/templates/<?php echo $_smarty_tpl->tpl_vars['tempdir']->value;?>
/public/js/outdiv.js" type="text/javascript" language="javascript"></script>


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


 

  
<div class="aswm-shop-box">
	<div class="aswm-sho-main">
	<div class="aswm-shop-logo"><img src="<?php echo (($tmp = @$_smarty_tpl->tpl_vars['shopinfo']->value['shoplogo'])===null||$tmp==='' ? $_smarty_tpl->tpl_vars['shoplogo']->value : $tmp);?>
" /></div>
    <div class="aswm-shop-name">
	<p class="newshopname"><?php echo $_smarty_tpl->tpl_vars['shopinfo']->value['shopname'];?>
<span class="newzongxiaol">总销量：<span style="color:#ff2d55;"><?php echo $_smarty_tpl->tpl_vars['sellcount']->value;?>
</span></span></p>
	<h2> <span style="color:#a6a6a6 ; font-size:14px;">营业时间：</span><span style="color:#a6a6a6; font-size:14px;"><?php echo $_smarty_tpl->tpl_vars['shopinfo']->value['starttime'];?>
</span>
		<span class="status service_status_0" id="status_resturant" style="color:#fff; background:#44c45a; padding:0px 8px; height:24px; line-height:24px; text-align:center;">

						<?php if ($_smarty_tpl->tpl_vars['shopopeninfo']->value['opentype']==2){?>营业中
                    <?php }elseif($_smarty_tpl->tpl_vars['shopopeninfo']->value['opentype']==3){?>休息中,但接受预定
                    <?php }else{ ?>休息中
                    <?php }?>
						
						</span>
						
                     
	</h2>
		<h2 style="margin-top:4px;"> <span style="color:#a6a6a6 ; font-size:14px;">商家地址：</span><span style="color:#a6a6a6; font-size:14px;"><?php echo (($tmp = @$_smarty_tpl->tpl_vars['shopinfo']->value['address'])===null||$tmp==='' ? '暂无地址' : $tmp);?>
</span>
		             
	</h2>
		<p style="margin-top:4px;">	
		 <span class="f-fl f-s4">
                      <div class="hc_xinxin_div" style="margin:3px 3px 0 0;"> <span class="Star_g" original-title="<?php echo $_smarty_tpl->tpl_vars['shopinfo']->value['point']*20;?>
" style="margin:0px 0px 0px 0px;"> <span class="Star_y" style="width:<?php echo $_smarty_tpl->tpl_vars['shopinfo']->value['point']*20;?>
%;"></span> </span> </div>
				
                    </span>
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
			  
			       <?php } ?></p>
	</div>
	<style>
	.shoucang a p {
    padding-top: 36px;
}
	</style>
  <div class="aswm-shop-name aswm-shop-gzbox">
	<!-- <b><?php echo $_smarty_tpl->tpl_vars['shopinfo']->value['limitcost'];?>
</b>
	<span>起送价（元）</span> -->
	    
                <div class="shoucang" onclick="favor()">
                	
                	
                		<a href="javascript:void(0);" <?php if (!empty($_smarty_tpl->tpl_vars['collect']->value)){?> style="display:none;" <?php }?>  onclick="myFavorite2();" id="AddFavShop"  class="favor_0 l-shoucang" id="isFavor">
						
						<p class="f-13" id="favor">未收藏</p>
						
						</a>
						
						
						<a href="javascript:void(0);" <?php if (empty($_smarty_tpl->tpl_vars['collect']->value)){?> style="display:none; " <?php }?> onclick="delFav();"   id="CancelFavShop"  class="favor_0 l-shoucang11" id="isFavor"><p class="f-13" id="favor">已收藏</p></a>
                	
                </div>
</div>
    <div class="aswm-shop-name aswm-shop-gzbox"><b><?php echo $_smarty_tpl->tpl_vars['shopinfo']->value['pscost'];?>
 </b><span><?php if ($_smarty_tpl->tpl_vars['shopinfo']->value['pscost']==''){?>免运费<?php }else{ ?>运费（元）<?php }?></span></div>
    <div class="aswm-shop-name aswm-shop-gzbox"><b><?php echo $_smarty_tpl->tpl_vars['shopinfo']->value['limitcost'];?>
</b><span>起送价（元）</span></div>
    <div class="aswm-shop-name aswm-shop-gzbox"><b><?php echo $_smarty_tpl->tpl_vars['shopinfo']->value['maketime'];?>
</b><span>送餐速度(分钟)</span></div>
	<div class="aswm-shop-name aswm-shop-gzbox  aswm-shop-tsg"><b id="juli">0</b><span>距离</span></div>
	
	</div>
</div>


<script>

	$(".spinfo").mouseover(function(){
	
		$(".spinfodrwo").show();
		$(".spinfo").css("border-bottom","none");
		
	});
		$(".spinfo").mouseout(function(){
	
		$(".spinfodrwo").hide();
			$(".spinfo").css("border-bottom","2px #fedddd solid");
		
	});
	$(function(){
		$("#showgoodsmenu").click(function(){		 
			$('.aswm-show-class-box').show();
			$('.aswm-product-box').show();
			$('#pingjialist').hide();
			$(".aswm-show-class").css('border-bottom-width','2px');
			$("#showshoppj").css('border-bottom','none');
			$("#showgoodsmenu").css('border-bottom','2px solid #F00');
		});
		$("#showshoppj").click(function(){		 
			$('.aswm-show-class-box').hide();
			$('.aswm-product-box').hide();
			$('#pingjialist').show();
			$(".aswm-show-class").css('border-bottom-width','0'); 
			$("#showgoodsmenu").css('border-bottom','none');
			$("#showshoppj").css('border-bottom','2px solid #F00');
		});
		$(".openurlshowdet").click(function(){
			var goodid = $(this).attr('dataid');
			var url =  '<?php echo FUNC_function(array('type'=>'url','link'=>"/shop/showgoods/id/'+goodid+'"),$_smarty_tpl);?>
';
 			location.href = url;
		});
		
		function getPingjia(pagenum)
		{  
			 var url = siteurl+"/index.php?ctrl=order&action=commentshop&random=@random@"; 
			 url = url.replace('@random@', 1+Math.round(Math.random()*1000));
			   $.post(url, {'shopid':shopid,'type':'shop','page':pagenum},function (data, textStatus){  
						$('#pingjialist').html(data);  
			  }, 'html');  
		}
		
	});
	
</script>

<div class="aswm-show-body">

	<div class="aswm-show-list">

    	<div class="aswm-show-class">

        	<h2 style="color:#3d3d3d;cursor:pointer;  ">
				<span id="showgoodsmenu" style=" padding:0px 15px; border-bottom: 2px solid #F00;    padding-bottom: 10px;margin-right:60px;">美食分类</span>
				<span id="showshoppj"  style=" padding:0px 15px;     padding-bottom: 10px;margin-right:60px;">&nbsp;&nbsp;评价&nbsp;&nbsp;</span>
			</h2>

            <div class="aswm-show-class-box">

            	<ul>
				   <?php  $_smarty_tpl->tpl_vars['items'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['items']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['goodstype']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['items']->key => $_smarty_tpl->tpl_vars['items']->value){
$_smarty_tpl->tpl_vars['items']->_loop = true;
?>  
				   	<li><a data-href="<?php echo $_smarty_tpl->tpl_vars['items']->value['id'];?>
"><?php echo $_smarty_tpl->tpl_vars['items']->value['name'];?>
</a></li>
			                            <?php } ?> 
				 </ul>

                <div class="cer"></div>

            </div>

        </div>

         <div class="aswm-shop-product">

            	<!------>

              <?php  $_smarty_tpl->tpl_vars['items'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['items']->_loop = false;
 $_smarty_tpl->tpl_vars['cid'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['goodstype']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['items']->key => $_smarty_tpl->tpl_vars['items']->value){
$_smarty_tpl->tpl_vars['items']->_loop = true;
 $_smarty_tpl->tpl_vars['cid']->value = $_smarty_tpl->tpl_vars['items']->key;
?>    

                <div class="aswm-product-box"><a id="s<?php echo $_smarty_tpl->tpl_vars['items']->value['id'];?>
"></a>

                	<div class="aswm-product-tt" id="astt">

                    	<h2><?php echo $_smarty_tpl->tpl_vars['items']->value['name'];?>
</h2>

                        <div class="aswmpro"><span class="slt onbtn" data-name="li">缩略图</span><span class="lb" data-name="lis">列表</span></div>

                    </div>
			
                   

                    <div class="aswm-product-li_on aswm-product-li">
	<?php  $_smarty_tpl->tpl_vars['itv'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['itv']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['items']->value['det']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['itv']->key => $_smarty_tpl->tpl_vars['itv']->value){
$_smarty_tpl->tpl_vars['itv']->_loop = true;
?>
                     
                    	<div class="aswm-plis goodone_<?php echo $_smarty_tpl->tpl_vars['itv']->value['id'];?>
" >
						
 						
                        	<div class="aswm-plimg" ><a  href="<?php echo FUNC_function(array('type'=>'url','link'=>"/shop/showgoods/id/".((string)$_smarty_tpl->tpl_vars['itv']->value['id'])),$_smarty_tpl);?>
"  title="<?php echo $_smarty_tpl->tpl_vars['itv']->value['name'];?>
"><img src="<?php echo (($tmp = @$_smarty_tpl->tpl_vars['itv']->value['img'])===null||$tmp==='' ? $_smarty_tpl->tpl_vars['shoplogo']->value : $tmp);?>
" alt="<?php echo $_smarty_tpl->tpl_vars['itv']->value['name'];?>
"></a></div>
                         	<div class="aswm-pltxt">

                            <div    class="aswm-plt">
								<a href="<?php echo FUNC_function(array('type'=>'url','link'=>"/shop/showgoods/id/".((string)$_smarty_tpl->tpl_vars['itv']->value['id'])),$_smarty_tpl);?>
" ><?php echo $_smarty_tpl->tpl_vars['itv']->value['name'];?>
</a>
							</div>

                                <div class="aswm-plbtn">
								<div class="onbuy">已售<?php echo $_smarty_tpl->tpl_vars['itv']->value['sellcount'];?>
件</div>
									<div class="aswm-probtn">
										 

	<a style="border:none;color:#ff2d55;font-weight:normal;width:auto;position:absolute; right:58px; bottom:14px;" href="<?php echo FUNC_function(array('type'=>'url','link'=>"/shop/showgoods/id/".((string)$_smarty_tpl->tpl_vars['itv']->value['id'])),$_smarty_tpl);?>
" class="btnCart" >
	￥<i style="font-size:20px;"><?php echo $_smarty_tpl->tpl_vars['itv']->value['cost'];?>
</i><?php if (!empty($_smarty_tpl->tpl_vars['itv']->value['goodattr'])){?>/<?php echo $_smarty_tpl->tpl_vars['itv']->value['goodattr'];?>
<?php }else{ ?>/<?php echo $_smarty_tpl->tpl_vars['shopinfo']->value['goodattrdefault'];?>
<?php }?>
	 </a>
	 
	  	
	 
<?php if ($_smarty_tpl->tpl_vars['shopopeninfo']->value['opentype']==2||$_smarty_tpl->tpl_vars['shopopeninfo']->value['opentype']==3){?>
                                        <?php if ($_smarty_tpl->tpl_vars['itv']->value['is_live']==1){?>
	<?php if ($_smarty_tpl->tpl_vars['itv']->value['count']>0){?>
		 <?php if ($_smarty_tpl->tpl_vars['itv']->value['have_det']==1){?>
			<div class="xuanguige openurlshowdet" dataid="<?php echo $_smarty_tpl->tpl_vars['itv']->value['id'];?>
">选规格</div></a>
		 <?php }else{ ?>	
			 <div  onclick="addonedish(<?php echo $_smarty_tpl->tpl_vars['itv']->value['id'];?>
,<?php echo $_smarty_tpl->tpl_vars['itv']->value['shopid'];?>
,1,this);" class="newjiacart"><img src="<?php echo $_smarty_tpl->tpl_vars['siteurl']->value;?>
/templates/<?php echo $_smarty_tpl->tpl_vars['tempdir']->value;?>
/public/images/wmr_pc_jia.png" /></div>
		 <?php }?>	
	<?php }else{ ?>
		<div class="xuanguige" style="color:#ccc;">已售完</div>
	<?php }?>
                                        <?php }else{ ?>
                                        <div class="xuanguige" style="color:#ccc;">已下架</div>
                                        <?php }?>
<?php }else{ ?>
<div class="xuanguige" style="color:#ccc;">休息中</div>
<?php }?>		

	</div>
	</div>

                               
  </div>
  <?php if ($_smarty_tpl->tpl_vars['itv']->value['is_cx']==1){?>
  <div class="wmr_cx_info"><p style="margin-top:12px;">限时特价</p><p style="color:#ffff00;"><span style="font-size:24px;"><?php echo $_smarty_tpl->tpl_vars['itv']->value['zhekou'];?>
</span>折</p></div>
<?php }?>
 			
                        </div>

                           
                    <?php } ?>        <div class="cer"></div>

                

                    </div>
 

                </div>

               <?php } ?>     <!------>
 

                    <div id="flyItem" class="gonumfly">+</div>
					
					
					
					
					
					
					
					
					
					
					<!-- 评价 -->
					<div id="pingjialist" style="display:none;">
						
					</div>
					

         </div>

    </div>

	<div class="aswm-show-ad">

    <div class="aswm-shop-gg" style="top: 227px; position: absolute;">

    	<h2>本店公告/买家必读</h2>

        <div class="aswm-shop-gginfo">
<?php echo (($tmp = @htmlspecialchars_decode($_smarty_tpl->tpl_vars['shopinfo']->value['notice_info']))===null||$tmp==='' ? '暂无公告' : $tmp);?>
	

        </div>

        <div class="aswm-shop-ggicon">

			
        	<ul>
			
				<?php  $_smarty_tpl->tpl_vars['items'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['items']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['ruledata']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['items']->key => $_smarty_tpl->tpl_vars['items']->value){
$_smarty_tpl->tpl_vars['items']->_loop = true;
?>
			
				<li><?php echo $_smarty_tpl->tpl_vars['items']->value['name'];?>
</li>
		
				<?php } ?>
			

			  <?php  $_smarty_tpl->tpl_vars['itat'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['itat']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['mainattr']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['itat']->key => $_smarty_tpl->tpl_vars['itat']->value){
$_smarty_tpl->tpl_vars['itat']->_loop = true;
?>
          <?php if ($_smarty_tpl->tpl_vars['itat']->value['type']=='img'){?> 
          <?php  $_smarty_tpl->tpl_vars['itdd'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['itdd']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['itat']->value['det']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['itdd']->key => $_smarty_tpl->tpl_vars['itdd']->value){
$_smarty_tpl->tpl_vars['itdd']->_loop = true;
?>
          <?php  $_smarty_tpl->tpl_vars['itaa'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['itaa']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['shopattr']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['itaa']->key => $_smarty_tpl->tpl_vars['itaa']->value){
$_smarty_tpl->tpl_vars['itaa']->_loop = true;
?>
          <?php if ($_smarty_tpl->tpl_vars['itdd']->value['id']==$_smarty_tpl->tpl_vars['itaa']->value['attrid']){?>
		<li style="background:url(<?php echo $_smarty_tpl->tpl_vars['itaa']->value['value'];?>
) left center no-repeat; background-size:20px;" class="aswm-ico"><?php echo $_smarty_tpl->tpl_vars['itdd']->value['instro'];?>
</li>
          <?php }?>
          <?php } ?> 
          <?php } ?> 
          <?php }?>     
          <?php } ?>
			
			
		

            </ul>

        </div>

        <div class="gotop" onclick="gotop(0)" style="display: none;">返回顶部</div>
		
		<div class="shopmobileinfo">
			<div class="showtitle">手机快速下单</div>
			<div class="showewmrinfo">
				<img  src="<?php echo $_smarty_tpl->tpl_vars['siteurl']->value;?>
/upload/app/m6wx_ewm.png" />
			</div>
		</div>

    </div>
<!-- 购物车 -->
	<div id="cartlist" style="bottom: 100px;    z-index: 99999999999999;    position: fixed;">
			
			
 
		
	</div>	
		
    </div>

    <div class="cer"></div>

</div>



<script type="text/javascript" src="<?php echo $_smarty_tpl->tpl_vars['siteurl']->value;?>
/templates/<?php echo $_smarty_tpl->tpl_vars['tempdir']->value;?>
/public/mnew7/js/nwaimai.js"></script>
<script type="text/javascript" src="<?php echo $_smarty_tpl->tpl_vars['siteurl']->value;?>
/templates/<?php echo $_smarty_tpl->tpl_vars['tempdir']->value;?>
/public/mnew7/js/parabola.js"></script>
<script type="text/javascript" src="<?php echo $_smarty_tpl->tpl_vars['siteurl']->value;?>
/templates/<?php echo $_smarty_tpl->tpl_vars['tempdir']->value;?>
/public/mnew7/js/layer.js"></script>

<script type="text/javascript">
 

(function($){
    $.fn.capacityFixed = function(options) {
        var opts = $.extend({},$.fn.capacityFixed.deflunt,options);
        var FixedFun = function(element) {
            var top = opts.top;
            var right = ($(window).width()-opts.pageWidth)/2+opts.right;
            element.css({
                "right":right,
                "top":top
            });
            $(window).resize(function(){
                var right = ($(window).width()-opts.pageWidth)/2+opts.right;
                element.css({
                    "right":right
                });
            });
            $(window).scroll(function() {
                var scrolls = $(this).scrollTop();
                if (scrolls > top) {

                    if (window.XMLHttpRequest) {
						$(".gotop").show();
                        element.css({
                            position: "fixed",
                            top: 0							
                        });
                    } else {
                        element.css({
                            top: scrolls
                        });
                    }
                }else {
					$(".gotop").hide();
                    element.css({
                        position: "absolute",
                        top: top
                    });
                }
            });
            element.find(".close-ico").click(function(event){
                element.remove();
                event.preventDefault();
            })
        };
        return $(this).each(function() {
            FixedFun($(this));
        });
    };
    $.fn.capacityFixed.deflunt={
        top:275	};
})(jQuery);
</script>
<script  type="text/javascript"> 
$(".aswm-shop-gg").capacityFixed();
</script> 

 
  
 <script type="text/javascript"> 
 $(".MealsList li:nth-child(even)").addClass('odd');//css({'border-left':'3px solid #f60','background-color':'#fffae7'});
 	var juanlist = <?php echo json_encode($_smarty_tpl->tpl_vars['juanlist']->value);?>
;
 	var nowdate = '<?php echo smarty_modifier_date_format(time(),"%Y-%m-%d");?>
';
	var starttime = '<?php echo $_smarty_tpl->tpl_vars['shopinfo']->value['starttime'];?>
';
	var nowtime = '<?php echo smarty_modifier_date_format(time(),"%Y-%m-%d %H:%M:%S");?>
';
 var shopid = <?php echo $_smarty_tpl->tpl_vars['shopinfo']->value['id'];?>
;   
 var locationfalse  = false;
 var submithtml = '<?php echo FUNC_function(array('type'=>'url','link'=>"/shop/makeorder/datatype/json/random/@random@"),$_smarty_tpl);?>
';
	  var orderhtml = '<?php echo FUNC_function(array('type'=>'url','link'=>"/site/waitpay/orderid/@orderid@"),$_smarty_tpl);?>
';
var memberid = <?php echo $_smarty_tpl->tpl_vars['member']->value['uid'];?>
;
var allowedguestbuy = <?php echo (($tmp = @$_smarty_tpl->tpl_vars['allowedguestbuy']->value)===null||$tmp==='' ? 0 : $tmp);?>
;
 
   <?php if ($_smarty_tpl->tpl_vars['locationtype']->value==1){?> 
 	      <?php if (empty($_smarty_tpl->tpl_vars['lng']->value)){?>
	      
	       $('#temd_id1').remove();
	     
    	<?php }else{ ?>
		        $('#temd_id2').remove();
     	<?php }?> 
 	     $.get("<?php echo FUNC_function(array('type'=>'url','link'=>"/site/ceju/lat/".((string)$_smarty_tpl->tpl_vars['shopinfo']->value['lat'])."/lng/".((string)$_smarty_tpl->tpl_vars['shopinfo']->value['lng'])."/dlng/".((string)$_smarty_tpl->tpl_vars['lng']->value)."/dlat/".((string)$_smarty_tpl->tpl_vars['lat']->value)."/datatype/json"),$_smarty_tpl);?>
", function(result){
 	     	   $("#juli").text(result.msg);
 	        	if(result.error ==  false){
                locationfalse = false;    
           }else{
           	 locationfalse = true;
           	   artopen();
           }
       },'json'); 
 	  <?php }else{ ?>
 	   
 	  	$(function(){
		       var myaddressid = '<?php echo $_smarty_tpl->tpl_vars['myaddress']->value;?>
';
		      if(myaddressid == null|| myaddressid==''){
			           window.location.href= '<?php echo FUNC_function(array('type'=>'url','link'=>"/site/guide"),$_smarty_tpl);?>
';
	    	   }
	    }); 
 	  <?php }?> 
 
	
 
  function artopen(){ 
    art.dialog({
       id: 'testID3',
       lock: true,
       background: '#666', // 背景色
       opacity: 0.87,	// 透明度
       title:'定位提示',
       content: $('#temdiv_id').html()
    });  
  }
	function closetout(){ 
	  art.dialog({id: 'testID3'}).close();
	}
	
	     
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
<script>
 


</script>


 
<script type="text/javascript" src="http://api.map.baidu.com/api?v=2.0&ak=<?php echo $_smarty_tpl->tpl_vars['baidumapkey']->value;?>
"></script>
<script type="text/javascript">

// 百度地图API功能
/*初始化地图*/  
var map = new BMap.Map("SearchAddmap");
var point = new BMap.Point(<?php echo $_smarty_tpl->tpl_vars['lng']->value;?>
, <?php echo $_smarty_tpl->tpl_vars['lat']->value;?>
); 
var myIcon1 = new BMap.Icon(siteurl+"/upload/map/pepole.png", new BMap.Size(30,50));  
var point2 = new BMap.Point(<?php echo $_smarty_tpl->tpl_vars['shopinfo']->value['lng'];?>
, <?php echo $_smarty_tpl->tpl_vars['shopinfo']->value['lat'];?>
); 
var myIcon2 = new BMap.Icon(siteurl+"/upload/map/shop.png", new BMap.Size(19,19));  
var marker2 =  new BMap.Marker(point2,{icon:myIcon2}); 
var marker = new BMap.Marker(point,{icon:myIcon1});
var infoWindow = new BMap.InfoWindow('');  // 创建信息窗口对象 
map.centerAndZoom(point2, 15);
//加载缩放级别
map.addControl(new BMap.NavigationControl());  //添加默认缩放平移控件
map.addControl(new BMap.NavigationControl({anchor: BMAP_ANCHOR_TOP_RIGHT, type: BMAP_NAVIGATION_CONTROL_SMALL}));  //右上角，仅包含平移和缩放按钮
map.addControl(new BMap.NavigationControl({anchor: BMAP_ANCHOR_BOTTOM_LEFT, type: BMAP_NAVIGATION_CONTROL_PAN}));  //左下角，仅包含平移按钮
map.addControl(new BMap.NavigationControl({anchor: BMAP_ANCHOR_BOTTOM_RIGHT, type: BMAP_NAVIGATION_CONTROL_ZOOM}));  //右下角，仅包含缩放按钮

 map.addOverlay(marker);
 
   map.addOverlay(marker2);

$(function(){

		$(' .ordering_pic_orange').showBigPic({
			src: 'bigsrc',   	  //图片地址
			type:'click', //事件
			content:''	  //显示的内容
		})

})
 
 
 //刷新购物车
function freshcart(){ 
	
	if($('#ShopCart').html() == undefined){
	
	    url = siteurl+'/index.php?ctrl=site&action=smallcat&shopid='+shopid+'&random=@random@';
	    url = url.replace('@random@', 1+Math.round(Math.random()*1000)); 
	    $.get(url, function(result){ 
	   
        $("#cartlist").html(result);
         freachperson();
         jifenduihuan();  
       //  $('.new_cart_show').bind("hover", function() {   
      //   	  $(this).addClass('hoveron').siblings().removeClass('hoveron');
      //   });
    //    $('#CMoney').text(allcost);
     //   $('#waimaibtn').text(allcost);
      });
   }else{ 
   	//调用  自动刷新购物车  

      url = siteurl+'/index.php?ctrl=site&action=smallcat2&shopid='+shopid+'&random=@random@';
	    url = url.replace('@random@', 1+Math.round(Math.random()*1000)); 
	    $.get(url, function(result){  
        $("#cartshow_c").html(result);  
         if(Number($('#jifendkou').attr('data')) > 0){
  	        $('#jifendkou').show();
         } 
          jifenduihuan();  
      }); 
     
     
   }  
}
 
</script>
 

 <style>
 
.sale-item-discount {
    width: 46px;
    height: 54px;
    line-height: 24px;
    text-align: center;
    position: absolute;
    padding: 20px 20px 12px;
    right: 6px;
    bottom: 14px;
    display: block;
    color: #fff;
    font-size: 22px;
    background:#FF4444;
	border-radius:50%;
    overflow: hidden;
	position: absolute;
    top: 70px;
    right: 8px;
}
 </style>
<div style="text-align:center;"></div>
 
 
 
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