<?php

$app->route("GET /*", function($app) {
	echo \Template::instance()->render('testpages/maintenance.html');
});

$app->route("GET /test", function($app) {
	echo "Testing Mode";
});