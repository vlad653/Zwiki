<?php
// (c) Copyright 2002-2016 by authors of the Tiki Wiki CMS Groupware Project
//
// All Rights Reserved. See copyright.txt for details and a complete list of authors.
// Licensed under the GNU LESSER GENERAL PUBLIC LICENSE. See license.txt for details.
// $Id: Podcast.php 57969 2016-03-17 20:07:40Z jonnybradley $

namespace Tiki\FileGallery\Handler;

class Podcast extends FileSystem
{
	private $directory;

	function __construct()
	{
		global $prefs;
		parent::__construct($prefs['fgal_podcast_dir']);
	}
}

