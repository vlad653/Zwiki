<?php /* Smarty version Smarty-3.1.21, created on 2017-09-23 15:06:29
         compiled from "/var/www/html/Zwiki/templates/admin/include_search.tpl" */ ?>
<?php /*%%SmartyHeaderCode:38767161759c67875ccc1c9-82252032%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'bcf2e8bc15185b016a09d94930686b2b6b856d5e' => 
    array (
      0 => '/var/www/html/Zwiki/templates/admin/include_search.tpl',
      1 => 1500658405,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '38767161759c67875ccc1c9-82252032',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'prefs' => 0,
    'engine_info' => 0,
    'property' => 0,
    'value' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.21',
  'unifunc' => 'content_59c67875cf5b10_95819776',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_59c67875cf5b10_95819776')) {function content_59c67875cf5b10_95819776($_smarty_tpl) {?><?php if (!is_callable('smarty_block_remarksbox')) include '/var/www/html/Zwiki/lib/smarty_tiki/block.remarksbox.php';
if (!is_callable('smarty_function_icon')) include '/var/www/html/Zwiki/lib/smarty_tiki/function.icon.php';
if (!is_callable('smarty_function_bootstrap_modal')) include '/var/www/html/Zwiki/lib/smarty_tiki/function.bootstrap_modal.php';
if (!is_callable('smarty_block_tabset')) include '/var/www/html/Zwiki/lib/smarty_tiki/block.tabset.php';
if (!is_callable('smarty_block_tab')) include '/var/www/html/Zwiki/lib/smarty_tiki/block.tab.php';
if (!is_callable('smarty_function_preference')) include '/var/www/html/Zwiki/lib/smarty_tiki/function.preference.php';
if (!is_callable('smarty_function_help')) include '/var/www/html/Zwiki/lib/smarty_tiki/function.help.php';
?>

<?php if ($_smarty_tpl->tpl_vars['prefs']->value['feature_search_stats']=='y') {?>
	<?php $_smarty_tpl->smarty->_tag_stack[] = array('remarksbox', array('type'=>"tip",'title'=>"Подсказка")); $_block_repeat=true; echo smarty_block_remarksbox(array('type'=>"tip",'title'=>"Подсказка"), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>

		Поиск по статистике can be seen on page <a class='alert-link' target='tikihelp' href='tiki-search_stats.php'>Поиск по статистике</a> in Admin menu
	<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_remarksbox(array('type'=>"tip",'title'=>"Подсказка"), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_tag_stack);?>

<?php }?>

<?php if ($_smarty_tpl->tpl_vars['prefs']->value['feature_file_galleries']=='y') {?>
	<?php $_smarty_tpl->smarty->_tag_stack[] = array('remarksbox', array('type'=>"tip",'title'=>"Подсказка")); $_block_repeat=true; echo smarty_block_remarksbox(array('type'=>"tip",'title'=>"Подсказка"), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>

		Also see the Search Indexing tab: <a class='alert-link' target='tikihelp' href='tiki-admin.php?page=fgal'>File Gallery admin panel</a>
	<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_remarksbox(array('type'=>"tip",'title'=>"Подсказка"), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_tag_stack);?>

<?php }?>


<form class="form-horizontal" action="tiki-admin.php?page=search" method="post">
	<?php echo $_smarty_tpl->getSubTemplate ('access/include_ticket.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>


	<div class="row">
		<div class="form-group col-lg-12 clearfix">
			<?php if ($_smarty_tpl->tpl_vars['prefs']->value['feature_search']=='y') {?>
				<a role="link" href="tiki-searchindex.php" class="btn btn-link"><?php echo smarty_function_icon(array('name'=>"search"),$_smarty_tpl);?>
 Поиск</a>
				<a role="link" href="<?php echo smarty_function_bootstrap_modal(array('controller'=>'search','action'=>'rebuild'),$_smarty_tpl);?>
" class="btn btn-default timeout"><?php echo smarty_function_icon(array('name'=>"cog"),$_smarty_tpl);?>
 Rebuild Index</a>
			<?php }?>
			<?php echo $_smarty_tpl->getSubTemplate ('admin/include_apply_top.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

		</div>
	</div>
	<?php $_smarty_tpl->smarty->_tag_stack[] = array('tabset', array('name'=>'admin_search')); $_block_repeat=true; echo smarty_block_tabset(array('name'=>'admin_search'), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>

		<?php $_smarty_tpl->smarty->_tag_stack[] = array('tab', array('name'=>"Общие настройки")); $_block_repeat=true; echo smarty_block_tab(array('name'=>"Общие настройки"), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>

			<br>

			<fieldset>
				<legend>
					Поиск
				</legend>
				<?php $_smarty_tpl->smarty->_tag_stack[] = array('remarksbox', array('type'=>'tip','title'=>"About the Unified Index")); $_block_repeat=true; echo smarty_block_remarksbox(array('type'=>'tip','title'=>"About the Unified Index"), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>

				The Unified Index provides many underlying features for Tiki, including object selectors for translations amongst other things.
				Disabling this will cause some parts of Tiki to be unavailable.<br>
					<a href="http://doc.tiki.org/Unified+Index">Find out more about it here.</a>
				<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_remarksbox(array('type'=>'tip','title'=>"About the Unified Index"), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_tag_stack);?>


				<?php echo smarty_function_preference(array('name'=>'feature_search','visible'=>"always"),$_smarty_tpl);?>

				<div class="adminoptionboxchild" id="feature_search_childcontainer">

					<?php echo smarty_function_preference(array('name'=>'feature_search_stats'),$_smarty_tpl);?>

					<?php echo smarty_function_preference(array('name'=>'user_in_search_result'),$_smarty_tpl);?>

					<?php echo smarty_function_preference(array('name'=>"unified_incremental_update"),$_smarty_tpl);?>


					<?php echo smarty_function_preference(array('name'=>"allocate_memory_unified_rebuild"),$_smarty_tpl);?>

					<?php echo smarty_function_preference(array('name'=>"allocate_time_unified_rebuild"),$_smarty_tpl);?>


					<?php echo smarty_function_preference(array('name'=>"unified_engine"),$_smarty_tpl);?>


					<?php if (!empty($_smarty_tpl->tpl_vars['engine_info']->value)) {?>

						<div class="adminoptionbox preference advanced">
							<ul>
								<?php  $_smarty_tpl->tpl_vars['value'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['value']->_loop = false;
 $_smarty_tpl->tpl_vars['property'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['engine_info']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['value']->key => $_smarty_tpl->tpl_vars['value']->value) {
$_smarty_tpl->tpl_vars['value']->_loop = true;
 $_smarty_tpl->tpl_vars['property']->value = $_smarty_tpl->tpl_vars['value']->key;
?>
									<li><strong><?php echo smarty_modifier_escape($_smarty_tpl->tpl_vars['property']->value);?>
:</strong> <?php echo smarty_modifier_escape($_smarty_tpl->tpl_vars['value']->value);?>
</li>
								<?php } ?>
							</ul>
						</div>
					<?php }?>
					<div class="adminoptionboxchild unified_engine_childcontainer lucene">
						<?php echo smarty_function_preference(array('name'=>"unified_lucene_highlight"),$_smarty_tpl);?>

						<?php echo smarty_function_preference(array('name'=>'unified_parse_results'),$_smarty_tpl);?>


						<fieldset>
							<legend>Search engine settings</legend>
							<?php echo smarty_function_preference(array('name'=>"unified_lucene_location"),$_smarty_tpl);?>

							<?php echo smarty_function_preference(array('name'=>"unified_lucene_max_result"),$_smarty_tpl);?>

							<?php echo smarty_function_preference(array('name'=>"unified_lucene_max_resultset_limit"),$_smarty_tpl);?>

							<?php echo smarty_function_preference(array('name'=>"unified_lucene_terms_limit"),$_smarty_tpl);?>

							<?php echo smarty_function_preference(array('name'=>"unified_lucene_max_buffered_docs"),$_smarty_tpl);?>

							<?php echo smarty_function_preference(array('name'=>"unified_lucene_max_merge_docs"),$_smarty_tpl);?>

							<?php echo smarty_function_preference(array('name'=>"unified_lucene_merge_factor"),$_smarty_tpl);?>

						</fieldset>
					</div>

					<div class="adminoptionbox preference advanced">
						<?php $_smarty_tpl->smarty->_tag_stack[] = array('remarksbox', array('type'=>'tip','title'=>"About Unified search engines")); $_block_repeat=true; echo smarty_block_remarksbox(array('type'=>'tip','title'=>"About Unified search engines"), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>

							<b>MySQL full-text search: </b><br>
							Advantages: Fast performance. Works out of the box with Tiki and even on most basic server setups.<br>
							Disadvantages: Many common words (such as “first”, “second”, and “third” are not searchable unless MySQL configuration is modified). Only the first 65,535 characters (about 8000 words) of long pieces of content are searchable(See this <a class='alert-link' href='http://dev.mysql.com/doc/refman/5.7/en/fulltext-stopwords.html'>link</a>  for full list) <br>
							<b>Lucene (PHP implementation): </b><br>
							Advantages: Overcomes limitations of MySQL search mentioned above. Comes built in with Tiki.<br>
							Disadvantages: Slower performance. May not work well with the most basic server setups and because the index is stored on disk it is more prone to file permissions problems and other server configuration issues.<br>
							<b>Elasticsearch: </b><br>
							Advantages: Most advanced, fast and scalable search engine. Enables some very advanced/new features of Tiki.<br>
							Disadvantages: Needs to be separately installed from Tiki and requires more configuration (See this <a class='alert-link' href='http://doc.tiki.org/Elasticsearch'>link</a> for more information) <br>
						<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_remarksbox(array('type'=>'tip','title'=>"About Unified search engines"), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_tag_stack);?>

					</div>

					<div class="adminoptionboxchild unified_engine_childcontainer elastic">
						<?php echo smarty_function_preference(array('name'=>"unified_elastic_url"),$_smarty_tpl);?>

						<?php echo smarty_function_preference(array('name'=>"unified_elastic_index_prefix"),$_smarty_tpl);?>

						<?php echo smarty_function_preference(array('name'=>"unified_elastic_index_current"),$_smarty_tpl);?>

						<?php echo smarty_function_preference(array('name'=>"unified_elastic_field_limit"),$_smarty_tpl);?>

						<?php echo smarty_function_preference(array('name'=>"unified_relation_object_indexing"),$_smarty_tpl);?>

					</div>

					<?php echo smarty_function_preference(array('name'=>"unified_lucene_default_operator"),$_smarty_tpl);?>

					<?php echo smarty_function_preference(array('name'=>'unified_excluded_categories'),$_smarty_tpl);?>

					<?php echo smarty_function_preference(array('name'=>'unified_excluded_plugins'),$_smarty_tpl);?>


					<?php echo smarty_function_preference(array('name'=>'unified_exclude_all_plugins'),$_smarty_tpl);?>

					<div class="adminoptionboxchild" id="unified_exclude_all_plugins_childcontainer">
						<?php echo smarty_function_preference(array('name'=>'unified_included_plugins'),$_smarty_tpl);?>

					</div>

					<?php echo smarty_function_preference(array('name'=>'unified_forum_deepindexing'),$_smarty_tpl);?>


					<?php echo smarty_function_preference(array('name'=>'unified_tokenize_version_numbers'),$_smarty_tpl);?>

					<div class="adminoptionboxchild unified_engine_childcontainer elastic">
						<p class="description col-sm-offset-4">Elastic search only</p>
						<?php echo smarty_function_preference(array('name'=>"unified_elastic_camel_case"),$_smarty_tpl);?>

						<?php echo smarty_function_preference(array('name'=>"unified_elastic_possessive_stemmer"),$_smarty_tpl);?>

					</div>

					<?php echo smarty_function_preference(array('name'=>'unified_field_weight'),$_smarty_tpl);?>

					<?php echo smarty_function_preference(array('name'=>'unified_default_content'),$_smarty_tpl);?>

					<?php echo smarty_function_preference(array('name'=>'unified_user_cache'),$_smarty_tpl);?>


					<?php echo smarty_function_preference(array('name'=>'unified_cached_formatters'),$_smarty_tpl);?>


					<?php echo smarty_function_preference(array('name'=>'unified_trackerfield_keys'),$_smarty_tpl);?>

					<?php echo smarty_function_preference(array('name'=>'unified_add_to_categ_search'),$_smarty_tpl);?>

					<?php echo smarty_function_preference(array('name'=>'unified_trim_sorted_search'),$_smarty_tpl);?>


					<?php echo smarty_function_preference(array('name'=>'search_error_missing_field'),$_smarty_tpl);?>


					<?php echo smarty_function_preference(array('name'=>'unified_stopwords'),$_smarty_tpl);?>


					<div class="adminoptionbox preference advanced">
						<?php $_smarty_tpl->smarty->_tag_stack[] = array('remarksbox', array('type'=>'tip','title'=>"Experiment with LIST plugin syntax")); $_block_repeat=true; echo smarty_block_remarksbox(array('type'=>'tip','title'=>"Experiment with LIST plugin syntax"), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>

							<a href="tiki-pluginlist_experiment.php">After you have found the correct contents, you may copy-paste them in a LIST plugin.</a>
						<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_remarksbox(array('type'=>'tip','title'=>"Experiment with LIST plugin syntax"), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_tag_stack);?>

					</div>
				</div>
				<?php echo smarty_function_preference(array('name'=>'search_index_outdated'),$_smarty_tpl);?>

			</fieldset>

			<fieldset>
				<legend>
					Legacy search <?php echo smarty_function_help(array('url'=>"Search"),$_smarty_tpl);?>

				</legend>
				<?php echo smarty_function_preference(array('name'=>'feature_search_fulltext'),$_smarty_tpl);?>

				<div class="adminoptionboxchild" id="feature_search_fulltext_childcontainer">
					<?php echo smarty_function_preference(array('name'=>'feature_referer_highlight'),$_smarty_tpl);?>


					<?php echo smarty_function_preference(array('name'=>'feature_search_show_forbidden_obj'),$_smarty_tpl);?>

					<?php echo smarty_function_preference(array('name'=>'feature_search_show_forbidden_cat'),$_smarty_tpl);?>

				</div>
			</fieldset>

			<fieldset>
				<legend>Возможности</legend>
				<?php echo smarty_function_preference(array('name'=>'search_autocomplete'),$_smarty_tpl);?>

			</fieldset>

			<fieldset>
				<legend>Forum searches</legend>
				<?php echo smarty_function_preference(array('name'=>'feature_forums_name_search'),$_smarty_tpl);?>

				<?php echo smarty_function_preference(array('name'=>'feature_forums_search'),$_smarty_tpl);?>

				<?php echo smarty_function_preference(array('name'=>'feature_forum_content_search'),$_smarty_tpl);?>

				<div class="adminoptionboxchild" id="feature_forum_content_search_childcontainer">
					<?php echo smarty_function_preference(array('name'=>'feature_forum_local_tiki_search'),$_smarty_tpl);?>

					<?php echo smarty_function_preference(array('name'=>'feature_forum_local_search'),$_smarty_tpl);?>

				</div>
			</fieldset>

		<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_tab(array('name'=>"Общие настройки"), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_tag_stack);?>


		<?php $_smarty_tpl->smarty->_tag_stack[] = array('tab', array('name'=>"Search Results")); $_block_repeat=true; echo smarty_block_tab(array('name'=>"Search Results"), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>

			<br>
			<?php echo smarty_function_preference(array('name'=>'search_use_facets'),$_smarty_tpl);?>

			<?php echo smarty_function_preference(array('name'=>'search_facet_default_amount'),$_smarty_tpl);?>

			<?php echo smarty_function_preference(array('name'=>'category_custom_facets'),$_smarty_tpl);?>


			<fieldset>
				<legend>Items to display in search results</legend>
				<?php echo smarty_function_preference(array('name'=>'search_default_interface_language'),$_smarty_tpl);?>

				<?php echo smarty_function_preference(array('name'=>'search_default_where'),$_smarty_tpl);?>

				<?php echo smarty_function_preference(array('name'=>'search_show_category_filter'),$_smarty_tpl);?>

				<?php echo smarty_function_preference(array('name'=>'search_show_tag_filter'),$_smarty_tpl);?>

				<?php echo smarty_function_preference(array('name'=>'feature_search_show_object_filter'),$_smarty_tpl);?>

				<?php echo smarty_function_preference(array('name'=>'search_show_sort_order'),$_smarty_tpl);?>

				<?php echo smarty_function_preference(array('name'=>'feature_search_show_search_box'),$_smarty_tpl);?>

			</fieldset>
			<fieldset>
				<legend>Information to display for each result</legend>
				<?php echo smarty_function_preference(array('name'=>'feature_search_show_visit_count'),$_smarty_tpl);?>

				<?php echo smarty_function_preference(array('name'=>'feature_search_show_pertinence'),$_smarty_tpl);?>

				<?php echo smarty_function_preference(array('name'=>'feature_search_show_object_type'),$_smarty_tpl);?>

				<?php echo smarty_function_preference(array('name'=>'feature_search_show_last_modification'),$_smarty_tpl);?>

				<?php echo smarty_function_preference(array('name'=>'search_parsed_snippet'),$_smarty_tpl);?>

				<?php echo smarty_function_preference(array('name'=>'unified_highlight_results'),$_smarty_tpl);?>

			</fieldset>
		<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_tab(array('name'=>"Search Results"), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_tag_stack);?>


		<?php $_smarty_tpl->smarty->_tag_stack[] = array('tab', array('name'=>"Stored Search")); $_block_repeat=true; echo smarty_block_tab(array('name'=>"Stored Search"), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>

			<br>
			<?php echo smarty_function_preference(array('name'=>'storedsearch_enabled'),$_smarty_tpl);?>

		<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_tab(array('name'=>"Stored Search"), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_tag_stack);?>


		<?php $_smarty_tpl->smarty->_tag_stack[] = array('tab', array('name'=>"Federated Search")); $_block_repeat=true; echo smarty_block_tab(array('name'=>"Federated Search"), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>

			<br>
			<?php echo smarty_function_preference(array('name'=>'federated_enabled'),$_smarty_tpl);?>

			<?php echo smarty_function_preference(array('name'=>'federated_elastic_url'),$_smarty_tpl);?>


			<legend>Configuration</legend>
			<ul>
				<li><a href="tiki-admin_external_wikis.php">Внешний Wiki</a></li>
				<li><a href="<?php echo smarty_function_bootstrap_modal(array('controller'=>'search_manifold','action'=>'check'),$_smarty_tpl);?>
">ManifoldCF Configuration Checker</a></li>
			</ul>
		<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_tab(array('name'=>"Federated Search"), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_tag_stack);?>


		<?php $_smarty_tpl->smarty->_tag_stack[] = array('tab', array('name'=>"Tools")); $_block_repeat=true; echo smarty_block_tab(array('name'=>"Tools"), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>

			<br>
			<a href="tiki-report_string_in_db.php">Report all occurrences of a string in any table</a><br>
		<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_tab(array('name'=>"Tools"), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_tag_stack);?>


	<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_tabset(array('name'=>'admin_search'), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_tag_stack);?>

	<?php echo $_smarty_tpl->getSubTemplate ('admin/include_apply_bottom.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

</form>
<?php }} ?>
