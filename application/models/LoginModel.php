<?php
defined('BASEPATH') or exit('No direct script access allowed');

class LoginModel extends CI_Model
{
	public function daftar($insert){
		$this->db->insert('user', $insert);
	}

	public function masuk($where){
		return $this->db->get('user', $where)->row_array();
	}
}
