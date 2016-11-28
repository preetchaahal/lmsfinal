<?php

namespace Controller\Admin;

use \Model\Admin as Admin;

class Auth
{
	public static function login($app) {

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

	public static function logout($app) {
		$app->clear('SESSION.admin.id');
		$app->reroute('@admin_login');
	}

	public static function register($app) {
		$admin = new Admin($app->get('DB'));
		$added = $admin->addNew($app->get('POST'));
		if($added) {
			$app->reroute('@admin_register');
		}
	}
}
