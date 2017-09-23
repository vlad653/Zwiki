<?php /* Smarty version Smarty-3.1.21, created on 2017-09-20 15:02:34
         compiled from "/var/www/html/Zwiki/templates/prefs/flag.tpl" */ ?>
<?php /*%%SmartyHeaderCode:140377421259c2830a454736-83289977%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'dff378332ba3b4b296fb8aab7c407b7d7bc869da' => 
    array (
      0 => '/var/www/html/Zwiki/templates/prefs/flag.tpl',
      1 => 1489358353,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '140377421259c2830a454736-83289977',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'p' => 0,
    'mode' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.21',
  'unifunc' => 'content_59c2830a45e6b6_40763519',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_59c2830a45e6b6_40763519')) {function content_59c2830a45e6b6_40763519($_smarty_tpl) {?><?php if (!is_callable('smarty_modifier_simplewiki')) include '/var/www/html/Zwiki/lib/smarty_tiki/modifier.simplewiki.php';
?><div class="adminoptionbox preference clearfix <?php echo smarty_modifier_escape($_smarty_tpl->tpl_vars['p']->value['tagstring']);
if (isset($_REQUEST['highlight'])&&$_REQUEST['highlight']==$_smarty_tpl->tpl_vars['p']->value['preference']) {?> highlight<?php }?>">
	<div class="adminoption form-group">
		<label class="col-sm-4 control-label">
			<?php echo smarty_modifier_escape($_smarty_tpl->tpl_vars['p']->value['name']);?>

		</label>
		<div class="col-sm-8">
			<input id="<?php echo smarty_modifier_escape($_smarty_tpl->tpl_vars['p']->value['id']);?>
" type="checkbox" name="<?php echo smarty_modifier_escape($_smarty_tpl->tpl_vars['p']->value['preference']);?>
" <?php if ($_smarty_tpl->tpl_vars['p']->value['value']=='y') {?>checked="checked" <?php }?>
				<?php if (!$_smarty_tpl->tpl_vars['p']->value['available']) {?>disabled="disabled"<?php }?> <?php echo $_smarty_tpl->tpl_vars['p']->value['params'];?>

				data-tiki-admin-child-block="#<?php echo smarty_modifier_escape($_smarty_tpl->tpl_vars['p']->value['preference']);?>
_childcontainer"
				data-tiki-admin-child-mode="<?php echo smarty_modifier_escape($_smarty_tpl->tpl_vars['mode']->value);?>
"
			>
			<?php echo $_smarty_tpl->getSubTemplate ("prefs/shared-flags.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

			<?php if ($_smarty_tpl->tpl_vars['p']->value['hint']) {?>
				<div class="help-block"><?php echo smarty_modifier_simplewiki($_smarty_tpl->tpl_vars['p']->value['hint']);?>
</div>
			<?php }?>
			<?php echo $_smarty_tpl->getSubTemplate ("prefs/shared-dependencies.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

		</div>
	</div>
</div>
<?php }} ?>
