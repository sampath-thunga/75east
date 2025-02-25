<?php
/* Smarty version 3.1.39, created on 2025-02-24 02:40:54
  from '/home/qloapps/www/QloApps/admin/themes/default/template/controllers/performance/helpers/form/form.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.39',
  'unifunc' => 'content_67bb8ede3a7c15_60236806',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'a54b4365d05d42fb06f48095263080d11002f5d1' => 
    array (
      0 => '/home/qloapps/www/QloApps/admin/themes/default/template/controllers/performance/helpers/form/form.tpl',
      1 => 1728563708,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_67bb8ede3a7c15_60236806 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_203352797067bb8ede37d532_50236728', "input_row");
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_205813816567bb8ede38cd67_61505843', "input");
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_198065904267bb8ede3909e7_64973433', "description");
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_74903238867bb8ede396585_27455407', "other_input");
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_57005361567bb8ede3a42e9_13962148', "script");
?>

<?php $_smarty_tpl->inheritance->endChild($_smarty_tpl, "helpers/form/form.tpl");
}
/* {block "input_row"} */
class Block_203352797067bb8ede37d532_50236728 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'input_row' => 
  array (
    0 => 'Block_203352797067bb8ede37d532_50236728',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

	<?php if ($_smarty_tpl->tpl_vars['input']->value['name'] == 'caching_system') {?><div id="<?php echo $_smarty_tpl->tpl_vars['input']->value['name'];?>
_wrapper"<?php if ((isset($_smarty_tpl->tpl_vars['_PS_CACHE_ENABLED_']->value)) && !$_smarty_tpl->tpl_vars['_PS_CACHE_ENABLED_']->value) {?> style="display:none"<?php }?>><?php }?>
	<?php if ($_smarty_tpl->tpl_vars['input']->value['name'] == 'smarty_caching_type' || $_smarty_tpl->tpl_vars['input']->value['name'] == 'smarty_clear_cache') {?><div id="<?php echo $_smarty_tpl->tpl_vars['input']->value['name'];?>
_wrapper"<?php if ((isset($_smarty_tpl->tpl_vars['fields_value']->value['smarty_cache'])) && !$_smarty_tpl->tpl_vars['fields_value']->value['smarty_cache']) {?> style="display:none"<?php }?>><?php }?>
	<?php 
$_smarty_tpl->inheritance->callParent($_smarty_tpl, $this, '{$smarty.block.parent}');
?>

	<?php if ($_smarty_tpl->tpl_vars['input']->value['name'] == 'caching_system' || $_smarty_tpl->tpl_vars['input']->value['name'] == 'smarty_caching_type' || $_smarty_tpl->tpl_vars['input']->value['name'] == 'smarty_clear_cache') {?></div><?php }
}
}
/* {/block "input_row"} */
/* {block "input"} */
class Block_205813816567bb8ede38cd67_61505843 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'input' => 
  array (
    0 => 'Block_205813816567bb8ede38cd67_61505843',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

	<?php if ($_smarty_tpl->tpl_vars['input']->value['type'] == 'radio' && $_smarty_tpl->tpl_vars['input']->value['name'] == 'combination' && $_smarty_tpl->tpl_vars['input']->value['disabled']) {?>
		<div class="alert alert-warning">
			<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'This feature cannot be disabled because it is currently in use.'),$_smarty_tpl ) );?>

		</div>
	<?php }?>
	<?php 
$_smarty_tpl->inheritance->callParent($_smarty_tpl, $this, '{$smarty.block.parent}');
?>

