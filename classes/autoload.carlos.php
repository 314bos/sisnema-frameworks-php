<?php
// we've writen this code where we need
function __autoload($classname) {

    $filename = "./". $classname .".php";

    if(!file_exists($filename)){
    	$filename =  "./". $classname .".inc";
    }
    
    if(!file_exists($filename)){
    	$filename =  "../". $classname .".php";
    }
    
    if(!file_exists($filename)){
    	$filename =  "../". $classname .".inc";
    }


    require_once($filename);
}
