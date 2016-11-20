<?php

namespace Controller;

use \Model\Admin as Admin;
use \Model\Student as Student;

class Auth
{
	public static function adminLogin($app) {

		$authorized = $app->get('auth_admin')->login(
			$app->get('POST.username'),
			$app->get('POST.password')
			);

		if($authorized) {
			$app->set('SESSION.admin.id',
				md5($app->get('POST.username').$app->get('POST.password'))
				);
			$app->reroute('@admin');
		} else {
			$app->reroute('@admin_login');
		}
	}

	public static function adminLogout($app) {
		$app->clear('SESSION.admin.id');
		$app->reroute('@admin_login');
	}

	public static function adminRegister($app) {
		$admin = new Admin($app->get('DB'));
		$added = $admin->addNew($app->get('POST'));
		if($added) {
			$app->reroute('@admin_register');
		}
	}

	public static function studentLogin($app) {
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

	public static function studentLogout($app) {
		$app->clear('SESSION.student.id');
		$app->reroute('@student_login');
	}

	public static function studentRegister($app) {
		$student = new Student($app->get('DB'));
		$added = $admin->addNew($app->get('POST'));
		if($added) {
			$app->reroute('@student_register');
		}
	}
}
