<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Menu extends CI_Controller {

	function __construct()
	{
		parent::__construct();
		$this->load->model('MenuFilter');
	}

	public function index()
	{
		$this->load->view('menu');
		$this->load->view('template/footer');
	}

	public function fullmenu()
	{
		$data['showC'] = $this->MenuFilter->coffee();
		$data['showL'] = $this->MenuFilter->latte();
		$data['showM'] = $this->MenuFilter->manual();
		$data['showT'] = $this->MenuFilter->tea();
		$data['showTr'] = $this->MenuFilter->traditional();
		$data['showF'] = $this->MenuFilter->food();

		$this->load->view('full-menu',$data);
	}
}
