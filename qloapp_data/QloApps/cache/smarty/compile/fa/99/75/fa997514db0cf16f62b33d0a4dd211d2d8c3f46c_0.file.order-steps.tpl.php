<?php
/* Smarty version 3.1.39, created on 2025-02-24 02:40:46
  from '/home/qloapps/www/QloApps/themes/hotel-reservation-theme/order-steps.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.39',
  'unifunc' => 'content_67bb8ed64a0cb2_88952418',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'fa997514db0cf16f62b33d0a4dd211d2d8c3f46c' => 
    array (
      0 => '/home/qloapps/www/QloApps/themes/hotel-reservation-theme/order-steps.tpl',
      1 => 1728563708,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_67bb8ed64a0cb2_88952418 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->smarty->ext->_capture->open($_smarty_tpl, "url_back", null, null);
if ((isset($_smarty_tpl->tpl_vars['back']->value)) && $_smarty_tpl->tpl_vars['back']->value) {?>back=<?php echo $_smarty_tpl->tpl_vars['back']->value;
}
$_smarty_tpl->smarty->ext->_capture->close($_smarty_tpl);?>

<?php if (!(isset($_smarty_tpl->tpl_vars['multi_shipping']->value))) {?>
	<?php $_smarty_tpl->_assignInScope('multi_shipping', '0');
}?>

<?php if (!$_smarty_tpl->tpl_vars['opc']->value && ((!(isset($_smarty_tpl->tpl_vars['back']->value)) || empty($_smarty_tpl->tpl_vars['back']->value)) || ((isset($_smarty_tpl->tpl_vars['back']->value)) && preg_match("/[&?]step=/",$_smarty_tpl->tpl_vars['back']->value)))) {?>
<!-- Steps -->
<ul class="step clearfix" id="order_step">
	<li class="<?php if ($_smarty_tpl->tpl_vars['current_step']->value == 'summary') {?>step_current <?php } elseif ($_smarty_tpl->tpl_vars['current_step']->value == 'login') {?>step_done_last step_done<?php } else {
if ($_smarty_tpl->tpl_vars['current_step']->value == 'payment' || $_smarty_tpl->tpl_vars['current_step']->value == 'shipping' || $_smarty_tpl->tpl_vars['current_step']->value == 'address' || $_smarty_tpl->tpl_vars['current_step']->value == 'login') {?>step_done<?php } else { ?>step_todo<?php }
}?> first">
		<?php if ($_smarty_tpl->tpl_vars['current_step']->value == 'payment' || $_smarty_tpl->tpl_vars['current_step']->value == 'shipping' || $_smarty_tpl->tpl_vars['current_step']->value == 'address' || $_smarty_tpl->tpl_vars['current_step']->value == 'login') {?>
		<a href="<?php echo $_smarty_tpl->tpl_vars['link']->value->getPageLink('order',true);?>
">
			<em>01.</em> <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Summary'),$_smarty_tpl ) );?>

		</a>
		<?php } else { ?>
			<span><em>01.</em> <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Summary'),$_smarty_tpl ) );?>
</span>
		<?php }?>
	</li>
	<li class="<?php if ($_smarty_tpl->tpl_vars['current_step']->value == 'login') {?>step_current<?php } elseif ($_smarty_tpl->tpl_vars['current_step']->value == 'address') {?>step_done step_done_last<?php } else {
if ($_smarty_tpl->tpl_vars['current_step']->value == 'payment' || $_smarty_tpl->tpl_vars['current_step']->value == 'shipping' || $_smarty_tpl->tpl_vars['current_step']->value == 'address') {?>step_done<?php } else { ?>step_todo<?php }
}?> second">
		<?php if ($_smarty_tpl->tpl_vars['current_step']->value == 'payment' || $_smarty_tpl->tpl_vars['current_step']->value == 'shipping' || $_smarty_tpl->tpl_vars['current_step']->value == 'address') {?>
		<a href="<?php ob_start();
if ($_smarty_tpl->tpl_vars['multi_shipping']->value) {
echo "&multi-shipping=";
echo (string)$_smarty_tpl->tpl_vars['multi_shipping']->value;
}
$_prefixVariable14=ob_get_clean();
echo htmlspecialchars($_smarty_tpl->tpl_vars['link']->value->getPageLink('order',true,NULL,((string)$_smarty_tpl->smarty->ext->_capture->getBuffer($_smarty_tpl, 'url_back'))."&step=1".$_prefixVariable14), ENT_QUOTES, 'UTF-8', true);?>
">
			<em>02.</em> <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Sign in'),$_smarty_tpl ) );?>

		</a>
		<?php } else { ?>
			<span><em>02.</em> <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Sign in'),$_smarty_tpl ) );?>
</span>
		<?php }?>
	</li>
	<li class="<?php if ($_smarty_tpl->tpl_vars['current_step']->value == 'address') {?>step_current<?php } elseif ($_smarty_tpl->tpl_vars['current_step']->value == 'shipping') {?>step_done step_done_last<?php } else {
if ($_smarty_tpl->tpl_vars['current_step']->value == 'payment' || $_smarty_tpl->tpl_vars['current_step']->value == 'shipping') {?>step_done<?php } else { ?>step_todo<?php }
}?> third">
		<?php if ($_smarty_tpl->tpl_vars['current_step']->value == 'payment' || $_smarty_tpl->tpl_vars['current_step']->value == 'shipping') {?>
		<a href="<?php ob_start();
if ($_smarty_tpl->tpl_vars['multi_shipping']->value) {
echo "&multi-shipping=";
echo (string)$_smarty_tpl->tpl_vars['multi_shipping']->value;
}
$_prefixVariable15=ob_get_clean();
echo htmlspecialchars($_smarty_tpl->tpl_vars['link']->value->getPageLink('order',true,NULL,((string)$_smarty_tpl->smarty->ext->_capture->getBuffer($_smarty_tpl, 'url_back'))."&step=1".$_prefixVariable15), ENT_QUOTES, 'UTF-8', true);?>
">
			<em>03.</em> <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Address'),$_smarty_tpl ) );?>

		</a>
		<?php } else { ?>
			<span><em>03.</em> <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Address'),$_smarty_tpl ) );?>
</span>
		<?php }?>
	</li>
	<li class="<?php if ($_smarty_tpl->tpl_vars['current_step']->value == 'shipping') {?>step_current<?php } else {
if ($_smarty_tpl->tpl_vars['current_step']->value == 'payment') {?>step_done step_done_last<?php } else { ?>step_todo<?php }
}?> four">
		<?php if ($_smarty_tpl->tpl_vars['current_step']->value == 'payment') {?>
		<a href="<?php ob_start();
if ($_smarty_tpl->tpl_vars['multi_shipping']->value) {
echo "&multi-shipping=";
echo (string)$_smarty_tpl->tpl_vars['multi_shipping']->value;
}
$_prefixVariable16=ob_get_clean();
echo htmlspecialchars($_smarty_tpl->tpl_vars['link']->value->getPageLink('order',true,NULL,((string)$_smarty_tpl->smarty->ext->_capture->getBuffer($_smarty_tpl, 'url_back'))."&step=2".$_prefixVariable16), ENT_QUOTES, 'UTF-8', true);?>
">
			<em>04.</em> <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Shipping'),$_smarty_tpl ) );?>

		</a>
		<?php } else { ?>
			<span><em>04.</em> <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Shipping'),$_smarty_tpl ) );?>
</span>
		<?php }?>
	</li>
	<li id="step_end" class="<?php if ($_smarty_tpl->tpl_vars['current_step']->value == 'payment') {?>step_current<?php } else { ?>step_todo<?php }?> last">
		<span><em>05.</em> <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Payment'),$_smarty_tpl ) );?>
</span>
	</li>
</ul>
<!-- /Steps -->
<?php }
}
}
