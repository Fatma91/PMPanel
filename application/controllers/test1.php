<?php

class Test1 extends CI_Controller 

{
	public function __construct()
	{
		parent::__construct();
		$this->load->model('test1_model');
		$this->load->library('form_validation');
	}
	function index()
	{
		//redirect('/main_controller/admin_view');
		// $value = array();
		// if($data = $this->load->model('test1_model')->get_records()) {
		// 	$value['record'] = $data;
		// }
		// $this->load->view('home', $value);
	}

	function getUsers()
	{
		if($this->session->userdata('id') != '')
        {
			$this->load->model('test1_model');
			$data['users'] = $this->test1_model->get_records();
			$this->load->view('layout/index');
			$this->load->view('testlist_view', $data);
			$this->load->view('layout/footer');
		 }
         else
            {

                redirect('login');
            }
	}

	function addUsers()
	{
		if($this->session->userdata('id') != '')
        {
				$this->load->library('form_validation');
				$this->load->model('test1_model');
				$newRow = array(
					'email' =>$this->input->post('email'),
					'full_name' =>$this->input->post('full_name'),
					'login_name' =>$this->input->post('login_name'),
					'password' =>$this->input->post('password'), 
					);
				$this->form_validation->set_rules('email','Email',
		            'required|trim|xss_clean');
		    	$this->form_validation->set_rules('full_name','Full Name',
		            'required|trim|xss_clean');
		    	$this->form_validation->set_rules('login_name','login Name',
		            'required|trim|xss_clean');
		    	$this->form_validation->set_rules('password','Password','required|md5|trim');

				//if ($this->input->post('submit')){
		    	if ($this->form_validation->run() == TRUE)
				{

					$this->test1_model->add_records($newRow);
					redirect('test1/getUsers');
				} else {
					$this->load->view('layout/index');
					$this->load->view('test1_view', $newRow);
					$this->load->view('layout/footer');
				}
		}
         else
            {

                redirect('login');
            }
	//	*****************************************
		// $this->load->library('form_validation');
		// $this->load->model('test1_model');
  //   	$this->form_validation->set_rules('email','Email',
  //           'required|trim|xss_clean|callback_validate_credentails');
  //   	$this->form_validation->set_rules('full_name','Full Name',
  //           'required|trim|xss_clean|callback_validate_credentails');
  //   	$this->form_validation->set_rules('login_name','login Name',
  //           'required|trim|xss_clean|callback_validate_credentails');
  //   	$this->form_validation->set_rules('password','Password','required|md5|trim');

  //   	if ($this->form_validation->run())
  //   	{
  //   		if ($this->input->post('submit')){

		// 	$this->test1_model->add_records($newRow);
		// 	redirect('test1/getUsers');
		// } 
    		
  //   	} else {
  //   		$this->load->view('layout/index');
		// 	$this->load->view('test1_view', $newRow);
		// 	$this->load->view('layout/footer');
  //   	}
		
		

		// if($this->getRequest()->isPost()){
  //           if($user_form->isValid($_POST)){
		// 		$this->load->model('test1_model');
		// 		$this->test1_model->add_records($data);
		//  	} else {
		//  		echo "please complete all fields";
		//  	}
		//  }

 	// 	$this->load->view('test1_view', $data);
	}

	public function validate_credentails()
    {
        $this->load->model('test1_model');

        if ($this->test1_model->can_log_in())
        {
            return true;
        } else {
            $this->form_validation->set_message('validate_credentails','Incorrect username/password');
            return false;
        }
    }

	function editUsers()
	{
		if($this->session->userdata('id') != '')
        {
				$this->load->library('form_validation');
				$id = $this->input->post('id_user');
				$this->load->model('test1_model');
				
				
				// echo $this->input->post('email');
				
				$newRow = array(
					'email' =>$this->input->post('email'),
					 'full_name' =>$this->input->post('full_name'),
					 'login_name' =>$this->input->post('login_name'),
					 'password' =>$this->input->post('password')
					);
				$this->form_validation->set_rules('email','Email',
		            'required|trim|xss_clean');
		    	$this->form_validation->set_rules('full_name','Full Name',
		            'required|trim|xss_clean');
		    	$this->form_validation->set_rules('login_name','login Name',
		            'required|trim|xss_clean');
		    	$this->form_validation->set_rules('password','Password','required|md5|trim');

				//if ($this->input->post('submit')){
		    	if ($this->form_validation->run() == TRUE)
				{
						//print_r($this->test1_model->get_record($id)) ;
						$this->test1_model->update_records($newRow, $id);
						redirect('test1/getUsers');
						//echo $id ;
						} else {
						$data['id']=$this->input->get('id');
						$data ['user'] = $this->test1_model->get_record($data['id']);
						$this->load->view('layout/index');

						$this->load->view("test1edit_view", $data);
						$this->load->view('layout/footer');
					}
		}
         else
            {

                redirect('login');
            }
			//redirect('test1/getUsers');

		//header('location:getUsers');
	}

	public function deleteUser()
	{
		if($this->session->userdata('id') != '')
        {
			$id=$this->input->post('id_user');
	        $this->load->model('test1_model');
	        
	        $data['id']=$this->input->get('id');
	        $this->test1_model->delete_record($data['id']);
	        header('location:getUsers');
	    }
         else
            {

                redirect('login');
            }
	}

}