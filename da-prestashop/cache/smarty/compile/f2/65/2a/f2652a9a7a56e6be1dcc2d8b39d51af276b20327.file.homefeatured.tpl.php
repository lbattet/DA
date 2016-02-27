<?php /* Smarty version Smarty-3.1.19, created on 2016-02-27 19:25:41
         compiled from "/Users/liviobattet/www/DA/da-prestashop/themes/da-theme/modules/homefeatured/homefeatured.tpl" */ ?>
<?php /*%%SmartyHeaderCode:7809695056d1ea252f2d44-20410563%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'f2652a9a7a56e6be1dcc2d8b39d51af276b20327' => 
    array (
      0 => '/Users/liviobattet/www/DA/da-prestashop/themes/da-theme/modules/homefeatured/homefeatured.tpl',
      1 => 1456595221,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '7809695056d1ea252f2d44-20410563',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'products' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_56d1ea25311173_69315216',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_56d1ea25311173_69315216')) {function content_56d1ea25311173_69315216($_smarty_tpl) {?>
<?php if (isset($_smarty_tpl->tpl_vars['products']->value)&&$_smarty_tpl->tpl_vars['products']->value) {?>
	<?php echo $_smarty_tpl->getSubTemplate (((string)$_smarty_tpl->tpl_vars['tpl_dir']->value)."./product-list.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('class'=>'homefeatured tab-pane','id'=>'homefeatured'), 0);?>

<?php } else { ?>
<ul id="homefeatured" class="homefeatured tab-pane">
	<li class="alert alert-info"><?php echo smartyTranslate(array('s'=>'No featured products at this time.','mod'=>'homefeatured'),$_smarty_tpl);?>
</li>
</ul>
<?php }?><?php }} ?>
