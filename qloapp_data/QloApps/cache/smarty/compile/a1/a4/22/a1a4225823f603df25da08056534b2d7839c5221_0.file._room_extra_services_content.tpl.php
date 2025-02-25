<?php
/* Smarty version 3.1.39, created on 2025-02-24 02:40:52
  from '/home/qloapps/www/QloApps/admin/themes/default/template/controllers/orders/modals/_partials/_room_extra_services_content.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.39',
  'unifunc' => 'content_67bb8edc9f2803_22885089',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'a1a4225823f603df25da08056534b2d7839c5221' => 
    array (
      0 => '/home/qloapps/www/QloApps/admin/themes/default/template/controllers/orders/modals/_partials/_room_extra_services_content.tpl',
      1 => 1728563708,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:controllers/orders/modals/_extra_services_facilities_tab_content.tpl' => 1,
    'file:controllers/orders/modals/_extra_services_service_products_tab_content.tpl' => 1,
  ),
),false)) {
function content_67bb8edc9f2803_22885089 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_subTemplateRender('file:controllers/orders/modals/_extra_services_facilities_tab_content.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
$_smarty_tpl->_subTemplateRender('file:controllers/orders/modals/_extra_services_service_products_tab_content.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

<style type="text/css">
	/*Extra demands CSS*/
	#edit_product .extra-services-container .room_demands_container,
	#edit_product .extra-services-container .room_services_container {
		display: none;}
	#edit_product .extra-services-container #save_room_demands,
	#edit_product .extra-services-container #back_to_demands_btn,
	#edit_product .extra-services-container #save_service_service,
	#edit_product .extra-services-container #back_to_service_btn {
		display: none;}
</style>

<?php }
}
