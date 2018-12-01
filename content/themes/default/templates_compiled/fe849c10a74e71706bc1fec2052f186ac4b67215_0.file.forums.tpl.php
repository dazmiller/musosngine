<?php
/* Smarty version 3.1.32, created on 2018-11-20 00:19:22
  from 'C:\laragon\www\musostar3\content\themes\default\templates\forums.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.32',
  'unifunc' => 'content_5bf3530a9c3882_47198774',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'fe849c10a74e71706bc1fec2052f186ac4b67215' => 
    array (
      0 => 'C:\\laragon\\www\\musostar3\\content\\themes\\default\\templates\\forums.tpl',
      1 => 1542671621,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:_head.tpl' => 1,
    'file:_header.tpl' => 1,
    'file:admin.forums.recursive_options.tpl' => 1,
    'file:_footer.tpl' => 1,
  ),
),false)) {
function content_5bf3530a9c3882_47198774 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_checkPlugins(array(0=>array('file'=>'C:\\laragon\\www\\musostar3\\includes\\libs\\Smarty\\plugins\\modifier.truncate.php','function'=>'smarty_modifier_truncate',),));
$_smarty_tpl->_subTemplateRender('file:_head.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
$_smarty_tpl->_subTemplateRender('file:_header.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

<!-- page content -->
<div class="container mt20">

    <!-- navbar -->
    <div class="navbar forum-navbar">
        <div class="container-fluid">
            <div class="navbar-header">
                <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#forum-navbar" aria-expanded="false">
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
            </div>

            <div class="collapse navbar-collapse" id="forum-navbar">
                <ul class="nav navbar-nav">
                    <li <?php if ($_smarty_tpl->tpl_vars['view']->value == '') {?>class="active"<?php }?>>
                        <a href="<?php echo $_smarty_tpl->tpl_vars['system']->value['system_url'];?>
/forums"><i class="fa fa-home"></i> <?php echo __("Home");?>
</a>
                    </li>
                    <li <?php if ($_smarty_tpl->tpl_vars['view']->value == "my-threads") {?>class="active"<?php }?>>
                        <a href="<?php echo $_smarty_tpl->tpl_vars['system']->value['system_url'];?>
/forums/my-threads"><i class="fa fa-copy"></i> <?php echo __("My Threads");?>
</a>
                    </li>
                    <li <?php if ($_smarty_tpl->tpl_vars['view']->value == "my-replies") {?>class="active"<?php }?>>
                        <a href="<?php echo $_smarty_tpl->tpl_vars['system']->value['system_url'];?>
/forums/my-replies"><i class="fa fa-comments"></i> <?php echo __("My Replies");?>
</a>
                    </li>
                    <li <?php if ($_smarty_tpl->tpl_vars['view']->value == "search") {?>class="active"<?php }?>>
                        <a href="<?php echo $_smarty_tpl->tpl_vars['system']->value['system_url'];?>
/forums/search"><i class="fa fa-search"></i> <?php echo __("Search");?>
</a>
                    </li>
                </ul>
            </div>
        </div>
    </div>
    <!-- navbar -->

    <?php if ($_smarty_tpl->tpl_vars['view']->value == '') {?>
        <!-- forums -->
        <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['forums']->value, 'forum');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['forum']->value) {
?>
            <div class="forum-category">
                <a href="<?php echo $_smarty_tpl->tpl_vars['system']->value['system_url'];?>
/forums/<?php echo $_smarty_tpl->tpl_vars['forum']->value['forum_id'];?>
/<?php echo $_smarty_tpl->tpl_vars['forum']->value['title_url'];?>
"><?php echo $_smarty_tpl->tpl_vars['forum']->value['forum_name'];?>
</a>
                <div class="pull-right flip pointer">
                    <i class="fa fa-sort js_forum-toggle"></i>
                </div>
            </div>
            <?php if ($_smarty_tpl->tpl_vars['forum']->value['childs']) {?>
                <div class="js_forum-toggle-wrapper">
                    <div class="row forum-head">
                        <div class="col-xs-12 col-sm-10 column">
                            <?php echo __("Forums");?>

                        </div>
                        <div class="col-sm-1 hidden-xs column">
                            <?php echo __("Threads");?>

                        </div>
                        <div class="col-sm-1 hidden-xs column">
                            <?php echo __("Replies");?>

                        </div>
                    </div>
                    <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['forum']->value['childs'], '_forum');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['_forum']->value) {
?>
                        <div class="row forum-row">
                            <div class="col-sm-1 hidden-xs column icon">
                                <i class="fa fa-comments fa-2x"></i>
                            </div>
                            <div class="col-xs-12 col-sm-9 column">
                                <div class="mb5">
                                    <strong><a href="<?php echo $_smarty_tpl->tpl_vars['system']->value['system_url'];?>
/forums/<?php echo $_smarty_tpl->tpl_vars['_forum']->value['forum_id'];?>
/<?php echo $_smarty_tpl->tpl_vars['_forum']->value['title_url'];?>
"><?php echo $_smarty_tpl->tpl_vars['_forum']->value['forum_name'];?>
</a></strong>
                                    <span class="visible-xs-inline-block">(<?php echo $_smarty_tpl->tpl_vars['_forum']->value['total_threads'];?>
 <?php echo __("Threads");?>
 / <?php echo $_smarty_tpl->tpl_vars['_forum']->value['total_replies'];?>
 <?php echo __("Replies");?>
)</span>
                                </div>
                                <div class="mb5">
                                    <?php echo $_smarty_tpl->tpl_vars['_forum']->value['forum_description'];?>

                                </div>
                                <?php if ($_smarty_tpl->tpl_vars['_forum']->value['childs']) {?>
                                    <div class="mb5"><strong><?php echo __("Sub-Forums");?>
:</strong></div>
                                    <div>
                                        <ul class="sub-forums">
                                            <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['_forum']->value['childs'], '__forum', true);
$_smarty_tpl->tpl_vars['__forum']->iteration = 0;
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['__forum']->value) {
$_smarty_tpl->tpl_vars['__forum']->iteration++;
$_smarty_tpl->tpl_vars['__forum']->last = $_smarty_tpl->tpl_vars['__forum']->iteration === $_smarty_tpl->tpl_vars['__forum']->total;
$__foreach___forum_2_saved = $_smarty_tpl->tpl_vars['__forum'];
?>
                                            <li><a href="<?php echo $_smarty_tpl->tpl_vars['system']->value['system_url'];?>
/forums/<?php echo $_smarty_tpl->tpl_vars['__forum']->value['forum_id'];?>
/<?php echo $_smarty_tpl->tpl_vars['_forum']->value['title_url'];?>
"><?php echo $_smarty_tpl->tpl_vars['__forum']->value['forum_name'];?>
</a><?php if (!$_smarty_tpl->tpl_vars['__forum']->last) {?>, <?php }?></li>
                                            <?php
$_smarty_tpl->tpl_vars['__forum'] = $__foreach___forum_2_saved;
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
                                        </ul>
                                    </div>
                                <?php }?>
                            </div>
                            <div class="col-sm-1 hidden-xs column text-center">
                                <?php echo $_smarty_tpl->tpl_vars['_forum']->value['total_threads'];?>

                            </div>
                            <div class="col-sm-1 hidden-xs column text-center">
                                <?php echo $_smarty_tpl->tpl_vars['_forum']->value['total_replies'];?>

                            </div>
                        </div>
                    <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
                </div>
            <?php }?>
        <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
        <!-- forums -->

        <!-- forums meta -->
        <?php if ($_smarty_tpl->tpl_vars['system']->value['forums_online_enabled'] || $_smarty_tpl->tpl_vars['system']->value['forums_statistics_enabled']) {?>
            <div class="forum-category">
                <?php echo __("What's Going On?");?>

            </div>
            <!-- online users -->
            <?php if ($_smarty_tpl->tpl_vars['system']->value['forums_online_enabled']) {?>
                <div class="forum-meta-head">
                    <?php echo __("Who's online");?>
<span class="badge ml5"><?php echo number_format(count($_smarty_tpl->tpl_vars['online_users']->value),0);?>
</span>
                </div>
                <div class="forum-meta-conent">
                    <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['online_users']->value, '_user', true);
$_smarty_tpl->tpl_vars['_user']->iteration = 0;
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['_user']->value) {
$_smarty_tpl->tpl_vars['_user']->iteration++;
$_smarty_tpl->tpl_vars['_user']->last = $_smarty_tpl->tpl_vars['_user']->iteration === $_smarty_tpl->tpl_vars['_user']->total;
$__foreach__user_3_saved = $_smarty_tpl->tpl_vars['_user'];
?>
                        <a href="<?php echo $_smarty_tpl->tpl_vars['system']->value['system_url'];?>
/<?php echo $_smarty_tpl->tpl_vars['_user']->value['user_name'];?>
"><?php echo $_smarty_tpl->tpl_vars['_user']->value['user_firstname'];?>
 <?php echo $_smarty_tpl->tpl_vars['_user']->value['user_lastname'];?>
</a><?php if (!$_smarty_tpl->tpl_vars['_user']->last) {?>, <?php }?>
                    <?php
$_smarty_tpl->tpl_vars['_user'] = $__foreach__user_3_saved;
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
                </div>
            <?php }?>
            <!-- online users -->
            <!-- statistics -->
            <?php if ($_smarty_tpl->tpl_vars['system']->value['forums_statistics_enabled']) {?>
                <div class="forum-meta-head">
                    <?php echo __("Forum Statistics");?>

                </div>
                <div class="forum-meta-conent">
                    <span class="pr10"><strong><?php echo __("Threads");?>
</strong>: <?php echo number_format($_smarty_tpl->tpl_vars['insights']->value['threads'],0);?>
</span>
                    <span class="pr10"><strong><?php echo __("Replies");?>
</strong>: <?php echo number_format($_smarty_tpl->tpl_vars['insights']->value['replies'],0);?>
</span>
                    <span class="pr10"><strong><?php echo __("Members");?>
</strong>: <?php echo number_format($_smarty_tpl->tpl_vars['insights']->value['users'],0);?>
</span>
                </div>
            <?php }?>
            <!-- statistics -->
        <?php }?>
        <!-- forums meta -->

    <?php } elseif ($_smarty_tpl->tpl_vars['view']->value == "forum") {?>

        <!-- breadcrumb -->
        <ol class="breadcrumb forum-breadcrumb">
            <li><a href="<?php echo $_smarty_tpl->tpl_vars['system']->value['system_url'];?>
/forums/"><i class="fa fa-home"></i> <?php echo __("Home");?>
</a></li>
            <?php if ($_smarty_tpl->tpl_vars['forum']->value['parents']) {?>
                <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, array_reverse($_smarty_tpl->tpl_vars['forum']->value['parents']), 'parent');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['parent']->value) {
?>
                    <li><a href="<?php echo $_smarty_tpl->tpl_vars['system']->value['system_url'];?>
/forums/<?php echo $_smarty_tpl->tpl_vars['parent']->value['forum_id'];?>
/<?php echo $_smarty_tpl->tpl_vars['parent']->value['title_url'];?>
"><?php echo $_smarty_tpl->tpl_vars['parent']->value['forum_name'];?>
</a></li>
                <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
            <?php }?>
            <li class="active"><?php echo $_smarty_tpl->tpl_vars['forum']->value['forum_name'];?>
</li>
        </ol>
        <!-- breadcrumb -->

        <!-- forum title & description -->
        <div class="forum-title">
            <?php if ($_smarty_tpl->tpl_vars['forum']->value['forum_section'] != '0') {?>
                <div class="pull-right flip">
                    <a href="<?php echo $_smarty_tpl->tpl_vars['system']->value['system_url'];?>
/forums/new-thread/<?php echo $_smarty_tpl->tpl_vars['forum']->value['forum_id'];?>
" class="btn btn-sm btn-success">
                        <i class="fa fa-edit"></i> <?php echo __("Write New Thread");?>

                    </a>
                </div>
            <?php }?>
            <h1><?php echo $_smarty_tpl->tpl_vars['forum']->value['forum_name'];?>
</h1>
            <p><?php echo $_smarty_tpl->tpl_vars['forum']->value['forum_description'];?>
</p>
        </div>
        <!-- forum title & description -->

        <!-- forum-category -->
        <?php if ($_smarty_tpl->tpl_vars['forum']->value['forum_section'] == '0') {?>
            <div class="forum-category">
                <a href="<?php echo $_smarty_tpl->tpl_vars['system']->value['system_url'];?>
/forums/<?php echo $_smarty_tpl->tpl_vars['forum']->value['forum_id'];?>
/<?php echo $_smarty_tpl->tpl_vars['forum']->value['title_url'];?>
"><?php echo $_smarty_tpl->tpl_vars['forum']->value['forum_name'];?>
</a>
            </div>
        <?php }?>
        <!-- forum-category -->

        <!-- childs (forums|sub-forums) -->
        <?php if ($_smarty_tpl->tpl_vars['forum']->value['childs']) {?>
            <div class="row forum-head">
                <div class="col-xs-12 col-sm-10 column">
                    <?php if ($_smarty_tpl->tpl_vars['forum']->value['forum_section'] == '0') {
echo __("Forums");
} else {
echo __("Sub-Forums");
}?>
                </div>
                <div class="col-sm-1 hidden-xs column">
                    <?php echo __("Threads");?>

                </div>
                <div class="col-sm-1 hidden-xs column">
                    <?php echo __("Replies");?>

                </div>
            </div>
            <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['forum']->value['childs'], '_forum');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['_forum']->value) {
?>
                <div class="row forum-row">
                    <div class="col-sm-1 hidden-xs column icon">
                        <i class="fa fa-comments fa-2x"></i>
                    </div>
                    <div class="col-xs-12 col-sm-9 column">
                        <div class="mb5">
                            <strong><a href="<?php echo $_smarty_tpl->tpl_vars['system']->value['system_url'];?>
/forums/<?php echo $_smarty_tpl->tpl_vars['_forum']->value['forum_id'];?>
/<?php echo $_smarty_tpl->tpl_vars['_forum']->value['title_url'];?>
"><?php echo $_smarty_tpl->tpl_vars['_forum']->value['forum_name'];?>
</a></strong>
                            <span class="visible-xs-inline-block">(<?php echo $_smarty_tpl->tpl_vars['_forum']->value['total_threads'];?>
 <?php echo __("Threads");?>
 / <?php echo $_smarty_tpl->tpl_vars['_forum']->value['total_replies'];?>
 <?php echo __("Replies");?>
)</span>
                        </div>
                        <div class="mb5">
                            <?php echo $_smarty_tpl->tpl_vars['_forum']->value['forum_description'];?>

                        </div>
                        <?php if ($_smarty_tpl->tpl_vars['_forum']->value['childs']) {?>
                            <div class="mb5"><strong><?php echo __("Sub-Forums");?>
:</strong></div>
                            <div>
                                <ul class="sub-forums">
                                <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['_forum']->value['childs'], '__forum', true);
$_smarty_tpl->tpl_vars['__forum']->iteration = 0;
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['__forum']->value) {
$_smarty_tpl->tpl_vars['__forum']->iteration++;
$_smarty_tpl->tpl_vars['__forum']->last = $_smarty_tpl->tpl_vars['__forum']->iteration === $_smarty_tpl->tpl_vars['__forum']->total;
$__foreach___forum_6_saved = $_smarty_tpl->tpl_vars['__forum'];
?>
                                    <li><a href="<?php echo $_smarty_tpl->tpl_vars['system']->value['system_url'];?>
/forums/<?php echo $_smarty_tpl->tpl_vars['__forum']->value['forum_id'];?>
/<?php echo $_smarty_tpl->tpl_vars['_forum']->value['title_url'];?>
"><?php echo $_smarty_tpl->tpl_vars['__forum']->value['forum_name'];?>
</a><?php if (!$_smarty_tpl->tpl_vars['__forum']->last) {?>, <?php }?></li>
                                <?php
$_smarty_tpl->tpl_vars['__forum'] = $__foreach___forum_6_saved;
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
                                </ul>
                            </div>
                        <?php }?>
                    </div>
                    <div class="col-sm-1 hidden-xs column text-center">
                        <?php echo $_smarty_tpl->tpl_vars['_forum']->value['total_threads'];?>

                    </div>
                    <div class="col-sm-1 hidden-xs column text-center">
                         <?php echo $_smarty_tpl->tpl_vars['_forum']->value['total_replies'];?>

                    </div>
                </div>
            <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
        <?php }?>
        <!-- childs (forums|sub-forums) -->

        <!-- threads -->
        <?php if ($_smarty_tpl->tpl_vars['forum']->value['forum_section'] != '0') {?>
            <div class="row forum-head threads">
                <div class="col-xs-12 col-sm-8 column">
                    <?php echo __("Thread");?>

                </div>
                <div class="col-sm-2 hidden-xs column">
                    <?php echo __("Replies");?>
 / <?php echo __("Views");?>

                </div>
                <div class="col-sm-2 hidden-xs column">
                    <?php echo __("Last Post");?>

                </div>
            </div>
            <?php if ($_smarty_tpl->tpl_vars['forum']->value['threads']) {?>
                <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['forum']->value['threads'], 'thread');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['thread']->value) {
?>
                    <div class="row forum-row">
                        <div class="col-xs-12 col-sm-8 column">
                            <div class="mb5">
                                <strong><a href="<?php echo $_smarty_tpl->tpl_vars['system']->value['system_url'];?>
/forums/thread/<?php echo $_smarty_tpl->tpl_vars['thread']->value['thread_id'];?>
/<?php echo $_smarty_tpl->tpl_vars['thread']->value['title_url'];?>
"><?php echo $_smarty_tpl->tpl_vars['thread']->value['title'];?>
</a></strong>
                            </div>
                            <div class="mb5">
                                <?php echo __("By");?>
: <a href="<?php echo $_smarty_tpl->tpl_vars['system']->value['system_url'];?>
/<?php echo $_smarty_tpl->tpl_vars['thread']->value['user_name'];?>
"><?php echo $_smarty_tpl->tpl_vars['thread']->value['user_fullname'];?>
</a> <span class="js_moment" data-time="<?php echo $_smarty_tpl->tpl_vars['thread']->value['time'];?>
"><?php echo $_smarty_tpl->tpl_vars['thread']->value['time'];?>
</span>
                            </div>
                        </div>
                        <div class="col-sm-2 hidden-xs column text-center">
                            <?php echo __("Replies");?>
: <?php echo $_smarty_tpl->tpl_vars['thread']->value['replies'];?>
<br><?php echo __("Views");?>
: <?php echo $_smarty_tpl->tpl_vars['thread']->value['views'];?>

                        </div>
                        <div class="col-sm-2 hidden-xs column text-center">
                            <span class="js_moment" data-time="<?php echo $_smarty_tpl->tpl_vars['thread']->value['last_reply'];?>
"><?php echo $_smarty_tpl->tpl_vars['thread']->value['last_reply'];?>
</span>
                        </div>
                    </div>
                <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
                <?php echo $_smarty_tpl->tpl_vars['pager']->value;?>

            <?php } else { ?>
                <div class="row forum-row">
                    <div class="col-xs-12 column text-center">
                        <?php echo __("No Threads");?>

                    </div>
                </div>
            <?php }?>
        <?php }?>
        <!-- threads -->

    <?php } elseif ($_smarty_tpl->tpl_vars['view']->value == "thread") {?>

        <!-- breadcrumb -->
        <ol class="breadcrumb forum-breadcrumb">
            <li><a href="<?php echo $_smarty_tpl->tpl_vars['system']->value['system_url'];?>
/forums/"><i class="fa fa-home"></i> <?php echo __("Home");?>
</a></li>
            <?php if ($_smarty_tpl->tpl_vars['thread']->value['forum']['parents']) {?>
                <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, array_reverse($_smarty_tpl->tpl_vars['thread']->value['forum']['parents']), 'parent');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['parent']->value) {
?>
                    <li><a href="<?php echo $_smarty_tpl->tpl_vars['system']->value['system_url'];?>
/forums/<?php echo $_smarty_tpl->tpl_vars['parent']->value['forum_id'];?>
/<?php echo $_smarty_tpl->tpl_vars['parent']->value['title_url'];?>
"><?php echo $_smarty_tpl->tpl_vars['parent']->value['forum_name'];?>
</a></li>
                <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
            <?php }?>
            <li><a href="<?php echo $_smarty_tpl->tpl_vars['system']->value['system_url'];?>
/forums/<?php echo $_smarty_tpl->tpl_vars['thread']->value['forum']['forum_id'];?>
/<?php echo $_smarty_tpl->tpl_vars['thread']->value['forum']['title_url'];?>
"><?php echo $_smarty_tpl->tpl_vars['thread']->value['forum']['forum_name'];?>
</a></li>
            <li class="active"><?php echo $_smarty_tpl->tpl_vars['thread']->value['title'];?>
</li>
        </ol>
        <!-- breadcrumb -->

        <!-- thread title -->
        <div class="forum-title clearfix">
            <div class="pull-right flip">
                <a href="<?php echo $_smarty_tpl->tpl_vars['system']->value['system_url'];?>
/forums/new-reply/<?php echo $_smarty_tpl->tpl_vars['thread']->value['thread_id'];?>
" class="btn btn-sm btn-primary">
                    <i class="fa fa-reply"></i> <?php echo __("Post Reply");?>

                </a>
            </div>
            <h1><?php echo $_smarty_tpl->tpl_vars['thread']->value['title'];?>
</h1>
        </div>
        <!-- thread title -->

        <!-- thread -->
        <div class="forum-thread <?php if ($_smarty_tpl->tpl_vars['thread']->value['replies'] > 0 && $_smarty_tpl->tpl_vars['selected_page']->value != 1) {?>x-hidden<?php }?>">
            <div class="row">
                <div class="col-xs-12 col-sm-2 text-center">
                    <a href="<?php echo $_smarty_tpl->tpl_vars['system']->value['system_url'];?>
/<?php echo $_smarty_tpl->tpl_vars['thread']->value['user_name'];?>
"><img class="avatar" src="<?php echo $_smarty_tpl->tpl_vars['thread']->value['user_picture'];?>
"></a>
                    <h4>
                        <a href="<?php echo $_smarty_tpl->tpl_vars['system']->value['system_url'];?>
/<?php echo $_smarty_tpl->tpl_vars['thread']->value['user_name'];?>
"><?php echo $_smarty_tpl->tpl_vars['thread']->value['user_fullname'];?>
</a>
                    </h4>
                    <div class="mb5">
                        <?php if ($_smarty_tpl->tpl_vars['thread']->value['user_group'] == 1) {?>
                            <i class="fa fa-shield-alt"></i> <?php echo __("Admin");?>

                        <?php } elseif ($_smarty_tpl->tpl_vars['thread']->value['user_group'] == 2) {?>
                            <i class="fab fa-black-tie"></i> <?php echo __("Moderator");?>

                        <?php } else { ?>
                            <i class="fa fa-user"></i> <?php echo __("Member");?>

                        <?php }?>
                    </div>
                    <div>
                        <small><?php echo __("Joined");?>
: <span class="js_moment" data-time="<?php echo $_smarty_tpl->tpl_vars['thread']->value['user_registered'];?>
"><?php echo $_smarty_tpl->tpl_vars['thread']->value['user_registered'];?>
</span></small>
                    </div>
                </div>
                <div class="col-xs-12 col-sm-10">
                    <div class="time clearfix">
                        <!-- buttons -->
                        <div class="pull-right flip">
                            <?php if ($_smarty_tpl->tpl_vars['thread']->value['manage_thread']) {?>
                                <a data-toggle="tooltip" data-placement="top" title='<?php echo __("Edit");?>
' href="<?php echo $_smarty_tpl->tpl_vars['system']->value['system_url'];?>
/forums/edit-thread/<?php echo $_smarty_tpl->tpl_vars['thread']->value['thread_id'];?>
" class="btn btn-xs btn-default">
                                    <i class="fa fa-pencil-alt"></i>
                                </a>
                                <button data-toggle="tooltip" data-placement="top" title='<?php echo __("Delete");?>
' class="btn btn-xs btn-default js_delete-forum" data-handle="thread" data-id="<?php echo $_smarty_tpl->tpl_vars['thread']->value['thread_id'];?>
">
                                    <i class="fa fa-trash-alt"></i>
                                </button>
                            <?php } else { ?>
                                <button data-toggle="tooltip" data-placement="top" title='<?php echo __("Report");?>
' class="btn btn-xs btn-default js_report" data-handle="forum_thread" data-id="<?php echo $_smarty_tpl->tpl_vars['thread']->value['thread_id'];?>
">
                                    <i class="fa fa-flag fa-fw"></i>
                                </button>
                            <?php }?>
                        </div>
                        <!-- buttons -->
                        <!-- time -->
                        <small><i class="far fa-clock"></i> <span class="js_moment" data-time="<?php echo $_smarty_tpl->tpl_vars['thread']->value['time'];?>
"><?php echo $_smarty_tpl->tpl_vars['thread']->value['time'];?>
</span></small>
                        <!-- time -->
                    </div>
                    <div class="text">
                        <?php echo $_smarty_tpl->tpl_vars['thread']->value['parsed_text'];?>

                    </div>
                </div>
            </div>
        </div>
        <!-- thread -->

        <!-- replies -->
        <?php if ($_smarty_tpl->tpl_vars['thread']->value['replies'] > 0) {?>
            <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['thread']->value['thread_replies'], 'reply');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['reply']->value) {
?>
                <div class="forum-thread" id="reply-<?php echo $_smarty_tpl->tpl_vars['reply']->value['reply_id'];?>
">
                    <div class="row">
                        <div class="col-xs-12 col-sm-2 text-center">
                            <a href="<?php echo $_smarty_tpl->tpl_vars['system']->value['system_url'];?>
/<?php echo $_smarty_tpl->tpl_vars['reply']->value['user_name'];?>
"><img class="avatar" src="<?php echo $_smarty_tpl->tpl_vars['reply']->value['user_picture'];?>
"></a>
                            <h4>
                                <a href="<?php echo $_smarty_tpl->tpl_vars['system']->value['system_url'];?>
/<?php echo $_smarty_tpl->tpl_vars['reply']->value['user_name'];?>
"><?php echo $_smarty_tpl->tpl_vars['reply']->value['user_fullname'];?>
</a>
                            </h4>
                            <div class="mb5">
                                <?php if ($_smarty_tpl->tpl_vars['reply']->value['user_group'] == 1) {?>
                                    <i class="fa fa-shield-alt"></i> <?php echo __("Admin");?>

                                <?php } elseif ($_smarty_tpl->tpl_vars['reply']->value['user_group'] == 2) {?>
                                    <i class="fab fa-black-tie"></i> <?php echo __("Moderator");?>

                                <?php } else { ?>
                                    <i class="fa fa-user"></i> <?php echo __("Member");?>

                                <?php }?>
                            </div>
                            <div>
                                <small><?php echo __("Joined");?>
: <span class="js_moment" data-time="<?php echo $_smarty_tpl->tpl_vars['reply']->value['user_registered'];?>
"><?php echo $_smarty_tpl->tpl_vars['reply']->value['user_registered'];?>
</span></small>
                            </div>
                        </div>
                        <div class="col-xs-12 col-sm-10">
                            <div class="time clearfix">
                                <!-- buttons -->
                                <div class="pull-right flip">
                                    <a data-toggle="tooltip" data-placement="top" title='<?php echo __("Link");?>
' href="<?php echo $_smarty_tpl->tpl_vars['system']->value['system_url'];?>
/forums/thread/<?php echo $_smarty_tpl->tpl_vars['thread']->value['thread_id'];?>
/<?php echo $_smarty_tpl->tpl_vars['thread']->value['title_url'];?>
#reply-<?php echo $_smarty_tpl->tpl_vars['reply']->value['reply_id'];?>
" class="btn btn-xs btn-default">
                                        <i class="fa fa-link"></i>
                                    </a>
                                    <?php if ($_smarty_tpl->tpl_vars['reply']->value['manage_reply']) {?>
                                        <a data-toggle="tooltip" data-placement="top" title='<?php echo __("Edit");?>
' href="<?php echo $_smarty_tpl->tpl_vars['system']->value['system_url'];?>
/forums/edit-reply/<?php echo $_smarty_tpl->tpl_vars['reply']->value['reply_id'];?>
" class="btn btn-xs btn-default">
                                            <i class="fa fa-pencil-alt"></i>
                                        </a>
                                        <button data-toggle="tooltip" data-placement="top" title='<?php echo __("Delete");?>
' class="btn btn-xs btn-default js_delete-forum" data-handle="reply" data-id="<?php echo $_smarty_tpl->tpl_vars['reply']->value['reply_id'];?>
">
                                            <i class="fa fa-trash-alt"></i>
                                        </button>
                                    <?php } else { ?>
                                        <button data-toggle="tooltip" data-placement="top" title='<?php echo __("Report");?>
' class="btn btn-xs btn-default js_report" data-handle="forum_reply" data-id="<?php echo $_smarty_tpl->tpl_vars['reply']->value['reply_id'];?>
">
                                            <i class="fa fa-flag fa-fw"></i>
                                        </button>
                                    <?php }?>
                                </div>
                                <!-- buttons -->
                                <!-- time -->
                                <small><i class="far fa-clock"></i> <span class="js_moment" data-time="<?php echo $_smarty_tpl->tpl_vars['reply']->value['time'];?>
"><?php echo $_smarty_tpl->tpl_vars['reply']->value['time'];?>
</span></small>
                                <!-- time -->
                            </div>
                            <div class="text">
                                <?php echo $_smarty_tpl->tpl_vars['reply']->value['parsed_text'];?>

                            </div>
                        </div>
                    </div>
                </div>
            <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
            <?php echo $_smarty_tpl->tpl_vars['pager']->value;?>

        <?php }?>
        <!-- replies -->

    <?php } elseif ($_smarty_tpl->tpl_vars['view']->value == "new-thread") {?>

        <!-- breadcrumb -->
        <ol class="breadcrumb forum-breadcrumb">
            <li><a href="<?php echo $_smarty_tpl->tpl_vars['system']->value['system_url'];?>
/forums/"><i class="fa fa-home"></i> <?php echo __("Home");?>
</a></li>
            <?php if ($_smarty_tpl->tpl_vars['forum']->value['parents']) {?>
                <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, array_reverse($_smarty_tpl->tpl_vars['forum']->value['parents']), 'parent');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['parent']->value) {
?>
                    <li><a href="<?php echo $_smarty_tpl->tpl_vars['system']->value['system_url'];?>
/forums/<?php echo $_smarty_tpl->tpl_vars['parent']->value['forum_id'];?>
/<?php echo $_smarty_tpl->tpl_vars['parent']->value['title_url'];?>
"><?php echo $_smarty_tpl->tpl_vars['parent']->value['forum_name'];?>
</a></li>
                <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
            <?php }?>
            <li><a href="<?php echo $_smarty_tpl->tpl_vars['system']->value['system_url'];?>
/forums/<?php echo $_smarty_tpl->tpl_vars['forum']->value['forum_id'];?>
/<?php echo $_smarty_tpl->tpl_vars['forum']->value['title_url'];?>
"><?php echo $_smarty_tpl->tpl_vars['forum']->value['forum_name'];?>
</a></li>
            <li class="active"><?php echo __("Write New Thread");?>
</li>
        </ol>
        <!-- breadcrumb -->

        <!-- new thread -->
        <div class="panel panel-default mt20">
            <div class="panel-heading with-icon">
                <!-- panel title -->
                <i class="fa fa-edit pr5 panel-icon"></i>
                <strong><?php echo __("Write New Thread");?>
</strong>
                <!-- panel title -->
            </div>
            <div class="panel-body">
                <form class="js_ajax-forms form-horizontal" data-url="forums/thread.php?do=create&id=<?php echo $_smarty_tpl->tpl_vars['forum']->value['forum_id'];?>
">
                    <div class="form-group">
                        <label class="col-md-2 control-label">
                            <?php echo __("Title");?>

                        </label>
                        <div class="col-md-10">
                            <input class="form-control" name="title">
                        </div>
                    </div>

                    <div class="form-group">
                        <label class="col-md-2 control-label">
                            <?php echo __("Content");?>

                        </label>
                        <div class="col-md-10">
                            <textarea name="text" class="form-control js_wysiwyg"></textarea>
                        </div>
                    </div>

                    <div class="form-group">
                        <div class="col-md-10 col-md-offset-2">
                            <button type="submit" class="btn btn-primary"><?php echo __("Publish");?>
</button>
                        </div>
                    </div>
                    
                    <!-- error -->
                    <div class="alert alert-danger mb0 mt10 x-hidden" role="alert"></div>
                    <!-- error -->
                </form>
            </div>
        </div>
        <!-- new thread -->

    <?php } elseif ($_smarty_tpl->tpl_vars['view']->value == "edit-thread") {?>

        <!-- breadcrumb -->
        <ol class="breadcrumb forum-breadcrumb">
            <li><a href="<?php echo $_smarty_tpl->tpl_vars['system']->value['system_url'];?>
/forums/"><i class="fa fa-home"></i> <?php echo __("Home");?>
</a></li>
            <?php if ($_smarty_tpl->tpl_vars['thread']->value['forum']['parents']) {?>
                <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, array_reverse($_smarty_tpl->tpl_vars['thread']->value['forum']['parents']), 'parent');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['parent']->value) {
?>
                    <li><a href="<?php echo $_smarty_tpl->tpl_vars['system']->value['system_url'];?>
/forums/<?php echo $_smarty_tpl->tpl_vars['parent']->value['forum_id'];?>
/<?php echo $_smarty_tpl->tpl_vars['parent']->value['title_url'];?>
"><?php echo $_smarty_tpl->tpl_vars['parent']->value['forum_name'];?>
</a></li>
                <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
            <?php }?>
            <li><a href="<?php echo $_smarty_tpl->tpl_vars['system']->value['system_url'];?>
/forums/<?php echo $_smarty_tpl->tpl_vars['thread']->value['forum']['forum_id'];?>
/<?php echo $_smarty_tpl->tpl_vars['thread']->value['forum']['title_url'];?>
"><?php echo $_smarty_tpl->tpl_vars['thread']->value['forum']['forum_name'];?>
</a></li>
            <li><a href="<?php echo $_smarty_tpl->tpl_vars['system']->value['system_url'];?>
/forums/thread/<?php echo $_smarty_tpl->tpl_vars['thread']->value['thread_id'];?>
/<?php echo $_smarty_tpl->tpl_vars['thread']->value['title_url'];?>
"><?php echo $_smarty_tpl->tpl_vars['thread']->value['title'];?>
</a></li>
            <li class="active"><?php echo __("Edit Thread");?>
</li>
        </ol>
        <!-- breadcrumb -->

        <!-- edit thread -->
        <div class="panel panel-default mt20">
            <div class="panel-heading with-icon">
                <!-- panel title -->
                <i class="fa fa-edit pr5 panel-icon"></i>
                <strong><?php echo __("Edit Thread");?>
</strong>
                <!-- panel title -->
            </div>
            <div class="panel-body">
                <form class="js_ajax-forms form-horizontal" data-url="forums/thread.php?do=edit&id=<?php echo $_smarty_tpl->tpl_vars['thread']->value['thread_id'];?>
">
                    <div class="form-group">
                        <label class="col-md-2 control-label">
                            <?php echo __("Title");?>

                        </label>
                        <div class="col-md-10">
                            <input class="form-control" name="title" value="<?php echo $_smarty_tpl->tpl_vars['thread']->value['title'];?>
">
                        </div>
                    </div>

                    <div class="form-group">
                        <label class="col-md-2 control-label">
                            <?php echo __("Content");?>

                        </label>
                        <div class="col-md-10">
                            <textarea name="text" class="form-control js_wysiwyg"><?php echo $_smarty_tpl->tpl_vars['thread']->value['text'];?>
</textarea>
                        </div>
                    </div>

                    <div class="form-group">
                        <div class="col-md-10 col-md-offset-2">
                            <button type="submit" class="btn btn-primary"><?php echo __("Update");?>
</button>
                        </div>
                    </div>
                    
                    <!-- error -->
                    <div class="alert alert-danger mb0 mt10 x-hidden" role="alert"></div>
                    <!-- error -->
                </form>
            </div>
        </div>
        <!-- edit thread -->

    <?php } elseif ($_smarty_tpl->tpl_vars['view']->value == "new-reply") {?>

        <!-- breadcrumb -->
        <ol class="breadcrumb forum-breadcrumb">
            <li><a href="<?php echo $_smarty_tpl->tpl_vars['system']->value['system_url'];?>
/forums/"><i class="fa fa-home"></i> <?php echo __("Home");?>
</a></li>
            <?php if ($_smarty_tpl->tpl_vars['thread']->value['forum']['parents']) {?>
                <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, array_reverse($_smarty_tpl->tpl_vars['thread']->value['forum']['parents']), 'parent');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['parent']->value) {
?>
                    <li><a href="<?php echo $_smarty_tpl->tpl_vars['system']->value['system_url'];?>
/forums/<?php echo $_smarty_tpl->tpl_vars['parent']->value['forum_id'];?>
/<?php echo $_smarty_tpl->tpl_vars['parent']->value['title_url'];?>
"><?php echo $_smarty_tpl->tpl_vars['parent']->value['forum_name'];?>
</a></li>
                <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
            <?php }?>
            <li><a href="<?php echo $_smarty_tpl->tpl_vars['system']->value['system_url'];?>
/forums/<?php echo $_smarty_tpl->tpl_vars['thread']->value['forum']['forum_id'];?>
/<?php echo $_smarty_tpl->tpl_vars['thread']->value['forum']['title_url'];?>
"><?php echo $_smarty_tpl->tpl_vars['thread']->value['forum']['forum_name'];?>
</a></li>
            <li><a href="<?php echo $_smarty_tpl->tpl_vars['system']->value['system_url'];?>
/forums/thread/<?php echo $_smarty_tpl->tpl_vars['thread']->value['thread_id'];?>
/<?php echo $_smarty_tpl->tpl_vars['thread']->value['title_url'];?>
"><?php echo $_smarty_tpl->tpl_vars['thread']->value['title'];?>
</a></li>
            <li class="active"><?php echo __("Post Reply");?>
</li>
        </ol>
        <!-- breadcrumb -->

        <!-- new reply -->
        <div class="panel panel-default mt20">
            <div class="panel-heading with-icon">
                <!-- panel title -->
                <i class="fa fa-reply pr5 panel-icon"></i>
                <strong><?php echo __("Post Reply");?>
</strong>
                <!-- panel title -->
            </div>
            <div class="panel-body">
                <form class="js_ajax-forms form-horizontal" data-url="forums/reply.php?do=create&id=<?php echo $_smarty_tpl->tpl_vars['thread']->value['thread_id'];?>
">
                    <div class="form-group">
                        <label class="col-md-2 control-label">
                            <?php echo __("Content");?>

                        </label>
                        <div class="col-md-10">
                            <textarea name="text" class="form-control js_wysiwyg"></textarea>
                        </div>
                    </div>

                    <div class="form-group">
                        <div class="col-md-10 col-md-offset-2">
                            <button type="submit" class="btn btn-primary"><?php echo __("Reply");?>
</button>
                        </div>
                    </div>
                    
                    <!-- error -->
                    <div class="alert alert-danger mb0 mt10 x-hidden" role="alert"></div>
                    <!-- error -->
                </form>
            </div>
        </div>
        <!-- new reply -->

    <?php } elseif ($_smarty_tpl->tpl_vars['view']->value == "edit-reply") {?>

        <!-- breadcrumb -->
        <ol class="breadcrumb forum-breadcrumb">
            <li><a href="<?php echo $_smarty_tpl->tpl_vars['system']->value['system_url'];?>
/forums/"><i class="fa fa-home"></i> <?php echo __("Home");?>
</a></li>
            <?php if ($_smarty_tpl->tpl_vars['reply']->value['thread']['forum']['parents']) {?>
                <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, array_reverse($_smarty_tpl->tpl_vars['reply']->value['thread']['forum']['parents']), 'parent');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['parent']->value) {
?>
                    <li><a href="<?php echo $_smarty_tpl->tpl_vars['system']->value['system_url'];?>
/forums/<?php echo $_smarty_tpl->tpl_vars['parent']->value['forum_id'];?>
/<?php echo $_smarty_tpl->tpl_vars['parent']->value['title_url'];?>
"><?php echo $_smarty_tpl->tpl_vars['parent']->value['forum_name'];?>
</a></li>
                <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
            <?php }?>
            <li><a href="<?php echo $_smarty_tpl->tpl_vars['system']->value['system_url'];?>
/forums/<?php echo $_smarty_tpl->tpl_vars['reply']->value['thread']['forum']['forum_id'];?>
/<?php echo $_smarty_tpl->tpl_vars['reply']->value['thread']['forum']['title_url'];?>
"><?php echo $_smarty_tpl->tpl_vars['reply']->value['thread']['forum']['forum_name'];?>
</a></li>
            <li><a href="<?php echo $_smarty_tpl->tpl_vars['system']->value['system_url'];?>
/forums/thread/<?php echo $_smarty_tpl->tpl_vars['reply']->value['thread']['thread_id'];?>
/<?php echo $_smarty_tpl->tpl_vars['reply']->value['thread']['title_url'];?>
"><?php echo $_smarty_tpl->tpl_vars['reply']->value['thread']['title'];?>
</a></li>
            <li class="active"><?php echo __("Edit Reply");?>
</li>
        </ol>
        <!-- breadcrumb -->

        <!-- new reply -->
        <div class="panel panel-default mt20">
            <div class="panel-heading with-icon">
                <!-- panel title -->
                <i class="fa fa-reply pr5 panel-icon"></i>
                <strong><?php echo __("Edit Reply");?>
</strong>
                <!-- panel title -->
            </div>
            <div class="panel-body">
                <form class="js_ajax-forms form-horizontal" data-url="forums/reply.php?do=edit&id=<?php echo $_smarty_tpl->tpl_vars['reply']->value['reply_id'];?>
">
                    <div class="form-group">
                        <label class="col-md-2 control-label">
                            <?php echo __("Content");?>

                        </label>
                        <div class="col-md-10">
                            <textarea name="text" class="form-control js_wysiwyg"><?php echo $_smarty_tpl->tpl_vars['reply']->value['text'];?>
</textarea>
                        </div>
                    </div>

                    <div class="form-group">
                        <div class="col-md-10 col-md-offset-2">
                            <button type="submit" class="btn btn-primary"><?php echo __("Update");?>
</button>
                        </div>
                    </div>
                    
                    <!-- error -->
                    <div class="alert alert-danger mb0 mt10 x-hidden" role="alert"></div>
                    <!-- error -->
                </form>
            </div>
        </div>
        <!-- new reply -->

    <?php } elseif ($_smarty_tpl->tpl_vars['view']->value == "my-threads") {?>

        <!-- breadcrumb -->
        <ol class="breadcrumb forum-breadcrumb">
            <li><a href="<?php echo $_smarty_tpl->tpl_vars['system']->value['system_url'];?>
/forums/"><i class="fa fa-home"></i> <?php echo __("Home");?>
</a></li>
            <li class="active"><?php echo __("My Threads");?>
</li>
        </ol>
        <!-- breadcrumb -->

        <!-- threads -->
        <?php if ($_smarty_tpl->tpl_vars['threads']->value) {?>
            <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['threads']->value, 'thread');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['thread']->value) {
?>
                <div class="forum-result">
                    <div class="head">
                        <div class="pull-right flip">
                            <?php echo __("Forum");?>
: <a href="<?php echo $_smarty_tpl->tpl_vars['system']->value['system_url'];?>
/forums/<?php echo $_smarty_tpl->tpl_vars['thread']->value['forum']['forum_id'];?>
/<?php echo $_smarty_tpl->tpl_vars['thread']->value['forum']['title_url'];?>
"><?php echo $_smarty_tpl->tpl_vars['thread']->value['forum']['forum_name'];?>
</a>
                        </div>
                        <i class="far fa-clock mr5"></i><span class="js_moment" data-time="<?php echo $_smarty_tpl->tpl_vars['thread']->value['time'];?>
"><?php echo $_smarty_tpl->tpl_vars['thread']->value['time'];?>
</span>
                    </div>
                    <div class="content">
                        <div class="mb10">
                            <div class="mb5">
                                <strong class="title"><a href="<?php echo $_smarty_tpl->tpl_vars['system']->value['system_url'];?>
/forums/thread/<?php echo $_smarty_tpl->tpl_vars['thread']->value['thread_id'];?>
/<?php echo $_smarty_tpl->tpl_vars['thread']->value['title_url'];?>
"><?php echo $_smarty_tpl->tpl_vars['thread']->value['title'];?>
</a></strong>
                                <div class="pull-right flip text-right">
                                    <?php echo __("Replies");?>
: <strong><?php echo $_smarty_tpl->tpl_vars['thread']->value['replies'];?>
</strong><br>
                                    <?php echo __("Views");?>
: <strong><?php echo $_smarty_tpl->tpl_vars['thread']->value['views'];?>
</strong>
                                </div>
                            </div>
                            <div class="mb5">
                                <?php echo __("By");?>
: <a href="<?php echo $_smarty_tpl->tpl_vars['system']->value['system_url'];?>
/<?php echo $_smarty_tpl->tpl_vars['thread']->value['user_name'];?>
"><?php echo $_smarty_tpl->tpl_vars['thread']->value['user_fullname'];?>
</a> <span class="js_moment" data-time="<?php echo $_smarty_tpl->tpl_vars['thread']->value['time'];?>
"><?php echo $_smarty_tpl->tpl_vars['thread']->value['time'];?>
</span>
                            </div>
                        </div>
                        <div class="snippet">
                            <?php echo smarty_modifier_truncate($_smarty_tpl->tpl_vars['thread']->value['text_snippet'],300);?>

                        </div>
                    </div>
                </div>
            <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
            <?php echo $_smarty_tpl->tpl_vars['pager']->value;?>

        <?php } else { ?>
            <!-- no threads -->
            <div class="text-center x-muted mt20">
                <i class="fa fa-copy fa-4x"></i>
                <p class="mt5"><?php echo __("No threads to show");?>
</p>
            </div>
            <!-- no threads -->
        <?php }?>
        <!-- threads -->

    <?php } elseif ($_smarty_tpl->tpl_vars['view']->value == "my-replies") {?>

        <!-- breadcrumb -->
        <ol class="breadcrumb forum-breadcrumb">
            <li><a href="<?php echo $_smarty_tpl->tpl_vars['system']->value['system_url'];?>
/forums/"><i class="fa fa-home"></i> <?php echo __("Home");?>
</a></li>
            <li class="active"><?php echo __("My Replies");?>
</li>
        </ol>
        <!-- breadcrumb -->

        <!-- replies -->
        <?php if ($_smarty_tpl->tpl_vars['replies']->value) {?>
            <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['replies']->value, 'reply');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['reply']->value) {
?>
                <div class="forum-result">
                    <div class="head">
                        <div class="pull-right flip">
                            <?php echo __("Forum");?>
: <a href="<?php echo $_smarty_tpl->tpl_vars['system']->value['system_url'];?>
/forums/<?php echo $_smarty_tpl->tpl_vars['reply']->value['thread']['forum']['forum_id'];?>
/<?php echo $_smarty_tpl->tpl_vars['reply']->value['thread']['forum']['title_url'];?>
"><?php echo $_smarty_tpl->tpl_vars['reply']->value['thread']['forum']['forum_name'];?>
</a>
                        </div>
                        <i class="far fa-clock mr5"></i><span class="js_moment" data-time="<?php echo $_smarty_tpl->tpl_vars['reply']->value['time'];?>
"><?php echo $_smarty_tpl->tpl_vars['reply']->value['time'];?>
</span>
                    </div>
                    <div class="content">
                        <div class="mb10">
                            <div class="mb5">
                                <strong class="title"><a href="<?php echo $_smarty_tpl->tpl_vars['system']->value['system_url'];?>
/forums/thread/<?php echo $_smarty_tpl->tpl_vars['reply']->value['thread']['thread_id'];?>
/<?php echo $_smarty_tpl->tpl_vars['reply']->value['thread']['title_url'];?>
"><?php echo $_smarty_tpl->tpl_vars['reply']->value['thread']['title'];?>
</a></strong>
                                <div class="pull-right flip text-right">
                                    <?php echo __("Replies");?>
: <strong><?php echo $_smarty_tpl->tpl_vars['reply']->value['thread']['replies'];?>
</strong><br>
                                    <?php echo __("Views");?>
: <strong><?php echo $_smarty_tpl->tpl_vars['reply']->value['thread']['views'];?>
</strong>
                                </div>
                            </div>
                            <div class="mb5">
                                <?php echo __("By");?>
: <a href="<?php echo $_smarty_tpl->tpl_vars['system']->value['system_url'];?>
/<?php echo $_smarty_tpl->tpl_vars['reply']->value['thread']['user_name'];?>
"><?php echo $_smarty_tpl->tpl_vars['reply']->value['thread']['user_fullname'];?>
</a> <span class="js_moment" data-time="<?php echo $_smarty_tpl->tpl_vars['reply']->value['thread']['time'];?>
"><?php echo $_smarty_tpl->tpl_vars['reply']->value['thread']['time'];?>
</span>
                            </div>
                        </div>
                        <div class="snippet">
                            <?php echo smarty_modifier_truncate($_smarty_tpl->tpl_vars['reply']->value['text_snippet'],300);?>

                        </div>
                    </div>
                </div>
            <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
            <?php echo $_smarty_tpl->tpl_vars['pager']->value;?>

        <?php } else { ?>
            <!-- no replies -->
            <div class="text-center x-muted mt20">
                <i class="fa fa-comments fa-4x"></i>
                <p class="mt5"><?php echo __("No replies to show");?>
</p>
            </div>
            <!-- no replies -->
        <?php }?>
        <!-- replies -->

    <?php } elseif ($_smarty_tpl->tpl_vars['view']->value == "search") {?>

        <!-- breadcrumb -->
        <ol class="breadcrumb forum-breadcrumb">
            <li><a href="<?php echo $_smarty_tpl->tpl_vars['system']->value['system_url'];?>
/forums/"><i class="fa fa-home"></i> <?php echo __("Home");?>
</a></li>
            <li class="active"><?php echo __("Search");?>
</li>
        </ol>
        <!-- breadcrumb -->

        <!-- search -->
        <div class="panel panel-default mt20">
            <div class="panel-heading with-icon">
                <!-- panel title -->
                <i class="fa fa-search pr5 panel-icon"></i>
                <strong><?php echo __("Search");?>
</strong>
                <!-- panel title -->
            </div>
            <div class="panel-body">
                <form action="<?php echo $_smarty_tpl->tpl_vars['system']->value['system_url'];?>
/forums/search-results" method="get" class="form-horizontal">
                    <div class="form-group">
                        <label class="col-md-2 control-label">
                            <?php echo __("Keyword(s)");?>

                        </label>
                        <div class="col-md-10">
                            <input class="form-control" name="query" required autofocus>
                        </div>
                    </div>

                    <div class="form-group">
                        <label class="col-md-2 control-label">
                            <?php echo __("Search For");?>

                        </label>
                        <div class="col-md-10">
                            <select class="form-control" name="type">
                                <option value="threads"><?php echo __("Threads");?>
</option>
                                <option value="replies"><?php echo __("Replies");?>
</option>
                            </select>
                        </div>
                    </div>

                    <div class="form-group">
                        <label class="col-md-2 control-label">
                            <?php echo __("Search in Forum(s)");?>

                        </label>
                        <div class="col-md-10">
                            <select class="form-control" name="forum">
                                <option value="all"><?php echo __("Search All Forums");?>
</option>
                                <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['forums']->value, 'forum');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['forum']->value) {
?>
                                    <?php $_smarty_tpl->_subTemplateRender('file:admin.forums.recursive_options.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, true);
?>
                                <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
                            </select>
                        </div>
                    </div>

                    <div class="form-group">
                        <div class="col-md-offset-2 col-md-10">
                            <div class="checkbox checkbox-primary">
                                <input type="checkbox" name="recursive" id="recursive"> 
                                <label for="recursive"><?php echo __("Also search in child forums");?>
</label>
                            </div>
                        </div>
                    </div>

                    <div class="form-group">
                        <div class="col-md-10 col-md-offset-2">
                            <button type="submit" class="btn btn-primary"><?php echo __("Search");?>
</button>
                        </div>
                    </div>
                    
                    <!-- error -->
                    <div class="alert alert-danger mb0 mt10 x-hidden" role="alert"></div>
                    <!-- error -->
                </form>
            </div>
        </div>
        <!-- search -->

    <?php } elseif ($_smarty_tpl->tpl_vars['view']->value == "search-results") {?>

        <!-- breadcrumb -->
        <ol class="breadcrumb forum-breadcrumb">
            <li><a href="<?php echo $_smarty_tpl->tpl_vars['system']->value['system_url'];?>
/forums/"><i class="fa fa-home"></i> <?php echo __("Home");?>
</a></li>
            <li class="active"><?php echo __("Search Results");?>
</li>
        </ol>
        <!-- breadcrumb -->

        <!-- search title -->
        <div class="forum-meta-head mt20">
            <div class="pull-right flip">
                <?php echo __("Results Found");?>
: <?php if ($_smarty_tpl->tpl_vars['total']->value) {
echo $_smarty_tpl->tpl_vars['total']->value;
} else { ?>0<?php }?>
            </div>
            <?php echo __("Keyword(s)");?>
: <u><?php echo $_smarty_tpl->tpl_vars['query']->value;?>
</u>
        </div>
        <!-- search title -->

        <!-- search results -->
        <?php if ($_smarty_tpl->tpl_vars['type']->value == "threads") {?>
            <!-- threads -->
            <?php if ($_smarty_tpl->tpl_vars['results']->value) {?>
                <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['results']->value, 'thread');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['thread']->value) {
?>
                    <div class="forum-result">
                        <div class="head">
                            <div class="pull-right flip">
                                <?php echo __("Forum");?>
: <a href="<?php echo $_smarty_tpl->tpl_vars['system']->value['system_url'];?>
/forums/<?php echo $_smarty_tpl->tpl_vars['thread']->value['forum']['forum_id'];?>
/<?php echo $_smarty_tpl->tpl_vars['thread']->value['forum']['title_url'];?>
"><?php echo $_smarty_tpl->tpl_vars['thread']->value['forum']['forum_name'];?>
</a>
                            </div>
                            <i class="far fa-clock mr5"></i><span class="js_moment" data-time="<?php echo $_smarty_tpl->tpl_vars['thread']->value['time'];?>
"><?php echo $_smarty_tpl->tpl_vars['thread']->value['time'];?>
</span>
                        </div>
                        <div class="content">
                            <div class="mb10">
                                <div class="mb5">
                                    <strong class="title"><a href="<?php echo $_smarty_tpl->tpl_vars['system']->value['system_url'];?>
/forums/thread/<?php echo $_smarty_tpl->tpl_vars['thread']->value['thread_id'];?>
/<?php echo $_smarty_tpl->tpl_vars['thread']->value['title_url'];?>
"><?php echo $_smarty_tpl->tpl_vars['thread']->value['title'];?>
</a></strong>
                                    <div class="pull-right flip text-right">
                                        <?php echo __("Replies");?>
: <strong><?php echo $_smarty_tpl->tpl_vars['thread']->value['replies'];?>
</strong><br>
                                        <?php echo __("Views");?>
: <strong><?php echo $_smarty_tpl->tpl_vars['thread']->value['views'];?>
</strong>
                                    </div>
                                </div>
                                <div class="mb5">
                                    <?php echo __("By");?>
: <a href="<?php echo $_smarty_tpl->tpl_vars['system']->value['system_url'];?>
/<?php echo $_smarty_tpl->tpl_vars['thread']->value['user_name'];?>
"><?php echo $_smarty_tpl->tpl_vars['thread']->value['user_fullname'];?>
</a> <span class="js_moment" data-time="<?php echo $_smarty_tpl->tpl_vars['thread']->value['time'];?>
"><?php echo $_smarty_tpl->tpl_vars['thread']->value['time'];?>
</span>
                                </div>
                            </div>
                            <div class="snippet">
                                <?php echo smarty_modifier_truncate($_smarty_tpl->tpl_vars['thread']->value['text_snippet'],300);?>

                            </div>
                        </div>
                    </div>
                <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
                <?php echo $_smarty_tpl->tpl_vars['pager']->value;?>

            <?php } else { ?>
                <!-- no threads -->
                <div class="text-center x-muted mt20">
                    <i class="fa fa-copy fa-4x"></i>
                    <p class="mt5"><?php echo __("No threads to show");?>
</p>
                </div>
                <!-- no threads -->
            <?php }?>
            <!-- threads -->
        <?php } elseif ($_smarty_tpl->tpl_vars['type']->value == "replies") {?>
            <!-- replies -->
            <?php if ($_smarty_tpl->tpl_vars['results']->value) {?>
                <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['results']->value, 'reply');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['reply']->value) {
?>
                    <div class="forum-result">
                        <div class="head">
                            <div class="pull-right flip">
                                <?php echo __("Forum");?>
: <a href="<?php echo $_smarty_tpl->tpl_vars['system']->value['system_url'];?>
/forums/<?php echo $_smarty_tpl->tpl_vars['reply']->value['thread']['forum']['forum_id'];?>
/<?php echo $_smarty_tpl->tpl_vars['reply']->value['thread']['forum']['title_url'];?>
"><?php echo $_smarty_tpl->tpl_vars['reply']->value['thread']['forum']['forum_name'];?>
</a>
                            </div>
                            <i class="far fa-clock mr5"></i><span class="js_moment" data-time="<?php echo $_smarty_tpl->tpl_vars['reply']->value['time'];?>
"><?php echo $_smarty_tpl->tpl_vars['reply']->value['time'];?>
</span>
                        </div>
                        <div class="content">
                            <div class="mb10">
                                <div class="mb5">
                                    <strong class="title"><a href="<?php echo $_smarty_tpl->tpl_vars['system']->value['system_url'];?>
/forums/thread/<?php echo $_smarty_tpl->tpl_vars['reply']->value['thread']['thread_id'];?>
/<?php echo $_smarty_tpl->tpl_vars['reply']->value['thread']['title_url'];?>
"><?php echo $_smarty_tpl->tpl_vars['reply']->value['thread']['title'];?>
</a></strong>
                                    <div class="pull-right flip">
                                        <?php echo __("Replies");?>
: <strong><?php echo $_smarty_tpl->tpl_vars['reply']->value['thread']['replies'];?>
</strong><br>
                                        <?php echo __("Views");?>
: <strong><?php echo $_smarty_tpl->tpl_vars['reply']->value['thread']['views'];?>
</strong>
                                    </div>
                                </div>
                                <div class="mb5">
                                    <?php echo __("By");?>
: <a href="<?php echo $_smarty_tpl->tpl_vars['system']->value['system_url'];?>
/<?php echo $_smarty_tpl->tpl_vars['reply']->value['thread']['user_name'];?>
"><?php echo $_smarty_tpl->tpl_vars['reply']->value['thread']['user_fullname'];?>
</a> <span class="js_moment" data-time="<?php echo $_smarty_tpl->tpl_vars['reply']->value['thread']['time'];?>
"><?php echo $_smarty_tpl->tpl_vars['reply']->value['thread']['time'];?>
</span>
                                </div>
                            </div>
                            <div class="snippet">
                                <?php echo smarty_modifier_truncate($_smarty_tpl->tpl_vars['reply']->value['text_snippet'],300);?>

                            </div>
                        </div>
                    </div>
                <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
                <?php echo $_smarty_tpl->tpl_vars['pager']->value;?>

            <?php } else { ?>
                <!-- no replies -->
                <div class="text-center x-muted mt20">
                    <i class="fa fa-comments fa-4x"></i>
                    <p class="mt5"><?php echo __("No replies to show");?>
</p>
                </div>
                <!-- no replies -->
            <?php }?>
            <!-- replies -->
        <?php }?>
        <!-- search results -->

    <?php }?>
        
</div>
<!-- page content -->

<?php $_smarty_tpl->_subTemplateRender('file:_footer.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
}
}
