<?php
/* Smarty version 3.1.39, created on 2025-02-24 02:40:46
  from '/home/qloapps/www/QloApps/themes/hotel-reservation-theme/order-slip.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.39',
  'unifunc' => 'content_67bb8ed678e9a6_43930427',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'e28fbab1e960eb5bfb06f7906dddea3e0cbb4851' => 
    array (
      0 => '/home/qloapps/www/QloApps/themes/hotel-reservation-theme/order-slip.tpl',
      1 => 1728563708,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_67bb8ed678e9a6_43930427 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, false);
?>

<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_26620131767bb8ed66a3630_83257872', 'order_slip');
?>

<?php }
/* {block 'errors'} */
class Block_41140065567bb8ed66d1a37_69732147 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

		<?php $_smarty_tpl->_subTemplateRender(((string)$_smarty_tpl->tpl_vars['tpl_dir']->value)."./errors.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, true);
?>
	<?php
}
}
/* {/block 'errors'} */
/* {block 'order_slip_list'} */
class Block_53481787567bb8ed66e6e58_45630824 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_checkPlugins(array(0=>array('file'=>'/home/qloapps/www/QloApps/tools/smarty/plugins/modifier.regex_replace.php','function'=>'smarty_modifier_regex_replace',),));
?>

		<div class="block-center" id="block-history">
			<?php if ($_smarty_tpl->tpl_vars['ordersSlip']->value && count($_smarty_tpl->tpl_vars['ordersSlip']->value)) {?>
				<table id="order-list" class="table table-bordered footab">
					<thead>
						<tr>
							<th data-sort-ignore="true" class="first_item"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Credit slip'),$_smarty_tpl ) );?>
</th>
							<th data-sort-ignore="true" class="item"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Order'),$_smarty_tpl ) );?>
</th>
							<th class="item"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Date issued'),$_smarty_tpl ) );?>
</th>
							<th data-sort-ignore="true" data-hide="phone"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'View credit slip'),$_smarty_tpl ) );?>
</th>
							<th data-sort-ignore="true"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Status'),$_smarty_tpl ) );?>
</th>
							<th data-sort-ignore="true" data-hide="phone" class="last_item"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Actions'),$_smarty_tpl ) );?>
</th>
						</tr>
					</thead>
					<tbody>
						<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['ordersSlip']->value, 'slip', false, NULL, 'myLoop', array (
  'first' => true,
  'last' => true,
  'index' => true,
  'iteration' => true,
  'total' => true,
));
$_smarty_tpl->tpl_vars['slip']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['slip']->value) {
$_smarty_tpl->tpl_vars['slip']->do_else = false;
$_smarty_tpl->tpl_vars['__smarty_foreach_myLoop']->value['iteration']++;
$_smarty_tpl->tpl_vars['__smarty_foreach_myLoop']->value['index']++;
$_smarty_tpl->tpl_vars['__smarty_foreach_myLoop']->value['first'] = !$_smarty_tpl->tpl_vars['__smarty_foreach_myLoop']->value['index'];
$_smarty_tpl->tpl_vars['__smarty_foreach_myLoop']->value['last'] = $_smarty_tpl->tpl_vars['__smarty_foreach_myLoop']->value['iteration'] === $_smarty_tpl->tpl_vars['__smarty_foreach_myLoop']->value['total'];
?>
							<tr class="<?php if ((isset($_smarty_tpl->tpl_vars['__smarty_foreach_myLoop']->value['first']) ? $_smarty_tpl->tpl_vars['__smarty_foreach_myLoop']->value['first'] : null)) {?>first_item<?php } elseif ((isset($_smarty_tpl->tpl_vars['__smarty_foreach_myLoop']->value['last']) ? $_smarty_tpl->tpl_vars['__smarty_foreach_myLoop']->value['last'] : null)) {?>last_item<?php } else { ?>item<?php }?> <?php if ((isset($_smarty_tpl->tpl_vars['__smarty_foreach_myLoop']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_foreach_myLoop']->value['index'] : null)%2) {?>alternate_item<?php }?>">
								<td class="bold">
									<span class="color-myaccount">
										#<?php echo Configuration::get('PS_CREDIT_SLIP_PREFIX',$_smarty_tpl->tpl_vars['lang_id']->value);
echo sprintf("%06d",$_smarty_tpl->tpl_vars['slip']->value['id_order_slip']);?>

									</span>
								</td>
								<td class="history_method">
									<a class="color-myaccount" href="<?php ob_start();
echo intval($_smarty_tpl->tpl_vars['slip']->value['id_order']);
$_prefixVariable17=ob_get_clean();
echo htmlspecialchars($_smarty_tpl->tpl_vars['link']->value->getPageLink('order-detail',true,NULL,"id_order=".$_prefixVariable17), ENT_QUOTES, 'UTF-8', true);?>
" target="_blank">
										#<?php echo sprintf("%06d",$_smarty_tpl->tpl_vars['slip']->value['id_order']);?>

									</a>
								</td>
								<td class="bold"  data-value="<?php echo smarty_modifier_regex_replace($_smarty_tpl->tpl_vars['slip']->value['date_add'],"/[\-\:\ ]/",'');?>
">
									<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['dateFormat'][0], array( array('date'=>$_smarty_tpl->tpl_vars['slip']->value['date_add'],'full'=>0),$_smarty_tpl ) );?>

								</td>
								<td class="history_invoice">
									<a class="link-button" href="<?php ob_start();
