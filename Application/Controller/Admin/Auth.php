<?php

namespace Controller\Admin;

use \Model\Admin as Admin;

class Auth {

	private $_credentials = array(
		'username' => null,
		'password' => null,
		'email' => null,
		'fullname' => null
	);

	public function __construct($app)
	{
		$this->_credentials = $app->get('POST');
		$this->_hashPassword();
	}

	public static function loginPage($app)
	{
		echo \Template::instance()->render('admin/login.html');
	}

	public static function registerPage($app)
	{
		echo \Template::instance()->render('admin/register.html');
	}

	public function login($app)
	{
		$authorized = $app->get('auth_admin')->login(
			$this->_credentials['username'],
			$this->_credentials['password']
		);

		if($authorized) {

			$app->set('SESSION.admin.id',
				md5($this->_credentials['username'].$this->_credentials['password'])
			);
			$app->reroute('@admin');
		} else {

			$app->set('MESSAGE.action','Invalid Username or Password');
			$app->reroute('@admin_login');
		}
	}

	public static function logout($app)
	{
		$app->clear('SESSION.admin.id');
		$app->reroute('@admin_login');
	}

	public function register($app)
	{
		if($this->_checkIfExists($app)) {

			$app->reroute('@admin_register');

		} else {

			$admin = new Admin($app->get('DB'));
			$added = $admin->addNew($this->_credentials);

			if($added) {
				$app->set('MESSAGE.action','Registered Successfully');
				$app->reroute('@admin_register');
			}
		}
	}

	private function _checkIfExists($app)
	{
		$admin = new Admin($app->get('DB'));

		$usernameExists = $admin->findIf("username = '{$this->_credentials['username']}'");
		$emailExists = $admin->findIf("email = '{$this->_credentials['email']}'");

		if($usernameExists)
			$app->set('MESSAGE.action','Username already exists');

		if($emailExists)
			$app->set('MESSAGE.action','Email already exists');

		if($emailExists && $usernameExists)
			$app->set('MESSAGE.action','Username & Email both already exist');

		return($usernameExists || $emailExists);
	}

	private function _hashPassword()
	{
		if(isset($this->_credentials['password']))
			$this->_credentials['password'] = md5($this->_credentials['password']);
	}
}
