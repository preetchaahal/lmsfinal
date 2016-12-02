<?php

namespace Controller\Student;

use Controller\BaseController as Base;

class Downloads implements Base {
	
	public function index()
	{
		echo \Template::instance()->render('student\downloads\index.html');
	}
	public function __toString()
	{
		return __CLASS__;
	}
}