<?php /* Smarty version Smarty-3.1.21, created on 2017-09-20 14:58:50
         compiled from "/var/www/html/Zwiki/templates/modules/mod-quick_edit.tpl" */ ?>
<?php /*%%SmartyHeaderCode:33362161659c2822a9d6bb0-74337387%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '058d355a3a9cd91f1009f7de9705d1e99973dfbb' => 
    array (
      0 => '/var/www/html/Zwiki/templates/modules/mod-quick_edit.tpl',
      1 => 1419825741,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '33362161659c2822a9d6bb0-74337387',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'module_params' => 0,
    'tpl_module_title' => 0,
    'qe_action' => 0,
    'templateId' => 0,
    'customTip' => 0,
    'customTipTitle' => 0,
    'wikiHeaderTpl' => 0,
    'mod_quickedit_heading' => 0,
    'qefield' => 0,
    'addcategId' => 0,
    'prefs' => 0,
    'submit' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.21',
  'unifunc' => 'content_59c2822a9e5c95_57502532',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_59c2822a9e5c95_57502532')) {function content_59c2822a9e5c95_57502532($_smarty_tpl) {?><?php if (!is_callable('smarty_block_tikimodule')) include '/var/www/html/Zwiki/lib/smarty_tiki/block.tikimodule.php';
if (!is_callable('smarty_block_tr')) include '/var/www/html/Zwiki/lib/smarty_tiki/block.tr.php';
if (!is_callable('smarty_block_jq')) include '/var/www/html/Zwiki/lib/smarty_tiki/block.jq.php';
?>

<?php $_smarty_tpl->smarty->_tag_stack[] = array('tikimodule', array('error'=>$_smarty_tpl->tpl_vars['module_params']->value['error'],'title'=>$_smarty_tpl->tpl_vars['tpl_module_title']->value,'name'=>"quick_edit",'flip'=>$_smarty_tpl->tpl_vars['module_params']->value['flip'],'decorations'=>$_smarty_tpl->tpl_vars['module_params']->value['decorations'],'nobox'=>$_smarty_tpl->tpl_vars['module_params']->value['nobox'],'notitle'=>$_smarty_tpl->tpl_vars['module_params']->value['notitle'])); $_block_repeat=true; echo smarty_block_tikimodule(array('error'=>$_smarty_tpl->tpl_vars['module_params']->value['error'],'title'=>$_smarty_tpl->tpl_vars['tpl_module_title']->value,'name'=>"quick_edit",'flip'=>$_smarty_tpl->tpl_vars['module_params']->value['flip'],'decorations'=>$_smarty_tpl->tpl_vars['module_params']->value['decorations'],'nobox'=>$_smarty_tpl->tpl_vars['module_params']->value['nobox'],'notitle'=>$_smarty_tpl->tpl_vars['module_params']->value['notitle']), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>

	<form method="post" action="<?php echo smarty_modifier_escape($_smarty_tpl->tpl_vars['qe_action']->value);?>
">
		<div>
			<?php if ($_smarty_tpl->tpl_vars['templateId']->value) {?>
				<input type="hidden" name="templateId" value="<?php echo smarty_modifier_escape($_smarty_tpl->tpl_vars['templateId']->value);?>
" />
			<?php }?>
			<?php if ($_smarty_tpl->tpl_vars['customTip']->value) {?>
				<input type="hidden" name="customTip" value="<?php echo smarty_modifier_escape($_smarty_tpl->tpl_vars['customTip']->value);?>
" />
			<?php }?>
			<?php if ($_smarty_tpl->tpl_vars['customTipTitle']->value) {?>
				<input type="hidden" name="customTipTitle" value="<?php echo smarty_modifier_escape($_smarty_tpl->tpl_vars['customTipTitle']->value);?>
" />
			<?php }?>
			<?php if ($_smarty_tpl->tpl_vars['wikiHeaderTpl']->value) {?>
				<input type="hidden" name="wikiHeaderTpl" value="<?php echo smarty_modifier_escape($_smarty_tpl->tpl_vars['wikiHeaderTpl']->value);?>
" />
			<?php }?>
			<?php if ($_smarty_tpl->tpl_vars['mod_quickedit_heading']->value) {?>
				<div class="panel-body"><?php echo smarty_modifier_escape($_smarty_tpl->tpl_vars['mod_quickedit_heading']->value);?>
</div>
			<?php }?>
			<div class="form-group">
				<input id="<?php echo $_smarty_tpl->tpl_vars['qefield']->value;?>
" class="form-control" type="text" name="page" />
				<?php if ($_smarty_tpl->tpl_vars['addcategId']->value) {?>
					<input type="hidden" name="cat_categories[]" value="<?php echo smarty_modifier_escape($_smarty_tpl->tpl_vars['addcategId']->value);?>
" />
					<input type="hidden" name="cat_categorize" value="on" />
				<?php }?>
				<?php if ($_smarty_tpl->tpl_vars['prefs']->value['namespace_enabled']=='y'&&$_smarty_tpl->tpl_vars['prefs']->value['namespace_default']) {?>
					<div>
						<label>
							<input type="checkbox" name="namespace" value="<?php echo smarty_modifier_escape($_smarty_tpl->tpl_vars['prefs']->value['namespace_default']);?>
" checked="checked" />
							<?php $_smarty_tpl->smarty->_tag_stack[] = array('tr', array('_0'=>$_smarty_tpl->tpl_vars['prefs']->value['namespace_default'])); $_block_repeat=true; echo smarty_block_tr(array('_0'=>$_smarty_tpl->tpl_vars['prefs']->value['namespace_default']), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
Within %0<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_tr(array('_0'=>$_smarty_tpl->tpl_vars['prefs']->value['namespace_default']), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_tag_stack);?>

						</label>
					</div>
				<?php }?>
			</div>
			<input type="submit" class="btn btn-default btn-sm" name="qedit" value="<?php echo smarty_modifier_escape($_smarty_tpl->tpl_vars['submit']->value);?>
" />
		</div>
	</form>
	<?php if ($_smarty_tpl->tpl_vars['prefs']->value['javascript_enabled']=='y'&&$_smarty_tpl->tpl_vars['prefs']->value['feature_jquery_autocomplete']=='y') {?>
		<?php $_smarty_tpl->smarty->_tag_stack[] = array('jq', array()); $_block_repeat=true; echo smarty_block_jq(array(), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>

			$("#<?php echo $_smarty_tpl->tpl_vars['qefield']->value;?>
").tiki("autocomplete", "pagename");
		<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_jq(array(), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_tag_stack);?>

	<?php }?>
<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_tikimodule(array('error'=>$_smarty_tpl->tpl_vars['module_params']->value['error'],'title'=>$_smarty_tpl->tpl_vars['tpl_module_title']->value,'name'=>"quick_edit",'flip'=>$_smarty_tpl->tpl_vars['module_params']->value['flip'],'decorations'=>$_smarty_tpl->tpl_vars['module_params']->value['decorations'],'nobox'=>$_smarty_tpl->tpl_vars['module_params']->value['nobox'],'notitle'=>$_smarty_tpl->tpl_vars['module_params']->value['notitle']), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_tag_stack);?>

<?php }} ?>
