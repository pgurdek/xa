<?php /* Smarty version Smarty-3.1.19, created on 2015-10-06 09:23:58
         compiled from "/home/oobox/domains/oobox.stronazen.pl/public_html/xiaomipl/ppl3wml02ng2dsop/themes/default/template/helpers/list/list_action_edit.tpl" */ ?>
<?php /*%%SmartyHeaderCode:14224526335613932edf6266-89319734%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'cef7810fee65f9c7797300ba6631e3d636adf726' => 
    array (
      0 => '/home/oobox/domains/oobox.stronazen.pl/public_html/xiaomipl/ppl3wml02ng2dsop/themes/default/template/helpers/list/list_action_edit.tpl',
      1 => 1440056612,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '14224526335613932edf6266-89319734',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'href' => 0,
    'action' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_5613932ee126b5_23482571',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5613932ee126b5_23482571')) {function content_5613932ee126b5_23482571($_smarty_tpl) {?>
<a href="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['href']->value, ENT_QUOTES, 'UTF-8', true);?>
" title="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['action']->value, ENT_QUOTES, 'UTF-8', true);?>
" class="edit">
	<i class="icon-pencil"></i> <?php echo htmlspecialchars($_smarty_tpl->tpl_vars['action']->value, ENT_QUOTES, 'UTF-8', true);?>

</a><?php }} ?>
