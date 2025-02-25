<?php
/* Smarty version 3.1.39, created on 2025-02-24 02:40:55
  from '/home/qloapps/www/QloApps/admin/themes/default/template/controllers/localization/content.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.39',
  'unifunc' => 'content_67bb8edfe9e470_20374715',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '99a26e02a542fa079cfc6c46e8a3e69547d1121c' => 
    array (
      0 => '/home/qloapps/www/QloApps/admin/themes/default/template/controllers/localization/content.tpl',
      1 => 1728563708,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_67bb8edfe9e470_20374715 (Smarty_Internal_Template $_smarty_tpl) {
if ((isset($_smarty_tpl->tpl_vars['localization_form']->value))) {
echo $_smarty_tpl->tpl_vars['localization_form']->value;
}
if ((isset($_smarty_tpl->tpl_vars['localization_options']->value))) {
echo $_smarty_tpl->tpl_vars['localization_options']->value;
}
echo '<script'; ?>
 type="text/javascript">
	$(document).ready(function() {
		$('#PS_CURRENCY_DEFAULT').change(function(e) {
			alert('Before changing default currency, we strongly recommend that you enable maintenance mode from Preferences > Maintenance page because any change in default currency requires manual adjustment of price of each room type.');
		});
	});
<?php echo '</script'; ?>
><?php }
}
