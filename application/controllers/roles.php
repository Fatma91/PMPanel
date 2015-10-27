<?php 

class Roles extends CI_Controller{

    function index(){
    	
    }	

    // public function login()
    // {
    //     $this->load->view('login');
    // }

    public function list_roles()
    {
        if($this->session->userdata('id') != '')
       {

           // if($this->session->userdata('id') != '')
            //{
        	$this->load->model('model_roles');
        	$data['roles']=$this->model_roles->get_roles();
        	//echo "<pre>";print_r($data['roles']);echo "</pre>";
            $this->load->view('layout/index');
        	$this->load->view('roles_view',$data);
            $this->load->view('layout/footer');
            // }else{
            //     redirect('login/login_validation');
            // }
         }
         else
            {

                redirect('login');
            }
    }

    public function addrole()
    { 
         if($this->session->userdata('id') != '')
            {
                $this->load->library('form_validation');
                $this->load->model('model_roles');
             //    $data['result']=$this->model_roles->get_roles();
            	// $this->load->view("add_role_view",$data);
                $newrow = array(
                    'Description' =>$this->input->post('desc'),
                    );
                $this->form_validation->set_rules('description','Description',
                    'required|trim|xss_clean');
               // if ($this->form_validation->run() == TRUE)
                if ($this->input->post('submit'))
                {
                    $this->model_roles->insertrole($newrow);
                    redirect('roles/list_roles');
                 } else {
                    $this->load->view('layout/index');
                    $this->load->view("add_role_view",$newrow);
                    $this->load->view('layout/footer');
               }
              //  $this->load->view("roles_view",$data);
            }
         else
            {

                redirect('login');
            }
    }

    public function update_role()
    {
        if($this->session->userdata('id') != '')
            {

                $this->load->library('form_validation');
                $id=$this->input->post('id_role');
            //  echo $this->input->post('desc').$id;
                $this->load->model('model_roles');
                $newrow = array('description' =>$this->input->post('desc'));
                $this->form_validation->set_rules('description','Description',
                    'required|trim|xss_clean');
               // if ($this->form_validation->run() == TRUE)
                    if ($this->input->post('submit'))
                {
                        $this->model_roles->updaterole($newrow, $id);
                        redirect('roles/list_roles');

                } else {
                        $data['id']=$this->input->get('id');
                        $data ['role'] = $this->model_roles->getRoleData($data['id']);
                        
                        $this->load->view('layout/index');
                        $this->load->view("update_role_view",$data);
                        $this->load->view('layout/footer');
                }
                //redirect('roles/list_roles');
         }
         else
            {

                redirect('login');
            }
    }

    public function delete_role()
    {
        if($this->session->userdata('id') != '')
            {
                $id=$this->input->post('id_role');
                $this->load->model('model_roles');
                
                $data['id']=$this->input->get('id');
                $this->model_roles->deleterole($data['id']);
                redirect('roles/list_roles');

                //echo $data['id'];
            }
         else
            {

                redirect('login');
            }

    }
    

    

    

}

?>
