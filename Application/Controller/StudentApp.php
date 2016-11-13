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
}
