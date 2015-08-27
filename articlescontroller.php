<?php 
class articlescontroller extends genericcontroller {

	
	public function __construct(){
		parent::__construct( str_replace('controller', '', __CLASS__) );
	}

	
}