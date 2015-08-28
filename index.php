<?php


ini_set('display_errors',1);
ini_set('display_startup_erros',1);
error_reporting(E_ALL);
#print $_GET['key'];

list($controller, $action) =  explode('/', $_GET['key']);

require "ControllerAbstract.php";
include "Controller/".ucfirst($controller)."Controller.php";

spl_autoload_register(function($class){
	if(file_exists("Model/{$class}.php"))
	{
		include_once "Model/{$class}.php";
	}
});

$controller = ucfirst($controller).'Controller';


$control = new $controller();

$control->{$action}();
