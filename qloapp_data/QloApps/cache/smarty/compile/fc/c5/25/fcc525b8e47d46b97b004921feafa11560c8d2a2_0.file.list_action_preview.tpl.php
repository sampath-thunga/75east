<?php
/* Smarty version 3.1.39, created on 2025-02-24 02:40:57
  from '/home/qloapps/www/QloApps/admin/themes/default/template/helpers/list/list_action_preview.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.39',
  'unifunc' => 'content_67bb8ee1a39632_57531443',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'fcc525b8e47d46b97b004921feafa11560c8d2a2' => 
    array (
      0 => '/home/qloapps/www/QloApps/admin/themes/default/template/helpers/list/list_action_preview.tpl',
      1 => 1728563708,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_67bb8ee1a39632_57531443 (Smarty_Internal_Template $_smarty_tpl) {
?><a href="<?php echo $_smarty_tpl->tpl_vars['href']->value;?>
" title="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['action']->value, ENT_QUOTES, 'UTF-8', true);?>
" target="_blank">
	<i class="icon-eye"></i> <?php echo $_smarty_tpl->tpl_vars['action']->value;?>

</a>
<?php }
}
