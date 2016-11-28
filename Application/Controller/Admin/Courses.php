<?php

namespace Controller\Admin;

use \Model\Course as Course;
use \Controller\BaseController as Base;

class Courses implements Base {
	
	public function index($app)
	{
		$course = new \Model\Course($app->get('DB'));
		$courses = $course->all();
		$app->set('DATA',$courses);
		
		echo \Template::instance()->render('admin/courses/index.html');
	}
	
	public function add()
	{
		echo \Template::instance()->render('admin/courses/add.html');
	}
	public function addNew($app)
	{
		$course = new \Model\Course($app->get('DB'));
		$added = $course->addNew($app->get('POST'));
		if($added)
			$app->reroute('@admin_courses');
	}
	
	public function update($app)
	{
		$course = new Course($app->get('DB'));
		$updated = $course->updateStatus($app->get('PARAMS'));

		if($updated)
			$app->reroute('@admin_courses');
	}
	
	public function __toString()
	{
		return __CLASS__;
	}
}
