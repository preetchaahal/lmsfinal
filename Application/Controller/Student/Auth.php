<?php

namespace Controller\Student;

use \Model\Student as Student;

class Auth
{
	private $_credentials = array(
		'username' => null,
		'password' => null,
		'email' => null
	);

	public function __construct($app)
	{
		$this->_credentials = $app->get('POST');
		$this->_hashPassword();
	}

	public function login($app)
	{
		$authorized = $app->get('auth_student')->login(
			$this->_credentials['username'],
			$this->_credentials['password']
		);

		if($authorized) {
			$app->set('SESSION.student.id',
				md5($this->_credentials['username'].$this->_credentials['password'])
			);
			$app->reroute('@student');
			
		} else {
			$app->set('MESSAGE.action','Invalid Username or Password');
			$app->reroute('@student_login');
		}
	}

	public function logout($app)
	{
		$app->clear('SESSION.student.id');
		$app->reroute('@student_login');
	}

	public function register($app)
	{	
		if($this->_checkIfExists($app)) {
			
			$app->reroute('@student_register');
		
		} else {

			$student = new Student($app->get('DB'));		
			$added = $student->addNew($this->_credentials);

			if($added) {
				$app->set('MESSAGE.action','Registered Successfully');
				$app->reroute('@student_register');
			}
		}
	}

	private function _checkIfExists($app)
	{	
		$student = new Student($app->get('DB'));
		
		$usernameExists = $student->findIf("username = '{$this->_credentials['username']}'");
		$emailExists = $student->findIf("email = '{$this->_credentials['email']}'");
		
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
