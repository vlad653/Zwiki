<?php /* Smarty version Smarty-3.1.21, created on 2017-09-23 11:41:41
         compiled from "/var/www/html/Zwiki/templates/tiki-listpages.tpl" */ ?>
<?php /*%%SmartyHeaderCode:89910063359c648758fc442-96972190%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'd0d755215d2757a45fd874a0cdf9217ecdffc7de' => 
    array (
      0 => '/var/www/html/Zwiki/templates/tiki-listpages.tpl',
      1 => 1499616657,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '89910063359c648758fc442-96972190',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'ts' => 0,
    'offset' => 0,
    'sort_mode' => 0,
    'find' => 0,
    'maxRecords' => 0,
    'mapview' => 0,
    'aliases' => 0,
    'alias' => 0,
    'tiki_p_edit' => 0,
    'prefs' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.21',
  'unifunc' => 'content_59c6487591e322_77472892',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_59c6487591e322_77472892')) {function content_59c6487591e322_77472892($_smarty_tpl) {?><?php if (!is_callable('smarty_block_title')) include '/var/www/html/Zwiki/lib/smarty_tiki/block.title.php';
if (!is_callable('smarty_block_tabset')) include '/var/www/html/Zwiki/lib/smarty_tiki/block.tabset.php';
if (!is_callable('smarty_block_tab')) include '/var/www/html/Zwiki/lib/smarty_tiki/block.tab.php';
if (!is_callable('smarty_block_wikiplugin')) include '/var/www/html/Zwiki/lib/smarty_tiki/block.wikiplugin.php';
if (!is_callable('smarty_modifier_sefurl')) include '/var/www/html/Zwiki/lib/smarty_tiki/modifier.sefurl.php';
if (!is_callable('smarty_block_tr')) include '/var/www/html/Zwiki/lib/smarty_tiki/block.tr.php';
?>
<?php $_smarty_tpl->smarty->_tag_stack[] = array('title', array('admpage'=>"wiki",'help'=>"Using Wiki Pages#List_Pages")); $_block_repeat=true; echo smarty_block_title(array('admpage'=>"wiki",'help'=>"Using Wiki Pages#List_Pages"), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
Страницы<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_title(array('admpage'=>"wiki",'help'=>"Using Wiki Pages#List_Pages"), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_tag_stack);?>


<?php $_smarty_tpl->smarty->_tag_stack[] = array('tabset', array('name'=>'tabs_wikipages')); $_block_repeat=true; echo smarty_block_tabset(array('name'=>'tabs_wikipages'), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>

	<?php $_smarty_tpl->smarty->_tag_stack[] = array('tab', array('name'=>"Список вики-страниц")); $_block_repeat=true; echo smarty_block_tab(array('name'=>"Список вики-страниц"), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>

		<h2>Список вики-страниц</h2>
		<?php if (!$_smarty_tpl->tpl_vars['ts']->value['enabled']) {?>
			<div class="clearfix">
				<?php echo $_smarty_tpl->getSubTemplate ('find.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('autocomplete'=>'pagename','find_show_languages'=>'y','find_show_languages_excluded'=>'y','find_show_categories_multi'=>'y','find_show_num_rows'=>'y','find_in'=>"<ul><li>Название страницы</li></ul>"), 0);?>

			</div>
		<?php } else { ?>
			<?php echo $_smarty_tpl->getSubTemplate ('find.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('map_only'=>'y'), 0);?>

		<?php }?>
		<form name="checkform" method="get">
			<input type="hidden" name="offset" value="<?php echo smarty_modifier_escape($_smarty_tpl->tpl_vars['offset']->value);?>
">
			<input type="hidden" name="sort_mode" value="<?php echo smarty_modifier_escape($_smarty_tpl->tpl_vars['sort_mode']->value);?>
">
			<input type="hidden" name="find" value="<?php echo smarty_modifier_escape($_smarty_tpl->tpl_vars['find']->value);?>
">
			<input type="hidden" name="maxRecords" value="<?php echo smarty_modifier_escape($_smarty_tpl->tpl_vars['maxRecords']->value);?>
">
		</form>
		<?php if (isset($_smarty_tpl->tpl_vars['mapview']->value)&&$_smarty_tpl->tpl_vars['mapview']->value) {?>
			<?php $_smarty_tpl->smarty->_tag_stack[] = array('wikiplugin', array('_name'=>"map",'scope'=>".listpagesmap .geolocated",'width'=>"400",'height'=>"400")); $_block_repeat=true; echo smarty_block_wikiplugin(array('_name'=>"map",'scope'=>".listpagesmap .geolocated",'width'=>"400",'height'=>"400"), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();
$_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_wikiplugin(array('_name'=>"map",'scope'=>".listpagesmap .geolocated",'width'=>"400",'height'=>"400"), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_tag_stack);?>

		<?php }?>
		<div id="tiki-listpages-content">
			<?php if ($_smarty_tpl->tpl_vars['aliases']->value) {?>
				<div class="aliases">
					<strong>Псевдонимов страниц:</strong>
					<ul>
					<?php  $_smarty_tpl->tpl_vars['alias'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['alias']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['aliases']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['alias']->key => $_smarty_tpl->tpl_vars['alias']->value) {
$_smarty_tpl->tpl_vars['alias']->_loop = true;
?>
						<li>
							<a href="<?php echo smarty_modifier_sefurl($_smarty_tpl->tpl_vars['alias']->value['toPage']);?>
" title="<?php echo smarty_modifier_escape($_smarty_tpl->tpl_vars['alias']->value['fromPage']);?>
" class="alias"><?php echo smarty_modifier_escape($_smarty_tpl->tpl_vars['alias']->value['toPage']);?>
</a>
						</li>
					<?php } ?>
					</ul>
				</div>
			<?php }?>
			<?php echo $_smarty_tpl->getSubTemplate ('tiki-listpages_content.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('clean'=>'n'), 0);?>

		</div>
	<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_tab(array('name'=>"Список вики-страниц"), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_tag_stack);?>


	<?php if ($_smarty_tpl->tpl_vars['tiki_p_edit']->value=='y') {?>
		<?php $_smarty_tpl->smarty->_tag_stack[] = array('tab', array('name'=>"Создать вики-страницу")); $_block_repeat=true; echo smarty_block_tab(array('name'=>"Создать вики-страницу"), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>

			<h2>Создать вики-страницу</h2><br>
			<div>
				<form method="get" action="tiki-editpage.php" class="form-horizontal">
					<div class="form-group">
						<label class="control-label col-sm-3">Имя вики-страницы</label>
						<div class="col-sm-9">
							<input class="form-control" id="pagename" type="text" name="page">
						</div>
					</div>
					<?php if ($_smarty_tpl->tpl_vars['prefs']->value['namespace_enabled']=='y'&&$_smarty_tpl->tpl_vars['prefs']->value['namespace_default']) {?>
					<div class="form-group">
						<label class="control-label col-sm-3"><?php $_smarty_tpl->smarty->_tag_stack[] = array('tr', array('_0'=>$_smarty_tpl->tpl_vars['prefs']->value['namespace_default'])); $_block_repeat=true; echo smarty_block_tr(array('_0'=>$_smarty_tpl->tpl_vars['prefs']->value['namespace_default']), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
Create page within %0<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_tr(array('_0'=>$_smarty_tpl->tpl_vars['prefs']->value['namespace_default']), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_tag_stack);?>
</label>
						<div class="col-sm-9">
							<input type="checkbox" name="namespace" value="<?php echo smarty_modifier_escape($_smarty_tpl->tpl_vars['prefs']->value['namespace_default']);?>
" checked="checked">
						</div>
					</div>
					<?php }?>
					<div class="form-group">
						<label class="control-label col-sm-3"></label>
						<div class="col-sm-9">
							<input class="btn btn-primary" type="submit" name="quickedit" value="Создать страницу">
						</div>
					</div>

				</form>
			</div>
		<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_tab(array('name'=>"Создать вики-страницу"), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_tag_stack);?>

	<?php }?>

<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_tabset(array('name'=>'tabs_wikipages'), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_tag_stack);?>

<?php }} ?>
