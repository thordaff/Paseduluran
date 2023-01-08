<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Profile_data extends CI_Model {

    function showProfile()
    {
        $id = $this->session->userdata('email');
        $this->db->where('email',$id);
        return $this->db->get('user')->row_array();
    }
    
    function editUsername()
    {
        $this->db->insert('menu.username');
    }
}