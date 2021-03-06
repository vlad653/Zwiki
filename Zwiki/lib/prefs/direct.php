<?php
// (c) Copyright 2002-2016 by authors of the Tiki Wiki CMS Groupware Project
// 
// All Rights Reserved. See copyright.txt for details and a complete list of authors.
// Licensed under the GNU LESSER GENERAL PUBLIC LICENSE. See license.txt for details.
// $Id: direct.php 62150 2017-04-08 23:00:37Z lindonb $

function prefs_direct_list()
{
	return array(
		'direct_pagination' => array(
			'name' => tra('Use direct pagination links'),
			'description' => tra(''),
			'type' => 'flag',
			'default' => 'y',
		),
		'direct_pagination_max_middle_links' => array(
			'name' => tra('Maximum number of links around the current item'),
			'description' => tra(''),
			'type' => 'text',
			'units' => tra('links'),
			'size' => '4',
			'default' => 2,
		),
		'direct_pagination_max_ending_links' => array(
			'name' => tra('Maximum number of links after the first or before the last item'),
			'description' => tra(''),
			'type' => 'text',
			'units' => tra('links'),
			'size' => '4',
			'default' => 0,
		),
	);	
}
