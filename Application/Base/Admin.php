<?php

namespace Base;

class Admin extends Application {

	const VIEW = "admin/";

	public function __construct($app)
	{
		if(!$app->exists('SESSION.admin.SESS_ID'))
			$app->reroute('@admin_login');
	}
}