<?php
class HomeController extends Controller {
    public function __construct($action, $request){
        parent::__construct($action, $request);
    }

    protected function index(){
        $viewmodel = new HomeModel();
        $this->ReturnView($viewmodel->index(), true);
    }
}