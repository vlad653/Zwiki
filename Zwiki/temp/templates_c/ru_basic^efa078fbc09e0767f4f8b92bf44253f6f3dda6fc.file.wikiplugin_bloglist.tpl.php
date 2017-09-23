<?php /* Smarty version Smarty-3.1.21, created on 2017-09-20 14:58:50
         compiled from "/var/www/html/Zwiki/templates/wiki-plugins/wikiplugin_bloglist.tpl" */ ?>
<?php /*%%SmartyHeaderCode:146618777959c2822a2a3fe0-76728595%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'efa078fbc09e0767f4f8b92bf44253f6f3dda6fc' => 
    array (
      0 => '/var/www/html/Zwiki/templates/wiki-plugins/wikiplugin_bloglist.tpl',
      1 => 1438956572,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '146618777959c2822a2a3fe0-76728595',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'container_class' => 0,
    'blogItems' => 0,
    'blogItem' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.21',
  'unifunc' => 'content_59c2822a2ac978_21979844',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_59c2822a2ac978_21979844')) {function content_59c2822a2ac978_21979844($_smarty_tpl) {?><?php if (!is_callable('smarty_modifier_tiki_short_date')) include '/var/www/html/Zwiki/lib/smarty_tiki/modifier.tiki_short_date.php';
if (!is_callable('smarty_modifier_sefurl')) include '/var/www/html/Zwiki/lib/smarty_tiki/modifier.sefurl.php';
if (!is_callable('smarty_modifier_username')) include '/var/www/html/Zwiki/lib/smarty_tiki/modifier.username.php';
?><div class="blogtools<?php if (!empty($_smarty_tpl->tpl_vars['container_class']->value)) {?> <?php echo $_smarty_tpl->tpl_vars['container_class']->value;
}?>">
<div class="table-responsive">
<table class="table">
<tr><th>Дата</th><th>Заголовок</th><th>Автор</th></tr>

<?php  $_smarty_tpl->tpl_vars['blogItem'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['blogItem']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['blogItems']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['blogItem']->key => $_smarty_tpl->tpl_vars['blogItem']->value) {
$_smarty_tpl->tpl_vars['blogItem']->_loop = true;
?>
	<tr>
		<td><?php echo smarty_modifier_tiki_short_date($_smarty_tpl->tpl_vars['blogItem']->value['created']);?>
</td>
		<td><a class="link" href="<?php echo smarty_modifier_sefurl($_smarty_tpl->tpl_vars['blogItem']->value['postId'],'blogpost');?>
"><?php echo $_smarty_tpl->tpl_vars['blogItem']->value['title'];?>
</a></td>
		<td><?php echo smarty_modifier_username($_smarty_tpl->tpl_vars['blogItem']->value['user']);?>
</td>
	</tr>
<?php } ?>
</table>
</div>
</div><?php }} ?>
