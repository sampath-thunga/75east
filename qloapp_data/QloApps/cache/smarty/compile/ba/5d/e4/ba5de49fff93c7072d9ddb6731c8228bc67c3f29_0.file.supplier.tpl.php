<?php
/* Smarty version 3.1.39, created on 2025-02-24 02:40:50
  from '/home/qloapps/www/QloApps/themes/hotel-reservation-theme/supplier.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.39',
  'unifunc' => 'content_67bb8eda2cf118_49125650',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'ba5de49fff93c7072d9ddb6731c8228bc67c3f29' => 
    array (
      0 => '/home/qloapps/www/QloApps/themes/hotel-reservation-theme/supplier.tpl',
      1 => 1728563708,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:./product-sort.tpl' => 1,
    'file:./nbr-product-page.tpl' => 1,
    'file:./product-compare.tpl' => 2,
    'file:./product-list.tpl' => 1,
    'file:./pagination.tpl' => 1,
  ),
),false)) {
function content_67bb8eda2cf118_49125650 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_subTemplateRender(((string)$_smarty_tpl->tpl_vars['tpl_dir']->value)."./errors.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, true);
?>

<?php if (!(isset($_smarty_tpl->tpl_vars['errors']->value)) || !sizeof($_smarty_tpl->tpl_vars['errors']->value)) {?>
	<h1 class="page-heading product-listing">
		<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'List of products by supplier:'),$_smarty_tpl ) );?>
&nbsp;<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['supplier']->value->name, ENT_QUOTES, 'UTF-8', true);?>

	</h1>
	<?php if (!empty($_smarty_tpl->tpl_vars['supplier']->value->description)) {?>
		<div class="description_box rte">
			<p><?php echo $_smarty_tpl->tpl_vars['supplier']->value->description;?>
</p>
		</div>
	<?php }?>

	<?php if ($_smarty_tpl->tpl_vars['products']->value) {?>
		<div class="content_sortPagiBar">
	    	<div class="sortPagiBar clearfix">
				<?php $_smarty_tpl->_subTemplateRender("file:./product-sort.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
				<?php $_smarty_tpl->_subTemplateRender("file:./nbr-product-page.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
			</div>
	    	<div class="top-pagination-content clearfix">
	        	<?php $_smarty_tpl->_subTemplateRender("file:./product-compare.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
	            <?php $_smarty_tpl->_subTemplateRender(((string)$_smarty_tpl->tpl_vars['tpl_dir']->value)."./pagination.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('no_follow'=>1), 0, true);
?>
	        </div>
		</div>

		<?php $_smarty_tpl->_subTemplateRender("file:./product-list.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('products'=>$_smarty_tpl->tpl_vars['products']->value), 0, false);
?>

		<div class="content_sortPagiBar">
	        <div class="bottom-pagination-content clearfix">
	        	<?php $_smarty_tpl->_subTemplateRender("file:./product-compare.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, true);
?>
				<?php $_smarty_tpl->_subTemplateRender("file:./pagination.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('paginationId'=>'bottom','no_follow'=>1), 0, false);
?>
	        </div>
		</div>
	<?php } else { ?>
		<p class="alert alert-warning"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'No products for this supplier.'),$_smarty_tpl ) );?>
</p>
	<?php }
}
}
}
