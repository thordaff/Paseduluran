<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Dashboard extends CI_Controller {

	public function index()
	{
		$data['judul'] = 'Dashboard - Panggon Paseduluran';
		$this->load->view('Admin/dashboard', $data);
	}
}
