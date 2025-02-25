<?php
/* Smarty version 3.1.39, created on 2025-02-24 02:40:48
  from '/home/qloapps/www/QloApps/themes/hotel-reservation-theme/_partials/order-room-detail.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.39',
  'unifunc' => 'content_67bb8ed8308b95_73601669',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'fa87a6a285c71ae3c41c7ade63c69a8eaa8eab52' => 
    array (
      0 => '/home/qloapps/www/QloApps/themes/hotel-reservation-theme/_partials/order-room-detail.tpl',
      1 => 1728563708,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_67bb8ed8308b95_73601669 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, false);
?>

<div class="booking-room-detail" data-id-product="<?php echo $_smarty_tpl->tpl_vars['data_v']->value['id_product'];?>
" data-date-diff="<?php echo $_smarty_tpl->tpl_vars['rm_k']->value;?>
">
    <div class="row">
        <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_14219216967bb8ed826fc31_23250305', 'order_room_detail_room_image');
?>

        <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_129264347467bb8ed827d7d6_83123131', 'order_room_detail_room_detail');
?>

    </div>
</div>
<?php }
/* {block 'order_room_detail_room_image'} */
class Block_14219216967bb8ed826fc31_23250305 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'order_room_detail_room_image' => 
  array (
    0 => 'Block_14219216967bb8ed826fc31_23250305',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

            <div class="col-xs-3 col-sm-2">
                <a href="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['link']->value->getProductLink($_smarty_tpl->tpl_vars['data_v']->value['id_product']), ENT_QUOTES, 'UTF-8', true);?>
" title="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['data_v']->value['name'], ENT_QUOTES, 'UTF-8', true);?>
" target="_blank">
                    <img class="img img-responsive img-room-type" src="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['data_v']->value['cover_img'], ENT_QUOTES, 'UTF-8', true);?>
" />
                </a>
            </div>
        <?php
}
}
/* {/block 'order_room_detail_room_image'} */
/* {block 'order_room_detail_room_detail'} */
class Block_129264347467bb8ed827d7d6_83123131 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'order_room_detail_room_detail' => 
  array (
    0 => 'Block_129264347467bb8ed827d7d6_83123131',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_checkPlugins(array(0=>array('file'=>'/home/qloapps/www/QloApps/tools/smarty/plugins/modifier.date_format.php','function'=>'smarty_modifier_date_format',),));
?>

            <div class="col-xs-9 col-sm-10 info-wrap">
                <div class="row">
                    <div class="col-xs-12">
                        <a href="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['link']->value->getProductLink($_smarty_tpl->tpl_vars['data_v']->value['id_product']), ENT_QUOTES, 'UTF-8', true);?>
" title="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['data_v']->value['name'], ENT_QUOTES, 'UTF-8', true);?>
" target="_blank" class="room-type-name">
                            <h3><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['data_v']->value['name'], ENT_QUOTES, 'UTF-8', true);?>
</h3>
                        </a>

                        <?php if ($_smarty_tpl->tpl_vars['rm_v']->value['count_refunded'] > 0 || $_smarty_tpl->tpl_vars['rm_v']->value['count_cancelled'] > 0) {?>
                            <div class="num-refunded-rooms">
                                <?php if ($_smarty_tpl->tpl_vars['rm_v']->value['count_cancelled'] > 0) {?>
                                    <span class="badge badge-danger">
                                        <?php if ($_smarty_tpl->tpl_vars['rm_v']->value['count_cancelled'] > 1) {?>
                                            <?php echo $_smarty_tpl->tpl_vars['rm_v']->value['count_cancelled'];?>
 <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Rooms Cancelled'),$_smarty_tpl ) );?>

                                        <?php } else { ?>
                                            <?php echo $_smarty_tpl->tpl_vars['rm_v']->value['count_cancelled'];?>
 <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Room Cancelled'),$_smarty_tpl ) );?>

                                        <?php }?>
                                    </span>
                                <?php }?>
                                <?php if ($_smarty_tpl->tpl_vars['rm_v']->value['count_refunded'] > 0) {?>
                                    <span class="badge badge-danger">
                                        <?php if ($_smarty_tpl->tpl_vars['rm_v']->value['count_refunded'] > 1) {?>
                                            <?php echo $_smarty_tpl->tpl_vars['rm_v']->value['count_refunded'];?>
 <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Rooms Refunded'),$_smarty_tpl ) );?>

                                        <?php } else { ?>
                                            <?php echo $_smarty_tpl->tpl_vars['rm_v']->value['count_refunded'];?>
 <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Room Refunded'),$_smarty_tpl ) );?>

                                        <?php }?>
                                    </span>
                                <?php }?>
                            </div>
                        <?php }?>
                    </div>
                    <div class="col-xs-12">
                        <div class="description-list">
                            <dl class="">
                                <div class="row">
                                    <?php $_smarty_tpl->_assignInScope('is_full_date', ($_smarty_tpl->tpl_vars['show_full_date']->value && (smarty_modifier_date_format($_smarty_tpl->tpl_vars['rm_v']->value['data_form'],'%D') == smarty_modifier_date_format($_smarty_tpl->tpl_vars['rm_v']->value['data_to'],'%D'))));?>
                                    <div class="col-xs-12 col-md-6">
                                        <div class="row">
                                            <dt class="col-xs-5"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Check-in'),$_smarty_tpl ) );?>
