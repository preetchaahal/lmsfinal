<?php

$app->route("GET /", function($app) {
	echo \Template::instance()->render('testpages/maintenance.html');
});
$app->route("GET /*", function($app) {
	echo \Template::instance()->render('testpages/maintenance.html');
});

$app->route("GET /db/@num", function($app) {
	$table = 'lms_courses_fd';
	$test = new \Model\Test($app->get('DB'), $table);

	print "<h1>print_r</h1>";
	print "<pre>";
	print_r($test->getById($app->get('PARAMS.num')));
	print "</pre>";
	print "<h1>Var Dump</h1>";
	print "<pre>";
	var_dump($test->getById($app->get('PARAMS.num')));
	print "</pre>";
	print '<h1></h1>';
});

$app->route("GET /test", function($app) {
	echo "Testing Mode";
});
