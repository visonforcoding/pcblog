<?php

namespace Apps\Backend\Controllers;

class LoginController extends \Phalcon\Mvc\Controller
{

	public function indexAction()
	{
		$this->view->disable();
	}

}