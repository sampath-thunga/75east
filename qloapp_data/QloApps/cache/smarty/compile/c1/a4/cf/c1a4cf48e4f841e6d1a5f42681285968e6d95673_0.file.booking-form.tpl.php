<?php
/* Smarty version 3.1.39, created on 2025-02-24 02:40:48
  from '/home/qloapps/www/QloApps/themes/hotel-reservation-theme/_partials/booking-form.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.39',
  'unifunc' => 'content_67bb8ed86c6aa3_77719007',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'c1a4cf48e4f841e6d1a5f42681285968e6d95673' => 
    array (
      0 => '/home/qloapps/www/QloApps/themes/hotel-reservation-theme/_partials/booking-form.tpl',
      1 => 1728563708,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:./occupancy_field.tpl' => 1,
    'file:./quantity_field.tpl' => 1,
  ),
),false)) {
function content_67bb8ed86c6aa3_77719007 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, false);
?>

<div class="booking-form card">
    <div class="booking_room_fields">
        <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_54687271067bb8ed85e7881_06718193', 'booking_form_content');
?>

    </div>
</div>
<?php }
/* {block 'product_hidden_fields'} */
class Block_68517240167bb8ed85e8374_99609968 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

                    <p class="hidden">
                        <input type="hidden" name="token" value="<?php echo $_smarty_tpl->tpl_vars['static_token']->value;?>
" />
                        <input type="hidden" name="id_product" value="<?php echo intval($_smarty_tpl->tpl_vars['product']->value->id);?>
" id="product_page_product_id" />
                        <input type="hidden" name="add" value="1" />
                        <input type="hidden" name="id_product_attribute" id="idCombination" value="" />
                    </p>
                <?php
}
}
/* {/block 'product_hidden_fields'} */
/* {block 'booking_form_hotel_location'} */
class Block_204898735467bb8ed85f3707_37851456 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

                    <?php if ((isset($_smarty_tpl->tpl_vars['id_hotel']->value)) && $_smarty_tpl->tpl_vars['id_hotel']->value) {?>
                        <div class="form-group htl_location_block">
                            <label for="" class="control-label"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Hotel Location'),$_smarty_tpl ) );?>
</label>
                            <p><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['hotel_location']->value, ENT_QUOTES, 'UTF-8', true);?>
</p>
                        </div>
                    <?php }?>
                <?php
}
}
/* {/block 'booking_form_hotel_location'} */
/* {block 'booking_form_dates'} */
class Block_125537473667bb8ed860ac48_77919647 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

                                    <div class="form-group col-sm-12">
                                        <label class="control-label"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Check In - Check Out'),$_smarty_tpl ) );?>
</label>
                                        <div class="form-control input-date" id="room_date_range"  autocomplete="off" placeholder="<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Check-in - Check-out'),$_smarty_tpl ) );?>
"><span><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Check-in'),$_smarty_tpl ) );?>
 &nbsp;<i class="icon icon-minus"></i>&nbsp; <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Check-out'),$_smarty_tpl ) );?>
</span></div>
                                        <input type="hidden" class="input-date" name="room_check_in" id="room_check_in" value="<?php if ((isset($_smarty_tpl->tpl_vars['date_from']->value))) {
echo $_smarty_tpl->tpl_vars['date_from']->value;
}?>" />
                                        <input type="hidden" class="input-date" name="room_check_out" id="room_check_out" value="<?php if ((isset($_smarty_tpl->tpl_vars['date_to']->value))) {
