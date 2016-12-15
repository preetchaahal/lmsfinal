<?php

$app = require_once('lib/base.php');

$app->config('Application/Config/globals.ini');

$app->set('AUTOLOAD','Application/');

// require_once('Application/Routes/admin.php');
// require_once('Application/Routes/student.php');
// require_once('Application/Routes/website.php');

require_once('Application/Routes/test.php');

require_once('Application/Config/db.php');
require_once('Application/Config/authentication.php');

$app->run();