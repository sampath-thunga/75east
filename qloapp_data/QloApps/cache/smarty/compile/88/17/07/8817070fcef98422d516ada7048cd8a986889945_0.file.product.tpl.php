<?php
/* Smarty version 3.1.39, created on 2025-02-24 02:40:45
  from '/home/qloapps/www/QloApps/themes/hotel-reservation-theme/product.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.39',
  'unifunc' => 'content_67bb8ed5b961c5_59902226',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '8817070fcef98422d516ada7048cd8a986889945' => 
    array (
      0 => '/home/qloapps/www/QloApps/themes/hotel-reservation-theme/product.tpl',
      1 => 1728563708,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:./_partials/booking-form.tpl' => 1,
  ),
),false)) {
function content_67bb8ed5b961c5_59902226 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, false);
?>

<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_161986353267bb8ed58bb2c0_96456249', 'product');
?>

<?php }
/* {block 'errors'} */
class Block_110582748867bb8ed58bc0b0_86997000 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

		<?php $_smarty_tpl->_subTemplateRender(((string)$_smarty_tpl->tpl_vars['tpl_dir']->value)."./errors.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, true);
?>
	<?php
}
}
/* {/block 'errors'} */
/* {block 'displayRoomTypeDetailRoomTypeNameBlock'} */
class Block_151612580167bb8ed59047e2_33195283 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

											<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['hook'][0], array( array('h'=>'displayRoomTypeDetailRoomTypeNameBlock','id_product'=>$_smarty_tpl->tpl_vars['product']->value->id),$_smarty_tpl ) );?>

										<?php
}
}
/* {/block 'displayRoomTypeDetailRoomTypeNameBlock'} */
/* {block 'displayRoomTypeDetailRoomTypeNameAfter'} */
class Block_125394615167bb8ed59070d6_96013956 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

										<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['hook'][0], array( array('h'=>'displayRoomTypeDetailRoomTypeNameAfter','id_product'=>$_smarty_tpl->tpl_vars['product']->value->id),$_smarty_tpl ) );?>

									<?php
}
}
/* {/block 'displayRoomTypeDetailRoomTypeNameAfter'} */
/* {block 'product_name'} */
class Block_117711754467bb8ed58e42b6_06066928 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

									<div class="hotel_name_block">
										<h1><span class="hotel_name"><?php echo $_smarty_tpl->tpl_vars['product']->value->name;?>

																						<?php if ((isset($_smarty_tpl->tpl_vars['id_hotel']->value)) && $_smarty_tpl->tpl_vars['id_hotel']->value) {?>&nbsp;-&nbsp;<?php echo $_smarty_tpl->tpl_vars['hotel_name']->value;
}?></span><?php if ((isset($_smarty_tpl->tpl_vars['hotel_rating']->value)) && $_smarty_tpl->tpl_vars['hotel_rating']->value) {?><div id="hotel_rating"><?php
$_smarty_tpl->tpl_vars['i'] = new Smarty_Variable(null, $_smarty_tpl->isRenderingCache);
$_smarty_tpl->tpl_vars['i']->value = 0;
if ($_smarty_tpl->tpl_vars['i']->value < $_smarty_tpl->tpl_vars['hotel_rating']->value) {
for ($_foo=true;$_smarty_tpl->tpl_vars['i']->value < $_smarty_tpl->tpl_vars['hotel_rating']->value; $_smarty_tpl->tpl_vars['i']->value++) {
?><i class="icon-star"></i><?php }
}
?></div><?php }?>
										</h1>
										<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_151612580167bb8ed59047e2_33195283', 'displayRoomTypeDetailRoomTypeNameBlock', $this->tplIndex);
?>

									</div>
									<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_125394615167bb8ed59070d6_96013956', 'displayRoomTypeDetailRoomTypeNameAfter', $this->tplIndex);
?>

								<?php
}
}
/* {/block 'product_name'} */
/* {block 'displayRoomTypeDetailRoomTypeImageBlockBefore'} */
class Block_137332905067bb8ed5908da6_61929969 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

								<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['hook'][0], array( array('h'=>'displayRoomTypeDetailRoomTypeImageBlockBefore','id_product'=>$_smarty_tpl->tpl_vars['product']->value->id),$_smarty_tpl ) );?>

							<?php
}
}
/* {/block 'displayRoomTypeDetailRoomTypeImageBlockBefore'} */
/* {block 'displayRoomTypeImageAfter'} */
class Block_54154053067bb8ed59466b5_01804327 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

													<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['hook'][0], array( array('h'=>"displayRoomTypeImageAfter"),$_smarty_tpl ) );?>

												<?php
}
}
/* {/block 'displayRoomTypeImageAfter'} */
/* {block 'product_cover_image'} */
class Block_344386867bb8ed590c3c2_36441912 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

										<div id="image-block-cont" class="col-xs-12 col-sm-9 col-sm-push-3 col-md-10 col-md-push-2">
											<div id="image-block" class="clearfix">
												<!-- <?php if ($_smarty_tpl->tpl_vars['product']->value->new) {?>
													<span class="new-box">
														<span class="new-label"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'New'),$_smarty_tpl ) );?>
</span>
													</span>
												<?php }?> -->
												<?php if ($_smarty_tpl->tpl_vars['product']->value->on_sale) {?>
													<span class="sale-box no-print">
														<span class="sale-label"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Sale!'),$_smarty_tpl ) );?>
</span>
													</span>
												<?php } elseif ($_smarty_tpl->tpl_vars['product']->value->specificPrice && $_smarty_tpl->tpl_vars['product']->value->specificPrice['reduction'] && $_smarty_tpl->tpl_vars['productPriceWithoutReduction']->value > $_smarty_tpl->tpl_vars['productPrice']->value) {?>
													<span class="discount"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Reduced price!'),$_smarty_tpl ) );?>
</span>
												<?php }?>
												<?php if ($_smarty_tpl->tpl_vars['have_image']->value) {?>
													<span id="view_full_size">
														<?php if ($_smarty_tpl->tpl_vars['jqZoomEnabled']->value && $_smarty_tpl->tpl_vars['have_image']->value && !$_smarty_tpl->tpl_vars['content_only']->value) {?>
															<a class="jqzoom" title="<?php if (!empty($_smarty_tpl->tpl_vars['cover']->value['legend'])) {
echo htmlspecialchars($_smarty_tpl->tpl_vars['cover']->value['legend'], ENT_QUOTES, 'UTF-8', true);
} else {
echo htmlspecialchars($_smarty_tpl->tpl_vars['product']->value->name, ENT_QUOTES, 'UTF-8', true);
}?>" rel="gal1" href="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['link']->value->getImageLink($_smarty_tpl->tpl_vars['product']->value->link_rewrite,$_smarty_tpl->tpl_vars['cover']->value['id_image'],'thickbox_default'), ENT_QUOTES, 'UTF-8', true);?>
">
																<img itemprop="image" src="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['link']->value->getImageLink($_smarty_tpl->tpl_vars['product']->value->link_rewrite,$_smarty_tpl->tpl_vars['cover']->value['id_image'],'large_default'), ENT_QUOTES, 'UTF-8', true);?>
" title="<?php if (!empty($_smarty_tpl->tpl_vars['cover']->value['legend'])) {
echo htmlspecialchars($_smarty_tpl->tpl_vars['cover']->value['legend'], ENT_QUOTES, 'UTF-8', true);
} else {
echo htmlspecialchars($_smarty_tpl->tpl_vars['product']->value->name, ENT_QUOTES, 'UTF-8', true);
}?>" alt="<?php if (!empty($_smarty_tpl->tpl_vars['cover']->value['legend'])) {
echo htmlspecialchars($_smarty_tpl->tpl_vars['cover']->value['legend'], ENT_QUOTES, 'UTF-8', true);
} else {
echo htmlspecialchars($_smarty_tpl->tpl_vars['product']->value->name, ENT_QUOTES, 'UTF-8', true);
}?>"/>
															</a>
														<?php } else { ?>
															<img id="bigpic" itemprop="image" src="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['link']->value->getImageLink($_smarty_tpl->tpl_vars['product']->value->link_rewrite,$_smarty_tpl->tpl_vars['cover']->value['id_image'],'large_default'), ENT_QUOTES, 'UTF-8', true);?>
" title="<?php if (!empty($_smarty_tpl->tpl_vars['cover']->value['legend'])) {
echo htmlspecialchars($_smarty_tpl->tpl_vars['cover']->value['legend'], ENT_QUOTES, 'UTF-8', true);
} else {
echo htmlspecialchars($_smarty_tpl->tpl_vars['product']->value->name, ENT_QUOTES, 'UTF-8', true);
}?>" alt="<?php if (!empty($_smarty_tpl->tpl_vars['cover']->value['legend'])) {
echo htmlspecialchars($_smarty_tpl->tpl_vars['cover']->value['legend'], ENT_QUOTES, 'UTF-8', true);
} else {
echo htmlspecialchars($_smarty_tpl->tpl_vars['product']->value->name, ENT_QUOTES, 'UTF-8', true);
}?>" width="<?php echo $_smarty_tpl->tpl_vars['largeSize']->value['width'];?>
" height="<?php echo $_smarty_tpl->tpl_vars['largeSize']->value['height'];?>
"/>
															<!-- <?php if (!$_smarty_tpl->tpl_vars['content_only']->value) {?>
																<span class="span_link no-print"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'View larger'),$_smarty_tpl ) );?>
</span>
															<?php }?> -->
														<?php }?>
													</span>
												<?php } else { ?>
													<span id="view_full_size">
														<img itemprop="image" src="<?php echo $_smarty_tpl->tpl_vars['img_prod_dir']->value;
echo $_smarty_tpl->tpl_vars['lang_iso']->value;?>
-default-large_default.jpg" id="bigpic" alt="" title="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['product']->value->name, ENT_QUOTES, 'UTF-8', true);?>
" width="<?php echo $_smarty_tpl->tpl_vars['largeSize']->value['width'];?>
" height="<?php echo $_smarty_tpl->tpl_vars['largeSize']->value['height'];?>
"/>
														<?php if (!$_smarty_tpl->tpl_vars['content_only']->value) {?>
															<span class="span_link">
																<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'View larger'),$_smarty_tpl ) );?>

															</span>
														<?php }?>
													</span>
												<?php }?>
												<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_54154053067bb8ed59466b5_01804327', 'displayRoomTypeImageAfter', $this->tplIndex);
?>

											</div> <!-- end image-block -->
										</div>
									<?php
}
}
/* {/block 'product_cover_image'} */
/* {block 'displayRoomTypeThumbnailsBottom'} */
class Block_73647526267bb8ed5966f42_52283888 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

																<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['hook'][0], array( array('h'=>'displayRoomTypeThumbnailsBottom'),$_smarty_tpl ) );?>

															<?php
}
}
/* {/block 'displayRoomTypeThumbnailsBottom'} */
/* {block 'displayRoomTypeThumbnailsAfter'} */
class Block_85355569667bb8ed596b8e7_58786789 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

															<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['hook'][0], array( array('h'=>"displayRoomTypeThumbnailsAfter"),$_smarty_tpl ) );?>

														<?php
}
}
/* {/block 'displayRoomTypeThumbnailsAfter'} */
/* {block 'product_thumbnails'} */
class Block_62792573867bb8ed5948a29_41050065 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

										<div class="col-xs-12 col-sm-3 col-sm-pull-9 col-md-2 col-md-pull-10">
											<?php if ((isset($_smarty_tpl->tpl_vars['images']->value)) && count($_smarty_tpl->tpl_vars['images']->value) > 0) {?>
												<!-- thumbnails -->
													<div id="views_block" class="clearfix <?php if ((isset($_smarty_tpl->tpl_vars['images']->value)) && count($_smarty_tpl->tpl_vars['images']->value) < 2) {?>hidden<?php }?>">
														<?php if ((isset($_smarty_tpl->tpl_vars['images']->value)) && count($_smarty_tpl->tpl_vars['images']->value) > 2) {?>
																															<a id="view_scroll_left" class="" title="<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Other views'),$_smarty_tpl ) );?>
" href="javascript:{}">
																	<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Previous'),$_smarty_tpl ) );?>

																</a>
																													<?php }?>
														<div id="thumbs_list">
															<ul id="thumbs_list_frame">
															<?php if ((isset($_smarty_tpl->tpl_vars['images']->value))) {?>
																<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['images']->value, 'image', false, NULL, 'thumbnails', array (
  'last' => true,
  'iteration' => true,
  'total' => true,
));
$_smarty_tpl->tpl_vars['image']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['image']->value) {
$_smarty_tpl->tpl_vars['image']->do_else = false;
$_smarty_tpl->tpl_vars['__smarty_foreach_thumbnails']->value['iteration']++;
$_smarty_tpl->tpl_vars['__smarty_foreach_thumbnails']->value['last'] = $_smarty_tpl->tpl_vars['__smarty_foreach_thumbnails']->value['iteration'] === $_smarty_tpl->tpl_vars['__smarty_foreach_thumbnails']->value['total'];
?>
																	<?php $_smarty_tpl->_assignInScope('imageIds', ((string)$_smarty_tpl->tpl_vars['product']->value->id)."-".((string)$_smarty_tpl->tpl_vars['image']->value['id_image']));?>
																	<?php if (!empty($_smarty_tpl->tpl_vars['image']->value['legend'])) {?>
																		<?php $_smarty_tpl->_assignInScope('imageTitle', htmlspecialchars($_smarty_tpl->tpl_vars['image']->value['legend'], ENT_QUOTES, 'UTF-8', true));?>
																	<?php } else { ?>
																		<?php $_smarty_tpl->_assignInScope('imageTitle', htmlspecialchars($_smarty_tpl->tpl_vars['product']->value->name, ENT_QUOTES, 'UTF-8', true));?>
																	<?php }?>
																	<li id="thumbnail_<?php echo $_smarty_tpl->tpl_vars['image']->value['id_image'];?>
"<?php if ((isset($_smarty_tpl->tpl_vars['__smarty_foreach_thumbnails']->value['last']) ? $_smarty_tpl->tpl_vars['__smarty_foreach_thumbnails']->value['last'] : null)) {?> class="last"<?php }?>>
																		<a <?php if ($_smarty_tpl->tpl_vars['jqZoomEnabled']->value && $_smarty_tpl->tpl_vars['have_image']->value && !$_smarty_tpl->tpl_vars['content_only']->value) {?> href="javascript:void(0);" rel="{gallery: 'gal1', smallimage: '<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['link']->value->getImageLink($_smarty_tpl->tpl_vars['product']->value->link_rewrite,$_smarty_tpl->tpl_vars['imageIds']->value,'large_default'), ENT_QUOTES, 'UTF-8', true);?>
',largeimage: '<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['link']->value->getImageLink($_smarty_tpl->tpl_vars['product']->value->link_rewrite,$_smarty_tpl->tpl_vars['imageIds']->value,'thickbox_default'), ENT_QUOTES, 'UTF-8', true);?>
'}"<?php } else { ?> href="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['link']->value->getImageLink($_smarty_tpl->tpl_vars['product']->value->link_rewrite,$_smarty_tpl->tpl_vars['imageIds']->value,'thickbox_default'), ENT_QUOTES, 'UTF-8', true);?>
"	data-fancybox-group="other-views" class="fancybox<?php if ($_smarty_tpl->tpl_vars['image']->value['id_image'] == $_smarty_tpl->tpl_vars['cover']->value['id_image']) {?> shown<?php }?>"<?php }?> title="<?php echo $_smarty_tpl->tpl_vars['imageTitle']->value;?>
">
																			<img class="img-responsive" id="thumb_<?php echo $_smarty_tpl->tpl_vars['image']->value['id_image'];?>
" src="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['link']->value->getImageLink($_smarty_tpl->tpl_vars['product']->value->link_rewrite,$_smarty_tpl->tpl_vars['imageIds']->value,'cart_default'), ENT_QUOTES, 'UTF-8', true);?>
" alt="<?php echo $_smarty_tpl->tpl_vars['imageTitle']->value;?>
" title="<?php echo $_smarty_tpl->tpl_vars['imageTitle']->value;?>
"<?php if ((isset($_smarty_tpl->tpl_vars['cartSize']->value))) {?> height="<?php echo $_smarty_tpl->tpl_vars['cartSize']->value['height'];?>
" width="<?php echo $_smarty_tpl->tpl_vars['cartSize']->value['width'];?>
"<?php }?> itemprop="image" />
																		</a>
																	</li>
																<?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
															<?php }?>
															<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_73647526267bb8ed5966f42_52283888', 'displayRoomTypeThumbnailsBottom', $this->tplIndex);
