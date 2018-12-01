<?php
/* Smarty version 3.1.32, created on 2018-12-01 03:18:33
  from 'C:\laragon\www\musostar3\content\themes\musostar\templates\__feeds_comment.text.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.32',
  'unifunc' => 'content_5c01fd89c7c085_72206038',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '3e9e312170d0b3ee8f190b4d2081236573436479' => 
    array (
      0 => 'C:\\laragon\\www\\musostar3\\content\\themes\\musostar\\templates\\__feeds_comment.text.tpl',
      1 => 1542671624,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5c01fd89c7c085_72206038 (Smarty_Internal_Template $_smarty_tpl) {
?><div class="comment-replace">
    <div class="comment-text js_readmore" dir="auto"><?php echo $_smarty_tpl->tpl_vars['_comment']->value['text'];?>
</div>
    <div class="comment-text-plain hidden"><?php echo $_smarty_tpl->tpl_vars['_comment']->value['text_plain'];?>
</div>
    <?php if ($_smarty_tpl->tpl_vars['_comment']->value['image'] != '') {?>
        <span class="text-link js_lightbox-nodata" data-image="<?php echo $_smarty_tpl->tpl_vars['system']->value['system_uploads'];?>
/<?php echo $_smarty_tpl->tpl_vars['_comment']->value['image'];?>
">
            <img alt="" class="img-responsive" src="<?php echo $_smarty_tpl->tpl_vars['system']->value['system_uploads'];?>
/<?php echo $_smarty_tpl->tpl_vars['_comment']->value['image'];?>
">
        </span>
    <?php }?>
</div>
<?php }
}
