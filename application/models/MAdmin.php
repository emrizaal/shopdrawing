<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class MAdmin extends CI_Model {

	function cek_login($username,$password){
		$sql="SELECT * from admin where username = ? AND password = MD5(?)";
		$query=$this->db->query($sql,array($username,$password));
		return $query->row_array();
	}
}
