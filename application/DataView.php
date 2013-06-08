<?php 

/**
* 
*/
class DataView
{
	public function __set($attr, $value){
		$this->$attr = $value;
		return $this->$attr;
	}

	public function __get($attr){
		$this->$attr = "";
		return $this->$attr;
	}
}

?>
