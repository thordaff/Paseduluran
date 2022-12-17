<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Dashboard extends CI_Controller {

	function __construct()
	{
		parent::__construct();
		$this->load->model('menu_data');
		$this->load->helper(array('form', 'url'));
	}

	public function index()
	{
		$data['judul'] = 'Dashboard - Panggon Paseduluran';
		$this->load->view('Admin/dashboard', $data);
		$this->load->view('template/footer-admin');
	}

	// Bagan Controller Menu

	public function menu()
	{
		$config['base_url'] = site_url('admin/dashboard/menu');
		$config['total_rows'] = $this->db->count_all('menu');
		$config['per_page'] = 2;
		$config['uri_segment'] = 3;
		$choice = $config['total_rows'] / $config['per_page'];
		$config['num_links'] = floor($choice);

		$this->pagination->initialize($config);
		$data['page']	=	($this->uri->segment(3)) ? $this->uri->segment(3) : 0;


		$data['judul'] = 'Manage Menu - Panggon Paseduluran';
		$data['show'] = $this->menu_data->show($config["per_page"], $data['page'])->result();
		$data['pagination'] = $this->pagination->create_links(); 
		$this->load->view('Admin/managemenu', $data);
		$this->load->view('template/footer-admin');
	}

	public function addmenu()
	{
		$nama = $this->input->post('nama');
		$kategori = $this->input->post('kategori');
		$harga = $this->input->post('harga');
		$status = $this->input->post('status');
		$ArrInsert = Array(
			'nama' => $nama,
			'kategori' => $kategori,
			'harga' => $harga,
			'status' => $status,
		);
		$this->menu_data->addmenu($ArrInsert);
		Redirect(Base_url('Admin/Dashboard/menu'));
	}

	// Bagan Controller Event

	public function event()
	{
		$data['judul'] = 'Manage event - Panggon Paseduluran';
		$this->load->view('Admin/manageevent', $data);
		$this->load->view('template/footer-admin');
	}
}
