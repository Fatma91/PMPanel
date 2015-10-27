<?php 
class Projectdata extends CI_Model
{


   public function AllTeams()
   {
    return $this->db->query("select * from Teams")->result();
   }
  public function AddProject()
    {
         $team=$_POST['teams'];
         $teamid=$team[0];
         $desc= $_POST['desc'];
         $start = $_POST['start'];
         $end= $_POST['end'];
         $status= $_POST['status'];
         $pname= $_POST['pname'];
         $this->db->query("INSERT INTO Projects (description,start,end,status,name,teamid) VALUES('$desc','$start','$end','$status','$pname','$teamid')"); 
    }
         

    public function ListProjects()
    {

      return $this->db->query("select * from Projects")->result();
    }

     public function DeleteProject($id)
     {
       $this->db->delete('Projects', array('id' => $id)); 
     }
     
     public function GetProject($id)
     {
         $query = $this->db->get_where('Projects', array('id' => $id));
         $row=$query->result_array();
         return $row;
     }
     
     public function EditProject($id,$data)
     {
      
        $this->db->where('id', $id);
        $this->db->update('Projects', $data);

     }
}
