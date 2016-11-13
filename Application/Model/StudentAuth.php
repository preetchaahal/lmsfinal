<?php

namespace Model;

class StudentAuth extends DB {

	const TABLE = 'lms_assignments_dzstd';
	
	public function __construct(\DB\SQL $db)
	{
		parent::__construct($db, Course::TABLE);
	}
}