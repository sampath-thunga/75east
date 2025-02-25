<?php
/* Smarty version 3.1.39, created on 2025-02-24 02:40:50
  from '/home/qloapps/www/QloApps/themes/hotel-reservation-theme/order-detail.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.39',
  'unifunc' => 'content_67bb8eda155792_09499373',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '8d0598ccb3bf0d1ac71ca8ba1aa0f997f4bdb16d' => 
    array (
      0 => '/home/qloapps/www/QloApps/themes/hotel-reservation-theme/order-detail.tpl',
      1 => 1728563708,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:./_partials/order-room-detail.tpl' => 1,
    'file:./_partials/order-message.tpl' => 1,
  ),
),false)) {
function content_67bb8eda155792_09499373 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, false);
?>

<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_140181400567bb8ed9cc8d19_13229679', 'order_detail');
?>

<?php }
/* {block 'order_detail_heading'} */
class Block_81010747667bb8ed9cd7bd8_64988189 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

        <h1 class="page-heading bottom-indent">
            <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Booking Details'),$_smarty_tpl ) );?>

        </h1>
    <?php
}
}
/* {/block 'order_detail_heading'} */
/* {block 'errors'} */
class Block_68014955567bb8ed9cdb5c0_27715538 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

        <?php $_smarty_tpl->_subTemplateRender(((string)$_smarty_tpl->tpl_vars['tpl_dir']->value)."./errors.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, true);
?>
    <?php
}
}
/* {/block 'errors'} */
/* {block 'order_detail_subheading'} */
class Block_31824564967bb8ed9ce0078_25464264 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

            <div class="row">
                <div class="col-lg-12">
                    <div class="well well-md well-order-date">
                        <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Booking Reference ','sprintf'=>$_smarty_tpl->tpl_vars['order']->value->getUniqReference()),$_smarty_tpl ) );?>
<strong><?php echo $_smarty_tpl->tpl_vars['order']->value->getUniqReference();?>
</strong><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>' - placed on'),$_smarty_tpl ) );?>

                        <span title="<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['dateFormat'][0], array( array('date'=>$_smarty_tpl->tpl_vars['order']->value->date_add,'full'=>1),$_smarty_tpl ) );?>
"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['dateFormat'][0], array( array('date'=>$_smarty_tpl->tpl_vars['order']->value->date_add),$_smarty_tpl ) );?>
</span>
                    </div>
                </div>
            </div>
        <?php
}
}
/* {/block 'order_detail_subheading'} */
/* {block 'displayOrderDetail'} */
class Block_100420668467bb8ed9cf19e6_25269751 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

            <?php echo $_smarty_tpl->tpl_vars['HOOK_ORDERDETAILDISPLAYED']->value;?>

        <?php
}
}
/* {/block 'displayOrderDetail'} */
/* {block 'displayOrderDetailTopLeft'} */
class Block_208297208967bb8ed9cf4532_41601771 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

                    <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['hook'][0], array( array('h'=>'displayOrderDetailTopLeft','id_order'=>$_smarty_tpl->tpl_vars['order']->value->id),$_smarty_tpl ) );?>

                <?php
}
}
/* {/block 'displayOrderDetailTopLeft'} */
/* {block 'displayOrderDetailHotelDetailsAfter'} */
class Block_179122337967bb8ed9d08ef0_72686182 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

                                                <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['hook'][0], array( array('h'=>'displayOrderDetailHotelDetailsAfter','id_order'=>$_smarty_tpl->tpl_vars['order']->value->id),$_smarty_tpl ) );?>

                                            <?php
}
}
/* {/block 'displayOrderDetailHotelDetailsAfter'} */
/* {block 'order_detail_hotel_details'} */
class Block_172252793367bb8ed9cf7690_05983380 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

                    <div class="card hotel-details">
                        <div class="card-header">
                            <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Hotel Details'),$_smarty_tpl ) );?>

                        </div>
                        <div class="card-body">
                            <?php if (Validate::isLoadedObject($_smarty_tpl->tpl_vars['obj_hotel_branch_information']->value)) {?>
                                <div class="description-list">
                                    <dl class="">
                                        <div class="row">
                                            <dt class="col-xs-6 col-sm-3"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Hotel Name'),$_smarty_tpl ) );?>
</dt>
                                            <dd class="col-xs-6 col-sm-3"><?php echo $_smarty_tpl->tpl_vars['obj_hotel_branch_information']->value->hotel_name;?>
</dd>
                                            <dt class="col-xs-6 col-sm-3"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Phone Number'),$_smarty_tpl ) );?>
</dt>
                                            <dd class="col-xs-6 col-sm-3">
                                                <a href="tel:<?php if ($_smarty_tpl->tpl_vars['hotel_address_info']->value['phone_mobile']) {
echo $_smarty_tpl->tpl_vars['hotel_address_info']->value['phone_mobile'];
} else {
echo $_smarty_tpl->tpl_vars['hotel_address_info']->value['phone'];
}?>">
                                                    <?php if ($_smarty_tpl->tpl_vars['hotel_address_info']->value['phone_mobile']) {
echo $_smarty_tpl->tpl_vars['hotel_address_info']->value['phone_mobile'];
} else {
echo $_smarty_tpl->tpl_vars['hotel_address_info']->value['phone'];
}?>
                                                </a>
                                            </dd>
                                            <dt class="col-xs-6 col-sm-3"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Email'),$_smarty_tpl ) );?>
</dt>
                                            <dd class="col-xs-6 col-sm-3">
                                                <a href="mailto:<?php echo $_smarty_tpl->tpl_vars['obj_hotel_branch_information']->value->email;?>
" class="hotel-email"><?php echo $_smarty_tpl->tpl_vars['obj_hotel_branch_information']->value->email;?>
</a>
                                            </dd>
                                            <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_179122337967bb8ed9d08ef0_72686182', 'displayOrderDetailHotelDetailsAfter', $this->tplIndex);
?>

                                        </div>
                                    </dl>
                                </div>
                            <?php } else { ?>
                                <div class="card-text"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Hotel details not available.'),$_smarty_tpl ) );?>
</div>
                            <?php }?>
                        </div>
                    </div>
                <?php
}
}
/* {/block 'order_detail_hotel_details'} */
/* {block 'displayOrderDetailPaymentDetailsRow'} */
class Block_214130076467bb8ed9d4bbe4_79643767 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

                                <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['hook'][0], array( array('h'=>'displayOrderDetailPaymentDetailsRow','id_order'=>$_smarty_tpl->tpl_vars['order']->value->id),$_smarty_tpl ) );?>

                            <?php
}
}
/* {/block 'displayOrderDetailPaymentDetailsRow'} */
/* {block 'order_details_payment_details_mobile'} */
class Block_157027621467bb8ed9d0f222_79252021 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

                    <div class="card payment-details visible-xs visible-sm hidden-md hidden-lg">
                        <div class="card-header">
                            <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Payment Details'),$_smarty_tpl ) );?>

                        </div>
                        <div class="card-body">
                            <div class="detail-row">
                                <div class=" title"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Payment Method'),$_smarty_tpl ) );?>
</div>
                                <div class=" value payment-method">
                                    <?php if ($_smarty_tpl->tpl_vars['invoice']->value && $_smarty_tpl->tpl_vars['invoiceAllowed']->value) {?>
                                        <span class="icon-pdf"></span>
                                        <a target="_blank" href="<?php echo $_smarty_tpl->tpl_vars['link']->value->getPageLink('pdf-invoice',true);?>
?id_order=<?php echo intval($_smarty_tpl->tpl_vars['order']->value->id);
if ($_smarty_tpl->tpl_vars['is_guest']->value) {?>&amp;secure_key=<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['order']->value->secure_key, ENT_QUOTES, 'UTF-8', true);
}?>" title="<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Click here to download invoice.'),$_smarty_tpl ) );?>
">
                                            <span><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['order']->value->payment, ENT_QUOTES, 'UTF-8', true);?>
</span>
                                        </a>
                                    <?php } else { ?>
                                        <?php echo htmlspecialchars($_smarty_tpl->tpl_vars['order']->value->payment, ENT_QUOTES, 'UTF-8', true);?>

                                    <?php }?>
                                </div>
                            </div>

                            <div class="detail-row">
                                <div class="pull-left title"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Status'),$_smarty_tpl ) );?>
</div>
                                <div class="pull-right value status">
                                    <?php if ((isset($_smarty_tpl->tpl_vars['order_history']->value[0])) && $_smarty_tpl->tpl_vars['order_history']->value[0]) {?>
                                        <span<?php if ((isset($_smarty_tpl->tpl_vars['order_history']->value[0]['color'])) && $_smarty_tpl->tpl_vars['order_history']->value[0]['color']) {?> style="background-color:<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['order_history']->value[0]['color'], ENT_QUOTES, 'UTF-8', true);?>
30; border: 1px solid <?php echo htmlspecialchars($_smarty_tpl->tpl_vars['order_history']->value[0]['color'], ENT_QUOTES, 'UTF-8', true);?>
;" <?php }?> class="label">
                                            <?php if (in_array($_smarty_tpl->tpl_vars['order_history']->value[0]['id_order_state'],$_smarty_tpl->tpl_vars['overbooking_order_states']->value)) {?>
                                                <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Order Not Confirmed'),$_smarty_tpl ) );?>

                                            <?php } else { ?>
                                                <?php echo htmlspecialchars($_smarty_tpl->tpl_vars['order_history']->value[0]['ostate_name'], ENT_QUOTES, 'UTF-8', true);?>

                                            <?php }?>
                                        </span>
                                    <?php } else { ?>
                                        <span class="processing"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Processing'),$_smarty_tpl ) );?>
</span>
                                    <?php }?>
                                </div>
                            </div>

                            <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_214130076467bb8ed9d4bbe4_79643767', 'displayOrderDetailPaymentDetailsRow', $this->tplIndex);
?>

                        </div>
                    </div>
                <?php
}
}
/* {/block 'order_details_payment_details_mobile'} */
/* {block 'displayOrderDetailHotelLocationAfter'} */
class Block_13432135967bb8ed9d7d4d4_12712873 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

                                <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['hook'][0], array( array('h'=>'displayOrderDetailHotelLocationAfter','id_order'=>$_smarty_tpl->tpl_vars['order']->value->id),$_smarty_tpl ) );?>

                            <?php
}
}
/* {/block 'displayOrderDetailHotelLocationAfter'} */
/* {block 'order_detail_hotel_location_mobile'} */
class Block_145269810667bb8ed9d50193_63271938 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

                    <div class="card hotel-location visible-xs visible-sm hidden-md hidden-lg">
                        <div class="card-header">
                            <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Hotel Location'),$_smarty_tpl ) );?>

                        </div>
                        <div class="card-body">
                            <p class="card-subtitle">
                                <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Address'),$_smarty_tpl ) );?>

                            </p>

                            <?php if ((isset($_smarty_tpl->tpl_vars['hotel_address_info']->value)) && $_smarty_tpl->tpl_vars['hotel_address_info']->value) {?>
                                <p class="hotel-address">
                                    <?php echo $_smarty_tpl->tpl_vars['hotel_address_info']->value['address1'];?>
,
                                    <?php ob_start();
echo $_smarty_tpl->tpl_vars['hotel_address_info']->value['address2'];
$_prefixVariable63 = ob_get_clean();
if ($_prefixVariable63) {
echo $_smarty_tpl->tpl_vars['hotel_address_info']->value['address2'];?>
,<?php }?>
                                    <?php echo $_smarty_tpl->tpl_vars['hotel_address_info']->value['city'];?>
,
                                    <?php ob_start();
echo $_smarty_tpl->tpl_vars['hotel_address_info']->value['state'];
$_prefixVariable64 = ob_get_clean();
if ($_prefixVariable64) {
echo $_smarty_tpl->tpl_vars['hotel_address_info']->value['state'];?>
,<?php }?>
                                    <?php echo $_smarty_tpl->tpl_vars['hotel_address_info']->value['country'];?>
, <?php echo $_smarty_tpl->tpl_vars['hotel_address_info']->value['postcode'];?>

                                </p>
                            <?php } else { ?>
                                <div class="card-text"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Hotel location not available.'),$_smarty_tpl ) );?>
</div>
                            <?php }?>

                            <?php if ((floatval($_smarty_tpl->tpl_vars['obj_hotel_branch_information']->value->latitude) != 0 && floatval($_smarty_tpl->tpl_vars['obj_hotel_branch_information']->value->longitude) != 0) && $_smarty_tpl->tpl_vars['view_on_map']->value) {?>
                                <div class="hotel-location-map">
                                    <div class="booking-hotel-map-container"></div>
                                </div>
                            <?php }?>

                            <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_13432135967bb8ed9d7d4d4_12712873', 'displayOrderDetailHotelLocationAfter', $this->tplIndex);
