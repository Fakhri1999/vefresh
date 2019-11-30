<?php
defined('BASEPATH') or exit('No direct script access allowed');

class UserModel extends CI_Model
{
	public function ambilDataUser($where){
		return $this->db->get_where('user', $where)->row_array();
	}

	public function ambilDataKelurahan(){
		return $this->db->order_by('kelurahan asc')->get('ongkir')->result_array();
	}

	public function ambilDataKecamatan(){
		return $this->db->select('kecamatan')->group_by('kecamatan')->get('ongkir')->result_array();
	}

	public function editDataUser($id, $data){
		$this->db->where('id', $id)->update('user', $data);
	}
}
