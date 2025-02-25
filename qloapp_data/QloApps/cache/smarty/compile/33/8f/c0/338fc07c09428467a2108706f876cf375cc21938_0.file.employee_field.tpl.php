<?php
/* Smarty version 3.1.39, created on 2025-02-24 02:40:52
  from '/home/qloapps/www/QloApps/admin/themes/default/template/controllers/logs/employee_field.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.39',
  'unifunc' => 'content_67bb8edc08ca63_47344255',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '338fc07c09428467a2108706f876cf375cc21938' => 
    array (
      0 => '/home/qloapps/www/QloApps/admin/themes/default/template/controllers/logs/employee_field.tpl',
      1 => 1728563708,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_67bb8edc08ca63_47344255 (Smarty_Internal_Template $_smarty_tpl) {
echo htmlspecialchars($_smarty_tpl->tpl_vars['employee_name']->value, ENT_QUOTES, 'UTF-8', true);?>

<br />
(<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['employee_email']->value, ENT_QUOTES, 'UTF-8', true);?>
)
<?php }
}
