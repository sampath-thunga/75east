<?php
/* Smarty version 3.1.39, created on 2025-02-24 02:40:50
  from '/home/qloapps/www/QloApps/admin/themes/default/template/controllers/tax_rules/helpers/form/form.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.39',
  'unifunc' => 'content_67bb8eda5e1014_96436278',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '8c3c0791928c84cadf3fe78f552d6738dacbc140' => 
    array (
      0 => '/home/qloapps/www/QloApps/admin/themes/default/template/controllers/tax_rules/helpers/form/form.tpl',
      1 => 1728563708,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_67bb8eda5e1014_96436278 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_83160575667bb8eda5c7649_25496789', "label");
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_188606011167bb8eda5d6da3_75442741', "script");
?>

<?php $_smarty_tpl->inheritance->endChild($_smarty_tpl, "helpers/form/form.tpl");
}
/* {block "label"} */
class Block_83160575667bb8eda5c7649_25496789 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'label' => 
  array (
    0 => 'Block_83160575667bb8eda5c7649_25496789',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

	<?php if ($_smarty_tpl->tpl_vars['input']->value['name'] == 'zipcode' && (isset($_smarty_tpl->tpl_vars['input']->value['label']))) {?>
		<label id="zipcode-label" class="control-label col-lg-3"><?php echo $_smarty_tpl->tpl_vars['input']->value['label'];?>
</label>
	<?php } elseif ($_smarty_tpl->tpl_vars['input']->value['name'] == 'states[]') {?>
		<label id="states-label" class="control-label col-lg-3"><?php echo $_smarty_tpl->tpl_vars['input']->value['label'];?>
</label>
	<?php } else { ?>
		<?php 
$_smarty_tpl->inheritance->callParent($_smarty_tpl, $this, '{$smarty.block.parent}');
?>

	<?php }
}
}
/* {/block "label"} */
/* {block "script"} */
class Block_188606011167bb8eda5d6da3_75442741 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'script' => 
  array (
    0 => 'Block_188606011167bb8eda5d6da3_75442741',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

	$(document).ready(function() {
		$('#country').change(function() {
			populateStates($(this).val(), '');
		});

		$('#id_tax_rules_group').clone().attr('id', '').insertAfter('#id_tax_rule');


		if ($('#id_tax_rules_group').val() != '' && $('table.tax_rule tbody tr').length == 0)
		{
			initForm();
			$('#tax_rule_form').show();
			$('#country').focus();
		}
		else
		{
			$('#tax_rule_form').hide();
			$('#page-header-desc-tax_rule-new').click(function() {
				initForm();
				$('#tax_rule_form').slideToggle();
				return false;
			});
		}
	});

	function populateStates(id_country, id_state)
	{
		if ($("#country option:selected").size() > 1)
		{
			$("#zipcode-label").hide();
			$("#zipcode").hide();

			$("#states").parent().hide();
			$("#states-label").hide();
		} else {
			$.ajax({
				url: "index.php",
				cache: false,
				data: "ajax=1&tab=AdminStates&token=<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['getAdminToken'][0], array( array('tab'=>'AdminStates'),$_smarty_tpl ) );?>
&action=states&id_country="+id_country+"&id_state="+id_state+"&empty_value=<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'All'),$_smarty_tpl ) );?>
",
				success: function(html){
					if (html == "false")
					{
						$("#states").parent().hide();
						$("#states-label").hide();
						$("#states").html('');
					}
					else
					{
						$("#states").parent().show();
						$("#states-label").show();
						$("#states").html(html);
					}
				}
			});

			$("#zipcode-label").show();
			$("#zipcode").show();
		}
	}

	function loadTaxRule(id_tax_rule)
	{
		$.ajax({
			type: 'POST',
			url: 'index.php',
			async: true,
			dataType: 'json',
			data: 'ajax=1&tab=AdminTaxRulesGroup&token=<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['getAdminToken'][0], array( array('tab'=>'AdminTaxRulesGroup'),$_smarty_tpl ) );?>
&ajaxStates=1&action=updateTaxRule&id_tax_rule='+id_tax_rule,
			success: function(data){
				$('#tax_rule_form').show();
				$('#id_tax_rule').val(data.id);
				$('#country').val(data.id_country);
				$('#state').val(data.id_state);

				zipcode = 0;
				if (data.zipcode_from != 0)
				{
					zipcode = data.zipcode_from;

					if (data.zipcode_to != 0)
						zipcode = zipcode +"-"+data.zipcode_to
				}

				$('#zipcode').val(zipcode);
				$('#behavior').val(data.behavior);
				$('#id_tax').val(data.id_tax);
				$('#description').val(data.description);

				populateStates(data.id_country, data.id_state);
			}
		});
	}

	function initForm()
	{
		$('#id_tax_rule').val('');
		$('#country').val(0);
		$('#state').val(0);
		$('#zipcode').val(0);
		$('#behavior').val(0);
		$('#tax').val(0);
		$('#description').val('');

		populateStates(0,0);
	}
<?php
}
}
/* {/block "script"} */
}
