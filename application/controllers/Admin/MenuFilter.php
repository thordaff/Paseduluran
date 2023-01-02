<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class MenuFilter extends CI_Controller {

    
	public function index()
	{
		$this->load->view('Admin/managemenu', $data);
		$this->load->view('template/footer-admin');
	}
}
