<?php

namespace Controller\Guest;

class Website
{
	function index() {
		echo \Template::instance()->render('website/index.html');
	}

	function about() {
		echo \Template::instance()->render('website/about.html');
	}

	function courses() {
		echo \Template::instance()->render('website/courses.html');
	}

	function fees() {
		echo \Template::instance()->render('website/fees.html');
	}

	function contact() {
		echo \Template::instance()->render('website/contact.html');
	}
}