<?php

namespace Model;

class Test extends DB {

	public function __construct(\DB\SQL $db, $table)
	{
		parent::__construct($db, $table);
	}
}
