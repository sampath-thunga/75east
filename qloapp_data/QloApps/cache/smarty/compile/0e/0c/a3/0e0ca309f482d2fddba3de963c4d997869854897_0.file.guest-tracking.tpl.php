<?php
/* Smarty version 3.1.39, created on 2025-02-24 02:40:47
  from '/home/qloapps/www/QloApps/themes/hotel-reservation-theme/guest-tracking.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.39',
  'unifunc' => 'content_67bb8ed73b1230_23618878',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '0e0ca309f482d2fddba3de963c4d997869854897' => 
    array (
      0 => '/home/qloapps/www/QloApps/themes/hotel-reservation-theme/guest-tracking.tpl',
      1 => 1728563708,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:./order-detail.tpl' => 1,
  ),
),false)) {
function content_67bb8ed73b1230_23618878 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, false);
?>

<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_166102761967bb8ed72f9d91_28026370', 'guest_tracking');
?>

<?php }
/* {block 'guest_tracking_heading'} */
class Block_120841072767bb8ed72fdb20_71008962 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

		<h1 class="page-heading"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Guest Tracking'),$_smarty_tpl ) );?>
</h1>
	<?php
}
}
/* {/block 'guest_tracking_heading'} */
/* {block 'order_detail_wrapper'} */
class Block_48539943767bb8ed73546e1_13349726 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

						<?php $_smarty_tpl->_subTemplateRender("file:./order-detail.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, true);
?>
					<?php
}
}
/* {/block 'order_detail_wrapper'} */
/* {block 'errors'} */
class Block_65509725767bb8ed7363202_28169995 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

										<?php $_smarty_tpl->_subTemplateRender(((string)$_smarty_tpl->tpl_vars['tpl_dir']->value)."./errors.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, true);
?>
									<?php
}
}
/* {/block 'errors'} */
/* {block 'guest_transform'} */
class Block_67596365067bb8ed735a9f0_41865787 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

					<?php if ((isset($_smarty_tpl->tpl_vars['transformSuccess']->value))) {?>
						<p class="alert alert-success alert-transformed"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Your guest account has been successfully transformed into a customer account. You can now log in as a registered user. '),$_smarty_tpl ) );?>
 <a href="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['link']->value->getPageLink('authentication',true), ENT_QUOTES, 'UTF-8', true);?>
"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Log in now.'),$_smarty_tpl ) );?>
</a></p>
					<?php } else { ?>
						<div class="card transform-account">
							<div class="card-header">
								<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'For More Advantages'),$_smarty_tpl ) );?>

							</div>
							<div class="card-body">
								<form method="post" action="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['action']->value, ENT_QUOTES, 'UTF-8', true);?>
#guestToCustomer" class="std">
									<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_65509725767bb8ed7363202_28169995', 'errors', $this->tplIndex);
?>

									<p class="card-subtitle">
										<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Transform your guest account into a customer account and enjoy:'),$_smarty_tpl ) );?>

									</p>

									<div class="card-text">
										<p><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'- Personalized and secure access.'),$_smarty_tpl ) );?>
</p>
										<p><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'- Fast and easy checkout'),$_smarty_tpl ) );?>
</p>
										<p><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'- Easier refund process'),$_smarty_tpl ) );?>
</p>
									</div>

									<div class="form-group password">
										<label><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Set your password:'),$_smarty_tpl ) );?>
</label>
										<input type="password" name="password" class="form-control" />
									</div>

									<input type="hidden" name="id_order" value="<?php if ((isset($_smarty_tpl->tpl_vars['order']->value->id))) {
echo $_smarty_tpl->tpl_vars['order']->value->id;
} else {
if ((isset($_GET['id_order']))) {
echo htmlspecialchars($_GET['id_order'], ENT_QUOTES, 'UTF-8', true);
} else {
if ((isset($_POST['id_order']))) {
echo htmlspecialchars($_POST['id_order'], ENT_QUOTES, 'UTF-8', true);
}
}
}?>" />
									<input type="hidden" name="order_reference" value="<?php if ((isset($_GET['order_reference']))) {
