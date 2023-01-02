<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class MenuFilter extends CI_Model {
    
    function coffee(){
        $this->db->select('menu.id, menu.nama, menu.pilihan , kategori.nama AS kategori , menu.harga, menu.status');
        $this->db->from('menu');
        $this->db->join('kategori', 'menu.kategori = kategori.id');
        $this->db->where('kategori.id = 1');
        $this->db->order_by('menu.harga', 'ASC');
        return $this->db->get()->result_array();
    }

    function latte(){
        $this->db->select('menu.id, menu.nama, menu.pilihan , kategori.nama AS kategori , menu.harga, menu.status');
        $this->db->from('menu');
        $this->db->join('kategori', 'menu.kategori = kategori.id');
        $this->db->where('kategori.id = 5');
        $this->db->order_by('menu.harga', 'ASC');
        return $this->db->get()->result_array();
    }

    function manual(){
        $this->db->select('menu.id, menu.nama, menu.pilihan , kategori.nama AS kategori , menu.harga, menu.status');
        $this->db->from('menu');
        $this->db->join('kategori', 'menu.kategori = kategori.id');
        $this->db->where('kategori.id = 3');
        $this->db->order_by('menu.harga', 'ASC');
        return $this->db->get()->result_array();
    }

    function tea(){
        $this->db->select('menu.id, menu.nama, menu.pilihan , kategori.nama AS kategori , menu.harga, menu.status');
        $this->db->from('menu');
        $this->db->join('kategori', 'menu.kategori = kategori.id');
        $this->db->where('kategori.id = 4');
        $this->db->order_by('menu.harga', 'ASC');
        return $this->db->get()->result_array();
    }

    function traditional(){
        $this->db->select('menu.id, menu.nama, menu.pilihan , kategori.nama AS kategori , menu.harga, menu.status');
        $this->db->from('menu');
        $this->db->join('kategori', 'menu.kategori = kategori.id');
        $this->db->where('kategori.id = 6');
        $this->db->order_by('menu.harga', 'ASC');
        return $this->db->get()->result_array();
    }

    function food(){
        $this->db->select('menu.id, menu.nama, menu.pilihan , kategori.nama AS kategori , menu.harga, menu.status');
        $this->db->from('menu');
        $this->db->join('kategori', 'menu.kategori = kategori.id');
        $this->db->where('kategori.id = 2');
        $this->db->order_by('menu.harga', 'ASC');
        return $this->db->get()->result_array();
    }
}