<?php 


class articlesmodel extends genericmodel {

	
	public function __construct(){

		parent::__construct();
		$this->tableName = 'articles';
		$this->colunms = array('title', 'body');
	}

	
}