echo intval($_smarty_tpl->tpl_vars['slip']->value['id_order_slip']);
$_prefixVariable18=ob_get_clean();
echo htmlspecialchars($_smarty_tpl->tpl_vars['link']->value->getPageLink('pdf-order-slip',true,NULL,"id_order_slip=".$_prefixVariable18), ENT_QUOTES, 'UTF-8', true);?>
" title="<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Credit slip'),$_smarty_tpl ) );?>
 #<?php echo Configuration::get('PS_CREDIT_SLIP_PREFIX',$_smarty_tpl->tpl_vars['lang_id']->value);
echo sprintf("%06d",$_smarty_tpl->tpl_vars['slip']->value['id_order_slip']);?>
">
										<i class="icon-file-text large"></i><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'PDF'),$_smarty_tpl ) );?>

									</a>
								</td>
								<td>
									<?php if ($_smarty_tpl->tpl_vars['slip']->value['redeem_status'] == OrderSlip::REDEEM_STATUS_REDEEMED) {?>
										<span class="badge badge-danger"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Redeemed'),$_smarty_tpl ) );?>
</span>
									<?php } else { ?>
										<span class="badge badge-success"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Active'),$_smarty_tpl ) );?>
</span>
									<?php }?>
								</td>
								<td>
									<?php if ($_smarty_tpl->tpl_vars['slip']->value['redeem_status'] == OrderSlip::REDEEM_STATUS_ACTIVE && !$_smarty_tpl->tpl_vars['slip']->value['id_cart_rule']) {?>
										<a href="<?php ob_start();
echo intval($_smarty_tpl->tpl_vars['slip']->value['id_order_slip']);
$_prefixVariable19=ob_get_clean();
echo htmlspecialchars($_smarty_tpl->tpl_vars['link']->value->getPageLink('order-slip',true,NULL,"generateVoucher=1&id_order_slip=".$_prefixVariable19), ENT_QUOTES, 'UTF-8', true);?>
" title="<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Generate voucher for credit slip '),$_smarty_tpl ) );?>
 #<?php echo Configuration::get('PS_CREDIT_SLIP_PREFIX',$_smarty_tpl->tpl_vars['lang_id']->value);
echo sprintf("%06d",$_smarty_tpl->tpl_vars['slip']->value['id_order_slip']);?>
">
											<u><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Generate Voucher'),$_smarty_tpl ) );?>
</u>
										</a>
									<?php } elseif ($_smarty_tpl->tpl_vars['slip']->value['redeem_status'] == OrderSlip::REDEEM_STATUS_REDEEMED && $_smarty_tpl->tpl_vars['slip']->value['id_cart_rule']) {?>
										<span class="badge badge-danger"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Voucher Generated'),$_smarty_tpl ) );?>
</span>
									<?php } elseif ($_smarty_tpl->tpl_vars['slip']->value['redeem_status'] == OrderSlip::REDEEM_STATUS_REDEEMED && !$_smarty_tpl->tpl_vars['slip']->value['id_cart_rule']) {?>
										--
									<?php }?>
								</td>
							</tr>
						<?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
					</tbody>
				</table>
				<div id="block-order-detail" class="unvisible">&nbsp;</div>
			<?php } else { ?>
				<p class="alert alert-warning"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'You have not received any credit slips.'),$_smarty_tpl ) );?>
