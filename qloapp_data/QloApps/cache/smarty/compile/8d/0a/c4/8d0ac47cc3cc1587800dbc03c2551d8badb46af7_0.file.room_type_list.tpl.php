<?php
/* Smarty version 3.1.39, created on 2025-02-24 02:40:48
  from '/home/qloapps/www/QloApps/themes/hotel-reservation-theme/_partials/room_type_list.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.39',
  'unifunc' => 'content_67bb8ed8586704_99771970',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '8d0ac47cc3cc1587800dbc03c2551d8badb46af7' => 
    array (
      0 => '/home/qloapps/www/QloApps/themes/hotel-reservation-theme/_partials/room_type_list.tpl',
      1 => 1728563708,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:./occupancy_field.tpl' => 1,
    'file:./quantity_field.tpl' => 1,
  ),
),false)) {
function content_67bb8ed8586704_99771970 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, false);
?>

<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_84579109467bb8ed84a6d06_15452843', 'displayRoomTypeListBefore');
?>

<?php if ((isset($_smarty_tpl->tpl_vars['booking_data']->value['stats'])) && $_smarty_tpl->tpl_vars['booking_data']->value['stats']['num_avail']) {?>
	<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['booking_data']->value['rm_data'], 'room_v', false, 'room_k');
$_smarty_tpl->tpl_vars['room_v']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['room_k']->value => $_smarty_tpl->tpl_vars['room_v']->value) {
$_smarty_tpl->tpl_vars['room_v']->do_else = false;
?>
		<?php if (count($_smarty_tpl->tpl_vars['room_v']->value['data']['available'])) {?>
			<div class="col-sm-12 room_cont" data-id-product="<?php echo mb_convert_encoding(htmlspecialchars($_smarty_tpl->tpl_vars['room_v']->value['id_product'], ENT_QUOTES, 'UTF-8', true), "HTML-ENTITIES", 'UTF-8');?>
">
				<div class="row">
					<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_86677622567bb8ed84bcd47_34870594', 'room_type_list_room_image');
?>

					<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_191225443867bb8ed84cf518_73342337', 'room_type_list_room_detail');
?>

				</div>
			</div>
		<?php }?>
	<?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);
} else { ?>
	<div class="noRoomsAvailAlert">
		<span><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'No room available for this hotel!'),$_smarty_tpl ) );?>
</span>
	</div>
<?php }
}
/* {block 'displayRoomTypeListBefore'} */
class Block_84579109467bb8ed84a6d06_15452843 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'displayRoomTypeListBefore' => 
  array (
    0 => 'Block_84579109467bb8ed84a6d06_15452843',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

	<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['hook'][0], array( array('h'=>'displayRoomTypeListBefore'),$_smarty_tpl ) );?>

<?php
}
}
/* {/block 'displayRoomTypeListBefore'} */
/* {block 'displayRoomTypeListImageAfter'} */
class Block_143447974267bb8ed84c6511_03224719 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

									<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['hook'][0], array( array('h'=>'displayRoomTypeListImageAfter','product'=>$_smarty_tpl->tpl_vars['room_v']->value),$_smarty_tpl ) );?>

								<?php
}
}
/* {/block 'displayRoomTypeListImageAfter'} */
/* {block 'room_type_list_room_image'} */
class Block_86677622567bb8ed84bcd47_34870594 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'room_type_list_room_image' => 
  array (
    0 => 'Block_86677622567bb8ed84bcd47_34870594',
  ),
  'displayRoomTypeListImageAfter' => 
  array (
    0 => 'Block_143447974267bb8ed84c6511_03224719',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

						<div class="col-sm-4">
								<a href="<?php echo mb_convert_encoding(htmlspecialchars($_smarty_tpl->tpl_vars['room_v']->value['product_link'], ENT_QUOTES, 'UTF-8', true), "HTML-ENTITIES", 'UTF-8');?>
">
								<img src="<?php echo mb_convert_encoding(htmlspecialchars($_smarty_tpl->tpl_vars['room_v']->value['image'], ENT_QUOTES, 'UTF-8', true), "HTML-ENTITIES", 'UTF-8');?>
" class="img-responsive room-type-image">
								<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_143447974267bb8ed84c6511_03224719', 'displayRoomTypeListImageAfter', $this->tplIndex);
?>

							</a>
						</div>
					<?php
}
}
/* {/block 'room_type_list_room_image'} */
/* {block 'room_type_list_room_quantity'} */
class Block_205968518867bb8ed84d07b3_96329058 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

								<div class="row">
									<p class="rm_heading col-sm-12 col-md-7"><?php echo mb_convert_encoding(htmlspecialchars($_smarty_tpl->tpl_vars['room_v']->value['name'], ENT_QUOTES, 'UTF-8', true), "HTML-ENTITIES", 'UTF-8');?>
