<?php /* Smarty version Smarty-3.1.21, created on 2017-09-20 15:17:45
         compiled from "/var/www/html/Zwiki/templates/admin/include_sefurl.tpl" */ ?>
<?php /*%%SmartyHeaderCode:105292447559c28699075901-70388715%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '0d3f09efa00529257c795132933734fb43d6b328' => 
    array (
      0 => '/var/www/html/Zwiki/templates/admin/include_sefurl.tpl',
      1 => 1491117043,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '105292447559c28699075901-70388715',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'httpd' => 0,
    'IIS_UrlRewriteModule' => 0,
    'configurationFile' => 0,
    'enabledFileName' => 0,
    'referenceFileName' => 0,
    'rewritebaseSetting' => 0,
    'url_path' => 0,
    'base_url_canonical_default' => 0,
    'prefs' => 0,
    'path' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.21',
  'unifunc' => 'content_59c286990af3b1_34629887',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_59c286990af3b1_34629887')) {function content_59c286990af3b1_34629887($_smarty_tpl) {?><?php if (!is_callable('smarty_block_remarksbox')) include '/var/www/html/Zwiki/lib/smarty_tiki/block.remarksbox.php';
if (!is_callable('smarty_function_preference')) include '/var/www/html/Zwiki/lib/smarty_tiki/function.preference.php';
if (!is_callable('smarty_block_tr')) include '/var/www/html/Zwiki/lib/smarty_tiki/block.tr.php';
?>
<?php $_smarty_tpl->smarty->_tag_stack[] = array('remarksbox', array('type'=>"tip",'title'=>"Подсказка")); $_block_repeat=true; echo smarty_block_remarksbox(array('type'=>"tip",'title'=>"Подсказка"), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>

	See also <a class="alert-link" href="tiki-admin.php?page=metatags">Meta tags</a>.
<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_remarksbox(array('type'=>"tip",'title'=>"Подсказка"), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_tag_stack);?>

<form class="admin form-horizontal" method="post" action="tiki-admin.php?page=sefurl" role="form" class="form">
	<?php echo $_smarty_tpl->getSubTemplate ('access/include_ticket.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

	<div class="t_navbar clearfix">
		<?php echo $_smarty_tpl->getSubTemplate ('admin/include_apply_top.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

	</div>
	<fieldset>
		<legend>Activate the feature</legend>
		<?php echo smarty_function_preference(array('name'=>'feature_sefurl','visible'=>"always"),$_smarty_tpl);?>

		<?php if ($_smarty_tpl->tpl_vars['httpd']->value=='IIS'&&!$_smarty_tpl->tpl_vars['IIS_UrlRewriteModule']->value) {?>
			<?php $_smarty_tpl->smarty->_tag_stack[] = array('remarksbox', array('type'=>"warning",'title'=>"Внимание")); $_block_repeat=true; echo smarty_block_remarksbox(array('type'=>"warning",'title'=>"Внимание"), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>

				SEFURL requires the <strong>URL Rewrite module</strong> for IIS. You do not seem to have this module installed.
				Please see <a class="alert-link" href="http://doc.tiki.org/Windows+Server+Install">Windows Server Install</a> on tiki.org for more information.
			<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_remarksbox(array('type'=>"warning",'title'=>"Внимание"), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_tag_stack);?>

		<?php } else { ?>
			<?php if ($_smarty_tpl->tpl_vars['configurationFile']->value=='missing') {?>
				<?php $_smarty_tpl->smarty->_tag_stack[] = array('remarksbox', array('type'=>"warning",'title'=>"Внимание")); $_block_repeat=true; echo smarty_block_remarksbox(array('type'=>"warning",'title'=>"Внимание"), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>

					<?php $_smarty_tpl->smarty->_tag_stack[] = array('tr', array('_0'=>$_smarty_tpl->tpl_vars['enabledFileName']->value)); $_block_repeat=true; echo smarty_block_tr(array('_0'=>$_smarty_tpl->tpl_vars['enabledFileName']->value), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
SEFURL will not work unless Tiki specific directives are deployed to the %0 file.<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_tr(array('_0'=>$_smarty_tpl->tpl_vars['enabledFileName']->value), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_tag_stack);?>

					<?php $_smarty_tpl->smarty->_tag_stack[] = array('tr', array('_0'=>"<strong>".((string)$_smarty_tpl->tpl_vars['referenceFileName']->value)."</strong>",'_1'=>"<strong>".((string)$_smarty_tpl->tpl_vars['enabledFileName']->value)."</strong>")); $_block_repeat=true; echo smarty_block_tr(array('_0'=>"<strong>".((string)$_smarty_tpl->tpl_vars['referenceFileName']->value)."</strong>",'_1'=>"<strong>".((string)$_smarty_tpl->tpl_vars['enabledFileName']->value)."</strong>"), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
To enable this file, simply copy the %0 file (located in the main directory of your Tiki installation) to %1.<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_tr(array('_0'=>"<strong>".((string)$_smarty_tpl->tpl_vars['referenceFileName']->value)."</strong>",'_1'=>"<strong>".((string)$_smarty_tpl->tpl_vars['enabledFileName']->value)."</strong>"), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_tag_stack);?>

					<?php $_smarty_tpl->smarty->_tag_stack[] = array('tr', array('_0'=>$_smarty_tpl->tpl_vars['enabledFileName']->value)); $_block_repeat=true; echo smarty_block_tr(array('_0'=>$_smarty_tpl->tpl_vars['enabledFileName']->value), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
If you need to keep an existing (non Tiki) %0 file, just add Tiki directives to it.<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_tr(array('_0'=>$_smarty_tpl->tpl_vars['enabledFileName']->value), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_tag_stack);?>

					When you upgrade Tiki (e.g. from version 7 to version 8), make sure to make use of the new URL rewriting configuration file.
				<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_remarksbox(array('type'=>"warning",'title'=>"Внимание"), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_tag_stack);?>

			<?php } elseif ($_smarty_tpl->tpl_vars['configurationFile']->value=='no reference') {?>
				<?php $_smarty_tpl->smarty->_tag_stack[] = array('remarksbox', array('type'=>"warning",'title'=>"Внимание")); $_block_repeat=true; echo smarty_block_remarksbox(array('type'=>"warning",'title'=>"Внимание"), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>

					<?php $_smarty_tpl->smarty->_tag_stack[] = array('tr', array('_0'=>$_smarty_tpl->tpl_vars['referenceFileName']->value)); $_block_repeat=true; echo smarty_block_tr(array('_0'=>$_smarty_tpl->tpl_vars['referenceFileName']->value), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
%0 file is missing.<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_tr(array('_0'=>$_smarty_tpl->tpl_vars['referenceFileName']->value), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_tag_stack);?>
 Unable to verify that your URL rewriting configuration is up to date. SEFURL may not work completely or correctly if Tiki URL rewriting configuration is not current.
				<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_remarksbox(array('type'=>"warning",'title'=>"Внимание"), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_tag_stack);?>

			<?php } elseif ($_smarty_tpl->tpl_vars['configurationFile']->value=='unexpected reference'||$_smarty_tpl->tpl_vars['configurationFile']->value=='unexpected enabled') {?>
				<?php $_smarty_tpl->smarty->_tag_stack[] = array('remarksbox', array('type'=>"warning",'title'=>"Внимание")); $_block_repeat=true; echo smarty_block_remarksbox(array('type'=>"warning",'title'=>"Внимание"), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>

					<?php $_smarty_tpl->smarty->_tag_stack[] = array('tr', array('_0'=>$_smarty_tpl->tpl_vars['enabledFileName']->value)); $_block_repeat=true; echo smarty_block_tr(array('_0'=>$_smarty_tpl->tpl_vars['enabledFileName']->value), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
%0 is not in the expected format.<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_tr(array('_0'=>$_smarty_tpl->tpl_vars['enabledFileName']->value), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_tag_stack);?>
 Unable to verify that your URL rewriting configuration is up to date. SEFURL may not work completely or correctly if Tiki URL rewriting configuration is not current.<br>
					<?php $_smarty_tpl->smarty->_tag_stack[] = array('tr', array('_0'=>$_smarty_tpl->tpl_vars['enabledFileName']->value)); $_block_repeat=true; echo smarty_block_tr(array('_0'=>$_smarty_tpl->tpl_vars['enabledFileName']->value), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
%0 may simply be outdated.<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_tr(array('_0'=>$_smarty_tpl->tpl_vars['enabledFileName']->value), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_tag_stack);?>

					<?php $_smarty_tpl->smarty->_tag_stack[] = array('tr', array('_0'=>"<strong>".((string)$_smarty_tpl->tpl_vars['referenceFileName']->value)."</strong>",'_1'=>"<strong>".((string)$_smarty_tpl->tpl_vars['enabledFileName']->value)."</strong>")); $_block_repeat=true; echo smarty_block_tr(array('_0'=>"<strong>".((string)$_smarty_tpl->tpl_vars['referenceFileName']->value)."</strong>",'_1'=>"<strong>".((string)$_smarty_tpl->tpl_vars['enabledFileName']->value)."</strong>"), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
To update this file, if it was not customized, copy the %0 file (located in the main directory of your Tiki installation) to %1, overwriting the latter.<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_tr(array('_0'=>"<strong>".((string)$_smarty_tpl->tpl_vars['referenceFileName']->value)."</strong>",'_1'=>"<strong>".((string)$_smarty_tpl->tpl_vars['enabledFileName']->value)."</strong>"), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_tag_stack);?>

				<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_remarksbox(array('type'=>"warning",'title'=>"Внимание"), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_tag_stack);?>

			<?php } elseif ($_smarty_tpl->tpl_vars['configurationFile']->value=='outdated') {?>
				<?php $_smarty_tpl->smarty->_tag_stack[] = array('remarksbox', array('type'=>"warning",'title'=>"Внимание")); $_block_repeat=true; echo smarty_block_remarksbox(array('type'=>"warning",'title'=>"Внимание"), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>

					<?php $_smarty_tpl->smarty->_tag_stack[] = array('tr', array('_0'=>$_smarty_tpl->tpl_vars['enabledFileName']->value)); $_block_repeat=true; echo smarty_block_tr(array('_0'=>$_smarty_tpl->tpl_vars['enabledFileName']->value), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
%0 file is out of date.<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_tr(array('_0'=>$_smarty_tpl->tpl_vars['enabledFileName']->value), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_tag_stack);?>
 SEFURL may not work completely or correctly if Tiki URL rewriting configuration is not current.
					<?php $_smarty_tpl->smarty->_tag_stack[] = array('tr', array('_0'=>"<strong>".((string)$_smarty_tpl->tpl_vars['referenceFileName']->value)."</strong>",'_1'=>"<strong>".((string)$_smarty_tpl->tpl_vars['enabledFileName']->value)."</strong>")); $_block_repeat=true; echo smarty_block_tr(array('_0'=>"<strong>".((string)$_smarty_tpl->tpl_vars['referenceFileName']->value)."</strong>",'_1'=>"<strong>".((string)$_smarty_tpl->tpl_vars['enabledFileName']->value)."</strong>"), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
To update this file, if it was not customized, copy the %0 file (located in the main directory of your Tiki installation) to %1, overwriting the latter.<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_tr(array('_0'=>"<strong>".((string)$_smarty_tpl->tpl_vars['referenceFileName']->value)."</strong>",'_1'=>"<strong>".((string)$_smarty_tpl->tpl_vars['enabledFileName']->value)."</strong>"), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_tag_stack);?>

				<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_remarksbox(array('type'=>"warning",'title'=>"Внимание"), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_tag_stack);?>

			<?php }?>
			<?php if (!empty($_smarty_tpl->tpl_vars['rewritebaseSetting']->value)) {?>
				<?php $_smarty_tpl->smarty->_tag_stack[] = array('remarksbox', array('type'=>"warning",'title'=>"Внимание")); $_block_repeat=true; echo smarty_block_remarksbox(array('type'=>"warning",'title'=>"Внимание"), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>

					The RewriteBase directive seems not to be set up correctly. This is required for sefurl to function correctly.<br>
					<?php $_smarty_tpl->smarty->_tag_stack[] = array('tr', array('_0'=>$_smarty_tpl->tpl_vars['enabledFileName']->value,'_1'=>$_smarty_tpl->tpl_vars['rewritebaseSetting']->value,'_2'=>$_smarty_tpl->tpl_vars['url_path']->value)); $_block_repeat=true; echo smarty_block_tr(array('_0'=>$_smarty_tpl->tpl_vars['enabledFileName']->value,'_1'=>$_smarty_tpl->tpl_vars['rewritebaseSetting']->value,'_2'=>$_smarty_tpl->tpl_vars['url_path']->value), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
The current value in %0 is %1 but the base url for this site is %2<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_tr(array('_0'=>$_smarty_tpl->tpl_vars['enabledFileName']->value,'_1'=>$_smarty_tpl->tpl_vars['rewritebaseSetting']->value,'_2'=>$_smarty_tpl->tpl_vars['url_path']->value), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_tag_stack);?>

				<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_remarksbox(array('type'=>"warning",'title'=>"Внимание"), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_tag_stack);?>

			<?php }?>
		<?php }?>
		<?php echo smarty_function_preference(array('name'=>'feature_canonical_url'),$_smarty_tpl);?>

		<div id="feature_canonical_url_childcontainer" class="clearfix">
			<?php echo smarty_function_preference(array('name'=>'feature_canonical_domain'),$_smarty_tpl);?>

			<span class="help-block col-md-8 col-md-push-4">
				For example, if the field is left blank, the canonical URL domain is: <?php echo $_smarty_tpl->tpl_vars['base_url_canonical_default']->value;?>

			</span>
		</div>
		<?php echo smarty_function_preference(array('name'=>'wiki_url_scheme'),$_smarty_tpl);?>

	</fieldset>
	<fieldset>
		<legend>Настройки</legend>
		<?php echo smarty_function_preference(array('name'=>'feature_sefurl_filter'),$_smarty_tpl);?>

		<div class="adminoptionbox clearfix">
			<label for="feature_sefurl_paths" class="control-label col-md-4">
				URL parameters
			</label>
			<?php $_smarty_tpl->_capture_stack[0][] = array('paths', null, null); ob_start();
$_smarty_tpl->tpl_vars['path'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['path']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['prefs']->value['feature_sefurl_paths']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
 $_smarty_tpl->tpl_vars['path']->total= $_smarty_tpl->_count($_from);
 $_smarty_tpl->tpl_vars['path']->iteration=0;
foreach ($_from as $_smarty_tpl->tpl_vars['path']->key => $_smarty_tpl->tpl_vars['path']->value) {
$_smarty_tpl->tpl_vars['path']->_loop = true;
 $_smarty_tpl->tpl_vars['path']->iteration++;
 $_smarty_tpl->tpl_vars['path']->last = $_smarty_tpl->tpl_vars['path']->iteration === $_smarty_tpl->tpl_vars['path']->total;
 $_smarty_tpl->tpl_vars['smarty']->value['foreach']['loop']['last'] = $_smarty_tpl->tpl_vars['path']->last;
echo $_smarty_tpl->tpl_vars['path']->value;
if (!$_smarty_tpl->getVariable('smarty')->value['foreach']['loop']['last']) {?>/<?php }
}
list($_capture_buffer, $_capture_assign, $_capture_append) = array_pop($_smarty_tpl->_capture_stack[0]);
if (!empty($_capture_buffer)) {
 if (isset($_capture_assign)) $_smarty_tpl->assign($_capture_assign, ob_get_contents());
 if (isset( $_capture_append)) $_smarty_tpl->append( $_capture_append, ob_get_contents());
 Smarty::$_smarty_vars['capture'][$_capture_buffer]=ob_get_clean();
} else $_smarty_tpl->capture_error();?>
			<div class="col-md-8">
				<input type="text" class="form-control" id="feature_sefurl_paths" name="feature_sefurl_paths" value="<?php echo smarty_modifier_escape(Smarty::$_smarty_vars['capture']['paths']);?>
" />
				<span class="help-block">
					List of Url Parameters that should go in the path
				</span>
			</div>
		</div>
		<?php echo smarty_function_preference(array('name'=>'feature_sefurl_title_article'),$_smarty_tpl);?>

		<?php echo smarty_function_preference(array('name'=>'feature_sefurl_title_blog'),$_smarty_tpl);?>

		<?php echo smarty_function_preference(array('name'=>'feature_sefurl_tracker_prefixalias'),$_smarty_tpl);?>

		<?php echo smarty_function_preference(array('name'=>'url_only_ascii'),$_smarty_tpl);?>

	</fieldset>
	<?php echo $_smarty_tpl->getSubTemplate ('admin/include_apply_bottom.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

</form><?php }} ?>
