<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Profile extends CI_Controller {

    public function __construct()
    {
        parent::__construct();
        $this->load->model('Profile_data');
    }

	public function index()
	{
        $data['show'] = $this->Profile_data->showProfile();
        $data['judul'] = 'Edit Profile - Panggon Paseduluran';
		$this->load->view('Admin/editProfile', $data);
		$this->load->view('template/footer-admin');
	}

    public function editUsername()
    {
        $username = $this->input->post('username');
        $data = Array(
            'username' => $username
        );
        $this->Profile_data->editUsername($data);
    }
}
