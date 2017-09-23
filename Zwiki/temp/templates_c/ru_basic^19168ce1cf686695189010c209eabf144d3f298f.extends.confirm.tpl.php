<?php /* Smarty version Smarty-3.1.21, created on 2017-09-23 15:42:28
         compiled from "/var/www/html/Zwiki/templates/access/confirm.tpl" */ ?>
<?php /*%%SmartyHeaderCode:63575538559c680e4ecae01-58902950%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'dd7256ba3264a8aafbdfcad2cd66786835c53a11' => 
    array (
      0 => '/var/www/html/Zwiki/templates/access/confirm.tpl',
      1 => 1466387836,
      2 => 'file',
    ),
    '4f7286c7acb1a08a16b8019b46726b2972801b3c' => 
    array (
      0 => '/var/www/html/Zwiki/templates/layouts/internal/modal.tpl',
      1 => 1495975029,
      2 => 'file',
    ),
    'f4843652fa42176bb46c9a81493faf7a60a89c1f' => 
    array (
      0 => '/var/www/html/Zwiki/templates/access/include_items.tpl',
      1 => 1432586982,
      2 => 'file',
    ),
    '7c242130fa2238e170835c1c5075cc89bdf30f94' => 
    array (
      0 => '/var/www/html/Zwiki/templates/access/include_hidden.tpl',
      1 => 1432586982,
      2 => 'file',
    ),
    '907ba05f0aceb15ab22c22d7334cd6b4394fd238' => 
    array (
      0 => '/var/www/html/Zwiki/templates/access/include_footer.tpl',
      1 => 1466379260,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '63575538559c680e4ecae01-58902950',
  'function' => 
  array (
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
  'unifunc' => 'content_59c680e4f01947_94065377',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_59c680e4f01947_94065377')) {function content_59c680e4f01947_94065377($_smarty_tpl) {?><?php if (!is_callable('smarty_function_service')) include '/var/www/html/Zwiki/lib/smarty_tiki/function.service.php';
?><!DOCTYPE html>
<?php if (isset($_smarty_tpl->tpl_vars['confirm']->value)&&$_smarty_tpl->tpl_vars['confirm']->value==='y') {?>
	<?php $_smarty_tpl->tpl_vars['confirm'] = new Smarty_variable(true, null, 0);?>
<?php } else { ?>
	<?php $_smarty_tpl->tpl_vars['confirm'] = new Smarty_variable(false, null, 0);?>
<?php }?>
<div class="modal-header">
	<button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
	<h4 class="modal-title" id="myModalLabel"><?php echo smarty_modifier_escape($_smarty_tpl->tpl_vars['title']->value);?>
</h4>
</div>
<div class="modal-body">
	
	<form id="confirm-action" class='confirm-action' action="<?php echo smarty_function_service(array('controller'=>((string)$_smarty_tpl->tpl_vars['confirmController']->value),'action'=>((string)$_smarty_tpl->tpl_vars['confirmAction']->value)),$_smarty_tpl);?>
" method="post">
		<?php /*  Call merged included template "access/include_items.tpl" */
