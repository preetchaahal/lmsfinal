<?php

namespace Controller\Admin;

use \Model\Course as Course;
use \Controller\BaseController as Base;

class Courses implements Base {

	public function index($app)
	{
		$course = new Course($app->get('DB'));
		$courses = $course->all();
		$app->set('DATA',$courses);

		echo \Template::instance()->render('admin/courses/index.html');
	}

	public function showAddForm()
	{
		echo \Template::instance()->render('admin/courses/add.html');
	}

	public function showEditForm($app)
	{
		$course = new Course($app->get('DB'));
		$courses = $course->getById($app->get('PARAMS.id'));
		$app->set('DATA',$courses[0]);

		echo \Template::instance()->render('admin/courses/edit.html');
	}

	public function addNew($app)
	{
		$course = new Course($app->get('DB'));
		$added = $course->addNew($app->get('POST'));
		if($added)
			$app->reroute('@admin_courses');
	}

	public function archive($app)
	{
		$course = new Course($app->get('DB'));
		//$archived = $course->archive();
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
