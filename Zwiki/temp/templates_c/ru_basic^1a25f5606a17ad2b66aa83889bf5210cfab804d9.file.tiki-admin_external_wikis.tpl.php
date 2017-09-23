<?php /* Smarty version Smarty-3.1.21, created on 2017-09-23 15:07:10
         compiled from "/var/www/html/Zwiki/templates/tiki-admin_external_wikis.tpl" */ ?>
<?php /*%%SmartyHeaderCode:75645400359c6789eb9ba87-88081843%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '1a25f5606a17ad2b66aa83889bf5210cfab804d9' => 
    array (
      0 => '/var/www/html/Zwiki/templates/tiki-admin_external_wikis.tpl',
      1 => 1473937022,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '75645400359c6789eb9ba87-88081843',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'extwikiId' => 0,
    'info' => 0,
    'prefs' => 0,
    'js' => 0,
    'offset' => 0,
    'sort_mode' => 0,
    'channels' => 0,
    'libeg' => 0,
    'liend' => 0,
    'cant_pages' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.21',
  'unifunc' => 'content_59c6789ebcb2a6_83600726',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_59c6789ebcb2a6_83600726')) {function content_59c6789ebcb2a6_83600726($_smarty_tpl) {?><?php if (!is_callable('smarty_block_title')) include '/var/www/html/Zwiki/lib/smarty_tiki/block.title.php';
if (!is_callable('smarty_function_object_selector_multi')) include '/var/www/html/Zwiki/lib/smarty_tiki/function.object_selector_multi.php';
if (!is_callable('smarty_function_icon')) include '/var/www/html/Zwiki/lib/smarty_tiki/function.icon.php';
if (!is_callable('smarty_function_popup')) include '/var/www/html/Zwiki/lib/smarty_tiki/function.popup.php';
if (!is_callable('smarty_function_norecords')) include '/var/www/html/Zwiki/lib/smarty_tiki/function.norecords.php';
if (!is_callable('smarty_block_pagination_links')) include '/var/www/html/Zwiki/lib/smarty_tiki/block.pagination_links.php';
?><?php $_smarty_tpl->smarty->_tag_stack[] = array('title', array('help'=>"External Wikis",'admpage'=>"textarea")); $_block_repeat=true; echo smarty_block_title(array('help'=>"External Wikis",'admpage'=>"textarea"), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
Admin External Wikis<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_title(array('help'=>"External Wikis",'admpage'=>"textarea"), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_tag_stack);?>


<h2>Создать/править внеш. вики</h2>
<form action="tiki-admin_external_wikis.php" method="post" class="form-horizontal" role="form">
	<input type="hidden" name="extwikiId" value="<?php echo smarty_modifier_escape($_smarty_tpl->tpl_vars['extwikiId']->value);?>
">
	<div class="form-group">
		<label for="name" class="col-sm-3 control-label">Имя</label>
		<div class="col-sm-9">
			<input type="text" maxlength="255" class="form-control" name="name" value="<?php echo smarty_modifier_escape($_smarty_tpl->tpl_vars['info']->value['name']);?>
">
		</div>
	</div>
	<div class="form-group">
		<label for="extwiki" class="col-sm-3 control-label">Ссылка</label>
		<div class="col-sm-9">
			<input type="text" maxlength="255" class="form-control" name="extwiki" id="extwiki" value="<?php echo smarty_modifier_escape($_smarty_tpl->tpl_vars['info']->value['extwiki']);?>
">
			<p class="help-block">URL (Используйте  чтобы заменить именем страницы URL пример: http://www.example.com/tiki-index.php?page=):</p>
		</div>
	</div>
	<div class="form-group">
		<label for="indexname" class="col-sm-3 control-label">Index</label>
		<div class="col-sm-9">
			<input type="text" maxlength="255" class="form-control" name="indexname" id="indexname" value="<?php echo smarty_modifier_escape($_smarty_tpl->tpl_vars['info']->value['indexname']);?>
">
			<p class="help-block"><em>[prefix]</em>main, such as tiki_main</p>
		</div>
	</div>
	<div class="form-group">
		<label for="groups" class="col-sm-3 control-label">Search as</label>
		<div class="col-sm-9">
			<?php echo smarty_function_object_selector_multi(array('_simplename'=>'groups','_simpleid'=>'groups','_simplevalue'=>$_smarty_tpl->tpl_vars['info']->value['groups'],'type'=>"group",'_separator'=>";"),$_smarty_tpl);?>

			<p class="help-block">Leave blank to search using currently active groups.</p>
		</div>
	</div>
	<div class="form-group text-center">
		<input type="submit" class="btn btn-primary btn-sm" name="save" value="Сохранить">
	</div>
</form>

<h2>Внешний Wiki</h2>

<?php if ($_smarty_tpl->tpl_vars['prefs']->value['javascript_enabled']!=='y') {?>
	<?php $_smarty_tpl->tpl_vars['js'] = new Smarty_variable('n', null, 0);?>
	<?php $_smarty_tpl->tpl_vars['libeg'] = new Smarty_variable('<li>', null, 0);?>
	<?php $_smarty_tpl->tpl_vars['liend'] = new Smarty_variable('</li>', null, 0);?>
<?php } else { ?>
	<?php $_smarty_tpl->tpl_vars['js'] = new Smarty_variable('y', null, 0);?>
	<?php $_smarty_tpl->tpl_vars['libeg'] = new Smarty_variable('', null, 0);?>
	<?php $_smarty_tpl->tpl_vars['liend'] = new Smarty_variable('', null, 0);?>
<?php }?>
<div class="<?php if ($_smarty_tpl->tpl_vars['js']->value==='y') {?>table-responsive<?php }?>"> 
	<table class="table table-striped table-hover">
		<tr>
			<th>
				<a href="tiki-admin_external_wikis.php?offset=<?php echo $_smarty_tpl->tpl_vars['offset']->value;?>
&amp;sort_mode=<?php if ($_smarty_tpl->tpl_vars['sort_mode']->value=='name_desc') {?>name_asc<?php } else { ?>name_desc<?php }?>">Имя</a>
			</th>
			<th>
				<a href="tiki-admin_external_wikis.php?offset=<?php echo $_smarty_tpl->tpl_vars['offset']->value;?>
&amp;sort_mode=<?php if ($_smarty_tpl->tpl_vars['sort_mode']->value=='extwiki_desc') {?>extwiki_asc<?php } else { ?>extwiki_desc<?php }?>">внеш. вики</a>
			</th>
			<th></th>
		</tr>

		<?php if (isset($_smarty_tpl->tpl_vars['smarty']->value['section']['user'])) unset($_smarty_tpl->tpl_vars['smarty']->value['section']['user']);
$_smarty_tpl->tpl_vars['smarty']->value['section']['user']['name'] = 'user';
$_smarty_tpl->tpl_vars['smarty']->value['section']['user']['loop'] = is_array($_loop=$_smarty_tpl->tpl_vars['channels']->value) ? count($_loop) : max(0, (int) $_loop); unset($_loop);
$_smarty_tpl->tpl_vars['smarty']->value['section']['user']['show'] = true;
$_smarty_tpl->tpl_vars['smarty']->value['section']['user']['max'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['user']['loop'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['user']['step'] = 1;
$_smarty_tpl->tpl_vars['smarty']->value['section']['user']['start'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['user']['step'] > 0 ? 0 : $_smarty_tpl->tpl_vars['smarty']->value['section']['user']['loop']-1;
if ($_smarty_tpl->tpl_vars['smarty']->value['section']['user']['show']) {
    $_smarty_tpl->tpl_vars['smarty']->value['section']['user']['total'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['user']['loop'];
    if ($_smarty_tpl->tpl_vars['smarty']->value['section']['user']['total'] == 0)
        $_smarty_tpl->tpl_vars['smarty']->value['section']['user']['show'] = false;
} else
    $_smarty_tpl->tpl_vars['smarty']->value['section']['user']['total'] = 0;
if ($_smarty_tpl->tpl_vars['smarty']->value['section']['user']['show']):

            for ($_smarty_tpl->tpl_vars['smarty']->value['section']['user']['index'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['user']['start'], $_smarty_tpl->tpl_vars['smarty']->value['section']['user']['iteration'] = 1;
                 $_smarty_tpl->tpl_vars['smarty']->value['section']['user']['iteration'] <= $_smarty_tpl->tpl_vars['smarty']->value['section']['user']['total'];
                 $_smarty_tpl->tpl_vars['smarty']->value['section']['user']['index'] += $_smarty_tpl->tpl_vars['smarty']->value['section']['user']['step'], $_smarty_tpl->tpl_vars['smarty']->value['section']['user']['iteration']++):
$_smarty_tpl->tpl_vars['smarty']->value['section']['user']['rownum'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['user']['iteration'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['user']['index_prev'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['user']['index'] - $_smarty_tpl->tpl_vars['smarty']->value['section']['user']['step'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['user']['index_next'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['user']['index'] + $_smarty_tpl->tpl_vars['smarty']->value['section']['user']['step'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['user']['first']      = ($_smarty_tpl->tpl_vars['smarty']->value['section']['user']['iteration'] == 1);
$_smarty_tpl->tpl_vars['smarty']->value['section']['user']['last']       = ($_smarty_tpl->tpl_vars['smarty']->value['section']['user']['iteration'] == $_smarty_tpl->tpl_vars['smarty']->value['section']['user']['total']);
?>
			<tr>
				<td class="text"><?php echo $_smarty_tpl->tpl_vars['channels']->value[$_smarty_tpl->getVariable('smarty')->value['section']['user']['index']]['name'];?>
</td>
				<td class="text"><?php echo $_smarty_tpl->tpl_vars['channels']->value[$_smarty_tpl->getVariable('smarty')->value['section']['user']['index']]['extwiki'];?>
</td>
				<td class="action">
					<?php $_smarty_tpl->_capture_stack[0][] = array('externalwiki_actions', null, null); ob_start(); ?>
						<?php echo $_smarty_tpl->tpl_vars['libeg']->value;?>
<a href="tiki-admin_external_wikis.php?offset=<?php echo $_smarty_tpl->tpl_vars['offset']->value;?>
&amp;sort_mode=<?php echo $_smarty_tpl->tpl_vars['sort_mode']->value;?>
&amp;extwikiId=<?php echo $_smarty_tpl->tpl_vars['channels']->value[$_smarty_tpl->getVariable('smarty')->value['section']['user']['index']]['extwikiId'];?>
"><?php echo smarty_function_icon(array('name'=>'edit','_menu_text'=>'y','_menu_icon'=>'y','alt'=>"Правка"),$_smarty_tpl);?>
</a><?php echo $_smarty_tpl->tpl_vars['liend']->value;
echo $_smarty_tpl->tpl_vars['libeg']->value;?>
<a href="tiki-admin_external_wikis.php?offset=<?php echo $_smarty_tpl->tpl_vars['offset']->value;?>
&amp;sort_mode=<?php echo $_smarty_tpl->tpl_vars['sort_mode']->value;?>
&amp;remove=<?php echo $_smarty_tpl->tpl_vars['channels']->value[$_smarty_tpl->getVariable('smarty')->value['section']['user']['index']]['extwikiId'];?>
"><?php echo smarty_function_icon(array('name'=>'remove','_menu_text'=>'y','_menu_icon'=>'y','alt'=>"Удалить"),$_smarty_tpl);?>
</a><?php echo $_smarty_tpl->tpl_vars['liend']->value;?>

					<?php list($_capture_buffer, $_capture_assign, $_capture_append) = array_pop($_smarty_tpl->_capture_stack[0]);
if (!empty($_capture_buffer)) {
 if (isset($_capture_assign)) $_smarty_tpl->assign($_capture_assign, ob_get_contents());
 if (isset( $_capture_append)) $_smarty_tpl->append( $_capture_append, ob_get_contents());
 Smarty::$_smarty_vars['capture'][$_capture_buffer]=ob_get_clean();
} else $_smarty_tpl->capture_error();?>
					<?php if ($_smarty_tpl->tpl_vars['js']->value==='n') {?><ul class="cssmenu_horiz"><li><?php }?>
					<a
						class="tips"
						title="Действия"
						href="#"
						<?php if ($_smarty_tpl->tpl_vars['js']->value==='y') {
echo smarty_function_popup(array('fullhtml'=>"1",'center'=>true,'text'=>smarty_modifier_escape(smarty_modifier_escape(Smarty::$_smarty_vars['capture']['externalwiki_actions'],"javascript"),"html")),$_smarty_tpl);
}?>
						style="padding:0; margin:0; border:0"
					>
						<?php echo smarty_function_icon(array('name'=>'wrench'),$_smarty_tpl);?>

					</a>
					<?php if ($_smarty_tpl->tpl_vars['js']->value==='n') {?>
						<ul class="dropdown-menu" role="menu"><?php echo Smarty::$_smarty_vars['capture']['externalwiki_actions'];?>
</ul></li></ul>
					<?php }?>
				</td>
			</tr>
		<?php endfor; else: ?>
			<?php echo smarty_function_norecords(array('_colspan'=>3),$_smarty_tpl);?>

		<?php endif; ?>
	</table>
</div>

<?php $_smarty_tpl->smarty->_tag_stack[] = array('pagination_links', array('cant'=>$_smarty_tpl->tpl_vars['cant_pages']->value,'step'=>$_smarty_tpl->tpl_vars['prefs']->value['maxRecords'],'offset'=>$_smarty_tpl->tpl_vars['offset']->value)); $_block_repeat=true; echo smarty_block_pagination_links(array('cant'=>$_smarty_tpl->tpl_vars['cant_pages']->value,'step'=>$_smarty_tpl->tpl_vars['prefs']->value['maxRecords'],'offset'=>$_smarty_tpl->tpl_vars['offset']->value), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();
$_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_pagination_links(array('cant'=>$_smarty_tpl->tpl_vars['cant_pages']->value,'step'=>$_smarty_tpl->tpl_vars['prefs']->value['maxRecords'],'offset'=>$_smarty_tpl->tpl_vars['offset']->value), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_tag_stack);?>

<?php }} ?>