echo $_smarty_tpl->tpl_vars['date_to']->value;
}?>" />
                                    </div>
                                <?php
}
}
/* {/block 'booking_form_dates'} */
/* {block 'occupancy_field'} */
class Block_193414122767bb8ed861d586_56026938 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

                                                    <?php $_smarty_tpl->_subTemplateRender("file:./occupancy_field.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
                                                <?php
}
}
/* {/block 'occupancy_field'} */
/* {block 'quantity_field'} */
class Block_62630187967bb8ed8621dd0_79588997 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

                                                    <?php $_smarty_tpl->_subTemplateRender("file:./quantity_field.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
                                                <?php
}
}
/* {/block 'quantity_field'} */
/* {block 'booking_form_quantity_wrapper'} */
class Block_131287314167bb8ed86170c6_73530383 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

                                    <div class="row">
                                        <div class="form-group col-sm-12"<?php if (!$_smarty_tpl->tpl_vars['product']->value->available_for_order || $_smarty_tpl->tpl_vars['PS_CATALOG_MODE']->value) {?> style="display: none;"<?php }?>>
                                            <?php if ((isset($_smarty_tpl->tpl_vars['occupancy_required_for_booking']->value)) && $_smarty_tpl->tpl_vars['occupancy_required_for_booking']->value) {?>
                                                <label class="control-label"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Guests'),$_smarty_tpl ) );?>
</label>
                                                <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_193414122767bb8ed861d586_56026938', 'occupancy_field', $this->tplIndex);
?>

                                            <?php } else { ?>
                                                <label class="control-label"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'No. of Rooms'),$_smarty_tpl ) );?>
</label>
                                                <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_62630187967bb8ed8621dd0_79588997', 'quantity_field', $this->tplIndex);
?>

                                            <?php }?>
                                        </div>
                                    </div>
                                <?php
}
}
/* {/block 'booking_form_quantity_wrapper'} */
/* {block 'booking_form_price_information'} */
class Block_7027826167bb8ed8627017_42943377 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

                                    <?php if (((isset($_smarty_tpl->tpl_vars['has_room_type_demands']->value)) && $_smarty_tpl->tpl_vars['has_room_type_demands']->value) || ((isset($_smarty_tpl->tpl_vars['service_products_exists']->value)) && $_smarty_tpl->tpl_vars['service_products_exists']->value)) {?>
                                        <hr class="separator-hr-mg-10">
                                        <div class="row price_desc_block">
                                            <div class="col-sm-6">
                                                <label class="control-label"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Room Price'),$_smarty_tpl ) );?>
</label>
                                                    <p>
                                                        <span class="total_price_block"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['convertPrice'][0], array( array('price'=>floatval($_smarty_tpl->tpl_vars['rooms_price']->value)),$_smarty_tpl ) );?>
</span>
                                                        <span class="pull-right plus-sign">+</span>
                                                    </p>
                                            </div>
                                            <div class="col-sm-6">
                                                <label class="control-label"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Extra Services'),$_smarty_tpl ) );?>
</label>
                                                <p class="extra_demands_price_block">
                                                    <?php if ((isset($_smarty_tpl->tpl_vars['demands_price']->value))) {
echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['convertPrice'][0], array( array('price'=>$_smarty_tpl->tpl_vars['demands_price']->value),$_smarty_tpl ) );
} else {
echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['convertPrice'][0], array( array('price'=>0),$_smarty_tpl ) );
}?>
                                                    <?php if (((isset($_smarty_tpl->tpl_vars['selected_demands']->value)) && $_smarty_tpl->tpl_vars['selected_demands']->value) || ((isset($_smarty_tpl->tpl_vars['selected_service_product']->value)) && $_smarty_tpl->tpl_vars['selected_service_product']->value)) {?>
                                                        <span class="services-info">
                                                            <img src="<?php echo $_smarty_tpl->tpl_vars['img_dir']->value;?>
icon/icon-info.svg" />
                                                        </span>
                                                    <?php }?>
                                                </p>
                                                <?php if (((isset($_smarty_tpl->tpl_vars['selected_demands']->value)) && $_smarty_tpl->tpl_vars['selected_demands']->value) || ((isset($_smarty_tpl->tpl_vars['selected_service_product']->value)) && $_smarty_tpl->tpl_vars['selected_service_product']->value)) {?>
                                                    <div class="services-info-container" style="display: none;">
                                                        <div class="services-info-tooltip-cont">
                                                            <?php if ((isset($_smarty_tpl->tpl_vars['selected_service_product']->value)) && $_smarty_tpl->tpl_vars['selected_service_product']->value) {?>
                                                                <div class="extra-service-panel">
                                                                    <p class="panel_title"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Selected services'),$_smarty_tpl ) );?>
 <span><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'(Per room)'),$_smarty_tpl ) );?>
