<?php
// (c) Copyright 2002-2016 by authors of the Tiki Wiki CMS Groupware Project
// 
// All Rights Reserved. See copyright.txt for details and a complete list of authors.
// Licensed under the GNU LESSER GENERAL PUBLIC LICENSE. See license.txt for details.
// $Id: min.php 62150 2017-04-08 23:00:37Z lindonb $

function prefs_min_list()
{
	return array(
		'min_username_length' => array(
			'name' => tra('Minimum length'),
			'description' => tra(''),
			'type' => 'text',
			'size' => 5,
			'filter' => 'digits',
			'units' => tra('characters'),
			'default' => 1,
		),
		'min_pass_length' => array(
			'name' => tra('Minimum length'),
			'description' => tra(''),
			'type' => 'text',
			'size' => 5,
			'filter' => 'digits',
			'units' => tra('characters'),
			'default' => 5,
		),
	);
}
	
