<?php

namespace Controller;

class AdminApp {

	public function beforeRoute($app)
	{
		if(!$app->exists('SESSION.admin.id'))
			$app->reroute('@admin_login');
	}

	public function index($app)
	{
		echo \Template::instance()->render('admin/index.html');
	}

	public function email($app)
	{
		echo \Template::instance()->render('admin/email/index.html');
	}

	public function exam($app)
	{
		echo \Template::instance()->render('admin/exam/index.html');
	}

	public function frontend($app)
	{
		echo \Template::instance()->render('admin/frontend/index.html');
	}

	public function payment($app)
	{
		echo \Template::instance()->render('admin/payment/index.html');
	}

	public function profile($app)
	{
		echo \Template::instance()->render('admin/profile/index.html');
	}

	public function statistics($app)
	{
		echo \Template::instance()->render('admin/statistics/index.html');
	}

	public function students($app)
	{
		$student = new \Model\Student($app->get('DB'));
		$students = $student->all();
		$app->set('DATA',$students);

		echo \Template::instance()->render('admin/students/index.html');
	}

	public function studymaterial($app)
	{
		echo \Template::instance()->render('admin/studymaterial/index.html');
	}

	public function courses($app)
	{
		$course = new \Model\Course($app->get('DB'));
		$courses = $course->all();
		$app->set('DATA',$courses);

		switch ($app->get('PARAMS.page'))
		{
			case '':
				echo \Template::instance()->render('admin/courses/index.html');
				break;
			case 'all':
				echo \Template::instance()->render('admin/courses/index.html');
				break;
			case 'add':
				echo \Template::instance()->render('admin/courses/add.html');
				break;
			case 'edit':
				echo \Template::instance()->render('admin/courses/edit.html');
				break;
			default:
				$app->error(404);
				break;
		}
	}
}
