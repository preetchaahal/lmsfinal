<?php

namespace Controller\Student;

use \Model\Student as Student;

class Auth
{
	public static function login($app) {
		$authorized = $app->get('auth_student')->login(
			$app->get('POST.username'),
			$app->get('POST.password')
			);

		if($authorized) {
			$app->set('SESSION.student.id',
				md5($app->get('POST.username').$app->get('POST.password'))
				);
			$app->reroute('@student');
		} else {
			$app->reroute('@student_login');
		}
	}

	public static function logout($app) {
		$app->clear('SESSION.student.id');
		$app->reroute('@student_login');
	}

	public static function register($app) {
		$student = new Student($app->get('DB'));
		$added = $admin->addNew($app->get('POST'));
		if($added) {
			$app->reroute('@student_register');
		}
	}
}
