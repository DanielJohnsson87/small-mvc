<?php

$conf = parse_ini_file('./config/application.ini', TRUE);

//[site]
define('BASE_DIR', $conf['site']['BASE_DIR']);

//date.timezone setting
date_default_timezone_set($conf['time']['default_timezone']);

//path info
define ('HTTP_PATH', 'http://' . $_SERVER['SERVER_NAME'] . '/' . BASE_DIR);
define ('FS_PATH', $_SERVER['DOCUMENT_ROOT'] . '/' . BASE_DIR);
define ('REQUEST_URI', preg_replace('/\/miun\/projekt\//', "", $_SERVER['REQUEST_URI']));

require_once (ROOT . '/core/init.php');