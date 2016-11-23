<?php

namespace Model;

class StudentAuth extends DB {

	const TABLE = 'lms_student_auth_dzstd';

	public function __construct(\DB\SQL $db)
	{
		parent::__construct($db, self::TABLE);
	}
}
