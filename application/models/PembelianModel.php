<?php
defined('BASEPATH') or exit('No direct script access allowed');

class PembelianModel extends CI_Model
{
	public function AmbilSayurTerbaru($id){
		return $this->db->select('st.id, s.nama, s.foto, s.harga, st.stok')
		->order_by('st.waktu_datang', 'desc')
		->join('sayur s', 's.id = st.id_sayur')
		->where('st.id_sayur', $id)
		->limit(1)
		->get('stok_sayur st')->row_array();
	}
}