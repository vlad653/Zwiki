<?php
// (c) Copyright 2002-2016 by authors of the Tiki Wiki CMS Groupware Project
//
// All Rights Reserved. See copyright.txt for details and a complete list of authors.
// Licensed under the GNU LESSER GENERAL PUBLIC LICENSE. See license.txt for details.
// $Id: wikiplugin_quote.php 61956 2017-03-30 16:43:48Z drsassafras $

function wikiplugin_quote_info()
{
	return array(
		'name' => tra('Quote'),
		'documentation' => 'PluginQuote',
		'description' => tra('Format text as a quote'),
		'prefs' => array( 'wikiplugin_quote' ),
		'body' => tra('Quoted text'),
		'iconname' => 'quotes',
		'introduced' => 1,
		'filter' => 'text',
		'tags' => array( 'basic' ),
		'format' => 'html',
		'params' => array(
			'replyto' => array(
				'required' => false,
				'name' => tra('Reply To'),
				'description' => tra('Name of the quoted person.'),
				'since' => '1',
				'filter' => 'text',
				'default' => '',
			),
			'thread_id' => array(
				'required' => false,
				'name' => tra('Thread Id for Forum replies'),
				'description' => tra('The thread Id of the comment being replied to in forums. Overwrites replyto'),
				'since' => '15',
				'filter' => 'text',
				'default' => '',
			),
			'source_url' => array(
				'required' => false,
				'name' => tra('Source URL'),
				'description' => tra('The URL to the source quoted.'),
				'since' => '16',
				'filter' => 'text',
				'default' => '',
			),
			'date' => array(
				'required' => false,
				'name' => tra('Date'),
				'description' => tra('Date when the statement quoted was made') . ' (<code>' . tr('YYYY-MM-DD') . '</code>)',
				'filter' => 'date',
				'default' => '',
				'since' => '16',
			)
		),
	);
}

function wikiplugin_quote($data, $params)
{

	$source_url = '';
	$date = null;
	$replyto = '';
    $comment_info = '';

	if ($params['thread_id']) {
		$comment_info = TikiLib::lib('comments')->get_comment($params['thread_id']);
		$replyto = $comment_info['userName'];
	} elseif ($params['replyto']) {
		$replyto = $params['replyto'];
	}
	if ($params['source_url']) {
		$source_url = $params['source_url'];
	}
	if ($params['date']) {
		$date = strtotime($params['date']);
	}

	$smarty = Tikilib::lib('smarty');

	$smarty->assign('date', $date);
	$smarty->assign('comment_info', $comment_info);
	$smarty->assign('replyto', $replyto);
	$smarty->assign('data', TikiLib::lib('parser')->parse_data_plugin($data));
	$smarty->assign('source_url', trim($source_url));

	return $smarty->fetch("wiki-plugins/wikiplugin_quote.tpl");
}
