<?php
/* Smarty version 3.1.39, created on 2025-02-24 02:40:49
  from '/home/qloapps/www/QloApps/admin/themes/default/template/controllers/cart_rules/modal_confirm_bulk_delete.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.39',
  'unifunc' => 'content_67bb8ed9b7fc20_94971030',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '9344be190c3a8c7eb50f0086a434fbcc815f6236' => 
    array (
      0 => '/home/qloapps/www/QloApps/admin/themes/default/template/controllers/cart_rules/modal_confirm_bulk_delete.tpl',
      1 => 1728563708,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_67bb8ed9b7fc20_94971030 (Smarty_Internal_Template $_smarty_tpl) {
?><div class="modal-header">
    <button type="button" class="close" data-dismiss="modal"><i class="icon-remove-sign"></i></button>
    <h4 class="modal-title"><i class="icon icon-exclamation-triangle"></i>&nbsp;<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Confirm Delete'),$_smarty_tpl ) );?>
</h4>
    <?php if ((isset($_smarty_tpl->tpl_vars['cartRules']->value))) {?>
        <p><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'The following cart rules in your selection were created dynamically from refunds or credit slips. Please confirm if you also intend to delete these cart rules?'),$_smarty_tpl ) );?>
</p>
    <?php } else { ?>
        <p><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Are you sure, you want to delete the selected cart rules?'),$_smarty_tpl ) );?>
</p>

    <?php }?>
</div>
<?php if ((isset($_smarty_tpl->tpl_vars['cartRules']->value))) {?>
    <div class="modal-body">
        <div class="table-responsive">
            <table class="table">
                <thead>
                    <tr>
                        <th>
                        </th>
                        <th>
                            <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Cart Rule'),$_smarty_tpl ) );?>

                        </th>
                        <th>
                            <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Reason'),$_smarty_tpl ) );?>

                        </th>
                        <th>
                            <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Order'),$_smarty_tpl ) );?>

                        </th>
                        <th>
                            <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Amount'),$_smarty_tpl ) );?>

                        </th>
                    </tr>
                </thead>
                <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['cartRules']->value, 'cartRule');
$_smarty_tpl->tpl_vars['cartRule']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['cartRule']->value) {
$_smarty_tpl->tpl_vars['cartRule']->do_else = false;
?>
                    <tr>
                        <td>
                            <input type="checkbox" class="cart_rule_to_delete" value="<?php echo $_smarty_tpl->tpl_vars['cartRule']->value['id_cart_rule'];?>
" checked>
                        </td>
                        <td>
                            <a href="<?php echo $_smarty_tpl->tpl_vars['link']->value->getAdminLink('AdminCartRules');?>
&updatecart_rule&id_cart_rule=<?php echo $_smarty_tpl->tpl_vars['cartRule']->value['id_cart_rule'];?>
" target="_blank">#<?php echo $_smarty_tpl->tpl_vars['cartRule']->value['id_cart_rule'];?>
</a>
                        </td>
                        <td>
                            <?php if ($_smarty_tpl->tpl_vars['cartRule']->value['generated_by'] == CartRule::GENERATED_BY_REFUND) {?>
                                <b><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Generated against refund'),$_smarty_tpl ) );?>
</b>
                                (<a href="<?php echo $_smarty_tpl->tpl_vars['link']->value->getAdminLink('AdminOrderRefundRequests');?>
&vieworder_return&id_order_return=<?php echo $_smarty_tpl->tpl_vars['cartRule']->value['id_generated_by'];?>
" target="_blank">#<?php echo $_smarty_tpl->tpl_vars['cartRule']->value['id_generated_by'];?>
</a>)
                            <?php } elseif ($_smarty_tpl->tpl_vars['cartRule']->value['generated_by'] == CartRule::GENERATED_BY_ORDER_SLIP) {?>
                                <b><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Generated against credit slip'),$_smarty_tpl ) );?>
</b>
                                (<a href="<?php echo $_smarty_tpl->tpl_vars['link']->value->getAdminLink('AdminPdf');?>
&submitAction=generateOrderSlipPDF&id_order_slip=<?php echo $_smarty_tpl->tpl_vars['cartRule']->value['id_generated_by'];?>
" target="_blank">#<?php echo $_smarty_tpl->tpl_vars['cartRule']->value['id_generated_by'];?>
</a>)
                            <?php }?>
                            <?php if (!$_smarty_tpl->tpl_vars['cartRule']->value['cart_rule']->quantity) {?>
                                <span class="badge badge-danger"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Used'),$_smarty_tpl ) );?>
</span>
                            <?php }?>
                        </td>
                        <td>
                            <a href="<?php echo $_smarty_tpl->tpl_vars['link']->value->getAdminLink('AdminOrders');?>
&vieworder&id_order=<?php echo $_smarty_tpl->tpl_vars['cartRule']->value['order']->id;?>
" target="_blank">#<?php echo $_smarty_tpl->tpl_vars['cartRule']->value['order']->id;?>
</a>
                        </td>
                        <td>
                            <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['displayPrice'][0], array( array('price'=>$_smarty_tpl->tpl_vars['cartRule']->value['cart_rule']->reduction_amount,'currency'=>$_smarty_tpl->tpl_vars['cartRule']->value['cart_rule']->reduction_currency),$_smarty_tpl ) );?>

                        </td>

                    </tr>
                <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
            </table>
        </div>
    </div>
<?php }
}
}
