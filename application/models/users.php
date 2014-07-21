<?php
	class Users extends CI_Model{
		
		public function verify_user($username, $password){
			$query = $this->db->get_where('users', array('username' => $username, 'password' => $password));
			if($this->db->affected_rows() === 1){
				return TRUE;
			}else{
				return FALSE;
			}
		}
		
		
	}