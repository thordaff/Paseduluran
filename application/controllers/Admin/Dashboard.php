<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Dashboard extends CI_Controller {

	function __construct()
	{
		parent::__construct();
		$this->load->model('menu_data');
		$this->load->model('event_data');
		$this->load->library('pagination');
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
		// Pagination
		$this->load->library('pagination');

		// Config
		$config['base_url'] = 'http://localhost:8080/Admin/Dashboard/menu';
		$config['total_rows'] = $this->menu_data->countAllMenu();
		$config['per_page'] = 5;

		// Initialize
		$this->pagination->initialize($config);

		$data['judul'] = 'Manage Menu - Panggon Paseduluran';
		$data['start'] = $this->uri->segment(4);
		$data['show'] = $this->menu_data->show($config['per_page'], $data['start']);
		$this->load->view('Admin/managemenu', $data);
		$this->load->view('template/footer-admin');
	}

	public function countAllMenu()
	{
		return $this->db->get('menu')->num_rows();
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
		// Pagination
		$this->load->library('pagination');

		// Config
		$config['base_url'] = 'http://localhost:8080/Admin/Dashboard/event';
		$config['total_rows'] = $this->event_data->countAllEvent();
		$config['per_page'] = 5;

		// Initialize
		$this->pagination->initialize($config);

		$data['judul'] = 'Manage event - Panggon Paseduluran';
		$data['start'] = $this->uri->segment(4);
		$data['show'] = $this->event_data->show($config['per_page'], $data['start']);
		$this->load->view('Admin/manageevent', $data);
		$this->load->view('template/footer-admin');
	}

	public function tambahevent()
	{
		$this->load->view('Admin/tambahevent');
	}

	public function addevent()
	{
		// Upload 
		$judul = $this->input->post('judul');
		$tanggal = $this->input->post('tanggal');
		$tag = $this->input->post('tag');
		$isi = $this->input->post('isi_event');
		if ($gambar=''){}else{
			$config['upload_path'] = './assets/img-event';
			$config['allowed_types'] = 'jpg|png';

			$this->load->library('upload',$config);
			if (!$this->upload->do_upload('gambar')){
				echo "Error uploading"; die();
			}else{
				$gambar=$this->upload->data('file_name');
			}
		}

		$ArrInsert = Array(
			'judul' => $judul,
			'gambar' => $gambar,
			'tanggal' => $tanggal,
			'tag' => $tag,
			'isi' => $isi,
		);
		$this->event_data->addEvent($ArrInsert);
		Redirect(Base_url('Admin/Dashboard/event'));
	}

	public function editevent()
	{
		$this->load->view('Admin/editevent');
	}

	// Bagan Controller Activity

	public function update($id){
		$data = [
            "harga" => $this->input->post('harga'),
            "status" => $this->input->post('status'),
        ];
		$this->menu_data->update($data, $id);
		redirect('Admin/Dashboard/menu');
	 }

	public function deleteMenu($id)
	{
		$this->menu_data->deleteData($id);
		redirect(base_url('Admin/Dashboard/menu'));
	}

	public function deleteEvent($id)
	{
		$this->event_data->deleteData($id);
		redirect(base_url('Admin/Dashboard/event'));
	}
}