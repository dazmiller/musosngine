<?php
/* Smarty version 3.1.32, created on 2018-11-30 23:31:53
  from 'C:\laragon\www\musostar3\content\themes\musostar\templates\_header.search.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.32',
  'unifunc' => 'content_5c01c869a6e415_33662290',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'e75c9bbe866d24b21b31998f13b9e7c2e06601d7' => 
    array (
      0 => 'C:\\laragon\\www\\musostar3\\content\\themes\\musostar\\templates\\_header.search.tpl',
      1 => 1542671623,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:ajax.search.tpl' => 1,
  ),
),false)) {
function content_5c01c869a6e415_33662290 (Smarty_Internal_Template $_smarty_tpl) {
?><form class="navbar-form pull-left flip hidden-xs">
    <input id="search-input" type="text" class="form-control" placeholder='<?php echo __("Search for people, pages and #hashtags");?>
' autocomplete="off">
    <div id="search-results" class="dropdown-menu dropdown-widget dropdown-search js_dropdown-keepopen">
        <div class="dropdown-widget-header">
            <?php echo __("Search Results");?>

        </div>
        <div class="dropdown-widget-body">
            <div class="loader loader_small ptb10"></div>
        </div>
        <a class="dropdown-widget-footer" id="search-results-all" href="<?php echo $_smarty_tpl->tpl_vars['system']->value['system_url'];?>
/search/"><?php echo __("See All Results");?>
</a>
    </div>
    <?php if ($_smarty_tpl->tpl_vars['user']->value->_logged_in && count($_smarty_tpl->tpl_vars['user']->value->_data['search_log']) > 0) {?>
        <div id="search-history" class="dropdown-menu dropdown-widget dropdown-search js_dropdown-keepopen">
            <div class="dropdown-widget-header">
                <span class="text-link pull-right flip js_clear-searches">
                    <?php echo __("Clear");?>

                </span>
                <i class="fa fa-clock"></i> <?php echo __("Recent Searches");?>

            </div>
            <div class="dropdown-widget-body">
                <?php $_smarty_tpl->_subTemplateRender('file:ajax.search.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('results'=>$_smarty_tpl->tpl_vars['user']->value->_data['search_log']), 0, false);
?>
            </div>
            <a class="dropdown-widget-footer" id="search-results-all" href="<?php echo $_smarty_tpl->tpl_vars['system']->value['system_url'];?>
/search/"><?php echo __("Advanced Search");?>
</a>
        </div>
    <?php }?>
</form><?php }
}
