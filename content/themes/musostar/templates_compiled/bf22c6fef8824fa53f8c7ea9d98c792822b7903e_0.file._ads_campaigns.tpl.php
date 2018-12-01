<?php
/* Smarty version 3.1.32, created on 2018-12-01 03:19:17
  from 'C:\laragon\www\musostar3\content\themes\musostar\templates\_ads_campaigns.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.32',
  'unifunc' => 'content_5c01fdb5551311_83616894',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'bf22c6fef8824fa53f8c7ea9d98c792822b7903e' => 
    array (
      0 => 'C:\\laragon\\www\\musostar3\\content\\themes\\musostar\\templates\\_ads_campaigns.tpl',
      1 => 1542671622,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5c01fdb5551311_83616894 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_checkPlugins(array(0=>array('file'=>'C:\\laragon\\www\\musostar3\\includes\\libs\\Smarty\\plugins\\modifier.truncate.php','function'=>'smarty_modifier_truncate',),));
if ($_smarty_tpl->tpl_vars['ads_campaigns']->value) {?>
	<!-- ads campaigns -->
	<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['ads_campaigns']->value, 'campaign');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['campaign']->value) {
?>
		<div class="panel panel-default panel-widget">
		    <div class="panel-heading light">
		        <i class="fa fa-bullhorn fa-fw mr5 yellow"></i><?php echo __("Sponsored");?>

		    </div>
		    <div class="panel-body <?php if ($_smarty_tpl->tpl_vars['campaign']->value['campaign_bidding'] == 'click') {?>js_ads-click-campaign<?php }?>" data-id="<?php echo $_smarty_tpl->tpl_vars['campaign']->value['campaign_id'];?>
">
		    	<a href="<?php echo $_smarty_tpl->tpl_vars['campaign']->value['ads_url'];?>
" target="_blank">
		    		<img class="img-responsive" src="<?php echo $_smarty_tpl->tpl_vars['system']->value['system_uploads'];?>
/<?php echo $_smarty_tpl->tpl_vars['campaign']->value['ads_image'];?>
">
		    	</a>
		    	<?php if ($_smarty_tpl->tpl_vars['campaign']->value['ads_title'] || $_smarty_tpl->tpl_vars['campaign']->value['ads_description']) {?>
			    	<div class="ptb5 plr10">
			    		<p class="ads-title">
				    		<a href="<?php echo $_smarty_tpl->tpl_vars['campaign']->value['ads_url'];?>
" target="_blank"><?php echo $_smarty_tpl->tpl_vars['campaign']->value['ads_title'];?>
</a>
				    	</p>
				    	<p class="ads-descrition">
				    		<?php echo smarty_modifier_truncate($_smarty_tpl->tpl_vars['campaign']->value['ads_description'],200);?>

				    	</p>
			    	</div>
		    	<?php }?>
		    </div>
		</div>
	<?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
	<!-- ads campaigns -->
<?php }?>

	<?php }
}
