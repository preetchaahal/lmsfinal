<?php

namespace Model;

class Student extends DB {

	const TABLE = 'lms_students_dzstd';

	public function __construct(\DB\SQL $db)
	{
		parent::__construct($db, self::TABLE);
	}
}
