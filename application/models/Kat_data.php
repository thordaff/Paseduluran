<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Kat_data extends CI_Model {
    
    function addKat($data)
    { 
        $this->db->insert('kategori', $data);
    }

    function show()
    {
        return $this->db->get('kategori')->result_array();
    }

    function update($data){
        $this->db->where('id', $this->input->post('id'));
        $this->db->update('kategori', $data);
    }

    function deleteData($id){
        return $this->db->delete('kategori', array('id' => $id));
    }
}