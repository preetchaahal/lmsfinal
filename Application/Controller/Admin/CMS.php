<?php

namespace Controller\Admin;

use \Controller\BaseController as Base;

class CMS implements Base {
	
	public function index($app)
	{
		echo \Template::instance()->render('admin/cms/index.html');
	}
	public function __toString()
	{
		return __CLASS__;
	}
}