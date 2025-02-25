<?php
/* Smarty version 3.1.39, created on 2025-02-24 02:40:48
  from '/home/qloapps/www/QloApps/themes/hotel-reservation-theme/_partials/order-extra-services.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.39',
  'unifunc' => 'content_67bb8ed843fb30_93267356',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '83c8bb68aa7b23cc3f98d7e8ed34b7f9333a73c8' => 
    array (
      0 => '/home/qloapps/www/QloApps/themes/hotel-reservation-theme/_partials/order-extra-services.tpl',
      1 => 1728563708,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_67bb8ed843fb30_93267356 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, false);
?>

<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_139028719967bb8ed8368b67_52554846', 'order_extra_services');
?>

<?php }
/* {block 'order_extra_services_tabs'} */
class Block_133911205967bb8ed8371f80_07752839 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

                    <ul class="nav nav-tabs">
                        <?php if ((isset($_smarty_tpl->tpl_vars['additionalServices']->value)) && $_smarty_tpl->tpl_vars['additionalServices']->value) {?>
                            <li class="active"><a href="#room_type_service_product_desc" data-toggle="tab"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Services'),$_smarty_tpl ) );?>
</a></li>
                        <?php }?>
                        <?php if ((isset($_smarty_tpl->tpl_vars['extraDemands']->value)) && $_smarty_tpl->tpl_vars['extraDemands']->value) {?>
                            <li <?php if (!(isset($_smarty_tpl->tpl_vars['additionalServices']->value)) || !$_smarty_tpl->tpl_vars['additionalServices']->value) {?> class="active" <?php }?>><a href="#room_type_demands_desc" data-toggle="tab"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Facilities'),$_smarty_tpl ) );?>
</a></li>
                        <?php }?>
                    </ul>
                <?php
}
}
/* {/block 'order_extra_services_tabs'} */
/* {block 'order_extra_services_tab_content'} */
class Block_87014623067bb8ed8379ef8_44793115 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

                            <?php if ((isset($_smarty_tpl->tpl_vars['additionalServices']->value)) && $_smarty_tpl->tpl_vars['additionalServices']->value) {?>
                                <div id="room_type_service_product_desc" class="tab-pane <?php if ((isset($_smarty_tpl->tpl_vars['additionalServices']->value)) && $_smarty_tpl->tpl_vars['additionalServices']->value) {?>active<?php }?>">
                                    <?php $_smarty_tpl->_assignInScope('roomCount', 1);?>
                                    <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['additionalServices']->value, 'roomAdditionalService', false, 'key');
$_smarty_tpl->tpl_vars['roomAdditionalService']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['key']->value => $_smarty_tpl->tpl_vars['roomAdditionalService']->value) {
$_smarty_tpl->tpl_vars['roomAdditionalService']->do_else = false;
?>
                                        <div class="room_demands">
                                            <div class="demand_header">
                                                <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Room'),$_smarty_tpl ) );?>
 <?php echo sprintf('%02d',$_smarty_tpl->tpl_vars['roomCount']->value);?>
&nbsp;
                                                <span>(<?php ob_start();
echo $_smarty_tpl->tpl_vars['roomAdditionalService']->value['adults'];
$_prefixVariable30 = ob_get_clean();
if ($_prefixVariable30 <= 9) {?>0<?php echo $_smarty_tpl->tpl_vars['roomAdditionalService']->value['adults'];
} else {
echo $_smarty_tpl->tpl_vars['roomAdditionalService']->value['adults'];
}?> <?php if ($_smarty_tpl->tpl_vars['roomAdditionalService']->value['adults'] > 1) {
echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Adults'),$_smarty_tpl ) );
} else {
echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Adult'),$_smarty_tpl ) );
}
if ($_smarty_tpl->tpl_vars['roomAdditionalService']->value['children'] > 0) {?>, <?php ob_start();
echo $_smarty_tpl->tpl_vars['roomAdditionalService']->value['children'];
$_prefixVariable31 = ob_get_clean();
if ($_prefixVariable31 <= 9) {?>0<?php echo $_smarty_tpl->tpl_vars['roomAdditionalService']->value['children'];
} else {
echo $_smarty_tpl->tpl_vars['roomAdditionalService']->value['children'];
}?> <?php if ($_smarty_tpl->tpl_vars['roomAdditionalService']->value['children'] > 1) {
echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Children'),$_smarty_tpl ) );
} else {
echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Child'),$_smarty_tpl ) );
}
}?>)</span>
                                            </div>
                                            <div class="room_demand_detail">
                                                <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['roomAdditionalService']->value['additional_services'], 'additionalService');
