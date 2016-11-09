<?php /* Smarty version Smarty-3.1.10, created on 2016-11-09 11:57:39
         compiled from "/Applications/MAMP/htdocs/templates/m7/site/index.html" */ ?>
<?php /*%%SmartyHeaderCode:193450982558229eb31087d5-00862251%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'b9795a47f47211f043abfcbe1b66f9e11293813b' => 
    array (
      0 => '/Applications/MAMP/htdocs/templates/m7/site/index.html',
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
  'nocache_hash' => '193450982558229eb31087d5-00862251',
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
  'unifunc' => 'content_58229eb33f0a32_41476417',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_58229eb33f0a32_41476417')) {function content_58229eb33f0a32_41476417($_smarty_tpl) {?><?php if (!is_callable('smarty_function_load_data')) include '/Applications/MAMP/htdocs/lib/Smarty/libs/plugins/function.load_data.php';
?><!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml"> 
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta http-equiv="X-UA-Compatible" content="IE=edge, chrome=1">
 <title> <?php echo $_smarty_tpl->tpl_vars['mapname']->value;?>
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
/public/css/floor.css"> 
<link rel="stylesheet" type="text/css" href="<?php echo $_smarty_tpl->tpl_vars['siteurl']->value;?>
/templates/<?php echo $_smarty_tpl->tpl_vars['tempdir']->value;?>
/public/css/newtype.css"> 


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
/public/js/v5_plugin.js.pagespeed.jm.inM6bedmF7.js"></script>
  <script src="<?php echo $_smarty_tpl->tpl_vars['siteurl']->value;?>
/templates/<?php echo $_smarty_tpl->tpl_vars['tempdir']->value;?>
/public/js/jquery.cookie.js" type="text/javascript" language="javascript"></script> 
   <script type="text/javascript" language="javascript" src="<?php echo $_smarty_tpl->tpl_vars['siteurl']->value;?>
/templates/<?php echo $_smarty_tpl->tpl_vars['tempdir']->value;?>
/public/js/slides.jquery.js"> </script>
   <script type="text/javascript" language="javascript" src="<?php echo $_smarty_tpl->tpl_vars['siteurl']->value;?>
/templates/<?php echo $_smarty_tpl->tpl_vars['tempdir']->value;?>
/public/js/r.js"> </script>
    <script>
	$(function(){
			$('#bannerBox').slides({
				preload: true,
				preloadImage: '/upload/images/shop/loading.gif',
				play: 5000,
				pause: 2500,
				hoverPause: true,
				generatePagination:true
			});
		});

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


 
 


 	 <?php echo smarty_function_load_data(array('assign'=>"lunbo",'table'=>"adv",'fileds'=>"*",'limit'=>"5",'where'=>"advtype='lunbo' and  module='".((string)$_smarty_tpl->tpl_vars['sitetemp']->value)."'"),$_smarty_tpl);?>
  
	<?php if (!empty($_smarty_tpl->tpl_vars['lunbo']->value['list'])){?>
	  
		<div class="wrapper" style="margin-top:10px;height:90px;">
	     <div style="position: absolute;  height:90px;  width: 1200px;     overflow: hidden;  ">
			<div id="bannerBox">
					 <div  class="slides_container" style="height:90px;"> 
						<?php  $_smarty_tpl->tpl_vars['items'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['items']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['lunbo']->value['list']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['items']->key => $_smarty_tpl->tpl_vars['items']->value){
$_smarty_tpl->tpl_vars['items']->_loop = true;
?>
						<a href="<?php echo $_smarty_tpl->tpl_vars['items']->value['linkurl'];?>
" target="_blank" style="height:90px;width:1200px;"><img style="height:90px;width:1200px;" src="<?php echo $_smarty_tpl->tpl_vars['items']->value['img'];?>
" width="1200" height="90"></a> 
						<?php } ?> 
				    </div>
					 
			</div>
			</div>
		</div>

	<?php }?>

  <div style="height:20px;"></div>
<div class="wrapper"> 
<?php  $_smarty_tpl->tpl_vars['items'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['items']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['attrinfo']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['items']->key => $_smarty_tpl->tpl_vars['items']->value){
$_smarty_tpl->tpl_vars['items']->_loop = true;
?>
	<div class="excavator-filter ng-scope"  goodstype_<?php echo $_smarty_tpl->tpl_vars['items']->value['id'];?>
" data="goodstype_<?php echo $_smarty_tpl->tpl_vars['items']->value['id'];?>
"  >
	
		<div class="excavator-filter-name"><?php echo $_smarty_tpl->tpl_vars['items']->value['name'];?>
:</div> 
		<span data="0" class="excavator-filter-item  <?php if (!isset($_smarty_tpl->tpl_vars['goodstypedoid']->value[$_smarty_tpl->tpl_vars['items']->value['id']])){?>focus<?php }?>  " >不限</span> 
			   	<?php  $_smarty_tpl->tpl_vars['itv'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['itv']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['items']->value['det']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['itv']->key => $_smarty_tpl->tpl_vars['itv']->value){
$_smarty_tpl->tpl_vars['itv']->_loop = true;
?> 
											   
							<span    data="<?php echo $_smarty_tpl->tpl_vars['itv']->value['id'];?>
" class="excavator-filter-item ng-binding ng-scope <?php if (isset($_smarty_tpl->tpl_vars['goodstypedoid']->value[$_smarty_tpl->tpl_vars['items']->value['id']])){?> <?php if ($_smarty_tpl->tpl_vars['itv']->value['id']==$_smarty_tpl->tpl_vars['goodstypedoid']->value[$_smarty_tpl->tpl_vars['items']->value['id']]){?>focus<?php }?> <?php }?>   " > <?php echo $_smarty_tpl->tpl_vars['itv']->value['name'];?>
</span>					
														
				       <?php } ?>			
		  	
	</div>
	
	 <?php } ?>		
	
<script>

$(function(){
	$(".allcai").click(function(){
		
		$(".dropmenu").toggle();
		
	});
	
	$('.excavator-filter span').click(function(){
		$(this).addClass('focus').siblings().removeClass('focus');
	//	$(".allcai").text( $(this).text() );
		makelink();
	});
	
	
	function makelink(){
	  var findobj = $('.excavator-filter'); 
	  var newstr = '';
	
   $.each(findobj, function(i, newobj) {
		 newstr +='&'+$(this).attr('data')+'=';
			var checkid = $(this).find('span.focus').length;
			if(checkid > 0){
				newstr+=$(this).find('span.focus').eq(0).attr('data');
			}else{
				newstr+=0;
			}		  	
		   
								   	  
	});
	
	   window.location.href="<?php echo $_smarty_tpl->tpl_vars['siteurl']->value;?>
/index.php?ctrl=site&action=index"+newstr;
	}
	
	
	
	
});

</script>
 	
	
	
	
 	
 	
 	
   
	
	
 	<script>
	
	
	
//添加店铺收藏
function myFavorite2(shopid,obj)
{ 
  var url = siteurl+'/index.php?ctrl=shop&action=addcollect&datatype=json&collectid='+shopid+'&type=0'; 
  var backinfo = ajaxback(url,{});
  if(backinfo.flag == false){ 
     		$(obj).hide(); 
     		$(obj).next().show(); 
     	//	$('#CancelFavShop').show();
   }else{ 
   	diaerror(backinfo.content); 
  }  
}  
//删除店铺收藏
function delFav(shopid,obj)
{ 
	var url = siteurl+'/index.php?ctrl=shop&action=delcollect&datatype=json&collectid='+shopid+'&type=0'; 
  var backinfo = ajaxback(url,{});
  if(backinfo.flag == false){ 
      $(obj).hide(); 
	  $(obj).prev().show(); 
     // $('#CancelFavShop').hide();
   }else{ 
   	 diaerror(backinfo.content); 
  }  
}
	
	
	</script>
 	  
	<!---循环体-->
 	
 	
 	<div style="clear:both;"></div>
 	
 	
  
    <div class="rest-list">
    <ul class="list clearfix" style="min-height:395px;">
       <?php  $_smarty_tpl->tpl_vars['items'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['items']->_loop = false;
 $_smarty_tpl->tpl_vars['mykey'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['shoplist']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['items']->key => $_smarty_tpl->tpl_vars['items']->value){
$_smarty_tpl->tpl_vars['items']->_loop = true;
 $_smarty_tpl->tpl_vars['mykey']->value = $_smarty_tpl->tpl_vars['items']->key;
?>
        <li class="fl rest-li" >  	<div class="j-rest-outer rest-outer transition ">
      <div class="restaurant" >
        <a class="rest-atag" href="<?php echo FUNC_function(array('type'=>'url','link'=>"/shop/index/id/".((string)$_smarty_tpl->tpl_vars['items']->value['shopid'])."/gid/".((string)$_smarty_tpl->tpl_vars['items']->value['id'])),$_smarty_tpl);?>
" target="_blank">
          <div class="top-content">
            <div class="preview">
              <img  class="scroll-loading" src="<?php echo $_smarty_tpl->tpl_vars['imgserver']->value;?>
<?php echo (($tmp = @$_smarty_tpl->tpl_vars['items']->value['shoplogo'])===null||$tmp==='' ? $_smarty_tpl->tpl_vars['shoplogo']->value : $tmp);?>
" data-src="<?php echo (($tmp = @$_smarty_tpl->tpl_vars['items']->value['shoplogo'])===null||$tmp==='' ? $_smarty_tpl->tpl_vars['shoplogo']->value : $tmp);?>
" data-max-width="208" data-max-height="156"  />
              <div class="rest-tags">
              </div>
            </div>
            <div class="content">
              <div class="name">
                <span title="<?php echo $_smarty_tpl->tpl_vars['items']->value['shopname'];?>
">
    <?php echo $_smarty_tpl->tpl_vars['items']->value['shopname'];?>

    
                </span>
              </div>
  		          <div class="rank clearfix">
  	              <span class="star-ranking fl">
  	                <!-- 5颗星60px长度，算此时星级的长度 -->
  	                <!-- 算出空白填充的部分长度 -->
					<?php $_smarty_tpl->tpl_vars['pointwidth'] = new Smarty_variable(14.4*$_smarty_tpl->tpl_vars['items']->value['point'], null, 0);?>
  	                <span class="star-score"  style="width:<?php echo $_smarty_tpl->tpl_vars['pointwidth']->value;?>
px"></span>
  	              </span>
                  <span class="score-num fl"><?php echo $_smarty_tpl->tpl_vars['items']->value['point'];?>
分</span>
  	              <span class="total cc-lightred-new fr">
销量<?php echo $_smarty_tpl->tpl_vars['items']->value['sellcount'];?>
单
  	              </span>
  		          </div>
              <div class="price">
                <span class="start-price">起送:￥<?php echo $_smarty_tpl->tpl_vars['items']->value['limitcost'];?>
</span>
                <span class="send-price">
				<?php if ($_smarty_tpl->tpl_vars['items']->value['pscost']==''){?>
                  免配送费
				 <?php }else{ ?>
				 配送费:￥<?php echo $_smarty_tpl->tpl_vars['items']->value['pscost'];?>

				 <?php }?>
                </span>
                <span class="send-time"><i class="icon i-poi-timer"></i>
                 <?php if (!empty($_smarty_tpl->tpl_vars['items']->value['arrivetime'])){?><?php echo $_smarty_tpl->tpl_vars['items']->value['arrivetime'];?>
分钟<?php }?>	
		 
                </span>
              </div>
			  
			     <div class="price" >
                <span class="start-price" style="width:100%;margin-top:20px;">
				
				
				 <?php  $_smarty_tpl->tpl_vars['itat'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['itat']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['mainattr']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['itat']->key => $_smarty_tpl->tpl_vars['itat']->value){
$_smarty_tpl->tpl_vars['itat']->_loop = true;
?>
                            <?php if ($_smarty_tpl->tpl_vars['itat']->value['type']=='img'){?>
                            <?php  $_smarty_tpl->tpl_vars['itaa'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['itaa']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['items']->value['attrdet']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['itaa']->key => $_smarty_tpl->tpl_vars['itaa']->value){
$_smarty_tpl->tpl_vars['itaa']->_loop = true;
?>
                            <?php if ($_smarty_tpl->tpl_vars['itat']->value['id']==$_smarty_tpl->tpl_vars['itaa']->value['firstattr']){?>
                            <em class="pay-min-icon premium-icon" data-msg="<?php echo $_smarty_tpl->tpl_vars['itat']->value['name'];?>
<?php echo $_smarty_tpl->tpl_vars['itat']->value['instro'];?>
"><img style="width:20px; height:20px;" alt="<?php echo $_smarty_tpl->tpl_vars['itat']->value['name'];?>
" title="<?php echo $_smarty_tpl->tpl_vars['itat']->value['instro'];?>
" src="<?php echo $_smarty_tpl->tpl_vars['itaa']->value['value'];?>
"></em>
                            <?php }?>
                            <?php } ?>
                            <?php }?>
                            <?php } ?>
				
				</span>
              
             
              </div>
			  
			  
            </div>
            <div class="clear"></div>
          </div>
      
        </a>
   
    </div>
    </div>
</li>
	<?php } ?>	
	
	
	
	
	
	
	
	
	

    </ul>
  </div>
  

   
	
 	

	

 
 	
 	
 	
 	 	<div style="clear:both;"></div>
 	
 	
 	
 	
</div>

<script>


	
					
					$(".floor-content .floor-goods").mouseover(function(){
	
						$(this).find($(".iscollect")).show();
						
					});
					$(".floor-content .floor-goods").mouseout(function(){
					
						$(this).find($(".iscollect")).hide();
						
					});
				



 $(function(){
 
	var shopzongshu = <?php echo $_smarty_tpl->tpl_vars['shopzongshu']->value;?>
;
	$("#shopzongshu").text(shopzongshu);
 
		<?php if ($_smarty_tpl->tpl_vars['locationtype']->value==1){?>
 	   var lng = '<?php echo $_smarty_tpl->tpl_vars['lng']->value;?>
';
		
		if(lng == 0 ){
			 window.location.href= '<?php echo FUNC_function(array('type'=>'url','link'=>"/site/guide"),$_smarty_tpl);?>
';
		}
 	<?php }else{ ?>
		var myaddressid = '<?php echo $_smarty_tpl->tpl_vars['myaddress']->value;?>
';
		if(myaddressid == null|| myaddressid==''){
			 window.location.href= '<?php echo FUNC_function(array('type'=>'url','link'=>"/site/guide"),$_smarty_tpl);?>
';
		}
	<?php }?>
 
  $("#mygunclick").click(function(e) {
    //
    var offset = $(this).offset();
    var relativeX = (e.pageX - offset.left);
    var bili = Number(relativeX)/Number($(this).width())*100; 
    bili = Math.ceil(bili);
    var checknowid = $('#limitcost').val();
    if(bili > 75){
    	//30
    	 $('#blue_bar').css({'width':'93%'});
    	$('#limitcost').val(30);
    	$('#showlimittext').text('30元以上');
    	if(checknowid != 30){
    		dosetdata();
    	}
       
    }else if(bili > 50){
       //20
       $('#blue_bar').css({'width':'75%'});
       $('#limitcost').val(20);
       $('#showlimittext').text('20元以上');
       if(checknowid != 20){
    		dosetdata();
    	}
    }else if(bili > 25){
      //10
      $('#blue_bar').css({'width':'50%'});
       $('#limitcost').val(10);
       $('#showlimittext').text('10元以上');
       if(checknowid != 10){
    		dosetdata();
    	}
    }else if(bili > 5){
    	 $('#blue_bar').css({'width':'25%'});
       $('#limitcost').val(5);
       $('#showlimittext').text('5元以上');
       if(checknowid != 5){
    	   	dosetdata();
    	}
    }else{
    	$('#blue_bar').css('width','0px');
    	$('#limitcost').val(0);
    	$('#showlimittext').text('不限制');
    	if(checknowid != 0){
    	   	dosetdata();
    	}
    }
     
  }); 
});
  function dosetdata(){
  	    var url = siteurl+"/index.php?ctrl=site&action=indexlist"; 
	   $.post(url, $('#doselectform').serialize(),function (data, textStatus){  
	     	$('#shopList').html(data);  
	  }, 'html'); 
  }
	function tabCutover02(obj,tempobj){
		$(obj).addClass('current').siblings().removeClass('current');
		$(obj).parent().parent().find($('.'+tempobj)).addClass('floor-con-show').siblings().removeClass('floor-con-show');
	}
</script>
<div style="height:20px;"></div>
<!--区域店铺-->
 
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