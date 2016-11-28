<?php

namespace Controller\Student;

use Controller\BaseController as Base;

class Courses implements Base {
	
	public function index($app)
	{	
		echo \Template::instance()->render('student\courses\index.html');
	}
	public function __toString()
	{
		return __CLASS__;
	}
}