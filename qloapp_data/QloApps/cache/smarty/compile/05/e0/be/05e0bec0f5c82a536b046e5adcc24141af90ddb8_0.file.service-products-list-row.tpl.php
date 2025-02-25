<?php
/* Smarty version 3.1.39, created on 2025-02-24 02:40:48
  from '/home/qloapps/www/QloApps/themes/hotel-reservation-theme/_partials/service-products-list-row.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.39',
  'unifunc' => 'content_67bb8ed88465e9_41768479',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '05e0bec0f5c82a536b046e5adcc24141af90ddb8' => 
    array (
      0 => '/home/qloapps/www/QloApps/themes/hotel-reservation-theme/_partials/service-products-list-row.tpl',
      1 => 1728563708,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_67bb8ed88465e9_41768479 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, false);
?>

<?php if ((isset($_smarty_tpl->tpl_vars['service_product']->value)) && $_smarty_tpl->tpl_vars['service_product']->value) {?>
    <li class="row service-product-element">
        <div class="col-xs-4 col-sm-3 col-md-2">
            <a href="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['link']->value->getImageLink($_smarty_tpl->tpl_vars['service_product']->value['link_rewrite'],$_smarty_tpl->tpl_vars['service_product']->value['id_image'],'large_default'), ENT_QUOTES, 'UTF-8', true);?>
" rel="htl-images<?php echo $_smarty_tpl->tpl_vars['service_product']->value['id_product'];?>
" class="fancybox" title="<?php if (!empty($_smarty_tpl->tpl_vars['service_product']->value['legend'])) {
echo htmlspecialchars($_smarty_tpl->tpl_vars['service_product']->value['legend'], ENT_QUOTES, 'UTF-8', true);
} else {
echo htmlspecialchars($_smarty_tpl->tpl_vars['service_product']->value['name'], ENT_QUOTES, 'UTF-8', true);
}?>">
                <img class="img-responsive service-product-img" src="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['link']->value->getImageLink($_smarty_tpl->tpl_vars['service_product']->value['link_rewrite'],$_smarty_tpl->tpl_vars['service_product']->value['id_image'],'home_default'), ENT_QUOTES, 'UTF-8', true);?>
" alt="<?php if (!empty($_smarty_tpl->tpl_vars['service_product']->value['legend'])) {
echo htmlspecialchars($_smarty_tpl->tpl_vars['service_product']->value['legend'], ENT_QUOTES, 'UTF-8', true);
} else {
echo htmlspecialchars($_smarty_tpl->tpl_vars['service_product']->value['name'], ENT_QUOTES, 'UTF-8', true);
}?>" title="<?php if (!empty($_smarty_tpl->tpl_vars['service_product']->value['legend'])) {
echo htmlspecialchars($_smarty_tpl->tpl_vars['service_product']->value['legend'], ENT_QUOTES, 'UTF-8', true);
} else {
echo htmlspecialchars($_smarty_tpl->tpl_vars['service_product']->value['name'], ENT_QUOTES, 'UTF-8', true);
}?>">
            </a>
            <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['service_product']->value['images'], 'image');
$_smarty_tpl->tpl_vars['image']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['image']->value) {
$_smarty_tpl->tpl_vars['image']->do_else = false;
?>
                <?php if ($_smarty_tpl->tpl_vars['image']->value['cover'] == 0) {?>
                    <a href="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['link']->value->getImageLink($_smarty_tpl->tpl_vars['service_product']->value['link_rewrite'],$_smarty_tpl->tpl_vars['image']->value['id_image'],'large_default'), ENT_QUOTES, 'UTF-8', true);?>
" rel="htl-images<?php echo $_smarty_tpl->tpl_vars['service_product']->value['id_product'];?>
" class="fancybox hidden"  title="<?php if (!empty($_smarty_tpl->tpl_vars['image']->value['legend'])) {
echo htmlspecialchars($_smarty_tpl->tpl_vars['image']->value['legend'], ENT_QUOTES, 'UTF-8', true);
} else {
echo htmlspecialchars($_smarty_tpl->tpl_vars['service_product']->value['name'], ENT_QUOTES, 'UTF-8', true);
}?>">
                    </a>
                <?php }?>
            <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
        </div>
        <div class="col-xs-8 col-sm-9 col-md-10">
            <div class="row">
                <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_212458721367bb8ed87eabe8_73901995', 'service_product_name');
?>

                <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_135541738367bb8ed87ecee4_82562940', 'service_product_description');
?>


                <div class="col-sm-12 service_product_action_block">
                    <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_139226768167bb8ed87f2266_20588283', 'service_products_actions_right');
?>


                    <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_155966450167bb8ed880dca9_58306940', 'service_products_actions_left');
?>

                </div>
            </div>
            <?php if (!(isset($_smarty_tpl->tpl_vars['product']->value->id))) {
$_smarty_tpl->_assignInScope('id_product', 0);
} else {
$_smarty_tpl->_assignInScope('id_product', $_smarty_tpl->tpl_vars['product']->value->id);
}?>
            <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_54193743167bb8ed8842220_27017202', 'displayServiceProductListRowBottom');
?>

        </div>
    </li>
<?php }
}
/* {block 'service_product_name'} */
class Block_212458721367bb8ed87eabe8_73901995 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'service_product_name' => 
  array (
    0 => 'Block_212458721367bb8ed87eabe8_73901995',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

                    <div class="col-sm-12 clearfix service-product-block">
                        <span class="service-product-name"><?php echo $_smarty_tpl->tpl_vars['service_product']->value['name'];?>
</span>
                    </div>
                <?php
}
}
/* {/block 'service_product_name'} */
/* {block 'service_product_description'} */
class Block_135541738367bb8ed87ecee4_82562940 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'service_product_description' => 
  array (
    0 => 'Block_135541738367bb8ed87ecee4_82562940',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

                    <?php if ($_smarty_tpl->tpl_vars['service_product']->value['description_short']) {?>
                        <div class="col-sm-12 clearfix service-product-short-desc service-product-block">
                            <?php echo $_smarty_tpl->tpl_vars['service_product']->value['description_short'];?>

                        </div>
                    <?php }?>
                <?php
}
}
/* {/block 'service_product_description'} */
/* {block 'service_product_price'} */
class Block_186818395167bb8ed87f87a0_49981882 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

                                    <?php if (!$_smarty_tpl->tpl_vars['priceDisplay']->value) {
echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['convertPrice'][0], array( array('price'=>$_smarty_tpl->tpl_vars['service_product']->value['price_tax_incl']),$_smarty_tpl ) );
} else {
echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['convertPrice'][0], array( array('price'=>$_smarty_tpl->tpl_vars['service_product']->value['price_tax_exc']),$_smarty_tpl ) );
}
if ($_smarty_tpl->tpl_vars['service_product']->value['price_calculation_method'] == Product::PRICE_CALCULATION_METHOD_PER_DAY) {?><span class="price-label"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'/Night'),$_smarty_tpl ) );?>
</span><?php }?>
                                <?php
}
}
/* {/block 'service_product_price'} */
/* {block 'service_products_actions_right'} */
class Block_139226768167bb8ed87f2266_20588283 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'service_products_actions_right' => 
  array (
    0 => 'Block_139226768167bb8ed87f2266_20588283',
  ),
  'service_product_price' => 
  array (
    0 => 'Block_186818395167bb8ed87f87a0_49981882',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

                        <?php if (!$_smarty_tpl->tpl_vars['PS_CATALOG_MODE']->value && !$_smarty_tpl->tpl_vars['order_date_restrict']->value && ($_smarty_tpl->tpl_vars['service_product']->value['show_price'] && !(isset($_smarty_tpl->tpl_vars['restricted_country_mode']->value)))) {?>
                            <div class="service-product-price">
                                <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_186818395167bb8ed87f87a0_49981882', 'service_product_price', $this->tplIndex);
?>

                                <?php if ($_smarty_tpl->tpl_vars['service_product']->value['allow_multiple_quantity'] && $_smarty_tpl->tpl_vars['service_product']->value['available_for_order'] && $_smarty_tpl->tpl_vars['service_product']->value['max_quantity'] > 0) {?>
                                    <div class="service-max-quantity-info">
                                        <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Maximum'),$_smarty_tpl ) );?>
 <?php echo $_smarty_tpl->tpl_vars['service_product']->value['max_quantity'];?>
 <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'quantity can be added'),$_smarty_tpl ) );?>
