<?php
defined('BASEPATH') or exit('No direct script access allowed');

class HomeModel extends CI_Model
{
	public function __construct()
	{
		parent::__construct();
	}

  public function index(){
    return $this->db->get('sayur')->result_array();
  }
}
