<?php
/**
 * 
 * Capacitação  - Design Patterns MVC
 *           MVCatho 
 * 
 * */
 
ini_set('display_error', 1);
ini_set('display_startup_erros', 1);
error_reporting(E_ALL);

require_once "vendor/autoload.php";

$application = new MvCatho\System\CathoCore();

$application->run();


/*
list($controller, $action) = explode('/', $_GET['key']);

require_once "ControllerAbstract.php";
include_once "Controller/".ucfirst($controller)."Controller.php";

spl_autoload_register(function($class){
    if(file_exists("Model/{$class}.php"))
    {
        include_once "Model/{$class}.php";
    }
});

$controller = ucfirst($controller)."Controller";
$control = new $controller();
$control->{$action}();
*/