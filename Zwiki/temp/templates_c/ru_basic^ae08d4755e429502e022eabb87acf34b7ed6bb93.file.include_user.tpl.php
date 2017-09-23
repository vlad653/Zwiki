<?php /* Smarty version Smarty-3.1.21, created on 2017-09-23 15:30:21
         compiled from "/var/www/html/Zwiki/templates/admin/include_user.tpl" */ ?>
<?php /*%%SmartyHeaderCode:144231865059c67e0ddcacf0-98580848%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'ae08d4755e429502e022eabb87acf34b7ed6bb93' => 
    array (
      0 => '/var/www/html/Zwiki/templates/admin/include_user.tpl',
      1 => 1491117043,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '144231865059c67e0ddcacf0-98580848',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'monitor_command' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.21',
  'unifunc' => 'content_59c67e0ddee154_22007684',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_59c67e0ddee154_22007684')) {function content_59c67e0ddee154_22007684($_smarty_tpl) {?><?php if (!is_callable('smarty_block_tabset')) include '/var/www/html/Zwiki/lib/smarty_tiki/block.tabset.php';
if (!is_callable('smarty_block_tab')) include '/var/www/html/Zwiki/lib/smarty_tiki/block.tab.php';
if (!is_callable('smarty_function_help')) include '/var/www/html/Zwiki/lib/smarty_tiki/function.help.php';
if (!is_callable('smarty_function_preference')) include '/var/www/html/Zwiki/lib/smarty_tiki/function.preference.php';
if (!is_callable('smarty_block_remarksbox')) include '/var/www/html/Zwiki/lib/smarty_tiki/block.remarksbox.php';
?>
<form class="form-horizontal" action="tiki-admin.php?page=user" class="admin" method="post">
	<?php echo $_smarty_tpl->getSubTemplate ('access/include_ticket.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

	<div class="form-group col-lg-12 clearfix">
		<?php echo $_smarty_tpl->getSubTemplate ('admin/include_apply_top.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

	</div>
	<?php $_smarty_tpl->smarty->_tag_stack[] = array('tabset', array('name'=>"admin_user_setting")); $_block_repeat=true; echo smarty_block_tabset(array('name'=>"admin_user_setting"), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>

		<?php $_smarty_tpl->smarty->_tag_stack[] = array('tab', array('name'=>"User Settings")); $_block_repeat=true; echo smarty_block_tab(array('name'=>"User Settings"), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>

			<br>
			<fieldset>
				<legend>
					Настройки пользователя по умолчанию
					<?php echo smarty_function_help(array('url'=>"UsersDefaultPrefs",'desc'=>"Предпочтения пользователей по умолчанию"),$_smarty_tpl);?>

				</legend>
				<div class="adminoptionbox">
					<?php echo smarty_function_preference(array('name'=>'feature_userPreferences'),$_smarty_tpl);?>

					<?php echo smarty_function_preference(array('name'=>'feature_mytiki'),$_smarty_tpl);?>

					<div class="adminoptionboxchild" id="feature_mytiki_childcontainer">
						<legend>My Account Items</legend>
						<?php echo smarty_function_preference(array('name'=>'users_prefs_mytiki_pages'),$_smarty_tpl);?>

						<?php echo smarty_function_preference(array('name'=>'users_prefs_mytiki_blogs'),$_smarty_tpl);?>

						<?php echo smarty_function_preference(array('name'=>'users_prefs_mytiki_gals'),$_smarty_tpl);?>

						<?php echo smarty_function_preference(array('name'=>'users_prefs_mytiki_msgs'),$_smarty_tpl);?>

						<?php echo smarty_function_preference(array('name'=>'users_prefs_mytiki_tasks'),$_smarty_tpl);?>

						<?php echo smarty_function_preference(array('name'=>'users_prefs_mytiki_forum_topics'),$_smarty_tpl);?>

						<?php echo smarty_function_preference(array('name'=>'users_prefs_mytiki_forum_replies'),$_smarty_tpl);?>

						<?php echo smarty_function_preference(array('name'=>'users_prefs_mytiki_items'),$_smarty_tpl);?>

					</div>
					<?php echo smarty_function_preference(array('name'=>'users_prefs_display_timezone'),$_smarty_tpl);?>

					<?php echo smarty_function_preference(array('name'=>'users_prefs_display_12hr_clock'),$_smarty_tpl);?>

					<?php echo smarty_function_preference(array('name'=>'change_theme'),$_smarty_tpl);?>

					<?php echo smarty_function_preference(array('name'=>'users_prefs_userbreadCrumb'),$_smarty_tpl);?>

					<?php echo smarty_function_preference(array('name'=>'users_prefs_tasks_maxRecords'),$_smarty_tpl);?>

					<?php echo smarty_function_preference(array('name'=>'users_prefs_diff_versions'),$_smarty_tpl);?>

					<?php echo smarty_function_preference(array('name'=>'users_prefs_remember_closed_rboxes'),$_smarty_tpl);?>

				</div>
				</fieldset>
		<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_tab(array('name'=>"User Settings"), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_tag_stack);?>

		<?php $_smarty_tpl->smarty->_tag_stack[] = array('tab', array('name'=>"User Features")); $_block_repeat=true; echo smarty_block_tab(array('name'=>"User Features"), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>

			<br>
			<fieldset>
				<legend>User Account Features</legend>
				<div class="adminoptionbox">
					<?php echo smarty_function_preference(array('name'=>'feature_wizard_user'),$_smarty_tpl);?>

					<?php echo smarty_function_preference(array('name'=>'feature_minical'),$_smarty_tpl);?>

					<?php echo smarty_function_preference(array('name'=>'feature_tasks'),$_smarty_tpl);?>

					<?php echo smarty_function_preference(array('name'=>'feature_notepad'),$_smarty_tpl);?>

					<?php echo smarty_function_preference(array('name'=>'feature_user_bookmarks'),$_smarty_tpl);?>

					<?php echo smarty_function_preference(array('name'=>'user_favorites'),$_smarty_tpl);?>

					<?php echo smarty_function_preference(array('name'=>'feature_contacts'),$_smarty_tpl);?>

					<?php echo smarty_function_preference(array('name'=>'feature_usermenu'),$_smarty_tpl);?>

					<?php echo smarty_function_preference(array('name'=>'feature_userlevels'),$_smarty_tpl);?>

					<?php echo smarty_function_preference(array('name'=>'feature_wiki_userpage'),$_smarty_tpl);?>

					<div class="adminoptionboxchild" id="feature_wiki_userpage_childcontainer">
						<?php echo smarty_function_preference(array('name'=>'feature_wiki_userpage_prefix'),$_smarty_tpl);?>

					</div>
				</div>
			</fieldset>
		<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_tab(array('name'=>"User Features"), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_tag_stack);?>

		<?php $_smarty_tpl->smarty->_tag_stack[] = array('tab', array('name'=>"User Info and Picture")); $_block_repeat=true; echo smarty_block_tab(array('name'=>"User Info and Picture"), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>

			<br>
			<fieldset>
				<legend>Показывать информацию о пользователе</legend>
				<div class="adminoptionbox">
					<?php echo smarty_function_preference(array('name'=>'users_prefs_user_information'),$_smarty_tpl);?>

					<?php echo smarty_function_preference(array('name'=>'user_show_realnames'),$_smarty_tpl);?>

					<?php echo smarty_function_preference(array('name'=>'urlOnUsername'),$_smarty_tpl);?>

					<?php echo smarty_function_preference(array('name'=>'users_prefs_show_mouseover_user_info'),$_smarty_tpl);?>

					<?php echo smarty_function_preference(array('name'=>'user_in_search_result'),$_smarty_tpl);?>

					<?php echo smarty_function_preference(array('name'=>'highlight_group'),$_smarty_tpl);?>

					<?php echo smarty_function_preference(array('name'=>'feature_display_my_to_others'),$_smarty_tpl);?>

					<?php echo smarty_function_preference(array('name'=>'user_tracker_infos'),$_smarty_tpl);?>

					<?php echo smarty_function_preference(array('name'=>'user_who_viewed_my_stuff'),$_smarty_tpl);?>

					<?php echo smarty_function_preference(array('name'=>'user_who_viewed_my_stuff_days'),$_smarty_tpl);?>

					<?php echo smarty_function_preference(array('name'=>'user_who_viewed_my_stuff_show_others'),$_smarty_tpl);?>

					<?php echo smarty_function_preference(array('name'=>'feature_unified_user_details'),$_smarty_tpl);?>

				</div>
			</fieldset>
			<fieldset>
				<legend>Аватара</legend>
				<div class="adminoptionbox">
					<?php echo smarty_function_preference(array('name'=>'user_use_gravatar'),$_smarty_tpl);?>

					<?php echo smarty_function_preference(array('name'=>'user_store_file_gallery_picture'),$_smarty_tpl);?>

					<?php echo smarty_function_preference(array('name'=>'user_small_avatar_size'),$_smarty_tpl);?>

					<?php echo smarty_function_preference(array('name'=>'user_small_avatar_square_crop'),$_smarty_tpl);?>

					<?php echo smarty_function_preference(array('name'=>'user_picture_gallery_id'),$_smarty_tpl);?>

					<?php echo smarty_function_preference(array('name'=>'user_default_picture_id'),$_smarty_tpl);?>

				</div>
			</fieldset>
		<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_tab(array('name'=>"User Info and Picture"), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_tag_stack);?>

		<?php $_smarty_tpl->smarty->_tag_stack[] = array('tab', array('name'=>"Messaging and Notifications")); $_block_repeat=true; echo smarty_block_tab(array('name'=>"Messaging and Notifications"), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>

			<br>
			<fieldset>
				<legend>Сообщения</legend>
				<div class="adminoptionbox">
					<?php echo smarty_function_preference(array('name'=>'users_prefs_mailCharset'),$_smarty_tpl);?>

					<?php echo smarty_function_preference(array('name'=>'feature_messages'),$_smarty_tpl);?>

					<div class="adminoptionboxchild" id="feature_messages_childcontainer">
						<legend>
							Сообщения пользователя
							<?php echo smarty_function_help(array('url'=>"Inter-User+Messages"),$_smarty_tpl);?>

						</legend>
						<?php echo smarty_function_preference(array('name'=>'users_prefs_mess_maxRecords'),$_smarty_tpl);?>

						<?php echo smarty_function_preference(array('name'=>'users_prefs_allowMsgs'),$_smarty_tpl);?>

						<?php echo smarty_function_preference(array('name'=>'users_prefs_mess_sendReadStatus'),$_smarty_tpl);?>

						<?php echo smarty_function_preference(array('name'=>'users_prefs_minPrio'),$_smarty_tpl);?>

						<?php echo smarty_function_preference(array('name'=>'users_prefs_mess_archiveAfter'),$_smarty_tpl);?>

					</div>
				</div>
			</fieldset>
			<fieldset>
				<legend>User notifications</legend>
				<div class="adminoptionbox">
					<?php echo smarty_function_preference(array('name'=>'monitor_enabled'),$_smarty_tpl);?>

					<div class="adminoptionboxchild" id="monitor_enabled_childcontainer">
						<?php echo smarty_function_preference(array('name'=>'monitor_individual_clear'),$_smarty_tpl);?>

						<?php echo smarty_function_preference(array('name'=>'monitor_count_refresh_interval'),$_smarty_tpl);?>

						<?php echo smarty_function_preference(array('name'=>'monitor_reply_email_pattern'),$_smarty_tpl);?>

						<?php echo smarty_function_preference(array('name'=>'monitor_digest'),$_smarty_tpl);?>

						<?php $_smarty_tpl->smarty->_tag_stack[] = array('remarksbox', array('type'=>"info",'title'=>"Информация")); $_block_repeat=true; echo smarty_block_remarksbox(array('type'=>"info",'title'=>"Информация"), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>

						For the digest emails to be sent out, you will need to set-up a cron job.</br>
						Adjust the command parameters for your digest frequency. Default frequency is 7 days.</br>
							<strong>Sample command:</strong>
							<code>/usr/bin/php <?php echo smarty_modifier_escape($_smarty_tpl->tpl_vars['monitor_command']->value);?>
</code>
						<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_remarksbox(array('type'=>"info",'title'=>"Информация"), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_tag_stack);?>

					</div>
				</div>
				<?php echo smarty_function_preference(array('name'=>'feature_user_watches'),$_smarty_tpl);?>

				<?php echo smarty_function_preference(array('name'=>'feature_group_watches'),$_smarty_tpl);?>

				<?php echo smarty_function_preference(array('name'=>'feature_daily_report_watches'),$_smarty_tpl);?>

				<div class="adminoptionboxchild" id="feature_daily_report_watches_childcontainer">
					<?php echo smarty_function_preference(array('name'=>'dailyreports_enabled_for_new_users'),$_smarty_tpl);?>

				</div>
				<?php echo smarty_function_preference(array('name'=>'feature_user_watches_translations'),$_smarty_tpl);?>

				<?php echo smarty_function_preference(array('name'=>'feature_groupalert'),$_smarty_tpl);?>

				<?php echo smarty_function_preference(array('name'=>'feature_webmail'),$_smarty_tpl);?>

			</fieldset>
		<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_tab(array('name'=>"Messaging and Notifications"), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_tag_stack);?>

		<?php $_smarty_tpl->smarty->_tag_stack[] = array('tab', array('name'=>"Ваши файлы")); $_block_repeat=true; echo smarty_block_tab(array('name'=>"Ваши файлы"), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>

			<br>
			<fieldset>
				<legend>Activate the feature</legend>
				<?php echo smarty_function_preference(array('name'=>'feature_userfiles','visible'=>"always"),$_smarty_tpl);?>

				<div class="adminoptionboxchild" id="feature_userfiles_childcontainer">
					<?php echo smarty_function_preference(array('name'=>'feature_use_fgal_for_user_files','mode'=>'invert'),$_smarty_tpl);?>

					<div class="adminoptionboxchild" id="feature_use_fgal_for_user_files_childcontainer">
						<?php echo smarty_function_preference(array('name'=>'uf_use_db'),$_smarty_tpl);?>

						<div class="adminoptionboxchild uf_use_db_childcontainer n">
							<?php echo smarty_function_preference(array('name'=>'uf_use_dir'),$_smarty_tpl);?>

						</div>
					</div>
				</div>
			</fieldset>

			<fieldset>
				<legend>Настройки</legend>
				<?php echo smarty_function_preference(array('name'=>'userfiles_quota'),$_smarty_tpl);?>

				<?php echo smarty_function_preference(array('name'=>'userfiles_private'),$_smarty_tpl);?>

				<?php echo smarty_function_preference(array('name'=>'userfiles_hidden'),$_smarty_tpl);?>

			</fieldset>
		<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_tab(array('name'=>"Ваши файлы"), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_tag_stack);?>

	<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_tabset(array('name'=>"admin_user_setting"), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_tag_stack);?>

	<?php echo $_smarty_tpl->getSubTemplate ('admin/include_apply_bottom.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

</form>
<?php }} ?>
