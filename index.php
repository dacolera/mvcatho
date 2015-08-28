<?php


	ini_set('display_errors',1);
    ini_set('display_startup_erros',1);
    error_reporting(E_ALL);
#print $_GET['key'];

list($controller, $action) =  explode('/', $_GET['key']);

require "ControllerAbstract.php";
include "Controller/".ucfirst($controller)."Controller.php";

$controller = ucfirst($controller).'Controller';


$control = new $controller();

$control->{$action}();
