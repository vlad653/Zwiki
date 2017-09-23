<?php /* Smarty version Smarty-3.1.21, created on 2017-09-20 15:16:32
         compiled from "/var/www/html/Zwiki/templates/admin/include_performance.tpl" */ ?>
<?php /*%%SmartyHeaderCode:201231002059c28650c93207-09858992%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'a6e556f66ed5aa196c8a3b150218bc8a713133f1' => 
    array (
      0 => '/var/www/html/Zwiki/templates/admin/include_performance.tpl',
      1 => 1491117043,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '201231002059c28650c93207-09858992',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'gzip_handler' => 0,
    'realpath_cache_size_ini' => 0,
    'realpath_cache_size_percent' => 0,
    'realpath_cache_ttl' => 0,
    'opcode_cache' => 0,
    'opcode_stats' => 0,
    'memory_graph' => 0,
    'hits_graph' => 0,
    'stat_flag' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.21',
  'unifunc' => 'content_59c28650ce6e53_90186112',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_59c28650ce6e53_90186112')) {function content_59c28650ce6e53_90186112($_smarty_tpl) {?><?php if (!is_callable('smarty_block_remarksbox')) include '/var/www/html/Zwiki/lib/smarty_tiki/block.remarksbox.php';
if (!is_callable('smarty_block_tabset')) include '/var/www/html/Zwiki/lib/smarty_tiki/block.tabset.php';
if (!is_callable('smarty_block_tab')) include '/var/www/html/Zwiki/lib/smarty_tiki/block.tab.php';
if (!is_callable('smarty_function_preference')) include '/var/www/html/Zwiki/lib/smarty_tiki/function.preference.php';
if (!is_callable('smarty_block_tr')) include '/var/www/html/Zwiki/lib/smarty_tiki/block.tr.php';
if (!is_callable('smarty_function_help')) include '/var/www/html/Zwiki/lib/smarty_tiki/function.help.php';
if (!is_callable('smarty_block_self_link')) include '/var/www/html/Zwiki/lib/smarty_tiki/block.self_link.php';
?>

<?php $_smarty_tpl->smarty->_tag_stack[] = array('remarksbox', array('type'=>"tip",'title'=>"Подсказка")); $_block_repeat=true; echo smarty_block_remarksbox(array('type'=>"tip",'title'=>"Подсказка"), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
Please see the <a class='alert-link' target='tikihelp' href='http://dev.tiki.org/Performance'>Performance page</a> on Tiki’s developer site.<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_remarksbox(array('type'=>"tip",'title'=>"Подсказка"), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_tag_stack);?>


<form class="admin form-horizontal" id="performance" name="performance" action="tiki-admin.php?page=performance" method="post">
	<?php echo $_smarty_tpl->getSubTemplate ('access/include_ticket.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

	<div class="row">
		<div class="form-group col-lg-12 clearfix">
			<?php echo $_smarty_tpl->getSubTemplate ('admin/include_apply_top.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

		</div>
	</div>

	<?php $_smarty_tpl->smarty->_tag_stack[] = array('tabset', array()); $_block_repeat=true; echo smarty_block_tabset(array(), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>


		<?php $_smarty_tpl->smarty->_tag_stack[] = array('tab', array('name'=>"Performance")); $_block_repeat=true; echo smarty_block_tab(array('name'=>"Performance"), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>

			<br>
			<?php echo smarty_function_preference(array('name'=>'tiki_minify_javascript'),$_smarty_tpl);?>

			<div class="adminoptionboxchild" id="tiki_minify_javascript_childcontainer">
				<?php echo smarty_function_preference(array('name'=>'tiki_minify_late_js_files'),$_smarty_tpl);?>

			</div>
			<?php echo smarty_function_preference(array('name'=>'javascript_cdn'),$_smarty_tpl);?>

			<?php echo smarty_function_preference(array('name'=>'tiki_cdn'),$_smarty_tpl);?>

			<?php echo smarty_function_preference(array('name'=>'tiki_cdn_ssl'),$_smarty_tpl);?>

			<?php echo smarty_function_preference(array('name'=>'tiki_minify_css'),$_smarty_tpl);?>

			<div class="adminoptionboxchild" id="tiki_minify_css_childcontainer">
				<?php echo smarty_function_preference(array('name'=>'tiki_minify_css_single_file'),$_smarty_tpl);?>

			</div>
			<?php echo smarty_function_preference(array('name'=>'feature_obzip'),$_smarty_tpl);?>

			<div class="adminoptionboxchild">
				<?php if ($_smarty_tpl->tpl_vars['gzip_handler']->value!='none') {?>
					<div class="highlight" style="margin-left:30px;">
						Output compression is active.
						<br>
						Compression is handled by: <?php echo $_smarty_tpl->tpl_vars['gzip_handler']->value;?>
.
					</div>
				<?php }?>
			</div>
			<?php echo smarty_function_preference(array('name'=>'tiki_cachecontrol_session'),$_smarty_tpl);?>

			<?php echo smarty_function_preference(array('name'=>'smarty_compilation'),$_smarty_tpl);?>

			<?php echo smarty_function_preference(array('name'=>'users_serve_avatar_static'),$_smarty_tpl);?>


			<fieldset>
				<legend>PHP settings</legend>
				<p>Some PHP.INI settings that can increase performance</p>
				<div class="adminoptionboxchild">
					<p>
						<?php $_smarty_tpl->smarty->_tag_stack[] = array('tr', array('_0'=>$_smarty_tpl->tpl_vars['realpath_cache_size_ini']->value)); $_block_repeat=true; echo smarty_block_tr(array('_0'=>$_smarty_tpl->tpl_vars['realpath_cache_size_ini']->value), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
'realpath_cache_size setting': %0<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_tr(array('_0'=>$_smarty_tpl->tpl_vars['realpath_cache_size_ini']->value), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_tag_stack);?>

						<?php $_smarty_tpl->smarty->_tag_stack[] = array('tr', array('_0'=>$_smarty_tpl->tpl_vars['realpath_cache_size_percent']->value)); $_block_repeat=true; echo smarty_block_tr(array('_0'=>$_smarty_tpl->tpl_vars['realpath_cache_size_percent']->value), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
(percentage used %0 %<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_tr(array('_0'=>$_smarty_tpl->tpl_vars['realpath_cache_size_percent']->value), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_tag_stack);?>
)
						<?php echo smarty_function_help(array('url'=>"php.ini#Performance",'desc'=>"realpath_cache_size : Determines the size of the realpath cache to be used by PHP."),$_smarty_tpl);?>

					</p>
					<p><?php $_smarty_tpl->smarty->_tag_stack[] = array('tr', array('_0'=>$_smarty_tpl->tpl_vars['realpath_cache_ttl']->value)); $_block_repeat=true; echo smarty_block_tr(array('_0'=>$_smarty_tpl->tpl_vars['realpath_cache_ttl']->value), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
'realpath_cache_ttl setting': %0 seconds<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_tr(array('_0'=>$_smarty_tpl->tpl_vars['realpath_cache_ttl']->value), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_tag_stack);?>

					<?php echo smarty_function_help(array('url'=>"php.ini#Performance",'desc'=>"realpath_cache_ttl : Duration of time (in seconds) for which to cache realpath information for a given file or directory."),$_smarty_tpl);?>

				</div>
			</fieldset>
		<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_tab(array('name'=>"Performance"), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_tag_stack);?>


		<?php $_smarty_tpl->smarty->_tag_stack[] = array('tab', array('name'=>"Bytecode Cache")); $_block_repeat=true; echo smarty_block_tab(array('name'=>"Bytecode Cache"), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>

			<br>
			<?php if ($_smarty_tpl->tpl_vars['opcode_cache']->value) {?>
				<p><?php $_smarty_tpl->smarty->_tag_stack[] = array('tr', array('_0'=>$_smarty_tpl->tpl_vars['opcode_cache']->value)); $_block_repeat=true; echo smarty_block_tr(array('_0'=>$_smarty_tpl->tpl_vars['opcode_cache']->value), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
Using <strong>%0</strong>. These stats affect all PHP applications running on the server.<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_tr(array('_0'=>$_smarty_tpl->tpl_vars['opcode_cache']->value), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_tag_stack);?>
</p>

				<?php if ($_smarty_tpl->tpl_vars['opcode_stats']->value['warning_xcache_blocked']) {?>
					<p>Configuration setting <em>xcache.admin.enable_auth</em> prevents from accessing statistics. This will also prevent the cache from being cleared when clearing template cache.</p>
				<?php }?>

				<p>
					<table style="width=520px;border: 0px;text-align:center">
						<tr>
							<td><img src="<?php echo smarty_modifier_escape($_smarty_tpl->tpl_vars['memory_graph']->value);?>
" width="250" height="100"></td>
							<td><img src="<?php echo smarty_modifier_escape($_smarty_tpl->tpl_vars['hits_graph']->value);?>
" width="250" height="100"></td>
						</tr>
						<tr>
							<td style="width=260px">
								Memory Used: <?php echo $_smarty_tpl->tpl_vars['opcode_stats']->value['memory_used']*100;?>
% - Available: <?php echo $_smarty_tpl->tpl_vars['opcode_stats']->value['memory_avail']*100;?>
%
							</td>
							<td style="width=260px">
								Cache Hits: <?php echo $_smarty_tpl->tpl_vars['opcode_stats']->value['hit_hit']*100;?>
% - Misses: <?php echo $_smarty_tpl->tpl_vars['opcode_stats']->value['hit_miss']*100;?>
%
							</td>
						</tr>
					</table>
					<hr>
				</p>

				<?php if ($_smarty_tpl->tpl_vars['opcode_stats']->value['warning_fresh']) {?>
					<p>Few hits recorded. Statistics may not be representative.</p>
				<?php }?>

				<?php if ($_smarty_tpl->tpl_vars['opcode_stats']->value['warning_ratio']) {?>
					<p><?php $_smarty_tpl->smarty->_tag_stack[] = array('tr', array('_0'=>$_smarty_tpl->tpl_vars['opcode_cache']->value)); $_block_repeat=true; echo smarty_block_tr(array('_0'=>$_smarty_tpl->tpl_vars['opcode_cache']->value), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
Low hit ratio. %0 may be misconfigured and not used.<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_tr(array('_0'=>$_smarty_tpl->tpl_vars['opcode_cache']->value), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_tag_stack);?>
</p>
				<?php }?>

				<?php if ($_smarty_tpl->tpl_vars['opcode_stats']->value['warning_starve']) {?>
					<p>Little memory available. Thrashing likely to occur. The values to increase are apc.shm_size (for APC), xcache.size (for XCache) or opcache.memory_consumption (for OPcache).</p>
				<?php }?>

				<?php if ($_smarty_tpl->tpl_vars['opcode_stats']->value['warning_low']) {?>
					<p><?php $_smarty_tpl->smarty->_tag_stack[] = array('tr', array('_0'=>$_smarty_tpl->tpl_vars['opcode_cache']->value)); $_block_repeat=true; echo smarty_block_tr(array('_0'=>$_smarty_tpl->tpl_vars['opcode_cache']->value), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
Small amount of memory allocated to %0. Verify the configuration.<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_tr(array('_0'=>$_smarty_tpl->tpl_vars['opcode_cache']->value), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_tag_stack);?>
 The values to increase are apc.shm_size (for APC), xcache.size (for XCache) or opcache.memory_consumption (for OPcache).</p>
				<?php }?>

				<?php if ($_smarty_tpl->tpl_vars['opcode_stats']->value['warning_check']) {?>
					<p>
						<?php $_smarty_tpl->smarty->_tag_stack[] = array('tr', array('_0'=>$_smarty_tpl->tpl_vars['stat_flag']->value)); $_block_repeat=true; echo smarty_block_tr(array('_0'=>$_smarty_tpl->tpl_vars['stat_flag']->value), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
Configuration <em>%0</em> is enabled. Disabling modification checks can improve performance, but will require manual clear on file updates.<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_tr(array('_0'=>$_smarty_tpl->tpl_vars['stat_flag']->value), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_tag_stack);?>

						<?php if ($_smarty_tpl->tpl_vars['opcode_stats']->value['warning_xcache_blocked']) {?>
							<?php $_smarty_tpl->smarty->_tag_stack[] = array('tr', array('_0'=>$_smarty_tpl->tpl_vars['stat_flag']->value)); $_block_repeat=true; echo smarty_block_tr(array('_0'=>$_smarty_tpl->tpl_vars['stat_flag']->value), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
<em>%0</em> should not be disabled due to authentication on XCache.<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_tr(array('_0'=>$_smarty_tpl->tpl_vars['stat_flag']->value), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_tag_stack);?>

						<?php }?>
					</p>
				<?php }?>
				<?php if ($_smarty_tpl->tpl_vars['opcode_stats']->value['warning_check']) {?>
					<p>Clear all APC caches: <?php $_smarty_tpl->smarty->_tag_stack[] = array('self_link', array('apc_clear'=>true)); $_block_repeat=true; echo smarty_block_self_link(array('apc_clear'=>true), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
Clear Caches<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_self_link(array('apc_clear'=>true), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_tag_stack);?>
</p>
				<?php }?>
			<?php } else { ?>
				Bytecode cache is not used. Using a bytecode cache (OPcache, APC, XCache, WinCache) is highly recommended for production environments.
			<?php }?>
		<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_tab(array('name'=>"Bytecode Cache"), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_tag_stack);?>


		<?php $_smarty_tpl->smarty->_tag_stack[] = array('tab', array('name'=>"Вики")); $_block_repeat=true; echo smarty_block_tab(array('name'=>"Вики"), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>

			<br>
			<?php echo smarty_function_preference(array('name'=>'wiki_cache'),$_smarty_tpl);?>

			<?php echo smarty_function_preference(array('name'=>'feature_wiki_icache'),$_smarty_tpl);?>

			<?php echo smarty_function_preference(array('name'=>'wiki_ranking_reload_probability'),$_smarty_tpl);?>

		<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_tab(array('name'=>"Вики"), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_tag_stack);?>


		<?php $_smarty_tpl->smarty->_tag_stack[] = array('tab', array('name'=>"База данных")); $_block_repeat=true; echo smarty_block_tab(array('name'=>"База данных"), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>

			<br>
			<?php echo smarty_function_preference(array('name'=>'log_sql'),$_smarty_tpl);?>

			<div class="adminoptionboxchild" id="log_sql_childcontainer">
				<?php echo smarty_function_preference(array('name'=>'log_sql_perf_min'),$_smarty_tpl);?>

			</div>
		<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_tab(array('name'=>"База данных"), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_tag_stack);?>


		<?php $_smarty_tpl->smarty->_tag_stack[] = array('tab', array('name'=>"Memcache")); $_block_repeat=true; echo smarty_block_tab(array('name'=>"Memcache"), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>

			<br>
			<?php echo smarty_function_preference(array('name'=>'memcache_enabled'),$_smarty_tpl);?>

			<div class="adminoptionboxchild" id="memcache_enabled_childcontainer">
				<?php echo smarty_function_preference(array('name'=>'memcache_compress'),$_smarty_tpl);?>

				<?php echo smarty_function_preference(array('name'=>'memcache_prefix'),$_smarty_tpl);?>

				<?php echo smarty_function_preference(array('name'=>'memcache_expiration'),$_smarty_tpl);?>

				<?php echo smarty_function_preference(array('name'=>'memcache_servers'),$_smarty_tpl);?>

				<?php echo smarty_function_preference(array('name'=>'memcache_wiki_data'),$_smarty_tpl);?>

				<?php echo smarty_function_preference(array('name'=>'memcache_wiki_output'),$_smarty_tpl);?>

				<?php echo smarty_function_preference(array('name'=>'memcache_forum_output'),$_smarty_tpl);?>

			</div>
		<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_tab(array('name'=>"Memcache"), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_tag_stack);?>


		<?php $_smarty_tpl->smarty->_tag_stack[] = array('tab', array('name'=>"Plugins")); $_block_repeat=true; echo smarty_block_tab(array('name'=>"Plugins"), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>

			<br>
			<?php echo smarty_function_preference(array('name'=>'wikiplugin_snarf_cache'),$_smarty_tpl);?>

		<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_tab(array('name'=>"Plugins"), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_tag_stack);?>


		<?php $_smarty_tpl->smarty->_tag_stack[] = array('tab', array('name'=>"Major Slowdown")); $_block_repeat=true; echo smarty_block_tab(array('name'=>"Major Slowdown"), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>

			<br>
			<?php $_smarty_tpl->smarty->_tag_stack[] = array('remarksbox', array('type'=>"note",'title'=>"Major slowdown")); $_block_repeat=true; echo smarty_block_remarksbox(array('type'=>"note",'title'=>"Major slowdown"), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>

				These are reported to slow down Tiki. If you have a high-volume site, you may want to deactivate them
			<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_remarksbox(array('type'=>"note",'title'=>"Major slowdown"), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_tag_stack);?>

			<?php echo smarty_function_preference(array('name'=>'wikiplugin_sharethis'),$_smarty_tpl);?>

			<?php echo smarty_function_preference(array('name'=>'log_sql'),$_smarty_tpl);?>

			<?php echo smarty_function_preference(array('name'=>'log_mail'),$_smarty_tpl);?>

			<?php echo smarty_function_preference(array('name'=>'log_tpl'),$_smarty_tpl);?>

			<?php echo smarty_function_preference(array('name'=>'category_browse_count_objects'),$_smarty_tpl);?>

			<?php echo smarty_function_preference(array('name'=>'error_reporting_level'),$_smarty_tpl);?>

			<?php $_smarty_tpl->smarty->_tag_stack[] = array('remarksbox', array('type'=>"tip",'title'=>"Подсказка")); $_block_repeat=true; echo smarty_block_remarksbox(array('type'=>"tip",'title'=>"Подсказка"), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>

				Many search options impact performance. Please see <a href="tiki-admin.php?page=search">Search admin panel</a>.
			<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_remarksbox(array('type'=>"tip",'title'=>"Подсказка"), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_tag_stack);?>

		<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_tab(array('name'=>"Major Slowdown"), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_tag_stack);?>


		<?php $_smarty_tpl->smarty->_tag_stack[] = array('tab', array('name'=>"Sessions")); $_block_repeat=true; echo smarty_block_tab(array('name'=>"Sessions"), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>

			<br>
			<?php echo smarty_function_preference(array('name'=>'session_silent'),$_smarty_tpl);?>

			<?php echo smarty_function_preference(array('name'=>'tiki_cachecontrol_nosession'),$_smarty_tpl);?>

		<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_tab(array('name'=>"Sessions"), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_tag_stack);?>


		<?php $_smarty_tpl->smarty->_tag_stack[] = array('tab', array('name'=>"Рассылка")); $_block_repeat=true; echo smarty_block_tab(array('name'=>"Рассылка"), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>

			<br>
			<?php echo smarty_function_preference(array('name'=>'newsletter_throttle'),$_smarty_tpl);?>

			<div class="adminoptionboxchild" id="newsletter_throttle_childcontainer">
				<?php echo smarty_function_preference(array('name'=>'newsletter_pause_length'),$_smarty_tpl);?>

				<?php echo smarty_function_preference(array('name'=>'newsletter_batch_size'),$_smarty_tpl);?>

			</div>
		<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_tab(array('name'=>"Рассылка"), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_tag_stack);?>


		<?php $_smarty_tpl->smarty->_tag_stack[] = array('tab', array('name'=>"Time and Memory Limits")); $_block_repeat=true; echo smarty_block_tab(array('name'=>"Time and Memory Limits"), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>

			<br>
			<?php echo smarty_function_preference(array('name'=>'allocate_memory_tracker_export_items'),$_smarty_tpl);?>

			<?php echo smarty_function_preference(array('name'=>'allocate_time_tracker_export_items'),$_smarty_tpl);?>

			<?php echo smarty_function_preference(array('name'=>'allocate_time_tracker_clear_items'),$_smarty_tpl);?>

			<?php echo smarty_function_preference(array('name'=>"allocate_memory_unified_rebuild"),$_smarty_tpl);?>

			<?php echo smarty_function_preference(array('name'=>"allocate_time_unified_rebuild"),$_smarty_tpl);?>

		<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_tab(array('name'=>"Time and Memory Limits"), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_tag_stack);?>


	<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_tabset(array(), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_tag_stack);?>

	<?php echo $_smarty_tpl->getSubTemplate ('admin/include_apply_bottom.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

</form>
<?php }} ?>
