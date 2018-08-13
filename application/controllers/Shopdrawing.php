<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Shopdrawing extends CI_Controller {

	public function index()
	{
		$this->load->view('show_shopdrawing');
		if(empty($this->session->userdata('username')))redirect('Welcome');
	}
}
