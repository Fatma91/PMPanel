<?php

	class Model_roles extends CI_Model{

		public function get_roles($num=20, $start=0){

			//$this->db->select->from('Roles');
			$query=$this->db->query("select * from Roles");
			//$query=$this->db->get->('Roles');
			return $query->result_array();

			
		}

		public function insertrole($data){

			// $role_desc=$_POST['desc'];

			// $data = array(
		 //   'desc' => $role_desc
			// );

			$this->db->insert('Roles', $data); 
				}

		public function updaterole($data, $id){
			$this->db->where('id',$id);
			$this->db->update('Roles', $data);
			//$this->db->update('Roles', $data, "id = $id");
		}

		public function deleterole($id){

			$this->db->where('id',$id);
			$this->db->delete('Roles');

		}
		public function GetRoleData($id)
	    {   
	       $query = $this->db->get_where('Roles', array('id' => $id));
	       $row=$query->result_array();
	     // print_r($row);
	       //echo "hello";
	       return $row;
	    }
	}

?>