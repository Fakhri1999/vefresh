<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Login extends CI_Controller
{
	public function __construct()
	{
		parent::__construct();
		$this->load->model('LoginModel');

		if($this->session->userdata('username') != null){
			redirect('');
		}
	}

	public function daftar()
	{
		$this->form_validation->set_rules('name', 'Name', 'required');
		$this->form_validation->set_rules('username', 'Username', 'required|is_unique[user.username]');
		$this->form_validation->set_rules('email', 'Email', 'required|valid_email');
		$this->form_validation->set_rules('password', 'Password', 'required|min_length[5]');
		$this->form_validation->set_rules('passwordConf', 'Password Confirmation', 'required|min_length[5]|matches[password]');
		if ($this->form_validation->run() == false) {
			$data['title'] = 'Register';
			$this->load->view('template/header', $data);
			$this->load->view('login/register');
			$this->load->view('template/footer');
		} else {
			$insert = [
				'nama' => $this->input->post('name'),
				'username' => strtolower($this->input->post('username')),
				'email' => $this->input->post('email'),
				'password' => sha1($this->input->post('password'))
			];
			$this->LoginModel->daftar($insert);
			$this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">
				Account successfully created. You can now login
				</div>');
			redirect('login');
		}
	}

	public function masuk()
	{
		$this->form_validation->set_rules('username', 'Username', 'required');
		$this->form_validation->set_rules('password', 'Password', 'required');
		if ($this->form_validation->run() == false) {
			$data['title'] = 'Login';
			$this->load->view('template/header', $data);
			$this->load->view('login/login');
			$this->load->view('template/footer');
		} else {
			$where = [
				'username' => strtolower($this->input->post('username')),
				'password' => sha1($this->input->post('password'))
			];
			$result = $this->LoginModel->masuk($where);
			// print_r($result);
			// return;
			if($result){
				$arrSession = [
					'id' => $result['id'],
					'username' => $result['username'],
					'email' => $result['email']
				];
				$this->session->set_userdata($arrSession);
				redirect('');
			} else {
				$this->session->set_flashdata('message', '<div class="alert alert-danger" role="alert">
				Invalid username / password
				</div>');
				redirect('login');
			}
		}
	}
}
