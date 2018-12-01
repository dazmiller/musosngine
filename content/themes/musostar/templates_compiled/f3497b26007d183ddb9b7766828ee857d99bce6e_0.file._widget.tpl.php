<?php
/* Smarty version 3.1.32, created on 2018-12-01 03:19:18
  from 'C:\laragon\www\musostar3\content\themes\musostar\templates\_widget.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.32',
  'unifunc' => 'content_5c01fdb63935e2_21807260',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'f3497b26007d183ddb9b7766828ee857d99bce6e' => 
    array (
      0 => 'C:\\laragon\\www\\musostar3\\content\\themes\\musostar\\templates\\_widget.tpl',
      1 => 1542671624,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5c01fdb63935e2_21807260 (Smarty_Internal_Template $_smarty_tpl) {
if ($_smarty_tpl->tpl_vars['widgets']->value) {?>
<!-- Widgets -->
<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['widgets']->value, 'widget');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['widget']->value) {
?>
	<div class="panel panel-default panel-widget">
	    <div class="panel-heading">
	        <strong><?php echo $_smarty_tpl->tpl_vars['widget']->value['title'];?>
</strong>
	    </div>
	    <div class="panel-body"><?php echo $_smarty_tpl->tpl_vars['widget']->value['code'];?>
</div>
	</div>
<?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
<!-- Widgets -->
<?php }
}
}
