<?php
/* Smarty version 3.1.39, created on 2025-02-24 02:40:47
  from '/home/qloapps/www/QloApps/themes/hotel-reservation-theme/nbr-product-page.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.39',
  'unifunc' => 'content_67bb8ed79cfe72_73400445',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '92cf8d6c7e1e08b27881c815e9170e04282be7ed' => 
    array (
      0 => '/home/qloapps/www/QloApps/themes/hotel-reservation-theme/nbr-product-page.tpl',
      1 => 1728563708,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_67bb8ed79cfe72_73400445 (Smarty_Internal_Template $_smarty_tpl) {
if ((isset($_smarty_tpl->tpl_vars['p']->value)) && $_smarty_tpl->tpl_vars['p']->value) {?>
	<?php if ((isset($_GET['id_category'])) && $_GET['id_category'] && (isset($_smarty_tpl->tpl_vars['category']->value))) {?>
		<?php $_smarty_tpl->_assignInScope('requestPage', $_smarty_tpl->tpl_vars['link']->value->getPaginationLink('category',$_smarty_tpl->tpl_vars['category']->value,false,false,true,false));?>
		<?php $_smarty_tpl->_assignInScope('requestNb', $_smarty_tpl->tpl_vars['link']->value->getPaginationLink('category',$_smarty_tpl->tpl_vars['category']->value,true,false,false,true));?>
	<?php } elseif ((isset($_GET['id_manufacturer'])) && $_GET['id_manufacturer'] && (isset($_smarty_tpl->tpl_vars['manufacturer']->value))) {?>
		<?php $_smarty_tpl->_assignInScope('requestPage', $_smarty_tpl->tpl_vars['link']->value->getPaginationLink('manufacturer',$_smarty_tpl->tpl_vars['manufacturer']->value,false,false,true,false));?>
		<?php $_smarty_tpl->_assignInScope('requestNb', $_smarty_tpl->tpl_vars['link']->value->getPaginationLink('manufacturer',$_smarty_tpl->tpl_vars['manufacturer']->value,true,false,false,true));?>
	<?php } elseif ((isset($_GET['id_supplier'])) && $_GET['id_supplier'] && (isset($_smarty_tpl->tpl_vars['supplier']->value))) {?>
		<?php $_smarty_tpl->_assignInScope('requestPage', $_smarty_tpl->tpl_vars['link']->value->getPaginationLink('supplier',$_smarty_tpl->tpl_vars['supplier']->value,false,false,true,false));?>
		<?php $_smarty_tpl->_assignInScope('requestNb', $_smarty_tpl->tpl_vars['link']->value->getPaginationLink('supplier',$_smarty_tpl->tpl_vars['supplier']->value,true,false,false,true));?>
	<?php } else { ?>
		<?php $_smarty_tpl->_assignInScope('requestPage', $_smarty_tpl->tpl_vars['link']->value->getPaginationLink(false,false,false,false,true,false));?>
		<?php $_smarty_tpl->_assignInScope('requestNb', $_smarty_tpl->tpl_vars['link']->value->getPaginationLink(false,false,true,false,false,true));?>
	<?php }?>
	<!-- nbr product/page -->
	<?php if ($_smarty_tpl->tpl_vars['nb_products']->value > $_smarty_tpl->tpl_vars['nArray']->value[0]) {?>
		<form action="<?php if (!is_array($_smarty_tpl->tpl_vars['requestNb']->value)) {
echo htmlspecialchars($_smarty_tpl->tpl_vars['requestNb']->value, ENT_QUOTES, 'UTF-8', true);
} else {
echo htmlspecialchars($_smarty_tpl->tpl_vars['requestNb']->value['requestUrl'], ENT_QUOTES, 'UTF-8', true);
}?>" method="get" class="nbrItemPage">
			<div class="clearfix selector1">
				<?php if ((isset($_smarty_tpl->tpl_vars['search_query']->value)) && $_smarty_tpl->tpl_vars['search_query']->value) {?>
					<input type="hidden" name="search_query" value="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['search_query']->value, ENT_QUOTES, 'UTF-8', true);?>
" />
				<?php }?>
				<?php if ((isset($_smarty_tpl->tpl_vars['tag']->value)) && $_smarty_tpl->tpl_vars['tag']->value && !is_array($_smarty_tpl->tpl_vars['tag']->value)) {?>
					<input type="hidden" name="tag" value="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['tag']->value, ENT_QUOTES, 'UTF-8', true);?>
" />
				<?php }?>
				<label for="nb_page_items<?php if ((isset($_smarty_tpl->tpl_vars['paginationId']->value))) {?>_<?php echo $_smarty_tpl->tpl_vars['paginationId']->value;
}?>">
					<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Show'),$_smarty_tpl ) );?>

				</label>
				<?php if (is_array($_smarty_tpl->tpl_vars['requestNb']->value)) {?>
					<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['requestNb']->value, 'requestValue', false, 'requestKey');
$_smarty_tpl->tpl_vars['requestValue']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['requestKey']->value => $_smarty_tpl->tpl_vars['requestValue']->value) {
$_smarty_tpl->tpl_vars['requestValue']->do_else = false;
?>
						<?php if ($_smarty_tpl->tpl_vars['requestKey']->value != 'requestUrl') {?>
							<input type="hidden" name="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['requestKey']->value, ENT_QUOTES, 'UTF-8', true);?>
" value="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['requestValue']->value, ENT_QUOTES, 'UTF-8', true);?>
" />
						<?php }?>
					<?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
				<?php }?>
				<select name="n" id="nb_page_items<?php if ((isset($_smarty_tpl->tpl_vars['paginationId']->value))) {?>_<?php echo $_smarty_tpl->tpl_vars['paginationId']->value;
}?>" class="form-control">
					<?php $_smarty_tpl->_assignInScope('lastnValue', "0");?>
					<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['nArray']->value, 'nValue');
$_smarty_tpl->tpl_vars['nValue']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['nValue']->value) {
$_smarty_tpl->tpl_vars['nValue']->do_else = false;
?>
						<?php if ($_smarty_tpl->tpl_vars['lastnValue']->value <= $_smarty_tpl->tpl_vars['nb_products']->value) {?>
							<option value="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['nValue']->value, ENT_QUOTES, 'UTF-8', true);?>
" <?php if ($_smarty_tpl->tpl_vars['n']->value == $_smarty_tpl->tpl_vars['nValue']->value) {?>selected="selected"<?php }?>><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['nValue']->value, ENT_QUOTES, 'UTF-8', true);?>
</option>
						<?php }?>
						<?php $_smarty_tpl->_assignInScope('lastnValue', $_smarty_tpl->tpl_vars['nValue']->value);?>
					<?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
				</select>
				<span><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'per page'),$_smarty_tpl ) );?>
</span>
			</div>
		</form>
	<?php }?>
	<!-- /nbr product/page -->
<?php }
}
}
