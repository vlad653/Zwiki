<?php /* Smarty version Smarty-3.1.21, created on 2017-09-20 22:06:47
         compiled from "/var/www/html/Zwiki/templates/edit/preview.tpl" */ ?>
<?php /*%%SmartyHeaderCode:160879610959c2e677e44c50-68543747%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'c26f04ffba2af123040a3a611a55eb011fe51d72' => 
    array (
      0 => '/var/www/html/Zwiki/templates/edit/preview.tpl',
      1 => 1419131146,
      2 => 'file',
    ),
    '6b5735042727bc2333b9eada4be5396631086c14' => 
    array (
      0 => '/var/www/html/Zwiki/templates/layouts/internal/ajax.tpl',
      1 => 1495975029,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '160879610959c2e677e44c50-68543747',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'plain' => 0,
    'headerlib' => 0,
    'prefs' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.21',
  'unifunc' => 'content_59c2e677e54c42_08975459',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_59c2e677e54c42_08975459')) {function content_59c2e677e54c42_08975459($_smarty_tpl) {?><?php if (!is_callable('smarty_block_title')) include '/var/www/html/Zwiki/lib/smarty_tiki/block.title.php';
?><!DOCTYPE html>
<?php if (!$_smarty_tpl->tpl_vars['plain']->value) {?>
	
	<?php $_smarty_tpl->smarty->_tag_stack[] = array('title', array()); $_block_repeat=true; echo smarty_block_title(array(), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();
echo smarty_modifier_escape($_smarty_tpl->tpl_vars['title']->value);
$_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_title(array(), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_tag_stack);?>


<?php }?>

	<?php if ($_smarty_tpl->tpl_vars['inPage']->value) {?><div class="wikitext"><?php echo $_smarty_tpl->tpl_vars['parsed']->value;?>
</div><?php if (!empty($_smarty_tpl->tpl_vars['parsed_footnote']->value)) {?><div class="wikitext"><?php echo $_smarty_tpl->tpl_vars['parsed_footnote']->value;?>
</div><?php }
} else {
echo $_smarty_tpl->tpl_vars['parsed']->value;
}?>

<?php if ($_smarty_tpl->tpl_vars['headerlib']->value) {?>
	<?php echo $_smarty_tpl->tpl_vars['headerlib']->value->output_js_config();?>

	<?php echo $_smarty_tpl->tpl_vars['headerlib']->value->output_js_files();?>

	<?php echo $_smarty_tpl->tpl_vars['headerlib']->value->output_js();?>

<?php }?>
<?php if ($_smarty_tpl->tpl_vars['prefs']->value['feature_debug_console']=='y'&&!empty($_REQUEST['show_smarty_debug'])) {?>
	<?php $_smarty_tpl->smarty->loadPlugin('Smarty_Internal_Debug'); Smarty_Internal_Debug::display_debug($_smarty_tpl); ?>
<?php }?>
<?php }} ?>
