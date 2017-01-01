<?php

namespace Model;

class Admin extends DB {

	const TABLE = 'lms_admins_fd';

	public function __construct(\DB\SQL $db)
	{
		parent::__construct($db, self::TABLE);
	}
	public function getByUsername($username = null)
	{
		if(!empty($username))
			return $this->load('username = "'.$username.'"');
		else
			throw new \Exception("Didn't provide Username in ".__CLASS__."::getByUsername");

	}
}
