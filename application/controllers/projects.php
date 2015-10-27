<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Projects extends CI_Controller
 {

	public function __construct()
	{
		parent::__construct();
    $this->load->model('projectdata');
		$this->load->helper(array('form','url'));
    $this->load->library('form_validation');
	}

  public function Add_Project()
  { 
    if($this->session->userdata('id') != '')
       {
              $this->form_validation->set_rules('desc', ' project description ', 'required|xss_clean|max_length[100]');
              $this->form_validation->set_rules('start', ' start time ', 'required|xss_clean');
              $this->form_validation->set_rules('end', ' end time ', 'required|xss_clean');
              $this->form_validation->set_rules('status', ' project status ', 'required|xss_clean|max_length[100]');
              $this->form_validation->set_rules('pname', ' project name ', 'required|xss_clean|max_length[50]');
              $data['teams']=$this->projectdata->AllTeams();
              $this->load->view('layout/index');
              //$this->load->view('layout/footer');
              if (isset($_POST['submit']))
                {
                        if ($this->form_validation->run()==true)
                      {
                            $this->load->projectdata->AddProject();
                            redirect('projects/List_Projects');
                          }

                          else {

                            //echo "sallaaah";
                             $data['teams']=$this->projectdata->AllTeams();
                              $this->load->view("addproject",$data);
                              $this->load->view('layout/footer');
                       // $this->load->view("addproject");
                       // echo "sallaaah";
                        
                          }
              }
              else{

              $this->load->view("addproject",$data);
              }
              // elseif ($this->form_validation->run() == FAlse)
              // {
              //   // $data['errors']=validation_errors();
              //   // echo validation_errors();
              //   $data['teams']=$this->projectdata->AllTeams();
                
              //   $this->load->view("addproject",$data);
                
              // }
       }
         else
            {

                redirect('login');
            }
  }

  public function List_Projects()
     {
          if($this->session->userdata('id') != '')
           {
              $data['results']=$this->projectdata->ListProjects();
              $this->load->view('layout/index');
              $this->load->view("listprojects",$data);
              $this->load->view('layout/footer');
            }
         else
            {

                redirect('login');
            }
    }

    public function Delete_Project($id)
     {
      if($this->session->userdata('id') != '')
           {
              if (empty($id))
               {
                  echo "This Project not found";
                }
              else
                {    
                   $this->projectdata->DeleteProject($id);
                   redirect('projects/List_Projects');
                }
        }
         else
            {

                redirect('login');
            }
     }

     public function Edit_Project($id)
   {   
      if($this->session->userdata('id') != '')
        {
                    $this->form_validation->set_rules('desc', ' project description ', 'required|xss_clean|max_length[100]');
                    $this->form_validation->set_rules('start', ' start time ', 'required|xss_clean');
                    $this->form_validation->set_rules('end', ' end time ', 'required|xss_clean');
                    $this->form_validation->set_rules('status', ' project status ', 'required|xss_clean|max_length[100]');
                    $this->form_validation->set_rules('pname', ' project name ', 'required|xss_clean|max_length[50]');
            
                   $data['result']=$this->projectdata->GetProject($id);
                   $data['teams']=$this->projectdata->AllTeams();
                   $this->load->view('layout/index');
                   //$this->load->view("editproject",$data);
                   $this->load->view('layout/footer');

                  if (isset($_POST['submit'])) 
                 { 

                            if ($this->form_validation->run() == True) 
                           {    
                                    $team=$_POST['teams'];
                                    $teamid=$team[0];  
                                     $newRow = array(
                                     'description' =>$this->input->post('desc'),
                                     'start' =>$this->input->post('start'), 
                                     'end' =>$this->input->post('end'),
                                     'status' =>$this->input->post('status'),
                                     'name'=>$this->input->post('pname'),
                                     'teamid'=>$teamid ); 
                                    $this->projectdata->EditProject($id,$newRow);  
                                    redirect('projects/List_Projects');
                              } else {

                                $data['teams']=$this->projectdata->AllTeams();
                                $this->load->view("editproject",$data);
                                $this->load->view('layout/footer');
                              }
                            
                         }
                         // elseif ($this->form_validation->run() == FAlse) 
                         //    {
                         //     echo validation_errors();

                         //     }
                          else{

              $this->load->view("editproject",$data);
              }
      }
         else
            {

                redirect('login');
            }
  
  }

}
