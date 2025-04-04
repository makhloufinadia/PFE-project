<?php
class UsersController extends Controller {
    public function __construct($action, $request) {
        parent::__construct($action, $request);
    }

    protected function register() {
        $viewmodel = new UserModel();
        $this->ReturnView($viewmodel->register(), true);
    }

    protected function login() {
        $viewmodel = new UserModel();
        $this->ReturnView($viewmodel->login(), true);
    }
}