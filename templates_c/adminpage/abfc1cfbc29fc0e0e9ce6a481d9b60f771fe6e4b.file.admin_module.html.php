<?php /* Smarty version Smarty-3.1.10, created on 2016-10-14 15:01:19
         compiled from "D:\WWW\templates\adminpage\public\admin_module.html" */ ?>
<?php /*%%SmartyHeaderCode:31663580082bf4ea3f2-75219501%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'abfc1cfbc29fc0e0e9ce6a481d9b60f771fe6e4b' => 
    array (
      0 => 'D:\\WWW\\templates\\adminpage\\public\\admin_module.html',
      1 => 1469566320,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '31663580082bf4ea3f2-75219501',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'modelist' => 0,
    'items' => 0,
    'admininfo' => 0,
    'defaultmenu' => 0,
    'Taction' => 0,
    'moduleparent' => 0,
    'myid' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.10',
  'unifunc' => 'content_580082bf59e6b0_45675722',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_580082bf59e6b0_45675722')) {function content_580082bf59e6b0_45675722($_smarty_tpl) {?><?php if (!is_callable('smarty_function_load_data')) include 'D:\\WWW\\lib\\Smarty\\libs\\plugins\\function.load_data.php';
?>   <?php echo smarty_function_load_data(array('assign'=>"modelist",'table'=>"module",'limit'=>"20",'orderby'=>"id asc",'where'=>"install=1 and parent_id=0"),$_smarty_tpl);?>
 
   <?php  $_smarty_tpl->tpl_vars['items'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['items']->_loop = false;
 $_smarty_tpl->tpl_vars['myid'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['modelist']->value['list']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['items']->key => $_smarty_tpl->tpl_vars['items']->value){
$_smarty_tpl->tpl_vars['items']->_loop = true;
 $_smarty_tpl->tpl_vars['myid']->value = $_smarty_tpl->tpl_vars['items']->key;
?>  
        <?php echo smarty_function_load_data(array('assign'=>"defaultmenu",'table'=>"menu",'type'=>"one",'where'=>"moduleid='".((string)$_smarty_tpl->tpl_vars['items']->value['id'])."' and `group` = '".((string)$_smarty_tpl->tpl_vars['admininfo']->value['group'])."'",'fileds'=>"*",'orderby'=>"id asc"),$_smarty_tpl);?>
 
         <?php if (!empty($_smarty_tpl->tpl_vars['defaultmenu']->value)){?>
	  	 	  <li <?php if ($_smarty_tpl->tpl_vars['Taction']->value==$_smarty_tpl->tpl_vars['items']->value['name']||$_smarty_tpl->tpl_vars['moduleparent']->value==$_smarty_tpl->tpl_vars['items']->value['id']){?>class="on" <?php }?>>
	  	 	  	<a href="<?php echo FUNC_function(array('type'=>'url','link'=>"/adminpage/".((string)$_smarty_tpl->tpl_vars['items']->value['name'])."/module/".((string)$_smarty_tpl->tpl_vars['defaultmenu']->value['name'])),$_smarty_tpl);?>
">
	  	 	  	    <div class="lib ck<?php echo $_smarty_tpl->tpl_vars['myid']->value+1;?>
"></div>
	  	 	  	    <div class="libtitle"><?php echo $_smarty_tpl->tpl_vars['items']->value['cnname'];?>
</div>
	  	 	  	 </a> 
	  	    </li>  
	  	   <?php }?>
  <?php } ?><?php }} ?>