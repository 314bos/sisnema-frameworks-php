<?php


class usersmodel extends genericmodel {

	
	public function __construct(){

		parent::__construct();
		$this->tableName = 'users';
		$this->colunms = array('id', 'email', 'password');
	}

	
}