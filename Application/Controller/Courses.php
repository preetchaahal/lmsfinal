<?php

namespace Controller;

use \Model\Course as Course;

class Courses {
	public function all() {
	}
	public function update($app) {
		$course = new Course($app->get('DB'));
		$updated = $course->updateStatus($app->get('PARAMS'));

		if($updated)
			$app->reroute('@admin_courses_index');
	}
}
