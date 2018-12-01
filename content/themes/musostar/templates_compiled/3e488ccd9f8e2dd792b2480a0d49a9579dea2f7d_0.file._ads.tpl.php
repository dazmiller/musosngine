<?php
/* Smarty version 3.1.32, created on 2018-11-30 23:32:06
  from 'C:\laragon\www\musostar3\content\themes\musostar\templates\_ads.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.32',
  'unifunc' => 'content_5c01c876961b28_70136494',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '3e488ccd9f8e2dd792b2480a0d49a9579dea2f7d' => 
    array (
      0 => 'C:\\laragon\\www\\musostar3\\content\\themes\\musostar\\templates\\_ads.tpl',
      1 => 1542671622,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5c01c876961b28_70136494 (Smarty_Internal_Template $_smarty_tpl) {
if ($_smarty_tpl->tpl_vars['_master']->value) {?>

	<?php if ($_smarty_tpl->tpl_vars['_ads']->value && $_smarty_tpl->tpl_vars['user']->value->_logged_in && ($_smarty_tpl->tpl_vars['page']->value != "admin" && $_smarty_tpl->tpl_vars['page']->value != "settings" && $_smarty_tpl->tpl_vars['page']->value != "market" && $_smarty_tpl->tpl_vars['page']->value != "static")) {?>
	    <div class="container mtb20">
	    	<!-- ads -->
	        <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['_ads']->value, 'ads_unit');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['ads_unit']->value) {
?>
	            <div class="panel panel-default panel-widget mb0">
	                <div class="panel-heading light">
	                    <i class="fa fa-bullhorn fa-fw mr5 yellow"></i><strong><?php echo __("Sponsored");?>
</strong>
	                </div>
	                <div class="panel-body"><?php echo $_smarty_tpl->tpl_vars['ads_unit']->value['code'];?>
</div>
	            </div>
	        <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
	        <!-- ads -->
	    </div>
	<?php }?>

<?php } else { ?>

	<?php if ($_smarty_tpl->tpl_vars['ads']->value) {?>
		<!-- ads -->
		<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['ads']->value, 'ads_unit');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['ads_unit']->value) {
?>
			<div class="panel panel-default panel-widget">
			    <div class="panel-heading light">
			        <i class="fa fa-bullhorn fa-fw mr5 yellow"></i><?php echo __("Sponsored");?>

			    </div>
			    <div class="panel-body"><?php echo $_smarty_tpl->tpl_vars['ads_unit']->value['code'];?>
</div>
			</div>
		<?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
		<!-- ads -->
	<?php }?>

<?php }?>

	<?php }
}
