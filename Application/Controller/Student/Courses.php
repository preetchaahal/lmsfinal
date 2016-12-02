<?php

namespace Controller\Student;

use \Model\Course as Course;
use Controller\BaseController as Base;

class Courses implements Base {
	
	public function index($app)
	{
		$course = new Course($app->get('DB'));
		$courses = $course->all();
		$app->set('DATA',$courses);
		
		echo \Template::instance()->render('student\courses\index.html');
	}
	public function __toString()
	{
		return __CLASS__;
	}
}