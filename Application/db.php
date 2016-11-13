<?php

// $app->set('DB', new DB\SQL(
//     'mysql:host=localhost;port=3306;dbname=dzstd_lms',
//     'root',
//     ''
//     )
// );

$app->set('DB', new DB\SQL(
	$app->get('DB_HOST'),
	$app->get('DB_USER'),
	$app->get('DB_PASS')
	)
);

$app->set('admin', new DB\SQL\Mapper(
	$app->get('DB'),
	'lms_admin_dzstd'
	)
);

$app->set('student', new DB\SQL\Mapper(
	$app->get('DB'),
	'lms_student_auth_dzstd'
	)
);