?>

															</ul>
														</div> <!-- end thumbs_list -->
														<?php if ((isset($_smarty_tpl->tpl_vars['images']->value)) && count($_smarty_tpl->tpl_vars['images']->value) > 2) {?>
															<a id="view_scroll_right" title="<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Other views'),$_smarty_tpl ) );?>
" href="javascript:{}">
																<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Next'),$_smarty_tpl ) );?>

															</a>
														<?php }?>
														<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_85355569667bb8ed596b8e7_58786789', 'displayRoomTypeThumbnailsAfter', $this->tplIndex);
?>

													</div> <!-- end views-block -->
												<!-- end thumbnails -->
											<?php }?>
										</div>
									<?php
}
}
/* {/block 'product_thumbnails'} */
/* {block 'product_images'} */
class Block_81673242167bb8ed590be47_71577580 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

								<div class="row">

									<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_344386867bb8ed590c3c2_36441912', 'product_cover_image', $this->tplIndex);
?>

									<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_62792573867bb8ed5948a29_41050065', 'product_thumbnails', $this->tplIndex);
?>

								</div>
								<?php if ((isset($_smarty_tpl->tpl_vars['images']->value)) && count($_smarty_tpl->tpl_vars['images']->value) > 1) {?>
									<p class="resetimg clear no-print">
										<span id="wrapResetImages" style="display: none;">
											<a href="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['link']->value->getProductLink($_smarty_tpl->tpl_vars['product']->value), ENT_QUOTES, 'UTF-8', true);?>
" data-id="resetImages">
												<i class="icon-repeat"></i>
												<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Display all pictures'),$_smarty_tpl ) );?>

											</a>
										</span>
									</p>
								<?php }?>
							<?php
}
}
/* {/block 'product_images'} */
/* {block 'service_products'} */
class Block_90627233567bb8ed59763f9_92361988 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

									<?php $_smarty_tpl->_subTemplateRender(((string)$_smarty_tpl->tpl_vars['tpl_dir']->value)."_partials/service-products.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, true);
?>
								<?php
}
}
/* {/block 'service_products'} */
/* {block 'displayProductTab'} */
class Block_80904379767bb8ed5981fc0_99801325 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

											<?php echo $_smarty_tpl->tpl_vars['HOOK_PRODUCT_TAB']->value;?>

										<?php
}
}
/* {/block 'displayProductTab'} */
/* {block 'product_tabs'} */
class Block_52038803467bb8ed5978e66_39394679 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

									<ul class="nav nav-tabs product_description_tabs">
										<li class="active"><a href="#product_info_tab" class="idTabHrefShort" data-toggle="tab"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Room Information'),$_smarty_tpl ) );?>
</a></li>
																				<?php if ((isset($_smarty_tpl->tpl_vars['id_hotel']->value)) && $_smarty_tpl->tpl_vars['id_hotel']->value) {?>
											<li><a href="#refund_policies_tab" class="idTabHrefShort" data-toggle="tab"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Refund Policies'),$_smarty_tpl ) );?>
</a></li>
										<?php }?>
										<?php if ($_smarty_tpl->tpl_vars['display_google_maps']->value && (floatval($_smarty_tpl->tpl_vars['hotel_latitude']->value) != 0 && floatval($_smarty_tpl->tpl_vars['hotel_longitude']->value) != 0)) {?>
											<li><a href="#room_type_map_tab" class="idTabHrefShort" data-toggle="tab"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'View on Map'),$_smarty_tpl ) );?>
</a></li>
										<?php }?>
										<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_80904379767bb8ed5981fc0_99801325', 'displayProductTab', $this->tplIndex);
?>

									</ul>
								<?php
}
}
/* {/block 'product_tabs'} */
/* {block 'product_info_tab_room_description'} */
class Block_56309799467bb8ed59845e3_07812754 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

														<div class="row info_margin_div room_description">
															<div class="col-sm-12">
																<?php echo $_smarty_tpl->tpl_vars['product']->value->description;?>

															</div>
														</div>
													<?php
}
}
/* {/block 'product_info_tab_room_description'} */
/* {block 'product_info_tab_room_guests'} */
class Block_117810543367bb8ed59855c6_88142378 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

														<?php if ((isset($_smarty_tpl->tpl_vars['room_type_info']->value['adults'])) && (isset($_smarty_tpl->tpl_vars['room_type_info']->value['children']))) {?>
															<div class="info_margin_div">
																<div class="room_info_heading">
																	<span><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Max Capacity'),$_smarty_tpl ) );?>
</span>
																</div>
																<div class="room_info_content">
																	<p><?php echo $_smarty_tpl->tpl_vars['room_type_info']->value['adults'];?>
 <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Adults'),$_smarty_tpl ) );?>
, <?php echo $_smarty_tpl->tpl_vars['room_type_info']->value['children'];?>
 <?php if ($_smarty_tpl->tpl_vars['room_type_info']->value['children'] > 1) {
echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Children'),$_smarty_tpl ) );
} else {
echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Child'),$_smarty_tpl ) );
}?> (<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Max guests'),$_smarty_tpl ) );?>
: <?php echo mb_convert_encoding(htmlspecialchars($_smarty_tpl->tpl_vars['room_type_info']->value['max_guests'], ENT_QUOTES, 'UTF-8', true), "HTML-ENTITIES", 'UTF-8');?>
)</p>
																</div>
															</div>
														<?php }?>
													<?php
}
}
/* {/block 'product_info_tab_room_guests'} */
/* {block 'product_info_tab_room_timing'} */
class Block_186026929667bb8ed598db93_99800840 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

														<?php if ((isset($_smarty_tpl->tpl_vars['id_hotel']->value)) && $_smarty_tpl->tpl_vars['id_hotel']->value) {?>
															<div class="info_margin_div">
																<div class="room_info_heading">
																	<span><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Check-in and check-out time'),$_smarty_tpl ) );?>
</span>
																</div>
																<div class="room_info_content">
																	<p><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Check-in: '),$_smarty_tpl ) );
echo htmlspecialchars($_smarty_tpl->tpl_vars['hotel_check_in']->value, ENT_QUOTES, 'UTF-8', true);?>
</p>
																	<p><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Check-out: '),$_smarty_tpl ) );
echo htmlspecialchars($_smarty_tpl->tpl_vars['hotel_check_out']->value, ENT_QUOTES, 'UTF-8', true);?>
</p>
																</div>
															</div>
														<?php }?>
													<?php
}
}
/* {/block 'product_info_tab_room_timing'} */
/* {block 'product_info_tab_room_features'} */
class Block_31551684567bb8ed59953f0_83289558 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

														<?php if ((isset($_smarty_tpl->tpl_vars['features']->value)) && $_smarty_tpl->tpl_vars['features']->value) {?>
															<div class="info_margin_div">
																<div class="room_info_heading">
																	<span><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Room Features'),$_smarty_tpl ) );?>
</span>
																</div>
																<div class="room_info_content row">
																	<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['features']->value, 'ftr_v', false, 'ftr_k');
$_smarty_tpl->tpl_vars['ftr_v']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['ftr_k']->value => $_smarty_tpl->tpl_vars['ftr_v']->value) {
$_smarty_tpl->tpl_vars['ftr_v']->do_else = false;
?>
																		<div class="col-md-3 col-sm-4 col-xs-6">
																			<div class="rm_ftr_wrapper" title="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['ftr_v']->value['name'], ENT_QUOTES, 'UTF-8', true);?>
" alt="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['ftr_v']->value['name'], ENT_QUOTES, 'UTF-8', true);?>
" >
																				<img src="<?php ob_start();
echo htmlspecialchars($_smarty_tpl->tpl_vars['ftr_v']->value['value'], ENT_QUOTES, 'UTF-8', true);
$_prefixVariable12=ob_get_clean();
echo $_smarty_tpl->tpl_vars['link']->value->getMediaLink(((string)(htmlspecialchars($_smarty_tpl->tpl_vars['ftr_img_src']->value, ENT_QUOTES, 'UTF-8', true))).$_prefixVariable12);?>
">  <?php echo htmlspecialchars($_smarty_tpl->tpl_vars['ftr_v']->value['name'], ENT_QUOTES, 'UTF-8', true);?>

																			</div>
																		</div>
																	<?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
																</div>
															</div>
														<?php }?>
													<?php
}
}
/* {/block 'product_info_tab_room_features'} */
/* {block 'product_info_tab_hotel_features'} */
class Block_22406185467bb8ed59a4358_19204255 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

															<?php if ((isset($_smarty_tpl->tpl_vars['hotel_features']->value)) && $_smarty_tpl->tpl_vars['hotel_features']->value) {?>
																<div class="info_margin_div">
																	<div class="room_info_heading">
																		<span><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Hotel Features'),$_smarty_tpl ) );?>
</span>
																	</div>
																	<div class="room_info_content row">
																		<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['hotel_features']->value, 'ftr_v', false, 'ftr_k');
$_smarty_tpl->tpl_vars['ftr_v']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['ftr_k']->value => $_smarty_tpl->tpl_vars['ftr_v']->value) {
$_smarty_tpl->tpl_vars['ftr_v']->do_else = false;
?>
																			<div class="col-sm-4 col-xs-12"><i class="circle-small">o</i> <?php echo htmlspecialchars($_smarty_tpl->tpl_vars['ftr_v']->value, ENT_QUOTES, 'UTF-8', true);?>
</div>
																		<?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
																	</div>
																</div>
															<?php }?>
														<?php
}
}
/* {/block 'product_info_tab_hotel_features'} */
/* {block 'product_info_tab_hotel_description'} */
class Block_19243950667bb8ed59aec58_69879267 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

															<?php if ((isset($_smarty_tpl->tpl_vars['hotel_description']->value)) && $_smarty_tpl->tpl_vars['hotel_description']->value) {?>
																<div class="info_margin_div">
																	<div class="room_info_heading">
																		<span><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Hotel Description'),$_smarty_tpl ) );?>
</span>
																	</div>
																	<div class="room_info_content">
																		<?php echo $_smarty_tpl->tpl_vars['hotel_description']->value;?>

																	</div>
																</div>
															<?php }?>
														<?php
}
}
/* {/block 'product_info_tab_hotel_description'} */
/* {block 'product_info_tab_hotel_images'} */
class Block_102828712667bb8ed59b1083_59802276 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

														<?php if ((isset($_smarty_tpl->tpl_vars['hotel_has_images']->value)) && $_smarty_tpl->tpl_vars['hotel_has_images']->value) {?>
															<div class="room_info_hotel_images_wrap">
																<div class="info_margin_div">
																	<div class="room_info_heading">
																		<span><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Hotel Images'),$_smarty_tpl ) );?>
</span>
																	</div>
																	<div class="room_info_content" id="room_info_hotel_images">
																		<div class="row images-wrap"></div>
																		<div class="row skeleton-loading-wrap">
																			<div class="skeleton-loading-wave clearfix">
																				<div class="col-sm-4">
																					<div class="loading-container-box"></div>
																				</div>
																				<div class="col-sm-4">
																					<div class="loading-container-box"></div>
																				</div>
																				<div class="col-sm-4">
																					<div class="loading-container-box"></div>
																				</div>
																			</div>
																		</div>
																	</div>
																	<a class="btn btn-primary btn-show-more-images hide" data-id-product="<?php echo $_smarty_tpl->tpl_vars['product']->value->id;?>
" data-next-page="1">
																		<span><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'SHOW MORE'),$_smarty_tpl ) );?>
