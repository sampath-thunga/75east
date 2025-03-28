<?php
/* Smarty version 3.1.39, created on 2025-02-24 02:40:54
  from '/home/qloapps/www/QloApps/admin/themes/default/template/controllers/modules/page.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.39',
  'unifunc' => 'content_67bb8edeb66003_89919898',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'ed3069ebe3b5c1598ad920949caea41cd4b1787e' => 
    array (
      0 => '/home/qloapps/www/QloApps/admin/themes/default/template/controllers/modules/page.tpl',
      1 => 1728563708,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:controllers/modules/list.tpl' => 1,
  ),
),false)) {
function content_67bb8edeb66003_89919898 (Smarty_Internal_Template $_smarty_tpl) {
?><div class="panel">
	<ul class=" nav nav-pills">
		<li><a href="#mod-alert" data-toggle="tab"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>"Alert"),$_smarty_tpl ) );?>
&nbsp;<span class="badge <?php if (count($_smarty_tpl->tpl_vars['module_alerts']->value)) {?>badge-danger<?php } else { ?>badge-success<?php }?>"><?php echo count($_smarty_tpl->tpl_vars['module_alerts']->value);?>
</span></a></li>
		<li><a href="#mod-update" data-toggle="tab"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>"Updates"),$_smarty_tpl ) );?>
&nbsp;<span class="badge <?php if (count($_smarty_tpl->tpl_vars['upgrade_available']->value)) {?>badge-danger<?php } else { ?>badge-success<?php }?>"><?php echo count($_smarty_tpl->tpl_vars['upgrade_available']->value);?>
</span></a></li>
	</ul>
	<div class="tab-content">
		<div id="mod-alert" class="tab-pane">
		<hr>
			<?php if (count($_smarty_tpl->tpl_vars['module_alerts']->value)) {?>
				<div class="alert alert-warning">
					<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'There are %d alerts regarding your modules.','sprintf'=>count($_smarty_tpl->tpl_vars['module_alerts']->value)),$_smarty_tpl ) );?>

					<ul>
					<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['module_alerts']->value, 'alert');
$_smarty_tpl->tpl_vars['alert']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['alert']->value) {
$_smarty_tpl->tpl_vars['alert']->do_else = false;
?>
						<li><?php echo $_smarty_tpl->tpl_vars['alert']->value;?>
</li>
					<?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
					</ul>
				</div>
			<?php } else { ?>
				<div class="alert alert-success">
					<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'There are no alerts regarding your modules.'),$_smarty_tpl ) );?>

				</div>
			<?php }?>
		</div>
		<div id="mod-update" class="tab-pane">
			<hr>
			<?php if (count($_smarty_tpl->tpl_vars['upgrade_available']->value)) {?>
				<div class="alert alert-info">
					<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'An upgrade is available for some of your modules!'),$_smarty_tpl ) );?>

					<ul>
					<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['upgrade_available']->value, 'module');
$_smarty_tpl->tpl_vars['module']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['module']->value) {
$_smarty_tpl->tpl_vars['module']->do_else = false;
?>
						<li><a href="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['currentIndex']->value, ENT_QUOTES, 'UTF-8', true);?>
&amp;token=<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['token']->value, ENT_QUOTES, 'UTF-8', true);?>
&amp;anchor=<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['module']->value['anchor'], ENT_QUOTES, 'UTF-8', true);?>
"><b><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['module']->value['displayName'], ENT_QUOTES, 'UTF-8', true);?>
</b></a></li>
					<?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
					</ul>
				</div>
			<?php } else { ?>
				<div class="alert alert-success">
					<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'All modules are up to date!'),$_smarty_tpl ) );?>

				</div>
			<?php }?>
		</div>
	</div>
</div>
<div class="alert bg-info">
	<div class="row modules-addons-info">
		<h4><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Explore all QloApps addons'),$_smarty_tpl ) );?>
 <a class="btn btn-default _blank" href="https://qloapps.com/addons/"> <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'QloApps addons'),$_smarty_tpl ) );?>
</a></h4>
	</div>
</div>

<?php echo $_smarty_tpl->tpl_vars['kpis']->value;?>

<?php if ($_smarty_tpl->tpl_vars['add_permission']->value == '1') {?>
<div id="module_install" class="row" style="<?php if (!(isset($_POST['downloadflag']))) {?>display: none;<?php }?>">
	<div class="panel col-lg-12">
		<form id="module_install_form" action="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['currentIndex']->value, ENT_QUOTES, 'UTF-8', true);?>
&amp;token=<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['token']->value, ENT_QUOTES, 'UTF-8', true);?>
" method="post" enctype="multipart/form-data" class="form-horizontal">
			<h3><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Add a new module'),$_smarty_tpl ) );?>
</h3>
			<p class="alert alert-info"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'The module must either be a Zip file (.zip) or a tarball file (.tar, .tar.gz, .tgz).'),$_smarty_tpl ) );?>
</p>
			<div class="form-group">
				<label for="file" class="control-label col-lg-3">
					<span class="label-tooltip" data-toggle="tooltip" title="<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Upload a module from your computer.'),$_smarty_tpl ) );?>
">
						<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Module file'),$_smarty_tpl ) );?>

					</span>
				</label>
				<div class="col-sm-9">
					<div class="row">
						<div class="col-lg-7">
							<input id="file" type="file" name="file" class="hide" />
							<div class="dummyfile input-group">
								<span class="input-group-addon"><i class="icon-file"></i></span>
								<input id="file-name" type="text" class="disabled" name="filename" readonly />
								<span class="input-group-btn">
									<button id="file-selectbutton" type="button" name="submitAddAttachments" class="btn btn-default">
										<i class="icon-folder-open"></i> <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Choose a file'),$_smarty_tpl ) );?>

									</button>
								</span>
							</div>
						</div>
					</div>
				</div>
			</div>
			<div class="form-group">
				<div class="col-lg-9 col-lg-push-3">
					<button class="btn btn-default" type="submit" name="uploadAndInstall">
						<i class="icon-upload-alt" ></i>
						<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Upload  and install this module'),$_smarty_tpl ) );?>

					</button>
				</div>
			</div>
			<div id="module_install_status" class="form-group" style="display:none">
				<div class="col-lg-6 col-lg-push-3">
					<ul class="list-unstyled">
						<li class="mod_status_upload" style="display:none"><i class="icon-refresh icon-spin"></i>&nbsp;<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Uploading module.'),$_smarty_tpl ) );?>
</li>
						<li class="mod_status_check" style="display:none"><i class="icon-refresh icon-spin"></i>&nbsp;<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Checking module if module is trusted.'),$_smarty_tpl ) );?>
</li>
						<li class="mod_status_install" style="display:none"><i class="icon-refresh icon-spin"></i>&nbsp;<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Installing module.'),$_smarty_tpl ) );?>
</li>
						<li class="mod_status_update" style="display:none"><i class="icon-refresh icon-spin"></i>&nbsp;<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Module already installed, checking and installing updates.'),$_smarty_tpl ) );?>
</li>
						<li class="mod_status_rollback" style="display:none"><i class="icon-refresh icon-spin"></i>&nbsp;<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Rolling back changes.'),$_smarty_tpl ) );?>
</li>
					</ul>
					<div class="install_msg"></div>
					<div class="install_errors" style="display:none">
						<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Errors.'),$_smarty_tpl ) );?>

						<div class="list"></div>
					</div>
				</div>
			</div>
		</form>
	</div>
</div>
<?php }?>
<div class="panel">
	<div class="panel-heading">
		<i class="icon-list-ul"></i>
		<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Modules list'),$_smarty_tpl ) );?>

	</div>
	<!--start sidebar module-->
	<div class="row">
		<div class="categoriesTitle col-md-3">
			<div class="list-group">
				<form id="filternameForm" method="post" class="list-group-item form-horizontal">
					<div class="input-group">
						<span class="input-group-addon">
							<i class="icon-search"></i>
						</span>
						<input class="form-control" placeholder="<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Search'),$_smarty_tpl ) );?>
" type="text" value="" name="moduleQuicksearch" id="moduleQuicksearch" autocomplete="off" />
					</div>
				</form>
				<a class="categoryModuleFilterLink list-group-item <?php if ((isset($_smarty_tpl->tpl_vars['categoryFiltered']->value['favorites']))) {?>active<?php }?>" href="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['currentIndex']->value, ENT_QUOTES, 'UTF-8', true);?>
&amp;token=<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['token']->value, ENT_QUOTES, 'UTF-8', true);?>
&amp;filterCategory=favorites" id="filter_favorite">
					<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Favorites'),$_smarty_tpl ) );?>
 <span id="favorite-count" class="badge pull-right"><?php echo $_smarty_tpl->tpl_vars['nb_modules_favorites']->value;?>
</span>
				</a>
				<a class="categoryModuleFilterLink list-group-item <?php if (count($_smarty_tpl->tpl_vars['categoryFiltered']->value) <= 0) {?>active<?php }?>" href="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['currentIndex']->value, ENT_QUOTES, 'UTF-8', true);?>
&amp;token=<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['token']->value, ENT_QUOTES, 'UTF-8', true);?>
&amp;unfilterCategory=yes" id="filter_all">
					<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'All'),$_smarty_tpl ) );?>
 <span class="badge pull-right"><?php echo $_smarty_tpl->tpl_vars['nb_modules']->value;?>
</span>
				</a>
				<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['list_modules_categories']->value, 'module_category', false, 'module_category_key');
$_smarty_tpl->tpl_vars['module_category']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['module_category_key']->value => $_smarty_tpl->tpl_vars['module_category']->value) {
$_smarty_tpl->tpl_vars['module_category']->do_else = false;
?>
					<a class="categoryModuleFilterLink list-group-item <?php if ((isset($_smarty_tpl->tpl_vars['categoryFiltered']->value[$_smarty_tpl->tpl_vars['module_category_key']->value]))) {?>active<?php }?>" href="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['currentIndex']->value, ENT_QUOTES, 'UTF-8', true);?>
&amp;token=<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['token']->value, ENT_QUOTES, 'UTF-8', true);?>
&amp;filterCategory=<?php echo $_smarty_tpl->tpl_vars['module_category_key']->value;?>
" id="filter_<?php echo $_smarty_tpl->tpl_vars['module_category_key']->value;?>
">
						<?php echo $_smarty_tpl->tpl_vars['module_category']->value['name'];?>
 <span class="badge pull-right"><?php echo $_smarty_tpl->tpl_vars['module_category']->value['nb'];?>
</span>
					</a>
				<?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
			</div>
		</div>
		<div id="moduleContainer" class="col-md-9">
			<?php $_smarty_tpl->_subTemplateRender('file:controllers/modules/list.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
		</div>
	</div>
</div>
<?php echo '<script'; ?>
 type="text/javascript">
	$(document).ready(function(){
		$('#file-selectbutton').click(function(e){
			$('#file').trigger('click');
		});
		$('#file-name').click(function(e){
			$('#file').trigger('click');
		});
		$('#file').change(function(e){
			var val = $(this).val();
			var file = val.split(/[\\/]/);
			$('#file-name').val(file[file.length-1]);
		});
	});
<?php echo '</script'; ?>
>
<?php }
}
