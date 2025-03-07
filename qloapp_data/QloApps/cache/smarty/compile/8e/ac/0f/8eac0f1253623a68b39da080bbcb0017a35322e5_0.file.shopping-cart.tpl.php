<?php
/* Smarty version 3.1.39, created on 2025-02-24 02:40:49
  from '/home/qloapps/www/QloApps/themes/hotel-reservation-theme/shopping-cart.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.39',
  'unifunc' => 'content_67bb8ed9bdd9a3_78549867',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '8eac0f1253623a68b39da080bbcb0017a35322e5' => 
    array (
      0 => '/home/qloapps/www/QloApps/themes/hotel-reservation-theme/shopping-cart.tpl',
      1 => 1728563708,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_67bb8ed9bdd9a3_78549867 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_checkPlugins(array(0=>array('file'=>'/home/qloapps/www/QloApps/tools/smarty/plugins/modifier.regex_replace.php','function'=>'smarty_modifier_regex_replace',),));
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, false);
?>

<?php $_smarty_tpl->smarty->ext->_capture->open($_smarty_tpl, 'path', null, null);
echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Your shopping cart'),$_smarty_tpl ) );
$_smarty_tpl->smarty->ext->_capture->close($_smarty_tpl);?>


<?php if ((isset($_smarty_tpl->tpl_vars['account_created']->value))) {?>
	<p class="alert alert-success">
		<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Your account has been created.'),$_smarty_tpl ) );?>

	</p>
<?php }?>

<?php $_smarty_tpl->_assignInScope('current_step', 'summary');
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_11629301067bb8ed9a5c6f4_47216234', 'errors');
?>


<?php if ((isset($_smarty_tpl->tpl_vars['empty']->value))) {?>
	<p class="alert alert-warning"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Your shopping cart is empty.'),$_smarty_tpl ) );?>
</p>
<?php } elseif ($_smarty_tpl->tpl_vars['PS_CATALOG_MODE']->value) {?>
	<p class="alert alert-warning"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'This store has not accepted your new order.'),$_smarty_tpl ) );?>
</p>
<?php } else { ?>
	<p id="emptyCartWarning" class="alert alert-warning unvisible"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Your shopping cart is empty.'),$_smarty_tpl ) );?>
</p>
	<?php if ((isset($_smarty_tpl->tpl_vars['lastProductAdded']->value)) && $_smarty_tpl->tpl_vars['lastProductAdded']->value) {?>
		<div class="cart_last_product">
			<div class="cart_last_product_header">
				<div class="left"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Last product added'),$_smarty_tpl ) );?>
</div>
			</div>
			<a class="cart_last_product_img" href="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['link']->value->getProductLink($_smarty_tpl->tpl_vars['lastProductAdded']->value['id_product'],$_smarty_tpl->tpl_vars['lastProductAdded']->value['link_rewrite'],$_smarty_tpl->tpl_vars['lastProductAdded']->value['category'],null,null,$_smarty_tpl->tpl_vars['lastProductAdded']->value['id_shop']), ENT_QUOTES, 'UTF-8', true);?>
">
				<img src="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['link']->value->getImageLink($_smarty_tpl->tpl_vars['lastProductAdded']->value['link_rewrite'],$_smarty_tpl->tpl_vars['lastProductAdded']->value['id_image'],'small_default'), ENT_QUOTES, 'UTF-8', true);?>
" alt="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['lastProductAdded']->value['name'], ENT_QUOTES, 'UTF-8', true);?>
"/>
			</a>
			<div class="cart_last_product_content">
				<p class="product-name">
					<a href="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['link']->value->getProductLink($_smarty_tpl->tpl_vars['lastProductAdded']->value['id_product'],$_smarty_tpl->tpl_vars['lastProductAdded']->value['link_rewrite'],$_smarty_tpl->tpl_vars['lastProductAdded']->value['category'],null,null,null,$_smarty_tpl->tpl_vars['lastProductAdded']->value['id_product_attribute']), ENT_QUOTES, 'UTF-8', true);?>
">
						<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['lastProductAdded']->value['name'], ENT_QUOTES, 'UTF-8', true);?>

					</a>
				</p>
				<?php if ((isset($_smarty_tpl->tpl_vars['lastProductAdded']->value['attributes'])) && $_smarty_tpl->tpl_vars['lastProductAdded']->value['attributes']) {?>
					<small>
						<a href="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['link']->value->getProductLink($_smarty_tpl->tpl_vars['lastProductAdded']->value['id_product'],$_smarty_tpl->tpl_vars['lastProductAdded']->value['link_rewrite'],$_smarty_tpl->tpl_vars['lastProductAdded']->value['category'],null,null,null,$_smarty_tpl->tpl_vars['lastProductAdded']->value['id_product_attribute']), ENT_QUOTES, 'UTF-8', true);?>
">
							<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['lastProductAdded']->value['attributes'], ENT_QUOTES, 'UTF-8', true);?>

						</a>
					</small>
				<?php }?>
			</div>
		</div>
	<?php }?>
	<?php ob_start();
if ($_smarty_tpl->tpl_vars['total_discounts']->value != 0) {
echo "1";
} else {
echo "0";
}
$_prefixVariable55=ob_get_clean();
$_smarty_tpl->_assignInScope('total_discounts_num', $_prefixVariable55);?>
	<?php ob_start();
if ($_smarty_tpl->tpl_vars['use_taxes']->value && $_smarty_tpl->tpl_vars['show_taxes']->value) {
echo "2";
} else {
echo "0";
}
$_prefixVariable56=ob_get_clean();
$_smarty_tpl->_assignInScope('use_show_taxes', $_prefixVariable56);?>
	<?php ob_start();
if ($_smarty_tpl->tpl_vars['total_wrapping']->value != 0) {
echo "1";
} else {
echo "0";
}
$_prefixVariable57=ob_get_clean();
$_smarty_tpl->_assignInScope('total_wrapping_taxes_num', $_prefixVariable57);?>
		<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_50978237867bb8ed9a8f690_01542725', 'displayBeforeShoppingCartBlock');
?>


	<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_34310277667bb8ed9a90839_01066247', 'shopping_cart_detail');
?>


	<?php if ($_smarty_tpl->tpl_vars['show_option_allow_separate_package']->value) {?>
	<p>
		<label for="allow_seperated_package" class="checkbox inline">
			<input type="checkbox" name="allow_seperated_package" id="allow_seperated_package" <?php if ($_smarty_tpl->tpl_vars['cart']->value->allow_seperated_package) {?>checked="checked"<?php }?> autocomplete="off"/>
			<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Send available products first'),$_smarty_tpl ) );?>

		</label>
	</p>
	<?php }?>

			<?php if (!(isset($_smarty_tpl->tpl_vars['addresses_style']->value))) {?>
		<?php $_tmp_array = isset($_smarty_tpl->tpl_vars['addresses_style']) ? $_smarty_tpl->tpl_vars['addresses_style']->value : array();
if (!(is_array($_tmp_array) || $_tmp_array instanceof ArrayAccess)) {
settype($_tmp_array, 'array');
}
$_tmp_array['company'] = 'address_company';
$_smarty_tpl->_assignInScope('addresses_style', $_tmp_array);?>
		<?php $_tmp_array = isset($_smarty_tpl->tpl_vars['addresses_style']) ? $_smarty_tpl->tpl_vars['addresses_style']->value : array();
if (!(is_array($_tmp_array) || $_tmp_array instanceof ArrayAccess)) {
settype($_tmp_array, 'array');
}
$_tmp_array['firstname'] = 'address_name';
$_smarty_tpl->_assignInScope('addresses_style', $_tmp_array);?>
		<?php $_tmp_array = isset($_smarty_tpl->tpl_vars['addresses_style']) ? $_smarty_tpl->tpl_vars['addresses_style']->value : array();
if (!(is_array($_tmp_array) || $_tmp_array instanceof ArrayAccess)) {
settype($_tmp_array, 'array');
}
$_tmp_array['lastname'] = 'address_name';
$_smarty_tpl->_assignInScope('addresses_style', $_tmp_array);?>
		<?php $_tmp_array = isset($_smarty_tpl->tpl_vars['addresses_style']) ? $_smarty_tpl->tpl_vars['addresses_style']->value : array();
if (!(is_array($_tmp_array) || $_tmp_array instanceof ArrayAccess)) {
settype($_tmp_array, 'array');
}
$_tmp_array['address1'] = 'address_address1';
$_smarty_tpl->_assignInScope('addresses_style', $_tmp_array);?>
		<?php $_tmp_array = isset($_smarty_tpl->tpl_vars['addresses_style']) ? $_smarty_tpl->tpl_vars['addresses_style']->value : array();
if (!(is_array($_tmp_array) || $_tmp_array instanceof ArrayAccess)) {
settype($_tmp_array, 'array');
}
$_tmp_array['address2'] = 'address_address2';
$_smarty_tpl->_assignInScope('addresses_style', $_tmp_array);?>
		<?php $_tmp_array = isset($_smarty_tpl->tpl_vars['addresses_style']) ? $_smarty_tpl->tpl_vars['addresses_style']->value : array();
if (!(is_array($_tmp_array) || $_tmp_array instanceof ArrayAccess)) {
settype($_tmp_array, 'array');
}
$_tmp_array['city'] = 'address_city';
$_smarty_tpl->_assignInScope('addresses_style', $_tmp_array);?>
		<?php $_tmp_array = isset($_smarty_tpl->tpl_vars['addresses_style']) ? $_smarty_tpl->tpl_vars['addresses_style']->value : array();
if (!(is_array($_tmp_array) || $_tmp_array instanceof ArrayAccess)) {
settype($_tmp_array, 'array');
}
$_tmp_array['country'] = 'address_country';
$_smarty_tpl->_assignInScope('addresses_style', $_tmp_array);?>
		<?php $_tmp_array = isset($_smarty_tpl->tpl_vars['addresses_style']) ? $_smarty_tpl->tpl_vars['addresses_style']->value : array();
if (!(is_array($_tmp_array) || $_tmp_array instanceof ArrayAccess)) {
settype($_tmp_array, 'array');
}
$_tmp_array['phone'] = 'address_phone';
$_smarty_tpl->_assignInScope('addresses_style', $_tmp_array);?>
		<?php $_tmp_array = isset($_smarty_tpl->tpl_vars['addresses_style']) ? $_smarty_tpl->tpl_vars['addresses_style']->value : array();
if (!(is_array($_tmp_array) || $_tmp_array instanceof ArrayAccess)) {
settype($_tmp_array, 'array');
}
$_tmp_array['phone_mobile'] = 'address_phone_mobile';
$_smarty_tpl->_assignInScope('addresses_style', $_tmp_array);?>
		<?php $_tmp_array = isset($_smarty_tpl->tpl_vars['addresses_style']) ? $_smarty_tpl->tpl_vars['addresses_style']->value : array();
if (!(is_array($_tmp_array) || $_tmp_array instanceof ArrayAccess)) {
settype($_tmp_array, 'array');
}
$_tmp_array['alias'] = 'address_title';
$_smarty_tpl->_assignInScope('addresses_style', $_tmp_array);?>
	<?php }?>
	<?php if (!$_smarty_tpl->tpl_vars['advanced_payment_api']->value && ((!empty($_smarty_tpl->tpl_vars['delivery_option']->value) && (!(isset($_smarty_tpl->tpl_vars['isVirtualCart']->value)) || !$_smarty_tpl->tpl_vars['isVirtualCart']->value)) || $_smarty_tpl->tpl_vars['delivery']->value->id || $_smarty_tpl->tpl_vars['invoice']->value->id) && !$_smarty_tpl->tpl_vars['opc']->value) {?>
		<div class="order_delivery clearfix row">
			<?php if (!(isset($_smarty_tpl->tpl_vars['formattedAddresses']->value)) || (count($_smarty_tpl->tpl_vars['formattedAddresses']->value['invoice']) == 0 && count($_smarty_tpl->tpl_vars['formattedAddresses']->value['delivery']) == 0) || (count($_smarty_tpl->tpl_vars['formattedAddresses']->value['invoice']['formated']) == 0 && count($_smarty_tpl->tpl_vars['formattedAddresses']->value['delivery']['formated']) == 0)) {?>
				<?php if ($_smarty_tpl->tpl_vars['delivery']->value->id) {?>
					<div class="col-xs-12 col-sm-6"<?php if (!$_smarty_tpl->tpl_vars['have_non_virtual_products']->value) {?> style="display: none;"<?php }?>>
						<ul id="delivery_address" class="address item box">
							<li><h3 class="page-subheading"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Delivery address'),$_smarty_tpl ) );?>
&nbsp;<span class="address_alias">(<?php echo $_smarty_tpl->tpl_vars['delivery']->value->alias;?>
)</span></h3></li>
							<?php if ($_smarty_tpl->tpl_vars['delivery']->value->company) {?><li class="address_company"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['delivery']->value->company, ENT_QUOTES, 'UTF-8', true);?>
</li><?php }?>
							<li class="address_name"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['delivery']->value->firstname, ENT_QUOTES, 'UTF-8', true);?>
 <?php echo htmlspecialchars($_smarty_tpl->tpl_vars['delivery']->value->lastname, ENT_QUOTES, 'UTF-8', true);?>
</li>
							<li class="address_address1"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['delivery']->value->address1, ENT_QUOTES, 'UTF-8', true);?>
</li>
							<?php if ($_smarty_tpl->tpl_vars['delivery']->value->address2) {?><li class="address_address2"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['delivery']->value->address2, ENT_QUOTES, 'UTF-8', true);?>
</li><?php }?>
							<li class="address_city"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['delivery']->value->postcode, ENT_QUOTES, 'UTF-8', true);?>
 <?php echo htmlspecialchars($_smarty_tpl->tpl_vars['delivery']->value->city, ENT_QUOTES, 'UTF-8', true);?>
</li>
							<li class="address_country"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['delivery']->value->country, ENT_QUOTES, 'UTF-8', true);?>
 <?php if ($_smarty_tpl->tpl_vars['delivery_state']->value) {?>(<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['delivery_state']->value, ENT_QUOTES, 'UTF-8', true);?>
)<?php }?></li>
						</ul>
					</div>
				<?php }?>
				<?php if ($_smarty_tpl->tpl_vars['invoice']->value->id) {?>
					<div class="col-xs-12 col-sm-6">
						<ul id="invoice_address" class="address alternate_item box">
							<li><h3 class="page-subheading"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Invoice address'),$_smarty_tpl ) );?>
&nbsp;<span class="address_alias">(<?php echo $_smarty_tpl->tpl_vars['invoice']->value->alias;?>
)</span></h3></li>
							<?php if ($_smarty_tpl->tpl_vars['invoice']->value->company) {?><li class="address_company"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['invoice']->value->company, ENT_QUOTES, 'UTF-8', true);?>
</li><?php }?>
							<li class="address_name"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['invoice']->value->firstname, ENT_QUOTES, 'UTF-8', true);?>
 <?php echo htmlspecialchars($_smarty_tpl->tpl_vars['invoice']->value->lastname, ENT_QUOTES, 'UTF-8', true);?>
</li>
							<li class="address_address1"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['invoice']->value->address1, ENT_QUOTES, 'UTF-8', true);?>
</li>
							<?php if ($_smarty_tpl->tpl_vars['invoice']->value->address2) {?><li class="address_address2"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['invoice']->value->address2, ENT_QUOTES, 'UTF-8', true);?>
</li><?php }?>
							<li class="address_city"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['invoice']->value->postcode, ENT_QUOTES, 'UTF-8', true);?>
 <?php echo htmlspecialchars($_smarty_tpl->tpl_vars['invoice']->value->city, ENT_QUOTES, 'UTF-8', true);?>
</li>
							<li class="address_country"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['invoice']->value->country, ENT_QUOTES, 'UTF-8', true);?>
 <?php if ($_smarty_tpl->tpl_vars['invoice_state']->value) {?>(<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['invoice_state']->value, ENT_QUOTES, 'UTF-8', true);?>
)<?php }?></li>
						</ul>
					</div>
				<?php }?>
			<?php } else { ?>
				<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['formattedAddresses']->value, 'address', true, 'k');
$_smarty_tpl->tpl_vars['address']->iteration = 0;
$_smarty_tpl->tpl_vars['address']->index = -1;
$_smarty_tpl->tpl_vars['address']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['k']->value => $_smarty_tpl->tpl_vars['address']->value) {
$_smarty_tpl->tpl_vars['address']->do_else = false;
$_smarty_tpl->tpl_vars['address']->iteration++;
$_smarty_tpl->tpl_vars['address']->index++;
$_smarty_tpl->tpl_vars['address']->first = !$_smarty_tpl->tpl_vars['address']->index;
$_smarty_tpl->tpl_vars['address']->last = $_smarty_tpl->tpl_vars['address']->iteration === $_smarty_tpl->tpl_vars['address']->total;
$__foreach_address_146_saved = $_smarty_tpl->tpl_vars['address'];
?>
					<div class="col-xs-12 col-sm-6"<?php if ($_smarty_tpl->tpl_vars['k']->value == 'delivery' && !$_smarty_tpl->tpl_vars['have_non_virtual_products']->value) {?> style="display: none;"<?php }?>>
						<ul class="address <?php if ($_smarty_tpl->tpl_vars['address']->last) {?>last_item<?php } elseif ($_smarty_tpl->tpl_vars['address']->first) {?>first_item<?php }?> <?php if ($_smarty_tpl->tpl_vars['address']->index%2) {?>alternate_item<?php } else { ?>item<?php }?> box">
							<li>
								<h3 class="page-subheading">
									<?php if ($_smarty_tpl->tpl_vars['k']->value == 'invoice') {?>
										<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Invoice address'),$_smarty_tpl ) );?>

									<?php } elseif ($_smarty_tpl->tpl_vars['k']->value == 'delivery' && $_smarty_tpl->tpl_vars['delivery']->value->id) {?>
										<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Delivery address'),$_smarty_tpl ) );?>

									<?php }?>
									<?php if ((isset($_smarty_tpl->tpl_vars['address']->value['object']['alias']))) {?>
										<span class="address_alias">(<?php echo $_smarty_tpl->tpl_vars['address']->value['object']['alias'];?>
)</span>
									<?php }?>
								</h3>
							</li>
							<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['address']->value['ordered'], 'pattern');
$_smarty_tpl->tpl_vars['pattern']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['pattern']->value) {
$_smarty_tpl->tpl_vars['pattern']->do_else = false;
?>
								<?php $_smarty_tpl->_assignInScope('addressKey', explode(" ",$_smarty_tpl->tpl_vars['pattern']->value));?>
								<?php $_smarty_tpl->_assignInScope('addedli', false);?>
								<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['addressKey']->value, 'key', false, NULL, 'foo', array (
  'last' => true,
  'iteration' => true,
  'total' => true,
));
$_smarty_tpl->tpl_vars['key']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['key']->value) {
$_smarty_tpl->tpl_vars['key']->do_else = false;
$_smarty_tpl->tpl_vars['__smarty_foreach_foo']->value['iteration']++;
$_smarty_tpl->tpl_vars['__smarty_foreach_foo']->value['last'] = $_smarty_tpl->tpl_vars['__smarty_foreach_foo']->value['iteration'] === $_smarty_tpl->tpl_vars['__smarty_foreach_foo']->value['total'];
?>
								<?php $_smarty_tpl->_assignInScope('key_str', smarty_modifier_regex_replace($_smarty_tpl->tpl_vars['key']->value,AddressFormat::_CLEANING_REGEX_,''));?>
									<?php if ((isset($_smarty_tpl->tpl_vars['address']->value['formated'][$_smarty_tpl->tpl_vars['key_str']->value])) && !empty($_smarty_tpl->tpl_vars['address']->value['formated'][$_smarty_tpl->tpl_vars['key_str']->value])) {?>
										<?php if ((!$_smarty_tpl->tpl_vars['addedli']->value)) {?>
											<?php $_smarty_tpl->_assignInScope('addedli', true);?>
											<li><span class="<?php if ((isset($_smarty_tpl->tpl_vars['addresses_style']->value[$_smarty_tpl->tpl_vars['key_str']->value]))) {
echo $_smarty_tpl->tpl_vars['addresses_style']->value[$_smarty_tpl->tpl_vars['key_str']->value];
}?>">
										<?php }?>
										<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['address']->value['formated'][$_smarty_tpl->tpl_vars['key_str']->value], ENT_QUOTES, 'UTF-8', true);?>

									<?php }?>
									<?php if (((isset($_smarty_tpl->tpl_vars['__smarty_foreach_foo']->value['last']) ? $_smarty_tpl->tpl_vars['__smarty_foreach_foo']->value['last'] : null) && $_smarty_tpl->tpl_vars['addedli']->value)) {?>
										</span></li>
									<?php }?>
								<?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
							<?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
						</ul>
					</div>
				<?php
$_smarty_tpl->tpl_vars['address'] = $__foreach_address_146_saved;
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
			<?php }?>
		</div>
	<?php }?>
	<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_207732862567bb8ed9bc1de5_65848160', 'displayShoppingCartFooter');
?>

		<div class="clear"></div>
	<div class="cart_navigation_extra">
		<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_111865192267bb8ed9bc3d77_01202874', 'displayShoppingCart');
?>

	</div>
	<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_112840180567bb8ed9bc8c71_19873856', 'shopping_cart_js_vars');
?>

<?php }?>

<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_133125203867bb8ed9bd7324_02714571', 'shopping_cart_extra_services');
?>

<?php }
/* {block 'errors'} */
class Block_11629301067bb8ed9a5c6f4_47216234 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'errors' => 
  array (
    0 => 'Block_11629301067bb8ed9a5c6f4_47216234',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

	<?php $_smarty_tpl->_subTemplateRender(((string)$_smarty_tpl->tpl_vars['tpl_dir']->value)."./order-steps.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, true);
}
}
/* {/block 'errors'} */
/* {block 'displayBeforeShoppingCartBlock'} */
class Block_50978237867bb8ed9a8f690_01542725 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'displayBeforeShoppingCartBlock' => 
  array (
    0 => 'Block_50978237867bb8ed9a8f690_01542725',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

		<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['hook'][0], array( array('h'=>"displayBeforeShoppingCartBlock"),$_smarty_tpl ) );?>

	<?php
}
}
/* {/block 'displayBeforeShoppingCartBlock'} */
/* {block 'shopping_cart_heading'} */
class Block_82165157667bb8ed9a926f5_25842726 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

					<p class="cart_section_title"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'rooms information'),$_smarty_tpl ) );?>