</span>
																	</a>
																</div>
															</div>
														<?php }?>
													<?php
}
}
/* {/block 'product_info_tab_hotel_images'} */
/* {block 'product_info_tab_hotel_policies'} */
class Block_199182094367bb8ed59b4c77_89059620 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

														<?php if ((isset($_smarty_tpl->tpl_vars['hotel_policies']->value)) && $_smarty_tpl->tpl_vars['hotel_policies']->value) {?>
															<div class="info_margin_div">
																<div class="room_info_heading">
																	<span><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Hotel Policies'),$_smarty_tpl ) );?>
</span>
																</div>
																<div class="room_info_content">
																	<p class=""><?php echo $_smarty_tpl->tpl_vars['hotel_policies']->value;?>
</p>
																</div>
															</div>
														<?php }?>
													<?php
}
}
/* {/block 'product_info_tab_hotel_policies'} */
/* {block 'product_info_tab_content'} */
class Block_177593673667bb8ed5983ff6_98095313 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

											<div id="product_info_tab" class="tab-pane active card">
												<div id="product_info_tab_information">
													<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_56309799467bb8ed59845e3_07812754', 'product_info_tab_room_description', $this->tplIndex);
?>

													<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_117810543367bb8ed59855c6_88142378', 'product_info_tab_room_guests', $this->tplIndex);
?>

													<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_186026929667bb8ed598db93_99800840', 'product_info_tab_room_timing', $this->tplIndex);
?>

													<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_31551684567bb8ed59953f0_83289558', 'product_info_tab_room_features', $this->tplIndex);
?>

																										<?php if ((isset($_smarty_tpl->tpl_vars['id_hotel']->value)) && $_smarty_tpl->tpl_vars['id_hotel']->value) {?>
														<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_22406185467bb8ed59a4358_19204255', 'product_info_tab_hotel_features', $this->tplIndex);
?>

														<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_19243950667bb8ed59aec58_69879267', 'product_info_tab_hotel_description', $this->tplIndex);
?>

													<?php }?>
													<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_102828712667bb8ed59b1083_59802276', 'product_info_tab_hotel_images', $this->tplIndex);
?>

													<!-- <div class="info_margin_div">
														<div class="room_info_heading">
															<span><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Rooms'),$_smarty_tpl ) );?>
</span>
														</div>
														<div class="room_info_content row"></div>
													</div> -->
													<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_199182094367bb8ed59b4c77_89059620', 'product_info_tab_hotel_policies', $this->tplIndex);
?>

												</div>
											</div>
										<?php
}
}
/* {/block 'product_info_tab_content'} */
/* {block 'product_refund_policies_tab_content'} */
class Block_122808680867bb8ed59b7ab1_41262313 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

																						<?php if ((isset($_smarty_tpl->tpl_vars['id_hotel']->value)) && $_smarty_tpl->tpl_vars['id_hotel']->value) {?>
												<div id="refund_policies_tab" class="tab-pane card">
													<?php if ((isset($_smarty_tpl->tpl_vars['isHotelRefundable']->value)) && $_smarty_tpl->tpl_vars['isHotelRefundable']->value) {?>
														<?php if ((isset($_smarty_tpl->tpl_vars['hotelRefundRules']->value)) && $_smarty_tpl->tpl_vars['hotelRefundRules']->value) {?>
															<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['hotelRefundRules']->value, 'refundRule');
$_smarty_tpl->tpl_vars['refundRule']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['refundRule']->value) {
$_smarty_tpl->tpl_vars['refundRule']->do_else = false;
?>
																<div class="info_margin_div">
																	<div class="room_info_content">
																		<i class="circle-small">o</i> <span class="refund-rule-name"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['refundRule']->value['name'], ENT_QUOTES, 'UTF-8', true);?>
 - </span> <span><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['refundRule']->value['description'], ENT_QUOTES, 'UTF-8', true);?>
</span>
																	</div>
																</div>
															<?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
														<?php } else { ?>
															<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'N/A'),$_smarty_tpl ) );?>

														<?php }?>
													<?php } else { ?>
														<span class="non_refundable_txt error_msg"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Non Refundable'),$_smarty_tpl ) );?>
</span>
													<?php }?>
												</div>
											<?php }?>
										<?php
}
}
/* {/block 'product_refund_policies_tab_content'} */
/* {block 'product_map_tab_content'} */
class Block_173663558867bb8ed59c8ba6_49653612 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

											<?php if ($_smarty_tpl->tpl_vars['display_google_maps']->value && (floatval($_smarty_tpl->tpl_vars['hotel_latitude']->value) != 0 && floatval($_smarty_tpl->tpl_vars['hotel_longitude']->value) != 0)) {?>
												<div id="room_type_map_tab" class="tab-pane card">
													<div class="map-wrap"></div>
													<div id="room-info-map-ui-content" style="display: none;">
														<div class="hotel-info-wrap">
															<?php if ((isset($_smarty_tpl->tpl_vars['hotel_image_link']->value)) && $_smarty_tpl->tpl_vars['hotel_image_link']->value) {?>
																<div class="hotel-image-wrap">
																	<img class="img img-responsive" src="<?php echo $_smarty_tpl->tpl_vars['hotel_image_link']->value;?>
">
																</div>
															<?php }?>
															<div>
																<p class="name"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['hotel_name']->value, ENT_QUOTES, 'UTF-8', true);?>
</p>
																<p class="address"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['hotel_address1']->value, ENT_QUOTES, 'UTF-8', true);?>
</p>
																<p class="contact"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Contact:'),$_smarty_tpl ) );?>
 <?php echo htmlspecialchars($_smarty_tpl->tpl_vars['hotel_phone']->value, ENT_QUOTES, 'UTF-8', true);?>
</p>
																<a class="btn view-on-map" href="https://www.google.com/maps/search/?api=1&query=<?php if ($_smarty_tpl->tpl_vars['hotel_map_input_text']->value != '') {
echo urlencode($_smarty_tpl->tpl_vars['hotel_map_input_text']->value);
} else {
echo urlencode(((($_smarty_tpl->tpl_vars['hotel_latitude']->value).(',')).($_smarty_tpl->tpl_vars['hotel_longitude']->value)));
}?>" target="_blank">
																	<span><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'View on Map'),$_smarty_tpl ) );?>
</span>
																</a>
															</div>
														</div>
													</div>
												</div>
											<?php }?>
										<?php
}
}
/* {/block 'product_map_tab_content'} */
/* {block 'displayProductTabContent'} */
class Block_165682699067bb8ed59eae53_29239641 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

											<?php if ((isset($_smarty_tpl->tpl_vars['HOOK_PRODUCT_TAB_CONTENT']->value)) && $_smarty_tpl->tpl_vars['HOOK_PRODUCT_TAB_CONTENT']->value) {
echo $_smarty_tpl->tpl_vars['HOOK_PRODUCT_TAB_CONTENT']->value;
}?>
										<?php
}
}
/* {/block 'displayProductTabContent'} */
/* {block 'product_tabs_content'} */
class Block_190893474867bb8ed5983820_12113490 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

									<div class="tab-content product_description_tabs_contents">
										<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_177593673667bb8ed5983ff6_98095313', 'product_info_tab_content', $this->tplIndex);
?>

										<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_122808680867bb8ed59b7ab1_41262313', 'product_refund_policies_tab_content', $this->tplIndex);
?>

										<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_173663558867bb8ed59c8ba6_49653612', 'product_map_tab_content', $this->tplIndex);
?>

										<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_165682699067bb8ed59eae53_29239641', 'displayProductTabContent', $this->tplIndex);
?>

									</div>
								<?php
}
}
/* {/block 'product_tabs_content'} */
/* {block 'product_left_column'} */
class Block_35996196267bb8ed58e1c44_62020229 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

					<div class="pb-left-column col-xs-12 col-sm-8 col-md-8">
						<div class="room_type_img_containter card">
							<div class="room_hotel_name_block <?php if ((isset($_smarty_tpl->tpl_vars['language_is_rtl']->value)) && $_smarty_tpl->tpl_vars['language_is_rtl']->value) {?>rtl<?php }?>">
								<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_117711754467bb8ed58e42b6_06066928', 'product_name', $this->tplIndex);
?>

							</div>
							<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_137332905067bb8ed5908da6_61929969', 'displayRoomTypeDetailRoomTypeImageBlockBefore', $this->tplIndex);
?>

							<!-- product img-->
							<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_81673242167bb8ed590be47_71577580', 'product_images', $this->tplIndex);
?>

						</div>

						<div id="service_products_cont">
							<?php if ((isset($_smarty_tpl->tpl_vars['service_products_exists']->value)) && $_smarty_tpl->tpl_vars['service_products_exists']->value) {?>
								<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_90627233567bb8ed59763f9_92361988', 'service_products', $this->tplIndex);
?>

							<?php }?>
						</div>

						<div class="product_info_containter">
							<!-- tab hook is added here -->
							<!--HOOK_PRODUCT_TAB -->
							<section class="page-product-box">
								<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_52038803467bb8ed5978e66_39394679', 'product_tabs', $this->tplIndex);
?>

								<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_190893474867bb8ed5983820_12113490', 'product_tabs_content', $this->tplIndex);
?>

							</section>
						</div>
					</div> <!-- end pb-left-column -->
				<?php
}
}
/* {/block 'product_left_column'} */
/* {block 'booking_form'} */
class Block_160688653567bb8ed59f3da5_86532406 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

								<?php $_smarty_tpl->_subTemplateRender('file:./_partials/booking-form.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
							<?php
}
}
/* {/block 'booking_form'} */
/* {block 'product_demands'} */
class Block_32500727967bb8ed59f79e9_56515744 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

																<?php if ((isset($_smarty_tpl->tpl_vars['room_type_demands']->value)) && $_smarty_tpl->tpl_vars['room_type_demands']->value) {?>
									<div class="col-sm-12 card room_demands_container">
										<label for="" class="control-label"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Additional Facilities'),$_smarty_tpl ) );?>
</label>
										<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['room_type_demands']->value, 'demand', false, 'idGlobalDemand');
$_smarty_tpl->tpl_vars['demand']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['idGlobalDemand']->value => $_smarty_tpl->tpl_vars['demand']->value) {
$_smarty_tpl->tpl_vars['demand']->do_else = false;
?>
											<div class="row room_demand_block">
												<?php if ($_smarty_tpl->tpl_vars['product']->value->show_price && !(isset($_smarty_tpl->tpl_vars['restricted_country_mode']->value)) && !$_smarty_tpl->tpl_vars['PS_CATALOG_MODE']->value) {?>
													<div class="col-xs-1">
														<p class="checkbox">
															<input value="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['idGlobalDemand']->value, ENT_QUOTES, 'UTF-8', true);?>
" type="checkbox" class="id_room_type_demand" data-id_global_demand="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['idGlobalDemand']->value, ENT_QUOTES, 'UTF-8', true);?>
" />
														</p>
													</div>
												<?php }?>
												<div class="col-xs-11 demand_adv_option_block">
													<p><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['demand']->value['name'], ENT_QUOTES, 'UTF-8', true);?>
 <?php if ($_smarty_tpl->tpl_vars['product']->value->show_price && !(isset($_smarty_tpl->tpl_vars['restricted_country_mode']->value)) && !$_smarty_tpl->tpl_vars['PS_CATALOG_MODE']->value) {?><span class="pull-right"><span class="extra_demand_option_price"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['convertPrice'][0], array( array('price'=>$_smarty_tpl->tpl_vars['demand']->value['price']),$_smarty_tpl ) );?>
</span><?php if ($_smarty_tpl->tpl_vars['demand']->value['price_calc_method'] == $_smarty_tpl->tpl_vars['WK_PRICE_CALC_METHOD_EACH_DAY']->value) {
echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'/Night'),$_smarty_tpl ) );
}?></span><?php }?></p>
													<?php if ((isset($_smarty_tpl->tpl_vars['demand']->value['adv_option'])) && $_smarty_tpl->tpl_vars['demand']->value['adv_option']) {?>
														<select class="id_option">
															<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['demand']->value['adv_option'], 'option', false, 'idOption');
$_smarty_tpl->tpl_vars['option']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['idOption']->value => $_smarty_tpl->tpl_vars['option']->value) {
$_smarty_tpl->tpl_vars['option']->do_else = false;
?>
																<option optionPrice="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['option']->value['price'], ENT_QUOTES, 'UTF-8', true);?>
" value="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['idOption']->value, ENT_QUOTES, 'UTF-8', true);?>
"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['option']->value['name'], ENT_QUOTES, 'UTF-8', true);?>
</option>
															<?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
														</select>
													<?php } else { ?>
														<input type="hidden" class="id_option" value="0" />
													<?php }?>
												</div>
											</div>
										<?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
										<div class="room_demands_container_overlay">
										</div>
									</div>
								<?php }?>
							<?php
}
}
/* {/block 'product_demands'} */
/* {block 'displayRightColumnProduct'} */
class Block_52910297267bb8ed5a20296_26286906 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

							<?php if ((isset($_smarty_tpl->tpl_vars['HOOK_EXTRA_RIGHT']->value)) && $_smarty_tpl->tpl_vars['HOOK_EXTRA_RIGHT']->value) {
echo $_smarty_tpl->tpl_vars['HOOK_EXTRA_RIGHT']->value;
}?>
						<?php
}
}
/* {/block 'displayRightColumnProduct'} */
/* {block 'product_right_column'} */
class Block_125771916667bb8ed59ede60_95224188 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

					<div class="pb-right-column col-xs-12 col-sm-4 col-md-4">
						<?php if (($_smarty_tpl->tpl_vars['product']->value->show_price && !(isset($_smarty_tpl->tpl_vars['restricted_country_mode']->value))) || (isset($_smarty_tpl->tpl_vars['groups']->value)) || $_smarty_tpl->tpl_vars['product']->value->reference || ((isset($_smarty_tpl->tpl_vars['HOOK_PRODUCT_ACTIONS']->value)) && $_smarty_tpl->tpl_vars['HOOK_PRODUCT_ACTIONS']->value)) {?>

							<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_160688653567bb8ed59f3da5_86532406', 'booking_form', $this->tplIndex);
?>


							<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_32500727967bb8ed59f79e9_56515744', 'product_demands', $this->tplIndex);
?>

						<?php }?>
						<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_52910297267bb8ed5a20296_26286906', 'displayRightColumnProduct', $this->tplIndex);
