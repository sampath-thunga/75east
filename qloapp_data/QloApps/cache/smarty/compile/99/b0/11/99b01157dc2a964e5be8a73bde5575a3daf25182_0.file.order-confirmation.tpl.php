<?php
/* Smarty version 3.1.39, created on 2025-02-24 02:40:51
  from '/home/qloapps/www/QloApps/themes/hotel-reservation-theme/order-confirmation.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.39',
  'unifunc' => 'content_67bb8edb4a6a52_11120989',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '99b01157dc2a964e5be8a73bde5575a3daf25182' => 
    array (
      0 => '/home/qloapps/www/QloApps/themes/hotel-reservation-theme/order-confirmation.tpl',
      1 => 1728563708,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_67bb8edb4a6a52_11120989 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, false);
?>

<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_181342616867bb8edb3d9112_84540594', 'order_confirmation');
?>

<?php }
/* {block 'order_confirmation_heading'} */
class Block_168385126467bb8edb3db0b2_12063841 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

		<h1 class="page-heading"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Order confirmation'),$_smarty_tpl ) );?>
</h1>
	<?php
}
}
/* {/block 'order_confirmation_heading'} */
/* {block 'order_steps'} */
class Block_213384412467bb8edb3dc8a3_02153538 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

		<?php $_smarty_tpl->_subTemplateRender(((string)$_smarty_tpl->tpl_vars['tpl_dir']->value)."./order-steps.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, true);
?>
	<?php
}
}
/* {/block 'order_steps'} */
/* {block 'errors'} */
class Block_85853362467bb8edb3df379_04187012 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

		<?php $_smarty_tpl->_subTemplateRender(((string)$_smarty_tpl->tpl_vars['tpl_dir']->value)."./errors.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, true);
?>
	<?php
}
}
/* {/block 'errors'} */
/* {block 'displayOrderConfirmation'} */
class Block_12598532667bb8edb3e0e90_59831657 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

		<?php echo $_smarty_tpl->tpl_vars['HOOK_ORDER_CONFIRMATION']->value;?>

	<?php
}
}
/* {/block 'displayOrderConfirmation'} */
/* {block 'displayPaymentReturn'} */
class Block_70042623267bb8edb3e2258_00332508 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

			<?php echo $_smarty_tpl->tpl_vars['HOOK_PAYMENT_RETURN']->value;?>

		<?php
}
}
/* {/block 'displayPaymentReturn'} */
/* {block 'order_detail_heading'} */
class Block_48820624467bb8edb3f6578_86874649 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

					<p><strong><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Order Details -'),$_smarty_tpl ) );?>
</strong></p>
				<?php
}
}
/* {/block 'order_detail_heading'} */
/* {block 'order_detail_room_type_image'} */
class Block_73165482467bb8edb403b95_66850637 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

													<td class="cart_product">
														<a href="<?php echo $_smarty_tpl->tpl_vars['link']->value->getProductLink($_smarty_tpl->tpl_vars['data_v']->value['id_product']);?>
">
															<img src="<?php echo $_smarty_tpl->tpl_vars['data_v']->value['cover_img'];?>
" class="img-responsive"/>
														</a>
													</td>
												<?php
}
}
/* {/block 'order_detail_room_type_image'} */
/* {block 'order_detail_room_type_name'} */
class Block_144965102667bb8edb409b90_94151940 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

													<td class="cart_description">
														<p class="product-name">
															<a href="<?php echo $_smarty_tpl->tpl_vars['link']->value->getProductLink($_smarty_tpl->tpl_vars['data_v']->value['id_product']);?>
">
																<?php echo $_smarty_tpl->tpl_vars['data_v']->value['name'];?>

															</a>
														</p>
													</td>
												<?php
}
}
/* {/block 'order_detail_room_type_name'} */
/* {block 'displayOrderConfirmationHotelNameAfter'} */
class Block_8183224367bb8edb41a853_54572600 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

															<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['hook'][0], array( array('h'=>"displayOrderConfirmationHotelNameAfter",'id_product'=>$_smarty_tpl->tpl_vars['data_v']->value['id_product']),$_smarty_tpl ) );?>

														<?php
}
}
/* {/block 'displayOrderConfirmationHotelNameAfter'} */
/* {block 'order_detail_room_type_hotel_name'} */
class Block_110980227167bb8edb4198f5_15975592 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

													<td>
														<?php echo $_smarty_tpl->tpl_vars['data_v']->value['hotel_name'];?>

														<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_8183224367bb8edb41a853_54572600', 'displayOrderConfirmationHotelNameAfter', $this->tplIndex);
