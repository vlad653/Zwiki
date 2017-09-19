<?php
// (c) Copyright 2002-2016 by authors of the Tiki Wiki CMS Groupware Project
// 
// All Rights Reserved. See copyright.txt for details and a complete list of authors.
// Licensed under the GNU LESSER GENERAL PUBLIC LICENSE. See license.txt for details.
// $Id: BootstrapCompiler.php 61747 2017-03-18 18:28:58Z rjsmelo $

namespace Tiki\Composer;
use Composer\Script\Event;
use Composer\Util\FileSystem;

class BootstrapCompiler
{
	public static function build(Event $event)
	{
		if (class_exists('lessc')) {	// this can get called before composer has installed all the packages

			$base = $event->getComposer()->getConfig()->get('vendor-dir') . '/twitter/bootstrap';
			if (! file_exists($base . '/css')) {
				mkdir($base . '/css');

				$compiler = new \lessc;
				$compiler->compileFile("$base/less/bootstrap.less", "$base/css/bootstrap.css");
			}
		}
	}
}
