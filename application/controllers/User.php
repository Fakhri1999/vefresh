<?php
defined('BASEPATH') or exit('No direct script access allowed');

class User extends CI_Controller
{
  public function __construct()
  {
    parent::__construct();
    // $this->load->model('LoginModel');
    $this->load->model('PembelianModel');
    $this->load->model('UserModel');

    if ($this->session->userdata('username') == null) {
      redirect('login');
    }
  }

  public function keluar()
  {
    $this->session->sess_destroy();
    redirect('login');
  }

  public function profile()
  {
    $data['title'] = 'Profile';

    $this->load->view('template/header', $data);
    $this->load->view('user/profile');
    $this->load->view('template/footer');
  }

  public function editProfile()
  {
    $this->form_validation->set_rules('username', 'Username', 'required');
    $this->form_validation->set_rules('nama', 'Nama', 'required');
    $this->form_validation->set_rules('email', 'Email', 'required|valid_email');
    $this->form_validation->set_rules('alamat', 'Alamat', 'required');
    $this->form_validation->set_rules('kecamatan', 'Kecamatan', 'required');
    $this->form_validation->set_rules('kelurahan', 'Kelurahan', 'required');
    if ($this->form_validation->run() == false) {
      $data['title'] = 'Edit Profile';
			$data['user'] = $this->UserModel->ambilDataUser(['id' => $this->session->userdata('id')]);
			$data['kelurahan'] = $this->UserModel->ambilDataKelurahan();
			$data['kelurahanJson'] = json_encode($this->UserModel->ambilDataKelurahan());
			$data['kecamatan'] = $this->UserModel->ambilDataKecamatan();
			// print_r($data['kelurahan']);
			// return;
      $this->load->view('template/header', $data);
      $this->load->view('user/editProfile');
      $this->load->view('template/footer');
    } else {
			// print_r();
			$dataUpdate = [
				'username' => $this->input->post('username'),
				'nama' => $this->input->post('nama'),
				'email' => $this->input->post('email'),
				'alamat' => $this->input->post('alamat'),
				'kecamatan' => $this->input->post('kecamatan'),
				'kelurahan' => $this->input->post('kelurahan')
			];
			// print_r($where);
			$this->UserModel->editDataUser($this->session->userdata('id'), $dataUpdate);
			$this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">
			Profile updated
			</div>');
			redirect('profile');

		}
  }
}
