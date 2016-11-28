<?php

namespace Controller\Admin;

use \Model\StudentInfo as StudentInfo;
use \Model\StudentAuth as StudentAuth;
use \Model\Student as Student;
use \Controller\BaseController as Base;

class Students implements Base {

	public function index($app)
	{
		$student = new \Model\Student($app->get('DB'));
		$students = $student->all();
		$app->set('DATA',$students);

		echo \Template::instance()->render('admin/students/index.html');
	}
	public function single($app)
	{
		$student = new \Model\Student($app->get('DB'));

		echo \Template::instance()->render('admin/students/single.html');
	}
	public function update($app)
	{
		$student = new StudentAuth($app->get('DB'));
		$updated = $student->updateStatus($app->get('PARAMS'));

		if($updated)
			$app->reroute('@admin_students');
	}
	public function __toString()
	{
		return __CLASS__;
	}
}
