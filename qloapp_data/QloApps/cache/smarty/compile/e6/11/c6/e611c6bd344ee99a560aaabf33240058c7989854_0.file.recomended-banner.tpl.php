<?php
/* Smarty version 3.1.39, created on 2025-02-24 02:40:45
  from '/home/qloapps/www/QloApps/admin/themes/default/template/recomended-banner.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.39',
  'unifunc' => 'content_67bb8ed5731678_50037022',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'e611c6bd344ee99a560aaabf33240058c7989854' => 
    array (
      0 => '/home/qloapps/www/QloApps/admin/themes/default/template/recomended-banner.tpl',
      1 => 1728563708,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_67bb8ed5731678_50037022 (Smarty_Internal_Template $_smarty_tpl) {
?>
<div id="recommendation-wrapper-skeleton" style="display:none">
    <?php echo '<script'; ?>
>
        loadRecommendation();
    <?php echo '</script'; ?>
>
    <div class="col-sm-12">
        <div class="banner panel">
            <div class="row">
                <div class="col-sm-12">
                    <div class="skeleton-loading-pulse loading-container-bar"></div>
                    <div class="loading-container-bar"></div>
                    <div class="skeleton-loading-pulse loading-container-bar"></div>
                    <div class="loading-container-bar"></div>
                    <div class="skeleton-loading-pulse loading-container-bar"></div>
                    <div class="loading-container-bar"></div>
                    <div class="skeleton-loading-pulse loading-container-bar"></div>
                </div>
            </div>
        </div>
    </div>
</div>

<div id="recommendation-wrapper" style="display:none">
</div><?php }
}
