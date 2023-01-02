<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Menu_data extends CI_Model {
    
    function addmenu($data)
    { 
        $this->db->insert('menu', $data);
    }

    function show($limit, $start)
    {
        $this->db->select('menu.id, menu.nama, kategori.nama AS kategori , menu.harga, menu.status');
        $this->db->from('menu');
        $this->db->join('kategori', 'menu.kategori = kategori.id');
        $this->db->order_by('menu.id','DESC');
        return $this->db->get('',$limit, $start)->result_array();
    }

    function showK()
    {
        return $this->db->get('kategori')->result_array();
    }

    function countAllMenu(){
        return $this->db->get('menu')->num_rows();
    }

    function jumlahTotalMenu(){
        $query = $this->db->get('menu');
        if($query->num_rows()>0)
        {
          return $query->num_rows();
        }
        else
        {
          return 0;
        }

    }

    function update($data){
        $this->db->where('id', $this->input->post('id'));
        $this->db->update('menu', $data);
    }

    function deleteData($id){
        return $this->db->delete('menu', array('id' => $id));
    }
}