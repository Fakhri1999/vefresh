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
    if($data['keranjang'] != null){
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
}