?>

													</td>
												<?php
}
}
/* {/block 'order_detail_room_type_hotel_name'} */
/* {block 'order_detail_room_type_guest'} */
class Block_198992047267bb8edb41e094_25894732 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

													<td class="text-center">
														<p>
															<?php if ($_smarty_tpl->tpl_vars['rm_v']->value['adults'] <= 9) {?>0<?php echo $_smarty_tpl->tpl_vars['rm_v']->value['adults'];
} else {
echo $_smarty_tpl->tpl_vars['rm_v']->value['adults'];
}?> <?php if ($_smarty_tpl->tpl_vars['rm_v']->value['adults'] > 1) {
echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Adults'),$_smarty_tpl ) );
} else {
echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Adult'),$_smarty_tpl ) );
}
if ($_smarty_tpl->tpl_vars['rm_v']->value['children']) {?>, <?php if ($_smarty_tpl->tpl_vars['rm_v']->value['children'] <= 9) {?>0<?php echo $_smarty_tpl->tpl_vars['rm_v']->value['children'];
} else { ?> <?php echo $_smarty_tpl->tpl_vars['rm_v']->value['children'];
}?> <?php if ($_smarty_tpl->tpl_vars['rm_v']->value['children'] > 1) {
echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Children'),$_smarty_tpl ) );
} else {
echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Child'),$_smarty_tpl ) );
}
}?><br><?php if ($_smarty_tpl->tpl_vars['rm_v']->value['num_rm'] <= 9) {?>0<?php }
echo $_smarty_tpl->tpl_vars['rm_v']->value['num_rm'];?>
 <?php if ($_smarty_tpl->tpl_vars['rm_v']->value['num_rm'] > 1) {
echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Rooms'),$_smarty_tpl ) );
} else {
echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Room'),$_smarty_tpl ) );
}?>
														</p>
													</td>
												<?php
}
}
/* {/block 'order_detail_room_type_guest'} */
/* {block 'order_detail_room_type_check_in'} */
class Block_192949824367bb8edb43a775_36141387 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

													<td class="text-center">
														<p>
															<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['dateFormat'][0], array( array('date'=>$_smarty_tpl->tpl_vars['rm_v']->value['data_form'],'full'=>$_smarty_tpl->tpl_vars['is_full_date']->value),$_smarty_tpl ) );?>

														</p>
													</td>
												<?php
}
}
/* {/block 'order_detail_room_type_check_in'} */
/* {block 'order_detail_room_type_check_out'} */
class Block_160381306567bb8edb43d1c6_42125702 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

													<td class="text-center">
														<p>
															<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['dateFormat'][0], array( array('date'=>$_smarty_tpl->tpl_vars['rm_v']->value['data_to'],'full'=>$_smarty_tpl->tpl_vars['is_full_date']->value),$_smarty_tpl ) );?>

														</p>
													</td>
												<?php
}
}
/* {/block 'order_detail_room_type_check_out'} */
/* {block 'order_detail_room_type_extra_demands'} */
class Block_162491934167bb8edb43eaf8_75481582 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

													<td>
														<p class="text-center">
															<?php if (((isset($_smarty_tpl->tpl_vars['rm_v']->value['extra_demands'])) && $_smarty_tpl->tpl_vars['rm_v']->value['extra_demands']) || (isset($_smarty_tpl->tpl_vars['rm_v']->value['additional_services'])) && $_smarty_tpl->tpl_vars['rm_v']->value['additional_services']) {?>
																	<a data-date_from="<?php echo $_smarty_tpl->tpl_vars['rm_v']->value['data_form'];?>
" data-date_to="<?php echo $_smarty_tpl->tpl_vars['rm_v']->value['data_to'];?>
" data-id_product="<?php echo $_smarty_tpl->tpl_vars['data_v']->value['id_product'];?>
" data-id_order="<?php echo $_smarty_tpl->tpl_vars['data_v']->value['id_order'];?>
" data-action="<?php echo $_smarty_tpl->tpl_vars['link']->value->getPageLink('order-detail');?>
" class="open_rooms_extra_services_panel" href="#rooms_type_extra_services_form">
															<?php }?>
															<?php if ($_smarty_tpl->tpl_vars['group_use_tax']->value) {?>
																<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['displayWtPriceWithCurrency'][0], array( array('price'=>($_smarty_tpl->tpl_vars['rm_v']->value['extra_demands_price_ti']+$_smarty_tpl->tpl_vars['rm_v']->value['additional_services_price_ti']),'currency'=>$_smarty_tpl->tpl_vars['objOrderCurrency']->value),$_smarty_tpl ) );?>

															<?php } else { ?>
																<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['displayWtPriceWithCurrency'][0], array( array('price'=>($_smarty_tpl->tpl_vars['rm_v']->value['extra_demands_price_te']+$_smarty_tpl->tpl_vars['rm_v']->value['additional_services_price_te']),'currency'=>$_smarty_tpl->tpl_vars['objOrderCurrency']->value),$_smarty_tpl ) );?>

															<?php }?>
															<?php if (((isset($_smarty_tpl->tpl_vars['rm_v']->value['extra_demands'])) && $_smarty_tpl->tpl_vars['rm_v']->value['extra_demands']) || (isset($_smarty_tpl->tpl_vars['rm_v']->value['additional_services'])) && $_smarty_tpl->tpl_vars['rm_v']->value['additional_services']) {?>
																</a>
															<?php }?>
														</p>
													</td>
												<?php
}
}
/* {/block 'order_detail_room_type_extra_demands'} */
/* {block 'order_confirmation_cart_total'} */
class Block_48559271067bb8edb44d8c3_25363128 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

													<td class="cart_total text-left">
														<p class="text-left">
															<?php if ($_smarty_tpl->tpl_vars['group_use_tax']->value) {?>
																<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['displayWtPriceWithCurrency'][0], array( array('price'=>($_smarty_tpl->tpl_vars['rm_v']->value['amount_tax_incl']+$_smarty_tpl->tpl_vars['rm_v']->value['extra_demands_price_ti']+$_smarty_tpl->tpl_vars['rm_v']->value['additional_services_price_ti']+$_smarty_tpl->tpl_vars['rm_v']->value['additional_services_price_auto_add_ti']),'currency'=>$_smarty_tpl->tpl_vars['objOrderCurrency']->value),$_smarty_tpl ) );?>

															<?php } else { ?>
																<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['displayWtPriceWithCurrency'][0], array( array('price'=>($_smarty_tpl->tpl_vars['rm_v']->value['amount_tax_excl']+$_smarty_tpl->tpl_vars['rm_v']->value['extra_demands_price_te']+$_smarty_tpl->tpl_vars['rm_v']->value['additional_services_price_te']+$_smarty_tpl->tpl_vars['rm_v']->value['additional_services_price_auto_add_te']),'currency'=>$_smarty_tpl->tpl_vars['objOrderCurrency']->value),$_smarty_tpl ) );?>

															<?php }?>
															<?php if (((isset($_smarty_tpl->tpl_vars['rm_v']->value['extra_demands'])) && $_smarty_tpl->tpl_vars['rm_v']->value['extra_demands']) || (isset($_smarty_tpl->tpl_vars['rm_v']->value['additional_services'])) && $_smarty_tpl->tpl_vars['rm_v']->value['additional_services']) {?>
																<span class="order-price-info">
																	<img src="<?php echo $_smarty_tpl->tpl_vars['img_dir']->value;?>
icon/icon-info.svg" />
																</span>
																<div class="price-info-container" style="display:none">
																	<div class="price-info-tooltip-cont">
																		<div class="list-row">
																			<div>
																				<p><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Room cost'),$_smarty_tpl ) );?>
 : </p>
																			</div>
																			<div class="text-right">
																				<p>
																					<?php if ($_smarty_tpl->tpl_vars['group_use_tax']->value) {?>
																						<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['displayWtPriceWithCurrency'][0], array( array('price'=>($_smarty_tpl->tpl_vars['rm_v']->value['amount_tax_incl']+$_smarty_tpl->tpl_vars['rm_v']->value['additional_services_price_auto_add_ti']),'currency'=>$_smarty_tpl->tpl_vars['objOrderCurrency']->value),$_smarty_tpl ) );?>

																					<?php } else { ?>
																						<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['displayWtPriceWithCurrency'][0], array( array('price'=>($_smarty_tpl->tpl_vars['rm_v']->value['amount_tax_excl']+$_smarty_tpl->tpl_vars['rm_v']->value['additional_services_price_auto_add_te']),'currency'=>$_smarty_tpl->tpl_vars['objOrderCurrency']->value),$_smarty_tpl ) );?>

																					<?php }?>
																				</p>
																			</div>
																		</div>
																		<div class="list-row">
																			<div>
																				<p><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Service cost'),$_smarty_tpl ) );?>
 : </p>
																			</div>
																			<div class="text-right">
																				<p>
																					<?php if ($_smarty_tpl->tpl_vars['group_use_tax']->value) {?>
																						<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['displayWtPriceWithCurrency'][0], array( array('price'=>($_smarty_tpl->tpl_vars['rm_v']->value['extra_demands_price_ti']+$_smarty_tpl->tpl_vars['rm_v']->value['additional_services_price_ti']),'currency'=>$_smarty_tpl->tpl_vars['objOrderCurrency']->value),$_smarty_tpl ) );?>

																					<?php } else { ?>
																						<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['displayWtPriceWithCurrency'][0], array( array('price'=>($_smarty_tpl->tpl_vars['rm_v']->value['extra_demands_price_te']+$_smarty_tpl->tpl_vars['rm_v']->value['additional_services_price_te']),'currency'=>$_smarty_tpl->tpl_vars['objOrderCurrency']->value),$_smarty_tpl ) );?>

																					<?php }?>
																				</p>
																			</div>
																		</div>
																	</div>
																</div>
															<?php }?>
														</p>
													</td>
												<?php
}
}
/* {/block 'order_confirmation_cart_total'} */
/* {block 'order_detail_total_information'} */
class Block_47600811667bb8edb47d835_82014596 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

									<?php if ((isset($_smarty_tpl->tpl_vars['cart_htl_data']->value))) {?>
										<?php if ($_smarty_tpl->tpl_vars['priceDisplay']->value && $_smarty_tpl->tpl_vars['use_tax']->value) {?>
											<tr class="item">
												<td colspan="3"></td>
												<td colspan="3">
													<strong><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Total Rooms Cost (tax excl.)'),$_smarty_tpl ) );?>
</strong>
												</td>
												<td colspan="2">
													<span><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['displayWtPriceWithCurrency'][0], array( array('price'=>($_smarty_tpl->tpl_vars['orderTotalInfo']->value['total_rooms_te']+$_smarty_tpl->tpl_vars['orderTotalInfo']->value['total_services_te']+$_smarty_tpl->tpl_vars['orderTotalInfo']->value['total_auto_add_services_te']+$_smarty_tpl->tpl_vars['orderTotalInfo']->value['total_demands_price_te']),'currency'=>$_smarty_tpl->tpl_vars['objOrderCurrency']->value),$_smarty_tpl ) );?>
</span>
												</td>
											</tr>
										<?php } else { ?>
											<tr class="item">
												<td colspan="3"></td>
												<td colspan="3">
													<strong><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Total Rooms Cost'),$_smarty_tpl ) );?>
 <?php if ($_smarty_tpl->tpl_vars['use_tax']->value) {
echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'(tax incl.)'),$_smarty_tpl ) );
}?> </strong>
												</td>
												<td colspan="2">
													<span><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['displayWtPriceWithCurrency'][0], array( array('price'=>($_smarty_tpl->tpl_vars['orderTotalInfo']->value['total_rooms_ti']+$_smarty_tpl->tpl_vars['orderTotalInfo']->value['total_services_ti']+$_smarty_tpl->tpl_vars['orderTotalInfo']->value['total_auto_add_services_ti']+$_smarty_tpl->tpl_vars['orderTotalInfo']->value['total_demands_price_ti']),'currency'=>$_smarty_tpl->tpl_vars['objOrderCurrency']->value),$_smarty_tpl ) );?>
