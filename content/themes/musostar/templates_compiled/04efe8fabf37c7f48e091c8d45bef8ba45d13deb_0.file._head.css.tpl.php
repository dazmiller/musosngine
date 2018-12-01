<?php
/* Smarty version 3.1.32, created on 2018-11-30 23:31:52
  from 'C:\laragon\www\musostar3\content\themes\musostar\templates\_head.css.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.32',
  'unifunc' => 'content_5c01c86858b7a9_66592681',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '04efe8fabf37c7f48e091c8d45bef8ba45d13deb' => 
    array (
      0 => 'C:\\laragon\\www\\musostar3\\content\\themes\\musostar\\templates\\_head.css.tpl',
      1 => 1542671623,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5c01c86858b7a9_66592681 (Smarty_Internal_Template $_smarty_tpl) {
if ($_smarty_tpl->tpl_vars['system']->value['css_customized']) {?><style type="text/css"><?php if ($_smarty_tpl->tpl_vars['system']->value['css_background']) {?>body {background: <?php echo $_smarty_tpl->tpl_vars['system']->value['css_background'];?>
;}<?php }
if ($_smarty_tpl->tpl_vars['system']->value['css_link_color']) {?>a,.data-content .name a,.text-link,.post-stats-alt,.post-stats .fa,.side-nav>li.active>a,.navbar-container .data-content .name a {color: <?php echo $_smarty_tpl->tpl_vars['system']->value['css_link_color'];?>
;}<?php }
if ($_smarty_tpl->tpl_vars['system']->value['css_btn_primary']) {?>.btn-primary, .btn-primary:focus, .btn-primary:hover {background: <?php echo $_smarty_tpl->tpl_vars['system']->value['css_btn_primary'];?>
!important;border-color: <?php echo $_smarty_tpl->tpl_vars['system']->value['css_btn_primary'];?>
!important;}<?php }
if ($_smarty_tpl->tpl_vars['system']->value['css_header']) {?>.main-header {background: <?php echo $_smarty_tpl->tpl_vars['system']->value['css_header'];?>
;}.main-header .user-menu {border-left-color: <?php echo $_smarty_tpl->tpl_vars['system']->value['css_header'];?>
;}<?php }
if ($_smarty_tpl->tpl_vars['system']->value['css_header_search_color']) {?>.main-header .navbar-form .form-control {background: <?php echo $_smarty_tpl->tpl_vars['system']->value['css_header_search'];?>
;color: <?php echo $_smarty_tpl->tpl_vars['system']->value['css_header_search_color'];?>
;}.main-header .navbar-form .form-control::-webkit-input-placeholder {color: <?php echo $_smarty_tpl->tpl_vars['system']->value['css_header_search_color'];?>
;}.main-header .navbar-form .form-control:-moz-placeholder {color: <?php echo $_smarty_tpl->tpl_vars['system']->value['css_header_search_color'];?>
;opacity: 1;}.main-header .navbar-form .form-control:-ms-input-placeholder {color: <?php echo $_smarty_tpl->tpl_vars['system']->value['css_header_search_color'];?>
;}<?php }
if ($_smarty_tpl->tpl_vars['system']->value['css_menu_background']) {?>.main-header .nav .open>a.user-menu,.main-header .nav .open>a.user-menu:hover,.main-header .nav .open>a.user-menu:focus {background: <?php echo $_smarty_tpl->tpl_vars['system']->value['css_menu_background'];?>
;border-color: <?php echo $_smarty_tpl->tpl_vars['system']->value['css_menu_background'];?>
;}.dropdown-menu>li>a:hover, .dropdown-menu>li>a:focus,.nav-home.nav-pills>li.active>a,.nav-home.nav-pills>li.active>a:hover,.nav-home.nav-pills>li.active>a:focus {background: <?php echo $_smarty_tpl->tpl_vars['system']->value['css_menu_background'];?>
;}<?php }
echo html_entity_decode($_smarty_tpl->tpl_vars['system']->value['css_custome_css'],ENT_QUOTES);?>
</style><?php }
}
}
