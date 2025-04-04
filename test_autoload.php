<?php
require('index.php'); // Charge l'autoloader

$testClasses = ['HomeController', 'ShareModel', 'Controller'];
foreach($testClasses as $class){
    if(class_exists($class)){
        echo "$class: OK\n";
    }else{
        echo "$class: FAIL\n";
    }
}