<?php

namespace Apps\Frontend\Controllers;

class ErrorsController extends \Phalcon\Mvc\Controller {

    public function show404Action() {
        
        $this->view->pick("layout/404");
        $this->view->setVars(
        );
    }

    public function show401Action() {
        echo 'access deny';
        exit();
    }

    public function show500Action() {
        
    }

}
