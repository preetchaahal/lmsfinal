<?php

$app = require_once('lib/base.php');

$app->config('config/globals.ini');

$app->set('AUTOLOAD','Application/');

require_once('Application/routes.php');
require_once('Application/db.php');
require_once('Application/authentication.php');

$app->run();