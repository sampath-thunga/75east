<?php
/* Smarty version 3.1.39, created on 2025-02-24 02:40:47
  from '/home/qloapps/www/QloApps/themes/hotel-reservation-theme/order-follow.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.39',
  'unifunc' => 'content_67bb8ed7467f34_38444625',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'adf81aa5cff4f3b78e0cb156eab709cd442817f9' => 
    array (
      0 => '/home/qloapps/www/QloApps/themes/hotel-reservation-theme/order-follow.tpl',
      1 => 1728563708,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_67bb8ed7467f34_38444625 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, false);
?>

<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_84079167467bb8ed74118d9_33006696', 'order_follow');
?>

<?php }
/* {block 'order_follow_heading'} */
class Block_187392947667bb8ed741a7b8_30623557 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

			<h1 class="page-heading bottom-indent">
				<i class="icon-tasks"></i> &nbsp;<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Booking Refund Requests'),$_smarty_tpl ) );?>

			</h1>
		<?php
}
}
/* {/block 'order_follow_heading'} */
/* {block 'order_follow_footer_links'} */
class Block_68827756167bb8ed7450c66_95013617 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

		<ul class="footer_links clearfix">
			<li><a class="btn btn-default button button-small" href="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['link']->value->getPageLink('my-account',true), ENT_QUOTES, 'UTF-8', true);?>
"><span><i class="icon-chevron-left"></i> <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Back to My account'),$_smarty_tpl ) );?>
</span></a></li>
			<li><a class="btn btn-default button button-small" href="<?php if ((isset($_smarty_tpl->tpl_vars['force_ssl']->value)) && $_smarty_tpl->tpl_vars['force_ssl']->value) {
echo $_smarty_tpl->tpl_vars['base_dir_ssl']->value;
} else {
echo $_smarty_tpl->tpl_vars['base_dir']->value;
}?>"><span><i class="icon-chevron-left"></i> <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Home'),$_smarty_tpl ) );?>
</span></a></li>
		</ul>
	<?php
}
}
/* {/block 'order_follow_footer_links'} */
/* {block 'order_follow'} */
class Block_84079167467bb8ed74118d9_33006696 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'order_follow' => 
  array (
    0 => 'Block_84079167467bb8ed74118d9_33006696',
  ),
  'order_follow_heading' => 
  array (
    0 => 'Block_187392947667bb8ed741a7b8_30623557',
  ),
  'order_follow_footer_links' => 
  array (
    0 => 'Block_68827756167bb8ed7450c66_95013617',
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
		<span class="navigation_page">
			<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Booking refund requests'),$_smarty_tpl ) );?>

		</span>
	<?php $_smarty_tpl->smarty->ext->_capture->close($_smarty_tpl);?>
	<div class="panel">
		<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_187392947667bb8ed741a7b8_30623557', 'order_follow_heading', $this->tplIndex);
?>

		<?php if ($_smarty_tpl->tpl_vars['ordersReturns']->value && count($_smarty_tpl->tpl_vars['ordersReturns']->value)) {?>
			<div class="table-responsive wk-datatable-wrapper">
				<table class="table table-bordered">
					<thead>
						<tr>
							<th><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Order'),$_smarty_tpl ) );?>
</th>
							<th><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Total rooms'),$_smarty_tpl ) );?>
</th>
							<th><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Refund status'),$_smarty_tpl ) );?>
</th>
							<th><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Date requested'),$_smarty_tpl ) );?>
</th>
							<th><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Actions'),$_smarty_tpl ) );?>
</th>
						</tr>
					</thead>
					<tbody>
						<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['ordersReturns']->value, 'return');
$_smarty_tpl->tpl_vars['return']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['return']->value) {
$_smarty_tpl->tpl_vars['return']->do_else = false;
?>
							<tr>
								<td>
									#<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['return']->value['reference'], ENT_QUOTES, 'UTF-8', true);?>

								</td>
								<td>
									<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['return']->value['total_rooms'], ENT_QUOTES, 'UTF-8', true);?>

								</td>
								<td>
									<span class="badge wk-badge" style="background-color:<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['return']->value['state_color'], ENT_QUOTES, 'UTF-8', true);?>
"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['return']->value['state_name'], ENT_QUOTES, 'UTF-8', true);?>

								</td>
								<td>
									<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['dateFormat'][0], array( array('date'=>$_smarty_tpl->tpl_vars['return']->value['date_add'],'full'=>0),$_smarty_tpl ) );?>

								</td>
								<td>
									<a class="btn btn-default" href="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['link']->value->getPageLink('order-return',true), ENT_QUOTES, 'UTF-8', true);?>
&amp;id_order_return=<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['return']->value['id_order_return'], ENT_QUOTES, 'UTF-8', true);?>
"><i class="icon-search-plus"></i> <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'View details'),$_smarty_tpl ) );?>
</a>
								</td>
							</tr>
						<?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
					</tbody>
				</table>
			</div>
		<?php } else { ?>
			<div class="alert alert-warning"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'You have no booking refund requests.'),$_smarty_tpl ) );?>
</div>
		<?php }?>
	</div>

	<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_68827756167bb8ed7450c66_95013617', 'order_follow_footer_links', $this->tplIndex);
?>

<?php
}
}
/* {/block 'order_follow'} */
}
