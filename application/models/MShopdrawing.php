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

	function createGambar($p){
		$this->db->insert('detail_shop_drawing',$p);
		return $this->db->affected_rows();
	}
}
