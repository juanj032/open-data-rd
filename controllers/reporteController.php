<?php 


/**
* 
*/
class reporteController extends Controller
{

	public  function __construct()
	{
		parent::__construct();
	}
	public function index(){
		
		$data = new DataView();
		$data->title = "Test Data";
		// $data->lo_que_sea = "Test Data";
  //       $data->test = "asdasd";
  //       $data->data2 = file_get_contents("http://api.one.gob.do/indicadores");
 	// 	$data->data2 = json_decode($data->data2);

		$this->_view->render('index',$data);
	}

    public function  estudiantes($test = "",$test2 = ""){
      	$data = new DataView();
		$data->title = "Test Data";
      	$this->_view->render('index',$data);
    }

    public function  viviendas(){
      	$data = new DataView();
		$data->title = "Test Data";
      	$this->_view->render('viviendas',$data);
    }

    public function matriculas(){
         $data = new DataView();
		$data->title = "Test Data";
      	$this->_view->render('matriculas',$data);	
    }
    public function usoInternet(){
        $data = new DataView();
        $data->title = "Test Data";
        $this->_view->render('usointernet',$data);
    }

}


?>