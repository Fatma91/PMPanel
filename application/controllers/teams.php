<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Teams extends CI_Controller 
 {
	public function __construct()
	{
		parent::__construct();
    $this->load->model('teamdata');
		$this->load->helper(array('form','url'));
    $this->load->library('form_validation');
	}

    public function Add_Team()
    { 
      if($this->session->userdata('id') != '')
        {
              $data['result']=$this->teamdata->userdata();
              $this->load->view('layout/index');
          	  $this->load->view("add_view",$data);
              $this->load->view('layout/footer');
              
          if (isset($_POST['submit']))
                {
                    $team=array(
                     'description' =>$this->input->post('desc'),
                      'name' =>$this->input->post('tname')); 
                    $this->form_validation->set_rules('description','Description',
                    'required|trim|xss_clean');
                    $this->form_validation->set_rules('name','Name',
                    'required|trim|xss_clean');
                    $this->teamdata->AddTeam($team);
                    $usernames = $this->input->post ('username') ; 
                    $teamid=mysql_insert_id();
            
                    foreach ($usernames as $user) 
                    { 
                      $newrows=array('teamid' => $teamid,'userid' => $user);
                      $this->teamdata->AddUsers($newrows);
                    }  
                  redirect('teams/List_Teams');  

               // } else {

                  // $this->load->view('layout/index');
                   //$this->load->view('add_view', $data);
                   //$this->load->view('layout/footer');
                }
           }
         else
            {

                redirect('login');
            }

    }

     public function Team_Users($id)
    { 
      if($this->session->userdata('id') != '')
        {
            $this->load->model('teamdata');
            $users_ids['record']=$this->teamdata->GetUsersIds($id);
            $allusers['users']=$this->teamdata->GetTeamUsers($users_ids['record']);
            $this->load->view('layout/index');
            $this->load->view("listusers_view",$allusers);
            $this->load->view('layout/footer');
        }
         else
            {

                redirect('login');
            }
    }


    public function List_Teams()
    {
      if($this->session->userdata('id') != '')
        {
        	  $this->load->model('teamdata');
            $data['result']=$this->teamdata->ListTeams();
            $this->load->view('layout/index');
            $this->load->view("list_view",$data);
            $this->load->view('layout/footer');
        }
         else
            {

                redirect('login');
            }
    }

    public function Delete_Team($id)
    {
      if($this->session->userdata('id') != '')
        {
      		 if (empty($id))
      		  {
      		     echo "This record not found in Team table";
      		   }
      		 else
      		   {    
          			$this->load->model('teamdata');
          			$this->teamdata->DeleteTeam($id);
                redirect('teams/List_Teams');
    		     }
        }
         else
            {

                redirect('login');
            }
    }
    
    public function Edit_Team($id)
    {   
      if($this->session->userdata('id') != '')
        {
               $data['result']=$this->teamdata->GetTeamData($id);
               $data['users']=$this->teamdata->userdata();
               $users_ids['record']=$this->teamdata->GetUsersIds($id);
               $data['oldusers']=$this->teamdata->GetTeamUsers($users_ids['record']);
               // var_dump($data['oldusers']);
               $this->load->view('layout/index');
               $this->load->view("edit_view",$data);
               $this->load->view('layout/footer');
               if (isset($_POST['submit'])) 
               {
                  $this->teamdata->DeleteUsersInTeam($id);
                  $this->load->model('teamdata');
                   $newRow = array(
                   'description' =>$this->input->post('desc'),
                  'name' =>$this->input->post('tname')); 
                  $usernames = $this->input->post ('username') ; 
                    foreach ($usernames as $user) 
                    { 
                      $newrows=array('teamid' => $id,'userid' => $user);
                      $this->teamdata->AddUsers($newrows);
                    }  
                  $this->teamdata->EditTeam($id,$newRow); 
                  redirect('teams/List_Teams');
               }
      }
         else
            {

                redirect('login');
            }

    }


}
