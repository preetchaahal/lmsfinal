<?php

namespace Model;

class Admin extends DB {

	const TABLE = 'lms_admins_dzstd';

	public function __construct(\DB\SQL $db)
	{
		parent::__construct($db, self::TABLE);
	}
}