</span></p>
                                                                    <div class="services-list">
                                                                        <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['selected_service_product']->value, 'product');
$_smarty_tpl->tpl_vars['product']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['product']->value) {
$_smarty_tpl->tpl_vars['product']->do_else = false;
?>
                                                                            <div class="services-list-row">
                                                                                <div>
                                                                                    <?php echo $_smarty_tpl->tpl_vars['product']->value['name'];?>

                                                                                    <?php if ($_smarty_tpl->tpl_vars['product']->value['allow_multiple_quantity']) {?>
                                                                                        <p><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'qty'),$_smarty_tpl ) );?>
: <?php echo $_smarty_tpl->tpl_vars['product']->value['quantity'];?>
</p>
                                                                                    <?php }?>
                                                                                </div>
                                                                                <div class="text-right">
                                                                                    <p><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['displayPrice'][0], array( array('price'=>$_smarty_tpl->tpl_vars['product']->value['price']),$_smarty_tpl ) );?>
</p>
                                                                                    <a class="btn btn-sm btn-default remove_roomtype_product" data-id-product="<?php echo $_smarty_tpl->tpl_vars['product']->value['id_product'];?>
"><i class="icon-trash"></i></a>
                                                                                </div>
                                                                            </div>
                                                                        <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
                                                                    </div>
                                                                </div>
                                                            <?php }?>
                                                            <?php if ((isset($_smarty_tpl->tpl_vars['selected_demands']->value)) && $_smarty_tpl->tpl_vars['selected_demands']->value) {?>
                                                                <div class="extra-service-panel">
                                                                    <p class="panel_title"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Selected facilities'),$_smarty_tpl ) );?>
 <span><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'(Per room)'),$_smarty_tpl ) );?>
</span></p>
                                                                    <div class="services-list">
                                                                        <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['selected_demands']->value, 'product');
$_smarty_tpl->tpl_vars['product']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['product']->value) {
$_smarty_tpl->tpl_vars['product']->do_else = false;
?>
                                                                            <div class="services-list-row">
                                                                                <div>
                                                                                    <?php echo $_smarty_tpl->tpl_vars['product']->value['name'];?>

                                                                                    <?php if ((isset($_smarty_tpl->tpl_vars['product']->value['advance_option'])) && $_smarty_tpl->tpl_vars['product']->value['advance_option']) {?>
                                                                                        <p><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Option:'),$_smarty_tpl ) );?>
 <?php echo $_smarty_tpl->tpl_vars['product']->value['advance_option']['name'];?>
</p>
                                                                                    <?php }?>
                                                                                </div>
                                                                                <div class="text-right">
                                                                                    <p><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['displayPrice'][0], array( array('price'=>$_smarty_tpl->tpl_vars['product']->value['price']),$_smarty_tpl ) );?>
</p>
                                                                                    <a class="btn btn-sm btn-default remove_roomtype_demand" data-id_global_demand="<?php echo $_smarty_tpl->tpl_vars['product']->value['id_global_demand'];?>
"><i class="icon-trash"></i></a>
                                                                                </div>
                                                                            </div>
                                                                        <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
                                                                    </div>
                                                                </div>
                                                            <?php }?>
                                                            <hr>
                                                            <div class="extra-service-panel">
                                                                <div class="summary-row">
                                                                    <div><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Total price per room'),$_smarty_tpl ) );?>
</div>
                                                                    <div><p class="service_price"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['displayPrice'][0], array( array('price'=>$_smarty_tpl->tpl_vars['demands_price_per_room']->value),$_smarty_tpl ) );?>
</p></div>
                                                                </div>
                                                                <div class="summary-row">
                                                                    <div><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Total price:'),$_smarty_tpl ) );?>
