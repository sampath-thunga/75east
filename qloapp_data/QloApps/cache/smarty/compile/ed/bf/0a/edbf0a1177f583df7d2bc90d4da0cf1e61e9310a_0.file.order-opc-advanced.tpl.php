<?php
/* Smarty version 3.1.39, created on 2025-02-24 02:40:51
  from '/home/qloapps/www/QloApps/themes/hotel-reservation-theme/order-opc-advanced.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.39',
  'unifunc' => 'content_67bb8edbb5df23_48216620',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'edbf0a1177f583df7d2bc90d4da0cf1e61e9310a' => 
    array (
      0 => '/home/qloapps/www/QloApps/themes/hotel-reservation-theme/order-opc-advanced.tpl',
      1 => 1728563708,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_67bb8edbb5df23_48216620 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, false);
?>

<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_61346336367bb8edba93541_99388300', 'order_opc_advanced');
?>

<?php }
/* {block 'order_payment_advanced'} */
class Block_99783963067bb8edbaa2c54_26357677 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

                <?php $_smarty_tpl->_subTemplateRender(((string)$_smarty_tpl->tpl_vars['tpl_dir']->value)."./order-payment-advanced.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, true);
?>
            <?php
}
}
/* {/block 'order_payment_advanced'} */
/* {block 'errors'} */
class Block_62889391367bb8edbab2006_82217378 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

                <?php $_smarty_tpl->_subTemplateRender(((string)$_smarty_tpl->tpl_vars['tpl_dir']->value)."./errors.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, true);
?>
            <?php
}
}
/* {/block 'errors'} */
/* {block 'order_opc_advanced_js_vars'} */
class Block_49652087367bb8edbab9575_90139106 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

            <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['addJsDef'][0], array( array('imgDir'=>$_smarty_tpl->tpl_vars['img_dir']->value),$_smarty_tpl ) );
echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['addJsDef'][0], array( array('authenticationUrl'=>preg_replace("%(?<!\\\\)'%", "\'",$_smarty_tpl->tpl_vars['link']->value->getPageLink("authentication",true))),$_smarty_tpl ) );
echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['addJsDef'][0], array( array('orderOpcUrl'=>preg_replace("%(?<!\\\\)'%", "\'",$_smarty_tpl->tpl_vars['link']->value->getPageLink("order-opc",true))),$_smarty_tpl ) );
echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['addJsDef'][0], array( array('historyUrl'=>preg_replace("%(?<!\\\\)'%", "\'",$_smarty_tpl->tpl_vars['link']->value->getPageLink("history",true))),$_smarty_tpl ) );
echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['addJsDef'][0], array( array('guestTrackingUrl'=>preg_replace("%(?<!\\\\)'%", "\'",$_smarty_tpl->tpl_vars['link']->value->getPageLink("guest-tracking",true))),$_smarty_tpl ) );
echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['addJsDef'][0], array( array('addressUrl'=>preg_replace("%(?<!\\\\)'%", "\'",$_smarty_tpl->tpl_vars['link']->value->getPageLink("address",true,NULL,"back=".((string)$_smarty_tpl->tpl_vars['back_order_page']->value)))),$_smarty_tpl ) );
echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['addJsDef'][0], array( array('orderProcess'=>'order-opc'),$_smarty_tpl ) );
echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['addJsDef'][0], array( array('guestCheckoutEnabled'=>intval($_smarty_tpl->tpl_vars['PS_GUEST_CHECKOUT_ENABLED']->value)),$_smarty_tpl ) );
echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['addJsDef'][0], array( array('displayPrice'=>$_smarty_tpl->tpl_vars['priceDisplay']->value),$_smarty_tpl ) );
echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['addJsDef'][0], array( array('taxEnabled'=>$_smarty_tpl->tpl_vars['use_taxes']->value),$_smarty_tpl ) );
echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['addJsDef'][0], array( array('conditionEnabled'=>intval($_smarty_tpl->tpl_vars['conditions']->value)),$_smarty_tpl ) );
echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['addJsDef'][0], array( array('errorCarrier'=>addcslashes($_smarty_tpl->tpl_vars['errorCarrier']->value,'\'')),$_smarty_tpl ) );
echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['addJsDef'][0], array( array('errorTOS'=>addcslashes($_smarty_tpl->tpl_vars['errorTOS']->value,'\'')),$_smarty_tpl ) );
echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['addJsDef'][0], array( array('checkedCarrier'=>intval($_smarty_tpl->tpl_vars['checked']->value)),$_smarty_tpl ) );
echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['addJsDef'][0], array( array('addresses'=>array()),$_smarty_tpl ) );
echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['addJsDef'][0], array( array('isVirtualCart'=>intval($_smarty_tpl->tpl_vars['isVirtualCart']->value)),$_smarty_tpl ) );
echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['addJsDef'][0], array( array('isPaymentStep'=>intval($_smarty_tpl->tpl_vars['isPaymentStep']->value)),$_smarty_tpl ) );
$_block_plugin143 = isset($_smarty_tpl->smarty->registered_plugins['block']['addJsDefL'][0][0]) ? $_smarty_tpl->smarty->registered_plugins['block']['addJsDefL'][0][0] : null;
if (!is_callable(array($_block_plugin143, 'addJsDefL'))) {
throw new SmartyException('block tag \'addJsDefL\' not callable or registered');
}
$_smarty_tpl->smarty->_cache['_tag_stack'][] = array('addJsDefL', array('name'=>'txtWithTax'));
$_block_repeat=true;
echo $_block_plugin143->addJsDefL(array('name'=>'txtWithTax'), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();
echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'(tax incl.)','js'=>1),$_smarty_tpl ) );
$_block_repeat=false;
echo $_block_plugin143->addJsDefL(array('name'=>'txtWithTax'), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);
$_block_plugin144 = isset($_smarty_tpl->smarty->registered_plugins['block']['addJsDefL'][0][0]) ? $_smarty_tpl->smarty->registered_plugins['block']['addJsDefL'][0][0] : null;
if (!is_callable(array($_block_plugin144, 'addJsDefL'))) {
throw new SmartyException('block tag \'addJsDefL\' not callable or registered');
}
$_smarty_tpl->smarty->_cache['_tag_stack'][] = array('addJsDefL', array('name'=>'txtWithoutTax'));
$_block_repeat=true;
echo $_block_plugin144->addJsDefL(array('name'=>'txtWithoutTax'), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();
echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'(tax excl.)','js'=>1),$_smarty_tpl ) );
$_block_repeat=false;
echo $_block_plugin144->addJsDefL(array('name'=>'txtWithoutTax'), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);
$_block_plugin145 = isset($_smarty_tpl->smarty->registered_plugins['block']['addJsDefL'][0][0]) ? $_smarty_tpl->smarty->registered_plugins['block']['addJsDefL'][0][0] : null;
if (!is_callable(array($_block_plugin145, 'addJsDefL'))) {
throw new SmartyException('block tag \'addJsDefL\' not callable or registered');
}
$_smarty_tpl->smarty->_cache['_tag_stack'][] = array('addJsDefL', array('name'=>'txtHasBeenSelected'));
$_block_repeat=true;
echo $_block_plugin145->addJsDefL(array('name'=>'txtHasBeenSelected'), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();
echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'has been selected','js'=>1),$_smarty_tpl ) );
$_block_repeat=false;
echo $_block_plugin145->addJsDefL(array('name'=>'txtHasBeenSelected'), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);
$_block_plugin146 = isset($_smarty_tpl->smarty->registered_plugins['block']['addJsDefL'][0][0]) ? $_smarty_tpl->smarty->registered_plugins['block']['addJsDefL'][0][0] : null;
if (!is_callable(array($_block_plugin146, 'addJsDefL'))) {
throw new SmartyException('block tag \'addJsDefL\' not callable or registered');
}
$_smarty_tpl->smarty->_cache['_tag_stack'][] = array('addJsDefL', array('name'=>'txtNoCarrierIsSelected'));
$_block_repeat=true;
echo $_block_plugin146->addJsDefL(array('name'=>'txtNoCarrierIsSelected'), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();
echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'No carrier has been selected','js'=>1),$_smarty_tpl ) );
$_block_repeat=false;
echo $_block_plugin146->addJsDefL(array('name'=>'txtNoCarrierIsSelected'), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);
$_block_plugin147 = isset($_smarty_tpl->smarty->registered_plugins['block']['addJsDefL'][0][0]) ? $_smarty_tpl->smarty->registered_plugins['block']['addJsDefL'][0][0] : null;
if (!is_callable(array($_block_plugin147, 'addJsDefL'))) {
throw new SmartyException('block tag \'addJsDefL\' not callable or registered');
}
$_smarty_tpl->smarty->_cache['_tag_stack'][] = array('addJsDefL', array('name'=>'txtNoCarrierIsNeeded'));
$_block_repeat=true;
echo $_block_plugin147->addJsDefL(array('name'=>'txtNoCarrierIsNeeded'), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();
echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'No carrier is needed for this order','js'=>1),$_smarty_tpl ) );
$_block_repeat=false;
echo $_block_plugin147->addJsDefL(array('name'=>'txtNoCarrierIsNeeded'), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);
$_block_plugin148 = isset($_smarty_tpl->smarty->registered_plugins['block']['addJsDefL'][0][0]) ? $_smarty_tpl->smarty->registered_plugins['block']['addJsDefL'][0][0] : null;
if (!is_callable(array($_block_plugin148, 'addJsDefL'))) {
throw new SmartyException('block tag \'addJsDefL\' not callable or registered');
}
$_smarty_tpl->smarty->_cache['_tag_stack'][] = array('addJsDefL', array('name'=>'txtConditionsIsNotNeeded'));
$_block_repeat=true;
echo $_block_plugin148->addJsDefL(array('name'=>'txtConditionsIsNotNeeded'), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();
echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'You do not need to accept the Terms of Service for this order.','js'=>1),$_smarty_tpl ) );
$_block_repeat=false;
echo $_block_plugin148->addJsDefL(array('name'=>'txtConditionsIsNotNeeded'), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);
$_block_plugin149 = isset($_smarty_tpl->smarty->registered_plugins['block']['addJsDefL'][0][0]) ? $_smarty_tpl->smarty->registered_plugins['block']['addJsDefL'][0][0] : null;
if (!is_callable(array($_block_plugin149, 'addJsDefL'))) {
throw new SmartyException('block tag \'addJsDefL\' not callable or registered');
}
$_smarty_tpl->smarty->_cache['_tag_stack'][] = array('addJsDefL', array('name'=>'txtTOSIsAccepted'));
$_block_repeat=true;
echo $_block_plugin149->addJsDefL(array('name'=>'txtTOSIsAccepted'), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();
echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'The service terms have been accepted','js'=>1),$_smarty_tpl ) );
$_block_repeat=false;
echo $_block_plugin149->addJsDefL(array('name'=>'txtTOSIsAccepted'), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);
$_block_plugin150 = isset($_smarty_tpl->smarty->registered_plugins['block']['addJsDefL'][0][0]) ? $_smarty_tpl->smarty->registered_plugins['block']['addJsDefL'][0][0] : null;
if (!is_callable(array($_block_plugin150, 'addJsDefL'))) {
throw new SmartyException('block tag \'addJsDefL\' not callable or registered');
}
$_smarty_tpl->smarty->_cache['_tag_stack'][] = array('addJsDefL', array('name'=>'txtTOSIsNotAccepted'));
$_block_repeat=true;
echo $_block_plugin150->addJsDefL(array('name'=>'txtTOSIsNotAccepted'), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();
echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'The service terms have not been accepted','js'=>1),$_smarty_tpl ) );
$_block_repeat=false;
echo $_block_plugin150->addJsDefL(array('name'=>'txtTOSIsNotAccepted'), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);
$_block_plugin151 = isset($_smarty_tpl->smarty->registered_plugins['block']['addJsDefL'][0][0]) ? $_smarty_tpl->smarty->registered_plugins['block']['addJsDefL'][0][0] : null;
if (!is_callable(array($_block_plugin151, 'addJsDefL'))) {
throw new SmartyException('block tag \'addJsDefL\' not callable or registered');
}
$_smarty_tpl->smarty->_cache['_tag_stack'][] = array('addJsDefL', array('name'=>'txtThereis'));
$_block_repeat=true;
echo $_block_plugin151->addJsDefL(array('name'=>'txtThereis'), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();
echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'There is','js'=>1),$_smarty_tpl ) );
$_block_repeat=false;
echo $_block_plugin151->addJsDefL(array('name'=>'txtThereis'), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);
$_block_plugin152 = isset($_smarty_tpl->smarty->registered_plugins['block']['addJsDefL'][0][0]) ? $_smarty_tpl->smarty->registered_plugins['block']['addJsDefL'][0][0] : null;
if (!is_callable(array($_block_plugin152, 'addJsDefL'))) {
throw new SmartyException('block tag \'addJsDefL\' not callable or registered');
}
$_smarty_tpl->smarty->_cache['_tag_stack'][] = array('addJsDefL', array('name'=>'txtErrors'));
$_block_repeat=true;
echo $_block_plugin152->addJsDefL(array('name'=>'txtErrors'), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();
echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Error(s)','js'=>1),$_smarty_tpl ) );
$_block_repeat=false;
echo $_block_plugin152->addJsDefL(array('name'=>'txtErrors'), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);
$_block_plugin153 = isset($_smarty_tpl->smarty->registered_plugins['block']['addJsDefL'][0][0]) ? $_smarty_tpl->smarty->registered_plugins['block']['addJsDefL'][0][0] : null;
if (!is_callable(array($_block_plugin153, 'addJsDefL'))) {
throw new SmartyException('block tag \'addJsDefL\' not callable or registered');
}
$_smarty_tpl->smarty->_cache['_tag_stack'][] = array('addJsDefL', array('name'=>'txtDeliveryAddress'));
$_block_repeat=true;
echo $_block_plugin153->addJsDefL(array('name'=>'txtDeliveryAddress'), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();
echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Delivery address','js'=>1),$_smarty_tpl ) );
$_block_repeat=false;
echo $_block_plugin153->addJsDefL(array('name'=>'txtDeliveryAddress'), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);
$_block_plugin154 = isset($_smarty_tpl->smarty->registered_plugins['block']['addJsDefL'][0][0]) ? $_smarty_tpl->smarty->registered_plugins['block']['addJsDefL'][0][0] : null;
if (!is_callable(array($_block_plugin154, 'addJsDefL'))) {
throw new SmartyException('block tag \'addJsDefL\' not callable or registered');
}
$_smarty_tpl->smarty->_cache['_tag_stack'][] = array('addJsDefL', array('name'=>'txtInvoiceAddress'));
$_block_repeat=true;
echo $_block_plugin154->addJsDefL(array('name'=>'txtInvoiceAddress'), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();
echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Invoice address','js'=>1),$_smarty_tpl ) );
$_block_repeat=false;
echo $_block_plugin154->addJsDefL(array('name'=>'txtInvoiceAddress'), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);
$_block_plugin155 = isset($_smarty_tpl->smarty->registered_plugins['block']['addJsDefL'][0][0]) ? $_smarty_tpl->smarty->registered_plugins['block']['addJsDefL'][0][0] : null;
if (!is_callable(array($_block_plugin155, 'addJsDefL'))) {
throw new SmartyException('block tag \'addJsDefL\' not callable or registered');
}
$_smarty_tpl->smarty->_cache['_tag_stack'][] = array('addJsDefL', array('name'=>'txtModifyMyAddress'));
$_block_repeat=true;
echo $_block_plugin155->addJsDefL(array('name'=>'txtModifyMyAddress'), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();
echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Modify my address','js'=>1),$_smarty_tpl ) );
$_block_repeat=false;
echo $_block_plugin155->addJsDefL(array('name'=>'txtModifyMyAddress'), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);
$_block_plugin156 = isset($_smarty_tpl->smarty->registered_plugins['block']['addJsDefL'][0][0]) ? $_smarty_tpl->smarty->registered_plugins['block']['addJsDefL'][0][0] : null;
if (!is_callable(array($_block_plugin156, 'addJsDefL'))) {
throw new SmartyException('block tag \'addJsDefL\' not callable or registered');
}
$_smarty_tpl->smarty->_cache['_tag_stack'][] = array('addJsDefL', array('name'=>'txtInstantCheckout'));
$_block_repeat=true;
echo $_block_plugin156->addJsDefL(array('name'=>'txtInstantCheckout'), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();
echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Instant checkout','js'=>1),$_smarty_tpl ) );
$_block_repeat=false;
echo $_block_plugin156->addJsDefL(array('name'=>'txtInstantCheckout'), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);
$_block_plugin157 = isset($_smarty_tpl->smarty->registered_plugins['block']['addJsDefL'][0][0]) ? $_smarty_tpl->smarty->registered_plugins['block']['addJsDefL'][0][0] : null;
if (!is_callable(array($_block_plugin157, 'addJsDefL'))) {
throw new SmartyException('block tag \'addJsDefL\' not callable or registered');
}
$_smarty_tpl->smarty->_cache['_tag_stack'][] = array('addJsDefL', array('name'=>'txtSelectAnAddressFirst'));
$_block_repeat=true;
echo $_block_plugin157->addJsDefL(array('name'=>'txtSelectAnAddressFirst'), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();
echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Please start by selecting an address.','js'=>1),$_smarty_tpl ) );
$_block_repeat=false;
echo $_block_plugin157->addJsDefL(array('name'=>'txtSelectAnAddressFirst'), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);
$_block_plugin158 = isset($_smarty_tpl->smarty->registered_plugins['block']['addJsDefL'][0][0]) ? $_smarty_tpl->smarty->registered_plugins['block']['addJsDefL'][0][0] : null;
if (!is_callable(array($_block_plugin158, 'addJsDefL'))) {
throw new SmartyException('block tag \'addJsDefL\' not callable or registered');
}
$_smarty_tpl->smarty->_cache['_tag_stack'][] = array('addJsDefL', array('name'=>'txtFree'));
$_block_repeat=true;
echo $_block_plugin158->addJsDefL(array('name'=>'txtFree'), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();
echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Free','js'=>1),$_smarty_tpl ) );
$_block_repeat=false;
echo $_block_plugin158->addJsDefL(array('name'=>'txtFree'), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);
$_smarty_tpl->smarty->ext->_capture->open($_smarty_tpl, 'default', null, null);
if ($_smarty_tpl->tpl_vars['back']->value) {?>&mod=<?php echo urlencode($_smarty_tpl->tpl_vars['back']->value);
}
$_smarty_tpl->smarty->ext->_capture->close($_smarty_tpl);
$_smarty_tpl->smarty->ext->_capture->open($_smarty_tpl, 'addressUrl', null, null);
echo preg_replace("%(?<!\\\\)'%", "\'",$_smarty_tpl->tpl_vars['link']->value->getPageLink('address',true,NULL,((('back=').($_smarty_tpl->tpl_vars['back_order_page']->value)).('?step=1')).($_smarty_tpl->smarty->ext->_capture->getBuffer($_smarty_tpl, 'default'))));
$_smarty_tpl->smarty->ext->_capture->close($_smarty_tpl);
echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['addJsDef'][0], array( array('addressUrl'=>$_smarty_tpl->smarty->ext->_capture->getBuffer($_smarty_tpl, 'addressUrl')),$_smarty_tpl ) );
$_smarty_tpl->smarty->ext->_capture->open($_smarty_tpl, 'default', null, null);
echo urlencode('&multi-shipping=1');
$_smarty_tpl->smarty->ext->_capture->close($_smarty_tpl);
echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['addJsDef'][0], array( array('addressMultishippingUrl'=>($_smarty_tpl->smarty->ext->_capture->getBuffer($_smarty_tpl, 'addressUrl')).($_smarty_tpl->smarty->ext->_capture->getBuffer($_smarty_tpl, 'default'))),$_smarty_tpl ) );
$_smarty_tpl->smarty->ext->_capture->open($_smarty_tpl, 'addressUrlAdd', null, null);
echo ($_smarty_tpl->smarty->ext->_capture->getBuffer($_smarty_tpl, 'addressUrl')).('&id_address=');
$_smarty_tpl->smarty->ext->_capture->close($_smarty_tpl);
echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['addJsDef'][0], array( array('addressUrlAdd'=>$_smarty_tpl->smarty->ext->_capture->getBuffer($_smarty_tpl, 'addressUrlAdd')),$_smarty_tpl ) );
echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['addJsDef'][0], array( array('opc'=>call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'boolval' ][ 0 ], array( $_smarty_tpl->tpl_vars['opc']->value ))),$_smarty_tpl ) );
$_smarty_tpl->smarty->ext->_capture->open($_smarty_tpl, 'default', null, null);?><h3 class="page-subheading"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Your billing address','js'=>1),$_smarty_tpl ) );?>
</h3><?php $_smarty_tpl->smarty->ext->_capture->close($_smarty_tpl);
$_block_plugin159 = isset($_smarty_tpl->smarty->registered_plugins['block']['addJsDefL'][0][0]) ? $_smarty_tpl->smarty->registered_plugins['block']['addJsDefL'][0][0] : null;
if (!is_callable(array($_block_plugin159, 'addJsDefL'))) {
throw new SmartyException('block tag \'addJsDefL\' not callable or registered');
}
$_smarty_tpl->smarty->_cache['_tag_stack'][] = array('addJsDefL', array('name'=>'titleInvoice'));
$_block_repeat=true;
echo $_block_plugin159->addJsDefL(array('name'=>'titleInvoice'), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();
echo addcslashes($_smarty_tpl->smarty->ext->_capture->getBuffer($_smarty_tpl, 'default'),'\'');
$_block_repeat=false;
echo $_block_plugin159->addJsDefL(array('name'=>'titleInvoice'), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);
$_smarty_tpl->smarty->ext->_capture->open($_smarty_tpl, 'default', null, null);?><h3 class="page-subheading"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Your delivery address','js'=>1),$_smarty_tpl ) );?>
</h3><?php $_smarty_tpl->smarty->ext->_capture->close($_smarty_tpl);
$_block_plugin160 = isset($_smarty_tpl->smarty->registered_plugins['block']['addJsDefL'][0][0]) ? $_smarty_tpl->smarty->registered_plugins['block']['addJsDefL'][0][0] : null;
if (!is_callable(array($_block_plugin160, 'addJsDefL'))) {
throw new SmartyException('block tag \'addJsDefL\' not callable or registered');
}
$_smarty_tpl->smarty->_cache['_tag_stack'][] = array('addJsDefL', array('name'=>'titleDelivery'));
$_block_repeat=true;
echo $_block_plugin160->addJsDefL(array('name'=>'titleDelivery'), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();
echo addcslashes($_smarty_tpl->smarty->ext->_capture->getBuffer($_smarty_tpl, 'default'),'\'');
$_block_repeat=false;
echo $_block_plugin160->addJsDefL(array('name'=>'titleDelivery'), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);
$_smarty_tpl->smarty->ext->_capture->open($_smarty_tpl, 'default', null, null);?><a class="button button-small btn btn-default" href="<?php echo $_smarty_tpl->smarty->ext->_capture->getBuffer($_smarty_tpl, 'addressUrlAdd');?>
" title="<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Update','js'=>1),$_smarty_tpl ) );?>
"><span><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Update','js'=>1),$_smarty_tpl ) );?>
<i class="icon-chevron-right right"></i></span></a><?php $_smarty_tpl->smarty->ext->_capture->close($_smarty_tpl);
$_block_plugin161 = isset($_smarty_tpl->smarty->registered_plugins['block']['addJsDefL'][0][0]) ? $_smarty_tpl->smarty->registered_plugins['block']['addJsDefL'][0][0] : null;
if (!is_callable(array($_block_plugin161, 'addJsDefL'))) {
throw new SmartyException('block tag \'addJsDefL\' not callable or registered');
}
$_smarty_tpl->smarty->_cache['_tag_stack'][] = array('addJsDefL', array('name'=>'liUpdate'));
$_block_repeat=true;
echo $_block_plugin161->addJsDefL(array('name'=>'liUpdate'), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();
echo addcslashes($_smarty_tpl->smarty->ext->_capture->getBuffer($_smarty_tpl, 'default'),'\'');
$_block_repeat=false;
echo $_block_plugin161->addJsDefL(array('name'=>'liUpdate'), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);?>
        <?php
}
}
/* {/block 'order_opc_advanced_js_vars'} */
/* {block 'order_opc_advanced'} */
class Block_61346336367bb8edba93541_99388300 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'order_opc_advanced' => 
  array (
    0 => 'Block_61346336367bb8edba93541_99388300',
  ),
  'order_payment_advanced' => 
  array (
    0 => 'Block_99783963067bb8edbaa2c54_26357677',
  ),
  'errors' => 
  array (
    0 => 'Block_62889391367bb8edbab2006_82217378',
  ),
  'order_opc_advanced_js_vars' => 
  array (
    0 => 'Block_49652087367bb8edbab9575_90139106',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

    <?php if ($_smarty_tpl->tpl_vars['opc']->value) {?>
        <?php $_smarty_tpl->_assignInScope('back_order_page', "order-opc.php");?>
    <?php } else { ?>
        <?php $_smarty_tpl->_assignInScope('back_order_page', "order.php");?>
    <?php }?>

    <?php if ($_smarty_tpl->tpl_vars['PS_CATALOG_MODE']->value) {?>
        <?php $_smarty_tpl->smarty->ext->_capture->open($_smarty_tpl, 'path', null, null);
echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Your shopping cart'),$_smarty_tpl ) );
$_smarty_tpl->smarty->ext->_capture->close($_smarty_tpl);?>
        <h2 id="cart_title"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Your shopping cart'),$_smarty_tpl ) );?>
</h2>
        <p class="alert alert-warning"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Your new order was not accepted.'),$_smarty_tpl ) );?>
</p>
    <?php } else { ?>
        <?php if ($_smarty_tpl->tpl_vars['productNumber']->value) {?>
            <!-- Payment -->
            <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_99783963067bb8edbaa2c54_26357677', 'order_payment_advanced', $this->tplIndex);
?>

            <!-- END Payment -->
        <?php } else { ?>
            <?php $_smarty_tpl->smarty->ext->_capture->open($_smarty_tpl, 'path', null, null);
echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Your shopping cart'),$_smarty_tpl ) );
$_smarty_tpl->smarty->ext->_capture->close($_smarty_tpl);?>
            <h2 class="page-heading"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Your shopping cart'),$_smarty_tpl ) );?>
</h2>
            <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_62889391367bb8edbab2006_82217378', 'errors', $this->tplIndex);
?>

            <p class="alert alert-warning"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Your shopping cart is empty.'),$_smarty_tpl ) );?>
</p>
        <?php }?>
        <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_49652087367bb8edbab9575_90139106', 'order_opc_advanced_js_vars', $this->tplIndex);
?>

    <?php }
}
}
/* {/block 'order_opc_advanced'} */
}
