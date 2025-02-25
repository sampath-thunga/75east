<?php
/* Smarty version 3.1.39, created on 2025-02-24 02:40:48
  from '/home/qloapps/www/QloApps/themes/hotel-reservation-theme/_partials/order-message.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.39',
  'unifunc' => 'content_67bb8ed8225842_96951976',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'ca37a072f3f18039cd7835d107d93436e51a7894' => 
    array (
      0 => '/home/qloapps/www/QloApps/themes/hotel-reservation-theme/_partials/order-message.tpl',
      1 => 1728563708,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_67bb8ed8225842_96951976 (Smarty_Internal_Template $_smarty_tpl) {
?>
<div class="message <?php if ((isset($_smarty_tpl->tpl_vars['message']->value['id_employee'])) && $_smarty_tpl->tpl_vars['message']->value['id_employee']) {?>management<?php } else { ?>customer<?php }?>">
    <div class="profile">
        <div class="row">
            <div class="col-sm-6">
                <strong>
                    <?php if ($_smarty_tpl->tpl_vars['message']->value['id_employee']) {?>
                        <?php echo htmlspecialchars($_smarty_tpl->tpl_vars['obj_hotel_branch_information']->value->hotel_name, ENT_QUOTES, 'UTF-8', true);?>

                    <?php } else { ?>
                        <?php echo htmlspecialchars($_smarty_tpl->tpl_vars['message']->value['cfirstname'], ENT_QUOTES, 'UTF-8', true);?>
 <?php echo htmlspecialchars($_smarty_tpl->tpl_vars['message']->value['clastname'], ENT_QUOTES, 'UTF-8', true);?>

                    <?php }?>
                </strong>
            </div>
            <div class="col-sm-6 text-right">
                <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['dateFormat'][0], array( array('date'=>$_smarty_tpl->tpl_vars['message']->value['date_add'],'full'=>1),$_smarty_tpl ) );?>

            </div>
        </div>
    </div>
    <div class="message-content">
        <?php echo nl2br(htmlspecialchars($_smarty_tpl->tpl_vars['message']->value['message'], ENT_QUOTES, 'UTF-8', true));?>

    </div>
</div>
<?php }
}
