<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Event extends CI_Controller {

	public function index()
	{
        $this->load->model('View');
        $data['show'] = $this->View->show();

		$this->load->view('event', $data);
		$this->load->view('template/footer');
	}
}
