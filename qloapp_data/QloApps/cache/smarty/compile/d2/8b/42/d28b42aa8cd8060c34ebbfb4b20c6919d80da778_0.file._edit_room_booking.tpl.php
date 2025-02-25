<?php
/* Smarty version 3.1.39, created on 2025-02-24 02:40:52
  from '/home/qloapps/www/QloApps/admin/themes/default/template/controllers/orders/modals/_edit_room_booking.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.39',
  'unifunc' => 'content_67bb8edca70122_45351160',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'd28b42aa8cd8060c34ebbfb4b20c6919d80da778' => 
    array (
      0 => '/home/qloapps/www/QloApps/admin/themes/default/template/controllers/orders/modals/_edit_room_booking.tpl',
      1 => 1728563708,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:controllers/orders/modals/_edit_room_tab_content.tpl' => 1,
    'file:controllers/orders/modals/_partials/_room_extra_services_content.tpl' => 1,
  ),
),false)) {
function content_67bb8edca70122_45351160 (Smarty_Internal_Template $_smarty_tpl) {
?>
<div class="modal-body">
    <div id="edit_product">
        <ul class="nav nav-tabs" role="tablist">
            <li role="presentation" class="active">
                <a href="#edit_room_tab" role="tab" data-toggle="tab"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Rooms'),$_smarty_tpl ) );?>
</a>
            </li>
            <li role="presentation">
                <a href="#room_type_demands_desc" aria-controls="facilities" role="tab" data-toggle="tab"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Facilities'),$_smarty_tpl ) );?>
</a>
            </li>
            <li role="presentation">
                <a href="#room_type_service_product_desc" aria-controls="services" role="tab" data-toggle="tab"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Services'),$_smarty_tpl ) );?>
</a>
            </li>
        </ul>

        <div class="tab-content clearfix">
            <?php $_smarty_tpl->_subTemplateRender('file:controllers/orders/modals/_edit_room_tab_content.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

                        <?php $_smarty_tpl->_subTemplateRender('file:controllers/orders/modals/_partials/_room_extra_services_content.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
        </div>
    </div>

    <?php if ((isset($_smarty_tpl->tpl_vars['loaderImg']->value)) && $_smarty_tpl->tpl_vars['loaderImg']->value) {?>
        <div class="loading_overlay">
            <img src='<?php echo $_smarty_tpl->tpl_vars['loaderImg']->value;?>
' class="loading-img"/>
        </div>
    <?php }?>
</div><?php }
}
