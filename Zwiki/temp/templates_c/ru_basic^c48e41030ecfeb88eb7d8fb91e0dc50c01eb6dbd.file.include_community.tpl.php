<?php /* Smarty version Smarty-3.1.21, created on 2017-09-20 15:18:25
         compiled from "/var/www/html/Zwiki/templates/admin/include_community.tpl" */ ?>
<?php /*%%SmartyHeaderCode:15810049359c286c1c818c3-89420765%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'c48e41030ecfeb88eb7d8fb91e0dc50c01eb6dbd' => 
    array (
      0 => '/var/www/html/Zwiki/templates/admin/include_community.tpl',
      1 => 1492291736,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '15810049359c286c1c818c3-89420765',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.21',
  'unifunc' => 'content_59c286c1cba892_00499733',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_59c286c1cba892_00499733')) {function content_59c286c1cba892_00499733($_smarty_tpl) {?><?php if (!is_callable('smarty_function_button')) include '/var/www/html/Zwiki/lib/smarty_tiki/function.button.php';
if (!is_callable('smarty_function_permission_link')) include '/var/www/html/Zwiki/lib/smarty_tiki/function.permission_link.php';
if (!is_callable('smarty_function_service')) include '/var/www/html/Zwiki/lib/smarty_tiki/function.service.php';
if (!is_callable('smarty_block_tabset')) include '/var/www/html/Zwiki/lib/smarty_tiki/block.tabset.php';
if (!is_callable('smarty_block_tab')) include '/var/www/html/Zwiki/lib/smarty_tiki/block.tab.php';
if (!is_callable('smarty_function_help')) include '/var/www/html/Zwiki/lib/smarty_tiki/function.help.php';
if (!is_callable('smarty_function_preference')) include '/var/www/html/Zwiki/lib/smarty_tiki/function.preference.php';
?>
<form class="form-horizontal" action="tiki-admin.php?page=community" method="post">
	<?php echo $_smarty_tpl->getSubTemplate ('access/include_ticket.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

	<div class="t_navbar margin-bottom-md">
		<?php echo smarty_function_button(array('href'=>"tiki-admingroups.php",'_class'=>"btn-link tips",'_type'=>"text",'_icon_name'=>"group",'_text'=>"Группы",'_title'=>":Group Administration"),$_smarty_tpl);?>

		<?php echo smarty_function_button(array('href'=>"tiki-adminusers.php",'_class'=>"btn-link tips",'_type'=>"text",'_icon_name'=>"user",'_text'=>"Пользователи",'_title'=>":User Administration"),$_smarty_tpl);?>

		<?php echo smarty_function_permission_link(array('addclass'=>"btn btn-link",'_type'=>"text",'mode'=>'text','label'=>"Права доступа"),$_smarty_tpl);?>

		<a href="<?php echo smarty_function_service(array('controller'=>'managestream','action'=>'list'),$_smarty_tpl);?>
" class="btn btn-link tips">Activity Rules</a>
		<?php echo $_smarty_tpl->getSubTemplate ('admin/include_apply_top.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

	</div>
	<?php $_smarty_tpl->smarty->_tag_stack[] = array('tabset', array('name'=>"admin_community")); $_block_repeat=true; echo smarty_block_tabset(array('name'=>"admin_community"), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>

		<?php $_smarty_tpl->smarty->_tag_stack[] = array('tab', array('name'=>"Community Features")); $_block_repeat=true; echo smarty_block_tab(array('name'=>"Community Features"), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>

			<br>
			<fieldset>
				<legend>Сообщество<?php echo smarty_function_help(array('url'=>"Community"),$_smarty_tpl);?>
</legend>
				<?php echo smarty_function_preference(array('name'=>'feature_community_gender'),$_smarty_tpl);?>

				<?php echo smarty_function_preference(array('name'=>'feature_community_mouseover'),$_smarty_tpl);?>

				<div class="adminoptionboxchild" id="feature_community_mouseover_childcontainer">
					<?php echo smarty_function_preference(array('name'=>'feature_community_mouseover_name'),$_smarty_tpl);?>

					<?php echo smarty_function_preference(array('name'=>'feature_community_mouseover_gender'),$_smarty_tpl);?>

					<?php echo smarty_function_preference(array('name'=>'feature_community_mouseover_picture'),$_smarty_tpl);?>

					<?php echo smarty_function_preference(array('name'=>'feature_community_mouseover_score'),$_smarty_tpl);?>

					<?php echo smarty_function_preference(array('name'=>'feature_community_mouseover_country'),$_smarty_tpl);?>

					<?php echo smarty_function_preference(array('name'=>'feature_community_mouseover_email'),$_smarty_tpl);?>

					<?php echo smarty_function_preference(array('name'=>'feature_community_mouseover_lastlogin'),$_smarty_tpl);?>

					<?php echo smarty_function_preference(array('name'=>'feature_community_mouseover_distance'),$_smarty_tpl);?>

				</div>
			</fieldset>
			<fieldset>
				<legend>Additional options</legend>
				<div class="adminoptionbox">
					<?php echo smarty_function_preference(array('name'=>'feature_invite'),$_smarty_tpl);?>

					<?php echo smarty_function_preference(array('name'=>'auth_token_tellafriend'),$_smarty_tpl);?>

					<?php echo smarty_function_preference(array('name'=>'auth_token_share'),$_smarty_tpl);?>

					<?php echo smarty_function_preference(array('name'=>'feature_group_transition'),$_smarty_tpl);?>

					<?php echo smarty_function_preference(array('name'=>'user_likes'),$_smarty_tpl);?>

					<?php echo smarty_function_preference(array('name'=>'mustread_enabled'),$_smarty_tpl);?>

					<div class="adminoptionboxchild" id="mustread_enabled_childcontainer">
						<?php echo smarty_function_preference(array('name'=>'mustread_tracker'),$_smarty_tpl);?>

					</div>
					<?php echo smarty_function_preference(array('name'=>'user_multilike_config'),$_smarty_tpl);?>

				</div>
			</fieldset>
		<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_tab(array('name'=>"Community Features"), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_tag_stack);?>

		<?php $_smarty_tpl->smarty->_tag_stack[] = array('tab', array('name'=>"Social Interaction")); $_block_repeat=true; echo smarty_block_tab(array('name'=>"Social Interaction"), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>

			<br>
			<fieldset class="table">
				<legend>Friendship and followers</legend>
				<?php echo smarty_function_preference(array('name'=>'feature_friends'),$_smarty_tpl);?>

				<div class="adminoptionboxchild" id="feature_friends_childcontainer">
					<?php echo smarty_function_preference(array('name'=>'social_network_type'),$_smarty_tpl);?>

					<fieldset>
						<legend>Выберите пункты для отображения при просмотре списка пользователей</legend>
						<?php echo smarty_function_preference(array('name'=>'user_list_order'),$_smarty_tpl);?>

						<?php echo smarty_function_preference(array('name'=>'feature_community_list_name'),$_smarty_tpl);?>

						<?php echo smarty_function_preference(array('name'=>'feature_community_list_score'),$_smarty_tpl);?>

						<?php echo smarty_function_preference(array('name'=>'feature_community_list_country'),$_smarty_tpl);?>

						<?php echo smarty_function_preference(array('name'=>'feature_community_list_distance'),$_smarty_tpl);?>

					</fieldset>
				</div>
			</fieldset>
			<fieldset class="table">
				<legend>Activity stream</legend>
				<?php echo smarty_function_preference(array('name'=>'activity_basic_events'),$_smarty_tpl);?>

				<div class="adminoptionboxchild" id="activity_basic_events_childcontainer">
					<?php echo smarty_function_preference(array('name'=>'activity_basic_tracker_create'),$_smarty_tpl);?>

					<?php echo smarty_function_preference(array('name'=>'activity_basic_tracker_update'),$_smarty_tpl);?>

					<?php echo smarty_function_preference(array('name'=>'activity_basic_user_follow_add'),$_smarty_tpl);?>

					<?php echo smarty_function_preference(array('name'=>'activity_basic_user_follow_incoming'),$_smarty_tpl);?>

					<?php echo smarty_function_preference(array('name'=>'activity_basic_user_friend_add'),$_smarty_tpl);?>

				</div>
				<?php echo smarty_function_preference(array('name'=>'activity_custom_events'),$_smarty_tpl);?>

				<?php echo smarty_function_preference(array('name'=>'activity_notifications'),$_smarty_tpl);?>

			</fieldset>
			<fieldset>
				<legend>Goal, recognition and rewards</legend>
				<?php echo smarty_function_preference(array('name'=>'goal_enabled'),$_smarty_tpl);?>

				<?php echo smarty_function_preference(array('name'=>'goal_badge_tracker'),$_smarty_tpl);?>

				<?php echo smarty_function_preference(array('name'=>'goal_group_blacklist'),$_smarty_tpl);?>

			</fieldset>
			<fieldset>
				<legend>Рейтинг</legend>
				<?php echo smarty_function_preference(array('name'=>'feature_score'),$_smarty_tpl);?>

			</fieldset>
		<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_tab(array('name'=>"Social Interaction"), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_tag_stack);?>

		<?php $_smarty_tpl->smarty->_tag_stack[] = array('tab', array('name'=>"Plugins")); $_block_repeat=true; echo smarty_block_tab(array('name'=>"Plugins"), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>

			<br>
			<?php echo smarty_function_preference(array('name'=>'wikiplugin_author'),$_smarty_tpl);?>

			<?php echo smarty_function_preference(array('name'=>'wikiplugin_avatar'),$_smarty_tpl);?>

			<?php echo smarty_function_preference(array('name'=>'wikiplugin_favorite'),$_smarty_tpl);?>

			<?php echo smarty_function_preference(array('name'=>'wikiplugin_group'),$_smarty_tpl);?>

			<?php echo smarty_function_preference(array('name'=>'wikiplugin_groupexpiry'),$_smarty_tpl);?>

			<?php echo smarty_function_preference(array('name'=>'wikiplugin_invite'),$_smarty_tpl);?>

			<?php echo smarty_function_preference(array('name'=>'wikiplugin_mail'),$_smarty_tpl);?>

			<?php echo smarty_function_preference(array('name'=>'wikiplugin_map'),$_smarty_tpl);?>

			<?php echo smarty_function_preference(array('name'=>'wikiplugin_memberlist'),$_smarty_tpl);?>

			<?php echo smarty_function_preference(array('name'=>'wikiplugin_memberpayment'),$_smarty_tpl);?>

			<?php echo smarty_function_preference(array('name'=>'wikiplugin_perm'),$_smarty_tpl);?>

			<?php echo smarty_function_preference(array('name'=>'wikiplugin_proposal'),$_smarty_tpl);?>

			<?php echo smarty_function_preference(array('name'=>'wikiplugin_realnamelist'),$_smarty_tpl);?>

			<?php echo smarty_function_preference(array('name'=>'wikiplugin_subscribegroup'),$_smarty_tpl);?>

			<?php echo smarty_function_preference(array('name'=>'wikiplugin_subscribegroups'),$_smarty_tpl);?>

			<?php echo smarty_function_preference(array('name'=>'wikiplugin_usercount'),$_smarty_tpl);?>

			<?php echo smarty_function_preference(array('name'=>'wikiplugin_userlink'),$_smarty_tpl);?>

			<?php echo smarty_function_preference(array('name'=>'wikiplugin_userlist'),$_smarty_tpl);?>

			<?php echo smarty_function_preference(array('name'=>'wikiplugin_userpref'),$_smarty_tpl);?>

		<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_tab(array('name'=>"Plugins"), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_tag_stack);?>


		<?php $_smarty_tpl->smarty->_tag_stack[] = array('tab', array('name'=>"BigBlueButton")); $_block_repeat=true; echo smarty_block_tab(array('name'=>"BigBlueButton"), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>

			<br>
			<?php echo smarty_function_preference(array('name'=>'bigbluebutton_feature'),$_smarty_tpl);?>

			<div class="adminoptionboxchild" id="bigbluebutton_feature_childcontainer">
				<?php echo smarty_function_preference(array('name'=>'bigbluebutton_server_location'),$_smarty_tpl);?>

				<?php echo smarty_function_preference(array('name'=>'bigbluebutton_server_salt'),$_smarty_tpl);?>

				<?php echo smarty_function_preference(array('name'=>'bigbluebutton_recording_max_duration'),$_smarty_tpl);?>

				<?php echo smarty_function_preference(array('name'=>'wikiplugin_bigbluebutton'),$_smarty_tpl);?>

			</div>
		<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_tab(array('name'=>"BigBlueButton"), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_tag_stack);?>

		<?php $_smarty_tpl->smarty->_tag_stack[] = array('tab', array('name'=>"XMPP")); $_block_repeat=true; echo smarty_block_tab(array('name'=>"XMPP"), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>

			<h2>XMPP</h2>
			<?php echo smarty_function_preference(array('name'=>'xmpp_feature'),$_smarty_tpl);?>

			<div class="adminoptionboxchild" id="xmpp_feature_childcontainer">
				<?php echo smarty_function_preference(array('name'=>'xmpp_server_host'),$_smarty_tpl);?>

				<?php echo smarty_function_preference(array('name'=>'xmpp_server_http_bind'),$_smarty_tpl);?>

				<?php echo smarty_function_preference(array('name'=>'xmpp_openfire_use_token'),$_smarty_tpl);?>

			</div>
		<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_tab(array('name'=>"XMPP"), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_tag_stack);?>

	<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_tabset(array('name'=>"admin_community"), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_tag_stack);?>

	<?php echo $_smarty_tpl->getSubTemplate ('admin/include_apply_bottom.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

</form>
<?php }} ?>
