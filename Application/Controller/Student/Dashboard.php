<?php

namespace Controller\Student;

use Controller\BaseController as Base;

class Dashboard implements Base {

	public function index($app)
	{
		echo \Template::instance()->render('student\index.html');
	}
	public function __toString()
	{
		return __CLASS__;
	}
}