?>

                        </div>
                    </div>
                <?php
}
}
/* {/block 'order_detail_hotel_location_mobile'} */
/* {block 'order_detail_refund_requests'} */
class Block_51348832067bb8ed9d830c5_44162733 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

                    <?php if ((isset($_smarty_tpl->tpl_vars['refundReqBookings']->value)) && $_smarty_tpl->tpl_vars['refundReqBookings']->value) {?>
                        <div class="alert alert-info-light cancel_requests_link_wrapper">
                            <i class="icon-info-circle"></i>
                            <?php if (count($_smarty_tpl->tpl_vars['refundReqBookings']->value) <= 1) {?>
                                <span><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Your cancellation request for 1 room is being processed. To check request status'),$_smarty_tpl ) );?>
 <a target="_blank" href="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['link']->value->getPageLink('order-follow'), ENT_QUOTES, 'UTF-8', true);?>
?id_order=<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['order']->value->id, ENT_QUOTES, 'UTF-8', true);?>
"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'click here.'),$_smarty_tpl ) );?>
</a>
                            <?php } else { ?>
                                <span><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Your cancellation request for %d rooms is being processed. To check request statuses','sprintf'=>array(count($_smarty_tpl->tpl_vars['refundReqBookings']->value))),$_smarty_tpl ) );?>
 <a target="_blank" href="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['link']->value->getPageLink('order-follow'), ENT_QUOTES, 'UTF-8', true);?>
?id_order=<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['order']->value->id, ENT_QUOTES, 'UTF-8', true);?>
"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'click here.'),$_smarty_tpl ) );?>
</a>
                            <?php }?>
                        </div>
                    <?php }?>
                <?php
}
}
/* {/block 'order_detail_refund_requests'} */
/* {block 'displayOrderDetailRoomDetailsBefore'} */
class Block_111411715367bb8ed9d9ae93_58383688 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

                    <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['hook'][0], array( array('h'=>'displayOrderDetailRoomDetailsBefore','id_order'=>$_smarty_tpl->tpl_vars['order']->value->id),$_smarty_tpl ) );?>

                <?php
}
}
/* {/block 'displayOrderDetailRoomDetailsBefore'} */
/* {block 'displayBookingAction'} */
class Block_160791876867bb8ed9daa3f8_16200440 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

                                            <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['hook'][0], array( array('h'=>'displayBookingAction','id_order'=>$_smarty_tpl->tpl_vars['order']->value->id),$_smarty_tpl ) );?>

                                        <?php
}
}
/* {/block 'displayBookingAction'} */
/* {block 'order_room_detail'} */
class Block_161237353567bb8ed9db0f61_47091386 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

                                                <?php $_smarty_tpl->_subTemplateRender('file:./_partials/order-room-detail.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, true);
?>
                                            <?php
}
}
/* {/block 'order_room_detail'} */
/* {block 'displayOrderDetailRoomDetailsRoomsAfter'} */
class Block_67233499967bb8ed9db72f5_50757762 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

                                        <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['hook'][0], array( array('h'=>'displayOrderDetailRoomDetailsRoomsAfter','id_order'=>$_smarty_tpl->tpl_vars['order']->value->id),$_smarty_tpl ) );?>

                                    <?php
}
}
/* {/block 'displayOrderDetailRoomDetailsRoomsAfter'} */
/* {block 'order_detail_room_details'} */
class Block_141493028967bb8ed9d9eb24_28602716 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

                    <div class="card room-details">
                        <div class="card-header">
                            <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Room Details'),$_smarty_tpl ) );?>

                            <div class="booking-actions-wrap">
                                <div class="row">
                                    <div class="col-xs-12 clearfix">
                                        <?php if ($_smarty_tpl->tpl_vars['refund_allowed']->value) {?>
                                            <?php if (!$_smarty_tpl->tpl_vars['completeRefundRequestOrCancel']->value) {?>
                                                <a id="order_refund_request" class="btn btn-default pull-right" href="#" title="<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Proceed to refund'),$_smarty_tpl ) );?>
"><span><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Cancel Bookings'),$_smarty_tpl ) );?>
</span></a>
                                            <?php }?>
                                            <?php if ((isset($_smarty_tpl->tpl_vars['id_cms_refund_policy']->value)) && $_smarty_tpl->tpl_vars['id_cms_refund_policy']->value) {?>
                                                <a target="_blank" class="btn btn-default pull-right refund_policy_link" href="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['link']->value->getCMSLink($_smarty_tpl->tpl_vars['id_cms_refund_policy']->value), ENT_QUOTES, 'UTF-8', true);?>
"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Refund Policies'),$_smarty_tpl ) );?>
</a>
                                            <?php }?>
                                        <?php }?>
                                        <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_160791876867bb8ed9daa3f8_16200440', 'displayBookingAction', $this->tplIndex);
?>

                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="card-body">
                            <?php if ((isset($_smarty_tpl->tpl_vars['cart_htl_data']->value)) && $_smarty_tpl->tpl_vars['cart_htl_data']->value) {?>
                                <div class="rooms-list">
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
                                            <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_161237353567bb8ed9db0f61_47091386', 'order_room_detail', $this->tplIndex);
?>

                                        <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
                                    <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>

                                    <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_67233499967bb8ed9db72f5_50757762', 'displayOrderDetailRoomDetailsRoomsAfter', $this->tplIndex);
?>

                                </div>
                            <?php } else { ?>
                                <div class="no-rooms card-text"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Room details not available.'),$_smarty_tpl ) );?>
</div>
                            <?php }?>
                        </div>
                    </div>
                <?php
}
}
/* {/block 'order_detail_room_details'} */
/* {block 'displayOrderDetailPaymentSummaryRow'} */
class Block_164929555067bb8ed9df1a58_22147630 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

                                            <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['hook'][0], array( array('h'=>'displayOrderDetailPaymentSummaryRow','id_order'=>$_smarty_tpl->tpl_vars['order']->value->id),$_smarty_tpl ) );?>

                                        <?php
}
}
/* {/block 'displayOrderDetailPaymentSummaryRow'} */
/* {block 'displayOrderDetailPaymentSummaryAfter'} */
class Block_34404661667bb8ed9df39e1_77154453 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

                                <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['hook'][0], array( array('h'=>'displayOrderDetailPaymentSummaryAfter','id_order'=>$_smarty_tpl->tpl_vars['order']->value->id),$_smarty_tpl ) );?>

                            <?php
}
}
/* {/block 'displayOrderDetailPaymentSummaryAfter'} */
/* {block 'order_detail_payment_summary_mobile'} */
class Block_100676893467bb8ed9dbbfb1_66582620 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

                    <div class="card payment-summary visible-xs visible-sm hidden-md hidden-lg">
                        <div class="card-header">
                            <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Payment Summary'),$_smarty_tpl ) );?>

                        </div>
                        <div class="card-body">
                            <div class="prices-breakdown-table">
                                <table class="table table-sm table-responsive table-summary">
                                    <tbody>
                                        <?php $_smarty_tpl->_assignInScope('room_price_tax_excl', $_smarty_tpl->tpl_vars['order']->value->getTotalProductsWithoutTaxes(false,true));?>
                                        <?php $_smarty_tpl->_assignInScope('room_price_tax_incl', $_smarty_tpl->tpl_vars['order']->value->getTotalProductsWithTaxes(false,true));?>
                                        <?php $_smarty_tpl->_assignInScope('additional_service_price_tax_excl', ($_smarty_tpl->tpl_vars['order']->value->getTotalProductsWithoutTaxes(false,false,Product::SERVICE_PRODUCT_WITH_ROOMTYPE)+$_smarty_tpl->tpl_vars['total_demands_price_te']->value));?>
                                        <?php $_smarty_tpl->_assignInScope('additional_service_price_tax_incl', ($_smarty_tpl->tpl_vars['order']->value->getTotalProductsWithTaxes(false,false,Product::SERVICE_PRODUCT_WITH_ROOMTYPE)+$_smarty_tpl->tpl_vars['total_demands_price_ti']->value));?>
                                        <?php $_smarty_tpl->_assignInScope('total_tax_without_discount', (($_smarty_tpl->tpl_vars['room_price_tax_incl']->value-$_smarty_tpl->tpl_vars['room_price_tax_excl']->value)+($_smarty_tpl->tpl_vars['additional_service_price_tax_incl']->value-$_smarty_tpl->tpl_vars['additional_service_price_tax_excl']->value)));?>
                                        <?php if ($_smarty_tpl->tpl_vars['priceDisplay']->value && $_smarty_tpl->tpl_vars['use_tax']->value && $_smarty_tpl->tpl_vars['room_price_tax_excl']->value) {?>
                                            <tr>
                                                <td><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Total rooms cost (tax excl.)'),$_smarty_tpl ) );?>
</td>
                                                <td class="text-right">
                                                    <span class="price"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['displayWtPriceWithCurrency'][0], array( array('price'=>($_smarty_tpl->tpl_vars['room_price_tax_excl']->value+$_smarty_tpl->tpl_vars['additional_service_price_tax_excl']->value-$_smarty_tpl->tpl_vars['total_convenience_fee_te']->value),'currency'=>$_smarty_tpl->tpl_vars['currency']->value),$_smarty_tpl ) );?>
</span>
                                                </td>
                                            </tr>
                                        <?php } else { ?>
                                            <tr>
                                                <td><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Total Rooms Cost'),$_smarty_tpl ) );?>
 <?php if ($_smarty_tpl->tpl_vars['use_tax']->value) {
echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'(tax incl.)'),$_smarty_tpl ) );
}?> </td>
                                                <td class="text-right">
                                                    <span class="price"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['displayWtPriceWithCurrency'][0], array( array('price'=>($_smarty_tpl->tpl_vars['room_price_tax_incl']->value+$_smarty_tpl->tpl_vars['additional_service_price_tax_incl']->value-$_smarty_tpl->tpl_vars['total_convenience_fee_ti']->value),'currency'=>$_smarty_tpl->tpl_vars['currency']->value),$_smarty_tpl ) );?>
</span>
                                                </td>
                                            </tr>
                                        <?php }?>

                                        <?php if ($_smarty_tpl->tpl_vars['priceDisplay']->value && $_smarty_tpl->tpl_vars['use_tax']->value && $_smarty_tpl->tpl_vars['total_convenience_fee_te']->value) {?>
                                            <tr>
                                                <td><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Total Convenience Fees (tax excl.)'),$_smarty_tpl ) );?>
</td>
                                                <td class="text-right">
                                                    <span class="price"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['displayWtPriceWithCurrency'][0], array( array('price'=>$_smarty_tpl->tpl_vars['total_convenience_fee_te']->value,'currency'=>$_smarty_tpl->tpl_vars['currency']->value),$_smarty_tpl ) );?>
</span>
                                                </td>
                                            </tr>
                                        <?php } elseif ($_smarty_tpl->tpl_vars['total_convenience_fee_ti']->value) {?>
                                            <tr>
                                                <td><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Total Convenience Fees (tax incl.)'),$_smarty_tpl ) );?>
</td>
                                                <td class="text-right">
                                                    <span class="price"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['displayWtPriceWithCurrency'][0], array( array('price'=>$_smarty_tpl->tpl_vars['total_convenience_fee_ti']->value,'currency'=>$_smarty_tpl->tpl_vars['currency']->value),$_smarty_tpl ) );?>
</span>
                                                </td>
                                            </tr>
                                        <?php }?>

                                        <tr class="totalprice item">
                                            <td><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Total Tax'),$_smarty_tpl ) );?>
</td>
                                            <td class="text-right">
                                                <span class="price"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['displayWtPriceWithCurrency'][0], array( array('price'=>($_smarty_tpl->tpl_vars['total_tax_without_discount']->value),'currency'=>$_smarty_tpl->tpl_vars['currency']->value),$_smarty_tpl ) );?>
</span>
                                            </td>
                                        </tr>

                                        <?php if ($_smarty_tpl->tpl_vars['order']->value->total_discounts > 0) {?>
                                            <tr>
                                                <td><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Total Vouchers'),$_smarty_tpl ) );?>
</td>
                                                <td class="text-right">
                                                    <span class="price price-discount">-<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['displayWtPriceWithCurrency'][0], array( array('price'=>$_smarty_tpl->tpl_vars['order']->value->total_discounts,'currency'=>$_smarty_tpl->tpl_vars['currency']->value,'convert'=>1),$_smarty_tpl ) );?>
</span>
                                                </td>
                                            </tr>
                                        <?php }?>
                                        <tr class="totalprice item">
                                            <td><strong><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Final Booking Total'),$_smarty_tpl ) );?>
<strong></td>
                                            <td class="text-right">
                                                <strong><span class="price"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['displayWtPriceWithCurrency'][0], array( array('price'=>$_smarty_tpl->tpl_vars['order']->value->total_paid,'currency'=>$_smarty_tpl->tpl_vars['currency']->value),$_smarty_tpl ) );?>
</span></strong>
                                            </td>
                                        </tr>

                                        <?php if ((isset($_smarty_tpl->tpl_vars['refundReqBookings']->value)) && $_smarty_tpl->tpl_vars['refundReqBookings']->value) {?>
                                            <tr class="totalprice item">
                                                <td><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'* Refunded Amount'),$_smarty_tpl ) );?>