</span>
												</td>
											</tr>
										<?php }?>
									<?php }?>
																											<?php if ($_smarty_tpl->tpl_vars['order']->value->total_wrapping > 0) {?>
										<tr class="item">
											<td colspan="3"></td>
											<td colspan="3">
												<strong><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Total gift wrapping cost'),$_smarty_tpl ) );?>
</strong>
											</td>
											<td colspan="2">
												<span class="price-wrapping"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['displayWtPriceWithCurrency'][0], array( array('price'=>($_smarty_tpl->tpl_vars['orderTotalInfo']->value['total_wrapping']*-1),'currency'=>$_smarty_tpl->tpl_vars['objOrderCurrency']->value),$_smarty_tpl ) );?>
</span>
											</td>
										</tr>
									<?php }?>
									<?php if ($_smarty_tpl->tpl_vars['priceDisplay']->value && $_smarty_tpl->tpl_vars['use_tax']->value && $_smarty_tpl->tpl_vars['orderTotalInfo']->value['total_convenience_fee_te']) {?>
										<tr class="item">
											<td colspan="3"></td>
											<td colspan="3">
												<strong><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Total Convenience Fees (tax excl.)'),$_smarty_tpl ) );?>
</strong>
											</td>
											<td colspan="2">
												<span><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['displayWtPriceWithCurrency'][0], array( array('price'=>($_smarty_tpl->tpl_vars['orderTotalInfo']->value['total_convenience_fee_te']),'currency'=>$_smarty_tpl->tpl_vars['objOrderCurrency']->value),$_smarty_tpl ) );?>