</p>
									<?php if (!(isset($_smarty_tpl->tpl_vars['restricted_country_mode']->value)) && !$_smarty_tpl->tpl_vars['PS_CATALOG_MODE']->value && !$_smarty_tpl->tpl_vars['order_date_restrict']->value) {?>
										<p class="rm_left col-sm-12 col-md-5" <?php if ($_smarty_tpl->tpl_vars['room_v']->value['room_left'] > $_smarty_tpl->tpl_vars['warning_num']->value) {?>  style="display:none"<?php }?>>
											<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Hurry!'),$_smarty_tpl ) );?>
 <span class="remain_rm_qty"><?php echo mb_convert_encoding(htmlspecialchars($_smarty_tpl->tpl_vars['room_v']->value['room_left'], ENT_QUOTES, 'UTF-8', true), "HTML-ENTITIES", 'UTF-8');?>
</span> <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'rooms left'),$_smarty_tpl ) );?>

										</p>
									<?php }?>
								</div>
							<?php
}
}
/* {/block 'room_type_list_room_quantity'} */
/* {block 'room_type_list_room_description'} */
class Block_55961360767bb8ed84db218_42712619 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

								<div class="rm_desc"><?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'truncate' ][ 0 ], array( $_smarty_tpl->tpl_vars['room_v']->value['description_short'],190,'',true ));?>
&nbsp;<a class="view_more" href="<?php echo mb_convert_encoding(htmlspecialchars($_smarty_tpl->tpl_vars['room_v']->value['product_link'], ENT_QUOTES, 'UTF-8', true), "HTML-ENTITIES", 'UTF-8');?>
"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'View More'),$_smarty_tpl ) );?>
....</a></div>
							<?php
}
}
/* {/block 'room_type_list_room_description'} */
/* {block 'room_type_list_room_features'} */
class Block_175441888367bb8ed84e46f0_22637507 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

										<div class="col-sm-12 col-md-5 col-lg-6">
											<?php if (!empty($_smarty_tpl->tpl_vars['room_v']->value['feature'])) {?>
												<p class="rm_amenities_cont">
													<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['room_v']->value['feature'], 'feat_v', false, 'feat_k');
$_smarty_tpl->tpl_vars['feat_v']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['feat_k']->value => $_smarty_tpl->tpl_vars['feat_v']->value) {
$_smarty_tpl->tpl_vars['feat_v']->do_else = false;
?>
														<img title="<?php echo mb_convert_encoding(htmlspecialchars($_smarty_tpl->tpl_vars['feat_v']->value['name'], ENT_QUOTES, 'UTF-8', true), "HTML-ENTITIES", 'UTF-8');?>
" src="<?php echo mb_convert_encoding(htmlspecialchars($_smarty_tpl->tpl_vars['link']->value->getMediaLink(((string)$_smarty_tpl->tpl_vars['feat_img_dir']->value).((string)$_smarty_tpl->tpl_vars['feat_v']->value['value'])), ENT_QUOTES, 'UTF-8', true), "HTML-ENTITIES", 'UTF-8');?>
" class="rm_amen">
													<?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
												</p>
											<?php }?>
										</div>
									<?php
}
}
/* {/block 'room_type_list_room_features'} */
/* {block 'room_type_list_room_max_guests_mobile'} */
class Block_49012658067bb8ed84f1120_56815119 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

										<div class="col-sm-12 hidden-md hidden-lg">
											<p class="capa_txt"><span><?php echo mb_convert_encoding(htmlspecialchars($_smarty_tpl->tpl_vars['room_v']->value['max_guests'], ENT_QUOTES, 'UTF-8', true), "HTML-ENTITIES", 'UTF-8');?>
 <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Max guests:'),$_smarty_tpl ) );?>
</span><span class="capa_data"> <?php echo mb_convert_encoding(htmlspecialchars($_smarty_tpl->tpl_vars['room_v']->value['max_adults'], ENT_QUOTES, 'UTF-8', true), "HTML-ENTITIES", 'UTF-8');?>
 <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Adults'),$_smarty_tpl ) );?>
