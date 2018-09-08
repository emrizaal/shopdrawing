<?php
defined('BASEPATH') OR exit('No direct script access allowed');

use PhpOffice\PhpSpreadsheet\Spreadsheet;
use PhpOffice\PhpSpreadsheet\Writer\Xlsx;

class Builddrawing extends CI_Controller {

	public function __construct(){
		parent::__construct();
		$this->load->model('MBuilddrawing');
		if(empty($this->session->userdata('username')))redirect('Welcome');
	}

	public function index()
	{
		$data['data']=$this->MBuilddrawing->getAllDokumen();
    //print_r($data['data']);
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
    // print_r($this->db->last_query()); die();
		if($res){
			$this->session->set_flashdata('success','Berhasil mengedit data');
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
			'nama_as_build_drawing'=>$p['judul_gambar'],
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

	public function editGambar($id){
		$data['id']=$id;
		$data['data']=$this->MBuilddrawing->getGambar($id);
		$this->load->view('edit_gambar_build_drawing',$data);
	}

	public function updateGambar(){
		$p=$this->input->post();
		$param=array(
			'id_detail_as_build_drawing'=>$p['id_detail_as_build_drawing'],
			'nama_as_build_drawing'=>$p['nama_as_build_drawing'],
			'nomor_as_build_drawing'=>$p['nomor_shop_drawing'],
			'tanggal'=>$p['tanggal'],
			'status_gambar'=>$p['status_gambar'],
			'is_kembali'=>$p['is_kembali']
		);
		if($p['is_kembali']==1){
			$param['tanggal_kembali']=$p['tanggal_kembali'];
		}
		$res=$this->MBuilddrawing->updateGambar($param);
		if($res){
			$this->session->set_flashdata('success','Berhasil mengedit data');
		}else{
			$this->session->set_flashdata('failed','Gagal mengedit data');
		}
		redirect('Builddrawing/detailDokumen/'.$p['id']);
	}

	public function deleteGambar($id, $idbuilddrawing){
		$this->MBuilddrawing->deleteGambar($id);
		redirect('Builddrawing/detailDokumen/'.$idbuilddrawing);
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


	public function downloadFormRegistrasi($id){
		$data=$this->MBuilddrawing->getAllDetailDokumen($id);
		
		//download file pertama
		$name="Form PW-K3LMP-03-08 Registrasi Gambar Terkendali.xls";
		$col=1;
		$row=15;
		$no=1;

		$spreadsheet = \PhpOffice\PhpSpreadsheet\IOFactory::load("assets/template/".$name);

		$sheet = $spreadsheet->getActiveSheet();
		foreach($data as $d){
			$sheet->setCellValueByColumnAndRow($col,$row, $no);
			$sheet->setCellValueByColumnAndRow($col+2,$row, $d['nama_as_build_drawing']);
			$sheet->setCellValueByColumnAndRow($col+7,$row, $d['tanggal']);
			$sheet->setCellValueByColumnAndRow($col+11,$row, $d['nomor_as_build_drawing']);
			$sheet->setCellValueByColumnAndRow($col+18,$row, $d['status_gambar']);
			$row++;
			$no++;
		}

		$writer = \PhpOffice\PhpSpreadsheet\IOFactory::createWriter($spreadsheet, "Xlsx");
		header('Content-Type: application/vnd.openxmlformats-officedocument.spreadsheetml.sheet');
		header('Content-Disposition: attachment; filename="'.$name.'"');
		$writer->save("php://output");

	}

	public function downloadTandaTerima($id){
		$dokumen=$this->MBuilddrawing->getAllDetailDokumen($id);
		//download file kedua
		$namekedua="Tanda-Terima-Dokumen.xlsx";
		$file2col=2;
		$file2row=22;
		$nokedua=1;

		$spreadsheet = \PhpOffice\PhpSpreadsheet\IOFactory::load("assets/template/".$namekedua);

		$sheet = $spreadsheet->getActiveSheet();
		foreach ($dokumen as $doc) {
			$sheet->setCellValueByColumnAndRow($file2col,$file2row, $nokedua);
			$sheet->setCellValueByColumnAndRow($file2col+2,$file2row, $doc['nama_shop_drawing']);
			$sheet->setCellValueByColumnAndRow($file2col+7,$file2row, '1');
			$sheet->setCellValueByColumnAndRow($file2col+8,$file2row, 'Bundel');
			$file2row++;
			$nokedua++;
		}

		$writer = \PhpOffice\PhpSpreadsheet\IOFactory::createWriter($spreadsheet, "Xlsx");
		header('Content-Type: application/vnd.openxmlformats-officedocument.spreadsheetml.sheet');
		header('Content-Disposition: attachment; filename="'.$namekedua.'"');
		$writer->save("php://output");
	}

	public function downloadTransmital($id){
		$data=$this->MBuilddrawing->getAllDetailDokumen($id);

		//download file ketiga
		$nameketiga="Transmital.xlsx";
		$file3col=2;
		$file3row=14;
		$noketiga=1;

		$spreadsheet = \PhpOffice\PhpSpreadsheet\IOFactory::load("assets/template/".$nameketiga);

		$sheet = $spreadsheet->getActiveSheet();
		foreach($data as $d){
			$sheet->setCellValueByColumnAndRow($file3col,$file3row, $noketiga);
			$sheet->setCellValueByColumnAndRow($file3col+1,$file3row, $d['nomor_as_build_drawing']);
			$sheet->setCellValueByColumnAndRow($file3col+6,$file3row, $d['nama_as_build_drawing']);
			$file3row++;
			$noketiga++;
		}

		$writer = \PhpOffice\PhpSpreadsheet\IOFactory::createWriter($spreadsheet, "Xlsx");
		header('Content-Type: application/vnd.openxmlformats-officedocument.spreadsheetml.sheet');
		header('Content-Disposition: attachment; filename="'.$nameketiga.'"');
		$writer->save("php://output");
	}

}
