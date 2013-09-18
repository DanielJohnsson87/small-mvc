<?php 

class database {

private $username;
private $dbName;
private $password;
private $db = null;
private $stmt = null;

/*
Setup the db connection. Get db info from applications.ini. Establish connection
to the db and store it in $this->db object
 */

public function __construct() {

	$conf = parse_ini_file('./config/application.ini', TRUE);
	$this->username = $conf['db']['username'];
	$this->password = $conf['db']['password'];
	$this->dsn 		= $conf['db']['dsn'];

	$this->db = new PDO($this->dsn, $this->username, $this->password);
	$this->db->SetAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION); 

}

public function showDb() {

	$stmt = $this->db->prepare('select * from users');
	$stmt->execute();
	$res = $stmt->fetchAll();

	return $res;
}

public function queryDb($query) {


}

}