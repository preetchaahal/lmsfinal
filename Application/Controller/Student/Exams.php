<?php

namespace Controller\Student;

use Controller\BaseController as Base;

class Exams implements Base {
	public function index()
	{
		echo \Template::instance()->render('student\examination\index.html');
	}
	public function __toString()
	{
		return __CLASS__;
	}
}