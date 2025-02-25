<?php
/* Smarty version 3.1.39, created on 2025-02-24 02:40:50
  from '/home/qloapps/www/QloApps/themes/hotel-reservation-theme/modules/blocknewsletter/blocknewsletter.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.39',
  'unifunc' => 'content_67bb8eda727845_16066998',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '34884d29d7604421b03463cb9f8abdc743de59d4' => 
    array (
      0 => '/home/qloapps/www/QloApps/themes/hotel-reservation-theme/modules/blocknewsletter/blocknewsletter.tpl',
      1 => 1728563708,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_67bb8eda727845_16066998 (Smarty_Internal_Template $_smarty_tpl) {
?>
<!-- Block Newsletter module-->
<div class="row">
    <section class="col-xs-12 col-sm-12" id="blocknewsletter">
        <div class="row margin-lr-0 footer-section-heading">
            <p><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'GET NOTIFICATIONS','mod'=>'blocknewsletter'),$_smarty_tpl ) );?>
</p>
            <hr/>
        </div>
        <div class="row margin-lr-0">
            <form action="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['link']->value->getModuleLink('newsletter','subscription'), ENT_QUOTES, 'UTF-8', true);?>
" method="post">
                <div class="form-group">
                    <input type="hidden" name="ajax" value="1" />
                    <input type="hidden" name="action" value="SubscribeNewsletter" />
                    <input type="hidden" name="token" value="<?php echo $_smarty_tpl->tpl_vars['csrf_token']->value;?>
" />
                    <input type="hidden" name="newsletter_action" value="0" />
                    <input type="text" class="inputNew form-control newsletter-input" id="newsletter-input" name="email" placeholder="<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Your email address','mod'=>'blocknewsletter'),$_smarty_tpl ) );?>
" />
                    <div class="message-block" style="display: none;"></div>
                                        <?php if ((isset($_smarty_tpl->tpl_vars['id_module']->value))) {?>
                        <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['hook'][0], array( array('h'=>'displayGDPRConsent','id_module'=>$_smarty_tpl->tpl_vars['id_module']->value),$_smarty_tpl ) );?>

                    <?php }?>
                    <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['hook'][0], array( array('h'=>'displayNewsletterFormFieldsAfter'),$_smarty_tpl ) );?>

                    <button type="submit" name="submitNewsletter" class="btn button button-medium newsletter-btn">
                        <span><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Subscribe','mod'=>'blocknewsletter'),$_smarty_tpl ) );?>
</span>
                    </button>
                    <span class="loader loading" style="display: none;"></span>
                </div>
            </form>
        </div>
        <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['hook'][0], array( array('h'=>"displayBlockNewsletterBottom",'from'=>'blocknewsletter'),$_smarty_tpl ) );?>

    </section>
</div>

<?php $_block_plugin115 = isset($_smarty_tpl->smarty->registered_plugins['block']['addJsDefL'][0][0]) ? $_smarty_tpl->smarty->registered_plugins['block']['addJsDefL'][0][0] : null;
if (!is_callable(array($_block_plugin115, 'addJsDefL'))) {
throw new SmartyException('block tag \'addJsDefL\' not callable or registered');
}
$_smarty_tpl->smarty->_cache['_tag_stack'][] = array('addJsDefL', array('name'=>'no_internet_txt'));
$_block_repeat=true;
echo $_block_plugin115->addJsDefL(array('name'=>'no_internet_txt'), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();
echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'No internet. Please try later.','mod'=>'blocknewsletter','js'=>1),$_smarty_tpl ) );
$_block_repeat=false;
echo $_block_plugin115->addJsDefL(array('name'=>'no_internet_txt'), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);?>

<!-- /Block Newsletter module-->
<?php }
}
