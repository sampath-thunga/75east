<?php
/* Smarty version 3.1.39, created on 2025-02-24 02:40:52
  from '/home/qloapps/www/QloApps/admin/themes/default/template/controllers/addresses/helpers/form/form.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.39',
  'unifunc' => 'content_67bb8edc2fc1f5_09099750',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '5ede01e1e2353f353836142838e1b70008fd45c6' => 
    array (
      0 => '/home/qloapps/www/QloApps/admin/themes/default/template/controllers/addresses/helpers/form/form.tpl',
      1 => 1728563708,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_67bb8edc2fc1f5_09099750 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>



<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_135009356067bb8edc2e7094_82094644', "label");
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_85695443767bb8edc2ec254_12539775', "input");
?>

<?php $_smarty_tpl->inheritance->endChild($_smarty_tpl, "helpers/form/form.tpl");
}
/* {block "label"} */
class Block_135009356067bb8edc2e7094_82094644 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'label' => 
  array (
    0 => 'Block_135009356067bb8edc2e7094_82094644',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

	<?php if ($_smarty_tpl->tpl_vars['input']->value['name'] == 'vat_number') {?>
		<div id="vat_area" style="display: visible">
	<?php }?>
	<?php 
$_smarty_tpl->inheritance->callParent($_smarty_tpl, $this, '{$smarty.block.parent}');
?>

<?php
}
}
/* {/block "label"} */
/* {block "input"} */
class Block_85695443767bb8edc2ec254_12539775 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'input' => 
  array (
    0 => 'Block_85695443767bb8edc2ec254_12539775',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

	<?php if ($_smarty_tpl->tpl_vars['input']->value['type'] == 'text_customer') {?>
		<?php if ((isset($_smarty_tpl->tpl_vars['customer']->value))) {?>
			<a class="btn btn-default" href="?tab=AdminCustomers&amp;id_customer=<?php echo intval($_smarty_tpl->tpl_vars['customer']->value->id);?>
&amp;viewcustomer&amp;token=<?php echo $_smarty_tpl->tpl_vars['tokenCustomer']->value;?>
">
				<i class="icon-eye-open"></i> <?php echo $_smarty_tpl->tpl_vars['customer']->value->lastname;?>
 <?php echo $_smarty_tpl->tpl_vars['customer']->value->firstname;?>
 (<?php echo $_smarty_tpl->tpl_vars['customer']->value->email;?>
)
			</a>
			<input type="hidden" name="id_customer" value="<?php echo $_smarty_tpl->tpl_vars['customer']->value->id;?>
" />
			<input type="hidden" name="email" value="<?php echo $_smarty_tpl->tpl_vars['customer']->value->email;?>
" />
		<?php }?>
	<?php } elseif ($_smarty_tpl->tpl_vars['input']->value['type'] == 'select' && $_smarty_tpl->tpl_vars['input']->value['name'] == 'id_customer') {?>
		<?php 
$_smarty_tpl->inheritance->callParent($_smarty_tpl, $this, '{$smarty.block.parent}');
?>

		<input type="hidden" name="email" id="email" value="">
		<?php echo '<script'; ?>
 type="text/javascript">
			$('#id_customer').on('change', function(e)
			{
				var id_customer = parseInt($(this).val());
				$('#email').val('');
				if (!isNaN(id_customer)) {
					var email = $(this).find('[value="'+id_customer+'"]').text();
					$('#email').val(email);
					var data = {};
					data.email = email;
					data.token = "<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['token']->value, ENT_QUOTES, 'UTF-8', true);?>
";
					data.ajax = 1;
					data.controller = "AdminAddresses";
					data.action = "loadNames";
					$.ajax({
						type: "POST",
						url: "ajax-tab.php",
						data: data,
						dataType: 'json',
						async : true,
						success: function(msg) {
							if (msg) {
								var infos = msg.infos.replace("\\'", "'").split('_');
								$('input[name=firstname]').val(infos[0]);
								$('input[name=lastname]').val(infos[1]);
								$('input[name=company]').val(infos[2]);
								$('input[name=id_customer]').val(infos[3]);
								$('input[name=phone]').val(infos[4]);
							} else {
								resetCustomerRelatedAddressFields();
							}
						}
					});
				} else {
					resetCustomerRelatedAddressFields();
				}
			});
			function resetCustomerRelatedAddressFields() {
				$('input[name=firstname]').val('');
				$('input[name=lastname]').val('');
				$('input[name=company]').val('');
				$('input[name=id_customer]').val('');
			}
		<?php echo '</script'; ?>
>
	<?php } else { ?>
		<?php 
$_smarty_tpl->inheritance->callParent($_smarty_tpl, $this, '{$smarty.block.parent}');
?>

	<?php }?>
	<?php if ($_smarty_tpl->tpl_vars['input']->value['name'] == 'vat_number') {?>
		</div>
	<?php }
}
}
/* {/block "input"} */
}
