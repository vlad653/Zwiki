<?php /* Smarty version Smarty-3.1.21, created on 2017-09-20 14:58:50
         compiled from "/var/www/html/Zwiki/templates/tiki-ajax_header.tpl" */ ?>
<?php /*%%SmartyHeaderCode:34416360859c2822a88f044-46027563%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '0289592a0f8042a8ebef5456f024101b77073ef3' => 
    array (
      0 => '/var/www/html/Zwiki/templates/tiki-ajax_header.tpl',
      1 => 1302758003,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '34416360859c2822a88f044-46027563',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'prefs' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.21',
  'unifunc' => 'content_59c2822a890ed7_45905106',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_59c2822a890ed7_45905106')) {function content_59c2822a890ed7_45905106($_smarty_tpl) {?>
<?php if ($_smarty_tpl->tpl_vars['prefs']->value['feature_ajax']=='y') {?>
<div id="ajaxLoading">Загружается...</div>
<div id="ajaxLoadingBG">&nbsp;</div>
<div id="ajaxDebug"></div>
<?php }?>
<?php }} ?>