</dt>
                                            <dd class="col-xs-7"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['dateFormat'][0], array( array('date'=>$_smarty_tpl->tpl_vars['rm_v']->value['data_form'],'full'=>$_smarty_tpl->tpl_vars['is_full_date']->value),$_smarty_tpl ) );?>
</dd>
                                        </div>
                                    </div>
                                    <div class="col-xs-12 col-md-6">
                                        <div class="row">
                                            <dt class="col-xs-5"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Check-out'),$_smarty_tpl ) );?>
</dt>
                                            <dd class="col-xs-7"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['dateFormat'][0], array( array('date'=>$_smarty_tpl->tpl_vars['rm_v']->value['data_to'],'full'=>$_smarty_tpl->tpl_vars['is_full_date']->value),$_smarty_tpl ) );?>
</dd>
                                        </div>
                                    </div>
                                </div>

                                <div class="row">
                                    <div class="col-xs-12 col-md-6">
                                        <div class="row">
                                            <dt class="col-xs-5"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Rooms'),$_smarty_tpl ) );?>
</dt>
                                            <dd class="col-xs-7"><?php echo sprintf('%02d',$_smarty_tpl->tpl_vars['rm_v']->value['num_rm']);?>
</dd>
                                        </div>
                                    </div>
                                    <div class="col-xs-12 col-md-6">
                                        <div class="row">
                                            <dt class="col-xs-5"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Guests'),$_smarty_tpl ) );?>
</dt>
                                            <dd class="col-xs-7">
                                                <?php echo sprintf('%02d',$_smarty_tpl->tpl_vars['rm_v']->value['adults']);?>
 <?php if ($_smarty_tpl->tpl_vars['rm_v']->value['adults'] > 1) {
echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Adults'),$_smarty_tpl ) );
} else {
echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Adult'),$_smarty_tpl ) );
}
if ($_smarty_tpl->tpl_vars['rm_v']->value['children']) {?>, <?php echo sprintf('%02d',$_smarty_tpl->tpl_vars['rm_v']->value['children']);?>
 <?php if ($_smarty_tpl->tpl_vars['rm_v']->value['children'] > 1) {
echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Children'),$_smarty_tpl ) );
} else {
echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Child'),$_smarty_tpl ) );
}
}?>
                                            </dd>
                                        </div>
                                    </div>
                                </div>

                                <div class="row">
                                    <div class="col-xs-12 col-md-6">
                                        <div class="row">
                                            <dt class="col-xs-5"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Extra Services'),$_smarty_tpl ) );?>
</dt>
                                            <dd class="col-xs-7">
                                                <?php if (((isset($_smarty_tpl->tpl_vars['rm_v']->value['extra_demands'])) && $_smarty_tpl->tpl_vars['rm_v']->value['extra_demands']) || (isset($_smarty_tpl->tpl_vars['rm_v']->value['additional_services'])) && $_smarty_tpl->tpl_vars['rm_v']->value['additional_services']) {?>
                                                    <a data-date_from="<?php echo $_smarty_tpl->tpl_vars['rm_v']->value['data_form'];?>
" data-date_to="<?php echo $_smarty_tpl->tpl_vars['rm_v']->value['data_to'];?>
" data-id_product="<?php echo $_smarty_tpl->tpl_vars['data_v']->value['id_product'];?>
" data-id_order="<?php echo $_smarty_tpl->tpl_vars['order']->value->id;?>
" data-action="<?php ob_start();
echo $_smarty_tpl->tpl_vars['page_name']->value;
$_prefixVariable29 = ob_get_clean();
echo $_smarty_tpl->tpl_vars['link']->value->getPageLink($_prefixVariable29);?>
" class="btn-view-extra-services" href="#rooms_type_extra_services_form">
                                                    <?php }?>
                                                    <?php if ($_smarty_tpl->tpl_vars['group_use_tax']->value) {?>
                                                        <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['displayWtPriceWithCurrency'][0], array( array('price'=>($_smarty_tpl->tpl_vars['rm_v']->value['extra_demands_price_ti']+$_smarty_tpl->tpl_vars['rm_v']->value['additional_services_price_ti']),'currency'=>$_smarty_tpl->tpl_vars['currency']->value),$_smarty_tpl ) );?>

                                                    <?php } else { ?>
                                                        <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['displayWtPriceWithCurrency'][0], array( array('price'=>($_smarty_tpl->tpl_vars['rm_v']->value['extra_demands_price_te']+$_smarty_tpl->tpl_vars['rm_v']->value['additional_services_price_te']),'currency'=>$_smarty_tpl->tpl_vars['currency']->value),$_smarty_tpl ) );?>

                                                    <?php }?>
                                                    <?php if (((isset($_smarty_tpl->tpl_vars['rm_v']->value['extra_demands'])) && $_smarty_tpl->tpl_vars['rm_v']->value['extra_demands']) || (isset($_smarty_tpl->tpl_vars['rm_v']->value['additional_services'])) && $_smarty_tpl->tpl_vars['rm_v']->value['additional_services']) {?>
                                                    </a>
                                                <?php }?>
                                            </dd>
                                        </div>
                                    </div>
                                    <div class="col-xs-12 col-md-6">
                                        <div class="row">
                                            <dt class="col-xs-5"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Total Price'),$_smarty_tpl ) );?>
