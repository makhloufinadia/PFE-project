<?php
abstract class Controller {
    protected $request;
    protected $action;

    public function __construct($action, $request) {
        $this->action = $action;
        $this->request = $request;
    }

    public function executeAction() {
        return $this->{$this->action}();
    }

    protected function ReturnView($viewmodel, $fullview) {
        // Convertit "HomeController" en "home"
        $controllerName = strtolower(str_replace('Controller', '', get_class($this)));
        $viewPath = 'views/'.$controllerName.'/'.$this->action.'.php';
        
        if(!file_exists($viewPath)) {
            die("View file not found: ".$viewPath); // Message d'erreur détaillé
        }
    
        if($fullview) {
            require('views/main.php');
        } else {
            require($viewPath);
        }
    }
}