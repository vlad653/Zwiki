<?php /* Smarty version Smarty-3.1.21, created on 2017-09-20 15:02:34
         compiled from "/var/www/html/Zwiki/templates/admin/include_anchors.tpl" */ ?>
<?php /*%%SmartyHeaderCode:42729980259c2830a33bba1-01156299%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'b97c548e20d40873dc6e79e397fda5eff62eb8e8' => 
    array (
      0 => '/var/www/html/Zwiki/templates/admin/include_anchors.tpl',
      1 => 1478516444,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '42729980259c2830a33bba1-01156299',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'admin_icons' => 0,
    'info' => 0,
    'page' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.21',
  'unifunc' => 'content_59c2830a3463c7_18674268',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_59c2830a3463c7_18674268')) {function content_59c2830a3463c7_18674268($_smarty_tpl) {?><?php if (!is_callable('smarty_function_icon')) include '/var/www/html/Zwiki/lib/smarty_tiki/function.icon.php';
?>
<?php  $_smarty_tpl->tpl_vars['info'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['info']->_loop = false;
 $_smarty_tpl->tpl_vars['page'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['admin_icons']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['info']->key => $_smarty_tpl->tpl_vars['info']->value) {
$_smarty_tpl->tpl_vars['info']->_loop = true;
 $_smarty_tpl->tpl_vars['page']->value = $_smarty_tpl->tpl_vars['info']->key;
?>
	<?php if (!$_smarty_tpl->tpl_vars['info']->value['disabled']) {?>
		<li><a href="tiki-admin.php?page=<?php echo $_smarty_tpl->tpl_vars['page']->value;?>
" alt="<?php echo $_smarty_tpl->tpl_vars['info']->value['title'];?>
 <?php echo $_smarty_tpl->tpl_vars['info']->value['description'];?>
" class="tips bottom slow icon text-muted" title="<?php echo $_smarty_tpl->tpl_vars['info']->value['title'];?>
|<?php echo $_smarty_tpl->tpl_vars['info']->value['description'];?>
">
			<?php echo smarty_function_icon(array('name'=>"admin_".((string)$_smarty_tpl->tpl_vars['page']->value)),$_smarty_tpl);?>

		</a></li>
	<?php }?>
<?php } ?><?php }} ?>
