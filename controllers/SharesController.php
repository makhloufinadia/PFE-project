<?php
class SharesController extends Controller {
    public function __construct($action, $request) {
        parent::__construct($action, $request);
    }

    protected function Index() {
        $viewmodel = new ShareModel();
        $this->ReturnView($viewmodel->Index(), true);
    }
}