<?php
/* Smarty version 3.1.39, created on 2025-02-24 02:40:50
  from '/home/qloapps/www/QloApps/admin/themes/default/template/controllers/cart_rules/helpers/list/list_header.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.39',
  'unifunc' => 'content_67bb8eda080dc3_02047998',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '4e7b2e190bb2f59236e4d2414cadd812dce1cc85' => 
    array (
      0 => '/home/qloapps/www/QloApps/admin/themes/default/template/controllers/cart_rules/helpers/list/list_header.tpl',
      1 => 1728563708,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_67bb8eda080dc3_02047998 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>

<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_210654413567bb8eda0785c4_00466614', 'override_header');
?>

<?php $_smarty_tpl->inheritance->endChild($_smarty_tpl, "helpers/list/list_header.tpl");
}
/* {block 'override_header'} */
class Block_210654413567bb8eda0785c4_00466614 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'override_header' => 
  array (
    0 => 'Block_210654413567bb8eda0785c4_00466614',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

<?php if ($_smarty_tpl->tpl_vars['submit_form_ajax']->value) {?>
	<?php echo '<script'; ?>
 type="text/javascript">
		$('#voucher', window.parent.document).val('<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['new_cart_rule']->value->code, ENT_QUOTES, 'UTF-8', true);?>
');
		parent.add_cart_rule(<?php echo intval($_smarty_tpl->tpl_vars['new_cart_rule']->value->id);?>
);
		parent.$.fancybox.close();
	<?php echo '</script'; ?>
>
<?php }
}
}
/* {/block 'override_header'} */
}
