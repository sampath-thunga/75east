<?php
/* Smarty version 3.1.39, created on 2025-02-24 02:40:49
  from '/home/qloapps/www/QloApps/themes/hotel-reservation-theme/history.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.39',
  'unifunc' => 'content_67bb8ed97cb3c0_11992494',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '7d73906a938b85aeba28a30dadb4f51d50fdc540' => 
    array (
      0 => '/home/qloapps/www/QloApps/themes/hotel-reservation-theme/history.tpl',
      1 => 1728563708,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_67bb8ed97cb3c0_11992494 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, false);
?>

<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_62672753167bb8ed97569e0_70764179', 'history');
?>

<?php }
/* {block 'errors'} */
class Block_117848050367bb8ed9760aa9_39987243 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

		<?php $_smarty_tpl->_subTemplateRender(((string)$_smarty_tpl->tpl_vars['tpl_dir']->value)."./errors.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, true);
?>
	<?php
}
}
/* {/block 'errors'} */
/* {block 'history_heading'} */
class Block_130223880567bb8ed9762b35_60594302 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

		<h1 class="page-heading bottom-indent"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Bookings'),$_smarty_tpl ) );?>
</h1>
	<?php
}
}
/* {/block 'history_heading'} */
/* {block 'displayHistoryTableHeading'} */
class Block_197070073667bb8ed976e364_34496584 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

								<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['hook'][0], array( array('h'=>'displayHistoryTableHeading'),$_smarty_tpl ) );?>

							<?php
}
}
/* {/block 'displayHistoryTableHeading'} */
/* {block 'booking_reference'} */
class Block_126664779167bb8ed9776d70_87236595 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

									<td class="history_link bold">
																												<a class="color-myaccount" href="<?php ob_start();
echo intval($_smarty_tpl->tpl_vars['order']->value['id_order']);
$_prefixVariable46=ob_get_clean();
echo htmlspecialchars($_smarty_tpl->tpl_vars['link']->value->getPageLink('order-detail',true,NULL,"id_order=".$_prefixVariable46), ENT_QUOTES, 'UTF-8', true);?>
">
											<?php echo Order::getUniqReferenceOf($_smarty_tpl->tpl_vars['order']->value['id_order']);?>

										</a>
									</td>
								<?php
}
}
/* {/block 'booking_reference'} */
/* {block 'booking_date'} */
class Block_54791095367bb8ed9781b02_45419239 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_checkPlugins(array(0=>array('file'=>'/home/qloapps/www/QloApps/tools/smarty/plugins/modifier.regex_replace.php','function'=>'smarty_modifier_regex_replace',),));
?>

									<td data-value="<?php echo smarty_modifier_regex_replace($_smarty_tpl->tpl_vars['order']->value['date_add'],"/[\-\:\ ]/",'');?>
" class="history_date bold">
										<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['dateFormat'][0], array( array('date'=>$_smarty_tpl->tpl_vars['order']->value['date_add'],'full'=>0),$_smarty_tpl ) );?>

									</td>
								<?php
}
}
/* {/block 'booking_date'} */
/* {block 'booking_total_price'} */
class Block_133031755967bb8ed9786382_56217884 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

									<td class="history_price" data-value="<?php echo $_smarty_tpl->tpl_vars['order']->value['total_paid'];?>
">
										<span class="price">
											<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['displayPrice'][0], array( array('price'=>$_smarty_tpl->tpl_vars['order']->value['total_paid'],'currency'=>$_smarty_tpl->tpl_vars['order']->value['id_currency'],'no_utf8'=>false,'convert'=>false),$_smarty_tpl ) );?>

										</span>
									</td>
								<?php
}
}
/* {/block 'booking_total_price'} */
/* {block 'booking_due_price'} */
class Block_147194655567bb8ed97892d6_58910016 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

									<?php if ((isset($_smarty_tpl->tpl_vars['adv_active']->value))) {?>
										<td class="history_price" data-value="<?php echo $_smarty_tpl->tpl_vars['order']->value['due_amount'];?>
">
											<span class="price">
												<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['displayPrice'][0], array( array('price'=>$_smarty_tpl->tpl_vars['order']->value['due_amount'],'currency'=>$_smarty_tpl->tpl_vars['order']->value['id_currency'],'no_utf8'=>false,'convert'=>false),$_smarty_tpl ) );?>

											</span>
										</td>
									<?php }?>
								<?php
}
}
/* {/block 'booking_due_price'} */
/* {block 'booking_method'} */
class Block_32882116967bb8ed978c016_28370047 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

									<td class="history_method"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['order']->value['payment'], ENT_QUOTES, 'UTF-8', true);?>
