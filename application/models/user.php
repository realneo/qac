<?php
	class User extends CI_Model{
		
		public function verify_user($username, $password){
			$query = $this->db->get_where('users', array('username' => $username, 'password' => $password));
			if($this->db->affected_rows() === 1){
				return TRUE;
			}else{
				return FALSE;
			}
		}
		
		public function add_user($username, $password){
			// Check if the username is in the database
			$check_query = $this->db->get_where('users', array('username' => $username));
			
			if($this->db->affected_rows() > 0){
				return FALSE;
			}else{
				$this->db->insert('users', array('username'=>$username, 'password'=>$password));
				return TRUE;
			}
		}
		
		
	}