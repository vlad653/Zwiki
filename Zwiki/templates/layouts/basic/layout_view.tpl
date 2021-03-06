{* $Id: layout_view.tpl 62780 2017-05-28 12:37:09Z jonnybradley $ *}<!DOCTYPE html>
<html lang="{if !empty($pageLang)}{$pageLang}{else}{$prefs.language}{/if}"{if !empty($page_id)} id="page_{$page_id}"{/if}>
<head>
	{include file='header.tpl'}
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
</head>
<body{html_body_attributes}>
{$cookie_consent_html}

{include file="layout_fullscreen_check.tpl"}

{if $prefs.feature_ajax eq 'y'}
	{include file='tiki-ajax_header.tpl'}
{/if}

<div class="container{if isset($smarty.session.fullscreen) && $smarty.session.fullscreen eq 'y'}-fluid{/if}">
{if !isset($smarty.session.fullscreen) || $smarty.session.fullscreen ne 'y'}
	<div class="page-header" id="page-header">
		{modulelist zone=top class='row top_modules'}
		<div class="topbar row" id="topbar">
			{modulelist zone=topbar}
		</div>
	</div>
{/if}

	<div class="row row-middle" id="row-middle">
		{if (zone_is_empty('left') or $prefs.feature_left_column eq 'n') and (zone_is_empty('right') or $prefs.feature_right_column eq 'n')}
			<div class="col-md-12 col1" id="col1">
				{if $prefs.module_zones_pagetop eq 'fixed' or ($prefs.module_zones_pagetop ne 'n' && ! zone_is_empty('pagetop'))}
					{modulelist zone=pagetop}
				{/if}
				{feedback}
				{block name=quicknav}{/block}
				{block name=title}{/block}
				{block name=navigation}{/block}
				{block name=content}{/block}
				{if $prefs.module_zones_pagebottom eq 'fixed' or ($prefs.module_zones_pagebottom ne 'n' && ! zone_is_empty('pagebottom'))}
					{modulelist zone=pagebottom}
				{/if}
			</div>
		{elseif zone_is_empty('left') or $prefs.feature_left_column eq 'n'}
			{if $prefs.feature_right_column eq 'user'}
				<div class="col-md-12 text-right side-col-toggle">
					{$icon_name = (not empty($smarty.cookies.hide_zone_right)) ? 'toggle-left' : 'toggle-right'}
					{icon name=$icon_name class='toggle_zone right' href='#' title='{tr}Toggle right modules{/tr}'}
				</div>
			{/if}

			<div class="col-md-9 col1" id="col1">
				{if $prefs.module_zones_pagetop eq 'fixed' or ($prefs.module_zones_pagetop ne 'n' && ! zone_is_empty('pagetop'))}
					{modulelist zone=pagetop}
				{/if}
				{feedback}
				{block name=quicknav}{/block}
				{block name=title}{/block}
				{block name=navigation}{/block}
				{block name=content}{/block}
				{if $prefs.module_zones_pagebottom eq 'fixed' or ($prefs.module_zones_pagebottom ne 'n' && ! zone_is_empty('pagebottom'))}
					{modulelist zone=pagebottom}
				{/if}
			</div>
			<div class="col-md-3" id="col3">
				{modulelist zone=right}
			</div>
		{elseif zone_is_empty('right') or $prefs.feature_right_column eq 'n'}
			{if $prefs.feature_left_column eq 'user'}
				<div class="col-md-12 text-left side-col-toggle">
					{$icon_name = (not empty($smarty.cookies.hide_zone_left)) ? 'toggle-right' : 'toggle-left'}
					{icon name=$icon_name class='toggle_zone left' href='#' title='{tr}Toggle left modules{/tr}'}
				</div>
			{/if}
			<div class="col-md-9 col-md-push-3 col1" id="col1">
				{if $prefs.module_zones_pagetop eq 'fixed' or ($prefs.module_zones_pagetop ne 'n' && ! zone_is_empty('pagetop'))}
					{modulelist zone=pagetop}
				{/if}
				{feedback}
				{block name=quicknav}{/block}
				{block name=title}{/block}
				{block name=navigation}{/block}
				{block name=content}{/block}
				{if $prefs.module_zones_pagebottom eq 'fixed' or ($prefs.module_zones_pagebottom ne 'n' && ! zone_is_empty('pagebottom'))}
					{modulelist zone=pagebottom}
				{/if}
			</div>
			<div class="col-md-3 col-md-pull-9" id="col2">
				{modulelist zone=left}
			</div>
		{else}
			{if $prefs.feature_left_column eq 'user'}
				<div class="col-md-6 text-left side-col-toggle">
					{$icon_name = (not empty($smarty.cookies.hide_zone_left)) ? 'toggle-right' : 'toggle-left'}
					{icon name=$icon_name class='toggle_zone left' href='#' title='{tr}Toggle left modules{/tr}'}
				</div>
			{/if}
			{if $prefs.feature_right_column eq 'user'}
				<div class="col-md-6 text-right side-col-toggle">
					{$icon_name = (not empty($smarty.cookies.hide_zone_right)) ? 'toggle-left' : 'toggle-right'}
					{icon name=$icon_name class='toggle_zone right' href='#' title='{tr}Toggle right modules{/tr}'}
				</div>
			{/if}
			<div class="col-md-8 col-md-push-2 col1" id="col1">
				{if $prefs.module_zones_pagetop eq 'fixed' or ($prefs.module_zones_pagetop ne 'n' && ! zone_is_empty('pagetop'))}
					{modulelist zone=pagetop}
				{/if}
				{feedback}
				{block name=quicknav}{/block}
				{block name=title}{/block}
				{block name=navigation}{/block}
				{block name=content}{/block}
				{if $prefs.module_zones_pagebottom eq 'fixed' or ($prefs.module_zones_pagebottom ne 'n' && ! zone_is_empty('pagebottom'))}
					{modulelist zone=pagebottom}
				{/if}
			</div>
			<div class="col-md-2 col-md-pull-8" id="col2">
				{modulelist zone=left}
			</div>
			<div class="col-md-2" id="col3">
				{modulelist zone=right}
			</div>
		{/if}
	</div>

{if !isset($smarty.session.fullscreen) || $smarty.session.fullscreen ne 'y'}
	<footer class="footer" id="footer">
		<div class="footer_liner">
			{modulelist zone=bottom class='row row-sidemargins-zero'}
		</div>
	</footer>
{/if}
</div>

{include file='footer.tpl'}
</body>
</html>
{if $prefs.feature_debug_console eq 'y' and not empty($smarty.request.show_smarty_debug)}
	{debug}
{/if}
