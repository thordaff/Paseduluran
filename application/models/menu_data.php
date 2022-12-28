<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Menu_data extends CI_Model {
    
    function addmenu($data)
    { 
        $this->db->insert('menu', $data);
    }

    function show($limit, $start)
    {
        return $this->db->get('menu', $limit, $start)->result_array();
    }

    function countAllMenu(){
        return $this->db->get('menu')->num_rows();
    }

    function update($data){
        $this->db->where('id', $this->input->post('id'));
        $this->db->update('menu', $data);
      }

    function deleteData($id){
        return $this->db->delete('menu', array('id' => $id));
    }
}