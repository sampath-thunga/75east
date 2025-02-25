<?php
/* Smarty version 3.1.39, created on 2025-02-24 02:40:47
  from '/home/qloapps/www/QloApps/themes/hotel-reservation-theme/category-count.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.39',
  'unifunc' => 'content_67bb8ed7144ec7_56933087',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'b1ae4d3cd3b15e8b7fafc31e53f25608f46b91d8' => 
    array (
      0 => '/home/qloapps/www/QloApps/themes/hotel-reservation-theme/category-count.tpl',
      1 => 1728563708,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_67bb8ed7144ec7_56933087 (Smarty_Internal_Template $_smarty_tpl) {
?><span class="heading-counter"><?php if (((isset($_smarty_tpl->tpl_vars['category']->value)) && $_smarty_tpl->tpl_vars['category']->value->id == 1) || ((isset($_smarty_tpl->tpl_vars['nb_products']->value)) && $_smarty_tpl->tpl_vars['nb_products']->value == 0)) {
echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'There are no products in this category.'),$_smarty_tpl ) );
} else {
if ((isset($_smarty_tpl->tpl_vars['nb_products']->value)) && $_smarty_tpl->tpl_vars['nb_products']->value == 1) {
echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'There is 1 product.'),$_smarty_tpl ) );
} elseif ((isset($_smarty_tpl->tpl_vars['nb_products']->value))) {
echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'There are %d products.','sprintf'=>$_smarty_tpl->tpl_vars['nb_products']->value),$_smarty_tpl ) );
}
}?></span>
<?php }
}