</span>
											</td>
										</tr>
									<?php } elseif ($_smarty_tpl->tpl_vars['orderTotalInfo']->value['total_convenience_fee_ti']) {?>
										<tr class="item">
											<td colspan="3"></td>
											<td colspan="3">
												<strong><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Total Convenience Fees'),$_smarty_tpl ) );?>
 <?php if ($_smarty_tpl->tpl_vars['use_tax']->value) {
echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'(tax incl.)'),$_smarty_tpl ) );
}?> </strong>
											</td>
											<td colspan="2">
												<span><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['displayWtPriceWithCurrency'][0], array( array('price'=>($_smarty_tpl->tpl_vars['orderTotalInfo']->value['total_convenience_fee_ti']),'currency'=>$_smarty_tpl->tpl_vars['objOrderCurrency']->value),$_smarty_tpl ) );?>
</span>
											</td>
										</tr>
									<?php }?>
									<tr class="item">
										<td colspan="3"></td>
										<td colspan="3">
											<strong><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Total Tax'),$_smarty_tpl ) );?>
</strong>
										</td>
										<td colspan="2">
											<span class="price-discount"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['displayWtPriceWithCurrency'][0], array( array('price'=>$_smarty_tpl->tpl_vars['orderTotalInfo']->value['total_tax_without_discount'],'currency'=>$_smarty_tpl->tpl_vars['objOrderCurrency']->value,'convert'=>1),$_smarty_tpl ) );?>
</span>
										</td>
									</tr>
									<?php if ($_smarty_tpl->tpl_vars['order']->value->total_discounts > 0) {?>
										<tr class="item">
											<td colspan="3"></td>
											<td colspan="3">
												<strong><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Total Vouchers'),$_smarty_tpl ) );?>
</strong>
											</td>
											<td colspan="2">
												<?php if ($_smarty_tpl->tpl_vars['priceDisplay']->value && $_smarty_tpl->tpl_vars['use_tax']->value) {?>
													<span class="price-discount"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['displayWtPriceWithCurrency'][0], array( array('price'=>($_smarty_tpl->tpl_vars['orderTotalInfo']->value['total_discounts_te']*-1),'currency'=>$_smarty_tpl->tpl_vars['objOrderCurrency']->value,'convert'=>1),$_smarty_tpl ) );?>
</span>
												<?php } else { ?>
													<span class="price-discount"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['displayWtPriceWithCurrency'][0], array( array('price'=>($_smarty_tpl->tpl_vars['orderTotalInfo']->value['total_discounts']*-1),'currency'=>$_smarty_tpl->tpl_vars['objOrderCurrency']->value,'convert'=>1),$_smarty_tpl ) );?>
</span>
												<?php }?>
											</td>
										</tr>
									<?php }?>
									<tr class="totalprice item">
										<td colspan="3"></td>
										<td colspan="3">
											<strong><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Final Booking Total'),$_smarty_tpl ) );?>
