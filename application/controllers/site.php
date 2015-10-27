<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Site extends CI_Controller {

	function index() {
		$value = array();
		if($data = $this->model_site->read_record()) {
			$value['record'] = $data;
		}
		//var_dump($value);
		//print_r($data);
		//die;
		$value['team']=$this->model_site->teamdata();
		$this->load->view('layout/index');
		$this->load->view('home', $value);
		$this->load->view('layout/footer');
		//print_r($value);
	}    
	 	function create() {
	 		$this->load->library('form_validation');
	 		$data = array('description' => $this->input->post('description'),
	 					'start' => $this->input->post('start'),
	 					'end' => $this->input->post('end'),
	 					'status' => $this->input->post('status'),
	 					'name' => $this->input->post('name'),
	 					'teamid' => $this->input->post('team'));
	 		$this->form_validation->set_rules('description','Description',
            'required|trim|xss_clean|callback_validate_credentails');
    		$this->form_validation->set_rules('start','Start Date',
            'required|trim|xss_clean|callback_validate_credentails');
    		$this->form_validation->set_rules('end','End Date',
    			'required|trim|xss_clean|callback_validate_credentails');
    		$this->form_validation->set_rules('status','Staus',
    			'required|trim|xss_clean|callback_validate_credentails');
    		$this->form_validation->set_rules('name','Name',
    			'required|trim|xss_clean|callback_validate_credentails');
    		$this->form_validation->set_rules('team','Team ID',
    			'required|trim|xss_clean|callback_validate_credentails');
	 		//if(!empty($data['description']) && !empty($data['start']) && !empty($data['end']) && !empty($data['status']) && !empty($data['name']) && !empty($data['teamid'])){
	 			//if (isset($_POST['submitbtn'])){
    	  
    			$data['team']=$this->model_site->teamdata();
    	  	
    		// var_dump($data['record']);
    		if ($this->form_validation->run() == TRUE)
			{
    			unset ($data['team']);//=$this->model_site->teamdata();

	 			$this->model_site->add_record($data);
	 			redirect ('site/index');

	 		} else {
				$data['record']=$this->model_site->read_record();
    			$data['team']=$this->model_site->teamdata();
	 			$this->load->view('layout/index');
				$this->load->view('home', $data);
	 			//echo "please complete all fields";
	 		
	 		}
	 		// $this->index();
	 		
	 	}
	 	function delete(){
	 		$this->model_site->delete_record();
	 		$this->index();
	 	}
	 	function edit(){
	 		$value = array();
	 		if($data = $this->model_site->edit_record()){
	 			$value['record'] = $data;
	 		}
	 		$this->load->view('layout/index');
	 		$this->load->view('edit', $value);
	 		$this->load->view('layout/footer');
	 	}

	 	function update(){
	 		$data = array( 'id' => $this->input->post('id'),
	 					'description' => $this->input->post('description'),
	 					'start' => $this->input->post('start'),
	 					'end' => $this->input->post('end'),
	 					'status' => $this->input->post('status'),
	 					'name' => $this->input->post('name'),
	 					'teamid' => $this->input->post('teamid'));
	 		//if (isset($_POST['submitbtn'])){
	 			$this->model_site->update_record($data);
	 			redirect ('site/index');
	 		//} else {
	 		//	echo "please complete all fields";
	 		//}
	 		//$this->index();

	 	}
}