?>

					</div>
				<?php
}
}
/* {/block 'product_right_column'} */
/* {block 'product_list'} */
class Block_5978857167bb8ed5a7e857_31692972 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

						<?php $_smarty_tpl->_subTemplateRender(((string)$_smarty_tpl->tpl_vars['tpl_dir']->value)."./product-list.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('products'=>$_smarty_tpl->tpl_vars['packItems']->value), 0, true);
?>
					<?php
}
}
/* {/block 'product_list'} */
/* {block 'displayFooterProduct'} */
class Block_102348632167bb8ed5aa7ae6_98085477 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

					<?php if ((isset($_smarty_tpl->tpl_vars['HOOK_PRODUCT_FOOTER']->value)) && $_smarty_tpl->tpl_vars['HOOK_PRODUCT_FOOTER']->value) {
echo $_smarty_tpl->tpl_vars['HOOK_PRODUCT_FOOTER']->value;
}?>
				<?php
}
}
/* {/block 'displayFooterProduct'} */
/* {block 'product_js_vars'} */
class Block_89411841767bb8ed5af2c71_06695493 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_checkPlugins(array(0=>array('file'=>'/home/qloapps/www/QloApps/tools/smarty/plugins/modifier.date_format.php','function'=>'smarty_modifier_date_format',),));
?>

		<?php if ((isset($_smarty_tpl->tpl_vars['id_hotel']->value)) && $_smarty_tpl->tpl_vars['id_hotel']->value) {
echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['addJsDef'][0], array( array('id_hotels'=>$_smarty_tpl->tpl_vars['id_hotel']->value),$_smarty_tpl ) );
echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['addJsDef'][0], array( array('max_order_date'=>$_smarty_tpl->tpl_vars['max_order_date']->value),$_smarty_tpl ) );
echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['addJsDef'][0], array( array('preparation_time'=>$_smarty_tpl->tpl_vars['preparation_time']->value),$_smarty_tpl ) );
echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['addJsDef'][0], array( array('booking_date_to'=>$_smarty_tpl->tpl_vars['date_to']->value),$_smarty_tpl ) );
echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['addJsDef'][0], array( array('booking_date_from'=>$_smarty_tpl->tpl_vars['date_from']->value),$_smarty_tpl ) );
}
if ((isset($_GET['ad'])) && $_GET['ad']) {
$_block_plugin9 = isset($_smarty_tpl->smarty->registered_plugins['block']['addJsDefL'][0][0]) ? $_smarty_tpl->smarty->registered_plugins['block']['addJsDefL'][0][0] : null;
if (!is_callable(array($_block_plugin9, 'addJsDefL'))) {
throw new SmartyException('block tag \'addJsDefL\' not callable or registered');
}
$_smarty_tpl->smarty->_cache['_tag_stack'][] = array('addJsDefL', array('name'=>'ad'));
$_block_repeat=true;
echo $_block_plugin9->addJsDefL(array('name'=>'ad'), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();
echo htmlspecialchars(($_smarty_tpl->tpl_vars['base_dir']->value).($_GET['ad']), ENT_QUOTES, 'UTF-8', true);
$_block_repeat=false;
echo $_block_plugin9->addJsDefL(array('name'=>'ad'), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);
}
if ((isset($_GET['adtoken'])) && $_GET['adtoken']) {
$_block_plugin10 = isset($_smarty_tpl->smarty->registered_plugins['block']['addJsDefL'][0][0]) ? $_smarty_tpl->smarty->registered_plugins['block']['addJsDefL'][0][0] : null;
if (!is_callable(array($_block_plugin10, 'addJsDefL'))) {
throw new SmartyException('block tag \'addJsDefL\' not callable or registered');
}
$_smarty_tpl->smarty->_cache['_tag_stack'][] = array('addJsDefL', array('name'=>'adtoken'));
$_block_repeat=true;
echo $_block_plugin10->addJsDefL(array('name'=>'adtoken'), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();
echo htmlspecialchars($_GET['adtoken'], ENT_QUOTES, 'UTF-8', true);
$_block_repeat=false;
echo $_block_plugin10->addJsDefL(array('name'=>'adtoken'), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);
}
echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['addJsDef'][0], array( array('product_controller_url'=>$_smarty_tpl->tpl_vars['product_controller_url']->value),$_smarty_tpl ) );
echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['addJsDef'][0], array( array('allowBuyWhenOutOfStock'=>call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'boolval' ][ 0 ], array( $_smarty_tpl->tpl_vars['allow_oosp']->value ))),$_smarty_tpl ) );
echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['addJsDef'][0], array( array('availableNowValue'=>preg_replace("%(?<!\\\\)'%", "\'",$_smarty_tpl->tpl_vars['product']->value->available_now)),$_smarty_tpl ) );
echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['addJsDef'][0], array( array('availableLaterValue'=>preg_replace("%(?<!\\\\)'%", "\'",$_smarty_tpl->tpl_vars['product']->value->available_later)),$_smarty_tpl ) );
echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['addJsDef'][0], array( array('attribute_anchor_separator'=>preg_replace("%(?<!\\\\)'%", "\'",$_smarty_tpl->tpl_vars['attribute_anchor_separator']->value)),$_smarty_tpl ) );
echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['addJsDef'][0], array( array('attributesCombinations'=>$_smarty_tpl->tpl_vars['attributesCombinations']->value),$_smarty_tpl ) );
echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['addJsDef'][0], array( array('currentDate'=>smarty_modifier_date_format(time(),'%Y-%m-%d %H:%M:%S')),$_smarty_tpl ) );
if ((isset($_smarty_tpl->tpl_vars['combinations']->value)) && $_smarty_tpl->tpl_vars['combinations']->value) {
echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['addJsDef'][0], array( array('combinations'=>$_smarty_tpl->tpl_vars['combinations']->value),$_smarty_tpl ) );
echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['addJsDef'][0], array( array('combinationsFromController'=>$_smarty_tpl->tpl_vars['combinations']->value),$_smarty_tpl ) );
echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['addJsDef'][0], array( array('displayDiscountPrice'=>$_smarty_tpl->tpl_vars['display_discount_price']->value),$_smarty_tpl ) );
$_block_plugin11 = isset($_smarty_tpl->smarty->registered_plugins['block']['addJsDefL'][0][0]) ? $_smarty_tpl->smarty->registered_plugins['block']['addJsDefL'][0][0] : null;
if (!is_callable(array($_block_plugin11, 'addJsDefL'))) {
throw new SmartyException('block tag \'addJsDefL\' not callable or registered');
}
$_smarty_tpl->smarty->_cache['_tag_stack'][] = array('addJsDefL', array('name'=>'upToTxt'));
$_block_repeat=true;
echo $_block_plugin11->addJsDefL(array('name'=>'upToTxt'), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();
echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Up to','js'=>1),$_smarty_tpl ) );
$_block_repeat=false;
echo $_block_plugin11->addJsDefL(array('name'=>'upToTxt'), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);
}
if ((isset($_smarty_tpl->tpl_vars['combinationImages']->value)) && $_smarty_tpl->tpl_vars['combinationImages']->value) {
echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['addJsDef'][0], array( array('combinationImages'=>$_smarty_tpl->tpl_vars['combinationImages']->value),$_smarty_tpl ) );
}
echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['addJsDef'][0], array( array('customizationId'=>$_smarty_tpl->tpl_vars['id_customization']->value),$_smarty_tpl ) );
echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['addJsDef'][0], array( array('customizationFields'=>$_smarty_tpl->tpl_vars['customizationFields']->value),$_smarty_tpl ) );
echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['addJsDef'][0], array( array('default_eco_tax'=>floatval($_smarty_tpl->tpl_vars['product']->value->ecotax)),$_smarty_tpl ) );
echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['addJsDef'][0], array( array('displayPrice'=>intval($_smarty_tpl->tpl_vars['priceDisplay']->value)),$_smarty_tpl ) );
echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['addJsDef'][0], array( array('ecotaxTax_rate'=>floatval($_smarty_tpl->tpl_vars['ecotaxTax_rate']->value)),$_smarty_tpl ) );
if ((isset($_smarty_tpl->tpl_vars['cover']->value['id_image_only']))) {
echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['addJsDef'][0], array( array('idDefaultImage'=>intval($_smarty_tpl->tpl_vars['cover']->value['id_image_only'])),$_smarty_tpl ) );
} else {
echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['addJsDef'][0], array( array('idDefaultImage'=>0),$_smarty_tpl ) );
}
echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['addJsDef'][0], array( array('img_ps_dir'=>$_smarty_tpl->tpl_vars['img_ps_dir']->value),$_smarty_tpl ) );
echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['addJsDef'][0], array( array('img_prod_dir'=>$_smarty_tpl->tpl_vars['img_prod_dir']->value),$_smarty_tpl ) );
echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['addJsDef'][0], array( array('id_product'=>intval($_smarty_tpl->tpl_vars['product']->value->id)),$_smarty_tpl ) );
echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['addJsDef'][0], array( array('jqZoomEnabled'=>call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'boolval' ][ 0 ], array( $_smarty_tpl->tpl_vars['jqZoomEnabled']->value ))),$_smarty_tpl ) );
echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['addJsDef'][0], array( array('maxQuantityToAllowDisplayOfLastQuantityMessage'=>intval($_smarty_tpl->tpl_vars['last_qties']->value)),$_smarty_tpl ) );
echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['addJsDef'][0], array( array('minimalQuantity'=>intval($_smarty_tpl->tpl_vars['product']->value->minimal_quantity)),$_smarty_tpl ) );
echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['addJsDef'][0], array( array('noTaxForThisProduct'=>call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'boolval' ][ 0 ], array( $_smarty_tpl->tpl_vars['no_tax']->value ))),$_smarty_tpl ) );
if ((isset($_smarty_tpl->tpl_vars['customer_group_without_tax']->value))) {
echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['addJsDef'][0], array( array('customerGroupWithoutTax'=>call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'boolval' ][ 0 ], array( $_smarty_tpl->tpl_vars['customer_group_without_tax']->value ))),$_smarty_tpl ) );
} else {
echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['addJsDef'][0], array( array('customerGroupWithoutTax'=>false),$_smarty_tpl ) );
}
if ((isset($_smarty_tpl->tpl_vars['group_reduction']->value))) {
echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['addJsDef'][0], array( array('groupReduction'=>floatval($_smarty_tpl->tpl_vars['group_reduction']->value)),$_smarty_tpl ) );
} else {
echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['addJsDef'][0], array( array('groupReduction'=>false),$_smarty_tpl ) );
}
echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['addJsDef'][0], array( array('oosHookJsCodeFunctions'=>array()),$_smarty_tpl ) );
echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['addJsDef'][0], array( array('productHasAttributes'=>call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'boolval' ][ 0 ], array( (isset($_smarty_tpl->tpl_vars['groups']->value)) ))),$_smarty_tpl ) );
echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['addJsDef'][0], array( array('productPriceTaxExcluded'=>floatval(((($tmp = @$_smarty_tpl->tpl_vars['product']->value->getPriceWithoutReduct(true))===null||$tmp==='' ? 'null' : $tmp)-$_smarty_tpl->tpl_vars['product']->value->ecotax))),$_smarty_tpl ) );
echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['addJsDef'][0], array( array('productPriceTaxIncluded'=>floatval(((($tmp = @$_smarty_tpl->tpl_vars['product']->value->getPriceWithoutReduct(false))===null||$tmp==='' ? 'null' : $tmp)-$_smarty_tpl->tpl_vars['product']->value->ecotax))),$_smarty_tpl ) );
echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['addJsDef'][0], array( array('productBasePriceTaxExcluded'=>floatval(($_smarty_tpl->tpl_vars['product']->value->getPrice(false,null,6,null,false,false)-$_smarty_tpl->tpl_vars['product']->value->ecotax))),$_smarty_tpl ) );
echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['addJsDef'][0], array( array('productBasePriceTaxExcl'=>(floatval($_smarty_tpl->tpl_vars['product']->value->getPrice(false,null,6,null,false,false)))),$_smarty_tpl ) );
echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['addJsDef'][0], array( array('productBasePriceTaxIncl'=>(floatval($_smarty_tpl->tpl_vars['product']->value->getPrice(true,null,6,null,false,false)))),$_smarty_tpl ) );
echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['addJsDef'][0], array( array('productReference'=>htmlspecialchars($_smarty_tpl->tpl_vars['product']->value->reference, ENT_QUOTES, 'UTF-8', true)),$_smarty_tpl ) );
echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['addJsDef'][0], array( array('productAvailableForOrder'=>call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'boolval' ][ 0 ], array( $_smarty_tpl->tpl_vars['product']->value->available_for_order ))),$_smarty_tpl ) );
echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['addJsDef'][0], array( array('productPriceWithoutReduction'=>floatval($_smarty_tpl->tpl_vars['productPriceWithoutReduction']->value)),$_smarty_tpl ) );
echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['addJsDef'][0], array( array('productPrice'=>floatval($_smarty_tpl->tpl_vars['productPrice']->value)),$_smarty_tpl ) );
echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['addJsDef'][0], array( array('productUnitPriceRatio'=>floatval($_smarty_tpl->tpl_vars['product']->value->unit_price_ratio)),$_smarty_tpl ) );
echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['addJsDef'][0], array( array('productShowPrice'=>call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'boolval' ][ 0 ], array( (!$_smarty_tpl->tpl_vars['PS_CATALOG_MODE']->value && $_smarty_tpl->tpl_vars['product']->value->show_price) ))),$_smarty_tpl ) );
echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['addJsDef'][0], array( array('PS_CATALOG_MODE'=>$_smarty_tpl->tpl_vars['PS_CATALOG_MODE']->value),$_smarty_tpl ) );
if ($_smarty_tpl->tpl_vars['product']->value->specificPrice && count($_smarty_tpl->tpl_vars['product']->value->specificPrice)) {
echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['addJsDef'][0], array( array('product_specific_price'=>$_smarty_tpl->tpl_vars['product']->value->specificPrice),$_smarty_tpl ) );
} else {
echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['addJsDef'][0], array( array('product_specific_price'=>array()),$_smarty_tpl ) );
}
if ($_smarty_tpl->tpl_vars['display_qties']->value == 1 && $_smarty_tpl->tpl_vars['product']->value->quantity) {
echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['addJsDef'][0], array( array('quantityAvailable'=>$_smarty_tpl->tpl_vars['product']->value->quantity),$_smarty_tpl ) );
} else {
echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['addJsDef'][0], array( array('quantityAvailable'=>0),$_smarty_tpl ) );
}
echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['addJsDef'][0], array( array('quantitiesDisplayAllowed'=>call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'boolval' ][ 0 ], array( $_smarty_tpl->tpl_vars['display_qties']->value ))),$_smarty_tpl ) );
if ($_smarty_tpl->tpl_vars['product']->value->specificPrice && $_smarty_tpl->tpl_vars['product']->value->specificPrice['reduction'] && $_smarty_tpl->tpl_vars['product']->value->specificPrice['reduction_type'] == 'percentage') {
echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['addJsDef'][0], array( array('reduction_percent'=>$_smarty_tpl->tpl_vars['product']->value->specificPrice['reduction']*floatval(100)),$_smarty_tpl ) );
} else {
echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['addJsDef'][0], array( array('reduction_percent'=>0),$_smarty_tpl ) );
}
if ($_smarty_tpl->tpl_vars['product']->value->specificPrice && $_smarty_tpl->tpl_vars['product']->value->specificPrice['reduction'] && $_smarty_tpl->tpl_vars['product']->value->specificPrice['reduction_type'] == 'amount') {
echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['addJsDef'][0], array( array('reduction_price'=>floatval($_smarty_tpl->tpl_vars['product']->value->specificPrice['reduction'])),$_smarty_tpl ) );
} else {
echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['addJsDef'][0], array( array('reduction_price'=>0),$_smarty_tpl ) );
}
if ($_smarty_tpl->tpl_vars['product']->value->specificPrice && $_smarty_tpl->tpl_vars['product']->value->specificPrice['price']) {
echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['addJsDef'][0], array( array('specific_price'=>floatval($_smarty_tpl->tpl_vars['product']->value->specificPrice['price'])),$_smarty_tpl ) );
} else {
echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['addJsDef'][0], array( array('specific_price'=>0),$_smarty_tpl ) );
}
echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['addJsDef'][0], array( array('specific_currency'=>call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'boolval' ][ 0 ], array( ($_smarty_tpl->tpl_vars['product']->value->specificPrice && $_smarty_tpl->tpl_vars['product']->value->specificPrice['id_currency']) ))),$_smarty_tpl ) );?>
 			<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['addJsDef'][0], array( array('stock_management'=>intval($_smarty_tpl->tpl_vars['PS_STOCK_MANAGEMENT']->value)),$_smarty_tpl ) );
echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['addJsDef'][0], array( array('taxRate'=>floatval($_smarty_tpl->tpl_vars['tax_rate']->value)),$_smarty_tpl ) );
$_block_plugin12 = isset($_smarty_tpl->smarty->registered_plugins['block']['addJsDefL'][0][0]) ? $_smarty_tpl->smarty->registered_plugins['block']['addJsDefL'][0][0] : null;
if (!is_callable(array($_block_plugin12, 'addJsDefL'))) {
throw new SmartyException('block tag \'addJsDefL\' not callable or registered');
}
$_smarty_tpl->smarty->_cache['_tag_stack'][] = array('addJsDefL', array('name'=>'doesntExist'));
$_block_repeat=true;
echo $_block_plugin12->addJsDefL(array('name'=>'doesntExist'), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();
echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'This combination does not exist for this product. Please select another combination.','js'=>1),$_smarty_tpl ) );
$_block_repeat=false;
echo $_block_plugin12->addJsDefL(array('name'=>'doesntExist'), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);
$_block_plugin13 = isset($_smarty_tpl->smarty->registered_plugins['block']['addJsDefL'][0][0]) ? $_smarty_tpl->smarty->registered_plugins['block']['addJsDefL'][0][0] : null;
if (!is_callable(array($_block_plugin13, 'addJsDefL'))) {
throw new SmartyException('block tag \'addJsDefL\' not callable or registered');
}
$_smarty_tpl->smarty->_cache['_tag_stack'][] = array('addJsDefL', array('name'=>'doesntExistNoMore'));
$_block_repeat=true;
echo $_block_plugin13->addJsDefL(array('name'=>'doesntExistNoMore'), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();
echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'This product is no longer in stock','js'=>1),$_smarty_tpl ) );
$_block_repeat=false;
echo $_block_plugin13->addJsDefL(array('name'=>'doesntExistNoMore'), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);
$_block_plugin14 = isset($_smarty_tpl->smarty->registered_plugins['block']['addJsDefL'][0][0]) ? $_smarty_tpl->smarty->registered_plugins['block']['addJsDefL'][0][0] : null;
if (!is_callable(array($_block_plugin14, 'addJsDefL'))) {
throw new SmartyException('block tag \'addJsDefL\' not callable or registered');
}
$_smarty_tpl->smarty->_cache['_tag_stack'][] = array('addJsDefL', array('name'=>'doesntExistNoMoreBut'));
$_block_repeat=true;
echo $_block_plugin14->addJsDefL(array('name'=>'doesntExistNoMoreBut'), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();
echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'with those attributes but is available with others.','js'=>1),$_smarty_tpl ) );
$_block_repeat=false;
echo $_block_plugin14->addJsDefL(array('name'=>'doesntExistNoMoreBut'), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);
$_block_plugin15 = isset($_smarty_tpl->smarty->registered_plugins['block']['addJsDefL'][0][0]) ? $_smarty_tpl->smarty->registered_plugins['block']['addJsDefL'][0][0] : null;
if (!is_callable(array($_block_plugin15, 'addJsDefL'))) {
throw new SmartyException('block tag \'addJsDefL\' not callable or registered');
}
$_smarty_tpl->smarty->_cache['_tag_stack'][] = array('addJsDefL', array('name'=>'fieldRequired'));
$_block_repeat=true;
echo $_block_plugin15->addJsDefL(array('name'=>'fieldRequired'), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();
echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Please fill in all the required fields before saving your customization.','js'=>1),$_smarty_tpl ) );
$_block_repeat=false;
echo $_block_plugin15->addJsDefL(array('name'=>'fieldRequired'), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);
$_block_plugin16 = isset($_smarty_tpl->smarty->registered_plugins['block']['addJsDefL'][0][0]) ? $_smarty_tpl->smarty->registered_plugins['block']['addJsDefL'][0][0] : null;
if (!is_callable(array($_block_plugin16, 'addJsDefL'))) {
throw new SmartyException('block tag \'addJsDefL\' not callable or registered');
}
$_smarty_tpl->smarty->_cache['_tag_stack'][] = array('addJsDefL', array('name'=>'uploading_in_progress'));
$_block_repeat=true;
echo $_block_plugin16->addJsDefL(array('name'=>'uploading_in_progress'), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();
echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Uploading in progress, please be patient.','js'=>1),$_smarty_tpl ) );
$_block_repeat=false;
echo $_block_plugin16->addJsDefL(array('name'=>'uploading_in_progress'), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);
$_block_plugin17 = isset($_smarty_tpl->smarty->registered_plugins['block']['addJsDefL'][0][0]) ? $_smarty_tpl->smarty->registered_plugins['block']['addJsDefL'][0][0] : null;
if (!is_callable(array($_block_plugin17, 'addJsDefL'))) {
throw new SmartyException('block tag \'addJsDefL\' not callable or registered');
}
$_smarty_tpl->smarty->_cache['_tag_stack'][] = array('addJsDefL', array('name'=>'product_fileDefaultHtml'));
$_block_repeat=true;
echo $_block_plugin17->addJsDefL(array('name'=>'product_fileDefaultHtml'), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();
echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'No file selected','js'=>1),$_smarty_tpl ) );
$_block_repeat=false;
echo $_block_plugin17->addJsDefL(array('name'=>'product_fileDefaultHtml'), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);
$_block_plugin18 = isset($_smarty_tpl->smarty->registered_plugins['block']['addJsDefL'][0][0]) ? $_smarty_tpl->smarty->registered_plugins['block']['addJsDefL'][0][0] : null;
if (!is_callable(array($_block_plugin18, 'addJsDefL'))) {
throw new SmartyException('block tag \'addJsDefL\' not callable or registered');
}
$_smarty_tpl->smarty->_cache['_tag_stack'][] = array('addJsDefL', array('name'=>'product_fileButtonHtml'));
$_block_repeat=true;
echo $_block_plugin18->addJsDefL(array('name'=>'product_fileButtonHtml'), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();
echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Choose File','js'=>1),$_smarty_tpl ) );
$_block_repeat=false;
echo $_block_plugin18->addJsDefL(array('name'=>'product_fileButtonHtml'), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);
echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['addJsDef'][0], array( array('currency_sign'=>$_smarty_tpl->tpl_vars['currency']->value->sign),$_smarty_tpl ) );
echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['addJsDef'][0], array( array('currency_format'=>$_smarty_tpl->tpl_vars['currency']->value->format),$_smarty_tpl ) );
echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['addJsDef'][0], array( array('currency_blank'=>$_smarty_tpl->tpl_vars['currency']->value->blank),$_smarty_tpl ) );
$_block_plugin19 = isset($_smarty_tpl->smarty->registered_plugins['block']['addJsDefL'][0][0]) ? $_smarty_tpl->smarty->registered_plugins['block']['addJsDefL'][0][0] : null;
if (!is_callable(array($_block_plugin19, 'addJsDefL'))) {
throw new SmartyException('block tag \'addJsDefL\' not callable or registered');
}
$_smarty_tpl->smarty->_cache['_tag_stack'][] = array('addJsDefL', array('name'=>'correct_date_cond'));
$_block_repeat=true;
echo $_block_plugin19->addJsDefL(array('name'=>'correct_date_cond'), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();
echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Check Out Date should be greater than Check in date.','js'=>1),$_smarty_tpl ) );
$_block_repeat=false;
echo $_block_plugin19->addJsDefL(array('name'=>'correct_date_cond'), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);
$_block_plugin20 = isset($_smarty_tpl->smarty->registered_plugins['block']['addJsDefL'][0][0]) ? $_smarty_tpl->smarty->registered_plugins['block']['addJsDefL'][0][0] : null;
if (!is_callable(array($_block_plugin20, 'addJsDefL'))) {
throw new SmartyException('block tag \'addJsDefL\' not callable or registered');
}
$_smarty_tpl->smarty->_cache['_tag_stack'][] = array('addJsDefL', array('name'=>'some_error_cond'));
$_block_repeat=true;
echo $_block_plugin20->addJsDefL(array('name'=>'some_error_cond'), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();
echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Some error occured .Please try again.','js'=>1),$_smarty_tpl ) );
$_block_repeat=false;
echo $_block_plugin20->addJsDefL(array('name'=>'some_error_cond'), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);
$_block_plugin21 = isset($_smarty_tpl->smarty->registered_plugins['block']['addJsDefL'][0][0]) ? $_smarty_tpl->smarty->registered_plugins['block']['addJsDefL'][0][0] : null;
if (!is_callable(array($_block_plugin21, 'addJsDefL'))) {
throw new SmartyException('block tag \'addJsDefL\' not callable or registered');
}
$_smarty_tpl->smarty->_cache['_tag_stack'][] = array('addJsDefL', array('name'=>'unavail_qty_text'));
$_block_repeat=true;
echo $_block_plugin21->addJsDefL(array('name'=>'unavail_qty_text'), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();
echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Required quantity of rooms are Not available.','js'=>1),$_smarty_tpl ) );
$_block_repeat=false;
echo $_block_plugin21->addJsDefL(array('name'=>'unavail_qty_text'), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);
$_block_plugin22 = isset($_smarty_tpl->smarty->registered_plugins['block']['addJsDefL'][0][0]) ? $_smarty_tpl->smarty->registered_plugins['block']['addJsDefL'][0][0] : null;
if (!is_callable(array($_block_plugin22, 'addJsDefL'))) {
throw new SmartyException('block tag \'addJsDefL\' not callable or registered');
}
$_smarty_tpl->smarty->_cache['_tag_stack'][] = array('addJsDefL', array('name'=>'out_of_stock_cond'));
$_block_repeat=true;
echo $_block_plugin22->addJsDefL(array('name'=>'out_of_stock_cond'), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();
echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'No room is available for this period.','js'=>1),$_smarty_tpl ) );
$_block_repeat=false;
echo $_block_plugin22->addJsDefL(array('name'=>'out_of_stock_cond'), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);
$_block_plugin23 = isset($_smarty_tpl->smarty->registered_plugins['block']['addJsDefL'][0][0]) ? $_smarty_tpl->smarty->registered_plugins['block']['addJsDefL'][0][0] : null;
if (!is_callable(array($_block_plugin23, 'addJsDefL'))) {
throw new SmartyException('block tag \'addJsDefL\' not callable or registered');
}
$_smarty_tpl->smarty->_cache['_tag_stack'][] = array('addJsDefL', array('name'=>'wrong_qty_cond'));
$_block_repeat=true;
echo $_block_plugin23->addJsDefL(array('name'=>'wrong_qty_cond'), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();
echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'you are trying for a invalid quantity.','js'=>1),$_smarty_tpl ) );
$_block_repeat=false;
echo $_block_plugin23->addJsDefL(array('name'=>'wrong_qty_cond'), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);
$_block_plugin24 = isset($_smarty_tpl->smarty->registered_plugins['block']['addJsDefL'][0][0]) ? $_smarty_tpl->smarty->registered_plugins['block']['addJsDefL'][0][0] : null;
if (!is_callable(array($_block_plugin24, 'addJsDefL'))) {
throw new SmartyException('block tag \'addJsDefL\' not callable or registered');
}
$_smarty_tpl->smarty->_cache['_tag_stack'][] = array('addJsDefL', array('name'=>'select_txt'));
$_block_repeat=true;
echo $_block_plugin24->addJsDefL(array('name'=>'select_txt'), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();
echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Select','js'=>1),$_smarty_tpl ) );
$_block_repeat=false;
echo $_block_plugin24->addJsDefL(array('name'=>'select_txt'), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);
$_block_plugin25 = isset($_smarty_tpl->smarty->registered_plugins['block']['addJsDefL'][0][0]) ? $_smarty_tpl->smarty->registered_plugins['block']['addJsDefL'][0][0] : null;
if (!is_callable(array($_block_plugin25, 'addJsDefL'))) {
throw new SmartyException('block tag \'addJsDefL\' not callable or registered');
}
$_smarty_tpl->smarty->_cache['_tag_stack'][] = array('addJsDefL', array('name'=>'remove_txt'));
$_block_repeat=true;
echo $_block_plugin25->addJsDefL(array('name'=>'remove_txt'), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();
echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Remove','js'=>1),$_smarty_tpl ) );
$_block_repeat=false;
echo $_block_plugin25->addJsDefL(array('name'=>'remove_txt'), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);
$_block_plugin26 = isset($_smarty_tpl->smarty->registered_plugins['block']['addJsDefL'][0][0]) ? $_smarty_tpl->smarty->registered_plugins['block']['addJsDefL'][0][0] : null;
if (!is_callable(array($_block_plugin26, 'addJsDefL'))) {
throw new SmartyException('block tag \'addJsDefL\' not callable or registered');
}
$_smarty_tpl->smarty->_cache['_tag_stack'][] = array('addJsDefL', array('name'=>'unselect_txt'));
$_block_repeat=true;
echo $_block_plugin26->addJsDefL(array('name'=>'unselect_txt'), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();
echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Unselect','js'=>1),$_smarty_tpl ) );
$_block_repeat=false;
echo $_block_plugin26->addJsDefL(array('name'=>'unselect_txt'), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);
$_block_plugin27 = isset($_smarty_tpl->smarty->registered_plugins['block']['addJsDefL'][0][0]) ? $_smarty_tpl->smarty->registered_plugins['block']['addJsDefL'][0][0] : null;
if (!is_callable(array($_block_plugin27, 'addJsDefL'))) {
throw new SmartyException('block tag \'addJsDefL\' not callable or registered');
}
$_smarty_tpl->smarty->_cache['_tag_stack'][] = array('addJsDefL', array('name'=>'service_added_txt'));
$_block_repeat=true;
echo $_block_plugin27->addJsDefL(array('name'=>'service_added_txt'), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();
echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Service added','js'=>1),$_smarty_tpl ) );
$_block_repeat=false;
echo $_block_plugin27->addJsDefL(array('name'=>'service_added_txt'), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);
$_block_plugin28 = isset($_smarty_tpl->smarty->registered_plugins['block']['addJsDefL'][0][0]) ? $_smarty_tpl->smarty->registered_plugins['block']['addJsDefL'][0][0] : null;
if (!is_callable(array($_block_plugin28, 'addJsDefL'))) {
throw new SmartyException('block tag \'addJsDefL\' not callable or registered');
}
$_smarty_tpl->smarty->_cache['_tag_stack'][] = array('addJsDefL', array('name'=>'service_removed_txt'));
$_block_repeat=true;
echo $_block_plugin28->addJsDefL(array('name'=>'service_removed_txt'), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();
echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Service removed','js'=>1),$_smarty_tpl ) );
$_block_repeat=false;
echo $_block_plugin28->addJsDefL(array('name'=>'service_removed_txt'), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);
$_block_plugin29 = isset($_smarty_tpl->smarty->registered_plugins['block']['addJsDefL'][0][0]) ? $_smarty_tpl->smarty->registered_plugins['block']['addJsDefL'][0][0] : null;
if (!is_callable(array($_block_plugin29, 'addJsDefL'))) {
throw new SmartyException('block tag \'addJsDefL\' not callable or registered');
}
$_smarty_tpl->smarty->_cache['_tag_stack'][] = array('addJsDefL', array('name'=>'service_updated_txt'));
$_block_repeat=true;
echo $_block_plugin29->addJsDefL(array('name'=>'service_updated_txt'), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();
echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Service updated','js'=>1),$_smarty_tpl ) );
$_block_repeat=false;
echo $_block_plugin29->addJsDefL(array('name'=>'service_updated_txt'), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);?>
	<?php
}
}
/* {/block 'product_js_vars'} */
/* {block 'product'} */
class Block_161986353267bb8ed58bb2c0_96456249 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'product' => 
  array (
    0 => 'Block_161986353267bb8ed58bb2c0_96456249',
  ),
  'errors' => 
  array (
    0 => 'Block_110582748867bb8ed58bc0b0_86997000',
  ),
  'product_left_column' => 
  array (
    0 => 'Block_35996196267bb8ed58e1c44_62020229',
  ),
  'product_name' => 
  array (
    0 => 'Block_117711754467bb8ed58e42b6_06066928',
  ),
  'displayRoomTypeDetailRoomTypeNameBlock' => 
  array (
    0 => 'Block_151612580167bb8ed59047e2_33195283',
  ),
  'displayRoomTypeDetailRoomTypeNameAfter' => 
  array (
    0 => 'Block_125394615167bb8ed59070d6_96013956',
  ),
  'displayRoomTypeDetailRoomTypeImageBlockBefore' => 
  array (
    0 => 'Block_137332905067bb8ed5908da6_61929969',
  ),
  'product_images' => 
  array (
    0 => 'Block_81673242167bb8ed590be47_71577580',
  ),
  'product_cover_image' => 
  array (
    0 => 'Block_344386867bb8ed590c3c2_36441912',
  ),
  'displayRoomTypeImageAfter' => 
  array (
    0 => 'Block_54154053067bb8ed59466b5_01804327',
  ),
  'product_thumbnails' => 
  array (
    0 => 'Block_62792573867bb8ed5948a29_41050065',
  ),
  'displayRoomTypeThumbnailsBottom' => 
  array (
    0 => 'Block_73647526267bb8ed5966f42_52283888',
  ),
  'displayRoomTypeThumbnailsAfter' => 
  array (
    0 => 'Block_85355569667bb8ed596b8e7_58786789',
  ),
  'service_products' => 
  array (
    0 => 'Block_90627233567bb8ed59763f9_92361988',
  ),
  'product_tabs' => 
  array (
    0 => 'Block_52038803467bb8ed5978e66_39394679',
  ),
  'displayProductTab' => 
  array (
    0 => 'Block_80904379767bb8ed5981fc0_99801325',
  ),
  'product_tabs_content' => 
  array (
    0 => 'Block_190893474867bb8ed5983820_12113490',
  ),
  'product_info_tab_content' => 
  array (
    0 => 'Block_177593673667bb8ed5983ff6_98095313',
  ),
  'product_info_tab_room_description' => 
  array (
    0 => 'Block_56309799467bb8ed59845e3_07812754',
  ),
  'product_info_tab_room_guests' => 
  array (
    0 => 'Block_117810543367bb8ed59855c6_88142378',
  ),
  'product_info_tab_room_timing' => 
  array (
    0 => 'Block_186026929667bb8ed598db93_99800840',
  ),
  'product_info_tab_room_features' => 
  array (
    0 => 'Block_31551684567bb8ed59953f0_83289558',
  ),
  'product_info_tab_hotel_features' => 
  array (
    0 => 'Block_22406185467bb8ed59a4358_19204255',
  ),
  'product_info_tab_hotel_description' => 
  array (
    0 => 'Block_19243950667bb8ed59aec58_69879267',
  ),
  'product_info_tab_hotel_images' => 
  array (
    0 => 'Block_102828712667bb8ed59b1083_59802276',
  ),
  'product_info_tab_hotel_policies' => 
  array (
    0 => 'Block_199182094367bb8ed59b4c77_89059620',
  ),
  'product_refund_policies_tab_content' => 
  array (
    0 => 'Block_122808680867bb8ed59b7ab1_41262313',
  ),
  'product_map_tab_content' => 
  array (
    0 => 'Block_173663558867bb8ed59c8ba6_49653612',
  ),
  'displayProductTabContent' => 
  array (
    0 => 'Block_165682699067bb8ed59eae53_29239641',
  ),
  'product_right_column' => 
  array (
    0 => 'Block_125771916667bb8ed59ede60_95224188',
  ),
  'booking_form' => 
  array (
    0 => 'Block_160688653567bb8ed59f3da5_86532406',
  ),
  'product_demands' => 
  array (
    0 => 'Block_32500727967bb8ed59f79e9_56515744',
  ),
  'displayRightColumnProduct' => 
  array (
    0 => 'Block_52910297267bb8ed5a20296_26286906',
  ),
  'product_list' => 
  array (
    0 => 'Block_5978857167bb8ed5a7e857_31692972',
  ),
  'displayFooterProduct' => 
  array (
    0 => 'Block_102348632167bb8ed5aa7ae6_98085477',
  ),
  'product_js_vars' => 
  array (
    0 => 'Block_89411841767bb8ed5af2c71_06695493',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_checkPlugins(array(0=>array('file'=>'/home/qloapps/www/QloApps/tools/smarty/plugins/function.cycle.php','function'=>'smarty_function_cycle',),1=>array('file'=>'/home/qloapps/www/QloApps/tools/smarty/plugins/function.counter.php','function'=>'smarty_function_counter',),));
?>

	<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_110582748867bb8ed58bc0b0_86997000', 'errors', $this->tplIndex);
?>

	<?php if (count($_smarty_tpl->tpl_vars['errors']->value) == 0) {?>
		<?php if (!(isset($_smarty_tpl->tpl_vars['priceDisplayPrecision']->value))) {?>
			<?php $_smarty_tpl->_assignInScope('priceDisplayPrecision', 2);?>
		<?php }?>
		<?php if (!$_smarty_tpl->tpl_vars['priceDisplay']->value || $_smarty_tpl->tpl_vars['priceDisplay']->value == 2) {?>
			<?php $_smarty_tpl->_assignInScope('productPrice', $_smarty_tpl->tpl_vars['product']->value->getPrice(true,(defined('NULL') ? constant('NULL') : null),6));?>
			<?php $_smarty_tpl->_assignInScope('productPriceWithoutReduction', $_smarty_tpl->tpl_vars['product']->value->getPriceWithoutReduct(false,(defined('NULL') ? constant('NULL') : null)));?>
		<?php } elseif ($_smarty_tpl->tpl_vars['priceDisplay']->value == 1) {?>
			<?php $_smarty_tpl->_assignInScope('productPrice', $_smarty_tpl->tpl_vars['product']->value->getPrice(false,(defined('NULL') ? constant('NULL') : null),6));?>
			<?php $_smarty_tpl->_assignInScope('productPriceWithoutReduction', $_smarty_tpl->tpl_vars['product']->value->getPriceWithoutReduct(true,(defined('NULL') ? constant('NULL') : null)));?>
		<?php }?>
	<div class="product_wrapper" itemscope itemtype="http://schema.org/Product">
		<?php if ((isset($_smarty_tpl->tpl_vars['product']->value)) && $_smarty_tpl->tpl_vars['product']->value) {?>
			<meta itemprop="url" content="<?php echo $_smarty_tpl->tpl_vars['link']->value->getProductLink($_smarty_tpl->tpl_vars['product']->value);?>
">
			<div class="primary_block row">
				<!-- <?php if (!$_smarty_tpl->tpl_vars['content_only']->value) {?>
					<div class="container">
						<div class="top-hr"></div>
					</div>
				<?php }?> --><!-- by webkul -->
				<?php if ((isset($_smarty_tpl->tpl_vars['adminActionDisplay']->value)) && $_smarty_tpl->tpl_vars['adminActionDisplay']->value) {?>
					<div id="admin-action" class="container">
						<p class="alert alert-info"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'This room type is not visible to your customers.'),$_smarty_tpl ) );?>

							<input type="hidden" id="admin-action-product-id" value="<?php echo $_smarty_tpl->tpl_vars['product']->value->id;?>
" />
							<a id="publish_button" class="btn btn-default button button-small" href="#">
								<span><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Publish'),$_smarty_tpl ) );?>
</span>
							</a>
							<a id="lnk_view" class="btn btn-default button button-small" href="#">
								<span><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Back'),$_smarty_tpl ) );?>
</span>
							</a>
						</p>
						<p id="admin-action-result"></p>
					</div>
				<?php }?>
				<?php if ((isset($_smarty_tpl->tpl_vars['confirmation']->value)) && $_smarty_tpl->tpl_vars['confirmation']->value) {?>
					<p class="confirmation">
						<?php echo $_smarty_tpl->tpl_vars['confirmation']->value;?>

					</p>
				<?php }?>
				<!-- left infos-->
				<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_35996196267bb8ed58e1c44_62020229', 'product_left_column', $this->tplIndex);
?>


				<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_125771916667bb8ed59ede60_95224188', 'product_right_column', $this->tplIndex);
?>


			</div> <!-- end primary_block -->
			<?php if (!$_smarty_tpl->tpl_vars['content_only']->value) {?>
				<?php if (((isset($_smarty_tpl->tpl_vars['quantity_discounts']->value)) && count($_smarty_tpl->tpl_vars['quantity_discounts']->value) > 0)) {?>
					<!-- quantity discount -->
					<section class="page-product-box ">
						<h3 class="page-product-heading"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Volume discounts'),$_smarty_tpl ) );?>
</h3>
						<div id="quantityDiscount">
							<table class="std table-product-discounts">
								<thead>
									<tr>
										<th><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Quantity'),$_smarty_tpl ) );?>
</th>
										<th><?php if ($_smarty_tpl->tpl_vars['display_discount_price']->value) {
echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Price'),$_smarty_tpl ) );
} else {
echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Discount'),$_smarty_tpl ) );
}?></th>
										<th><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'You Save'),$_smarty_tpl ) );?>
</th>
									</tr>
								</thead>
								<tbody>
									<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['quantity_discounts']->value, 'quantity_discount', false, NULL, 'quantity_discounts', array (
));
$_smarty_tpl->tpl_vars['quantity_discount']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['quantity_discount']->value) {
$_smarty_tpl->tpl_vars['quantity_discount']->do_else = false;
?>
										<?php if ($_smarty_tpl->tpl_vars['quantity_discount']->value['price'] >= 0 || $_smarty_tpl->tpl_vars['quantity_discount']->value['reduction_type'] == 'amount') {?>
											<?php $_smarty_tpl->_assignInScope('realDiscountPrice', floatval($_smarty_tpl->tpl_vars['quantity_discount']->value['base_price'])-floatval($_smarty_tpl->tpl_vars['quantity_discount']->value['real_value']));?>
										<?php } else { ?>
											<?php $_smarty_tpl->_assignInScope('realDiscountPrice', floatval($_smarty_tpl->tpl_vars['quantity_discount']->value['base_price'])*floatval((1-$_smarty_tpl->tpl_vars['quantity_discount']->value['reduction'])));?>
										<?php }?>
										<tr class="quantityDiscount_<?php echo $_smarty_tpl->tpl_vars['quantity_discount']->value['id_product_attribute'];?>
" data-real-discount-value="<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['convertPrice'][0], array( array('price'=>$_smarty_tpl->tpl_vars['realDiscountPrice']->value),$_smarty_tpl ) );?>
" data-discount-type="<?php echo $_smarty_tpl->tpl_vars['quantity_discount']->value['reduction_type'];?>
" data-discount="<?php echo floatval($_smarty_tpl->tpl_vars['quantity_discount']->value['real_value']);?>
" data-discount-quantity="<?php echo intval($_smarty_tpl->tpl_vars['quantity_discount']->value['quantity']);?>
">
											<td>
												<?php echo intval($_smarty_tpl->tpl_vars['quantity_discount']->value['quantity']);?>

											</td>
											<td>
												<?php if ($_smarty_tpl->tpl_vars['quantity_discount']->value['price'] >= 0 || $_smarty_tpl->tpl_vars['quantity_discount']->value['reduction_type'] == 'amount') {?>
													<?php if ($_smarty_tpl->tpl_vars['display_discount_price']->value) {?>
														<?php if ($_smarty_tpl->tpl_vars['quantity_discount']->value['reduction_tax'] == 0 && !$_smarty_tpl->tpl_vars['quantity_discount']->value['price']) {?>
															<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['convertPrice'][0], array( array('price'=>floatval($_smarty_tpl->tpl_vars['productPriceWithoutReduction']->value)-floatval(($_smarty_tpl->tpl_vars['productPriceWithoutReduction']->value*$_smarty_tpl->tpl_vars['quantity_discount']->value['reduction_with_tax']))),$_smarty_tpl ) );?>

														<?php } else { ?>
															<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['convertPrice'][0], array( array('price'=>floatval($_smarty_tpl->tpl_vars['productPriceWithoutReduction']->value)-floatval($_smarty_tpl->tpl_vars['quantity_discount']->value['real_value'])),$_smarty_tpl ) );?>

														<?php }?>
													<?php } else { ?>
														<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['convertPrice'][0], array( array('price'=>floatval($_smarty_tpl->tpl_vars['quantity_discount']->value['real_value'])),$_smarty_tpl ) );?>

													<?php }?>
												<?php } else { ?>
													<?php if ($_smarty_tpl->tpl_vars['display_discount_price']->value) {?>
														<?php if ($_smarty_tpl->tpl_vars['quantity_discount']->value['reduction_tax'] == 0) {?>
															<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['convertPrice'][0], array( array('price'=>floatval($_smarty_tpl->tpl_vars['productPriceWithoutReduction']->value)-floatval(($_smarty_tpl->tpl_vars['productPriceWithoutReduction']->value*$_smarty_tpl->tpl_vars['quantity_discount']->value['reduction_with_tax']))),$_smarty_tpl ) );?>

														<?php } else { ?>
															<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['convertPrice'][0], array( array('price'=>floatval($_smarty_tpl->tpl_vars['productPriceWithoutReduction']->value)-floatval(($_smarty_tpl->tpl_vars['productPriceWithoutReduction']->value*$_smarty_tpl->tpl_vars['quantity_discount']->value['reduction']))),$_smarty_tpl ) );?>

														<?php }?>
													<?php } else { ?>
														<?php echo floatval($_smarty_tpl->tpl_vars['quantity_discount']->value['real_value']);?>
%
													<?php }?>
												<?php }?>
											</td>
											<td>
												<span><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Up to'),$_smarty_tpl ) );?>
