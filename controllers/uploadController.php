<?php


class uploadController extends Controller{

    public function __construct(){
        parent::__construct();
    }
    public function index()
    {
        $data = new DataView();
        $data->title = "Upload";
        $this->_view->render("index",$data);
    }
}