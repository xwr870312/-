<?php /* Smarty version Smarty-3.1.10, created on 2016-10-14 15:01:19
         compiled from "D:\WWW\templates\adminpage\public\admin_menu.html" */ ?>
<?php /*%%SmartyHeaderCode:11196580082bf621039-04517781%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '4866d4d6676b182f346bc14b503c9083ea859161' => 
    array (
      0 => 'D:\\WWW\\templates\\adminpage\\public\\admin_menu.html',
      1 => 1469566320,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '11196580082bf621039-04517781',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'moduleparent' => 0,
    'moduleall' => 0,
    'itv' => 0,
    'admininfo' => 0,
    'menulist' => 0,
    'items' => 0,
    'Taction' => 0,
    'tmodule' => 0,
    'moduleid' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.10',
  'unifunc' => 'content_580082bf72ec60_96414604',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_580082bf72ec60_96414604')) {function content_580082bf72ec60_96414604($_smarty_tpl) {?><?php if (!is_callable('smarty_function_load_data')) include 'D:\\WWW\\lib\\Smarty\\libs\\plugins\\function.load_data.php';
?>  
    <?php if ($_smarty_tpl->tpl_vars['moduleparent']->value>0){?> 
           <?php echo smarty_function_load_data(array('assign'=>"moduleall",'table'=>"module",'limit'=>"20",'orderby'=>"id asc",'where'=>"id ='".((string)$_smarty_tpl->tpl_vars['moduleparent']->value)."' or parent_id = '".((string)$_smarty_tpl->tpl_vars['moduleparent']->value)."'"),$_smarty_tpl);?>
 
          <?php  $_smarty_tpl->tpl_vars['itv'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['itv']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['moduleall']->value['list']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['itv']->key => $_smarty_tpl->tpl_vars['itv']->value){
$_smarty_tpl->tpl_vars['itv']->_loop = true;
?>  
          
                <?php echo smarty_function_load_data(array('assign'=>"menulist",'table'=>"menu",'limit'=>"20",'orderby'=>"id asc",'where'=>"moduleid ='".((string)$_smarty_tpl->tpl_vars['itv']->value['id'])."' and `group` = ".((string)$_smarty_tpl->tpl_vars['admininfo']->value['group'])),$_smarty_tpl);?>
 
                 <?php  $_smarty_tpl->tpl_vars['items'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['items']->_loop = false;
 $_smarty_tpl->tpl_vars['myid'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['menulist']->value['list']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['items']->key => $_smarty_tpl->tpl_vars['items']->value){
$_smarty_tpl->tpl_vars['items']->_loop = true;
 $_smarty_tpl->tpl_vars['myid']->value = $_smarty_tpl->tpl_vars['items']->key;
?>   
   	 	    	            	<li><div class="leftarrow"></div><a href="<?php echo FUNC_function(array('type'=>'url','link'=>"/adminpage/".((string)$_smarty_tpl->tpl_vars['itv']->value['name'])."/module/".((string)$_smarty_tpl->tpl_vars['items']->value['name'])),$_smarty_tpl);?>
" <?php if ($_smarty_tpl->tpl_vars['Taction']->value==$_smarty_tpl->tpl_vars['itv']->value['name']&&$_smarty_tpl->tpl_vars['items']->value['name']==$_smarty_tpl->tpl_vars['tmodule']->value){?>class="on"<?php }?>><?php echo $_smarty_tpl->tpl_vars['items']->value['cnname'];?>
</a></li>
                 <?php } ?>
          <?php } ?> 
    <?php }else{ ?> 
        <?php echo smarty_function_load_data(array('assign'=>"moduleall",'table'=>"module",'limit'=>"20",'orderby'=>"id asc",'where'=>"id ='".((string)$_smarty_tpl->tpl_vars['moduleid']->value)."' or parent_id = '".((string)$_smarty_tpl->tpl_vars['moduleid']->value)."'"),$_smarty_tpl);?>
 
          <?php  $_smarty_tpl->tpl_vars['itv'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['itv']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['moduleall']->value['list']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['itv']->key => $_smarty_tpl->tpl_vars['itv']->value){
$_smarty_tpl->tpl_vars['itv']->_loop = true;
?>  
                <?php echo smarty_function_load_data(array('assign'=>"menulist",'table'=>"menu",'limit'=>"20",'orderby'=>"id asc",'where'=>"moduleid ='".((string)$_smarty_tpl->tpl_vars['itv']->value['id'])."' and `group` = ".((string)$_smarty_tpl->tpl_vars['admininfo']->value['group'])),$_smarty_tpl);?>
 
                 <?php  $_smarty_tpl->tpl_vars['items'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['items']->_loop = false;
 $_smarty_tpl->tpl_vars['myid'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['menulist']->value['list']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['items']->key => $_smarty_tpl->tpl_vars['items']->value){
$_smarty_tpl->tpl_vars['items']->_loop = true;
 $_smarty_tpl->tpl_vars['myid']->value = $_smarty_tpl->tpl_vars['items']->key;
?>   
   	 	    	            	<li><div class="leftarrow"></div><a href="<?php echo FUNC_function(array('type'=>'url','link'=>"/adminpage/".((string)$_smarty_tpl->tpl_vars['itv']->value['name'])."/module/".((string)$_smarty_tpl->tpl_vars['items']->value['name'])),$_smarty_tpl);?>
" <?php if ($_smarty_tpl->tpl_vars['Taction']->value==$_smarty_tpl->tpl_vars['itv']->value['name']&&$_smarty_tpl->tpl_vars['items']->value['name']==$_smarty_tpl->tpl_vars['tmodule']->value){?>class="on"<?php }?>><?php echo $_smarty_tpl->tpl_vars['items']->value['cnname'];?>
</a></li>
                 <?php } ?>
          <?php } ?> 
    <?php }?>
    
    
    
  
 <?php }} ?>