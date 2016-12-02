<?php

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

$app->route("GET @student_logout:		/student/logout", "Controller\Student\Auth->logout");

$app->route("POST @student_auth_login:		/student/auth",			"Controller\Student\Auth->login");
$app->route("POST @student_auth_register:	/student/auth/register",	"Controller\Student\Auth->register");

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