</td>
                                                <td class="text-right">
                                                    <span class="price"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['displayWtPriceWithCurrency'][0], array( array('price'=>$_smarty_tpl->tpl_vars['refundedAmount']->value,'currency'=>$_smarty_tpl->tpl_vars['currency']->value),$_smarty_tpl ) );?>
</span>
                                                </td>
                                            </tr>
                                        <?php }?>

                                        <?php if ($_smarty_tpl->tpl_vars['order']->value->total_paid_tax_incl > $_smarty_tpl->tpl_vars['order']->value->total_paid_real) {?>
                                            <tr class="totalprice item">
                                                <td><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Due Amount'),$_smarty_tpl ) );?>
</td>
                                                <td class="text-right">
                                                    <span class="price"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['displayWtPriceWithCurrency'][0], array( array('price'=>($_smarty_tpl->tpl_vars['order']->value->total_paid_tax_incl-$_smarty_tpl->tpl_vars['order']->value->total_paid_real),'currency'=>$_smarty_tpl->tpl_vars['currency']->value),$_smarty_tpl ) );?>
</span>
                                                </td>
                                            </tr>
                                        <?php }?>

                                        <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_164929555067bb8ed9df1a58_22147630', 'displayOrderDetailPaymentSummaryRow', $this->tplIndex);
?>

                                    </tbody>
                                </table>
                            </div>

                            <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_34404661667bb8ed9df39e1_77154453', 'displayOrderDetailPaymentSummaryAfter', $this->tplIndex);
?>

                        </div>
                    </div>
                <?php
}
}
/* {/block 'order_detail_payment_summary_mobile'} */
/* {block 'displayOrderDetailGuestDetailsRow'} */
class Block_209720134467bb8ed9e65f68_74245439 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

                                            <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['hook'][0], array( array('h'=>'displayOrderDetailGuestDetailsRow','id_order'=>$_smarty_tpl->tpl_vars['order']->value->id),$_smarty_tpl ) );?>

                                        <?php
}
}
/* {/block 'displayOrderDetailGuestDetailsRow'} */
/* {block 'displayOrderDetailGuestDetailsAfter'} */
class Block_117357621167bb8ed9e67f18_27192746 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

                                <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['hook'][0], array( array('h'=>'displayOrderDetailGuestDetailsAfter','id_order'=>$_smarty_tpl->tpl_vars['order']->value->id),$_smarty_tpl ) );?>

                            <?php
}
}
/* {/block 'displayOrderDetailGuestDetailsAfter'} */
/* {block 'order_detail_guest_details_mobile'} */
class Block_9543749667bb8ed9e00fc6_65443068 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

                    <div class="card guest-details visible-xs visible-sm hidden-md hidden-lg">
                        <div class="card-header">
                            <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Guest Details'),$_smarty_tpl ) );?>

                        </div>
                        <div class="card-body">
                            <div class="guest-details-table">
                                <table class="table table-sm table-responsive table-summary">
                                    <tbody>
                                        <?php if ($_smarty_tpl->tpl_vars['customerGuestDetail']->value) {?>
                                            <?php if ((isset($_smarty_tpl->tpl_vars['customerGuestDetail']->value->firstname)) && $_smarty_tpl->tpl_vars['customerGuestDetail']->value->firstname) {?>
                                                <tr>
                                                    <td><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Name'),$_smarty_tpl ) );?>
</td>
                                                    <td class="text-right"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['customerGuestDetail']->value->firstname, ENT_QUOTES, 'UTF-8', true);?>
 <?php echo htmlspecialchars($_smarty_tpl->tpl_vars['customerGuestDetail']->value->lastname, ENT_QUOTES, 'UTF-8', true);?>
</td>
                                                </tr>
                                            <?php }?>
                                            <?php if ((isset($_smarty_tpl->tpl_vars['customerGuestDetail']->value->email)) && $_smarty_tpl->tpl_vars['customerGuestDetail']->value->email) {?>
                                                <tr>
                                                    <td><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Email'),$_smarty_tpl ) );?>
</td>
                                                    <td class="text-right"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['customerGuestDetail']->value->email, ENT_QUOTES, 'UTF-8', true);?>
</td>
                                                </tr>
                                            <?php }?>
                                            <?php if ((isset($_smarty_tpl->tpl_vars['customerGuestDetail']->value->phone)) && $_smarty_tpl->tpl_vars['customerGuestDetail']->value->phone) {?>
                                                <tr>
                                                    <td><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Mobile'),$_smarty_tpl ) );?>
</td>
                                                    <td class="text-right"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['customerGuestDetail']->value->phone, ENT_QUOTES, 'UTF-8', true);?>
</td>
                                                </tr>
                                            <?php }?>
                                        <?php } else { ?>
                                            <tr>
                                                <td><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Name'),$_smarty_tpl ) );?>
</td>
                                                <td class="text-right">
                                                    <?php if ((isset($_smarty_tpl->tpl_vars['address_invoice']->value->firstname)) && $_smarty_tpl->tpl_vars['address_invoice']->value->firstname) {?>
                                                        <?php echo htmlspecialchars($_smarty_tpl->tpl_vars['address_invoice']->value->firstname, ENT_QUOTES, 'UTF-8', true);?>
 <?php echo htmlspecialchars($_smarty_tpl->tpl_vars['address_invoice']->value->lastname, ENT_QUOTES, 'UTF-8', true);?>

                                                    <?php } elseif ((isset($_smarty_tpl->tpl_vars['guestInformations']->value['firstname'])) && $_smarty_tpl->tpl_vars['guestInformations']->value['firstname']) {?>
                                                        <?php echo htmlspecialchars($_smarty_tpl->tpl_vars['guestInformations']->value['firstname'], ENT_QUOTES, 'UTF-8', true);?>
 <?php echo htmlspecialchars($_smarty_tpl->tpl_vars['guestInformations']->value['lastname'], ENT_QUOTES, 'UTF-8', true);?>

                                                    <?php }?>
                                                </td>
                                            </tr>

                                            <tr>
                                                <td><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Email'),$_smarty_tpl ) );?>
</td>
                                                <td class="text-right"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['guestInformations']->value['email'], ENT_QUOTES, 'UTF-8', true);?>
</td>
                                            </tr>

                                            <?php if ((isset($_smarty_tpl->tpl_vars['guestInformations']->value['phone'])) && $_smarty_tpl->tpl_vars['guestInformations']->value['phone']) {?>
                                                <tr>
                                                    <td><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Phone'),$_smarty_tpl ) );?>
</td>
                                                    <td class="text-right"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['guestInformations']->value['phone'], ENT_QUOTES, 'UTF-8', true);?>
 </td>
                                                </tr>
                                            <?php }?>

                                            <?php if ((isset($_smarty_tpl->tpl_vars['address_invoice']->value->phone_mobile)) && $_smarty_tpl->tpl_vars['address_invoice']->value->phone_mobile) {?>
                                                <tr>
                                                    <td><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Mobile'),$_smarty_tpl ) );?>
</td>
                                                    <td class="text-right"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['address_invoice']->value->phone_mobile, ENT_QUOTES, 'UTF-8', true);?>
</td>
                                                </tr>
                                            <?php }?>

                                            <?php if ((isset($_smarty_tpl->tpl_vars['address_invoice']->value->phone)) && $_smarty_tpl->tpl_vars['address_invoice']->value->phone) {?>
                                                <tr>
                                                    <td><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Phone'),$_smarty_tpl ) );?>
</td>
                                                    <td class="text-right"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['address_invoice']->value->phone, ENT_QUOTES, 'UTF-8', true);?>
</td>
                                                </tr>
                                            <?php }?>
                                        <?php }?>

                                        <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_209720134467bb8ed9e65f68_74245439', 'displayOrderDetailGuestDetailsRow', $this->tplIndex);
?>

                                    </tbody>
                                </table>
                            </div>

                            <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_117357621167bb8ed9e67f18_27192746', 'displayOrderDetailGuestDetailsAfter', $this->tplIndex);
?>

                        </div>
                    </div>
                <?php
}
}
/* {/block 'order_detail_guest_details_mobile'} */
/* {block 'displayOrderDetailPoliciesTab'} */
class Block_16113735067bb8ed9e711d5_14957208 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

                                        <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['hook'][0], array( array('h'=>'displayOrderDetailPoliciesTab','id_order'=>$_smarty_tpl->tpl_vars['order']->value->id),$_smarty_tpl ) );?>

                                    <?php
}
}
/* {/block 'displayOrderDetailPoliciesTab'} */
/* {block 'displayOrderDetailPoliciesTabContent'} */
class Block_58756398967bb8ed9e95979_64533025 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

                                        <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['hook'][0], array( array('h'=>'displayOrderDetailPoliciesTabContent','id_order'=>$_smarty_tpl->tpl_vars['order']->value->id),$_smarty_tpl ) );?>

                                    <?php
}
}
/* {/block 'displayOrderDetailPoliciesTabContent'} */
/* {block 'order_detail_hotel_policies'} */
class Block_117565853467bb8ed9e6a9e2_01426377 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

                    <?php $_smarty_tpl->_assignInScope('has_general_hotel_policies', ((isset($_smarty_tpl->tpl_vars['obj_hotel_branch_information']->value->policies)) && $_smarty_tpl->tpl_vars['obj_hotel_branch_information']->value->policies));?>
                    <?php $_smarty_tpl->_assignInScope('has_refund_hotel_policies', ($_smarty_tpl->tpl_vars['obj_hotel_branch_information']->value->isRefundable() && $_smarty_tpl->tpl_vars['hotel_refund_rules']->value));?>
                    <?php if ($_smarty_tpl->tpl_vars['has_general_hotel_policies']->value || $_smarty_tpl->tpl_vars['has_refund_hotel_policies']->value) {?>
                        <div class="card hotel-policies card-tabs">
                            <div class="card-header">
                                <ul class="nav nav-tabs">
                                    <?php if ($_smarty_tpl->tpl_vars['has_general_hotel_policies']->value) {?>
                                        <li class="active">
                                            <a href="#tab-hotel-policies-general" data-toggle="tab"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Hotel Policies'),$_smarty_tpl ) );?>
</a>
                                        </li>
                                    <?php }?>
                                    <?php if ($_smarty_tpl->tpl_vars['has_refund_hotel_policies']->value) {?>
                                        <li <?php if (!$_smarty_tpl->tpl_vars['has_general_hotel_policies']->value) {?>class="active"<?php }?>>
                                            <a href="#tab-hotel-policies-refund" data-toggle="tab"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Refund Policies'),$_smarty_tpl ) );?>
</a>
                                        </li>
                                    <?php }?>
                                    <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_16113735067bb8ed9e711d5_14957208', 'displayOrderDetailPoliciesTab', $this->tplIndex);
?>

                                </ul>
                            </div>
                            <div class="card-body">
                                <div class="tab-content">
                                    <?php if ($_smarty_tpl->tpl_vars['has_general_hotel_policies']->value) {?>
                                        <div id="tab-hotel-policies-general" class="tab-pane active">
                                            <div class="card-text"><?php echo $_smarty_tpl->tpl_vars['obj_hotel_branch_information']->value->policies;?>
</div>
                                        </div>
                                    <?php }?>
                                    <?php if ($_smarty_tpl->tpl_vars['has_refund_hotel_policies']->value) {?>
                                        <div id="tab-hotel-policies-refund" class="tab-pane<?php if (!$_smarty_tpl->tpl_vars['has_general_hotel_policies']->value) {?>active<?php }?>">
                                            <div class="refund-policies-list">
                                                <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['hotel_refund_rules']->value, 'hotel_refund_rule', false, NULL, 'foreach_refund_rules', array (
  'iteration' => true,
));
$_smarty_tpl->tpl_vars['hotel_refund_rule']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['hotel_refund_rule']->value) {
$_smarty_tpl->tpl_vars['hotel_refund_rule']->do_else = false;
$_smarty_tpl->tpl_vars['__smarty_foreach_foreach_refund_rules']->value['iteration']++;
?>
                                                    <div class="refund-policy">
                                                        <p class="refund-rule-name"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'%s. ','sprintf'=>array((isset($_smarty_tpl->tpl_vars['__smarty_foreach_foreach_refund_rules']->value['iteration']) ? $_smarty_tpl->tpl_vars['__smarty_foreach_foreach_refund_rules']->value['iteration'] : null))),$_smarty_tpl ) );
echo htmlspecialchars($_smarty_tpl->tpl_vars['hotel_refund_rule']->value['name'], ENT_QUOTES, 'UTF-8', true);?>
</p>
                                                        <div class="card-text refund-rule-description"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['hotel_refund_rule']->value['description'], ENT_QUOTES, 'UTF-8', true);?>
</div>
                                                    </div>
                                                <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
                                            </div>
                                        </div>
                                    <?php }?>
                                    <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_58756398967bb8ed9e95979_64533025', 'displayOrderDetailPoliciesTabContent', $this->tplIndex);
