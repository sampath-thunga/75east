<?php
/* Smarty version 3.1.39, created on 2025-02-24 02:40:55
  from '/home/qloapps/www/QloApps/admin/themes/default/template/controllers/translations/helpers/view/translation_inputs_update.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.39',
  'unifunc' => 'content_67bb8edf75e4e0_70248232',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'd4629602d203b234f15f3bb3c8f495f7ebdf8bb9' => 
    array (
      0 => '/home/qloapps/www/QloApps/admin/themes/default/template/controllers/translations/helpers/view/translation_inputs_update.tpl',
      1 => 1728563708,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_67bb8edf75e4e0_70248232 (Smarty_Internal_Template $_smarty_tpl) {
echo '<script'; ?>
 type="text/javascript">
    $(document).ready(function(){
        $('#translations_form input:text,textarea').each(function(){
            $(this).data('name',$(this).attr('name'));
            $(this).removeAttr('name');
        });
        $('#translations_form').on('change','input:text,textarea',function(){
            var name = $(this).data('name');
            if(name) $(this).attr('name',name);
        });
    });
<?php echo '</script'; ?>
><?php }
}
