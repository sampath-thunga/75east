<?php
/* Smarty version 3.1.39, created on 2025-02-24 02:40:52
  from '/home/qloapps/www/QloApps/admin/themes/default/template/controllers/maintenance/helpers/options/options.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.39',
  'unifunc' => 'content_67bb8edc700059_47625200',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '9a900f4679347bdbf29c80e9c3c630ca36d4e4f7' => 
    array (
      0 => '/home/qloapps/www/QloApps/admin/themes/default/template/controllers/maintenance/helpers/options/options.tpl',
      1 => 1728563708,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_67bb8edc700059_47625200 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_145451913667bb8edc6ee880_02575768', "input");
$_smarty_tpl->inheritance->endChild($_smarty_tpl, "helpers/options/options.tpl");
}
/* {block "input"} */
class Block_145451913667bb8edc6ee880_02575768 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'input' => 
  array (
    0 => 'Block_145451913667bb8edc6ee880_02575768',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

	<?php if ($_smarty_tpl->tpl_vars['field']->value['type'] == 'maintenance_ip') {?>
		<?php echo $_smarty_tpl->tpl_vars['field']->value['script_ip'];?>

		<div class="col-lg-9">
			<div class="row">
				<div class="col-lg-8">
					<input type="text"<?php if ((isset($_smarty_tpl->tpl_vars['field']->value['id']))) {?> id="<?php echo $_smarty_tpl->tpl_vars['field']->value['id'];?>
"<?php }?> size="<?php if ((isset($_smarty_tpl->tpl_vars['field']->value['size']))) {
echo intval($_smarty_tpl->tpl_vars['field']->value['size']);
} else { ?>5<?php }?>" name="<?php echo $_smarty_tpl->tpl_vars['key']->value;?>
" value="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['field']->value['value'], ENT_QUOTES, 'UTF-8', true);?>
" />
				</div>
				<div class="col-lg-1">
					<?php echo $_smarty_tpl->tpl_vars['field']->value['link_remove_ip'];?>

				</div>
			</div>
		</div>
	<?php } else { ?>
		<?php 
$_smarty_tpl->inheritance->callParent($_smarty_tpl, $this, '{$smarty.block.parent}');
?>

	<?php }
}
}
/* {/block "input"} */
}
