<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Users extends CI_Controller {

	public function add_user_form(){
		$data = array('main_content'=>'users/add_user_form');
		$this->load->view('template', $data);
	}
	
	public function add_user_process(){
		$this->load->library('form_validation');
		$this->load->library('encrypt');
		
		$this->form_validation->set_rules('username', 'Username', 'required');
		$this->form_validation->set_rules('password', 'Password', 'required');
		
		// Getting the data from the form
		$username = $this->input->post('username', TRUE);
		$password = sha1($this->input->post('password', TRUE));
		
		if ($this->form_validation->run() == FALSE){
			$this->session->set_flashdata('notify', array('msg'=>'Both Username and Password Field should be Filled', 'type'=>'danger'));
			redirect('users/add_user_form');
		}else{
			$this->load->model('user');
			if($this->user->add_user($username, $password) == TRUE){
				$this->session->set_flashdata('notify', array('msg'=>'Successfully Added ', 'type'=>'success'));
				redirect('users/add_user_form');
			}else{
				$this->session->set_flashdata('notify', array('msg'=>'Username is already in the database', 'type'=>'danger'));
				redirect('users/add_user_form');
			}
		}
	}
}