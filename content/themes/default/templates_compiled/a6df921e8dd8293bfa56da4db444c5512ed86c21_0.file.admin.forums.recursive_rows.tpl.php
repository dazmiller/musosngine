<?php
/* Smarty version 3.1.32, created on 2018-11-20 00:16:58
  from 'C:\laragon\www\musostar3\content\themes\default\templates\admin.forums.recursive_rows.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.32',
  'unifunc' => 'content_5bf3527a17b5e3_29999188',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'a6df921e8dd8293bfa56da4db444c5512ed86c21' => 
    array (
      0 => 'C:\\laragon\\www\\musostar3\\content\\themes\\default\\templates\\admin.forums.recursive_rows.tpl',
      1 => 1542671620,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:admin.forums.recursive_rows.tpl' => 2,
  ),
),false)) {
function content_5bf3527a17b5e3_29999188 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_checkPlugins(array(0=>array('file'=>'C:\\laragon\\www\\musostar3\\includes\\libs\\Smarty\\plugins\\modifier.truncate.php','function'=>'smarty_modifier_truncate',),));
?><tr class="treegrid-<?php echo $_smarty_tpl->tpl_vars['row']->value['forum_id'];?>
 <?php if ($_smarty_tpl->tpl_vars['row']->value['forum_section'] != '0') {?>treegrid-parent-<?php echo $_smarty_tpl->tpl_vars['row']->value['forum_section'];
}?>">
    <td>
        <a target="_blank" href="<?php echo $_smarty_tpl->tpl_vars['system']->value['system_url'];?>
/forums/<?php echo $_smarty_tpl->tpl_vars['row']->value['forum_id'];?>
/<?php echo $_smarty_tpl->tpl_vars['row']->value['title_url'];?>
">
            <?php echo $_smarty_tpl->tpl_vars['row']->value['forum_name'];?>

        </a>
    </td>
    <td>
        <?php echo smarty_modifier_truncate($_smarty_tpl->tpl_vars['row']->value['forum_description'],50);?>

    </td>
    <td><?php echo $_smarty_tpl->tpl_vars['row']->value['forum_threads'];?>
</td>
    <td><span class="label label-info"><?php echo $_smarty_tpl->tpl_vars['row']->value['forum_order'];?>
</span></td>
    <td>
        <button data-toggle="tooltip" data-placement="top" title='<?php echo __("Delete");?>
' class="btn btn-xs btn-danger js_admin-deleter" data-handle="forum" data-id="<?php echo $_smarty_tpl->tpl_vars['row']->value['forum_id'];?>
">
            <i class="fa fa-trash-alt"></i>
        </button>
        <a data-toggle="tooltip" data-placement="top" title='<?php echo __("Edit");?>
' href="<?php echo $_smarty_tpl->tpl_vars['system']->value['system_url'];?>
/admincp/forums/edit_forum/<?php echo $_smarty_tpl->tpl_vars['row']->value['forum_id'];?>
" class="btn btn-xs btn-primary">
            <i class="fa fa-pencil-alt"></i>
        </a>
    </td>
</tr>
<?php if ($_smarty_tpl->tpl_vars['row']->value['childs']) {?>
    <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['row']->value['childs'], '_row');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['_row']->value) {
?>
        <?php $_smarty_tpl->_subTemplateRender('file:admin.forums.recursive_rows.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('row'=>$_smarty_tpl->tpl_vars['_row']->value), 0, true);
?>
    <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);
}
}
}