</p>
				<?php
}
}
/* {/block 'shopping_cart_heading'} */
/* {block 'displayCartRoomImageAfter'} */
class Block_129698988167bb8ed9a983c3_85345710 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

										<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['hook'][0], array( array('h'=>'displayCartRoomImageAfter','id_product'=>$_smarty_tpl->tpl_vars['data_v']->value['id_product']),$_smarty_tpl ) );?>

									<?php
}
}
/* {/block 'displayCartRoomImageAfter'} */
/* {block 'shopping_cart_room_type_cover_image'} */
class Block_156156396667bb8ed9a95fb0_87630768 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

									<p>
										<a href="<?php echo $_smarty_tpl->tpl_vars['link']->value->getProductLink($_smarty_tpl->tpl_vars['data_v']->value['id_product']);?>
">
											<img src="<?php echo $_smarty_tpl->tpl_vars['data_v']->value['cover_img'];?>
" class="img-responsive" />
										</a>
									</p>
									<p class="room_remove_block">
										<a href="<?php echo $_smarty_tpl->tpl_vars['rm_v']->value['link'];?>
"><i class="icon-trash"></i> &nbsp;<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Remove'),$_smarty_tpl ) );?>
</a>
									</p>
									<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_129698988167bb8ed9a983c3_85345710', 'displayCartRoomImageAfter', $this->tplIndex);
