<?php /* Smarty version Smarty-3.1.19, created on 2015-10-06 10:29:31
         compiled from "/home/oobox/domains/oobox.stronazen.pl/public_html/xiaomipl/modules/blockfacebook/blockfacebook.tpl" */ ?>
<?php /*%%SmartyHeaderCode:5782642075613a28bef0416-66152336%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'f4cfe037bfd20066a4b5497de0a422cbcccafd4f' => 
    array (
      0 => '/home/oobox/domains/oobox.stronazen.pl/public_html/xiaomipl/modules/blockfacebook/blockfacebook.tpl',
      1 => 1440056614,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '5782642075613a28bef0416-66152336',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'facebookurl' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_5613a28bf07ee8_30455712',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5613a28bf07ee8_30455712')) {function content_5613a28bf07ee8_30455712($_smarty_tpl) {?>
<?php if ($_smarty_tpl->tpl_vars['facebookurl']->value!='') {?>
<div id="fb-root"></div>
<div id="facebook_block" class="col-xs-4">
	<h4 ><?php echo smartyTranslate(array('s'=>'Follow us on Facebook','mod'=>'blockfacebook'),$_smarty_tpl);?>
</h4>
	<div class="facebook-fanbox">
		<div class="fb-like-box" data-href="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['facebookurl']->value, ENT_QUOTES, 'UTF-8', true);?>
" data-colorscheme="light" data-show-faces="true" data-header="false" data-stream="false" data-show-border="false">
		</div>
	</div>
</div>
<?php }?>
<?php }} ?>
