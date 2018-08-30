<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class MAdmin extends CI_Model {

	function cek_login($username,$password){
		$sql="SELECT * from admin where username = ? AND password = MD5(?)";
		$query=$this->db->query($sql,array($username,$password));
		return $query->row_array();
	}

	function createAdmin($p){
		$this->db->insert('admin',$p);
		return $this->db->affected_rows();
	}

	function getAdmin($id){
		$query=$this->db->query("SELECT * from admin where id_admin = ".$id);
		return $query->row_array();
	}

	function getAllAdmin(){
		$query=$this->db->query("SELECT * from admin");
		return $query->result_array();
	}

	function updateAdmin($p){
		$this->db->where('id_admin', $p['id_admin']);
		$query=$this->db->update('admin', $p); 
		return $query;
	}

	function deleteAdmin($id){
		$query=$this->db->query("DELETE from admin WHERE id_admin = ".$id);
	}

	function getSuperAdmin($username,$password){
		$sql="SELECT * from superadmin where username = ? AND password = MD5(?)";
		$query=$this->db->query($sql,array($username,$password));
		return $query->row_array();
	}

}
