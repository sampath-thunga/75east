<?php
/* Smarty version 3.1.39, created on 2025-02-24 02:40:48
  from '/home/qloapps/www/QloApps/admin/themes/default/template/controllers/supply_orders_change_state/helpers/form/form.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.39',
  'unifunc' => 'content_67bb8ed8d9ac22_75213798',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '42344a6bd2fba4b5be95cf883605eaa086c91f1b' => 
    array (
      0 => '/home/qloapps/www/QloApps/admin/themes/default/template/controllers/supply_orders_change_state/helpers/form/form.tpl',
      1 => 1728563708,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_67bb8ed8d9ac22_75213798 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_149076158367bb8ed8d6e087_93768699', "other_input");
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_11658190067bb8ed8d8b292_91879906', "other_fieldsets");
?>

<?php $_smarty_tpl->inheritance->endChild($_smarty_tpl, "helpers/form/form.tpl");
}
/* {block "other_input"} */
class Block_149076158367bb8ed8d6e087_93768699 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'other_input' => 
  array (
    0 => 'Block_149076158367bb8ed8d6e087_93768699',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_checkPlugins(array(0=>array('file'=>'/home/qloapps/www/QloApps/tools/smarty/plugins/modifier.regex_replace.php','function'=>'smarty_modifier_regex_replace',),));
?>


<?php if ((isset($_smarty_tpl->tpl_vars['supply_order']->value)) && $_smarty_tpl->tpl_vars['supply_order']->value->id > 0 && (isset($_smarty_tpl->tpl_vars['supply_order_states']->value)) && !(isset($_smarty_tpl->tpl_vars['printed']->value))) {
$_smarty_tpl->_assignInScope('printed', 1);
echo '<script'; ?>
>
$(document).ready(function() {
	$('#id_supply_order_state option').each(function () {
		
		if ($(this).attr('disabled') == false)
			$(this).attr('selected', true);
		
		return ($(this).attr('disabled') == true);
		
	});
});
<?php echo '</script'; ?>
>
<?php $_smarty_tpl->_assignInScope('order_state', smarty_modifier_regex_replace($_smarty_tpl->tpl_vars['supply_order_state']->value->name[$_smarty_tpl->tpl_vars['employee']->value->id_lang],"/[^A-Za-z_ \t]/",''));?>
<div class="alert alert-warning"><strong><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>sprintf('Current order status: %s',$_smarty_tpl->tpl_vars['order_state']->value)),$_smarty_tpl ) );?>
</strong></div>
<div class="alert alert-info"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Choose the new status for your order'),$_smarty_tpl ) );?>
</div>
<div class="form-horizontal">
	<input type="hidden" name="id_supply_order" id="id_supply_order" value="<?php echo $_smarty_tpl->tpl_vars['supply_order']->value->id;?>
">
	<div class="form-group">
		<label class="control-label col-lg-3"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Status of the order:'),$_smarty_tpl ) );?>
</label>						
		<div class="col-lg-9">
			<select name="id_supply_order_state" id="id_supply_order_state">
			<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['supply_order_states']->value, 'state');
$_smarty_tpl->tpl_vars['state']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['state']->value) {
$_smarty_tpl->tpl_vars['state']->do_else = false;
?>
				<option value="<?php echo $_smarty_tpl->tpl_vars['state']->value['id_supply_order_state'];?>
" <?php if ($_smarty_tpl->tpl_vars['state']->value['allowed'] == 0) {?> disabled="disabled" <?php }?>><?php echo $_smarty_tpl->tpl_vars['state']->value['name'];?>
</option>
			<?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
			</select>
		</div>
	</div>
</div>
<div class="margin-form">
<input type="submit" id="<?php echo $_smarty_tpl->tpl_vars['table']->value;?>
_form_submit_btn" value="<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Save'),$_smarty_tpl ) );?>
" name="submitChangestate" class="button" style="display: none;">
</div>
<?php }
}
}
/* {/block "other_input"} */
/* {block "other_fieldsets"} */
class Block_11658190067bb8ed8d8b292_91879906 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'other_fieldsets' => 
  array (
    0 => 'Block_11658190067bb8ed8d8b292_91879906',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>
							
<?php if ((isset($_smarty_tpl->tpl_vars['supply_order_state']->value)) && $_smarty_tpl->tpl_vars['supply_order_state']->value->editable == false && (isset($_smarty_tpl->tpl_vars['supply_order']->value))) {?>
<div class="panel">
	<h3><i class="icon-download-alt"></i> <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Print the supply order form'),$_smarty_tpl ) );?>
</h3>
	<a href="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['link']->value->getAdminLink('AdminPdf'), ENT_QUOTES, 'UTF-8', true);?>
&amp;submitAction=generateSupplyOrderFormPDF&amp;id_supply_order=<?php echo intval($_smarty_tpl->tpl_vars['supply_order']->value->id);?>
" onclick="return !window.open(this.href);" title="Export as PDF" class="btn btn-default"><i class="icon-download-alt"></i> <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Click here to download the supply order form.'),$_smarty_tpl ) );?>
.</a>
</div>
<?php }?>

<?php
}
}
/* {/block "other_fieldsets"} */
}
