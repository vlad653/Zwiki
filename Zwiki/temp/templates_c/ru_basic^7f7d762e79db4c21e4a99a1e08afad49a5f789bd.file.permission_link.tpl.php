<?php /* Smarty version Smarty-3.1.21, created on 2017-09-19 15:59:51
         compiled from "/var/www/html/Zwiki/templates/permission_link.tpl" */ ?>
<?php /*%%SmartyHeaderCode:24431864559c13ef7f1d579-75121242%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '7f7d762e79db4c21e4a99a1e08afad49a5f789bd' => 
    array (
      0 => '/var/www/html/Zwiki/templates/permission_link.tpl',
      1 => 1491008668,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '24431864559c13ef7f1d579-75121242',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'permission_link' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.21',
  'unifunc' => 'content_59c13ef800a627_72672006',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_59c13ef800a627_72672006')) {function content_59c13ef800a627_72672006($_smarty_tpl) {?><?php if (!is_callable('smarty_function_icon')) include '/var/www/html/Zwiki/lib/smarty_tiki/function.icon.php';
?><?php if ($_smarty_tpl->tpl_vars['permission_link']->value['mode']=='text') {?>
	<a class="tips <?php if ($_smarty_tpl->tpl_vars['permission_link']->value['active']) {?>tips bg-warning<?php }
if (!empty($_smarty_tpl->tpl_vars['permission_link']->value['addclass'])) {?> <?php echo $_smarty_tpl->tpl_vars['permission_link']->value['addclass'];
}?>" href="<?php echo smarty_modifier_escape($_smarty_tpl->tpl_vars['permission_link']->value['url']);?>
"<?php if ($_smarty_tpl->tpl_vars['permission_link']->value['active']) {?> title=":Individual permissions"<?php }?>>
		<?php echo smarty_function_icon(array('name'=>"permission"),$_smarty_tpl);?>
 <?php echo smarty_modifier_escape($_smarty_tpl->tpl_vars['permission_link']->value['label']);?>

		<?php if ($_smarty_tpl->tpl_vars['permission_link']->value['count']) {?>
			<span class="badge"><?php echo smarty_modifier_escape($_smarty_tpl->tpl_vars['permission_link']->value['count']);?>
</span>
		<?php }?>
	</a>
<?php } elseif ($_smarty_tpl->tpl_vars['permission_link']->value['mode']=='button') {?>
	<a class="<?php if ($_smarty_tpl->tpl_vars['permission_link']->value['active']&&$_smarty_tpl->tpl_vars['permission_link']->value['type']!='file gallery') {?>btn btn-warning<?php } else { ?>btn btn-default<?php }
if (!empty($_smarty_tpl->tpl_vars['permission_link']->value['addclass'])) {?> <?php echo $_smarty_tpl->tpl_vars['permission_link']->value['addclass'];
}?>" href="<?php echo smarty_modifier_escape($_smarty_tpl->tpl_vars['permission_link']->value['url']);?>
">
		<?php echo smarty_modifier_escape($_smarty_tpl->tpl_vars['permission_link']->value['label']);?>

		<?php if ($_smarty_tpl->tpl_vars['permission_link']->value['count']) {?>
			<span class="badge"><?php echo smarty_modifier_escape($_smarty_tpl->tpl_vars['permission_link']->value['count']);?>
</span>
		<?php }?>
	</a>
<?php } elseif ($_smarty_tpl->tpl_vars['permission_link']->value['mode']=='button_link') {?>
	<a class="tips btn btn-link<?php if (!empty($_smarty_tpl->tpl_vars['permission_link']->value['addclass'])) {?> <?php echo $_smarty_tpl->tpl_vars['permission_link']->value['addclass'];
}?>" href="<?php echo smarty_modifier_escape($_smarty_tpl->tpl_vars['permission_link']->value['url']);?>
">
		<?php echo smarty_function_icon(array('name'=>"permission"),$_smarty_tpl);?>

		<?php echo smarty_modifier_escape($_smarty_tpl->tpl_vars['permission_link']->value['label']);?>

		<?php if ($_smarty_tpl->tpl_vars['permission_link']->value['count']) {?>
			<span class="badge"><?php echo smarty_modifier_escape($_smarty_tpl->tpl_vars['permission_link']->value['count']);?>
</span>
		<?php }?>
	</a>
<?php } elseif ($_smarty_tpl->tpl_vars['permission_link']->value['mode']=='link') {?>
	<a class="link<?php if (!empty($_smarty_tpl->tpl_vars['permission_link']->value['addclass'])) {?> <?php echo $_smarty_tpl->tpl_vars['permission_link']->value['addclass'];
}?>" href="<?php echo smarty_modifier_escape($_smarty_tpl->tpl_vars['permission_link']->value['url']);?>
">
		<?php echo smarty_modifier_escape($_smarty_tpl->tpl_vars['permission_link']->value['label']);?>

		<?php if ($_smarty_tpl->tpl_vars['permission_link']->value['count']) {?>
			<span class="badge"><?php echo smarty_modifier_escape($_smarty_tpl->tpl_vars['permission_link']->value['count']);?>
</span>
		<?php }?>
	</a>
<?php } elseif ($_smarty_tpl->tpl_vars['permission_link']->value['mode']=='icon') {?>
	<a class="tips btn <?php if ($_smarty_tpl->tpl_vars['permission_link']->value['active']) {?>btn-warning <?php } else { ?> btn-link<?php }?> btn-sm<?php if (!empty($_smarty_tpl->tpl_vars['permission_link']->value['addclass'])) {?> <?php echo $_smarty_tpl->tpl_vars['permission_link']->value['addclass'];
}?>" href="<?php echo smarty_modifier_escape($_smarty_tpl->tpl_vars['permission_link']->value['url']);?>
" title=":<?php echo $_smarty_tpl->tpl_vars['permission_link']->value['label'];?>
"><?php echo smarty_function_icon(array('name'=>"permission"),$_smarty_tpl);?>
<span class="sr-only"><?php echo smarty_modifier_escape($_smarty_tpl->tpl_vars['permission_link']->value['label']);?>
</span><?php if ($_smarty_tpl->tpl_vars['permission_link']->value['count']) {?><span class="badge"><?php echo smarty_modifier_escape($_smarty_tpl->tpl_vars['permission_link']->value['count']);?>
</span><?php }?></a>
<?php } else { ?>
	<a class="tips <?php if ($_smarty_tpl->tpl_vars['permission_link']->value['active']) {?>text-success<?php } else { ?>text-warning<?php }
if (!empty($_smarty_tpl->tpl_vars['permission_link']->value['addclass'])) {?> <?php echo $_smarty_tpl->tpl_vars['permission_link']->value['addclass'];
}?>" href="<?php echo smarty_modifier_escape($_smarty_tpl->tpl_vars['permission_link']->value['url']);?>
" title=":<?php echo smarty_modifier_escape($_smarty_tpl->tpl_vars['permission_link']->value['label']);?>
">
		<?php echo smarty_function_icon(array('name'=>"permission"),$_smarty_tpl);?>

		<span class="sr-only"><?php echo smarty_modifier_escape($_smarty_tpl->tpl_vars['permission_link']->value['label']);?>
</span>
		<?php if ($_smarty_tpl->tpl_vars['permission_link']->value['count']) {?>
			<span class="badge"><?php echo smarty_modifier_escape($_smarty_tpl->tpl_vars['permission_link']->value['count']);?>
</span>
		<?php }?>
	</a>
<?php }?>
<?php }} ?>