</p>
			<?php }?>
		</div><!-- #block-history -->
	<?php
}
}
/* {/block 'order_slip_list'} */
/* {block 'order_slip_footer_links'} */
class Block_63682937067bb8ed67803d0_96830474 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

		<ul class="footer_links clearfix">
			<li>
				<a class="btn btn-default button button-small" href="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['link']->value->getPageLink('my-account',true), ENT_QUOTES, 'UTF-8', true);?>
">
					<span>
						<i class="icon-chevron-left"></i> <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Back to My account'),$_smarty_tpl ) );?>

					</span>
				</a>
			</li>
			<li>
				<a class="btn btn-default button button-small" href="<?php if ((isset($_smarty_tpl->tpl_vars['force_ssl']->value)) && $_smarty_tpl->tpl_vars['force_ssl']->value) {
echo $_smarty_tpl->tpl_vars['base_dir_ssl']->value;
} else {
echo $_smarty_tpl->tpl_vars['base_dir']->value;
}?>">
					<span>
						<i class="icon-chevron-left"></i> <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Home'),$_smarty_tpl ) );?>

					</span>
				</a>
			</li>
		</ul>
	<?php
}
}
/* {/block 'order_slip_footer_links'} */
/* {block 'order_slip'} */
class Block_26620131767bb8ed66a3630_83257872 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'order_slip' => 
  array (
    0 => 'Block_26620131767bb8ed66a3630_83257872',
  ),
  'errors' => 
  array (
    0 => 'Block_41140065567bb8ed66d1a37_69732147',
  ),
  'order_slip_list' => 
  array (
    0 => 'Block_53481787567bb8ed66e6e58_45630824',
  ),
  'order_slip_footer_links' => 
  array (
    0 => 'Block_63682937067bb8ed67803d0_96830474',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

	<?php $_smarty_tpl->smarty->ext->_capture->open($_smarty_tpl, 'path', null, null);?><a href="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['link']->value->getPageLink('my-account',true), ENT_QUOTES, 'UTF-8', true);?>
"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'My account'),$_smarty_tpl ) );?>
</a><span class="navigation-pipe"><?php echo $_smarty_tpl->tpl_vars['navigationPipe']->value;?>
</span><span class="navigation_page"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Credit slips'),$_smarty_tpl ) );?>
</span><?php $_smarty_tpl->smarty->ext->_capture->close($_smarty_tpl);?>

	<h1 class="page-heading bottom-indent">
		<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Credit slips'),$_smarty_tpl ) );?>

	</h1>
	<p class="info-title">
		<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Credit slips you have received after canceled orders'),$_smarty_tpl ) );?>
.
	</p>

	<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_41140065567bb8ed66d1a37_69732147', 'errors', $this->tplIndex);
?>


	<?php if ((isset($_GET['confirmation'])) && $_GET['confirmation']) {?>
		<p class="alert alert-success">
			<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Your voucher has been generated successfully and sent via email.'),$_smarty_tpl ) );?>
 <a href="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['link']->value->getPageLink('discount',true), ENT_QUOTES, 'UTF-8', true);?>
"><?php echo 'Click here';?>
</a> <?php echo ' to see your all vouchers.';?>

		</p>
	<?php }?>

	<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_53481787567bb8ed66e6e58_45630824', 'order_slip_list', $this->tplIndex);
?>

	<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_63682937067bb8ed67803d0_96830474', 'order_slip_footer_links', $this->tplIndex);
?>

<?php
}
}
/* {/block 'order_slip'} */
}
