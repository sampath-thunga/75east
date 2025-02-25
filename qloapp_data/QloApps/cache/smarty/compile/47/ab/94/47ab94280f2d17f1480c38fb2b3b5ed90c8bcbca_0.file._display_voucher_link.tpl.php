<?php
/* Smarty version 3.1.39, created on 2025-02-24 02:40:54
  from '/home/qloapps/www/QloApps/admin/themes/default/template/controllers/slip/_display_voucher_link.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.39',
  'unifunc' => 'content_67bb8ede0e9152_04595614',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '47ab94280f2d17f1480c38fb2b3b5ed90c8bcbca' => 
    array (
      0 => '/home/qloapps/www/QloApps/admin/themes/default/template/controllers/slip/_display_voucher_link.tpl',
      1 => 1728563708,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_67bb8ede0e9152_04595614 (Smarty_Internal_Template $_smarty_tpl) {
?>
<a class="btn btn-link" href="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['link']->value->getAdminLink('AdminCartRules'), ENT_QUOTES, 'UTF-8', true);?>
&updatecart_rule&id_cart_rule=<?php echo $_smarty_tpl->tpl_vars['id_cart_rule']->value;?>
" target="_blank">
    #<?php echo $_smarty_tpl->tpl_vars['id_cart_rule']->value;?>

</a>
<?php }
}
