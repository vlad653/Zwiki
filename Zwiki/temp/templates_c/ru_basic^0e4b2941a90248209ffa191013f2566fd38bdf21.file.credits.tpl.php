<?php /* Smarty version Smarty-3.1.21, created on 2017-09-20 14:58:50
         compiled from "/var/www/html/Zwiki/templates/credits.tpl" */ ?>
<?php /*%%SmartyHeaderCode:137697005859c2822ab04859-78136810%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
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
  'nocache_hash' => '137697005859c2822ab04859-78136810',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'prefs' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.21',
  'unifunc' => 'content_59c2822ab07e25_86997307',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_59c2822ab07e25_86997307')) {function content_59c2822ab07e25_86997307($_smarty_tpl) {?>
Тема: <?php echo ucwords($_smarty_tpl->tpl_vars['prefs']->value['theme']);
if ($_smarty_tpl->tpl_vars['prefs']->value['theme_option']) {?>/<?php echo ucwords($_smarty_tpl->tpl_vars['prefs']->value['theme_option']);
}?>
<?php }} ?>
