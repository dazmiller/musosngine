<?php
/* Smarty version 3.1.32, created on 2018-11-30 23:32:27
  from 'C:\laragon\www\musostar3\content\themes\musostar\templates\ajax.chat.master.head.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.32',
  'unifunc' => 'content_5c01c88bd3daf5_18892802',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '8212a986ac593e6c838469b432caa5174aab73ca' => 
    array (
      0 => 'C:\\laragon\\www\\musostar3\\content\\themes\\musostar\\templates\\ajax.chat.master.head.tpl',
      1 => 1542671621,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5c01c88bd3daf5_18892802 (Smarty_Internal_Template $_smarty_tpl) {
if ($_smarty_tpl->tpl_vars['offline']->value) {?>

    <div class="chat-head-title">
        <i class="fa fa-user-secret"></i>
        <?php echo __("Offline");?>

    </div>

<?php } else { ?>

    <div class="chat-head-title">
        <i class="fa fa-circle"></i>
        (<?php echo count($_smarty_tpl->tpl_vars['online_friends']->value);?>
)
    </div>

<?php }
}
}
