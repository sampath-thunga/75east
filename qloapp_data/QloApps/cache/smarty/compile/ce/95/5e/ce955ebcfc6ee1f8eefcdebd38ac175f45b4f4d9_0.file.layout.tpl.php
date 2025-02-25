<?php
/* Smarty version 3.1.39, created on 2025-02-24 02:40:49
  from '/home/qloapps/www/QloApps/themes/hotel-reservation-theme/layout.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.39',
  'unifunc' => 'content_67bb8ed9644311_85633387',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'ce955ebcfc6ee1f8eefcdebd38ac175f45b4f4d9' => 
    array (
      0 => '/home/qloapps/www/QloApps/themes/hotel-reservation-theme/layout.tpl',
      1 => 1728563708,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_67bb8ed9644311_85633387 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_assignInScope('left_column_size', 0);
$_smarty_tpl->_assignInScope('right_column_size', 0);
if ((isset($_smarty_tpl->tpl_vars['HOOK_LEFT_COLUMN']->value)) && trim($_smarty_tpl->tpl_vars['HOOK_LEFT_COLUMN']->value) && !$_smarty_tpl->tpl_vars['hide_left_column']->value) {
$_smarty_tpl->_assignInScope('left_column_size', 3);
}
if ((isset($_smarty_tpl->tpl_vars['HOOK_RIGHT_COLUMN']->value)) && trim($_smarty_tpl->tpl_vars['HOOK_RIGHT_COLUMN']->value) && !$_smarty_tpl->tpl_vars['hide_right_column']->value) {
$_smarty_tpl->_assignInScope('right_column_size', 3);
}
if (!empty($_smarty_tpl->tpl_vars['display_header']->value)) {
$_smarty_tpl->_subTemplateRender(((string)$_smarty_tpl->tpl_vars['tpl_dir']->value)."./header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('HOOK_HEADER'=>$_smarty_tpl->tpl_vars['HOOK_HEADER']->value), 0, true);
}
if (!empty($_smarty_tpl->tpl_vars['template']->value)) {
echo $_smarty_tpl->tpl_vars['template']->value;
}
if (!empty($_smarty_tpl->tpl_vars['display_footer']->value)) {
$_smarty_tpl->_subTemplateRender(((string)$_smarty_tpl->tpl_vars['tpl_dir']->value)."./footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, true);
}
if (!empty($_smarty_tpl->tpl_vars['live_edit']->value)) {
echo $_smarty_tpl->tpl_vars['live_edit']->value;
}
}
}
