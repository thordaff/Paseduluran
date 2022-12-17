<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Menu_data extends CI_Model {
    
    function addmenu($data){ 
        $this->db->Insert('menu', $data);
    }

    function show($limit, $start){
        $query = $this->db->get('menu', $limit, $start);
        return $query;
    }

}