?>

								<?php
}
}
/* {/block 'shopping_cart_room_type_cover_image'} */
/* {block 'shopping_cart_room_type_cover_image_mobile'} */
class Block_179311601067bb8ed9a9b370_27066005 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

										<div class="product-xs-img">
											<a href="<?php echo $_smarty_tpl->tpl_vars['link']->value->getProductLink($_smarty_tpl->tpl_vars['data_v']->value['id_product']);?>
">
												<img src="<?php echo $_smarty_tpl->tpl_vars['data_v']->value['cover_img'];?>
" class="img-responsive" />
											</a>
										</div>
									<?php
}
}
/* {/block 'shopping_cart_room_type_cover_image_mobile'} */
/* {block 'displayCartRoomTypeNameAfter'} */
class Block_85074810967bb8ed9aa30a5_43587961 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

														<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['hook'][0], array( array('h'=>'displayCartRoomTypeNameAfter','id_product'=>$_smarty_tpl->tpl_vars['data_v']->value['id_product']),$_smarty_tpl ) );?>

													<?php
}
}
/* {/block 'displayCartRoomTypeNameAfter'} */
/* {block 'shopping_cart_room_type_name'} */
class Block_148216485767bb8ed9a9f098_01505459 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

												<p class="product-name">
													<a href="<?php echo $_smarty_tpl->tpl_vars['link']->value->getProductLink($_smarty_tpl->tpl_vars['data_v']->value['id_product']);?>
