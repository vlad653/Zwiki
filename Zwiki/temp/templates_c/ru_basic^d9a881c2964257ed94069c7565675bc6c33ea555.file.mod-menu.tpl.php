<?php /* Smarty version Smarty-3.1.21, created on 2017-09-20 14:58:50
         compiled from "/var/www/html/Zwiki/templates/modules/mod-menu.tpl" */ ?>
<?php /*%%SmartyHeaderCode:67720373759c2822a98dcf9-18861262%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'd9a881c2964257ed94069c7565675bc6c33ea555' => 
    array (
      0 => '/var/www/html/Zwiki/templates/modules/mod-menu.tpl',
      1 => 1486605272,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '67720373759c2822a98dcf9-18861262',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'module_error' => 0,
    'tpl_module_title' => 0,
    'tpl_module_name' => 0,
    'module_params' => 0,
    'module_type' => 0,
    'module_position' => 0,
    'module_ord' => 0,
    'prefs' => 0,
    'tiki_p_admin' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.21',
  'unifunc' => 'content_59c2822a9a2113_40631156',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_59c2822a9a2113_40631156')) {function content_59c2822a9a2113_40631156($_smarty_tpl) {?><?php if (!is_callable('smarty_block_tikimodule')) include '/var/www/html/Zwiki/lib/smarty_tiki/block.tikimodule.php';
if (!is_callable('smarty_function_icon')) include '/var/www/html/Zwiki/lib/smarty_tiki/function.icon.php';
if (!is_callable('smarty_function_menu')) include '/var/www/html/Zwiki/lib/smarty_tiki/function.menu.php';
?>

<?php $_smarty_tpl->smarty->_tag_stack[] = array('tikimodule', array('error'=>$_smarty_tpl->tpl_vars['module_error']->value,'title'=>$_smarty_tpl->tpl_vars['tpl_module_title']->value,'name'=>$_smarty_tpl->tpl_vars['tpl_module_name']->value,'flip'=>(($tmp = @$_smarty_tpl->tpl_vars['module_params']->value['flip'])===null||$tmp==='' ? null : $tmp),'decorations'=>(($tmp = @$_smarty_tpl->tpl_vars['module_params']->value['decorations'])===null||$tmp==='' ? null : $tmp),'nobox'=>(($tmp = @$_smarty_tpl->tpl_vars['module_params']->value['nobox'])===null||$tmp==='' ? null : $tmp),'notitle'=>(($tmp = @$_smarty_tpl->tpl_vars['module_params']->value['notitle'])===null||$tmp==='' ? null : $tmp),'type'=>$_smarty_tpl->tpl_vars['module_type']->value)); $_block_repeat=true; echo smarty_block_tikimodule(array('error'=>$_smarty_tpl->tpl_vars['module_error']->value,'title'=>$_smarty_tpl->tpl_vars['tpl_module_title']->value,'name'=>$_smarty_tpl->tpl_vars['tpl_module_name']->value,'flip'=>(($tmp = @$_smarty_tpl->tpl_vars['module_params']->value['flip'])===null||$tmp==='' ? null : $tmp),'decorations'=>(($tmp = @$_smarty_tpl->tpl_vars['module_params']->value['decorations'])===null||$tmp==='' ? null : $tmp),'nobox'=>(($tmp = @$_smarty_tpl->tpl_vars['module_params']->value['nobox'])===null||$tmp==='' ? null : $tmp),'notitle'=>(($tmp = @$_smarty_tpl->tpl_vars['module_params']->value['notitle'])===null||$tmp==='' ? null : $tmp),'type'=>$_smarty_tpl->tpl_vars['module_type']->value), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>

	<?php if ((($tmp = @$_smarty_tpl->tpl_vars['module_params']->value['bootstrap'])===null||$tmp==='' ? null : $tmp)!='n') {?>
		<?php if ((($tmp = @$_smarty_tpl->tpl_vars['module_params']->value['type'])===null||$tmp==='' ? null : $tmp)=='horiz'||!empty($_smarty_tpl->tpl_vars['module_params']->value['navbar_brand'])) {?>
			<nav class="<?php if (!empty($_smarty_tpl->tpl_vars['module_params']->value['navbar_class'])) {
echo $_smarty_tpl->tpl_vars['module_params']->value['navbar_class'];
} else { ?>navbar navbar-default<?php }?>" role="navigation">
				<?php if (empty($_smarty_tpl->tpl_vars['module_params']->value['navbar_toggle'])||$_smarty_tpl->tpl_vars['module_params']->value['navbar_toggle']!='n') {?>
					<div class="navbar-header">
						<button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#mod-menu<?php echo $_smarty_tpl->tpl_vars['module_position']->value;
echo $_smarty_tpl->tpl_vars['module_ord']->value;?>
 .navbar-collapse">
							<span class="sr-only">Toggle navigation</span>
							<span class="icon-bar"></span>
							<span class="icon-bar"></span>
							<span class="icon-bar"></span>
						</button>
						<?php if ($_smarty_tpl->tpl_vars['module_params']->value['navbar_brand']!='') {?>
							<a class="navbar-brand" href="index.php">
								<img id="logo-header" src="<?php echo $_smarty_tpl->tpl_vars['module_params']->value['navbar_brand'];?>
" alt="Logo">
							</a>
						<?php }?>
					</div>
					<div class="collapse navbar-collapse">
						<?php if ($_smarty_tpl->tpl_vars['prefs']->value['menus_edit_icon']=='y'&&$_smarty_tpl->tpl_vars['tiki_p_admin']->value=='y'&&$_smarty_tpl->tpl_vars['module_params']->value['id']!='42') {?>
							<div class="edit-menu">
								<a href="tiki-admin_menu_options.php?menuId=<?php echo $_smarty_tpl->tpl_vars['module_params']->value['id'];?>
" title="Edit this menu"><?php echo smarty_function_icon(array('name'=>"edit"),$_smarty_tpl);?>
</a>
							</div>
						<?php }?>
						<?php echo smarty_function_menu(array('params'=>$_smarty_tpl->tpl_vars['module_params']->value,'bootstrap'=>'navbar'),$_smarty_tpl);?>

					</div>
				<?php } else { ?>
					<div>
						<?php echo smarty_function_menu(array('params'=>$_smarty_tpl->tpl_vars['module_params']->value,'bootstrap'=>'navbar'),$_smarty_tpl);?>

					</div>
				<?php }?>
			</nav>
		<?php } else { ?>
			<?php if ($_smarty_tpl->tpl_vars['prefs']->value['menus_edit_icon']=='y'&&$_smarty_tpl->tpl_vars['tiki_p_admin']->value=='y'&&$_smarty_tpl->tpl_vars['module_params']->value['id']!='42') {?>
				<div class="edit-menu">
					<a href="tiki-admin_menu_options.php?menuId=<?php echo $_smarty_tpl->tpl_vars['module_params']->value['id'];?>
" title="Edit this menu"><?php echo smarty_function_icon(array('name'=>"edit"),$_smarty_tpl);?>
</a>
				</div>
			<?php }?>
			<?php echo smarty_function_menu(array('params'=>$_smarty_tpl->tpl_vars['module_params']->value,'bootstrap'=>'basic'),$_smarty_tpl);?>

		<?php }?>
	<?php } else { ?>
		<div class="clearfix <?php if (!empty($_smarty_tpl->tpl_vars['module_params']->value['menu_class'])) {
echo $_smarty_tpl->tpl_vars['module_params']->value['menu_class'];
}?>"<?php if (!empty($_smarty_tpl->tpl_vars['module_params']->value['menu_id'])) {?> id="<?php echo $_smarty_tpl->tpl_vars['module_params']->value['menu_id'];?>
"<?php }?>>
			<?php echo smarty_function_menu(array('params'=>$_smarty_tpl->tpl_vars['module_params']->value),$_smarty_tpl);?>

		</div>
	<?php }?>
<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_tikimodule(array('error'=>$_smarty_tpl->tpl_vars['module_error']->value,'title'=>$_smarty_tpl->tpl_vars['tpl_module_title']->value,'name'=>$_smarty_tpl->tpl_vars['tpl_module_name']->value,'flip'=>(($tmp = @$_smarty_tpl->tpl_vars['module_params']->value['flip'])===null||$tmp==='' ? null : $tmp),'decorations'=>(($tmp = @$_smarty_tpl->tpl_vars['module_params']->value['decorations'])===null||$tmp==='' ? null : $tmp),'nobox'=>(($tmp = @$_smarty_tpl->tpl_vars['module_params']->value['nobox'])===null||$tmp==='' ? null : $tmp),'notitle'=>(($tmp = @$_smarty_tpl->tpl_vars['module_params']->value['notitle'])===null||$tmp==='' ? null : $tmp),'type'=>$_smarty_tpl->tpl_vars['module_type']->value), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_tag_stack);?>

<?php }} ?>