?>

                                </div>
                            </div>
                        </div>
                    <?php }?>
                <?php
}
}
/* {/block 'order_detail_hotel_policies'} */
/* {block 'order_message'} */
class Block_115564312367bb8ed9ea16f6_15085690 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

                                            <?php $_smarty_tpl->_subTemplateRender('file:./_partials/order-message.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, true);
?>
                                        <?php
}
}
/* {/block 'order_message'} */
/* {block 'order_detail_order_messages'} */
class Block_56553134667bb8ed9e9a141_83176592 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

                    <?php if (!$_smarty_tpl->tpl_vars['is_guest']->value) {?>
                        <div class="card order-messages <?php if (!count($_smarty_tpl->tpl_vars['messages']->value)) {?>hide<?php }?>">
                            <div class="card-header">
                                <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Messages'),$_smarty_tpl ) );?>

                            </div>

                            <div class="card-body">
                                <div class="messages-list card-text">
                                    <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['messages']->value, 'message');
$_smarty_tpl->tpl_vars['message']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['message']->value) {
$_smarty_tpl->tpl_vars['message']->do_else = false;
?>
                                        <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_115564312367bb8ed9ea16f6_15085690', 'order_message', $this->tplIndex);
?>

                                    <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
                                </div>
                            </div>
                        </div>
                    <?php }?>
                <?php
}
}
/* {/block 'order_detail_order_messages'} */
/* {block 'displayOrderDetailMessagesBefore'} */
class Block_199212025767bb8ed9ea4627_81667663 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

                    <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['hook'][0], array( array('h'=>'displayOrderDetailMessagesBefore','id_order'=>$_smarty_tpl->tpl_vars['order']->value->id),$_smarty_tpl ) );?>

                <?php
}
}
/* {/block 'displayOrderDetailMessagesBefore'} */
/* {block 'order_detail_add_order_messages_form'} */
class Block_177881902667bb8ed9eac718_75275040 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

                                    <form action="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['link']->value->getPageLink('order-detail',true), ENT_QUOTES, 'UTF-8', true);?>
" method="post" class="std" id="sendOrderMessage">
                                        <div class="form-group select-room-type">
                                            <label for="id_product"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Room Type'),$_smarty_tpl ) );?>
</label>

                                            <select name="id_product" class="form-control">
                                                <option value="0"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'-- Choose --'),$_smarty_tpl ) );?>
</option>
                                                <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['roomTypes']->value, 'product');
$_smarty_tpl->tpl_vars['product']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['product']->value) {
$_smarty_tpl->tpl_vars['product']->do_else = false;
?>
                                                    <?php if ($_smarty_tpl->tpl_vars['product']->value['is_booking_product']) {?>
                                                        <option value="<?php echo $_smarty_tpl->tpl_vars['product']->value['product_id'];?>
"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['product']->value['product_name'], ENT_QUOTES, 'UTF-8', true);?>
</option>
                                                    <?php }?>
                                                <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
                                            </select>
                                        </div>

                                        <p class="form-group textarea">
                                            <textarea class="form-control" rows="3" name="msgText"></textarea>
                                        </p>

                                        <div class="submit">
                                            <input type="hidden" name="id_order" value="<?php echo htmlspecialchars(intval($_smarty_tpl->tpl_vars['order']->value->id), ENT_QUOTES, 'UTF-8', true);?>
" />
                                            <input type="submit" class="unvisible" name="submitMessage" value="<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Send'),$_smarty_tpl ) );?>
" />
                                            <button type="submit" name="submitMessage" id="submitMessage" class="button btn button-medium"><span><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Send'),$_smarty_tpl ) );?>
</span></button>
                                        </div>
                                    </form>
                                <?php
}
}
/* {/block 'order_detail_add_order_messages_form'} */
/* {block 'order_detail_add_order_messages'} */
class Block_136433690667bb8ed9ea8232_40920482 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

                    <?php if (!$_smarty_tpl->tpl_vars['is_guest']->value) {?>
                        <div class="card add-order-message" id="add-order-message">
                            <div class="card-header">
                                <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Add a Message'),$_smarty_tpl ) );?>


                                <p class="card-subheader text-muted">
                                    <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'If you would like to add a comment about your booking, please write it in the field below.'),$_smarty_tpl ) );?>

                                </p>
                            </div>

                            <div class="card-body">
                                <div class="errors-block" style="display: none;"></div>

                                <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_177881902667bb8ed9eac718_75275040', 'order_detail_add_order_messages_form', $this->tplIndex);
?>

                            </div>
                        </div>
                    <?php }?>
                <?php
}
}
/* {/block 'order_detail_add_order_messages'} */
/* {block 'displayOrderDetailBottomLeft'} */
class Block_24855567967bb8ed9ec32c5_82176211 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

                    <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['hook'][0], array( array('h'=>'displayOrderDetailBottomLeft','id_order'=>$_smarty_tpl->tpl_vars['order']->value->id),$_smarty_tpl ) );?>

                <?php
}
}
/* {/block 'displayOrderDetailBottomLeft'} */
/* {block 'displayOrderDetailTopRight'} */
class Block_90522987167bb8ed9ec5c66_49657106 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

                    <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['hook'][0], array( array('h'=>'displayOrderDetailTopRight','id_order'=>$_smarty_tpl->tpl_vars['order']->value->id),$_smarty_tpl ) );?>

                <?php
}
}
/* {/block 'displayOrderDetailTopRight'} */
/* {block 'displayOrderDetailPaymentDetailsRow'} */
class Block_118297126667bb8ed9ef7153_70484182 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

                                <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['hook'][0], array( array('h'=>'displayOrderDetailPaymentDetailsRow','id_order'=>$_smarty_tpl->tpl_vars['order']->value->id),$_smarty_tpl ) );?>

                            <?php
}
}
/* {/block 'displayOrderDetailPaymentDetailsRow'} */
/* {block 'order_detail_payment_details'} */
class Block_33040534167bb8ed9ec8f85_65077816 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

                    <div class="card payment-details hidden-xs hidden-sm visible-md">
                        <div class="card-header">
                            <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Payment Details'),$_smarty_tpl ) );?>

                        </div>
                        <div class="card-body">
                            <div class="detail-row">
                                <div class=" title"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Payment Method'),$_smarty_tpl ) );?>
</div>
                                <div class=" value payment-method">
                                    <?php if ($_smarty_tpl->tpl_vars['invoice']->value && $_smarty_tpl->tpl_vars['invoiceAllowed']->value) {?>
                                        <span class="icon-pdf"></span>
                                        <a target="_blank" href="<?php echo $_smarty_tpl->tpl_vars['link']->value->getPageLink('pdf-invoice',true);?>
?id_order=<?php echo intval($_smarty_tpl->tpl_vars['order']->value->id);
if ($_smarty_tpl->tpl_vars['is_guest']->value) {?>&amp;secure_key=<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['order']->value->secure_key, ENT_QUOTES, 'UTF-8', true);
}?>" title="<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Click here to download invoice.'),$_smarty_tpl ) );?>
">
                                            <span><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['order']->value->payment, ENT_QUOTES, 'UTF-8', true);?>
</span>
                                        </a>
                                    <?php } else { ?>
                                        <?php echo htmlspecialchars($_smarty_tpl->tpl_vars['order']->value->payment, ENT_QUOTES, 'UTF-8', true);?>

                                    <?php }?>
                                </div>
                            </div>

                            <div class="detail-row">
                                <div class="pull-left title"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Status'),$_smarty_tpl ) );?>
</div>
                                <div class="pull-right value status">
                                    <?php if ((isset($_smarty_tpl->tpl_vars['order_history']->value[0])) && $_smarty_tpl->tpl_vars['order_history']->value[0]) {?>
                                        <span<?php if ((isset($_smarty_tpl->tpl_vars['order_history']->value[0]['color'])) && $_smarty_tpl->tpl_vars['order_history']->value[0]['color']) {?> style="background-color:<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['order_history']->value[0]['color'], ENT_QUOTES, 'UTF-8', true);?>
30; border: 1px solid <?php echo htmlspecialchars($_smarty_tpl->tpl_vars['order_history']->value[0]['color'], ENT_QUOTES, 'UTF-8', true);?>
;" <?php }?> class="label">
                                            <?php if (in_array($_smarty_tpl->tpl_vars['order_history']->value[0]['id_order_state'],$_smarty_tpl->tpl_vars['overbooking_order_states']->value)) {?>
                                                <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Order Not Confirmed'),$_smarty_tpl ) );?>

                                            <?php } else { ?>
                                                <?php echo htmlspecialchars($_smarty_tpl->tpl_vars['order_history']->value[0]['ostate_name'], ENT_QUOTES, 'UTF-8', true);?>

                                            <?php }?>
                                        </span>
                                    <?php } else { ?>
                                        <span class="processing"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Processing'),$_smarty_tpl ) );?>
</span>
                                    <?php }?>
                                </div>
                            </div>

                            <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_118297126667bb8ed9ef7153_70484182', 'displayOrderDetailPaymentDetailsRow', $this->tplIndex);
?>

                        </div>
                    </div>
                <?php
}
}
/* {/block 'order_detail_payment_details'} */
/* {block 'displayOrderDetailHotelLocationAfter'} */
class Block_104542222067bb8ed9f202e1_51190923 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

                                <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['hook'][0], array( array('h'=>'displayOrderDetailHotelLocationAfter','id_order'=>$_smarty_tpl->tpl_vars['order']->value->id),$_smarty_tpl ) );?>

                            <?php
}
}
/* {/block 'displayOrderDetailHotelLocationAfter'} */
/* {block 'order_detail_hotel_location'} */
class Block_101237209267bb8ed9efd356_43999531 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

                    <div class="card hotel-location hidden-xs hidden-sm visible-md">
                        <div class="card-header">
                            <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Hotel Location'),$_smarty_tpl ) );?>

                        </div>
                        <div class="card-body">
                            <p class="card-subtitle">
                                <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Address'),$_smarty_tpl ) );?>

                            </p>

                            <?php if ((isset($_smarty_tpl->tpl_vars['hotel_address_info']->value)) && $_smarty_tpl->tpl_vars['hotel_address_info']->value) {?>
                                <p class="hotel-address">
                                    <?php echo $_smarty_tpl->tpl_vars['hotel_address_info']->value['address1'];?>
,
                                    <?php ob_start();
echo $_smarty_tpl->tpl_vars['hotel_address_info']->value['address2'];
$_prefixVariable65 = ob_get_clean();
if ($_prefixVariable65) {
echo $_smarty_tpl->tpl_vars['hotel_address_info']->value['address2'];?>
,<?php }?>
                                    <?php echo $_smarty_tpl->tpl_vars['hotel_address_info']->value['city'];?>
,
                                    <?php ob_start();
echo $_smarty_tpl->tpl_vars['hotel_address_info']->value['state'];
$_prefixVariable66 = ob_get_clean();
if ($_prefixVariable66) {
echo $_smarty_tpl->tpl_vars['hotel_address_info']->value['state'];?>
,<?php }?>
                                    <?php echo $_smarty_tpl->tpl_vars['hotel_address_info']->value['country'];?>
, <?php echo $_smarty_tpl->tpl_vars['hotel_address_info']->value['postcode'];?>

                                </p>
                            <?php } else { ?>
                                <div class="card-text"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Hotel location not available.'),$_smarty_tpl ) );?>
</div>
                            <?php }?>

                            <?php if ((floatval($_smarty_tpl->tpl_vars['obj_hotel_branch_information']->value->latitude) != 0 && floatval($_smarty_tpl->tpl_vars['obj_hotel_branch_information']->value->longitude) != 0) && $_smarty_tpl->tpl_vars['view_on_map']->value) {?>
                                <div class="hotel-location-map">
                                    <div class="booking-hotel-map-container"></div>
                                </div>
                            <?php }?>

                            <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_104542222067bb8ed9f202e1_51190923', 'displayOrderDetailHotelLocationAfter', $this->tplIndex);
