<?php

/**
***	Website Routes
**/
$app->route("GET @index:	/",			"Controller\Guest\Website->index");
$app->route("GET @about: 	/about",	"Controller\Guest\Website->about");
$app->route("GET @courses:	/courses",	"Controller\Guest\Website->courses");
$app->route("GET @fees: 	/fees",		"Controller\Guest\Website->fees");
$app->route("GET @contact:	/contact",	"Controller\Guest\Website->contact");
/*-------------------------------------------------------*/


/**
*** Admin Appliation Routes
**/
$app->route("GET @admin_login:			/admin/login", function($app) {
	echo \Template::instance()->render('admin/login.html');
});
$app->route("GET @admin_register: 		/admin/register", function($app) {
	echo \Template::instance()->render('admin/register.html');
});
$app->route("GET @admin_logout:			/admin/logout",		"Controller\Admin\Auth::logout");

$app->route("POST @admin_auth_login:	/admin/auth/login",		"Controller\Admin\Auth::login");
$app->route("POST @admin_auth_register:	/admin/auth/register",	"Controller\Admin\Auth::register");

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
	$admin->courses->add($f3);
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


/**
*** Student Application Routes
**/

/* Auth */
$app->route("GET @student_login: 		/student/login", function($app) {
	echo \Template::instance()->render('student/login.html');
});
$app->route("GET @student_register: 	/student/register", function($app) {
	echo \Template::instance()->render('student/register.html');
});

$app->route("GET @student_logout:		/student/logout", "Controller\Student\Auth::logout");

$app->route("POST @student_auth_login:		/student/auth",			"Controller\Student\Auth::login");
$app->route("POST @student_auth_register:	/student/auth/register",	"Controller\Student\Auth::register");

/* Dashboard or Index */
$app->route("GET @student: 	/student",	function($f3) {
	$student = new \Base\Student($f3);
	$student->set(new \Controller\Student\Dashboard);
	$student->dashboard->index($f3);
});

$app->route("GET @student_index: 	/student/index",	function($f3) {
	$student = new \Base\Student($f3);
	$student->set(new \Controller\Student\Dashboard);
	$student->dashboard->index($f3);
});

$app->route("GET @student_dashboard: 	/student/dashboard",	function($f3) {
	$student = new \Base\Student($f3);
	$student->set(new \Controller\Student\Dashboard);
	$student->dashboard->index($f3);
});

/* Courses */
$app->route("GET @student_courses: 	/student/courses",	function($f3) {
	$student = new \Base\Student($f3);
	$student->set(new \Controller\Student\Courses);
	$student->courses->index($f3);
});

/* Assignments */
$app->route("GET @student_assignments: 	/student/assignments",	function($f3) {
	$student = new \Base\Student($f3);
	$student->set(new \Controller\Student\Assignments);
	$student->assignments->index($f3);
});

/* Downloads */
$app->route("GET @student_downloads: 	/student/downloads",	function($f3) {
	$student = new \Base\Student($f3);
	$student->set(new \Controller\Student\Downloads);
	$student->downloads->index($f3);
});

/* Examination */
$app->route("GET @student_examination: 	/student/examination",	function($f3) {
	$student = new \Base\Student($f3);
	$student->set(new \Controller\Student\Exams);
	$student->exams->index($f3);
});

/* Performance */
$app->route("GET @student_performance: 	/student/performance",	function($f3) {
	$student = new \Base\Student($f3);
	$student->set(new \Controller\Student\Performance);
	$student->performance->index($f3);
});

/* Statistics */
$app->route("GET @student_statistics: 	/student/statistics",	function($f3) {
	$student = new \Base\Student($f3);
	$student->set(new \Controller\Student\Stats);
	$student->stats->index($f3);
});

/* Study Material */
$app->route("GET @student_studymaterial: 	/student/studymaterial",	function($f3) {
	$student = new \Base\Student($f3);
	$student->set(new \Controller\Student\Study);
	$student->study->index($f3);
});


/*-------------------------------------------------------*/