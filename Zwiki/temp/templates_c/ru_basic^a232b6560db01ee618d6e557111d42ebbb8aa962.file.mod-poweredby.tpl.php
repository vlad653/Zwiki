<?php /* Smarty version Smarty-3.1.21, created on 2017-09-20 14:58:50
         compiled from "/var/www/html/Zwiki/templates/modules/mod-poweredby.tpl" */ ?>
<?php /*%%SmartyHeaderCode:178511417559c2822aaf3d00-21123627%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'a232b6560db01ee618d6e557111d42ebbb8aa962' => 
    array (
      0 => '/var/www/html/Zwiki/templates/modules/mod-poweredby.tpl',
      1 => 1490351219,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '178511417559c2822aaf3d00-21123627',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'module_params' => 0,
    'tpl_module_title' => 0,
    'tpl_module_name' => 0,
    'tiki_version' => 0,
    'tiki_uses_svn' => 0,
    'tiki_star' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.21',
  'unifunc' => 'content_59c2822ab02a19_34955165',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_59c2822ab02a19_34955165')) {function content_59c2822ab02a19_34955165($_smarty_tpl) {?><?php if (!is_callable('smarty_block_tikimodule')) include '/var/www/html/Zwiki/lib/smarty_tiki/block.tikimodule.php';
if (!is_callable('smarty_modifier_date_format')) include '/var/www/html/Zwiki/vendor_bundled/vendor/smarty/smarty/libs/plugins/modifier.date_format.php';
?>
<?php $_smarty_tpl->smarty->_tag_stack[] = array('tikimodule', array('error'=>$_smarty_tpl->tpl_vars['module_params']->value['error'],'title'=>$_smarty_tpl->tpl_vars['tpl_module_title']->value,'name'=>$_smarty_tpl->tpl_vars['tpl_module_name']->value,'flip'=>$_smarty_tpl->tpl_vars['module_params']->value['flip'],'decorations'=>$_smarty_tpl->tpl_vars['module_params']->value['decorations'],'nobox'=>$_smarty_tpl->tpl_vars['module_params']->value['nobox'],'notitle'=>$_smarty_tpl->tpl_vars['module_params']->value['notitle'])); $_block_repeat=true; echo smarty_block_tikimodule(array('error'=>$_smarty_tpl->tpl_vars['module_params']->value['error'],'title'=>$_smarty_tpl->tpl_vars['tpl_module_title']->value,'name'=>$_smarty_tpl->tpl_vars['tpl_module_name']->value,'flip'=>$_smarty_tpl->tpl_vars['module_params']->value['flip'],'decorations'=>$_smarty_tpl->tpl_vars['module_params']->value['decorations'],'nobox'=>$_smarty_tpl->tpl_vars['module_params']->value['nobox'],'notitle'=>$_smarty_tpl->tpl_vars['module_params']->value['notitle']), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
<div class="power"><?php if (!isset($_smarty_tpl->tpl_vars['module_params']->value['tiki'])||$_smarty_tpl->tpl_vars['module_params']->value['tiki']!='n') {?>Powered by <a href="http://tiki.org" title="&#169; 2002&#8211;<?php echo smarty_modifier_date_format(time(),"%Y");?>
 The Tiki Community">Tiki Wiki CMS Groupware </a><?php }
if (!isset($_smarty_tpl->tpl_vars['module_params']->value['version'])||$_smarty_tpl->tpl_vars['module_params']->value['version']!='n') {?>v<?php echo $_smarty_tpl->tpl_vars['tiki_version']->value;?>
 <?php if ($_smarty_tpl->tpl_vars['tiki_uses_svn']->value=='y') {?> (SVN)<?php }?> &quot;<?php echo $_smarty_tpl->tpl_vars['tiki_star']->value;?>
&quot;<?php }
if (!isset($_smarty_tpl->tpl_vars['module_params']->value['credits'])||$_smarty_tpl->tpl_vars['module_params']->value['credits']!='n') {?><span id="credits">&nbsp;| <?php echo $_smarty_tpl->getSubTemplate ('credits.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>
</span><?php }?></div><?php if (!isset($_smarty_tpl->tpl_vars['module_params']->value['icons'])||$_smarty_tpl->tpl_vars['module_params']->value['icons']!='n') {?><div class="power_icons"><a href="http://tiki.org/" title="Tiki"><img alt="Powered by Tiki" src="img/tiki/tikibutton2.png"></a><a href="http://php.net/" title="PHP"><img alt="Powered by PHP" src="img/poweredby/php.png"></a><a href="http://smarty.net/" title="Smarty"><img alt="Powered by Smarty" src="img/poweredby/smarty.png"></a></div><?php }
$_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_tikimodule(array('error'=>$_smarty_tpl->tpl_vars['module_params']->value['error'],'title'=>$_smarty_tpl->tpl_vars['tpl_module_title']->value,'name'=>$_smarty_tpl->tpl_vars['tpl_module_name']->value,'flip'=>$_smarty_tpl->tpl_vars['module_params']->value['flip'],'decorations'=>$_smarty_tpl->tpl_vars['module_params']->value['decorations'],'nobox'=>$_smarty_tpl->tpl_vars['module_params']->value['nobox'],'notitle'=>$_smarty_tpl->tpl_vars['module_params']->value['notitle']), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_tag_stack);?>

<?php }} ?>