</span>
												<?php if ($_smarty_tpl->tpl_vars['quantity_discount']->value['price'] >= 0 || $_smarty_tpl->tpl_vars['quantity_discount']->value['reduction_type'] == 'amount') {?>
													<?php $_smarty_tpl->_assignInScope('discountPrice', floatval($_smarty_tpl->tpl_vars['productPriceWithoutReduction']->value)-floatval($_smarty_tpl->tpl_vars['quantity_discount']->value['real_value']));?>
												<?php } else { ?>
													<?php $_smarty_tpl->_assignInScope('discountPrice', floatval($_smarty_tpl->tpl_vars['productPriceWithoutReduction']->value)-floatval(($_smarty_tpl->tpl_vars['productPriceWithoutReduction']->value*$_smarty_tpl->tpl_vars['quantity_discount']->value['reduction'])));?>
												<?php }?>
												<?php $_smarty_tpl->_assignInScope('discountPrice', $_smarty_tpl->tpl_vars['discountPrice']->value*$_smarty_tpl->tpl_vars['quantity_discount']->value['quantity']);?>
												<?php $_smarty_tpl->_assignInScope('qtyProductPrice', floatval($_smarty_tpl->tpl_vars['productPriceWithoutReduction']->value)*$_smarty_tpl->tpl_vars['quantity_discount']->value['quantity']);?>
												<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['convertPrice'][0], array( array('price'=>$_smarty_tpl->tpl_vars['qtyProductPrice']->value-$_smarty_tpl->tpl_vars['discountPrice']->value),$_smarty_tpl ) );?>

											</td>
										</tr>
									<?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
								</tbody>
							</table>
						</div>
					</section>
				<?php }?>
				<!-- <?php if ((isset($_smarty_tpl->tpl_vars['features']->value)) && $_smarty_tpl->tpl_vars['features']->value) {?>
					<section class="page-product-box">
						<h3 class="page-product-heading"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Data sheet'),$_smarty_tpl ) );?>
</h3>
						<table class="table-data-sheet">
							<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['features']->value, 'feature');
