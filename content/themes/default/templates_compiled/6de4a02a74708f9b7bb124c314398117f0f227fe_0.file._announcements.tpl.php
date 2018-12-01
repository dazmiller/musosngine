<?php
/* Smarty version 3.1.32, created on 2018-11-19 23:59:28
  from 'C:\laragon\www\musostar3\content\themes\default\templates\_announcements.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.32',
  'unifunc' => 'content_5bf34e60bf36b8_16937660',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '6de4a02a74708f9b7bb124c314398117f0f227fe' => 
    array (
      0 => 'C:\\laragon\\www\\musostar3\\content\\themes\\default\\templates\\_announcements.tpl',
      1 => 1542671622,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5bf34e60bf36b8_16937660 (Smarty_Internal_Template $_smarty_tpl) {
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['announcements']->value, 'announcement');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['announcement']->value) {
?>
	<div class="alert alert-<?php echo $_smarty_tpl->tpl_vars['announcement']->value['type'];?>
" data-id="<?php echo $_smarty_tpl->tpl_vars['announcement']->value['announcement_id'];?>
">
		<button type="button" class="close pull-right flip js_announcment-remover"><span>&times;</span></button>
		<?php if ($_smarty_tpl->tpl_vars['announcement']->value['title']) {?><div class="title"><?php echo $_smarty_tpl->tpl_vars['announcement']->value['title'];?>
</div><?php }?>
		<?php echo $_smarty_tpl->tpl_vars['announcement']->value['code'];?>

	</div>
<?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);
}
}