</strong>
										</td>
										<td colspan="2">
											<span><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['displayWtPriceWithCurrency'][0], array( array('price'=>$_smarty_tpl->tpl_vars['orderTotalInfo']->value['total_paid'],'currency'=>$_smarty_tpl->tpl_vars['objOrderCurrency']->value),$_smarty_tpl ) );?>
</span>
										</td>
									</tr>
									<?php if ($_smarty_tpl->tpl_vars['orderTotalInfo']->value['total_paid'] > $_smarty_tpl->tpl_vars['orderTotalInfo']->value['total_paid_real']) {?>
										<tr class="item">
											<td colspan="3"></td>
											<td colspan="3">
												<strong><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Due Amount'),$_smarty_tpl ) );?>
</strong>
											</td>
											<td colspan="2">
												<span><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['displayWtPriceWithCurrency'][0], array( array('price'=>($_smarty_tpl->tpl_vars['orderTotalInfo']->value['total_paid']-$_smarty_tpl->tpl_vars['orderTotalInfo']->value['total_paid_real']),'currency'=>$_smarty_tpl->tpl_vars['objOrderCurrency']->value),$_smarty_tpl ) );?>
</span>
											</td>
										</tr>
									<?php }?>
								<?php
}
}
/* {/block 'order_detail_total_information'} */
/* {block 'order_details'} */
class Block_61776934167bb8edb3f8681_51177041 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_checkPlugins(array(0=>array('file'=>'/home/qloapps/www/QloApps/tools/smarty/plugins/modifier.date_format.php','function'=>'smarty_modifier_date_format',),));
?>

					<div id="order-detail-content" class="">
						<table class="table table-bordered">
							<?php if ((isset($_smarty_tpl->tpl_vars['cart_htl_data']->value))) {?>
								<thead>
									<tr>
										<th class="cart_product"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Room Image'),$_smarty_tpl ) );?>
</th>
										<th class="cart_description"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Room Description'),$_smarty_tpl ) );?>
</th>
										<th><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Hotel Name'),$_smarty_tpl ) );?>
</th>
										<th><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Rooms'),$_smarty_tpl ) );?>
</th>
										<th><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Check-in Date'),$_smarty_tpl ) );?>
</th>
										<th><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Check-out Date'),$_smarty_tpl ) );?>
</th>
										<th><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Extra Services'),$_smarty_tpl ) );?>
</th>
										<th class="cart_total"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Total'),$_smarty_tpl ) );?>
</th>
									</tr>
								</thead>
								<tbody>
									<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['cart_htl_data']->value, 'data_v', false, 'data_k');
$_smarty_tpl->tpl_vars['data_v']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['data_k']->value => $_smarty_tpl->tpl_vars['data_v']->value) {
$_smarty_tpl->tpl_vars['data_v']->do_else = false;
?>
										<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['data_v']->value['date_diff'], 'rm_v', false, 'rm_k');
$_smarty_tpl->tpl_vars['rm_v']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['rm_k']->value => $_smarty_tpl->tpl_vars['rm_v']->value) {
$_smarty_tpl->tpl_vars['rm_v']->do_else = false;
?>
											<tr class="table_body">
												<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_73165482467bb8edb403b95_66850637', 'order_detail_room_type_image', $this->tplIndex);
?>

												<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_144965102667bb8edb409b90_94151940', 'order_detail_room_type_name', $this->tplIndex);
?>

												<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_110980227167bb8edb4198f5_15975592', 'order_detail_room_type_hotel_name', $this->tplIndex);
?>

												<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_198992047267bb8edb41e094_25894732', 'order_detail_room_type_guest', $this->tplIndex);
?>

												<?php $_smarty_tpl->_assignInScope('is_full_date', ($_smarty_tpl->tpl_vars['show_full_date']->value && (smarty_modifier_date_format($_smarty_tpl->tpl_vars['rm_v']->value['data_form'],'%D') == smarty_modifier_date_format($_smarty_tpl->tpl_vars['rm_v']->value['data_to'],'%D'))));?>
												<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_192949824367bb8edb43a775_36141387', 'order_detail_room_type_check_in', $this->tplIndex);
?>

												<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_160381306567bb8edb43d1c6_42125702', 'order_detail_room_type_check_out', $this->tplIndex);
?>

												<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_162491934167bb8edb43eaf8_75481582', 'order_detail_room_type_extra_demands', $this->tplIndex);
?>

												<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_48559271067bb8edb44d8c3_25363128', 'order_confirmation_cart_total', $this->tplIndex);
?>

												<?php if ((isset($_smarty_tpl->tpl_vars['orders_has_invoice']->value)) && $_smarty_tpl->tpl_vars['orders_has_invoice']->value && $_smarty_tpl->tpl_vars['order']->value->payment != 'Free order') {?>
												<?php }?>
																							</tr>
										<?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
									<?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
								</tbody>
							<?php }?>
							<?php if ((isset($_smarty_tpl->tpl_vars['cart_service_products']->value))) {?>
								<thead>
									<tr>
										<th colspan="1"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Image'),$_smarty_tpl ) );?>
</th>
										<th colspan="2"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Name'),$_smarty_tpl ) );?>
</th>
										<th colspan="2"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Unit Price'),$_smarty_tpl ) );?>
</th>
										<th colspan="1"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Quantity'),$_smarty_tpl ) );?>
</th>
										<th colspan="2" class="cart_total"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Total'),$_smarty_tpl ) );?>
</th>
									</tr>
								</thead>
								<tbody>
									<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['cart_service_products']->value, 'data_v', false, 'data_k');
