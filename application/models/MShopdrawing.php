<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class MShopdrawing extends CI_Model {

	function createDokumen($p){
		$this->db->insert('shopdrawing',$p);
		return $this->db->affected_rows();
	}

	function getDokumen($id){
		$query=$this->db->query("SELECT * from shopdrawing where id_shopdrawing = ".$id);
		return $query->row_array();
	}

	function getAllDokumen(){
		$query=$this->db->query("SELECT * from shopdrawing a,admin b where a.id_admin=b.id_admin");
		return $query->result_array();
	}

	function getAllDetailDokumen($id){
		$query=$this->db->query("SELECT * from detail_shop_drawing where id_shopdrawing = ".$id);
		return $query->result_array();
	}

	function getNameAdmin($idadmin){
		$query=$this->db->query("SELECT * from admin where id_admin = ".$idadmin);
		return $query->result_array();
	}

	function getShopdrawing($id){
		$query=$this->db->query("SELECT * from shopdrawing a, admin b where a.id_shopdrawing ='$id' and a.id_admin=b.id_admin");
		return $query->row_array();
	}

	function editDokumen($param){
		$query=$this->db->query("UPDATE shopdrawing SET nomor_dokumen='$param[nomor_dokumen]', tanggal_pengajuan='$param[tanggal_pengajuan]', tanggal_pembuatan='$param[tanggal_pembuatan]', id_admin='$param[id_admin]', status='$param[status]' WHERE id_shopdrawing='$param[id_shopdrawing]'");
		return $query;
	}

	function deleteDokumen($id){
		$query=$this->db->query("DELETE from shopdrawing WHEre id_shopdrawing = ".$id);
	}

	function createGambar($p){
		$this->db->insert('detail_shop_drawing',$p);
		return $this->db->affected_rows();
	}

	function updateGambar($p){
		$this->db->where('id_detail_shop_drawing', $p['id_detail_shop_drawing']);
		$query=$this->db->update('detail_shop_drawing', $p); 
		return $this->db->affected_rows();
	}

	function deleteGambar($id){
		$query = $this->db->query("DELETE from detail_shop_drawing WHERE id_detail_shop_drawing= ".$id);
		return $this->db->affected_rows();
	}

	function getGambar($id){
		$query=$this->db->query("SELECT * from detail_shop_drawing where id_detail_shop_drawing=".$id);
		return $query->row_array();
	}
}
