<?php

class Main_controller extends CI_Controller 

{
	public function __construct()
	{
		parent::__construct();
		$this->load->library('layout');
		$this->load->model('test1_model');
		
	}
	public function admin_view()
	{
		$this ->load->view('layout/welcome');		
	}
}
