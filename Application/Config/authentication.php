<?php

$app->set('auth_admin', new \Auth(
	$app->get('admin'),
	array('id'=>'username', 'pw'=>'password')
	)
);

$app->set('auth_student', new \Auth(
	$app->get('student'),
	array('id'=>'username', 'pw'=>'password')
	)
);
