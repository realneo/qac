<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Site extends CI_Controller {

	public function index(){
		$data = array('main_content'=>'template/main_content');
		$this->load->view('template', $data);
	}
}