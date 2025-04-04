<?php
// Debug
ini_set('display_errors', 1);
error_reporting(E_ALL);

require('config.php');

// Autoloader ultime
spl_autoload_register(function($class){
    $classMap = [
        'classes/' => ['Bootstrap', 'Controller', 'Model'],
        'controllers/' => ['HomeController', 'SharesController', 'UsersController'],
        'models/' => ['HomeModel', 'ShareModel', 'UserModel']
    ];
    
    foreach($classMap as $path => $classes){
        if(in_array($class, $classes)){
            $file = $path.$class.'.php';
            if(file_exists($file)){
                require $file;
                return;
            }
        }
    }
    
    die("Class not found: ".$class);
});

$bootstrap = new Bootstrap($_GET);
$controller = $bootstrap->createController();
if($controller){
    $controller->executeAction();
}