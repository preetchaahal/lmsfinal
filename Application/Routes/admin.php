<?php

namespace Controller\Admin;

use \Base\Admin as Admin;

/**
*** Admin Appliation Routes
**/
$app->route("GET @admin_login:			/admin/login",		"Controller\Admin\Auth::loginPage");
$app->route("GET @admin_register: 		/admin/register",	"Controller\Admin\Auth::registerPage");

$app->route("POST @admin_auth_login:	/admin/auth/login",		"Controller\Admin\Auth->login");
$app->route("POST @admin_auth_register:	/admin/auth/register",	"Controller\Admin\Auth->register");

$app->route("GET @admin_logout:			/admin/logout",		"Controller\Admin\Auth::logout");

/**
*** All the routes requiring Authorisation from here.
**/

/* Dashboard or Index */

$app->route("GET @admin: 	/admin",	function($f3) {
	$admin = new Admin($f3);
	$admin->set(new Dashboard);
	$admin->dashboard->index($f3);
});

$app->route("GET @admin_index: 	/admin/index",	function($f3) {
	$admin = new Admin($f3);
	$admin->set(new Dashboard);
	$admin->dashboard->index($f3);
});

$app->route("GET @admin_dashboard: 	/admin/dashboard",	function($f3) {
	$admin = new Admin($f3);
	$admin->set(new Dashboard);
	$admin->dashboard->index($f3);
});

/* Courses */
$app->route("GET @admin_courses: 	/admin/courses",	function($f3) {
	$admin = new Admin($f3);
	$admin->set(new Courses);
	$admin->courses->index($f3);
});

$app->route("GET @admin_courses_add: 	/admin/courses/add",	function($f3) {
	$admin = new Admin($f3);
	$admin->set(new Courses);
	$admin->courses->showAddForm($f3);
});

$app->route("GET @admin_courses_edit:	/admin/courses/edit/@id",	function($f3) {
	$admin = new Admin($f3);
	$admin->set(new Courses);
	$admin->courses->showEditForm($f3);
});

$app->route("POST @admin_courses_add: 	/admin/courses/add",	function($f3) {
	$admin = new Admin($f3);
	$admin->set(new Courses);
	$admin->courses->addNew($f3);
});

$app->route("GET @admin_courses_update: /admin/courses/update/@field/@value/@id",	function($f3) {
	$admin = new Admin($f3);
	$admin->set(new Courses);
	$admin->courses->update($f3);
});

/* Students */
$app->route("GET @admin_students: 	/admin/students",	function($f3) {
	$admin = new Admin($f3);
	$admin->set(new Students);
	$admin->students->index($f3);
});

$app->route("GET @admin_students_update: 	/admin/students/update/@field/@value/@id",	function($f3) {
	$admin = new Admin($f3);
	$admin->set(new Students);
	$admin->students->update($f3);
});

/* CMS */
$app->route("GET @admin_cms: 	/admin/cms",	function($f3) {
	$admin = new Admin($f3);
	$admin->set(new CMS);
	$admin->cms->index($f3);
});

$app->route("GET @admin_cms_addPage:	/admin/cms/page/add",	function($f3) {
	$admin = new Admin($f3);
	$admin->set(new CMS);
	$admin->cms->showAddPage($f3);
});

$app->route("POST @admin_cms_addPage: /admin/cms/page/add", function($f3) {
	$admin = new Admin($f3);
	$admin->set(new CMS);
	$admin->cms->addPage($f3);
});

$app->route("GET @admin_cms_updatePage:	/admin/cms/page/update/@field/@value/@id",	function($f3) {
	$admin = new Admin($f3);
	$admin->set(new CMS);
	$admin->cms->updatePage($f3);
});

$app->route("GET @admin_cms_editPage:	/admin/cms/page/edit/@id",	function($f3) {
	$admin = new Admin($f3);
	$admin->set(new CMS);
	$admin->cms->showEditForm($f3);
});

$app->route("POST @admin_cms_editPage:	/admin/cms/page/edit/@id",	function($f3) {
	// $admin = new Admin($f3);
	// $admin->set(new CMS);
	// $admin->cms->showEditForm($f3);
	print_r($app->get('POST'));
});

/* Profile */
$app->route("GET @admin_profile: /admin/profile", function($f3) {
	$admin = new Admin($f3);
	$admin->set(new Profile);
	$admin->profile->index($f3);
});
$app->route("POST @admin_profile_edit: /admin/profile/edit",  function($f3) {
	print_r($_POST);
	print_r($_FILES);
});

/* TEST Routes*/
// $app->route("GET /admin/test/escaping",	function($f3) {
// 	$f3->set('DATA',"<html>");
// 	echo \Template::instance()->render('testpages/escaping.html');
// });
// $app->route("GET /admin/test", function($f3) {
// 	$web = \Web::instance();
// 	$file = $f3->get('UPLOADS').'video.mov';
// 	$web->send($file,NULL,512,TRUE);
// });
// $app->route("POST @admin_cms_addPage:	/admin/cms/page/add",	function($f3) {
// 	$f3->set('DATA',"<html>");
// 	echo \Template::instance()->render('testpages/escaping.html');
// });
/*-------------------------------------------------------*/
