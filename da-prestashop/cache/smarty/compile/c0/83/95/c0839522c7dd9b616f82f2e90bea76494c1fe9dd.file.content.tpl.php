<?php /* Smarty version Smarty-3.1.19, created on 2016-02-27 15:03:13
         compiled from "/Users/liviobattet/www/DA/da-prestashop/admin2370mn5jy/themes/default/template/content.tpl" */ ?>
<?php /*%%SmartyHeaderCode:99601861956d1aca14feeb3-19139594%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'c0839522c7dd9b616f82f2e90bea76494c1fe9dd' => 
    array (
      0 => '/Users/liviobattet/www/DA/da-prestashop/admin2370mn5jy/themes/default/template/content.tpl',
      1 => 1452095428,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '99601861956d1aca14feeb3-19139594',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'content' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_56d1aca150a2b7_39316481',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_56d1aca150a2b7_39316481')) {function content_56d1aca150a2b7_39316481($_smarty_tpl) {?>
<div id="ajax_confirmation" class="alert alert-success hide"></div>

<div id="ajaxBox" style="display:none"></div>


<div class="row">
	<div class="col-lg-12">
		<?php if (isset($_smarty_tpl->tpl_vars['content']->value)) {?>
			<?php echo $_smarty_tpl->tpl_vars['content']->value;?>

		<?php }?>
	</div>
</div><?php }} ?>
