<?php /* Smarty version Smarty-3.1.21, created on 2017-09-19 15:59:22
         compiled from "/var/www/html/Zwiki/templates/modules/mod-logo.tpl" */ ?>
<?php /*%%SmartyHeaderCode:192027978759c13eda8e33f0-31834330%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '91511e5ccc53a9063fb3adc03fc837d3115d3eaa' => 
    array (
      0 => '/var/www/html/Zwiki/templates/modules/mod-logo.tpl',
      1 => 1490351219,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '192027978759c13eda8e33f0-31834330',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'module_params' => 0,
    'tpl_module_title' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.21',
  'unifunc' => 'content_59c13eda8f8766_38755946',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_59c13eda8f8766_38755946')) {function content_59c13eda8f8766_38755946($_smarty_tpl) {?><?php if (!is_callable('smarty_block_tikimodule')) include '/var/www/html/Zwiki/lib/smarty_tiki/block.tikimodule.php';
if (!is_callable('smarty_block_tr')) include '/var/www/html/Zwiki/lib/smarty_tiki/block.tr.php';
?>
<?php $_smarty_tpl->smarty->_tag_stack[] = array('tikimodule', array('error'=>$_smarty_tpl->tpl_vars['module_params']->value['error'],'title'=>$_smarty_tpl->tpl_vars['tpl_module_title']->value,'name'=>"logo",'flip'=>$_smarty_tpl->tpl_vars['module_params']->value['flip'],'decorations'=>$_smarty_tpl->tpl_vars['module_params']->value['decorations'],'nobox'=>$_smarty_tpl->tpl_vars['module_params']->value['nobox'],'notitle'=>$_smarty_tpl->tpl_vars['module_params']->value['notitle'])); $_block_repeat=true; echo smarty_block_tikimodule(array('error'=>$_smarty_tpl->tpl_vars['module_params']->value['error'],'title'=>$_smarty_tpl->tpl_vars['tpl_module_title']->value,'name'=>"logo",'flip'=>$_smarty_tpl->tpl_vars['module_params']->value['flip'],'decorations'=>$_smarty_tpl->tpl_vars['module_params']->value['decorations'],'nobox'=>$_smarty_tpl->tpl_vars['module_params']->value['nobox'],'notitle'=>$_smarty_tpl->tpl_vars['module_params']->value['notitle']), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();
if ($_smarty_tpl->tpl_vars['module_params']->value['src']) {?><div <?php if ($_smarty_tpl->tpl_vars['module_params']->value['bgcolor']!='') {?> style="background-color: <?php echo $_smarty_tpl->tpl_vars['module_params']->value['bgcolor'];?>
;" <?php }?> class="pull-left <?php echo smarty_modifier_escape($_smarty_tpl->tpl_vars['module_params']->value['class_image']);?>
"><a href="<?php echo $_smarty_tpl->tpl_vars['module_params']->value['link'];?>
" title="<?php echo smarty_modifier_escape($_smarty_tpl->tpl_vars['module_params']->value['title_attr']);?>
"><img src="<?php echo $_smarty_tpl->tpl_vars['module_params']->value['src'];?>
" alt="<?php echo smarty_modifier_escape($_smarty_tpl->tpl_vars['module_params']->value['alt_attr']);?>
" style="max-width: 100%; height: auto"></a></div><?php }
if (!empty($_smarty_tpl->tpl_vars['module_params']->value['sitetitle'])||!empty($_smarty_tpl->tpl_vars['module_params']->value['sitesubtitle'])) {?><div class="pull-left <?php echo smarty_modifier_escape($_smarty_tpl->tpl_vars['module_params']->value['class_titles']);?>
"><?php if (!empty($_smarty_tpl->tpl_vars['module_params']->value['sitetitle'])) {?><h1 class="sitetitle"><a href="<?php echo $_smarty_tpl->tpl_vars['module_params']->value['link'];?>
"><?php $_smarty_tpl->smarty->_tag_stack[] = array('tr', array()); $_block_repeat=true; echo smarty_block_tr(array(), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();
echo smarty_modifier_escape($_smarty_tpl->tpl_vars['module_params']->value['sitetitle']);
$_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_tr(array(), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_tag_stack);?>
</a></h1><?php }
if (!empty($_smarty_tpl->tpl_vars['module_params']->value['sitesubtitle'])) {?><h2 class="sitesubtitle"><?php $_smarty_tpl->smarty->_tag_stack[] = array('tr', array()); $_block_repeat=true; echo smarty_block_tr(array(), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();
echo smarty_modifier_escape($_smarty_tpl->tpl_vars['module_params']->value['sitesubtitle']);
$_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_tr(array(), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_tag_stack);?>
</h2><?php }?></div><?php }
$_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_tikimodule(array('error'=>$_smarty_tpl->tpl_vars['module_params']->value['error'],'title'=>$_smarty_tpl->tpl_vars['tpl_module_title']->value,'name'=>"logo",'flip'=>$_smarty_tpl->tpl_vars['module_params']->value['flip'],'decorations'=>$_smarty_tpl->tpl_vars['module_params']->value['decorations'],'nobox'=>$_smarty_tpl->tpl_vars['module_params']->value['nobox'],'notitle'=>$_smarty_tpl->tpl_vars['module_params']->value['notitle']), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_tag_stack);?>

<?php }} ?>
