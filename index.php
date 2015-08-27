<?php



require_once('classes/autoload.carlos.php');


$controller = $_GET['controller'] . "controller";
$action     = $_GET['action'];


$objController = new $controller();
$objController->$action();

// include('views/'  $controller . '/' . $action . '.php')