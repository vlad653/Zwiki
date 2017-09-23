<?php /* Smarty version Smarty-3.1.21, created on 2017-09-20 14:59:42
         compiled from "/var/www/html/Zwiki/templates/wizard/profiles_useful_admin_confs.tpl" */ ?>
<?php /*%%SmartyHeaderCode:87238662059c2825ef060e6-92652683%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '02d5026f41c4afbac88323434acec6c481829061' => 
    array (
      0 => '/var/www/html/Zwiki/templates/wizard/profiles_useful_admin_confs.tpl',
      1 => 1491804112,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '87238662059c2825ef060e6-92652683',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'tikiMajorVersion' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.21',
  'unifunc' => 'content_59c2825ef0e630_85748708',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_59c2825ef0e630_85748708')) {function content_59c2825ef0e630_85748708($_smarty_tpl) {?><?php if (!is_callable('smarty_function_icon')) include '/var/www/html/Zwiki/lib/smarty_tiki/function.icon.php';
?>

<div class="media">
	<span class="pull-left fa-stack fa-lg margin-right-18em" alt="Configuration Profiles Wizard" title="Configuration Profiles Wizard" >
		<i class="fa fa-cubes fa-stack-2x"></i>
		<i class="fa fa-rotate-270 fa-magic fa-stack-2x margin-left-9em"></i>
	</span>
	Check out some useful changes in the configuration for site administrators to ease debugging. </br></br></br>
	<div class="media-body">
		<fieldset>
			<legend>Профили:</legend>
			<div class="row">
				<div class="col-md-12">
					<div class="row">
						<div class="col-md-6">
							<img class="pull-left" src="img/icons/large/profile_debug_mode48x48.png" alt="Debug Mode Enabled" />
							<h4>Debug Mode Enabled</h4>
							(<a href="tiki-admin.php?profile=Debug_Mode_Enabled&show_details_for=Debug_Mode_Enabled&categories%5B%5D=<?php echo $_smarty_tpl->tpl_vars['tikiMajorVersion']->value;?>
.x&repository=http%3a%2f%2fprofiles.tiki.org%2fprofiles&page=profiles&preloadlist=y&list=List#step2" target="_blank">apply profile now</a>)<br/>
						</div>
						<div class="col-md-6">
							<h4>Debug Mode Disabled</h4>
							(<a href="tiki-admin.php?profile=Debug_Mode_Disabled&show_details_for=Debug_Mode_Disabled&categories%5B%5D=<?php echo $_smarty_tpl->tpl_vars['tikiMajorVersion']->value;?>
.x&repository=http%3a%2f%2fprofiles.tiki.org%2fprofiles&page=profiles&preloadlist=y&list=List#step2" target="_blank">apply profile now</a>)
						</div>
					</div>
					Profile <i>Debug_Mode_Enabled</i> will help you detect potential errors and warnings which are hidden otherwise.
					Once applied, you might like to apply the opposite profile: <i>Debug_Mode_Disabled</i>, if not changing the appropriate settings by hand.
					<br/>
					<a href="https://dev.tiki.org/Recovery" target="tikihelp" class="tikihelp" title="Debug Mode Enabled & Debug Mode Disabled:
						More details:
						<ul>
							<li>Enables/Disables debugging tools</li>
							<li>Enables/Disables logging tools</li>
							<li>Disables/Enables redirections to similar pages</li>
							<li>Enables/Disables error and warning display to all users, not only admins </li>
						</ul>
						Click to read more"
					>
						<?php echo smarty_function_icon(array('name'=>"help"),$_smarty_tpl);?>

					</a>
				</div>
				
			</div>
		</fieldset>
		<br>
	</div>
</div>
<?php }} ?>
