 <?php 

class Login extends CI_Controller{

    public function __construct() {        
    parent::__construct();
    $this->load->library('form_validation');

    }

    function index(){

        
            if($this->session->userdata('id')== '')
            {
                $this->load->library('form_validation');

                $this->form_validation->set_rules('email', 'email', 'trim|required|valid_email');
                $this->form_validation->set_rules('password', 'Password', 'trim|required|min_length[4]|max_length[32]');
                $error['user']=""; 
                if($this->form_validation->run())
                {
                    $email= $this->input->post('email');
                    $password=md5($this->input->post('password'));
                    $user_info= $this->model_admin->login_user($email,$password);
                    $user=$user_info->result();
                    if($user_info->num_rows > 0)
                    {
                        $user_data=array('id'=> $user[0]->id,
                                         'useremail'=> $user[0]->email,
                                        );
                        $this->session->set_userdata($user_data);
                        echo "helllloo";
                        redirect('projects/List_Projects'); 
                    }
                    else
                    {
                        $error['user']="Invalid username or password";
                        $this->load->view('layout/index');
                        $this->load->view('login');
                        $this->load->view('layout/footer');
                       // $this->my_view('login/login',$error);
                    }

                }
                else 
                {
                    //$this->load->view('user_view/login',$error);
                    $this->load->view('layout/index');
                    $this->load->view('login');
                    $this->load->view('layout/footer');
                   // $this->my_view('login/login',$error);
                }
            }
            else 
            {
                redirect('projects/List_Projects');
            }

        
    }   

    public function login()
    {
        
            
    }

 public function login_validation()
    {
    	$this->load->library('form_validation');

    	$this->form_validation->set_rules('email','Email',
            'required|trim|xss_clean|callback_validate_credentails');
    	$this->form_validation->set_rules('password','Password','required|md5|trim');

    	if ($this->form_validation->run())
    	{

    		redirect('roles/list_roles');
    	} else {
    		$this->load->view('login');
    	}
    }

    public function validate_credentails()
    {
        $this->load->model('model_admin');

        if ($this->model_admin->can_log_in())
        {
            return true;
        } else {
            $this->form_validation->set_message('validate_credentails','Incorrect username/password');
            return false;
        }
    }

    
    public function logout()
        {
            $newdata = array('id'=>'',
                             'username'=>'',
                             //'useremail'=> '',
                            // 'role'=>'',
                            // 'image'=>''
                            );
            $this->session->unset_userdata($newdata );
            $this->session->sess_destroy();
            redirect('main_controller/admin_view');
        }

}

?>