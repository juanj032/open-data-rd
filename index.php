<?php

define('DS', DIRECTORY_SEPARATOR);
define('ROOT', realpath(dirname(__FILE__)) . DS);
define('APP_PATH', ROOT . 'application' . DS);

require_once APP_PATH . DS . 'Engine.php';



try{
	$r = Request::getInstance();
	Bootstrap::run($r);
}catch(Exception $ex){
	echo $ex->getMessage();
}

?>
