<?php 
class mysql extends BancoDados {
	
   public function __construct($host = null, $user = null, $pwd = null, $base = null){
	$this->setservidor($host);
	$this->setusuario($user);
	$this->setsenha($pwd);
	$this->setbanco($base);
   
   } 

   public function insert($nomeDaTabela, $arrCampos, $arrValores){

   		$strCampos = implode(', ', $arrCampos);

   		$totalArgumentos = func_num_args();

   		$arrArgumentos = func_get_args();

   		$arrStrTodosValores = array();

   		function test_alter(&$item1){ $item1 = "'$item1'"; }

   		for( $i = 2; $i < $totalArgumentos; $i++){

   			array_walk($arrArgumentos[$i], 'test_alter');
   			$strValores = '('. implode(', ', $arrArgumentos[$i]) .')';

   			$arrStrTodosValores[] = $strValores;
   		}

$this->startTransaction();

foreach($arrStrTodosValores as $strValorEmLoop){

	$this->executaSQL(" insert into $nomeDaTabela($strCampos) values $strValorEmLoop; ");

   		
}
	$this->commit();

   		return true;
   		
   }
   
   public function Conectar(){
	return $this->getconn();
	
   }
   
   public function executaSQL($sql){
		return $this->getconn()->query($sql);
  
   }
   
   
   
   }
