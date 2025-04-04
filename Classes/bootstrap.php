<?php
class Bootstrap {
    private $controller;
    private $action;
    private $request;

    public function __construct($request){
        $this->request = $request;
        $this->action = $this->request['action'] ?? 'index';
        $this->controller = ucfirst($this->request['controller'] ?? 'home').'Controller';
    }

    public function createController(){
        // Debug: Liste toutes les classes chargées
        print_r(get_declared_classes());
        
        if(class_exists($this->controller)){
            $parents = class_parents($this->controller);
            if(in_array("Controller", $parents)){
                if(method_exists($this->controller, $this->action)){
                    return new $this->controller($this->action, $this->request);
                }
                die('Method '.$this->action.' not found in '.$this->controller);
            }
            die('Parent Controller not found for '.$this->controller);
        }
        die('Controller class does not exist: '.$this->controller);
    }
}