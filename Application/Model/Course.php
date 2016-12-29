<?php

namespace Model;

class Course extends DB {

	const TABLE = 'lms_courses_fd';

	public function __construct(\DB\SQL $db)
	{
		parent::__construct($db, self::TABLE);
	}
}
