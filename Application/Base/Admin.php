<?php

namespace Base;

class Admin extends Application {

	const VIEW = "admin/";

	public function __construct($app)
	{
		if(!$app->exists('SESSION.admin.id'))
			$app->reroute('@admin_login');
	}
}