$_smarty_tpl->tpl_vars['feature']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['feature']->value) {
$_smarty_tpl->tpl_vars['feature']->do_else = false;
?>
							<tr class="<?php echo smarty_function_cycle(array('values'=>"odd,even"),$_smarty_tpl);?>
">
								<?php if ((isset($_smarty_tpl->tpl_vars['feature']->value['value']))) {?>
								<td><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['feature']->value['name'], ENT_QUOTES, 'UTF-8', true);?>
</td>
								<td><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['feature']->value['value'], ENT_QUOTES, 'UTF-8', true);?>
</td>
								<?php }?>
							</tr>
							<?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
						</table>
					</section>
				<?php }?> -->
				<!-- <?php if ((isset($_smarty_tpl->tpl_vars['product']->value)) && $_smarty_tpl->tpl_vars['product']->value->description) {?>
					<section class="page-product-box">
						<h3 class="page-product-heading"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'More info'),$_smarty_tpl ) );?>
</h3>
						<div  class="rte"><?php echo $_smarty_tpl->tpl_vars['product']->value->description;?>
</div>
					</section>
				<?php }?> --><!-- by webkul commented -->
				<?php if ((isset($_smarty_tpl->tpl_vars['packItems']->value)) && count($_smarty_tpl->tpl_vars['packItems']->value) > 0) {?>
				<section id="blockpack">
					<h3 class="page-product-heading"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Pack content'),$_smarty_tpl ) );?>
</h3>
					<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_5978857167bb8ed5a7e857_31692972', 'product_list', $this->tplIndex);
?>

				</section>
				<?php }?>
				<!-- tab hook is shifted to left column -->
				<!--end HOOK_PRODUCT_TAB -->
				<?php if ((isset($_smarty_tpl->tpl_vars['accessories']->value)) && $_smarty_tpl->tpl_vars['accessories']->value) {?>
					<!--Accessories -->
					<section class="page-product-box">
						<h3 class="page-product-heading"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Accessories'),$_smarty_tpl ) );?>
</h3>
						<div class="block products_block accessories-block clearfix">
							<div class="block_content">
								<ul id="bxslider" class="bxslider clearfix">
									<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['accessories']->value, 'accessory', false, NULL, 'accessories_list', array (
  'first' => true,
  'last' => true,
  'index' => true,
  'iteration' => true,
  'total' => true,
));
$_smarty_tpl->tpl_vars['accessory']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['accessory']->value) {
$_smarty_tpl->tpl_vars['accessory']->do_else = false;
$_smarty_tpl->tpl_vars['__smarty_foreach_accessories_list']->value['iteration']++;
$_smarty_tpl->tpl_vars['__smarty_foreach_accessories_list']->value['index']++;
$_smarty_tpl->tpl_vars['__smarty_foreach_accessories_list']->value['first'] = !$_smarty_tpl->tpl_vars['__smarty_foreach_accessories_list']->value['index'];
$_smarty_tpl->tpl_vars['__smarty_foreach_accessories_list']->value['last'] = $_smarty_tpl->tpl_vars['__smarty_foreach_accessories_list']->value['iteration'] === $_smarty_tpl->tpl_vars['__smarty_foreach_accessories_list']->value['total'];
?>
										<?php if (($_smarty_tpl->tpl_vars['accessory']->value['allow_oosp'] || $_smarty_tpl->tpl_vars['accessory']->value['quantity_all_versions'] > 0 || $_smarty_tpl->tpl_vars['accessory']->value['quantity'] > 0) && $_smarty_tpl->tpl_vars['accessory']->value['available_for_order'] && !(isset($_smarty_tpl->tpl_vars['restricted_country_mode']->value))) {?>
											<?php $_smarty_tpl->_assignInScope('accessoryLink', $_smarty_tpl->tpl_vars['link']->value->getProductLink($_smarty_tpl->tpl_vars['accessory']->value['id_product'],$_smarty_tpl->tpl_vars['accessory']->value['link_rewrite'],$_smarty_tpl->tpl_vars['accessory']->value['category']));?>
											<li class="item product-box ajax_block_product<?php if ((isset($_smarty_tpl->tpl_vars['__smarty_foreach_accessories_list']->value['first']) ? $_smarty_tpl->tpl_vars['__smarty_foreach_accessories_list']->value['first'] : null)) {?> first_item<?php } elseif ((isset($_smarty_tpl->tpl_vars['__smarty_foreach_accessories_list']->value['last']) ? $_smarty_tpl->tpl_vars['__smarty_foreach_accessories_list']->value['last'] : null)) {?> last_item<?php } else { ?> item<?php }?> product_accessories_description">
												<div class="product_desc">
													<a href="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['accessoryLink']->value, ENT_QUOTES, 'UTF-8', true);?>
" title="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['accessory']->value['legend'], ENT_QUOTES, 'UTF-8', true);?>
" class="product-image product_image">
														<img class="lazyOwl" src="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['link']->value->getImageLink($_smarty_tpl->tpl_vars['accessory']->value['link_rewrite'],$_smarty_tpl->tpl_vars['accessory']->value['id_image'],'home_default'), ENT_QUOTES, 'UTF-8', true);?>
" alt="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['accessory']->value['legend'], ENT_QUOTES, 'UTF-8', true);?>
" width="<?php echo $_smarty_tpl->tpl_vars['homeSize']->value['width'];?>
" height="<?php echo $_smarty_tpl->tpl_vars['homeSize']->value['height'];?>
"/>
													</a>
													<div class="block_description">
														<a href="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['accessoryLink']->value, ENT_QUOTES, 'UTF-8', true);?>
" title="<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'More'),$_smarty_tpl ) );?>
" class="product_description">
															<?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'truncate' ][ 0 ], array( preg_replace('!<[^>]*?>!', ' ', $_smarty_tpl->tpl_vars['accessory']->value['description_short']),25,'...' ));?>

														</a>
													</div>
												</div>
												<div class="s_title_block">
													<h5 itemprop="name" class="product-name">
														<a href="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['accessoryLink']->value, ENT_QUOTES, 'UTF-8', true);?>
