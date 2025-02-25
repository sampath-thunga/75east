<?php
/* Smarty version 3.1.39, created on 2025-02-24 02:40:52
  from '/home/qloapps/www/QloApps/admin/themes/default/template/controllers/orders/modals/_traveller_form.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.39',
  'unifunc' => 'content_67bb8edce89dc6_25637248',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'cf9dccf677cd1c939a76c3448cf08fab35467b05' => 
    array (
      0 => '/home/qloapps/www/QloApps/admin/themes/default/template/controllers/orders/modals/_traveller_form.tpl',
      1 => 1728563708,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_67bb8edce89dc6_25637248 (Smarty_Internal_Template $_smarty_tpl) {
?>
<div class="modal-body">
    <div class="text-left errors-wrap"></div>
    <form id="customer-guest-details-form">
        <div class="form-group row">
            <div class="col-sm-2">
            <label class="control-label"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Title'),$_smarty_tpl ) );?>
</label>
                <select name="id_gender">
                    <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['genders']->value, 'gender', false, 'k');
$_smarty_tpl->tpl_vars['gender']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['k']->value => $_smarty_tpl->tpl_vars['gender']->value) {
$_smarty_tpl->tpl_vars['gender']->do_else = false;
?>
                        <option value="<?php echo $_smarty_tpl->tpl_vars['gender']->value->id_gender;?>
"<?php if ($_smarty_tpl->tpl_vars['customerGuestDetail']->value->id_gender == $_smarty_tpl->tpl_vars['gender']->value->id_gender) {?> selected="selected"<?php }?>><?php echo $_smarty_tpl->tpl_vars['gender']->value->name;?>
</option>
                    <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
                </select>
            </div>
            <div class="col-sm-5">
                <label class="control-label"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'First Name'),$_smarty_tpl ) );?>
</label>
                <input type="text" value="<?php echo $_smarty_tpl->tpl_vars['customerGuestDetail']->value->firstname;?>
" name="firstname">
            </div>
            <div class="col-sm-5">
                <label class="control-label"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Last Name'),$_smarty_tpl ) );?>
</label>
                <input type="text" value="<?php echo $_smarty_tpl->tpl_vars['customerGuestDetail']->value->lastname;?>
" name="lastname">
            </div>
        </div>
        <div class="form-group row">
            <div class="col-sm-6">
                <label class="control-label"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Email'),$_smarty_tpl ) );?>
</label>
                <input type="text" value="<?php echo $_smarty_tpl->tpl_vars['customerGuestDetail']->value->email;?>
" name="email">
            </div>
            <div class="col-sm-6">
                <label class="control-label"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Phone'),$_smarty_tpl ) );?>
</label>
                <input type="text" value="<?php echo $_smarty_tpl->tpl_vars['customerGuestDetail']->value->phone;?>
" name="phone">
            </div>
        </div>
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