</dt>
                                            <dd class="col-xs-7">
                                                <?php if ($_smarty_tpl->tpl_vars['group_use_tax']->value) {?>
                                                    <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['displayWtPriceWithCurrency'][0], array( array('price'=>($_smarty_tpl->tpl_vars['rm_v']->value['amount_tax_incl']+$_smarty_tpl->tpl_vars['rm_v']->value['extra_demands_price_ti']+$_smarty_tpl->tpl_vars['rm_v']->value['additional_services_price_ti']+$_smarty_tpl->tpl_vars['rm_v']->value['additional_services_price_auto_add_ti']),'currency'=>$_smarty_tpl->tpl_vars['currency']->value),$_smarty_tpl ) );?>

                                                <?php } else { ?>
                                                    <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['displayWtPriceWithCurrency'][0], array( array('price'=>($_smarty_tpl->tpl_vars['rm_v']->value['amount_tax_excl']+$_smarty_tpl->tpl_vars['rm_v']->value['extra_demands_price_te']+$_smarty_tpl->tpl_vars['rm_v']->value['additional_services_price_te']+$_smarty_tpl->tpl_vars['rm_v']->value['additional_services_price_auto_add_te']),'currency'=>$_smarty_tpl->tpl_vars['currency']->value),$_smarty_tpl ) );?>

                                                <?php }?>
                                                <?php if (((isset($_smarty_tpl->tpl_vars['rm_v']->value['extra_demands'])) && $_smarty_tpl->tpl_vars['rm_v']->value['extra_demands']) || (isset($_smarty_tpl->tpl_vars['rm_v']->value['additional_services'])) && $_smarty_tpl->tpl_vars['rm_v']->value['additional_services']) {?>
                                                    <span class="order-price-info">
                                                        <img src="<?php echo $_smarty_tpl->tpl_vars['img_dir']->value;?>
icon/icon-info.svg" />
                                                    </span>
                                                    <div class="price-info-container" style="display: none;">
                                                        <div class="price-info-tooltip-cont">
                                                            <div class="list-row">
                                                                <div>
                                                                    <p><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Room(s) cost:'),$_smarty_tpl ) );?>
</p>
                                                                </div>
                                                                <div class="text-right">
                                                                    <p>
                                                                        <?php if ($_smarty_tpl->tpl_vars['group_use_tax']->value) {?>
                                                                            <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['displayWtPriceWithCurrency'][0], array( array('price'=>($_smarty_tpl->tpl_vars['rm_v']->value['amount_tax_incl']+$_smarty_tpl->tpl_vars['rm_v']->value['additional_services_price_auto_add_ti']),'currency'=>$_smarty_tpl->tpl_vars['currency']->value),$_smarty_tpl ) );?>

                                                                        <?php } else { ?>
                                                                            <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['displayWtPriceWithCurrency'][0], array( array('price'=>($_smarty_tpl->tpl_vars['rm_v']->value['amount_tax_excl']+$_smarty_tpl->tpl_vars['rm_v']->value['additional_services_price_auto_add_te']),'currency'=>$_smarty_tpl->tpl_vars['currency']->value),$_smarty_tpl ) );?>

                                                                        <?php }?>
                                                                    </p>
                                                                </div>
                                                            </div>
                                                            <div class="list-row">
                                                                <div>
                                                                    <p><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Service(s) cost:'),$_smarty_tpl ) );?>
</p>
                                                                </div>
                                                                <div class="text-right">
                                                                    <p>
                                                                        <?php if ($_smarty_tpl->tpl_vars['group_use_tax']->value) {?>
                                                                            <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['displayWtPriceWithCurrency'][0], array( array('price'=>($_smarty_tpl->tpl_vars['rm_v']->value['extra_demands_price_ti']+$_smarty_tpl->tpl_vars['rm_v']->value['additional_services_price_ti']),'currency'=>$_smarty_tpl->tpl_vars['currency']->value),$_smarty_tpl ) );?>

                                                                        <?php } else { ?>
                                                                            <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['displayWtPriceWithCurrency'][0], array( array('price'=>($_smarty_tpl->tpl_vars['rm_v']->value['extra_demands_price_te']+$_smarty_tpl->tpl_vars['rm_v']->value['additional_services_price_te']),'currency'=>$_smarty_tpl->tpl_vars['currency']->value),$_smarty_tpl ) );?>

                                                                        <?php }?>
                                                                    </p>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                <?php }?>
                                            </dd>
                                        </div>
                                    </div>
                                </div>
                            </dl>
                        </div>
                    </div>
                </div>
            </div>
        <?php
}
}
/* {/block 'order_room_detail_room_detail'} */
}
