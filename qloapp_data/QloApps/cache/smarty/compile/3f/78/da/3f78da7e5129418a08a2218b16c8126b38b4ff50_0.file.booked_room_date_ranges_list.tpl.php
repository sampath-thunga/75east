<?php
/* Smarty version 3.1.39, created on 2025-02-24 02:40:47
  from '/home/qloapps/www/QloApps/admin/themes/default/template/controllers/products/booked_room_date_ranges_list.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.39',
  'unifunc' => 'content_67bb8ed73e7eb4_93657620',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '3f78da7e5129418a08a2218b16c8126b38b4ff50' => 
    array (
      0 => '/home/qloapps/www/QloApps/admin/themes/default/template/controllers/products/booked_room_date_ranges_list.tpl',
      1 => 1728563708,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_67bb8ed73e7eb4_93657620 (Smarty_Internal_Template $_smarty_tpl) {
echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'This room already has a booking for the selected date range.'),$_smarty_tpl ) );?>

<div class="row">
    <div class="col-xs-12">
        <span class="error_message_label"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Order ID'),$_smarty_tpl ) );?>
:</span> <a href="<?php echo $_smarty_tpl->tpl_vars['link']->value->getAdminLink('AdminOrders');?>
&id_order=<?php echo $_smarty_tpl->tpl_vars['orderDetails']->value->id_order;?>
&vieworder" target="_blank"><strong>#<?php echo intval($_smarty_tpl->tpl_vars['orderDetails']->value->id_order);?>
</strong></a>
    </div>
    <div class="col-xs-12">
        <span class="error_message_label"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Date From'),$_smarty_tpl ) );?>
:</span> <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['dateFormat'][0], array( array('date'=>$_smarty_tpl->tpl_vars['orderDetails']->value->date_from),$_smarty_tpl ) );?>

    </div>
    <div class="col-xs-12">
        <span class="error_message_label"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Date To'),$_smarty_tpl ) );?>
:</span> <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['dateFormat'][0], array( array('date'=>$_smarty_tpl->tpl_vars['orderDetails']->value->date_to),$_smarty_tpl ) );?>

    </div>
    <div>
    </div>
</div>
<?php }
}
