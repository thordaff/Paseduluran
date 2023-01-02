<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Dashboard extends CI_Controller {

	function __construct()
	{
		parent::__construct();
		$this->load->model('Menu_data');
		$this->load->model('Event_data');
		$this->load->model('MenuFilter');
		$this->load->model('Kat_data');
		$this->load->library('pagination');
		$this->load->helper(array('form', 'url'));
	}

	public function index()
	{
		// Dashbord Jumlah Menu
		$data['totalM'] = $this->Menu_data->jumlahTotalMenu();
		$data['totalE'] = $this->Event_data->jumlahTotalEvent();

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
		$config['total_rows'] = $this->Menu_data->countAllMenu();
		$config['per_page'] = 6;

		// Styling
		$config['full_tag_open'] = '<nav class="ms-auto" style="width:25%;"><ul class="pagination">';
		$config['full_tag_close'] = '</ul></nav>';
		
		$config['next_link'] = '&raquo';
		$config['next_tag_open'] = '<li class="page-item">';
		$config['next_tag_close'] = '</li>';
		
		$config['prev_link'] = '&laquo';
		$config['prev_tag_open'] = '<li class="page-item">';
		$config['prev_tag_close'] = '</li>';
		
		$config['cur_tag_open'] = '<li class="page-item active">';
		$config['cur_tag_close'] = '</li>';
		
		$config['num_tag_open'] = '<li class="page-item">';
		$config['num_tag_close'] = '</li>';

		$config['attributes'] = array('class' => 'page-link');


		// Initialize
		$this->pagination->initialize($config);

		$data['judul'] = 'Manage Menu - Panggon Paseduluran';
		$data['start'] = $this->uri->segment(4);
		$data['show'] = $this->Menu_data->show($config['per_page'], $data['start']);
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
		$this->Menu_data->addmenu($ArrInsert);
		Redirect(Base_url('Admin/Dashboard/menu'));
	}

	// Bagan Controller Event

	public function event()
	{
		// Pagination
		$this->load->library('pagination');

		// Config
		$config['base_url'] = 'http://localhost:8080/Admin/Dashboard/event';
		$config['total_rows'] = $this->Event_data->countAllEvent();
		$config['per_page'] = 5;

		// Styling
		$config['full_tag_open'] = '<nav class="ms-auto" style="width:25%;"><ul class="pagination">';
		$config['full_tag_close'] = '</ul></nav>';
		
		$config['next_link'] = '&raquo';
		$config['next_tag_open'] = '<li class="page-item">';
		$config['next_tag_close'] = '</li>';
		
		$config['prev_link'] = '&laquo';
		$config['prev_tag_open'] = '<li class="page-item">';
		$config['prev_tag_close'] = '</li>';
		
		$config['cur_tag_open'] = '<li class="page-item active">';
		$config['cur_tag_close'] = '</li>';
		
		$config['num_tag_open'] = '<li class="page-item">';
		$config['num_tag_close'] = '</li>';

		$config['attributes'] = array('class' => 'page-link');

		// Initialize
		$this->pagination->initialize($config);

		$data['judul'] = 'Manage event - Panggon Paseduluran';
		$data['start'] = $this->uri->segment(4);
		$data['show'] = $this->Event_data->show($config['per_page'], $data['start']);
		$this->load->view('Admin/manageevent', $data);
		$this->load->view('template/footer-admin');
	}

	public function addevent()
	{
		// Upload 
		if ($gambar=''){}else{
			$config['upload_path'] = './assets/img-event';
			$config['allowed_types'] = 'jpg|png';

			$this->load->library('upload',$config);
			if (!$this->upload->do_upload('gambar')){
				echo "Error uploading"; die();
			}else{
				$judul = $this->input->post('judul');
				$gambar=$this->upload->data('file_name');
				$tanggal = $this->input->post('tanggal');
				$isi = $this->input->post('isi');
			}
			$ArrInsert = Array(
				'judul' => $judul,
				'gambar' => $gambar,
				'tanggal' => $tanggal,
				'isi' => $isi,
			);
			$this->Event_data->addEvent($ArrInsert);
			Redirect(Base_url('Admin/Dashboard/event'));
		}
	}

	// Bagan Controller Kategori

	public function kategori(){
		$data['show'] = $this->Kat_data->show();
		$data['judul'] = 'Manage Kategori - Panggon Paseduluran';
		$this->load->view('Admin/managekategori', $data);
		$this->load->view('template/footer-admin');
	}

	public function addKat()
	{
		$nama = $this->input->post('nama');
		$ArrInsert = Array(
			'nama' => $nama,
		);
		$this->Kat_data->addKat($ArrInsert);
		Redirect(Base_url('Admin/Dashboard/kategori'));
	}

	public function updateKat($id){
		$data = [
            "nama" => $this->input->post('nama'),
        ];
		$this->Kat_data->update($data, $id);
		redirect('Admin/Dashboard/kategori');
	}

	public function deleteKat($id)
	{
		$this->Kat_data->deleteData($id);
		redirect(base_url('Admin/Dashboard/kategori'));
	}

	// Bagan Controller Activity Menu

	public function update($id){
		$data = [
            "nama" => $this->input->post('nama'),
            "pilihan" => $this->input->post('pilihan'),
            "kategori" => $this->input->post('kategori'),
            "harga" => $this->input->post('harga'),
            "status" => $this->input->post('status'),
        ];
		$this->Menu_data->update($data, $id);
		redirect('Admin/Dashboard/menu');
	 }

	public function deleteMenu($id)
	{
		$this->Menu_data->deleteData($id);
		redirect(base_url('Admin/Dashboard/menu'));
	}

	public function updateEvent($id){
		$id = $this->input->post('id');
			if ($gambar=''){}else{
			$config['upload_path'] = './assets/img-event';
			$config['allowed_types'] = 'jpg|png';

			$this->load->library('upload',$config);
			if (!$this->upload->do_upload('gambar')){
				$data = [
					"judul" => $this->input->post('judul'),
					"tanggal" => $this->input->post('tanggal'),
					"isi" => $this->input->post('isi'),
				];
			}else{
				$data = [
					"judul" => $this->input->post('judul'),
					"gambar" => $this->upload->data('file_name'),
					"tanggal" => $this->input->post('tanggal'),
					"isi" => $this->input->post('isi'),
				];
			}
		}
		$this->Event_data->updateEvent($data, $id);
		Redirect(Base_url('Admin/Dashboard/event'));
	}

	// Bagan Controller Activity Event

	public function editEvent()
	{
		$data['show'] = $this->Event_data->edit();
		$this->load->view('Admin/editevent', $data);
	}

	public function deleteEvent($id)
	{
		$this->Event_data->deleteData($id);
		redirect(base_url('Admin/Dashboard/event'));
	}

}