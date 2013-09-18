<?php

class IndexController {

	private $view;
	private $db;

public function index() {

$this->view = new View('light.php');

$this->view->message = "<h1>This is the index page</h1>";

$this->view->render();

}

public function test() {
	$this->view = new View('light.php');

	$this->db = new database;

	$dbResult = $this->db->showDb();

	$this->view->message = "<h1> This is the IndexController, test method</h1>";

	//$this->view->array = $dbResult;

	$this->view->render();
}

}