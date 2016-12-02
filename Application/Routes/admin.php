<?php

/**
*** Admin Appliation Routes
**/
$app->route("GET @admin_login:			/admin/login", function($app) {
	echo \Template::instance()->render('admin/login.html');
});
$app->route("GET @admin_register: 		/admin/register", function($app) {
	echo \Template::instance()->render('admin/register.html');
});
$app->route("GET @admin_logout:			/admin/logout",		"Controller\Admin\Auth->logout");
$app->route("POST @admin_auth_login:	/admin/auth/login",		"Controller\Admin\Auth->login");
$app->route("POST @admin_auth_register:	/admin/auth/register",	"Controller\Admin\Auth->register");

/* Dashboard or Index */
$app->route("GET @admin: 	/admin",	function($f3) {
	$admin = new \Base\Admin($f3);
	$admin->set(new \Controller\Admin\Dashboard);
	$admin->dashboard->index($f3);
});

$app->route("GET @admin_index: 	/admin/index",	function($f3) {
	$admin = new \Base\Admin($f3);
	$admin->set(new \Controller\Admin\Dashboard);
	$admin->dashboard->index($f3);
});

$app->route("GET @admin_dashboard: 	/admin/dashboard",	function($f3) {
	$admin = new \Base\Admin($f3);
	$admin->set(new \Controller\Admin\Dashboard);
	$admin->dashboard->index($f3);
});

/* Courses */
$app->route("GET @admin_courses: 	/admin/courses",	function($f3) {
	$admin = new \Base\Admin($f3);
	$admin->set(new \Controller\Admin\Courses);
	$admin->courses->index($f3);
});

$app->route("GET @admin_courses_add: 	/admin/courses/add",	function($f3) {
	$admin = new \Base\Admin($f3);
	$admin->set(new \Controller\Admin\Courses);
	$admin->courses->showAddForm($f3);
});

$app->route("GET @admin_courses_edit:	/admin/courses/edit/@id",	function($f3) {
	$admin = new \Base\Admin($f3);
	$admin->set(new \Controller\Admin\Courses);
	$admin->courses->showEditForm($f3);
});

$app->route("POST @admin_courses_add: 	/admin/courses/add",	function($f3) {
	$admin = new \Base\Admin($f3);
	$admin->set(new \Controller\Admin\Courses);
	$admin->courses->addNew($f3);
});

$app->route("GET @admin_courses_update: /admin/courses/update/@field/@value/@id",	function($f3) {
	$admin = new \Base\Admin($f3);
	$admin->set(new \Controller\Admin\Courses);
	$admin->courses->update($f3);
});

/* Students */
$app->route("GET @admin_students: 	/admin/students",	function($f3) {
	$admin = new \Base\Admin($f3);
	$admin->set(new \Controller\Admin\Students);
	$admin->students->index($f3);
});

$app->route("GET @admin_students_update: 	/admin/students/update/@field/@value/@id",	function($f3) {
	$admin = new \Base\Admin($f3);
	$admin->set(new \Controller\Admin\Students);
	$admin->students->index($f3);
});

$app->route("GET @admin_cms: 	/admin/cms",	function($f3) {
	$admin = new \Base\Admin($f3);
	$admin->set(new \Controller\Admin\CMS);
	$admin->cms->index($f3);
});

/*-------------------------------------------------------*/
