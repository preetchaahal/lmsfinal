<?php

if ((float)PCRE_VERSION<7.9)
	trigger_error('PCRE version is out of date');

if(version_compare(PHP_VERSION,"5.3.15","<"))
  die("Older PHP Version installed. \n Required Version 5.3.15. \n PHP Version Installed: ".PHP_VERSION);

$app = require_once('vendor/fatfree/lib/base.php');

$app->config('Application/Config/globals.ini');

$app->set('AUTOLOAD','Application/');

// require_once('Application/Routes/test.php');

require_once('Application/Config/db.php');
require_once('Application/Config/authentication.php');

require_once('Application/Routes/admin.php');
require_once('Application/Routes/student.php');
require_once('Application/Routes/website.php');

$app->run();
