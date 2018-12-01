<?php
/* Smarty version 3.1.32, created on 2018-11-19 23:58:58
  from 'C:\laragon\www\musostar3\content\themes\default\templates\_head.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.32',
  'unifunc' => 'content_5bf34e42c5f8b4_74890806',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '6908166a92e45800f6de4ffbb9986a694f3b8ef7' => 
    array (
      0 => 'C:\\laragon\\www\\musostar3\\content\\themes\\default\\templates\\_head.tpl',
      1 => 1542671623,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:../../../../includes/assets/css/bootstrap/css/bootstrap+social.css' => 1,
    'file:../css/style.css' => 1,
    'file:../css/style.rtl.css' => 1,
    'file:_head.css.tpl' => 1,
  ),
),false)) {
function content_5bf34e42c5f8b4_74890806 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_checkPlugins(array(0=>array('file'=>'C:\\laragon\\www\\musostar3\\includes\\libs\\Smarty\\plugins\\modifier.truncate.php','function'=>'smarty_modifier_truncate',),));
?><!DOCTYPE html>

<!--[if IE 8]><html class="ie8"> <![endif]-->
<!--[if IE 9]><html class="ie9 gt-ie8"> <![endif]-->
<!--[if gt IE 9]><!-->
<html class="gt-ie8 gt-ie9 not-ie" lang="<?php echo $_smarty_tpl->tpl_vars['system']->value['language']['code'];?>
" <?php if ($_smarty_tpl->tpl_vars['system']->value['language']['dir'] == "RTL") {?> dir="RTL" <?php }?>>
<!--<![endif]-->

<head>

    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=no, minimum-scale=1.0, maximum-scale=1.0">
    <meta name="generator" content="Sngine">
    <meta name="version" content="<?php echo $_smarty_tpl->tpl_vars['system']->value['system_version'];?>
">

    <!-- Title -->
    <title><?php echo smarty_modifier_truncate($_smarty_tpl->tpl_vars['page_title']->value,70);?>
</title>
    <!-- Title -->

    <!-- Meta -->
    <meta name="description" content="<?php echo smarty_modifier_truncate($_smarty_tpl->tpl_vars['page_description']->value,300);?>
">
    <meta name="keywords" content="<?php echo $_smarty_tpl->tpl_vars['system']->value['system_keywords'];?>
">
    <!-- Meta -->

    <!-- OG-Meta -->
    <meta property="og:title" content="<?php echo smarty_modifier_truncate($_smarty_tpl->tpl_vars['page_title']->value,70);?>
"/>
    <meta property="og:description" content="<?php echo smarty_modifier_truncate($_smarty_tpl->tpl_vars['page_description']->value,300);?>
"/>
    <meta property="og:site_name" content="<?php echo $_smarty_tpl->tpl_vars['system']->value['system_title'];?>
"/>
    <!-- OG-Meta -->

    <!-- OG-Image -->
    <meta property="og:image" content="<?php echo $_smarty_tpl->tpl_vars['page_image']->value;?>
"/>
    <!-- OG-Image -->

    <!-- Favicon -->
    <?php if ($_smarty_tpl->tpl_vars['system']->value['system_favicon_default']) {?>
        <link rel="shortcut icon" href="<?php echo $_smarty_tpl->tpl_vars['system']->value['system_url'];?>
/content/themes/<?php echo $_smarty_tpl->tpl_vars['system']->value['theme'];?>
/images/favicon.png" />
    <?php } elseif ($_smarty_tpl->tpl_vars['system']->value['system_favicon']) {?>
        <link rel="shortcut icon" href="<?php echo $_smarty_tpl->tpl_vars['system']->value['system_uploads'];?>
/<?php echo $_smarty_tpl->tpl_vars['system']->value['system_favicon'];?>
" />
    <?php }?>
    <!-- Favicon -->

    <!-- Dependencies CSS [Bootstrap|Font-Awesome] -->
    <style type="text/css"><?php $_smarty_tpl->_subTemplateRender("file:../../../../includes/assets/css/bootstrap/css/bootstrap+social.css", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 1, $_smarty_tpl->cache_lifetime, array(), 0, false);
?></style>
    <?php if ($_smarty_tpl->tpl_vars['user']->value->_logged_in) {?>
        <link rel="stylesheet" href="<?php echo $_smarty_tpl->tpl_vars['system']->value['system_url'];?>
/includes/assets/css/font-awesome/css/all.min.css">
    <?php }?>
    <!-- Dependencies CSS [Bootstrap|Font-Awesome] -->
    
    <!-- CSS -->
    <?php if ($_smarty_tpl->tpl_vars['system']->value['language']['dir'] == "LTR") {?>
        <style type="text/css"><?php $_smarty_tpl->_subTemplateRender("file:../css/style.css", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 1, $_smarty_tpl->cache_lifetime, array(), 0, false);
?></style>
    <?php } else { ?>
        <link rel="stylesheet" type='text/css' href="<?php echo $_smarty_tpl->tpl_vars['system']->value['system_url'];?>
/includes/assets/css/bootstrap/css/bootstrap-rtl.min.css">
        <style type="text/css"><?php $_smarty_tpl->_subTemplateRender("file:../css/style.rtl.css", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 1, $_smarty_tpl->cache_lifetime, array(), 0, false);
?></style>
    <?php }?>
    <!-- CSS -->

    <!-- CSS Customized -->
    <?php $_smarty_tpl->_subTemplateRender('file:_head.css.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
    <!-- CSS Customized -->

    <!-- Header Custom JavaScript -->
    <?php if ($_smarty_tpl->tpl_vars['system']->value['custome_js_header']) {?>
        <?php echo '<script'; ?>
 type="text/javascript">
            <?php echo html_entity_decode($_smarty_tpl->tpl_vars['system']->value['custome_js_header'],ENT_QUOTES);?>

        <?php echo '</script'; ?>
>
    <?php }?>
    <!-- Header Custom JavaScript -->

</head><?php }
}