">
														<?php echo $_smarty_tpl->tpl_vars['data_v']->value['name'];?>

													</a>
													<a class="btn btn-default pull-right product-xs-remove" href="<?php echo $_smarty_tpl->tpl_vars['rm_v']->value['link'];?>
"><i class="icon-trash"></i></a>
													<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_85074810967bb8ed9aa30a5_43587961', 'displayCartRoomTypeNameAfter', $this->tplIndex);
?>

												</p>
											<?php
}
}
/* {/block 'shopping_cart_room_type_name'} */
/* {block 'shopping_cart_room_type_hotel_location'} */
class Block_125976653567bb8ed9aa5e44_21158267 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

												<?php if ((isset($_smarty_tpl->tpl_vars['data_v']->value['hotel_info']['location']))) {?>
													<p class="hotel-location">
														<i class="icon-map-marker"></i> &nbsp;<?php echo $_smarty_tpl->tpl_vars['data_v']->value['hotel_info']['location'];?>

													</p>
												<?php }?>
											<?php
}
}
/* {/block 'shopping_cart_room_type_hotel_location'} */
/* {block 'displayCartRoomTypeInfo'} */
class Block_97599779567bb8ed9aaa850_77854491 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

												<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['hook'][0], array( array('h'=>'displayCartRoomTypeInfo','id_product'=>$_smarty_tpl->tpl_vars['data_v']->value['id_product']),$_smarty_tpl ) );?>

											<?php
}
}
/* {/block 'displayCartRoomTypeInfo'} */
/* {block 'shopping_cart_room_detail'} */
class Block_90156697167bb8ed9a9e449_48518803 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

										<div class="product-xs-info">
											<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_148216485767bb8ed9a9f098_01505459', 'shopping_cart_room_type_name', $this->tplIndex);
?>

											<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_125976653567bb8ed9aa5e44_21158267', 'shopping_cart_room_type_hotel_location', $this->tplIndex);
?>

											<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_97599779567bb8ed9aaa850_77854491', 'displayCartRoomTypeInfo', $this->tplIndex);
?>

										</div>
									<?php
}
}
/* {/block 'shopping_cart_room_detail'} */
/* {block 'shopping_cart_room_type_features'} */
class Block_200312010367bb8ed9aac2a3_47830005 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

									<?php if ((isset($_smarty_tpl->tpl_vars['data_v']->value['hotel_info']['room_features']))) {?>
										<div class="room-type-features">
										<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['data_v']->value['hotel_info']['room_features'], 'feature');
