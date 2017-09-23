<?php /* Smarty version Smarty-3.1.21, created on 2017-09-20 14:58:50
         compiled from "/var/www/html/Zwiki/templates/wiki-plugins/wikiplugin_rss.tpl" */ ?>
<?php /*%%SmartyHeaderCode:138246704859c2822a2b7986-86770728%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'e1e9b35d6101b9e22cbbe145c697a6dad062cc5f' => 
    array (
      0 => '/var/www/html/Zwiki/templates/wiki-plugins/wikiplugin_rss.tpl',
      1 => 1419778187,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '138246704859c2822a2b7986-86770728',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'rsstitle' => 0,
    'showtitle' => 0,
    'ticker' => 0,
    'items' => 0,
    'icon' => 0,
    'item' => 0,
    'showauthor' => 0,
    'showdate' => 0,
    'showdesc' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.21',
  'unifunc' => 'content_59c2822a2c70d6_52982492',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_59c2822a2c70d6_52982492')) {function content_59c2822a2c70d6_52982492($_smarty_tpl) {?><?php if (!is_callable('smarty_modifier_tiki_short_date')) include '/var/www/html/Zwiki/lib/smarty_tiki/modifier.tiki_short_date.php';
if (!is_callable('smarty_block_jq')) include '/var/www/html/Zwiki/lib/smarty_tiki/block.jq.php';
?><?php if ($_smarty_tpl->tpl_vars['rsstitle']->value&&$_smarty_tpl->tpl_vars['showtitle']->value) {?>
	<div class="rsstitle">
		<a target="_blank" href="<?php echo smarty_modifier_escape($_smarty_tpl->tpl_vars['rsstitle']->value['link']);?>
"><?php echo smarty_modifier_escape($_smarty_tpl->tpl_vars['rsstitle']->value['title']);?>
</a>
	</div>
<?php }?>
<ul class="rsslist<?php if ($_smarty_tpl->tpl_vars['ticker']->value) {?> rssticker<?php }?>">
	<?php  $_smarty_tpl->tpl_vars['item'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['item']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['items']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['item']->key => $_smarty_tpl->tpl_vars['item']->value) {
$_smarty_tpl->tpl_vars['item']->_loop = true;
?>
		<?php if ($_smarty_tpl->tpl_vars['icon']->value) {?>
			<div style="list-style:square inside url(<?php echo $_smarty_tpl->tpl_vars['icon']->value;?>
)">
		<?php }?>
		<li class="rssitem">
			<a target="_blank" href="<?php echo smarty_modifier_escape($_smarty_tpl->tpl_vars['item']->value['url']);?>
"><?php echo smarty_modifier_escape($_smarty_tpl->tpl_vars['item']->value['title']);?>
</a>

			<?php if ($_smarty_tpl->tpl_vars['item']->value['author']&&$_smarty_tpl->tpl_vars['showauthor']->value&&$_smarty_tpl->tpl_vars['item']->value['publication_date']&&$_smarty_tpl->tpl_vars['showdate']->value) {?>
				&nbsp;&nbsp;&nbsp;(<?php echo smarty_modifier_escape($_smarty_tpl->tpl_vars['item']->value['author']);?>
, <span class="rssdate"><?php echo smarty_modifier_tiki_short_date($_smarty_tpl->tpl_vars['item']->value['publication_date']);?>
</span>)
			<?php } elseif ($_smarty_tpl->tpl_vars['item']->value['author']&&$_smarty_tpl->tpl_vars['showauthor']->value) {?>
				&nbsp;&nbsp;&nbsp;(<?php echo smarty_modifier_escape($_smarty_tpl->tpl_vars['item']->value['author']);?>
)
			<?php } elseif ($_smarty_tpl->tpl_vars['item']->value['publication_date']&&$_smarty_tpl->tpl_vars['showdate']->value) {?>
				&nbsp;&nbsp;&nbsp;(<span class="rssdate"><?php echo smarty_modifier_tiki_short_date($_smarty_tpl->tpl_vars['item']->value['publication_date']);?>
</span>)
			<?php }?>

			<?php if ($_smarty_tpl->tpl_vars['item']->value['description']&&$_smarty_tpl->tpl_vars['showdesc']->value) {?>
				<div class="rssdescription">
					<?php echo smarty_modifier_escape($_smarty_tpl->tpl_vars['item']->value['description']);?>

				</div>
			<?php }?>
		</li>
		<?php if ($_smarty_tpl->tpl_vars['icon']->value) {?>
			</div>
		<?php }?>
	<?php } ?>
</ul>

<?php if ($_smarty_tpl->tpl_vars['ticker']->value) {?>
	<?php $_smarty_tpl->smarty->_tag_stack[] = array('jq', array()); $_block_repeat=true; echo smarty_block_jq(array(), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>

		function rsstick(){
			$('ul.rssticker li:first').slideUp( function () { $(this).appendTo($('ul.rssticker')).slideDown(); });
		}
		setInterval(function(){ rsstick() }, 5000);
	<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_jq(array(), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_tag_stack);?>

<?php }?>
<?php }} ?>