</td>
								<?php
}
}
/* {/block 'booking_method'} */
/* {block 'booking_state'} */
class Block_35611790067bb8ed978d6a9_88466194 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

									<td <?php if ((isset($_smarty_tpl->tpl_vars['order']->value['order_state']))) {?> data-value="<?php echo $_smarty_tpl->tpl_vars['order']->value['id_order_state'];?>
"<?php }?> class="history_state">
										<?php if ((isset($_smarty_tpl->tpl_vars['order']->value['order_state']))) {?>
											<span class="label<?php if ((isset($_smarty_tpl->tpl_vars['order']->value['order_state_color'])) && Tools::getBrightness($_smarty_tpl->tpl_vars['order']->value['order_state_color']) > 128) {?> dark<?php }?>"<?php if ((isset($_smarty_tpl->tpl_vars['order']->value['order_state_color'])) && $_smarty_tpl->tpl_vars['order']->value['order_state_color']) {?> style="background-color:<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['order']->value['order_state_color'], ENT_QUOTES, 'UTF-8', true);?>
; border-color:<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['order']->value['order_state_color'], ENT_QUOTES, 'UTF-8', true);?>
;"<?php }?>>
												<?php if (in_array($_smarty_tpl->tpl_vars['order']->value['current_state'],$_smarty_tpl->tpl_vars['overbooking_order_states']->value)) {?>
													<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Order Not Confirmed'),$_smarty_tpl ) );?>

												<?php } else { ?>
													<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['order']->value['order_state'], ENT_QUOTES, 'UTF-8', true);?>

												<?php }?>
											</span>
										<?php }?>
									</td>
								<?php
}
}
/* {/block 'booking_state'} */
/* {block 'booking_invoice'} */
class Block_27521046767bb8ed979ba67_29899470 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

									<td class="history_invoice">
										<?php if (((isset($_smarty_tpl->tpl_vars['order']->value['invoice'])) && $_smarty_tpl->tpl_vars['order']->value['invoice'] && (isset($_smarty_tpl->tpl_vars['order']->value['invoice_number'])) && $_smarty_tpl->tpl_vars['order']->value['invoice_number']) && (isset($_smarty_tpl->tpl_vars['invoiceAllowed']->value)) && $_smarty_tpl->tpl_vars['invoiceAllowed']->value == true) {?>
											<a class="link-button" href="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['link']->value->getPageLink('pdf-invoice',true,NULL,"id_order=".((string)$_smarty_tpl->tpl_vars['order']->value['id_order'])), ENT_QUOTES, 'UTF-8', true);?>
" title="<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Invoice'),$_smarty_tpl ) );?>
" target="_blank">
												<i class="icon-file-text large"></i><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'PDF'),$_smarty_tpl ) );?>

											</a>
										<?php } else { ?>
											-
										<?php }?>
									</td>
								<?php
}
}
/* {/block 'booking_invoice'} */
/* {block 'booking_detail'} */
class Block_77743464067bb8ed97a3360_41875376 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

									<td class="history_detail">
										<a class="btn btn-default button button-small" href="<?php ob_start();
echo intval($_smarty_tpl->tpl_vars['order']->value['id_order']);
$_prefixVariable47=ob_get_clean();
echo htmlspecialchars($_smarty_tpl->tpl_vars['link']->value->getPageLink('order-detail',true,NULL,"id_order=".$_prefixVariable47), ENT_QUOTES, 'UTF-8', true);?>
">
											<span>
												<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Details'),$_smarty_tpl ) );?>
<i class="icon-chevron-right right"></i>
											</span>
										</a>
										<!-- <?php if ((isset($_smarty_tpl->tpl_vars['opc']->value)) && $_smarty_tpl->tpl_vars['opc']->value) {?>
											<a class="link-button" href="<?php ob_start();
echo intval($_smarty_tpl->tpl_vars['order']->value['id_order']);
$_prefixVariable48=ob_get_clean();
echo htmlspecialchars($_smarty_tpl->tpl_vars['link']->value->getPageLink('order-opc',true,NULL,"submitReorder&id_order=".$_prefixVariable48), ENT_QUOTES, 'UTF-8', true);?>
" title="<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Reorder'),$_smarty_tpl ) );?>
">
										<?php } else { ?>
											<a class="link-button" href="<?php ob_start();
echo intval($_smarty_tpl->tpl_vars['order']->value['id_order']);
$_prefixVariable49=ob_get_clean();
echo htmlspecialchars($_smarty_tpl->tpl_vars['link']->value->getPageLink('order',true,NULL,"submitReorder&id_order=".$_prefixVariable49), ENT_QUOTES, 'UTF-8', true);?>
" title="<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Reorder'),$_smarty_tpl ) );?>
">
										<?php }?>
											<?php if ((isset($_smarty_tpl->tpl_vars['reorderingAllowed']->value)) && $_smarty_tpl->tpl_vars['reorderingAllowed']->value) {?>
												<i class="icon-refresh"></i><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Reorder'),$_smarty_tpl ) );?>

											<?php }?>
										</a> --><!-- by webkul not to show reorder tab -->
									</td>
								<?php
}
}
/* {/block 'booking_detail'} */
/* {block 'displayHistoryTableRow'} */
class Block_163114132467bb8ed97bb5b7_87944963 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

									<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['hook'][0], array( array('h'=>'displayHistoryTableRow','id_order'=>$_smarty_tpl->tpl_vars['order']->value['id_order']),$_smarty_tpl ) );?>

								<?php
}
}
/* {/block 'displayHistoryTableRow'} */
/* {block 'bookings_list'} */
class Block_58069710167bb8ed97683b5_54284550 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

				<table id="order-list" class="table table-bordered footab">
					<thead>
						<tr>
							<th class="first_item" data-sort-ignore="true"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Order reference'),$_smarty_tpl ) );?>
