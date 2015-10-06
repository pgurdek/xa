<?php /*%%SmartyHeaderCode:2076195106560ce18d1d9aa3-94745603%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '56bdb5563b830f4f3823c7ec3e2762b9d2484e6d' => 
    array (
      0 => '/home/oobox/domains/oobox.stronazen.pl/public_html/xiaomipl/themes/default-bootstrap/modules/blocktopmenu/blocktopmenu.tpl',
      1 => 1440056612,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '2076195106560ce18d1d9aa3-94745603',
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_560d04f2eec987_13412812',
  'has_nocache_code' => false,
  'cache_lifetime' => 31536000,
),true); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_560d04f2eec987_13412812')) {function content_560d04f2eec987_13412812($_smarty_tpl) {?>	<!-- Menu -->
	<div id="block_top_menu" class="sf-contener clearfix col-lg-12">
		<div class="cat-title">Zakładki</div>
		<ul class="sf-menu clearfix menu-content">
			<li><a href="http://oobox.stronazen.pl/xiaomipl/index.php?id_category=12&amp;controller=category" title="TELEFONY">TELEFONY</a></li><li><a href="http://oobox.stronazen.pl/xiaomipl/index.php?id_category=13&amp;controller=category" title="TABLETY">TABLETY</a></li><li><a href="http://oobox.stronazen.pl/xiaomipl/index.php?id_category=14&amp;controller=category" title="AKCESORIA">AKCESORIA</a><ul><li><a href="http://oobox.stronazen.pl/xiaomipl/index.php?id_category=15&amp;controller=category" title="Słuchawki i Głosniki">Słuchawki i Głosniki</a></li></ul></li><li><a href="http://oobox.stronazen.pl/xiaomipl/index.php?id_cms=4&amp;controller=cms" title="About us">About us</a></li>

							<li class="sf-search noBack" style="float:right">
					<form id="searchbox" action="http://oobox.stronazen.pl/xiaomipl/index.php?controller=search" method="get">
						<p>
							<input type="hidden" name="controller" value="search" />
							<input type="hidden" value="position" name="orderby"/>
							<input type="hidden" value="desc" name="orderway"/>
							<input type="text" name="search_query" value="" />
						</p>
					</form>
				</li>
					</ul>
	</div>
	<!--/ Menu -->
<?php }} ?>
