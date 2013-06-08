<?php

/**
* 
*/
class View
{
	private $_controller;

	function __construct(Request $request)
	{
		$this->_controller = $request->getController();
	}

	public function __get($data){
		$this->$data = "";
		return $this->$data;
	}

	public function render($view, DataView $data = null)
	{
		if(is_null($data))
			$data  = new DataView();
	
		foreach ($data as $key => $value) {
				$$key = $value;
			}	
	 	$viewPath = ROOT. 'views'. DS .$this->_controller . DS . $view .'.phtml';
	 	if(is_readable($viewPath)){
	 		include_once ROOT . 'views' . DS . 'layout' . DS . DEFAULT_LAYOUT . DS . 'header.php';
	 		include_once $viewPath;
	 		include_once ROOT . 'views' . DS . 'layout' . DS . DEFAULT_LAYOUT . DS . 'footer.php';
	 	}else{
	 		throw new Exception("Error Processing Request. Cannot load view", 1);
	 		
	 	}
	} 
}
?>
