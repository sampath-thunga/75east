<?php
/* Smarty version 3.1.39, created on 2025-02-24 02:40:45
  from '/home/qloapps/www/QloApps/themes/hotel-reservation-theme/index.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.39',
  'unifunc' => 'content_67bb8ed58729d6_40457691',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '245505e031fe4e44c753a5f6c5fe17291b298f92' => 
    array (
      0 => '/home/qloapps/www/QloApps/themes/hotel-reservation-theme/index.tpl',
      1 => 1728563708,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_67bb8ed58729d6_40457691 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, false);
?>

<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_102231985467bb8ed5869125_98027332', 'displayHomeTabContent');
?>

<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_65522930267bb8ed58707d2_98100708', 'displayHome');
?>

<?php }
/* {block 'displayHomeTab'} */
class Block_13811644967bb8ed586e0c2_99674513 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

			<?php if ((isset($_smarty_tpl->tpl_vars['HOOK_HOME_TAB']->value)) && trim($_smarty_tpl->tpl_vars['HOOK_HOME_TAB']->value)) {?>
				<ul id="home-page-tabs" class="nav nav-tabs clearfix">
					<?php echo $_smarty_tpl->tpl_vars['HOOK_HOME_TAB']->value;?>

				</ul>
			<?php }?>
		<?php
}
}
/* {/block 'displayHomeTab'} */
/* {block 'displayHomeTabContent'} */
class Block_102231985467bb8ed5869125_98027332 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'displayHomeTabContent' => 
  array (
    0 => 'Block_102231985467bb8ed5869125_98027332',
  ),
  'displayHomeTab' => 
  array (
    0 => 'Block_13811644967bb8ed586e0c2_99674513',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

	<?php if ((isset($_smarty_tpl->tpl_vars['HOOK_HOME_TAB_CONTENT']->value)) && trim($_smarty_tpl->tpl_vars['HOOK_HOME_TAB_CONTENT']->value)) {?>
		<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_13811644967bb8ed586e0c2_99674513', 'displayHomeTab', $this->tplIndex);
?>

		<div class="tab-content"><?php echo $_smarty_tpl->tpl_vars['HOOK_HOME_TAB_CONTENT']->value;?>
</div>
	<?php }
}
}
/* {/block 'displayHomeTabContent'} */
/* {block 'displayHome'} */
class Block_65522930267bb8ed58707d2_98100708 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'displayHome' => 
  array (
    0 => 'Block_65522930267bb8ed58707d2_98100708',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

	<?php if ((isset($_smarty_tpl->tpl_vars['HOOK_HOME']->value)) && trim($_smarty_tpl->tpl_vars['HOOK_HOME']->value)) {?>
		<div class="clearfix"><?php echo $_smarty_tpl->tpl_vars['HOOK_HOME']->value;?>
</div>
	<?php }
}
}
/* {/block 'displayHome'} */
}
