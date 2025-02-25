<?php
/* Smarty version 3.1.39, created on 2025-02-24 02:40:48
  from '/home/qloapps/www/QloApps/themes/hotel-reservation-theme/_partials/hotel_images.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.39',
  'unifunc' => 'content_67bb8ed8752a22_26532431',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'd408d21c1c892de2578f94f824b0cf458dcafdce' => 
    array (
      0 => '/home/qloapps/www/QloApps/themes/hotel-reservation-theme/_partials/hotel_images.tpl',
      1 => 1728563708,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_67bb8ed8752a22_26532431 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, false);
?>

<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_99850447667bb8ed873e5a8_47488561', 'hotel_images');
?>

<?php }
/* {block 'hotel_images'} */
class Block_99850447667bb8ed873e5a8_47488561 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'hotel_images' => 
  array (
    0 => 'Block_99850447667bb8ed873e5a8_47488561',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

    <?php if (is_array($_smarty_tpl->tpl_vars['hotel_images']->value) && count($_smarty_tpl->tpl_vars['hotel_images']->value)) {?>
        <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['hotel_images']->value, 'hotel_image');
$_smarty_tpl->tpl_vars['hotel_image']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['hotel_image']->value) {
$_smarty_tpl->tpl_vars['hotel_image']->do_else = false;
?>
            <div class="col-sm-4 image-item">
                <a class="hotel-images-fancybox" href="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['hotel_image']->value['link'], ENT_QUOTES, 'UTF-8', true);?>
">
                    <img class="img img-responsive" src="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['hotel_image']->value['link'], ENT_QUOTES, 'UTF-8', true);?>
">
                </a>
            </div>
        <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
    <?php }
}
}
/* {/block 'hotel_images'} */
}
