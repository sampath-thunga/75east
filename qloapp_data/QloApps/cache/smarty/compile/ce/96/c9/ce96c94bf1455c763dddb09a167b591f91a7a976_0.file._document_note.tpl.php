<?php
/* Smarty version 3.1.39, created on 2025-02-24 02:40:52
  from '/home/qloapps/www/QloApps/admin/themes/default/template/controllers/orders/modals/_document_note.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.39',
  'unifunc' => 'content_67bb8edcaab5a6_99857110',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'ce96c94bf1455c763dddb09a167b591f91a7a976' => 
    array (
      0 => '/home/qloapps/www/QloApps/admin/themes/default/template/controllers/orders/modals/_document_note.tpl',
      1 => 1728563708,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_67bb8edcaab5a6_99857110 (Smarty_Internal_Template $_smarty_tpl) {
?>
<div class="modal-body">
    <form  action="<?php echo $_smarty_tpl->tpl_vars['current_index']->value;?>
&amp;vieworder&amp;id_order=<?php echo $_smarty_tpl->tpl_vars['order']->value->id;
if ((isset($_GET['token']))) {?>&amp;token=<?php echo htmlspecialchars($_GET['token'], ENT_QUOTES, 'UTF-8', true);
}?>" method="post">
        <div class="form-group">
            <label class="control-label"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Note Detail'),$_smarty_tpl ) );?>
</label>
            <input type="hidden" name="id_order_invoice" id="id_order_invoice" value="" />
            <textarea name="note" id="editNote" class="edit-note textarea-autosize"></textarea>
        </div>
        <button class="btn btn-default" type="submit" name="submitEditNote" style="display:none" id="submitEditNote"></button>
    </form>

    <?php if ((isset($_smarty_tpl->tpl_vars['loaderImg']->value)) && $_smarty_tpl->tpl_vars['loaderImg']->value) {?>
        <div class="loading_overlay">
            <img src='<?php echo $_smarty_tpl->tpl_vars['loaderImg']->value;?>
' class="loading-img"/>
        </div>
    <?php }?>
</div>
<?php }
}
