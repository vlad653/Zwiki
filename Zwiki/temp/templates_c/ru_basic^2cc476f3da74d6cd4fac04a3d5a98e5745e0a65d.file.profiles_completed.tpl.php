<?php /* Smarty version Smarty-3.1.21, created on 2017-09-20 15:01:39
         compiled from "/var/www/html/Zwiki/templates/wizard/profiles_completed.tpl" */ ?>
<?php /*%%SmartyHeaderCode:64638716359c282d34b83b9-30262639%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '2cc476f3da74d6cd4fac04a3d5a98e5745e0a65d' => 
    array (
      0 => '/var/www/html/Zwiki/templates/wizard/profiles_completed.tpl',
      1 => 1490265336,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '64638716359c282d34b83b9-30262639',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'prefs' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.21',
  'unifunc' => 'content_59c282d34c4880_88172487',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_59c282d34c4880_88172487')) {function content_59c282d34c4880_88172487($_smarty_tpl) {?><?php if (!is_callable('smarty_function_icon')) include '/var/www/html/Zwiki/lib/smarty_tiki/function.icon.php';
if (!is_callable('smarty_block_tr')) include '/var/www/html/Zwiki/lib/smarty_tiki/block.tr.php';
?>

<div class="media">
	<?php echo smarty_function_icon(array('name'=>"check",'size'=>2),$_smarty_tpl);?>
Congratulations. You are done with the Configuration Profiles Wizard.<br>
	<br/><br/>
	<div class="media-body">
		<fieldset>
			<legend>Следующий?</legend>
			<div class="row">
				<div class="col-md-9">
				<ul>
					<li><?php $_smarty_tpl->smarty->_tag_stack[] = array('tr', array('_0'=>"tiki-wizard_admin.php?&stepNr=1&url=tiki-index.php")); $_block_repeat=true; echo smarty_block_tr(array('_0'=>"tiki-wizard_admin.php?&stepNr=1&url=tiki-index.php"), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
Visit the <a href="%0">Configuration Wizard</a> to continue configuring your site<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_tr(array('_0'=>"tiki-wizard_admin.php?&stepNr=1&url=tiki-index.php"), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_tag_stack);?>
.</li>
					<?php if ($_smarty_tpl->tpl_vars['prefs']->value['feature_wizard_user']=='y') {?>
						<li><?php $_smarty_tpl->smarty->_tag_stack[] = array('tr', array('_0'=>"tiki-wizard_user.php")); $_block_repeat=true; echo smarty_block_tr(array('_0'=>"tiki-wizard_user.php"), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
Visit the <a href="%0">User Wizard</a> to set some of your user preferences<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_tr(array('_0'=>"tiki-wizard_user.php"), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_tag_stack);?>
.</li>
					<?php }?>
					<li>Or click at the button <strong>Finish</strong> to end the admin wizard and go back to the where you were.</li>
				</ul>
				</div>
			</div>
		</fieldset>
	</div>
</div>
<?php }} ?>