$_smarty_tpl->tpl_vars['feature']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['feature']->value) {
$_smarty_tpl->tpl_vars['feature']->do_else = false;
?>
											<span class="room-type-feature">
												<img src="<?php echo $_smarty_tpl->tpl_vars['THEME_DIR']->value;?>
img/icon/form-ok-circle.svg" /> <?php echo $_smarty_tpl->tpl_vars['feature']->value['name'];?>

											</span>
										<?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
										</div>
									<?php }?>
								<?php
}
}
/* {/block 'shopping_cart_room_type_features'} */
/* {block 'shopping_cart_room_type_booking_information'} */
class Block_152474534367bb8ed9aaf182_09070032 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_checkPlugins(array(0=>array('file'=>'/home/qloapps/www/QloApps/tools/smarty/plugins/modifier.date_format.php','function'=>'smarty_modifier_date_format',),));
?>

									<?php $_smarty_tpl->_assignInScope('is_full_date', ($_smarty_tpl->tpl_vars['show_full_date']->value && (smarty_modifier_date_format($_smarty_tpl->tpl_vars['rm_v']->value['data_form'],'%D') == smarty_modifier_date_format($_smarty_tpl->tpl_vars['rm_v']->value['data_to'],'%D'))));?>
									<div class="room_duration_block">
										<div class="col-sm-3 col-xs-6">
											<p class="room_duration_block_head"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'CHECK IN'),$_smarty_tpl ) );?>
</p>
											<p class="room_duration_block_value"><?php echo smarty_modifier_date_format($_smarty_tpl->tpl_vars['rm_v']->value['data_form'],"%d %b, %a");
if ($_smarty_tpl->tpl_vars['is_full_date']->value) {?> <?php echo smarty_modifier_date_format($_smarty_tpl->tpl_vars['rm_v']->value['data_form'],"%H:%M");
}?></p>
										</div>
										<div class="col-sm-3 col-xs-6">
											<p class="room_duration_block_head"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'CHECK OUT'),$_smarty_tpl ) );?>
</p>
											<p class="room_duration_block_value"><?php echo smarty_modifier_date_format($_smarty_tpl->tpl_vars['rm_v']->value['data_to'],"%d %b, %a");
if ($_smarty_tpl->tpl_vars['is_full_date']->value) {?> <?php echo smarty_modifier_date_format($_smarty_tpl->tpl_vars['rm_v']->value['data_to'],"%H:%M");
}?></p>
										</div>
										<div class="col-sm-6 col-xs-6">
											<p class="room_duration_block_head"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'OCCUPANCY'),$_smarty_tpl ) );?>
</p>
											<p class="room_duration_block_value">
												<?php ob_start();
echo $_smarty_tpl->tpl_vars['rm_v']->value['adults'];
$_prefixVariable58 = ob_get_clean();
if ($_prefixVariable58 <= 9) {?>0<?php echo $_smarty_tpl->tpl_vars['rm_v']->value['adults'];
} else {
echo $_smarty_tpl->tpl_vars['rm_v']->value['adults'];
}?> <?php if ($_smarty_tpl->tpl_vars['rm_v']->value['adults'] > 1) {
echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Adults'),$_smarty_tpl ) );
} else {
echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Adult'),$_smarty_tpl ) );
}
if ($_smarty_tpl->tpl_vars['rm_v']->value['children']) {?>, <?php if ($_smarty_tpl->tpl_vars['rm_v']->value['children'] <= 9) {?>0<?php echo $_smarty_tpl->tpl_vars['rm_v']->value['children'];
} else {
echo $_smarty_tpl->tpl_vars['rm_v']->value['children'];
}?> <?php if ($_smarty_tpl->tpl_vars['rm_v']->value['children'] > 1) {
echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Children'),$_smarty_tpl ) );
} else {
echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Child'),$_smarty_tpl ) );
}
}?>, <?php ob_start();
echo $_smarty_tpl->tpl_vars['rm_v']->value['num_rm'];
$_prefixVariable59 = ob_get_clean();
if ($_prefixVariable59 <= 9) {?>0<?php }
echo $_smarty_tpl->tpl_vars['rm_v']->value['num_rm'];
if ($_smarty_tpl->tpl_vars['rm_v']->value['num_rm'] > 1) {?> <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Rooms'),$_smarty_tpl ) );
} else { ?> <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Room'),$_smarty_tpl ) );
}?>
											</p>
										</div>
									</div>
								<?php
}
}
/* {/block 'shopping_cart_room_type_booking_information'} */
/* {block 'shopping_cart_room_type_and_service_price'} */
class Block_70398863467bb8ed9ad73f0_21882248 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

											<div class="col-sm-7 margin-btm-sm-10">
												<?php if ($_smarty_tpl->tpl_vars['rm_v']->value['amount'] && (isset($_smarty_tpl->tpl_vars['rm_v']->value['total_price_without_discount'])) && $_smarty_tpl->tpl_vars['rm_v']->value['total_price_without_discount'] > $_smarty_tpl->tpl_vars['rm_v']->value['amount']) {?>
													<span class="room_type_old_price">
														<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['displayPrice'][0], array( array('price'=>floatval($_smarty_tpl->tpl_vars['rm_v']->value['total_price_without_discount'])),$_smarty_tpl ) );?>

													</span>
												<?php }?>
												<div class="row">
													<div class="<?php if (((isset($_smarty_tpl->tpl_vars['data_v']->value['extra_demands'])) && $_smarty_tpl->tpl_vars['data_v']->value['extra_demands']) || ((isset($_smarty_tpl->tpl_vars['data_v']->value['service_products'])) && $_smarty_tpl->tpl_vars['data_v']->value['service_products'])) {?>col-xs-6 plus-sign<?php } else { ?>col-xs-12<?php }?>">
														<div class="price_block">
															<p class="total_price">
																<span>
																	<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['displayPrice'][0], array( array('price'=>($_smarty_tpl->tpl_vars['rm_v']->value['amount'])),$_smarty_tpl ) );?>

																</span>
																<?php if ((($_smarty_tpl->tpl_vars['rm_v']->value['amount']-$_smarty_tpl->tpl_vars['rm_v']->value['amount_without_auto_add']) > 0) && (in_array($_smarty_tpl->tpl_vars['data_v']->value['id_product'],$_smarty_tpl->tpl_vars['discounted_products']->value) || $_smarty_tpl->tpl_vars['PS_ROOM_PRICE_AUTO_ADD_BREAKDOWN']->value)) {?>
																	<span class="room-price-detail">
																		<img src="<?php echo $_smarty_tpl->tpl_vars['img_dir']->value;?>
icon/icon-info.svg" />
																	</span>
																	<div class="room-price-detail-container" style="display: none;">
																		<div class="room-price-detail-tooltip-cont">
																			<div><label><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Room price'),$_smarty_tpl ) );?>
</label> : <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['displayPrice'][0], array( array('price'=>($_smarty_tpl->tpl_vars['rm_v']->value['amount_without_auto_add'])),$_smarty_tpl ) );?>
</div>
																			<div><label><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Additional charges'),$_smarty_tpl ) );?>
