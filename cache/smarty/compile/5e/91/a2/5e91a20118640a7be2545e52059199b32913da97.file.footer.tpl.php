<?php /* Smarty version Smarty-3.1.19, created on 2015-10-06 12:08:24
         compiled from "D:\wamp\www\xiaomipl\themes\xiaomi\footer.tpl" */ ?>
<?php /*%%SmartyHeaderCode:13935613b9b822b0b3-15000107%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '5e91a20118640a7be2545e52059199b32913da97' => 
    array (
      0 => 'D:\\wamp\\www\\xiaomipl\\themes\\xiaomi\\footer.tpl',
      1 => 1443776776,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '13935613b9b822b0b3-15000107',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'content_only' => 0,
    'right_column_size' => 0,
    'HOOK_RIGHT_COLUMN' => 0,
    'HOOK_FOOTER' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_5613b9b82b3c52_89014118',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5613b9b82b3c52_89014118')) {function content_5613b9b82b3c52_89014118($_smarty_tpl) {?>
<?php if (!isset($_smarty_tpl->tpl_vars['content_only']->value)||!$_smarty_tpl->tpl_vars['content_only']->value) {?>
					</div><!-- #center_column -->
					<?php if (isset($_smarty_tpl->tpl_vars['right_column_size']->value)&&!empty($_smarty_tpl->tpl_vars['right_column_size']->value)) {?>
						<div id="right_column" class="col-xs-12 col-sm-<?php echo intval($_smarty_tpl->tpl_vars['right_column_size']->value);?>
 column"><?php echo $_smarty_tpl->tpl_vars['HOOK_RIGHT_COLUMN']->value;?>
</div>
					<?php }?>
					</div><!-- .row -->
				</div><!-- #columns -->
			</div><!-- .columns-container -->
			<?php if (isset($_smarty_tpl->tpl_vars['HOOK_FOOTER']->value)) {?>
				<!-- Footer -->
				<div class="footer-container">
					<footer id="footer"  class="container">
						<div class="row"><?php echo $_smarty_tpl->tpl_vars['HOOK_FOOTER']->value;?>
</div>
					<div class="row copyright"><span>Crafted with <i class="icon-heart" style="font-weight:600;"></i> by <a title="Agencja Kreatywna - Out Of Box - Tworzenie stron www, pozycjonowanie, SEO, branding" href="http://pl.oobox.pro" target="_blank">Out Of Box</a></span></div>
					</footer>

				</div><!-- #footer -->
			<?php }?>
		</div><!-- #page -->
<?php }?>
<?php echo $_smarty_tpl->getSubTemplate (((string)$_smarty_tpl->tpl_vars['tpl_dir']->value)."./global.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

	</body>
</html><?php }} ?>