echo htmlspecialchars($_GET['order_reference'], ENT_QUOTES, 'UTF-8', true);
} else {
if ((isset($_POST['order_reference']))) {
echo htmlspecialchars($_POST['order_reference'], ENT_QUOTES, 'UTF-8', true);
}
}?>" />
									<input type="hidden" name="email" value="<?php if ((isset($_GET['email']))) {
echo htmlspecialchars($_GET['email'], ENT_QUOTES, 'UTF-8', true);
} else {
if ((isset($_POST['email']))) {
echo htmlspecialchars($_POST['email'], ENT_QUOTES, 'UTF-8', true);
}
}?>" />

									<button type="submit" name="submitTransformGuestToCustomer" class="button button-medium btn btn-submit">
										<span><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Send'),$_smarty_tpl ) );?>
</span>
									</button>
								</form>
							</div>
						</div>
					<?php }?>
				<?php
}
}
/* {/block 'guest_transform'} */
/* {block 'errors'} */
class Block_134491302267bb8ed7383890_57469755 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

			<?php $_smarty_tpl->_subTemplateRender(((string)$_smarty_tpl->tpl_vars['tpl_dir']->value)."./errors.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, true);
?>
		<?php
}
}
/* {/block 'errors'} */
/* {block 'guest_tracking_submit'} */
class Block_9089007967bb8ed73aa716_31110250 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

						<p>
							<button type="submit" name="submitGuestTracking" class="button btn btn-default button-medium"><span><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Send'),$_smarty_tpl ) );?>
<i class="icon-chevron-right right"></i></span></button>
						</p>
					<?php
}
}
/* {/block 'guest_tracking_submit'} */
/* {block 'guest_tracking_form'} */
class Block_78569822967bb8ed73980b9_59986935 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

			<form method="post" action="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['action']->value, ENT_QUOTES, 'UTF-8', true);?>
" class="std" id="guestTracking">
				<fieldset class="description_box box">
					<h2 class="page-subheading"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'To track your order, please enter the following information:'),$_smarty_tpl ) );?>
</h2>
					<div class="text form-group">
						<label><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Order Reference:'),$_smarty_tpl ) );?>
 </label>
						<input class="form-control" type="text" name="order_reference" value="<?php if ((isset($_GET['id_order']))) {
echo htmlspecialchars($_GET['id_order'], ENT_QUOTES, 'UTF-8', true);
} else {
if ((isset($_POST['id_order']))) {
echo htmlspecialchars($_POST['id_order'], ENT_QUOTES, 'UTF-8', true);
}
}?>" size="8" />
						<i><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'For example: QIIXJXNUI'),$_smarty_tpl ) );?>
</i>
					</div>
					<div class="text form-group">
						<label><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Email:'),$_smarty_tpl ) );?>
</label>
						<input class="form-control" type="email" name="email" value="<?php if ((isset($_GET['email']))) {
echo htmlspecialchars($_GET['email'], ENT_QUOTES, 'UTF-8', true);
} else {
if ((isset($_POST['email']))) {
echo htmlspecialchars($_POST['email'], ENT_QUOTES, 'UTF-8', true);
}
}?>" />
					</div>
					<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_9089007967bb8ed73aa716_31110250', 'guest_tracking_submit', $this->tplIndex);
