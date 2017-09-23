<?php /* Smarty version Smarty-3.1.21, created on 2017-09-23 11:41:11
         compiled from "/var/www/html/Zwiki/templates/confirm.tpl" */ ?>
<?php /*%%SmartyHeaderCode:10612098059c64857ab44b7-31684942%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'a002cdff2e5c7f7d293194e42f714d3c314ee7db' => 
    array (
      0 => '/var/www/html/Zwiki/templates/confirm.tpl',
      1 => 1427046842,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '10612098059c64857ab44b7-31684942',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'confirmation_text' => 0,
    'confirm_detail' => 0,
    'confirmaction' => 0,
    'ticket' => 0,
    'prefs' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.21',
  'unifunc' => 'content_59c64857ac0d12_59060737',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_59c64857ac0d12_59060737')) {function content_59c64857ac0d12_59060737($_smarty_tpl) {?><?php if (!is_callable('smarty_function_icon')) include '/var/www/html/Zwiki/lib/smarty_tiki/function.icon.php';
if (!is_callable('smarty_function_query')) include '/var/www/html/Zwiki/lib/smarty_tiki/function.query.php';
if (!is_callable('smarty_function_button')) include '/var/www/html/Zwiki/lib/smarty_tiki/function.button.php';
?>
<div class="panel panel-default">
	<?php if (!empty($_smarty_tpl->tpl_vars['confirmation_text']->value)) {?>
		<div class="panel-heading">
			<?php echo smarty_function_icon(array('name'=>'information','style'=>"vertical-align:middle"),$_smarty_tpl);?>
 <?php echo smarty_modifier_escape($_smarty_tpl->tpl_vars['confirmation_text']->value);?>

		</div>
	<?php }?>
	<?php if (!empty($_smarty_tpl->tpl_vars['confirm_detail']->value)) {?>
		<?php echo $_smarty_tpl->tpl_vars['confirm_detail']->value;?>

	<?php }?>
	<div class="panel-body">
		<form id='confirm' action="<?php echo smarty_modifier_escape($_smarty_tpl->tpl_vars['confirmaction']->value);?>
" method="post">
			<div>
				<?php echo smarty_function_query(array('_type'=>'form_input','_keepall'=>'y','ticket'=>$_smarty_tpl->tpl_vars['ticket']->value,'daconfirm'=>'y'),$_smarty_tpl);?>

				<?php echo smarty_function_button(array('href'=>"#",'_onclick'=>"javascript:document.forms['confirm'].submit();return false;",'_text'=>"Нажмите сюда, чтобы подтвердить ваши действия",'_ajax'=>"n"),$_smarty_tpl);?>

				<?php echo smarty_function_button(array('href'=>"#",'_onclick'=>"javascript:history.back(); return false;",'_text'=>"Назад",'_ajax'=>"n"),$_smarty_tpl);?>

				<?php echo smarty_function_button(array('href'=>$_smarty_tpl->tpl_vars['prefs']->value['tikiIndex'],'_text'=>"Вернуться на главную"),$_smarty_tpl);?>

			</div>
		</form>
	</div>
</div>
<?php }} ?>
