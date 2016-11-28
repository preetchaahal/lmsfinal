<?php

namespace Controller\Student;

use Controller\BaseController as Base;

class Assignments implements Base {
	public function index()
	{
		echo \Template::instance()->render('student/assignments\index.html');
	}
	public function __toString()
	{
		return __CLASS__;
	}
}