<?php /* Smarty version Smarty-3.1.21, created on 2017-09-20 15:02:34
         compiled from "/var/www/html/Zwiki/templates/prefs/list.tpl" */ ?>
<?php /*%%SmartyHeaderCode:54512574659c2830a415055-71297749%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '2727b68edff5c8db758fd253b297bfaf09084d91' => 
    array (
      0 => '/var/www/html/Zwiki/templates/prefs/list.tpl',
      1 => 1491114472,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '54512574659c2830a415055-71297749',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'p' => 0,
    'mode' => 0,
    'value' => 0,
    'label' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.21',
  'unifunc' => 'content_59c2830a4267e5_10159070',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_59c2830a4267e5_10159070')) {function content_59c2830a4267e5_10159070($_smarty_tpl) {?><?php if (!is_callable('smarty_modifier_breakline')) include '/var/www/html/Zwiki/lib/smarty_tiki/modifier.breakline.php';
if (!is_callable('smarty_modifier_simplewiki')) include '/var/www/html/Zwiki/lib/smarty_tiki/modifier.simplewiki.php';
?>
<div class="adminoptionbox preference form-group clearfix <?php echo smarty_modifier_escape($_smarty_tpl->tpl_vars['p']->value['tagstring']);
if (isset($_REQUEST['highlight'])&&$_REQUEST['highlight']==$_smarty_tpl->tpl_vars['p']->value['preference']) {?> highlight<?php }?>" style="text-align: left;">
	<label class="col-sm-4 control-label" for="<?php echo smarty_modifier_escape($_smarty_tpl->tpl_vars['p']->value['id']);?>
"><?php echo smarty_modifier_breakline(smarty_modifier_escape($_smarty_tpl->tpl_vars['p']->value['name']));?>
</label>
	<div class="col-sm-8">
		<?php if (!empty($_smarty_tpl->tpl_vars['p']->value['units'])) {?>
			<div class="input-group">
		<?php }?>
		<select
			class="form-control"
			name="<?php echo smarty_modifier_escape($_smarty_tpl->tpl_vars['p']->value['preference']);?>
"
			id="<?php echo smarty_modifier_escape($_smarty_tpl->tpl_vars['p']->value['id']);?>
"
			data-tiki-admin-child-block=".<?php echo smarty_modifier_escape($_smarty_tpl->tpl_vars['p']->value['preference']);?>
_childcontainer"
			data-tiki-admin-child-mode="<?php echo smarty_modifier_escape($_smarty_tpl->tpl_vars['mode']->value);?>
"
		>
			<?php  $_smarty_tpl->tpl_vars['label'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['label']->_loop = false;
 $_smarty_tpl->tpl_vars['value'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['p']->value['options']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['label']->key => $_smarty_tpl->tpl_vars['label']->value) {
$_smarty_tpl->tpl_vars['label']->_loop = true;
 $_smarty_tpl->tpl_vars['value']->value = $_smarty_tpl->tpl_vars['label']->key;
?>
				<option value="<?php echo smarty_modifier_escape($_smarty_tpl->tpl_vars['value']->value);?>
"<?php if ($_smarty_tpl->tpl_vars['value']->value==$_smarty_tpl->tpl_vars['p']->value['value']) {?> selected="selected"<?php }?> <?php echo $_smarty_tpl->tpl_vars['p']->value['params'];?>
>
					<?php echo smarty_modifier_escape($_smarty_tpl->tpl_vars['label']->value);?>

				</option>
			<?php } ?>
		</select>
		<?php if (!empty($_smarty_tpl->tpl_vars['p']->value['units'])) {?>
			<span class="input-group-addon"><?php echo $_smarty_tpl->tpl_vars['p']->value['units'];?>
</span></div>
		<?php }?>
		<?php echo $_smarty_tpl->getSubTemplate ("prefs/shared-flags.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

		<?php if ($_smarty_tpl->tpl_vars['p']->value['shorthint']) {?>
			<div class="help-block"><?php echo smarty_modifier_simplewiki($_smarty_tpl->tpl_vars['p']->value['shorthint']);?>
</div>
		<?php }?>
		<?php if ($_smarty_tpl->tpl_vars['p']->value['detail']) {?>
			<div class="help-block"><?php echo smarty_modifier_simplewiki($_smarty_tpl->tpl_vars['p']->value['detail']);?>
</div>
		<?php }?>
		<?php if ($_smarty_tpl->tpl_vars['p']->value['hint']) {?>
			<div class="help-block"><?php echo smarty_modifier_simplewiki($_smarty_tpl->tpl_vars['p']->value['hint']);?>
</div>
		<?php }?>
		<?php echo $_smarty_tpl->getSubTemplate ("prefs/shared-dependencies.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

	</div>
</div>
<?php }} ?>
