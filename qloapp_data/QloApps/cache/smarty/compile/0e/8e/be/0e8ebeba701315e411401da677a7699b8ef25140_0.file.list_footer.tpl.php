<?php
/* Smarty version 3.1.39, created on 2025-02-24 02:40:51
  from '/home/qloapps/www/QloApps/admin/themes/default/template/controllers/supply_orders_receipt_history/helpers/list/list_footer.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.39',
  'unifunc' => 'content_67bb8edb1f24a6_43624509',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '0e8ebeba701315e411401da677a7699b8ef25140' => 
    array (
      0 => '/home/qloapps/www/QloApps/admin/themes/default/template/controllers/supply_orders_receipt_history/helpers/list/list_footer.tpl',
      1 => 1728563708,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_67bb8edb1f24a6_43624509 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>

<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_27382408167bb8edb1cce21_22468907', "footer");
?>

<?php $_smarty_tpl->inheritance->endChild($_smarty_tpl, "helpers/list/list_footer.tpl");
}
/* {block "footer"} */
class Block_27382408167bb8edb1cce21_22468907 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'footer' => 
  array (
    0 => 'Block_27382408167bb8edb1cce21_22468907',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

<div class="panel-footer">
	<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['toolbar_btn']->value, 'btn', false, 'k');
$_smarty_tpl->tpl_vars['btn']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['k']->value => $_smarty_tpl->tpl_vars['btn']->value) {
$_smarty_tpl->tpl_vars['btn']->do_else = false;
?>
		<?php if ($_smarty_tpl->tpl_vars['k']->value == 'back') {?>
			<?php $_smarty_tpl->_assignInScope('back_button', $_smarty_tpl->tpl_vars['btn']->value);?>
			<?php break 1;?>
		<?php }?>
	<?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
	<?php if ((isset($_smarty_tpl->tpl_vars['back_button']->value))) {?>
		<a id="desc-<?php echo $_smarty_tpl->tpl_vars['table']->value;?>
-<?php if ((isset($_smarty_tpl->tpl_vars['back_button']->value['imgclass']))) {
echo $_smarty_tpl->tpl_vars['back_button']->value['imgclass'];
} else {
echo $_smarty_tpl->tpl_vars['k']->value;
}?>" class="btn btn-default<?php if ((isset($_smarty_tpl->tpl_vars['back_button']->value['target'])) && $_smarty_tpl->tpl_vars['back_button']->value['target']) {?> _blank<?php }?>"<?php if ((isset($_smarty_tpl->tpl_vars['back_button']->value['href']))) {?> href="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['back_button']->value['href'], ENT_QUOTES, 'UTF-8', true);?>
"<?php }
if ((isset($_smarty_tpl->tpl_vars['back_button']->value['js'])) && $_smarty_tpl->tpl_vars['back_button']->value['js']) {?> onclick="<?php echo $_smarty_tpl->tpl_vars['back_button']->value['js'];?>
"<?php }?>>
			<i class="process-icon-back<?php if ((isset($_smarty_tpl->tpl_vars['back_button']->value['class']))) {?> <?php echo $_smarty_tpl->tpl_vars['back_button']->value['class'];
}?>" ></i> <span<?php if ((isset($_smarty_tpl->tpl_vars['back_button']->value['force_desc'])) && $_smarty_tpl->tpl_vars['back_button']->value['force_desc'] == true) {?> class="locked"<?php }?>><?php echo $_smarty_tpl->tpl_vars['back_button']->value['desc'];?>
</span>
		</a>
	<?php }?>
	<a href="" class="btn btn-default pull-right" onclick="if (confirm('<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Update selected items?'),$_smarty_tpl ) );?>
'))sendBulkAction($(this).closest('form').get(0), 'submitBulkUpdatesupply_order_detail'); return false;">
		<i class="process-icon-refresh" ></i> <span><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Update selected items'),$_smarty_tpl ) );?>
</span>
	</a>
</div>
<?php
}
}
/* {/block "footer"} */
}