$_smarty_tpl->tpl_vars['data_v']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['data_k']->value => $_smarty_tpl->tpl_vars['data_v']->value) {
$_smarty_tpl->tpl_vars['data_v']->do_else = false;
?>
										<tr class="table_body">
											<td class="cart_product">
												<a href="<?php echo $_smarty_tpl->tpl_vars['link']->value->getProductLink($_smarty_tpl->tpl_vars['data_v']->value['id_product']);?>
">
													<img src="<?php echo $_smarty_tpl->tpl_vars['data_v']->value['cover_img'];?>
" class="img-responsive"/>
												</a>
											</td>
											<td class="cart_product" colspan="2">
												<p class="product-name">
													<a href="<?php echo $_smarty_tpl->tpl_vars['link']->value->getProductLink($_smarty_tpl->tpl_vars['data_v']->value['id_product']);?>
">
														<?php echo $_smarty_tpl->tpl_vars['data_v']->value['product_name'];?>

													</a>
												</p>
											</td>
											<td class="cart_unit" colspan="2">
												<p class="text-center">
													<?php if ($_smarty_tpl->tpl_vars['group_use_tax']->value) {?>
														<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['displayWtPriceWithCurrency'][0], array( array('price'=>$_smarty_tpl->tpl_vars['data_v']->value['unit_price_tax_incl'],'currency'=>$_smarty_tpl->tpl_vars['objOrderCurrency']->value),$_smarty_tpl ) );?>

																											<?php } else { ?>
																												<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['displayWtPriceWithCurrency'][0], array( array('price'=>$_smarty_tpl->tpl_vars['data_v']->value['unit_price_tax_excl'],'currency'=>$_smarty_tpl->tpl_vars['objOrderCurrency']->value),$_smarty_tpl ) );?>

													<?php }?>
												</p>
											</td>
											<td>
												<p class="text-center">
													<?php echo $_smarty_tpl->tpl_vars['data_v']->value['product_quantity'];?>

												</p>
											</td>
											<td>
												<p class="text-left" colspan="2">
													<?php if ($_smarty_tpl->tpl_vars['group_use_tax']->value) {?>
														<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['displayWtPriceWithCurrency'][0], array( array('price'=>$_smarty_tpl->tpl_vars['data_v']->value['total_price_tax_incl'],'currency'=>$_smarty_tpl->tpl_vars['objOrderCurrency']->value),$_smarty_tpl ) );?>

													<?php } else { ?>
														<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['displayWtPriceWithCurrency'][0], array( array('price'=>$_smarty_tpl->tpl_vars['data_v']->value['total_price_tax_excl'],'currency'=>$_smarty_tpl->tpl_vars['objOrderCurrency']->value),$_smarty_tpl ) );?>

													<?php }?>
												</p>
											</td>
										</tr>
									<?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
								</tbody>
							<?php }?>
							<tfoot>
								<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_47600811667bb8edb47d835_82014596', 'order_detail_total_information', $this->tplIndex);
?>

							</tfoot>
						</table>
					</div>
				<?php
}
}
/* {/block 'order_details'} */
/* {block 'order_confirmation_room_extra_services'} */
class Block_199753849667bb8edb49d784_29622309 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

		<div style="display:none;" id="rooms_extra_services">
					</div>
	<?php
}
}
/* {/block 'order_confirmation_room_extra_services'} */
/* {block 'order_confirmation_js_vars'} */
class Block_126427724767bb8edb49e3c6_33023506 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

		<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['addJsDef'][0], array( array('historyUrl'=>preg_replace("%(?<!\\\\)'%", "\'",$_smarty_tpl->tpl_vars['link']->value->getPageLink("orderdetail",true))),$_smarty_tpl ) );
