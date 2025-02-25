<?php
/* Smarty version 3.1.39, created on 2025-02-24 02:40:56
  from '/home/qloapps/www/QloApps/admin/themes/default/template/helpers/tree/tree_node_folder_radio.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.39',
  'unifunc' => 'content_67bb8ee06737c2_89313764',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '4a1c798c22e99e24a6787c894c8573687dd86f29' => 
    array (
      0 => '/home/qloapps/www/QloApps/admin/themes/default/template/helpers/tree/tree_node_folder_radio.tpl',
      1 => 1728563708,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_67bb8ee06737c2_89313764 (Smarty_Internal_Template $_smarty_tpl) {
?><li class="tree-folder" <?php if ((isset($_smarty_tpl->tpl_vars['node']->value['hidden'])) && $_smarty_tpl->tpl_vars['node']->value['hidden'] == true) {?> hidden="hidden"<?php }?>>
	<span class="tree-folder-name<?php if ((isset($_smarty_tpl->tpl_vars['node']->value['disabled'])) && $_smarty_tpl->tpl_vars['node']->value['disabled'] == true) {?> tree-folder-name-disable<?php }?>">
		<?php if (!(isset($_smarty_tpl->tpl_vars['selectable']->value)) || $_smarty_tpl->tpl_vars['selectable']->value) {?>
			<input type="radio" name="<?php echo $_smarty_tpl->tpl_vars['node']->value['input_name'];?>
" value="<?php echo $_smarty_tpl->tpl_vars['node']->value['value'];?>
"<?php if ((isset($_smarty_tpl->tpl_vars['node']->value['selected'])) && $_smarty_tpl->tpl_vars['node']->value['selected'] == true) {?> checked="checked"<?php }
if ((isset($_smarty_tpl->tpl_vars['node']->value['disabled'])) && $_smarty_tpl->tpl_vars['node']->value['disabled'] == true) {?> disabled="disabled"<?php }?> <?php if ((isset($_smarty_tpl->tpl_vars['node']->value['hidden'])) && $_smarty_tpl->tpl_vars['node']->value['hidden'] == true) {?> hidden="hidden"<?php }?>/>
		<?php }?>
		<i class="icon-folder-close"></i>
		<label class="tree-toggler"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['node']->value['name'], ENT_QUOTES, 'UTF-8', true);?>
</label>
	</span>
	<?php if ((isset($_smarty_tpl->tpl_vars['node']->value['badge']))) {?>
		<span class="badge <?php if ((isset($_smarty_tpl->tpl_vars['node']->value['badge']['class']))) {
echo $_smarty_tpl->tpl_vars['node']->value['badge']['class'];
}?>"><?php echo $_smarty_tpl->tpl_vars['node']->value['badge']['title'];?>
</span>
	<?php }?>
	<?php if ((isset($_smarty_tpl->tpl_vars['node']->value['hint']))) {?>
		<div class="node-hint"><?php echo $_smarty_tpl->tpl_vars['node']->value['hint'];?>
</div>
	<?php }?>
	<ul class="tree">
		<?php echo $_smarty_tpl->tpl_vars['children']->value;?>

	</ul>
</li>
<?php }
}
