<?php

namespace Controller\Student;

use Controller\BaseController as Base;

class Performance implements Base {
	public function index()
	{
		echo \Template::instance()->render('student\performance\index.html');
	}
	public function __toString()
	{
		return __CLASS__;
	}
}