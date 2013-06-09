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

    public function  estudiantes($test = "1"){
      	$data = new DataView();
		$data->title = "Datos estudiantes";
        switch($test){
            case "1":
                $this->_view->render('index',$data);
                break;
            case "2":
                $this->_view->render('index2',$data);
                break;
            case "3":
                $this->_view->render('index3',$data);
                break;
            case "4":
                $this->_view->render('index4',$data);
                break;
        }

    }

    public function  viviendas(){
      	$data = new DataView();
		$data->title = "Indicadores de viviendas";
      	$this->_view->render('viviendas',$data);
    }

    public function matriculas(){
         $data = new DataView();
		$data->title = "Estudiantes matriculados en el presente año o está inscritos     en la universidad";
      	$this->_view->render('matriculas',$data);	
    }
    public function usoInternet(){
        $data = new DataView();
        $data->title = "Lugares donde se ha usado internet en los últimos 12 mesesa";
        $this->_view->render('usointernet',$data);
    }
    public function frecuenciaUsoInternet(){
        $data = new DataView();
        $data->title = "Lugares donde se ha usado internet en los últimos 12 mesesa";
        $this->_view->render('frecuenciausointernet',$data);
    }

}


?>