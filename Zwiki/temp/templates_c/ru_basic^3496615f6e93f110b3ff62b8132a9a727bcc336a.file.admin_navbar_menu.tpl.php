<?php /* Smarty version Smarty-3.1.21, created on 2017-09-20 15:02:27
         compiled from "/var/www/html/Zwiki/templates/admin/admin_navbar_menu.tpl" */ ?>
<?php /*%%SmartyHeaderCode:133301655159c28303a61689-87691112%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '3496615f6e93f110b3ff62b8132a9a727bcc336a' => 
    array (
      0 => '/var/www/html/Zwiki/templates/admin/admin_navbar_menu.tpl',
      1 => 1488328538,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '133301655159c28303a61689-87691112',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'tiki_p_admin' => 0,
    'tiki_p_admin_users' => 0,
    'prefs' => 0,
    'tiki_p_admin_banning' => 0,
    'tiki_p_admin_banners' => 0,
    'tiki_p_admin_comments' => 0,
    'tiki_p_admin_directory_cats' => 0,
    'tiki_p_admin_rssmodules' => 0,
    'tiki_p_view_faqs' => 0,
    'tiki_p_edit_html_pages' => 0,
    'tiki_p_admin_newsletters' => 0,
    'tiki_p_admin_polls' => 0,
    'tiki_p_admin_quizzes' => 0,
    'tiki_p_view_sheet' => 0,
    'tiki_p_admin_surveys' => 0,
    'tiki_p_list_trackers' => 0,
    'tiki_p_view' => 0,
    'tiki_p_edit_content_templates' => 0,
    'tiki_p_admin_contribution' => 0,
    'tiki_p_admin_dynamic' => 0,
    'tiki_p_edit_languages' => 0,
    'tiki_p_live_support_admin' => 0,
    'tiki_p_admin_mailin' => 0,
    'tiki_p_admin_notifications' => 0,
    'tiki_p_edit_menu' => 0,
    'tiki_p_admin_modules' => 0,
    'tiki_p_admin_shoutbox' => 0,
    'tiki_p_admin_toolbars' => 0,
    'tiki_p_plugin_approve' => 0,
    'tiki_p_view_actionlog' => 0,
    'tiki_p_edit_cookies' => 0,
    'tiki_p_create_css' => 0,
    'tiki_p_edit_templates' => 0,
    'tiki_p_admin_importer' => 0,
    'tiki_p_admin_integrator' => 0,
    'tiki_p_view_referer_stats' => 0,
    'tiki_p_clean_cache' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.21',
  'unifunc' => 'content_59c28303ad9632_78172189',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_59c28303ad9632_78172189')) {function content_59c28303ad9632_78172189($_smarty_tpl) {?><?php if (!is_callable('smarty_function_service')) include '/var/www/html/Zwiki/lib/smarty_tiki/function.service.php';
?>
<ul class="nav navbar-nav clearfix">
	<li class="dropdown">
		<a href="#" class="dropdown-toggle" data-toggle="dropdown">Access <b class="caret"></b></a>
		<ul class="dropdown-menu">
			<?php if ($_smarty_tpl->tpl_vars['tiki_p_admin']->value=="y"&&$_smarty_tpl->tpl_vars['tiki_p_admin_users']->value=="y") {?>
				<li><a href="tiki-adminusers.php">Пользователи</a></li>
			<?php }?>
			<?php if ($_smarty_tpl->tpl_vars['tiki_p_admin']->value=="y") {?>
				<li><a href="tiki-admingroups.php">Группы</a></li>
			<?php }?>
			<?php if ($_smarty_tpl->tpl_vars['tiki_p_admin']->value=="y") {?>
				<li><a href="tiki-objectpermissions.php">Права доступа</a></li>
			<?php }?>
			<?php if ($_smarty_tpl->tpl_vars['prefs']->value['feature_banning']=="y"&&$_smarty_tpl->tpl_vars['tiki_p_admin_banning']->value=="y") {?>
				<li class="divider"></li>
				<li><a href="tiki-admin_banning.php">Banning</a></li>
			<?php }?>
		</ul>
	</li>
	<li class="dropdown">
		<a href="#" class="dropdown-toggle" data-toggle="dropdown">Содержимое <b class="caret"></b></a>
		<ul class="dropdown-menu">
			<?php if ($_smarty_tpl->tpl_vars['prefs']->value['feature_articles']=="y") {?>
				<li><a href="tiki-list_articles.php">Статьи</a></li>
			<?php }?>
			<?php if ($_smarty_tpl->tpl_vars['prefs']->value['feature_banners']=="y"&&$_smarty_tpl->tpl_vars['tiki_p_admin_banners']->value=="y") {?>
				<li><a href="tiki-list_banners.php">Баннеры</a></li>
			<?php }?>
			<?php if ($_smarty_tpl->tpl_vars['prefs']->value['feature_blogs']=="y") {?>
				<li><a href="tiki-list_blogs.php">Блоги</a></li>
			<?php }?>
			<?php if ($_smarty_tpl->tpl_vars['prefs']->value['feature_calendar']=="y") {?>
				<li><a href="tiki-admin_calendars.php">Календари</a></li>
			<?php }?>
			<?php if ($_smarty_tpl->tpl_vars['prefs']->value['feature_categories']=="y") {?>
				<li><a href="tiki-admin_categories.php">Категории</a></li>
			<?php }?>
			<?php if ($_smarty_tpl->tpl_vars['tiki_p_admin_comments']->value=="y") {?>
				<li><a href="tiki-list_comments.php">Комментарии</a></li>
			<?php }?>
			<?php if ($_smarty_tpl->tpl_vars['prefs']->value['feature_directory']=="y"&&$_smarty_tpl->tpl_vars['tiki_p_admin_directory_cats']->value=="y") {?>
				<li><a href="tiki-directory_admin.php">Directories</a></li>
			<?php }?>
			<?php if ($_smarty_tpl->tpl_vars['tiki_p_admin_rssmodules']->value=="y") {?>
				<li><a href="tiki-admin_rssmodules.php">External Feeds</a></li>
			<?php }?>
			<?php if ($_smarty_tpl->tpl_vars['prefs']->value['feature_file_galleries']=="y") {?>
				<li><a href="tiki-list_file_gallery.php">Файлы</a></li>
			<?php }?>
			<?php if ($_smarty_tpl->tpl_vars['prefs']->value['feature_faqs']=="y"&&$_smarty_tpl->tpl_vars['tiki_p_view_faqs']->value=="y") {?>
				<li><a href="tiki-list_faqs.php">ЧаВо</a></li>
			<?php }?>
			<?php if ($_smarty_tpl->tpl_vars['prefs']->value['feature_forums']=="y") {?>
				<li><a href="tiki-admin_forums.php">Форумы</a></li>
			<?php }?>
			<?php if ($_smarty_tpl->tpl_vars['prefs']->value['feature_html_pages']=="y"&&$_smarty_tpl->tpl_vars['tiki_p_edit_html_pages']->value=="y") {?>
				<li><a href="tiki-admin_html_pages.php">HTML страницы</a></li>
			<?php }?>
			<?php if ($_smarty_tpl->tpl_vars['prefs']->value['feature_newsletters']=="y"&&$_smarty_tpl->tpl_vars['tiki_p_admin_newsletters']->value=="y") {?>
				<li><a href="tiki-admin_newsletters.php">Рассылки</a></li>
			<?php }?>
			<?php if ($_smarty_tpl->tpl_vars['prefs']->value['feature_polls']=="y"&&$_smarty_tpl->tpl_vars['tiki_p_admin_polls']->value=="y") {?>
				<li><a href="tiki-admin_polls.php">Опросы</a></li>
			<?php }?>
			<?php if ($_smarty_tpl->tpl_vars['prefs']->value['feature_quizzes']=="y"&&$_smarty_tpl->tpl_vars['tiki_p_admin_quizzes']->value=="y") {?>
				<li><a href="tiki-edit_quiz.php">Тесты</a></li>
			<?php }?>
			<?php if ($_smarty_tpl->tpl_vars['prefs']->value['feature_sheet']=="y"&&$_smarty_tpl->tpl_vars['tiki_p_view_sheet']->value=="y") {?>
				<li><a href="tiki-sheets.php">Электронные таблицы</a></li>
			<?php }?>
			<?php if ($_smarty_tpl->tpl_vars['prefs']->value['feature_surveys']=="y"&&$_smarty_tpl->tpl_vars['tiki_p_admin_surveys']->value=="y") {?>
				<li><a href="tiki-admin_surveys.php">Анкетирование</a></li>
			<?php }?>
			<?php if ($_smarty_tpl->tpl_vars['prefs']->value['feature_freetags']=="y") {?>
				<li><a href="tiki-browse_freetags.php">Метки</a></li>
			<?php }?>
			<?php if ($_smarty_tpl->tpl_vars['prefs']->value['feature_trackers']=="y"&&$_smarty_tpl->tpl_vars['tiki_p_list_trackers']->value=="y") {?>
				<li><a href="tiki-list_trackers.php">Трекеры</a></li>
			<?php }?>
			<?php if ($_smarty_tpl->tpl_vars['prefs']->value['feature_wiki']=="y") {?>
				<li><a href="tiki-listpages.php">Wiki страницы</a></li>
			<?php }?>
			<?php if ($_smarty_tpl->tpl_vars['prefs']->value['feature_wiki']=="y"&&$_smarty_tpl->tpl_vars['prefs']->value['feature_wiki_structure']=="y"&&$_smarty_tpl->tpl_vars['tiki_p_view']->value=="y") {?>
				<li><a href="tiki-admin_structures.php">Wiki Structures</a></li>
			<?php }?>
		</ul>
	</li>
	<li class="dropdown">
		<a href="#" class="dropdown-toggle" data-toggle="dropdown">Система <b class="caret"></b></a>
		<ul class="dropdown-menu">
			<?php if ($_smarty_tpl->tpl_vars['tiki_p_admin']->value=="y") {?>
				<li><a href="<?php echo smarty_function_service(array('controller'=>'managestream','action'=>'list'),$_smarty_tpl);?>
">Activity Rules</a></li>
			<?php }?>
			<?php if (($_smarty_tpl->tpl_vars['prefs']->value['feature_wiki_templates']=="y"||$_smarty_tpl->tpl_vars['prefs']->value['feature_cms_templates']=="y")&&$_smarty_tpl->tpl_vars['tiki_p_edit_content_templates']->value=="y") {?>
				<li><a href="tiki-admin_content_templates.php ">Content Templates</a></li>
			<?php }?>
			<?php if ($_smarty_tpl->tpl_vars['prefs']->value['feature_contribution']=="y"&&$_smarty_tpl->tpl_vars['tiki_p_admin_contribution']->value=="y") {?>
				<li><a href="tiki-admin_contribution.php">Взносы</a></li>
			<?php }?>
			<?php if ($_smarty_tpl->tpl_vars['prefs']->value['feature_dynamic_content']=="y"&&$_smarty_tpl->tpl_vars['tiki_p_admin_dynamic']->value=="y") {?>
				<li><a href="tiki-list_contents.php">Динамическое содержимое</a></li>
			<?php }?>
			<?php if ($_smarty_tpl->tpl_vars['prefs']->value['feature_hotwords']=="y") {?>
				<li><a href="tiki-admin_hotwords.php">Горячие слова</a></li>
			<?php }?>
			<?php if ($_smarty_tpl->tpl_vars['prefs']->value['lang_use_db']=="y"&&$_smarty_tpl->tpl_vars['tiki_p_edit_languages']->value=="y") {?>
				<li><a href="tiki-edit_languages.php">Languages</a></li>
			<?php }?>
			<?php if ($_smarty_tpl->tpl_vars['prefs']->value['feature_live_support']=="y"&&$_smarty_tpl->tpl_vars['tiki_p_live_support_admin']->value=="y") {?>
				<li><a href="tiki-live_support_admin.php">Онлайн поддержка</a></li>
			<?php }?>
			<?php if ($_smarty_tpl->tpl_vars['prefs']->value['feature_mailin']=="y"&&$_smarty_tpl->tpl_vars['tiki_p_admin_mailin']->value=="y") {?>
				<li><a href="tiki-admin_mailin.php">Mail-in</a></li>
			<?php }?>
			<?php if ($_smarty_tpl->tpl_vars['tiki_p_admin_notifications']->value=="y") {?>
				<li><a href="tiki-admin_notifications.php">Уведомления почтой</a></li>
			<?php }?>
			<?php if ($_smarty_tpl->tpl_vars['tiki_p_edit_menu']->value=="y") {?>
				<li><a href="tiki-admin_menus.php">Меню</a></li>
			<?php }?>
			<?php if ($_smarty_tpl->tpl_vars['tiki_p_admin_modules']->value=="y") {?>
				<li><a href="tiki-admin_modules.php">Модули</a></li>
			<?php }?>
			<?php if ($_smarty_tpl->tpl_vars['prefs']->value['feature_perspective']=="y") {?>
				<li><a href="tiki-edit_perspective.php">Perspectives</a></li>
			<?php }?>
			<?php if ($_smarty_tpl->tpl_vars['prefs']->value['feature_shoutbox']=="y"&&$_smarty_tpl->tpl_vars['tiki_p_admin_shoutbox']->value=="y") {?>
				<li><a href="tiki-shoutbox.php">Кричалка</a></li>
			<?php }?>
			<?php if ($_smarty_tpl->tpl_vars['prefs']->value['payment_feature']=="y") {?>
				<li><a href="tiki-admin_credits.php">User Credits</a></li>
			<?php }?>
			<?php if ($_smarty_tpl->tpl_vars['prefs']->value['feature_theme_control']=="y"&&$_smarty_tpl->tpl_vars['tiki_p_admin']->value=="y") {?>
				<li><a href="tiki-theme_control.php">Управление темами</a></li>
			<?php }?>
			<?php if ($_smarty_tpl->tpl_vars['tiki_p_admin_toolbars']->value=="y") {?>
				<li><a href="tiki-admin_toolbars.php">Toolbars</a></li>
			<?php }?>
			<?php if ($_smarty_tpl->tpl_vars['tiki_p_admin']->value=="y") {?>
				<li><a href="tiki-admin_transitions.php">Transitions</a></li>
			<?php }?>
			<?php if ($_smarty_tpl->tpl_vars['prefs']->value['workspace_ui']=="y"&&$_smarty_tpl->tpl_vars['tiki_p_admin']->value=="y") {?>
				<li><a href="tiki-ajax_services.php?controller=workspace&action=list_templates">Workspace Templates</a></li>
			<?php }?>
			<li class="divider"></li>
			<?php if ($_smarty_tpl->tpl_vars['tiki_p_plugin_approve']->value=="y") {?>
				<li><a href="tiki-plugins.php">Plugin Approval</a></li>
			<?php }?>
			<li class="divider"></li>
			<li><a href="tiki-mods.php">Модули</a></li>
		</ul>
	</li>
	<li class="dropdown">
		<a href="#" class="dropdown-toggle" data-toggle="dropdown">Tools <b class="caret"></b></a>
		<ul class="dropdown-menu">
			<?php if ($_smarty_tpl->tpl_vars['prefs']->value['feature_actionlog']=="y"&&$_smarty_tpl->tpl_vars['tiki_p_view_actionlog']->value) {?>
				<li><a href="tiki-admin_actionlog.php">Протоколирование</a></li>
			<?php }?>
			<?php if ($_smarty_tpl->tpl_vars['tiki_p_edit_cookies']->value=="y") {?>
				<li><a href="tiki-admin_cookies.php">Cookies</a></li>
			<?php }?>
			<li><a href="tiki-admin_dsn.php">DSN/Content Authentication</a></li>
			<?php if ($_smarty_tpl->tpl_vars['prefs']->value['feature_editcss']=="y"&&$_smarty_tpl->tpl_vars['tiki_p_create_css']->value=="y") {?>
				<li><a href="tiki-edit_css.php">Изменить CSS</a></li>
			<?php }?>
			<?php if ($_smarty_tpl->tpl_vars['prefs']->value['feature_view_tpl']=="y"&&$_smarty_tpl->tpl_vars['prefs']->value['feature_edit_templates']=="y"&&$_smarty_tpl->tpl_vars['tiki_p_edit_templates']->value=="y") {?>
				<li><a href="tiki-edit_templates.php">Edit TPL</a></li>
			<?php }?>
			<?php if ($_smarty_tpl->tpl_vars['prefs']->value['cachepages']=="y"&&$_smarty_tpl->tpl_vars['tiki_p_admin']->value=="y") {?>
				<li><a href="tiki-list_cache.php">External Pages Cache</a></li>
			<?php }?>
			<li><a href="tiki-admin_external_wikis.php">Внешние Wiki</a></li>
			<?php if ($_smarty_tpl->tpl_vars['tiki_p_admin_importer']->value=="y") {?>
				<li><a href="tiki-importer.php">Importer</a></li>
			<?php }?>
			<?php if ($_smarty_tpl->tpl_vars['prefs']->value['feature_integrator']=="y"&&$_smarty_tpl->tpl_vars['tiki_p_admin_integrator']->value=="y") {?>
				<li><a href="tiki-admin_integrator.php">Интегратор</a></li>
			<?php }?>
			<li><a href="tiki-phpinfo.php">PhpInfo</a></li>
			<?php if ($_smarty_tpl->tpl_vars['prefs']->value['feature_referer_stats']=="y"&&$_smarty_tpl->tpl_vars['tiki_p_view_referer_stats']->value=="y") {?>
				<li><a href="tiki-referer_stats.php">Referer Statistics</a></li>
			<?php }?>
			<?php if ($_smarty_tpl->tpl_vars['prefs']->value['feature_search_stats']=="y"&&$_smarty_tpl->tpl_vars['tiki_p_admin']->value=="y") {?>
				<li><a href="tiki-search_stats.php">Search Statistics</a></li>
			<?php }?>
			<li><a href="tiki-admin_security.php">Безопасность</a></li>
			<li><a href="tiki-check.php">Server Check</a></li>
			<?php if ($_smarty_tpl->tpl_vars['tiki_p_clean_cache']->value=="y") {?>
				<li><a href="tiki-admin_system.php">System Cache</a></li>
			<?php }?>
			<li><a href="tiki-syslog.php">System Logs</a></li>
			<li><a href="tiki-admin_schedulers.php ">Scheduler</a></li>
			<li class="divider"></li>
			<li><a href="tiki-wizard_admin.php">Wizards</a></li>
		</ul>
	</li>
</ul>
<?php }} ?>
