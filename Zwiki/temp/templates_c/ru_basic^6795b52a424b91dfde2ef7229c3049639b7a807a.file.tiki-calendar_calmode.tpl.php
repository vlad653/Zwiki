<?php /* Smarty version Smarty-3.1.21, created on 2017-09-23 08:32:13
         compiled from "/var/www/html/Zwiki/templates/tiki-calendar_calmode.tpl" */ ?>
<?php /*%%SmartyHeaderCode:11649396559c61c0d26f9a1-46394715%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '6795b52a424b91dfde2ef7229c3049639b7a807a' => 
    array (
      0 => '/var/www/html/Zwiki/templates/tiki-calendar_calmode.tpl',
      1 => 1499062290,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '11649396559c61c0d26f9a1-46394715',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'daysnames' => 0,
    'viewdays' => 0,
    'cell' => 0,
    'myurl' => 0,
    'weekNumbers' => 0,
    'weekdays' => 0,
    'today' => 0,
    'prefs' => 0,
    'tiki_p_add_events' => 0,
    'listcals' => 0,
    'displayedcals' => 0,
    'calendarId' => 0,
    'infocals' => 0,
    'over' => 0,
    'trunc' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.21',
  'unifunc' => 'content_59c61c0d2bc1e6_06934399',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_59c61c0d2bc1e6_06934399')) {function content_59c61c0d2bc1e6_06934399($_smarty_tpl) {?><?php if (!is_callable('smarty_function_cycle')) include '/var/www/html/Zwiki/vendor_bundled/vendor/smarty/smarty/libs/plugins/function.cycle.php';
if (!is_callable('smarty_modifier_tiki_date_format')) include '/var/www/html/Zwiki/lib/smarty_tiki/modifier.tiki_date_format.php';
if (!is_callable('smarty_function_icon')) include '/var/www/html/Zwiki/lib/smarty_tiki/function.icon.php';
if (!is_callable('smarty_function_popup')) include '/var/www/html/Zwiki/lib/smarty_tiki/function.popup.php';
if (!is_callable('smarty_modifier_truncate')) include '/var/www/html/Zwiki/lib/smarty_tiki/modifier.truncate.php';
?>
<div class="table-responsive">
	<table class="caltable table">
		<tr>
			<td style="width: 1%;" class="heading weeks"></td>
			<?php if (isset($_smarty_tpl->tpl_vars['smarty']->value['section']['dn'])) unset($_smarty_tpl->tpl_vars['smarty']->value['section']['dn']);
$_smarty_tpl->tpl_vars['smarty']->value['section']['dn']['name'] = 'dn';
$_smarty_tpl->tpl_vars['smarty']->value['section']['dn']['loop'] = is_array($_loop=$_smarty_tpl->tpl_vars['daysnames']->value) ? count($_loop) : max(0, (int) $_loop); unset($_loop);
$_smarty_tpl->tpl_vars['smarty']->value['section']['dn']['show'] = true;
$_smarty_tpl->tpl_vars['smarty']->value['section']['dn']['max'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['dn']['loop'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['dn']['step'] = 1;
$_smarty_tpl->tpl_vars['smarty']->value['section']['dn']['start'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['dn']['step'] > 0 ? 0 : $_smarty_tpl->tpl_vars['smarty']->value['section']['dn']['loop']-1;
if ($_smarty_tpl->tpl_vars['smarty']->value['section']['dn']['show']) {
    $_smarty_tpl->tpl_vars['smarty']->value['section']['dn']['total'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['dn']['loop'];
    if ($_smarty_tpl->tpl_vars['smarty']->value['section']['dn']['total'] == 0)
        $_smarty_tpl->tpl_vars['smarty']->value['section']['dn']['show'] = false;
} else
    $_smarty_tpl->tpl_vars['smarty']->value['section']['dn']['total'] = 0;
if ($_smarty_tpl->tpl_vars['smarty']->value['section']['dn']['show']):

            for ($_smarty_tpl->tpl_vars['smarty']->value['section']['dn']['index'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['dn']['start'], $_smarty_tpl->tpl_vars['smarty']->value['section']['dn']['iteration'] = 1;
                 $_smarty_tpl->tpl_vars['smarty']->value['section']['dn']['iteration'] <= $_smarty_tpl->tpl_vars['smarty']->value['section']['dn']['total'];
                 $_smarty_tpl->tpl_vars['smarty']->value['section']['dn']['index'] += $_smarty_tpl->tpl_vars['smarty']->value['section']['dn']['step'], $_smarty_tpl->tpl_vars['smarty']->value['section']['dn']['iteration']++):
$_smarty_tpl->tpl_vars['smarty']->value['section']['dn']['rownum'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['dn']['iteration'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['dn']['index_prev'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['dn']['index'] - $_smarty_tpl->tpl_vars['smarty']->value['section']['dn']['step'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['dn']['index_next'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['dn']['index'] + $_smarty_tpl->tpl_vars['smarty']->value['section']['dn']['step'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['dn']['first']      = ($_smarty_tpl->tpl_vars['smarty']->value['section']['dn']['iteration'] == 1);
$_smarty_tpl->tpl_vars['smarty']->value['section']['dn']['last']       = ($_smarty_tpl->tpl_vars['smarty']->value['section']['dn']['iteration'] == $_smarty_tpl->tpl_vars['smarty']->value['section']['dn']['total']);
?>
				<?php if (in_array($_smarty_tpl->getVariable('smarty')->value['section']['dn']['index'],$_smarty_tpl->tpl_vars['viewdays']->value)) {?>
					<td id="top_<?php echo $_smarty_tpl->getVariable('smarty')->value['section']['dn']['index'];?>
" class="heading" style="width:14%;"><?php echo $_smarty_tpl->tpl_vars['daysnames']->value[$_smarty_tpl->getVariable('smarty')->value['section']['dn']['index']];?>
</td>
				<?php }?>
			<?php endfor; endif; ?>
		</tr>

		<?php if (isset($_smarty_tpl->tpl_vars['smarty']->value['section']['w'])) unset($_smarty_tpl->tpl_vars['smarty']->value['section']['w']);
$_smarty_tpl->tpl_vars['smarty']->value['section']['w']['name'] = 'w';
$_smarty_tpl->tpl_vars['smarty']->value['section']['w']['loop'] = is_array($_loop=$_smarty_tpl->tpl_vars['cell']->value) ? count($_loop) : max(0, (int) $_loop); unset($_loop);
$_smarty_tpl->tpl_vars['smarty']->value['section']['w']['show'] = true;
$_smarty_tpl->tpl_vars['smarty']->value['section']['w']['max'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['w']['loop'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['w']['step'] = 1;
$_smarty_tpl->tpl_vars['smarty']->value['section']['w']['start'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['w']['step'] > 0 ? 0 : $_smarty_tpl->tpl_vars['smarty']->value['section']['w']['loop']-1;
if ($_smarty_tpl->tpl_vars['smarty']->value['section']['w']['show']) {
    $_smarty_tpl->tpl_vars['smarty']->value['section']['w']['total'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['w']['loop'];
    if ($_smarty_tpl->tpl_vars['smarty']->value['section']['w']['total'] == 0)
        $_smarty_tpl->tpl_vars['smarty']->value['section']['w']['show'] = false;
} else
    $_smarty_tpl->tpl_vars['smarty']->value['section']['w']['total'] = 0;
if ($_smarty_tpl->tpl_vars['smarty']->value['section']['w']['show']):

            for ($_smarty_tpl->tpl_vars['smarty']->value['section']['w']['index'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['w']['start'], $_smarty_tpl->tpl_vars['smarty']->value['section']['w']['iteration'] = 1;
                 $_smarty_tpl->tpl_vars['smarty']->value['section']['w']['iteration'] <= $_smarty_tpl->tpl_vars['smarty']->value['section']['w']['total'];
                 $_smarty_tpl->tpl_vars['smarty']->value['section']['w']['index'] += $_smarty_tpl->tpl_vars['smarty']->value['section']['w']['step'], $_smarty_tpl->tpl_vars['smarty']->value['section']['w']['iteration']++):
$_smarty_tpl->tpl_vars['smarty']->value['section']['w']['rownum'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['w']['iteration'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['w']['index_prev'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['w']['index'] - $_smarty_tpl->tpl_vars['smarty']->value['section']['w']['step'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['w']['index_next'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['w']['index'] + $_smarty_tpl->tpl_vars['smarty']->value['section']['w']['step'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['w']['first']      = ($_smarty_tpl->tpl_vars['smarty']->value['section']['w']['iteration'] == 1);
$_smarty_tpl->tpl_vars['smarty']->value['section']['w']['last']       = ($_smarty_tpl->tpl_vars['smarty']->value['section']['w']['iteration'] == $_smarty_tpl->tpl_vars['smarty']->value['section']['w']['total']);
?>
			<tr id="row_<?php echo $_smarty_tpl->getVariable('smarty')->value['section']['w']['index'];?>
" style="height:80px">
				<td class="heading weeks"><a href="<?php echo $_smarty_tpl->tpl_vars['myurl']->value;?>
?viewmode=week&amp;todate=<?php echo $_smarty_tpl->tpl_vars['cell']->value[$_smarty_tpl->getVariable('smarty')->value['section']['w']['index']][0]['day'];?>
" title="Просмотреть текущую неделю"><?php echo $_smarty_tpl->tpl_vars['weekNumbers']->value[$_smarty_tpl->getVariable('smarty')->value['section']['w']['index']];?>
</a></td>
				<?php if (isset($_smarty_tpl->tpl_vars['smarty']->value['section']['d'])) unset($_smarty_tpl->tpl_vars['smarty']->value['section']['d']);
$_smarty_tpl->tpl_vars['smarty']->value['section']['d']['name'] = 'd';
$_smarty_tpl->tpl_vars['smarty']->value['section']['d']['loop'] = is_array($_loop=$_smarty_tpl->tpl_vars['weekdays']->value) ? count($_loop) : max(0, (int) $_loop); unset($_loop);
$_smarty_tpl->tpl_vars['smarty']->value['section']['d']['show'] = true;
$_smarty_tpl->tpl_vars['smarty']->value['section']['d']['max'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['d']['loop'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['d']['step'] = 1;
$_smarty_tpl->tpl_vars['smarty']->value['section']['d']['start'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['d']['step'] > 0 ? 0 : $_smarty_tpl->tpl_vars['smarty']->value['section']['d']['loop']-1;
if ($_smarty_tpl->tpl_vars['smarty']->value['section']['d']['show']) {
    $_smarty_tpl->tpl_vars['smarty']->value['section']['d']['total'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['d']['loop'];
    if ($_smarty_tpl->tpl_vars['smarty']->value['section']['d']['total'] == 0)
        $_smarty_tpl->tpl_vars['smarty']->value['section']['d']['show'] = false;
} else
    $_smarty_tpl->tpl_vars['smarty']->value['section']['d']['total'] = 0;
if ($_smarty_tpl->tpl_vars['smarty']->value['section']['d']['show']):

            for ($_smarty_tpl->tpl_vars['smarty']->value['section']['d']['index'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['d']['start'], $_smarty_tpl->tpl_vars['smarty']->value['section']['d']['iteration'] = 1;
                 $_smarty_tpl->tpl_vars['smarty']->value['section']['d']['iteration'] <= $_smarty_tpl->tpl_vars['smarty']->value['section']['d']['total'];
                 $_smarty_tpl->tpl_vars['smarty']->value['section']['d']['index'] += $_smarty_tpl->tpl_vars['smarty']->value['section']['d']['step'], $_smarty_tpl->tpl_vars['smarty']->value['section']['d']['iteration']++):
$_smarty_tpl->tpl_vars['smarty']->value['section']['d']['rownum'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['d']['iteration'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['d']['index_prev'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['d']['index'] - $_smarty_tpl->tpl_vars['smarty']->value['section']['d']['step'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['d']['index_next'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['d']['index'] + $_smarty_tpl->tpl_vars['smarty']->value['section']['d']['step'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['d']['first']      = ($_smarty_tpl->tpl_vars['smarty']->value['section']['d']['iteration'] == 1);
$_smarty_tpl->tpl_vars['smarty']->value['section']['d']['last']       = ($_smarty_tpl->tpl_vars['smarty']->value['section']['d']['iteration'] == $_smarty_tpl->tpl_vars['smarty']->value['section']['d']['total']);
?>
					<?php if (in_array($_smarty_tpl->getVariable('smarty')->value['section']['d']['index'],$_smarty_tpl->tpl_vars['viewdays']->value)) {?>
						<?php if ($_smarty_tpl->tpl_vars['cell']->value[$_smarty_tpl->getVariable('smarty')->value['section']['w']['index']][$_smarty_tpl->getVariable('smarty')->value['section']['d']['index']]['focus']) {?>
							<?php echo smarty_function_cycle(array('values'=>"odd,even",'print'=>false,'advance'=>false),$_smarty_tpl);?>

						<?php } else { ?>
							<?php echo smarty_function_cycle(array('values'=>"text-muted",'print'=>false,'advance'=>false),$_smarty_tpl);?>

						<?php }?>
						<td id="row_<?php echo $_smarty_tpl->getVariable('smarty')->value['section']['w']['index'];?>
_<?php echo $_smarty_tpl->getVariable('smarty')->value['section']['d']['index'];?>
" class="<?php if ($_smarty_tpl->tpl_vars['cell']->value[$_smarty_tpl->getVariable('smarty')->value['section']['w']['index']][$_smarty_tpl->getVariable('smarty')->value['section']['d']['index']]['day']==$_smarty_tpl->tpl_vars['today']->value) {?>calhighlight calborder<?php }?> <?php echo smarty_function_cycle(array(),$_smarty_tpl);?>
" style="padding:0px">
							<table style="width:100%; border:none">
								<tr>
									<td class="focus <?php if ($_smarty_tpl->tpl_vars['cell']->value[$_smarty_tpl->getVariable('smarty')->value['section']['w']['index']][$_smarty_tpl->getVariable('smarty')->value['section']['d']['index']]['day']==$_smarty_tpl->tpl_vars['today']->value) {?>calhighlight<?php }?>" style="width:50%;text-align:left">
										
										<?php if (($_smarty_tpl->tpl_vars['prefs']->value['display_field_order']=='DMY')||($_smarty_tpl->tpl_vars['prefs']->value['display_field_order']=='DYM')||($_smarty_tpl->tpl_vars['prefs']->value['display_field_order']=='YDM')) {?>
											<a href="<?php echo $_smarty_tpl->tpl_vars['myurl']->value;?>
?focus=<?php echo $_smarty_tpl->tpl_vars['cell']->value[$_smarty_tpl->getVariable('smarty')->value['section']['w']['index']][$_smarty_tpl->getVariable('smarty')->value['section']['d']['index']]['day'];?>
" title="Change Focus" style="font-size:11px">
												<?php echo smarty_modifier_tiki_date_format($_smarty_tpl->tpl_vars['cell']->value[$_smarty_tpl->getVariable('smarty')->value['section']['w']['index']][$_smarty_tpl->getVariable('smarty')->value['section']['d']['index']]['day'],"%d/%m");?>

											</a>
										<?php } else { ?>
											<a href="<?php echo $_smarty_tpl->tpl_vars['myurl']->value;?>
?focus=<?php echo $_smarty_tpl->tpl_vars['cell']->value[$_smarty_tpl->getVariable('smarty')->value['section']['w']['index']][$_smarty_tpl->getVariable('smarty')->value['section']['d']['index']]['day'];?>
" title="Change Focus" style="font-size:11px">
												<?php echo smarty_modifier_tiki_date_format($_smarty_tpl->tpl_vars['cell']->value[$_smarty_tpl->getVariable('smarty')->value['section']['w']['index']][$_smarty_tpl->getVariable('smarty')->value['section']['d']['index']]['day'],"%m/%d");?>

											</a>
										<?php }?>
									</td>
									<?php if ($_smarty_tpl->tpl_vars['myurl']->value!="tiki-action_calendar.php") {?>
										<td class="focus <?php if ($_smarty_tpl->tpl_vars['cell']->value[$_smarty_tpl->getVariable('smarty')->value['section']['w']['index']][$_smarty_tpl->getVariable('smarty')->value['section']['d']['index']]['day']==$_smarty_tpl->tpl_vars['today']->value) {?>calhighlight<?php }?>" style="width:50%;text-align:right;font-size:75%">
											
											<?php if ($_smarty_tpl->tpl_vars['tiki_p_add_events']->value=='y'&&count($_smarty_tpl->tpl_vars['listcals']->value)>0&&count($_smarty_tpl->tpl_vars['displayedcals']->value)>0) {?>
												<a href="tiki-calendar_edit_item.php?todate=<?php echo $_smarty_tpl->tpl_vars['cell']->value[$_smarty_tpl->getVariable('smarty')->value['section']['w']['index']][$_smarty_tpl->getVariable('smarty')->value['section']['d']['index']]['day'];
if (count($_smarty_tpl->tpl_vars['displayedcals']->value)==1) {?>&amp;calendarId=<?php echo $_smarty_tpl->tpl_vars['displayedcals']->value[0];
}?>" title=":Добавить событие" class="addevent tips">
													<?php echo smarty_function_icon(array('name'=>'create'),$_smarty_tpl);?>

												</a>
											<?php }?>
											<a class="viewthisday tips" href="tiki-calendar.php?viewmode=day&amp;todate=<?php echo $_smarty_tpl->tpl_vars['cell']->value[$_smarty_tpl->getVariable('smarty')->value['section']['w']['index']][$_smarty_tpl->getVariable('smarty')->value['section']['d']['index']]['day'];
if (count($_smarty_tpl->tpl_vars['displayedcals']->value)==1) {?>&amp;calendarId=<?php echo $_smarty_tpl->tpl_vars['displayedcals']->value[0];
}?>" title=":Просмотреть текущий день">
												<?php echo smarty_function_icon(array('name'=>'calendar'),$_smarty_tpl);?>

											</a>
										</td>
									<?php }?>
								</tr>
							</table>
							<?php if ($_smarty_tpl->tpl_vars['cell']->value[$_smarty_tpl->getVariable('smarty')->value['section']['w']['index']][$_smarty_tpl->getVariable('smarty')->value['section']['d']['index']]['focus']) {?>
								<?php if (isset($_smarty_tpl->tpl_vars['smarty']->value['section']['item'])) unset($_smarty_tpl->tpl_vars['smarty']->value['section']['item']);
$_smarty_tpl->tpl_vars['smarty']->value['section']['item']['name'] = 'item';
$_smarty_tpl->tpl_vars['smarty']->value['section']['item']['loop'] = is_array($_loop=$_smarty_tpl->tpl_vars['cell']->value[$_smarty_tpl->getVariable('smarty')->value['section']['w']['index']][$_smarty_tpl->getVariable('smarty')->value['section']['d']['index']]['items']) ? count($_loop) : max(0, (int) $_loop); unset($_loop);
$_smarty_tpl->tpl_vars['smarty']->value['section']['item']['show'] = true;
$_smarty_tpl->tpl_vars['smarty']->value['section']['item']['max'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['item']['loop'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['item']['step'] = 1;
$_smarty_tpl->tpl_vars['smarty']->value['section']['item']['start'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['item']['step'] > 0 ? 0 : $_smarty_tpl->tpl_vars['smarty']->value['section']['item']['loop']-1;
if ($_smarty_tpl->tpl_vars['smarty']->value['section']['item']['show']) {
    $_smarty_tpl->tpl_vars['smarty']->value['section']['item']['total'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['item']['loop'];
    if ($_smarty_tpl->tpl_vars['smarty']->value['section']['item']['total'] == 0)
        $_smarty_tpl->tpl_vars['smarty']->value['section']['item']['show'] = false;
} else
    $_smarty_tpl->tpl_vars['smarty']->value['section']['item']['total'] = 0;
if ($_smarty_tpl->tpl_vars['smarty']->value['section']['item']['show']):

            for ($_smarty_tpl->tpl_vars['smarty']->value['section']['item']['index'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['item']['start'], $_smarty_tpl->tpl_vars['smarty']->value['section']['item']['iteration'] = 1;
                 $_smarty_tpl->tpl_vars['smarty']->value['section']['item']['iteration'] <= $_smarty_tpl->tpl_vars['smarty']->value['section']['item']['total'];
                 $_smarty_tpl->tpl_vars['smarty']->value['section']['item']['index'] += $_smarty_tpl->tpl_vars['smarty']->value['section']['item']['step'], $_smarty_tpl->tpl_vars['smarty']->value['section']['item']['iteration']++):
$_smarty_tpl->tpl_vars['smarty']->value['section']['item']['rownum'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['item']['iteration'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['item']['index_prev'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['item']['index'] - $_smarty_tpl->tpl_vars['smarty']->value['section']['item']['step'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['item']['index_next'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['item']['index'] + $_smarty_tpl->tpl_vars['smarty']->value['section']['item']['step'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['item']['first']      = ($_smarty_tpl->tpl_vars['smarty']->value['section']['item']['iteration'] == 1);
$_smarty_tpl->tpl_vars['smarty']->value['section']['item']['last']       = ($_smarty_tpl->tpl_vars['smarty']->value['section']['item']['iteration'] == $_smarty_tpl->tpl_vars['smarty']->value['section']['item']['total']);
?>
									<?php if ($_smarty_tpl->getVariable('smarty')->value['section']['item']['first']) {?>
										<table style="width:100%;">
									<?php }?>
									<?php $_smarty_tpl->tpl_vars['over'] = new Smarty_variable($_smarty_tpl->tpl_vars['cell']->value[$_smarty_tpl->getVariable('smarty')->value['section']['w']['index']][$_smarty_tpl->getVariable('smarty')->value['section']['d']['index']]['items'][$_smarty_tpl->getVariable('smarty')->value['section']['item']['index']]['over'], null, 0);?>
									<?php $_smarty_tpl->tpl_vars['calendarId'] = new Smarty_variable($_smarty_tpl->tpl_vars['cell']->value[$_smarty_tpl->getVariable('smarty')->value['section']['w']['index']][$_smarty_tpl->getVariable('smarty')->value['section']['d']['index']]['items'][$_smarty_tpl->getVariable('smarty')->value['section']['item']['index']]['calendarId'], null, 0);?>
									<tr>
										<?php if (is_array($_smarty_tpl->tpl_vars['cell']->value[$_smarty_tpl->getVariable('smarty')->value['section']['w']['index']][$_smarty_tpl->getVariable('smarty')->value['section']['d']['index']]['items'][$_smarty_tpl->getVariable('smarty')->value['section']['item']['index']])) {?>
											<td class="Cal<?php echo $_smarty_tpl->tpl_vars['cell']->value[$_smarty_tpl->getVariable('smarty')->value['section']['w']['index']][$_smarty_tpl->getVariable('smarty')->value['section']['d']['index']]['items'][$_smarty_tpl->getVariable('smarty')->value['section']['item']['index']]['type'];?>
 calId<?php echo $_smarty_tpl->tpl_vars['cell']->value[$_smarty_tpl->getVariable('smarty')->value['section']['w']['index']][$_smarty_tpl->getVariable('smarty')->value['section']['d']['index']]['items'][$_smarty_tpl->getVariable('smarty')->value['section']['item']['index']]['calendarId'];?>
 viewcalitemId_<?php echo $_smarty_tpl->tpl_vars['cell']->value[$_smarty_tpl->getVariable('smarty')->value['section']['w']['index']][$_smarty_tpl->getVariable('smarty')->value['section']['d']['index']]['items'][$_smarty_tpl->getVariable('smarty')->value['section']['item']['index']]['calitemId'];?>
 tips" style="padding:0;height:14px;background-color:#<?php echo $_smarty_tpl->tpl_vars['infocals']->value[$_smarty_tpl->tpl_vars['calendarId']->value]['custombgcolor'];?>
;border-color:#<?php echo $_smarty_tpl->tpl_vars['infocals']->value[$_smarty_tpl->tpl_vars['calendarId']->value]['customfgcolor'];?>
;opacity:<?php if ($_smarty_tpl->tpl_vars['cell']->value[$_smarty_tpl->getVariable('smarty')->value['section']['w']['index']][$_smarty_tpl->getVariable('smarty')->value['section']['d']['index']]['items'][$_smarty_tpl->getVariable('smarty')->value['section']['item']['index']]['status']=='0') {?>0.8<?php } else { ?>1<?php }?>;filter:Alpha(opacity=<?php if ($_smarty_tpl->tpl_vars['cell']->value[$_smarty_tpl->getVariable('smarty')->value['section']['w']['index']][$_smarty_tpl->getVariable('smarty')->value['section']['d']['index']]['items'][$_smarty_tpl->getVariable('smarty')->value['section']['item']['index']]['status']=='0') {?>80<?php } else { ?>100<?php }?>);text-align:left;border-width:1px <?php if ($_smarty_tpl->tpl_vars['cell']->value[$_smarty_tpl->getVariable('smarty')->value['section']['w']['index']][$_smarty_tpl->getVariable('smarty')->value['section']['d']['index']]['items'][$_smarty_tpl->getVariable('smarty')->value['section']['item']['index']]['endTimeStamp']<=($_smarty_tpl->tpl_vars['cell']->value[$_smarty_tpl->getVariable('smarty')->value['section']['w']['index']][$_smarty_tpl->getVariable('smarty')->value['section']['d']['index']]['day']+86400)) {?>1<?php } else { ?>0<?php }?>px 1px <?php if ($_smarty_tpl->tpl_vars['cell']->value[$_smarty_tpl->getVariable('smarty')->value['section']['w']['index']][$_smarty_tpl->getVariable('smarty')->value['section']['d']['index']]['items'][$_smarty_tpl->getVariable('smarty')->value['section']['item']['index']]['startTimeStamp']>=$_smarty_tpl->tpl_vars['cell']->value[$_smarty_tpl->getVariable('smarty')->value['section']['w']['index']][$_smarty_tpl->getVariable('smarty')->value['section']['d']['index']]['day']) {?>1<?php } else { ?>0<?php }?>px;cursor:pointer"
												<?php if ($_smarty_tpl->tpl_vars['prefs']->value['calendar_sticky_popup']=='y') {?>
													<?php echo smarty_function_popup(array('caption'=>"Событие",'vauto'=>true,'hauto'=>true,'sticky'=>true,'fullhtml'=>"1",'trigger'=>"onClick",'text'=>smarty_modifier_escape(smarty_modifier_escape($_smarty_tpl->tpl_vars['over']->value,"javascript"),"html")),$_smarty_tpl);?>

												<?php } else { ?>
													<?php echo smarty_function_popup(array('caption'=>"Событие",'vauto'=>true,'hauto'=>true,'sticky'=>false,'fullhtml'=>"1",'text'=>smarty_modifier_escape(smarty_modifier_escape($_smarty_tpl->tpl_vars['over']->value,"javascript"),"html")),$_smarty_tpl);?>

												<?php }?>>

												<?php if ($_smarty_tpl->tpl_vars['myurl']->value=="tiki-action_calendar.php"||($_smarty_tpl->tpl_vars['cell']->value[$_smarty_tpl->getVariable('smarty')->value['section']['w']['index']][$_smarty_tpl->getVariable('smarty')->value['section']['d']['index']]['items'][$_smarty_tpl->getVariable('smarty')->value['section']['item']['index']]['startTimeStamp']>=$_smarty_tpl->tpl_vars['cell']->value[$_smarty_tpl->getVariable('smarty')->value['section']['w']['index']][$_smarty_tpl->getVariable('smarty')->value['section']['d']['index']]['day']||$_smarty_tpl->getVariable('smarty')->value['section']['d']['index']=='0'||$_smarty_tpl->tpl_vars['cell']->value[$_smarty_tpl->getVariable('smarty')->value['section']['w']['index']][$_smarty_tpl->getVariable('smarty')->value['section']['d']['index']]['firstDay']||$_smarty_tpl->tpl_vars['infocals']->value[$_smarty_tpl->tpl_vars['cell']->value[$_smarty_tpl->getVariable('smarty')->value['section']['w']['index']][$_smarty_tpl->getVariable('smarty')->value['section']['d']['index']]['items'][$_smarty_tpl->getVariable('smarty')->value['section']['item']['index']]['calendarId']]['nameoneachday']=='y')) {?>
													<a style="padding:1px 3px;<?php if ($_smarty_tpl->tpl_vars['infocals']->value[$_smarty_tpl->tpl_vars['calendarId']->value]['customfgcolor']) {?>color:#<?php echo $_smarty_tpl->tpl_vars['infocals']->value[$_smarty_tpl->tpl_vars['calendarId']->value]['customfgcolor'];
}
if ($_smarty_tpl->tpl_vars['cell']->value[$_smarty_tpl->getVariable('smarty')->value['section']['w']['index']][$_smarty_tpl->getVariable('smarty')->value['section']['d']['index']]['items'][$_smarty_tpl->getVariable('smarty')->value['section']['item']['index']]['status']=='2') {?> text-decoration:line-through;<?php }?>"
														<?php if ($_smarty_tpl->tpl_vars['myurl']->value=="tiki-action_calendar.php") {?>
															<?php if ($_smarty_tpl->tpl_vars['cell']->value[$_smarty_tpl->getVariable('smarty')->value['section']['w']['index']][$_smarty_tpl->getVariable('smarty')->value['section']['d']['index']]['items'][$_smarty_tpl->getVariable('smarty')->value['section']['item']['index']]['modifiable']=="y"||$_smarty_tpl->tpl_vars['cell']->value[$_smarty_tpl->getVariable('smarty')->value['section']['w']['index']][$_smarty_tpl->getVariable('smarty')->value['section']['d']['index']]['items'][$_smarty_tpl->getVariable('smarty')->value['section']['item']['index']]['visible']=='y') {?>href="<?php echo $_smarty_tpl->tpl_vars['cell']->value[$_smarty_tpl->getVariable('smarty')->value['section']['w']['index']][$_smarty_tpl->getVariable('smarty')->value['section']['d']['index']]['items'][$_smarty_tpl->getVariable('smarty')->value['section']['item']['index']]['url'];?>
"<?php }?>
														<?php } elseif ($_smarty_tpl->tpl_vars['prefs']->value['calendar_sticky_popup']!='y') {?>
															<?php if ($_smarty_tpl->tpl_vars['cell']->value[$_smarty_tpl->getVariable('smarty')->value['section']['w']['index']][$_smarty_tpl->getVariable('smarty')->value['section']['d']['index']]['items'][$_smarty_tpl->getVariable('smarty')->value['section']['item']['index']]['modifiable']=="y"||$_smarty_tpl->tpl_vars['cell']->value[$_smarty_tpl->getVariable('smarty')->value['section']['w']['index']][$_smarty_tpl->getVariable('smarty')->value['section']['d']['index']]['items'][$_smarty_tpl->getVariable('smarty')->value['section']['item']['index']]['visible']=='y') {?>href="tiki-calendar_edit_item.php?viewcalitemId=<?php echo $_smarty_tpl->tpl_vars['cell']->value[$_smarty_tpl->getVariable('smarty')->value['section']['w']['index']][$_smarty_tpl->getVariable('smarty')->value['section']['d']['index']]['items'][$_smarty_tpl->getVariable('smarty')->value['section']['item']['index']]['calitemId'];?>
"<?php }?>
														<?php } else { ?>
																href="#"
														<?php }?>
													><?php echo htmlspecialchars_decode((($tmp = @smarty_modifier_escape(smarty_modifier_truncate($_smarty_tpl->tpl_vars['cell']->value[$_smarty_tpl->getVariable('smarty')->value['section']['w']['index']][$_smarty_tpl->getVariable('smarty')->value['section']['d']['index']]['items'][$_smarty_tpl->getVariable('smarty')->value['section']['item']['index']]['name'],$_smarty_tpl->tpl_vars['trunc']->value,"..")))===null||$tmp==='' ? "..." : $tmp), ENT_QUOTES);?>
</a>
													<?php if ($_smarty_tpl->tpl_vars['cell']->value[$_smarty_tpl->getVariable('smarty')->value['section']['w']['index']][$_smarty_tpl->getVariable('smarty')->value['section']['d']['index']]['items'][$_smarty_tpl->getVariable('smarty')->value['section']['item']['index']]['web']) {?>
														<a href="<?php echo $_smarty_tpl->tpl_vars['cell']->value[$_smarty_tpl->getVariable('smarty')->value['section']['w']['index']][$_smarty_tpl->getVariable('smarty')->value['section']['d']['index']]['items'][$_smarty_tpl->getVariable('smarty')->value['section']['item']['index']]['web'];?>
" target="_other" class="calweb" title="<?php echo $_smarty_tpl->tpl_vars['cell']->value[$_smarty_tpl->getVariable('smarty')->value['section']['w']['index']][$_smarty_tpl->getVariable('smarty')->value['section']['d']['index']]['items'][$_smarty_tpl->getVariable('smarty')->value['section']['item']['index']]['web'];?>
"><img src="img/icons/external_link.gif" width="7" height="7" alt="&gt;"></a>
													<?php }?>
													<?php if ($_smarty_tpl->tpl_vars['cell']->value[$_smarty_tpl->getVariable('smarty')->value['section']['w']['index']][$_smarty_tpl->getVariable('smarty')->value['section']['d']['index']]['items'][$_smarty_tpl->getVariable('smarty')->value['section']['item']['index']]['nl']) {?>
														<a href="tiki-newsletters.php?nlId=<?php echo $_smarty_tpl->tpl_vars['cell']->value[$_smarty_tpl->getVariable('smarty')->value['section']['w']['index']][$_smarty_tpl->getVariable('smarty')->value['section']['d']['index']]['items'][$_smarty_tpl->getVariable('smarty')->value['section']['item']['index']]['nl'];?>
&info=1" class="calweb" title="Subscribe"><img src="img/icons/external_link.gif" width="7" height="7" alt="&gt;"></a>
													<?php }?>
												<?php } else { ?>&nbsp;
												<?php }?>
											</td>
										<?php } else { ?>
											<td style="padding: 0; height: 14px; border: solid white 1px; width: 100%; font-size: 10px">&nbsp;</td>
										<?php }?>
									</tr>
									<?php if ($_smarty_tpl->getVariable('smarty')->value['section']['item']['last']) {?>
										</table>
									<?php }?>
								<?php endfor; endif; ?>
							<?php }?>
						</td>
					<?php }?>
				<?php endfor; endif; ?>
			</tr>
		<?php endfor; endif; ?>
	</table>
</div>
<?php }} ?>
