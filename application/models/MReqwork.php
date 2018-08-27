<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class MReqwork extends CI_Model {

	function getAllReqwork(){
		$query=$this->db->query("SELECT * from request_of_work");
		return $query->result_array();
	}

	function createWork($p){
		$this->db->insert('request_of_work',$p);
		return $this->db->affected_rows();
	}

	function getReqwork($id){
		$query=$this->db->query("SELECT * from request_of_work where id_request_of_work = ".$id);
		return $query->row_array();
	}

	function updateWork($p){
		$this->db->where('id_request_of_work', $p['id_request_of_work']);
		$query=$this->db->update('request_of_work', $p); 
		return $query;
	}

	function deleteRow($id){
		$this->db->query("DELETE from request_of_work where id_request_of_work = ".$id);
		return $this->db->affected_rows();
	}
	
}