</th>
							<th class="item"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Date'),$_smarty_tpl ) );?>
</th>
							<th data-hide="phone" class="item"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Total price'),$_smarty_tpl ) );?>
</th>
							<?php if ((isset($_smarty_tpl->tpl_vars['adv_active']->value))) {?>
								<th data-hide="phone" class="item"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Due Price'),$_smarty_tpl ) );?>
</th>
							<?php }?>
							<th data-sort-ignore="true" data-hide="phone,tablet" class="item"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Payment'),$_smarty_tpl ) );?>
</th>
							<th class="item"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Status'),$_smarty_tpl ) );?>
</th>

							<th data-sort-ignore="true" data-hide="phone,tablet" class="item"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Invoice'),$_smarty_tpl ) );?>
</th>
							<th data-sort-ignore="true" data-hide="phone,tablet" class="last_item">&nbsp;</th>
							<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_197070073667bb8ed976e364_34496584', 'displayHistoryTableHeading', $this->tplIndex);
?>

						</tr>
					</thead>
					<tbody>
						<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['orders']->value, 'order', false, NULL, 'myLoop', array (
  'first' => true,
  'last' => true,
  'index' => true,
  'iteration' => true,
  'total' => true,
));
$_smarty_tpl->tpl_vars['order']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['order']->value) {
$_smarty_tpl->tpl_vars['order']->do_else = false;
$_smarty_tpl->tpl_vars['__smarty_foreach_myLoop']->value['iteration']++;
$_smarty_tpl->tpl_vars['__smarty_foreach_myLoop']->value['index']++;
$_smarty_tpl->tpl_vars['__smarty_foreach_myLoop']->value['first'] = !$_smarty_tpl->tpl_vars['__smarty_foreach_myLoop']->value['index'];
$_smarty_tpl->tpl_vars['__smarty_foreach_myLoop']->value['last'] = $_smarty_tpl->tpl_vars['__smarty_foreach_myLoop']->value['iteration'] === $_smarty_tpl->tpl_vars['__smarty_foreach_myLoop']->value['total'];
?>
							<tr class="<?php if ((isset($_smarty_tpl->tpl_vars['__smarty_foreach_myLoop']->value['first']) ? $_smarty_tpl->tpl_vars['__smarty_foreach_myLoop']->value['first'] : null)) {?>first_item<?php } elseif ((isset($_smarty_tpl->tpl_vars['__smarty_foreach_myLoop']->value['last']) ? $_smarty_tpl->tpl_vars['__smarty_foreach_myLoop']->value['last'] : null)) {?>last_item<?php } else { ?>item<?php }?> <?php if ((isset($_smarty_tpl->tpl_vars['__smarty_foreach_myLoop']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_foreach_myLoop']->value['index'] : null)%2) {?>alternate_item<?php }?>">
								<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_126664779167bb8ed9776d70_87236595', 'booking_reference', $this->tplIndex);
?>

								<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_54791095367bb8ed9781b02_45419239', 'booking_date', $this->tplIndex);
?>

								<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_133031755967bb8ed9786382_56217884', 'booking_total_price', $this->tplIndex);
?>

								<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_147194655567bb8ed97892d6_58910016', 'booking_due_price', $this->tplIndex);
?>

								<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_32882116967bb8ed978c016_28370047', 'booking_method', $this->tplIndex);
?>

								<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_35611790067bb8ed978d6a9_88466194', 'booking_state', $this->tplIndex);
?>

								<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_27521046767bb8ed979ba67_29899470', 'booking_invoice', $this->tplIndex);
?>

								<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_77743464067bb8ed97a3360_41875376', 'booking_detail', $this->tplIndex);
?>

								<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_163114132467bb8ed97bb5b7_87944963', 'displayHistoryTableRow', $this->tplIndex);
?>

							</tr>
						<?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
					</tbody>
				</table>
			<?php
}
}
/* {/block 'bookings_list'} */
/* {block 'history_footer_links'} */
class Block_107073058667bb8ed97c04d2_30740940 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

		<ul class="footer_links clearfix">
			<li>
				<a class="btn btn-default button button-small" href="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['link']->value->getPageLink('my-account',true), ENT_QUOTES, 'UTF-8', true);?>
