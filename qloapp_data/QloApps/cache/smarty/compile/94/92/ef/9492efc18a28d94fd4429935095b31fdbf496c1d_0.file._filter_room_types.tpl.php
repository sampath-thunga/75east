<?php
/* Smarty version 3.1.39, created on 2025-02-24 02:40:53
  from '/home/qloapps/www/QloApps/admin/themes/default/template/controllers/orders/_filter_room_types.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.39',
  'unifunc' => 'content_67bb8eddd19789_34554511',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '9492efc18a28d94fd4429935095b31fdbf496c1d' => 
    array (
      0 => '/home/qloapps/www/QloApps/admin/themes/default/template/controllers/orders/_filter_room_types.tpl',
      1 => 1728563708,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_67bb8eddd19789_34554511 (Smarty_Internal_Template $_smarty_tpl) {
if (is_array($_smarty_tpl->tpl_vars['room_types_info']->value) && count($_smarty_tpl->tpl_vars['room_types_info']->value)) {?>
    <option value="" selected="selected">-</option>
    <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['room_types_info']->value, 'room_type');
$_smarty_tpl->tpl_vars['room_type']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['room_type']->value) {
$_smarty_tpl->tpl_vars['room_type']->do_else = false;
?>
        <option value="<?php echo $_smarty_tpl->tpl_vars['room_type']->value['id_product'];?>
"><?php echo $_smarty_tpl->tpl_vars['room_type']->value['room_type'];?>
, <?php echo $_smarty_tpl->tpl_vars['room_type']->value['hotel_name'];?>
</option>
    <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);
}
}
}
