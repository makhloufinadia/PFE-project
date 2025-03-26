<?php
class Bootstrap
{
  private $controller;
  private $action;
  private $request;

  public function __construct($request)
  {
    $this->request = $request;
    if ($this->request['controller'] = "") {
      $this->controller = 'home';
    } else {
      $this->controller = $this->request['controller'];
    }
    if ($this->request['action'] == "") {
      $this->action = 'index';
    } else {
      $this->action = $this->request['action'];
    }
    echo $this->controller;
  }
  public function createcontroller()
  {
    if (class_exists($this->controller)) {
      $parents = class_parents($this->controller);
      if (in_array("controller", $parents)) {
        if (method_exists($this->controller, $this->action)) {
          return new $this->controller($this->action, $this->request);
        } else {
          echo '<h1>method does not exist</h1>';
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
