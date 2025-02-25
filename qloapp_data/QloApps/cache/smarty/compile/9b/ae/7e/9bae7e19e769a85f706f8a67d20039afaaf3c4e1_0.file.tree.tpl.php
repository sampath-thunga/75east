<?php
/* Smarty version 3.1.39, created on 2025-02-24 02:40:56
  from '/home/qloapps/www/QloApps/admin/themes/default/template/helpers/tree/tree.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.39',
  'unifunc' => 'content_67bb8ee04f4836_09947349',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '9bae7e19e769a85f706f8a67d20039afaaf3c4e1' => 
    array (
      0 => '/home/qloapps/www/QloApps/admin/themes/default/template/helpers/tree/tree.tpl',
      1 => 1728563708,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_67bb8ee04f4836_09947349 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, false);
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_20514386467bb8ee04cf244_73174390', "tree_panel");
?>

<?php echo '<script'; ?>
 type="text/javascript">
	<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_112323863567bb8ee04daa89_21224335', "script");
?>

<?php echo '</script'; ?>
><?php }
/* {block "tree_header"} */
class Block_43866233067bb8ee04d14b2_01340105 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

			<?php if ((isset($_smarty_tpl->tpl_vars['header']->value))) {
echo $_smarty_tpl->tpl_vars['header']->value;
}?>
		<?php
}
}
/* {/block "tree_header"} */
/* {block "tree"} */
class Block_147154047767bb8ee04d44e5_16669575 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

			<?php if ((isset($_smarty_tpl->tpl_vars['nodes']->value))) {?>
				<ul id="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['id']->value, ENT_QUOTES, 'UTF-8', true);?>
" class="tree top" style="max-height: <?php echo $_smarty_tpl->tpl_vars['max_height']->value;?>
px;">
				<?php echo $_smarty_tpl->tpl_vars['nodes']->value;?>

				</ul>
			<?php }?>
		<?php
}
}
/* {/block "tree"} */
/* {block "tree_panel"} */
class Block_20514386467bb8ee04cf244_73174390 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'tree_panel' => 
  array (
    0 => 'Block_20514386467bb8ee04cf244_73174390',
  ),
  'tree_header' => 
  array (
    0 => 'Block_43866233067bb8ee04d14b2_01340105',
  ),
  'tree' => 
  array (
    0 => 'Block_147154047767bb8ee04d44e5_16669575',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>


	<div class="panel">
		<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_43866233067bb8ee04d14b2_01340105', "tree_header", $this->tplIndex);
?>

		<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_147154047767bb8ee04d44e5_16669575', "tree", $this->tplIndex);
?>

	</div>
<?php
}
}
/* {/block "tree_panel"} */
/* {block "script"} */
class Block_112323863567bb8ee04daa89_21224335 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'script' => 
  array (
    0 => 'Block_112323863567bb8ee04daa89_21224335',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

		<?php if ((isset($_smarty_tpl->tpl_vars['use_checkbox']->value)) && $_smarty_tpl->tpl_vars['use_checkbox']->value == true) {?>
			function checkAll($tree)
			{
				$tree.find(":input[type=checkbox]:not([hidden])").each(
					function()
					{
						$(this).prop("checked", true);
						$(this).parent().addClass("tree-selected");
					}
				);
			}

			function uncheckAll($tree)
			{
				$tree.find(":input[type=checkbox]:not([hidden])").each(
					function()
					{
						$(this).prop("checked", false);
						$(this).parent().removeClass("tree-selected");
					}
				);
			}
		<?php }?>
		<?php if ((isset($_smarty_tpl->tpl_vars['use_search']->value)) && $_smarty_tpl->tpl_vars['use_search']->value == true) {?>
			$("#<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['id']->value, ENT_QUOTES, 'UTF-8', true);?>
-search").bind("typeahead:selected", function(obj, datum) {
				var suffix = '<?php if ((isset($_smarty_tpl->tpl_vars['use_checkbox']->value)) && $_smarty_tpl->tpl_vars['use_checkbox']->value == true) {?>[]<?php }?>';
				$("#<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['id']->value, ENT_QUOTES, 'UTF-8', true);?>
").find('[name="'+datum.input_name + suffix + '"]:input').each(
					function()
					{
						if ($(this).val() == datum.value)
						{
							<?php if ((!((isset($_smarty_tpl->tpl_vars['use_checkbox']->value)) && $_smarty_tpl->tpl_vars['use_checkbox']->value == true))) {?>
								$("#<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['id']->value, ENT_QUOTES, 'UTF-8', true);?>
 label").removeClass("tree-selected");
							<?php }?>
							$(this).prop("checked", true);
							$(this).parent().addClass("tree-selected");
							$(this).parents('ul.tree').each(function(){
								$(this).show();
								$(this).prev().find('.icon-folder-close').removeClass('icon-folder-close').addClass('icon-folder-open');
							});

							<?php if ((isset($_smarty_tpl->tpl_vars['auto_select_children']->value)) && $_smarty_tpl->tpl_vars['auto_select_children']->value == true) {?>
								if ($(this).closest('.tree-item').length == 0) {
									$(this).closest('.tree-folder').find(':input[type=checkbox]').each(function(){
										$(this).prop('checked', true);
										$(this).parent().addClass('tree-selected');
									});
								}
							<?php }?>
						}
					}
				);
			});
		<?php }?>

		<?php if ((isset($_smarty_tpl->tpl_vars['auto_select_children']->value)) && $_smarty_tpl->tpl_vars['auto_select_children']->value == true) {?>
			$('#<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['id']->value, ENT_QUOTES, 'UTF-8', true);?>
').find(':input[type=checkbox]').on('click', function(){
				if ($(this).closest('.tree-item').length == 0) {
					if ($(this).is(":checked")) {
						$(this).closest('.tree-folder').find(':input[type=checkbox]').each(function(){
							$(this).prop('checked', true);
							$(this).parent().addClass('tree-selected');
						});
					} else {
						$(this).closest('.tree-folder').find(':input[type=checkbox]').each(function(){
							$(this).prop('checked', false);
							$(this).parent().removeClass('tree-selected');
						});
					}
				}

				if ($(this).closest('.tree-item').length) {
					if (!$(this).is(":checked")) {
						$(this).parents('.tree-folder').find(':input[type=checkbox]:first').each(function(){
							$(this).prop('checked', false);
							$(this).parent().removeClass('tree-selected');
						});
					}
				}
			});
		<?php }?>

		function startTree() {
			if (typeof $.fn.tree === 'undefined') {
				setTimeout(startTree, 100);
				return;
			}

			var tree = $("#<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['id']->value, ENT_QUOTES, 'UTF-8', true);?>
").tree('collapseAll');

			if ($("#<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['id']->value, ENT_QUOTES, 'UTF-8', true);?>
").find(":input:checked").length > 1)
					$('#expand-all-<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['id']->value, ENT_QUOTES, 'UTF-8', true);?>
').hide();
				else
					$('#collapse-all-<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['id']->value, ENT_QUOTES, 'UTF-8', true);?>
').hide();

			$("#<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['id']->value, ENT_QUOTES, 'UTF-8', true);?>
").find(":input:checked").each(function(){
				$(this).parent().addClass("tree-selected");
				$(this).parents('ul.tree').each(function(){
					$(this).show();
					$(this).prev().find('.icon-folder-close').removeClass('icon-folder-close').addClass('icon-folder-open');
				});
			});
		}

		$(document).ready(function () {
			startTree();
		});
	<?php
}
}
/* {/block "script"} */
}
