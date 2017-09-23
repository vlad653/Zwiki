<?php /* Smarty version Smarty-3.1.21, created on 2017-09-20 22:05:06
         compiled from "/var/www/html/Zwiki/templates/plugin/edit.tpl" */ ?>
<?php /*%%SmartyHeaderCode:83921293759c2e6122e8c34-86700301%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '5062d126dbfcb0d2148afb9018f9f6a26401d58a' => 
    array (
      0 => '/var/www/html/Zwiki/templates/plugin/edit.tpl',
      1 => 1497885004,
      2 => 'file',
    ),
    '4f7286c7acb1a08a16b8019b46726b2972801b3c' => 
    array (
      0 => '/var/www/html/Zwiki/templates/layouts/internal/modal.tpl',
      1 => 1495975029,
      2 => 'file',
    ),
    'd1a1ad6df28af6a78f777943910c3ac750f0163d' => 
    array (
      0 => '/var/www/html/Zwiki/templates/access/include_ticket.tpl',
      1 => 1488763121,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '83921293759c2e6122e8c34-86700301',
  'function' => 
  array (
    'plugin_edit_row' => 
    array (
      'parameter' => 
      array (
      ),
      'compiled' => '',
    ),
  ),
  'variables' => 
  array (
    'confirm' => 0,
    'title' => 0,
    'headerlib' => 0,
    'prefs' => 0,
    'confirmButtonClass' => 0,
    'confirmButton' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.21',
  'unifunc' => 'content_59c2e6123507e8_87602112',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_59c2e6123507e8_87602112')) {function content_59c2e6123507e8_87602112($_smarty_tpl) {?><?php if (!is_callable('smarty_function_help')) include '/var/www/html/Zwiki/lib/smarty_tiki/function.help.php';
if (!is_callable('smarty_function_service')) include '/var/www/html/Zwiki/lib/smarty_tiki/function.service.php';
if (!is_callable('smarty_function_button')) include '/var/www/html/Zwiki/lib/smarty_tiki/function.button.php';
if (!is_callable('smarty_block_jq')) include '/var/www/html/Zwiki/lib/smarty_tiki/block.jq.php';
?><!DOCTYPE html>
<?php if (isset($_smarty_tpl->tpl_vars['confirm']->value)&&$_smarty_tpl->tpl_vars['confirm']->value==='y') {?>
	<?php $_smarty_tpl->tpl_vars['confirm'] = new Smarty_variable(true, null, 0);?>
<?php } else { ?>
	<?php $_smarty_tpl->tpl_vars['confirm'] = new Smarty_variable(false, null, 0);?>
<?php }?>
<div class="modal-header">
	<button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
	<h4 class="modal-title" id="myModalLabel"><?php echo smarty_modifier_escape($_smarty_tpl->tpl_vars['title']->value);
echo smarty_function_help(array('url'=>$_smarty_tpl->tpl_vars['info']->value['documentation']),$_smarty_tpl);?>

</h4>
</div>
<div class="modal-body">
	
	<?php if (!is_callable('smarty_modifier_sefurl')) include '/var/www/html/Zwiki/lib/smarty_tiki/modifier.sefurl.php';
if (!is_callable('smarty_function_icon')) include '/var/www/html/Zwiki/lib/smarty_tiki/function.icon.php';
if (!is_callable('smarty_block_jq')) include '/var/www/html/Zwiki/lib/smarty_tiki/block.jq.php';
if (!is_callable('smarty_function_service')) include '/var/www/html/Zwiki/lib/smarty_tiki/function.service.php';
if (!is_callable('smarty_function_object_selector')) include '/var/www/html/Zwiki/lib/smarty_tiki/function.object_selector.php';
if (!is_callable('smarty_function_object_selector_multi')) include '/var/www/html/Zwiki/lib/smarty_tiki/function.object_selector_multi.php';
?><?php if (!function_exists('smarty_template_function_plugin_edit_row')) {
    function smarty_template_function_plugin_edit_row($_smarty_tpl,$params) {
    $saved_tpl_vars = $_smarty_tpl->tpl_vars;
    foreach ($_smarty_tpl->smarty->template_functions['plugin_edit_row']['parameter'] as $key => $value) {$_smarty_tpl->tpl_vars[$key] = new Smarty_variable($value);};
    foreach ($params as $key => $value) {$_smarty_tpl->tpl_vars[$key] = new Smarty_variable($value);}?>
		<?php if ($_smarty_tpl->tpl_vars['param']->value['area']) {
$_smarty_tpl->tpl_vars['inputId'] = new Smarty_variable(smarty_modifier_escape($_smarty_tpl->tpl_vars['param']->value['area']), null, 0);
} else {
ob_start();
echo smarty_modifier_escape($_smarty_tpl->tpl_vars['name']->value);
$_tmp1=ob_get_clean();?><?php $_smarty_tpl->tpl_vars['inputId'] = new Smarty_variable("param_".$_tmp1."_input", null, 0);
}?>
		<div class="col-sm-3">
			<label for="<?php echo $_smarty_tpl->tpl_vars['inputId']->value;?>
"><?php echo smarty_modifier_escape($_smarty_tpl->tpl_vars['param']->value['name']);?>
</label>
			<?php if (!empty($_smarty_tpl->tpl_vars['param']->value['type'])) {?>
				<?php ob_start();
echo smarty_modifier_sefurl($_smarty_tpl->tpl_vars['prefs']->value['home_file_gallery'],'file gallery',true);
$_tmp2=ob_get_clean();?><?php ob_start();
echo smarty_modifier_escape($_smarty_tpl->tpl_vars['param']->value['area']);
$_tmp3=ob_get_clean();?><?php $_smarty_tpl->tpl_vars['onclick'] = new Smarty_variable("openFgalsWindow('".$_tmp2."filegals_manager=".$_tmp3."&id=1', true);return false;", null, 0);?>
				<?php if ($_smarty_tpl->tpl_vars['param']->value['type']=='image') {?>
					<br><?php echo smarty_function_icon(array('name'=>'image','title'=>'Select image','onclick'=>$_smarty_tpl->tpl_vars['onclick']->value,'class'=>'btn btn-xs btn-default'),$_smarty_tpl);?>

				<?php } elseif ($_smarty_tpl->tpl_vars['param']->value['type']=='fileId') {?>
					<br><?php echo smarty_function_icon(array('name'=>'file','title'=>'Pick a file','onclick'=>$_smarty_tpl->tpl_vars['onclick']->value,'class'=>'btn btn-xs btn-default'),$_smarty_tpl);?>

				<?php } elseif ($_smarty_tpl->tpl_vars['param']->value['type']=='kaltura') {?>
					<?php $_smarty_tpl->smarty->_tag_stack[] = array('jq', array()); $_block_repeat=true; echo smarty_block_jq(array(), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>

$("#picker_<?php echo smarty_modifier_escape($_smarty_tpl->tpl_vars['name']->value);?>
").parent().click(function () {
	$(this).serviceDialog({
		title: tr("Upload or record media"),
		width: 710,
		height: 450,
		hideButtons: true,
		success: function (data) {
			if (data.entries) {
				input.value = data.entries[0];
			}
		}
	});
	return false;
});
					<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_jq(array(), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_tag_stack);?>

					<br><?php ob_start();?><?php echo smarty_function_service(array('controller'=>'kaltura','action'=>'upload'),$_smarty_tpl);?>
<?php $_tmp4=ob_get_clean();?><?php echo smarty_function_icon(array('name'=>'video','title'=>'Upload or record media','href'=>$_tmp4,'id'=>smarty_modifier_escape(('picker_').($_smarty_tpl->tpl_vars['name']->value)),'class'=>'btn btn-xs btn-default'),$_smarty_tpl);?>

				<?php }?>
			<?php }?>
		</div>
		<div class="col-sm-9">
			<?php if (!empty($_smarty_tpl->tpl_vars['param']->value['parentparam']['name'])) {?>
				<?php $_smarty_tpl->tpl_vars['groupClass'] = new Smarty_variable(" group-".((string)$_smarty_tpl->tpl_vars['param']->value['parentparam']['name']), null, 0);?>
				<?php $_smarty_tpl->tpl_vars['dataAttribute'] = new Smarty_variable(" data-parent_name='".((string)$_smarty_tpl->tpl_vars['param']->value['parentparam']['name'])."' data-parent_value='".((string)$_smarty_tpl->tpl_vars['param']->value['parentparam']['value'])."'", null, 0);?>
			<?php } else { ?>
				<?php $_smarty_tpl->tpl_vars['groupClass'] = new Smarty_variable('', null, 0);?>
				<?php $_smarty_tpl->tpl_vars['dataAttribute'] = new Smarty_variable('', null, 0);?>
			<?php }?>
			<?php if (empty($_smarty_tpl->tpl_vars['param']->value['options'])) {?>
				<?php if (isset($_smarty_tpl->tpl_vars['pluginArgs']->value[$_smarty_tpl->tpl_vars['name']->value])) {
$_smarty_tpl->tpl_vars['val'] = new Smarty_variable($_smarty_tpl->tpl_vars['pluginArgs']->value[$_smarty_tpl->tpl_vars['name']->value], null, 0);
} else {
$_smarty_tpl->tpl_vars['val'] = new Smarty_variable('', null, 0);
}?>
				<?php if (!empty($_smarty_tpl->tpl_vars['param']->value['selector_type'])) {?>
					<?php if (empty($_smarty_tpl->tpl_vars['param']->value['separator'])) {?>
						<?php echo smarty_function_object_selector(array('type'=>$_smarty_tpl->tpl_vars['param']->value['selector_type'],'_simplevalue'=>$_smarty_tpl->tpl_vars['val']->value,'_simplename'=>(smarty_modifier_escape(('params[').($_smarty_tpl->tpl_vars['name']->value))).(']'),'_simpleid'=>$_smarty_tpl->tpl_vars['inputId']->value,'_parent'=>$_smarty_tpl->tpl_vars['param']->value['parent'],'_parentkey'=>$_smarty_tpl->tpl_vars['param']->value['parentkey'],'_class'=>$_smarty_tpl->tpl_vars['groupClass']->value),$_smarty_tpl);?>

					<?php } else { ?>
						<?php echo smarty_function_object_selector_multi(array('type'=>$_smarty_tpl->tpl_vars['param']->value['selector_type'],'_simplevalue'=>$_smarty_tpl->tpl_vars['val']->value,'_simplename'=>(smarty_modifier_escape(('params[').($_smarty_tpl->tpl_vars['name']->value))).(']'),'_simpleid'=>$_smarty_tpl->tpl_vars['inputId']->value,'_separator'=>$_smarty_tpl->tpl_vars['param']->value['separator'],'_parent'=>$_smarty_tpl->tpl_vars['param']->value['parent'],'_parentkey'=>$_smarty_tpl->tpl_vars['param']->value['parentkey'],'_sort'=>$_smarty_tpl->tpl_vars['param']->value['sort_order'],'_class'=>$_smarty_tpl->tpl_vars['groupClass']->value),$_smarty_tpl);?>

					<?php }?>
					<?php if (!empty($_smarty_tpl->tpl_vars['param']->value['parentparam']['name'])) {?>
						<?php $_smarty_tpl->smarty->_tag_stack[] = array('jq', array('notonready'=>true)); $_block_repeat=true; echo smarty_block_jq(array('notonready'=>true), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
$("#<?php echo $_smarty_tpl->tpl_vars['inputId']->value;?>
").attr("data-parent_name", "<?php echo $_smarty_tpl->tpl_vars['param']->value['parentparam']['name'];?>
").attr("data-parent_value", "<?php echo $_smarty_tpl->tpl_vars['param']->value['parentparam']['value'];?>
");<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_jq(array('notonready'=>true), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_tag_stack);?>

					<?php }?>
				<?php } else { ?>
					<input value="<?php echo smarty_modifier_escape($_smarty_tpl->tpl_vars['val']->value);?>
" class="form-control<?php echo $_smarty_tpl->tpl_vars['groupClass']->value;?>
" id="<?php echo $_smarty_tpl->tpl_vars['inputId']->value;?>
" type="text" name="params[<?php echo smarty_modifier_escape($_smarty_tpl->tpl_vars['name']->value);?>
]"<?php echo $_smarty_tpl->tpl_vars['dataAttribute']->value;?>
>
					<?php if (!empty($_smarty_tpl->tpl_vars['param']->value['filter'])) {?>
						<?php if ($_smarty_tpl->tpl_vars['param']->value['filter']=="pagename") {?>
							<?php $_smarty_tpl->smarty->_tag_stack[] = array('jq', array()); $_block_repeat=true; echo smarty_block_jq(array(), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
$(<?php echo $_smarty_tpl->tpl_vars['inputId']->value;?>
).tiki("autocomplete", "pagename");<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_jq(array(), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_tag_stack);?>

						<?php } elseif ($_smarty_tpl->tpl_vars['param']->value['filter']=="groupname") {?>
							<?php $_smarty_tpl->smarty->_tag_stack[] = array('jq', array()); $_block_repeat=true; echo smarty_block_jq(array(), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
$(<?php echo $_smarty_tpl->tpl_vars['inputId']->value;?>
).tiki("autocomplete", "groupname", {multiple: true, multipleSeparator: "|"});<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_jq(array(), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_tag_stack);?>

						<?php } elseif ($_smarty_tpl->tpl_vars['param']->value['filter']=="username") {?>
							<?php $_smarty_tpl->smarty->_tag_stack[] = array('jq', array()); $_block_repeat=true; echo smarty_block_jq(array(), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
$(<?php echo $_smarty_tpl->tpl_vars['inputId']->value;?>
).tiki("autocomplete", "username", {multiple: true, multipleSeparator: "|"});<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_jq(array(), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_tag_stack);?>

						<?php } elseif ($_smarty_tpl->tpl_vars['param']->value['filter']=="date") {?>
							<?php $_smarty_tpl->smarty->_tag_stack[] = array('jq', array()); $_block_repeat=true; echo smarty_block_jq(array(), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
$(<?php echo $_smarty_tpl->tpl_vars['inputId']->value;?>
).tiki("datepicker");<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_jq(array(), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_tag_stack);?>

						<?php }?>
					<?php }?>
				<?php }?>
			<?php } else { ?>
				<select class="form-control<?php echo $_smarty_tpl->tpl_vars['groupClass']->value;?>
" type="text" name="params[<?php echo smarty_modifier_escape($_smarty_tpl->tpl_vars['name']->value);?>
]" id="<?php echo $_smarty_tpl->tpl_vars['inputId']->value;?>
"<?php echo $_smarty_tpl->tpl_vars['dataAttribute']->value;?>
>
					<?php  $_smarty_tpl->tpl_vars['option'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['option']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['param']->value['options']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['option']->key => $_smarty_tpl->tpl_vars['option']->value) {
$_smarty_tpl->tpl_vars['option']->_loop = true;
?>
						<option value="<?php echo smarty_modifier_escape($_smarty_tpl->tpl_vars['option']->value['value']);?>
" <?php if (isset($_smarty_tpl->tpl_vars['pluginArgs']->value[$_smarty_tpl->tpl_vars['name']->value])&&$_smarty_tpl->tpl_vars['pluginArgs']->value[$_smarty_tpl->tpl_vars['name']->value]==$_smarty_tpl->tpl_vars['option']->value['value']) {?> selected="selected"<?php }?>>
							<?php echo smarty_modifier_escape($_smarty_tpl->tpl_vars['option']->value['text']);?>

						</option>
					<?php } ?>
				</select>
			<?php }?>
			<div class="description"><?php echo $_smarty_tpl->tpl_vars['param']->value['description'];?>
</div>
		</div>
	<?php $_smarty_tpl->tpl_vars = $saved_tpl_vars;
foreach (Smarty::$global_tpl_vars as $key => $value) if(!isset($_smarty_tpl->tpl_vars[$key])) $_smarty_tpl->tpl_vars[$key] = $value;}}?>

	<div class="form-horizontal" id="plugin_params">
		<form action="<?php echo smarty_function_service(array('controller'=>'plugin','action'=>'edit'),$_smarty_tpl);?>
" method="post">
			<?php /*  Call merged included template "access/include_ticket.tpl" */
