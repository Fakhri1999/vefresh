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
    // $this->form_validation->set_rules
    if ($this->form_validation->run() == false) {
      $data['title'] = 'Edit Profile';
      $data['user'] = $this->UserModel->ambilDataUser(['id' => $this->session->userdata('id')]);

      $this->load->view('template/header', $data);
      $this->load->view('user/editProfile');
      $this->load->view('template/footer');
    }
  }
}
