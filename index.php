<?php
/**
 * 
 * Capacitação  - Design Patterns MVC
 *           MVCatho 
 * 
 * */
 
ini_set('display_error', 1);
ini_set('display_startup_erros', 1);

list($controller, $action) = explode('/', $_GET['key']);

require_once "ControllerAbstract.php";
include_once "Controller/".ucfirst($controller)."Controller.php";

$controller = ucfirst($controller)."Controller";
$control = new $controller();
$control->{$action}();