$_block_plugin132 = isset($_smarty_tpl->smarty->registered_plugins['block']['addJsDefL'][0][0]) ? $_smarty_tpl->smarty->registered_plugins['block']['addJsDefL'][0][0] : null;
if (!is_callable(array($_block_plugin132, 'addJsDefL'))) {
throw new SmartyException('block tag \'addJsDefL\' not callable or registered');
}
$_smarty_tpl->smarty->_cache['_tag_stack'][] = array('addJsDefL', array('name'=>'req_sent_msg'));
$_block_repeat=true;
echo $_block_plugin132->addJsDefL(array('name'=>'req_sent_msg'), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();
echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Request Sent..','js'=>1),$_smarty_tpl ) );
$_block_repeat=false;
echo $_block_plugin132->addJsDefL(array('name'=>'req_sent_msg'), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);
$_block_plugin133 = isset($_smarty_tpl->smarty->registered_plugins['block']['addJsDefL'][0][0]) ? $_smarty_tpl->smarty->registered_plugins['block']['addJsDefL'][0][0] : null;
if (!is_callable(array($_block_plugin133, 'addJsDefL'))) {
throw new SmartyException('block tag \'addJsDefL\' not callable or registered');
}
$_smarty_tpl->smarty->_cache['_tag_stack'][] = array('addJsDefL', array('name'=>'wait_stage_msg'));
$_block_repeat=true;
echo $_block_plugin133->addJsDefL(array('name'=>'wait_stage_msg'), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();
echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Waiting','js'=>1),$_smarty_tpl ) );
$_block_repeat=false;
echo $_block_plugin133->addJsDefL(array('name'=>'wait_stage_msg'), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);
$_block_plugin134 = isset($_smarty_tpl->smarty->registered_plugins['block']['addJsDefL'][0][0]) ? $_smarty_tpl->smarty->registered_plugins['block']['addJsDefL'][0][0] : null;
if (!is_callable(array($_block_plugin134, 'addJsDefL'))) {
throw new SmartyException('block tag \'addJsDefL\' not callable or registered');
}
$_smarty_tpl->smarty->_cache['_tag_stack'][] = array('addJsDefL', array('name'=>'pending_state_msg'));
$_block_repeat=true;
echo $_block_plugin134->addJsDefL(array('name'=>'pending_state_msg'), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();
echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Pending...','js'=>1),$_smarty_tpl ) );
$_block_repeat=false;
echo $_block_plugin134->addJsDefL(array('name'=>'pending_state_msg'), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);
$_block_plugin135 = isset($_smarty_tpl->smarty->registered_plugins['block']['addJsDefL'][0][0]) ? $_smarty_tpl->smarty->registered_plugins['block']['addJsDefL'][0][0] : null;
if (!is_callable(array($_block_plugin135, 'addJsDefL'))) {
throw new SmartyException('block tag \'addJsDefL\' not callable or registered');
}
$_smarty_tpl->smarty->_cache['_tag_stack'][] = array('addJsDefL', array('name'=>'mail_sending_err'));
$_block_repeat=true;
echo $_block_plugin135->addJsDefL(array('name'=>'mail_sending_err'), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();
echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Some error occurred while sending mail to the customer','js'=>1),$_smarty_tpl ) );
$_block_repeat=false;
echo $_block_plugin135->addJsDefL(array('name'=>'mail_sending_err'), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);
$_block_plugin136 = isset($_smarty_tpl->smarty->registered_plugins['block']['addJsDefL'][0][0]) ? $_smarty_tpl->smarty->registered_plugins['block']['addJsDefL'][0][0] : null;
if (!is_callable(array($_block_plugin136, 'addJsDefL'))) {
throw new SmartyException('block tag \'addJsDefL\' not callable or registered');
}
$_smarty_tpl->smarty->_cache['_tag_stack'][] = array('addJsDefL', array('name'=>'refund_request_sending_error'));
$_block_repeat=true;
echo $_block_plugin136->addJsDefL(array('name'=>'refund_request_sending_error'), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();
echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Some error occurred while processing request for order cancellation.','js'=>1),$_smarty_tpl ) );
$_block_repeat=false;
echo $_block_plugin136->addJsDefL(array('name'=>'refund_request_sending_error'), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);?>
	<?php
}
}
/* {/block 'order_confirmation_js_vars'} */
/* {block 'order_confirmation'} */
class Block_181342616867bb8edb3d9112_84540594 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'order_confirmation' => 
  array (
    0 => 'Block_181342616867bb8edb3d9112_84540594',
  ),
  'order_confirmation_heading' => 
  array (
    0 => 'Block_168385126467bb8edb3db0b2_12063841',
  ),
  'order_steps' => 
  array (
    0 => 'Block_213384412467bb8edb3dc8a3_02153538',
  ),
  'errors' => 
  array (
    0 => 'Block_85853362467bb8edb3df379_04187012',
  ),
  'displayOrderConfirmation' => 
  array (
    0 => 'Block_12598532667bb8edb3e0e90_59831657',
  ),
  'displayPaymentReturn' => 
  array (
    0 => 'Block_70042623267bb8edb3e2258_00332508',
  ),
  'order_detail_heading' => 
  array (
    0 => 'Block_48820624467bb8edb3f6578_86874649',
  ),
  'order_details' => 
  array (
    0 => 'Block_61776934167bb8edb3f8681_51177041',
  ),
  'order_detail_room_type_image' => 
  array (
    0 => 'Block_73165482467bb8edb403b95_66850637',
  ),
  'order_detail_room_type_name' => 
  array (
    0 => 'Block_144965102667bb8edb409b90_94151940',
  ),
  'order_detail_room_type_hotel_name' => 
  array (
    0 => 'Block_110980227167bb8edb4198f5_15975592',
  ),
  'displayOrderConfirmationHotelNameAfter' => 
  array (
    0 => 'Block_8183224367bb8edb41a853_54572600',
  ),
  'order_detail_room_type_guest' => 
  array (
    0 => 'Block_198992047267bb8edb41e094_25894732',
  ),
  'order_detail_room_type_check_in' => 
  array (
    0 => 'Block_192949824367bb8edb43a775_36141387',
  ),
  'order_detail_room_type_check_out' => 
  array (
    0 => 'Block_160381306567bb8edb43d1c6_42125702',
  ),
  'order_detail_room_type_extra_demands' => 
  array (
    0 => 'Block_162491934167bb8edb43eaf8_75481582',
  ),
  'order_confirmation_cart_total' => 
  array (
    0 => 'Block_48559271067bb8edb44d8c3_25363128',
  ),
  'order_detail_total_information' => 
  array (
    0 => 'Block_47600811667bb8edb47d835_82014596',
  ),
  'order_confirmation_room_extra_services' => 
  array (
    0 => 'Block_199753849667bb8edb49d784_29622309',
  ),
  'order_confirmation_js_vars' => 
  array (
    0 => 'Block_126427724767bb8edb49e3c6_33023506',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

	<?php $_smarty_tpl->smarty->ext->_capture->open($_smarty_tpl, 'path', null, null);
echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Order confirmation'),$_smarty_tpl ) );
$_smarty_tpl->smarty->ext->_capture->close($_smarty_tpl);?>
	<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_168385126467bb8edb3db0b2_12063841', 'order_confirmation_heading', $this->tplIndex);
?>


	<?php $_smarty_tpl->_assignInScope('current_step', 'payment');?>
	<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_213384412467bb8edb3dc8a3_02153538', 'order_steps', $this->tplIndex);
?>


	<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_85853362467bb8edb3df379_04187012', 'errors', $this->tplIndex);
?>


	<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_12598532667bb8edb3e0e90_59831657', 'displayOrderConfirmation', $this->tplIndex);
?>

	<div class="box">
		<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_70042623267bb8edb3e2258_00332508', 'displayPaymentReturn', $this->tplIndex);
?>

		<?php if ((isset($_smarty_tpl->tpl_vars['order']->value->id)) && $_smarty_tpl->tpl_vars['order']->value->id) {?>
			<?php if ($_smarty_tpl->tpl_vars['is_guest']->value) {?>
				<p><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Your Order Reference is:'),$_smarty_tpl ) );?>
 <span class="bold"><?php echo $_smarty_tpl->tpl_vars['order']->value->reference;?>
</span></p>
				<p class="cart_navigation exclusive">
				<a class="button-exclusive btn btn-default" href="<?php ob_start();
echo urlencode($_smarty_tpl->tpl_vars['reference_order']->value);
$_prefixVariable77=ob_get_clean();
ob_start();
echo urlencode($_smarty_tpl->tpl_vars['email']->value);
$_prefixVariable78=ob_get_clean();
echo htmlspecialchars($_smarty_tpl->tpl_vars['link']->value->getPageLink('guest-tracking',true,NULL,"id_order=".$_prefixVariable77."&email=".$_prefixVariable78), ENT_QUOTES, 'UTF-8', true);?>
" title="<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Follow my order'),$_smarty_tpl ) );?>
"><i class="icon-chevron-left"></i><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Follow my order'),$_smarty_tpl ) );?>
</a>
				</p>
			<?php } else { ?>
				<?php if ((isset($_smarty_tpl->tpl_vars['is_free_order']->value)) && $_smarty_tpl->tpl_vars['is_free_order']->value) {?>
					<p class="alert alert-success"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Your'),$_smarty_tpl ) );?>
 <?php if ($_smarty_tpl->tpl_vars['total_rooms_booked']->value > 1) {
echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'bookings have'),$_smarty_tpl ) );
} else {
echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'booking has'),$_smarty_tpl ) );
}?> <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'been created successfully!'),$_smarty_tpl ) );?>
</p><br />
				<?php }?>
				<p><strong><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Order Status :'),$_smarty_tpl ) );?>