.
                                    </div>
                                <?php }?>
                            </div>
                        <?php }?>
                    <?php
}
}
/* {/block 'service_products_actions_right'} */
/* {block 'service_products_actions_left'} */
class Block_155966450167bb8ed880dca9_58306940 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'service_products_actions_left' => 
  array (
    0 => 'Block_155966450167bb8ed880dca9_58306940',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

                        <?php if (($_smarty_tpl->tpl_vars['service_product']->value['show_price'] && !(isset($_smarty_tpl->tpl_vars['restricted_country_mode']->value)))) {?>
                            <?php if ($_smarty_tpl->tpl_vars['service_product']->value['available_for_order'] && !$_smarty_tpl->tpl_vars['PS_CATALOG_MODE']->value && !$_smarty_tpl->tpl_vars['order_date_restrict']->value && !(((isset($_smarty_tpl->tpl_vars['restricted_country_mode']->value)) && $_smarty_tpl->tpl_vars['restricted_country_mode']->value))) {?>
                                <div class="service-product-actions">
                                    <?php if ($_smarty_tpl->tpl_vars['service_product']->value['allow_multiple_quantity'] && $_smarty_tpl->tpl_vars['service_product']->value['available_for_order']) {?>
                                        <div class="qty_container">
                                            <input type="hidden" class="service_product_qty" id="service_product_qty_<?php echo $_smarty_tpl->tpl_vars['service_product']->value['id_product'];?>
" name="service_product_qty_<?php echo $_smarty_tpl->tpl_vars['service_product']->value['id_product'];?>
" data-id-product="<?php echo $_smarty_tpl->tpl_vars['service_product']->value['id_product'];?>
" data-max_quantity="<?php echo $_smarty_tpl->tpl_vars['service_product']->value['max_quantity'];?>
" value="<?php if ((isset($_smarty_tpl->tpl_vars['service_product']->value['quantity_added'])) && $_smarty_tpl->tpl_vars['service_product']->value['quantity_added']) {
echo htmlspecialchars($_smarty_tpl->tpl_vars['service_product']->value['quantity_added'], ENT_QUOTES, 'UTF-8', true);
} else { ?>1<?php }?>">
                                            <div class="qty_count pull-left">
                                                <span><?php if ((isset($_smarty_tpl->tpl_vars['service_product']->value['quantity_added'])) && $_smarty_tpl->tpl_vars['service_product']->value['quantity_added']) {
echo htmlspecialchars($_smarty_tpl->tpl_vars['service_product']->value['quantity_added'], ENT_QUOTES, 'UTF-8', true);
} else { ?>1<?php }?></span>
                                            </div>
                                            <div class="qty_direction pull-left">
                                                <a href="#" class="btn btn-default quantity_up service_product_qty_up"><span><i class="icon-plus"></i></span></a>
                                                <a href="#" class="btn btn-default quantity_down service_product_qty_down"><span><i class="icon-minus"></i></span></a>
                                            </div>
                                        </div>
                                    <?php }?>
                                    <button class="btn btn-service-product <?php if ((isset($_smarty_tpl->tpl_vars['service_product']->value['selected'])) && $_smarty_tpl->tpl_vars['service_product']->value['selected']) {?> btn-danger remove_roomtype_product<?php } else { ?> btn-success add_roomtype_product<?php }?> select_room_service select_room_service_<?php echo $_smarty_tpl->tpl_vars['service_product']->value['id_product'];?>
 pull-right" data-id-product="<?php echo $_smarty_tpl->tpl_vars['service_product']->value['id_product'];?>
"><?php if ((isset($_smarty_tpl->tpl_vars['service_product']->value['selected'])) && $_smarty_tpl->tpl_vars['service_product']->value['selected']) {
echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Remove'),$_smarty_tpl ) );
} else {
echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Select'),$_smarty_tpl ) );
}?></button>
                                </div>
                            <?php }?>
                        <?php }?>
                    <?php
}
}
/* {/block 'service_products_actions_left'} */
/* {block 'displayServiceProductListRowBottom'} */
class Block_54193743167bb8ed8842220_27017202 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'displayServiceProductListRowBottom' => 
  array (
    0 => 'Block_54193743167bb8ed8842220_27017202',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

                <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['hook'][0], array( array('h'=>'displayServiceProductListRowBottom','id_product'=>$_smarty_tpl->tpl_vars['id_product']->value,'id_service_product'=>$_smarty_tpl->tpl_vars['service_product']->value['id_product']),$_smarty_tpl ) );?>

            <?php
}
}
/* {/block 'displayServiceProductListRowBottom'} */
}
