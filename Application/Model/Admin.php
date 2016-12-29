<?php

namespace Model;

class Admin extends DB {

	const TABLE = 'lms_admins_fd';

	public function __construct(\DB\SQL $db)
	{
		parent::__construct($db, self::TABLE);
	}
}
