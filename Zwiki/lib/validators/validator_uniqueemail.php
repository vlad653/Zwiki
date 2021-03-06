<?php 
// (c) Copyright 2002-2016 by authors of the Tiki Wiki CMS Groupware Project
// 
// All Rights Reserved. See copyright.txt for details and a complete list of authors.
// Licensed under the GNU LESSER GENERAL PUBLIC LICENSE. See license.txt for details.
// $Id: validator_uniqueemail.php 62176 2017-04-10 06:01:52Z drsassafras $

function validator_uniqueemail($input, $parameter = '', $message = '')
{
	global $prefs;
	$userlib = TikiLib::lib('user');
	if ($userlib->get_user_by_email($input)) {
		return tra("Email already in use");
	}
	return true;
}
