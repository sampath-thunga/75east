<?php
/* Smarty version 3.1.39, created on 2025-02-24 02:40:45
  from '/home/qloapps/www/QloApps/admin/themes/default/template/controllers/order_preferences/helpers/options/options.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.39',
  'unifunc' => 'content_67bb8ed5d9a330_29362617',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '9413f38a7df804b31e4799b94a9828a57c868d94' => 
    array (
      0 => '/home/qloapps/www/QloApps/admin/themes/default/template/controllers/order_preferences/helpers/options/options.tpl',
      1 => 1728563708,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_67bb8ed5d9a330_29362617 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_188521485667bb8ed5d99175_28399867', "after");
?>

<?php $_smarty_tpl->inheritance->endChild($_smarty_tpl, "helpers/options/options.tpl");
}
/* {block "after"} */
class Block_188521485667bb8ed5d99175_28399867 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'after' => 
  array (
    0 => 'Block_188521485667bb8ed5d99175_28399867',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

<?php echo '<script'; ?>
 type="text/javascript">
    changeCMSActivationAuthorization();
    changeOverbookingOrderAction();
<?php echo '</script'; ?>
>
<?php
}
}
/* {/block "after"} */
}
