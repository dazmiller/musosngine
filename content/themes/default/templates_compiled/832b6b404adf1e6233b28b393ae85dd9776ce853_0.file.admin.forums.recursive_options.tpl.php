<?php
/* Smarty version 3.1.32, created on 2018-11-20 00:19:41
  from 'C:\laragon\www\musostar3\content\themes\default\templates\admin.forums.recursive_options.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.32',
  'unifunc' => 'content_5bf3531d415246_61336294',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '832b6b404adf1e6233b28b393ae85dd9776ce853' => 
    array (
      0 => 'C:\\laragon\\www\\musostar3\\content\\themes\\default\\templates\\admin.forums.recursive_options.tpl',
      1 => 1542671620,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:admin.forums.recursive_options.tpl' => 2,
  ),
),false)) {
function content_5bf3531d415246_61336294 (Smarty_Internal_Template $_smarty_tpl) {
?><option <?php if ($_smarty_tpl->tpl_vars['data']->value['forum_section'] == $_smarty_tpl->tpl_vars['forum']->value['forum_id']) {?>selected style="font-weight: 600;"<?php }?> value="<?php echo $_smarty_tpl->tpl_vars['forum']->value['forum_id'];?>
" <?php if (!$_smarty_tpl->tpl_vars['forum']->value['iteration']) {?>class="bg-info"<?php }?>>
    <?php echo str_repeat("- - ",$_smarty_tpl->tpl_vars['forum']->value['iteration']);
echo __($_smarty_tpl->tpl_vars['forum']->value['forum_name']);?>

</option>
<?php if ($_smarty_tpl->tpl_vars['forum']->value['childs']) {?>
    <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['forum']->value['childs'], '_forum');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['_forum']->value) {
?>
        <?php $_smarty_tpl->_subTemplateRender('file:admin.forums.recursive_options.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('forum'=>$_smarty_tpl->tpl_vars['_forum']->value), 0, true);
?>
    <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);
}
}
}
