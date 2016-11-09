<?php /* Smarty version Smarty-3.1.10, created on 2016-10-14 17:48:26
         compiled from "D:\WWW\templates\m7\site\twojiguide.html" */ ?>
<?php /*%%SmartyHeaderCode:271335800a9ead203c0-67654859%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'e34b8a9ed8792b06d532b82b4e27370d6aa4d990' => 
    array (
      0 => 'D:\\WWW\\templates\\m7\\site\\twojiguide.html',
      1 => 1469566320,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '271335800a9ead203c0-67654859',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'list' => 0,
    'items' => 0,
    'itv' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.10',
  'unifunc' => 'content_5800a9eaea8855_93420891',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5800a9eaea8855_93420891')) {function content_5800a9eaea8855_93420891($_smarty_tpl) {?><?php if (empty($_smarty_tpl->tpl_vars['list']->value)){?>
<li style="font-size:16px;" class="tjli">
	此地点附近暂时没有外卖餐厅，努力覆盖中...
</li>
<?php }?>

<?php  $_smarty_tpl->tpl_vars['items'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['items']->_loop = false;
 $_smarty_tpl->tpl_vars['myid'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['list']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['items']->key => $_smarty_tpl->tpl_vars['items']->value){
$_smarty_tpl->tpl_vars['items']->_loop = true;
 $_smarty_tpl->tpl_vars['myid']->value = $_smarty_tpl->tpl_vars['items']->key;
?>

<div id="muti-aois">
<div class="aois">

<dl class="aoi-group">        <dt><?php echo $_smarty_tpl->tpl_vars['items']->value['name'];?>
</dt>      

  <dd>           
			<ul>  

<?php  $_smarty_tpl->tpl_vars['itv'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['itv']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['items']->value['sanjiguide']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['itv']->key => $_smarty_tpl->tpl_vars['itv']->value){
$_smarty_tpl->tpl_vars['itv']->_loop = true;
?>			
			<li>                    
				<a title="<?php echo $_smarty_tpl->tpl_vars['itv']->value['name'];?>
" data-node="nav_aoi" href="<?php echo FUNC_function(array('type'=>'url','link'=>"/site/setlocationlink/areaid/".((string)$_smarty_tpl->tpl_vars['itv']->value['id'])),$_smarty_tpl);?>
">                        <?php echo $_smarty_tpl->tpl_vars['itv']->value['name'];?>
                    </a>             
				</li>  
<?php } ?>
				
		</ul>      

 </dd>    </dl>
</div></div>
<?php } ?>
<!-- 
<?php  $_smarty_tpl->tpl_vars['items'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['items']->_loop = false;
 $_smarty_tpl->tpl_vars['myid'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['list']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['items']->key => $_smarty_tpl->tpl_vars['items']->value){
$_smarty_tpl->tpl_vars['items']->_loop = true;
 $_smarty_tpl->tpl_vars['myid']->value = $_smarty_tpl->tpl_vars['items']->key;
?>
<li style="font-size:16px;">
<a href="<?php echo FUNC_function(array('type'=>'url','link'=>"/site/setlocationlink/areaid/".((string)$_smarty_tpl->tpl_vars['items']->value['id'])),$_smarty_tpl);?>
" >
<?php echo $_smarty_tpl->tpl_vars['items']->value['name'];?>

</a>
</li>
<?php } ?>
 -->

<style>
#muti-aois {
width: 750px;

background: #fff;
font-size: 1.2em;
overflow-y: auto;

position: relative;
z-index: 1000;
}
#muti-aois .aois {
max-height: 350px;
}
#muti-aois .aois .aoi-group {
border-bottom: 1px solid #e3e3e3;
padding: 15px 0;
display: table;
width: 100%;
}
#muti-aois .aois .aoi-group dt {
margin-right: 10px;
color: #999;
width: 100px;
padding: 0 10px;
text-align: center;
display: table-cell;
vertical-align: middle;
}
#muti-aois .aois .aoi-group dd {
display: inline-block;
margin-left: 5px;
}
#muti-aois .aois .aoi-group li {
display: inline-block;
}
#muti-aois .aois .aoi-group li a {
display: block;
height: 25px;
line-height: 25px;
color: #444;
width: 180px;
font-size: 1em;
text-overflow: ellipsis;
overflow: hidden;
white-space: nowrap;
}
#muti-aois .aois .aoi-group li a:hover{color:#ff2d4b}#muti-aois .aois .aoi-group:hover{background:#f6f6f6}#muti-aois .aois .aoi-group:hover dt{color:#ff2d4b}
</style><?php }} ?>