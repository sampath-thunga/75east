<?php
/* Smarty version 3.1.39, created on 2025-02-24 02:40:46
  from '/home/qloapps/www/QloApps/themes/hotel-reservation-theme/global.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.39',
  'unifunc' => 'content_67bb8ed660e917_28108784',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'aa753ac6072a77e431b528d4bfd26bfe0f075d99' => 
    array (
      0 => '/home/qloapps/www/QloApps/themes/hotel-reservation-theme/global.tpl',
      1 => 1728563708,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_67bb8ed660e917_28108784 (Smarty_Internal_Template $_smarty_tpl) {
echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['addJsDef'][0], array( array('isMobile'=>$_smarty_tpl->tpl_vars['mobile_device']->value),$_smarty_tpl ) );
echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['addJsDef'][0], array( array('baseDir'=>$_smarty_tpl->tpl_vars['content_dir']->value),$_smarty_tpl ) );
echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['addJsDef'][0], array( array('baseUri'=>$_smarty_tpl->tpl_vars['base_uri']->value),$_smarty_tpl ) );
echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['addJsDef'][0], array( array('static_token'=>$_smarty_tpl->tpl_vars['static_token']->value),$_smarty_tpl ) );
echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['addJsDef'][0], array( array('token'=>htmlentities($_smarty_tpl->tpl_vars['token']->value,(defined('ENT_QUOTES') ? constant('ENT_QUOTES') : null))),$_smarty_tpl ) );
echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['addJsDef'][0], array( array('priceDisplayPrecision'=>$_smarty_tpl->tpl_vars['priceDisplayPrecision']->value*$_smarty_tpl->tpl_vars['currency']->value->decimals),$_smarty_tpl ) );
echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['addJsDef'][0], array( array('priceDisplayMethod'=>$_smarty_tpl->tpl_vars['priceDisplay']->value),$_smarty_tpl ) );
echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['addJsDef'][0], array( array('roundMode'=>$_smarty_tpl->tpl_vars['roundMode']->value),$_smarty_tpl ) );
echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['addJsDef'][0], array( array('currency'=>$_smarty_tpl->tpl_vars['currency']->value),$_smarty_tpl ) );
echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['addJsDef'][0], array( array('currencyRate'=>floatval($_smarty_tpl->tpl_vars['currencyRate']->value)),$_smarty_tpl ) );
echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['addJsDef'][0], array( array('currencySign'=>html_entity_decode($_smarty_tpl->tpl_vars['currency']->value->sign,2,"UTF-8")),$_smarty_tpl ) );
echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['addJsDef'][0], array( array('currencyFormat'=>intval($_smarty_tpl->tpl_vars['currency']->value->format)),$_smarty_tpl ) );
echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['addJsDef'][0], array( array('currencyBlank'=>intval($_smarty_tpl->tpl_vars['currency']->value->blank)),$_smarty_tpl ) );
echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['addJsDef'][0], array( array('isLogged'=>intval($_smarty_tpl->tpl_vars['is_logged']->value)),$_smarty_tpl ) );
echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['addJsDef'][0], array( array('isGuest'=>intval($_smarty_tpl->tpl_vars['is_guest']->value)),$_smarty_tpl ) );
echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['addJsDef'][0], array( array('page_name'=>htmlspecialchars($_smarty_tpl->tpl_vars['page_name']->value, ENT_QUOTES, 'UTF-8', true)),$_smarty_tpl ) );
echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['addJsDef'][0], array( array('contentOnly'=>call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'boolval' ][ 0 ], array( $_smarty_tpl->tpl_vars['content_only']->value ))),$_smarty_tpl ) );
if ((isset($_smarty_tpl->tpl_vars['cookie']->value->id_lang))) {
echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['addJsDef'][0], array( array('id_lang'=>intval($_smarty_tpl->tpl_vars['cookie']->value->id_lang)),$_smarty_tpl ) );
}
echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['addJsDef'][0], array( array('lang_iso'=>$_smarty_tpl->tpl_vars['lang_iso']->value),$_smarty_tpl ) );
echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['addJsDef'][0], array( array('language_is_rtl'=>call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'boolval' ][ 0 ], array( $_smarty_tpl->tpl_vars['language_is_rtl']->value ))),$_smarty_tpl ) );
$_block_plugin32 = isset($_smarty_tpl->smarty->registered_plugins['block']['addJsDefL'][0][0]) ? $_smarty_tpl->smarty->registered_plugins['block']['addJsDefL'][0][0] : null;
if (!is_callable(array($_block_plugin32, 'addJsDefL'))) {
throw new SmartyException('block tag \'addJsDefL\' not callable or registered');
}
$_smarty_tpl->smarty->_cache['_tag_stack'][] = array('addJsDefL', array('name'=>'FancyboxI18nClose'));
$_block_repeat=true;
echo $_block_plugin32->addJsDefL(array('name'=>'FancyboxI18nClose'), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();
echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Close'),$_smarty_tpl ) );
$_block_repeat=false;
echo $_block_plugin32->addJsDefL(array('name'=>'FancyboxI18nClose'), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);
$_block_plugin33 = isset($_smarty_tpl->smarty->registered_plugins['block']['addJsDefL'][0][0]) ? $_smarty_tpl->smarty->registered_plugins['block']['addJsDefL'][0][0] : null;
if (!is_callable(array($_block_plugin33, 'addJsDefL'))) {
throw new SmartyException('block tag \'addJsDefL\' not callable or registered');
}
$_smarty_tpl->smarty->_cache['_tag_stack'][] = array('addJsDefL', array('name'=>'FancyboxI18nNext'));
$_block_repeat=true;
echo $_block_plugin33->addJsDefL(array('name'=>'FancyboxI18nNext'), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();
echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Next'),$_smarty_tpl ) );
$_block_repeat=false;
echo $_block_plugin33->addJsDefL(array('name'=>'FancyboxI18nNext'), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);
$_block_plugin34 = isset($_smarty_tpl->smarty->registered_plugins['block']['addJsDefL'][0][0]) ? $_smarty_tpl->smarty->registered_plugins['block']['addJsDefL'][0][0] : null;
if (!is_callable(array($_block_plugin34, 'addJsDefL'))) {
throw new SmartyException('block tag \'addJsDefL\' not callable or registered');
}
$_smarty_tpl->smarty->_cache['_tag_stack'][] = array('addJsDefL', array('name'=>'FancyboxI18nPrev'));
$_block_repeat=true;
echo $_block_plugin34->addJsDefL(array('name'=>'FancyboxI18nPrev'), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();
echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Previous'),$_smarty_tpl ) );
$_block_repeat=false;
echo $_block_plugin34->addJsDefL(array('name'=>'FancyboxI18nPrev'), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);
$_block_plugin35 = isset($_smarty_tpl->smarty->registered_plugins['block']['addJsDefL'][0][0]) ? $_smarty_tpl->smarty->registered_plugins['block']['addJsDefL'][0][0] : null;
if (!is_callable(array($_block_plugin35, 'addJsDefL'))) {
throw new SmartyException('block tag \'addJsDefL\' not callable or registered');
}
$_smarty_tpl->smarty->_cache['_tag_stack'][] = array('addJsDefL', array('name'=>'RangePickerCheckin'));
$_block_repeat=true;
echo $_block_plugin35->addJsDefL(array('name'=>'RangePickerCheckin'), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();
echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Check-in'),$_smarty_tpl ) );
$_block_repeat=false;
echo $_block_plugin35->addJsDefL(array('name'=>'RangePickerCheckin'), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);
$_block_plugin36 = isset($_smarty_tpl->smarty->registered_plugins['block']['addJsDefL'][0][0]) ? $_smarty_tpl->smarty->registered_plugins['block']['addJsDefL'][0][0] : null;
if (!is_callable(array($_block_plugin36, 'addJsDefL'))) {
throw new SmartyException('block tag \'addJsDefL\' not callable or registered');
}
$_smarty_tpl->smarty->_cache['_tag_stack'][] = array('addJsDefL', array('name'=>'RangePickerCheckout'));
$_block_repeat=true;
echo $_block_plugin36->addJsDefL(array('name'=>'RangePickerCheckout'), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();
echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Check-out'),$_smarty_tpl ) );
$_block_repeat=false;
echo $_block_plugin36->addJsDefL(array('name'=>'RangePickerCheckout'), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);
echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['addJsDef'][0], array( array('usingSecureMode'=>call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'boolval' ][ 0 ], array( Tools::usingSecureMode() ))),$_smarty_tpl ) );
echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['addJsDef'][0], array( array('ajaxsearch'=>call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'boolval' ][ 0 ], array( Configuration::get('PS_SEARCH_AJAX') ))),$_smarty_tpl ) );
echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['addJsDef'][0], array( array('instantsearch'=>call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'boolval' ][ 0 ], array( Configuration::get('PS_INSTANT_SEARCH') ))),$_smarty_tpl ) );
echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['addJsDef'][0], array( array('quickView'=>call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'boolval' ][ 0 ], array( $_smarty_tpl->tpl_vars['quick_view']->value ))),$_smarty_tpl ) );
echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['addJsDef'][0], array( array('displayList'=>call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'boolval' ][ 0 ], array( Configuration::get('PS_GRID_PRODUCT') ))),$_smarty_tpl ) );
echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['addJsDef'][0], array( array('highDPI'=>call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'boolval' ][ 0 ], array( Configuration::get('PS_HIGHT_DPI') ))),$_smarty_tpl ) );
echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['addJsDef'][0], array( array('showFullDate'=>call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'boolval' ][ 0 ], array( $_smarty_tpl->tpl_vars['show_full_date']->value ))),$_smarty_tpl ) );
echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['addJsDef'][0], array( array('is_occupancy_wise_search'=>call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'boolval' ][ 0 ], array( $_smarty_tpl->tpl_vars['is_occupancy_wise_search']->value ))),$_smarty_tpl ) );
echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['addJsDef'][0], array( array('occupancy_required_for_booking'=>call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'boolval' ][ 0 ], array( $_smarty_tpl->tpl_vars['occupancy_required_for_booking']->value ))),$_smarty_tpl ) );
echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['addJsDef'][0], array( array('max_child_age'=>$_smarty_tpl->tpl_vars['max_child_age']->value),$_smarty_tpl ) );
echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['addJsDef'][0], array( array('max_child_in_room'=>$_smarty_tpl->tpl_vars['max_child_in_room']->value),$_smarty_tpl ) );
$_block_plugin37 = isset($_smarty_tpl->smarty->registered_plugins['block']['addJsDefL'][0][0]) ? $_smarty_tpl->smarty->registered_plugins['block']['addJsDefL'][0][0] : null;
if (!is_callable(array($_block_plugin37, 'addJsDefL'))) {
throw new SmartyException('block tag \'addJsDefL\' not callable or registered');
}
$_smarty_tpl->smarty->_cache['_tag_stack'][] = array('addJsDefL', array('name'=>'max_occupancy_reached_txt'));
$_block_repeat=true;
echo $_block_plugin37->addJsDefL(array('name'=>'max_occupancy_reached_txt'), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();
echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Maximum room occupancy reached','js'=>1),$_smarty_tpl ) );
$_block_repeat=false;
echo $_block_plugin37->addJsDefL(array('name'=>'max_occupancy_reached_txt'), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);
$_block_plugin38 = isset($_smarty_tpl->smarty->registered_plugins['block']['addJsDefL'][0][0]) ? $_smarty_tpl->smarty->registered_plugins['block']['addJsDefL'][0][0] : null;
if (!is_callable(array($_block_plugin38, 'addJsDefL'))) {
throw new SmartyException('block tag \'addJsDefL\' not callable or registered');
}
$_smarty_tpl->smarty->_cache['_tag_stack'][] = array('addJsDefL', array('name'=>'max_adults_txt'));
$_block_repeat=true;
echo $_block_plugin38->addJsDefL(array('name'=>'max_adults_txt'), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();
echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Maximum adult occupancy reached','js'=>1),$_smarty_tpl ) );
$_block_repeat=false;
echo $_block_plugin38->addJsDefL(array('name'=>'max_adults_txt'), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);
$_block_plugin39 = isset($_smarty_tpl->smarty->registered_plugins['block']['addJsDefL'][0][0]) ? $_smarty_tpl->smarty->registered_plugins['block']['addJsDefL'][0][0] : null;
if (!is_callable(array($_block_plugin39, 'addJsDefL'))) {
throw new SmartyException('block tag \'addJsDefL\' not callable or registered');
}
$_smarty_tpl->smarty->_cache['_tag_stack'][] = array('addJsDefL', array('name'=>'max_children_txt'));
$_block_repeat=true;
echo $_block_plugin39->addJsDefL(array('name'=>'max_children_txt'), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();
echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Maximum children occupancy reached','js'=>1),$_smarty_tpl ) );
$_block_repeat=false;
echo $_block_plugin39->addJsDefL(array('name'=>'max_children_txt'), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);
$_block_plugin40 = isset($_smarty_tpl->smarty->registered_plugins['block']['addJsDefL'][0][0]) ? $_smarty_tpl->smarty->registered_plugins['block']['addJsDefL'][0][0] : null;
if (!is_callable(array($_block_plugin40, 'addJsDefL'))) {
throw new SmartyException('block tag \'addJsDefL\' not callable or registered');
}
$_smarty_tpl->smarty->_cache['_tag_stack'][] = array('addJsDefL', array('name'=>'no_children_allowed_txt'));
$_block_repeat=true;
echo $_block_plugin40->addJsDefL(array('name'=>'no_children_allowed_txt'), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();
echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Only adults can be accommodated','js'=>1),$_smarty_tpl ) );
$_block_repeat=false;
echo $_block_plugin40->addJsDefL(array('name'=>'no_children_allowed_txt'), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);
$_block_plugin41 = isset($_smarty_tpl->smarty->registered_plugins['block']['addJsDefL'][0][0]) ? $_smarty_tpl->smarty->registered_plugins['block']['addJsDefL'][0][0] : null;
if (!is_callable(array($_block_plugin41, 'addJsDefL'))) {
throw new SmartyException('block tag \'addJsDefL\' not callable or registered');
}
$_smarty_tpl->smarty->_cache['_tag_stack'][] = array('addJsDefL', array('name'=>'select_occupancy_txt'));
$_block_repeat=true;
echo $_block_plugin41->addJsDefL(array('name'=>'select_occupancy_txt'), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();
echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Select Occupancy','js'=>1),$_smarty_tpl ) );
$_block_repeat=false;
echo $_block_plugin41->addJsDefL(array('name'=>'select_occupancy_txt'), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);
$_block_plugin42 = isset($_smarty_tpl->smarty->registered_plugins['block']['addJsDefL'][0][0]) ? $_smarty_tpl->smarty->registered_plugins['block']['addJsDefL'][0][0] : null;
if (!is_callable(array($_block_plugin42, 'addJsDefL'))) {
throw new SmartyException('block tag \'addJsDefL\' not callable or registered');
}
$_smarty_tpl->smarty->_cache['_tag_stack'][] = array('addJsDefL', array('name'=>'select_age_txt'));
$_block_repeat=true;
echo $_block_plugin42->addJsDefL(array('name'=>'select_age_txt'), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();
echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Select age','js'=>1),$_smarty_tpl ) );
$_block_repeat=false;
echo $_block_plugin42->addJsDefL(array('name'=>'select_age_txt'), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);
$_block_plugin43 = isset($_smarty_tpl->smarty->registered_plugins['block']['addJsDefL'][0][0]) ? $_smarty_tpl->smarty->registered_plugins['block']['addJsDefL'][0][0] : null;
if (!is_callable(array($_block_plugin43, 'addJsDefL'))) {
throw new SmartyException('block tag \'addJsDefL\' not callable or registered');
}
$_smarty_tpl->smarty->_cache['_tag_stack'][] = array('addJsDefL', array('name'=>'under_1_age'));
$_block_repeat=true;
echo $_block_plugin43->addJsDefL(array('name'=>'under_1_age'), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();
echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Under 1','js'=>1),$_smarty_tpl ) );
$_block_repeat=false;
echo $_block_plugin43->addJsDefL(array('name'=>'under_1_age'), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);
$_block_plugin44 = isset($_smarty_tpl->smarty->registered_plugins['block']['addJsDefL'][0][0]) ? $_smarty_tpl->smarty->registered_plugins['block']['addJsDefL'][0][0] : null;
if (!is_callable(array($_block_plugin44, 'addJsDefL'))) {
throw new SmartyException('block tag \'addJsDefL\' not callable or registered');
}
$_smarty_tpl->smarty->_cache['_tag_stack'][] = array('addJsDefL', array('name'=>'room_txt'));
$_block_repeat=true;
echo $_block_plugin44->addJsDefL(array('name'=>'room_txt'), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();
echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Room','js'=>1),$_smarty_tpl ) );
$_block_repeat=false;
echo $_block_plugin44->addJsDefL(array('name'=>'room_txt'), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);
$_block_plugin45 = isset($_smarty_tpl->smarty->registered_plugins['block']['addJsDefL'][0][0]) ? $_smarty_tpl->smarty->registered_plugins['block']['addJsDefL'][0][0] : null;
if (!is_callable(array($_block_plugin45, 'addJsDefL'))) {
throw new SmartyException('block tag \'addJsDefL\' not callable or registered');
}
$_smarty_tpl->smarty->_cache['_tag_stack'][] = array('addJsDefL', array('name'=>'rooms_txt'));
$_block_repeat=true;
echo $_block_plugin45->addJsDefL(array('name'=>'rooms_txt'), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();
echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Rooms','js'=>1),$_smarty_tpl ) );
$_block_repeat=false;
echo $_block_plugin45->addJsDefL(array('name'=>'rooms_txt'), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);
$_block_plugin46 = isset($_smarty_tpl->smarty->registered_plugins['block']['addJsDefL'][0][0]) ? $_smarty_tpl->smarty->registered_plugins['block']['addJsDefL'][0][0] : null;
if (!is_callable(array($_block_plugin46, 'addJsDefL'))) {
throw new SmartyException('block tag \'addJsDefL\' not callable or registered');
}
$_smarty_tpl->smarty->_cache['_tag_stack'][] = array('addJsDefL', array('name'=>'remove_txt'));
$_block_repeat=true;
echo $_block_plugin46->addJsDefL(array('name'=>'remove_txt'), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();
echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Remove','js'=>1),$_smarty_tpl ) );
$_block_repeat=false;
echo $_block_plugin46->addJsDefL(array('name'=>'remove_txt'), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);
$_block_plugin47 = isset($_smarty_tpl->smarty->registered_plugins['block']['addJsDefL'][0][0]) ? $_smarty_tpl->smarty->registered_plugins['block']['addJsDefL'][0][0] : null;
if (!is_callable(array($_block_plugin47, 'addJsDefL'))) {
throw new SmartyException('block tag \'addJsDefL\' not callable or registered');
}
$_smarty_tpl->smarty->_cache['_tag_stack'][] = array('addJsDefL', array('name'=>'adult_txt'));
$_block_repeat=true;
echo $_block_plugin47->addJsDefL(array('name'=>'adult_txt'), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();
echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Adult','js'=>1),$_smarty_tpl ) );
$_block_repeat=false;
echo $_block_plugin47->addJsDefL(array('name'=>'adult_txt'), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);
$_block_plugin48 = isset($_smarty_tpl->smarty->registered_plugins['block']['addJsDefL'][0][0]) ? $_smarty_tpl->smarty->registered_plugins['block']['addJsDefL'][0][0] : null;
if (!is_callable(array($_block_plugin48, 'addJsDefL'))) {
throw new SmartyException('block tag \'addJsDefL\' not callable or registered');
}
$_smarty_tpl->smarty->_cache['_tag_stack'][] = array('addJsDefL', array('name'=>'adults_txt'));
$_block_repeat=true;
echo $_block_plugin48->addJsDefL(array('name'=>'adults_txt'), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();
echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Adults','js'=>1),$_smarty_tpl ) );
$_block_repeat=false;
echo $_block_plugin48->addJsDefL(array('name'=>'adults_txt'), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);
$_block_plugin49 = isset($_smarty_tpl->smarty->registered_plugins['block']['addJsDefL'][0][0]) ? $_smarty_tpl->smarty->registered_plugins['block']['addJsDefL'][0][0] : null;
if (!is_callable(array($_block_plugin49, 'addJsDefL'))) {
throw new SmartyException('block tag \'addJsDefL\' not callable or registered');
}
$_smarty_tpl->smarty->_cache['_tag_stack'][] = array('addJsDefL', array('name'=>'child_txt'));
$_block_repeat=true;
echo $_block_plugin49->addJsDefL(array('name'=>'child_txt'), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();
echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Child','js'=>1),$_smarty_tpl ) );
$_block_repeat=false;
echo $_block_plugin49->addJsDefL(array('name'=>'child_txt'), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);
$_block_plugin50 = isset($_smarty_tpl->smarty->registered_plugins['block']['addJsDefL'][0][0]) ? $_smarty_tpl->smarty->registered_plugins['block']['addJsDefL'][0][0] : null;
if (!is_callable(array($_block_plugin50, 'addJsDefL'))) {
throw new SmartyException('block tag \'addJsDefL\' not callable or registered');
}
$_smarty_tpl->smarty->_cache['_tag_stack'][] = array('addJsDefL', array('name'=>'children_txt'));
$_block_repeat=true;
echo $_block_plugin50->addJsDefL(array('name'=>'children_txt'), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();
echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Children','js'=>1),$_smarty_tpl ) );
$_block_repeat=false;
echo $_block_plugin50->addJsDefL(array('name'=>'children_txt'), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);
$_block_plugin51 = isset($_smarty_tpl->smarty->registered_plugins['block']['addJsDefL'][0][0]) ? $_smarty_tpl->smarty->registered_plugins['block']['addJsDefL'][0][0] : null;
if (!is_callable(array($_block_plugin51, 'addJsDefL'))) {
throw new SmartyException('block tag \'addJsDefL\' not callable or registered');
}
$_smarty_tpl->smarty->_cache['_tag_stack'][] = array('addJsDefL', array('name'=>'below_txt'));
$_block_repeat=true;
echo $_block_plugin51->addJsDefL(array('name'=>'below_txt'), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();
echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Below','js'=>1),$_smarty_tpl ) );
$_block_repeat=false;
echo $_block_plugin51->addJsDefL(array('name'=>'below_txt'), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);
$_block_plugin52 = isset($_smarty_tpl->smarty->registered_plugins['block']['addJsDefL'][0][0]) ? $_smarty_tpl->smarty->registered_plugins['block']['addJsDefL'][0][0] : null;
if (!is_callable(array($_block_plugin52, 'addJsDefL'))) {
throw new SmartyException('block tag \'addJsDefL\' not callable or registered');
}
$_smarty_tpl->smarty->_cache['_tag_stack'][] = array('addJsDefL', array('name'=>'years_txt'));
$_block_repeat=true;
echo $_block_plugin52->addJsDefL(array('name'=>'years_txt'), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();
echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'years','js'=>1),$_smarty_tpl ) );
$_block_repeat=false;
echo $_block_plugin52->addJsDefL(array('name'=>'years_txt'), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);
$_block_plugin53 = isset($_smarty_tpl->smarty->registered_plugins['block']['addJsDefL'][0][0]) ? $_smarty_tpl->smarty->registered_plugins['block']['addJsDefL'][0][0] : null;
if (!is_callable(array($_block_plugin53, 'addJsDefL'))) {
throw new SmartyException('block tag \'addJsDefL\' not callable or registered');
}
$_smarty_tpl->smarty->_cache['_tag_stack'][] = array('addJsDefL', array('name'=>'all_children_txt'));
$_block_repeat=true;
echo $_block_plugin53->addJsDefL(array('name'=>'all_children_txt'), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();
echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'All Children','js'=>1),$_smarty_tpl ) );
$_block_repeat=false;
echo $_block_plugin53->addJsDefL(array('name'=>'all_children_txt'), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);
$_block_plugin54 = isset($_smarty_tpl->smarty->registered_plugins['block']['addJsDefL'][0][0]) ? $_smarty_tpl->smarty->registered_plugins['block']['addJsDefL'][0][0] : null;
if (!is_callable(array($_block_plugin54, 'addJsDefL'))) {
throw new SmartyException('block tag \'addJsDefL\' not callable or registered');
}
$_smarty_tpl->smarty->_cache['_tag_stack'][] = array('addJsDefL', array('name'=>'invalid_occupancy_txt'));
$_block_repeat=true;
echo $_block_plugin54->addJsDefL(array('name'=>'invalid_occupancy_txt'), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();
echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Invalid occupancy(adults/children) found.','js'=>1),$_smarty_tpl ) );
$_block_repeat=false;
echo $_block_plugin54->addJsDefL(array('name'=>'invalid_occupancy_txt'), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);
}
}