?>

                        </div>
                    </div>
                <?php
}
}
/* {/block 'order_detail_hotel_location'} */
/* {block 'displayOrderDetailPaymentSummaryRow'} */
class Block_128426658967bb8eda02b909_17364477 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

                                            <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['hook'][0], array( array('h'=>'displayOrderDetailPaymentSummaryRow','id_order'=>$_smarty_tpl->tpl_vars['order']->value->id),$_smarty_tpl ) );?>

                                        <?php
}
}
/* {/block 'displayOrderDetailPaymentSummaryRow'} */
/* {block 'displayOrderDetailPaymentSummaryAfter'} */
class Block_46577313967bb8eda0337e1_64334051 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

                                <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['hook'][0], array( array('h'=>'displayOrderDetailPaymentSummaryAfter','id_order'=>$_smarty_tpl->tpl_vars['order']->value->id),$_smarty_tpl ) );?>

                            <?php
}
}
/* {/block 'displayOrderDetailPaymentSummaryAfter'} */
/* {block 'order_detail_payment_summary'} */
class Block_7216502167bb8ed9f28394_63710962 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

                    <div class="card payment-summary hidden-xs hidden-sm visible-md">
                        <div class="card-header">
                            <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Payment Summary'),$_smarty_tpl ) );?>

                        </div>
                        <div class="card-body">
                            <div class="prices-breakdown-table">
                                <table class="table table-sm table-responsive table-summary">
                                    <tbody>
                                        <?php $_smarty_tpl->_assignInScope('room_price_tax_excl', $_smarty_tpl->tpl_vars['order']->value->getTotalProductsWithoutTaxes(false,true));?>
                                        <?php $_smarty_tpl->_assignInScope('room_price_tax_incl', $_smarty_tpl->tpl_vars['order']->value->getTotalProductsWithTaxes(false,true));?>
                                        <?php $_smarty_tpl->_assignInScope('additional_service_price_tax_excl', ($_smarty_tpl->tpl_vars['order']->value->getTotalProductsWithoutTaxes(false,false,Product::SERVICE_PRODUCT_WITH_ROOMTYPE)+$_smarty_tpl->tpl_vars['total_demands_price_te']->value));?>
                                        <?php $_smarty_tpl->_assignInScope('additional_service_price_tax_incl', ($_smarty_tpl->tpl_vars['order']->value->getTotalProductsWithTaxes(false,false,Product::SERVICE_PRODUCT_WITH_ROOMTYPE)+$_smarty_tpl->tpl_vars['total_demands_price_ti']->value));?>
                                        <?php $_smarty_tpl->_assignInScope('total_tax_without_discount', (($_smarty_tpl->tpl_vars['room_price_tax_incl']->value-$_smarty_tpl->tpl_vars['room_price_tax_excl']->value)+($_smarty_tpl->tpl_vars['additional_service_price_tax_incl']->value-$_smarty_tpl->tpl_vars['additional_service_price_tax_excl']->value)));?>
                                        <?php if ($_smarty_tpl->tpl_vars['priceDisplay']->value && $_smarty_tpl->tpl_vars['use_tax']->value && $_smarty_tpl->tpl_vars['room_price_tax_excl']->value) {?>
                                            <tr>
                                                <td><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Total rooms cost (tax excl.)'),$_smarty_tpl ) );?>
</td>
                                                <td class="text-right">
                                                    <span class="price"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['displayWtPriceWithCurrency'][0], array( array('price'=>($_smarty_tpl->tpl_vars['room_price_tax_excl']->value+$_smarty_tpl->tpl_vars['additional_service_price_tax_excl']->value-$_smarty_tpl->tpl_vars['total_convenience_fee_te']->value),'currency'=>$_smarty_tpl->tpl_vars['currency']->value),$_smarty_tpl ) );?>
</span>
                                                </td>
                                            </tr>
                                        <?php } else { ?>
                                            <tr>
                                                <td><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Total Rooms Cost'),$_smarty_tpl ) );?>
 <?php if ($_smarty_tpl->tpl_vars['use_tax']->value) {
echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'(tax incl.)'),$_smarty_tpl ) );
}?> </td>
                                                <td class="text-right">
                                                    <span class="price"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['displayWtPriceWithCurrency'][0], array( array('price'=>($_smarty_tpl->tpl_vars['room_price_tax_incl']->value+$_smarty_tpl->tpl_vars['additional_service_price_tax_incl']->value-$_smarty_tpl->tpl_vars['total_convenience_fee_ti']->value),'currency'=>$_smarty_tpl->tpl_vars['currency']->value),$_smarty_tpl ) );?>
</span>
                                                </td>
                                            </tr>
                                        <?php }?>

                                        <?php if ($_smarty_tpl->tpl_vars['priceDisplay']->value && $_smarty_tpl->tpl_vars['use_tax']->value && $_smarty_tpl->tpl_vars['total_convenience_fee_te']->value) {?>
                                            <tr>
                                                <td><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Total Convenience Fees (tax excl.)'),$_smarty_tpl ) );?>
</td>
                                                <td class="text-right">
                                                    <span class="price"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['displayWtPriceWithCurrency'][0], array( array('price'=>$_smarty_tpl->tpl_vars['total_convenience_fee_te']->value,'currency'=>$_smarty_tpl->tpl_vars['currency']->value),$_smarty_tpl ) );?>
</span>
                                                </td>
                                            </tr>
                                        <?php } elseif ($_smarty_tpl->tpl_vars['total_convenience_fee_ti']->value) {?>
                                            <tr>
                                                <td><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Total Convenience Fees (tax incl.)'),$_smarty_tpl ) );?>
</td>
                                                <td class="text-right">
                                                    <span class="price"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['displayWtPriceWithCurrency'][0], array( array('price'=>$_smarty_tpl->tpl_vars['total_convenience_fee_ti']->value,'currency'=>$_smarty_tpl->tpl_vars['currency']->value),$_smarty_tpl ) );?>
</span>
                                                </td>
                                            </tr>
                                        <?php }?>

                                        <tr class="totalprice item">
                                            <td><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Total Tax'),$_smarty_tpl ) );?>
</td>
                                            <td class="text-right">
                                                <span class="price"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['displayWtPriceWithCurrency'][0], array( array('price'=>($_smarty_tpl->tpl_vars['total_tax_without_discount']->value),'currency'=>$_smarty_tpl->tpl_vars['currency']->value),$_smarty_tpl ) );?>
</span>
                                            </td>
                                        </tr>
                                        <?php if ($_smarty_tpl->tpl_vars['order']->value->total_discounts > 0) {?>
                                            <tr>
                                                <td><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Total Vouchers'),$_smarty_tpl ) );?>
</td>
                                                <td class="text-right">
                                                    <span class="price price-discount">-<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['displayWtPriceWithCurrency'][0], array( array('price'=>$_smarty_tpl->tpl_vars['order']->value->total_discounts,'currency'=>$_smarty_tpl->tpl_vars['currency']->value,'convert'=>1),$_smarty_tpl ) );?>
</span>
                                                </td>
                                            </tr>
                                        <?php }?>
                                        <tr class="totalprice item">
                                            <td><strong><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Final Booking Total'),$_smarty_tpl ) );?>
<strong></td>
                                            <td class="text-right">
                                                <strong><span class="price"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['displayWtPriceWithCurrency'][0], array( array('price'=>$_smarty_tpl->tpl_vars['order']->value->total_paid,'currency'=>$_smarty_tpl->tpl_vars['currency']->value),$_smarty_tpl ) );?>
</span></strong>
                                            </td>
                                        </tr>

                                        <?php if ((isset($_smarty_tpl->tpl_vars['refundReqBookings']->value)) && $_smarty_tpl->tpl_vars['refundReqBookings']->value) {?>
                                            <tr class="totalprice item">
                                                <td><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'* Refunded Amount'),$_smarty_tpl ) );?>
</td>
                                                <td class="text-right">
                                                    <span class="price"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['displayWtPriceWithCurrency'][0], array( array('price'=>$_smarty_tpl->tpl_vars['refundedAmount']->value,'currency'=>$_smarty_tpl->tpl_vars['currency']->value),$_smarty_tpl ) );?>
</span>
                                                </td>
                                            </tr>
                                        <?php }?>

                                        <?php if ($_smarty_tpl->tpl_vars['order']->value->total_paid_tax_incl > $_smarty_tpl->tpl_vars['order']->value->total_paid_real) {?>
                                            <tr class="totalprice item">
                                                <td><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Due Amount'),$_smarty_tpl ) );?>
</td>
                                                <td class="text-right">
                                                    <span class="price"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['displayWtPriceWithCurrency'][0], array( array('price'=>($_smarty_tpl->tpl_vars['order']->value->total_paid_tax_incl-$_smarty_tpl->tpl_vars['order']->value->total_paid_real),'currency'=>$_smarty_tpl->tpl_vars['currency']->value),$_smarty_tpl ) );?>
</span>
                                                </td>
                                            </tr>
                                        <?php }?>

                                        <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_128426658967bb8eda02b909_17364477', 'displayOrderDetailPaymentSummaryRow', $this->tplIndex);
?>

                                    </tbody>
                                </table>
                            </div>

                            <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_46577313967bb8eda0337e1_64334051', 'displayOrderDetailPaymentSummaryAfter', $this->tplIndex);
?>

                        </div>
                    </div>
                <?php
}
}
/* {/block 'order_detail_payment_summary'} */
/* {block 'displayOrderDetailGuestDetailsRow'} */
class Block_152628998467bb8eda094144_52181758 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

                                            <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['hook'][0], array( array('h'=>'displayOrderDetailGuestDetailsRow','id_order'=>$_smarty_tpl->tpl_vars['order']->value->id),$_smarty_tpl ) );?>

                                        <?php
}
}
/* {/block 'displayOrderDetailGuestDetailsRow'} */
/* {block 'displayOrderDetailGuestDetailsAfter'} */
class Block_40339442667bb8eda097a10_60103261 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

                                <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['hook'][0], array( array('h'=>'displayOrderDetailGuestDetailsAfter','id_order'=>$_smarty_tpl->tpl_vars['order']->value->id),$_smarty_tpl ) );?>

                            <?php
}
}
/* {/block 'displayOrderDetailGuestDetailsAfter'} */
/* {block 'order_detail_guest_details'} */
class Block_68622175567bb8eda03b516_13322407 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

                    <div class="card guest-details hidden-xs hidden-sm visible-md">
                        <div class="card-header">
                            <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Guest Details'),$_smarty_tpl ) );?>

                        </div>
                        <div class="card-body">
                            <div class="guest-details-table">
                                <table class="table table-sm table-responsive table-summary">
                                    <tbody>
                                        <?php if ($_smarty_tpl->tpl_vars['customerGuestDetail']->value) {?>
                                            <?php if ((isset($_smarty_tpl->tpl_vars['customerGuestDetail']->value->firstname)) && $_smarty_tpl->tpl_vars['customerGuestDetail']->value->firstname) {?>
                                                <tr>
                                                    <td><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Name'),$_smarty_tpl ) );?>
</td>
                                                    <td class="text-right"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['customerGuestDetail']->value->firstname, ENT_QUOTES, 'UTF-8', true);?>
 <?php echo htmlspecialchars($_smarty_tpl->tpl_vars['customerGuestDetail']->value->lastname, ENT_QUOTES, 'UTF-8', true);?>
</td>
                                                </tr>
                                            <?php }?>
                                            <?php if ((isset($_smarty_tpl->tpl_vars['customerGuestDetail']->value->email)) && $_smarty_tpl->tpl_vars['customerGuestDetail']->value->email) {?>
                                                <tr>
                                                    <td><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Email'),$_smarty_tpl ) );?>
</td>
                                                    <td class="text-right"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['customerGuestDetail']->value->email, ENT_QUOTES, 'UTF-8', true);?>
</td>
                                                </tr>
                                            <?php }?>
                                            <?php if ((isset($_smarty_tpl->tpl_vars['customerGuestDetail']->value->phone)) && $_smarty_tpl->tpl_vars['customerGuestDetail']->value->phone) {?>
                                                <tr>
                                                    <td><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Mobile'),$_smarty_tpl ) );?>
</td>
                                                    <td class="text-right"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['customerGuestDetail']->value->phone, ENT_QUOTES, 'UTF-8', true);?>
</td>
                                                </tr>
                                            <?php }?>
                                        <?php } else { ?>
                                            <tr>
                                                <td><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Name'),$_smarty_tpl ) );?>
</td>
                                                <td class="text-right">
                                                    <?php if ((isset($_smarty_tpl->tpl_vars['address_invoice']->value->firstname)) && $_smarty_tpl->tpl_vars['address_invoice']->value->firstname) {?>
                                                        <?php echo htmlspecialchars($_smarty_tpl->tpl_vars['address_invoice']->value->firstname, ENT_QUOTES, 'UTF-8', true);?>
 <?php echo htmlspecialchars($_smarty_tpl->tpl_vars['address_invoice']->value->lastname, ENT_QUOTES, 'UTF-8', true);?>

                                                    <?php } elseif ((isset($_smarty_tpl->tpl_vars['guestInformations']->value['firstname'])) && $_smarty_tpl->tpl_vars['guestInformations']->value['firstname']) {?>
                                                        <?php echo htmlspecialchars($_smarty_tpl->tpl_vars['guestInformations']->value['firstname'], ENT_QUOTES, 'UTF-8', true);?>
 <?php echo htmlspecialchars($_smarty_tpl->tpl_vars['guestInformations']->value['lastname'], ENT_QUOTES, 'UTF-8', true);?>

                                                    <?php }?>
                                                </td>
                                            </tr>

                                            <tr>
                                                <td><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Email'),$_smarty_tpl ) );?>
</td>
                                                <td class="text-right"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['guestInformations']->value['email'], ENT_QUOTES, 'UTF-8', true);?>
