<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class MBuilddrawing extends CI_Model {

	function createDokumen($p){
		$this->db->insert('as_build_drawing',$p);
		return $this->db->affected_rows();
	}

	function getDokumen($id){
		$query=$this->db->query("SELECT * from as_build_drawing where id_as_build_drawing = ".$id);
		return $query->row_array();
	}

	function getAllDokumen(){
		$query=$this->db->query("SELECT * from as_build_drawing a,admin b where a.id_admin=b.id_admin");
		return $query->result_array();
	}

	function getAllDetailDokumen($id){
		$query=$this->db->query("SELECT * from detail_as_build_drawing where id_as_build_drawing = ".$id);
		return $query->result_array();
	}

	function getNameAdmin($idadmin){
		$query=$this->db->query("SELECT * from admin where id_admin = ".$idadmin);
		return $query->result_array();
	}

	function getBuilddrawing($id){
		$query=$this->db->query("SELECT * from as_build_drawing a, admin b where a.id_as_build_drawing ='$id' and a.id_admin=b.id_admin");
		return $query->row_array();
	}

	function editDokumen($param){
		$query=$this->db->query("UPDATE as_build_drawing SET nomor_dokumen='$param[nomor_dokumen]', tanggal_pengajuan='$param[tanggal_pengajuan]', tanggal_pembuatan='$param[tanggal_pembuatan]', id_admin='$param[id_admin]', status='$param[status]' WHERE id_as_build_drawing='$param[id_as_build_drawing]'");
		return $query;
	}

	function deleteDokumen($id){
		$query=$this->db->query("DELETE from as_build_drawing where id_as_build_drawing = ".$id);
	}

	function createGambar($p){
		$this->db->insert('detail_as_build_drawing',$p);
		return $this->db->affected_rows();
	}

	function updateGambar($p){
		$this->db->where('id_detail_as_build_drawing', $p['id_detail_as_build_drawing']);
		$query=$this->db->update('detail_as_build_drawing', $p); 
		return $this->db->affected_rows();
	}

	function deleteGambar($id){
		$query = $this->db->query("DELETE from detail_as_build_drawing WHERE id_detail_as_build_drawing= ".$id);
	}

	function getGambar($id){
		$query=$this->db->query("SELECT * from detail_as_build_drawing where id_detail_as_build_drawing=".$id);
		return $query->row_array();
	}
}
