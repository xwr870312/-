<?php /* Smarty version Smarty-3.1.10, created on 2016-10-14 15:02:01
         compiled from "D:\WWW\templates\m7\site\marketcart.html" */ ?>
<?php /*%%SmartyHeaderCode:1094580082e9b0ae54-36024652%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '540c6a3efbb076bd9a2c8af845dd4ed5e77078b0' => 
    array (
      0 => 'D:\\WWW\\templates\\m7\\site\\marketcart.html',
      1 => 1469566320,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1094580082e9b0ae54-36024652',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'carinfo' => 0,
    'imgserver' => 0,
    'itv' => 0,
    'shoplogo' => 0,
    'items' => 0,
    'shopopeninfo' => 0,
    'shopid' => 0,
    'allcost' => 0,
    'cxshodata' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.10',
  'unifunc' => 'content_580082e9db2d00_69163778',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_580082e9db2d00_69163778')) {function content_580082e9db2d00_69163778($_smarty_tpl) {?>  
  
  <div id="cart-items" style="display:block; background:#fff;">
    <?php  $_smarty_tpl->tpl_vars['itv'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['itv']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['carinfo']->value['goodslist']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['itv']->key => $_smarty_tpl->tpl_vars['itv']->value){
$_smarty_tpl->tpl_vars['itv']->_loop = true;
?>

	 

	 
   <div class="item" data-rid="1090">
      <div class="img">
        <img src="<?php echo $_smarty_tpl->tpl_vars['imgserver']->value;?>
<?php echo (($tmp = @$_smarty_tpl->tpl_vars['itv']->value['img'])===null||$tmp==='' ? $_smarty_tpl->tpl_vars['shoplogo']->value : $tmp);?>
"></div>
      <div class="info">
        <div class="name"><?php echo $_smarty_tpl->tpl_vars['itv']->value['name'];?>

		
		<?php if ($_smarty_tpl->tpl_vars['itv']->value['have_det']==1){?><font style="font-size:10px;color:#ccc;"><?php echo $_smarty_tpl->tpl_vars['itv']->value['gg']['attrname'];?>
</font><?php }?>
		</div>
        <div class="bar">
          <div class="quantity-wrap">
            <div onclick="<?php if ($_smarty_tpl->tpl_vars['itv']->value['have_det']==1){?>removeoneproduct(<?php echo $_smarty_tpl->tpl_vars['itv']->value['gg']['id'];?>
,<?php echo $_smarty_tpl->tpl_vars['itv']->value['shopid'];?>
,1);<?php }else{ ?>removeonedish(<?php echo $_smarty_tpl->tpl_vars['itv']->value['id'];?>
,<?php echo $_smarty_tpl->tpl_vars['itv']->value['shopid'];?>
,1);<?php }?>" class="ico minus">-</div>
            <div class="num-wrap">
              <input    id="cart_count<?php echo $_smarty_tpl->tpl_vars['itv']->value['id'];?>
"  style="border:1px solid #A9A9A9;" class="quantity" type="text" value="<?php echo $_smarty_tpl->tpl_vars['itv']->value['count'];?>
"></div>
            <div onclick="javascript:<?php if ($_smarty_tpl->tpl_vars['itv']->value['have_det']==1){?>uponeproduct(<?php echo $_smarty_tpl->tpl_vars['itv']->value['gg']['id'];?>
,<?php echo $_smarty_tpl->tpl_vars['itv']->value['shopid'];?>
,1,this);<?php }else{ ?>uponedish(<?php echo $_smarty_tpl->tpl_vars['itv']->value['id'];?>
,<?php echo $_smarty_tpl->tpl_vars['itv']->value['shopid'];?>
,1);<?php }?>" class="ico plus">+</div>
          </div>
          <div  onclick="removesupplierdish(<?php echo $_smarty_tpl->tpl_vars['itv']->value['id'];?>
,<?php echo $_smarty_tpl->tpl_vars['itv']->value['shopid'];?>
);" class="del">X</div>
        </div>
      </div>
   </div> 
    <?php } ?> 
   </div>

 	   	    				      
 	   	    				    	<!--产品循环--> 
 	   	    				    <?php $_smarty_tpl->tpl_vars['allcost'] = new Smarty_variable($_smarty_tpl->tpl_vars['carinfo']->value['pscost']+$_smarty_tpl->tpl_vars['carinfo']->value['bagcost']+$_smarty_tpl->tpl_vars['carinfo']->value['cx']['surecost'], null, 0);?>  
         
        <?php $_smarty_tpl->tpl_vars['areacost'] = new Smarty_variable($_smarty_tpl->tpl_vars['carinfo']->value['pscost'], null, 0);?>
         <?php if (isset($_smarty_tpl->tpl_vars['items']->value['cx']['gzdata'])&&count($_smarty_tpl->tpl_vars['items']->value['cx']['gzdata'])>0){?> 
         <?php $_smarty_tpl->tpl_vars['cxshodata'] = new Smarty_variable($_smarty_tpl->tpl_vars['items']->value['cx']['gzdata']['0'], null, 0);?>
         <?php }?>
		 

		 
    

 <?php if (count($_smarty_tpl->tpl_vars['carinfo']->value['goodslist'])>0){?>
            	 <div class="sumup" id="sumup" style="overflow: hidden; display: block; line-height:53px; width: 248px;">
          <span class="sum-quantity">
            <span class="food_num n"><?php echo $_smarty_tpl->tpl_vars['carinfo']->value['count'];?>
</span>
            件商品
          </span>
          <span class="sum-amount">
            合计
            <span class="food_amount n"><?php echo $_smarty_tpl->tpl_vars['carinfo']->value['sum'];?>
</span>
            元
          </span>
        </div>
		 
		 
		<?php if ($_smarty_tpl->tpl_vars['shopopeninfo']->value['opentype']==2||$_smarty_tpl->tpl_vars['shopopeninfo']->value['opentype']==3){?>
		 <div class="tup">
              <input type="submit" id="submit-btn"  onclick="ajaxdoorder(<?php echo $_smarty_tpl->tpl_vars['shopid']->value;?>
);" value="提交订单">
            </div>
		<?php }else{ ?>
			<div class="tup">
              <input  style="background:#ccc; color:#838383;" type="submit" id="submit-btn"  value="休息中">
            </div>		
		<?php }?>	

 	<?php }else{ ?>
	
          <div id="empty-tip" class="empty-tip" style="overflow: hidden; display: block;">购物车空空的OvO</div>
    
	<?php }?>
  
<div id="tjdata" allshu="<?php echo $_smarty_tpl->tpl_vars['carinfo']->value['count'];?>
" allcost="<?php echo $_smarty_tpl->tpl_vars['allcost']->value;?>
" areacost="<?php echo $_smarty_tpl->tpl_vars['carinfo']->value['areacost'];?>
" goodscost="<?php echo $_smarty_tpl->tpl_vars['carinfo']->value['sum'];?>
" cxshodata="<?php echo $_smarty_tpl->tpl_vars['cxshodata']->value;?>
"></div>

  <style>
  .tup{ padding:10px 0;border-top: 1px dotted #f4f3f2; background:#ffffff; text-align:center;}
  #submit-btn {
 
  background-color: #fd6059;
  color: #FFF;
  font-size: 20px;
  border: 1px solid rgba(0,0,0,0);
  border-radius: 5px;
  width: 90%;
  padding: 8px 13px;
}
  </style>  
<script>
	function ajaxdoorder(shopid){
		var url = siteurl+'/index.php?ctrl=site&action=showcart&shopid='+shopid+'&showtype=market'; 
		window.location.href=url;
	}
</script>
 
<?php }} ?>