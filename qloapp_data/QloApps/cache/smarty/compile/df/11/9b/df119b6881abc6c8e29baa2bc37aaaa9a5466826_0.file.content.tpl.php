<?php
/* Smarty version 3.1.39, created on 2025-02-24 02:40:51
  from '/home/qloapps/www/QloApps/admin/themes/default/template/controllers/modules_catalog/content.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.39',
  'unifunc' => 'content_67bb8edb8aed71_61055204',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'df119b6881abc6c8e29baa2bc37aaaa9a5466826' => 
    array (
      0 => '/home/qloapps/www/QloApps/admin/themes/default/template/controllers/modules_catalog/content.tpl',
      1 => 1728563708,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:recomended-banner.tpl' => 1,
    'file:controllers/modules_catalog/page.tpl' => 1,
  ),
),false)) {
function content_67bb8edb8aed71_61055204 (Smarty_Internal_Template $_smarty_tpl) {
?><div id="ajax_confirmation" class="alert alert-success hide"></div>
<div id="ajaxBox" style="display:none"></div>

<?php $_smarty_tpl->_subTemplateRender('file:recomended-banner.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

<div class="row">
	<div class="col-lg-12">
		<?php $_smarty_tpl->_subTemplateRender('file:controllers/modules_catalog/page.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
	</div>
</div><?php }
}
