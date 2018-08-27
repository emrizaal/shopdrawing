<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Admin extends CI_Controller {

	public function __construct(){
		parent::__construct();
		$this->load->model('MAdmin');
		if(empty($this->session->userdata('username')))redirect('Welcome');
	}

	public function index()
	{
		$data['data']=$this->MAdmin->getAllAdmin();
		$this->load->view('show_admin',$data);
	}

	public function addAdmin(){
		$p=$this->input->post();
		$param=array(
			'nama'=>$p['nama'],
			'username'=>date('username'),
			'password'=>md5('password')
		);
		$res=$this->MAdmin->createAdmin($param);
		if($res){
			$this->session->set_flashdata('success','Berhasil menambah data admin');
		}else{
			$this->session->set_flashdata('failed','Gagal menambah dataadmin');
		}
		redirect('Admin');
	}
  
  public function editAdmin($id){ 
		$data['Admin']=$this->MAdmin->getAdmin($id);
    $this->load->view('edit_admin',$data);
  }
  
  public function prosesEditAdmin(){
    $p=$this->input->post();
		$param=array(
      'id_Admin'=>$p['id'],
			'nomor_Admin'=>$p['nomor_Admin'],
      'tanggal_pengajuan'=>$p['tanggal_pengajuan'],
			'tanggal_pembuatan'=>$p['tanggal_pembuatan'],
			'id_admin'=>$this->session->userdata('id_admin'),
			'status'=>$p['status']
		);
		$res=$this->MAdmin->editAdmin($param);
    // print_r($this->db->last_query()); die();
		if($res){
			$this->session->set_flashdata('success','Berhasil edit data');
		}else{
			$this->session->set_flashdata('failed','Gagal mengedit data');
		}
		redirect('Admin');
  }

  public function deleteAdmin($id){
    $this->MAdmin->deleteAdmin($id);
    redirect('Admin');
  }
  
	public function detailAdmin($id){
    $data['Admin']=$this->MAdmin->getAdmin($id);
		$data['data']=$this->MAdmin->getAllDetailAdmin($id);
		$this->load->view('detail_shop_drawing',$data); 
	}

	public function preview($id){
		$data['data']=$this->MAdmin->getAllDetailAdmin($id);
		$this->load->view('pdf_Admin',$data);
	}

	public function print_preview($id){
		// $this->load->view('pdf');
    
	    //Load the library
	    $this->load->library('html2pdf');
	    
	    //Set folder to save PDF to
	    $this->html2pdf->folder('./assets/pdfs/');
	    
	    //Set the filename to save/download as
	    $this->html2pdf->filename('test.pdf');
	    
	    //Set the paper defaults
	    $this->html2pdf->paper('a4', 'portrait');
	    
	    $data['data']=$this->MAdmin->getAllDetailAdmin($id);
	    
	    //Load html view
	    $this->html2pdf->html($this->load->view('pdf_Admin', $data, true));
	    
	    if($this->html2pdf->create('download')) {
	    	//PDF was successfully saved or downloaded
	    	echo 'PDF saved';
	    }
	}
}
