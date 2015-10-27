<?php
class Test1_model extends CI_Model {

	function get_records()
	{
		$query =$this->db->get('Users');
		return $query->result_array(); 
	}

	function add_records($data)
	{
		$this->db->insert('Users', $data);
	}

	function update_records($data, $id)
	{
		$this->db->where('id',$id);
		$this->db->update('Users', $data);

	}

	function delete_record($id)
	{
		$this->db->where('id',$id);
		$this->db->delete("Users");
	}

	function get_record($id)
	{
		// echo $id;
		// $this->db->where('id',$id);
		// $query=$this->db->get('Users');
		// print_r($query);
		// return $query;

		$query = $this->db->get_where('Users', array('id' => $id));
	       $row=$query->result_array();
	     // print_r($row);
	       //echo "hello";
	       return $row;
	}

	public function can_log_in(){

			$this->db->where('email',$this->input->post('email'));
			$this->db->where('full_name',$this->input->post('full_name'));
			$this->db->where('login_name',$this->input->post('login_name'));
			$this->db->where('password',md5($this->input->post('password')));
			$query=$this->db->get('Users');

			if ($query->num_rows()==1)
			{
				return true;
			} else {
				return false;
			}
		}
	

}