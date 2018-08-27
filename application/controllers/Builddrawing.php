<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Builddrawing extends CI_Controller {

	public function __construct(){
		parent::__construct();
		$this->load->model('MBuilddrawing');
		if(empty($this->session->userdata('username')))redirect('Welcome');
	}

	public function index()
	{
		$data['data']=$this->MBuilddrawing->getAllDokumen();
		$this->load->view('show_as_build_drawing',$data);
	}

	public function addDokumen(){
		$p=$this->input->post();
		$param=array(
			'nomor_dokumen'=>$p['nomor_dokumen'],
			'tanggal_pembuatan'=>date('Y-m-d'),
			'id_admin'=>$this->session->userdata('id_admin'),
			'status'=>0
		);
		$res=$this->MBuilddrawing->createDokumen($param);
		if($res){
			$this->session->set_flashdata('success','Berhasil menambah data');
		}else{
			$this->session->set_flashdata('failed','Gagal menambah data');
		}
		redirect('Builddrawing');
	}
  
  public function editDokumen($id){ 
		$data['dokumen']=$this->MBuilddrawing->getBuilddrawing($id);
    $this->load->view('edit_as_build_drawing',$data);
  }
  
  public function prosesEditDokumen(){
    $p=$this->input->post();
		$param=array(
      'id_as_build_drawing'=>$p['id'],
			'nomor_dokumen'=>$p['nomor_dokumen'],
      'tanggal_pengajuan'=>$p['tanggal_pengajuan'],
			'tanggal_pembuatan'=>$p['tanggal_pembuatan'],
			'id_admin'=>$this->session->userdata('id_admin'),
			'status'=>$p['status']
		);
		$res=$this->MBuilddrawing->editDokumen($param);
    //print_r($this->db->last_query()); die();
		if($res){
			$this->session->set_flashdata('success','Berhasil edit data');
		}else{
			$this->session->set_flashdata('failed','Gagal mengedit data');
		}
		redirect('Builddrawing');
  }

  public function deleteDokumen($id){
    $this->MBuilddrawing->deleteDokumen($id);
    redirect('Builddrawing');
  }
  
	public function detailDokumen($id){
    $data['dokumen']=$this->MBuilddrawing->getDokumen($id);
		$data['data']=$this->MBuilddrawing->getAllDetailDokumen($id);
		$this->load->view('detail_as_build_drawing',$data);
	}

	public function tambahGambar($id){
		$data['id']=$id;
		$this->load->view('tambah_as_build_drawing',$data);
	}

	public function addGambar(){
		$p=$this->input->post();
		$param=array(
			'id_as_build_drawing'=>$p['id'],
			'judul_gambar'=>$p['judul_gambar'],
			'nomor_as_build_drawing'=>$p['nomor_as_build_drawing'],
			'tanggal'=>$p['tanggal'],
			'status_gambar'=>$p['status_gambar']
		);
		$res=$this->MBuilddrawing->createGambar($param);
		if($res){
			$this->session->set_flashdata('success','Berhasil menambah data');
		}else{
			$this->session->set_flashdata('failed','Gagal menambah data');
		}
		redirect('Builddrawing/detailDokumen/'.$p['id']);
	}

	public function preview($id){
		$data['data']=$this->MBuilddrawing->getAllDetailDokumen($id);
		$this->load->view('pdf_as_build_drawing',$data);
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
	    
	    $data['data']=$this->MBuilddrawing->getAllDetailDokumen($id);
	    
	    //Load html view
	    $this->html2pdf->html($this->load->view('pdf_Builddrawing', $data, true));
	    
	    if($this->html2pdf->create('download')) {
	    	//PDF was successfully saved or downloaded
	    	echo 'PDF saved';
	    }
	}
}