</div>
                                                                    <div><p class="service_price"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['displayPrice'][0], array( array('price'=>$_smarty_tpl->tpl_vars['demands_price']->value),$_smarty_tpl ) );?>
</p></div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                <?php }?>
                                            </div>
                                        </div>
                                        <hr class="separator-hr-mg-10 form-group">
                                    <?php }?>
                                <?php
}
}
/* {/block 'booking_form_price_information'} */
/* {block 'booking_form_total_price'} */
class Block_79859940167bb8ed867f249_35400560 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

                                                <div class="total_price_block col-xs-7 form-group">
                                                    <label class="control-label"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Total'),$_smarty_tpl ) );?>
</label>
                                                    <p>
                                                        <?php if ($_smarty_tpl->tpl_vars['total_price']->value && $_smarty_tpl->tpl_vars['total_price_without_discount']->value > $_smarty_tpl->tpl_vars['total_price']->value) {?>
                                                            <span class="room_type_old_price">
                                                                <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['convertPrice'][0], array( array('price'=>floatval($_smarty_tpl->tpl_vars['total_price_without_discount']->value)),$_smarty_tpl ) );?>

                                                            </span>
                                                        <?php }?>
                                                        <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['convertPrice'][0], array( array('price'=>floatval($_smarty_tpl->tpl_vars['total_price']->value)),$_smarty_tpl ) );?>

                                                    </p>
                                                </div>
                                            <?php
}
}
/* {/block 'booking_form_total_price'} */
/* {block 'booking_form_available_quantity'} */
class Block_156023559967bb8ed86877d2_67992095 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

                                                <?php if ($_smarty_tpl->tpl_vars['total_available_rooms']->value <= $_smarty_tpl->tpl_vars['warning_count']->value) {?>
                                                    <div class="col-xs-5 form-group text-right num_quantity_alert">
                                                        <span class="num_searched_avail_rooms">
                                                            <?php echo htmlspecialchars($_smarty_tpl->tpl_vars['total_available_rooms']->value, ENT_QUOTES, 'UTF-8', true);?>

                                                        </span>
                                                        <?php if ($_smarty_tpl->tpl_vars['total_available_rooms']->value > 1) {?> <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'rooms left!'),$_smarty_tpl ) );?>
 <?php } else { ?> <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'room left!'),$_smarty_tpl ) );?>
 <?php }?>
                                                    </div>
                                                <?php }?>
                                            <?php
}
}
/* {/block 'booking_form_available_quantity'} */
/* {block 'booking_form_book_now_button'} */
class Block_105061792767bb8ed86a29c5_29212259 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

                                                    <p id="add_to_cart" class="buttons_bottom_block no-print">
                                                        <button type="submit" name="Submit" class="exclusive book_now_submit">
                                                            <span>
                                                                <?php if ((isset($_smarty_tpl->tpl_vars['content_only']->value)) && $_smarty_tpl->tpl_vars['content_only']->value && ((isset($_smarty_tpl->tpl_vars['product']->value->customization_required)) && $_smarty_tpl->tpl_vars['product']->value->customization_required)) {
echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Customize'),$_smarty_tpl ) );
} else {
echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Book Now'),$_smarty_tpl ) );
}?>
                                                            </span>
                                                            <span id="booking_action_loader"></span>
                                                        </button>
                                                    </p>
                                                <?php
}
}
/* {/block 'booking_form_book_now_button'} */
/* {block 'booking_form_actions'} */
class Block_79115301167bb8ed867e627_15647197 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

                                    <div id="booking_action_block">
                                        <div class="row">
                                            <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_79859940167bb8ed867f249_35400560', 'booking_form_total_price', $this->tplIndex);
?>

                                            <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_156023559967bb8ed86877d2_67992095', 'booking_form_available_quantity', $this->tplIndex);
