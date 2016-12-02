<?php

$app->set('DB', new DB\SQL(
	$app->get('DB_HOST'),
	$app->get('DB_USER'),
	$app->get('DB_PASS')
	)
);

$app->set('admin', new DB\SQL\Mapper(
	$app->get('DB'),
	'lms_admins_dzstd'
	)
);

$app->set('student', new DB\SQL\Mapper(
	$app->get('DB'),
	'lms_students_dzstd'
	)
);
