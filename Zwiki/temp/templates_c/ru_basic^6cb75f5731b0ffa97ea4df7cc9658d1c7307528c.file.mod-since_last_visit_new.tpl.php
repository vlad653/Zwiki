<?php /* Smarty version Smarty-3.1.21, created on 2017-09-20 14:58:50
         compiled from "/var/www/html/Zwiki/templates/modules/mod-since_last_visit_new.tpl" */ ?>
<?php /*%%SmartyHeaderCode:148187047359c2822aa8c6f2-61147109%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '6cb75f5731b0ffa97ea4df7cc9658d1c7307528c' => 
    array (
      0 => '/var/www/html/Zwiki/templates/modules/mod-since_last_visit_new.tpl',
      1 => 1459953982,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '148187047359c2822aa8c6f2-61147109',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'user' => 0,
    'module_params' => 0,
    'tpl_module_title' => 0,
    'prefs' => 0,
    'date_as_link' => 0,
    'slvn_info' => 0,
    'use_jquery_ui' => 0,
    'slvn_item' => 0,
    'fragment' => 0,
    'pos' => 0,
    'module_rows' => 0,
    'cname' => 0,
    'tracker' => 0,
    'showcname' => 0,
    'cookie' => 0,
    'default_folding' => 0,
    'opposite_folding' => 0,
    'tcname' => 0,
    'showtcname' => 0,
    'nonums' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.21',
  'unifunc' => 'content_59c2822aad0774_46430122',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_59c2822aad0774_46430122')) {function content_59c2822aad0774_46430122($_smarty_tpl) {?><?php if (!is_callable('smarty_block_tikimodule')) include '/var/www/html/Zwiki/lib/smarty_tiki/block.tikimodule.php';
if (!is_callable('smarty_modifier_tiki_short_date')) include '/var/www/html/Zwiki/lib/smarty_tiki/modifier.tiki_short_date.php';
if (!is_callable('smarty_function_icon')) include '/var/www/html/Zwiki/lib/smarty_tiki/function.icon.php';
?>
<?php if ($_smarty_tpl->tpl_vars['user']->value) {?>
	<?php $_smarty_tpl->smarty->_tag_stack[] = array('tikimodule', array('error'=>$_smarty_tpl->tpl_vars['module_params']->value['error'],'title'=>$_smarty_tpl->tpl_vars['tpl_module_title']->value,'name'=>"since_last_visit_new",'flip'=>$_smarty_tpl->tpl_vars['module_params']->value['flip'],'decorations'=>$_smarty_tpl->tpl_vars['module_params']->value['decorations'],'nobox'=>$_smarty_tpl->tpl_vars['module_params']->value['nobox'],'notitle'=>$_smarty_tpl->tpl_vars['module_params']->value['notitle'])); $_block_repeat=true; echo smarty_block_tikimodule(array('error'=>$_smarty_tpl->tpl_vars['module_params']->value['error'],'title'=>$_smarty_tpl->tpl_vars['tpl_module_title']->value,'name'=>"since_last_visit_new",'flip'=>$_smarty_tpl->tpl_vars['module_params']->value['flip'],'decorations'=>$_smarty_tpl->tpl_vars['module_params']->value['decorations'],'nobox'=>$_smarty_tpl->tpl_vars['module_params']->value['nobox'],'notitle'=>$_smarty_tpl->tpl_vars['module_params']->value['notitle']), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>

		<div style="margin-bottom: 5px; text-align:center;">
			<?php if ($_smarty_tpl->tpl_vars['prefs']->value['feature_calendar']=='y'&&$_smarty_tpl->tpl_vars['date_as_link']->value=='y') {?>
				<a class="linkmodule" href="tiki-calendar.php?todate=<?php echo $_smarty_tpl->tpl_vars['slvn_info']->value['lastLogin'];?>
" title="жми для правки">
			<?php }?>
			<b><?php echo smarty_modifier_tiki_short_date($_smarty_tpl->tpl_vars['slvn_info']->value['lastLogin']);?>
</b>
			<?php if ($_smarty_tpl->tpl_vars['prefs']->value['feature_calendar']=='y') {?>
				</a>
			<?php }?>
		</div>
		<?php if ($_smarty_tpl->tpl_vars['slvn_info']->value['cant']==0) {?>
			<div class="separator">Ничего не изменилось</div>
		<?php } else { ?>
			<?php if ($_smarty_tpl->tpl_vars['use_jquery_ui']->value=="y") {?>
				<?php $_smarty_tpl->tpl_vars['fragment'] = new Smarty_variable(1, null, 0);?>
				<div class="tabs">
					<ul class="nav nav-tabs">
						<?php  $_smarty_tpl->tpl_vars['slvn_item'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['slvn_item']->_loop = false;
 $_smarty_tpl->tpl_vars['pos'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['slvn_info']->value['items']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['slvn_item']->key => $_smarty_tpl->tpl_vars['slvn_item']->value) {
$_smarty_tpl->tpl_vars['slvn_item']->_loop = true;
 $_smarty_tpl->tpl_vars['pos']->value = $_smarty_tpl->tpl_vars['slvn_item']->key;
?>
							<?php if ($_smarty_tpl->tpl_vars['slvn_item']->value['count']>0) {?>
								<li class="text-center">
									<a data-toggle="tab" href="#fragment-<?php echo $_smarty_tpl->tpl_vars['fragment']->value;?>
">
										<?php if ($_smarty_tpl->tpl_vars['pos']->value=="blogs") {?>
											<?php echo smarty_function_icon(array('name'=>"bold",'size'=>1,'ititle'=>"Blogs"),$_smarty_tpl);?>

										<?php } elseif ($_smarty_tpl->tpl_vars['pos']->value=="blogPosts") {?>
											<?php echo smarty_function_icon(array('name'=>"bold",'size'=>1,'ititle'=>"Сообщения в блоге"),$_smarty_tpl);?>

										<?php } elseif ($_smarty_tpl->tpl_vars['pos']->value=="articles") {?>
											<?php echo smarty_function_icon(array('name'=>"newspaper-o",'size'=>1,'ititle'=>"Статьи"),$_smarty_tpl);?>

										<?php } elseif ($_smarty_tpl->tpl_vars['pos']->value=="posts") {?>
											<?php echo smarty_function_icon(array('name'=>"comments",'size'=>1,'ititle'=>"Форумы"),$_smarty_tpl);?>

										<?php } elseif ($_smarty_tpl->tpl_vars['pos']->value=="fileGalleries") {?>
											<?php echo smarty_function_icon(array('name'=>"folder-open",'size'=>1,'ititle'=>"Файловые галереи"),$_smarty_tpl);?>

										<?php } elseif ($_smarty_tpl->tpl_vars['pos']->value=="files") {?>
											<?php echo smarty_function_icon(array('name'=>"file-o",'size'=>1,'ititle'=>"Файлы"),$_smarty_tpl);?>

										<?php } elseif ($_smarty_tpl->tpl_vars['pos']->value=="imageGalleries") {?>
											<?php echo smarty_function_icon(array('name'=>"file-image-o",'size'=>1,'ititle'=>"Галереи изображений"),$_smarty_tpl);?>

										<?php } elseif ($_smarty_tpl->tpl_vars['pos']->value=="images") {?>
											<?php echo smarty_function_icon(array('name'=>"file-image-o",'size'=>1,'ititle'=>"Изображения"),$_smarty_tpl);?>

										<?php } elseif ($_smarty_tpl->tpl_vars['pos']->value=="polls") {?>
											<?php echo smarty_function_icon(array('name'=>"tasks",'size'=>1,'ititle'=>"Опрос"),$_smarty_tpl);?>

										<?php } elseif ($_smarty_tpl->tpl_vars['pos']->value=="pages") {?>
											<?php echo smarty_function_icon(array('name'=>"file-text-o",'size'=>1,'ititle'=>"Вики"),$_smarty_tpl);?>

										<?php } elseif ($_smarty_tpl->tpl_vars['pos']->value=="comments") {?>
											<?php echo smarty_function_icon(array('name'=>"comments-o",'size'=>1,'ititle'=>"Комментарии"),$_smarty_tpl);?>

										<?php } elseif ($_smarty_tpl->tpl_vars['pos']->value=="forums") {?>
											<?php echo smarty_function_icon(array('name'=>"comments",'size'=>1,'ititle'=>"Форумы"),$_smarty_tpl);?>

										<?php } elseif ($_smarty_tpl->tpl_vars['pos']->value=="trackers") {?>
											<?php echo smarty_function_icon(array('name'=>"database",'size'=>1,'ititle'=>"Элементы Трекера (Новый)"),$_smarty_tpl);?>

										<?php } elseif ($_smarty_tpl->tpl_vars['pos']->value=="utrackers") {?>
											<?php echo smarty_function_icon(array('name'=>"database",'size'=>1,'ititle'=>"Элементы Трекера (Updated)"),$_smarty_tpl);?>

										<?php } elseif ($_smarty_tpl->tpl_vars['pos']->value=="users") {?>
											<?php echo smarty_function_icon(array('name'=>"group",'size'=>1,'ititle'=>"Пользователи"),$_smarty_tpl);?>

										<?php } elseif ($_smarty_tpl->tpl_vars['pos']->value=="calendar") {?>
											<?php echo smarty_function_icon(array('name'=>"calendar",'size'=>1,'ititle'=>"Календари"),$_smarty_tpl);?>

										<?php } elseif ($_smarty_tpl->tpl_vars['pos']->value=="events") {?>
											<?php echo smarty_function_icon(array('name'=>"calendar",'size'=>1,'ititle'=>"Events"),$_smarty_tpl);?>

										<?php } else { ?>
											<?php echo $_smarty_tpl->tpl_vars['pos']->value;?>

										<?php }?>
									</a>
								</li>
								<?php $_smarty_tpl->tpl_vars['fragment'] = new Smarty_variable($_smarty_tpl->tpl_vars['fragment']->value+1, null, 0);?>
							<?php }?>
						<?php } ?>
					</ul>
				</div>
				<?php $_smarty_tpl->tpl_vars['fragment'] = new Smarty_variable(1, null, 0);?>
			<?php }?>
			<div class="tab-content">
			<?php  $_smarty_tpl->tpl_vars['slvn_item'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['slvn_item']->_loop = false;
 $_smarty_tpl->tpl_vars['pos'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['slvn_info']->value['items']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['slvn_item']->key => $_smarty_tpl->tpl_vars['slvn_item']->value) {
$_smarty_tpl->tpl_vars['slvn_item']->_loop = true;
 $_smarty_tpl->tpl_vars['pos']->value = $_smarty_tpl->tpl_vars['slvn_item']->key;
?>
				<?php if ($_smarty_tpl->tpl_vars['slvn_item']->value['count']>0) {?>
					<?php if ($_smarty_tpl->tpl_vars['use_jquery_ui']->value=="y") {?><div id="fragment-<?php echo $_smarty_tpl->tpl_vars['fragment']->value;?>
" class="tab-pane<?php if ($_smarty_tpl->tpl_vars['fragment']->value==1) {?> active<?php }?>"><?php }?>
					<?php $_smarty_tpl->tpl_vars['cname'] = new Smarty_variable($_smarty_tpl->tpl_vars['slvn_item']->value['cname'], null, 0);?>
					<?php if ($_smarty_tpl->tpl_vars['slvn_item']->value['count']==$_smarty_tpl->tpl_vars['module_rows']->value) {?>
						<div class="separator"><a class="separator" href="javascript:flip('<?php echo $_smarty_tpl->tpl_vars['cname']->value;?>
');">Multiple <?php echo $_smarty_tpl->tpl_vars['slvn_item']->value['label'];?>
, including</a></div>
					<?php } else { ?>
						<div class="separator"><a class="separator" href="javascript:flip('<?php echo $_smarty_tpl->tpl_vars['cname']->value;?>
');"><?php echo $_smarty_tpl->tpl_vars['slvn_item']->value['count'];?>
&nbsp;<?php echo $_smarty_tpl->tpl_vars['slvn_item']->value['label'];?>
</a></div>
					<?php }?>
					<?php $_smarty_tpl->tpl_vars['showcname'] = new Smarty_variable(("show_").($_smarty_tpl->tpl_vars['cname']->value), null, 0);?>

					<?php if ($_smarty_tpl->tpl_vars['pos']->value=='trackers'||$_smarty_tpl->tpl_vars['pos']->value=='utrackers') {?>
						<div id="<?php echo $_smarty_tpl->tpl_vars['cname']->value;?>
">

							
							<?php  $_smarty_tpl->tpl_vars['tracker'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['tracker']->_loop = false;
 $_smarty_tpl->tpl_vars['tp'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['slvn_item']->value['tid']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['tracker']->key => $_smarty_tpl->tpl_vars['tracker']->value) {
$_smarty_tpl->tpl_vars['tracker']->_loop = true;
 $_smarty_tpl->tpl_vars['tp']->value = $_smarty_tpl->tpl_vars['tracker']->key;
?>
								<?php $_smarty_tpl->tpl_vars['tcname'] = new Smarty_variable($_smarty_tpl->tpl_vars['tracker']->value['cname'], null, 0);?>
								<div class="separator" style="margin-left: 10px; display:<?php if (!isset($_smarty_tpl->tpl_vars['cookie']->value[$_smarty_tpl->tpl_vars['showcname']->value])||$_smarty_tpl->tpl_vars['cookie']->value[$_smarty_tpl->tpl_vars['showcname']->value]=='y') {
echo $_smarty_tpl->tpl_vars['default_folding']->value;
} else {
echo $_smarty_tpl->tpl_vars['opposite_folding']->value;
}?>;">
									<?php $_smarty_tpl->tpl_vars['showtcname'] = new Smarty_variable(("show_").($_smarty_tpl->tpl_vars['tcname']->value), null, 0);?>
									<a class="separator" href="javascript:flip('<?php echo $_smarty_tpl->tpl_vars['tcname']->value;?>
');"><?php echo $_smarty_tpl->tpl_vars['tracker']->value['count'];?>
&nbsp;<?php echo smarty_modifier_escape($_smarty_tpl->tpl_vars['tracker']->value['label']);?>
</a>
									<div id="<?php echo $_smarty_tpl->tpl_vars['tcname']->value;?>
" style="display:<?php if (!isset($_smarty_tpl->tpl_vars['cookie']->value[$_smarty_tpl->tpl_vars['showtcname']->value])||$_smarty_tpl->tpl_vars['cookie']->value[$_smarty_tpl->tpl_vars['showtcname']->value]=='y') {
echo $_smarty_tpl->tpl_vars['default_folding']->value;
} else {
echo $_smarty_tpl->tpl_vars['opposite_folding']->value;
}?>;">
										<?php if ($_smarty_tpl->tpl_vars['nonums']->value!='y') {?><ol><?php } else { ?><ul><?php }?>
										<?php if (isset($_smarty_tpl->tpl_vars['smarty']->value['section']['xx'])) unset($_smarty_tpl->tpl_vars['smarty']->value['section']['xx']);
$_smarty_tpl->tpl_vars['smarty']->value['section']['xx']['name'] = 'xx';
$_smarty_tpl->tpl_vars['smarty']->value['section']['xx']['loop'] = is_array($_loop=$_smarty_tpl->tpl_vars['tracker']->value['list']) ? count($_loop) : max(0, (int) $_loop); unset($_loop);
$_smarty_tpl->tpl_vars['smarty']->value['section']['xx']['show'] = true;
$_smarty_tpl->tpl_vars['smarty']->value['section']['xx']['max'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['xx']['loop'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['xx']['step'] = 1;
$_smarty_tpl->tpl_vars['smarty']->value['section']['xx']['start'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['xx']['step'] > 0 ? 0 : $_smarty_tpl->tpl_vars['smarty']->value['section']['xx']['loop']-1;
if ($_smarty_tpl->tpl_vars['smarty']->value['section']['xx']['show']) {
    $_smarty_tpl->tpl_vars['smarty']->value['section']['xx']['total'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['xx']['loop'];
    if ($_smarty_tpl->tpl_vars['smarty']->value['section']['xx']['total'] == 0)
        $_smarty_tpl->tpl_vars['smarty']->value['section']['xx']['show'] = false;
} else
    $_smarty_tpl->tpl_vars['smarty']->value['section']['xx']['total'] = 0;
if ($_smarty_tpl->tpl_vars['smarty']->value['section']['xx']['show']):

            for ($_smarty_tpl->tpl_vars['smarty']->value['section']['xx']['index'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['xx']['start'], $_smarty_tpl->tpl_vars['smarty']->value['section']['xx']['iteration'] = 1;
                 $_smarty_tpl->tpl_vars['smarty']->value['section']['xx']['iteration'] <= $_smarty_tpl->tpl_vars['smarty']->value['section']['xx']['total'];
                 $_smarty_tpl->tpl_vars['smarty']->value['section']['xx']['index'] += $_smarty_tpl->tpl_vars['smarty']->value['section']['xx']['step'], $_smarty_tpl->tpl_vars['smarty']->value['section']['xx']['iteration']++):
$_smarty_tpl->tpl_vars['smarty']->value['section']['xx']['rownum'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['xx']['iteration'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['xx']['index_prev'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['xx']['index'] - $_smarty_tpl->tpl_vars['smarty']->value['section']['xx']['step'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['xx']['index_next'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['xx']['index'] + $_smarty_tpl->tpl_vars['smarty']->value['section']['xx']['step'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['xx']['first']      = ($_smarty_tpl->tpl_vars['smarty']->value['section']['xx']['iteration'] == 1);
$_smarty_tpl->tpl_vars['smarty']->value['section']['xx']['last']       = ($_smarty_tpl->tpl_vars['smarty']->value['section']['xx']['iteration'] == $_smarty_tpl->tpl_vars['smarty']->value['section']['xx']['total']);
?>
											<li><a class="linkmodule"
														href="<?php echo smarty_modifier_escape($_smarty_tpl->tpl_vars['tracker']->value['list'][$_smarty_tpl->getVariable('smarty')->value['section']['xx']['index']]['href']);?>
"
														title="<?php echo smarty_modifier_escape($_smarty_tpl->tpl_vars['tracker']->value['list'][$_smarty_tpl->getVariable('smarty')->value['section']['xx']['index']]['title']);?>
"><?php if ($_smarty_tpl->tpl_vars['tracker']->value['list'][$_smarty_tpl->getVariable('smarty')->value['section']['xx']['index']]['label']=='') {?>-<?php } else {
echo smarty_modifier_escape($_smarty_tpl->tpl_vars['tracker']->value['list'][$_smarty_tpl->getVariable('smarty')->value['section']['xx']['index']]['label']);
}?>
													</a>
											</li>
										<?php endfor; endif; ?>
										<?php if ($_smarty_tpl->tpl_vars['nonums']->value!='y') {?></ol><?php } else { ?></ul><?php }?>
									</div>
								</div>
							<?php } ?>
							
						</div>
					<?php } else { ?>
						<div id="<?php echo $_smarty_tpl->tpl_vars['cname']->value;?>
" style="display:<?php if (!isset($_smarty_tpl->tpl_vars['cookie']->value[$_smarty_tpl->tpl_vars['showcname']->value])||$_smarty_tpl->tpl_vars['cookie']->value[$_smarty_tpl->tpl_vars['showcname']->value]=='y') {
echo $_smarty_tpl->tpl_vars['default_folding']->value;
} else {
echo $_smarty_tpl->tpl_vars['opposite_folding']->value;
}?>;">
							<?php if ($_smarty_tpl->tpl_vars['nonums']->value!='y') {?><ol><?php } else { ?><ul><?php }?>
							<?php if (isset($_smarty_tpl->tpl_vars['smarty']->value['section']['ix'])) unset($_smarty_tpl->tpl_vars['smarty']->value['section']['ix']);
$_smarty_tpl->tpl_vars['smarty']->value['section']['ix']['name'] = 'ix';
$_smarty_tpl->tpl_vars['smarty']->value['section']['ix']['loop'] = is_array($_loop=$_smarty_tpl->tpl_vars['slvn_item']->value['list']) ? count($_loop) : max(0, (int) $_loop); unset($_loop);
$_smarty_tpl->tpl_vars['smarty']->value['section']['ix']['show'] = true;
$_smarty_tpl->tpl_vars['smarty']->value['section']['ix']['max'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['ix']['loop'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['ix']['step'] = 1;
$_smarty_tpl->tpl_vars['smarty']->value['section']['ix']['start'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['ix']['step'] > 0 ? 0 : $_smarty_tpl->tpl_vars['smarty']->value['section']['ix']['loop']-1;
if ($_smarty_tpl->tpl_vars['smarty']->value['section']['ix']['show']) {
    $_smarty_tpl->tpl_vars['smarty']->value['section']['ix']['total'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['ix']['loop'];
    if ($_smarty_tpl->tpl_vars['smarty']->value['section']['ix']['total'] == 0)
        $_smarty_tpl->tpl_vars['smarty']->value['section']['ix']['show'] = false;
} else
    $_smarty_tpl->tpl_vars['smarty']->value['section']['ix']['total'] = 0;
if ($_smarty_tpl->tpl_vars['smarty']->value['section']['ix']['show']):

            for ($_smarty_tpl->tpl_vars['smarty']->value['section']['ix']['index'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['ix']['start'], $_smarty_tpl->tpl_vars['smarty']->value['section']['ix']['iteration'] = 1;
                 $_smarty_tpl->tpl_vars['smarty']->value['section']['ix']['iteration'] <= $_smarty_tpl->tpl_vars['smarty']->value['section']['ix']['total'];
                 $_smarty_tpl->tpl_vars['smarty']->value['section']['ix']['index'] += $_smarty_tpl->tpl_vars['smarty']->value['section']['ix']['step'], $_smarty_tpl->tpl_vars['smarty']->value['section']['ix']['iteration']++):
$_smarty_tpl->tpl_vars['smarty']->value['section']['ix']['rownum'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['ix']['iteration'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['ix']['index_prev'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['ix']['index'] - $_smarty_tpl->tpl_vars['smarty']->value['section']['ix']['step'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['ix']['index_next'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['ix']['index'] + $_smarty_tpl->tpl_vars['smarty']->value['section']['ix']['step'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['ix']['first']      = ($_smarty_tpl->tpl_vars['smarty']->value['section']['ix']['iteration'] == 1);
$_smarty_tpl->tpl_vars['smarty']->value['section']['ix']['last']       = ($_smarty_tpl->tpl_vars['smarty']->value['section']['ix']['iteration'] == $_smarty_tpl->tpl_vars['smarty']->value['section']['ix']['total']);
?>
								<li>
									<a class="linkmodule"
										href="<?php echo smarty_modifier_escape($_smarty_tpl->tpl_vars['slvn_item']->value['list'][$_smarty_tpl->getVariable('smarty')->value['section']['ix']['index']]['href']);?>
"
										title="<?php echo smarty_modifier_escape($_smarty_tpl->tpl_vars['slvn_item']->value['list'][$_smarty_tpl->getVariable('smarty')->value['section']['ix']['index']]['title']);?>
"
									>
										<?php if ($_smarty_tpl->tpl_vars['slvn_item']->value['list'][$_smarty_tpl->getVariable('smarty')->value['section']['ix']['index']]['label']=='') {?>-<?php } else {
echo smarty_modifier_escape($_smarty_tpl->tpl_vars['slvn_item']->value['list'][$_smarty_tpl->getVariable('smarty')->value['section']['ix']['index']]['label']);
}?>
									</a>
								</li>
							<?php endfor; endif; ?>
							<?php if ($_smarty_tpl->tpl_vars['nonums']->value!='y') {?></ol><?php } else { ?></ul><?php }?>
						</div>
					<?php }?>
					<?php if ($_smarty_tpl->tpl_vars['use_jquery_ui']->value=="y") {?>
						</div>
						<?php $_smarty_tpl->tpl_vars['fragment'] = new Smarty_variable($_smarty_tpl->tpl_vars['fragment']->value+1, null, 0);?>
					<?php }?>
				<?php }?>
			<?php } ?>
			</div>
		<?php }?>
	<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_tikimodule(array('error'=>$_smarty_tpl->tpl_vars['module_params']->value['error'],'title'=>$_smarty_tpl->tpl_vars['tpl_module_title']->value,'name'=>"since_last_visit_new",'flip'=>$_smarty_tpl->tpl_vars['module_params']->value['flip'],'decorations'=>$_smarty_tpl->tpl_vars['module_params']->value['decorations'],'nobox'=>$_smarty_tpl->tpl_vars['module_params']->value['nobox'],'notitle'=>$_smarty_tpl->tpl_vars['module_params']->value['notitle']), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_tag_stack);?>

<?php }?>
<?php }} ?>
