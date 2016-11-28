<?php

namespace Controller\Student;

use Controller\BaseController as Base;

class Study implements Base {
	public function index()
	{
		echo \Template::instance()->render('student\statistics\index.html');
	}
	public function __toString()
	{
		return __CLASS__;
	}
}