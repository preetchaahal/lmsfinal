<?php

/**
***	Website Routes
**/
$app->route("GET @home_index:	/",			"Controller\Website->index");
$app->route("GET @home_about: 	/about",	"Controller\Website->about");
$app->route("GET @home_courses: /courses",	"Controller\Website->courses");
$app->route("GET @home_fees: 	/fees",		"Controller\Website->fees");
$app->route("GET @home_contact: /contact",	"Controller\Website->contact");
/*-------------------------------------------------------*/

/**
***	Admin Application Routes
**/
$app->route("GET @admin:				/admin",				"Controller\AdminApp->index");
$app->route("GET @admin_courses_index:	/admin/courses",		"Controller\AdminApp->courses");
$app->route("GET @admin_courses: 		/admin/courses/@page",	"Controller\AdminApp->courses");
$app->route("GET @admin_result: 		/admin/result",			"Controller\AdminApp->result");
$app->route("GET @admin_assignment: 	/admin/assignment",		"Controller\AdminApp->assignment");
$app->route("GET @admin_profile: 		/admin/profile",		"Controller\AdminApp->profile");
$app->route("GET @admin_email: 			/admin/email",			"Controller\AdminApp->email");
$app->route("GET @admin_exam: 			/admin/exam",			"Controller\AdminApp->exam");
$app->route("GET @admin_frontend: 		/admin/frontend",		"Controller\AdminApp->frontend");
$app->route("GET @admin_payment: 		/admin/payment",		"Controller\AdminApp->payment");
$app->route("GET @admin_statistics: 	/admin/statistics",		"Controller\AdminApp->statistics");
$app->route("GET @admin_students: 		/admin/students",		"Controller\AdminApp->students");
$app->route("GET @admin_studymaterial: 	/admin/studymaterial",	"Controller\AdminApp->studymaterial");

$app->route("GET @admin_login:			/admin/login", function($app) {
	echo \Template::instance()->render('admin/login.html');
});
$app->route("GET @admin_register: 		/admin/register", function($app) {
	echo \Template::instance()->render('admin/register.html');
});
$app->route("GET @admin_logout:			/admin/logout",		"Controller\Auth::adminLogout");

$app->route("POST @admin_auth_login:	/admin/auth/login",		"Controller\Auth::adminLogin");
$app->route("POST @admin_auth_register:	/admin/auth/register",	"Controller\Auth::adminRegister");
/*-----------------------------------------------------------------------------------*/

/**
***	Student Application Routes
**/
$app->route("GET @student:				/student",					"Controller\StudentApp->index");
$app->route("GET @student_courses:		/student/courses",			"Controller\StudentApp->courses");
$app->route("GET @student_assignments:	/student/assignments",		"Controller\StudentApp->assignments");
$app->route("GET @student_downloads:	/student/downloads",		"Controller\StudentApp->downloads");
$app->route("GET @student_examination:	/student/examination",		"Controller\StudentApp->examination");
$app->route("GET @student_performance:	/student/performance",		"Controller\StudentApp->performance");
$app->route("GET @student_statistics:	/student/statistics",		"Controller\StudentApp->statistics");
$app->route("GET @student_studymaterial:/student/studymaterial",	"Controller\StudentApp->studymaterial");


$app->route("GET @student_login: 		/student/login", function($app) {
	echo \Template::instance()->render('student/login.html');
});
$app->route("GET @student_register: 	/student/register", function($app) {
	echo \Template::instance()->render('student/register.html');
});

$app->route("GET @student_logout:		/student/logout", "Controller\Auth::studentLogout");

$app->route("POST @student_auth_login:		/student/auth",			"Controller\Auth::studentLogin");
$app->route("POST @student_auth_register:	/student/auth/register",	"Controller\Auth::studentRegister");
/*------------------------------------------------------------------------------------*/

/**
***	Courses Routes
**/
$app->route("POST @course_add:	/admin/courses", function($app) {
	$course = new Model\Course($app->get('DB'));
	$course->addNew($app->get('POST'));
});
