<?php

namespace Model;

class CMS_PAGE extends DB {

	const TABLE = 'lms_cms_pages_fd';

	public function __construct(\DB\SQL $db)
	{
		parent::__construct($db, self::TABLE);
	}
}