</label> : <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['displayPrice'][0], array( array('price'=>($_smarty_tpl->tpl_vars['rm_v']->value['amount']-$_smarty_tpl->tpl_vars['rm_v']->value['amount_without_auto_add'])),$_smarty_tpl ) );?>
</div>
																		</div>
																	</div>
																<?php }?>
															</p>
															<p class="total_price_detial">
																<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Total rooms price'),$_smarty_tpl ) );?>
 <?php if ($_smarty_tpl->tpl_vars['display_tax_label']->value) {
if ($_smarty_tpl->tpl_vars['priceDisplay']->value) {?> <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'(Excl.'),$_smarty_tpl ) );?>
 <?php } else {
echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'(Incl.)'),$_smarty_tpl ) );
}?> <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'all taxes.)'),$_smarty_tpl ) );
}?>
															</p>
														</div>
													</div>
													<?php if (((isset($_smarty_tpl->tpl_vars['data_v']->value['extra_demands'])) && $_smarty_tpl->tpl_vars['data_v']->value['extra_demands']) || ((isset($_smarty_tpl->tpl_vars['data_v']->value['service_products'])) && $_smarty_tpl->tpl_vars['data_v']->value['service_products'])) {?>
														<div class="col-xs-6">
															<div class="demand_price_block">
																<p class="demand_total_price">
																	<span>
																		<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['displayPrice'][0], array( array('price'=>$_smarty_tpl->tpl_vars['rm_v']->value['demand_price']),$_smarty_tpl ) );?>

																	</span>
																</p>
																<p class="total_price_detial">
																	<a data-date_from="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['rm_v']->value['data_form'], ENT_QUOTES, 'UTF-8', true);?>
" data-date_to="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['rm_v']->value['data_to'], ENT_QUOTES, 'UTF-8', true);?>
" data-id_product="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['data_v']->value['id_product'], ENT_QUOTES, 'UTF-8', true);?>
" data-action="<?php echo $_smarty_tpl->tpl_vars['link']->value->getPageLink('order-opc');?>
" class="open_rooms_extra_services_panel" href="#rooms_type_extra_services_form">
																		<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Extra Services'),$_smarty_tpl ) );?>

																	</a>
																</p>
															</div>
														</div>
													<?php }?>
												</div>
											</div>
										<?php
}
}
/* {/block 'shopping_cart_room_type_and_service_price'} */
/* {block 'shopping_cart_room_type_total_price'} */
class Block_71455284767bb8ed9b05606_54924489 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

											<div class="col-sm-5">
												<div class="total_price_block col-xs-12">
													<p class="total_price">
														<span>
															<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['displayPrice'][0], array( array('price'=>($_smarty_tpl->tpl_vars['rm_v']->value['amount']+$_smarty_tpl->tpl_vars['rm_v']->value['demand_price'])),$_smarty_tpl ) );?>

														</span>
													</p>
													<p class="total_price_detial">
														<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Total price for'),$_smarty_tpl ) );?>
 <?php echo $_smarty_tpl->tpl_vars['rm_v']->value['num_days'];?>
 <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Night(s) stay'),$_smarty_tpl ) );
if ($_smarty_tpl->tpl_vars['display_tax_label']->value) {
if ($_smarty_tpl->tpl_vars['priceDisplay']->value) {?> <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'(Excl.'),$_smarty_tpl ) );?>
 <?php } else {
echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'(Incl.'),$_smarty_tpl ) );
}?> <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'all taxes.)'),$_smarty_tpl ) );
}?>
													</p>
												</div>
											</div>
										<?php
}
}
/* {/block 'shopping_cart_room_type_total_price'} */
/* {block 'shopping_cart_room_type_price_detail'} */
class Block_100488394167bb8ed9ad60a4_49433740 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

									<div class="row room_price_detail_block">
										<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_70398863467bb8ed9ad73f0_21882248', 'shopping_cart_room_type_and_service_price', $this->tplIndex);
?>

										<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_71455284767bb8ed9b05606_54924489', 'shopping_cart_room_type_total_price', $this->tplIndex);
?>

									</div>
								<?php
}
}
/* {/block 'shopping_cart_room_type_price_detail'} */
/* {block 'displayCartProductContentAfter'} */
class Block_123649251767bb8ed9b0dbe3_59519982 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

									<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['hook'][0], array( array('h'=>'displayCartProductContentAfter','cart_detail'=>$_smarty_tpl->tpl_vars['data_v']->value,'key'=>$_smarty_tpl->tpl_vars['rm_k']->value),$_smarty_tpl ) );?>

								<?php
}
}
/* {/block 'displayCartProductContentAfter'} */
/* {block 'displayCartProductAfter'} */
class Block_171888012767bb8ed9b10168_56845598 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

							<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['hook'][0], array( array('h'=>'displayCartProductAfter','cart_detail'=>$_smarty_tpl->tpl_vars['data_v']->value,'key'=>$_smarty_tpl->tpl_vars['rm_k']->value),$_smarty_tpl ) );?>

						<?php
}
}
/* {/block 'displayCartProductAfter'} */
/* {block 'displayCartProductImageAfter'} */
class Block_5719249167bb8ed9b28521_87435858 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

								<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['hook'][0], array( array('h'=>'displayCartProductImageAfter','id_product'=>$_smarty_tpl->tpl_vars['product']->value['id_product']),$_smarty_tpl ) );?>

							<?php
}
}
/* {/block 'displayCartProductImageAfter'} */
/* {block 'shopping_cart_proceed_action'} */
class Block_208632899767bb8ed9b48db6_52620232 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

					<div class="row">
						<div class="col-sm-12 proceed_btn_block">
							<a class="btn btn-default button button-medium pull-right" href="<?php echo $_smarty_tpl->tpl_vars['link']->value->getPageLink('order-opc',null,null,array('proceed_to_customer_dtl'=>1));?>
