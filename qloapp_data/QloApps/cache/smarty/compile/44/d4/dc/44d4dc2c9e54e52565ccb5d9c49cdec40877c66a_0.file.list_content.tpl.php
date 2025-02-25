<?php
/* Smarty version 3.1.39, created on 2025-02-24 02:40:48
  from '/home/qloapps/www/QloApps/admin/themes/default/template/controllers/products/helpers/list/list_content.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.39',
  'unifunc' => 'content_67bb8ed8342830_97093750',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '44d4dc2c9e54e52565ccb5d9c49cdec40877c66a' => 
    array (
      0 => '/home/qloapps/www/QloApps/admin/themes/default/template/controllers/products/helpers/list/list_content.tpl',
      1 => 1728563708,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_67bb8ed8342830_97093750 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>



<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_125307858167bb8ed8318516_24481419', 'td_content');
?>

<?php $_smarty_tpl->inheritance->endChild($_smarty_tpl, 'helpers/list/list_content.tpl');
}
/* {block 'td_content'} */
class Block_125307858167bb8ed8318516_24481419 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'td_content' => 
  array (
    0 => 'Block_125307858167bb8ed8318516_24481419',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

	<?php if ((isset($_smarty_tpl->tpl_vars['tr']->value[$_smarty_tpl->tpl_vars['key']->value])) && (isset($_smarty_tpl->tpl_vars['params']->value['position']))) {?>
		<?php if ($_smarty_tpl->tpl_vars['order_by']->value == 'position' && $_smarty_tpl->tpl_vars['order_way']->value != 'DESC') {?>
			<?php $_smarty_tpl->_assignInScope('filters_has_value_no_location_hotel', false);?>

			<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['fields_display']->value, 'params', false, 'key');
$_smarty_tpl->tpl_vars['params']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['key']->value => $_smarty_tpl->tpl_vars['params']->value) {
$_smarty_tpl->tpl_vars['params']->do_else = false;
?>
				<?php if ($_smarty_tpl->tpl_vars['key']->value != 'id_category_default' && ((isset($_smarty_tpl->tpl_vars['params']->value['value'])) && $_smarty_tpl->tpl_vars['params']->value['value'] !== false && $_smarty_tpl->tpl_vars['params']->value['value'] !== '')) {?>
					<?php if (is_array($_smarty_tpl->tpl_vars['params']->value['value']) && trim(implode('',$_smarty_tpl->tpl_vars['params']->value['value'])) == '') {?>
						<?php continue 1;?>
					<?php }?>

					<?php $_smarty_tpl->_assignInScope('filters_has_value_no_location_hotel', true);?>
					<?php break 1;?>
				<?php }?>
			<?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>

			<?php if (!$_smarty_tpl->tpl_vars['filters_has_value_no_location_hotel']->value) {?>
				<div class="dragGroup">
					<div class="positions">
						<?php echo $_smarty_tpl->tpl_vars['tr']->value[$_smarty_tpl->tpl_vars['key']->value]['position']+1;?>

					</div>
				</div>
			<?php } else { ?>
				<?php echo $_smarty_tpl->tpl_vars['tr']->value[$_smarty_tpl->tpl_vars['key']->value]['position']+1;?>

			<?php }?>
		<?php } else { ?>
			<?php echo $_smarty_tpl->tpl_vars['tr']->value[$_smarty_tpl->tpl_vars['key']->value]['position']+1;?>

		<?php }?>
	<?php } else { ?>
		<?php 
$_smarty_tpl->inheritance->callParent($_smarty_tpl, $this, '{$smarty.block.parent}');
?>

	<?php }
}
}
/* {/block 'td_content'} */
}