</td>
                                            </tr>
                                            <?php if ((isset($_smarty_tpl->tpl_vars['guestInformations']->value['phone'])) && $_smarty_tpl->tpl_vars['guestInformations']->value['phone']) {?>
                                                <tr>
                                                    <td><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Phone'),$_smarty_tpl ) );?>
</td>
                                                    <td class="text-right"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['guestInformations']->value['phone'], ENT_QUOTES, 'UTF-8', true);?>
 </td>
                                                </tr>
                                            <?php }?>
                                            <?php if ((isset($_smarty_tpl->tpl_vars['address_invoice']->value->phone_mobile)) && $_smarty_tpl->tpl_vars['address_invoice']->value->phone_mobile) {?>
                                                <tr>
                                                    <td><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Mobile'),$_smarty_tpl ) );?>
</td>
                                                    <td class="text-right"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['address_invoice']->value->phone_mobile, ENT_QUOTES, 'UTF-8', true);?>
</td>
                                                </tr>
                                            <?php }?>

                                            <?php if ((isset($_smarty_tpl->tpl_vars['address_invoice']->value->phone)) && $_smarty_tpl->tpl_vars['address_invoice']->value->phone) {?>
                                                <tr>
                                                    <td><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Phone'),$_smarty_tpl ) );?>
</td>
                                                    <td class="text-right"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['address_invoice']->value->phone, ENT_QUOTES, 'UTF-8', true);?>
</td>
                                                </tr>
                                            <?php }?>
                                        <?php }?>

                                        <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_152628998467bb8eda094144_52181758', 'displayOrderDetailGuestDetailsRow', $this->tplIndex);
?>

                                    </tbody>
                                </table>
                            </div>

                            <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_40339442667bb8eda097a10_60103261', 'displayOrderDetailGuestDetailsAfter', $this->tplIndex);
?>

                        </div>
                    </div>
                <?php
}
}
/* {/block 'order_detail_guest_details'} */
/* {block 'displayOrderDetailBottomRight'} */
class Block_188941723767bb8eda09c959_44058181 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

                    <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['hook'][0], array( array('h'=>'displayOrderDetailBottomRight','id_order'=>$_smarty_tpl->tpl_vars['order']->value->id),$_smarty_tpl ) );?>

                <?php
}
}
/* {/block 'displayOrderDetailBottomRight'} */
/* {block 'order_detail_refund_popups'} */
class Block_29890902567bb8eda0a4443_01166309 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_checkPlugins(array(0=>array('file'=>'/home/qloapps/www/QloApps/tools/smarty/plugins/modifier.date_format.php','function'=>'smarty_modifier_date_format',),));
?>

            <?php if ((isset($_smarty_tpl->tpl_vars['refund_allowed']->value)) && $_smarty_tpl->tpl_vars['refund_allowed']->value) {?>
                <div style="display: none;">
                    <div id="create-new-refund-popup">
                        <form id="form-cancel-booking">
                            <input type="hidden" name="id_order" value="<?php echo $_smarty_tpl->tpl_vars['order']->value->id;?>
">
                            <div class="card cancel-booking">
                                <div class="card-header">
                                    <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Cancel Bookings'),$_smarty_tpl ) );?>

                                </div>
                                <div class="card-body">
                                    <div class="errors" style="display: none;"></div>

                                    <div class="col-xs-12">
                                        <div class="row no-gutters">
                                            <div class="col-xs-4">
                                                <ul class="nav nav-tabs nav-stacked">
                                                    <?php $_smarty_tpl->_assignInScope('flag_is_first_iteration', true);?>
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
                                                            <?php $_smarty_tpl->_assignInScope('is_full_date', ($_smarty_tpl->tpl_vars['show_full_date']->value && (smarty_modifier_date_format($_smarty_tpl->tpl_vars['rm_v']->value['data_form'],'%D') == smarty_modifier_date_format($_smarty_tpl->tpl_vars['rm_v']->value['data_to'],'%D'))));?>
                                                            <li class="<?php if ($_smarty_tpl->tpl_vars['flag_is_first_iteration']->value) {?>active<?php }?>">
                                                                <a href="#room-info-tab-<?php echo $_smarty_tpl->tpl_vars['data_v']->value['id_product'];?>
-<?php echo $_smarty_tpl->tpl_vars['rm_k']->value;?>
" class="" data-toggle="tab">
                                                                    <div class="room-type-name"><?php echo $_smarty_tpl->tpl_vars['data_v']->value['name'];?>
</div>
                                                                    <div class="duration"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['dateFormat'][0], array( array('date'=>$_smarty_tpl->tpl_vars['rm_v']->value['data_form'],'full'=>$_smarty_tpl->tpl_vars['is_full_date']->value),$_smarty_tpl ) );?>
 - <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['dateFormat'][0], array( array('date'=>$_smarty_tpl->tpl_vars['rm_v']->value['data_to'],'full'=>$_smarty_tpl->tpl_vars['is_full_date']->value),$_smarty_tpl ) );?>
</div>
                                                                </a>
                                                            </li>
                                                            <?php if ($_smarty_tpl->tpl_vars['flag_is_first_iteration']->value) {
$_smarty_tpl->_assignInScope('flag_is_first_iteration', false);
}?>
                                                        <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
                                                    <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
                                                </ul>
                                            </div>
                                            <div class="col-xs-8">
                                                <div class="tab-content clearfix">
                                                    <?php $_smarty_tpl->_assignInScope('flag_is_first_iteration', true);?>
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
                                                            <div id="room-info-tab-<?php echo $_smarty_tpl->tpl_vars['data_v']->value['id_product'];?>
-<?php echo $_smarty_tpl->tpl_vars['rm_k']->value;?>
" class="tab-pane <?php if ($_smarty_tpl->tpl_vars['flag_is_first_iteration']->value) {?>active<?php }?>">
                                                                <div class="room-type-summary clearfix">
                                                                    <p class="room-type-name"><?php echo $_smarty_tpl->tpl_vars['data_v']->value['name'];?>
</p>
                                                                    <div class="col-xs-3">
                                                                        <p><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Total Rooms'),$_smarty_tpl ) );?>
</p>
                                                                        <strong><?php echo sprintf('%02d',$_smarty_tpl->tpl_vars['rm_v']->value['num_rm']);?>
</strong>
                                                                    </div>
                                                                    <div class="col-xs-3">
                                                                        <p><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Cancelled Rooms'),$_smarty_tpl ) );?>
</p>
                                                                        <strong><?php echo sprintf('%02d',($_smarty_tpl->tpl_vars['rm_v']->value['count_cancelled']+$_smarty_tpl->tpl_vars['rm_v']->value['count_refunded']));?>
</strong>
                                                                    </div>
                                                                </div>
                                                                <div class="rooms-summary">
                                                                    <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['rm_v']->value['hotel_booking_details'], 'hotel_booking_detail', false, NULL, 'foreachRefundRooms', array (
  'iteration' => true,
));
$_smarty_tpl->tpl_vars['hotel_booking_detail']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['hotel_booking_detail']->value) {
$_smarty_tpl->tpl_vars['hotel_booking_detail']->do_else = false;
$_smarty_tpl->tpl_vars['__smarty_foreach_foreachRefundRooms']->value['iteration']++;
?>
                                                                        <?php $_smarty_tpl->_assignInScope('is_room_cancelled', ((isset($_smarty_tpl->tpl_vars['refundReqBookings']->value)) && in_array($_smarty_tpl->tpl_vars['hotel_booking_detail']->value['id_htl_booking'],$_smarty_tpl->tpl_vars['refundReqBookings']->value)));?>
                                                                        <div class="room-details <?php if ($_smarty_tpl->tpl_vars['is_room_cancelled']->value || ($_smarty_tpl->tpl_vars['hotel_booking_detail']->value['id_status'] != $_smarty_tpl->tpl_vars['ROOM_STATUS_ALLOTED']->value)) {?>cancelled<?php }?> clearfix">
                                                                            <div class="occupancy-wrap">
                                                                                <div class="checkbox">
                                                                                    <label for="bookings_to_refund_<?php echo $_smarty_tpl->tpl_vars['hotel_booking_detail']->value['id_htl_booking'];?>
">
                                                                                        <input type="checkbox" class="bookings_to_refund" id="bookings_to_refund_<?php echo $_smarty_tpl->tpl_vars['hotel_booking_detail']->value['id_htl_booking'];?>
" name="bookings_to_refund[]" value="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['hotel_booking_detail']->value['id_htl_booking'], ENT_QUOTES, 'UTF-8', true);?>
" <?php if ($_smarty_tpl->tpl_vars['is_room_cancelled']->value || ($_smarty_tpl->tpl_vars['hotel_booking_detail']->value['id_status'] != $_smarty_tpl->tpl_vars['ROOM_STATUS_ALLOTED']->value)) {?>disabled<?php }?>/>
                                                                                        <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Room'),$_smarty_tpl ) );?>
 - <?php echo sprintf('%02d',(isset($_smarty_tpl->tpl_vars['__smarty_foreach_foreachRefundRooms']->value['iteration']) ? $_smarty_tpl->tpl_vars['__smarty_foreach_foreachRefundRooms']->value['iteration'] : null));?>

                                                                                    </label>

                                                                                    <span>(<?php echo sprintf('%02d',$_smarty_tpl->tpl_vars['hotel_booking_detail']->value['adults']);?>
 <?php if ($_smarty_tpl->tpl_vars['hotel_booking_detail']->value['adults'] > 1) {
echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Adults'),$_smarty_tpl ) );
} else {
echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Adult'),$_smarty_tpl ) );
}
if ($_smarty_tpl->tpl_vars['hotel_booking_detail']->value['children'] > 0) {
echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>', '),$_smarty_tpl ) );
echo sprintf('%02d',$_smarty_tpl->tpl_vars['hotel_booking_detail']->value['children']);?>
 <?php if ($_smarty_tpl->tpl_vars['hotel_booking_detail']->value['children'] > 1) {
echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Children'),$_smarty_tpl ) );
} else {
echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Child'),$_smarty_tpl ) );
}
}?>)</span>
                                                                                    <?php if ($_smarty_tpl->tpl_vars['hotel_booking_detail']->value['is_cancelled']) {?><span class="badge badge-danger badge-cancelled"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Cancelled'),$_smarty_tpl ) );?>
</span><?php } elseif ($_smarty_tpl->tpl_vars['hotel_booking_detail']->value['is_refunded']) {?><span class="badge badge-danger badge-cancelled"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Refunded'),$_smarty_tpl ) );?>
</span><?php } elseif ($_smarty_tpl->tpl_vars['hotel_booking_detail']->value['refund_denied']) {?><span class="badge badge-danger badge-cancelled"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Refund denied'),$_smarty_tpl ) );?>
</span> <i class="icon-info-circle refund-denied-info" data-refund_denied_info="<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Refund for this booking is denied. Please contact admin for more detail.'),$_smarty_tpl ) );?>
"></i><?php } elseif ($_smarty_tpl->tpl_vars['hotel_booking_detail']->value['id_status'] != $_smarty_tpl->tpl_vars['ROOM_STATUS_ALLOTED']->value) {?><span class="badge badge-danger badge-cancelled"><?php if ($_smarty_tpl->tpl_vars['hotel_booking_detail']->value['id_status'] == $_smarty_tpl->tpl_vars['ROOM_STATUS_CHECKED_OUT']->value) {
echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Checked-Out'),$_smarty_tpl ) );
} else {
echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Checked-In'),$_smarty_tpl ) );
}?></span><?php }?>
                                                                                </div>
                                                                            </div>

                                                                                                                                                        <?php $_smarty_tpl->_assignInScope('has_services', ((isset($_smarty_tpl->tpl_vars['rm_v']->value['additional_services'])) && (isset($_smarty_tpl->tpl_vars['rm_v']->value['additional_services'][$_smarty_tpl->tpl_vars['hotel_booking_detail']->value['id_htl_booking']])) && (isset($_smarty_tpl->tpl_vars['rm_v']->value['additional_services'][$_smarty_tpl->tpl_vars['hotel_booking_detail']->value['id_htl_booking']]['additional_services']))));?>
                                                                                                                                                        <?php $_smarty_tpl->_assignInScope('has_facilities', ((isset($_smarty_tpl->tpl_vars['rm_v']->value['extra_demands'])) && (isset($_smarty_tpl->tpl_vars['rm_v']->value['extra_demands'][$_smarty_tpl->tpl_vars['hotel_booking_detail']->value['id_room']])) && (isset($_smarty_tpl->tpl_vars['rm_v']->value['extra_demands'][$_smarty_tpl->tpl_vars['hotel_booking_detail']->value['id_room']]['extra_demands']))));?>
                                                                            <?php if ($_smarty_tpl->tpl_vars['has_services']->value || $_smarty_tpl->tpl_vars['has_facilities']->value) {?>
                                                                                <div class="extra-services-wrap clearfix">
                                                                                    <?php if ($_smarty_tpl->tpl_vars['has_services']->value) {?>
                                                                                        <div class="services-wrap clearfix">
                                                                                            <div class="col-xs-3">
                                                                                                <strong><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Services'),$_smarty_tpl ) );?>
</strong>
                                                                                            </div>
                                                                                            <div class="col-xs-9">
                                                                                                <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['rm_v']->value['additional_services'][$_smarty_tpl->tpl_vars['hotel_booking_detail']->value['id_htl_booking']]['additional_services'], 'service');
$_smarty_tpl->tpl_vars['service']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['service']->value) {
$_smarty_tpl->tpl_vars['service']->do_else = false;
?>
                                                                                                    <span class="service"><?php echo $_smarty_tpl->tpl_vars['service']->value['name'];?>
</span>
                                                                                                <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
                                                                                            </div>
                                                                                        </div>
                                                                                    <?php }?>
                                                                                    <?php if ($_smarty_tpl->tpl_vars['has_facilities']->value) {?>
                                                                                        <div class="facilities-wrap clearfix">
                                                                                            <div class="col-xs-3">
                                                                                                <strong><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Facilities'),$_smarty_tpl ) );?>
</strong>
                                                                                            </div>
                                                                                            <div class="col-xs-9">
                                                                                                <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['rm_v']->value['extra_demands'][$_smarty_tpl->tpl_vars['hotel_booking_detail']->value['id_room']]['extra_demands'], 'facility');
