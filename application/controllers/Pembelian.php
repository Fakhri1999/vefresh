<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Pembelian extends CI_Controller
{
	public function __construct()
	{
		parent::__construct();
		$this->load->model('PembelianModel');

		if ($this->session->userdata('username') == null) {
			redirect('login');
		}
	}

	public function tambahKeranjang()
	{
		$id = $this->input->post('id');
		$result = $this->PembelianModel->AmbilSayurTerbaru($id);
		// print_r($result);
		// return;
		if ($this->session->userdata('keranjang') == null) {
			$arrKeranjangBaru = [
				[
					'id_stok' => $result['id'],
					'nama' => $result['nama'],
					'foto' => $result['foto'],
					'harga' => $result['harga'],
					'jumlah' => 1,
					'subtotal' => $result['harga']
				]
			];
			$this->session->set_userdata(['keranjang' => $arrKeranjangBaru]);
			echo "masuk";
		} else {
			echo "tidak";
		}
		redirect('cart');
	}

	public function keranjang()
	{
		$data['title'] = 'Cart';
		$data['keranjang'] = $this->session->userdata('keranjang');
		print_r($data['keranjang']);
		return;
		$this->load->view('template/header', $data);
		$this->load->view('pembelian/cart', $data);
		$this->load->view('template/footer');
	}
}
