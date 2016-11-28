<?php

namespace Base;

class Student extends Application {

	const VIEW = "student/";

	public function __construct($app)
	{
		if(!$app->exists('SESSION.student.id'))
			$app->reroute('@student_login');
	}
}