, <?php echo mb_convert_encoding(htmlspecialchars($_smarty_tpl->tpl_vars['room_v']->value['max_children'], ENT_QUOTES, 'UTF-8', true), "HTML-ENTITIES", 'UTF-8');?>
 <?php if ($_smarty_tpl->tpl_vars['room_v']->value['children'] > 1) {
echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Children'),$_smarty_tpl ) );
} else {
echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Child'),$_smarty_tpl ) );
}?></span></p>
										</div>
									<?php
}
}
/* {/block 'room_type_list_room_max_guests_mobile'} */
/* {block 'room_type_list_room_price'} */
class Block_68540900767bb8ed84ff485_22904443 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

										<div class="col-sm-12 col-md-7 col-lg-6">
											<?php if (!(isset($_smarty_tpl->tpl_vars['restricted_country_mode']->value)) && !$_smarty_tpl->tpl_vars['PS_CATALOG_MODE']->value && !$_smarty_tpl->tpl_vars['order_date_restrict']->value) {?>

												<p class="rm_price_cont">
													<?php if ($_smarty_tpl->tpl_vars['room_v']->value['feature_price_diff'] >= 0) {?>
														<span class="rm_price_val <?php if ($_smarty_tpl->tpl_vars['room_v']->value['feature_price_diff'] > 0) {?>room_type_old_price<?php }?>">
															<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['displayPrice'][0], array( array('price'=>floatVal(round($_smarty_tpl->tpl_vars['room_v']->value['price_without_reduction'],2))),$_smarty_tpl ) );?>

														</span>
													<?php }?>
													<?php if ($_smarty_tpl->tpl_vars['room_v']->value['feature_price_diff']) {?>
														<span class="rm_price_val">
															<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['displayPrice'][0], array( array('price'=>floatVal(round($_smarty_tpl->tpl_vars['room_v']->value['feature_price'],2))),$_smarty_tpl ) );?>

														</span>
													<?php }?>
													<span class="rm_price_txt">/<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Per Night'),$_smarty_tpl ) );?>
</span>
												</p>
											<?php }?>
										</div>
									<?php
}
}
/* {/block 'room_type_list_room_price'} */
/* {block 'room_type_list_room_max_guests'} */
class Block_172158040967bb8ed85253a1_79025093 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

										<div class="col-sm-12 col-md-6 col-lg-4 visible-md visible-lg">
											<div class="capa_txt"><span><?php echo mb_convert_encoding(htmlspecialchars($_smarty_tpl->tpl_vars['room_v']->value['max_guests'], ENT_QUOTES, 'UTF-8', true), "HTML-ENTITIES", 'UTF-8');?>
 <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Max guests:'),$_smarty_tpl ) );?>
</span><br><span class="capa_data"> <?php echo mb_convert_encoding(htmlspecialchars($_smarty_tpl->tpl_vars['room_v']->value['max_adults'], ENT_QUOTES, 'UTF-8', true), "HTML-ENTITIES", 'UTF-8');?>
 <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Adults'),$_smarty_tpl ) );?>
, <?php echo mb_convert_encoding(htmlspecialchars($_smarty_tpl->tpl_vars['room_v']->value['max_children'], ENT_QUOTES, 'UTF-8', true), "HTML-ENTITIES", 'UTF-8');?>
 <?php if ($_smarty_tpl->tpl_vars['room_v']->value['children'] > 1) {
echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Children'),$_smarty_tpl ) );
} else {
echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Child'),$_smarty_tpl ) );
}?></span></div>
										</div>
									<?php
}
}
/* {/block 'room_type_list_room_max_guests'} */
/* {block 'occupancy_field'} */
class Block_71803631367bb8ed8546715_67122595 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

																<?php $_smarty_tpl->_subTemplateRender("file:./occupancy_field.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('room_type_info'=>$_smarty_tpl->tpl_vars['room_v']->value,'total_available_rooms'=>$_smarty_tpl->tpl_vars['room_v']->value['room_left']), 0, true);
?>
															<?php
}
}
/* {/block 'occupancy_field'} */
/* {block 'quantity_field'} */
class Block_127856321167bb8ed8552c32_40871410 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

																<?php $_smarty_tpl->_subTemplateRender("file:./quantity_field.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('total_available_rooms'=>$_smarty_tpl->tpl_vars['room_v']->value['room_left']), 0, true);
?>
															<?php
}
}
/* {/block 'quantity_field'} */
/* {block 'room_type_list_room_book_now_button'} */
class Block_117168780367bb8ed8557f94_92080969 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

														<div>
															<a cat_rm_check_in="<?php echo mb_convert_encoding(htmlspecialchars($_smarty_tpl->tpl_vars['booking_date_from']->value, ENT_QUOTES, 'UTF-8', true), "HTML-ENTITIES", 'UTF-8');?>
