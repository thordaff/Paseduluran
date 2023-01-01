<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Event extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		$this->load->model('Event_data');
	}

	public function index()
	{
        $data['show'] = $this->Event_data->showUser();

		$this->load->view('event', $data);
		$this->load->view('template/footer');
	}
}
