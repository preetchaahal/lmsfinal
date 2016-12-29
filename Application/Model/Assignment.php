<?php

namespace Model;

class Assignment extends DB {

	const TABLE = 'lms_assignments_fd';

	public function __construct(\DB\SQL $db)
	{
		parent::__construct($db, self::TABLE);
	}
}
