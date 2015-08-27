<?php


class genericcontroller {
		public $bd;

	public function __construct($modelName){

		$modelName .= "model";
		$this->bd = new $modelName();
	}



	public function index(){


		$generic = $this->bd->findAll();

		$line = '';

		while($obj = $generic->fetch_object()){

			foreach ($this->bd->colunms as $colum){

			$line.=$obj->$colum;
		}
		$line .= "<br>";
		}

		echo $line;
		

}


}
