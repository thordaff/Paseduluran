<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Dashboard extends CI_Controller {


	public function index()
	{
		$data['judul'] = 'Dashboard - Panggon Paseduluran';
		$this->load->view('Admin/dashboard', $data);
		$this->load->view('template/footer-admin');
	}

	public function menu()
	{
		$this->load->model('menu_data');
		$data['judul'] = 'Manage Menu - Panggon Paseduluran';
		$data['menu'] = $this->menu_data->show()->result();
		$data['menu_status'] = $this->menu_data->show()->result();
		$this->load->view('Admin/managemenu', $data);
		$this->load->view('template/footer-admin');
	}

	public function event()
	{
		$data['judul'] = 'Manage event - Panggon Paseduluran';
		$this->load->view('Admin/manageevent', $data);
		$this->load->view('template/footer-admin');
	}
}