" title="Proceed to checkout" rel="nofollow">
								<span>
									<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Proceed'),$_smarty_tpl ) );?>

								</span>
							</a>
						</div>
					</div>
				<?php
}
}
/* {/block 'shopping_cart_proceed_action'} */
/* {block 'shopping_cart_detail'} */
class Block_34310277667bb8ed9a90839_01066247 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'shopping_cart_detail' => 
  array (
    0 => 'Block_34310277667bb8ed9a90839_01066247',
  ),
  'shopping_cart_heading' => 
  array (
    0 => 'Block_82165157667bb8ed9a926f5_25842726',
  ),
  'shopping_cart_room_type_cover_image' => 
  array (
    0 => 'Block_156156396667bb8ed9a95fb0_87630768',
  ),
  'displayCartRoomImageAfter' => 
  array (
    0 => 'Block_129698988167bb8ed9a983c3_85345710',
  ),
  'shopping_cart_room_type_cover_image_mobile' => 
  array (
    0 => 'Block_179311601067bb8ed9a9b370_27066005',
  ),
  'shopping_cart_room_detail' => 
  array (
    0 => 'Block_90156697167bb8ed9a9e449_48518803',
  ),
  'shopping_cart_room_type_name' => 
  array (
    0 => 'Block_148216485767bb8ed9a9f098_01505459',
  ),
  'displayCartRoomTypeNameAfter' => 
  array (
    0 => 'Block_85074810967bb8ed9aa30a5_43587961',
  ),
  'shopping_cart_room_type_hotel_location' => 
  array (
    0 => 'Block_125976653567bb8ed9aa5e44_21158267',
  ),
  'displayCartRoomTypeInfo' => 
  array (
    0 => 'Block_97599779567bb8ed9aaa850_77854491',
  ),
  'shopping_cart_room_type_features' => 
  array (
    0 => 'Block_200312010367bb8ed9aac2a3_47830005',
  ),
  'shopping_cart_room_type_booking_information' => 
  array (
    0 => 'Block_152474534367bb8ed9aaf182_09070032',
  ),
  'shopping_cart_room_type_price_detail' => 
  array (
    0 => 'Block_100488394167bb8ed9ad60a4_49433740',
  ),
  'shopping_cart_room_type_and_service_price' => 
  array (
    0 => 'Block_70398863467bb8ed9ad73f0_21882248',
  ),
  'shopping_cart_room_type_total_price' => 
  array (
    0 => 'Block_71455284767bb8ed9b05606_54924489',
  ),
  'displayCartProductContentAfter' => 
  array (
    0 => 'Block_123649251767bb8ed9b0dbe3_59519982',
  ),
  'displayCartProductAfter' => 
  array (
    0 => 'Block_171888012767bb8ed9b10168_56845598',
  ),
  'displayCartProductImageAfter' => 
  array (
    0 => 'Block_5719249167bb8ed9b28521_87435858',
  ),
  'shopping_cart_proceed_action' => 
  array (
    0 => 'Block_208632899767bb8ed9b48db6_52620232',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

		<div class="order-detail-content">
			<?php if ((isset($_smarty_tpl->tpl_vars['cart_htl_data']->value)) && $_smarty_tpl->tpl_vars['cart_htl_data']->value) {?>
				<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_82165157667bb8ed9a926f5_25842726', 'shopping_cart_heading', $this->tplIndex);
?>

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
						<div class="row cart_product_line">
							<div class="col-sm-2 product-img-block">
								<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_156156396667bb8ed9a95fb0_87630768', 'shopping_cart_room_type_cover_image', $this->tplIndex);
?>

							</div>
							<div class="col-sm-10">
								<div class="room-info-container">
									<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_179311601067bb8ed9a9b370_27066005', 'shopping_cart_room_type_cover_image_mobile', $this->tplIndex);
?>

									<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_90156697167bb8ed9a9e449_48518803', 'shopping_cart_room_detail', $this->tplIndex);
?>

								</div>
								<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_200312010367bb8ed9aac2a3_47830005', 'shopping_cart_room_type_features', $this->tplIndex);
?>

								<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_152474534367bb8ed9aaf182_09070032', 'shopping_cart_room_type_booking_information', $this->tplIndex);
?>

								<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_100488394167bb8ed9ad60a4_49433740', 'shopping_cart_room_type_price_detail', $this->tplIndex);
?>

								<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_123649251767bb8ed9b0dbe3_59519982', 'displayCartProductContentAfter', $this->tplIndex);
?>

							</div>
						</div>
						<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_171888012767bb8ed9b10168_56845598', 'displayCartProductAfter', $this->tplIndex);
?>

						<hr>
					<?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
				<?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
			<?php }?>
			<?php if ((isset($_smarty_tpl->tpl_vars['cart_normal_data']->value)) && $_smarty_tpl->tpl_vars['cart_normal_data']->value) {?>
				<p class="cart_section_title"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'service product information'),$_smarty_tpl ) );?>
</p>
				<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['cart_normal_data']->value, 'product', false, 'data_k');
