<?php
/* Smarty version 3.1.39, created on 2025-02-24 02:40:54
  from '/home/qloapps/www/QloApps/admin/themes/default/template/controllers/backup/helpers/view/view.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.39',
  'unifunc' => 'content_67bb8ede50f963_50798547',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '4f8a9ac6f4e2380e6ff81a7cfa6b36dab55013c9' => 
    array (
      0 => '/home/qloapps/www/QloApps/admin/themes/default/template/controllers/backup/helpers/view/view.tpl',
      1 => 1728563708,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_67bb8ede50f963_50798547 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>



<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_155114955267bb8ede503002_10488855', "override_tpl");
?>

<?php $_smarty_tpl->inheritance->endChild($_smarty_tpl, "helpers/view/view.tpl");
}
/* {block "override_tpl"} */
class Block_155114955267bb8ede503002_10488855 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'override_tpl' => 
  array (
    0 => 'Block_155114955267bb8ede503002_10488855',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

	<?php if (!(isset($_smarty_tpl->tpl_vars['errors']->value)) || count($_smarty_tpl->tpl_vars['errors']->value) == 0) {?>
	<div class="panel">
		<h3><i class="icon-download"></i> <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Download'),$_smarty_tpl ) );?>
</h3>
		<div class="alert alert-success"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Beginning the download ...'),$_smarty_tpl ) );?>
</div>
		<p><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Backup files should automatically start downloading.'),$_smarty_tpl ) );?>
</p>
		<p><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'If not,'),$_smarty_tpl ) );?>
 <b><a href="<?php echo $_smarty_tpl->tpl_vars['url_backup']->value;?>
" class="btn btn-default"><i class="icon-download"></i> <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'please click here!'),$_smarty_tpl ) );?>
</a></b></p>
		<iframe  style="width:0px; height:0px; overflow:hidden; border:none;" src="<?php echo $_smarty_tpl->tpl_vars['url_backup']->value;?>
"></iframe>
	</div>
	<?php }
}
}
/* {/block "override_tpl"} */
}
