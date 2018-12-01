<?php
/* Smarty version 3.1.32, created on 2018-12-01 03:18:14
  from 'C:\laragon\www\musostar3\content\themes\musostar\templates\__feeds_post.social.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.32',
  'unifunc' => 'content_5c01fd767bc190_73388806',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '262b63d0b60646eaab7732f4497ed52c4e46cf17' => 
    array (
      0 => 'C:\\laragon\\www\\musostar3\\content\\themes\\musostar\\templates\\__feeds_post.social.tpl',
      1 => 1542671624,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5c01fd767bc190_73388806 (Smarty_Internal_Template $_smarty_tpl) {
if ($_smarty_tpl->tpl_vars['system']->value['social_share_enabled']) {?>
    <div class="post-sharing x-hidden">
        <span class="btn btn-sm btn-default js_share" data-id="<?php echo $_smarty_tpl->tpl_vars['post']->value['post_id'];?>
">
            <i class="fa fa-share-square icon"></i>
        </span>
        <a href="http://www.facebook.com/sharer.php?u=<?php echo $_smarty_tpl->tpl_vars['system']->value['system_url'];?>
/posts/<?php echo $_smarty_tpl->tpl_vars['post']->value['post_id'];?>
" class="btn btn-sm btn-social-icon btn-facebook" target="_blank">
            <i class="fab fa-facebook-f"></i>
        </a>
        <a href="https://twitter.com/intent/tweet?url=<?php echo $_smarty_tpl->tpl_vars['system']->value['system_url'];?>
/posts/<?php echo $_smarty_tpl->tpl_vars['post']->value['post_id'];?>
" class="btn btn-sm btn-social-icon btn-twitter" target="_blank">
            <i class="fab fa-twitter"></i>
        </a>
        <a href="https://plus.google.com/share?url=<?php echo $_smarty_tpl->tpl_vars['system']->value['system_url'];?>
/posts/<?php echo $_smarty_tpl->tpl_vars['post']->value['post_id'];?>
" class="btn btn-sm btn-social-icon btn-google" target="_blank">
            <i class="fab fa-google"></i>
        </a>
        <a href="http://vk.com/share.php?url=<?php echo $_smarty_tpl->tpl_vars['system']->value['system_url'];?>
/posts/<?php echo $_smarty_tpl->tpl_vars['post']->value['post_id'];?>
" class="btn btn-sm btn-social-icon btn-vk" target="_blank">
            <i class="fab fa-vk"></i>
        </a>
        <a href="http://www.linkedin.com/shareArticle?mini=true&url=<?php echo $_smarty_tpl->tpl_vars['system']->value['system_url'];?>
/posts/<?php echo $_smarty_tpl->tpl_vars['post']->value['post_id'];?>
" class="btn btn-sm btn-social-icon btn-linkedin" target="_blank">
            <i class="fab fa-linkedin"></i>
        </a>
        <a href="http://www.tumblr.com/share/link?url=<?php echo $_smarty_tpl->tpl_vars['system']->value['system_url'];?>
/posts/<?php echo $_smarty_tpl->tpl_vars['post']->value['post_id'];?>
" class="btn btn-sm btn-social-icon btn-tumblr" target="_blank">
            <i class="fab fa-tumblr"></i>
        </a>
        <a href="http://reddit.com/submit?url=<?php echo $_smarty_tpl->tpl_vars['system']->value['system_url'];?>
/posts/<?php echo $_smarty_tpl->tpl_vars['post']->value['post_id'];?>
" class="btn btn-sm btn-social-icon btn-reddit" target="_blank">
            <i class="fab fa-reddit"></i>
        </a>
        <a href="http://pinterest.com/pin/create/button/?url=http://www.ok.ru/dk?st.cmd=addShare&st.s=1&st._surl=<?php echo $_smarty_tpl->tpl_vars['system']->value['system_url'];?>
/posts/<?php echo $_smarty_tpl->tpl_vars['post']->value['post_id'];?>
" class="btn btn-sm btn-social-icon btn-pinterest" target="_blank">
            <i class="fab fa-pinterest"></i>
        </a>
        <a href="http://www.ok.ru/dk?st.cmd=addShare&st.s=1&st._surl=<?php echo $_smarty_tpl->tpl_vars['system']->value['system_url'];?>
/posts/<?php echo $_smarty_tpl->tpl_vars['post']->value['post_id'];?>
" class="btn btn-sm btn-social-icon btn-odnoklassniki" target="_blank">
            <i class="fab fa-odnoklassniki"></i>
        </a>
    </div>
<?php }
}
}