?>

				</fieldset>
			</form>
		<?php
}
}
/* {/block 'guest_tracking_form'} */
/* {block 'guest_tracking'} */
class Block_166102761967bb8ed72f9d91_28026370 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'guest_tracking' => 
  array (
    0 => 'Block_166102761967bb8ed72f9d91_28026370',
  ),
  'guest_tracking_heading' => 
  array (
    0 => 'Block_120841072767bb8ed72fdb20_71008962',
  ),
  'order_detail_wrapper' => 
  array (
    0 => 'Block_48539943767bb8ed73546e1_13349726',
  ),
  'guest_transform' => 
  array (
    0 => 'Block_67596365067bb8ed735a9f0_41865787',
  ),
  'errors' => 
  array (
    0 => 'Block_65509725767bb8ed7363202_28169995',
    1 => 'Block_134491302267bb8ed7383890_57469755',
  ),
  'guest_tracking_form' => 
  array (
    0 => 'Block_78569822967bb8ed73980b9_59986935',
  ),
  'guest_tracking_submit' => 
  array (
    0 => 'Block_9089007967bb8ed73aa716_31110250',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>


	<?php $_smarty_tpl->smarty->ext->_capture->open($_smarty_tpl, 'path', null, null);
echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Guest Tracking'),$_smarty_tpl ) );
$_smarty_tpl->smarty->ext->_capture->close($_smarty_tpl);?>
	<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_120841072767bb8ed72fdb20_71008962', 'guest_tracking_heading', $this->tplIndex);
?>


	<?php if ((isset($_smarty_tpl->tpl_vars['order_collection']->value))) {?>
		<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['order_collection']->value, 'order');
$_smarty_tpl->tpl_vars['order']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['order']->value) {
$_smarty_tpl->tpl_vars['order']->do_else = false;
?>
			<?php $_smarty_tpl->_assignInScope('order_state', $_smarty_tpl->tpl_vars['order']->value->getCurrentState());?>
			<?php $_smarty_tpl->_assignInScope('invoice', $_smarty_tpl->tpl_vars['order']->value->invoice);?>
			<?php $_smarty_tpl->_assignInScope('order_history', $_smarty_tpl->tpl_vars['order']->value->order_history);?>
			<?php $_smarty_tpl->_assignInScope('overbooking_order_states', $_smarty_tpl->tpl_vars['order']->value->overbooking_order_states);?>
			<?php $_smarty_tpl->_assignInScope('carrier', $_smarty_tpl->tpl_vars['order']->value->carrier);?>
			<?php $_smarty_tpl->_assignInScope('address_invoice', $_smarty_tpl->tpl_vars['order']->value->address_invoice);?>
			<?php $_smarty_tpl->_assignInScope('address_delivery', $_smarty_tpl->tpl_vars['order']->value->address_delivery);?>
			<?php $_smarty_tpl->_assignInScope('inv_adr_fields', $_smarty_tpl->tpl_vars['order']->value->inv_adr_fields);?>
			<?php $_smarty_tpl->_assignInScope('dlv_adr_fields', $_smarty_tpl->tpl_vars['order']->value->dlv_adr_fields);?>
			<?php $_smarty_tpl->_assignInScope('invoiceAddressFormatedValues', $_smarty_tpl->tpl_vars['order']->value->invoiceAddressFormatedValues);?>
			<?php $_smarty_tpl->_assignInScope('deliveryAddressFormatedValues', $_smarty_tpl->tpl_vars['order']->value->deliveryAddressFormatedValues);?>
			<?php $_smarty_tpl->_assignInScope('currency', $_smarty_tpl->tpl_vars['order']->value->currency);?>
			<?php $_smarty_tpl->_assignInScope('discounts', $_smarty_tpl->tpl_vars['order']->value->discounts);?>
			<?php $_smarty_tpl->_assignInScope('invoiceState', $_smarty_tpl->tpl_vars['order']->value->invoiceState);?>
			<?php $_smarty_tpl->_assignInScope('deliveryState', $_smarty_tpl->tpl_vars['order']->value->deliveryState);?>
			<?php $_smarty_tpl->_assignInScope('products', $_smarty_tpl->tpl_vars['order']->value->products);?>
			<?php $_smarty_tpl->_assignInScope('customizedDatas', $_smarty_tpl->tpl_vars['order']->value->customizedDatas);?>
			<?php $_smarty_tpl->_assignInScope('HOOK_ORDERDETAILDISPLAYED', $_smarty_tpl->tpl_vars['order']->value->hook_orderdetaildisplayed);?>
			<?php $_smarty_tpl->_assignInScope('total_convenience_fee_ti', $_smarty_tpl->tpl_vars['order']->value->total_convenience_fee_ti);?>
			<?php $_smarty_tpl->_assignInScope('total_convenience_fee_te', $_smarty_tpl->tpl_vars['order']->value->total_convenience_fee_te);?>
			<?php $_smarty_tpl->_assignInScope('total_demands_price_ti', $_smarty_tpl->tpl_vars['order']->value->total_demands_price_ti);?>
			<?php $_smarty_tpl->_assignInScope('total_demands_price_te', $_smarty_tpl->tpl_vars['order']->value->total_demands_price_te);?>
			<?php $_smarty_tpl->_assignInScope('any_back_order', $_smarty_tpl->tpl_vars['order']->value->any_back_order);?>
			<?php $_smarty_tpl->_assignInScope('shw_bo_msg', $_smarty_tpl->tpl_vars['order']->value->shw_bo_msg);?>
			<?php $_smarty_tpl->_assignInScope('back_ord_msg', $_smarty_tpl->tpl_vars['order']->value->back_ord_msg);?>
			<?php $_smarty_tpl->_assignInScope('order_has_invoice', $_smarty_tpl->tpl_vars['order']->value->order_has_invoice);?>
			<?php $_smarty_tpl->_assignInScope('cart_htl_data', $_smarty_tpl->tpl_vars['order']->value->cart_htl_data);?>
			<?php $_smarty_tpl->_assignInScope('customerGuestDetail', $_smarty_tpl->tpl_vars['order']->value->customerGuestDetail);?>
			<?php $_smarty_tpl->_assignInScope('obj_hotel_branch_information', $_smarty_tpl->tpl_vars['order']->value->obj_hotel_branch_information);?>
			<?php $_smarty_tpl->_assignInScope('hotel_address_info', $_smarty_tpl->tpl_vars['order']->value->hotel_address_info);?>
			<?php $_smarty_tpl->_assignInScope('hotel_refund_rules', $_smarty_tpl->tpl_vars['order']->value->hotel_refund_rules);?>

			<?php if ((isset($_smarty_tpl->tpl_vars['order']->value->total_old))) {?>
				<?php $_smarty_tpl->_assignInScope('total_old', $_smarty_tpl->tpl_vars['order']->value->total_old);?>
			<?php }?>
			<?php if ((isset($_smarty_tpl->tpl_vars['order']->value->followup))) {?>
				<?php $_smarty_tpl->_assignInScope('followup', $_smarty_tpl->tpl_vars['order']->value->followup);?>
			<?php }?>

			<div id="block-history">
				<div id="block-order-detail" class="std">
					<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_48539943767bb8ed73546e1_13349726', 'order_detail_wrapper', $this->tplIndex);
?>

				</div>
			</div>
		<?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>

		<div class="row">
			<div class="col-md-8">
				<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_67596365067bb8ed735a9f0_41865787', 'guest_transform', $this->tplIndex);
?>

			</div>
		</div>
	<?php } else { ?>
		<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_134491302267bb8ed7383890_57469755', 'errors', $this->tplIndex);
?>

		<?php if ((isset($_smarty_tpl->tpl_vars['show_login_link']->value)) && $_smarty_tpl->tpl_vars['show_login_link']->value) {?>
			<p><img src="<?php echo $_smarty_tpl->tpl_vars['img_dir']->value;?>
icon/userinfo.gif" alt="<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Information'),$_smarty_tpl ) );?>
" class="icon" /><a href="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['link']->value->getPageLink('my-account',true), ENT_QUOTES, 'UTF-8', true);?>
"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Click here to log in to your customer account.'),$_smarty_tpl ) );?>
</a><br /><br /></p>
		<?php }?>
        <?php if ((isset($_GET['ord_conf'])) && $_GET['ord_conf']) {?>
            <p class="alert alert-success"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Your'),$_smarty_tpl ) );?>
 <?php if ($_smarty_tpl->tpl_vars['total_rooms_booked']->value > 1) {
echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'bookings have'),$_smarty_tpl ) );
} else {
echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'booking has'),$_smarty_tpl ) );
}?> <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'been created successfully!'),$_smarty_tpl ) );?>
</p><br />
        <?php }?>
		<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_78569822967bb8ed73980b9_59986935', 'guest_tracking_form', $this->tplIndex);
?>

	<?php }
}
}
/* {/block 'guest_tracking'} */
}