?>

                                        </div>
                                        <div>
                                            <?php if ((!$_smarty_tpl->tpl_vars['allow_oosp']->value && $_smarty_tpl->tpl_vars['product']->value->quantity <= 0) || !$_smarty_tpl->tpl_vars['product']->value->available_for_order || ((isset($_smarty_tpl->tpl_vars['restricted_country_mode']->value)) && $_smarty_tpl->tpl_vars['restricted_country_mode']->value) || $_smarty_tpl->tpl_vars['PS_CATALOG_MODE']->value || $_smarty_tpl->tpl_vars['order_date_restrict']->value) {?>
                                            <?php } else { ?>
                                                <div id="additional_products" class="hidden">
                                                    <?php if ((isset($_smarty_tpl->tpl_vars['selected_service_product']->value)) && $_smarty_tpl->tpl_vars['selected_service_product']->value) {?>
                                                        <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['selected_service_product']->value, 'product');
$_smarty_tpl->tpl_vars['product']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['product']->value) {
$_smarty_tpl->tpl_vars['product']->do_else = false;
?>
                                                            <input type="hidded" id="service_product_<?php echo $_smarty_tpl->tpl_vars['product']->value['id_product'];?>
" name="service_product[<?php echo $_smarty_tpl->tpl_vars['product']->value['id_product'];?>
][]" class="service_product" data-id_product="<?php echo $_smarty_tpl->tpl_vars['product']->value['id_product'];?>
" value="<?php echo $_smarty_tpl->tpl_vars['product']->value['quantity'];?>
">
                                                        <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
                                                    <?php }?>
                                                </div>
                                                <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_105061792767bb8ed86a29c5_29212259', 'booking_form_book_now_button', $this->tplIndex);
