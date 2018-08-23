<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Shopdrawing extends CI_Controller {

	public function __construct(){
		parent::__construct();
		$this->load->model('MShopdrawing');
		if(empty($this->session->userdata('username')))redirect('Welcome');
	}

	public function index()
	{
		$data['data']=$this->MShopdrawing->getAllDokumen();
		$this->load->view('show_shopdrawing',$data);
	}

	public function addDokumen(){
		$p=$this->input->post();
		$param=array(
			'nomor_dokumen'=>$p['nomor_dokumen'],
			'tanggal_pembuatan'=>date('Y-m-d'),
			'id_admin'=>$this->session->userdata('id_admin'),
			'status'=>0
		);
		$res=$this->MShopdrawing->createDokumen($param);
		if($res){
			$this->session->set_flashdata('success','Berhasil menambah data');
		}else{
			$this->session->set_flashdata('failed','Gagal menambah data');
		}
		redirect('Shopdrawing');
	}

	public function detailDokumen($id){
		$data['dokumen']=$this->MShopdrawing->getDokumen($id);
		$data['data']=$this->MShopdrawing->getAllDetailDokumen($id);
		$this->load->view('detail_shop_drawing',$data);
	}

	public function tambahGambar($id){
		$data['id']=$id;
		$this->load->view('tambah_gambar',$data);
	}

	public function addGambar(){
		$p=$this->input->post();
		$param=array(
			'id_shopdrawing'=>$p['id'],
			'nama_shop_drawing'=>$p['judul_gambar'],
			'nomor_shop_drawing'=>$p['nomor_shop_drawing'],
			'tanggal'=>$p['tanggal'],
			'status_gambar'=>$p['status_gambar']
		);
		$res=$this->MShopdrawing->createGambar($param);
		if($res){
			$this->session->set_flashdata('success','Berhasil menambah data');
		}else{
			$this->session->set_flashdata('failed','Gagal menambah data');
		}
		redirect('Shopdrawing/detailDokumen/'.$p['id']);
	}

	public function preview($id){
		$data['data']=$this->MShopdrawing->getAllDetailDokumen($id);
		$this->load->view('pdf_shopdrawing',$data);
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
	    
	    $data['data']=$this->MShopdrawing->getAllDetailDokumen($id);
	    
	    //Load html view
	    $this->html2pdf->html($this->load->view('pdf_shopdrawing', $data, true));
	    
	    if($this->html2pdf->create('download')) {
	    	//PDF was successfully saved or downloaded
	    	echo 'PDF saved';
	    }
	}
}
