<?php /* Smarty version Smarty-3.1.21, created on 2017-09-20 15:05:35
         compiled from "/var/www/html/Zwiki/templates/object_selector_multi.tpl" */ ?>
<?php /*%%SmartyHeaderCode:186355042059c283bf1dc4c3-55238988%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '0d192f766b7b9d4ee00d8bf8c6540adfe0236790' => 
    array (
      0 => '/var/www/html/Zwiki/templates/object_selector_multi.tpl',
      1 => 1464202444,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '186355042059c283bf1dc4c3-55238988',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'object_selector_multi' => 0,
    'prefs' => 0,
    'object' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.21',
  'unifunc' => 'content_59c283bf1f8831_87385126',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_59c283bf1f8831_87385126')) {function content_59c283bf1f8831_87385126($_smarty_tpl) {?><?php if (!is_callable('smarty_function_icon')) include '/var/www/html/Zwiki/lib/smarty_tiki/function.icon.php';
if (!is_callable('smarty_block_jq')) include '/var/www/html/Zwiki/lib/smarty_tiki/block.jq.php';
?><div class="object-selector-multi">
<?php if ($_smarty_tpl->tpl_vars['object_selector_multi']->value['separator']) {?>
	<input
		data-separator="<?php echo smarty_modifier_escape($_smarty_tpl->tpl_vars['object_selector_multi']->value['separator']);?>
"
		type="text"
		id="<?php echo smarty_modifier_escape($_smarty_tpl->tpl_vars['object_selector_multi']->value['simpleid']);?>
"
		<?php if ($_smarty_tpl->tpl_vars['object_selector_multi']->value['simpleclass']) {?>class="<?php echo smarty_modifier_escape($_smarty_tpl->tpl_vars['object_selector_multi']->value['simpleclass']);?>
"<?php }?>
		<?php if ($_smarty_tpl->tpl_vars['object_selector_multi']->value['simplename']) {?>name="<?php echo smarty_modifier_escape($_smarty_tpl->tpl_vars['object_selector_multi']->value['simplename']);?>
"<?php }?>
		value="<?php echo smarty_modifier_escape(implode($_smarty_tpl->tpl_vars['object_selector_multi']->value['separator'],$_smarty_tpl->tpl_vars['object_selector_multi']->value['current_selection_simple']));?>
"
	>
<?php }?>
<textarea
	id="<?php echo smarty_modifier_escape($_smarty_tpl->tpl_vars['object_selector_multi']->value['id']);?>
"
	<?php if ($_smarty_tpl->tpl_vars['object_selector_multi']->value['name']) {?>name="<?php echo smarty_modifier_escape($_smarty_tpl->tpl_vars['object_selector_multi']->value['name']);?>
"<?php }?>
	<?php if ($_smarty_tpl->tpl_vars['object_selector_multi']->value['class']) {?>class="<?php echo smarty_modifier_escape($_smarty_tpl->tpl_vars['object_selector_multi']->value['class']);?>
"<?php }?>
	<?php if ($_smarty_tpl->tpl_vars['object_selector_multi']->value['title']) {?>data-label="<?php echo smarty_modifier_escape($_smarty_tpl->tpl_vars['object_selector_multi']->value['title']);?>
"<?php }?>
	<?php if ($_smarty_tpl->tpl_vars['object_selector_multi']->value['parent']) {?>data-parent="<?php echo smarty_modifier_escape($_smarty_tpl->tpl_vars['object_selector_multi']->value['parent']);?>
"<?php }?>
	<?php if ($_smarty_tpl->tpl_vars['object_selector_multi']->value['parentkey']) {?>data-parentkey="<?php echo smarty_modifier_escape($_smarty_tpl->tpl_vars['object_selector_multi']->value['parentkey']);?>
"<?php }?>
	<?php if ($_smarty_tpl->tpl_vars['object_selector_multi']->value['format']) {?>data-format="<?php echo smarty_modifier_escape($_smarty_tpl->tpl_vars['object_selector_multi']->value['format']);?>
"<?php }?>
	<?php if ($_smarty_tpl->tpl_vars['object_selector_multi']->value['sort']) {?>data-sort="<?php echo smarty_modifier_escape($_smarty_tpl->tpl_vars['object_selector_multi']->value['sort']);?>
"<?php }?>
	data-filters="<?php echo smarty_modifier_escape($_smarty_tpl->tpl_vars['object_selector_multi']->value['filter']);?>
"
	data-threshold="<?php echo smarty_modifier_escape((($tmp = @$_smarty_tpl->tpl_vars['object_selector_multi']->value['threshold'])===null||$tmp==='' ? $_smarty_tpl->tpl_vars['prefs']->value['tiki_object_selector_threshold'] : $tmp));?>
"
><?php echo implode("\n",$_smarty_tpl->tpl_vars['object_selector_multi']->value['current_selection']);?>
</textarea>
	<div class="basic-selector hidden">
		<select class="form-control" multiple>
			<?php  $_smarty_tpl->tpl_vars['object'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['object']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['object_selector_multi']->value['current_selection']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['object']->key => $_smarty_tpl->tpl_vars['object']->value) {
$_smarty_tpl->tpl_vars['object']->_loop = true;
?>
				<option value="<?php echo smarty_modifier_escape($_smarty_tpl->tpl_vars['object']->value);?>
" selected="selected"><?php echo smarty_modifier_escape($_smarty_tpl->tpl_vars['object']->value['title']);?>
</option>
			<?php } ?>
		</select>
	</div>

	<div class="panel panel-default hidden">
		<div class="panel-heading">
			<div class="input-group">
				<span class="input-group-addon">
					<?php echo smarty_function_icon(array('name'=>'search'),$_smarty_tpl);?>

				</span>
				<input type="text" placeholder="<?php echo smarty_modifier_escape($_smarty_tpl->tpl_vars['object_selector_multi']->value['placeholder']);?>
..." value="" class="filter form-control" autocomplete="off">
				<div class="input-group-btn">
					<button class="btn btn-default search">Найти</button>
				</div>
			</div>
		</div>
		<div class="panel-body">
			<p class="too-many">Search and select what you are looking for from the options that appear..</p>
			<div class="results">
				<?php  $_smarty_tpl->tpl_vars['object'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['object']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['object_selector_multi']->value['current_selection']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['object']->key => $_smarty_tpl->tpl_vars['object']->value) {
$_smarty_tpl->tpl_vars['object']->_loop = true;
?>
					<div class="checkbox">
						<label>
							<input type="checkbox" value="<?php echo smarty_modifier_escape($_smarty_tpl->tpl_vars['object']->value);?>
" checked>
							<?php echo smarty_modifier_escape($_smarty_tpl->tpl_vars['object']->value['title']);?>

						</label>
					</div>
				<?php } ?>
			</div>
			<p class="no-results hidden">
				No matching results.
			</p>
		</div>
	</div>
</div>

<?php $_smarty_tpl->smarty->_tag_stack[] = array('jq', array()); $_block_repeat=true; echo smarty_block_jq(array(), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>

$('#<?php echo smarty_modifier_escape($_smarty_tpl->tpl_vars['object_selector_multi']->value['id']);?>
')
	.object_selector_multi();
<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_jq(array(), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_tag_stack);?>

<?php }} ?>