$_tpl_stack[] = $_smarty_tpl;
 $_smarty_tpl = $_smarty_tpl->setupInlineSubTemplate('access/include_ticket.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0, '83921293759c2e6122e8c34-86700301');
content_59c2e6123333b3_59628410($_smarty_tpl);
$_smarty_tpl = array_pop($_tpl_stack); 
/*  End of included template "access/include_ticket.tpl" */?>
			<?php  $_smarty_tpl->tpl_vars['param'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['param']->_loop = false;
 $_smarty_tpl->tpl_vars['name'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['info']->value['params']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['param']->key => $_smarty_tpl->tpl_vars['param']->value) {
$_smarty_tpl->tpl_vars['param']->_loop = true;
 $_smarty_tpl->tpl_vars['name']->value = $_smarty_tpl->tpl_vars['param']->key;
?>
				<div class="form-group<?php if ($_smarty_tpl->tpl_vars['param']->value['advanced']) {?> advanced<?php }?>" id="param_<?php echo smarty_modifier_escape($_smarty_tpl->tpl_vars['name']->value);?>
">
					<?php smarty_template_function_plugin_edit_row($_smarty_tpl,array('param'=>$_smarty_tpl->tpl_vars['param']->value,'info'=>$_smarty_tpl->tpl_vars['info']->value,'pluginArgs'=>$_smarty_tpl->tpl_vars['pluginArgs']->value));?>

				</div>
			<?php } ?>
			<?php if (!empty($_smarty_tpl->tpl_vars['info']->value['advancedParams'])) {?>
				<?php echo smarty_function_button(array('_text'=>'Advanced','_onclick'=>"$"."('.form-group.advanced.default').toggle('fast'); return false;",'_class'=>'btn btn-xs margin-bottom-md'),$_smarty_tpl);?>

				<?php  $_smarty_tpl->tpl_vars['param'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['param']->_loop = false;
 $_smarty_tpl->tpl_vars['name'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['info']->value['advancedParams']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['param']->key => $_smarty_tpl->tpl_vars['param']->value) {
$_smarty_tpl->tpl_vars['param']->_loop = true;
 $_smarty_tpl->tpl_vars['name']->value = $_smarty_tpl->tpl_vars['param']->key;
?>
					<div class="form-group advanced default" style="display: none;">
						<?php smarty_template_function_plugin_edit_row($_smarty_tpl,array('param'=>$_smarty_tpl->tpl_vars['param']->value,'info'=>$_smarty_tpl->tpl_vars['info']->value,'pluginArgs'=>$_smarty_tpl->tpl_vars['pluginArgs']->value));?>

					</div>
				<?php } ?>
			<?php }?>

			<div class="form-group"<?php if (empty($_smarty_tpl->tpl_vars['info']->value['body'])) {?> style="display:none"<?php }?>>
				<label for="content" class="col-sm-3">Тело документа</label>
				<div class="col-sm-9">
					<textarea name="content" id="content" class="form-control" rows="12"><?php echo smarty_modifier_escape($_smarty_tpl->tpl_vars['bodyContent']->value);?>
</textarea>
					<div class="description"><?php echo $_smarty_tpl->tpl_vars['info']->value['body'];?>
</div>
				</div>
			</div>

			<div class="submit">
				<input type="hidden" name="page" value="<?php echo smarty_modifier_escape($_smarty_tpl->tpl_vars['pageName']->value);?>
">
				<input type="hidden" name="type" value="<?php echo $_smarty_tpl->tpl_vars['type']->value;?>
">
				<input type="hidden" name="index" value="<?php echo $_smarty_tpl->tpl_vars['index']->value;?>
">
				<input type="hidden" name="args" value="<?php echo smarty_modifier_escape($_smarty_tpl->tpl_vars['pluginArgsJSON']->value);?>
">
				<input type="submit" class="btn btn-primary" value="Сохранить">
			</div>

			<?php if ($_smarty_tpl->tpl_vars['type']->value=='module') {?>
				<?php $_smarty_tpl->smarty->_tag_stack[] = array('jq', array()); $_block_repeat=true; echo smarty_block_jq(array(), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>

					$("#param_module_input").change(function () {
						$(this).parents(".modal-content").load(
							$.service("plugin", "edit", {
								area_id: "<?php echo $_smarty_tpl->tpl_vars['area_id']->value;?>
",
								type: "<?php echo $_smarty_tpl->tpl_vars['type']->value;?>
",
								index: <?php echo $_smarty_tpl->tpl_vars['index']->value;?>
,
								page: "<?php echo smarty_modifier_escape($_smarty_tpl->tpl_vars['pageName']->value,'javascript');?>
",
								pluginArgs: <?php echo $_smarty_tpl->tpl_vars['pluginArgsJSON']->value;?>
,
								bodyContent: "<?php echo smarty_modifier_escape($_smarty_tpl->tpl_vars['bodyContent']->value,'javascript');?>
",
								edit_icon: "<?php echo $_smarty_tpl->tpl_vars['edit_icon']->value;?>
",
								selectedMod: $(this).val(),
								modal: 1
							}),
							function () {
								$(this).tikiModal();
								if (jqueryTiki.chosen) {
									$(this).applyChosen();
								}
							}
						).tikiModal(tr("Loading..."));
					});
				<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_jq(array(), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_tag_stack);?>

			<?php }?>

		</form>
	</div>

	<?php if ($_smarty_tpl->tpl_vars['headerlib']->value) {?>
		<?php echo $_smarty_tpl->tpl_vars['headerlib']->value->output_js_config();?>

		<?php echo $_smarty_tpl->tpl_vars['headerlib']->value->output_js_files();?>

		<?php echo $_smarty_tpl->tpl_vars['headerlib']->value->output_js();?>

	<?php }?>
	<?php if ($_smarty_tpl->tpl_vars['prefs']->value['feature_debug_console']=='y'&&!empty($_REQUEST['show_smarty_debug'])) {?>
		<?php $_smarty_tpl->smarty->loadPlugin('Smarty_Internal_Debug'); Smarty_Internal_Debug::display_debug($_smarty_tpl); ?>
	<?php }?>
</div>
<div class="modal-footer">
	
		<button type="button" class="btn btn-default btn-dismiss" data-dismiss="modal">Закрыть</button>
		<?php if ($_smarty_tpl->tpl_vars['confirm']->value) {?>
			<button type='submit' form="confirm-action" class="btn <?php if (!empty($_smarty_tpl->tpl_vars['confirmButtonClass']->value)) {
echo $_smarty_tpl->tpl_vars['confirmButtonClass']->value;
} else { ?>btn-primary<?php }?> confirm-action-btn">
				<?php if (!empty($_smarty_tpl->tpl_vars['confirmButton']->value)) {?>
					<?php echo $_smarty_tpl->tpl_vars['confirmButton']->value;?>

				<?php } else { ?>
					ОК
				<?php }?>
			</button>
		<?php }?>
	
</div>
<?php }} ?>
<?php /* Smarty version Smarty-3.1.21, created on 2017-09-20 22:05:06
         compiled from "/var/www/html/Zwiki/templates/access/include_ticket.tpl" */ ?>
<?php if ($_valid && !is_callable('content_59c2e6123333b3_59628410')) {function content_59c2e6123333b3_59628410($_smarty_tpl) {?><input type="hidden" name="ticket" value="<?php echo smarty_modifier_escape($_smarty_tpl->tpl_vars['ticket']->value);?>
">
<input type="hidden" name="daconfirm" value="y"><?php }} ?>
