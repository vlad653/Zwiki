<?php /* Smarty version Smarty-3.1.21, created on 2017-09-20 22:01:05
         compiled from "/var/www/html/Zwiki/templates/tiki-searchresults.tpl" */ ?>
<?php /*%%SmartyHeaderCode:174290305159c2e5219f46c8-20999678%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'b95bb4082eeaee506ac295e72ce3317e943ff6b6' => 
    array (
      0 => '/var/www/html/Zwiki/templates/tiki-searchresults.tpl',
      1 => 1464964547,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '174290305159c2e5219f46c8-20999678',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'searchStyle' => 0,
    'prefs' => 0,
    'where_list' => 0,
    'where' => 0,
    'k' => 0,
    'iSearch' => 0,
    'words' => 0,
    'boolean' => 0,
    'date' => 0,
    'languages' => 0,
    'searchLang' => 0,
    'categories' => 0,
    'tiki_p_view_category' => 0,
    'findSelectedCategoriesNumber' => 0,
    'find_categId' => 0,
    'catix' => 0,
    'cat_tree' => 0,
    'tiki_p_admin_categories' => 0,
    'name' => 0,
    'forumId' => 0,
    'searchNoResults' => 0,
    'where_forum' => 0,
    'cant' => 0,
    'where_label' => 0,
    'results' => 0,
    'page_in_structure' => 0,
    'page_alias' => 0,
    'maxRecords' => 0,
    'offset' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.21',
  'unifunc' => 'content_59c2e521a58e30_81465622',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_59c2e521a58e30_81465622')) {function content_59c2e521a58e30_81465622($_smarty_tpl) {?><?php if (!is_callable('smarty_block_title')) include '/var/www/html/Zwiki/lib/smarty_tiki/block.title.php';
if (!is_callable('smarty_function_button')) include '/var/www/html/Zwiki/lib/smarty_tiki/function.button.php';
if (!is_callable('smarty_function_autocomplete')) include '/var/www/html/Zwiki/lib/smarty_tiki/function.autocomplete.php';
if (!is_callable('smarty_function_bootstrap_modal')) include '/var/www/html/Zwiki/lib/smarty_tiki/function.bootstrap_modal.php';
if (!is_callable('smarty_function_icon')) include '/var/www/html/Zwiki/lib/smarty_tiki/function.icon.php';
if (!is_callable('smarty_block_tr')) include '/var/www/html/Zwiki/lib/smarty_tiki/block.tr.php';
if (!is_callable('smarty_function_select_all')) include '/var/www/html/Zwiki/lib/smarty_tiki/function.select_all.php';
if (!is_callable('smarty_function_page_in_structure')) include '/var/www/html/Zwiki/lib/smarty_tiki/function.page_in_structure.php';
if (!is_callable('smarty_function_page_alias')) include '/var/www/html/Zwiki/lib/smarty_tiki/function.page_alias.php';
if (!is_callable('smarty_modifier_tiki_long_datetime')) include '/var/www/html/Zwiki/lib/smarty_tiki/modifier.tiki_long_datetime.php';
if (!is_callable('smarty_block_pagination_links')) include '/var/www/html/Zwiki/lib/smarty_tiki/block.pagination_links.php';
?>

<?php if (!($_smarty_tpl->tpl_vars['searchStyle']->value=="menu")) {?>
	<?php $_smarty_tpl->smarty->_tag_stack[] = array('title', array('admpage'=>"search",'help'=>"Search")); $_block_repeat=true; echo smarty_block_title(array('admpage'=>"search",'help'=>"Search"), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
Поиск<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_title(array('admpage'=>"search",'help'=>"Search"), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_tag_stack);?>

<?php }?>

<div class="margin-bottom-md nohighlight">
	<?php if ($_smarty_tpl->tpl_vars['searchStyle']->value!="menu"&&$_smarty_tpl->tpl_vars['prefs']->value['feature_search_show_object_filter']=='y') {?>
		<div class="t_navbar margin-bottom-sm">
			Искать в:
			<?php  $_smarty_tpl->tpl_vars['name'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['name']->_loop = false;
 $_smarty_tpl->tpl_vars['k'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['where_list']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['name']->key => $_smarty_tpl->tpl_vars['name']->value) {
$_smarty_tpl->tpl_vars['name']->_loop = true;
 $_smarty_tpl->tpl_vars['k']->value = $_smarty_tpl->tpl_vars['name']->key;
?>
				<?php ob_start();
if ($_smarty_tpl->tpl_vars['where']->value==$_smarty_tpl->tpl_vars['k']->value) {?><?php echo "y";?><?php } else { ?><?php echo "n";?><?php }
$_tmp1=ob_get_clean();?><?php echo smarty_function_button(array('_auto_args'=>'where,highlight','href'=>"tiki-searchresults.php?where=".((string)$_smarty_tpl->tpl_vars['k']->value),'_selected'=>$_tmp1,'_selected_class'=>"highlight",'class'=>"btn btn-default",'_text'=>((string)$_smarty_tpl->tpl_vars['name']->value)),$_smarty_tpl);?>

			<?php } ?>
		</div>
	<?php }?>

	<?php if ($_smarty_tpl->tpl_vars['prefs']->value['feature_search_show_search_box']=='y'||$_smarty_tpl->tpl_vars['searchStyle']->value=="menu") {?>
		<form action="tiki-searchresults.php" method="get" id="search-form" class="form-inline" role="form">
			<div class="form-group">
				<label class="sr-only">Поиск</label>
				<input id="highlight<?php echo $_smarty_tpl->tpl_vars['iSearch']->value;?>
" name="highlight" class="form-control" type="text" accesskey="s" placeholder="Поиск" value="<?php echo smarty_modifier_escape($_smarty_tpl->tpl_vars['words']->value);?>
">
				<!--/div-->
				<?php if ($_smarty_tpl->tpl_vars['prefs']->value['search_autocomplete']=='y') {?>
					<?php echo smarty_function_autocomplete(array('element'=>"#highlight".((string)$_smarty_tpl->tpl_vars['iSearch']->value),'type'=>'pagename'),$_smarty_tpl);?>

				<?php }?>
			</div>
			<?php if (!($_smarty_tpl->tpl_vars['searchStyle']->value=="menu")) {?>
				<div class="form-group">
					<label class="searchboolean control-label" for="boolean">
						Advanced search: <input type="checkbox" name="boolean" id="boolean" <?php if ($_smarty_tpl->tpl_vars['boolean']->value=='y') {?> checked="checked"<?php }?>>
					</label>
					<a href="<?php echo smarty_function_bootstrap_modal(array('controller'=>'search','action'=>'help'),$_smarty_tpl);?>
">Search Help <?php echo smarty_function_icon(array('name'=>'help'),$_smarty_tpl);?>
</a>
				</div>

				<?php if ($_smarty_tpl->tpl_vars['prefs']->value['feature_search_show_last_modification']=='y') {?>
					<div class="form-group">
						<label class="searchdate control-label" for="date">Date Search:</label>
						<select id="date" class="form-control" name="date" onchange="javascript:submit()">
							<?php if (isset($_smarty_tpl->tpl_vars['smarty']->value['section']['date'])) unset($_smarty_tpl->tpl_vars['smarty']->value['section']['date']);
$_smarty_tpl->tpl_vars['smarty']->value['section']['date']['name'] = 'date';
$_smarty_tpl->tpl_vars['smarty']->value['section']['date']['start'] = (int) 0;
$_smarty_tpl->tpl_vars['smarty']->value['section']['date']['loop'] = is_array($_loop=12) ? count($_loop) : max(0, (int) $_loop); unset($_loop);
$_smarty_tpl->tpl_vars['smarty']->value['section']['date']['step'] = ((int) 1) == 0 ? 1 : (int) 1;
$_smarty_tpl->tpl_vars['smarty']->value['section']['date']['show'] = true;
$_smarty_tpl->tpl_vars['smarty']->value['section']['date']['max'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['date']['loop'];
if ($_smarty_tpl->tpl_vars['smarty']->value['section']['date']['start'] < 0)
    $_smarty_tpl->tpl_vars['smarty']->value['section']['date']['start'] = max($_smarty_tpl->tpl_vars['smarty']->value['section']['date']['step'] > 0 ? 0 : -1, $_smarty_tpl->tpl_vars['smarty']->value['section']['date']['loop'] + $_smarty_tpl->tpl_vars['smarty']->value['section']['date']['start']);
else
    $_smarty_tpl->tpl_vars['smarty']->value['section']['date']['start'] = min($_smarty_tpl->tpl_vars['smarty']->value['section']['date']['start'], $_smarty_tpl->tpl_vars['smarty']->value['section']['date']['step'] > 0 ? $_smarty_tpl->tpl_vars['smarty']->value['section']['date']['loop'] : $_smarty_tpl->tpl_vars['smarty']->value['section']['date']['loop']-1);
if ($_smarty_tpl->tpl_vars['smarty']->value['section']['date']['show']) {
    $_smarty_tpl->tpl_vars['smarty']->value['section']['date']['total'] = min(ceil(($_smarty_tpl->tpl_vars['smarty']->value['section']['date']['step'] > 0 ? $_smarty_tpl->tpl_vars['smarty']->value['section']['date']['loop'] - $_smarty_tpl->tpl_vars['smarty']->value['section']['date']['start'] : $_smarty_tpl->tpl_vars['smarty']->value['section']['date']['start']+1)/abs($_smarty_tpl->tpl_vars['smarty']->value['section']['date']['step'])), $_smarty_tpl->tpl_vars['smarty']->value['section']['date']['max']);
    if ($_smarty_tpl->tpl_vars['smarty']->value['section']['date']['total'] == 0)
        $_smarty_tpl->tpl_vars['smarty']->value['section']['date']['show'] = false;
} else
    $_smarty_tpl->tpl_vars['smarty']->value['section']['date']['total'] = 0;
if ($_smarty_tpl->tpl_vars['smarty']->value['section']['date']['show']):

            for ($_smarty_tpl->tpl_vars['smarty']->value['section']['date']['index'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['date']['start'], $_smarty_tpl->tpl_vars['smarty']->value['section']['date']['iteration'] = 1;
                 $_smarty_tpl->tpl_vars['smarty']->value['section']['date']['iteration'] <= $_smarty_tpl->tpl_vars['smarty']->value['section']['date']['total'];
                 $_smarty_tpl->tpl_vars['smarty']->value['section']['date']['index'] += $_smarty_tpl->tpl_vars['smarty']->value['section']['date']['step'], $_smarty_tpl->tpl_vars['smarty']->value['section']['date']['iteration']++):
$_smarty_tpl->tpl_vars['smarty']->value['section']['date']['rownum'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['date']['iteration'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['date']['index_prev'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['date']['index'] - $_smarty_tpl->tpl_vars['smarty']->value['section']['date']['step'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['date']['index_next'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['date']['index'] + $_smarty_tpl->tpl_vars['smarty']->value['section']['date']['step'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['date']['first']      = ($_smarty_tpl->tpl_vars['smarty']->value['section']['date']['iteration'] == 1);
$_smarty_tpl->tpl_vars['smarty']->value['section']['date']['last']       = ($_smarty_tpl->tpl_vars['smarty']->value['section']['date']['iteration'] == $_smarty_tpl->tpl_vars['smarty']->value['section']['date']['total']);
?>
								<option value="<?php echo smarty_modifier_escape($_smarty_tpl->getVariable('smarty')->value['section']['date']['index']);?>
" <?php if ($_smarty_tpl->getVariable('smarty')->value['section']['date']['index']==$_smarty_tpl->tpl_vars['date']->value) {?>selected="selected"<?php }?>>
									<?php if ($_smarty_tpl->getVariable('smarty')->value['section']['date']['index']==0) {?>
										Все даты
									<?php } else { ?>
										<?php echo smarty_modifier_escape($_smarty_tpl->getVariable('smarty')->value['section']['date']['index']);?>
 Месяц
									<?php }?>
								</option>
							<?php endfor; endif; ?>
						</select>
					</div>
				<?php }?>

				<?php if ($_smarty_tpl->tpl_vars['prefs']->value['feature_multilingual']=='y'&&($_smarty_tpl->tpl_vars['where']->value=='wikis'||$_smarty_tpl->tpl_vars['where']->value=='articles')) {?>
					<label class="searchLang" for="searchLang">
						<select id="searchLang" name="searchLang">
							<option value="" >любой язык</option>
							<?php if (isset($_smarty_tpl->tpl_vars['smarty']->value['section']['ix'])) unset($_smarty_tpl->tpl_vars['smarty']->value['section']['ix']);
$_smarty_tpl->tpl_vars['smarty']->value['section']['ix']['name'] = 'ix';
$_smarty_tpl->tpl_vars['smarty']->value['section']['ix']['loop'] = is_array($_loop=$_smarty_tpl->tpl_vars['languages']->value) ? count($_loop) : max(0, (int) $_loop); unset($_loop);
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
								<option value="<?php echo smarty_modifier_escape($_smarty_tpl->tpl_vars['languages']->value[$_smarty_tpl->getVariable('smarty')->value['section']['ix']['index']]['value']);?>
" <?php if ($_smarty_tpl->tpl_vars['searchLang']->value==$_smarty_tpl->tpl_vars['languages']->value[$_smarty_tpl->getVariable('smarty')->value['section']['ix']['index']]['value']) {?>selected="selected"<?php }?>>
									<?php $_smarty_tpl->smarty->_tag_stack[] = array('tr', array()); $_block_repeat=true; echo smarty_block_tr(array(), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();
echo $_smarty_tpl->tpl_vars['languages']->value[$_smarty_tpl->getVariable('smarty')->value['section']['ix']['index']]['name'];
$_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_tr(array(), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_tag_stack);?>

								</option>
							<?php endfor; endif; ?>
						</select>
					</label>
				<?php }?>

				<?php if ($_smarty_tpl->tpl_vars['prefs']->value['feature_categories']=='y'&&!empty($_smarty_tpl->tpl_vars['categories']->value)&&$_smarty_tpl->tpl_vars['tiki_p_view_category']->value=='y'&&$_smarty_tpl->tpl_vars['prefs']->value['search_show_category_filter']=='y') {?>
					<div id="category_singleselect_find" style="display: <?php if ($_smarty_tpl->tpl_vars['findSelectedCategoriesNumber']->value>1) {?>none<?php } else { ?>block<?php }?>;">
						<label class="findcateg">
							<select name="categId">
								<option value='' <?php if ($_smarty_tpl->tpl_vars['find_categId']->value=='') {?>selected="selected"<?php }?>>любая категория</option>
								<?php  $_smarty_tpl->tpl_vars['catix'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['catix']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['categories']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['catix']->key => $_smarty_tpl->tpl_vars['catix']->value) {
$_smarty_tpl->tpl_vars['catix']->_loop = true;
?>
									<option value="<?php echo smarty_modifier_escape($_smarty_tpl->tpl_vars['catix']->value['categId']);?>
" <?php if ($_smarty_tpl->tpl_vars['find_categId']->value==$_smarty_tpl->tpl_vars['catix']->value['categId']) {?>selected="selected"<?php }?>>
										<?php $_smarty_tpl->_capture_stack[0][] = array('default', null, null); ob_start();
$_smarty_tpl->smarty->_tag_stack[] = array('tr', array()); $_block_repeat=true; echo smarty_block_tr(array(), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();
echo $_smarty_tpl->tpl_vars['catix']->value['categpath'];
$_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_tr(array(), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_tag_stack);
list($_capture_buffer, $_capture_assign, $_capture_append) = array_pop($_smarty_tpl->_capture_stack[0]);
if (!empty($_capture_buffer)) {
 if (isset($_capture_assign)) $_smarty_tpl->assign($_capture_assign, ob_get_contents());
 if (isset( $_capture_append)) $_smarty_tpl->append( $_capture_append, ob_get_contents());
 Smarty::$_smarty_vars['capture'][$_capture_buffer]=ob_get_clean();
} else $_smarty_tpl->capture_error();
echo smarty_modifier_escape(Smarty::$_smarty_vars['capture']['default']);?>

									</option>
								<?php } ?>
							</select>
						</label>
						<?php if ($_smarty_tpl->tpl_vars['prefs']->value['javascript_enabled']=='y') {?><a href="#" onclick="show('category_multiselect_find');hide('category_singleselect_find');">Multiple select</a><?php }?>
					</div>

					<div id="category_multiselect_find" style="display: <?php if ($_smarty_tpl->tpl_vars['findSelectedCategoriesNumber']->value>1) {?>block<?php } else { ?>none<?php }?>;">
						<div class="multiselect">
							<?php if (count($_smarty_tpl->tpl_vars['categories']->value)>0) {?>
								<?php echo $_smarty_tpl->tpl_vars['cat_tree']->value;?>

								<div class="clearfix">
									<?php if ($_smarty_tpl->tpl_vars['tiki_p_admin_categories']->value=='y') {?>
										<div class="pull-right"><a href="tiki-admin_categories.php" class="link">Администрирование категорий <?php echo smarty_function_icon(array('name'=>'wrench'),$_smarty_tpl);?>
</a></div>
									<?php }?>
									<?php echo smarty_function_select_all(array('checkbox_names'=>'cat_categories[]','label'=>"Отметить/снять все категории"),$_smarty_tpl);?>

								</div>
							<?php } else { ?>
								<div class="clearfix">
									<?php if ($_smarty_tpl->tpl_vars['tiki_p_admin_categories']->value=='y') {?>
										<div class="pull-right"><a href="tiki-admin_categories.php" class="link">Администрирование категорий <?php echo smarty_function_icon(array('name'=>'wrench'),$_smarty_tpl);?>
</a></div>
									<?php }?>
									Категории не определены
								</div>
							<?php }?>
						</div> 
					</div> 
				<?php }?>
			<?php }?>

			<?php if ($_smarty_tpl->tpl_vars['prefs']->value['feature_search_show_object_filter']=='y') {?>
				<?php if ($_smarty_tpl->tpl_vars['searchStyle']->value=="menu") {?>
					<span class='searchMenu'>
						в
						<select name="where">
							<?php if (empty($_smarty_tpl->tpl_vars['where_list']->value)) {?> 
								<option value="pages">Весь сайт</option>
								<?php if ($_smarty_tpl->tpl_vars['prefs']->value['feature_wiki']=='y') {?>
									<option value="wikis">Wiki страницы</option>
								<?php }?>
								<?php if ($_smarty_tpl->tpl_vars['prefs']->value['feature_calendar']=='y') {?>
									<option value="calendars">Calendar Items</option>
								<?php }?>
								<?php if ($_smarty_tpl->tpl_vars['prefs']->value['feature_galleries']=='y') {?>
									<option value="galleries">Галереи</option>
									<option value="images">Изображения</option>
								<?php }?>
								<?php if ($_smarty_tpl->tpl_vars['prefs']->value['feature_file_galleries']=='y') {?>
									<option value="files">Файлы</option>
								<?php }?>
								<?php if ($_smarty_tpl->tpl_vars['prefs']->value['feature_forums']=='y') {?>
									<option value="forums">Форумы</option>
								<?php }?>
								<?php if ($_smarty_tpl->tpl_vars['prefs']->value['feature_faqs']=='y') {?>
									<option value="faqs">ЧаВо</option>
								<?php }?>
								<?php if ($_smarty_tpl->tpl_vars['prefs']->value['feature_blogs']=='y') {?>
									<option value="blogs">Блоги</option>
									<option value="posts">Сообщения в блоге</option>
								<?php }?>
								<?php if ($_smarty_tpl->tpl_vars['prefs']->value['feature_directory']=='y') {?>
									<option value="directory">Каталог ссылок</option>
								<?php }?>
								<?php if ($_smarty_tpl->tpl_vars['prefs']->value['feature_articles']=='y') {?>
									<option value="articles">Статьи</option>
								<?php }?>
								<?php if ($_smarty_tpl->tpl_vars['prefs']->value['feature_trackers']=='y') {?>
									<option value="trackers">Трекеры</option>
								<?php }?>
							<?php } else { ?>
								<?php  $_smarty_tpl->tpl_vars['name'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['name']->_loop = false;
 $_smarty_tpl->tpl_vars['k'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['where_list']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['name']->key => $_smarty_tpl->tpl_vars['name']->value) {
$_smarty_tpl->tpl_vars['name']->_loop = true;
 $_smarty_tpl->tpl_vars['k']->value = $_smarty_tpl->tpl_vars['name']->key;
?>
									<option value="<?php echo smarty_modifier_escape($_smarty_tpl->tpl_vars['k']->value);?>
"><?php echo smarty_modifier_escape($_smarty_tpl->tpl_vars['name']->value);?>
</option>
								<?php } ?>
							<?php }?>
						</select>
					</span>
				<?php } else { ?>
					<input type="hidden" name="where" value="<?php echo smarty_modifier_escape($_smarty_tpl->tpl_vars['where']->value);?>
">
					<?php if ($_smarty_tpl->tpl_vars['forumId']->value) {?><input type="hidden" name="forumId" value="<?php echo smarty_modifier_escape($_smarty_tpl->tpl_vars['forumId']->value);?>
"><?php }?>
				<?php }?>
			<?php } elseif (!empty($_smarty_tpl->tpl_vars['where']->value)) {?>
				<input type="hidden" name="where" value="<?php echo smarty_modifier_escape($_smarty_tpl->tpl_vars['where']->value);?>
">
				<?php if ($_smarty_tpl->tpl_vars['forumId']->value) {?><input type="hidden" name="forumId" value="<?php echo smarty_modifier_escape($_smarty_tpl->tpl_vars['forumId']->value);?>
"><?php }?>
			<?php }?>
			<label class="findsubmit">
				<input type="submit" class="btn btn-default" name="search" value="Вперед">
			</label>
			<?php if (!$_smarty_tpl->tpl_vars['searchNoResults']->value) {?>
				<?php echo smarty_function_button(array('_auto_args'=>'highlight','href'=>"tiki-searchresults.php?highlight=",'_text'=>"Очистить фильтр"),$_smarty_tpl);?>

			<?php }?>
		</form>
	<?php }?>
</div><!--nohighlight-->


<?php if ($_smarty_tpl->tpl_vars['searchStyle']->value!='menu'&&!$_smarty_tpl->tpl_vars['searchNoResults']->value) {?>
	<div class="nohighlight simplebox" style="width:300px">
		Найдено "<?php echo smarty_modifier_escape($_smarty_tpl->tpl_vars['words']->value);?>
" в
		<?php if ($_smarty_tpl->tpl_vars['where_forum']->value) {?>
			"<?php $_smarty_tpl->smarty->_tag_stack[] = array('tr', array()); $_block_repeat=true; echo smarty_block_tr(array(), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();
echo smarty_modifier_escape($_smarty_tpl->tpl_vars['where']->value);?>
:<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_tr(array(), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_tag_stack);?>
" <?php echo smarty_modifier_escape($_smarty_tpl->tpl_vars['where_forum']->value);?>

		<?php } else { ?>
			<?php echo $_smarty_tpl->tpl_vars['cant']->value;?>
 "<?php echo smarty_modifier_escape($_smarty_tpl->tpl_vars['where_label']->value);?>
“
		<?php }?>
	</div><!--nohighlight-->
<?php }?>

<?php if (!$_smarty_tpl->tpl_vars['searchNoResults']->value) {?>
	<ul class="searchresults">
		<?php if (isset($_smarty_tpl->tpl_vars['smarty']->value['section']['search'])) unset($_smarty_tpl->tpl_vars['smarty']->value['section']['search']);
$_smarty_tpl->tpl_vars['smarty']->value['section']['search']['name'] = 'search';
$_smarty_tpl->tpl_vars['smarty']->value['section']['search']['loop'] = is_array($_loop=$_smarty_tpl->tpl_vars['results']->value) ? count($_loop) : max(0, (int) $_loop); unset($_loop);
$_smarty_tpl->tpl_vars['smarty']->value['section']['search']['show'] = true;
$_smarty_tpl->tpl_vars['smarty']->value['section']['search']['max'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['search']['loop'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['search']['step'] = 1;
$_smarty_tpl->tpl_vars['smarty']->value['section']['search']['start'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['search']['step'] > 0 ? 0 : $_smarty_tpl->tpl_vars['smarty']->value['section']['search']['loop']-1;
if ($_smarty_tpl->tpl_vars['smarty']->value['section']['search']['show']) {
    $_smarty_tpl->tpl_vars['smarty']->value['section']['search']['total'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['search']['loop'];
    if ($_smarty_tpl->tpl_vars['smarty']->value['section']['search']['total'] == 0)
        $_smarty_tpl->tpl_vars['smarty']->value['section']['search']['show'] = false;
} else
    $_smarty_tpl->tpl_vars['smarty']->value['section']['search']['total'] = 0;
if ($_smarty_tpl->tpl_vars['smarty']->value['section']['search']['show']):

            for ($_smarty_tpl->tpl_vars['smarty']->value['section']['search']['index'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['search']['start'], $_smarty_tpl->tpl_vars['smarty']->value['section']['search']['iteration'] = 1;
                 $_smarty_tpl->tpl_vars['smarty']->value['section']['search']['iteration'] <= $_smarty_tpl->tpl_vars['smarty']->value['section']['search']['total'];
                 $_smarty_tpl->tpl_vars['smarty']->value['section']['search']['index'] += $_smarty_tpl->tpl_vars['smarty']->value['section']['search']['step'], $_smarty_tpl->tpl_vars['smarty']->value['section']['search']['iteration']++):
$_smarty_tpl->tpl_vars['smarty']->value['section']['search']['rownum'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['search']['iteration'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['search']['index_prev'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['search']['index'] - $_smarty_tpl->tpl_vars['smarty']->value['section']['search']['step'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['search']['index_next'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['search']['index'] + $_smarty_tpl->tpl_vars['smarty']->value['section']['search']['step'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['search']['first']      = ($_smarty_tpl->tpl_vars['smarty']->value['section']['search']['iteration'] == 1);
$_smarty_tpl->tpl_vars['smarty']->value['section']['search']['last']       = ($_smarty_tpl->tpl_vars['smarty']->value['section']['search']['iteration'] == $_smarty_tpl->tpl_vars['smarty']->value['section']['search']['total']);
?>
			<li>
				<?php if ($_smarty_tpl->tpl_vars['prefs']->value['feature_search_show_object_type']=='y'&&$_smarty_tpl->tpl_vars['results']->value[$_smarty_tpl->getVariable('smarty')->value['section']['search']['index']]['type']>'') {?>
					<span class="objecttype"><?php $_smarty_tpl->smarty->_tag_stack[] = array('tr', array()); $_block_repeat=true; echo smarty_block_tr(array(), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();
echo smarty_modifier_escape($_smarty_tpl->tpl_vars['results']->value[$_smarty_tpl->getVariable('smarty')->value['section']['search']['index']]['type']);
$_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_tr(array(), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_tag_stack);?>
</span>
				<?php }?>
				<?php if (!empty($_smarty_tpl->tpl_vars['results']->value[$_smarty_tpl->getVariable('smarty',null,true,false)->value['section']['search']['index']]['parentName'])) {?>
						<a href="<?php echo $_smarty_tpl->tpl_vars['results']->value[$_smarty_tpl->getVariable('smarty')->value['section']['search']['index']]['parentHref'];?>
" class="parentname"><?php echo smarty_modifier_escape($_smarty_tpl->tpl_vars['results']->value[$_smarty_tpl->getVariable('smarty')->value['section']['search']['index']]['parentName']);?>
</a>
				<?php }?>
				<?php echo smarty_function_page_in_structure(array('pagechecked'=>$_smarty_tpl->tpl_vars['results']->value[$_smarty_tpl->getVariable('smarty')->value['section']['search']['index']]['pageName']),$_smarty_tpl);?>
 
				<?php if ($_smarty_tpl->tpl_vars['page_in_structure']->value) {?> <?php echo smarty_function_page_alias(array('pagechecked'=>$_smarty_tpl->tpl_vars['results']->value[$_smarty_tpl->getVariable('smarty')->value['section']['search']['index']]['pageName']),$_smarty_tpl);?>
 <?php }?>
				<a href="<?php echo $_smarty_tpl->tpl_vars['results']->value[$_smarty_tpl->getVariable('smarty')->value['section']['search']['index']]['href'];?>
" class="objectname"><?php if ($_smarty_tpl->tpl_vars['page_in_structure']->value&&$_smarty_tpl->tpl_vars['page_alias']->value!='') {
echo $_smarty_tpl->tpl_vars['page_alias']->value;
} else {
echo smarty_modifier_escape($_smarty_tpl->tpl_vars['results']->value[$_smarty_tpl->getVariable('smarty')->value['section']['search']['index']]['pageName']);
}?></a>
				<?php if ($_smarty_tpl->tpl_vars['prefs']->value['feature_search_show_visit_count']=='y') {?>
					<span class="itemhits">(Запросы: <?php echo smarty_modifier_escape($_smarty_tpl->tpl_vars['results']->value[$_smarty_tpl->getVariable('smarty')->value['section']['search']['index']]['hits']);?>
)</span>
				<?php }?>

				<?php if ($_smarty_tpl->tpl_vars['prefs']->value['feature_search_show_pertinence']=='y'&&$_smarty_tpl->tpl_vars['prefs']->value['feature_search_fulltext']=='y') {?>
					<span class="itemrelevance">
						<?php if ($_smarty_tpl->tpl_vars['results']->value[$_smarty_tpl->getVariable('smarty')->value['section']['search']['index']]['relevance']<=0) {?>
							(Simple search)
						<?php } else { ?>
							(Отношение к теме: <?php echo $_smarty_tpl->tpl_vars['results']->value[$_smarty_tpl->getVariable('smarty')->value['section']['search']['index']]['relevance'];?>
)
						<?php }?>
					</span>
				<?php }?>

				<div class="searchdesc"><?php if ($_smarty_tpl->tpl_vars['prefs']->value['search_parsed_snippet']=='y') {
echo $_smarty_tpl->tpl_vars['results']->value[$_smarty_tpl->getVariable('smarty')->value['section']['search']['index']]['data'];
} else {
echo smarty_modifier_escape(preg_replace('!<[^>]*?>!', ' ', $_smarty_tpl->tpl_vars['results']->value[$_smarty_tpl->getVariable('smarty')->value['section']['search']['index']]['data']));
}?></div>
				<?php if ($_smarty_tpl->tpl_vars['prefs']->value['feature_search_show_last_modification']=='y') {?>
					<div class="searchdate">Last modification: <?php echo smarty_modifier_tiki_long_datetime($_smarty_tpl->tpl_vars['results']->value[$_smarty_tpl->getVariable('smarty')->value['section']['search']['index']]['lastModif']);?>
</div>
				<?php }?>
			</li>
		<?php endfor; else: ?>
<li>Ни одна страница не соответствует запросу </li>		<?php endif; ?>
	</ul>
	<?php $_smarty_tpl->smarty->_tag_stack[] = array('pagination_links', array('cant'=>$_smarty_tpl->tpl_vars['cant']->value,'step'=>$_smarty_tpl->tpl_vars['maxRecords']->value,'offset'=>$_smarty_tpl->tpl_vars['offset']->value,'_keepall'=>true)); $_block_repeat=true; echo smarty_block_pagination_links(array('cant'=>$_smarty_tpl->tpl_vars['cant']->value,'step'=>$_smarty_tpl->tpl_vars['maxRecords']->value,'offset'=>$_smarty_tpl->tpl_vars['offset']->value,'_keepall'=>true), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();
$_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_pagination_links(array('cant'=>$_smarty_tpl->tpl_vars['cant']->value,'step'=>$_smarty_tpl->tpl_vars['maxRecords']->value,'offset'=>$_smarty_tpl->tpl_vars['offset']->value,'_keepall'=>true), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_tag_stack);?>

<?php }?>
<?php }} ?>
