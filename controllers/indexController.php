<?php 


/**
* 
*/
class indexController extends Controller
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

    public function  test($test = "",$test2 = ""){

        $data = new DataView();
        $data->title = "Test Function";
        $data->test = $test;
        $data->test2 = $test2;
        $this->_view->render("index",$data);
    }
}


?>