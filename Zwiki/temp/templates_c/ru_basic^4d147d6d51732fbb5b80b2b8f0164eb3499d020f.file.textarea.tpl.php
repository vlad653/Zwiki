<?php /* Smarty version Smarty-3.1.21, created on 2017-09-20 15:02:34
         compiled from "/var/www/html/Zwiki/templates/prefs/textarea.tpl" */ ?>
<?php /*%%SmartyHeaderCode:212655024259c2830a49e774-67131870%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '4d147d6d51732fbb5b80b2b8f0164eb3499d020f' => 
    array (
      0 => '/var/www/html/Zwiki/templates/prefs/textarea.tpl',
      1 => 1424977070,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '212655024259c2830a49e774-67131870',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'p' => 0,
    'syntax' => 0,
    'codemirror' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.21',
  'unifunc' => 'content_59c2830a4a90d8_69573117',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_59c2830a4a90d8_69573117')) {function content_59c2830a4a90d8_69573117($_smarty_tpl) {?><?php if (!is_callable('smarty_modifier_simplewiki')) include '/var/www/html/Zwiki/lib/smarty_tiki/modifier.simplewiki.php';
?><div class="adminoptionbox preference form-group clearfix <?php echo smarty_modifier_escape($_smarty_tpl->tpl_vars['p']->value['tagstring']);
if (isset($_REQUEST['highlight'])&&$_REQUEST['highlight']==$_smarty_tpl->tpl_vars['p']->value['preference']) {?> highlight<?php }?>" style="text-align: left;"><label class="control-label col-sm-4" for="<?php echo smarty_modifier_escape($_smarty_tpl->tpl_vars['p']->value['id']);?>
"><?php echo smarty_modifier_escape($_smarty_tpl->tpl_vars['p']->value['name']);?>
</label><div class="col-sm-8"><textarea name="<?php echo smarty_modifier_escape($_smarty_tpl->tpl_vars['p']->value['preference']);?>
" id="<?php echo smarty_modifier_escape($_smarty_tpl->tpl_vars['p']->value['id']);?>
" <?php if ($_smarty_tpl->tpl_vars['syntax']->value) {?> data-syntax="<?php echo smarty_modifier_escape($_smarty_tpl->tpl_vars['syntax']->value);?>
" data-codemirror="<?php echo smarty_modifier_escape($_smarty_tpl->tpl_vars['codemirror']->value);?>
" <?php }?> class="form-control" <?php if ($_smarty_tpl->tpl_vars['p']->value['size']) {?> rows="<?php echo smarty_modifier_escape($_smarty_tpl->tpl_vars['p']->value['size']);?>
"<?php }?> <?php echo $_smarty_tpl->tpl_vars['p']->value['params'];?>
><?php echo smarty_modifier_escape($_smarty_tpl->tpl_vars['p']->value['value']);?>
</textarea><?php echo $_smarty_tpl->getSubTemplate ("prefs/shared-flags.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);
if ($_smarty_tpl->tpl_vars['p']->value['hint']) {?><div class="help-block"><?php echo smarty_modifier_simplewiki($_smarty_tpl->tpl_vars['p']->value['hint']);?>
</div><?php }
echo $_smarty_tpl->getSubTemplate ("prefs/shared-dependencies.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>
</div></div>
<?php }} ?>
