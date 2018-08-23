<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Reqwork extends CI_Controller {

	public function __construct(){
		parent::__construct();
		$this->load->model('MReqwork');
		if(empty($this->session->userdata('username')))redirect('Welcome');
	}

	public function index(){
		$data['data']=$this->MReqwork->getAllReqwork();
		$this->load->view('show_request_of_work',$data);
	}

	public function tambahRow(){
		$this->load->view('tambah_row');
	}

	public function addWork(){
		$p=$this->input->post();
		$param=array(
			'no_request_of_work'=>$p['no_1'].'/bstr/seksi/'.$p['no_2'].'/'.$p['no_3'],
			'jenis_pekerjaan'=>$p['jenis_pekerjaan'],
			'uraian_pekerjaan'=>$p['uraian_pekerjaan'],
			'satuan_pekerjaan'=>$p['satuan_pekerjaan'],
			'kuantitas_pekerjaan'=>$p['kuantitas_pekerjaan'],
			'lokasi_pekerjaan'=>$p['lokasi_pekerjaan'],
			'no_item'=>$p['no_item']
		);
		$res=$this->MReqwork->createWork($param);
		if($res){
			$this->session->set_flashdata('success','Berhasil menambah data');
		}else{
			$this->session->set_flashdata('failed','Gagal menambah data');
		}
		redirect('Reqwork');
	}


	public function download($id){
		$res=$this->MReqwork->getReqwork($id);

		$jenis=$res['jenis_pekerjaan'];
		switch ($jenis) {
			case 'Pemasangan Bekisting':
			$file="Check List Bekisting.xlsx";
			break;
			case 'Pekerjaan Bore Pile':
			$file="Check List Bored Pile.xls";
			break;
			case 'Pekerjaan Chainlink Fence':
			$file="Check List Chainlink Fence.xlsx";
			break;
			case 'Pekerjaan Concrete (Pengecoran)':
			$file="Check List Concrete.xls";
			break;
			case 'Pekerjaan Girder':
			$file="Check List GIRDER.xls";
			break;
			case 'Pekerjaan Guardrail':
			$file="Check List Guardrail.xlsx";
			break;
			case 'Pekerjaan LC Rigid':
			$file="Check List LC RIGID.xls";
			break;
			case 'Pekerjaan Lapis Pondasi Atas':
			$file="Check List LPA.xls";
			break;
			case 'Pekerjaan Rigid Pavement':
			$file="Check List RIGID.xls";
			break;
			case 'Pekerjaan Timbunan':
			$file="Check List Timbunan.xls";
			break;
			case 'Pekerjaan Erection Fullslab':
			$file="Checklist Erection Fullslab.xlsx";
			break;
			
			default:
			$file="";
			break;
		}
		//Pembesian & Galian acan

		if($file!=""){
		$file_url = 'assets/xlsx/'.$file;
		header('Content-Type: application/octet-stream');
		header("Content-Transfer-Encoding: Binary"); 
		header("Content-disposition: attachment; filename=\"" . basename($file_url) . "\""); 
		readfile($file_url); 
	}else{
		$this->session->set_flashdata('failed','File tidak ditemukan');
		redirect('Reqwork');
	}


	}

}
