<?php /* Smarty version Smarty-3.1.21, created on 2017-09-20 21:56:38
         compiled from "/var/www/html/Zwiki/templates/feedback/action.tpl" */ ?>
<?php /*%%SmartyHeaderCode:102090502859c2e416c95146-85952609%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '8ea87c7bb05861feb9d6d13931e3995583c07d1b' => 
    array (
      0 => '/var/www/html/Zwiki/templates/feedback/action.tpl',
      1 => 1491804112,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '102090502859c2e416c95146-85952609',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'fb' => 0,
    'item' => 0,
    'name' => 0,
    'toName' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.21',
  'unifunc' => 'content_59c2e416cae643_43249328',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_59c2e416cae643_43249328')) {function content_59c2e416cae643_43249328($_smarty_tpl) {?><?php if (!is_callable('smarty_block_remarksbox')) include '/var/www/html/Zwiki/lib/smarty_tiki/block.remarksbox.php';
if (!is_callable('smarty_block_tr')) include '/var/www/html/Zwiki/lib/smarty_tiki/block.tr.php';
?>

<div id="alert-wrapper">
	<?php  $_smarty_tpl->tpl_vars['item'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['item']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['fb']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['item']->key => $_smarty_tpl->tpl_vars['item']->value) {
$_smarty_tpl->tpl_vars['item']->_loop = true;
?>
		<?php $_smarty_tpl->smarty->_tag_stack[] = array('remarksbox', array('type'=>((string)$_smarty_tpl->tpl_vars['item']->value['type']),'title'=>((string)$_smarty_tpl->tpl_vars['item']->value['title']))); $_block_repeat=true; echo smarty_block_remarksbox(array('type'=>((string)$_smarty_tpl->tpl_vars['item']->value['type']),'title'=>((string)$_smarty_tpl->tpl_vars['item']->value['title'])), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>

			<?php if (!empty($_smarty_tpl->tpl_vars['item']->value['mes'])) {?>
				<?php echo smarty_modifier_escape($_smarty_tpl->tpl_vars['item']->value['mes']);?>

			<?php }?>
			<?php if (isset($_smarty_tpl->tpl_vars['item']->value['items'])&&count($_smarty_tpl->tpl_vars['item']->value['items'])>0) {?>
				<ul>
					<li>
						<?php  $_smarty_tpl->tpl_vars['name'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['name']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['item']->value['items']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
 $_smarty_tpl->tpl_vars['name']->total= $_smarty_tpl->_count($_from);
 $_smarty_tpl->tpl_vars['name']->iteration=0;
foreach ($_from as $_smarty_tpl->tpl_vars['name']->key => $_smarty_tpl->tpl_vars['name']->value) {
$_smarty_tpl->tpl_vars['name']->_loop = true;
 $_smarty_tpl->tpl_vars['name']->iteration++;
 $_smarty_tpl->tpl_vars['name']->last = $_smarty_tpl->tpl_vars['name']->iteration === $_smarty_tpl->tpl_vars['name']->total;
?>
							<?php echo smarty_modifier_escape($_smarty_tpl->tpl_vars['name']->value);
if (!$_smarty_tpl->tpl_vars['name']->last) {?>, <?php }?>
						<?php } ?>
					</li>
				</ul>
			<?php }?>
			<?php if (!empty($_smarty_tpl->tpl_vars['item']->value['toMsg'])) {?>
				<br>
				<?php echo smarty_modifier_escape($_smarty_tpl->tpl_vars['item']->value['toMsg']);?>

			<?php }?>
			<?php if (isset($_smarty_tpl->tpl_vars['item']->value['toList'])&&count($_smarty_tpl->tpl_vars['item']->value['toList'])>0) {?>
				<ul>
					<li>
						<?php  $_smarty_tpl->tpl_vars['toName'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['toName']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['item']->value['toList']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
 $_smarty_tpl->tpl_vars['toName']->total= $_smarty_tpl->_count($_from);
 $_smarty_tpl->tpl_vars['toName']->iteration=0;
foreach ($_from as $_smarty_tpl->tpl_vars['toName']->key => $_smarty_tpl->tpl_vars['toName']->value) {
$_smarty_tpl->tpl_vars['toName']->_loop = true;
 $_smarty_tpl->tpl_vars['toName']->iteration++;
 $_smarty_tpl->tpl_vars['toName']->last = $_smarty_tpl->tpl_vars['toName']->iteration === $_smarty_tpl->tpl_vars['toName']->total;
?>
							<?php echo smarty_modifier_escape($_smarty_tpl->tpl_vars['toName']->value);
if (!$_smarty_tpl->tpl_vars['toName']->last) {?>, <?php }?>
						<?php } ?>
					</li>
				</ul>
			<?php }?>
			<?php if (!empty($_smarty_tpl->tpl_vars['item']->value['timeoutMsg'])) {?>
				<h5>
					<?php echo smarty_modifier_escape($_smarty_tpl->tpl_vars['item']->value['timeoutMsg']);?>

				</h5>
			<?php }?>
			<?php if (!empty($_smarty_tpl->tpl_vars['item']->value['timer'])) {?>
				<div style="text-align: center">
					<em><?php $_smarty_tpl->smarty->_tag_stack[] = array('tr', array('_0'=>(('<span id="timer-seconds">').($_smarty_tpl->tpl_vars['item']->value['timer'])).('</span>'))); $_block_repeat=true; echo smarty_block_tr(array('_0'=>(('<span id="timer-seconds">').($_smarty_tpl->tpl_vars['item']->value['timer'])).('</span>')), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
Redirecting in %0 seconds<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_tr(array('_0'=>(('<span id="timer-seconds">').($_smarty_tpl->tpl_vars['item']->value['timer'])).('</span>')), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_tag_stack);?>
</em>
				</div>
			<?php }?>
		<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_remarksbox(array('type'=>((string)$_smarty_tpl->tpl_vars['item']->value['type']),'title'=>((string)$_smarty_tpl->tpl_vars['item']->value['title'])), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_tag_stack);?>

	<?php } ?>
</div><?php }} ?>
