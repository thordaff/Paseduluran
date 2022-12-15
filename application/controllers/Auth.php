<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Auth extends CI_Controller {

    public function __construct()
    {
        parent::__construct();
        $this->load->library('form_validation');
    }

	public function Login()
	{

        $this->form_validation->set_rules('email', 'Email', 'trim|required|valid_email');
        $this->form_validation->set_rules('password', 'Password', 'trim|required');

        if($this->form_validation->run() == FALSE)
        {
            $data['judul'] = 'Paseduluran - Login';
            $this->load->view('Auth/login', $data);

        }
        else
        {
            $this->_login();
        }
	}


    private function _login()
    {
        $email = $this->input->post('email');
        $password = $this->input->post('password');

        $user = $this->db->get_where('user', ['email' => $email])->row_array();

        if($user)
        {       
            if($user['is_active'] == 1) 
            {
                if(password_verify($password, $user['password']))
                {
                    $data = array(
                        'email' => $user['email'],
                        'role_id' => $user['role_id'],
                        'status' => 'active'
                    );
                    $this->session->set_userdata($data);
                    if($user['role_id'] == 1)
                    {
                        redirect('Admin/Dashboard');
                    }
                    else
                    {
                        $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">
                        Sukses Masuk Kedalam Akun</div>');
                        redirect('Beranda');
                    }
                }
                else
                {                    $this->session->set_flashdata('message', '<div class="alert alert-danger" role="alert">
                    Password Salah </div>');
                    redirect('Auth/Login');
                }
            }
            else
            {
                $this->session->set_flashdata('message', '<div class="alert alert-danger" role="alert">
                Email belum teraktivasi </div>');
                redirect('Auth/Login');
            }
        }
        else
        {
            $this->session->set_flashdata('message', '<div class="alert alert-danger" role="alert"><p>Email belum terdaftar</p></div>');
            redirect('Auth/Login');
        }
    }


    public function Logout()
    {
        $this->session->sess_destroy();
        redirect(base_url('Beranda'));
    }
}


