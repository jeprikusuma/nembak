<?php

class Admin extends Controller{
	public function index(){
		$data['res'] =  $this->model('Res_model')->data();
		// view
		$this->view('admin/index', $data);
	}
}