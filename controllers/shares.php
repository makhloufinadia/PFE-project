<?php
class shares extends controller
{
  protected function Index()
  {
    $viewmodel = new ShareModel();
    $this->ReturnView($viewmodel->Index(), true);
  }
}
