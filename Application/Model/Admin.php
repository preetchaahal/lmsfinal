<?php

namespace Model;

class Admin extends DB{

	const TABLE = 'lms_admin_dzstd';
	
	public function __construct(\DB\SQL $db)
	{
		parent::__construct($db, Course::TABLE);
	}
}