<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Menu extends CI_Controller {

	public function index()
	{
		$this->load->view('menu');
		$this->load->view('template/footer');
	}

	public function fullmenu()
	{
		$this->load->view('full-menu');
	}
}
