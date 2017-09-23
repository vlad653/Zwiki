<?php /* Smarty version Smarty-3.1.21, created on 2017-09-20 15:02:34
         compiled from "/var/www/html/Zwiki/templates/prefs/shared-flags.tpl" */ ?>
<?php /*%%SmartyHeaderCode:157004584859c2830a428073-29754967%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'f3d3197390bd1d7f4887fe07ced378ad3ac9fd2a' => 
    array (
      0 => '/var/www/html/Zwiki/templates/prefs/shared-flags.tpl',
      1 => 1472487232,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '157004584859c2830a428073-29754967',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'p' => 0,
    'pref_filters' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.21',
  'unifunc' => 'content_59c2830a43e834_84975633',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_59c2830a43e834_84975633')) {function content_59c2830a43e834_84975633($_smarty_tpl) {?><?php if (!is_callable('smarty_modifier_simplewiki')) include '/var/www/html/Zwiki/lib/smarty_tiki/modifier.simplewiki.php';
if (!is_callable('smarty_function_icon')) include '/var/www/html/Zwiki/lib/smarty_tiki/function.icon.php';
if (!is_callable('smarty_function_popup')) include '/var/www/html/Zwiki/lib/smarty_tiki/function.popup.php';
?><?php if ($_smarty_tpl->tpl_vars['p']->value['helpurl']) {?>
	<a href="<?php echo smarty_modifier_escape($_smarty_tpl->tpl_vars['p']->value['helpurl']);?>
" target="tikihelp" class="tikihelp" title="<?php echo smarty_modifier_escape($_smarty_tpl->tpl_vars['p']->value['name']);?>
: <?php echo smarty_modifier_escape($_smarty_tpl->tpl_vars['p']->value['description']);?>
 <?php if ($_smarty_tpl->tpl_vars['p']->value['separator']&&$_smarty_tpl->tpl_vars['p']->value['type']!='multiselector') {?>Separator is <b><?php echo smarty_modifier_simplewiki($_smarty_tpl->tpl_vars['p']->value['separator']);?>
</b><?php }?>">
		<?php echo smarty_function_icon(array('name'=>"help"),$_smarty_tpl);?>

	</a>
<?php } elseif ($_smarty_tpl->tpl_vars['p']->value['description']) {?>
	<a class="tikihelp" title="<?php echo smarty_modifier_escape($_smarty_tpl->tpl_vars['p']->value['name']);?>
: <?php echo smarty_modifier_escape($_smarty_tpl->tpl_vars['p']->value['description']);?>
 <?php if ($_smarty_tpl->tpl_vars['p']->value['separator']&&$_smarty_tpl->tpl_vars['p']->value['type']!='multiselector') {?>Separator is <b><?php echo smarty_modifier_simplewiki($_smarty_tpl->tpl_vars['p']->value['separator']);?>
</b><?php }?>">
		<?php echo smarty_function_icon(array('name'=>"information"),$_smarty_tpl);?>

	</a>
<?php }?>

<?php if ($_smarty_tpl->tpl_vars['p']->value['warning']) {?>
	<a href="#" target="tikihelp" class="tikihelp text-warning" title="Внимание: <?php echo smarty_modifier_escape($_smarty_tpl->tpl_vars['p']->value['warning']);?>
">
		<?php echo smarty_function_icon(array('name'=>"warning"),$_smarty_tpl);?>

	</a>
<?php }?>

<?php if ($_smarty_tpl->tpl_vars['p']->value['modified']&&$_smarty_tpl->tpl_vars['p']->value['available']) {?>
	<span class="pref-reset-wrapper">
		<input class="pref-reset system" type="checkbox" name="lm_reset[]" value="<?php echo smarty_modifier_escape($_smarty_tpl->tpl_vars['p']->value['preference']);?>
" style="display:none" data-preference-default="<?php if (is_array($_smarty_tpl->tpl_vars['p']->value['default'])) {
echo smarty_modifier_escape(implode($_smarty_tpl->tpl_vars['p']->value['default'],$_smarty_tpl->tpl_vars['p']->value['separator']));
} else {
echo smarty_modifier_escape($_smarty_tpl->tpl_vars['p']->value['default']);
}?>">
		<a href="#" class="pref-reset-undo tips" title="Сбросить|Reset to default value"><?php echo smarty_function_icon(array('name'=>"undo"),$_smarty_tpl);?>
</a>
		<a href="#" class="pref-reset-redo tips" title="Restore|Restore current value" style="display:none"><?php echo smarty_function_icon(array('name'=>"repeat"),$_smarty_tpl);?>
</a>
	</span>
<?php }?>

<?php if (!empty($_smarty_tpl->tpl_vars['p']->value['popup_html'])) {?>
	<a class="tips" title="Действия" href="#" style="padding:0; margin:0; border:0" <?php echo smarty_function_popup(array('fullhtml'=>1,'center'=>"true",'text'=>smarty_modifier_escape(smarty_modifier_escape($_smarty_tpl->tpl_vars['p']->value['popup_html'],"javascript"),"html")),$_smarty_tpl);?>
>
		<?php echo smarty_function_icon(array('name'=>"actions"),$_smarty_tpl);?>

	</a>
<?php }?>
<?php if (!empty($_smarty_tpl->tpl_vars['p']->value['voting_html'])) {?>
	<?php echo $_smarty_tpl->tpl_vars['p']->value['voting_html'];?>

<?php }?>

<?php echo $_smarty_tpl->tpl_vars['p']->value['pages'];?>


<?php if (!$_smarty_tpl->tpl_vars['pref_filters']->value['advanced']['selected']&&in_array('advanced',$_smarty_tpl->tpl_vars['p']->value['tags'])) {?>
	<label class="label label-warning tips" title=":Change your preference filter settings in order to view advanced preferences by default">
		advanced
	</label>
<?php }?>
<?php if (!$_smarty_tpl->tpl_vars['pref_filters']->value['experimental']['selected']&&in_array('experimental',$_smarty_tpl->tpl_vars['p']->value['tags'])) {?>
	<label class="label label-danger tips" title=":Change your preference filter settings in order to view experimental preferences by default">
		experimental
	</label>
<?php }?>
<?php }} ?>
