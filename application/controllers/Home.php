<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Home extends CI_Controller
{
  public function __construct()
  {
    parent::__construct();
    $this->load->model('HomeModel');
  }

  public function index()
  {
    $data['title'] = 'Home';
    $data['sayur'] = $this->HomeModel->index();
    $data['keranjang'] = $this->session->userdata('keranjang');
    
    $this->load->view('template/header', $data);
    $this->load->view('index', $data);
    $this->load->view('template/footer');
  }
}
