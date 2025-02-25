<?php
/* Smarty version 3.1.39, created on 2025-02-24 02:40:54
  from '/home/qloapps/www/QloApps/admin/themes/default/template/controllers/slip/_redeem_status.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.39',
  'unifunc' => 'content_67bb8ede1de3c5_46566020',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'f38ae09076cbb85cea4ab403c04df18a154dab84' => 
    array (
      0 => '/home/qloapps/www/QloApps/admin/themes/default/template/controllers/slip/_redeem_status.tpl',
      1 => 1728563708,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_67bb8ede1de3c5_46566020 (Smarty_Internal_Template $_smarty_tpl) {
if ($_smarty_tpl->tpl_vars['redeem_status']->value == OrderSlip::REDEEM_STATUS_REDEEMED) {?>
    <span class="badge badge-danger"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Redeemed'),$_smarty_tpl ) );?>
</span>
<?php } else { ?>
    <span class="badge badge-success"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Active'),$_smarty_tpl ) );?>
</span>
<?php }
}
}
