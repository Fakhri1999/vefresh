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

	public function ambilOngkirBerdasarkanKelurahan($kelurahan){
		return $this->db->get_where('ongkir', ['kelurahan' => $kelurahan])->row_array();
	}

	public function masukkanDataPembelian($pesan){
		$this->db->insert('pesan', $pesan);
		return $this->db->insert_id();
	}

	public function masukkanRincianDataPembelian($rincianPesan){
		$this->db->insert_batch('rincian_pesan', $rincianPesan);
		return $this->db->affected_rows() > 0 ? true : false;
	}

	public function cariPembelianBerdasarkanNomorOrder($nomorOrder, $id_user){
		return $this->db->where('nomor_order' , $nomorOrder)
		->where('id_user', $id_user)
		->get('pesan')->row_array();
	}

	public function uploadBuktiBayar($update, $nomorOrder){
		$this->db->where('nomor_order', $nomorOrder);
		$this->db->update('pesan', $update);
	}
}