">
															<?php echo htmlspecialchars(call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'truncate' ][ 0 ], array( $_smarty_tpl->tpl_vars['accessory']->value['name'],20,'...',true )), ENT_QUOTES, 'UTF-8', true);?>

														</a>
													</h5>
													<?php if ($_smarty_tpl->tpl_vars['accessory']->value['show_price'] && !(isset($_smarty_tpl->tpl_vars['restricted_country_mode']->value)) && !$_smarty_tpl->tpl_vars['PS_CATALOG_MODE']->value) {?>
													<span class="price">
														<?php if ($_smarty_tpl->tpl_vars['priceDisplay']->value != 1) {?>
														<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['displayWtPrice'][0], array( array('p'=>$_smarty_tpl->tpl_vars['accessory']->value['price']),$_smarty_tpl ) );
} else {
echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['displayWtPrice'][0], array( array('p'=>$_smarty_tpl->tpl_vars['accessory']->value['price_tax_exc']),$_smarty_tpl ) );?>

														<?php }?>
													</span>
													<?php }?>
												</div>
												<div class="clearfix" style="margin-top:5px">
													<?php if (!$_smarty_tpl->tpl_vars['PS_CATALOG_MODE']->value && ($_smarty_tpl->tpl_vars['accessory']->value['allow_oosp'] || $_smarty_tpl->tpl_vars['accessory']->value['quantity'] > 0)) {?>
														<div class="no-print">
															<a class="exclusive button ajax_add_to_cart_button" href="<?php ob_start();
echo intval($_smarty_tpl->tpl_vars['accessory']->value['id_product']);
$_prefixVariable13=ob_get_clean();
echo htmlspecialchars($_smarty_tpl->tpl_vars['link']->value->getPageLink('cart',true,NULL,"qty=1&amp;id_product=".$_prefixVariable13."&amp;token=".((string)$_smarty_tpl->tpl_vars['static_token']->value)."&amp;add"), ENT_QUOTES, 'UTF-8', true);?>
" data-id-product="<?php echo intval($_smarty_tpl->tpl_vars['accessory']->value['id_product']);?>
" title="<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Add to cart'),$_smarty_tpl ) );?>
">
																<span><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Add to cart'),$_smarty_tpl ) );?>
</span>
															</a>
														</div>
													<?php }?>
												</div>
											</li>
										<?php }?>
									<?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
								</ul>
							</div>
						</div>
					</section>
					<!--end Accessories -->
				<?php }?>
				<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_102348632167bb8ed5aa7ae6_98085477', 'displayFooterProduct', $this->tplIndex);
?>

				<!-- description & features -->
				<?php if (((isset($_smarty_tpl->tpl_vars['product']->value)) && $_smarty_tpl->tpl_vars['product']->value->description) || ((isset($_smarty_tpl->tpl_vars['features']->value)) && $_smarty_tpl->tpl_vars['features']->value) || ((isset($_smarty_tpl->tpl_vars['accessories']->value)) && $_smarty_tpl->tpl_vars['accessories']->value) || ((isset($_smarty_tpl->tpl_vars['HOOK_PRODUCT_TAB']->value)) && $_smarty_tpl->tpl_vars['HOOK_PRODUCT_TAB']->value) || ((isset($_smarty_tpl->tpl_vars['attachments']->value)) && $_smarty_tpl->tpl_vars['attachments']->value) || (isset($_smarty_tpl->tpl_vars['product']->value)) && $_smarty_tpl->tpl_vars['product']->value->customizable) {?>
					<?php if ((isset($_smarty_tpl->tpl_vars['attachments']->value)) && $_smarty_tpl->tpl_vars['attachments']->value) {?>
					<!--Download -->
					<section class="page-product-box">
						<h3 class="page-product-heading"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Download'),$_smarty_tpl ) );?>
</h3>
						<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['attachments']->value, 'attachment', false, NULL, 'attachements', array (
  'iteration' => true,
  'last' => true,
  'total' => true,
));
$_smarty_tpl->tpl_vars['attachment']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['attachment']->value) {
$_smarty_tpl->tpl_vars['attachment']->do_else = false;
$_smarty_tpl->tpl_vars['__smarty_foreach_attachements']->value['iteration']++;
$_smarty_tpl->tpl_vars['__smarty_foreach_attachements']->value['last'] = $_smarty_tpl->tpl_vars['__smarty_foreach_attachements']->value['iteration'] === $_smarty_tpl->tpl_vars['__smarty_foreach_attachements']->value['total'];
?>
							<?php if ((isset($_smarty_tpl->tpl_vars['__smarty_foreach_attachements']->value['iteration']) ? $_smarty_tpl->tpl_vars['__smarty_foreach_attachements']->value['iteration'] : null)%3 == 1) {?><div class="row"><?php }?>
								<div class="col-lg-4">
									<h4><a href="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['link']->value->getPageLink('attachment',true,NULL,"id_attachment=".((string)$_smarty_tpl->tpl_vars['attachment']->value['id_attachment'])), ENT_QUOTES, 'UTF-8', true);?>
"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['attachment']->value['name'], ENT_QUOTES, 'UTF-8', true);?>
</a></h4>
									<p class="text-muted"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['attachment']->value['description'], ENT_QUOTES, 'UTF-8', true);?>
</p>
									<a class="btn btn-default btn-block" href="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['link']->value->getPageLink('attachment',true,NULL,"id_attachment=".((string)$_smarty_tpl->tpl_vars['attachment']->value['id_attachment'])), ENT_QUOTES, 'UTF-8', true);?>
">
										<i class="icon-download"></i>
										<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>"Download"),$_smarty_tpl ) );?>
 (<?php echo Tools::formatBytes($_smarty_tpl->tpl_vars['attachment']->value['file_size'],2);?>
)
									</a>
									<hr />
								</div>
							<?php if ((isset($_smarty_tpl->tpl_vars['__smarty_foreach_attachements']->value['iteration']) ? $_smarty_tpl->tpl_vars['__smarty_foreach_attachements']->value['iteration'] : null)%3 == 0 || (isset($_smarty_tpl->tpl_vars['__smarty_foreach_attachements']->value['last']) ? $_smarty_tpl->tpl_vars['__smarty_foreach_attachements']->value['last'] : null)) {?></div><?php }?>
						<?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
					</section>
					<!--end Download -->
					<?php }?>
					<?php if ((isset($_smarty_tpl->tpl_vars['product']->value)) && $_smarty_tpl->tpl_vars['product']->value->customizable) {?>
					<!--Customization -->
					<section class="page-product-box">
						<h3 class="page-product-heading"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Product customization'),$_smarty_tpl ) );?>
</h3>
						<!-- Customizable products -->
						<form method="post" action="<?php echo $_smarty_tpl->tpl_vars['customizationFormTarget']->value;?>
" enctype="multipart/form-data" id="customizationForm" class="clearfix">
							<p class="infoCustomizable">
								<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'After saving your customized product, remember to add it to your cart.'),$_smarty_tpl ) );?>

								<?php if ($_smarty_tpl->tpl_vars['product']->value->uploadable_files) {?>
								<br />
								<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Allowed file formats are: GIF, JPG, PNG'),$_smarty_tpl ) );
}?>
							</p>
							<?php if (intval($_smarty_tpl->tpl_vars['product']->value->uploadable_files)) {?>
								<div class="customizableProductsFile">
									<h5 class="product-heading-h5"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Pictures'),$_smarty_tpl ) );?>
</h5>
									<ul id="uploadable_files" class="clearfix">
										<?php echo smarty_function_counter(array('start'=>0,'assign'=>'customizationField'),$_smarty_tpl);?>

										<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['customizationFields']->value, 'field', false, NULL, 'customizationFields', array (
));
$_smarty_tpl->tpl_vars['field']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['field']->value) {
$_smarty_tpl->tpl_vars['field']->do_else = false;
?>
											<?php if ($_smarty_tpl->tpl_vars['field']->value['type'] == 0) {?>
												<li class="customizationUploadLine<?php if ($_smarty_tpl->tpl_vars['field']->value['required']) {?> required<?php }?>"><?php $_smarty_tpl->_assignInScope('key', ((('pictures_').($_smarty_tpl->tpl_vars['product']->value->id)).('_')).($_smarty_tpl->tpl_vars['field']->value['id_customization_field']));?>
													<?php if ((isset($_smarty_tpl->tpl_vars['pictures']->value[$_smarty_tpl->tpl_vars['key']->value]))) {?>
														<div class="customizationUploadBrowse">
															<img src="<?php echo $_smarty_tpl->tpl_vars['pic_dir']->value;
echo $_smarty_tpl->tpl_vars['pictures']->value[$_smarty_tpl->tpl_vars['key']->value];?>
_small" alt="" />
																<a href="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['link']->value->getProductDeletePictureLink($_smarty_tpl->tpl_vars['product']->value,$_smarty_tpl->tpl_vars['field']->value['id_customization_field']), ENT_QUOTES, 'UTF-8', true);?>
" title="<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Delete'),$_smarty_tpl ) );?>
" >
																	<img src="<?php echo $_smarty_tpl->tpl_vars['img_dir']->value;?>
icon/delete.gif" alt="<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Delete'),$_smarty_tpl ) );?>
" class="customization_delete_icon" width="11" height="13" />
																</a>
														</div>
													<?php }?>
													<div class="customizationUploadBrowse form-group">
														<label class="customizationUploadBrowseDescription">
															<?php if (!empty($_smarty_tpl->tpl_vars['field']->value['name'])) {?>
																<?php echo $_smarty_tpl->tpl_vars['field']->value['name'];?>

															<?php } else { ?>
																<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Please select an image file from your computer'),$_smarty_tpl ) );?>

															<?php }?>
															<?php if ($_smarty_tpl->tpl_vars['field']->value['required']) {?><sup>*</sup><?php }?>
														</label>
														<input type="file" name="file<?php echo $_smarty_tpl->tpl_vars['field']->value['id_customization_field'];?>
" id="img<?php echo $_smarty_tpl->tpl_vars['customizationField']->value;?>
" class="form-control customization_block_input <?php if ((isset($_smarty_tpl->tpl_vars['pictures']->value[$_smarty_tpl->tpl_vars['key']->value]))) {?>filled<?php }?>" />
													</div>
												</li>
												<?php echo smarty_function_counter(array(),$_smarty_tpl);?>

											<?php }?>
										<?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
									</ul>
								</div>
							<?php }?>
							<?php if (intval($_smarty_tpl->tpl_vars['product']->value->text_fields)) {?>
								<div class="customizableProductsText">
									<h5 class="product-heading-h5"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Text'),$_smarty_tpl ) );?>
</h5>
									<ul id="text_fields">
									<?php echo smarty_function_counter(array('start'=>0,'assign'=>'customizationField'),$_smarty_tpl);?>

									<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['customizationFields']->value, 'field', false, NULL, 'customizationFields', array (
));
$_smarty_tpl->tpl_vars['field']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['field']->value) {
$_smarty_tpl->tpl_vars['field']->do_else = false;
?>
										<?php if ($_smarty_tpl->tpl_vars['field']->value['type'] == 1) {?>
											<li class="customizationUploadLine<?php if ($_smarty_tpl->tpl_vars['field']->value['required']) {?> required<?php }?>">
												<label for ="textField<?php echo $_smarty_tpl->tpl_vars['customizationField']->value;?>
">
													<?php $_smarty_tpl->_assignInScope('key', ((('textFields_').($_smarty_tpl->tpl_vars['product']->value->id)).('_')).($_smarty_tpl->tpl_vars['field']->value['id_customization_field']));?>
													<?php if (!empty($_smarty_tpl->tpl_vars['field']->value['name'])) {?>
														<?php echo $_smarty_tpl->tpl_vars['field']->value['name'];?>

													<?php }?>
													<?php if ($_smarty_tpl->tpl_vars['field']->value['required']) {?><sup>*</sup><?php }?>
												</label>
												<textarea name="textField<?php echo $_smarty_tpl->tpl_vars['field']->value['id_customization_field'];?>
" class="form-control customization_block_input" id="textField<?php echo $_smarty_tpl->tpl_vars['customizationField']->value;?>
" rows="3" cols="20"><?php if ((isset($_smarty_tpl->tpl_vars['textFields']->value[$_smarty_tpl->tpl_vars['key']->value]))) {
echo stripslashes($_smarty_tpl->tpl_vars['textFields']->value[$_smarty_tpl->tpl_vars['key']->value]);
}?></textarea>
											</li>
											<?php echo smarty_function_counter(array(),$_smarty_tpl);?>

										<?php }?>
									<?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
									</ul>
								</div>
							<?php }?>
							<p id="customizedDatas">
								<input type="hidden" name="quantityBackup" id="quantityBackup" value="" />
								<input type="hidden" name="submitCustomizedDatas" value="1" />
								<button class="button btn btn-default button button-small" name="saveCustomization">
									<span><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Save'),$_smarty_tpl ) );?>
</span>
								</button>
								<span id="ajax-loader" class="unvisible">
									<img src="<?php echo $_smarty_tpl->tpl_vars['img_ps_dir']->value;?>
loader.gif" alt="loader" />
								</span>
							</p>
						</form>
						<p class="clear required"><sup>*</sup> <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'required fields'),$_smarty_tpl ) );?>
</p>
					</section>
					<!--end Customization -->
					<?php }?>
				<?php }?>
			<?php }?>
		<?php } else { ?>
			<div class="bootstrap">
				<div class="alert alert-warning">
					<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'This room type has not enough information. Please save information of related hotel and other required room information for the booking of this room type.'),$_smarty_tpl ) );?>

				</div>
			</div>
		<?php }?>
	</div> <!-- itemscope product wrapper -->
	<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_89411841767bb8ed5af2c71_06695493', 'product_js_vars', $this->tplIndex);
?>

	<?php }
}
}
/* {/block 'product'} */
}
