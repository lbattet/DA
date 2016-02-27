<?php /*%%SmartyHeaderCode:116774491956d1eb3b349961-32945232%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'ea72e80a5e7919a2757717770c0889ed101abb80' => 
    array (
      0 => '/Users/liviobattet/www/DA/da-prestashop/themes/da-theme/modules/blocksearch/blocksearch-top.tpl',
      1 => 1456595221,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '116774491956d1eb3b349961-32945232',
  'variables' => 
  array (
    'link' => 0,
    'search_query' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_56d1eb3b435288_91265864',
  'cache_lifetime' => 31536000,
),true); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_56d1eb3b435288_91265864')) {function content_56d1eb3b435288_91265864($_smarty_tpl) {?><!-- Block search module TOP -->
<div id="search_block_top" class="col-sm-4 clearfix">
	<form id="searchbox" method="get" action="//localhost/DA/da-prestashop/recherche" >
		<input type="hidden" name="controller" value="search" />
		<input type="hidden" name="orderby" value="position" />
		<input type="hidden" name="orderway" value="desc" />
		<input class="search_query form-control" type="text" id="search_query_top" name="search_query" placeholder="Rechercher" value="" />
		<button type="submit" name="submit_search" class="btn btn-default button-search">
			<span>Rechercher</span>
		</button>
	</form>
</div>
<!-- /Block search module TOP --><?php }} ?>
