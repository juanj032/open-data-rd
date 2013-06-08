<?php

/**
* 
*/
class Bootstrap 
{
	

	public static function run(Request $request){

		// print_r(expression)
		$controller = $request->getController()."Controller";
		$path = ROOT . 'controllers' . DS . $controller.".php";
		$method = $request->getMethod();
		$args = $request->getArgs();
	
		if(is_readable($path)){
			require_once $path;
			$controller = new $controller;

			if (!is_callable(array($controller,$method))) {
				$method = DEFAULT_METHOD;
			}
			call_user_func_array(array($controller,$method), $args);
		
		}else{
			throw new Exception("Error Processing Request. Controller not found", 1);
			
		}
	}
}
?>
