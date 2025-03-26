<?php
class Home extends controller
{
  protected function Index()
  {
    $viewmodel = new HomeModel();
    $this->ReturnView($viewmodel->Index(), true);
  }
}
