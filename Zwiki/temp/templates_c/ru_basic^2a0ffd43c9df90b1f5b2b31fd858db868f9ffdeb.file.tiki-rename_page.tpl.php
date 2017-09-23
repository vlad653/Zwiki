<?php /* Smarty version Smarty-3.1.21, created on 2017-09-20 21:57:45
         compiled from "/var/www/html/Zwiki/templates/tiki-rename_page.tpl" */ ?>
<?php /*%%SmartyHeaderCode:207332678959c2e459934db6-20410887%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '2a0ffd43c9df90b1f5b2b31fd858db868f9ffdeb' => 
    array (
      0 => '/var/www/html/Zwiki/templates/tiki-rename_page.tpl',
      1 => 1417840096,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '207332678959c2e459934db6-20410887',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'page' => 0,
    'page_badchars_display' => 0,
    'prefs' => 0,
    'newname' => 0,
    'msg' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.21',
  'unifunc' => 'content_59c2e459944da3_12213263',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_59c2e459944da3_12213263')) {function content_59c2e459944da3_12213263($_smarty_tpl) {?><?php if (!is_callable('smarty_block_title')) include '/var/www/html/Zwiki/lib/smarty_tiki/block.title.php';
if (!is_callable('smarty_function_button')) include '/var/www/html/Zwiki/lib/smarty_tiki/function.button.php';
if (!is_callable('smarty_block_remarksbox')) include '/var/www/html/Zwiki/lib/smarty_tiki/block.remarksbox.php';
if (!is_callable('smarty_block_tr')) include '/var/www/html/Zwiki/lib/smarty_tiki/block.tr.php';
?><?php $_smarty_tpl->smarty->_tag_stack[] = array('title', array()); $_block_repeat=true; echo smarty_block_title(array(), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
Переименовать страницу: <?php echo $_smarty_tpl->tpl_vars['page']->value;
$_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_title(array(), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_tag_stack);?>


<div class="navbar" role="navigation">
	<?php $_smarty_tpl->tpl_vars['thispage'] = new Smarty_variable(smarty_modifier_escape($_smarty_tpl->tpl_vars['page']->value,'url'), null, 0);?>
	<?php echo smarty_function_button(array('href'=>"tiki-index.php?page=".((string)$_smarty_tpl->tpl_vars['thispage']->value),'class'=>"btn btn-default btn-sm navbar-btn",'_text'=>"Просмотр страницы"),$_smarty_tpl);?>

</div>

<form action="tiki-rename_page.php" method="post" class="form-horizontal" role="form">
	<input type="hidden" name="page" value="<?php echo smarty_modifier_escape($_smarty_tpl->tpl_vars['page']->value);?>
">
	<?php if (isset($_smarty_tpl->tpl_vars['page_badchars_display']->value)) {?>
		<?php if ($_smarty_tpl->tpl_vars['prefs']->value['wiki_badchar_prevent']=='y') {?>
			<?php $_smarty_tpl->smarty->_tag_stack[] = array('remarksbox', array('type'=>'errors','title'=>"Ошибка")); $_block_repeat=true; echo smarty_block_remarksbox(array('type'=>'errors','title'=>"Ошибка"), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>

				<?php $_smarty_tpl->smarty->_tag_stack[] = array('tr', array('_0'=>smarty_modifier_escape($_smarty_tpl->tpl_vars['page_badchars_display']->value))); $_block_repeat=true; echo smarty_block_tr(array('_0'=>smarty_modifier_escape($_smarty_tpl->tpl_vars['page_badchars_display']->value)), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
The page name specified contains unallowed characters. It will not be possible to save the page until those are removed: <strong>%0</strong><?php $_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_tr(array('_0'=>smarty_modifier_escape($_smarty_tpl->tpl_vars['page_badchars_display']->value)), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_tag_stack);?>

			<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_remarksbox(array('type'=>'errors','title'=>"Ошибка"), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_tag_stack);?>

		<?php } else { ?>
			<?php $_smarty_tpl->smarty->_tag_stack[] = array('remarksbox', array('type'=>'tip','title'=>"Подсказка")); $_block_repeat=true; echo smarty_block_remarksbox(array('type'=>'tip','title'=>"Подсказка"), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>

				<?php $_smarty_tpl->smarty->_tag_stack[] = array('tr', array('_0'=>smarty_modifier_escape($_smarty_tpl->tpl_vars['page_badchars_display']->value))); $_block_repeat=true; echo smarty_block_tr(array('_0'=>smarty_modifier_escape($_smarty_tpl->tpl_vars['page_badchars_display']->value)), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
The page name specified contains characters that may render the page hard to access. You may want to consider removing those: <strong>%0</strong><?php $_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_tr(array('_0'=>smarty_modifier_escape($_smarty_tpl->tpl_vars['page_badchars_display']->value)), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_tag_stack);?>

			<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_remarksbox(array('type'=>'tip','title'=>"Подсказка"), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_tag_stack);?>

			<input type="hidden" name="badname" value="<?php echo smarty_modifier_escape($_smarty_tpl->tpl_vars['newname']->value);?>
">
			<input type="submit" class="btn btn-default btn-sm" name="confirm" value="Use this name anyway">
		<?php }?>
	<?php } elseif (isset($_smarty_tpl->tpl_vars['msg']->value)) {?>
		<?php $_smarty_tpl->smarty->_tag_stack[] = array('remarksbox', array('type'=>'errors')); $_block_repeat=true; echo smarty_block_remarksbox(array('type'=>'errors'), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>

			<?php echo $_smarty_tpl->tpl_vars['msg']->value;?>

		<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_remarksbox(array('type'=>'errors'), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_tag_stack);?>

	<?php }?>
	<div class="form-group">
		<div class="col-sm-10">
			<label for="newpage" class="col-sm-2 control-label">Новое название</label>
			<div class="col-sm-10">
				<input type='text' id='newpage' name='newpage' class="form-control" value='<?php echo smarty_modifier_escape($_smarty_tpl->tpl_vars['newname']->value);?>
'>
			</div>
		</div>
		<div class="col-sm-2">
			<input type="submit" class="btn btn-primary btn-sm" name="rename" value="Переименовать">
		</div>
	</div>
</form>
<?php }} ?>
