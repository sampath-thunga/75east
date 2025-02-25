<?php
/* Smarty version 3.1.39, created on 2025-02-24 02:40:53
  from '/home/qloapps/www/QloApps/admin/themes/default/template/controllers/orders/_select_payment.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.39',
  'unifunc' => 'content_67bb8edd554900_03549289',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '722da815f89b31c68fbe568010fb2bc405bbb4e4' => 
    array (
      0 => '/home/qloapps/www/QloApps/admin/themes/default/template/controllers/orders/_select_payment.tpl',
      1 => 1728563708,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_67bb8edd554900_03549289 (Smarty_Internal_Template $_smarty_tpl) {
?>
<datalist id="payment_module_name_list">
    <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['payment_modules']->value, 'payment_module');
$_smarty_tpl->tpl_vars['payment_module']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['payment_module']->value) {
$_smarty_tpl->tpl_vars['payment_module']->do_else = false;
?>
        <option value="<?php echo $_smarty_tpl->tpl_vars['payment_module']->value->displayName;?>
" data-name="<?php echo $_smarty_tpl->tpl_vars['payment_module']->value->name;?>
" data-payment-type="<?php echo $_smarty_tpl->tpl_vars['payment_module']->value->payment_type;?>
">
    <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
</datalist>
<?php }
}
