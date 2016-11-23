<?php

namespace Model;

class StudentInfo extends DB {

	const TABLE = 'lms_student_info_dzstd';

	public function __construct(\DB\SQL $db)
	{
		parent::__construct($db, self::TABLE);
	}
}
