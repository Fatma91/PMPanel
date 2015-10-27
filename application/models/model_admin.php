<?php

	class Model_admin extends CI_Model{

		public function can_log_in($email,$password){

			$DB2 = $this->load->database('ayacodegno', TRUE);
			$DB2->where('email',$email);
			$DB2->where('password',md5($password));
			$query=$DB2->get('users');

			if ($query->num_rows()==1)
			{
				return true;
			} else {
				return false;
			}
		}

		public function login_user($email,$password)
   		 {
   		 	 $DB2 = $this->load->database('aya', TRUE);
	         $query = $DB2->get_where('users', array('password' => $password ,'email' => $email ));
	         return $query;
   		 }
	}

?>