" cat_rm_check_out="<?php echo mb_convert_encoding(htmlspecialchars($_smarty_tpl->tpl_vars['booking_date_to']->value, ENT_QUOTES, 'UTF-8', true), "HTML-ENTITIES", 'UTF-8');?>
" href="" rm_product_id="<?php echo $_smarty_tpl->tpl_vars['room_v']->value['id_product'];?>
" cat_rm_book_nm_days="<?php echo mb_convert_encoding(htmlspecialchars($_smarty_tpl->tpl_vars['num_days']->value, ENT_QUOTES, 'UTF-8', true), "HTML-ENTITIES", 'UTF-8');?>
" data-id-product-attribute="0" data-id-product="<?php echo intval($_smarty_tpl->tpl_vars['room_v']->value['id_product']);?>
" class="btn btn-default button button-medium ajax_add_to_cart_button"><span><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Book Now'),$_smarty_tpl ) );?>
</span></a>
														</div>
													<?php
}
}
/* {/block 'room_type_list_room_book_now_button'} */
/* {block 'room_type_list_room_booking_fields'} */
class Block_120829074567bb8ed853e087_32850399 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

											<div class="booking_room_fields">
												<?php if (!(isset($_smarty_tpl->tpl_vars['restricted_country_mode']->value)) && !$_smarty_tpl->tpl_vars['PS_CATALOG_MODE']->value && !$_smarty_tpl->tpl_vars['order_date_restrict']->value) {?>
													<?php if ((isset($_smarty_tpl->tpl_vars['occupancy_required_for_booking']->value)) && $_smarty_tpl->tpl_vars['occupancy_required_for_booking']->value) {?>
														<div class="booking_guest_occupancy_conatiner">
															<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_71803631367bb8ed8546715_67122595', 'occupancy_field', $this->tplIndex);
?>

														</div>
													<?php } else { ?>
														<div>
															<label><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Qty:'),$_smarty_tpl ) );?>
</label>
															<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_127856321167bb8ed8552c32_40871410', 'quantity_field', $this->tplIndex);
?>

														</div>
													<?php }?>
													<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_117168780367bb8ed8557f94_92080969', 'room_type_list_room_book_now_button', $this->tplIndex);
?>

												<?php }?>
											</div>
										<?php
}
}
/* {/block 'room_type_list_room_booking_fields'} */
/* {block 'room_type_list_room_detail'} */
class Block_191225443867bb8ed84cf518_73342337 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'room_type_list_room_detail' => 
  array (
    0 => 'Block_191225443867bb8ed84cf518_73342337',
  ),
  'room_type_list_room_quantity' => 
  array (
    0 => 'Block_205968518867bb8ed84d07b3_96329058',
  ),
  'room_type_list_room_description' => 
  array (
    0 => 'Block_55961360767bb8ed84db218_42712619',
  ),
  'room_type_list_room_features' => 
  array (
    0 => 'Block_175441888367bb8ed84e46f0_22637507',
  ),
  'room_type_list_room_max_guests_mobile' => 
  array (
    0 => 'Block_49012658067bb8ed84f1120_56815119',
  ),
  'room_type_list_room_price' => 
  array (
    0 => 'Block_68540900767bb8ed84ff485_22904443',
  ),
  'room_type_list_room_max_guests' => 
  array (
    0 => 'Block_172158040967bb8ed85253a1_79025093',
  ),
  'room_type_list_room_booking_fields' => 
  array (
    0 => 'Block_120829074567bb8ed853e087_32850399',
  ),
  'occupancy_field' => 
  array (
    0 => 'Block_71803631367bb8ed8546715_67122595',
  ),
  'quantity_field' => 
  array (
    0 => 'Block_127856321167bb8ed8552c32_40871410',
  ),
  'room_type_list_room_book_now_button' => 
  array (
    0 => 'Block_117168780367bb8ed8557f94_92080969',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

						<div class="col-sm-8 room_info_cont">
							<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_205968518867bb8ed84d07b3_96329058', 'room_type_list_room_quantity', $this->tplIndex);
?>

							<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_55961360767bb8ed84db218_42712619', 'room_type_list_room_description', $this->tplIndex);
?>

							<div class="room_features_cont">
								<div class="row">
									<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_175441888367bb8ed84e46f0_22637507', 'room_type_list_room_features', $this->tplIndex);
?>

									<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_49012658067bb8ed84f1120_56815119', 'room_type_list_room_max_guests_mobile', $this->tplIndex);
?>

									<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_68540900767bb8ed84ff485_22904443', 'room_type_list_room_price', $this->tplIndex);
?>

								</div>
								<div class="row">
									<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_172158040967bb8ed85253a1_79025093', 'room_type_list_room_max_guests', $this->tplIndex);
?>

									<div class="col-sm-12 col-md-6 col-lg-8">
										<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_120829074567bb8ed853e087_32850399', 'room_type_list_room_booking_fields', $this->tplIndex);
?>

									</div>
								</div>
							</div>
						</div>
					<?php
}
}
/* {/block 'room_type_list_room_detail'} */
}
