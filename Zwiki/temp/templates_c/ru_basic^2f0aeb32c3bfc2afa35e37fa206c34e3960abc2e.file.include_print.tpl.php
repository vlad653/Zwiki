<?php /* Smarty version Smarty-3.1.21, created on 2017-09-20 15:12:10
         compiled from "/var/www/html/Zwiki/templates/admin/include_print.tpl" */ ?>
<?php /*%%SmartyHeaderCode:186950226259c2854a117dc7-16822644%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '2f0aeb32c3bfc2afa35e37fa206c34e3960abc2e' => 
    array (
      0 => '/var/www/html/Zwiki/templates/admin/include_print.tpl',
      1 => 1495168925,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '186950226259c2854a117dc7-16822644',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.21',
  'unifunc' => 'content_59c2854a12a1f8_18044924',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_59c2854a12a1f8_18044924')) {function content_59c2854a12a1f8_18044924($_smarty_tpl) {?><?php if (!is_callable('smarty_function_preference')) include '/var/www/html/Zwiki/lib/smarty_tiki/function.preference.php';
?>
<form class="form-horizontal" action="tiki-admin.php?page=print" class="admin" method="post">
	<?php echo $_smarty_tpl->getSubTemplate ('access/include_ticket.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

	<?php echo $_smarty_tpl->getSubTemplate ('admin/include_apply_top.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

	<fieldset>
		<legend>PDF settings</legend>
		<?php echo smarty_function_preference(array('name'=>'print_pdf_from_url'),$_smarty_tpl);?>

		<div class="adminoptionboxchild print_pdf_from_url_childcontainer webkit">
			<?php echo smarty_function_preference(array('name'=>'print_pdf_webkit_path'),$_smarty_tpl);?>

		</div>
		<div class="adminoptionboxchild print_pdf_from_url_childcontainer weasyprint">
			<?php echo smarty_function_preference(array('name'=>'print_pdf_weasyprint_path'),$_smarty_tpl);?>

		</div>
		<div class="adminoptionboxchild print_pdf_from_url_childcontainer webservice">
			<?php echo smarty_function_preference(array('name'=>'print_pdf_webservice_url'),$_smarty_tpl);?>

		</div>
		<div class="adminoptionboxchild print_pdf_from_url_childcontainer mpdf">
			<?php echo smarty_function_preference(array('name'=>'print_pdf_mpdf_path'),$_smarty_tpl);?>

			<?php echo smarty_function_preference(array('name'=>'print_pdf_mpdf_printfriendly'),$_smarty_tpl);?>

			<?php echo smarty_function_preference(array('name'=>'print_pdf_mpdf_orientation'),$_smarty_tpl);?>

			<?php echo smarty_function_preference(array('name'=>'print_pdf_mpdf_size'),$_smarty_tpl);?>

			<?php echo smarty_function_preference(array('name'=>'print_pdf_mpdf_toc'),$_smarty_tpl);?>

			<?php echo smarty_function_preference(array('name'=>'print_pdf_mpdf_toclinks'),$_smarty_tpl);?>

			<?php echo smarty_function_preference(array('name'=>'print_pdf_mpdf_tocheading'),$_smarty_tpl);?>

			<?php echo smarty_function_preference(array('name'=>'print_pdf_mpdf_toclevels'),$_smarty_tpl);?>

			<?php echo smarty_function_preference(array('name'=>'print_pdf_mpdf_header'),$_smarty_tpl);?>

			<?php echo smarty_function_preference(array('name'=>'print_pdf_mpdf_footer'),$_smarty_tpl);?>

			<?php echo smarty_function_preference(array('name'=>'print_pdf_mpdf_margin_left'),$_smarty_tpl);?>

			<?php echo smarty_function_preference(array('name'=>'print_pdf_mpdf_margin_right'),$_smarty_tpl);?>

			<?php echo smarty_function_preference(array('name'=>'print_pdf_mpdf_margin_top'),$_smarty_tpl);?>

			<?php echo smarty_function_preference(array('name'=>'print_pdf_mpdf_margin_bottom'),$_smarty_tpl);?>

			<?php echo smarty_function_preference(array('name'=>'print_pdf_mpdf_margin_header'),$_smarty_tpl);?>

			<?php echo smarty_function_preference(array('name'=>'print_pdf_mpdf_margin_footer'),$_smarty_tpl);?>

			<input style="display:none">
			<input type="password" style="display:none" name="print_pdf_mpdf_password_autocomplete_off">
			<?php echo smarty_function_preference(array('name'=>'print_pdf_mpdf_password'),$_smarty_tpl);?>

		</div>
	</fieldset>

	<fieldset>
		<legend>Wiki print version</legend>
		<?php echo smarty_function_preference(array('name'=>'print_wiki_authors'),$_smarty_tpl);?>

		<?php echo smarty_function_preference(array('name'=>'feature_wiki_print'),$_smarty_tpl);?>

		<div class="adminoptionboxchild" id="feature_wiki_print_childcontainer">
			<?php echo smarty_function_preference(array('name'=>'feature_wiki_multiprint'),$_smarty_tpl);?>

		</div>
		<?php echo smarty_function_preference(array('name'=>'feature_print_indexed'),$_smarty_tpl);?>

		<?php echo smarty_function_preference(array('name'=>'print_original_url_wiki'),$_smarty_tpl);?>

	</fieldset>

	<fieldset>
		<legend>Статьи</legend>
		<?php echo smarty_function_preference(array('name'=>'feature_cms_print'),$_smarty_tpl);?>

	</fieldset>

	<fieldset>
		<legend>Other features</legend>
		<?php echo smarty_function_preference(array('name'=>'print_original_url_tracker'),$_smarty_tpl);?>

		<?php echo smarty_function_preference(array('name'=>'print_original_url_forum'),$_smarty_tpl);?>


	</fieldset>
	<?php echo $_smarty_tpl->getSubTemplate ('admin/include_apply_bottom.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

</form>
<?php }} ?>