<?php
}
}
/* {/block "input"} */
/* {block "description"} */
class Block_198065904267bb8ede3909e7_64973433 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'description' => 
  array (
    0 => 'Block_198065904267bb8ede3909e7_64973433',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

	<?php 
$_smarty_tpl->inheritance->callParent($_smarty_tpl, $this, '{$smarty.block.parent}');
?>

	<?php if ($_smarty_tpl->tpl_vars['input']->value['type'] == 'radio' && $_smarty_tpl->tpl_vars['input']->value['name'] == 'combination') {?>
		<ul>
			<li><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Combinations tab on product page'),$_smarty_tpl ) );?>
</li>
			<li><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Value'),$_smarty_tpl ) );?>
</li>
			<li><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Attribute'),$_smarty_tpl ) );?>
</li>
		</ul>
	<?php } elseif ($_smarty_tpl->tpl_vars['input']->value['type'] == 'radio' && $_smarty_tpl->tpl_vars['input']->value['name'] == 'feature') {?>
		<ul>
			<li><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Features tab on product page'),$_smarty_tpl ) );?>
</li>
			<li><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Feature'),$_smarty_tpl ) );?>
</li>
			<li><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Feature value'),$_smarty_tpl ) );?>
</li>
		</ul>
	<?php }
}
}
/* {/block "description"} */
/* {block "other_input"} */
class Block_74903238867bb8ede396585_27455407 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'other_input' => 
  array (
    0 => 'Block_74903238867bb8ede396585_27455407',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

	<?php if ($_smarty_tpl->tpl_vars['key']->value == 'memcachedServers') {?>
		<div id="memcachedServers">
			<div class="form-group">
				<div class="col-lg-9 col-lg-push-3">
					<button id="addMemcachedServer" class="btn btn-default" type="button" >
						<i class="icon-plus-sign-alt"></i>&nbsp;<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Add server'),$_smarty_tpl ) );?>

					</button>
				</div>
			</div>
			<div id="formMemcachedServer" style="display:none;">
					<div class="form-group">
						<label class="control-label col-lg-3"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'IP Address'),$_smarty_tpl ) );?>
 </label>
						<div class="col-lg-9">
							<input class="form-control" type="text" name="memcachedIp" />
						</div>
					</div>
					<div class="form-group">
						<label class="control-label col-lg-3"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Port'),$_smarty_tpl ) );?>
 </label>
						<div class="col-lg-9">
							<input class="form-control" type="text" name="memcachedPort" value="11211" />
						</div>
					</div>
					<div class="form-group">
						<label class="control-label col-lg-3"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Weight'),$_smarty_tpl ) );?>
 </label>
						<div class="col-lg-9">
							<input class="form-control" type="text" name="memcachedWeight" value="1" />
						</div>
					</div>
					<div class="form-group">
						<div class="col-lg-9 col-lg-push-3">
							<input type="submit" value="<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Add Server'),$_smarty_tpl ) );?>
" name="submitAddServer" class="btn btn-default" />
							<input type="button" value="<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Test Server'),$_smarty_tpl ) );?>
" id="testMemcachedServer" class="btn btn-default" />
	                	</div>
					</div>
			</div>
			<?php if ($_smarty_tpl->tpl_vars['servers']->value) {?>
			<div class="form-group">
				<table class="table">
					<thead>
						<tr>
							<th class="fixed-width-xs"><span class="title_box"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'ID'),$_smarty_tpl ) );?>
</span></th>
							<th><span class="title_box"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'IP address'),$_smarty_tpl ) );?>
</span></th>
							<th class="fixed-width-xs"><span class="title_box"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Port'),$_smarty_tpl ) );?>
</span></th>
							<th class="fixed-width-xs"><span class="title_box"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Weight'),$_smarty_tpl ) );?>
</span></th>
							<th>&nbsp;</th>
						</tr>
					</thead>
					<tbody>
				<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['servers']->value, 'server');
