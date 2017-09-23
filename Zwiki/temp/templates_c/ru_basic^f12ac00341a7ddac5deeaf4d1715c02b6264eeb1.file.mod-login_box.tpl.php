<?php /* Smarty version Smarty-3.1.21, created on 2017-09-20 14:58:50
         compiled from "/var/www/html/Zwiki/templates/modules/mod-login_box.tpl" */ ?>
<?php /*%%SmartyHeaderCode:67607634959c2822a8d7499-79569630%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'f12ac00341a7ddac5deeaf4d1715c02b6264eeb1' => 
    array (
      0 => '/var/www/html/Zwiki/templates/modules/mod-login_box.tpl',
      1 => 1478546676,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '67607634959c2822a8d7499-79569630',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'module_logo_instance' => 0,
    'tpl_module_title' => 0,
    'module_params' => 0,
    'nobox' => 0,
    'style' => 0,
    'mode' => 0,
    'user' => 0,
    'login_module' => 0,
    'tiki_p_admin' => 0,
    'prefs' => 0,
    'openid_userlist' => 0,
    'username' => 0,
    'showloginboxes' => 0,
    'close_tags' => 0,
    'urllogin' => 0,
    'error_login' => 0,
    'loginuser' => 0,
    'error_user' => 0,
    'adminuser' => 0,
    'base_url_http' => 0,
    'base_url_https' => 0,
    'show_stay_in_ssl_mode' => 0,
    'stay_in_ssl_mode' => 0,
    'use_intertiki_auth' => 0,
    'intertiki' => 0,
    'k' => 0,
    'registration' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.21',
  'unifunc' => 'content_59c2822a94a7d0_20483490',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_59c2822a94a7d0_20483490')) {function content_59c2822a94a7d0_20483490($_smarty_tpl) {?><?php if (!is_callable('smarty_block_jq')) include '/var/www/html/Zwiki/lib/smarty_tiki/block.jq.php';
if (!is_callable('smarty_block_tikimodule')) include '/var/www/html/Zwiki/lib/smarty_tiki/block.tikimodule.php';
if (!is_callable('smarty_modifier_userlink')) include '/var/www/html/Zwiki/lib/smarty_tiki/modifier.userlink.php';
if (!is_callable('smarty_function_button')) include '/var/www/html/Zwiki/lib/smarty_tiki/function.button.php';
if (!is_callable('smarty_function_help')) include '/var/www/html/Zwiki/lib/smarty_tiki/function.help.php';
if (!is_callable('smarty_function_user_selector')) include '/var/www/html/Zwiki/lib/smarty_tiki/function.user_selector.php';
if (!is_callable('smarty_modifier_avatarize')) include '/var/www/html/Zwiki/lib/smarty_tiki/modifier.avatarize.php';
if (!is_callable('smarty_modifier_username')) include '/var/www/html/Zwiki/lib/smarty_tiki/modifier.username.php';
if (!is_callable('smarty_block_tr')) include '/var/www/html/Zwiki/lib/smarty_tiki/block.tr.php';
if (!is_callable('smarty_block_remarksbox')) include '/var/www/html/Zwiki/lib/smarty_tiki/block.remarksbox.php';
if (!is_callable('smarty_function_icon')) include '/var/www/html/Zwiki/lib/smarty_tiki/function.icon.php';
?>
<?php $_smarty_tpl->smarty->_tag_stack[] = array('jq', array('notonready'=>true)); $_block_repeat=true; echo smarty_block_jq(array('notonready'=>true), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>

function capLock(e, el){
	kc = e.keyCode ? e.keyCode : e.which;
	sk = e.shiftKey ? e.shiftKey : (kc == 16 ? true : false);
	if ((kc >= 65 && kc <= 90 && !sk) || (kc >= 97 && kc <= 122 && sk)) {
		$('.divCapson', $(el).parents('div:first')).show();
	} else {
		$('.divCapson', $(el).parents('div:first')).hide();
	}
}
<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_jq(array('notonready'=>true), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_tag_stack);?>

<?php $_smarty_tpl->smarty->_tag_stack[] = array('jq', array()); $_block_repeat=true; echo smarty_block_jq(array(), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>

$("#loginbox-<?php echo $_smarty_tpl->tpl_vars['module_logo_instance']->value;?>
").submit( function () {
	if ($("#login-user_<?php echo $_smarty_tpl->tpl_vars['module_logo_instance']->value;?>
").val() && $("#login-pass_<?php echo $_smarty_tpl->tpl_vars['module_logo_instance']->value;?>
").val()) {
		return true;
	} else {
		$("#login-user_<?php echo $_smarty_tpl->tpl_vars['module_logo_instance']->value;?>
").focus();
		return false;
	}
});
if (jqueryTiki.no_cookie) {
	$('.box-login_box input').each(function(){
		$(this).change(function() {
			if (jqueryTiki.no_cookie && $(this).val()) {
				alert(jqueryTiki.cookie_consent_alert);
			}
		});
	});
}
<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_jq(array(), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_tag_stack);?>

<?php if (!isset($_smarty_tpl->tpl_vars['tpl_module_title']->value)) {?>
	<?php $_smarty_tpl->tpl_vars['tpl_module_title'] = new Smarty_variable("Вход", null, 0);?>
	<?php if (!isset($_smarty_tpl->tpl_vars['module_params']->value)) {
$_smarty_tpl->tpl_vars['module_params'] = new Smarty_variable(' ', null, 0);
}?>
	<?php if (isset($_smarty_tpl->tpl_vars['nobox']->value)) {
$_smarty_tpl->createLocalArrayVariable('module_params', null, 0);
$_smarty_tpl->tpl_vars['module_params']->value['nobox'] = $_smarty_tpl->tpl_vars['nobox']->value;
}?>
	<?php if (isset($_smarty_tpl->tpl_vars['style']->value)) {
$_smarty_tpl->createLocalArrayVariable('module_params', null, 0);
$_smarty_tpl->tpl_vars['module_params']->value['style'] = $_smarty_tpl->tpl_vars['style']->value;
}?>
<?php }?>
<?php $_smarty_tpl->smarty->_tag_stack[] = array('tikimodule', array('error'=>$_smarty_tpl->tpl_vars['module_params']->value['error'],'title'=>$_smarty_tpl->tpl_vars['tpl_module_title']->value,'name'=>"login_box",'flip'=>$_smarty_tpl->tpl_vars['module_params']->value['flip'],'decorations'=>$_smarty_tpl->tpl_vars['module_params']->value['decorations'],'nobox'=>$_smarty_tpl->tpl_vars['module_params']->value['nobox'],'notitle'=>$_smarty_tpl->tpl_vars['module_params']->value['notitle'],'style'=>$_smarty_tpl->tpl_vars['module_params']->value['style'])); $_block_repeat=true; echo smarty_block_tikimodule(array('error'=>$_smarty_tpl->tpl_vars['module_params']->value['error'],'title'=>$_smarty_tpl->tpl_vars['tpl_module_title']->value,'name'=>"login_box",'flip'=>$_smarty_tpl->tpl_vars['module_params']->value['flip'],'decorations'=>$_smarty_tpl->tpl_vars['module_params']->value['decorations'],'nobox'=>$_smarty_tpl->tpl_vars['module_params']->value['nobox'],'notitle'=>$_smarty_tpl->tpl_vars['module_params']->value['notitle'],'style'=>$_smarty_tpl->tpl_vars['module_params']->value['style']), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>

	<?php if ($_smarty_tpl->tpl_vars['mode']->value=="header") {?><div class="siteloginbar<?php if ($_smarty_tpl->tpl_vars['user']->value) {?> logged-in<?php }?>"><?php }?>
	<?php if ($_smarty_tpl->tpl_vars['user']->value) {?>
		<?php if (empty($_smarty_tpl->tpl_vars['mode']->value)||$_smarty_tpl->tpl_vars['mode']->value=="module") {?>
			<div class="form-group">Вошли как: <span style="white-space: nowrap"><?php echo smarty_modifier_userlink($_smarty_tpl->tpl_vars['user']->value);?>
</span></div>
			<div class="text-center form-group">
				<?php echo smarty_function_button(array('href'=>"tiki-logout.php",'_text'=>"Завершить работу"),$_smarty_tpl);?>

			</div>
			<?php if ($_smarty_tpl->tpl_vars['login_module']->value['can_revert']) {?>
				<form action="<?php echo smarty_modifier_escape($_smarty_tpl->tpl_vars['login_module']->value['login_url']);?>
" method="post">
					<fieldset>
						<legend>Return to Main User</legend>
						<input type="hidden" name="su" value="revert" />
						<input type="hidden" name="username" value="auto" />
						<div class="text-center"><button type="submit" class="btn btn-primary" name="actsu">switch</button></div>
					</fieldset>
				</form>
			<?php } elseif ($_smarty_tpl->tpl_vars['tiki_p_admin']->value=='y') {?>
				<form action="<?php echo smarty_modifier_escape($_smarty_tpl->tpl_vars['login_module']->value['login_url']);?>
" method="post"<?php if ($_smarty_tpl->tpl_vars['prefs']->value['desactive_login_autocomplete']=='y') {?> autocomplete="off"<?php }?> role="form">
					<fieldset>
						<legend>Сменить Пользователя</legend>
						<div class="form-group">
							<label for="login-switchuser_<?php echo $_smarty_tpl->tpl_vars['module_logo_instance']->value;?>
">
								<?php if ($_smarty_tpl->tpl_vars['prefs']->value['login_is_email']=='y') {?>
									Эл. адрес:
								<?php } else { ?>
									<?php if ($_smarty_tpl->tpl_vars['prefs']->value['login_allow_email']=='y') {?>
										Email address or 
									<?php }?>
									<?php if ($_smarty_tpl->tpl_vars['prefs']->value['login_autogenerate']=='y') {?>
										User account ID
									<?php } else { ?>
										Имя пользователя
									<?php }?>
									:
								<?php }?>
							</label>
							<input type="hidden" name="su" value="1" class="form-control" />
							<?php if ($_smarty_tpl->tpl_vars['prefs']->value['feature_help']=='y') {?>
								<?php echo smarty_function_help(array('url'=>"Switch+User",'desc'=>"Сменить Пользователя:Enter a username and click ‘Switch’.<br>Useful for testing permissions."),$_smarty_tpl);?>

							<?php }?>
							<?php echo smarty_function_user_selector(array('id'=>("login-switchuser_").($_smarty_tpl->tpl_vars['module_logo_instance']->value),'name'=>'username','user'=>'','editable'=>$_smarty_tpl->tpl_vars['tiki_p_admin']->value,'class'=>'form-control'),$_smarty_tpl);?>

						</div>
						<div class="text-center"><button type="submit" class="btn btn-primary" name="actsu">switch</button></div>
					</fieldset>
				</form>
			<?php }?>
		<?php } elseif ($_smarty_tpl->tpl_vars['mode']->value=="header") {?>
			<span style="white-space: nowrap"><?php echo smarty_modifier_userlink($_smarty_tpl->tpl_vars['user']->value);?>
</span> <a href="tiki-logout.php" title="Завершить работу">Завершить работу</a>
		<?php } elseif ($_smarty_tpl->tpl_vars['mode']->value=="popup") {?>
			<div class="siteloginbar_popup dropdown pull-right" role="group">
				<button type="button" class="dropdown-toggle login_link btn btn-link" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
					<?php if (isset($_smarty_tpl->tpl_vars['module_params']->value['show_user_avatar'])&&$_smarty_tpl->tpl_vars['module_params']->value['show_user_avatar']=='y') {
echo smarty_modifier_avatarize($_smarty_tpl->tpl_vars['user']->value,'n','n','n','n');
}?>
					<?php if (isset($_smarty_tpl->tpl_vars['module_params']->value['show_user_name'])&&$_smarty_tpl->tpl_vars['module_params']->value['show_user_name']=='y') {
echo smarty_modifier_username($_smarty_tpl->tpl_vars['user']->value,'n','n','n');
}?>
					<?php if ((!isset($_smarty_tpl->tpl_vars['module_params']->value['show_user_avatar'])||$_smarty_tpl->tpl_vars['module_params']->value['show_user_avatar']!='y')&&(!isset($_smarty_tpl->tpl_vars['module_params']->value['show_user_name'])||$_smarty_tpl->tpl_vars['module_params']->value['show_user_name']!='y')) {?>Завершить работу<?php }?>
					<span class="caret"></span>
					<span class="sr-only">Toggle Dropdown</span>
				</button>
				<ul class="dropdown-menu">
						<li>
						<a href="tiki-user_information.php" title="Мой Tiki"><?php if (isset($_smarty_tpl->tpl_vars['module_params']->value['show_user_name'])&&$_smarty_tpl->tpl_vars['module_params']->value['show_user_name']=='y') {?>Мой Tiki<?php } else {
$_smarty_tpl->smarty->_tag_stack[] = array('tr', array()); $_block_repeat=true; echo smarty_block_tr(array(), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();
echo smarty_modifier_escape(smarty_modifier_username($_smarty_tpl->tpl_vars['user']->value),"html");
$_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_tr(array(), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_tag_stack);
}?></a>
						</li>
					<li>
						<a href="tiki-logout.php" title="Завершить работу">Завершить работу</a>
					</li>
				</ul>
			</div>
		<?php }?>
		<?php if ($_smarty_tpl->tpl_vars['prefs']->value['auth_method']=='openid'&&count($_smarty_tpl->tpl_vars['openid_userlist']->value)>1) {?>
			<form method="get" action="tiki-login_openid.php">
				<fieldset>
					<legend>Сменить пользователя</legend>
					<select name="select">
					<?php  $_smarty_tpl->tpl_vars['username'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['username']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['openid_userlist']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['username']->key => $_smarty_tpl->tpl_vars['username']->value) {
$_smarty_tpl->tpl_vars['username']->_loop = true;
?>
						<option<?php if ($_smarty_tpl->tpl_vars['username']->value==$_smarty_tpl->tpl_vars['user']->value) {?> selected="selected"<?php }?>><?php echo $_smarty_tpl->tpl_vars['username']->value;?>
</option>
					<?php } ?>
					</select>
					<input type="hidden" name="action" value="select"/>
					<input type="submit" class="btn btn-primary" value="Вперед"/>
				</fieldset>
			</form>
		<?php }?>
	<?php } elseif ($_smarty_tpl->tpl_vars['prefs']->value['auth_method']=='cas'&&$_smarty_tpl->tpl_vars['showloginboxes']->value!='y') {?>
		<b><a class="linkmodule" href="tiki-login.php?cas=y">Log in through CAS</a></b>
		<?php if ($_smarty_tpl->tpl_vars['prefs']->value['cas_skip_admin']=='y') {?>
			<br><a class="linkmodule" href="tiki-login_scr.php?user=admin">Log in as admin</a>
		<?php }?>
	<?php } elseif ($_smarty_tpl->tpl_vars['prefs']->value['auth_method']=='shib'&&$_smarty_tpl->tpl_vars['showloginboxes']->value!='y') {?>
		<b><a class="linkmodule" href="tiki-login.php">Log in through Shibboleth</a></b>
		<?php if ($_smarty_tpl->tpl_vars['prefs']->value['shib_skip_admin']=='y') {?>
			<br><a class="linkmodule" href="tiki-login_scr.php?user=admin">Log in as admin</a>
		<?php }?>
	<?php } elseif ($_smarty_tpl->tpl_vars['prefs']->value['auth_method']=='saml'&&$_smarty_tpl->tpl_vars['showloginboxes']->value!='y') {?>
		<b><a class="linkmodule" href="tiki-login.php?auth=saml"><?php $_smarty_tpl->smarty->_tag_stack[] = array('tr', array()); $_block_repeat=true; echo smarty_block_tr(array(), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>

		<?php if ($_smarty_tpl->tpl_vars['prefs']->value['saml_option_login_link_text']=='') {?>
			Log in through SAML2 IdP
		<?php } else { ?>
			<?php echo $_smarty_tpl->tpl_vars['prefs']->value['saml_option_login_link_text'];?>

		<?php }?>
		<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_tr(array(), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_tag_stack);?>
</a></b>
		<?php if ($_smarty_tpl->tpl_vars['prefs']->value['saml_options_skip_admin']=='y') {?>
			<br /><a class="linkmodule" href="tiki-login_scr.php?user=admin">Log in as admin</a>
		<?php }?>
	<?php } else { ?>
		<?php $_smarty_tpl->tpl_vars['close_tags'] = new Smarty_variable('', null, 0);?>
		<?php if ($_smarty_tpl->tpl_vars['mode']->value=="popup") {?>
			<div class="siteloginbar_popup dropdown btn-group pull-right">
				<button type="button" class="btn btn-link dropdown-toggle" data-toggle="dropdown">
					Вход
					<span class="caret"></span>
				</button>
				<div class="siteloginbar_poppedup dropdown-menu pull-right modal-sm"><div class="panel-body">
					<?php $_smarty_tpl->_capture_stack[0][] = array('default', "close_tags", null); ob_start(); ?></div></div></div><?php echo $_smarty_tpl->tpl_vars['close_tags']->value;
list($_capture_buffer, $_capture_assign, $_capture_append) = array_pop($_smarty_tpl->_capture_stack[0]);
if (!empty($_capture_buffer)) {
 if (isset($_capture_assign)) $_smarty_tpl->assign($_capture_assign, ob_get_contents());
 if (isset( $_capture_append)) $_smarty_tpl->append( $_capture_append, ob_get_contents());
 Smarty::$_smarty_vars['capture'][$_capture_buffer]=ob_get_clean();
} else $_smarty_tpl->capture_error();?>
		<?php }?>

		<form name="loginbox" class="form<?php if ($_smarty_tpl->tpl_vars['mode']->value=="header") {?> form-inline<?php }?>" id="loginbox-<?php echo $_smarty_tpl->tpl_vars['module_logo_instance']->value;?>
" action="<?php echo smarty_modifier_escape($_smarty_tpl->tpl_vars['login_module']->value['login_url']);?>
"
				method="post" 
				<?php if ($_smarty_tpl->tpl_vars['prefs']->value['desactive_login_autocomplete']=='y') {?> autocomplete="off"<?php }?>
		>
		<?php $_smarty_tpl->_capture_stack[0][] = array('default', "close_tags", null); ob_start(); ?></form><?php echo $_smarty_tpl->tpl_vars['close_tags']->value;
list($_capture_buffer, $_capture_assign, $_capture_append) = array_pop($_smarty_tpl->_capture_stack[0]);
if (!empty($_capture_buffer)) {
 if (isset($_capture_assign)) $_smarty_tpl->assign($_capture_assign, ob_get_contents());
 if (isset( $_capture_append)) $_smarty_tpl->append( $_capture_append, ob_get_contents());
 Smarty::$_smarty_vars['capture'][$_capture_buffer]=ob_get_clean();
} else $_smarty_tpl->capture_error();?>


		<?php if (!empty($_smarty_tpl->tpl_vars['urllogin']->value)) {?><input type="hidden" name="url" value="<?php echo smarty_modifier_escape($_smarty_tpl->tpl_vars['urllogin']->value);?>
" /><?php }?>
		<?php if ($_smarty_tpl->tpl_vars['module_params']->value['nobox']!='y') {?>
			<fieldset>
				<?php $_smarty_tpl->_capture_stack[0][] = array('default', "close_tags", null); ob_start(); ?></fieldset><?php echo $_smarty_tpl->tpl_vars['close_tags']->value;
list($_capture_buffer, $_capture_assign, $_capture_append) = array_pop($_smarty_tpl->_capture_stack[0]);
if (!empty($_capture_buffer)) {
 if (isset($_capture_assign)) $_smarty_tpl->assign($_capture_assign, ob_get_contents());
 if (isset( $_capture_append)) $_smarty_tpl->append( $_capture_append, ob_get_contents());
 Smarty::$_smarty_vars['capture'][$_capture_buffer]=ob_get_clean();
} else $_smarty_tpl->capture_error();?>
		<?php }?>
		<?php if (!empty($_smarty_tpl->tpl_vars['error_login']->value)) {?>
			<?php $_smarty_tpl->smarty->_tag_stack[] = array('remarksbox', array('type'=>'errors','title'=>"Ошибка")); $_block_repeat=true; echo smarty_block_remarksbox(array('type'=>'errors','title'=>"Ошибка"), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>

				<?php if ($_smarty_tpl->tpl_vars['error_login']->value==-5) {?>Неверное имя пользователя или пароль
				<?php } elseif ($_smarty_tpl->tpl_vars['error_login']->value==-3) {?>Неверное имя пользователя или пароль
				<?php } else {
echo smarty_modifier_escape($_smarty_tpl->tpl_vars['error_login']->value);
}?>
			<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_remarksbox(array('type'=>'errors','title'=>"Ошибка"), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_tag_stack);?>

		<?php }?>
		<div class="user form-group clearfix">
			<?php if (!isset($_smarty_tpl->tpl_vars['module_logo_instance']->value)) {
$_smarty_tpl->tpl_vars['module_logo_instance'] = new Smarty_variable(' ', null, 0);
}?>
			<label for="login-user_<?php echo $_smarty_tpl->tpl_vars['module_logo_instance']->value;?>
">
				<?php if ($_smarty_tpl->tpl_vars['prefs']->value['login_is_email']=='y') {?>
					Эл. адрес:
				<?php } else { ?>
					<?php if ($_smarty_tpl->tpl_vars['prefs']->value['login_allow_email']=='y') {?>
						Email address or 
					<?php }?>
					<?php if ($_smarty_tpl->tpl_vars['prefs']->value['login_autogenerate']=='y') {?>
						User account ID
					<?php } else { ?>
						Имя пользователя
					<?php }?>
					:
				<?php }?>
			</label>
			<?php if (!isset($_smarty_tpl->tpl_vars['loginuser']->value)||$_smarty_tpl->tpl_vars['loginuser']->value=='') {?>
					<input class="form-control" type="text" name="user" id="login-user_<?php echo $_smarty_tpl->tpl_vars['module_logo_instance']->value;?>
" <?php if (!empty($_smarty_tpl->tpl_vars['error_login']->value)) {?> value="<?php echo smarty_modifier_escape($_smarty_tpl->tpl_vars['error_user']->value);?>
"<?php } elseif (!empty($_smarty_tpl->tpl_vars['adminuser']->value)) {?> value="<?php echo smarty_modifier_escape($_smarty_tpl->tpl_vars['adminuser']->value);?>
"<?php }?>/>
				<?php $_smarty_tpl->smarty->_tag_stack[] = array('jq', array()); $_block_repeat=true; echo smarty_block_jq(array(), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
if ($('#login-user_<?php echo $_smarty_tpl->tpl_vars['module_logo_instance']->value;?>
:visible').length) {if ($("#login-user_<?php echo $_smarty_tpl->tpl_vars['module_logo_instance']->value;?>
").offset().top < $(window).height()) {$('#login-user_<?php echo $_smarty_tpl->tpl_vars['module_logo_instance']->value;?>
')[0].focus();} }<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_jq(array(), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_tag_stack);?>

			<?php } else { ?>
				<input class="form-control" type="hidden" name="user" id="login-user_<?php echo $_smarty_tpl->tpl_vars['module_logo_instance']->value;?>
" value="<?php echo smarty_modifier_escape($_smarty_tpl->tpl_vars['loginuser']->value);?>
" /><b><?php echo smarty_modifier_escape($_smarty_tpl->tpl_vars['loginuser']->value);?>
</b>
			<?php }?>
		</div>
		<div class="pass form-group clearfix">
			<label for="login-pass_<?php echo $_smarty_tpl->tpl_vars['module_logo_instance']->value;?>
">Пароль:</label>
			<input onkeypress="capLock(event, this)" type="password" name="pass" class="form-control" id="login-pass_<?php echo $_smarty_tpl->tpl_vars['module_logo_instance']->value;?>
">
			<div class="divCapson" style="display:none;">
				<?php echo smarty_function_icon(array('name'=>'error','istyle'=>"vertical-align:middle"),$_smarty_tpl);?>
 CapsLock включен.
			</div>
		</div>
		<?php if ($_smarty_tpl->tpl_vars['prefs']->value['rememberme']!='disabled'&&(empty($_smarty_tpl->tpl_vars['module_params']->value['remember'])||$_smarty_tpl->tpl_vars['module_params']->value['remember']!='n')) {?>
			<?php if ($_smarty_tpl->tpl_vars['prefs']->value['rememberme']=='always') {?>
				<input type="hidden" name="rme" id="login-remember-module-input_<?php echo $_smarty_tpl->tpl_vars['module_logo_instance']->value;?>
" value="on" />
			<?php } else { ?>
				<div class="form-group">
					<div class="checkbox rme">
						<label for="login-remember-module_<?php echo $_smarty_tpl->tpl_vars['module_logo_instance']->value;?>
"><input type="checkbox" name="rme" id="login-remember-module_<?php echo $_smarty_tpl->tpl_vars['module_logo_instance']->value;?>
" value="on" />
							Запомнить меня
							(для
							<?php if ($_smarty_tpl->tpl_vars['prefs']->value['remembertime']==300) {?>
								5 минут)
							<?php } elseif ($_smarty_tpl->tpl_vars['prefs']->value['remembertime']==900) {?>
								15 минут)
							<?php } elseif ($_smarty_tpl->tpl_vars['prefs']->value['remembertime']==1800) {?>
								30 минут)
							<?php } elseif ($_smarty_tpl->tpl_vars['prefs']->value['remembertime']==3600) {?>
								1 час)
							<?php } elseif ($_smarty_tpl->tpl_vars['prefs']->value['remembertime']==7200) {?>
								2 часов)
							<?php } elseif ($_smarty_tpl->tpl_vars['prefs']->value['remembertime']==36000) {?>
								10 часов)
							<?php } elseif ($_smarty_tpl->tpl_vars['prefs']->value['remembertime']==72000) {?>
								20 часов)
							<?php } elseif ($_smarty_tpl->tpl_vars['prefs']->value['remembertime']==86400) {?>
								1 день)
							<?php } elseif ($_smarty_tpl->tpl_vars['prefs']->value['remembertime']==604800) {?>
								1 нед.)
							<?php } elseif ($_smarty_tpl->tpl_vars['prefs']->value['remembertime']==2629743) {?>
								1 месяц)
							<?php } elseif ($_smarty_tpl->tpl_vars['prefs']->value['remembertime']==31556926) {?>
								1 год)
							<?php }?>
						</label>
					</div>
				</div>
			<?php }?>
		<?php }?>
		<div class="form-group text-center">
			<button class="btn btn-primary button submit" type="submit" name="login">Вход <!--i class="fa fa-arrow-circle-right"></i--></button>
		</div>
		<?php if ($_smarty_tpl->tpl_vars['module_params']->value['show_forgot']=='y'||$_smarty_tpl->tpl_vars['module_params']->value['show_register']=='y') {?>
			<div <?php if ($_smarty_tpl->tpl_vars['mode']->value=='header') {?>class="text-right" style="display:inline;"<?php }?>>
				<div <?php if ($_smarty_tpl->tpl_vars['mode']->value=='header') {?>style="display: inline-block"<?php }?>><ul class="<?php if ($_smarty_tpl->tpl_vars['mode']->value!='header') {?>list-unstyled nav"<?php } else { ?>list-inline"<?php }?>><?php if ($_smarty_tpl->tpl_vars['module_params']->value['show_forgot']=='y'&&$_smarty_tpl->tpl_vars['prefs']->value['forgotPass']=='y') {?><li class="pass"><a href="tiki-remind_password.php" title="Нажмите здесь если вы забыли свой пароль">Я забыл мой пароль</a></li><?php }
if ($_smarty_tpl->tpl_vars['module_params']->value['show_register']=='y'&&$_smarty_tpl->tpl_vars['prefs']->value['allowRegister']=='y') {
if ($_smarty_tpl->tpl_vars['mode']->value=='header'&&$_smarty_tpl->tpl_vars['module_params']->value['show_forgot']=='y'&&$_smarty_tpl->tpl_vars['prefs']->value['forgotPass']=='y') {?>&nbsp;|&nbsp;<?php }?><li class="register"><a href="tiki-register.php<?php if (!empty($_smarty_tpl->tpl_vars['prefs']->value['registerKey'])) {?>?key=<?php echo smarty_modifier_escape($_smarty_tpl->tpl_vars['prefs']->value['registerKey'],'url');
}?>" title="Нажмите здесь для регистрации"<?php if (!empty($_smarty_tpl->tpl_vars['prefs']->value['registerKey'])) {?> rel="nofollow"<?php }?>>Регистрация</a></li><?php }?></ul></div>
			</div>
		<?php } else { ?>
			&nbsp;
		<?php }?>
		<?php if ($_smarty_tpl->tpl_vars['prefs']->value['feature_switch_ssl_mode']=='y'&&($_smarty_tpl->tpl_vars['prefs']->value['https_login']=='allowed'||$_smarty_tpl->tpl_vars['prefs']->value['https_login']=='encouraged')) {?>
			<div>
				<a class="linkmodule" href="<?php echo smarty_modifier_escape($_smarty_tpl->tpl_vars['base_url_http']->value);
echo smarty_modifier_escape($_smarty_tpl->tpl_vars['prefs']->value['login_url']);?>
" title="Нажмите здесь для входа через протокол по умолчанию">Обычный</a>
				<a class="linkmodule" href="<?php echo smarty_modifier_escape($_smarty_tpl->tpl_vars['base_url_https']->value);
echo smarty_modifier_escape($_smarty_tpl->tpl_vars['prefs']->value['login_url']);?>
" title="Нажмите здесь для входа через защищенный протокол">Безопасный</a>
			</div>
		<?php }?>
		<?php if ($_smarty_tpl->tpl_vars['prefs']->value['feature_show_stay_in_ssl_mode']=='y'&&$_smarty_tpl->tpl_vars['show_stay_in_ssl_mode']->value=='y') {?>
			<div>
				<label for="login-stayssl_<?php echo $_smarty_tpl->tpl_vars['module_logo_instance']->value;?>
">Оставаться в безопасном ssl режиме:</label>?
				<input type="checkbox" name="stay_in_ssl_mode" id="login-stayssl_<?php echo $_smarty_tpl->tpl_vars['module_logo_instance']->value;?>
" <?php if ($_smarty_tpl->tpl_vars['stay_in_ssl_mode']->value=='y') {?>checked="checked"<?php }?> />
			</div>
		<?php }?>
		
		<input type="hidden" name="stay_in_ssl_mode_present" value="y" />
		<?php if ($_smarty_tpl->tpl_vars['prefs']->value['feature_show_stay_in_ssl_mode']!='y'||$_smarty_tpl->tpl_vars['show_stay_in_ssl_mode']->value!='y') {?>
			<input type="hidden" name="stay_in_ssl_mode" value="<?php echo smarty_modifier_escape($_smarty_tpl->tpl_vars['stay_in_ssl_mode']->value);?>
" />
		<?php }?>

		<?php if (isset($_smarty_tpl->tpl_vars['use_intertiki_auth']->value)&&$_smarty_tpl->tpl_vars['use_intertiki_auth']->value=='y') {?>
			<select name='intertiki'>
				<option value="">локальная учетная запись</option>
				<option value="">-----------</option>
				<?php  $_smarty_tpl->tpl_vars['i'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['i']->_loop = false;
 $_smarty_tpl->tpl_vars['k'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['intertiki']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['i']->key => $_smarty_tpl->tpl_vars['i']->value) {
$_smarty_tpl->tpl_vars['i']->_loop = true;
 $_smarty_tpl->tpl_vars['k']->value = $_smarty_tpl->tpl_vars['i']->key;
?>
					<option value="<?php echo $_smarty_tpl->tpl_vars['k']->value;?>
"><?php echo $_smarty_tpl->tpl_vars['k']->value;?>
</option>
				<?php } ?>
			</select>
		<?php }?>
		<div class="social-buttons">
			<?php if ($_smarty_tpl->tpl_vars['prefs']->value['socialnetworks_facebook_login']=='y'&&$_smarty_tpl->tpl_vars['mode']->value!="header"&&empty($_smarty_tpl->tpl_vars['user']->value)) {?>
				<?php echo smarty_function_button(array('_icon_name'=>'facebook','_text'=>"Log in via Facebook",'_class'=>'btn btn-social btn-facebook','_script'=>'tiki-socialnetworks.php','_auto_args'=>'request_facebook','request_facebook'=>true,'_title'=>"Log in via Facebook"),$_smarty_tpl);?>

			<?php }?>
			<?php if ($_smarty_tpl->tpl_vars['prefs']->value['socialnetworks_linkedin_login']=='y'&&$_smarty_tpl->tpl_vars['mode']->value!="header"&&empty($_smarty_tpl->tpl_vars['user']->value)) {?>
				<?php echo smarty_function_button(array('_icon_name'=>'linkedin','_text'=>"Log in via LinkedIn",'_class'=>'btn btn-social btn-linkedin','_script'=>'tiki-socialnetworks_linkedin.php','_auto_args'=>'connect','connect'=>'y','_title'=>"Log in via LinkedIn"),$_smarty_tpl);?>

			<?php }?>
		</div>
		<?php echo $_smarty_tpl->tpl_vars['close_tags']->value;?>

		<?php if ($_smarty_tpl->tpl_vars['prefs']->value['auth_method']=='openid'&&!$_smarty_tpl->tpl_vars['user']->value&&(!isset($_smarty_tpl->tpl_vars['registration']->value)||$_smarty_tpl->tpl_vars['registration']->value!='y')) {?>
			<form method="get" action="tiki-login_openid.php">
				<fieldset>
					<legend>OpenID Log in</legend>
					<div class="form-group">
						<div class="input-group input-group-sm">
							<input class="form-control" type="text" name="openid_url"/>
							<span class="input-group-btn"><button type="submit" class="btn btn-default" title="Вперед"><img alt="OpenID Login" class="img-circle" src="img/icons/login-OpenID-bg.gif"></button></span>
						</div>
						<span class="help-block"><a class="linkmodule tikihelp" target="_blank" href="http://doc.tiki.org/OpenID">Что такое OpenID?</a></span>
					</div>
				</fieldset>
			</form>
		<?php }?>
	<?php }?>
	<?php if ($_smarty_tpl->tpl_vars['mode']->value=="header") {?></div><?php }?>
<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_tikimodule(array('error'=>$_smarty_tpl->tpl_vars['module_params']->value['error'],'title'=>$_smarty_tpl->tpl_vars['tpl_module_title']->value,'name'=>"login_box",'flip'=>$_smarty_tpl->tpl_vars['module_params']->value['flip'],'decorations'=>$_smarty_tpl->tpl_vars['module_params']->value['decorations'],'nobox'=>$_smarty_tpl->tpl_vars['module_params']->value['nobox'],'notitle'=>$_smarty_tpl->tpl_vars['module_params']->value['notitle'],'style'=>$_smarty_tpl->tpl_vars['module_params']->value['style']), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_tag_stack);?>

<?php }} ?>