$_smarty_tpl->tpl_vars['facility']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['facility']->value) {
$_smarty_tpl->tpl_vars['facility']->do_else = false;
?>
                                                                                                    <span class="facility"><?php echo $_smarty_tpl->tpl_vars['facility']->value['name'];?>
</span>
                                                                                                <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
                                                                                            </div>
                                                                                        </div>
                                                                                    <?php }?>
                                                                                </div>
                                                                            <?php } else { ?>
                                                                                <div class="extra-services-wrap clearfix">
                                                                                    <p class="text-muted"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'No extra services added for this room.'),$_smarty_tpl ) );?>
</p>
                                                                                </div>
                                                                            <?php }?>
                                                                        </div>
                                                                    <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
                                                                </div>
                                                            </div>
                                                            <?php if ($_smarty_tpl->tpl_vars['flag_is_first_iteration']->value) {
$_smarty_tpl->_assignInScope('flag_is_first_iteration', false);
}?>
                                                        <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
                                                    <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="card-footer">
                                    <div class="selected-rooms-wrap">
                                        <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Selected Rooms: '),$_smarty_tpl ) );?>
<span class="num-selected-rooms"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'00'),$_smarty_tpl ) );?>
</span>
                                    </div>
                                    <div class="actions-wrap">
                                        <button class="btn btn-secondary btn-cancel">
                                            <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Cancel'),$_smarty_tpl ) );?>

                                        </button>
                                        <button class="btn btn-primary btn-next">
                                            <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Next'),$_smarty_tpl ) );?>

                                        </button>
                                    </div>
                                </div>
                            </div>

                            <div class="card cancel-booking-preview" style="display:none;">
                                <div class="card-header">
                                    <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Cancellation Reason'),$_smarty_tpl ) );?>

                                </div>
                                <div class="card-body">
                                    <div class="errors" style="display: none;"></div>

                                    <div class="well well-sm">
                                        <p class="text"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Total Rooms to Cancel:'),$_smarty_tpl ) );?>
 <span class="count-total-rooms"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'00'),$_smarty_tpl ) );?>
</span></p>
                                    </div>

                                    <div class="form-group">
                                        <label class="label"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Mention reason for cancellation'),$_smarty_tpl ) );?>
<sup><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'*'),$_smarty_tpl ) );?>
</sup></label>
                                        <textarea class="form-control cancellation_reason" name="cancellation_reason" rows="4" placeholder="<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Type here...'),$_smarty_tpl ) );?>
"></textarea>
                                    </div>
                                </div>
                                <div class="card-footer clearfix">
                                    <div class="pull-right">
                                        <button class="btn btn-secondary btn-back">
                                            <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Back'),$_smarty_tpl ) );?>

                                        </button>
                                        <button class="btn btn-primary btn-submit">
                                            <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Submit'),$_smarty_tpl ) );?>

                                        </button>
                                    </div>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>

                <div id="popup-cancellation-submit-success" class="popup-cancellation-submit-success" style="display: none;">
                    <div class="card">
                        <div class="text-center">
                            <div><i class="icon icon-check-circle text-success"></i></div>
                            <h3><b><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Request submitted successfully'),$_smarty_tpl ) );?>
</b></h3>
                            <h4><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Your cancellation request has been submitted successfully. Go to Booking Refund Requests page for further updates.'),$_smarty_tpl ) );?>
</h4>
                        </div>
                    </div>
                </div>

                <div id="popup-cancellation-order-cancel-success" class="popup-cancellation-submit-success" style="display: none;">
                    <div class="card">
                        <div class="text-center">
                            <div><i class="icon icon-check-circle text-success"></i></div>
                            <h3><b><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Booking cancelled successfully'),$_smarty_tpl ) );?>
</b></h3>
                            <h4><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Your booking has been cancelled successfully.'),$_smarty_tpl ) );?>
</h4>
                        </div>
                    </div>
                </div>
            <?php }?>
            <div id="popup-view-extra-services" class="popup-view-extra-services" style="display: none;"></div>
        <?php
}
}
/* {/block 'order_detail_refund_popups'} */
/* {block 'order_detail_js_vars'} */
class Block_212111020967bb8eda136265_28821140 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

        <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['addJsDef'][0], array( array('historyUrl'=>preg_replace("%(?<!\\\\)'%", "\'",$_smarty_tpl->tpl_vars['link']->value->getPageLink('orderdetail',true))),$_smarty_tpl ) );
