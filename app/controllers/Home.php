<?php

class Home extends Controller{
	public function index(){
		$this->view('home/index');
	}
	public function add(){
		$_POST = json_decode(file_get_contents('php://input'), true);
		return $this->model('Res_model')->insertData($_POST['name'], $_POST['trying']);
	}
}