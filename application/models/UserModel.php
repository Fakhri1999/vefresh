<?php
defined('BASEPATH') or exit('No direct script access allowed');

class UserModel extends CI_Model
{
	public function ambilDataUser($where){
		return $this->db->get('user', $where)->row_array();
	}
}
