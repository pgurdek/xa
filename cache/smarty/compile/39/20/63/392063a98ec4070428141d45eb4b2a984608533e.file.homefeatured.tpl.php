<?php /* Smarty version Smarty-3.1.19, created on 2015-10-06 10:29:32
         compiled from "/home/oobox/domains/oobox.stronazen.pl/public_html/xiaomipl/themes/xiaomi/modules/homefeatured/homefeatured.tpl" */ ?>
<?php /*%%SmartyHeaderCode:8797906025613a28c762399-39123814%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '392063a98ec4070428141d45eb4b2a984608533e' => 
    array (
      0 => '/home/oobox/domains/oobox.stronazen.pl/public_html/xiaomipl/themes/xiaomi/modules/homefeatured/homefeatured.tpl',
      1 => 1440056612,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '8797906025613a28c762399-39123814',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'products' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_5613a28c77d5f0_00214345',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5613a28c77d5f0_00214345')) {function content_5613a28c77d5f0_00214345($_smarty_tpl) {?>
<?php if (isset($_smarty_tpl->tpl_vars['products']->value)&&$_smarty_tpl->tpl_vars['products']->value) {?>
	<?php echo $_smarty_tpl->getSubTemplate (((string)$_smarty_tpl->tpl_vars['tpl_dir']->value)."./product-list.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('class'=>'homefeatured tab-pane','id'=>'homefeatured'), 0);?>

<?php } else { ?>
<ul id="homefeatured" class="homefeatured tab-pane">
	<li class="alert alert-info"><?php echo smartyTranslate(array('s'=>'No featured products at this time.','mod'=>'homefeatured'),$_smarty_tpl);?>
</li>
</ul>
<?php }?><?php }} ?>