$_smarty_tpl->tpl_vars['additionalService']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['additionalService']->value) {
$_smarty_tpl->tpl_vars['additionalService']->do_else = false;
?>
                                                    <div class="room_demand_block">
                                                        <div class="">
                                                            <div class="">
                                                                <?php echo htmlspecialchars($_smarty_tpl->tpl_vars['additionalService']->value['name'], ENT_QUOTES, 'UTF-8', true);?>

                                                                <?php if ($_smarty_tpl->tpl_vars['additionalService']->value['allow_multiple_quantity']) {?>
                                                                    <span class="quantity"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'(Quantity: %s)','sprintf'=>array(sprintf('%02d',$_smarty_tpl->tpl_vars['additionalService']->value['quantity']))),$_smarty_tpl ) );?>
</span>
                                                                <?php }?>
                                                            </div>
                                                        </div>
                                                        <div class="">
                                                            <span>
                                                                <?php if ($_smarty_tpl->tpl_vars['useTax']->value) {?>
                                                                    <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['displayPrice'][0], array( array('price'=>htmlspecialchars($_smarty_tpl->tpl_vars['additionalService']->value['total_price_tax_incl'], ENT_QUOTES, 'UTF-8', true),'currency'=>$_smarty_tpl->tpl_vars['objOrder']->value->id_currency),$_smarty_tpl ) );?>

                                                                <?php } else { ?>
                                                                    <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['displayPrice'][0], array( array('price'=>htmlspecialchars($_smarty_tpl->tpl_vars['additionalService']->value['total_price_tax_excl'], ENT_QUOTES, 'UTF-8', true),'currency'=>$_smarty_tpl->tpl_vars['objOrder']->value->id_currency),$_smarty_tpl ) );?>

                                                                <?php }?>
                                                            </span>
                                                        </div>
                                                    </div>
                                                <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
                                            </div>
                                        </div>
                                        <?php $_smarty_tpl->_assignInScope('roomCount', $_smarty_tpl->tpl_vars['roomCount']->value+1);?>
                                    <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
                                </div>
                            <?php }?>
                        <?php
}
}
/* {/block 'order_extra_services_tab_content'} */
/* {block 'order_extra_demands_tab_content'} */
class Block_77697566067bb8ed83eb509_38776943 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

                            <?php if ((isset($_smarty_tpl->tpl_vars['extraDemands']->value)) && $_smarty_tpl->tpl_vars['extraDemands']->value) {?>
                                <div id="room_type_demands_desc" class="tab-pane <?php if (!(isset($_smarty_tpl->tpl_vars['additionalServices']->value)) || !$_smarty_tpl->tpl_vars['additionalServices']->value) {?>active<?php }?>">
                                    <?php $_smarty_tpl->_assignInScope('roomCount', 1);?>
                                    <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['extraDemands']->value, 'roomDemand');
$_smarty_tpl->tpl_vars['roomDemand']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['roomDemand']->value) {
$_smarty_tpl->tpl_vars['roomDemand']->do_else = false;
?>
                                        <div class="room_demands">
                                            <div class="demand_header">
                                                <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Room'),$_smarty_tpl ) );?>
 <?php echo sprintf('%02d',$_smarty_tpl->tpl_vars['roomCount']->value);?>
&nbsp;
                                                <span>(<?php ob_start();
echo $_smarty_tpl->tpl_vars['roomDemand']->value['adults'];
$_prefixVariable32 = ob_get_clean();
if ($_prefixVariable32 <= 9) {?>0<?php echo $_smarty_tpl->tpl_vars['roomDemand']->value['adults'];
} else {
echo $_smarty_tpl->tpl_vars['roomDemand']->value['adults'];
}?> <?php if ($_smarty_tpl->tpl_vars['roomDemand']->value['adults'] > 1) {
echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Adults'),$_smarty_tpl ) );
} else {
echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Adult'),$_smarty_tpl ) );
}
if ($_smarty_tpl->tpl_vars['roomDemand']->value['children'] > 0) {?>, <?php ob_start();
echo $_smarty_tpl->tpl_vars['roomDemand']->value['children'];
$_prefixVariable33 = ob_get_clean();
if ($_prefixVariable33 <= 9) {?>0<?php echo $_smarty_tpl->tpl_vars['roomDemand']->value['children'];
} else {
echo $_smarty_tpl->tpl_vars['roomDemand']->value['children'];
}?> <?php if ($_smarty_tpl->tpl_vars['roomDemand']->value['children'] > 1) {
echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Children'),$_smarty_tpl ) );
} else {
echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Child'),$_smarty_tpl ) );
}
}?>)</span>
                                            </div>
                                            <div class="room_demand_detail">
                                                <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['roomDemand']->value['extra_demands'], 'demand');
