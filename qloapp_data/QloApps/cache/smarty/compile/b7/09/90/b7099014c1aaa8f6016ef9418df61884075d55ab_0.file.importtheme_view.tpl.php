<?php
/* Smarty version 3.1.39, created on 2025-02-24 02:40:55
  from '/home/qloapps/www/QloApps/admin/themes/default/template/controllers/themes/helpers/view/importtheme_view.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.39',
  'unifunc' => 'content_67bb8edf455968_02254880',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'b7099014c1aaa8f6016ef9418df61884075d55ab' => 
    array (
      0 => '/home/qloapps/www/QloApps/admin/themes/default/template/controllers/themes/helpers/view/importtheme_view.tpl',
      1 => 1728563708,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_67bb8edf455968_02254880 (Smarty_Internal_Template $_smarty_tpl) {
?><div class="panel">
    <h3>
        <i class="icon-picture"></i> <?php echo $_smarty_tpl->tpl_vars['add_new_theme_label']->value;?>
 <?php if ($_smarty_tpl->tpl_vars['context_mode']->value == Context::MODE_HOST) {
echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'(Advanced)'),$_smarty_tpl ) );
}?>
    </h3>
    <p><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Duplicate an existing theme and edit it; or create a new theme from scratch! Recommended for advanced users only.'),$_smarty_tpl ) );?>
</p>
    <a class="btn btn-default" href="<?php echo $_smarty_tpl->tpl_vars['add_new_theme_href']->value;?>
"><i class="icon-plus"></i> <?php echo $_smarty_tpl->tpl_vars['add_new_theme_label']->value;?>
</a>
</div>
<?php }
}