</strong> <span><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Confirmed'),$_smarty_tpl ) );?>
</span></p>
				<p><strong><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Order Reference :'),$_smarty_tpl ) );?>
</strong> <span class="bold"><?php echo $_smarty_tpl->tpl_vars['order']->value->reference;?>
</span></p>
				<?php if ($_smarty_tpl->tpl_vars['any_back_order']->value) {?>
					<?php if ($_smarty_tpl->tpl_vars['shw_bo_msg']->value) {?>
						<br>
						<p class="back_o_msg"><strong><sup>*</sup><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Some of your rooms are on back order. Please read the following message for rooms with status on backorder'),$_smarty_tpl ) );?>
</strong></p>
						<p>
							-&nbsp;&nbsp;<?php echo $_smarty_tpl->tpl_vars['back_ord_msg']->value;?>

						</p>
					<?php }?>
				<?php }?>
				<hr>
				<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_48820624467bb8edb3f6578_86874649', 'order_detail_heading', $this->tplIndex);
?>

				<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_61776934167bb8edb3f8681_51177041', 'order_details', $this->tplIndex);
?>

				<p><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'An email has been sent with this information.'),$_smarty_tpl ) );?>

					<br /><strong><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Your booking has been received successfully and we are looking forward to welcoming you.'),$_smarty_tpl ) );?>
</strong>
					<br /><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'If you have questions, comments or concerns, please contact our'),$_smarty_tpl ) );?>
 <a class="cust_serv_lnk" href="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['link']->value->getPageLink('contact',true), ENT_QUOTES, 'UTF-8', true);?>
"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'expert customer support team.'),$_smarty_tpl ) );?>
</a>
				</p>
				<p class="cart_navigation exclusive">
					<a class="btn" href="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['link']->value->getPageLink('history',true), ENT_QUOTES, 'UTF-8', true);?>
" title="<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Go to your order history page'),$_smarty_tpl ) );?>
"><i class="icon-chevron-left"></i><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'View your order history'),$_smarty_tpl ) );?>
</a>
				</p>
			<?php }?>
		<?php }?>
	</div>

		<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_199753849667bb8edb49d784_29622309', 'order_confirmation_room_extra_services', $this->tplIndex);
?>

	<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_126427724767bb8edb49e3c6_33023506', 'order_confirmation_js_vars', $this->tplIndex);
?>

<?php
}
}
/* {/block 'order_confirmation'} */
}
