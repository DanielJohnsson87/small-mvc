<?php

class LoginController {

	private $view;
	private $db;

public function index() {

$this->view = new View('light.php');

$this->view->message = "<h1>This is the login controller. Index method</h1>";

$this->view->render();

}


}