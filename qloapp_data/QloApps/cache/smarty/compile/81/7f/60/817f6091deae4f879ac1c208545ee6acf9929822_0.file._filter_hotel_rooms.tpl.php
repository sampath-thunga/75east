<?php
/* Smarty version 3.1.39, created on 2025-02-24 02:40:52
  from '/home/qloapps/www/QloApps/admin/themes/default/template/controllers/orders/_filter_hotel_rooms.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.39',
  'unifunc' => 'content_67bb8edc7599f9_24462203',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '817f6091deae4f879ac1c208545ee6acf9929822' => 
    array (
      0 => '/home/qloapps/www/QloApps/admin/themes/default/template/controllers/orders/_filter_hotel_rooms.tpl',
      1 => 1728563708,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_67bb8edc7599f9_24462203 (Smarty_Internal_Template $_smarty_tpl) {
if (is_array($_smarty_tpl->tpl_vars['hotel_rooms_info']->value) && count($_smarty_tpl->tpl_vars['hotel_rooms_info']->value)) {?>
    <option value="" selected="selected">-</option>
    <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['hotel_rooms_info']->value, 'hotel_room');
$_smarty_tpl->tpl_vars['hotel_room']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['hotel_room']->value) {
$_smarty_tpl->tpl_vars['hotel_room']->do_else = false;
?>
        <option value="<?php echo $_smarty_tpl->tpl_vars['hotel_room']->value['id'];?>
"><?php echo $_smarty_tpl->tpl_vars['hotel_room']->value['room_num'];?>
, <?php echo $_smarty_tpl->tpl_vars['hotel_room']->value['room_type_name'];?>
, <?php echo $_smarty_tpl->tpl_vars['hotel_room']->value['hotel_name'];?>
</option>
    <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);
}
}
}
