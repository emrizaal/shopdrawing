<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Auth extends CI_Controller {

	public function __construct(){
		parent::__construct();
		$this->load->model('MAdmin');
	}

	function cek_login()
	{
		$p=$this->input->post();
		$cek=$this->MAdmin->cek_login($p['username'],$p['password']);
		if(!empty($cek)){
			$this->session->set_userdata($cek);
			$this->load->view('dashboard');
		}else{
			redirect('Welcome');
		}
	}

	function logout(){
		$p=array('username','password');
		$this->session->unset_userdata($p);
		redirect('Welcome');
	}
}