$_smarty_tpl->tpl_vars['server']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['server']->value) {
$_smarty_tpl->tpl_vars['server']->do_else = false;
?>
					<tr>
						<td><?php echo $_smarty_tpl->tpl_vars['server']->value['id_memcached_server'];?>
</td>
						<td><?php echo $_smarty_tpl->tpl_vars['server']->value['ip'];?>
</td>
						<td><?php echo $_smarty_tpl->tpl_vars['server']->value['port'];?>
</td>
						<td><?php echo $_smarty_tpl->tpl_vars['server']->value['weight'];?>
</td>
						<td>
							<a class="btn btn-default" href="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['currentIndex']->value, ENT_QUOTES, 'UTF-8', true);?>
&amp;token=<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['token']->value, ENT_QUOTES, 'UTF-8', true);?>
&amp;deleteMemcachedServer=<?php echo $_smarty_tpl->tpl_vars['server']->value['id_memcached_server'];?>
" onclick="if (!confirm('<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Do you really want to remove the server %s:%s','sprintf'=>array($_smarty_tpl->tpl_vars['server']->value['ip'],$_smarty_tpl->tpl_vars['server']->value['port']),'js'=>1),$_smarty_tpl ) );?>
')) return false;"><i class="icon-minus-sign-alt"></i> <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Remove'),$_smarty_tpl ) );?>
</a>
						</td>
					</tr>
				<?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
					</tbody>
				</table>
			</div>
			<?php }?>
		</div>
	<?php }
}
}
/* {/block "other_input"} */
/* {block "script"} */
class Block_57005361567bb8ede3a42e9_13962148 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'script' => 
  array (
    0 => 'Block_57005361567bb8ede3a42e9_13962148',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>


	function showMemcached() {
		if ($('input[name="caching_system"]:radio:checked').val() == 'CacheMemcache' || $('input[name="caching_system"]:radio:checked').val() == 'CacheMemcached') {
			$('#memcachedServers').css('display', $('#cache_active_on').is(':checked') ? 'block' : 'none');
			$('#ps_cache_fs_directory_depth').closest('.form-group').hide();
		}
		else if ($('input[name="caching_system"]:radio:checked').val() == 'CacheFs') {
			$('#memcachedServers').hide();
			$('#ps_cache_fs_directory_depth').closest('.form-group').css('display', $('#cache_active_on').is(':checked') ? 'block' : 'none');
		}
		else {
			$('#memcachedServers').hide();
			$('#ps_cache_fs_directory_depth').closest('.form-group').hide();
		}
	}

	$(document).ready(function() {

		showMemcached();

		$('input[name="cache_active"]').change(function() {
			$('#caching_system_wrapper').css('display', ($(this).val() == 1) ? 'block' : 'none');
			showMemcached();

			if ($('input[name="caching_system"]:radio:checked').val() == 'CacheFs')
				$('#ps_cache_fs_directory_depth').focus();
		});

		$('input[name="caching_system"]').change(function() {
			$('#cache_up').val(1);
			showMemcached();

			if ($('input[name="caching_system"]:radio:checked').val() == 'CacheFs')
				$('#ps_cache_fs_directory_depth').focus();
		});

		$('input[name="smarty_cache"]').change(function() {
			$('#smarty_caching_type_wrapper').css('display', ($(this).val() == 1) ? 'block' : 'none');
			$('#smarty_clear_cache_wrapper').css('display', ($(this).val() == 1) ? 'block' : 'none');
		});

		$('#addMemcachedServer').click(function() {
			$('#formMemcachedServer').show();
			return false;
		});

		$('#testMemcachedServer').click(function() {
			var host = $('input:text[name=memcachedIp]').val();
			var port = $('input:text[name=memcachedPort]').val();
			var type = $('input[name="caching_system"]:radio:checked').val() == 'CacheMemcached' ? 'memcached' : 'memcache';
			if (host && port)
			{
				$.ajax({
					url: 'index.php',
					data:
					{
						controller: 'adminperformance',
						token: '<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['token']->value, ENT_QUOTES, 'UTF-8', true);?>
',
						action: 'test_server',
						sHost: host,
						sPort: port,
						type: type,
						ajax: true
					},
					context: document.body,
					dataType: 'json',
					context: this,
					async: false,
					success: function(data)
					{
						if (data && $.isArray(data))
						{
							var color = data[0] != 0 ? 'green' : 'red';
							$('#formMemcachedServerStatus').show();
							$('input:text[name=memcachedIp]').css('background', color);
							$('input:text[name=memcachedPort]').css('background', color);
						}
					}
				});
			}
			return false;
		});

		$('input[name="smarty_force_compile"], input[name="smarty_cache"], input[name="smarty_clear_cache"], input[name="smarty_caching_type"], input[name="smarty_console"], input[name="smarty_console_key"]').change(function(){
			$('#smarty_up').val(1);
		});

		$('input[name="combination"], input[name="feature"], input[name="customer_group"]').change(function(){
			$('#features_detachables_up').val(1);
		});

		$('input[name="_MEDIA_SERVER_1_"], input[name="_MEDIA_SERVER_2_"], input[name="_MEDIA_SERVER_3_"]').change(function(){
			$('#media_server_up').val(1);
		});

		$('input[name="PS_CIPHER_ALGORITHM"]').change(function(){
			$('#ciphering_up').val(1);
		});

		$('input[name="cache_active"]').change(function(){
			$('#cache_up').val(1);
		});
	});

<?php
}
}
/* {/block "script"} */
}
