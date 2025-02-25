<?php
/* Smarty version 3.1.39, created on 2025-02-24 02:40:46
  from '/home/qloapps/www/QloApps/themes/hotel-reservation-theme/404.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.39',
  'unifunc' => 'content_67bb8ed680eef9_08070576',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '51bc1f4b37410113a3ded6288253d456fb9bb172' => 
    array (
      0 => '/home/qloapps/www/QloApps/themes/hotel-reservation-theme/404.tpl',
      1 => 1728563708,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_67bb8ed680eef9_08070576 (Smarty_Internal_Template $_smarty_tpl) {
?><div class="pagenotfound">
	<img class="img-responsive" src="<?php echo $_smarty_tpl->tpl_vars['img_dir']->value;?>
404.png">

	<h1><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Page not found!!!'),$_smarty_tpl ) );?>
</h1>

	<p>
		<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'We\'re sorry, but the Web address you\'ve entered is no longer available.'),$_smarty_tpl ) );?>

	</p>

	<div class="buttons">
		<a class="btn btn-primary" href="<?php if ((isset($_smarty_tpl->tpl_vars['force_ssl']->value)) && $_smarty_tpl->tpl_vars['force_ssl']->value) {
echo $_smarty_tpl->tpl_vars['base_dir_ssl']->value;
} else {
echo $_smarty_tpl->tpl_vars['base_dir']->value;
}?>" title="<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Home'),$_smarty_tpl ) );?>
">
			<span><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Home Page'),$_smarty_tpl ) );?>
</span>
		</a>
	</div>
</div>
<?php }
}
