<?php
/* Smarty version 3.1.39, created on 2025-02-24 02:40:50
  from '/home/qloapps/www/QloApps/themes/hotel-reservation-theme/modules/blockuserinfo/nav.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.39',
  'unifunc' => 'content_67bb8edaa598f7_45784639',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'fa5e18c8a364b77b3e0316761f6d6cf99ba6b8b6' => 
    array (
      0 => '/home/qloapps/www/QloApps/themes/hotel-reservation-theme/modules/blockuserinfo/nav.tpl',
      1 => 1728563708,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_67bb8edaa598f7_45784639 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, false);
?>

<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_103187178767bb8edaa472c5_56456059', 'user_navigation');
?>

<?php }
/* {block 'displayUserNavigationList'} */
class Block_201340564667bb8edaa54c57_96132691 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

                            <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['hook'][0], array( array('h'=>'displayUserNavigationList'),$_smarty_tpl ) );?>

                        <?php
}
}
/* {/block 'displayUserNavigationList'} */
/* {block 'user_navigation'} */
class Block_103187178767bb8edaa472c5_56456059 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'user_navigation' => 
  array (
    0 => 'Block_103187178767bb8edaa472c5_56456059',
  ),
  'displayUserNavigationList' => 
  array (
    0 => 'Block_201340564667bb8edaa54c57_96132691',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

    <?php if (!(isset($_smarty_tpl->tpl_vars['ajaxCustomerLogin']->value))) {?>
        <div class="header-top-item header_user_info hidden-xs">
    <?php }?>
        <?php if ($_smarty_tpl->tpl_vars['logged']->value) {?>
            <ul class="navbar-nav hidden-xs">
                <li class="dropdown">
                    <button class="btn dropdown-toggle" type="button" id="user_info_acc" data-toggle="dropdown" aria-haspopup="true" aria-expanded="true">
                        <span class="account_user_name hide_xs"><?php echo $_smarty_tpl->tpl_vars['cookie']->value->customer_firstname;?>
</span>
                        <span class="account_user_name visi_xs"><i class="icon-user"></i></span>
                        <span class="caret"></span>
                    </button>
                    <ul class="dropdown-menu" aria-labelledby="user_info_acc">
                        <li><a href="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['link']->value->getPageLink('my-account',true), ENT_QUOTES, 'UTF-8', true);?>
" title="<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'View my customer account','mod'=>'blockuserinfo'),$_smarty_tpl ) );?>
"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Accounts','mod'=>'blockuserinfo'),$_smarty_tpl ) );?>
</a></li>
                        <li><a href="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['link']->value->getPageLink('history',true), ENT_QUOTES, 'UTF-8', true);?>
" title="<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'View my orders','mod'=>'blockuserinfo'),$_smarty_tpl ) );?>
"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Orders'),$_smarty_tpl ) );?>
</a></li>
                        <li><a href="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['link']->value->getPageLink('index',true,NULL,"mylogout"), ENT_QUOTES, 'UTF-8', true);?>
"  title="<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Log me out','mod'=>'blockuserinfo'),$_smarty_tpl ) );?>
"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Logout'),$_smarty_tpl ) );?>
</a></li>
                        <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_201340564667bb8edaa54c57_96132691', 'displayUserNavigationList', $this->tplIndex);
?>

                    </ul>
                </li>
            <?php } else { ?>
                <a class="header-top-link" href="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['link']->value->getPageLink('my-account',true), ENT_QUOTES, 'UTF-8', true);?>
" rel="nofollow" title="<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Log in to your customer account','mod'=>'blockuserinfo'),$_smarty_tpl ) );?>
">
                    <span class="hide_xs"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Sign in','mod'=>'blockuserinfo'),$_smarty_tpl ) );?>
</span>
                    <span class="visi_xs"><i class="icon-user"></i></span>
                </a>
            </ul>
        <?php }?>
    <?php if (!(isset($_smarty_tpl->tpl_vars['ajaxCustomerLogin']->value))) {?>
        </div>
    <?php }
}
}
/* {/block 'user_navigation'} */
}
