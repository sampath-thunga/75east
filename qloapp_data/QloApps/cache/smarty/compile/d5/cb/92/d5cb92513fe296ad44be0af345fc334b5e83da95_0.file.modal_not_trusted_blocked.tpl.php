<?php
/* Smarty version 3.1.39, created on 2025-02-24 02:40:54
  from '/home/qloapps/www/QloApps/admin/themes/default/template/controllers/modules/modal_not_trusted_blocked.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.39',
  'unifunc' => 'content_67bb8edebc2f30_95438137',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'd5cb92513fe296ad44be0af345fc334b5e83da95' => 
    array (
      0 => '/home/qloapps/www/QloApps/admin/themes/default/template/controllers/modules/modal_not_trusted_blocked.tpl',
      1 => 1728563708,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_67bb8edebc2f30_95438137 (Smarty_Internal_Template $_smarty_tpl) {
?>
<div class="modal-body">
	<div class="alert alert-warning">
		<h3><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'This module could not be verified by PrestaShop.'),$_smarty_tpl ) );?>
</h3>

		<p><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>"This generally happens when the module isn't distributed through our official marketplace, PrestaShop Addons - or when your server failed to communicate with PrestaShop Addons."),$_smarty_tpl ) );?>
</p>
	</div>

	<div class="row">
		<div class="col-sm-2" style="text-align: center;">
			<img id="untrusted-module-logo" class="" src="" alt="">
		</div>
		<div class="col-sm-10">
			<table class="table">
				<tr>
					<td><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Module'),$_smarty_tpl ) );?>
</td>
					<td><strong><span class="module-display-name-placeholder"></span></strong></td>
				</tr>
				<tr>
					<td><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Author'),$_smarty_tpl ) );?>
</td>
					<td><strong><span class="author-name-placeholder"></span></strong></td>
				</tr>
			</table>
		</div>

		<div class="col-sm-12" style="text-align: center; padding-top: 12px;">
			<button type="button" class="btn btn-default" data-dismiss="modal"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Back to modules list'),$_smarty_tpl ) );?>
</button>
		</div>
	</div>
</div>

<div class="modal-footer">
	<div class="alert alert-info">
		<p><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Since you may not have installed this module from PrestaShop Addons, we cannot assert that the module is complying with our safety requirements (e.g. that it is not adding some undisclosed functionalities such as ads, hidden links, spam, etc...).'),$_smarty_tpl ) );?>
</p>

		<p><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'You can search for similar modules on the official marketplace.'),$_smarty_tpl ) );?>
</p>

		<p><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>"[1]Click here to browse our catalog on PrestaShop Addons[/1].",'tags'=>array('<a class="catalog-link" href="#">')),$_smarty_tpl ) );?>

	</div>
</div><?php }
}