$_tpl_stack[] = $_smarty_tpl;
 $_smarty_tpl = $_smarty_tpl->setupInlineSubTemplate('access/include_items.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0, '63575538559c680e4ecae01-58902950');
content_59c680e4edde92_32467818($_smarty_tpl);
$_smarty_tpl = array_pop($_tpl_stack); 
/*  End of included template "access/include_items.tpl" */?>
		<?php /*  Call merged included template "access/include_hidden.tpl" */
$_tpl_stack[] = $_smarty_tpl;
 $_smarty_tpl = $_smarty_tpl->setupInlineSubTemplate('access/include_hidden.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0, '63575538559c680e4ecae01-58902950');
content_59c680e4ee8a31_02685540($_smarty_tpl);
$_smarty_tpl = array_pop($_tpl_stack); 
/*  End of included template "access/include_hidden.tpl" */?>
	</form>
	<?php if (!empty($_smarty_tpl->tpl_vars['help']->value)) {?>
		<span class="help-block">
			<?php echo smarty_modifier_escape($_smarty_tpl->tpl_vars['help']->value);?>

		</span>
	<?php }?>
	<?php /*  Call merged included template "access/include_footer.tpl" */
$_tpl_stack[] = $_smarty_tpl;
 $_smarty_tpl = $_smarty_tpl->setupInlineSubTemplate('access/include_footer.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0, '63575538559c680e4ecae01-58902950');
content_59c680e4ef27f0_54017728($_smarty_tpl);
$_smarty_tpl = array_pop($_tpl_stack); 
/*  End of included template "access/include_footer.tpl" */?>

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
<?php /* Smarty version Smarty-3.1.21, created on 2017-09-23 15:42:28
         compiled from "/var/www/html/Zwiki/templates/access/include_items.tpl" */ ?>
<?php if ($_valid && !is_callable('content_59c680e4edde92_32467818')) {function content_59c680e4edde92_32467818($_smarty_tpl) {?><div class="form-group">
	<h5><?php echo $_smarty_tpl->tpl_vars['customMsg']->value;?>
</h5>
	<?php if (isset($_smarty_tpl->tpl_vars['items']->value)&&count($_smarty_tpl->tpl_vars['items']->value)>0) {?>
		<?php if (count($_smarty_tpl->tpl_vars['items']->value)<16) {?>
			<ul>
				<?php  $_smarty_tpl->tpl_vars['name'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['name']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['items']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
 $_smarty_tpl->tpl_vars['name']->total= $_smarty_tpl->_count($_from);
 $_smarty_tpl->tpl_vars['name']->iteration=0;
foreach ($_from as $_smarty_tpl->tpl_vars['name']->key => $_smarty_tpl->tpl_vars['name']->value) {
$_smarty_tpl->tpl_vars['name']->_loop = true;
 $_smarty_tpl->tpl_vars['name']->iteration++;
 $_smarty_tpl->tpl_vars['name']->last = $_smarty_tpl->tpl_vars['name']->iteration === $_smarty_tpl->tpl_vars['name']->total;
?>
					<li>
						<?php echo smarty_modifier_escape($_smarty_tpl->tpl_vars['name']->value);?>

					</li>
				<?php } ?>
			</ul>
		<?php } else { ?>
			<?php  $_smarty_tpl->tpl_vars['name'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['name']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['items']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
 $_smarty_tpl->tpl_vars['name']->total= $_smarty_tpl->_count($_from);
 $_smarty_tpl->tpl_vars['name']->iteration=0;
foreach ($_from as $_smarty_tpl->tpl_vars['name']->key => $_smarty_tpl->tpl_vars['name']->value) {
$_smarty_tpl->tpl_vars['name']->_loop = true;
 $_smarty_tpl->tpl_vars['name']->iteration++;
 $_smarty_tpl->tpl_vars['name']->last = $_smarty_tpl->tpl_vars['name']->iteration === $_smarty_tpl->tpl_vars['name']->total;
?>
				<?php echo smarty_modifier_escape($_smarty_tpl->tpl_vars['name']->value);
if (!$_smarty_tpl->tpl_vars['name']->last) {?>, <?php }?>
			<?php } ?>
		<?php }?>
	<?php }?>
</div>
<?php }} ?>
<?php /* Smarty version Smarty-3.1.21, created on 2017-09-23 15:42:28
         compiled from "/var/www/html/Zwiki/templates/access/include_hidden.tpl" */ ?>
<?php if ($_valid && !is_callable('content_59c680e4ee8a31_02685540')) {function content_59c680e4ee8a31_02685540($_smarty_tpl) {?><?php if (isset($_smarty_tpl->tpl_vars['items']->value)) {?>
	<?php $_smarty_tpl->tpl_vars['encodedItems'] = new Smarty_variable(json_encode($_smarty_tpl->tpl_vars['items']->value), null, 0);?>
	<input type='hidden' name='items' value="<?php echo smarty_modifier_escape($_smarty_tpl->tpl_vars['encodedItems']->value);?>
">
<?php }?>
<?php if (isset($_smarty_tpl->tpl_vars['extra']->value)) {?>
	<?php $_smarty_tpl->tpl_vars['encodedExtra'] = new Smarty_variable(json_encode($_smarty_tpl->tpl_vars['extra']->value), null, 0);?>
	<input type='hidden' name='extra' value="<?php echo smarty_modifier_escape($_smarty_tpl->tpl_vars['encodedExtra']->value);?>
">
<?php }?>
<?php if (isset($_smarty_tpl->tpl_vars['toList']->value)) {?>
	<?php $_smarty_tpl->tpl_vars['encodedToList'] = new Smarty_variable(json_encode($_smarty_tpl->tpl_vars['toList']->value), null, 0);?>
	<input type='hidden' name='toList' value="<?php echo smarty_modifier_escape($_smarty_tpl->tpl_vars['encodedToList']->value);?>
">
<?php }?>
<input type='hidden' name='ticket' value="<?php echo $_smarty_tpl->tpl_vars['ticket']->value;?>
">
<input type="hidden" name="daconfirm" value="y"><?php }} ?>
<?php /* Smarty version Smarty-3.1.21, created on 2017-09-23 15:42:28
         compiled from "/var/www/html/Zwiki/templates/access/include_footer.tpl" */ ?>
<?php if ($_valid && !is_callable('content_59c680e4ef27f0_54017728')) {function content_59c680e4ef27f0_54017728($_smarty_tpl) {?><?php if ($_smarty_tpl->tpl_vars['prefs']->value['javascript_enabled']!=='y') {?>
	<div class="modal-footer">
		<a class="btn btn-default" href="<?php echo $_smarty_tpl->tpl_vars['extra']->value['referer'];?>
">
			Назад
		</a>
		<button type='submit' form="confirm-action" class="btn <?php if (!empty($_smarty_tpl->tpl_vars['confirmButtonClass']->value)) {
echo $_smarty_tpl->tpl_vars['confirmButtonClass']->value;
} else { ?>btn-primary<?php }?>">
			<?php if (!empty($_smarty_tpl->tpl_vars['confirmButton']->value)) {?>
				<?php echo $_smarty_tpl->tpl_vars['confirmButton']->value;?>

			<?php } else { ?>
				ОК
			<?php }?>
		</button>
	</div>
<?php }?>

<?php }} ?>
