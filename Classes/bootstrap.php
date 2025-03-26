<?php
class Bootstrap
{
    private $controller;
    private $action;
    private $request;

    public function __construct($request)
    {
        $this->request = $request;
        
        // Fix the comparison operator (== instead of =)
        // Use null coalescing operator to provide default values
        $this->controller = $this->request['controller'] ?? 'home';
        $this->action = $this->request['action'] ?? 'index';
        
        echo $this->controller;
    }

    public function createController()
    {
        // Check if the controller class exists
        if (class_exists($this->controller)) {
            $parents = class_parents($this->controller);
            
            // Check if the controller extends the base controller
            if (in_array("Controller", $parents)) {
                // Check if the method exists in the controller
                if (method_exists($this->controller, $this->action)) {
                    return new $this->controller($this->action, $this->request);
                } else {
                    echo '<h1>Method does not exist</h1>';
                    return;
                }
            } else {
                echo '<h1>Base controller not found</h1>';
                return;
            }
        } else {
            echo '<h1>Controller Class not found</h1>';
            return;
        }
    }
}