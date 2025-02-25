<?php
/* Smarty version 3.1.39, created on 2025-02-24 02:40:57
  from '/home/qloapps/www/QloApps/admin/themes/default/template/helpers/list/list_action_supply_order_create_from_template.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.39',
  'unifunc' => 'content_67bb8ee18f8d49_22030692',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '7b2c12913507302a5ce913bdf01ff1942a1d4a92' => 
    array (
      0 => '/home/qloapps/www/QloApps/admin/themes/default/template/helpers/list/list_action_supply_order_create_from_template.tpl',
      1 => 1728563708,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_67bb8ee18f8d49_22030692 (Smarty_Internal_Template $_smarty_tpl) {
?><a href="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['href']->value, ENT_QUOTES, 'UTF-8', true);?>
" onclick="return confirm('<?php echo $_smarty_tpl->tpl_vars['confirm']->value;?>
');" title="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['action']->value, ENT_QUOTES, 'UTF-8', true);?>
">
	<i class="icon-copy"></i> <?php echo $_smarty_tpl->tpl_vars['action']->value;?>

</a><?php }
}