$_smarty_tpl->tpl_vars['product']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['data_k']->value => $_smarty_tpl->tpl_vars['product']->value) {
$_smarty_tpl->tpl_vars['product']->do_else = false;
?>
					<div class="row cart_product_line">
						<div class="col-sm-2 product-img-block">
							<p>
								<a href="<?php echo $_smarty_tpl->tpl_vars['link']->value->getProductLink($_smarty_tpl->tpl_vars['product']->value['id_product']);?>
">
									<img src="<?php echo $_smarty_tpl->tpl_vars['product']->value['cover_img'];?>
" class="img-responsive" />
								</a>
							</p>
							<p class="product_remove_block">
								<a id="<?php echo $_smarty_tpl->tpl_vars['product']->value['id_product'];?>
_<?php echo $_smarty_tpl->tpl_vars['product']->value['id_hotel'];?>
" class="cart_quantity_delete" href="<?php ob_start();
echo intval($_smarty_tpl->tpl_vars['product']->value['id_product']);
$_prefixVariable60=ob_get_clean();
echo htmlspecialchars($_smarty_tpl->tpl_vars['link']->value->getPageLink('cart',true,NULL,"delete=1&amp;id_product=".$_prefixVariable60."&amp;token=".((string)$_smarty_tpl->tpl_vars['token_cart']->value)), ENT_QUOTES, 'UTF-8', true);?>
" rel="nofollow" title="<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Delete'),$_smarty_tpl ) );?>
">
									<i class="icon-trash"></i> &nbsp;<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Remove'),$_smarty_tpl ) );?>

								</a>
															</p>
							<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_5719249167bb8ed9b28521_87435858', 'displayCartProductImageAfter', $this->tplIndex);
?>

						</div>
						<div class="col-sm-10">
							<div class="product-info-container">
								<div class="product-xs-img">
									<a href="<?php echo $_smarty_tpl->tpl_vars['link']->value->getProductLink($_smarty_tpl->tpl_vars['product']->value['id_product']);?>
">
										<img src="<?php echo $_smarty_tpl->tpl_vars['product']->value['cover_img'];?>
" class="img-responsive" />
									</a>
								</div>
								<div class="product-xs-info">
									<p class="product-name">
										<a href="<?php echo $_smarty_tpl->tpl_vars['link']->value->getProductLink($_smarty_tpl->tpl_vars['product']->value['id_product']);?>
">
											<?php echo $_smarty_tpl->tpl_vars['product']->value['name'];?>

										</a>
										<a class="btn btn-default pull-right product-xs-remove" href="<?php ob_start();
echo intval($_smarty_tpl->tpl_vars['product']->value['id_product']);
$_prefixVariable61=ob_get_clean();
ob_start();
echo intval($_smarty_tpl->tpl_vars['product']->value['id_product_attribute']);
$_prefixVariable62=ob_get_clean();
echo htmlspecialchars($_smarty_tpl->tpl_vars['link']->value->getPageLink('cart',true,NULL,"delete=1&amp;id_product=".$_prefixVariable61."&amp;ipa=".$_prefixVariable62."&amp;id_address_delivery=".((string)$_smarty_tpl->tpl_vars['product']->value['id_address_delivery'])."&amp;token=".((string)$_smarty_tpl->tpl_vars['token_cart']->value)), ENT_QUOTES, 'UTF-8', true);?>
"><i class="icon-trash"></i></a>
									</p>
									<?php if ((isset($_smarty_tpl->tpl_vars['product']->value['hotel_info']['location']))) {?>
										<p class="hotel-location">
											<i class="icon-map-marker"></i> &nbsp;<?php echo $_smarty_tpl->tpl_vars['product']->value['hotel_info']['location'];?>

										</p>
									<?php }?>
								</div>
							</div>
							<div class="row product_price_detail_block">
								<div class="col-sm-4">
									<div class="price_block">
										<p class="total_price">
											<span>
												<?php if ($_smarty_tpl->tpl_vars['priceDisplay']->value) {
echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['displayPrice'][0], array( array('price'=>($_smarty_tpl->tpl_vars['product']->value['unit_price_tax_excl'])),$_smarty_tpl ) );
} else {
echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['displayPrice'][0], array( array('price'=>($_smarty_tpl->tpl_vars['product']->value['unit_price_tax_incl'])),$_smarty_tpl ) );
}?>
											</span>
										</p>
										<p class="total_price_detial">
											<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Unit price'),$_smarty_tpl ) );?>
 <?php if ($_smarty_tpl->tpl_vars['display_tax_label']->value) {
if ($_smarty_tpl->tpl_vars['priceDisplay']->value) {?> <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'(Excl.'),$_smarty_tpl ) );?>
 <?php } else {
echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'(Incl.)'),$_smarty_tpl ) );
}?> <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'all taxes.)'),$_smarty_tpl ) );
}?>
										</p>
									</div>
								</div>
								<div class="col-sm-4">
									<div class="product_quantity_block">
										<p class="">
											<span>
												<?php if ($_smarty_tpl->tpl_vars['product']->value['quantity'] <= 9) {?>0<?php echo $_smarty_tpl->tpl_vars['product']->value['quantity'];
} else {
echo $_smarty_tpl->tpl_vars['product']->value['quantity'];
}?>
											</span>
										</p>
										<p class="product_quantity_detial">
											<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Total Qty'),$_smarty_tpl ) );?>

										</p>
									</div>
								</div>
								<div class="col-sm-4">
									<div class="total_price_block pull-right">
										<p class="total_price">
											<span>
												<?php if ($_smarty_tpl->tpl_vars['priceDisplay']->value) {
echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['displayPrice'][0], array( array('price'=>($_smarty_tpl->tpl_vars['product']->value['total_price_tax_excl'])),$_smarty_tpl ) );
} else {
echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['displayPrice'][0], array( array('price'=>($_smarty_tpl->tpl_vars['product']->value['total_price_tax_incl'])),$_smarty_tpl ) );
}?>
											</span>
										</p>
										<p class="total_price_detial">
											<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Total price'),$_smarty_tpl ) );?>
 <?php if ($_smarty_tpl->tpl_vars['display_tax_label']->value) {
if ($_smarty_tpl->tpl_vars['priceDisplay']->value) {?> <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'(Excl.'),$_smarty_tpl ) );?>
 <?php } else {
echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'(Incl.)'),$_smarty_tpl ) );
}?> <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'all taxes.)'),$_smarty_tpl ) );
}?>
										</p>
									</div>
								</div>
							</div>
						</div>
					</div>
					<hr>
				<?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
			<?php }?>

						<?php if (!$_smarty_tpl->tpl_vars['orderRestrictErr']->value) {?>
				<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_208632899767bb8ed9b48db6_52620232', 'shopping_cart_proceed_action', $this->tplIndex);
?>

			<?php }?>
		</div>
	<?php
}
}
/* {/block 'shopping_cart_detail'} */
/* {block 'displayShoppingCartFooter'} */
class Block_207732862567bb8ed9bc1de5_65848160 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'displayShoppingCartFooter' => 
  array (
    0 => 'Block_207732862567bb8ed9bc1de5_65848160',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

		<div id="HOOK_SHOPPING_CART"><?php echo $_smarty_tpl->tpl_vars['HOOK_SHOPPING_CART']->value;?>
</div>
	<?php
}
}
/* {/block 'displayShoppingCartFooter'} */
/* {block 'displayShoppingCart'} */
class Block_111865192267bb8ed9bc3d77_01202874 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'displayShoppingCart' => 
  array (
    0 => 'Block_111865192267bb8ed9bc3d77_01202874',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

			<div id="HOOK_SHOPPING_CART_EXTRA"><?php if ((isset($_smarty_tpl->tpl_vars['HOOK_SHOPPING_CART_EXTRA']->value))) {
echo $_smarty_tpl->tpl_vars['HOOK_SHOPPING_CART_EXTRA']->value;
}?></div>
		<?php
}
}
/* {/block 'displayShoppingCart'} */
/* {block 'shopping_cart_js_vars'} */
class Block_112840180567bb8ed9bc8c71_19873856 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'shopping_cart_js_vars' => 
  array (
    0 => 'Block_112840180567bb8ed9bc8c71_19873856',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

		<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['addJsDef'][0], array( array('deliveryAddress'=>intval($_smarty_tpl->tpl_vars['cart']->value->id_address_delivery)),$_smarty_tpl ) );
$_block_plugin94 = isset($_smarty_tpl->smarty->registered_plugins['block']['addJsDefL'][0][0]) ? $_smarty_tpl->smarty->registered_plugins['block']['addJsDefL'][0][0] : null;
if (!is_callable(array($_block_plugin94, 'addJsDefL'))) {
throw new SmartyException('block tag \'addJsDefL\' not callable or registered');
}
$_smarty_tpl->smarty->_cache['_tag_stack'][] = array('addJsDefL', array('name'=>'txtProduct'));
$_block_repeat=true;
echo $_block_plugin94->addJsDefL(array('name'=>'txtProduct'), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();
echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'product','js'=>1),$_smarty_tpl ) );
$_block_repeat=false;
echo $_block_plugin94->addJsDefL(array('name'=>'txtProduct'), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);
$_block_plugin95 = isset($_smarty_tpl->smarty->registered_plugins['block']['addJsDefL'][0][0]) ? $_smarty_tpl->smarty->registered_plugins['block']['addJsDefL'][0][0] : null;
if (!is_callable(array($_block_plugin95, 'addJsDefL'))) {
throw new SmartyException('block tag \'addJsDefL\' not callable or registered');
}
$_smarty_tpl->smarty->_cache['_tag_stack'][] = array('addJsDefL', array('name'=>'txtProducts'));
$_block_repeat=true;
echo $_block_plugin95->addJsDefL(array('name'=>'txtProducts'), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();
echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'products','js'=>1),$_smarty_tpl ) );
$_block_repeat=false;
echo $_block_plugin95->addJsDefL(array('name'=>'txtProducts'), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);?>
	<?php
}
}
/* {/block 'shopping_cart_js_vars'} */
/* {block 'shopping_cart_extra_services'} */
class Block_133125203867bb8ed9bd7324_02714571 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'shopping_cart_extra_services' => 
  array (
    0 => 'Block_133125203867bb8ed9bd7324_02714571',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

	<div style="display:none;" id="rooms_extra_services">
								</div>
<?php
}
}
/* {/block 'shopping_cart_extra_services'} */
}
