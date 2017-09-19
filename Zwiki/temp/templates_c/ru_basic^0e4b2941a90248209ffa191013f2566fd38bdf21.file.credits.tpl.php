<?php /* Smarty version Smarty-3.1.21, created on 2017-09-19 15:59:22
         compiled from "/var/www/html/Zwiki/templates/credits.tpl" */ ?>
<?php /*%%SmartyHeaderCode:201059744759c13edaa5eff8-39385192%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '0e4b2941a90248209ffa191013f2566fd38bdf21' => 
    array (
      0 => '/var/www/html/Zwiki/templates/credits.tpl',
      1 => 1421685541,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '201059744759c13edaa5eff8-39385192',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'prefs' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.21',
  'unifunc' => 'content_59c13edaa62395_37199493',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_59c13edaa62395_37199493')) {function content_59c13edaa62395_37199493($_smarty_tpl) {?>
Тема: <?php echo ucwords($_smarty_tpl->tpl_vars['prefs']->value['theme']);
if ($_smarty_tpl->tpl_vars['prefs']->value['theme_option']) {?>/<?php echo ucwords($_smarty_tpl->tpl_vars['prefs']->value['theme_option']);
}?>
<?php }} ?>
