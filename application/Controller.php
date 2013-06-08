<?php

abstract class Controller{

	protected $_view;
	protected $_request;
	public function __construct()
	{
		$this->_request = Request::getInstance();
		$this->_view = new View($this->_request);
	}
	abstract public function index();

}

?>
