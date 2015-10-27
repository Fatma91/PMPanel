<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
class Model_site extends CI_Model {

	public function __construct() 
     {
           parent::__construct(); 
           $this->load->database('PMPanel');
     }

     public function teamdata()
   {
   	return $this->db->query("select * from Teams")->result();
   }

	function read_record() {
		$query = $this->db->get('Projects');
		//var_dump($query);
		return $query->result();

	}
	function add_record($data) {
		//var_dump($data);
		$this->db->insert('Projects', $data);
	}

	function delete_record(){
		$this->db->where('id', $this->uri->segment(3));
		$this->db->delete('Projects');
	}

	function edit_record() {

		$this->db->where('id', $this->uri->segment(3));
		$query = $this->db->get('Projects');
		return $query->result();
	}

	function update_record($data){
		$this->db->where('id',$data['id']);
		$this->db->update('Projects', $data);

	}
}
