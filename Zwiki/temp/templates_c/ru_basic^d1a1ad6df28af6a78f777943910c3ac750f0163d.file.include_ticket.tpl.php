<?php /* Smarty version Smarty-3.1.21, created on 2017-09-20 15:02:34
         compiled from "/var/www/html/Zwiki/templates/access/include_ticket.tpl" */ ?>
<?php /*%%SmartyHeaderCode:199847608159c2830a3c8593-06552256%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'd1a1ad6df28af6a78f777943910c3ac750f0163d' => 
    array (
      0 => '/var/www/html/Zwiki/templates/access/include_ticket.tpl',
      1 => 1488763121,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '199847608159c2830a3c8593-06552256',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'ticket' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.21',
  'unifunc' => 'content_59c2830a3c9bf6_97821249',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_59c2830a3c9bf6_97821249')) {function content_59c2830a3c9bf6_97821249($_smarty_tpl) {?><input type="hidden" name="ticket" value="<?php echo smarty_modifier_escape($_smarty_tpl->tpl_vars['ticket']->value);?>
">
<input type="hidden" name="daconfirm" value="y"><?php }} ?>
