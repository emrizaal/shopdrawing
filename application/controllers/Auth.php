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
		$cekSuper=$this->cekSuperAdmin($p);

		if(!empty($cekSuper)){
			$cekSuper['is_super']=1;
			$this->session->set_userdata($cekSuper);
			$this->load->view('dashboard');
		}else{
			$cek=$this->MAdmin->cek_login($p['username'],$p['password']);
			if(!empty($cek)){
				$cek['is_super']=0;
				$this->session->set_userdata($cek);
				$this->load->view('dashboard');
			}else{
				redirect('Welcome');
			}
		}
	}

	function cekSuperAdmin($p){
		$cek=$this->MAdmin->getSuperAdmin($p['username'],$p['password']);
		if(!empty($cek)){
			return $cek;
		}else{
			return array();
		}
	}

	function logout(){
		$p=array('username','password');
		$this->session->unset_userdata($p);
		redirect('Welcome');
	}
}
