<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Login extends CI_Controller {
	
	public function index(){
		$this->load->view('template/header_top');
		$this->load->view('login/login_form');
	}
	
	public function login_process(){
		
		$this->load->library('form_validation');
		$this->load->library('encrypt');
		
		$this->form_validation->set_rules('username', 'Username', 'required');
		$this->form_validation->set_rules('password', 'Password', 'required');
		
		// Getting the data from the form
		$username = $this->input->post('username', TRUE);
		$password = sha1($this->input->post('password', TRUE));
		
		if ($this->form_validation->run() == FALSE){
			$this->session->set_flashdata('notify', array('msg'=>'Both Username and Password Field should be Filled', 'type'=>'danger'));
			redirect('login');
		}else{
			$this->load->model('users');
			if($this->users->verify_user($username, $password) == TRUE){
				$this->session->set_flashdata('notify', array('msg'=>'Successfully Logged In', 'type'=>'success'));
				redirect('site');
			}else{
				$this->session->set_flashdata('notify', array('msg'=>'The Credentials are incorrect', 'type'=>'danger'));
				redirect('login');
			}
		}	
	}

	
}