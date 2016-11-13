<?php

namespace Model;

class StudyMaterial extends DB {

	const TABLE = 'lms_study_material_dzstd';
	
	public function __construct(\DB\SQL $db)
	{
		parent::__construct($db, Course::TABLE);
	}
}