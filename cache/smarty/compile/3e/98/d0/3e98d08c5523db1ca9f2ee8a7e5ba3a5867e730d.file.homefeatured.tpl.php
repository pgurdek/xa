<?php /* Smarty version Smarty-3.1.19, created on 2015-10-06 11:52:02
         compiled from "D:\wamp\www\xiaomipl\themes\xiaomi\modules\homefeatured\homefeatured.tpl" */ ?>
<?php /*%%SmartyHeaderCode:149695613b5e292b763-15657675%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '3e98d08c5523db1ca9f2ee8a7e5ba3a5867e730d' => 
    array (
      0 => 'D:\\wamp\\www\\xiaomipl\\themes\\xiaomi\\modules\\homefeatured\\homefeatured.tpl',
      1 => 1440056612,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '149695613b5e292b763-15657675',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'products' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_5613b5e2962273_93049646',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5613b5e2962273_93049646')) {function content_5613b5e2962273_93049646($_smarty_tpl) {?>
<?php if (isset($_smarty_tpl->tpl_vars['products']->value)&&$_smarty_tpl->tpl_vars['products']->value) {?>
	<?php echo $_smarty_tpl->getSubTemplate (((string)$_smarty_tpl->tpl_vars['tpl_dir']->value)."./product-list.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('class'=>'homefeatured tab-pane','id'=>'homefeatured'), 0);?>

<?php } else { ?>
<ul id="homefeatured" class="homefeatured tab-pane">
	<li class="alert alert-info"><?php echo smartyTranslate(array('s'=>'No featured products at this time.','mod'=>'homefeatured'),$_smarty_tpl);?>
</li>
</ul>
<?php }?><?php }} ?>
