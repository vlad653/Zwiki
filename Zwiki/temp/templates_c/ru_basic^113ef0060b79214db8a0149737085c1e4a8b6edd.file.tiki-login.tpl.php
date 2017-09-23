<?php /* Smarty version Smarty-3.1.21, created on 2017-09-23 15:35:37
         compiled from "/var/www/html/Zwiki/templates/tiki-login.tpl" */ ?>
<?php /*%%SmartyHeaderCode:189441476959c67f49ac2fa3-93281532%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '113ef0060b79214db8a0149737085c1e4a8b6edd' => 
    array (
      0 => '/var/www/html/Zwiki/templates/tiki-login.tpl',
      1 => 1456600412,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '189441476959c67f49ac2fa3-93281532',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.21',
  'unifunc' => 'content_59c67f49acb2b4_29999168',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_59c67f49acb2b4_29999168')) {function content_59c67f49acb2b4_29999168($_smarty_tpl) {?><?php if (!is_callable('smarty_function_module')) include '/var/www/html/Zwiki/lib/smarty_tiki/function.module.php';
?>
<div class="row">
	<div class="col-sm-6 col-sm-offset-3">
		<?php echo smarty_function_module(array('module'=>'login_box','mode'=>"module",'show_register'=>"y",'show_forgot'=>"y",'error'=>'','flip'=>'','decorations'=>'','nobox'=>'','notitle'=>''),$_smarty_tpl);?>

	</div>
</div>
<?php }} ?>
