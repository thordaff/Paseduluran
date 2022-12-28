<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class MenuFilter extends CI_Model {
    
    function coffee(){
        return $this->db->get_where('menu', ['kategori'=>'Coffee'])->result_array();
    }
}