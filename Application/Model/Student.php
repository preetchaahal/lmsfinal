<?php

namespace Model;

class Student {

	protected $db = NULL;

	const INFO_TABLE = "lms_student_info_dzstd";
	const AUTH_TABLE = "lms_student_auth_dzstd";

	public function __construct(\DB\SQL $db)
	{
		$this->db = $db;
	}

	public function all()
	{
		return $this->db->exec('SELECT * FROM '.self::INFO_TABLE.' INNER JOIN '.self::AUTH_TABLE.' WHERE '.self::INFO_TABLE.'.auth_id = '.self::INFO_TABLE.'.id');
	}
}
