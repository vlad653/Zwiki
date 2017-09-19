<?php /* Smarty version Smarty-3.1.21, created on 2017-09-19 15:59:22
         compiled from "/var/www/html/Zwiki/templates/password_help.tpl" */ ?>
<?php /*%%SmartyHeaderCode:35879823959c13eda6d0363-51750337%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '5f88f439a87baee1a91846ac9919d282c89b9ade' => 
    array (
      0 => '/var/www/html/Zwiki/templates/password_help.tpl',
      1 => 1494500237,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '35879823959c13eda6d0363-51750337',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'prefs' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.21',
  'unifunc' => 'content_59c13eda6dba50_12565045',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_59c13eda6dba50_12565045')) {function content_59c13eda6dba50_12565045($_smarty_tpl) {?><?php if (!is_callable('smarty_block_tr')) include '/var/www/html/Zwiki/lib/smarty_tiki/block.tr.php';
?>
<?php if ($_smarty_tpl->tpl_vars['prefs']->value['feature_jquery_validation']=='n') {?>
	<?php if ($_smarty_tpl->tpl_vars['prefs']->value['min_pass_length']>1) {?>
		<div class="highlight"><em><?php $_smarty_tpl->smarty->_tag_stack[] = array('tr', array('_0'=>$_smarty_tpl->tpl_vars['prefs']->value['min_pass_length'])); $_block_repeat=true; echo smarty_block_tr(array('_0'=>$_smarty_tpl->tpl_vars['prefs']->value['min_pass_length']), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
Minimum %0 characters long<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_tr(array('_0'=>$_smarty_tpl->tpl_vars['prefs']->value['min_pass_length']), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_tag_stack);?>
</em></div>
	<?php }?>
	<?php if ($_smarty_tpl->tpl_vars['prefs']->value['pass_chr_num']=='y') {?>
		<div class="highlight"><em>Пароль должен содержать буквы и цифры</em></div>
	<?php }?>
	<?php if ($_smarty_tpl->tpl_vars['prefs']->value['pass_chr_case']=='y') {?>
		<div class="highlight"><em>Password must contain at least one lowercase alphabetical character like “a” and one uppercase character like “A”.</em></div>
	<?php }?>
	<?php if ($_smarty_tpl->tpl_vars['prefs']->value['pass_chr_special']=='y') {?>
		<div class="highlight"><em>Password must contain at least one special character like ” / $ % ? & * ( ) _ + ...</em></div>
	<?php }?>
	<?php if ($_smarty_tpl->tpl_vars['prefs']->value['pass_blacklist']=='y') {?>
		<div class="highlight"><em>Password is too common.</em></div>
	<?php }?>
	<?php if (!empty($_smarty_tpl->tpl_vars['prefs']->value['pass_chr_repetition'])&&$_smarty_tpl->tpl_vars['prefs']->value['pass_chr_repetition']=='y') {?>
		<div class="highlight"><em>Password must not contain a consecutive repetition of the same character such as “111” or “aab”</em></div>
	<?php }?>
<?php }?>
<?php }} ?>
