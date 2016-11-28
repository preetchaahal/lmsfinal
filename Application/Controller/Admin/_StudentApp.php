<?php

namespace Controller;

class StudentApp
{
	function beforeRoute($app) {
		if(!$app->exists('SESSION.student.id'))
			$app->reroute('@student_login');
	}

	function index($app) {
		echo \Template::instance()->render('student/index.html');
	}

	function assignments($app) {
		echo \Template::instance()->render('student/assignments/index.html');
	}
	
	function courses($app) {
		echo \Template::instance()->render('student/courses/index.html');
	}
	
	function downloads($app) {
		echo \Template::instance()->render('student/downloads/index.html');
	}
	
	function examination($app) {
		echo \Template::instance()->render('student/examination/index.html');
	}
	
	function performance($app) {
		echo \Template::instance()->render('student/performance/index.html');
	}
	
	function statistics($app) {
		echo \Template::instance()->render('student/statistics/index.html');
	}
	
	function studymaterial($app) {
		echo \Template::instance()->render('student/studymaterial/index.html');
	}
}