$_block_plugin96 = isset($_smarty_tpl->smarty->registered_plugins['block']['addJsDefL'][0][0]) ? $_smarty_tpl->smarty->registered_plugins['block']['addJsDefL'][0][0] : null;
if (!is_callable(array($_block_plugin96, 'addJsDefL'))) {
throw new SmartyException('block tag \'addJsDefL\' not callable or registered');
}
$_smarty_tpl->smarty->_cache['_tag_stack'][] = array('addJsDefL', array('name'=>'req_sent_msg'));
$_block_repeat=true;
echo $_block_plugin96->addJsDefL(array('name'=>'req_sent_msg'), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();
echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Request Sent..','js'=>1),$_smarty_tpl ) );
$_block_repeat=false;
echo $_block_plugin96->addJsDefL(array('name'=>'req_sent_msg'), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);
$_block_plugin97 = isset($_smarty_tpl->smarty->registered_plugins['block']['addJsDefL'][0][0]) ? $_smarty_tpl->smarty->registered_plugins['block']['addJsDefL'][0][0] : null;
if (!is_callable(array($_block_plugin97, 'addJsDefL'))) {
throw new SmartyException('block tag \'addJsDefL\' not callable or registered');
}
$_smarty_tpl->smarty->_cache['_tag_stack'][] = array('addJsDefL', array('name'=>'wait_stage_msg'));
$_block_repeat=true;
echo $_block_plugin97->addJsDefL(array('name'=>'wait_stage_msg'), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();
echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Waiting','js'=>1),$_smarty_tpl ) );
$_block_repeat=false;
echo $_block_plugin97->addJsDefL(array('name'=>'wait_stage_msg'), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);
$_block_plugin98 = isset($_smarty_tpl->smarty->registered_plugins['block']['addJsDefL'][0][0]) ? $_smarty_tpl->smarty->registered_plugins['block']['addJsDefL'][0][0] : null;
if (!is_callable(array($_block_plugin98, 'addJsDefL'))) {
throw new SmartyException('block tag \'addJsDefL\' not callable or registered');
}
$_smarty_tpl->smarty->_cache['_tag_stack'][] = array('addJsDefL', array('name'=>'pending_state_msg'));
$_block_repeat=true;
echo $_block_plugin98->addJsDefL(array('name'=>'pending_state_msg'), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();
echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Pending...','js'=>1),$_smarty_tpl ) );
$_block_repeat=false;
echo $_block_plugin98->addJsDefL(array('name'=>'pending_state_msg'), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);
$_block_plugin99 = isset($_smarty_tpl->smarty->registered_plugins['block']['addJsDefL'][0][0]) ? $_smarty_tpl->smarty->registered_plugins['block']['addJsDefL'][0][0] : null;
if (!is_callable(array($_block_plugin99, 'addJsDefL'))) {
throw new SmartyException('block tag \'addJsDefL\' not callable or registered');
}
$_smarty_tpl->smarty->_cache['_tag_stack'][] = array('addJsDefL', array('name'=>'mail_sending_err'));
$_block_repeat=true;
echo $_block_plugin99->addJsDefL(array('name'=>'mail_sending_err'), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();
echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Some error occurred while sending mail to the customer','js'=>1),$_smarty_tpl ) );
$_block_repeat=false;
echo $_block_plugin99->addJsDefL(array('name'=>'mail_sending_err'), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);
$_block_plugin100 = isset($_smarty_tpl->smarty->registered_plugins['block']['addJsDefL'][0][0]) ? $_smarty_tpl->smarty->registered_plugins['block']['addJsDefL'][0][0] : null;
if (!is_callable(array($_block_plugin100, 'addJsDefL'))) {
throw new SmartyException('block tag \'addJsDefL\' not callable or registered');
}
$_smarty_tpl->smarty->_cache['_tag_stack'][] = array('addJsDefL', array('name'=>'refund_request_sending_error'));
$_block_repeat=true;
echo $_block_plugin100->addJsDefL(array('name'=>'refund_request_sending_error'), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();
echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Some error occurred while processing request for booking cancellation.','js'=>1),$_smarty_tpl ) );
$_block_repeat=false;
echo $_block_plugin100->addJsDefL(array('name'=>'refund_request_sending_error'), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);
$_block_plugin101 = isset($_smarty_tpl->smarty->registered_plugins['block']['addJsDefL'][0][0]) ? $_smarty_tpl->smarty->registered_plugins['block']['addJsDefL'][0][0] : null;
if (!is_callable(array($_block_plugin101, 'addJsDefL'))) {
throw new SmartyException('block tag \'addJsDefL\' not callable or registered');
}
$_smarty_tpl->smarty->_cache['_tag_stack'][] = array('addJsDefL', array('name'=>'no_bookings_selected'));
$_block_repeat=true;
echo $_block_plugin101->addJsDefL(array('name'=>'no_bookings_selected'), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();
echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Please select at least one room to proceed for cancellation.','js'=>1),$_smarty_tpl ) );
$_block_repeat=false;
echo $_block_plugin101->addJsDefL(array('name'=>'no_bookings_selected'), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);
$_block_plugin102 = isset($_smarty_tpl->smarty->registered_plugins['block']['addJsDefL'][0][0]) ? $_smarty_tpl->smarty->registered_plugins['block']['addJsDefL'][0][0] : null;
if (!is_callable(array($_block_plugin102, 'addJsDefL'))) {
throw new SmartyException('block tag \'addJsDefL\' not callable or registered');
}
$_smarty_tpl->smarty->_cache['_tag_stack'][] = array('addJsDefL', array('name'=>'refund_request_success_txt'));
$_block_repeat=true;
echo $_block_plugin102->addJsDefL(array('name'=>'refund_request_success_txt'), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();
echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Request for booking cancellation is successffully created.','js'=>1),$_smarty_tpl ) );
$_block_repeat=false;
echo $_block_plugin102->addJsDefL(array('name'=>'refund_request_success_txt'), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);
$_block_plugin103 = isset($_smarty_tpl->smarty->registered_plugins['block']['addJsDefL'][0][0]) ? $_smarty_tpl->smarty->registered_plugins['block']['addJsDefL'][0][0] : null;
if (!is_callable(array($_block_plugin103, 'addJsDefL'))) {
throw new SmartyException('block tag \'addJsDefL\' not callable or registered');
}
$_smarty_tpl->smarty->_cache['_tag_stack'][] = array('addJsDefL', array('name'=>'order_message_choose_txt'));
$_block_repeat=true;
echo $_block_plugin103->addJsDefL(array('name'=>'order_message_choose_txt'), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();
echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'-- Choose --','js'=>1),$_smarty_tpl ) );
$_block_repeat=false;
echo $_block_plugin103->addJsDefL(array('name'=>'order_message_choose_txt'), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);
$_block_plugin104 = isset($_smarty_tpl->smarty->registered_plugins['block']['addJsDefL'][0][0]) ? $_smarty_tpl->smarty->registered_plugins['block']['addJsDefL'][0][0] : null;
if (!is_callable(array($_block_plugin104, 'addJsDefL'))) {
throw new SmartyException('block tag \'addJsDefL\' not callable or registered');
}
$_smarty_tpl->smarty->_cache['_tag_stack'][] = array('addJsDefL', array('name'=>'order_message_success_txt'));
$_block_repeat=true;
echo $_block_plugin104->addJsDefL(array('name'=>'order_message_success_txt'), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();
echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Order message sent successfully.','js'=>1),$_smarty_tpl ) );
$_block_repeat=false;
echo $_block_plugin104->addJsDefL(array('name'=>'order_message_success_txt'), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);
$_block_plugin105 = isset($_smarty_tpl->smarty->registered_plugins['block']['addJsDefL'][0][0]) ? $_smarty_tpl->smarty->registered_plugins['block']['addJsDefL'][0][0] : null;
if (!is_callable(array($_block_plugin105, 'addJsDefL'))) {
throw new SmartyException('block tag \'addJsDefL\' not callable or registered');
}
$_smarty_tpl->smarty->_cache['_tag_stack'][] = array('addJsDefL', array('name'=>'cancel_req_txt'));
$_block_repeat=true;
echo $_block_plugin105->addJsDefL(array('name'=>'cancel_req_txt'), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();
echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Cancel Request','js'=>1),$_smarty_tpl ) );
$_block_repeat=false;
echo $_block_plugin105->addJsDefL(array('name'=>'cancel_req_txt'), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);
$_block_plugin106 = isset($_smarty_tpl->smarty->registered_plugins['block']['addJsDefL'][0][0]) ? $_smarty_tpl->smarty->registered_plugins['block']['addJsDefL'][0][0] : null;
if (!is_callable(array($_block_plugin106, 'addJsDefL'))) {
throw new SmartyException('block tag \'addJsDefL\' not callable or registered');
}
$_smarty_tpl->smarty->_cache['_tag_stack'][] = array('addJsDefL', array('name'=>'cancel_booking_txt'));
$_block_repeat=true;
echo $_block_plugin106->addJsDefL(array('name'=>'cancel_booking_txt'), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();
echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Cancel Bookings','js'=>1),$_smarty_tpl ) );
$_block_repeat=false;
echo $_block_plugin106->addJsDefL(array('name'=>'cancel_booking_txt'), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);?>
    <?php
}
}
/* {/block 'order_detail_js_vars'} */
/* {block 'order_detail'} */
class Block_140181400567bb8ed9cc8d19_13229679 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'order_detail' => 
  array (
    0 => 'Block_140181400567bb8ed9cc8d19_13229679',
  ),
  'order_detail_heading' => 
  array (
    0 => 'Block_81010747667bb8ed9cd7bd8_64988189',
  ),
  'errors' => 
  array (
    0 => 'Block_68014955567bb8ed9cdb5c0_27715538',
  ),
  'order_detail_subheading' => 
  array (
    0 => 'Block_31824564967bb8ed9ce0078_25464264',
  ),
  'displayOrderDetail' => 
  array (
    0 => 'Block_100420668467bb8ed9cf19e6_25269751',
  ),
  'displayOrderDetailTopLeft' => 
  array (
    0 => 'Block_208297208967bb8ed9cf4532_41601771',
  ),
  'order_detail_hotel_details' => 
  array (
    0 => 'Block_172252793367bb8ed9cf7690_05983380',
  ),
  'displayOrderDetailHotelDetailsAfter' => 
  array (
    0 => 'Block_179122337967bb8ed9d08ef0_72686182',
  ),
  'order_details_payment_details_mobile' => 
  array (
    0 => 'Block_157027621467bb8ed9d0f222_79252021',
  ),
  'displayOrderDetailPaymentDetailsRow' => 
  array (
    0 => 'Block_214130076467bb8ed9d4bbe4_79643767',
    1 => 'Block_118297126667bb8ed9ef7153_70484182',
  ),
  'order_detail_hotel_location_mobile' => 
  array (
    0 => 'Block_145269810667bb8ed9d50193_63271938',
  ),
  'displayOrderDetailHotelLocationAfter' => 
  array (
    0 => 'Block_13432135967bb8ed9d7d4d4_12712873',
    1 => 'Block_104542222067bb8ed9f202e1_51190923',
  ),
  'order_detail_refund_requests' => 
  array (
    0 => 'Block_51348832067bb8ed9d830c5_44162733',
  ),
  'displayOrderDetailRoomDetailsBefore' => 
  array (
    0 => 'Block_111411715367bb8ed9d9ae93_58383688',
  ),
  'order_detail_room_details' => 
  array (
    0 => 'Block_141493028967bb8ed9d9eb24_28602716',
  ),
  'displayBookingAction' => 
  array (
    0 => 'Block_160791876867bb8ed9daa3f8_16200440',
  ),
  'order_room_detail' => 
  array (
    0 => 'Block_161237353567bb8ed9db0f61_47091386',
  ),
  'displayOrderDetailRoomDetailsRoomsAfter' => 
  array (
    0 => 'Block_67233499967bb8ed9db72f5_50757762',
  ),
  'order_detail_payment_summary_mobile' => 
  array (
    0 => 'Block_100676893467bb8ed9dbbfb1_66582620',
  ),
  'displayOrderDetailPaymentSummaryRow' => 
  array (
    0 => 'Block_164929555067bb8ed9df1a58_22147630',
    1 => 'Block_128426658967bb8eda02b909_17364477',
  ),
  'displayOrderDetailPaymentSummaryAfter' => 
  array (
    0 => 'Block_34404661667bb8ed9df39e1_77154453',
    1 => 'Block_46577313967bb8eda0337e1_64334051',
  ),
  'order_detail_guest_details_mobile' => 
  array (
    0 => 'Block_9543749667bb8ed9e00fc6_65443068',
  ),
  'displayOrderDetailGuestDetailsRow' => 
  array (
    0 => 'Block_209720134467bb8ed9e65f68_74245439',
    1 => 'Block_152628998467bb8eda094144_52181758',
  ),
  'displayOrderDetailGuestDetailsAfter' => 
  array (
    0 => 'Block_117357621167bb8ed9e67f18_27192746',
    1 => 'Block_40339442667bb8eda097a10_60103261',
  ),
  'order_detail_hotel_policies' => 
  array (
    0 => 'Block_117565853467bb8ed9e6a9e2_01426377',
  ),
  'displayOrderDetailPoliciesTab' => 
  array (
    0 => 'Block_16113735067bb8ed9e711d5_14957208',
  ),
  'displayOrderDetailPoliciesTabContent' => 
  array (
    0 => 'Block_58756398967bb8ed9e95979_64533025',
  ),
  'order_detail_order_messages' => 
  array (
    0 => 'Block_56553134667bb8ed9e9a141_83176592',
  ),
  'order_message' => 
  array (
    0 => 'Block_115564312367bb8ed9ea16f6_15085690',
  ),
  'displayOrderDetailMessagesBefore' => 
  array (
    0 => 'Block_199212025767bb8ed9ea4627_81667663',
  ),
  'order_detail_add_order_messages' => 
  array (
    0 => 'Block_136433690667bb8ed9ea8232_40920482',
  ),
  'order_detail_add_order_messages_form' => 
  array (
    0 => 'Block_177881902667bb8ed9eac718_75275040',
  ),
  'displayOrderDetailBottomLeft' => 
  array (
    0 => 'Block_24855567967bb8ed9ec32c5_82176211',
  ),
  'displayOrderDetailTopRight' => 
  array (
    0 => 'Block_90522987167bb8ed9ec5c66_49657106',
  ),
  'order_detail_payment_details' => 
  array (
    0 => 'Block_33040534167bb8ed9ec8f85_65077816',
  ),
  'order_detail_hotel_location' => 
  array (
    0 => 'Block_101237209267bb8ed9efd356_43999531',
  ),
  'order_detail_payment_summary' => 
  array (
    0 => 'Block_7216502167bb8ed9f28394_63710962',
  ),
  'order_detail_guest_details' => 
  array (
    0 => 'Block_68622175567bb8eda03b516_13322407',
  ),
  'displayOrderDetailBottomRight' => 
  array (
    0 => 'Block_188941723767bb8eda09c959_44058181',
  ),
  'order_detail_refund_popups' => 
  array (
    0 => 'Block_29890902567bb8eda0a4443_01166309',
  ),
  'order_detail_js_vars' => 
  array (
    0 => 'Block_212111020967bb8eda136265_28821140',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

    <?php $_smarty_tpl->smarty->ext->_capture->open($_smarty_tpl, 'path', null, null);?>
        <a href="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['link']->value->getPageLink('my-account',true), ENT_QUOTES, 'UTF-8', true);?>
">
            <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'My account'),$_smarty_tpl ) );?>

        </a>
        <span class="navigation-pipe">
            <?php echo $_smarty_tpl->tpl_vars['navigationPipe']->value;?>

        </span>
        <a href="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['link']->value->getPageLink('history',true), ENT_QUOTES, 'UTF-8', true);?>
">
            <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Bookings'),$_smarty_tpl ) );?>

        </a>
        <span class="navigation-pipe">
            <?php echo $_smarty_tpl->tpl_vars['navigationPipe']->value;?>

        </span>
        <span class="navigation_page">
            <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Booking details'),$_smarty_tpl ) );?>

        </span>
    <?php $_smarty_tpl->smarty->ext->_capture->close($_smarty_tpl);?>

    <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_81010747667bb8ed9cd7bd8_64988189', 'order_detail_heading', $this->tplIndex);
?>


	<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_68014955567bb8ed9cdb5c0_27715538', 'errors', $this->tplIndex);
?>


    <?php if ((isset($_smarty_tpl->tpl_vars['order']->value)) && $_smarty_tpl->tpl_vars['order']->value) {?>
        <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_31824564967bb8ed9ce0078_25464264', 'order_detail_subheading', $this->tplIndex);
?>


        <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_100420668467bb8ed9cf19e6_25269751', 'displayOrderDetail', $this->tplIndex);
?>


        <div class="row" id="order_detail_container">
            <div class="col-md-8">
                <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_208297208967bb8ed9cf4532_41601771', 'displayOrderDetailTopLeft', $this->tplIndex);
?>


                <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_172252793367bb8ed9cf7690_05983380', 'order_detail_hotel_details', $this->tplIndex);
?>


                <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_157027621467bb8ed9d0f222_79252021', 'order_details_payment_details_mobile', $this->tplIndex);
?>


                <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_145269810667bb8ed9d50193_63271938', 'order_detail_hotel_location_mobile', $this->tplIndex);
?>


                <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_51348832067bb8ed9d830c5_44162733', 'order_detail_refund_requests', $this->tplIndex);
?>


                <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_111411715367bb8ed9d9ae93_58383688', 'displayOrderDetailRoomDetailsBefore', $this->tplIndex);
?>


                <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_141493028967bb8ed9d9eb24_28602716', 'order_detail_room_details', $this->tplIndex);
?>


                <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_100676893467bb8ed9dbbfb1_66582620', 'order_detail_payment_summary_mobile', $this->tplIndex);
?>


                <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_9543749667bb8ed9e00fc6_65443068', 'order_detail_guest_details_mobile', $this->tplIndex);
?>


                <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_117565853467bb8ed9e6a9e2_01426377', 'order_detail_hotel_policies', $this->tplIndex);
?>


                <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_56553134667bb8ed9e9a141_83176592', 'order_detail_order_messages', $this->tplIndex);
?>


                <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_199212025767bb8ed9ea4627_81667663', 'displayOrderDetailMessagesBefore', $this->tplIndex);
?>


                <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_136433690667bb8ed9ea8232_40920482', 'order_detail_add_order_messages', $this->tplIndex);
?>


                <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_24855567967bb8ed9ec32c5_82176211', 'displayOrderDetailBottomLeft', $this->tplIndex);
?>

            </div>
            <div class="col-md-4">
                <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_90522987167bb8ed9ec5c66_49657106', 'displayOrderDetailTopRight', $this->tplIndex);
?>


                <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_33040534167bb8ed9ec8f85_65077816', 'order_detail_payment_details', $this->tplIndex);
?>


                <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_101237209267bb8ed9efd356_43999531', 'order_detail_hotel_location', $this->tplIndex);
?>


                <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_7216502167bb8ed9f28394_63710962', 'order_detail_payment_summary', $this->tplIndex);
?>


                <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_68622175567bb8eda03b516_13322407', 'order_detail_guest_details', $this->tplIndex);
?>


                <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_188941723767bb8eda09c959_44058181', 'displayOrderDetailBottomRight', $this->tplIndex);
?>

            </div>
        </div>

        <?php if ($_smarty_tpl->tpl_vars['is_guest']->value) {?>
            <div class="row">
                <div class="col-sm-8">
                    <p class="alert alert-info"><i class="icon-info-sign"></i> <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'You cannot request refund with a guest account.'),$_smarty_tpl ) );?>
</p>
                </div>
            </div>
        <?php }?>

        <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_29890902567bb8eda0a4443_01166309', 'order_detail_refund_popups', $this->tplIndex);
?>

    <?php }?>

    <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_212111020967bb8eda136265_28821140', 'order_detail_js_vars', $this->tplIndex);
?>

<?php
}
}
/* {/block 'order_detail'} */
}