?>

                                            <?php }?>
                                        </div>
                                    </div>
                                <?php
}
}
/* {/block 'booking_form_actions'} */
/* {block 'booking_form_content'} */
class Block_54687271067bb8ed85e7881_06718193 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'booking_form_content' => 
  array (
    0 => 'Block_54687271067bb8ed85e7881_06718193',
  ),
  'product_hidden_fields' => 
  array (
    0 => 'Block_68517240167bb8ed85e8374_99609968',
  ),
  'booking_form_hotel_location' => 
  array (
    0 => 'Block_204898735467bb8ed85f3707_37851456',
  ),
  'booking_form_dates' => 
  array (
    0 => 'Block_125537473667bb8ed860ac48_77919647',
  ),
  'booking_form_quantity_wrapper' => 
  array (
    0 => 'Block_131287314167bb8ed86170c6_73530383',
  ),
  'occupancy_field' => 
  array (
    0 => 'Block_193414122767bb8ed861d586_56026938',
  ),
  'quantity_field' => 
  array (
    0 => 'Block_62630187967bb8ed8621dd0_79588997',
  ),
  'booking_form_price_information' => 
  array (
    0 => 'Block_7027826167bb8ed8627017_42943377',
  ),
  'booking_form_actions' => 
  array (
    0 => 'Block_79115301167bb8ed867e627_15647197',
  ),
  'booking_form_total_price' => 
  array (
    0 => 'Block_79859940167bb8ed867f249_35400560',
  ),
  'booking_form_available_quantity' => 
  array (
    0 => 'Block_156023559967bb8ed86877d2_67992095',
  ),
  'booking_form_book_now_button' => 
  array (
    0 => 'Block_105061792767bb8ed86a29c5_29212259',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

            <form id="booking-form" action="" method="post">
                <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_68517240167bb8ed85e8374_99609968', 'product_hidden_fields', $this->tplIndex);
?>

                <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_204898735467bb8ed85f3707_37851456', 'booking_form_hotel_location', $this->tplIndex);
?>

                <?php if ($_smarty_tpl->tpl_vars['product']->value->show_price && !(isset($_smarty_tpl->tpl_vars['restricted_country_mode']->value)) && !$_smarty_tpl->tpl_vars['PS_CATALOG_MODE']->value) {?>
                                        <?php if ($_smarty_tpl->tpl_vars['product']->value->booking_product) {?>
                        <?php if (!$_smarty_tpl->tpl_vars['order_date_restrict']->value) {?>
                            <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['hook'][0], array( array('h'=>'displayRoomTypeBookingFormFieldsBefore','id_product'=>$_smarty_tpl->tpl_vars['product']->value->id,'id_hotel'=>$_smarty_tpl->tpl_vars['id_hotel']->value),$_smarty_tpl ) );?>

                            <div class="row">
                                <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_125537473667bb8ed860ac48_77919647', 'booking_form_dates', $this->tplIndex);
?>

                            </div>
                            <?php if ($_smarty_tpl->tpl_vars['total_available_rooms']->value > 0) {?>
                                <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_131287314167bb8ed86170c6_73530383', 'booking_form_quantity_wrapper', $this->tplIndex);
?>

                                <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_7027826167bb8ed8627017_42943377', 'booking_form_price_information', $this->tplIndex);
?>

                                <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_79115301167bb8ed867e627_15647197', 'booking_form_actions', $this->tplIndex);
?>

                            <?php } else { ?>
                                <div class="sold_out_alert">
                                    <span><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'All rooms sold out!'),$_smarty_tpl ) );?>
</span>
                                </div>
                            <?php }?>
                        <?php }?>
                    <?php } else { ?>

                        <?php if ($_smarty_tpl->tpl_vars['product']->value->allow_multiple_quantity) {?>
                            <div class="row">
                                <div class="form-group col-sm-6" id="quantity_wanted_p"<?php if ((!$_smarty_tpl->tpl_vars['allow_oosp']->value && $_smarty_tpl->tpl_vars['product']->value->quantity <= 0) || !$_smarty_tpl->tpl_vars['product']->value->available_for_order || $_smarty_tpl->tpl_vars['PS_CATALOG_MODE']->value) {?> style="display: none;"<?php }?>>
                                    <label for="quantity_wanted"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Quantity'),$_smarty_tpl ) );?>
</label>
                                    <div class="qty_sec_cont">
                                        <div class="qty_input_cont row margin-lr-0">
                                            <input autocomplete="off" type="text" min="1" name="qty" id="quantity_wanted" class="text" value="<?php if ((isset($_smarty_tpl->tpl_vars['quantityBackup']->value))) {
echo intval($_smarty_tpl->tpl_vars['quantityBackup']->value);
} else {
if ($_smarty_tpl->tpl_vars['product']->value->minimal_quantity > 1) {
echo $_smarty_tpl->tpl_vars['product']->value->minimal_quantity;
} else { ?>1<?php }
}?>">
                                        </div>
                                        <div class="qty_direction">
                                            <a href="#" data-field-qty="qty" class="btn btn-default product_quantity_up">
                                                <span>
                                                    <i class="icon-plus"></i>
                                                </span>
                                            </a>
                                            <a href="#" data-field-qty="qty" class="btn btn-default product_quantity_down">
                                                <span>
                                                    <i class="icon-minus"></i>
                                                </span>
                                            </a>
                                        </div>
                                    </div>
                                    <span class="clearfix"></span>
                                </div>
                            </div>
                        <?php }?>
                        <div class="row">
                            <div class="total_price_block col-xs-7 form-group">
                                <label class="control-label"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Price'),$_smarty_tpl ) );?>
</label>
                                <p>
                                    <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['convertPrice'][0], array( array('price'=>floatval($_smarty_tpl->tpl_vars['productPrice']->value)),$_smarty_tpl ) );?>

                                </p>
                            </div>
                        </div>
                    <?php }?>
                <?php }?>
                <?php if ($_smarty_tpl->tpl_vars['order_date_restrict']->value) {?>
                    <div class="order_restrict_alert">
                        <span><?php ob_start();
echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['dateFormat'][0], array( array('date'=>$_smarty_tpl->tpl_vars['max_order_date']->value,'full'=>0),$_smarty_tpl ) );
$_prefixVariable36 = ob_get_clean();
echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'You can\'t book rooms after %s.','sprintf'=>array($_prefixVariable36)),$_smarty_tpl ) );?>
</span>
                    </div>
                <?php }?>
            </form>
        <?php
}
}
/* {/block 'booking_form_content'} */
}
