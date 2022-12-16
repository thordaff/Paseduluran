<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Menu_data extends CI_Model {
    
    function show(){
        return $this->db->get('menu');
    }
}