">
					<span>
						<i class="icon-chevron-left"></i> <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Back to My account'),$_smarty_tpl ) );?>

					</span>
				</a>
			</li>
			<li>
				<a class="btn btn-default button button-small" href="<?php echo $_smarty_tpl->tpl_vars['base_dir']->value;?>
">
					<span><i class="icon-chevron-left"></i> <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Home'),$_smarty_tpl ) );?>
</span>
				</a>
			</li>
		</ul>
	<?php
}
}
/* {/block 'history_footer_links'} */
/* {block 'history'} */
class Block_62672753167bb8ed97569e0_70764179 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'history' => 
  array (
    0 => 'Block_62672753167bb8ed97569e0_70764179',
  ),
  'errors' => 
  array (
    0 => 'Block_117848050367bb8ed9760aa9_39987243',
  ),
  'history_heading' => 
  array (
    0 => 'Block_130223880567bb8ed9762b35_60594302',
  ),
  'bookings_list' => 
  array (
    0 => 'Block_58069710167bb8ed97683b5_54284550',
  ),
  'displayHistoryTableHeading' => 
  array (
    0 => 'Block_197070073667bb8ed976e364_34496584',
  ),
  'booking_reference' => 
  array (
    0 => 'Block_126664779167bb8ed9776d70_87236595',
  ),
  'booking_date' => 
  array (
    0 => 'Block_54791095367bb8ed9781b02_45419239',
  ),
  'booking_total_price' => 
  array (
    0 => 'Block_133031755967bb8ed9786382_56217884',
  ),
  'booking_due_price' => 
  array (
    0 => 'Block_147194655567bb8ed97892d6_58910016',
  ),
  'booking_method' => 
  array (
    0 => 'Block_32882116967bb8ed978c016_28370047',
  ),
  'booking_state' => 
  array (
    0 => 'Block_35611790067bb8ed978d6a9_88466194',
  ),
  'booking_invoice' => 
  array (
    0 => 'Block_27521046767bb8ed979ba67_29899470',
  ),
  'booking_detail' => 
  array (
    0 => 'Block_77743464067bb8ed97a3360_41875376',
  ),
  'displayHistoryTableRow' => 
  array (
    0 => 'Block_163114132467bb8ed97bb5b7_87944963',
  ),
  'history_footer_links' => 
  array (
    0 => 'Block_107073058667bb8ed97c04d2_30740940',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

	<?php $_smarty_tpl->smarty->ext->_capture->open($_smarty_tpl, 'path', null, null);?>
		<a href="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['link']->value->getPageLink('my-account',true), ENT_QUOTES, 'UTF-8', true);?>
">
			<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'My account'),$_smarty_tpl ) );?>

		</a>
		<span class="navigation-pipe"><?php echo $_smarty_tpl->tpl_vars['navigationPipe']->value;?>
</span>
		<span class="navigation_page"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Bookings'),$_smarty_tpl ) );?>
</span>
	<?php $_smarty_tpl->smarty->ext->_capture->close($_smarty_tpl);?>
	<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_117848050367bb8ed9760aa9_39987243', 'errors', $this->tplIndex);
?>

	<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_130223880567bb8ed9762b35_60594302', 'history_heading', $this->tplIndex);
?>

	<p class="info-title"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Here are the orders you\'ve placed since your account was created.'),$_smarty_tpl ) );?>
</p>

	<?php if ($_smarty_tpl->tpl_vars['slowValidation']->value) {?>
		<p class="alert alert-warning"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'If you have just placed an order, it may take a few minutes for it to be validated. Please refresh this page if your order is missing.'),$_smarty_tpl ) );?>
</p>
	<?php }?>
	<div class="block-center" id="block-history">
		<?php if ($_smarty_tpl->tpl_vars['orders']->value && count($_smarty_tpl->tpl_vars['orders']->value)) {?>
			<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_58069710167bb8ed97683b5_54284550', 'bookings_list', $this->tplIndex);
?>

			<div id="block-order-detail" class="unvisible">&nbsp;</div>
		<?php } else { ?>
			<p class="alert alert-warning"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'You have not placed any orders.'),$_smarty_tpl ) );?>
</p>
		<?php }?>
	</div>
	<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_107073058667bb8ed97c04d2_30740940', 'history_footer_links', $this->tplIndex);
?>


<?php
}
}
/* {/block 'history'} */
}
