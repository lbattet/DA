<?php /* Smarty version Smarty-3.1.19, created on 2016-02-27 13:59:53
         compiled from "/Users/liviobattet/www/DA/da-prestashop/admin/themes/default/template/helpers/tree/tree_node_folder.tpl" */ ?>
<?php /*%%SmartyHeaderCode:71227987456d19dc96bfa77-91514590%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'bffc03692f585f0bf7bd314dbc4c5f583c3859e4' => 
    array (
      0 => '/Users/liviobattet/www/DA/da-prestashop/admin/themes/default/template/helpers/tree/tree_node_folder.tpl',
      1 => 1452095428,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '71227987456d19dc96bfa77-91514590',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'node' => 0,
    'children' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_56d19dc96cea68_98597035',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_56d19dc96cea68_98597035')) {function content_56d19dc96cea68_98597035($_smarty_tpl) {?><?php if (!is_callable('smarty_modifier_escape')) include '/Users/liviobattet/www/DA/da-prestashop/tools/smarty/plugins/modifier.escape.php';
?>
<li class="tree-folder">
	<span class="tree-folder-name">
		<i class="icon-folder-close"></i>
		<label class="tree-toggler"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['node']->value['name'], ENT_QUOTES, 'UTF-8', true);?>
</label>
	</span>
	<ul class="tree">
		<?php echo smarty_modifier_escape($_smarty_tpl->tpl_vars['children']->value, 'UTF-8');?>

	</ul>
</li><?php }} ?>
