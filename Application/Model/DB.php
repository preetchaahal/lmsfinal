<?php

namespace Model;

abstract class DB extends \DB\SQL\Mapper {

	protected $db = null;
	protected $table_name = null;

	public function __construct(\DB\SQL $db, $table)
	{
		$this->db = $db;
		$this->table_name = $table;
		parent::__construct($db, $table);
	}

	public function all()
	{
		return $this->db->exec('SELECT * FROM '.$this->table_name);
	}

	public function addNew(Array $params)
	{
		$this->copyFrom($params);
		$this->save();
		return true;
	}

	public function getById($id = null)
	{
		return $this->load("id = {$id}");
	}

	public function findIf($condition = null)
	{
		if(isset($condition))
			return $this->db->exec("SELECT * FROM {$this->table_name} WHERE $condition LIMIT 1");
		else
			throw new \Exception("Condition not provided");
	}

	public function updateStatus(Array $params)
	{
		/**
		* Takes id as row identifier and then the field you want to update. Only Booleans.
		*/
		$this->load("id = {$params['id']}");
		$this->$params['field'] = $params['value'] ? 0 : 1;
		$this->save();
		return true;
	}

	public function delete(Array $params)
	{
		$this->load($params);
		$this->erase();
	}

	public function __destruct() {
		$this->reset();
	}
}
