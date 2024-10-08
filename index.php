<?php


// link show all errors
require 'application/lib/Dev.php';

// using name space for multiple class invocation
use application\core\Router;



// autoload classes from name space
spl_autoload_register(function ($class) {
    $path = str_replace('\\', '/', $class.'.php');
    // echo $path;
    if(file_exists($path)){
        require $path;
    }
});


// for cookie -! read please
session_start();

$router = new Router;
$router->run();