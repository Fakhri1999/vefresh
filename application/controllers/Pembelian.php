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

	public function keranjang()
	{
		$data['title'] = 'Cart';
		$data['keranjang'] = $this->session->userdata('keranjang');
		$total = 0;
		if ($data['keranjang'] != null) {
			for ($i = 0; $i < sizeof($data['keranjang']); $i++) {
				$total += $data['keranjang'][$i]['subtotal'];
			}
			$data['total'] = $total;
			$this->session->set_userdata(['totalHarga' => $total]);
		}

		$this->load->view('template/header', $data);
		$this->load->view('pembelian/cart', $data);
		$this->load->view('template/footer');
	}

	public function tambahKeranjangSatu()
	{
		$id = $this->input->post('id');
		$result = $this->PembelianModel->AmbilSayurTerbaru($id);

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
		} else {
			$arrKeranjangLama = $this->session->userdata('keranjang');
			for ($i = 0; $i < sizeof($arrKeranjangLama); $i++) {
				if ($arrKeranjangLama[$i]['nama'] == $result['nama']) {
					$arrKeranjangLama[$i]['jumlah']++;
					$arrKeranjangLama[$i]['subtotal'] += $result['harga'];
					$this->session->set_userdata(['keranjang' => $arrKeranjangLama]);
					redirect('cart');
				}
			}
			$arrKeranjangBaru = [
				'id_stok' => $result['id'],
				'nama' => $result['nama'],
				'foto' => $result['foto'],
				'harga' => $result['harga'],
				'jumlah' => 1,
				'subtotal' => $result['harga']
			];

			array_push($arrKeranjangLama, $arrKeranjangBaru);
			$this->session->set_userdata(['keranjang' => $arrKeranjangLama]);
		}
		redirect('cart');
	}

	public function ubahKeranjang()
	{
		$arrKeranjang = [];
		for ($i = 0; $i < sizeof($this->input->post('id_stok')); $i++) {
			$arr = [
				'id_stok' => $this->input->post('id_stok')[$i],
				'nama' => $this->input->post('nama')[$i],
				'foto' => $this->input->post('foto')[$i],
				'harga' => $this->input->post('harga')[$i],
				'jumlah' => $this->input->post('jumlah')[$i],
				'subtotal' => $this->input->post('harga')[$i] * $this->input->post('jumlah')[$i]
			];
			array_push($arrKeranjang, $arr);
		}
		$this->session->set_userdata(['keranjang' => $arrKeranjang]);
		redirect('cart');
	}

	public function hapusKeranjang()
	{
		$id_stok = $this->input->post('id_stok');
		$arrKeranjangLama = $this->session->userdata('keranjang');
		$count = 0;
		for ($i = 0; $i < sizeof($arrKeranjangLama); $i++) {
			if ($arrKeranjangLama[$i]['id_stok'] == $id_stok) {
				continue;
			}
			$arrKeranjangBaru[$count++] = [
				'id_stok' => $arrKeranjangLama[$i]['id_stok'],
				'nama' => $arrKeranjangLama[$i]['nama'],
				'foto' => $arrKeranjangLama[$i]['foto'],
				'harga' => $arrKeranjangLama[$i]['harga'],
				'jumlah' => $arrKeranjangLama[$i]['jumlah'],
				'subtotal' => $arrKeranjangLama[$i]['subtotal']
			];
		}
		$this->session->set_userdata(['keranjang' => $arrKeranjangBaru]);
		redirect('cart');
	}

	public function checkout()
	{
		$this->load->model('UserModel');
		$this->form_validation->set_rules('nama', 'Nama', 'required');
		$this->form_validation->set_rules('email', 'Email', 'required|valid_email');
		$this->form_validation->set_rules('alamat', 'Alamat', 'required');
		$this->form_validation->set_rules('no_hp', 'No HP', 'required');
		$this->form_validation->set_rules('kelurahan', 'Kelurahan', 'required');
		if ($this->form_validation->run() == false) {
			$data['title'] = 'Checkout';
			$data['kelurahan'] = $this->UserModel->ambilDataKelurahan();
			$data['user'] = $this->UserModel->ambilDataUser(['id' => $this->session->userdata('id')]);
			$data['kelurahanJson'] = json_encode($this->UserModel->ambilDataKelurahan());
			$data['keranjang'] = $this->session->userdata('keranjang');
			$data['ongkir'] = $this->PembelianModel->ambilOngkirBerdasarkanKelurahan($data['user']['kelurahan']);
			// print_r($data['ongkir']);
			// return;

			$this->load->view('template/header', $data);
			$this->load->view('pembelian/checkout', $data);
			$this->load->view('template/footer');
		} else {
			$dataUpdate = [
				'nama' => $this->input->post('nama'),
				'no_hp' => $this->input->post('no_hp'),
				'email' => $this->input->post('email'),
				'alamat' => $this->input->post('alamat'),
				'kelurahan' => $this->input->post('kelurahan')
			];

			$arrSession = [
				'id' => $this->session->userdata('id'),
				'nama' => $this->input->post('nama'),
				'no_hp' => $this->input->post('no_hp'),
				'email' => $this->input->post('email')
			];
			$this->session->set_userdata($arrSession);
			$this->UserModel->editDataUser($this->session->userdata('id'), $dataUpdate);

			$angkaAcak = rand(1, 999);
			$arrPesan = [
				'id_user' => $this->session->userdata('id'),
				'total' => $this->session->userdata('totalHarga') + $angkaAcak,
				'nomor_order' => 'VEFRESH-' . date('mdhis') . '-' . $angkaAcak
			];

			$id_pesan = $this->PembelianModel->masukkanDataPembelian($arrPesan);

			$keranjang = $this->session->userdata('keranjang');
			$arrRincianPesan = [];
			for ($i = 0; $i < sizeof($keranjang); $i++) {
				$arrTemp = [
					'id_pesan' => $id_pesan,
					'id_stok_sayur' => $keranjang[$i]['id_stok'],
					'jumlah' => $keranjang[$i]['jumlah'],
					'harga' => $keranjang[$i]['subtotal']
				];
				array_push($arrRincianPesan, $arrTemp);
			}
			$result = $this->PembelianModel->masukkanRincianDataPembelian($arrRincianPesan);
			if ($result) {
				$this->session->set_flashdata('message-flash', "<script>Swal.fire({
					icon: 'success',
					title: 'Berhasil',
					html: 'Pemesanan berhasil disimpan!<br>Nomor Order Anda adalah <br><b>" . $arrPesan['nomor_order'] . "</b>'
				})</script>");
				$this->session->unset_userdata(['keranjang', 'totalHarga']);
				redirect('');
			} else {
				$this->session->set_flashdata('message-flash', "<script>Swal.fire({
					icon: 'error',
					title: 'Gagal',
					text: 'Pemesanan gagal disimpan. Silahkan coba lagi'
				})</script>");
				redirect('checkout');
			}
		}
	}

	public function pembayaranAwal()
	{
		$this->form_validation->set_rules('nomor', 'Order number', 'trim|required');
		if ($this->form_validation->run() == false) {
			$data['title'] = 'Pembayaran';
			$this->load->view('template/header', $data);
			$this->load->view('pembelian/pembayaranAwal');
			$this->load->view('template/footer');
		} else {
			$nomorOrder = $this->input->post('nomor');
			$result = $this->PembelianModel->cariPembelianBerdasarkanNomorOrder($nomorOrder, $this->session->userdata('id'));
			if ($result) {
				switch ($result['status_bayar']) {
					case '1':
						$this->session->set_flashdata('message', '<div class="alert alert-danger" role="alert">
						Your payment is still in the queue for us to check.
						</div>');
						break;
					case '2':
						$this->session->set_flashdata('message', '<div class="alert alert-danger" role="alert">
						This order number has succesfully finished
						</div>');
						break;
					default:
						redirect("payment/$nomorOrder");
						break;
				}
				redirect('payment');
			} else {
				$this->session->set_flashdata('message', '<div class="alert alert-danger" role="alert">
				Invalid order number
				</div>');
				redirect('payment');
			}
		}
	}

	public function pembayaran($nomorOrder)
	{
		if (empty($_FILES['buktiBayar']['name'])) {
			$this->form_validation->set_message('required', 'Kolom {field} tidak boleh kosong.');
			$this->form_validation->set_rules('buktiBayar', 'Bukti bayar', 'required');
		} else {
			$this->form_validation->set_rules('buktiBayar', 'Bukti bayar', 'trim|xss_clean');
		}
		if ($this->form_validation->run() == false) {
			$data['title'] = 'Pembayaran';
			$data['result'] = $this->PembelianModel->cariPembelianBerdasarkanNomorOrder($nomorOrder, $this->session->userdata('id'));
			if ($data['result']) {

				if ($data['result']['status_bayar'] == '1') {
					$this->session->set_flashdata('message', '<div class="alert alert-danger" role="alert">
					Your payment is still in the queue for us to check.
					</div>');
					redirect('payment');
				} else if ($data['result']['status_bayar'] == '2') {
					$this->session->set_flashdata('message', '<div class="alert alert-danger" role="alert">
				This order number has succesfully finished the payment
				</div>');
					redirect('payment');
				}
			} else {
				$this->session->set_flashdata('message', '<div class="alert alert-danger" role="alert">
				Invalid order number
				</div>');
				redirect('payment');
			}
			$this->load->view('template/header', $data);
			$this->load->view('pembelian/pembayaran');
			$this->load->view('template/footer');
		} else {
			$config['upload_path']		= './uploads/bukti-bayar/';
			$config['file_name']			= $nomorOrder;
			$config['allowed_types']	= 'jpg|png|jpeg';
			$config['max_size']				= 2000;

			$this->load->library('upload', $config);

			if (!$this->upload->do_upload('buktiBayar')) {
				$this->session->set_flashdata('message', '<div class="alert alert-danger" role="alert">
				' . $this->upload->display_errors() . '
				</div>');
				redirect("payment/$nomorOrder");
			} else {
				$arr = [
					'bukti_bayar' => $nomorOrder,
					'status_bayar' => 1
				];
				$this->PembelianModel->uploadBuktiBayar($arr, $nomorOrder);
				$this->session->set_flashdata('sukses', 'sukses');
				redirect('payment-success');
			}
		}
	}

	public function pembayaranSukses()
	{
		$data['title'] = 'Pembayaran';

		$this->load->view('template/header', $data);
		$this->load->view('pembelian/pembayaranSukses');
		$this->load->view('template/footer');
	}

	public function tes()
	{
		echo rand(1, 999);
	}
}
