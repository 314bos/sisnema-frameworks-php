<?php
class genericmodel {


	public $bd;
	public $tableName;
	public $colunms;

	public function __construct(){

		$this->bd = new mysql('localhost', 'root', '', 'cake');
	}

	public function findAll(){

		return $this->bd->executaSQL( "select * from " . $this->tableName);
	}
}