$_smarty_tpl->tpl_vars['demand']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['demand']->value) {
$_smarty_tpl->tpl_vars['demand']->do_else = false;
?>
                                                    <div class="room_demand_block">
                                                        <div class=""><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['demand']->value['name'], ENT_QUOTES, 'UTF-8', true);?>
</div>
                                                        <div class="">
                                                            <span>
                                                                <?php if ($_smarty_tpl->tpl_vars['useTax']->value) {?>
                                                                    <?php ob_start();
echo htmlspecialchars($_smarty_tpl->tpl_vars['demand']->value['total_price_tax_incl'], ENT_QUOTES, 'UTF-8', true);
$_prefixVariable34=ob_get_clean();
echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['displayPrice'][0], array( array('price'=>$_prefixVariable34,'currency'=>$_smarty_tpl->tpl_vars['objOrder']->value->id_currency),$_smarty_tpl ) );?>

                                                                <?php } else { ?>
                                                                    <?php ob_start();
echo htmlspecialchars($_smarty_tpl->tpl_vars['demand']->value['total_price_tax_excl'], ENT_QUOTES, 'UTF-8', true);
$_prefixVariable35=ob_get_clean();
echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['displayPrice'][0], array( array('price'=>$_prefixVariable35,'currency'=>$_smarty_tpl->tpl_vars['objOrder']->value->id_currency),$_smarty_tpl ) );?>

                                                                <?php }?>
                                                            </span>
                                                        </div>
                                                    </div>
                                                <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
                                            </div>
                                        </div>
                                        <?php $_smarty_tpl->_assignInScope('roomCount', $_smarty_tpl->tpl_vars['roomCount']->value+1);?>
                                    <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
                                    </div>
                                </div>
                            <?php }?>
                        <?php
}
}
/* {/block 'order_extra_demands_tab_content'} */
/* {block 'order_extra_services_tabs_content'} */
class Block_57909223867bb8ed83795b3_06159805 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

                    <div class="tab-content">
                        <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_87014623067bb8ed8379ef8_44793115', 'order_extra_services_tab_content', $this->tplIndex);
?>


                        <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_77697566067bb8ed83eb509_38776943', 'order_extra_demands_tab_content', $this->tplIndex);
?>

                    </div>
                <?php
}
}
/* {/block 'order_extra_services_tabs_content'} */
/* {block 'order_extra_services'} */
class Block_139028719967bb8ed8368b67_52554846 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'order_extra_services' => 
  array (
    0 => 'Block_139028719967bb8ed8368b67_52554846',
  ),
  'order_extra_services_tabs' => 
  array (
    0 => 'Block_133911205967bb8ed8371f80_07752839',
  ),
  'order_extra_services_tabs_content' => 
  array (
    0 => 'Block_57909223867bb8ed83795b3_06159805',
  ),
  'order_extra_services_tab_content' => 
  array (
    0 => 'Block_87014623067bb8ed8379ef8_44793115',
  ),
  'order_extra_demands_tab_content' => 
  array (
    0 => 'Block_77697566067bb8ed83eb509_38776943',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

    <div class="card">
        <div class="card-header">
            <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Extra Services'),$_smarty_tpl ) );?>

        </div>
        <div class="card-body">
            <?php if (((isset($_smarty_tpl->tpl_vars['extraDemands']->value)) && $_smarty_tpl->tpl_vars['extraDemands']->value) || ((isset($_smarty_tpl->tpl_vars['additionalServices']->value)) && $_smarty_tpl->tpl_vars['additionalServices']->value)) {?>
                <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_133911205967bb8ed8371f80_07752839', 'order_extra_services_tabs', $this->tplIndex);
?>

                <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_57909223867bb8ed83795b3_06159805', 'order_extra_services_tabs_content', $this->tplIndex);
?>

            <?php }?>
        </div>
    </div>
<?php
}
}
/* {/block 'order_extra_services'} */
}
