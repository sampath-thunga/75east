<?php
/* Smarty version 3.1.39, created on 2025-02-24 02:40:53
  from '/home/qloapps/www/QloApps/admin/themes/default/template/controllers/orders/_booking_document_line.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.39',
  'unifunc' => 'content_67bb8edd48f024_06241723',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'ab31a22e26278a798098334b1e6d0e8ea951cb6c' => 
    array (
      0 => '/home/qloapps/www/QloApps/admin/themes/default/template/controllers/orders/_booking_document_line.tpl',
      1 => 1728563708,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_67bb8edd48f024_06241723 (Smarty_Internal_Template $_smarty_tpl) {
if (is_array($_smarty_tpl->tpl_vars['booking_documents']->value) && count($_smarty_tpl->tpl_vars['booking_documents']->value)) {?>
    <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['booking_documents']->value, 'booking_document');
$_smarty_tpl->tpl_vars['booking_document']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['booking_document']->value) {
$_smarty_tpl->tpl_vars['booking_document']->do_else = false;
?>
        <tr>
            <td class="text-center">
                <a href="<?php echo $_smarty_tpl->tpl_vars['link']->value->getAdminLink('AdminBookingDocument');?>
&action=getDocument&id_document=<?php echo $_smarty_tpl->tpl_vars['booking_document']->value['id_htl_booking_document'];?>
&is_preview=1" target="_blank">
                    <?php if ($_smarty_tpl->tpl_vars['booking_document']->value['file_type'] == HotelBookingDocument::FILE_TYPE_IMAGE) {?>
                        <img class="img img-responsive img-thumbnail" src="<?php echo $_smarty_tpl->tpl_vars['link']->value->getAdminLink('AdminBookingDocument');?>
&action=getDocument&id_document=<?php echo $_smarty_tpl->tpl_vars['booking_document']->value['id_htl_booking_document'];?>
&is_preview=1">
                    <?php } elseif ($_smarty_tpl->tpl_vars['booking_document']->value['file_type'] == HotelBookingDocument::FILE_TYPE_PDF) {?>
                        <img class="img img-responsive img-thumbnail" src="<?php echo $_smarty_tpl->tpl_vars['pdf_icon_link']->value;?>
">
                    <?php }?>
                </a>
            </td>
            <td class="text-left"><?php echo $_smarty_tpl->tpl_vars['booking_document']->value['title'];?>
</td>
            <td class="text-center"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['dateFormat'][0], array( array('date'=>$_smarty_tpl->tpl_vars['booking_document']->value['date_add'],'full'=>1),$_smarty_tpl ) );?>
</td>
            <td class="text-center">
                <a class="btn btn-info" href="<?php echo $_smarty_tpl->tpl_vars['link']->value->getAdminLink('AdminBookingDocument');?>
&action=getDocument&id_document=<?php echo $_smarty_tpl->tpl_vars['booking_document']->value['id_htl_booking_document'];?>
">
                    <i class="icon icon-cloud-download"></i>
                </a>
                <?php if ($_smarty_tpl->tpl_vars['can_edit']->value) {?>
                    <a class="btn btn-danger btn-delete-document" data-id-htl-booking-document="<?php echo $_smarty_tpl->tpl_vars['booking_document']->value['id_htl_booking_document'];?>
">
                        <i class="icon icon-trash"></i>
                    </a>
                <?php }?>
            </td>
        </tr>
    <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);
} else { ?>
    <tr>
        <td class="list-empty" colspan="4">
            <div class="list-empty-msg">
                <i class="icon-warning-sign list-empty-icon"></i>
                <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'No documents uploaded yet.'),$_smarty_tpl ) );?>

            </div>
        </td>
    </tr>
<?php }
}
}
