<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Site extends CI_Controller {

	public function index(){
		$this->load->view('template');
	}
	
	public function login(){
		$this->load->view('template/header_top');
		$this->load->view('login/login_form');
	}
}